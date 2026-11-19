<?php
/**
 * reCAPTCHA checks and Firebase phone verification helpers.
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
    curl_close($ch);
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

/* Firebase phone verification */

function otp_enabled(): bool
{
  return security_value('firebase_api_key') !== '' && security_value('firebase_project_id') !== '';
}

function otp_client_config(): array
{
  $project = security_value('firebase_project_id');
  return [
    'apiKey' => security_value('firebase_api_key'),
    'authDomain' => security_value('firebase_auth_domain') !== '' ? security_value('firebase_auth_domain') : $project . '.firebaseapp.com',
    'projectId' => $project,
    'appId' => security_value('firebase_app_id'),
  ];
}

function otp_base64url(string $value): string
{
  return (string)base64_decode(strtr($value, '-_', '+/') . str_repeat('=', (4 - strlen($value) % 4) % 4));
}

function otp_certificates(): array
{
  $cache = rtrim(sys_get_temp_dir(), '/\\') . '/wtf-firebase-certs.json';
  if (is_file($cache) && filemtime($cache) > time() - 3600) {
    $data = json_decode((string)file_get_contents($cache), true);
    if (is_array($data) && $data) {
      return $data;
    }
  }
  $raw = security_http('https://www.googleapis.com/robot/v1/metadata/x509/securetoken@system.gserviceaccount.com');
  $data = json_decode((string)$raw, true);
  if (!is_array($data) || !$data) {
    return [];
  }
  @file_put_contents($cache, (string)$raw);
  return $data;
}

/**
 * Validates a Firebase ID token and returns the verified phone number (E.164), or null.
 */
function otp_verified_phone(string $token): ?string
{
  $parts = explode('.', $token);
  if (count($parts) !== 3) {
    return null;
  }
  $header = json_decode(otp_base64url($parts[0]), true);
  $payload = json_decode(otp_base64url($parts[1]), true);
  if (!is_array($header) || !is_array($payload) || ($header['alg'] ?? '') !== 'RS256') {
    return null;
  }
  $certs = otp_certificates();
  $cert = $certs[(string)($header['kid'] ?? '')] ?? null;
  if (!$cert) {
    return null;
  }
  $signature = otp_base64url($parts[2]);
  if (openssl_verify($parts[0] . '.' . $parts[1], $signature, $cert, OPENSSL_ALGO_SHA256) !== 1) {
    return null;
  }
  $project = security_value('firebase_project_id');
  $now = time();
  if (($payload['aud'] ?? '') !== $project
    || ($payload['iss'] ?? '') !== 'https://securetoken.google.com/' . $project
    || (int)($payload['exp'] ?? 0) < $now
    || (int)($payload['iat'] ?? 0) > $now + 300
    || empty($payload['phone_number'])) {
    return null;
  }
  return (string)$payload['phone_number'];
}
