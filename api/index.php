<?php
$root = dirname(__DIR__);
$path = trim((string) parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH), '/');
$path = preg_replace('/\.php$/', '', $path);

if ($path === '') {
  $path = 'index';
}

if (!preg_match('/^[a-z0-9-]+$/', $path) || !is_file($root . '/' . $path . '.php')) {
  http_response_code(404);
  header('Content-Type: text/plain; charset=UTF-8');
  echo '404 Not Found';
  exit;
}

if (($_SERVER['REQUEST_METHOD'] ?? 'GET') === 'GET' && !in_array($path, ['send-mail', 'oauth-setup', 'live-preview'], true)) {
  header('Cache-Control: public, max-age=0, s-maxage=300, stale-while-revalidate=86400');
}

chdir($root);
require $root . '/' . $path . '.php';
