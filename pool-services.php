<?php
$page_title = 'Pool Services | WTF Labs';
$page_description = 'Websites and marketing that grow weekly pool routes, repairs, and seasonal openings.';
$current_page = 'industries';
include __DIR__ . '/includes/header.php';
?>

<?php
$banner_crumb_label = 'Industries';
$banner_crumb_href = '/industries.php';
$banner_breadcrumb = 'Pool Services';
$banner_kicker = 'Industry';
$banner_h1 = 'Pool service marketing that grows your <span class="about-hero-accent">routes</span>';
$banner_lead = 'We help pool companies fill weekly routes, sell equipment upgrades, and stay booked through openings, closings, and repair season.';
$banner_primary_label = 'Free Consultation';
$banner_secondary_label = 'See our work';
$banner_image = '/assets/images/industry-pool-services-1.webp';
$banner_float1 = '/assets/images/industry-pool-services-2.webp';
$banner_float2 = '/assets/images/industry-pool-services-3.webp';
$banner_card = 'Fuller routes, steadier revenue.';
include __DIR__ . '/includes/page-banner.php';
?>

<section class="page-section industry-nav-section">
  <div class="container">
    <div class="works-filter-stack works-filter-stack--center home-filter-stack" data-industry-nav data-current="pool-services">
      <div class="home-filter-row is-done">
        <p class="home-filter-label">Select the Industry and services</p>
        <div class="works-filters" id="indIndustries" role="tablist" aria-label="Filter by industry">
          <button type="button" class="works-filter" data-industry="all" role="tab" aria-selected="false">Featured</button>
          <button type="button" class="works-filter" data-industry="remodelers" role="tab" aria-selected="false">Remodeling</button>
          <button type="button" class="works-filter" data-industry="hvac" role="tab" aria-selected="false">HVAC</button>
          <button type="button" class="works-filter" data-industry="landscaping" role="tab" aria-selected="false">Landscaping</button>
          <button type="button" class="works-filter" data-industry="roofing" role="tab" aria-selected="false">Roofing</button>
          <button type="button" class="works-filter" data-industry="plumbing" role="tab" aria-selected="false">Plumbing</button>
          <button type="button" class="works-filter is-active" data-industry="pool-services" role="tab" aria-selected="true">Pool Services</button>
          <button type="button" class="works-filter" data-industry="power-washing" role="tab" aria-selected="false">Power Washing</button>
          <button type="button" class="works-filter" data-industry="handyman" role="tab" aria-selected="false">Handyman</button>
          <button type="button" class="works-filter" data-industry="pest-control" role="tab" aria-selected="false">Pest Control</button>
        </div>
      </div>
      <div class="home-filter-row">
        <div class="works-filters" id="indServices" role="tablist" aria-label="Filter by service">
          <button type="button" class="works-filter is-active" data-filter="all" role="tab" aria-selected="true">All</button>
          <button type="button" class="works-filter" data-filter="web-development" role="tab" aria-selected="false">Web Design</button>
          <button type="button" class="works-filter" data-filter="seo" role="tab" aria-selected="false">SEO</button>
          <button type="button" class="works-filter" data-filter="social-media-advertising" role="tab" aria-selected="false">Social Media</button>
          <button type="button" class="works-filter" data-filter="google-ads" role="tab" aria-selected="false">Google Ads</button>
        </div>
      </div>
      <div class="home-filter-row">
        <span class="home-filter-label" aria-hidden="true"></span>
        <div class="works-subfilters" id="indSubs" role="tablist" aria-label="Filter by subcategory" hidden></div>
      </div>
    </div>
  </div>
</section>

