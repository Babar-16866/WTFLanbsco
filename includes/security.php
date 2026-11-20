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

/* SMS code phone verification (codes are sent through textbee.dev) */

const OTP_MAX_SENDS = 5;
const OTP_SEND_WINDOW = 3600;
const OTP_RESEND_WAIT = 30;
const OTP_MAX_ATTEMPTS = 5;
const OTP_CODE_TTL = 600;

function otp_enabled(): bool
{
  return security_value('textbee_api_key') !== '' && security_value('textbee_device_id') !== '';
}

function otp_sms(string $phone, string $message): bool
{
  $url = 'https://api.textbee.dev/api/v1/gateway/devices/' . rawurlencode(security_value('textbee_device_id')) . '/send-sms';
  $ch = curl_init($url);
  curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => (string)json_encode(['recipients' => [$phone], 'message' => $message]),
    CURLOPT_HTTPHEADER => ['Content-Type: application/json', 'x-api-key: ' . security_value('textbee_api_key')],
    CURLOPT_TIMEOUT => 15,
    CURLOPT_CONNECTTIMEOUT => 5,
  ]);
  $raw = curl_exec($ch);
  $status = (int)curl_getinfo($ch, CURLINFO_HTTP_CODE);
  if ($status < 200 || $status >= 300) {
    @error_log('WTF Labs OTP send failed: HTTP ' . $status . ' ' . substr((string)$raw, 0, 300));
    return false;
  }
  return true;
}

/**
 * Sends a 6-digit code to the number (E.164). Returns '' on success or an error key.
 */
function otp_send(string $phone): string
{
  security_session();
  $now = time();
  $sends = array_values(array_filter((array)($_SESSION['otp_sends'] ?? []), static fn($t) => (int)$t > $now - OTP_SEND_WINDOW));
  if (count($sends) >= OTP_MAX_SENDS) {
    return 'limit';
  }
  if ($sends && max($sends) > $now - OTP_RESEND_WAIT) {
    return 'wait';
  }
  $code = str_pad((string)random_int(0, 999999), 6, '0', STR_PAD_LEFT);
  if (!otp_sms($phone, 'Your WTF Labs verification code is ' . $code . '. It expires in 10 minutes.')) {
    return 'send';
  }
  $sends[] = $now;
  $_SESSION['otp_sends'] = $sends;
  $_SESSION['otp_pending'] = [
    'phone' => $phone,
    'hash' => password_hash($code, PASSWORD_DEFAULT),
    'expires' => $now + OTP_CODE_TTL,
    'tries' => 0,
  ];
  unset($_SESSION['otp_verified']);
  return '';
}

/**
 * Checks the code for the pending number. Returns '' on success or an error key.
 */
function otp_check(string $code): string
{
  security_session();
  $pending = $_SESSION['otp_pending'] ?? null;
  if (!is_array($pending) || empty($pending['hash'])) {
    return 'expired';
  }
  if ((int)$pending['expires'] < time()) {
    unset($_SESSION['otp_pending']);
    return 'expired';
  }
  if ((int)$pending['tries'] >= OTP_MAX_ATTEMPTS) {
    return 'limit';
  }
  $_SESSION['otp_pending']['tries'] = (int)$pending['tries'] + 1;
  if (!password_verify($code, (string)$pending['hash'])) {
    return 'code';
  }
  $_SESSION['otp_verified'] = (string)$pending['phone'];
  unset($_SESSION['otp_pending']);
  return '';
}

function otp_verified_phone(): string
{
  security_session();
  return (string)($_SESSION['otp_verified'] ?? '');
}
