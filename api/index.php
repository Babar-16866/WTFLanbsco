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

chdir($root);
require $root . '/' . $path . '.php';
