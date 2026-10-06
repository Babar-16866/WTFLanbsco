<?php
$page_title = 'Remodelers | WTF Labs';
$page_description = 'Websites and lead gen that help remodeling companies win bigger kitchen, bath, and whole-home projects.';
$current_page = 'industries';
include __DIR__ . '/includes/header.php';
?>

<?php
$banner_crumb_label = 'Industries';
$banner_crumb_href = '/industries.php';
$banner_breadcrumb = 'Remodelers';
$banner_kicker = 'Industry';
$banner_h1 = 'Remodeling marketing that wins <span class="about-hero-accent">bigger jobs</span>';
$banner_lead = 'Websites, local SEO, and ads that show off your craftsmanship and bring in homeowners ready to invest in a kitchen, bath, or full remodel.';
$banner_primary_label = 'Get a quote';
$banner_secondary_label = 'See our work';
$banner_image = '/assets/images/industry-remodelers-1.webp';
$banner_float1 = '/assets/images/industry-remodelers-2.webp';
$banner_float2 = '/assets/images/industry-remodelers-3.webp';
$banner_card = 'Portfolios that sell the next remodel.';
include __DIR__ . '/includes/page-banner.php';
?>

<section class="page-section industry-nav-section">
  <div class="container">
    <div class="works-filter-stack works-filter-stack--center home-filter-stack" data-industry-nav data-current="remodelers">
      <div class="home-filter-row is-done">
        <p class="home-filter-label">Select the Industry</p>
        <div class="works-filters" id="indIndustries" role="tablist" aria-label="Filter by industry">
          <button type="button" class="works-filter" data-industry="all" role="tab" aria-selected="false">Featured</button>
          <button type="button" class="works-filter is-active" data-industry="remodelers" role="tab" aria-selected="true">Remodelers</button>
          <button type="button" class="works-filter" data-industry="hvac" role="tab" aria-selected="false">HVAC</button>
          <button type="button" class="works-filter" data-industry="plumbing" role="tab" aria-selected="false">Plumbing</button>
          <button type="button" class="works-filter" data-industry="roofing" role="tab" aria-selected="false">Roofing</button>
          <button type="button" class="works-filter" data-industry="pest-control" role="tab" aria-selected="false">Pest Control</button>
          <button type="button" class="works-filter" data-industry="pool-services" role="tab" aria-selected="false">Pool Services</button>
          <button type="button" class="works-filter" data-industry="landscaping" role="tab" aria-selected="false">Landscaping</button>
          <button type="button" class="works-filter" data-industry="handyman" role="tab" aria-selected="false">Handyman</button>
          <button type="button" class="works-filter" data-industry="power-washing" role="tab" aria-selected="false">Power Washing</button>
        </div>
      </div>
      <div class="home-filter-row">
        <p class="home-filter-label">Select the Service</p>
        <div class="works-filters" id="indServices" role="tablist" aria-label="Filter by service">
          <button type="button" class="works-filter is-active" data-filter="all" role="tab" aria-selected="true">All</button>
          <!-- <button type="button" class="works-filter" data-filter="graphic-design" role="tab" aria-selected="false">Graphic Design</button> -->
          <!-- <button type="button" class="works-filter" data-filter="web-design" role="tab" aria-selected="false">Web Design</button> -->
          <button type="button" class="works-filter" data-filter="web-development" role="tab" aria-selected="false">Web Design &amp; Development</button>
          <button type="button" class="works-filter" data-filter="seo" role="tab" aria-selected="false">SEO</button>
          <button type="button" class="works-filter" data-filter="social-media-advertising" role="tab" aria-selected="false">Social Ads</button>
          <button type="button" class="works-filter" data-filter="google-ads" role="tab" aria-selected="false">Google Ads</button>
          <!-- <button type="button" class="works-filter" data-filter="digital-marketing" role="tab" aria-selected="false">Digital Marketing</button> -->
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
      <h2>Remodeling marketing that works in the <span class="heading-accent">real world</span></h2>
      <p>Project galleries, quote funnels, and campaigns built to attract homeowners with real budgets.</p>
    </div>
    <div class="svc-cases reveal">
      <article class="svc-case">
        <div class="svc-case-media">
          <img loading="lazy" src="/assets/images/industry-remodelers-2.webp" alt="Kitchen &amp; bath studio">
        </div>
        <div class="svc-case-body">
          <p class="svc-case-meta">USA · Website &amp; SEO</p>
          <h3>Kitchen &amp; bath studio</h3>
          <p>A portfolio-first site with before/after galleries that doubled qualified quote requests in six months.</p>
        </div>
      </article>
      <article class="svc-case">
        <div class="svc-case-media">
          <img loading="lazy" src="/assets/images/industry-remodelers-3.webp" alt="Design-build contractor">
        </div>
        <div class="svc-case-body">
          <p class="svc-case-meta">Regional · Google Ads</p>
          <h3>Design-build contractor</h3>
          <p>Search campaigns focused on whole-home remodels, cutting cost per lead while raising average job size.</p>
        </div>
      </article>
      <article class="svc-case">
        <div class="svc-case-media">
          <img loading="lazy" src="/assets/images/industry-remodelers-4.webp" alt="Basement finishing crew">
        </div>
        <div class="svc-case-body">
          <p class="svc-case-meta">Local · Brand refresh</p>
          <h3>Basement finishing crew</h3>
          <p>A sharper brand and review strategy that made a small crew look like the obvious local choice.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<section class="svc-section svc-process">
  <div class="container">
    <div class="svc-section-head reveal">
      <p class="svc-kicker"><span></span> Process</p>
      <h2>Remodeling: from discovery to <span class="heading-accent heading-accent--lime">booked jobs</span></h2>
      <p>We handle every stage - strategy, craft, delivery, and follow-through - as one senior team.</p>
    </div>
    <div class="svc-process-grid reveal">
      <article class="svc-process-card">
        <span class="svc-process-num">01</span>
        <h3>Discovery → Market</h3>
        <p>We map your service area, ideal project size, and the competitors homeowners compare you to.</p>
      </article>
      <article class="svc-process-card">
        <span class="svc-process-num">02</span>
        <h3>Portfolio &amp; site</h3>
        <p>Before/after galleries, project stories, and a quote flow that filters out tire-kickers.</p>
      </article>
      <article class="svc-process-card">
        <span class="svc-process-num">03</span>
        <h3>Local visibility</h3>
        <p>Google Business Profile, service-area pages, and reviews that put you in the map pack.</p>
      </article>
      <article class="svc-process-card">
        <span class="svc-process-num">04</span>
        <h3>Ads &amp; reporting</h3>
        <p>Search and social campaigns tied to booked consultations, not just clicks.</p>
      </article>
    </div>
  </div>
