<?php
$page_title = 'Plumbing | WTF Labs';
$page_description = 'Websites and ads that make your plumbing company the first call for leaks, clogs, and water heaters.';
$current_page = 'industries';
include __DIR__ . '/includes/header.php';
?>

<section class="ihero-section">
  <div class="ihero-box">
    <header class="ihero-header reveal">
      <p class="ihero-eyebrow"><span class="ihero-eyebrow-dot"></span> Plumbing</p>
      <h1 class="ihero-heading">Plumbing marketing that makes you the <span class="accent-lime">first call</span></h1>
      <p class="ihero-lead">Burst pipes and backed-up drains do not wait. We build the site, local rankings, and campaigns that put your number in front of homeowners the moment they need it.</p>
    </header>
    <!--
    <div class="about-hero-proof">
      <div class="about-hero-proof-item">
        <strong>400+</strong>
        <span>projects</span>
      </div>
      <div class="about-hero-proof-item">
        <strong>2018</strong>
        <span>since</span>
      </div>
      <div class="about-hero-proof-item">
        <strong>4.8</strong>
        <span>rating</span>
      </div>
      <div class="about-hero-proof-item">
        <strong>48+</strong>
        <span>reviews</span>
      </div>
    </div>
    -->
    <div class="ihero-stage">
      <div class="ihero-canvas">
        <div class="ihero-side ihero-side-left">
          <img src="/assets/images/hero-plumbing-left.webp" alt="">
        </div>
        <div class="ihero-side ihero-side-right">
          <img src="/assets/images/hero-plumbing-right.webp" alt="">
        </div>
        <div class="ihero-banner">
          <img src="/assets/images/hero-plumbing-main.webp" alt="" class="ihero-banner-img" fetchpriority="high">
        </div>
      </div>
      <a href="/contact.php" class="ihero-primary reveal reveal-delay-3" data-open-popup><span class="ihero-primary-label">Free Consultation</span></a>
      <div class="ihero-secondary reveal reveal-delay-1">
        <a href="/works.php" class="ihero-secondary-btn"><span class="ihero-secondary-label">See our work</span></a>
      </div>
    </div>
  </div>
</section>

