<?php
$step_form_id = $step_form_id ?? 'contactForm';
$step_form_source = $step_form_source ?? 'home-contact';
$step_form_ok_id = $step_form_ok_id ?? 'formOk';
?>
        <ol class="form-steps" aria-label="Form progress">
          <li class="form-step-dot is-active" data-step-dot="1"><span class="form-step-num">1</span><span class="form-step-label">Contact</span></li>
          <li class="form-step-line" aria-hidden="true"><span></span></li>
          <li class="form-step-dot" data-step-dot="2"><span class="form-step-num">2</span><span class="form-step-label">Project</span></li>
          <li class="form-step-line" aria-hidden="true"><span></span></li>
          <li class="form-step-dot" data-step-dot="3"><span class="form-step-num">3</span><span class="form-step-label">Details</span></li>
        </ol>
        <form class="contact-form contact-form--home" id="<?php echo $step_form_id; ?>" action="/send-mail.php" method="post" data-steps="3" novalidate>
          <input type="text" name="website" value="" tabindex="-1" autocomplete="off" class="hp-field" aria-hidden="true">
          <input type="hidden" name="source" value="<?php echo $step_form_source; ?>">
          <input type="hidden" name="step" value="1">
          <input type="hidden" name="lead_id" value="">
          <div class="form-step" data-step="1">
            <p class="form-step-title">Let's start here</p>
            <input type="hidden" name="name" value="">
            <div class="contact-form-row">
              <div class="field"><label>First name</label><input type="text" name="first_name" required autocomplete="given-name" placeholder="Jane"></div>
              <div class="field"><label>Last name</label><input type="text" name="last_name" required autocomplete="family-name" placeholder="Doe"></div>
            </div>
            <div class="contact-form-row">
              <div class="field"><label>Email</label><input type="email" name="email" required autocomplete="email" placeholder="jane@company.com"></div>
              <div class="field"><label>Phone</label><input type="tel" name="phone" required autocomplete="tel" inputmode="tel" placeholder="+1 (512) 337-9723"></div>
            </div>
            <button type="button" class="btn btn-lime btn-lg btn-block" data-step-next>Next</button>
          </div>
          <div class="form-step" data-step="2" hidden>
            <p class="form-step-title">Tell us a little more so we understand your current situation...</p>
            <div class="contact-form-row">
              <div class="field"><label>Which industry are you in?</label>
                <select name="industry" required data-other-select>
                  <option value="" disabled selected>Select your industry</option>
                <option>Remodeling</option>
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
            <div class="field form-url-field" hidden><label>What is your current website URL?</label><input type="url" name="website_url" inputmode="url" placeholder="https://www.yourwebsite.com"></div>
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
            <p class="form-step-title">How committed are you for your business growth?</p>
            <div class="form-commit">
              <div class="form-peek form-peek--top" aria-hidden="true">
                <span class="form-peek-word form-peek-word--left">CATCH ME</span>
                <span class="form-peek-head"><img src="/assets/images/main-banner.webp" alt="" width="1041" height="1069" loading="lazy"></span>
                <span class="form-peek-word form-peek-word--right">IF YOU CAN</span>
              </div>
              <button type="submit" class="btn btn-lime btn-lg" name="commitment" value="100% committed">100% Committed, and I promise I won't waste your time</button>
              <button type="button" class="btn btn-lg form-commit-runaway" tabindex="-1" aria-hidden="true">50% committed and I promise I will waste your time</button>
              <button type="button" class="btn btn-lg form-commit-alt" data-not-committed>I'd like to discuss, but I promise I won't waste your time</button>
            </div>
          </div>
          <div class="form-step-note" hidden aria-live="polite"></div>
          <div class="form-peek form-peek--bottom" aria-hidden="true">
            <span class="form-peek-word form-peek-word--left">CATCH ME</span>
            <span class="form-peek-head"><img src="/assets/images/main-banner.webp" alt="" width="1041" height="1069" loading="lazy"></span>
            <span class="form-peek-word form-peek-word--right">IF YOU CAN</span>
          </div>
          <p class="form-ok hidden" id="<?php echo $step_form_ok_id; ?>">Thank you! Your submission has been received!</p>
        </form>
<?php unset($step_form_id, $step_form_source, $step_form_ok_id); ?>
