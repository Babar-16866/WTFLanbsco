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
        <?php /*
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
        */ ?>
        <form class="contact-form contact-form--home" id="contactForm" action="/send-mail.php" method="post" data-steps="3" novalidate>
          <input type="text" name="website" value="" tabindex="-1" autocomplete="off" class="hp-field" aria-hidden="true">
          <input type="hidden" name="source" value="home-contact">
          <input type="hidden" name="step" value="1">
          <input type="hidden" name="lead_id" value="">
          <div class="form-step" data-step="1">
            <p class="form-step-title">Let's start here</p>
            <div class="field"><label>Full name</label><input type="text" name="name" required autocomplete="name" placeholder="Jane Doe"></div>
            <div class="contact-form-row">
              <div class="field"><label>Phone</label><input type="tel" name="phone" required autocomplete="tel" inputmode="tel" placeholder="+1 (555) 000-1234"></div>
              <div class="field"><label>Email</label><input type="email" name="email" required autocomplete="email" placeholder="jane@company.com"></div>
            </div>
            <div class="field"><label>What industry do you operate in?</label><input type="text" name="industry_operate" placeholder="e.g. Roofing"></div>
            <button type="button" class="btn btn-lime btn-lg btn-block" data-step-next>Next</button>
          </div>
          <div class="form-step" data-step="2" hidden>
            <p class="form-step-title">Tell us a little more so we understand your current situation...</p>
            <div class="contact-form-row">
              <div class="field"><label>Which industry are you in?</label>
                <select name="industry" required data-other-select>
                  <option value="" disabled selected>Select your industry</option>
                <option>Remodelers</option>
                <option>Roofing</option>
                <option>Handyman</option>
                <option>Power Washing</option>
                <option>HVAC</option>
                <option>Plumbing</option>
                <option>Pest Control</option>
                <option>Pool Services</option>
                <option>Landscaping</option>
                <option>Other</option>
                </select>
              </div>
              <div class="field"><label>Which service are you interested in?</label>
                <select name="help" required>
                  <option value="" disabled selected>Select a service</option>
                  <option>New Website</option>
                  <option>Old Website Redesign</option>
                  <option>Digital Marketing</option>
                  <option>I&#39;d like to discuss and decide</option>
                </select>
              </div>
            </div>
            <div class="field form-other-field" hidden><label>Your industry</label><input type="text" name="industry_other" placeholder="Type your industry"></div>
            <div class="contact-form-row">
              <div class="field"><label>How much is a reasonable investment for your business growth?</label>
                <select name="budget" required>
                  <option value="" disabled selected>Select a budget</option>
                  <option>$2,000 - $3,500</option>
                  <option>$3,500 - $5,000</option>
                  <option>$5,000 - $10,000</option>
                  <option>I am not sure. I&#39;d like to discuss.</option>
                </select>
              </div>
              <div class="field"><label>How did you hear about us?</label>
                <select name="heard_about">
                  <option value="" disabled selected>Select an option</option>
                  <option>Instagram</option>
                  <option>TikTok</option>
                  <option>YouTube</option>
                  <option>Google Search</option>
                  <option>Referred by someone</option>
                  <option>Facebook</option>
                  <option>Other</option>
                </select>
              </div>
            </div>
            <button type="button" class="btn btn-lime btn-lg btn-block" data-step-next>Next</button>
          </div>
          <div class="form-step" data-step="3" hidden>
            <p class="form-step-title">How much are you willing to invest for this goal?</p>
            <p class="form-commit-label">Are you committed?</p>
            <div class="form-commit">
              <button type="submit" class="btn btn-lime btn-lg" name="commitment" value="100% committed">100% Committed</button>
              <button type="button" class="btn btn-lg form-commit-runaway" tabindex="-1" aria-hidden="true">50%</button>
              <button type="submit" class="btn btn-lg form-commit-alt" name="commitment" value="Not committed">Not Committed</button>
            </div>
          </div>
          <div class="form-step-note" hidden aria-live="polite"></div>
          <p class="form-ok hidden" id="formOk">Thank you! Your submission has been received!</p>
        </form>
      </div>
    </div>
  </div>
</section>
