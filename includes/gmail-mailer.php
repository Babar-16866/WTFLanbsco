<?php
declare(strict_types=1);

const GMAIL_TOKEN_FILE = __DIR__ . '/gmail-token.php';

function gmail_config(): array {
  $config = require __DIR__ . '/mail-config.php';
  $env = [
    'client_id'     => getenv('GMAIL_CLIENT_ID'),
    'client_secret' => getenv('GMAIL_CLIENT_SECRET'),
    'sender'        => getenv('GMAIL_SENDER'),
    'recipient'     => getenv('MAIL_RECIPIENT'),
  ];
  foreach ($env as $key => $value) {
    if (is_string($value) && $value !== '') {
      $config[$key] = $value;
    }
  }
  return $config;
}

function gmail_token_data(): array {
  $data = is_file(GMAIL_TOKEN_FILE) ? (require GMAIL_TOKEN_FILE) : [];
  if (!is_array($data)) {
    $data = [];
  }
  $envRefresh = getenv('GMAIL_REFRESH_TOKEN');
  if (is_string($envRefresh) && $envRefresh !== '') {
    $data['refresh_token'] = $envRefresh;
  }
  return $data;
}

function gmail_save_token_data(array $data): bool {
  $php = "<?php\nreturn " . var_export($data, true) . ";\n";
  return @file_put_contents(GMAIL_TOKEN_FILE, $php, LOCK_EX) !== false;
}

function gmail_is_ready(): bool {
  $config = gmail_config();
  $token = gmail_token_data();
  return $config['client_id'] !== '' && $config['client_secret'] !== '' && !empty($token['refresh_token']);
}

function gmail_http_post(string $url, array $fields): ?array {
  $body = http_build_query($fields);
  if (function_exists('curl_init')) {
    $ch = curl_init($url);
    curl_setopt_array($ch, [
      CURLOPT_POST => true,
      CURLOPT_POSTFIELDS => $body,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_TIMEOUT => 20,
      CURLOPT_HTTPHEADER => ['Content-Type: application/x-www-form-urlencoded'],
    ]);
    $response = curl_exec($ch);
    curl_close($ch);
  } else {
    $context = stream_context_create(['http' => [
      'method' => 'POST',
      'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
      'content' => $body,
      'timeout' => 20,
      'ignore_errors' => true,
    ]]);
    $response = @file_get_contents($url, false, $context);
  }
  if (!is_string($response) || $response === '') {
    return null;
  }
  $decoded = json_decode($response, true);
  return is_array($decoded) ? $decoded : null;
}

function gmail_access_token(): ?string {
  $config = gmail_config();
  $data = gmail_token_data();
  if (!empty($data['access_token']) && !empty($data['expires_at']) && $data['expires_at'] > time() + 60) {
    return $data['access_token'];
  }
  if (empty($data['refresh_token'])) {
    return null;
  }
  $result = gmail_http_post('https://oauth2.googleapis.com/token', [
    'client_id' => $config['client_id'],
    'client_secret' => $config['client_secret'],
    'refresh_token' => $data['refresh_token'],
    'grant_type' => 'refresh_token',
  ]);
  if (!$result || empty($result['access_token'])) {
    @error_log('WTF Labs Gmail token refresh failed: ' . json_encode($result));
    return null;
  }
  $data['access_token'] = $result['access_token'];
  $data['expires_at'] = time() + (int)($result['expires_in'] ?? 3600);
  gmail_save_token_data($data);
  return $data['access_token'];
}

function gmail_smtp_read($socket): string {
  $response = '';
  while (($line = fgets($socket, 515)) !== false) {
    $response .= $line;
    if (strlen($line) < 4 || $line[3] !== '-') {
      break;
    }
  }
  return $response;
}

function gmail_smtp_command($socket, string $command, array $expect): bool {
  if ($command !== '') {
    fwrite($socket, $command . "\r\n");
  }
  $response = gmail_smtp_read($socket);
  $code = (int)substr($response, 0, 3);
  if (!in_array($code, $expect, true)) {
    @error_log('WTF Labs SMTP error after "' . strtok($command, ' ') . '": ' . trim($response));
    return false;
  }
  return true;
}