<section class="page-section industry-nav-section">
  <div class="container">
    <div class="works-filter-stack works-filter-stack--center home-filter-stack" data-trade-links>
      <div class="home-filter-row is-done">
        <p class="home-filter-label">Select the Industry and services</p>
        <div class="works-filters" id="homeWorksIndustries" role="tablist" aria-label="Filter by industry">
          <button type="button" class="works-filter" data-industry="all" role="tab" aria-selected="false">Featured</button>
          <button type="button" class="works-filter" data-industry="remodelers" role="tab" aria-selected="false">Remodeling</button>
          <button type="button" class="works-filter" data-industry="hvac" role="tab" aria-selected="false">HVAC</button>
          <button type="button" class="works-filter" data-industry="landscaping" role="tab" aria-selected="false">Landscaping</button>
          <button type="button" class="works-filter" data-industry="roofing" role="tab" aria-selected="false">Roofing</button>
          <button type="button" class="works-filter is-active" data-industry="plumbing" role="tab" aria-selected="true">Plumbing</button>
          <button type="button" class="works-filter" data-industry="pool-services" role="tab" aria-selected="false">Pool Services</button>
          <button type="button" class="works-filter" data-industry="power-washing" role="tab" aria-selected="false">Power Washing</button>
          <button type="button" class="works-filter" data-industry="handyman" role="tab" aria-selected="false">Handyman</button>
          <button type="button" class="works-filter" data-industry="pest-control" role="tab" aria-selected="false">Pest Control</button>
        </div>
      </div>
      <div class="home-filter-row">
        <div class="works-filters" id="homeWorksFilters" role="tablist" aria-label="Filter by service">
          <button type="button" class="works-filter is-active" data-filter="all" role="tab" aria-selected="true">All</button>
          <button type="button" class="works-filter" data-filter="web-development" role="tab" aria-selected="false">Web Design</button>
          <button type="button" class="works-filter" data-filter="seo" role="tab" aria-selected="false">SEO</button>
          <button type="button" class="works-filter" data-filter="social-media-advertising" role="tab" aria-selected="false">Social Media</button>
          <button type="button" class="works-filter" data-filter="google-ads" role="tab" aria-selected="false">Google Ads</button>
        </div>
      </div>
      <div class="home-filter-row">
        <span class="home-filter-label" aria-hidden="true"></span>
        <div class="works-subfilters" id="homeWorksSubfilters" role="tablist" aria-label="Filter by subcategory" hidden></div>
      </div>
    </div>

    <div class="works-grid home-works-grid reveal" id="homeWorksGrid" data-smooth>
      <article class="work-card" data-tags="web-design web-development" data-subs="corporate-sites wordpress" data-industries="plumbing" data-live="https://edwardsplumbingllc.com/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-edwards-plumbing.webp" alt="Edwards Plumbing">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Phoenix, AZ</span>
            <span>WordPress</span>
          </div>
          <h2>Edwards Plumbing</h2>
          <p>A WordPress site for a family-owned Phoenix-area plumbing company with free estimates.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>
      <article class="work-card" data-tags="web-design web-development" data-subs="corporate-sites squarespace" data-industries="plumbing" data-live="/live-preview?site=mns-plumbing">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-mns-plumbing.webp" alt="MNS Plumbing">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Anthem, AZ</span>
            <span>Squarespace</span>
          </div>
          <h2>MNS Plumbing</h2>
          <p>A Squarespace site for an Anthem plumbing company offering same-day repairs and installations.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>
      <article class="work-card" data-tags="web-design web-development" data-subs="corporate-sites squarespace" data-industries="plumbing" data-live="https://www.uniplumb.com.au/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-uniplumb.webp" alt="Uniplumb">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Sunshine Coast, AU</span>
            <span>Squarespace</span>
          </div>
          <h2>Uniplumb</h2>
          <p>A clean Squarespace site for a Sunshine Coast plumbing, drainage and renovation company.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>
      <article class="work-card" data-tags="web-design web-development" data-subs="corporate-sites wordpress" data-industries="plumbing" data-live="https://reliantplumbing.com/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/industry-plumbing-3.webp" alt="Reliant Plumbing">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Austin, TX</span>
            <span>WordPress</span>
          </div>
          <h2>Reliant Plumbing</h2>
          <p>A WordPress site for a 24/7 Texas plumbing company with online booking and free estimates.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>
      <article class="work-card" data-tags="web-design web-development" data-subs="corporate-sites wordpress" data-industries="plumbing" data-live="https://beyondwow.com/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-beyond-wow-plumbing.webp" alt="Beyond Wow Plumbing">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Austin, TX</span>
            <span>WordPress</span>
          </div>
          <h2>Beyond Wow Plumbing</h2>
          <p>A bold WordPress site for Austin’s trusted plumber since 1980, with 4,600+ reviews.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>
      <article class="work-card" data-tags="web-design web-development" data-subs="corporate-sites custom-web" data-industries="plumbing" data-live="https://www.plumbersthatcare.com/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-economy-plumbing-services.webp" alt="Economy Plumbing Services">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Austin, TX</span>
            <span>Custom Web</span>
          </div>
          <h2>Economy Plumbing Services</h2>
          <p>A custom-built site for master plumbers serving Austin and Marble Falls since 2012.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>
      <article class="work-card" data-tags="web-design web-development" data-subs="corporate-sites wordpress" data-industries="plumbing" data-live="https://oandmplumbing.com/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-o-and-m-plumbing.webp" alt="O &amp; M Plumbing">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Pflugerville, TX</span>
            <span>WordPress</span>
          </div>
          <h2>O &amp; M Plumbing</h2>
          <p>A WordPress site for a Pflugerville and Austin plumber handling residential and commercial work.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>
      <article class="work-card" data-tags="web-design web-development" data-subs="corporate-sites custom-web" data-industries="plumbing" data-live="https://miamidadeplumbingcompany.com/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-miami-dade-plumbing.webp" alt="Miami Dade Plumbing">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Miami, FL</span>
            <span>Custom Web</span>
          </div>
          <h2>Miami Dade Plumbing</h2>
          <p>A custom-built site for a mobile Miami-Dade plumber covering leaks, drains and water heaters 24/7.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>
      <article class="work-card" data-tags="web-design web-development" data-subs="corporate-sites wordpress" data-industries="plumbing" data-live="https://sunlandplumbing.com/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-sunland-plumbing.webp" alt="Sunland Plumbing">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Austin, TX</span>
            <span>WordPress</span>
          </div>
          <h2>Sunland Plumbing</h2>
          <p>A WordPress site for Austin’s water heater specialists with upfront, all-in pricing.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>
      <article class="work-card" data-tags="web-design web-development" data-subs="corporate-sites wordpress" data-industries="plumbing" data-live="https://captainplumbertx.com/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-captain-plumber.webp" alt="Captain Plumber">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Dripping Springs, TX</span>
            <span>WordPress</span>
          </div>
          <h2>Captain Plumber</h2>
          <p>A bold WordPress site for a locally owned Dripping Springs plumber offering same-day service.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>
    </div>

    <div class="home-work-cta"></div>
  </div>
