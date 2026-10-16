<?php
/**
 * Sitewide pre-footer contact block (same as homepage).
 * Skip with: $hide_contact_section = true; (e.g. contact page)
 */
if (!empty($hide_contact_section)) {
  return;
}
?>
<section class="contact-section" id="contact">
  <div class="container">
    <div class="contact-layout reveal">
      <div class="contact-intro">
        <?php if (($page_palette ?? '') === 'index2'): ?>
        <h2>Let's have a <span>conversation</span></h2>
        <?php else: ?>
        <h2>Let's discuss your <span>next website</span>.</h2>
        <?php endif; ?>
        <p>WTF Labs will help you define the right next step.</p>
        <p class="contact-address">25140 Kingsland Blvd<br>Katy, Texas 77494, USA</p>
        <p class="contact-phone"><a href="tel:+15123379723">+1 (512) 337-9723</a></p>
      </div>
      <div class="contact-form-wrap">
<?php include __DIR__ . '/step-form.php'; ?>
      </div>
    </div>
  </div>
</section>
