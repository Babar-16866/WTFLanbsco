<?php
$page_title = 'Thank You | WTF Labs';
$page_description = 'Thanks for reaching out — we received your message and will reply within one business day.';
$current_page = 'thank-you';
$hide_contact_section = true;
include __DIR__ . '/includes/header.php';
?>

<section class="thank-section">
  <div class="container">
    <div class="thank-card reveal">
      <div class="thank-visual" aria-hidden="true">
        <img src="/assets/images/logo-thank-you.webp" alt="" class="thank-logo thank-logo-light">
        <img src="/assets/images/logo-new.webp" alt="" class="thank-logo thank-logo-dark">
        <!--
        <span class="thank-check">
          <svg width="28" height="28" viewBox="0 0 24 24" fill="none" aria-hidden="true">
            <path d="M5 12.5l4.5 4.5L19 7.5" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </span>
        -->
      </div>

      <p class="svc-kicker thank-kicker"><span></span> Message received</p>
      <!-- <h1>Thanks — we'll be in <span class="heading-accent">touch soon</span></h1> -->
      <h1 class="thank-title">Thanks for taking the first step towards your <span class="heading-accent">better business finances.</span></h1>
      <p class="thank-lead">Your inquiry landed with the WTF Labs team. Expect a real reply within one business day with clear next steps.</p>
      <!-- <p class="thank-lead">Thanks for taking the first step towards your better business finances</p> -->
      <p class="thank-lead thank-quote">The journey of a thousand miles, begins with one step</p>

      <ul class="thank-points">
        <li>We review every submission personally - no bots.</li>
        <!-- <li>If it's urgent, WhatsApp or call us anytime.</li> -->
        <li>Meanwhile, explore recent work or how we work.</li>
      </ul>

      <div class="thank-actions">
        <a href="/works.php" class="btn btn-lime btn-lg">See our work</a>
        <a href="/" class="btn btn-lg thank-btn-secondary">Back to home</a>
        <!-- <a href="https://wa.me/15550001234" class="thank-link" target="_blank" rel="noopener noreferrer">WhatsApp us</a> -->
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