</section>

<div class="work-modal" id="workModal" hidden>
  <div class="work-modal-backdrop" data-work-close></div>
  <div class="work-modal-dialog" role="dialog" aria-modal="true" aria-labelledby="workModalTitle">
    <button class="work-modal-close" type="button" data-work-close aria-label="Close">&times;</button>
    <div class="work-modal-scroll">
      <div class="work-modal-media">
        <img loading="lazy" id="workModalImg" src="" alt="">
      </div>
      <div class="work-modal-body">
        <p class="work-modal-eyebrow" id="workModalEyebrow"></p>
        <h3 id="workModalTitle"></h3>
        <div class="work-card-meta work-modal-meta" id="workModalMeta"></div>
        <p class="work-modal-text" id="workModalText"></p>
        <div class="work-card-tags work-modal-tags" id="workModalTags"></div>
        <div class="work-modal-actions">
          <a href="/contact.php" class="btn btn-lime" data-open-popup>Start a similar project</a>
          <a href="/works.php" class="text-link-blue">See all work &rarr;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="live-modal" id="liveModal" hidden>
  <div class="live-modal-backdrop" data-live-close></div>
  <div class="live-modal-dialog" role="dialog" aria-modal="true" aria-label="Live website preview">
    <button class="live-modal-close" type="button" data-live-close aria-label="Close">&times;</button>
    <div class="live-modal-loader" aria-hidden="true"><span></span></div>
    <div class="live-modal-progress" aria-hidden="true"></div>
    <iframe class="live-modal-frame" id="liveModalFrame" title="Live website preview" src="about:blank"></iframe>
  </div>
</div>

<section class="svc-section svc-work">
  <div class="container">
    <div class="svc-section-head reveal">
      <p class="svc-kicker"><span></span> Selected work</p>
      <h2>Plumbing marketing that works in the <span class="heading-accent">real world</span></h2>
      <p>Call-first websites and campaigns built for urgent searches and high-ticket installs.</p>
    </div>
    <div class="svc-cases reveal">
      <article class="svc-case">
        <div class="svc-case-media">
          <img loading="lazy" src="/assets/images/industry-plumbing-2.webp" alt="Residential plumbing company">
        </div>
        <div class="svc-case-body">
          <p class="svc-case-meta">USA · Website &amp; SEO</p>
          <h3>Residential plumbing company</h3>
          <p>A call-first site and city pages that pushed the brand into the map pack across three counties.</p>
        </div>
      </article>
      <article class="svc-case">
        <div class="svc-case-media">
          <img loading="lazy" src="/assets/images/industry-plumbing-3.webp" alt="Drain &amp; sewer specialists">
        </div>
        <div class="svc-case-body">
          <p class="svc-case-meta">Regional · Google Ads</p>
          <h3>Drain &amp; sewer specialists</h3>
          <p>Emergency-focused search campaigns that lowered cost per call while running 24/7.</p>
        </div>
      </article>
      <article class="svc-case">
        <div class="svc-case-media">
          <img loading="lazy" src="/assets/images/industry-plumbing-4.webp" alt="Water heater installer">
        </div>
        <div class="svc-case-body">
          <p class="svc-case-meta">Local · Installs</p>
          <h3>Water heater installer</h3>
          <p>Dedicated install landing pages and financing offers that lifted average ticket size.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<section class="svc-section svc-process">
  <div class="container">
    <div class="svc-section-head reveal">
      <p class="svc-kicker"><span></span> Process</p>
      <h2>Plumbing: from discovery to <span class="heading-accent heading-accent--lime">booked jobs</span></h2>
      <p>We handle every stage - strategy, craft, delivery, and follow-through - as one senior team.</p>
    </div>
    <div class="svc-process-grid reveal">
      <article class="svc-process-card">
        <span class="svc-process-num">01</span>
        <h3>Discovery → Services</h3>
        <p>We identify your most profitable jobs and the areas you want to own.</p>
      </article>
      <article class="svc-process-card">
        <span class="svc-process-num">02</span>
        <h3>Call-first site</h3>
        <p>Click-to-call everywhere, clear pricing cues, and trust signals above the fold.</p>
      </article>
      <article class="svc-process-card">
        <span class="svc-process-num">03</span>
        <h3>Local visibility</h3>
        <p>Service-area pages, map rankings, and review requests after every job.</p>
      </article>
      <article class="svc-process-card">
        <span class="svc-process-num">04</span>
        <h3>Ads &amp; tracking</h3>
        <p>Emergency and install campaigns with calls tracked back to real revenue.</p>
      </article>
    </div>
  </div>
