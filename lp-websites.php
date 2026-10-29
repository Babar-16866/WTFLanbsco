<?php
$lp_video = 'https://download.samplelib.com/mp4/sample-15s.mp4';
require_once __DIR__ . '/includes/config.php';
?>
<!DOCTYPE html>
<html lang="en" data-palette="index2">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Remodeling, HVAC and Landscaping Websites That Book Jobs | WTF Labs</title>
  <meta name="description" content="Websites and marketing for remodelers, HVAC companies and landscapers that turn homeowners into booked jobs.">
  <meta name="robots" content="noindex">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Big+Shoulders+Display:wght@700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/assets/css/styles.css?v=<?php echo asset_version('assets/css/styles.css'); ?>">
  <link rel="stylesheet" href="/assets/css/landing.css?v=<?php echo asset_version('assets/css/landing.css'); ?>">
  <link rel="icon" href="/assets/images/logo-new-icon.png" type="image/png">
</head>
<body class="lp-body">
<div class="lp-bar"><strong>Our promise:</strong> if we don&rsquo;t contact you within 2 hours, we&rsquo;ll build your website for free.</div>
<main class="lp">

<section class="lp-hero">
  <div class="lp-wrap lp-hero-grid">
    <div class="lp-hero-copy">
      <img class="lp-logo" src="/assets/images/logo-new.webp" alt="WTF Labs" width="72" height="70">
      <p class="lp-hero-tag"><b>For</b> Remodelers &middot; HVAC &middot; Landscapers</p>
      <h1 class="lp-h1" aria-label="Your work is premium. Your website should be too."><span class="lp-line" aria-hidden="true"><span>Your work is premium.</span></span><span class="lp-line" aria-hidden="true"><span>Your website</span></span><span class="lp-line" aria-hidden="true"><span><mark>should be too.</mark></span></span></h1>
      <p class="lp-hero-sub">Homeowners judge your company online before they ever call. If your site looks dated, loads slowly or hides your best work, the job goes to the competitor with the better website. We fix that.</p>
      <ul class="lp-pains"><li><i>&times;</i>$60K kitchens lost to a better-looking site</li><li><i>&times;</i>AC calls going to whoever ranks first</li><li><i>&times;</i>Yards worth $20K+ priced like lawn mowing</li></ul>
      <div class="lp-hero-actions"><button type="button" class="lp-btn" data-open-step-popup><span>Get My Free Growth Plan</span><i><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="square" aria-hidden="true"><path d="M6 18L18 6M8 6h10v10"/></svg></i></button></div>
      <p class="lp-hero-rating"><span>&#9733;&#9733;&#9733;&#9733;&#9733;</span> 4.8 from home-service owners &middot; 400+ projects since 2018</p>
    </div>
    <div class="lp-reel" data-lp-player tabindex="0" role="button" aria-label="Play or pause video">
      <video src="<?php echo htmlspecialchars($lp_video); ?>" poster="/assets/images/industry-remodelers-2.webp" playsinline preload="metadata"></video>
      <span class="lp-play" aria-hidden="true"><i><svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M7 4.5v15l13-7.5z"/></svg></i></span>
      <button type="button" class="lp-skip lp-skip--back" aria-label="Back 5 seconds"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M11 17l-5-5 5-5M18 17l-5-5 5-5"/></svg>5s</button>
      <button type="button" class="lp-skip lp-skip--fwd" aria-label="Forward 5 seconds">5s<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M13 17l5-5-5-5M6 17l5-5-5-5"/></svg></button>
    </div>
  </div>
</section>

