<?php
$page_title = 'Free Audit | WTF Labs';
$page_description = 'Get a free audit of your website, Shopify store, or web app - speed, SEO, UX, and conversion issues with a clear list of fixes.';
$current_page = 'free-audit';
$hide_contact_section = true;
include __DIR__ . '/includes/header.php';
?>

<?php
$banner_kicker = 'Free Audit';
$banner_h1 = 'Find out what your site is <span class="about-hero-accent">costing you</span>';
$banner_lead = 'A free, no-strings review of your website, Shopify store, or web app — speed, SEO, UX, and conversion issues, with a clear list of what to fix first.';
$banner_primary_label = 'Start my audit';
$banner_primary_href = '#audit-form';
$banner_primary_popup = false;
$banner_secondary_label = 'See our work';
$banner_image = '/assets/images/product-dashboard.webp';
$banner_float1 = '/assets/images/excel-landing.webp';
$banner_float2 = '/assets/images/mockup-5.webp';
$banner_card = 'Real findings from a senior team.';
include __DIR__ . '/includes/page-banner.php';
?>

<section class="page-section contact-page-section" id="audit-form">
  <div class="container">
    <div class="contact-page-card reveal">
      <aside class="contact-page-aside">
        <p class="contact-page-label">What you get</p>
        <h2>Free Audit</h2>
        <p class="contact-page-lead">A senior strategist and developer review your site by hand. No automated PDF dump - just the issues that actually hold back leads and sales.</p>

        <ul class="contact-page-details">
          <li>
            <span class="contact-page-icon" aria-hidden="true">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M13 2 4 14h7l-1 8 9-12h-7l1-8z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/></svg>
            </span>
            <div>
              <strong>Speed &amp; Core Web Vitals</strong>
              <p>Load time, mobile performance, and what's slowing pages down.</p>
            </div>
          </li>
          <li>
            <span class="contact-page-icon" aria-hidden="true">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><circle cx="11" cy="11" r="7" stroke="currentColor" stroke-width="2"/><path d="m20 20-3.5-3.5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
            </span>
            <div>
              <strong>SEO &amp; local visibility</strong>
              <p>Indexing, on-page gaps, Google Business Profile, and ranking blockers.</p>
            </div>
          </li>
          <li>
            <span class="contact-page-icon" aria-hidden="true">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M3 3v18h18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><path d="m7 15 4-4 3 3 5-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </span>
            <div>
              <strong>Conversion &amp; UX</strong>
              <p>Forms, calls to action, checkout, and where visitors drop off.</p>
            </div>
          </li>
          <li>
            <span class="contact-page-icon" aria-hidden="true">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M4 6h16v12H4z" stroke="currentColor" stroke-width="2"/><path d="m4 7 8 6 8-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </span>
            <div>
              <strong>Report in 3-5 business days</strong>
              <p>A prioritized fix list plus a short walkthrough call if you want one.</p>
            </div>
          </li>
        </ul>

        <div class="contact-page-links">
          <a href="/works.php">Our work</a>
          <a href="/how-we-work.php">How we work</a>
          <a href="/insights.php">Insights</a>
          <a href="/faqs.php">FAQs</a>
        </div>
      </aside>

      <div class="contact-page-form-wrap">
        <p class="contact-page-label">Audit request</p>
        <h3>Tell us what to review</h3>
        <form class="contact-form contact-page-form" id="auditForm" action="/send-mail.php" method="post">
          <input type="text" name="website" value="" tabindex="-1" autocomplete="off" class="hp-field" aria-hidden="true">
          <input type="hidden" name="source" value="free-audit">
          <div class="contact-form-row">
            <div class="field">
              <label for="auditName">What's your name?</label>
              <input id="auditName" type="text" name="name" required autocomplete="name" placeholder="Jane Doe">
            </div>
            <div class="field">
              <label for="auditEmail">What's your work email?</label>
              <input id="auditEmail" type="email" name="email" required autocomplete="email" placeholder="jane@company.com">
            </div>
          </div>
          <div class="contact-form-row">
            <div class="field">
              <label for="auditPhone">What's your phone number?</label>
              <input id="auditPhone" type="tel" name="phone" autocomplete="tel" inputmode="tel" placeholder="+1 (555) 000-1234">
            </div>
            <div class="field">
              <label for="auditCompany">Company name</label>
              <input id="auditCompany" type="text" name="company" autocomplete="organization" placeholder="Acme Roofing">
            </div>
          </div>
          <div class="field">
            <label for="auditUrl">Website or store URL</label>
            <input id="auditUrl" type="url" name="site_url" required placeholder="https://www.yoursite.com">
          </div>
          <div class="field">
            <label>What should we audit?</label>
            <div class="budget-pills">
              <label><input type="radio" name="audit_type" value="Website" checked> Website</label>
              <label><input type="radio" name="audit_type" value="Shopify store"> Shopify store</label>
              <label><input type="radio" name="audit_type" value="Software / web app"> Software / web app</label>
              <label><input type="radio" name="audit_type" value="Landing page"> Landing page</label>
              <label><input type="radio" name="audit_type" value="Google Ads account"> Google Ads account</label>
            </div>
          </div>
          <div class="contact-form-row">
            <div class="field">
              <label for="auditPlatform">Which platform is it built on?</label>
              <select id="auditPlatform" name="platform" required>
                <option value="" disabled selected>Select a platform</option>
                <option>WordPress</option>
                <option>Shopify</option>
                <option>Webflow</option>
                <option>Wix / Squarespace</option>
                <option>Custom code (React, Laravel, etc.)</option>
                <option>Not sure</option>
              </select>
            </div>
            <div class="field">
              <label for="auditIndustry">Your industry</label>
              <select id="auditIndustry" name="industry" required>
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
                <option>E-commerce</option>
                <option>SaaS / Software</option>
                <option>Other</option>
              </select>
            </div>
          </div>
          <div class="field">
            <label>Focus areas (pick any)</label>
            <div class="budget-pills">
              <label><input type="checkbox" name="focus[]" value="Speed"> Speed</label>
              <label><input type="checkbox" name="focus[]" value="SEO"> SEO</label>
              <label><input type="checkbox" name="focus[]" value="Local SEO"> Local SEO</label>
              <label><input type="checkbox" name="focus[]" value="UX / Design"> UX / Design</label>
              <label><input type="checkbox" name="focus[]" value="Conversion"> Conversion</label>
              <label><input type="checkbox" name="focus[]" value="Checkout"> Checkout</label>
              <label><input type="checkbox" name="focus[]" value="Security"> Security</label>
              <label><input type="checkbox" name="focus[]" value="Tracking &amp; analytics"> Tracking &amp; analytics</label>
            </div>
          </div>
          <div class="field">
            <label>Monthly visitors (roughly)</label>
            <div class="budget-pills">
              <label><input type="radio" name="traffic" value="Under 1k"> Under 1k</label>
              <label><input type="radio" name="traffic" value="1k-10k"> 1k-10k</label>
              <label><input type="radio" name="traffic" value="10k-50k"> 10k-50k</label>
              <label><input type="radio" name="traffic" value="50k+"> 50k+</label>
              <label><input type="radio" name="traffic" value="Not sure"> Not sure</label>
            </div>
          </div>
          <div class="field">
            <label for="auditCompetitors">Top competitors (optional)</label>
            <input id="auditCompetitors" type="text" name="competitors" placeholder="competitor-one.com, competitor-two.com">
          </div>
          <div class="field">
            <label for="auditMessage">What's the biggest problem right now?</label>
            <textarea id="auditMessage" name="message" rows="4" required placeholder="Not enough leads, slow site, low sales, ads not converting..."></textarea>
          </div>
          <div class="field">
            <label>Best way to share the report</label>
            <div class="budget-pills">
              <label><input type="radio" name="contact_method" value="Email" checked> Email</label>
              <label><input type="radio" name="contact_method" value="Video walkthrough"> Video walkthrough</label>
              <label><input type="radio" name="contact_method" value="Call"> Call</label>
            </div>
          </div>
          <label class="check">
            <input type="checkbox" name="terms" required>
            <span>I agree to the <a href="/privacy-policy.php">Privacy Policy</a> and <a href="/terms-and-conditions.php">Terms of use</a>.</span>
          </label>
          <button type="submit" class="btn btn-lime btn-lg btn-block">Request my free audit</button>
        </form>
      </div>
    </div>
  </div>
