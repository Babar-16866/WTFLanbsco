<?php
declare(strict_types=1);

require __DIR__ . '/includes/gmail-mailer.php';

session_start();
header('X-Robots-Tag: noindex, nofollow');

$config = gmail_config();
$scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || (($_SERVER['HTTP_X_FORWARDED_PROTO'] ?? '') === 'https') ? 'https' : 'http';
$redirectUri = $scheme . '://' . ($_SERVER['HTTP_HOST'] ?? 'localhost') . '/oauth-setup';
$key = (string)($_GET['key'] ?? $_SESSION['oauth_setup_key'] ?? '');
$authorized = $config['setup_key'] !== '' && hash_equals($config['setup_key'], $key);

function h(string $value): string {
  return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

$messages = [];
$refreshForEnv = '';

if (!$authorized) {
  http_response_code(403);
  $messages[] = 'Access denied. Open this page with ?key=YOUR_SETUP_KEY from includes/mail-config.php.';
} elseif ($config['client_id'] === '' || $config['client_secret'] === '') {
  $messages[] = 'Enter client_id and client_secret in includes/mail-config.php first, then reload this page.';
} elseif (isset($_GET['code'])) {
  if (!hash_equals((string)($_SESSION['oauth_state'] ?? ''), (string)($_GET['state'] ?? ''))) {
    $messages[] = 'The sign-in session expired. Click Connect Gmail again.';
  } else {
    $result = gmail_http_post('https://oauth2.googleapis.com/token', [
      'code' => (string)$_GET['code'],
      'client_id' => $config['client_id'],
      'client_secret' => $config['client_secret'],
      'redirect_uri' => $redirectUri,
      'grant_type' => 'authorization_code',
    ]);
    if (!$result || empty($result['refresh_token'])) {
      $messages[] = 'Google did not return a refresh token: ' . h(json_encode($result) ?: 'no response');
    } else {
      $data = [
        'refresh_token' => $result['refresh_token'],
        'access_token' => $result['access_token'] ?? '',
        'expires_at' => time() + (int)($result['expires_in'] ?? 3600),
      ];
      if (gmail_save_token_data($data)) {
        $messages[] = 'Gmail connected. Form emails will now be sent from ' . h($config['sender']) . '.';
      } else {
        $refreshForEnv = $result['refresh_token'];
        $messages[] = 'Gmail connected, but this server cannot save files. Add the refresh token below as the GMAIL_REFRESH_TOKEN environment variable.';
      }
    }
  }
  unset($_SESSION['oauth_state']);
} elseif (isset($_GET['test'])) {
  $sent = gmail_send('Test email from the WTF Labs website', "This is a test email sent through Gmail OAuth2.\nTime: " . date('Y-m-d H:i:s T'));
  $messages[] = $sent ? 'Test email sent to ' . h($config['recipient']) . '.' : 'Test email failed. Check that Gmail is connected and the server error log.';
}

if ($authorized) {
  $_SESSION['oauth_setup_key'] = $key;
}

$authUrl = '';
if ($authorized && $config['client_id'] !== '' && $config['client_secret'] !== '') {
  $_SESSION['oauth_state'] = $_SESSION['oauth_state'] ?? bin2hex(random_bytes(16));
  $authUrl = 'https://accounts.google.com/o/oauth2/v2/auth?' . http_build_query([
    'client_id' => $config['client_id'],
    'redirect_uri' => $redirectUri,
    'response_type' => 'code',
    'scope' => 'https://mail.google.com/',
    'access_type' => 'offline',
    'prompt' => 'consent',
    'login_hint' => $config['sender'],
    'state' => $_SESSION['oauth_state'],
  ]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noindex, nofollow">
  <title>Gmail Setup | WTF Labs</title>
</head>
<body>
  <h1>Gmail OAuth2 Setup</h1>
  <?php foreach ($messages as $message): ?>
  <p><strong><?php echo $message; ?></strong></p>
  <?php endforeach; ?>
  <?php if ($refreshForEnv !== ''): ?>
  <p><textarea rows="4" cols="80" readonly><?php echo h($refreshForEnv); ?></textarea></p>
  <?php endif; ?>
  <?php if ($authorized): ?>
  <p>Sender: <?php echo h($config['sender']); ?></p>
  <p>Authorized redirect URI (add this in Google Cloud): <code><?php echo h($redirectUri); ?></code></p>
  <p>Status: <?php echo gmail_is_ready() ? 'Connected' : 'Not connected'; ?></p>
  <?php if ($authUrl !== ''): ?>
  <p><a href="<?php echo h($authUrl); ?>">Connect Gmail</a></p>
  <?php endif; ?>
  <?php if (gmail_is_ready()): ?>
  <p><a href="?key=<?php echo h($key); ?>&amp;test=1">Send a test email</a></p>
  <?php endif; ?>
  <?php endif; ?>
</body>
</html>