<section class="svc-section svc-work">
  <div class="container">
    <div class="svc-section-head reveal">
      <p class="svc-kicker"><span></span> Selected work</p>
      <h2>Pool service marketing that works in the <span class="heading-accent">real world</span></h2>
      <p>Route-building websites and campaigns for weekly service, repairs, and upgrades.</p>
    </div>
    <div class="svc-cases reveal">
      <article class="svc-case">
        <div class="svc-case-media">
          <img loading="lazy" src="/assets/images/industry-pool-services-2.webp" alt="Pool cleaning company">
        </div>
        <div class="svc-case-body">
          <p class="svc-case-meta">USA · Website &amp; plans</p>
          <h3>Pool cleaning company</h3>
          <p>A clear service-plan site that added new weekly accounts in the neighborhoods they already serviced.</p>
        </div>
      </article>
      <article class="svc-case">
        <div class="svc-case-media">
          <img loading="lazy" src="/assets/images/industry-pool-services-3.webp" alt="Pool repair &amp; equipment">
        </div>
        <div class="svc-case-body">
          <p class="svc-case-meta">Regional · Google Ads</p>
          <h3>Pool repair &amp; equipment</h3>
          <p>Search campaigns for pump, filter, and heater repairs that raised average ticket size.</p>
        </div>
      </article>
      <article class="svc-case">
        <div class="svc-case-media">
          <img loading="lazy" src="/assets/images/industry-pool-services-4.webp" alt="Openings &amp; closings crew">
        </div>
        <div class="svc-case-body">
          <p class="svc-case-meta">Local · Seasonal</p>
          <h3>Openings &amp; closings crew</h3>
          <p>Pre-season campaigns that filled the opening calendar weeks ahead of time.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<section class="svc-section svc-process">
  <div class="container">
    <div class="svc-section-head reveal">
      <p class="svc-kicker"><span></span> Process</p>
      <h2>Pool service: from discovery to <span class="heading-accent heading-accent--lime">booked jobs</span></h2>
      <p>We handle every stage - strategy, craft, delivery, and follow-through - as one senior team.</p>
    </div>
    <div class="svc-process-grid reveal">
      <article class="svc-process-card">
        <span class="svc-process-num">01</span>
        <h3>Discovery → Routes</h3>
        <p>We study your routes, service mix, and where you want more density.</p>
      </article>
      <article class="svc-process-card">
        <span class="svc-process-num">02</span>
        <h3>Site &amp; plans</h3>
        <p>Simple weekly plan options, repair pages, and quote requests that are easy to act on.</p>
      </article>
      <article class="svc-process-card">
        <span class="svc-process-num">03</span>
        <h3>Local visibility</h3>
        <p>Neighborhood-level SEO and reviews that make you the trusted local pool pro.</p>
      </article>
      <article class="svc-process-card">
        <span class="svc-process-num">04</span>
        <h3>Ads &amp; seasons</h3>
        <p>Campaigns for openings, closings, and repairs - timed to the calendar.</p>
      </article>
    </div>
  </div>
</section>

<section class="svc-section svc-excellence">
  <div class="container">
    <div class="svc-excellence-layout reveal">
      <div class="svc-excellence-copy">
        <p class="svc-kicker"><span></span> Excellence</p>
        <h2>End-to-end pool service <span class="heading-accent">growth</span></h2>
        <p>Pool owners want someone reliable who shows up every week. We present your team as exactly that, with clear plans, real reviews, and easy sign-up.</p>
        <p>We also build demand for repairs and equipment upgrades, so your routes turn into higher-value work over time.</p>
        <ul class="why-feature-list">
          <li>Weekly service plan sign-ups</li>
          <li>Repair &amp; equipment pages</li>
          <li>Opening and closing campaigns</li>
        </ul>
        <a href="/contact.php" class="btn btn-lime">Start a project</a>
      </div>
      <div class="svc-excellence-visual">
        <div class="svc-excellence-visual-main">
          <img loading="lazy" src="/assets/images/industry-pool-services-4.webp" alt="">
        </div>
        <div class="svc-excellence-chip">
          <span class="svc-excellence-chip-dot"></span>
          <p>Cleaning · Repairs · Upgrades</p>
        </div>
        <div class="svc-excellence-float svc-excellence-float--1">
          <img loading="lazy" src="/assets/images/industry-pool-services-1.webp" alt="">
        </div>
        <div class="svc-excellence-float svc-excellence-float--2">
          <img loading="lazy" src="/assets/images/industry-pool-services-3.webp" alt="">
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
      <a href="/industries.php#remodelers" class="excel-tag">Remodelers</a>
      <a href="/industries.php#hvac" class="excel-tag">HVAC</a>
      <a href="/industries.php#plumbing" class="excel-tag">Plumbing</a>
      <a href="/industries.php#roofing" class="excel-tag">Roofing</a>
      <a href="/industries.php#pest-control" class="excel-tag">Pest Control</a>
      <a href="/industries.php#landscaping" class="excel-tag">Landscaping</a>
      <a href="/industries.php#handyman" class="excel-tag">Handyman</a>
      <a href="/industries.php#power-washing" class="excel-tag">Power Washing</a>
    </div>
    <div class="services-cta-band reveal">
      <div>
        <h3>Let's discuss growing your pool service business</h3>
        <p>We'll help you define the right next step.</p>
      </div>
      <a href="/contact.php" class="btn btn-lime btn-lg">Free Consultation</a>
    </div>
  </div>
</section>

<section class="faq-section" id="faqs">
  <div class="container">
    <div class="section-header reveal">
      <p class="subheading">Pool Services FAQs</p>
      <h2>Questions about <span class="heading-accent">Pool Services</span></h2>
    </div>
    <div class="faq-list reveal">
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">01</span>
          <span class="faq-question">Can you help us add accounts on existing routes?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region">
          <div class="faq-panel-inner">
            <p>Yes. We target neighborhoods you already service so new accounts improve route density and margins.</p>
          </div>
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">02</span>
          <span class="faq-question">Do you promote equipment and repair work?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region">
          <div class="faq-panel-inner">
            <p>We build pages and campaigns for pumps, filters, heaters, and automation - the jobs with the best margins.</p>
          </div>
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">03</span>
          <span class="faq-question">Can you run campaigns for openings and closings?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region">
          <div class="faq-panel-inner">
            <p>We launch seasonal campaigns ahead of time so your calendar fills before the rush.</p>
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
