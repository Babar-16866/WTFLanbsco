<?php
$page_title = 'Marketing Brief | WTF Labs';
$page_description = 'Tell us about your marketing goals, channels, budget, and market so we can plan SEO, ads, and campaigns that bring in the right leads.';
$current_page = 'forms';
$hide_contact_section = true;
include __DIR__ . '/includes/header.php';
?>

<section class="ihero-section">
  <div class="ihero-box">
    <header class="ihero-header reveal">
      <p class="ihero-eyebrow"><span class="ihero-eyebrow-dot"></span> Marketing Brief</p>
      <h1 class="ihero-heading">Plan marketing that brings <span class="accent-lime">real leads</span></h1>
      <p class="ihero-lead">Share your goals, market, and current channels. We&#x27;ll come back with a focused plan for SEO, Google Ads, and social — built around booked jobs, not vanity metrics.</p>
    </header>
    <div class="ihero-stage">
      <div class="hcar" data-hcar>
        <div class="hcar-track">
          <div class="hcar-card"><img src="/assets/images/hcar-marketing-brief-1.webp" alt="Marketing Brief image 1" loading="lazy"></div>
          <div class="hcar-card"><img src="/assets/images/hcar-marketing-brief-2.webp" alt="Marketing Brief image 2" loading="lazy"></div>
          <div class="hcar-card"><img src="/assets/images/hcar-marketing-brief-3.webp" alt="Marketing Brief image 3" loading="lazy"></div>
          <div class="hcar-card"><img src="/assets/images/hcar-marketing-brief-4.webp" alt="Marketing Brief image 4" loading="lazy"></div>
          <div class="hcar-card"><img src="/assets/images/hcar-marketing-brief-5.webp" alt="Marketing Brief image 5" loading="lazy"></div>
          <div class="hcar-card"><img src="/assets/images/hcar-marketing-brief-6.webp" alt="Marketing Brief image 6" loading="lazy"></div>
        </div>
        <div class="hcar-nav">
          <button type="button" class="hcar-arrow hcar-prev" aria-label="Previous image"><svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M15 18l-6-6 6-6" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
          <button type="button" class="hcar-arrow hcar-next" aria-label="Next image"><svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M9 6l6 6-6 6" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
        </div>
      </div>
      <a href="#brief-form" class="ihero-primary reveal reveal-delay-3"><span class="ihero-primary-label">Fill out the brief</span></a>
      <div class="ihero-secondary reveal reveal-delay-1">
        <a href="/works.php" class="ihero-secondary-btn"><span class="ihero-secondary-label">See our work</span></a>
      </div>
    </div>
  </div>
</section>

<section class="niche-strip" aria-label="What we cover">
  <div class="niche-strip-track">
    <ul class="niche-strip-list">
      <li>Marketing Goals</li>
      <li>Ideal Customers</li>
      <li>Service Areas</li>
      <li>Channels</li>
      <li>Monthly Budget</li>
      <li>Offers</li>
      <li>Competitors</li>
      <li>Tracking</li>
    </ul>
    <ul class="niche-strip-list" aria-hidden="true">
      <li>Marketing Goals</li>
      <li>Ideal Customers</li>
      <li>Service Areas</li>
      <li>Channels</li>
      <li>Monthly Budget</li>
      <li>Offers</li>
      <li>Competitors</li>
      <li>Tracking</li>
    </ul>
  </div>
</section>