<section class="lp-strip" aria-label="Where homeowners check our reviews">
  <div class="lp-strip-track"><ul class="rx-tape-set"><li class="rx-logo rx-logo--google"><svg viewBox="0 0 24 24" aria-hidden="true"><path fill="#4285F4" d="M21.6 12.2c0-.7-.1-1.4-.2-2H12v3.8h5.4a4.6 4.6 0 0 1-2 3v2.5h3.2c1.9-1.7 3-4.3 3-7.3z"/><path fill="#34A853" d="M12 22c2.7 0 5-.9 6.6-2.4l-3.2-2.5c-.9.6-2 1-3.4 1-2.6 0-4.8-1.8-5.6-4.1H3.1v2.6A10 10 0 0 0 12 22z"/><path fill="#FBBC05" d="M6.4 14a6 6 0 0 1 0-4V7.4H3.1a10 10 0 0 0 0 9.2z"/><path fill="#EA4335" d="M12 5.9c1.5 0 2.8.5 3.8 1.5l2.9-2.9A10 10 0 0 0 3.1 7.4L6.4 10c.8-2.3 3-4.1 5.6-4.1z"/></svg><span>Google Reviews</span></li><li class="rx-logo rx-logo--yelp"><svg viewBox="0 0 24 24" aria-hidden="true"><path fill="#D32323" d="M12.5 2.5c-.6-.3-4.4.8-5 1.2-.4.3-.5.7-.4 1.1l3.4 6.7c.5.9 1.8.6 1.8-.4l.3-7.5c0-.5-.1-.9-.1-1.1zM5 13.6l3.7-1.1c.9-.3.9-1.6 0-1.8L5 9.3c-.5-.1-1 .2-1.1.7-.2 1-.2 2 0 3 .1.5.6.8 1.1.6zm4.1 2.2l-2.6 2.9c-.3.4-.3 1 .1 1.3.8.6 1.7 1 2.6 1.3.5.1 1-.2 1-.7l.3-3.9c.1-1-1.1-1.5-1.4-.9zm6.5-.4c-.8-.4-1.7.5-1.2 1.3l2.1 3.3c.3.4.8.5 1.2.3.8-.6 1.5-1.3 2-2.1.3-.4.1-1-.4-1.2zm.8-2.5l3.8-1.1c.5-.2.8-.7.6-1.2-.3-1-.8-1.8-1.5-2.6-.4-.4-.9-.4-1.3 0l-2.6 2.9c-.6.8.1 2.2 1 2z"/></svg><span>Yelp</span></li><li class="rx-logo rx-logo--houzz"><svg viewBox="0 0 24 24" aria-hidden="true"><path fill="#4DBC15" d="M7 2v20h4.7v-6.3h2.6V22H19V10.2l-12-3.4V2z"/></svg><span>Houzz</span></li><li class="rx-logo rx-logo--angi"><svg viewBox="0 0 24 24" aria-hidden="true"><path fill="#FF6153" d="M12 2.5 3 10v11.5h6.5v-6h5v6H21V10z"/></svg><span>Angi</span></li><li class="rx-logo rx-logo--trustpilot"><svg viewBox="0 0 24 24" aria-hidden="true"><path fill="#00B67A" d="M12 2.5l2.4 7.2H22l-6.1 4.5 2.3 7.3L12 17l-6.2 4.5 2.3-7.3L2 9.7h7.6z"/></svg><span>Trustpilot</span></li><li class="rx-logo rx-logo--bbb"><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3" y="2" width="18" height="20" rx="2" fill="#005A78"/><path fill="#fff" d="M12 5c1.6 1 2.4 2.2 2.4 3.5 0 1-.6 1.8-1.2 2.4.9.4 1.6 1.2 1.6 2.4 0 1.7-1.3 3-2.8 3.7-1.5-.7-2.8-2-2.8-3.7 0-1.2.7-2 1.6-2.4-.6-.6-1.2-1.4-1.2-2.4C9.6 7.2 10.4 6 12 5z"/></svg><span>BBB</span></li><li class="rx-logo rx-logo--facebook"><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="10" fill="#1877F2"/><path fill="#fff" d="M13.4 21.9v-7.4h2.5l.4-2.9h-2.9V9.8c0-.8.2-1.4 1.4-1.4h1.5V5.8a20 20 0 0 0-2.2-.1c-2.2 0-3.7 1.3-3.7 3.8v2.1H8v2.9h2.4v7.4z"/></svg><span>Facebook</span></li><li class="rx-logo rx-logo--nextdoor"><svg viewBox="0 0 24 24" aria-hidden="true"><path fill="#8ED500" d="M12 3 2 11h3v10h5v-6h4v6h5V11h3z"/></svg><span>Nextdoor</span></li></ul><ul class="rx-tape-set" aria-hidden="true"><li class="rx-logo rx-logo--google"><svg viewBox="0 0 24 24" aria-hidden="true"><path fill="#4285F4" d="M21.6 12.2c0-.7-.1-1.4-.2-2H12v3.8h5.4a4.6 4.6 0 0 1-2 3v2.5h3.2c1.9-1.7 3-4.3 3-7.3z"/><path fill="#34A853" d="M12 22c2.7 0 5-.9 6.6-2.4l-3.2-2.5c-.9.6-2 1-3.4 1-2.6 0-4.8-1.8-5.6-4.1H3.1v2.6A10 10 0 0 0 12 22z"/><path fill="#FBBC05" d="M6.4 14a6 6 0 0 1 0-4V7.4H3.1a10 10 0 0 0 0 9.2z"/><path fill="#EA4335" d="M12 5.9c1.5 0 2.8.5 3.8 1.5l2.9-2.9A10 10 0 0 0 3.1 7.4L6.4 10c.8-2.3 3-4.1 5.6-4.1z"/></svg><span>Google Reviews</span></li><li class="rx-logo rx-logo--yelp"><svg viewBox="0 0 24 24" aria-hidden="true"><path fill="#D32323" d="M12.5 2.5c-.6-.3-4.4.8-5 1.2-.4.3-.5.7-.4 1.1l3.4 6.7c.5.9 1.8.6 1.8-.4l.3-7.5c0-.5-.1-.9-.1-1.1zM5 13.6l3.7-1.1c.9-.3.9-1.6 0-1.8L5 9.3c-.5-.1-1 .2-1.1.7-.2 1-.2 2 0 3 .1.5.6.8 1.1.6zm4.1 2.2l-2.6 2.9c-.3.4-.3 1 .1 1.3.8.6 1.7 1 2.6 1.3.5.1 1-.2 1-.7l.3-3.9c.1-1-1.1-1.5-1.4-.9zm6.5-.4c-.8-.4-1.7.5-1.2 1.3l2.1 3.3c.3.4.8.5 1.2.3.8-.6 1.5-1.3 2-2.1.3-.4.1-1-.4-1.2zm.8-2.5l3.8-1.1c.5-.2.8-.7.6-1.2-.3-1-.8-1.8-1.5-2.6-.4-.4-.9-.4-1.3 0l-2.6 2.9c-.6.8.1 2.2 1 2z"/></svg><span>Yelp</span></li><li class="rx-logo rx-logo--houzz"><svg viewBox="0 0 24 24" aria-hidden="true"><path fill="#4DBC15" d="M7 2v20h4.7v-6.3h2.6V22H19V10.2l-12-3.4V2z"/></svg><span>Houzz</span></li><li class="rx-logo rx-logo--angi"><svg viewBox="0 0 24 24" aria-hidden="true"><path fill="#FF6153" d="M12 2.5 3 10v11.5h6.5v-6h5v6H21V10z"/></svg><span>Angi</span></li><li class="rx-logo rx-logo--trustpilot"><svg viewBox="0 0 24 24" aria-hidden="true"><path fill="#00B67A" d="M12 2.5l2.4 7.2H22l-6.1 4.5 2.3 7.3L12 17l-6.2 4.5 2.3-7.3L2 9.7h7.6z"/></svg><span>Trustpilot</span></li><li class="rx-logo rx-logo--bbb"><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3" y="2" width="18" height="20" rx="2" fill="#005A78"/><path fill="#fff" d="M12 5c1.6 1 2.4 2.2 2.4 3.5 0 1-.6 1.8-1.2 2.4.9.4 1.6 1.2 1.6 2.4 0 1.7-1.3 3-2.8 3.7-1.5-.7-2.8-2-2.8-3.7 0-1.2.7-2 1.6-2.4-.6-.6-1.2-1.4-1.2-2.4C9.6 7.2 10.4 6 12 5z"/></svg><span>BBB</span></li><li class="rx-logo rx-logo--facebook"><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="10" fill="#1877F2"/><path fill="#fff" d="M13.4 21.9v-7.4h2.5l.4-2.9h-2.9V9.8c0-.8.2-1.4 1.4-1.4h1.5V5.8a20 20 0 0 0-2.2-.1c-2.2 0-3.7 1.3-3.7 3.8v2.1H8v2.9h2.4v7.4z"/></svg><span>Facebook</span></li><li class="rx-logo rx-logo--nextdoor"><svg viewBox="0 0 24 24" aria-hidden="true"><path fill="#8ED500" d="M12 3 2 11h3v10h5v-6h4v6h5V11h3z"/></svg><span>Nextdoor</span></li></ul></div>
