<?php
/**
 * Simple contact form mailer.
 * Expects POST from contact / promo forms → emails team → redirects to thank-you page.
 */
declare(strict_types=1);

require __DIR__ . '/includes/gmail-mailer.php';

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

$mailConfig = gmail_config();
$to = $mailConfig['recipient'];
$form_titles = [
  'home-contact'      => 'Inquiry',
  'free-consultation' => 'Free Consultation',
  'free-audit'        => 'Free Consultation',
  'promo-popup'       => 'New Lead',
  'contact-page'      => 'Contact',
  'website-brief'     => 'Website Brief',
  'marketing-brief'   => 'Marketing Brief',
  'client-feedback'   => 'Client Feedback',
];
$form_title = $form_titles[$source] ?? 'Inquiry';
$step_note = ($step === 1 || $step === 2) ? ' (Step ' . $step . ' of 3)' : '';
$subject = $form_title . $step_note . ' - ' . $name;

$skip_fields = ['website', 'source', 'step', 'lead_id', 'terms', '_labels'];
$label_pairs = json_decode((string)($_POST['_labels'] ?? ''), true);
if (!is_array($label_pairs)) {
  $label_pairs = [];
  foreach (array_keys($_POST) as $key) {
    $label_pairs[] = [(string)$key, ucfirst(str_replace('_', ' ', (string)$key))];
  }
}
$lines = [];
$seen = [];
foreach ($label_pairs as $pair) {
  if (!is_array($pair) || count($pair) < 2) {
    continue;
  }
  $key = (string)$pair[0];
  if ($key === '' || isset($seen[$key]) || in_array($key, $skip_fields, true) || !array_key_exists($key, $_POST)) {
    continue;
  }
  if ($key === 'name' && (isset($_POST['first_name']) || isset($_POST['last_name']))) {
    continue;
  }
  $seen[$key] = true;
  $value = $_POST[$key];
  $value = is_array($value) ? implode(', ', array_map('strval', $value)) : (string)$value;
  $value = clean($value);
  if ($value === '') {
    continue;
  }
  $label = clean((string)$pair[1]);
  $lines[] = ($label !== '' ? $label : $key) . "\n" . $value;
}

$body = $form_title . $step_note . "\n";
$body .= str_repeat('-', 40) . "\n\n";
$body .= implode("\n\n", $lines) . "\n";

$fromHeader = $mailConfig['sender'];
$headers = [
  'MIME-Version: 1.0',
  'Content-Type: text/plain; charset=UTF-8',
  'From: WTF Labs <' . $fromHeader . '>',
  'Reply-To: ' . $name . ' <' . $email . '>',
  'X-Mailer: PHP/' . phpversion(),
];

$sent = gmail_is_ready() && gmail_send($subject, $body, $name, $email);
if (!$sent) {
  $sent = @mail($to, '=?UTF-8?B?' . base64_encode($subject) . '?=', $body, implode("\r\n", $headers));
}

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