</section>

<section class="svc-section svc-excellence">
  <div class="container">
    <div class="svc-excellence-layout reveal">
      <div class="svc-excellence-copy">
        <p class="svc-kicker"><span></span> Excellence</p>
        <h2>End-to-end plumbing <span class="heading-accent">growth</span></h2>
        <p>Most plumbing jobs start with a panicked search on a phone. We make your company the easiest one to find, trust, and call in that moment.</p>
        <p>Beyond emergencies, we build pages and offers for water heaters, repipes, and remodel plumbing - the jobs that grow your margins.</p>
        <ul class="why-feature-list">
          <li>24/7 emergency call paths</li>
          <li>Water heater &amp; repipe landing pages</li>
          <li>Local SEO for every service area</li>
        </ul>
        <a href="/contact.php" class="btn btn-lime">Start a project</a>
      </div>
      <div class="svc-excellence-visual">
        <div class="svc-excellence-visual-main">
          <img loading="lazy" src="/assets/images/industry-plumbing-4.webp" alt="">
        </div>
        <div class="svc-excellence-chip">
          <span class="svc-excellence-chip-dot"></span>
          <p>Emergencies · Drains · Installs</p>
        </div>
        <div class="svc-excellence-float svc-excellence-float--1">
          <img loading="lazy" src="/assets/images/industry-plumbing-1.webp" alt="">
        </div>
        <div class="svc-excellence-float svc-excellence-float--2">
          <img loading="lazy" src="/assets/images/industry-plumbing-3.webp" alt="">
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
      <a href="/industries.php#remodelers" class="excel-tag">Remodeling</a>
      <a href="/industries.php#hvac" class="excel-tag">HVAC</a>
      <a href="/industries.php#roofing" class="excel-tag">Roofing</a>
      <a href="/industries.php#pest-control" class="excel-tag">Pest Control</a>
      <a href="/industries.php#pool-services" class="excel-tag">Pool Services</a>
      <a href="/industries.php#landscaping" class="excel-tag">Landscaping</a>
      <a href="/industries.php#handyman" class="excel-tag">Handyman</a>
      <a href="/industries.php#power-washing" class="excel-tag">Power Washing</a>
    </div>
    <div class="services-cta-band reveal">
      <div>
        <h3>Let's discuss growing your plumbing business</h3>
        <p>We'll help you define the right next step.</p>
      </div>
      <a href="/contact.php" class="btn btn-lime btn-lg">Free Consultation</a>
    </div>
  </div>
</section>

<section class="faq-section" id="faqs">
  <div class="container">
    <div class="section-header reveal">
      <p class="subheading">Plumbing FAQs</p>
      <h2>Questions about <span class="heading-accent">Plumbing</span></h2>
    </div>
    <div class="faq-list reveal">
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">01</span>
          <span class="faq-question">Do you focus on calls or form leads?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region">
          <div class="faq-panel-inner">
            <p>Both, but plumbing is call-heavy, so we design for click-to-call first and track every call by source.</p>
          </div>
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">02</span>
          <span class="faq-question">Can you run ads 24/7 for emergencies?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region">
          <div class="faq-panel-inner">
            <p>Yes. We schedule emergency campaigns around your dispatch hours and pause them when no one can answer.</p>
          </div>
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">03</span>
          <span class="faq-question">Can you target specific cities or zip codes?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region">
          <div class="faq-panel-inner">
            <p>We build service-area pages and geo-targeted campaigns so you only pay for leads where your trucks go.</p>
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