</section>

<section class="lp-steps">
  <div class="lp-wrap">
    <div class="lp-center" data-lp-in>
      <p class="lp-kicker">How it works</p>
      <h2 class="lp-h2">Three steps to <em>a busier calendar.</em></h2>
    </div>
    <ol class="lp-step-list" data-lp-in><li class="lp-step"><span>01</span><h3>Don&rsquo;t think too much</h3><p>Tell us your trade, your area and the jobs you want more of. Two minutes, no tech talk.</p></li><li class="lp-step"><span>02</span><h3>Book a call</h3><p>A 30-minute call where we show you exactly where your website and Google presence are losing you jobs.</p></li><li class="lp-step"><span>03</span><h3>Start work</h3><p>We design, build and launch. You keep running jobs while the new site starts bringing in better ones.</p></li></ol>
    <div class="lp-center"><button type="button" class="lp-btn" data-open-step-popup><span>Get My Free Growth Plan</span><i><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="square" aria-hidden="true"><path d="M6 18L18 6M8 6h10v10"/></svg></i></button></div>
  </div>
</section>

<section class="lp-benefits">
  <div class="lp-wrap lp-benefits-grid">
    <div data-lp-in>
      <p class="lp-kicker">What you get</p>
      <h2 class="lp-h2">The problem isn&rsquo;t your work. <em>It&rsquo;s how it looks online.</em></h2>
      <p class="lp-lead">You already do great work. We make sure homeowners can see it, trust it and book it before they call anyone else.</p>
    </div>
    <ul class="lp-ben" data-lp-in><li><i><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg></i><div><h3>More calls, less chasing</h3><p>A site built to make the phone ring, with one-tap calling and booking on every page.</p></div></li><li><i><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg></i><div><h3>Bigger, better-fit jobs</h3><p>Real project photos and reviews attract homeowners ready to pay for quality.</p></div></li><li><i><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg></i><div><h3>Found first on Google</h3><p>Local pages and a tuned Google profile put you in front of people searching right now.</p></div></li><li><i><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg></i><div><h3>Every lead tracked</h3><p>Know which calls came from where, so you only spend on what books jobs.</p></div></li><li><i><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg></i><div><h3>One team, no runaround</h3><p>Design, build, search and ads handled by one team that knows the trades.</p></div></li><li><i><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg></i><div><h3>Live in weeks, not months</h3><p>A clear plan, a fixed price and a launch date you can count on.</p></div></li></ul>
  </div>
