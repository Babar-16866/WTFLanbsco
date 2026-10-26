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
  '2galslandscaping-com' => 'https://www.2galslandscaping.com/',
  'agropestpros-com' => 'https://agropestpros.com/',
  'airbossheatingandcooling-com' => 'https://www.airbossheatingandcooling.com/',
  'aircorheatingcooling-com' => 'https://www.aircorheatingcooling.com/',
  'akelapest-com' => 'https://akelapest.com/',
  'alexandersheating-com' => 'https://www.alexandersheating.com/',
  'allin1dallas-com' => 'https://allin1dallas.com/',
  'altapestcontrol-com' => 'https://www.altapestcontrol.com/',
  'aptivepestcontrol-com' => 'https://aptivepestcontrol.com/',
  'aqualecu-com' => 'https://www.aqualecu.com/',
  'arrownj-com' => 'https://arrownj.com/',
  'atxcleanprowash-com' => 'https://atxcleanprowash.com/',
  'beesmartcolorado-com' => 'https://beesmartcolorado.com/',
  'beyondwow-com' => 'https://beyondwow.com/',
  'captainplumbertx-com' => 'https://captainplumbertx.com/',
  'columbushandyman-net' => 'https://www.columbushandyman.net/',
  'davisair-net' => 'https://www.davisair.net/',
  'ecoroofingnw-com' => 'https://ecoroofingnw.com/',
  'edwardsplumbingllc-com' => 'https://edwardsplumbingllc.com/',
  'elbazconstructioncorp-com' => 'https://elbazconstructioncorp.com/',
  'elitewildlifeservices-com' => 'https://elitewildlifeservices.com/',
  'environschicago-com' => 'https://www.environschicago.com/',
  'eurodesignremodel-com' => 'https://www.eurodesignremodel.com/',
  'evergreenlawncaretx-com' => 'https://evergreenlawncaretx.com/',
  'extremehandyman-com' => 'https://extremehandyman.com/',
  'foreverroofing-net' => 'https://foreverroofing.net/',
  'fullhousepros-com' => 'https://fullhousepros.com/',
  'h2gservices-com' => 'https://h2gservices.com/',
  'handmlandscaping-com' => 'https://www.handmlandscaping.com/',
  'hprohandyman-com' => 'https://hprohandyman.com/',
  'imthatguyhandyman-com' => 'https://imthatguyhandyman.com/',
  'janneyroofing-com' => 'https://janneyroofing.com/',
  'kalosflorida-com' => 'https://kalosflorida.com/',
  'kwhandymanmiamifl-com' => 'https://kwhandymanmiamifl.com/',
  'landscapedesignhouston-com' => 'https://landscapedesignhouston.com/',
  'lindholmroofing-com' => 'https://www.lindholmroofing.com/',
  'miamidadeplumbingcompany-com' => 'https://miamidadeplumbingcompany.com/',
  'miaremodelingcontractors-com' => 'https://miaremodelingcontractors.com/',
  'nozzlenolen-com' => 'https://nozzlenolen.com/',
  'oandmplumbing-com' => 'https://oandmplumbing.com/',
  'paragonmechanical-com' => 'https://www.paragonmechanical.com/',
  'plumbersthatcare-com' => 'https://www.plumbersthatcare.com/',
  'primeconstructionaustin-com' => 'https://primeconstructionaustin.com/',
  'prohandymanmia-com' => 'https://prohandymanmia.com/',
  'reliantplumbing-com' => 'https://reliantplumbing.com/',
  'slcpoolservice-com' => 'https://slcpoolservice.com/',
  'sonicwashsacramento-com' => 'https://sonicwashsacramento.com/',
  'southernshinetexas-com' => 'https://www.southernshinetexas.com/',
  'southtexaspooltilecleaning-com' => 'https://southtexaspooltilecleaning.com/',
  'sunlandplumbing-com' => 'https://sunlandplumbing.com/',
  'tadlockroofing-com' => 'https://tadlockroofing.com/',
  'teamworkhomedesigns-com' => 'https://teamworkhomedesigns.com/',
  'thehandymansflive-com' => 'https://thehandymansflive.com/',
  'timemachineatx-com' => 'https://timemachineatx.com/',
  'uniplumb-com-au' => 'https://www.uniplumb.com.au/',
  'unitedelitegroup-com' => 'https://www.unitedelitegroup.com/',
  'vh1roofing-com' => 'https://vh1roofing.com/',
  'voyagerexteriors-com' => 'https://voyagerexteriors.com/',
  'ymedinaremodeling-com' => 'https://www.ymedinaremodeling.com/',
  'yurasroofing-com' => 'https://www.yurasroofing.com/',
];

$fail = function (): void {
  header('Content-Type: text/html; charset=UTF-8');
  header('Cache-Control: no-store');
  header('X-Robots-Tag: noindex');
  echo '<!doctype html><html><head><meta charset="utf-8"></head><body style="margin:0;background:#F4EFE3"><script>try{parent.postMessage({wtfLiveFail:1},"*")}catch(e){}</script></body></html>';
  exit;
};

