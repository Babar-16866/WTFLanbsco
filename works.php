<?php
$page_title = 'Works | WTF Labs';
$page_description = 'From MVPs to platforms, from startups to global brands - every case designed from scratch. No templates. No shortcuts.';
$current_page = 'works';
include __DIR__ . '/includes/header.php';
?>

<?php
$banner_kicker = 'Our work';
$banner_h1 = 'These sites are live. And they <span class="about-hero-accent">deliver</span>.';
$banner_lead = 'From MVPs to platforms, from startups to global brands — every case designed from scratch. No templates. No shortcuts.';
$banner_primary_label = 'Start a project';
$banner_secondary_label = 'Our services';
$banner_secondary_href = '/services.php';
$banner_image = '/assets/images/mockup-main.webp';
$banner_float1 = '/assets/images/mockup-3.webp';
$banner_float2 = '/assets/images/excel-mobile.webp';
$banner_card = 'Real launches. Real results. No templates.';
include __DIR__ . '/includes/page-banner.php';
?>

<section class="page-section">
  <div class="container">
    <div class="works-filter-stack works-filter-stack--center home-filter-stack">
      <div class="home-filter-row">
        <p class="home-filter-label">Select the Industry and services</p>
        <div class="works-filters" id="worksIndustries" role="tablist" aria-label="Filter by industry">
          <button type="button" class="works-filter is-active" data-industry="all" role="tab" aria-selected="true">All</button>
          <button type="button" class="works-filter" data-industry="remodelers" role="tab" aria-selected="false">Remodeling</button>
          <button type="button" class="works-filter" data-industry="hvac" role="tab" aria-selected="false">HVAC</button>
          <button type="button" class="works-filter" data-industry="landscaping" role="tab" aria-selected="false">Landscaping</button>
          <button type="button" class="works-filter" data-industry="roofing" role="tab" aria-selected="false">Roofing</button>
          <button type="button" class="works-filter" data-industry="plumbing" role="tab" aria-selected="false">Plumbing</button>
          <button type="button" class="works-filter" data-industry="pool-services" role="tab" aria-selected="false">Pool Services</button>
          <button type="button" class="works-filter" data-industry="power-washing" role="tab" aria-selected="false">Power Washing</button>
          <button type="button" class="works-filter" data-industry="handyman" role="tab" aria-selected="false">Handyman</button>
          <button type="button" class="works-filter" data-industry="pest-control" role="tab" aria-selected="false">Pest Control</button>
        </div>
      </div>
      <div class="home-filter-row">
        <div class="works-filters" id="worksFilters" role="tablist" aria-label="Filter works by service">
          <button type="button" class="works-filter is-active" data-filter="all" role="tab" aria-selected="true">Featured</button>
          <button type="button" class="works-filter" data-filter="web-development" role="tab" aria-selected="false">Web Design</button>
          <button type="button" class="works-filter" data-filter="seo" role="tab" aria-selected="false">SEO</button>
          <button type="button" class="works-filter" data-filter="social-media-advertising" role="tab" aria-selected="false">Social Media</button>
          <button type="button" class="works-filter" data-filter="google-ads" role="tab" aria-selected="false">Google Ads</button>
        </div>
      </div>
      <div class="home-filter-row">
        <span class="home-filter-label" aria-hidden="true"></span>
        <div class="works-subfilters" id="worksSubfilters" role="tablist" aria-label="Filter by subcategory" hidden></div>
      </div>
    </div>

    <div class="works-grid reveal" id="worksGrid">
      <article class="work-card" data-featured data-tags="web-design web-development" data-subs="product-sites custom-web landing-pages" data-industries="hvac roofing">
        <div class="work-card-media">
          <img loading="lazy" src="/assets/images/excel-uiux.webp" alt="TorchSensors">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>USA</span>
            <span>Jan 2023 - Ongoing</span>
          </div>
          <h2>TorchSensors</h2>
          <p>An award-winning launch website that helped a wildfire detection product earn trust, generate day-one preorders, and grow into a long-term digital platform.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-featured data-tags="web-design digital-marketing" data-subs="landing-pages funnel-design content-marketing" data-industries="plumbing pest-control">
        <div class="work-card-media">
          <img loading="lazy" src="/assets/images/mockup-2.webp" alt="Solana Payouts">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Czech Republic</span>
            <span>May - July 2024</span>
          </div>
          <h2>Solana Payouts</h2>
          <p>A high-converting launch site that helped attract 2,000+ leads in its first month through a focused campaign funnel.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/digital-marketing.php">Digital Marketing</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-featured data-tags="web-development graphic-design" data-subs="web-app brand-collaterals social-media-post" data-industries="remodelers landscaping">
        <div class="work-card-media">
          <img loading="lazy" src="/assets/images/excel-mobile.webp" alt="Infaces">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Cyprus</span>
            <span>Dec 2024 - Dec 2025</span>
          </div>
          <h2>Infaces</h2>
          <p>A storytelling platform that helped a 5,000+ employee global company reconnect distributed teams and strengthen shared culture.</p>
          <div class="work-card-tags">
            <a href="/web-development.php">Web Development</a>
            <a href="/graphic-design.php">Graphic Design</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-featured data-tags="web-design graphic-design" data-subs="corporate-sites logo-design brand-collaterals" data-industries="remodelers handyman">
        <div class="work-card-media">
          <img loading="lazy" src="/assets/images/service-graphic-design.jpg" alt="Global Leathers">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>USA</span>
            <span>Aug - Oct 2024</span>
          </div>
          <h2>Global Leathers</h2>
          <p>A premium website that strengthened brand presence and gave the company a clearer foundation for lead generation.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/graphic-design.php">Graphic Design</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-featured data-tags="web-development seo" data-subs="custom-web technical-seo on-page" data-industries="hvac plumbing">
        <div class="work-card-media">
          <img loading="lazy" src="/assets/images/mockup-3.webp" alt="Cofinity-X">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Germany</span>
            <span>May 2024 - Ongoing</span>
          </div>
          <h2>Cofinity-X</h2>
          <p>Redesigned to boost authority, simplify complex system explanations, integrate a marketplace, and streamline partner onboarding.</p>
          <div class="work-card-tags">
            <a href="/web-development.php">Web Development</a>
            <a href="/seo.php">SEO</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-featured data-tags="web-design web-development" data-subs="corporate-sites wordpress redesigns" data-industries="pool-services landscaping">
        <div class="work-card-media">
          <img loading="lazy" src="/assets/images/service-web-design.jpg" alt="Elvetiko">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Cyprus</span>
            <span>May - Dec 2025</span>
          </div>
          <h2>Elvetiko</h2>
          <p>A calm medical website that clarified the patient journey and prepared multilingual WordPress management for a diagnostic center.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design google-ads" data-subs="landing-pages search-ads remarketing" data-industries="roofing power-washing">
        <div class="work-card-media">
          <img loading="lazy" src="/assets/images/mockup-main.webp" alt="Fairway">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>USA</span>
            <span>Apr - Nov 2021</span>
          </div>
          <h2>Fairway</h2>
          <p>Lead-generating website for a major US mortgage company - immersive storytelling with conversion-focused structure.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/google-ads.php">Google Ads</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-development seo" data-subs="wordpress on-page content-seo" data-industries="pest-control pool-services">
        <div class="work-card-media">
          <img loading="lazy" src="/assets/images/service-web-development.jpg" alt="Fulfillment for Europe">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>EU</span>
            <span>Jan - June 2024</span>
          </div>
          <h2>Fulfillment for Europe</h2>
          <p>Informative corporate site for an EU fulfillment provider - modern look with a usable logistics knowledge base.</p>
          <div class="work-card-tags">
            <a href="/web-development.php">Web Development</a>
            <a href="/seo.php">SEO</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-development digital-marketing" data-subs="custom-web strategy funnel-design" data-industries="power-washing handyman">
        <div class="work-card-media">
          <img loading="lazy" src="/assets/images/mockup-1.webp" alt="Automotive platforms">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Multi-market</span>
            <span>2021 - Ongoing</span>
          </div>
          <h2>Automotive platforms</h2>
          <p>Digital engines for mobility brands - from rebrand experiences to ecosystem platforms that support sales and operations.</p>
          <div class="work-card-tags">
            <a href="/web-development.php">Web Development</a>
            <a href="/digital-marketing.php">Digital Marketing</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design social-media-advertising" data-subs="landing-pages meta-ads creative-testing" data-industries="hvac pest-control">
        <div class="work-card-media">
          <img loading="lazy" src="/assets/images/mobile-app.webp" alt="WMails.io">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Product</span>
            <span>Jan 2023 - Ongoing</span>
          </div>
          <h2>WMails.io</h2>
          <p>High-conversion landing experience for a mailing SaaS product - built for clarity, speed, and signup momentum.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/social-media-advertising.php">Social Media Advertising</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-development seo" data-subs="wordpress content-seo technical-seo" data-industries="remodelers roofing">
        <div class="work-card-media">
          <img loading="lazy" src="/assets/images/why-craft.jpg" alt="Prosperity Home Loans">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>USA</span>
            <span>May 2022 - Ongoing</span>
          </div>
          <h2>Prosperity Home Loans</h2>
          <p>Enterprise web solution with 50+ static pages and 400+ dynamic advisor pages - easy for marketing to manage.</p>
          <div class="work-card-tags">
            <a href="/web-development.php">Web Development</a>
            <a href="/seo.php">SEO</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design graphic-design" data-subs="corporate-sites brand-collaterals business-card" data-industries="landscaping power-washing">
        <div class="work-card-media">
          <img loading="lazy" src="/assets/images/excel-branding.webp" alt="SolvoWorld">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Global</span>
            <span>Apr 2024 - Ongoing</span>
          </div>
          <h2>SolvoWorld</h2>
          <p>Restructured corporate presence for a logistics solutions company - clearer offer, stronger UX, full content control.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/graphic-design.php">Graphic Design</a>
          </div>
        </div>
      </article>
    </div>

  </div>