</section>

<section class="lp-svc">
  <div class="lp-wrap">
    <div class="lp-center" data-lp-in>
      <p class="lp-kicker">Our services</p>
      <h2 class="lp-h2">Everything that <em>brings in the job.</em></h2>
    </div>
    <div class="lp-stack">
      <article class="lp-card">
        <div class="lp-card-copy"><span class="lp-card-n">01</span><h3>Custom Websites</h3><p>Fast, mobile-first websites designed around your best work, with booking and quote forms on every page.</p><ul><li>Custom design</li><li>Booking forms</li><li>Mobile first</li></ul></div>
        <div class="lp-card-art"><img src="/assets/images/wd-build-1.jpg" alt="" loading="lazy" decoding="async"></div>
      </article>
      <article class="lp-card">
        <div class="lp-card-copy"><span class="lp-card-n">02</span><h3>Local SEO</h3><p>Service and city pages plus Google Business Profile work that put you in the map pack where you want jobs.</p><ul><li>Google Business Profile</li><li>City pages</li><li>Review growth</li></ul></div>
        <div class="lp-card-art"><img src="/assets/images/service-seo.jpg" alt="" loading="lazy" decoding="async"></div>
      </article>
      <article class="lp-card">
        <div class="lp-card-copy"><span class="lp-card-n">03</span><h3>Google &amp; Social Ads</h3><p>Campaigns built around calls and booked jobs, with every lead tracked back to the ad that brought it.</p><ul><li>Google Ads</li><li>Facebook &amp; Instagram</li><li>Call tracking</li></ul></div>
        <div class="lp-card-art"><img src="/assets/images/service-google-ads.jpg" alt="" loading="lazy" decoding="async"></div>
      </article>
    </div>
  </div>
