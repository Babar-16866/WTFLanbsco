<?php
declare(strict_types=1);

ini_set('display_errors', '0');

$sites = [
  'digital-scribblers' => 'https://digitalscribblers.com/',
  'minaa-b' => 'https://www.minaab.com/',
  'digital-nomad-coach' => 'https://www.digitalnomad.coach/',
  'bruvi' => 'https://bruvi.com/',
  'artisaire' => 'https://artisaire.com/',
  'kirrin-finch' => 'https://kirrinfinch.com/',
  'southern-novelscents' => 'https://www.southernnovelscents.com/',
  'bitty-balm' => 'https://www.bittybalm.com/',
  'black-diamond-limo' => 'https://black-diamond-limo.webflow.io/',
  'refresh-renovations' => 'https://www.refreshrenovations.com.au/',
  'va-loan-nerd' => 'https://www.thevaloannerd.com/',
  'bestie-media' => 'https://www.bestiemedia.co/',
];

$slug = (string)($_GET['site'] ?? '');
if (!isset($sites[$slug])) {
  http_response_code(404);
  exit;
}

$home = $sites[$slug];
$homeHost = (string)parse_url($home, PHP_URL_HOST);
$path = (string)($_GET['path'] ?? '/');
if ($path === '' || $path[0] !== '/' || str_starts_with($path, '//')) {
  $path = '/';
}
$url = 'https://' . $homeHost . $path;

$cacheFile = sys_get_temp_dir() . '/wtf-live-' . md5($url) . '.html';
$html = '';
$finalUrl = $url;
if (is_file($cacheFile) && time() - filemtime($cacheFile) < 900) {
  $html = (string)file_get_contents($cacheFile);
} else {
  $ch = curl_init($url);
  curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_MAXREDIRS => 5,
    CURLOPT_CONNECTTIMEOUT => 4,
    CURLOPT_TIMEOUT => 8,
    CURLOPT_ENCODING => '',
    CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0 Safari/537.36',
    CURLOPT_HTTPHEADER => ['Accept: text/html,application/xhtml+xml', 'Accept-Language: en-US,en;q=0.9'],
  ]);
  $html = (string)curl_exec($ch);
  if ($html === '' && in_array(curl_errno($ch), [35, 51, 58, 60, 77], true)) {
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    $html = (string)curl_exec($ch);
  }
  $finalUrl = (string)curl_getinfo($ch, CURLINFO_EFFECTIVE_URL) ?: $url;
  $status = (int)curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
  $errno = curl_errno($ch);
  if ($html === '' || $status >= 400) {
    header('X-Preview-Status: ' . $status . '/' . $errno);
    header('Content-Type: text/html; charset=UTF-8');
    header('Cache-Control: no-store');
    echo '<!doctype html><html><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><style>html,body{margin:0;background:#10231B}img{display:block;width:100%;height:auto}</style></head><body><img src="/assets/images/work-live-' . htmlspecialchars($slug, ENT_QUOTES) . '.webp" alt=""></body></html>';
    exit;
  }
  $finalHost = (string)parse_url($finalUrl, PHP_URL_HOST);
  $base = 'https://' . $finalHost . '/';
  $html = preg_replace('/<meta[^>]+http-equiv=["\']?(content-security-policy|x-frame-options)["\']?[^>]*>/i', '', $html);
  $html = preg_replace('/<base\b[^>]*>/i', '', $html);
  $inject = '<base href="' . htmlspecialchars($base, ENT_QUOTES) . '">'
    . '<style>div.needsclick[class*="kl-private-reset-css"][role="dialog"],div.needsclick[class*="kl-private-reset-css"][aria-modal]{display:none!important}</style>'
    . '<script>new MutationObserver(function(){document.querySelectorAll("div.needsclick[class*=kl-private-reset-css]").forEach(function(e){var c=getComputedStyle(e);if(c.position==="fixed"&&e.offsetWidth>=innerWidth*0.9)e.style.setProperty("display","none","important")})}).observe(document.documentElement,{childList:true,subtree:true});</script>'
    . '<script>(function(){var s=' . json_encode($slug) . ',h=' . json_encode($finalHost) . ';'
    . 'document.addEventListener("click",function(e){var a=e.target.closest&&e.target.closest("a[href]");if(!a||a.target==="_blank")return;'
    . 'var u;try{u=new URL(a.getAttribute("href"),document.baseURI)}catch(x){return}'
    . 'if(u.host!==h||/^(mailto|tel):/.test(u.protocol))return;e.preventDefault();'
    . 'location.href="/live-preview?site="+encodeURIComponent(s)+"&path="+encodeURIComponent(u.pathname+u.search)},true);})();</script>';
  $html = preg_replace('/<head\b[^>]*>/i', '$0' . $inject, $html, 1, $count);
  if (!$count) {
    $html = $inject . $html;
  }
  @file_put_contents($cacheFile, $html);
}

header('Content-Type: text/html; charset=UTF-8');
header('Cache-Control: public, max-age=300');
header('X-Robots-Tag: noindex');
echo $html;