</section>

<section class="svc-section svc-process">
  <div class="container">
    <div class="svc-section-head reveal">
      <p class="svc-kicker"><span></span> What we check</p>
      <h2>One audit, every <span class="heading-accent heading-accent--lime">platform</span></h2>
      <p>Whether it's a local service site, a Shopify store, or custom software, we look at it the way your customers and Google do.</p>
    </div>
    <div class="svc-process-grid reveal">
      <article class="svc-process-card">
        <span class="svc-process-num">01</span>
        <h3>Websites</h3>
        <p>Page speed, mobile layout, local SEO, trust signals, and how easy it is to call or book.</p>
      </article>
      <article class="svc-process-card">
        <span class="svc-process-num">02</span>
        <h3>Shopify stores</h3>
        <p>Product pages, collections, app bloat, checkout friction, and theme performance.</p>
      </article>
      <article class="svc-process-card">
        <span class="svc-process-num">03</span>
        <h3>Software &amp; web apps</h3>
        <p>Onboarding flow, UX pain points, front-end performance, and basic security hygiene.</p>
      </article>
      <article class="svc-process-card">
        <span class="svc-process-num">04</span>
        <h3>Ads &amp; tracking</h3>
        <p>Conversion tracking, landing page match, wasted spend, and missing call tracking.</p>
      </article>
    </div>
  </div>
</section>

<section class="faq-section" id="audit-faq">
  <div class="container">
    <div class="section-header reveal">
      <p class="subheading">Audit FAQs</p>
      <h2>Before you <span class="heading-accent">request</span></h2>
    </div>
    <div class="faq-list reveal">
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">01</span>
          <span class="faq-question">Is the audit really free?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region"><div class="faq-panel-inner"><p>Yes. There's no cost and no obligation. If you want help fixing what we find, we'll quote it separately.</p></div></div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">02</span>
          <span class="faq-question">How long does it take?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region"><div class="faq-panel-inner"><p>Most audits are delivered within 3-5 business days. Larger stores and web apps can take a little longer.</p></div></div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">03</span>
          <span class="faq-question">Do you need access to our accounts?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region"><div class="faq-panel-inner"><p>No. We start from the public site. If you want a deeper look at analytics, Search Console, or ads, we'll ask for read-only access.</p></div></div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">04</span>
          <span class="faq-question">What does the report look like?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region"><div class="faq-panel-inner"><p>A short, prioritized list of issues with screenshots, why each one matters, and the effort to fix it - plus quick wins you can do yourself.</p></div></div>
      </div>
    </div>
    <div class="faq-all-wrap reveal">
      <a href="/faqs.php" class="btn btn-lime faq-all-btn">View all FAQs <span aria-hidden="true">&rarr;</span></a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
