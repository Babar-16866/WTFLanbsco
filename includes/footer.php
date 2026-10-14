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
      </div>
      <div>
        <h4>Company</h4>
        <a href="/about.php">About</a>
        <a href="/works.php">Work</a>
        <a href="/how-we-work.php">How We Work</a>
        <a href="/contact.php">Contact</a>
        <a href="/faqs.php">FAQs</a>
      </div>
      <div>
        <h4>Services</h4>
        <a href="/web-design.php">Web Design &amp; Development</a>
        <a href="/seo.php">SEO &amp; Local Search</a>
        <a href="/google-ads.php">Google Ads</a>
        <a href="/social-media-advertising.php">Social Media Advertising</a>
        <a href="/graphic-design.php">Branding &amp; Creative</a>
        <a href="/digital-marketing.php">Full-Service Digital Marketing</a>
      </div>
      <div>
        <h4>Industries</h4>
        <a href="/industries.php#remodelers">Remodelers</a>
        <a href="/industries.php#hvac">HVAC</a>
        <a href="/industries.php#landscaping">Landscaping</a>
        <a href="/industries.php#roofing">Roofing</a>
        <a href="/industries.php#plumbing">Plumbing</a>
        <a href="/industries.php#pool-services">Pool Services</a>
        <a href="/industries.php#power-washing">Power Washing</a>
        <a href="/industries.php#handyman">Handyman</a>
        <a href="/industries.php#pest-control">Pest Control</a>
      </div>
      <div>
        <h4>Resources</h4>
        <a href="/insights.php">Insights</a>
        <a href="/website-brief.php">Website Brief</a>
        <a href="/marketing-brief.php">Marketing Brief</a>
        <a href="/client-feedback.php">Client Feedback</a>
      </div>
      <div>
        <h4>Legal</h4>
        <a href="/privacy-policy.php">Privacy Policy</a>
        <a href="/terms-and-conditions.php">Terms</a>
        <a href="/refund-policy.php">Refund Policy</a>
      </div>
    </div>
    <div class="container footer-copy"><p>&copy; <?php echo date('Y'); ?> WTF Labs. All rights reserved.</p></div>
  </footer>

  <button type="button" class="back-to-top" id="backToTop" aria-label="Back to top" hidden>
    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="M10 16V4M4.5 9.5 10 4l5.5 5.5" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
  </button>

  <?php if ($current_page !== 'works'): ?>
  <!-- Sticky work CTA -->
  <a href="/works.php" class="btn btn-lime sticky-work-cta" id="stickyWorkCta" aria-hidden="true" tabindex="-1">Just Show Me The Work</a>
  <?php endif; ?>

  <!-- Brand popup -->
  <div class="promo-popup" id="promoPopup" hidden>
    <div class="promo-popup-backdrop" data-popup-close></div>
    <div class="promo-popup-dialog" role="dialog" aria-modal="true" aria-labelledby="promoPopupTitle">
      <button class="promo-popup-close" type="button" data-popup-close aria-label="Close">&times;</button>
      <div class="promo-popup-glow" aria-hidden="true"></div>
      <div class="promo-popup-inner">
        <div class="promo-popup-brand">
          <img loading="lazy" src="/assets/images/logo-new.webp" alt="WTF Labs">
        </div>
        <p class="promo-popup-kicker"><span></span> Limited slots this month</p>
        <h2 id="promoPopupTitle">Let's build something <em>WTF</em>-worthy</h2>
        <p class="promo-popup-text">Tell us about your project - same form, faster reply.</p>

        <form class="promo-popup-form contact-form" id="promoPopupForm" action="/send-mail.php" method="post">
          <input type="text" name="website" value="" tabindex="-1" autocomplete="off" class="hp-field" aria-hidden="true">
          <input type="hidden" name="source" value="promo-popup">
          <div class="promo-popup-row">
            <div class="field">
              <label>What's your name?</label>
              <input type="text" name="name" required autocomplete="name" placeholder="Jane Doe">
            </div>
            <div class="field">
              <label>What's your work email?</label>
              <input type="email" name="email" required autocomplete="email" placeholder="jane@company.com">
            </div>
          </div>
          <div class="field">
            <label>What's your phone number?</label>
            <input type="tel" name="phone" required autocomplete="tel" inputmode="tel" placeholder="+1 (512) 337-9723">
          </div>
          <div class="field">
            <label>What can we help you with?</label>
            <select name="help" required>
              <option value="" disabled selected>Select a service</option>
              <option>Company &amp; Business website</option>
              <option>Landing page</option>
              <option>Web applications &amp; SaaS</option>
              <option>Graphic Design</option>
              <option>SEO / Ads / Digital Marketing</option>
              <option>Custom Webflow website</option>
            </select>
          </div>
          <div class="field">
            <label>What's your budget range?</label>
            <div class="budget-pills">
              <label><input type="radio" name="budget" value="10k-20k"> 10k-20k</label>
              <label><input type="radio" name="budget" value="20k-50k"> 20k-50k</label>
              <label><input type="radio" name="budget" value="50k-100k"> 50k-100k</label>
              <label><input type="radio" name="budget" value="100k+"> 100k+</label>
            </div>
          </div>
          <div class="field">
            <label>What should we know about the project?</label>
            <textarea name="message" rows="2" required placeholder="Goals, timeline, links, anything useful..."></textarea>
          </div>
          <label class="check"><input type="checkbox" name="terms" required> I agree to the <a href="/privacy-policy.php" target="_blank" rel="noopener">Privacy Policy</a> and <a href="/terms-and-conditions.php" target="_blank" rel="noopener">Terms of use</a>.</label>
          <button type="submit" class="btn btn-lime btn-block promo-popup-submit">Submit</button>
        </form>

        <p class="promo-popup-ok" id="promoPopupOk" hidden>Thank you! Your submission has been received!</p>
      </div>
    </div>
  </div>

  <!-- Content protection notice -->
  <div class="protect-popup" id="protectPopup" hidden>
    <div class="protect-popup-backdrop" data-protect-close></div>
    <div class="protect-popup-dialog" role="dialog" aria-modal="true" aria-labelledby="protectPopupTitle">
      <button class="protect-popup-close" type="button" data-protect-close aria-label="Close">&times;</button>
      <h2 id="protectPopupTitle">This content is protected</h2>
      <button type="button" class="btn btn-lime" data-protect-close>Got it</button>
    </div>
  </div>

  <script src="/assets/js/main.js?v=<?php echo asset_version('assets/js/main.js'); ?>"></script>
</body>
</html>
