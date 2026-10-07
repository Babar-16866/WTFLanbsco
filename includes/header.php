<?php
require_once __DIR__ . '/config.php';
?>
<!DOCTYPE html>
<html lang="en"<?php echo !empty($page_palette) ? " data-palette=\"" . htmlspecialchars($page_palette) . "\"" : ""; ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($page_title); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/assets/css/styles.css">
  <link rel="icon" href="/assets/images/logo-new-icon.png" type="image/png">
  <script>
    (function () {
      // Default: light. Dark only if user explicitly chose it.
      if (localStorage.getItem('theme') === 'dark') {
        document.documentElement.setAttribute('data-theme', 'dark');
      } else {
        document.documentElement.removeAttribute('data-theme');
      }
    })();
  </script>
  <meta name="google-site-verification" content="AClQreRTA2svtHIwDjwHwSM0ltFluyrItl7E4zSShUc" />
</head>
<body>
  <div class="scroll-progress" id="scrollProgress"></div>

  <?php if ($show_cookies): ?>
  <div class="cookie-banner" id="cookieBanner">
    <div class="cookie-content">
      <h3>This website uses cookies</h3>
      <p>We use cookies to enhance your experience, analyze site usage, and assist in our marketing efforts. <a href="/about.php">Learn more.</a></p>
    </div>
    <div class="cookie-actions">
      <button class="btn btn-lime" id="allowCookies">Allow all</button>
      <button class="btn btn-outline-white" id="rejectCookies">Reject</button>
    </div>
  </div>
  <?php endif; ?>

  <header class="site-header">
    <nav class="nav-pill">
      <a href="/" class="nav-logo">
        <img class="nav-logo-img nav-logo-light" src="/assets/images/logo-new.webp" alt="WTF Labs" width="72" height="70">
        <img class="nav-logo-img nav-logo-dark" src="/assets/images/logo-new.webp" alt="WTF Labs" width="72" height="70">
      </a>
      <ul class="nav-links">
        <li class="nav-dropdown">
          <a href="/services.php" class="nav-dropdown-btn"<?php echo $current_page === 'services' ? ' aria-current="page"' : ''; ?>>Services <span>&#9662;</span></a>
          <div class="nav-dropdown-menu">
            <!--
            <a href="/graphic-design.php">Graphic Design</a>
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
            <a href="/seo.php">SEO</a>
            <a href="/social-media-advertising.php">Social Media Advertising</a>
            <a href="/google-ads.php">Google Ads</a>
            <a href="/digital-marketing.php">Digital Marketing</a>
            -->
            <!--
            <a href="/web-design.php">Web Design &amp; Development</a>
            <a href="/seo.php">SEO &amp; Local Search</a>
            <a href="/google-ads.php">Google Ads</a>
            <a href="/social-media-advertising.php">Social Media Advertising</a>
            <a href="/graphic-design.php">Branding &amp; Creative</a>
            <a href="/digital-marketing.php">Full-Service Digital Marketing</a>
            -->
            <a href="/web-design.php">Web Design</a>
            <a href="/digital-marketing.php">Digital Marketing</a>
            <a href="/services.php#featured-services">Click One 👆 There's More!</a>
          </div>
        </li>
        <li class="nav-dropdown">
          <a href="/industries.php" class="nav-dropdown-btn"<?php echo $current_page === 'industries' ? ' aria-current="page"' : ''; ?>>Industries <span>&#9662;</span></a>
          <div class="nav-dropdown-menu">
            <a href="/industries.php#remodelers">Remodelers</a>
            <a href="/industries.php#roofing">Roofing</a>
            <a href="/industries.php#handyman">Handyman</a>
            <a href="/industries.php#power-washing">Power Washing</a>
            <a href="/industries.php#hvac">HVAC</a>
            <a href="/industries.php#plumbing">Plumbing</a>
            <a href="/industries.php#pest-control">Pest Control</a>
            <a href="/industries.php#pool-services">Pool Services</a>
            <a href="/industries.php#landscaping">Landscaping</a>
          </div>
        </li>
        <li><a href="/works.php"<?php echo $current_page === 'works' ? ' aria-current="page"' : ''; ?>>Work</a></li>
        <!--
        <li><a href="/how-we-work.php"<?php echo $current_page === 'how-we-work' ? ' aria-current="page"' : ''; ?>>How We Work</a></li>
        -->
        <li><a href="/insights.php"<?php echo $current_page === 'insights' ? ' aria-current="page"' : ''; ?>>Insights</a></li>
        <!--
        <li class="nav-dropdown">
          <a href="/website-brief.php" class="nav-dropdown-btn"<?php echo $current_page === 'forms' ? ' aria-current="page"' : ''; ?>>Forms <span>&#9662;</span></a>
          <div class="nav-dropdown-menu">
            <a href="/website-brief.php">Website Brief</a>
            <a href="/marketing-brief.php">Marketing Brief</a>
            <a href="/client-feedback.php">Client Feedback</a>
          </div>
        </li>
        -->
        <li><a href="/about.php"<?php echo $current_page === 'about' ? ' aria-current="page"' : ''; ?>>About</a></li>
      </ul>
      <button class="theme-toggle" id="themeToggle" type="button" aria-label="Switch to dark theme" title="Toggle theme">
        <svg class="theme-icon theme-icon-sun" width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true">
          <circle cx="12" cy="12" r="4" stroke="currentColor" stroke-width="2"/>
          <path d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M4.93 19.07l1.41-1.41M17.66 6.34l1.41-1.41" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
        </svg>
        <svg class="theme-icon theme-icon-moon" width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true">
          <path d="M21 14.5A8.5 8.5 0 0 1 9.5 3 7 7 0 1 0 21 14.5z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
        </svg>
      </button>
      <a href="/free-audit.php" class="btn btn-lime btn-sm">FREE Consultation</a>
      <button class="nav-burger" type="button" aria-label="Menu"><span></span><span></span></button>
    </nav>
    
    
  </header>