function gmail_encode_header(string $value): string {
  return preg_match('/[^\x20-\x7E]/', $value) ? '=?UTF-8?B?' . base64_encode($value) . '?=' : $value;
}

function gmail_build_body(string $body, array $attachments, array &$headers): string {
  if (!$attachments) {
    $headers[] = 'Content-Type: text/plain; charset=UTF-8';
    $headers[] = 'Content-Transfer-Encoding: base64';
    return chunk_split(base64_encode($body), 76, "\r\n");
  }
  $boundary = 'b' . bin2hex(random_bytes(12));
  $headers[] = 'Content-Type: multipart/mixed; boundary="' . $boundary . '"';
  $out = '--' . $boundary . "\r\n" . "Content-Type: text/plain; charset=UTF-8\r\nContent-Transfer-Encoding: base64\r\n\r\n" . chunk_split(base64_encode($body), 76, "\r\n");
  foreach ($attachments as $file) {
    $name = str_replace(['"', "\r", "\n"], '', (string)$file['name']);
    $out .= '--' . $boundary . "\r\n";
    $out .= 'Content-Type: ' . $file['type'] . '; name="' . $name . "\"\r\n";
    $out .= "Content-Transfer-Encoding: base64\r\n";
    $out .= 'Content-Disposition: attachment; filename="' . $name . "\"\r\n\r\n";
    $out .= chunk_split(base64_encode((string)$file['data']), 76, "\r\n");
  }
  return $out . '--' . $boundary . "--\r\n";
}

function gmail_send(string $subject, string $body, string $replyName = '', string $replyEmail = '', array $attachments = []): bool {
  $config = gmail_config();
  $token = gmail_access_token();
  if ($token === null) {
    return false;
  }
  $from = $config['sender'];
  $to = $config['recipient'];

  $socket = @stream_socket_client('ssl://smtp.gmail.com:465', $errno, $errstr, 20);
  if (!$socket) {
    @error_log('WTF Labs SMTP connect failed: ' . $errstr);
    return false;
  }
  stream_set_timeout($socket, 20);

  $host = preg_replace('/[^a-z0-9.-]/i', '', (string)($_SERVER['HTTP_HOST'] ?? 'localhost')) ?: 'localhost';
  $auth = base64_encode("user={$from}\x01auth=Bearer {$token}\x01\x01");

  $ok = gmail_smtp_command($socket, '', [220])
    && gmail_smtp_command($socket, 'EHLO ' . $host, [250])
    && gmail_smtp_command($socket, 'AUTH XOAUTH2 ' . $auth, [235])
    && gmail_smtp_command($socket, 'MAIL FROM:<' . $from . '>', [250])
    && gmail_smtp_command($socket, 'RCPT TO:<' . $to . '>', [250, 251])
    && gmail_smtp_command($socket, 'DATA', [354]);

  if ($ok) {
    $headers = [
      'Date: ' . date('r'),
      'From: ' . gmail_encode_header($config['sender_name']) . ' <' . $from . '>',
      'To: <' . $to . '>',
      'Subject: ' . gmail_encode_header($subject),
      'Message-ID: <' . bin2hex(random_bytes(12)) . '@' . substr(strrchr($from, '@'), 1) . '>',
      'MIME-Version: 1.0',
    ];
    if ($replyEmail !== '' && filter_var($replyEmail, FILTER_VALIDATE_EMAIL)) {
      $headers[] = 'Reply-To: ' . ($replyName !== '' ? gmail_encode_header($replyName) . ' ' : '') . '<' . $replyEmail . '>';
    }
    $content = gmail_build_body($body, $attachments, $headers);
    $message = implode("\r\n", $headers) . "\r\n\r\n" . $content;
    $ok = gmail_smtp_command($socket, $message . "\r\n.", [250]);
  }

  fwrite($socket, "QUIT\r\n");
  fclose($socket);
  return $ok;
}
