<?php
$page_title = 'Free Consultation | WTF Labs';
$page_description = 'Get a free audit of your website, Shopify store, or web app - speed, SEO, UX, and conversion issues with a clear list of fixes.';
$current_page = 'free-consultation';
$hide_contact_section = true;
include __DIR__ . '/includes/header.php';
?>

<?php
$banner_kicker = 'Free Consultation';
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
        <ol class="form-steps" aria-label="Form progress">
          <li class="form-step-dot is-active" data-step-dot="1"><span class="form-step-num">1</span><span class="form-step-label">Contact</span></li>
          <li class="form-step-line" aria-hidden="true"><span></span></li>
          <li class="form-step-dot" data-step-dot="2"><span class="form-step-num">2</span><span class="form-step-label">Project</span></li>
          <li class="form-step-line" aria-hidden="true"><span></span></li>
          <li class="form-step-dot" data-step-dot="3"><span class="form-step-num">3</span><span class="form-step-label">Details</span></li>
        </ol>
        <form class="contact-form contact-form--home" id="contactForm" action="/send-mail.php" method="post" data-steps="3" novalidate>
          <input type="text" name="website" value="" tabindex="-1" autocomplete="off" class="hp-field" aria-hidden="true">
          <input type="hidden" name="source" value="free-consultation">
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
          <p class="form-ok hidden" id="formOk">Thank you! Your submission has been received!</p>
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
