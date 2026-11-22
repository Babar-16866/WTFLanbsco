<?php
/**
 * reCAPTCHA checks and SMS code phone verification helpers.
 */

function security_config(): array
{
  static $config = null;
  if ($config === null) {
    $file = __DIR__ . '/security-config.php';
    $loaded = is_file($file) ? require $file : [];
    $config = is_array($loaded) ? $loaded : [];
  }
  return $config;
}

function security_value(string $key): string
{
  return trim((string)(security_config()[$key] ?? ''));
}

function security_http(string $url, ?array $post = null): ?string
{
  if (function_exists('curl_init')) {
    $ch = curl_init($url);
    $options = [
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_TIMEOUT => 10,
      CURLOPT_CONNECTTIMEOUT => 5,
    ];
    if ($post !== null) {
      $options[CURLOPT_POST] = true;
      $options[CURLOPT_POSTFIELDS] = http_build_query($post);
    }
    curl_setopt_array($ch, $options);
    $result = curl_exec($ch);
    $status = (int)curl_getinfo($ch, CURLINFO_HTTP_CODE);
    return ($result !== false && $status < 400) ? (string)$result : null;
  }
  $context = ['http' => ['timeout' => 10, 'ignore_errors' => false]];
  if ($post !== null) {
    $context['http']['method'] = 'POST';
    $context['http']['header'] = 'Content-Type: application/x-www-form-urlencoded';
    $context['http']['content'] = http_build_query($post);
  }
  $result = @file_get_contents($url, false, stream_context_create($context));
  return $result === false ? null : $result;
}

function security_session(): void
{
  if (session_status() === PHP_SESSION_NONE) {
    session_start();
  }
}

/* reCAPTCHA v2 checkbox */

function recaptcha_enabled(): bool
{
  return security_value('recaptcha_site_key') !== '' && security_value('recaptcha_secret_key') !== '';
}

function recaptcha_widget(): void
{
  if (!recaptcha_enabled()) {
    return;
  }
  static $scriptAdded = false;
  if (!$scriptAdded) {
    $scriptAdded = true;
    echo '<script src="https://www.google.com/recaptcha/api.js" async defer></script>' . "\n";
  }
  echo '<div class="form-captcha"><div class="g-recaptcha" data-sitekey="' . htmlspecialchars(security_value('recaptcha_site_key'), ENT_QUOTES) . '"></div>';
  echo '<p class="form-captcha-error" hidden>Please confirm you are not a robot.</p></div>' . "\n";
}

function recaptcha_verify(string $token): bool
{
  if (!recaptcha_enabled()) {
    return true;
  }
  if ($token === '') {
    return false;
  }
  $raw = security_http('https://www.google.com/recaptcha/api/siteverify', [
    'secret' => security_value('recaptcha_secret_key'),
    'response' => $token,
    'remoteip' => (string)($_SERVER['REMOTE_ADDR'] ?? ''),
  ]);
  $data = json_decode((string)$raw, true);
  return is_array($data) && !empty($data['success']);
}

/* Verified visitor flag for the consultation form (checked once, before the form starts) */

const HUMAN_SESSION_TTL = 7200;

function human_mark(): void
{
  security_session();
  $_SESSION['cq_human'] = time();
}

function human_ok(): bool
{
  if (!recaptcha_enabled()) {
    return true;
  }
  security_session();
  $at = (int)($_SESSION['cq_human'] ?? 0);
  return $at > 0 && $at + HUMAN_SESSION_TTL > time();
}

/* SMS code phone verification (codes are sent by Stytch) */

const OTP_MAX_SENDS = 5;
const OTP_SEND_WINDOW = 3600;
const OTP_RESEND_WAIT = 30;
const OTP_MAX_ATTEMPTS = 5;
const OTP_STATE_TTL = 7200;
const OTP_COOKIE = 'cq_otp';

function otp_enabled(): bool
{
  return security_value('stytch_project_id') !== '' && security_value('stytch_secret') !== '';
}

/*
 * Verification progress is kept in a signed cookie instead of the PHP session,
 * so it works the same on regular hosting and on serverless hosting.
 */
function otp_state_sign(string $payload): string
{
  return hash_hmac('sha256', $payload, 'wtf-otp|' . security_value('stytch_secret'));
}

