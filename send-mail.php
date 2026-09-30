<?php
/**
 * Simple contact form mailer.
 * Expects POST from contact / promo forms → emails team → redirects to thank-you page.
 */
declare(strict_types=1);

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  header('Location: /contact.php');
  exit;
}

// Honeypot — bots fill this; humans leave it empty
if (!empty($_POST['website'])) {
  header('Location: /thank-you.php');
  exit;
}

function clean(string $value): string {
  return trim(strip_tags($value));
}

$name    = clean((string)($_POST['name'] ?? ''));
$email   = clean((string)($_POST['email'] ?? ''));
$phone   = clean((string)($_POST['phone'] ?? ''));
$help    = clean((string)($_POST['help'] ?? ''));
$budget  = clean((string)($_POST['budget'] ?? ''));
$message = clean((string)($_POST['message'] ?? ''));
$updates = !empty($_POST['updates']) ? 'Yes' : 'No';
$source  = clean((string)($_POST['source'] ?? 'website'));

$errors = [];
if ($name === '' || mb_strlen($name) < 2) {
  $errors[] = 'name';
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $errors[] = 'email';
}
if ($phone === '') {
  $errors[] = 'phone';
}
if ($message === '') {
  $errors[] = 'message';
}

if ($errors) {
  header('Location: /contact.php?error=1');
  exit;
}

$to = 'hello@wtflabs.com';
$subject = 'New inquiry from ' . $name . ' — WTF Labs';

$body = "New project inquiry from the website\n";
$body .= str_repeat('-', 40) . "\n";
$body .= "Name:    {$name}\n";
$body .= "Email:   {$email}\n";
$body .= "Phone:   {$phone}\n";
$body .= "Help:    " . ($help !== '' ? $help : '—') . "\n";
$body .= "Budget:  " . ($budget !== '' ? $budget : '—') . "\n";
$body .= "Updates: {$updates}\n";
$body .= "Source:  {$source}\n";
$body .= str_repeat('-', 40) . "\n";
$body .= "Message:\n{$message}\n";
$body .= str_repeat('-', 40) . "\n";
$body .= 'IP: ' . ($_SERVER['REMOTE_ADDR'] ?? 'unknown') . "\n";
$body .= 'Time: ' . date('Y-m-d H:i:s T') . "\n";

$fromHeader = 'noreply@wtflabs.com';
$headers = [
  'MIME-Version: 1.0',
  'Content-Type: text/plain; charset=UTF-8',
  'From: WTF Labs <' . $fromHeader . '>',
  'Reply-To: ' . $name . ' <' . $email . '>',
  'X-Mailer: PHP/' . phpversion(),
];

$sent = @mail($to, '=?UTF-8?B?' . base64_encode($subject) . '?=', $body, implode("\r\n", $headers));

if (!$sent) {
  // Still send user to thank-you so UX doesn't break; log locally if possible
  @error_log('WTF Labs mail failed for ' . $email);
}

header('Location: /thank-you.php');
exit;
