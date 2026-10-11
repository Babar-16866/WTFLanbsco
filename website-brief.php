<?php
$page_title = 'Website Brief | WTF Labs';
$page_description = 'Tell us about your new website or redesign - goals, pages, features, and timeline - so we can scope it properly.';
$current_page = 'forms';
$hide_contact_section = true;
include __DIR__ . '/includes/header.php';
?>

<?php
$banner_kicker = 'Website Brief';
$banner_h1 = 'Plan your next <span class="about-hero-accent">website</span>';
$banner_lead = 'A few focused questions about your goals, pages, and features. The more we know up front, the more accurate your scope, timeline, and quote.';
$banner_primary_label = 'Fill out the brief';
$banner_primary_href = '#brief-form';
$banner_primary_popup = false;
$banner_secondary_label = 'See our work';
$banner_image = '/assets/images/mockup-main.webp';
$banner_float1 = '/assets/images/excel-uiux.webp';
$banner_float2 = '/assets/images/device-1.webp';
$banner_card = 'Clear brief, clear quote.';
include __DIR__ . '/includes/page-banner.php';
?>

<section class="page-section contact-page-section" id="brief-form">
  <div class="container">
    <div class="contact-page-card reveal">
      <aside class="contact-page-aside">
        <p class="contact-page-label">What happens next</p>
        <h2>Website Brief</h2>
        <p class="contact-page-lead">Takes about 5 minutes. Skip anything you're unsure about - we'll cover it together on the first call.</p>

        <ul class="contact-page-details">
          <li>
            <span class="contact-page-icon" aria-hidden="true">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M9 11l3 3 8-8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M20 12v7a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h9" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
            </span>
            <div>
              <strong>1. We review your brief</strong>
              <p>A senior designer and developer read it within one business day.</p>
            </div>
          </li>
          <li>
            <span class="contact-page-icon" aria-hidden="true">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M22 16.9v2a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h2a2 2 0 0 1 2 1.7c.1.9.3 1.8.6 2.6a2 2 0 0 1-.5 2.1L7.1 9.5a16 16 0 0 0 6 6l1.1-1.1a2 2 0 0 1 2.1-.5c.8.3 1.7.5 2.6.6a2 2 0 0 1 1.7 2z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </span>
            <div>
              <strong>2. Discovery call</strong>
              <p>30 minutes to fill the gaps, talk through references, and agree on priorities.</p>
            </div>
          </li>
          <li>
            <span class="contact-page-icon" aria-hidden="true">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/><path d="M14 2v6h6M8 13h8M8 17h5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
            </span>
            <div>
              <strong>3. Proposal &amp; timeline</strong>
              <p>A fixed scope, sitemap, timeline, and price - no surprises later.</p>
            </div>
          </li>
        </ul>

        <div class="contact-page-links">
          <a href="/marketing-brief.php">Marketing Brief</a>
          <a href="/free-consultation.php">Free Consultation</a>
          <a href="/how-we-work.php">How we work</a>
          <a href="/works.php">Our work</a>
        </div>
      </aside>

      <div class="contact-page-form-wrap">
        <p class="contact-page-label">Project details</p>
        <h3>Tell us about your website</h3>
        <form class="contact-form contact-page-form" id="websiteBriefForm" action="/send-mail.php" method="post">
          <input type="text" name="website" value="" tabindex="-1" autocomplete="off" class="hp-field" aria-hidden="true">
          <input type="hidden" name="source" value="website-brief">
          <div class="contact-form-row">
            <div class="field">
              <label for="wbName">What's your name?</label>
              <input id="wbName" type="text" name="name" required autocomplete="name" placeholder="Jane Doe">
            </div>
            <div class="field">
              <label for="wbEmail">What's your work email?</label>
              <input id="wbEmail" type="email" name="email" required autocomplete="email" placeholder="jane@company.com">
            </div>
          </div>
          <div class="contact-form-row">
            <div class="field">
              <label for="wbPhone">What's your phone number?</label>
              <input id="wbPhone" type="tel" name="phone" autocomplete="tel" inputmode="tel" placeholder="+1 (555) 000-1234">
            </div>
            <div class="field">
              <label for="wbCompany">Company name</label>
              <input id="wbCompany" type="text" name="company" autocomplete="organization" placeholder="Acme Remodeling">
            </div>
          </div>
          <div class="field">
            <label for="wbCurrent">Current website (if any)</label>
            <input id="wbCurrent" type="url" name="current_site" placeholder="https://www.yoursite.com">
          </div>
          <div class="field">
            <label>What type of project is it?</label>
            <div class="budget-pills">
              <label><input type="radio" name="project_type" value="New website" checked> New website</label>
              <label><input type="radio" name="project_type" value="Redesign"> Redesign</label>
              <label><input type="radio" name="project_type" value="Landing page"> Landing page</label>
              <label><input type="radio" name="project_type" value="Shopify store"> Shopify store</label>
              <label><input type="radio" name="project_type" value="Web app"> Web app</label>
            </div>
          </div>
          <div class="contact-form-row">
            <div class="field">
              <label for="wbPages">How many pages?</label>
              <select id="wbPages" name="pages" required>
                <option value="" disabled selected>Select a range</option>
                <option>1-5 pages</option>
                <option>6-15 pages</option>
                <option>16-30 pages</option>
                <option>30+ pages</option>
                <option>Not sure yet</option>
              </select>
            </div>
            <div class="field">
              <label for="wbPlatform">Preferred platform</label>
              <select id="wbPlatform" name="platform" required>
                <option value="" disabled selected>Select a platform</option>
                <option>WordPress</option>
                <option>Webflow</option>
                <option>Shopify</option>
                <option>Custom build</option>
                <option>No preference</option>
              </select>
            </div>
          </div>
          <div class="field">
            <label>Features you need (pick any)</label>
            <div class="budget-pills">
              <label><input type="checkbox" name="features[]" value="Online booking"> Online booking</label>
              <label><input type="checkbox" name="features[]" value="Quote / lead forms"> Quote / lead forms</label>
              <label><input type="checkbox" name="features[]" value="Blog / CMS"> Blog / CMS</label>
              <label><input type="checkbox" name="features[]" value="Project gallery"> Project gallery</label>
              <label><input type="checkbox" name="features[]" value="E-commerce"> E-commerce</label>
              <label><input type="checkbox" name="features[]" value="CRM integration"> CRM integration</label>
              <label><input type="checkbox" name="features[]" value="Multilingual"> Multilingual</label>
              <label><input type="checkbox" name="features[]" value="Customer portal"> Customer portal</label>
            </div>
          </div>
          <div class="field">
            <label>Do you have brand assets?</label>
            <div class="budget-pills">
              <label><input type="radio" name="branding" value="Full brand kit"> Full brand kit</label>
              <label><input type="radio" name="branding" value="Logo only"> Logo only</label>
              <label><input type="radio" name="branding" value="Need branding too"> Need branding too</label>
            </div>
          </div>
          <div class="field">
            <label for="wbReferences">Websites you like (optional)</label>
            <input id="wbReferences" type="text" name="references" placeholder="Links and what you like about them">
          </div>
          <div class="field">
            <label for="wbTimeline">When do you want to launch?</label>
            <select id="wbTimeline" name="timeline" required>
              <option value="" disabled selected>Select a timeline</option>
              <option>As soon as possible</option>
              <option>1-2 months</option>
              <option>3-4 months</option>
              <option>Flexible</option>
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
            <label for="wbMessage">What should the new website achieve?</label>
            <textarea id="wbMessage" name="message" rows="4" required placeholder="More leads, bigger projects, easier booking, a more professional look..."></textarea>
          </div>
          <label class="check">
            <input type="checkbox" name="terms" required>
            <span>I agree to the <a href="/privacy-policy.php">Privacy Policy</a> and <a href="/terms-and-conditions.php">Terms of use</a>.</span>
          </label>
          <button type="submit" class="btn btn-lime btn-lg btn-block">Send website brief</button>
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
          <span class="faq-question">What if I don't know all the answers?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region"><div class="faq-panel-inner"><p>That's normal. Fill in what you can - we'll work through the rest together on the discovery call.</p></div></div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">02</span>
          <span class="faq-question">How much does a website project cost?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region"><div class="faq-panel-inner"><p>Website projects start at $10,000. Most full-cycle B2B website engagements fall between $25,000 and $50,000.</p></div></div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">03</span>
          <span class="faq-question">How long does a typical website take?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region"><div class="faq-panel-inner"><p>Most company websites take 6-10 weeks from discovery to launch. Landing pages can be faster; larger platforms take longer.</p></div></div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">04</span>
          <span class="faq-question">Is my information kept private?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region"><div class="faq-panel-inner"><p>Yes. Your brief is only used to scope your project and is never shared. We're happy to sign an NDA before the call.</p></div></div>
      </div>
    </div>
    <div class="faq-all-wrap reveal">
      <a href="/faqs.php" class="btn btn-lime faq-all-btn">View all FAQs <span aria-hidden="true">&rarr;</span></a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
