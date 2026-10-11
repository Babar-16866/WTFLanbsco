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
$step    = (int)($_POST['step'] ?? 0);
$lead_id = clean((string)($_POST['lead_id'] ?? ''));
$partial = $step === 1 || $step === 2;

// Brief / audit / feedback pages
$form_pages = [
  'free-audit'      => ['Free audit request', '/free-consultation.php'],
  'free-consultation' => ['Free consultation request', '/free-consultation.php'],
  'website-brief'   => ['Website brief', '/website-brief.php'],
  'marketing-brief' => ['Marketing brief', '/marketing-brief.php'],
  'client-feedback' => ['Client feedback', '/client-feedback.php'],
];
$form_page = $form_pages[$source] ?? null;

// Anything the form sent on top of the standard fields
$standard = ['website', 'name', 'email', 'phone', 'help', 'budget', 'message', 'updates', 'source', 'terms', 'step', 'lead_id'];
$extra = [];
foreach ($_POST as $key => $value) {
  if (in_array($key, $standard, true)) {
    continue;
  }
  $value = is_array($value) ? implode(', ', array_map('strval', $value)) : (string)$value;
  $value = clean($value);
  if ($value !== '') {
    $extra[ucfirst(str_replace('_', ' ', clean((string)$key)))] = $value;
  }
}

$errors = [];
if ($name === '' || mb_strlen($name) < 2) {
  $errors[] = 'name';
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $errors[] = 'email';
}
if ($phone === '' && !$form_page) {
  $errors[] = 'phone';
}
if ($message === '' && !$partial && $step !== 3) {
  $errors[] = 'message';
}

if ($errors && $partial) {
  http_response_code(422);
  header('Content-Type: application/json');
  echo json_encode(['ok' => false]);
  exit;
}

if ($errors) {
  header('Location: ' . ($form_page ? $form_page[1] : '/contact.php') . '?error=1');
  exit;
}

$to = 'info@wtflabsco.com';
$subject = ($form_page ? $form_page[0] : 'New inquiry') . ' from ' . $name . ' — WTF Labs';
if ($step >= 1 && $step <= 3) {
  $subject = ($step === 3 ? 'Completed inquiry' : 'Inquiry step ' . $step . ' of 3') . ' from ' . $name . ' — WTF Labs';
}

$body = ($form_page ? $form_page[0] . ' from the website' : 'New project inquiry from the website') . "\n";
$body .= str_repeat('-', 40) . "\n";
$body .= "Name:    {$name}\n";
$body .= "Email:   {$email}\n";
$body .= "Phone:   {$phone}\n";
$body .= "Help:    " . ($help !== '' ? $help : '—') . "\n";
$body .= "Budget:  " . ($budget !== '' ? $budget : '—') . "\n";
$body .= "Updates: {$updates}\n";
$body .= "Source:  {$source}\n";
if ($step >= 1 && $step <= 3) {
  $body .= "Step:    {$step} of 3" . ($step === 3 ? ' (complete)' : '') . "\n";
  $body .= 'Lead ID: ' . ($lead_id !== '' ? $lead_id : '—') . "\n";
}
foreach ($extra as $label => $value) {
  $body .= "{$label}: {$value}\n";
}
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

if ($partial) {
  header('Content-Type: application/json');
  echo json_encode(['ok' => (bool)$sent]);
  exit;
}

header('Location: /thank-you.php');
exit;