</section>

<section class="lp-works">
  <div class="lp-wrap lp-center" data-lp-in>
    <p class="lp-kicker">Our work</p>
    <h2 class="lp-h2">Websites we built <em>for your trade.</em></h2>
  </div>
  <div class="lp-works-line"><div class="lp-works-track"><figure class="lp-site"><b><i></i><i></i><i></i></b><img src="/assets/images/work-live-excel-remodeling.webp" alt="Excel Remodeling website" width="960" height="600" loading="lazy" decoding="async"><figcaption>Excel Remodeling<small>Remodeling</small></figcaption></figure><figure class="lp-site"><b><i></i><i></i><i></i></b><img src="/assets/images/work-live-alexander-s-heating-and-ac.webp" alt="Alexander&rsquo;s Heating &amp; AC website" width="960" height="600" loading="lazy" decoding="async"><figcaption>Alexander&rsquo;s Heating &amp; AC<small>HVAC</small></figcaption></figure><figure class="lp-site"><b><i></i><i></i><i></i></b><img src="/assets/images/work-live-texan-landscape-group.webp" alt="Texan Landscape Group website" width="960" height="600" loading="lazy" decoding="async"><figcaption>Texan Landscape Group<small>Landscaping</small></figcaption></figure><figure class="lp-site"><b><i></i><i></i><i></i></b><img src="/assets/images/work-live-teamwork-home-designs.webp" alt="Teamwork Home Designs website" width="960" height="600" loading="lazy" decoding="async"><figcaption>Teamwork Home Designs<small>Remodeling</small></figcaption></figure><figure class="lp-site"><b><i></i><i></i><i></i></b><img src="/assets/images/work-live-tanous-hvac.webp" alt="Tanous HVAC website" width="960" height="600" loading="lazy" decoding="async"><figcaption>Tanous HVAC<small>HVAC</small></figcaption></figure><figure class="lp-site"><b><i></i><i></i><i></i></b><img src="/assets/images/work-live-2-gals-landscaping.webp" alt="2 Gals Landscaping website" width="960" height="600" loading="lazy" decoding="async"><figcaption>2 Gals Landscaping<small>Landscaping</small></figcaption></figure><figure class="lp-site"><b><i></i><i></i><i></i></b><img src="/assets/images/work-live-prime-construction.webp" alt="Prime Construction website" width="960" height="600" loading="lazy" decoding="async"><figcaption>Prime Construction<small>Remodeling</small></figcaption></figure><figure class="lp-site"><b><i></i><i></i><i></i></b><img src="/assets/images/work-live-davis-air-conditioning-and-heating.webp" alt="Davis Air website" width="960" height="600" loading="lazy" decoding="async"><figcaption>Davis Air<small>HVAC</small></figcaption></figure><figure class="lp-site"><b><i></i><i></i><i></i></b><img src="/assets/images/work-live-evergreen-outdoor.webp" alt="Evergreen Outdoor website" width="960" height="600" loading="lazy" decoding="async"><figcaption>Evergreen Outdoor<small>Landscaping</small></figcaption></figure><figure class="lp-site"><b><i></i><i></i><i></i></b><img src="/assets/images/work-live-excel-remodeling.webp" alt="Excel Remodeling website" width="960" height="600" loading="lazy" decoding="async"><figcaption>Excel Remodeling<small>Remodeling</small></figcaption></figure><figure class="lp-site"><b><i></i><i></i><i></i></b><img src="/assets/images/work-live-alexander-s-heating-and-ac.webp" alt="Alexander&rsquo;s Heating &amp; AC website" width="960" height="600" loading="lazy" decoding="async"><figcaption>Alexander&rsquo;s Heating &amp; AC<small>HVAC</small></figcaption></figure><figure class="lp-site"><b><i></i><i></i><i></i></b><img src="/assets/images/work-live-texan-landscape-group.webp" alt="Texan Landscape Group website" width="960" height="600" loading="lazy" decoding="async"><figcaption>Texan Landscape Group<small>Landscaping</small></figcaption></figure><figure class="lp-site"><b><i></i><i></i><i></i></b><img src="/assets/images/work-live-teamwork-home-designs.webp" alt="Teamwork Home Designs website" width="960" height="600" loading="lazy" decoding="async"><figcaption>Teamwork Home Designs<small>Remodeling</small></figcaption></figure><figure class="lp-site"><b><i></i><i></i><i></i></b><img src="/assets/images/work-live-tanous-hvac.webp" alt="Tanous HVAC website" width="960" height="600" loading="lazy" decoding="async"><figcaption>Tanous HVAC<small>HVAC</small></figcaption></figure><figure class="lp-site"><b><i></i><i></i><i></i></b><img src="/assets/images/work-live-2-gals-landscaping.webp" alt="2 Gals Landscaping website" width="960" height="600" loading="lazy" decoding="async"><figcaption>2 Gals Landscaping<small>Landscaping</small></figcaption></figure><figure class="lp-site"><b><i></i><i></i><i></i></b><img src="/assets/images/work-live-prime-construction.webp" alt="Prime Construction website" width="960" height="600" loading="lazy" decoding="async"><figcaption>Prime Construction<small>Remodeling</small></figcaption></figure><figure class="lp-site"><b><i></i><i></i><i></i></b><img src="/assets/images/work-live-davis-air-conditioning-and-heating.webp" alt="Davis Air website" width="960" height="600" loading="lazy" decoding="async"><figcaption>Davis Air<small>HVAC</small></figcaption></figure><figure class="lp-site"><b><i></i><i></i><i></i></b><img src="/assets/images/work-live-evergreen-outdoor.webp" alt="Evergreen Outdoor website" width="960" height="600" loading="lazy" decoding="async"><figcaption>Evergreen Outdoor<small>Landscaping</small></figcaption></figure></div></div>
