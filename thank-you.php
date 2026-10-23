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
        <img src="/assets/images/logo-thank-you-card.webp" alt="" class="thank-logo thank-logo-light">
        <img src="/assets/images/logo-new.webp" alt="" class="thank-logo thank-logo-dark">
      </div>

      <p class="svc-kicker thank-kicker"><span></span> Message received</p>
<?php if (($_GET['from'] ?? '') === 'contact'): ?>
      <h1 class="thank-title">Message received. <span class="heading-accent">Nice first move.</span></h1>
      <p class="thank-lead">Thanks for reaching out. We'll review what you shared and reply with the next step as soon as we can.</p>
<?php else: ?>
      <h1 class="thank-title">Thanks for taking the first step towards your <span class="heading-accent">better business finances.</span></h1>
      <p class="thank-lead">Your inquiry landed with the WTF Labs team. Expect a real reply within one business day with clear next steps.</p>
<?php endif; ?>
      <p class="thank-lead thank-quote">The journey of a thousand miles, begins with one step</p>

      <ul class="thank-points">
        <li>We review every submission personally - no bots.</li>
        <li>Meanwhile, explore recent work or how we work.</li>
      </ul>

      <div class="thank-actions">
        <a href="/works.php" class="btn btn-lime btn-lg">See our work</a>
        <a href="/" class="btn btn-lg thank-btn-secondary">Back to home</a>
      </div>
    </div>
  </div>
</section>


<?php include __DIR__ . '/includes/footer.php'; ?>
