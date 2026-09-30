<?php
$page_title = 'Handyman | WTF Labs';
$page_description = 'Websites and local marketing that keep handyman businesses booked with repeat customers.';
$current_page = 'industries';
include __DIR__ . '/includes/header.php';
?>

<?php
$banner_crumb_label = 'Industries';
$banner_crumb_href = '/industries.php';
$banner_breadcrumb = 'Handyman';
$banner_kicker = 'Industry';
$banner_h1 = 'Handyman marketing that keeps your calendar <span class="about-hero-accent">full</span>';
$banner_lead = 'We help handyman businesses look professional, show up in local searches, and turn one small fix into a customer who calls you for everything.';
$banner_primary_label = 'Get a quote';
$banner_secondary_label = 'See our work';
$banner_image = '/assets/images/industry-handyman-1.webp';
$banner_float1 = '/assets/images/industry-handyman-2.webp';
$banner_float2 = '/assets/images/industry-handyman-3.webp';
$banner_card = 'Small jobs, loyal customers.';
include __DIR__ . '/includes/page-banner.php';
?>

<section class="svc-section svc-work">
  <div class="container">
    <div class="svc-section-head reveal">
      <p class="svc-kicker"><span></span> Selected work</p>
      <h2>Handyman marketing that works in the <span class="heading-accent">real world</span></h2>
      <p>Simple, trustworthy websites and campaigns built for the jobs on every homeowner's list.</p>
    </div>
    <div class="svc-cases reveal">
      <article class="svc-case">
        <div class="svc-case-media">
          <img src="/assets/images/industry-handyman-2.webp" alt="Handyman service">
        </div>
        <div class="svc-case-body">
          <p class="svc-case-meta">USA · Website &amp; booking</p>
          <h3>Handyman service</h3>
          <p>A clean site with online booking that cut phone tag and filled the weekly calendar.</p>
        </div>
      </article>
      <article class="svc-case">
        <div class="svc-case-media">
          <img src="/assets/images/industry-handyman-3.webp" alt="Multi-tech handyman team">
        </div>
        <div class="svc-case-body">
          <p class="svc-case-meta">Regional · Local SEO</p>
          <h3>Multi-tech handyman team</h3>
          <p>Service and city pages that ranked for dozens of small-job searches across the metro.</p>
        </div>
      </article>
      <article class="svc-case">
        <div class="svc-case-media">
          <img src="/assets/images/industry-handyman-4.webp" alt="Solo handyman pro">
        </div>
        <div class="svc-case-body">
          <p class="svc-case-meta">Local · Repeat business</p>
          <h3>Solo handyman pro</h3>
          <p>A review and email system that turned one-off jobs into steady repeat customers.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<section class="svc-section svc-process">
  <div class="container">
    <div class="svc-section-head reveal">
      <p class="svc-kicker"><span></span> Process</p>
      <h2>Handyman: from discovery to <span class="heading-accent heading-accent--lime">booked jobs</span></h2>
      <p>We handle every stage - strategy, craft, delivery, and follow-through - as one senior team.</p>
    </div>
    <div class="svc-process-grid reveal">
      <article class="svc-process-card">
        <span class="svc-process-num">01</span>
        <h3>Discovery → Services</h3>
        <p>We list the jobs you want more of and the areas you want to work in.</p>
      </article>
      <article class="svc-process-card">
        <span class="svc-process-num">02</span>
        <h3>Site &amp; booking</h3>
        <p>Clear service lists, trust signals, and booking that takes a minute.</p>
      </article>
      <article class="svc-process-card">
        <span class="svc-process-num">03</span>
        <h3>Local visibility</h3>
        <p>Map rankings, service pages, and reviews that make you look established.</p>
      </article>
      <article class="svc-process-card">
        <span class="svc-process-num">04</span>
        <h3>Ads &amp; repeat</h3>
        <p>Local campaigns plus follow-ups that bring past customers back.</p>
      </article>
    </div>
  </div>
</section>

<section class="svc-section svc-excellence">
  <div class="container">
    <div class="svc-excellence-layout reveal">
      <div class="svc-excellence-copy">
        <p class="svc-kicker"><span></span> Excellence</p>
        <h2>End-to-end handyman <span class="heading-accent">growth</span></h2>
        <p>Homeowners want someone reliable for the long to-do list. We make your business look professional and trustworthy from the first search.</p>
        <p>Then we help you stay top of mind, so every finished job leads to the next call and a referral to the neighbors.</p>
        <ul class="why-feature-list">
          <li>Clear service lists &amp; pricing cues</li>
          <li>Easy online booking</li>
          <li>Repeat customer campaigns</li>
        </ul>
        <a href="/contact.php" class="btn btn-lime">Start a project</a>
      </div>
      <div class="svc-excellence-visual">
        <div class="svc-excellence-visual-main">
          <img src="/assets/images/industry-handyman-4.webp" alt="">
        </div>
        <div class="svc-excellence-chip">
          <span class="svc-excellence-chip-dot"></span>
          <p>Repairs · Installs · Odd jobs</p>
        </div>
        <div class="svc-excellence-float svc-excellence-float--1">
          <img src="/assets/images/industry-handyman-1.webp" alt="">
        </div>
        <div class="svc-excellence-float svc-excellence-float--2">
          <img src="/assets/images/industry-handyman-3.webp" alt="">
        </div>
      </div>
    </div>
  </div>