</section>
</main>

<?php
$street_section_id = 'testimonials';
$street_heading = 'Still not <span class="accent-blue">convinced?</span>';
$street_desc = '';
include __DIR__ . '/includes/testimonialslider.php';
?>

<div class="lp">
<section class="lp-offer" id="plan">
  <div class="lp-offer-card">
    <div>
      <p class="lp-kicker">Free growth plan</p>
      <h2 class="lp-h2">See where your <em>next jobs are.</em></h2>
      <p>Book a 30-minute call and get a clear plan to bring in more booked jobs, whether or not you work with us.</p>
      <ul class="lp-offer-list"><li><i><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg></i><span><b>Lead audit</b>Where calls are leaking from your profile, ads and site.</span></li><li><i><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg></i><span><b>Local ranking check</b>Where you show up for your top services and towns.</span></li><li><i><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg></i><span><b>Website plan</b>The pages, offers and booking flow your trade needs.</span></li><li><i><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg></i><span><b>Clear budget</b>What it costs and what you can expect back.</span></li></ul>
      <button type="button" class="lp-btn" data-open-step-popup><span>Get My Free Growth Plan</span><i><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="square" aria-hidden="true"><path d="M6 18L18 6M8 6h10v10"/></svg></i></button>
      <p class="lp-offer-note">We take on a limited number of companies per trade in each area.</p>
    </div>
    <div class="lp-offer-form contact-form-wrap">
