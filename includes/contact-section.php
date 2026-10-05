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
        <h2>Let's discuss your <span>next project</span>.</h2>
        <?php else: ?>
        <h2>Let's discuss your <span>next website</span>.</h2>
        <?php endif; ?>
        <p>WTF Labs will help you define the right next step.</p>
        <!--
        <p class="contact-address">742 Innovation Drive, Suite 200<br>Austin, TX 78701, USA</p>
        -->
        <p class="contact-address">25140 Kingsland Blvd<br>Katy, Texas 77494, USA</p>
        <p class="contact-phone"><a href="tel:+15550001234">+1 (555) 000-1234</a></p>
      </div>
      <div class="contact-form-wrap">
        <ol class="form-steps" aria-label="Form progress">
          <li class="form-step-dot is-active" data-step-dot="1"><span class="form-step-num">1</span><span class="form-step-label">Contact</span></li>
          <li class="form-step-line" aria-hidden="true"><span></span></li>
          <li class="form-step-dot" data-step-dot="2"><span class="form-step-num">2</span><span class="form-step-label">Project</span></li>
          <li class="form-step-line" aria-hidden="true"><span></span></li>
          <li class="form-step-dot" data-step-dot="3"><span class="form-step-num">3</span><span class="form-step-label">Details</span></li>
        </ol>
        <form class="contact-form contact-form--home" id="contactForm" action="/send-mail.php" method="post" data-steps="3">
          <input type="text" name="website" value="" tabindex="-1" autocomplete="off" class="hp-field" aria-hidden="true">
          <input type="hidden" name="source" value="home-contact">
          <input type="hidden" name="step" value="3">
          <input type="hidden" name="lead_id" value="">
          <div class="contact-form-row">
            <div class="field"><label>What's your name?</label><input type="text" name="name" required autocomplete="name" placeholder="Jane Doe"></div>
            <div class="field"><label>What's your work email?</label><input type="email" name="email" required autocomplete="email" placeholder="jane@company.com"></div>
          </div>
          <div class="contact-form-row">
            <div class="field"><label>What's your phone number?</label><input type="tel" name="phone" required autocomplete="tel" inputmode="tel" placeholder="+1 (555) 000-1234"></div>
            <div class="field"><label>What can we help you with?</label>
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
          </div>
          <div class="field"><label>What's your budget range?</label>
            <div class="budget-pills">
              <label><input type="radio" name="budget" value="10k-20k"> 10k-20k</label>
              <label><input type="radio" name="budget" value="20k-50k"> 20k-50k</label>
              <label><input type="radio" name="budget" value="50k-100k"> 50k-100k</label>
              <label><input type="radio" name="budget" value="100k+"> 100k+</label>
            </div>
          </div>
          <div class="field"><label>What should we know about the project?</label><textarea name="message" rows="3" required placeholder="Goals, timeline, links, anything useful..."></textarea></div>
          <label class="check"><input type="checkbox" name="updates"> Send me occasional updates from WTF Labs.</label>
          <label class="check"><input type="checkbox" name="terms" required> I agree to the Privacy Policy and Terms of use.</label>
          <button type="submit" class="btn btn-lime btn-lg btn-block" data-step-button>Submit</button>
          <p class="form-ok hidden" id="formOk">Thank you! Your submission has been received!</p>
        </form>
      </div>
    </div>
  </div>
</section>