function otp_state(): array
{
  $raw = (string)($_COOKIE[OTP_COOKIE] ?? '');
  $parts = explode('.', $raw);
  if (count($parts) !== 2 || !hash_equals(otp_state_sign($parts[0]), $parts[1])) {
    return [];
  }
  $state = json_decode((string)base64_decode(strtr($parts[0], '-_', '+/'), true), true);
  if (!is_array($state) || (int)($state['exp'] ?? 0) < time()) {
    return [];
  }
  return $state;
}

function otp_state_save(array $state): void
{
  $state['exp'] = time() + OTP_STATE_TTL;
  $payload = rtrim(strtr(base64_encode((string)json_encode($state)), '+/', '-_'), '=');
  $value = $payload . '.' . otp_state_sign($payload);
  $secure = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
    || strtolower((string)($_SERVER['HTTP_X_FORWARDED_PROTO'] ?? '')) === 'https';
  setcookie(OTP_COOKIE, $value, [
    'expires' => $state['exp'],
    'path' => '/',
    'secure' => $secure,
    'httponly' => true,
    'samesite' => 'Lax',
  ]);
  $_COOKIE[OTP_COOKIE] = $value;
}

function otp_request(string $path, array $body): array
{
  $project = security_value('stytch_project_id');
  $base = strpos($project, 'project-live-') === 0 ? 'https://api.stytch.com' : 'https://test.stytch.com';
  $ch = curl_init($base . $path);
  curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => (string)json_encode($body),
    CURLOPT_HTTPHEADER => ['Content-Type: application/json'],
    CURLOPT_USERPWD => $project . ':' . security_value('stytch_secret'),
    CURLOPT_TIMEOUT => 15,
    CURLOPT_CONNECTTIMEOUT => 5,
  ]);
  $raw = curl_exec($ch);
  $status = (int)curl_getinfo($ch, CURLINFO_HTTP_CODE);
  $data = json_decode((string)$raw, true);
  return ['status' => $status, 'data' => is_array($data) ? $data : []];
}

/**
 * Sends a 6-digit code to the number (E.164). Returns '' on success or an error key.
 */
function otp_send(string $phone): string
{
  $state = otp_state();
  $now = time();
  $sends = array_values(array_filter((array)($state['sends'] ?? []), static fn($t) => (int)$t > $now - OTP_SEND_WINDOW));
  if (count($sends) >= OTP_MAX_SENDS) {
    return 'limit';
  }
  if ($sends && max($sends) > $now - OTP_RESEND_WAIT) {
    return 'wait';
  }
  $result = otp_request('/v1/otps/sms/login_or_create', [
    'phone_number' => $phone,
    'expiration_minutes' => 10,
    'attributes' => [
      'ip_address' => (string)($_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'] ?? ''),
      'user_agent' => substr((string)($_SERVER['HTTP_USER_AGENT'] ?? ''), 0, 300),
    ],
  ]);
  if ($result['status'] !== 200 || empty($result['data']['phone_id'])) {
    @error_log('WTF Labs OTP send failed: ' . (string)($result['data']['error_type'] ?? $result['status']));
    return ($result['data']['error_type'] ?? '') === 'invalid_phone_number' ? 'phone' : 'send';
  }
  $sends[] = $now;
  otp_state_save([
    'sends' => $sends,
    'pending' => ['phone' => $phone, 'id' => (string)$result['data']['phone_id'], 'tries' => 0],
  ]);
  return '';
}

/**
 * Checks the code for the pending number. Returns '' on success or an error key.
 */
function otp_check(string $code): string
{
  $state = otp_state();
  $pending = $state['pending'] ?? null;
  if (!is_array($pending) || empty($pending['id'])) {
    return 'expired';
  }
  if ((int)$pending['tries'] >= OTP_MAX_ATTEMPTS) {
    return 'limit';
  }
  $state['pending']['tries'] = (int)$pending['tries'] + 1;
  otp_state_save($state);
  $result = otp_request('/v1/otps/authenticate', ['method_id' => $pending['id'], 'code' => $code]);
  if ($result['status'] !== 200) {
    return 'code';
  }
  unset($state['pending']);
  $state['verified'] = (string)$pending['phone'];
  otp_state_save($state);
  return '';
}

function otp_verified_phone(): string
{
  return (string)(otp_state()['verified'] ?? '');
}
