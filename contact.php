<?php
$page_title = 'Contact | WTF Labs';
$page_description = 'Let\'s discuss your next website. WTF Labs will help you define the right next step.';
$current_page = 'contact';
include __DIR__ . '/includes/header.php';
?>

<?php
$banner_kicker = 'Contact';
$banner_h1 = 'Let\'s discuss your <span class="about-hero-accent">next website</span>';
$banner_lead = 'Tell us about your goals — we\'ll help you define the right next step. Real replies, usually within one business day.';
$banner_primary_label = 'Get a quote';
$banner_secondary_label = 'WhatsApp';
$banner_secondary_href = 'https://wa.me/15550001234';
$banner_image = '/assets/images/people-office.jpg';
$banner_float1 = '/assets/images/team-1.jpg';
$banner_float2 = '/assets/images/team-3.jpg';
$banner_card = 'One senior team. Clear next steps.';
include __DIR__ . '/includes/page-banner.php';
?>

<section class="page-section contact-page-section">
  <div class="container">
    <div class="contact-page-card reveal">
      <aside class="contact-page-aside">
        <p class="contact-page-label">Get in touch</p>
        <h2>WTF Labs</h2>
        <p class="contact-page-lead">One senior team from strategy to launch. Real replies - usually within one business day.</p>

        <ul class="contact-page-details">
          <li>
            <span class="contact-page-icon" aria-hidden="true">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M12 21s7-4.5 7-11a7 7 0 1 0-14 0c0 6.5 7 11 7 11z" stroke="currentColor" stroke-width="2"/><circle cx="12" cy="10" r="2.5" stroke="currentColor" stroke-width="2"/></svg>
            </span>
            <div>
              <strong>Office</strong>
              <p>742 Innovation Drive, Suite 200<br>Austin, TX 78701, USA</p>
            </div>
          </li>
          <li>
            <span class="contact-page-icon" aria-hidden="true">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M22 16.9v2a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h2a2 2 0 0 1 2 1.7c.1.9.3 1.8.6 2.6a2 2 0 0 1-.5 2.1L7.1 9.5a16 16 0 0 0 6 6l1.1-1.1a2 2 0 0 1 2.1-.5c.8.3 1.7.5 2.6.6a2 2 0 0 1 1.7 2z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </span>
            <div>
              <strong>Phone</strong>
              <p><a href="tel:+15550001234">+1 (555) 000-1234</a></p>
            </div>
          </li>
          <li>
            <span class="contact-page-icon" aria-hidden="true">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M4 6h16v12H4z" stroke="currentColor" stroke-width="2"/><path d="m4 7 8 6 8-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </span>
            <div>
              <strong>Email</strong>
              <p><a href="mailto:hello@wtflabs.com">hello@wtflabs.com</a></p>
            </div>
          </li>
        </ul>

        <div class="contact-page-links">
          <a href="https://wa.me/15550001234" target="_blank" rel="noopener noreferrer">WhatsApp</a>
          <a href="/how-we-work.php">How we work</a>
          <a href="/about.php">About us</a>
          <a href="/faqs.php">FAQs</a>
        </div>
      </aside>

      <div class="contact-page-form-wrap">
        <p class="contact-page-label">Project inquiry</p>
        <h3>Tell us what you're building</h3>
        <form class="contact-form contact-page-form" id="contactForm" action="/send-mail.php" method="post">
          <input type="text" name="website" value="" tabindex="-1" autocomplete="off" class="hp-field" aria-hidden="true">
          <input type="hidden" name="source" value="contact-page">
          <div class="contact-form-row">
            <div class="field">
              <label for="contactName">What's your name?</label>
              <input id="contactName" type="text" name="name" required autocomplete="name" placeholder="Jane Doe">
            </div>
            <div class="field">
              <label for="contactEmail">What's your work email?</label>
              <input id="contactEmail" type="email" name="email" required autocomplete="email" placeholder="jane@company.com">
            </div>
          </div>
          <div class="field">
            <label for="contactPhone">What's your phone number?</label>
            <input id="contactPhone" type="tel" name="phone" required autocomplete="tel" inputmode="tel" placeholder="+1 (555) 000-1234">
          </div>
          <div class="field">
            <label for="contactHelp">What can we help you with?</label>
            <select id="contactHelp" name="help" required>
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
            <label for="contactMessage">What should we know about the project?</label>
            <textarea id="contactMessage" name="message" rows="4" required placeholder="Goals, timeline, links, anything useful..."></textarea>
          </div>
          <label class="check">
            <input type="checkbox" name="terms" required>
            <span>I agree to the <a href="/privacy-policy.php">Privacy Policy</a> and <a href="/terms-and-conditions.php">Terms of use</a>.</span>
          </label>
          <button type="submit" class="btn btn-lime btn-lg btn-block">Submit</button>
          <p class="form-ok hidden" id="formOk">Thank you! Your submission has been received!</p>
        </form>
      </div>
    </div>
  </div>
</section>

<section class="faq-section" id="contact-faq">
  <div class="container">
    <div class="section-header reveal">
      <p class="subheading">Before you write</p>
      <h2>Quick answers while you <span class="heading-accent">reach out</span></h2>
    </div>
    <div class="faq-list reveal">
      <div class="faq-item is-open">
        <button class="faq-trigger" type="button" aria-expanded="true">
          <span class="faq-num">01</span>
          <span class="faq-question">How much does a website project cost?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region"><div class="faq-panel-inner"><p>Website projects start at $10,000. Most full-cycle B2B website engagements fall between $25,000 and $50,000.</p></div></div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">02</span>
          <span class="faq-question">How are payments structured?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region"><div class="faq-panel-inner"><p>Full-cycle: 30% upfront, 40% after design, 30% on completion. Smaller projects: 50/50.</p></div></div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">03</span>
          <span class="faq-question">How fast do you reply?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region"><div class="faq-panel-inner"><p>We typically respond within one business day with next steps and any clarifying questions.</p></div></div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">04</span>
          <span class="faq-question">Can you move faster if we have a hard deadline?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region"><div class="faq-panel-inner"><p>Yes, when the deadline is realistic. We can increase the team and run tasks in parallel.</p></div></div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">05</span>
          <span class="faq-question">What should I include in my message?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region"><div class="faq-panel-inner"><p>Goals, timeline, budget range, and any links to your current site or references - enough for us to give a useful first reply.</p></div></div>
      </div>
    </div>
    <div class="faq-all-wrap reveal">
      <a href="/faqs.php" class="btn btn-lime faq-all-btn">View all FAQs <span aria-hidden="true">&rarr;</span></a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