</section>

<?php
$street_section_id = 'works-testimonials';
include __DIR__ . '/includes/testimonialslider.php';
?>

<section class="page-section">
  <div class="container">
    <div class="services-cta-band reveal">
      <div>
        <h3>Want results like these?</h3>
        <p>Tell us what you're building - we'll map the right approach.</p>
      </div>
      <a href="/contact.php" class="btn btn-lime btn-lg" data-open-popup>Start a project</a>
    </div>
  </div>
</section>

<section class="faq-section" id="works-faq">
  <div class="container">
    <div class="section-header reveal">
      <p class="subheading">Works FAQs</p>
      <h2>Questions before you start <span class="heading-accent">a project</span></h2>
    </div>
    <div class="faq-list reveal">
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">01</span>
          <span class="faq-question">How much does a website project cost?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region"><div class="faq-panel-inner"><p>Website projects start at $10,000. Most full-cycle B2B website engagements fall between $25,000 and $50,000.</p></div></div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">02</span>
          <span class="faq-question">Can you move faster if we have a hard deadline?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region"><div class="faq-panel-inner"><p>Yes, when the deadline is realistic. We can increase the team and run tasks in parallel.</p></div></div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">03</span>
          <span class="faq-question">What does your website process look like?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region"><div class="faq-panel-inner"><p>Discovery, research, positioning, structure, copywriting, UX/UI, development, integrations, testing, and launch.</p></div></div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">04</span>
          <span class="faq-question">How are payments structured?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region"><div class="faq-panel-inner"><p>Full-cycle: 30% upfront, 40% after design, 30% on completion. Smaller projects: 50/50.</p></div></div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">05</span>
          <span class="faq-question">Which platform should we use?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region"><div class="faq-panel-inner"><p>We build with Webflow, WordPress, Shopify, HubSpot, React, Vue, Node.js, Laravel, and Strapi based on your needs.</p></div></div>
      </div>
    </div>
    <div class="faq-all-wrap reveal">
      <a href="/faqs.php" class="btn btn-lime faq-all-btn">View all FAQs <span aria-hidden="true">&rarr;</span></a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
