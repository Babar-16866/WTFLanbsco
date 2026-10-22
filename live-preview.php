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
  'excel-remodeling' => 'https://www.excelremodeling.net/',
  'austin-pressure-washing-and-roof-cleanin' => 'https://austinroofcleaning.net/',
  'summit-pool-and-spa' => 'https://summitpoolservice.com/',
  'asa-pools-and-hot-tubs' => 'https://asapoolservice.com/',
  'tri-miami-handyman-services' => 'https://trimiamihandymanservices.com/',
  'extreme-handyman-services' => 'https://www.theextremehandyman.com/',
  'mns-plumbing' => 'https://www.mnsplumbing.com/',
  'tanous-hvac' => 'https://www.tanousnj.com/',
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

$cacheFile = sys_get_temp_dir() . '/wtf-live2-' . md5($url) . '.html';
$html = '';
$finalUrl = $url;
if (is_file($cacheFile) && time() - filemtime($cacheFile) < 900) {
  $html = (string)file_get_contents($cacheFile);
} else {
  $fetch = function (string $target, int $timeout): array {
    $ch = curl_init($target);
    curl_setopt_array($ch, [
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_MAXREDIRS => 5,
      CURLOPT_CONNECTTIMEOUT => 4,
      CURLOPT_TIMEOUT => $timeout,
      CURLOPT_ENCODING => '',
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_2TLS,
      CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36',
      CURLOPT_HTTPHEADER => [
        'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8',
        'Accept-Language: en-US,en;q=0.9',
        'Cache-Control: no-cache',
        'Pragma: no-cache',
        'Upgrade-Insecure-Requests: 1',
        'Sec-Ch-Ua: "Chromium";v="130", "Google Chrome";v="130", "Not?A_Brand";v="99"',
        'Sec-Ch-Ua-Mobile: ?0',
        'Sec-Ch-Ua-Platform: "Windows"',
        'Sec-Fetch-Dest: document',
        'Sec-Fetch-Mode: navigate',
        'Sec-Fetch-Site: none',
        'Sec-Fetch-User: ?1',
      ],
    ]);
    $body = (string)curl_exec($ch);
    if ($body === '' && in_array(curl_errno($ch), [35, 51, 58, 60, 77], true)) {
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
      $body = (string)curl_exec($ch);
    }
    $status = (int)curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
    $final = (string)curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
    $ok = $body !== '' && $status < 400 && stripos($body, 'cf-challenge') === false && stripos($body, 'challenge-platform') === false && stripos($body, '<title>Just a moment') === false;
    return [$ok ? $body : '', $final];
  };

  [$html, $finalUrl] = $fetch($url, 7);
  if ($html === '') {
    [$html] = $fetch('https://web.archive.org/web/2id_/' . $url, 12);
    $finalUrl = $url;
    if ($html !== '') {
      $html = preg_replace('#https?://web.archive.org/web/\d+(?:[a-z]{2}_)?/#i', '', $html);
    }
  }
  if ($html === '') {
    http_response_code(502);
    exit;
  }
  if ($finalUrl === '' || str_contains($finalUrl, 'web.archive.org')) {
    $finalUrl = $url;
  }
  $finalHost = (string)parse_url($finalUrl, PHP_URL_HOST);
  $base = 'https://' . $finalHost . '/';
  $html = preg_replace('/<meta[^>]+http-equiv=["\']?(content-security-policy|x-frame-options)["\']?[^>]*>/i', '', $html);
  $html = preg_replace('/<base\b[^>]*>/i', '', $html);
  $abs = function (string $ref) use ($finalUrl, $finalHost): string {
    $ref = trim($ref);
    if ($ref === '' || preg_match('#^(?:[a-z][a-z0-9+.-]*:|//|\#)#i', $ref)) {
      return str_starts_with($ref, '//') ? 'https:' . $ref : $ref;
    }
    if ($ref[0] === '/') {
      return 'https://' . $finalHost . $ref;
    }
    $dir = (string)parse_url($finalUrl, PHP_URL_PATH);
    $dir = $dir === '' ? '/' : substr($dir, 0, (int)strrpos($dir, '/') + 1);
    return 'https://' . $finalHost . $dir . $ref;
  };
  $html = preg_replace_callback('/(<(?:link|script|img|source|video|audio|iframe|input|embed)\b[^>]*?\s(?:href|src|poster|data-src)\s*=\s*)(["\'])(.*?)\2/is', function ($m) use ($abs) {
    return $m[1] . $m[2] . htmlspecialchars($abs(html_entity_decode($m[3], ENT_QUOTES)), ENT_QUOTES) . $m[2];
  }, $html);
  $html = preg_replace_callback('/(\s(?:srcset|data-srcset)\s*=\s*)(["\'])(.*?)\2/is', function ($m) use ($abs) {
    $parts = array_map(function ($c) use ($abs) {
      $c = trim($c);
      if ($c === '') {
        return $c;
      }
      $bits = preg_split('/\s+/', $c, 2);
      return $abs($bits[0]) . (isset($bits[1]) ? ' ' . $bits[1] : '');
    }, explode(',', html_entity_decode($m[3], ENT_QUOTES)));
    return $m[1] . $m[2] . htmlspecialchars(implode(', ', $parts), ENT_QUOTES) . $m[2];
  }, $html);
  $html = preg_replace_callback('/url\(\s*(["\']?)(?!data:|https?:|\/\/|\#)([^"\')]+)\1\s*\)/i', function ($m) use ($abs) {
    return 'url(' . $m[1] . $abs($m[2]) . $m[1] . ')';
  }, $html);
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
header('Cache-Control: no-store');
header('X-Robots-Tag: noindex');
echo $html;