<section class="page-section contact-page-section" id="brief-form">
  <div class="container">
    <div class="contact-page-card reveal">
      <aside class="contact-page-aside">
        <p class="contact-page-label">What happens next</p>
        <h2>Marketing Brief</h2>
        <p class="contact-page-lead">Takes about 5 minutes. Rough numbers are fine - we just need a picture of where you are and where you want to be.</p>

        <ul class="contact-page-details">
          <li>
            <span class="contact-page-icon" aria-hidden="true">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><circle cx="11" cy="11" r="7" stroke="currentColor" stroke-width="2"/><path d="m20 20-3.5-3.5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
            </span>
            <div>
              <strong>1. Market &amp; competitor check</strong>
              <p>We look at who ranks and advertises in your area before the call.</p>
            </div>
          </li>
          <li>
            <span class="contact-page-icon" aria-hidden="true">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M3 3v18h18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><path d="m7 15 4-4 3 3 5-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </span>
            <div>
              <strong>2. Strategy call</strong>
              <p>We walk through channels, budget split, and realistic lead targets.</p>
            </div>
          </li>
          <li>
            <span class="contact-page-icon" aria-hidden="true">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/><path d="M14 2v6h6M8 13h8M8 17h5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
            </span>
            <div>
              <strong>3. 90-day plan</strong>
              <p>A clear plan with channels, monthly budget, and how we'll report results.</p>
            </div>
          </li>
        </ul>

        <div class="contact-page-links">
          <a href="/website-brief.php">Website Brief</a>
          <a href="/contact.php" data-open-step-popup>Free Consultation</a>
          <a href="/digital-marketing.php">Digital Marketing</a>
          <a href="/insights.php">Insights</a>
        </div>
      </aside>

      <div class="contact-page-form-wrap">
        <p class="contact-page-label">Marketing details</p>
        <h3>Tell us about your marketing</h3>
        <form class="contact-form contact-page-form" id="marketingBriefForm" action="/send-mail.php" method="post">
          <input type="text" name="website" value="" tabindex="-1" autocomplete="off" class="hp-field" aria-hidden="true">
          <input type="hidden" name="source" value="marketing-brief">
          <div class="contact-form-row">
            <div class="field">
              <label for="mbName">What's your name?</label>
              <input id="mbName" type="text" name="name" required autocomplete="name" placeholder="Jane Doe">
            </div>
            <div class="field">
              <label for="mbEmail">What's your work email?</label>
              <input id="mbEmail" type="email" name="email" required autocomplete="email" placeholder="jane@company.com">
            </div>
          </div>
          <div class="contact-form-row">
            <div class="field">
              <label for="mbPhone">What's your phone number?</label>
              <input id="mbPhone" type="tel" name="phone" autocomplete="tel" inputmode="tel" placeholder="+1 (512) 337-9723">
            </div>
            <div class="field">
              <label for="mbCompany">Company name</label>
              <input id="mbCompany" type="text" name="company" autocomplete="organization" placeholder="Acme HVAC">
            </div>
          </div>
          <div class="contact-form-row">
            <div class="field">
              <label for="mbSite">Website URL</label>
              <input id="mbSite" type="url" name="site_url" placeholder="https://www.yoursite.com">
            </div>
            <div class="field">
              <label for="mbIndustry">Your industry</label>
              <select id="mbIndustry" name="industry" required>
                <option value="" disabled selected>Select an industry</option>
                <option>Remodeling</option>
                <option>HVAC</option>
                <option>Plumbing</option>
                <option>Roofing</option>
                <option>Pest Control</option>
                <option>Pool Services</option>
                <option>Landscaping</option>
                <option>Handyman</option>
                <option>Power Washing</option>
                <option>Other</option>
              </select>
            </div>
          </div>
          <div class="field">
            <label>Which services are you interested in? (pick any)</label>
            <div class="budget-pills">
              <label><input type="checkbox" name="services[]" value="SEO"> SEO</label>
              <label><input type="checkbox" name="services[]" value="Local SEO"> Local SEO</label>
              <label><input type="checkbox" name="services[]" value="Google Ads"> Google Ads</label>
              <label><input type="checkbox" name="services[]" value="Local Services Ads"> Local Services Ads</label>
              <label><input type="checkbox" name="services[]" value="Social ads"> Social ads</label>
              <label><input type="checkbox" name="services[]" value="Email marketing"> Email marketing</label>
              <label><input type="checkbox" name="services[]" value="Content"> Content</label>
            </div>
          </div>
          <div class="field">
            <label>What's the main goal?</label>
            <div class="budget-pills">
              <label><input type="radio" name="goal" value="More calls" checked> More calls</label>
              <label><input type="radio" name="goal" value="More form leads"> More form leads</label>
              <label><input type="radio" name="goal" value="Bigger jobs"> Bigger jobs</label>
              <label><input type="radio" name="goal" value="Recurring customers"> Recurring customers</label>
              <label><input type="radio" name="goal" value="Brand awareness"> Brand awareness</label>
            </div>
          </div>
          <div class="contact-form-row">
            <div class="field">
              <label for="mbArea">Service area</label>
              <input id="mbArea" type="text" name="service_area" placeholder="Cities, counties, or radius">
            </div>
            <div class="field">
              <label for="mbSpend">Current monthly ad spend</label>
              <select id="mbSpend" name="current_spend" required>
                <option value="" disabled selected>Select a range</option>
                <option>Not advertising yet</option>
                <option>Under $1,000</option>
                <option>$1,000 - $3,000</option>
                <option>$3,000 - $10,000</option>
                <option>$10,000+</option>
              </select>
            </div>
          </div>
          <div class="field">
            <label>Is call and form tracking set up?</label>
            <div class="budget-pills">
              <label><input type="radio" name="tracking" value="Yes"> Yes</label>
              <label><input type="radio" name="tracking" value="Partly"> Partly</label>
              <label><input type="radio" name="tracking" value="No"> No</label>
              <label><input type="radio" name="tracking" value="Not sure"> Not sure</label>
            </div>
          </div>
          <div class="field">
            <label for="mbCompetitors">Main competitors (optional)</label>
            <input id="mbCompetitors" type="text" name="competitors" placeholder="Company names or websites">
          </div>
          <div class="field">
            <label>Monthly marketing budget (incl. management)</label>
            <div class="budget-pills">
              <label><input type="radio" name="budget" value="1k-3k"> 1k-3k</label>
              <label><input type="radio" name="budget" value="3k-7k"> 3k-7k</label>
              <label><input type="radio" name="budget" value="7k-15k"> 7k-15k</label>
              <label><input type="radio" name="budget" value="15k+"> 15k+</label>
            </div>
          </div>
          <div class="field">
            <label for="mbMessage">What's working, and what isn't?</label>
            <textarea id="mbMessage" name="message" rows="4" required placeholder="Channels you've tried, results so far, what you want to change..."></textarea>
          </div>
          <label class="check">
            <input type="checkbox" name="terms" required>
            <span>I agree to the <a href="/privacy-policy.php">Privacy Policy</a> and <a href="/terms-and-conditions.php">Terms of use</a>.</span>
          </label>
          <button type="submit" class="btn btn-lime btn-lg btn-block">Send marketing brief</button>
          <p class="form-disclaimer">By providing your phone number and submitting the form, you consent to be contacted by SMS and agree to our <a href="/privacy-policy.php#phone-number">Privacy Policy</a>. Message and data rates may apply.</p>
        </form>
      </div>
    </div>
  </div>