</section>

<section class="svc-section svc-excellence">
  <div class="container">
    <div class="svc-excellence-layout reveal">
      <div class="svc-excellence-copy">
        <p class="svc-kicker"><span></span> Excellence</p>
        <h2>End-to-end remodeling <span class="heading-accent">growth</span></h2>
        <p>Homeowners spend weeks comparing remodelers before they call. We make sure your work, reviews, and process are the first thing they see - and the reason they pick you.</p>
        <p>From project galleries to financing callouts and consultation booking, every page is built to move a browser toward a signed contract.</p>
        <ul class="why-feature-list">
          <li>Portfolio-led project galleries</li>
          <li>Quote forms that qualify budgets</li>
          <li>Local SEO for high-value jobs</li>
        </ul>
        <a href="/contact.php" class="btn btn-lime">Start a project</a>
      </div>
      <div class="svc-excellence-visual">
        <div class="svc-excellence-visual-main">
          <img loading="lazy" src="/assets/images/industry-remodelers-4.webp" alt="">
        </div>
        <div class="svc-excellence-chip">
          <span class="svc-excellence-chip-dot"></span>
          <p>Galleries · Quotes · Reviews</p>
        </div>
        <div class="svc-excellence-float svc-excellence-float--1">
          <img loading="lazy" src="/assets/images/industry-remodelers-1.webp" alt="">
        </div>
        <div class="svc-excellence-float svc-excellence-float--2">
          <img loading="lazy" src="/assets/images/industry-remodelers-3.webp" alt="">
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
      <a href="/industries.php#hvac" class="excel-tag">HVAC</a>
      <a href="/industries.php#plumbing" class="excel-tag">Plumbing</a>
      <a href="/industries.php#roofing" class="excel-tag">Roofing</a>
      <a href="/industries.php#pest-control" class="excel-tag">Pest Control</a>
      <a href="/industries.php#pool-services" class="excel-tag">Pool Services</a>
      <a href="/industries.php#landscaping" class="excel-tag">Landscaping</a>
      <a href="/industries.php#handyman" class="excel-tag">Handyman</a>
      <a href="/industries.php#power-washing" class="excel-tag">Power Washing</a>
    </div>
    <div class="services-cta-band reveal">
      <div>
        <h3>Let's discuss growing your remodeling business</h3>
        <p>We'll help you define the right next step.</p>
      </div>
      <a href="/contact.php" class="btn btn-lime btn-lg">Get a quote</a>
    </div>
  </div>
</section>

<section class="faq-section" id="faqs">
  <div class="container">
    <div class="section-header reveal">
      <p class="subheading">Remodelers FAQs</p>
      <h2>Questions about <span class="heading-accent">Remodelers</span></h2>
    </div>
    <div class="faq-list reveal">
      <div class="faq-item is-open">
        <button class="faq-trigger" type="button" aria-expanded="true">
          <span class="faq-num">01</span>
          <span class="faq-question">Can you showcase our past projects?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region">
          <div class="faq-panel-inner">
            <p>Yes. We build project galleries with before/after sliders, project details, and short stories so homeowners can see the quality of your work.</p>
          </div>
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">02</span>
          <span class="faq-question">How do you filter out low-budget leads?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region">
          <div class="faq-panel-inner">
            <p>Quote forms ask about project type, timeline, and budget range up front, so your team spends time on jobs worth quoting.</p>
          </div>
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">03</span>
          <span class="faq-question">Do you help with reviews and Houzz-style profiles?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region">
          <div class="faq-panel-inner">
            <p>We set up review requests after each project and keep your Google Business Profile and directory listings consistent.</p>
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
