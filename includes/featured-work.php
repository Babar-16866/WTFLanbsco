<?php
$work_eyebrow = $work_eyebrow ?? '';
$work_heading = $work_heading ?? 'REAL WORK. <span class="accent-lime">BUILT TO EARN TRUST.</span>';
$work_desc = $work_desc ?? 'Immersive where it helps. Fast where speed matters. Clear <span class="text-underline-lime">where buyers</span> need confidence. Every build should fit the sales cycle behind it.';
?>
<section class="home-work-section" id="works">
  <div class="container">
    <div class="section-header center reveal">
<?php if ($work_eyebrow !== ''): ?>
      <p class="subheading"><?php echo htmlspecialchars($work_eyebrow); ?></p>
<?php endif; ?>
      <h2 class="home-title"><?php echo $work_heading; ?></h2>
      <p class="section-desc center-desc"><?php echo $work_desc; ?></p>
    </div>

    <div class="works-filter-stack works-filter-stack--center home-filter-stack reveal">
      <div class="home-filter-row">
        <p class="home-filter-label">Select the Industry</p>
        <div class="works-filters" id="homeWorksIndustries" role="tablist" aria-label="Filter works by industry">
          <button type="button" class="works-filter is-active" data-industry="all" role="tab" aria-selected="true">Featured</button>
          <button type="button" class="works-filter" data-industry="remodelers" role="tab" aria-selected="false">Remodelers</button>
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
      <div class="home-filter-row" id="homeWorksServiceRow" hidden>
        <p class="home-filter-label">Select the Service</p>
        <div class="works-filters" id="homeWorksFilters" role="tablist" aria-label="Filter works by service">
          <button type="button" class="works-filter is-active" data-filter="all" role="tab" aria-selected="true">All</button>
          <button type="button" class="works-filter" data-filter="graphic-design" role="tab" aria-selected="false">Graphic Design</button>
          <button type="button" class="works-filter" data-filter="web-design" role="tab" aria-selected="false">Web Design</button>
          <button type="button" class="works-filter" data-filter="web-development" role="tab" aria-selected="false">Web Development</button>
          <button type="button" class="works-filter" data-filter="seo" role="tab" aria-selected="false">SEO</button>
          <button type="button" class="works-filter" data-filter="social-media-advertising" role="tab" aria-selected="false">Social Ads</button>
          <button type="button" class="works-filter" data-filter="google-ads" role="tab" aria-selected="false">Google Ads</button>
          <button type="button" class="works-filter" data-filter="digital-marketing" role="tab" aria-selected="false">Digital Marketing</button>
        </div>
      </div>
      <div class="home-filter-row">
        <span class="home-filter-label" aria-hidden="true"></span>
        <div class="works-subfilters" id="homeWorksSubfilters" role="tablist" aria-label="Filter by subcategory" hidden></div>
      </div>
    </div>

    <div class="works-grid home-works-grid reveal" id="homeWorksGrid" data-smooth>
      <article class="work-card" data-featured data-tags="web-development web-design" data-subs="web-app custom-web product-sites" data-industries="plumbing hvac" data-live="https://heavyroutes.netlify.app/">
        <div class="work-card-media">
          <img loading="lazy" src="/assets/images/work-heavyroutes.jpg" alt="HeavyRoute">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Heavy haul &amp; logistics</span>
            <span>Live website</span>
          </div>
          <h2>HeavyRoute</h2>
          <p>A cinematic website for a heavy haul carrier moving machinery and oversized cargo across the US and Canada, with clear services, equipment, and a load planner for fast quotes.</p>
          <div class="work-card-tags">
            <a href="/web-development.php">Web Development</a>
            <a href="/web-design.php">Web Design</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-featured data-tags="web-design web-development" data-subs="product-sites shopify custom-web" data-industries="handyman power-washing" data-live="https://pitboxbikes.vercel.app/">
        <div class="work-card-media">
          <img loading="lazy" src="/assets/images/work-pitbox.jpg" alt="PITBOX">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>E-commerce</span>
            <span>Live website</span>
          </div>
          <h2>PITBOX</h2>
          <p>A superbike parts store with an interactive teardown that lets riders take the bike apart and shop every part with fitment checked before dispatch.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-featured data-tags="web-design graphic-design" data-subs="corporate-sites brand-collaterals" data-industries="remodelers pool-services" data-live="https://websiteinfra.vercel.app/">
        <div class="work-card-media">
          <img loading="lazy" src="/assets/images/work-micasa.jpg" alt="MICASA">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Design &amp; architecture</span>
            <span>Live website</span>
          </div>
          <h2>MICASA</h2>
          <p>An immersive studio website for a design and architecture firm, built to showcase bespoke interiors and exteriors one scroll at a time.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/graphic-design.php">Graphic Design</a>
          </div>
        </div>
      </article>

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

      <article class="work-card" data-tags="web-design graphic-design" data-subs="corporate-sites logo-design brand-collaterals" data-industries="remodelers handyman">
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

      <article class="work-card" data-tags="web-development seo" data-subs="custom-web technical-seo on-page" data-industries="hvac plumbing">
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

      <article class="work-card" data-tags="web-design web-development" data-subs="corporate-sites wordpress redesigns" data-industries="pool-services landscaping">
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

    <p class="home-works-empty" id="homeWorksGridEmpty" hidden>More projects in this category are coming soon.</p>

    <div class="home-work-cta">
      <a href="/contact.php" class="btn btn-lime btn-lg" data-open-popup>I&rsquo;m sold! Call me!</a>
    </div>
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
    <iframe class="live-modal-frame" id="liveModalFrame" title="Live website preview" src="about:blank"></iframe>
  </div>
</div>