$slug = (string)($_GET['site'] ?? '');
if (!isset($sites[$slug])) {
  $fail();
}

$home = $sites[$slug];
$homeHost = (string)parse_url($home, PHP_URL_HOST);
$bareHost = strtolower((string)preg_replace('/^www\./i', '', $homeHost));
$hostAllowed = function (string $host) use ($bareHost): bool {
  $host = strtolower($host);
  return $host === $bareHost || $host === 'www.' . $bareHost;
};
$selfOrigin = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || ($_SERVER['HTTP_X_FORWARDED_PROTO'] ?? '') === 'https' ? 'https' : 'http') . '://' . preg_replace('/[^A-Za-z0-9.:\-]/', '', (string)($_SERVER['HTTP_HOST'] ?? ''));
$assetLink = function (string $absUrl) use ($slug): string {
  return '__WTF_SELF__/live-preview?site=' . rawurlencode($slug) . '&asset=' . rawurlencode($absUrl);
};
$proxyFonts = function (string $css, string $baseUrl) use ($hostAllowed, $assetLink): string {
  return (string)preg_replace_callback('/url\(\s*(["\']?)([^"\')]+)\1\s*\)/i', function ($m) use ($baseUrl, $hostAllowed, $assetLink) {
    $ref = trim(html_entity_decode($m[2], ENT_QUOTES));
    if ($ref === '' || str_starts_with($ref, 'data:') || str_starts_with($ref, '#')) {
      return $m[0];
    }
    if (str_starts_with($ref, '//')) {
      $ref = 'https:' . $ref;
    } elseif (!preg_match('#^https?://#i', $ref)) {
      $bp = parse_url($baseUrl);
      $origin = 'https://' . ($bp['host'] ?? '');
      if ($ref[0] === '/') {
        $ref = $origin . $ref;
      } else {
        $dir = (string)($bp['path'] ?? '/');
        $dir = substr($dir, 0, (int)strrpos($dir, '/') + 1);
        $ref = $origin . ($dir === '' ? '/' : $dir) . $ref;
      }
    }
    $host = (string)parse_url($ref, PHP_URL_HOST);
    $ext = strtolower(pathinfo((string)parse_url($ref, PHP_URL_PATH), PATHINFO_EXTENSION));
    if ($hostAllowed($host) && in_array($ext, ['woff2', 'woff', 'ttf', 'otf', 'eot', 'css'], true)) {
      return 'url("' . $assetLink($ref) . '")';
    }
    return 'url("' . $ref . '")';
  }, $css);
};

if (isset($_GET['asset'])) {
  $assetUrl = (string)$_GET['asset'];
  $ap = parse_url($assetUrl);
  if (!is_array($ap) || !in_array(($ap['scheme'] ?? ''), ['https', 'http'], true) || !$hostAllowed((string)($ap['host'] ?? ''))) {
    http_response_code(404);
    exit;
  }
  $ext = strtolower(pathinfo((string)($ap['path'] ?? ''), PATHINFO_EXTENSION));
  $types = ['css' => 'text/css; charset=UTF-8', 'woff2' => 'font/woff2', 'woff' => 'font/woff', 'ttf' => 'font/ttf', 'otf' => 'font/otf', 'eot' => 'application/vnd.ms-fontobject'];
  if (!isset($types[$ext])) {
    http_response_code(404);
    exit;
  }
  $assetCache = sys_get_temp_dir() . '/wtf-live4-asset-' . md5($assetUrl);
  if (is_file($assetCache) && time() - filemtime($assetCache) < 86400) {
    $body = (string)file_get_contents($assetCache);
  } else {
    $ch = curl_init($assetUrl);
    curl_setopt_array($ch, [
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_MAXREDIRS => 4,
      CURLOPT_CONNECTTIMEOUT => 4,
      CURLOPT_TIMEOUT => 10,
      CURLOPT_ENCODING => '',
      CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36',
    ]);
    $body = (string)curl_exec($ch);
    if ($body === '' && in_array(curl_errno($ch), [35, 51, 58, 60, 77], true)) {
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
      $body = (string)curl_exec($ch);
    }
    $status = (int)curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
    if ($body === '' || $status >= 400) {
      header('Location: ' . $assetUrl, true, 302);
      exit;
    }
    if ($ext === 'css') {
      $body = $proxyFonts($body, $assetUrl);
    }
    @file_put_contents($assetCache, $body);
  }
  header('Content-Type: ' . $types[$ext]);
  header('Cache-Control: public, max-age=86400');
  header('X-Robots-Tag: noindex');
  echo str_replace('__WTF_SELF__', $selfOrigin, $body);
  exit;
}

