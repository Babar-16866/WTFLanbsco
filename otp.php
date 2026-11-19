<?php
/**
 * Phone verification for the consultation form.
 * POST action=send   phone=+12015550123 -> sends a 6-digit code by SMS
 * POST action=verify code=123456          -> confirms the code
 */
declare(strict_types=1);

require __DIR__ . '/includes/security.php';

header('Content-Type: application/json; charset=UTF-8');
header('Cache-Control: no-store');
header('X-Robots-Tag: noindex');

function otp_reply(bool $ok, string $error = '', int $status = 200): void
{
  http_response_code($ok ? 200 : $status);
  echo json_encode($ok ? ['ok' => true] : ['ok' => false, 'error' => $error]);
  exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !otp_enabled()) {
  otp_reply(false, 'unavailable', 405);
}
if (!human_ok()) {
  otp_reply(false, 'captcha', 403);
}

$action = (string)($_POST['action'] ?? '');

if ($action === 'send') {
  $phone = (string)($_POST['phone'] ?? '');
  if (!preg_match('/^\+[1-9]\d{6,14}$/', $phone)) {
    otp_reply(false, 'phone', 422);
  }
  $error = otp_send($phone);
  otp_reply($error === '', $error, 422);
}

if ($action === 'verify') {
  $code = (string)($_POST['code'] ?? '');
  if (!preg_match('/^\d{6}$/', $code)) {
    otp_reply(false, 'code', 422);
  }
  $error = otp_check($code);
  otp_reply($error === '', $error, 422);
}

otp_reply(false, 'action', 400);
