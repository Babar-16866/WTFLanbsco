<?php
if (!isset($hide_contact_section) && isset($current_page) && $current_page === 'contact') {
  $hide_contact_section = true;
}
include __DIR__ . '/contact-section.php';
?>
  <footer class="site-footer">
    <div class="container footer-grid">
      <div class="footer-brand">
        <a href="/" class="footer-logo">
          <img loading="lazy" src="/assets/images/logo-new.webp" alt="WTF Labs">
        </a>
        <p>WTF Labs - B2B website design & development since 2018.</p>
        <p class="footer-address">25140 Kingsland Blvd<br>Katy, Texas 77494, USA</p>
        <p class="footer-address"><a href="mailto:info@wtflabsco.com">info@wtflabsco.com</a></p>
        <p class="footer-address"><a href="tel:+15123379723">+1 (512) 337-9723</a></p>
      </div>
      <div>
        <h4>Company</h4>
        <a href="/about">About</a>
        <a href="/works">Work</a>
        <a href="/how-we-work">How We Work</a>
        <a href="/contact">Contact</a>
        <a href="/faqs">FAQs</a>
      </div>
      <div>
        <h4>Services</h4>
        <a href="/web-design">Web Design &amp; Development</a>
        <a href="/seo">SEO &amp; Local Search</a>
        <a href="/google-ads">Google Ads</a>
        <a href="/social-media-advertising">Social Media Advertising</a>
        <a href="/graphic-design">Branding &amp; Creative</a>
        <a href="/digital-marketing">Full-Service Digital Marketing</a>
      </div>
      <div>
        <h4>Industries</h4>
        <a href="/industries#remodelers">Remodeling</a>
        <a href="/industries#hvac">HVAC</a>
        <a href="/industries#landscaping">Landscaping</a>
        <a href="/industries#roofing">Roofing</a>
        <a href="/industries#plumbing">Plumbing</a>
        <a href="/industries#pool-services">Pool Services</a>
        <a href="/industries#power-washing">Power Washing</a>
        <a href="/industries#handyman">Handyman</a>
        <a href="/industries#pest-control">Pest Control</a>
      </div>
      <div>
        <h4>Resources</h4>
        <a href="/insights">Insights</a>
        <a href="/website-brief">Website Brief</a>
        <a href="/marketing-brief">Marketing Brief</a>
        <a href="/client-feedback">Client Feedback</a>
      </div>
      <div>
        <h4>Legal</h4>
        <a href="/privacy-policy">Privacy Policy</a>
        <a href="/terms-and-conditions">Terms</a>
        <a href="/refund-policy">Refund Policy</a>
      </div>
    </div>
    <div class="container footer-copy"><p>&copy; <?php echo date('Y'); ?> WTF Labs. All rights reserved.</p></div>
  </footer>


  <?php if ($current_page !== 'works'): ?>
  <!-- Sticky work CTA -->
  <?php if (empty($hide_work_cta)): ?>
  <a href="/works" class="btn btn-lime sticky-work-cta" id="stickyWorkCta" aria-hidden="true" tabindex="-1">Just Show Me The Work</a>
  <?php endif; ?>
  <?php endif; ?>

  <!-- Brand popup -->
  <div class="promo-popup promo-popup--exit" id="promoPopup" hidden>
    <div class="promo-popup-backdrop" data-popup-close></div>
    <div class="promo-popup-dialog exit-pop" role="dialog" aria-modal="true" aria-labelledby="promoPopupTitle">
      <button class="promo-popup-close" type="button" data-popup-close aria-label="Close">&times;</button>
      <div class="exit-pop-art" aria-hidden="true">
        <img src="/assets/images/main-banner.webp" alt="" width="1041" height="1069" loading="lazy">
      </div>
      <div class="exit-pop-copy">
        <p class="promo-popup-kicker"><span></span> Limited slots this month</p>
        <h2 id="promoPopupTitle">Think again <em>before you go.</em></h2>
        <p class="exit-pop-text">Your next big job is searching for a contractor right now. In one free call we show you exactly what is costing you leads and how a better website and smarter marketing win them back.</p>
        <ul class="exit-pop-points">
          <li>Free 30-minute strategy call</li>
          <li>Honest review of your site and ads</li>
          <li>A clear plan, no pressure</li>
        </ul>
        <a href="/consultation" class="btn btn-lime exit-pop-btn" target="_blank" rel="noopener" data-no-popup>Claim your Free consultation</a>
      </div>
    </div>
  </div>

  <div class="step-popup" id="stepPopup" hidden>
    <div class="step-popup-backdrop" data-step-popup-close></div>
    <div class="step-popup-dialog" role="dialog" aria-modal="true" aria-labelledby="stepPopupTitle">
      <button class="step-popup-close" type="button" data-step-popup-close aria-label="Close">&times;</button>
      <div class="step-popup-head">
        <p class="step-popup-kicker"><span></span> Free consultation</p>
        <h2 id="stepPopupTitle">Let&#39;s have a <span>conversation</span></h2>
      </div>
      <div class="contact-form-wrap">
<?php
$step_form_id = 'stepPopupForm';
$step_form_source = 'free-consultation';
$step_form_ok_id = 'stepPopupOk';
include __DIR__ . '/step-form.php';
?>
      </div>
    </div>
  </div>

  <!-- Content protection notice -->
  <?php if (!getenv('VERCEL')): ?>
  <div class="protect-popup" id="protectPopup" hidden>
    <div class="protect-popup-backdrop" data-protect-close></div>
    <div class="protect-popup-dialog" role="dialog" aria-modal="true" aria-labelledby="protectPopupTitle">
      <button class="protect-popup-close" type="button" data-protect-close aria-label="Close">&times;</button>
      <h2 id="protectPopupTitle">This content is protected</h2>
      <button type="button" class="btn btn-lime" data-protect-close>Got it</button>
    </div>
  </div>
  <?php endif; ?>

  <script src="/assets/js/main.js?v=<?php echo asset_version('assets/js/main.js'); ?>"></script>
  
</body>
</html>