$path = (string)($_GET['path'] ?? '/');
if ($path === '' || $path[0] !== '/' || str_starts_with($path, '//')) {
  $path = '/';
}
$url = 'https://' . $homeHost . $path;

$cacheFile = sys_get_temp_dir() . '/wtf-live6-' . md5($url) . '.html';
$html = '';
$finalUrl = $url;
if (is_file($cacheFile) && time() - filemtime($cacheFile) < 86400) {
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
    $fail();
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
  $html = preg_replace_callback('/<link\b[^>]*>/i', function ($m) use ($hostAllowed, $assetLink) {
    $tag = $m[0];
    if (!preg_match('/\brel\s*=\s*["\']?[^"\'>]*stylesheet/i', $tag) || !preg_match('/\shref\s*=\s*(["\'])(.*?)\1/is', $tag, $h)) {
      return $tag;
    }
    $href = html_entity_decode($h[2], ENT_QUOTES);
    $ext = strtolower(pathinfo((string)parse_url($href, PHP_URL_PATH), PATHINFO_EXTENSION));
    if ($ext !== 'css' || !$hostAllowed((string)parse_url($href, PHP_URL_HOST))) {
      return $tag;
    }
    return str_replace($h[0], ' href=' . $h[1] . htmlspecialchars($assetLink($href), ENT_QUOTES) . $h[1], $tag);
  }, $html);
  $html = preg_replace_callback('/(<style\b[^>]*>)(.*?)(<\/style>)/is', function ($m) use ($proxyFonts, $finalUrl) {
    return $m[1] . $proxyFonts($m[2], $finalUrl) . $m[3];
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
  $heavy = '(?:googletagmanager\.com|google-analytics\.com|connect\.facebook\.net|callrail\.com|google\.com\/recaptcha|gstatic\.com\/recaptcha|recaptcha\.net|hotjar\.com|clarity\.ms|klaviyo\.com|podium\.com|birdeye\.com|tidio\.co|userway\.org|acsbapp\.com|accessibe\.com|livechatinc\.com|hs-scripts\.com|hs-analytics\.net|leadconnectorhq\.com|msgsndr\.com|doubleclick\.net|bing\.com\/bat|snap\.licdn\.com|tiktok\.com\/i18n\/pixel|analytics\.tiktok\.com)';
  $html = preg_replace('/<script\b[^>]*\ssrc\s*=\s*["\'][^"\']*' . $heavy . '[^"\']*["\'][^>]*>\s*<\/script>/is', '', $html);
  $html = preg_replace('/<link\b[^>]*\shref\s*=\s*["\'][^"\']*' . $heavy . '[^"\']*["\'][^>]*>/is', '', $html);
  $html = preg_replace_callback('/<iframe\b[^>]*>/i', function ($m) {
    $tag = $m[0];
    if (preg_match('/\ssrc\s*=\s*["\'][^"\']*(?:recaptcha|callrail)/i', $tag)) {
      return preg_replace('/\ssrc\s*=\s*(["\']).*?\1/is', ' src="about:blank"', $tag);
    }
    if (stripos($tag, 'loading=') === false) {
      return substr($tag, 0, -1) . ' loading="lazy">';
    }
    return $tag;
  }, $html);
  $inject = '<meta name="referrer" content="no-referrer"><base href="' . htmlspecialchars($base, ENT_QUOTES) . '">'
    . '<style>div.needsclick[class*="kl-private-reset-css"][role="dialog"],div.needsclick[class*="kl-private-reset-css"][aria-modal]{display:none!important}</style>'
    . '<script>new MutationObserver(function(){document.querySelectorAll("div.needsclick[class*=kl-private-reset-css]").forEach(function(e){var c=getComputedStyle(e);if(c.position==="fixed"&&e.offsetWidth>=innerWidth*0.9)e.style.setProperty("display","none","important")})}).observe(document.documentElement,{childList:true,subtree:true});</script>'
    . '<script>(function(){var s=' . json_encode($slug) . ',h=' . json_encode($finalHost) . ';'
    . 'document.addEventListener("click",function(e){var a=e.target.closest&&e.target.closest("a[href]");if(!a||a.target==="_blank")return;'
    . 'var u;try{u=new URL(a.getAttribute("href"),document.baseURI)}catch(x){return}'
    . 'if(u.host!==h||/^(mailto|tel):/.test(u.protocol))return;e.preventDefault();'
    . 'location.href=location.origin+"/live-preview?site="+encodeURIComponent(s)+"&path="+encodeURIComponent(u.pathname+u.search)},true);})();</script>';
  $html = preg_replace('/<head\b[^>]*>/i', '$0' . $inject, $html, 1, $count);
  if (!$count) {
    $html = $inject . $html;
  }
  @file_put_contents($cacheFile, $html);
}

header('Content-Type: text/html; charset=UTF-8');
header('Cache-Control: no-store');
header('X-Robots-Tag: noindex');
echo str_replace('__WTF_SELF__', $selfOrigin, $html);