</section>

<section class="faq-section" id="brief-faq">
  <div class="container">
    <div class="section-header reveal">
      <p class="subheading">Brief FAQs</p>
      <h2>Quick answers before you <span class="heading-accent">start</span></h2>
    </div>
    <div class="faq-list reveal">
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">01</span>
          <span class="faq-question">Do I need a new website before running ads?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region"><div class="faq-panel-inner"><p>Not always. Often a few focused landing pages are enough to start. We'll tell you honestly if your current site will waste ad spend.</p></div></div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">02</span>
          <span class="faq-question">How soon will we see results?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region"><div class="faq-panel-inner"><p>Paid campaigns can bring leads within weeks. Local SEO usually builds over three to six months and keeps compounding.</p></div></div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">03</span>
          <span class="faq-question">Are there long-term contracts?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region"><div class="faq-panel-inner"><p>We usually start with a 90-day plan so both sides can see results, then continue month to month.</p></div></div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">04</span>
          <span class="faq-question">How do you report results?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region"><div class="faq-panel-inner"><p>A monthly report with calls, leads, cost per lead, and booked jobs where we can track them - plus a short call to plan the next month.</p></div></div>
      </div>
    </div>
    <div class="faq-all-wrap faq-ask reveal">
      <div class="section-header faq-ask-head"><h2 class="faq-ask-title">Still have questions?</h2></div>
      <a href="tel:+15123379723" class="btn btn-lime faq-all-btn faq-call-btn">Call Now <span aria-hidden="true">&rarr;</span></a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