</section>

<section class="svc-section svc-team">
  <div class="container">
    <div class="svc-team-box reveal">
      <div>
        <p class="svc-kicker"><span></span> The team</p>
        <h2>A growth team that thinks <span class="heading-accent">like partners</span></h2>
        <p>A mature team that takes responsibility, keeps everything transparent, and stays one step ahead in communication.</p>
      </div>
      <ul class="svc-team-list">
        <li>Senior marketers who know how local customers search and book</li>
        <li>Clear weekly updates on leads, calls, and what is next</li>
        <li>Reporting tied to booked jobs - not vanity metrics</li>
        <li>Integrations with the booking and CRM tools you already use</li>
      </ul>
    </div>
  </div>
</section>

<?php
$street_section_id = 'reviews';
$street_kicker = 'Reviews';
include __DIR__ . '/includes/testimonialslider.php';
?>

<section class="svc-section svc-more">
  <div class="container">
    <div class="svc-section-head reveal">
      <p class="svc-kicker"><span></span> Explore</p>
      <h2>Explore more <span class="heading-accent">industries</span></h2>
    </div>
    <div class="excel-tags reveal">
      <a href="/remodelers.php" class="excel-tag">Remodelers</a>
      <a href="/hvac.php" class="excel-tag">HVAC</a>
      <a href="/plumbing.php" class="excel-tag">Plumbing</a>
      <a href="/roofing.php" class="excel-tag">Roofing</a>
      <a href="/pest-control.php" class="excel-tag">Pest Control</a>
      <a href="/pool-services.php" class="excel-tag">Pool Services</a>
      <a href="/landscaping.php" class="excel-tag">Landscaping</a>
      <a href="/power-washing.php" class="excel-tag">Power Washing</a>
    </div>
    <div class="services-cta-band reveal">
      <div>
        <h3>Let's discuss growing your handyman business</h3>
        <p>We'll help you define the right next step.</p>
      </div>
      <a href="/contact.php" class="btn btn-lime btn-lg">Get a quote</a>
    </div>
  </div>
</section>

<section class="faq-section" id="faqs">
  <div class="container">
    <div class="section-header reveal">
      <p class="subheading">Handyman FAQs</p>
      <h2>Questions about <span class="heading-accent">Handyman</span></h2>
    </div>
    <div class="faq-list reveal">
      <div class="faq-item is-open">
        <button class="faq-trigger" type="button" aria-expanded="true">
          <span class="faq-num">01</span>
          <span class="faq-question">Do we need a big website?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region">
          <div class="faq-panel-inner">
            <p>No. Most handyman businesses need a clear, fast site with service lists, reviews, and easy booking - and we keep it that way.</p>
          </div>
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">02</span>
          <span class="faq-question">Can you help us get more repeat customers?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region">
          <div class="faq-panel-inner">
            <p>We set up review requests and simple follow-up emails that bring past customers back for the next job.</p>
          </div>
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">03</span>
          <span class="faq-question">Can you show our prices online?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region">
          <div class="faq-panel-inner">
            <p>We can add starting prices or pricing cues that set expectations and pre-qualify leads.</p>
          </div>
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">04</span>
          <span class="faq-question">How much does a website project cost?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region">
          <div class="faq-panel-inner">
            <p>Website projects start at $10,000. Most full-cycle B2B website engagements fall between $25,000 and $50,000. A focused landing page or smaller corporate site may fall in the $10,000–$20,000 range. Complex platforms may exceed $50,000. After the first conversation we give a realistic estimate.</p>
          </div>
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">05</span>
          <span class="faq-question">Which platform and technology stack should we use?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region">
          <div class="faq-panel-inner">
            <p>We recommend based on your business, content, integrations, and long-term plans. We build with Webflow, WordPress, Shopify, HubSpot, React, Vue, Node.js, Laravel, and Strapi. If you already have technical requirements, we work within them.</p>
          </div>
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">06</span>
          <span class="faq-question">Can you move faster if we have a hard deadline?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region">
          <div class="faq-panel-inner">
            <p>Yes, when the deadline is realistic and trade-offs are understood. We can expand the team, run design and development in parallel, and prioritize what is required for launch - then refine after go-live.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="faq-all-wrap reveal">
      <a href="/faqs.php" class="btn btn-lime faq-all-btn">View all FAQs <span aria-hidden="true">&rarr;</span></a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
