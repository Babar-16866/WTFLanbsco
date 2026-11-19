<?php
/**
 * Confirms the reCAPTCHA shown before the consultation form starts.
 * POST g-recaptcha-response=<token> -> {"ok": true|false}
 */
declare(strict_types=1);

require __DIR__ . '/includes/security.php';

header('Content-Type: application/json; charset=UTF-8');
header('Cache-Control: no-store');
header('X-Robots-Tag: noindex');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  http_response_code(405);
  echo json_encode(['ok' => false]);
  exit;
}

if (!recaptcha_verify((string)($_POST['g-recaptcha-response'] ?? ''))) {
  http_response_code(403);
  echo json_encode(['ok' => false]);
  exit;
}

human_mark();
echo json_encode(['ok' => true]);