<?php
$step_form_id = 'lpForm';
$step_form_source = 'landing-remodel-hvac-landscape';
$step_form_ok_id = 'lpFormOk';
include __DIR__ . '/includes/step-form.php';
?>
    </div>
  </div>
</section>
</div>

<footer class="lp-foot">
  <img src="/assets/images/logo-new.webp" alt="WTF Labs" width="56" height="54" loading="lazy">
  <p>&copy; <?php echo date('Y'); ?> WTF Labs. All rights reserved.</p>
  <nav><a href="/terms-and-conditions.php">Terms &amp; Conditions</a><a href="/privacy-policy.php">Privacy Policy</a></nav>
</footer>

<div class="lp-feed" aria-live="polite"></div>

<div class="step-popup" id="stepPopup" hidden>
  <div class="step-popup-backdrop" data-step-popup-close></div>
  <div class="step-popup-dialog" role="dialog" aria-modal="true" aria-labelledby="stepPopupTitle">
    <button class="step-popup-close" type="button" data-step-popup-close aria-label="Close">&times;</button>
    <div class="step-popup-head">
      <p class="step-popup-kicker"><span></span> Free growth plan</p>
      <h2 id="stepPopupTitle">Get your <span>free plan</span></h2>
    </div>
    <div class="contact-form-wrap">
<?php
$step_form_id = 'stepPopupForm';
$step_form_source = 'landing-remodel-hvac-landscape';
$step_form_ok_id = 'stepPopupOk';
include __DIR__ . '/includes/step-form.php';
?>
    </div>
  </div>
</div>

<div class="lp-thanks" id="lpThanks" hidden>
  <div class="lp-thanks-backdrop" data-lp-thanks-close></div>
  <div class="lp-thanks-card" role="dialog" aria-modal="true" aria-labelledby="lpThanksTitle">
    <button type="button" class="lp-thanks-close" data-lp-thanks-close aria-label="Close">&times;</button>
    <i class="lp-thanks-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg></i>
    <h2 id="lpThanksTitle">You&rsquo;re in. Thank you!</h2>
    <p class="lp-thanks-q">You&rsquo;re <b data-lp-queue>#7</b> in the queue.</p>
    <p>One of our team will call you within 2 hours. If we don&rsquo;t, your website is on us.</p>
    <button type="button" class="lp-btn" data-lp-thanks-close><span>Got it</span><i><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="square" aria-hidden="true"><path d="M6 18L18 6M8 6h10v10"/></svg></i></button>
  </div>
</div>

<script src="/assets/js/main.js?v=<?php echo asset_version('assets/js/main.js'); ?>"></script>
<script src="/assets/js/landing.js?v=<?php echo asset_version('assets/js/landing.js'); ?>"></script>
</body>
</html>
