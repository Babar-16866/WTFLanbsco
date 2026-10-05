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
      <article class="work-card" data-featured data-tags="web-development web-design" data-subs="web-app custom-web product-sites" data-industries="plumbing hvac" data-live="https://heavyroute-final.vercel.app/">
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

      <article class="work-card" data-tags="web-design web-development seo" data-subs="landing-pages custom-web local-seo" data-industries="handyman power-washing" data-live="https://batteryzoneuae.com/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-battery-zone.webp" alt="Battery Zone">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Automotive services</span>
            <span>Live website</span>
          </div>
          <h2>Battery Zone</h2>
          <p>A fast, call-first website for a Dubai car battery replacement service, with clear prices, 20-30 minute fitting and 24/7 booking.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
            <a href="/seo.php">SEO</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-development seo" data-subs="wordpress on-page content-seo" data-industries="remodelers hvac" data-live="/live-preview?site=digital-scribblers">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-digital-scribblers.webp" alt="Digital Scribblers">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Publishing services</span>
            <span>Live website</span>
          </div>
          <h2>Digital Scribblers</h2>
          <p>A WordPress site for a book writing agency that takes authors from first idea to a publication-ready book, backed by reviews and quick quote calls.</p>
          <div class="work-card-tags">
            <a href="/web-development.php">Web Development</a>
            <a href="/seo.php">SEO</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development" data-subs="corporate-sites wordpress" data-industries="plumbing roofing" data-live="https://scalech.com/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-scalech.webp" alt="Scalech">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Technology consulting</span>
            <span>Live website</span>
          </div>
          <h2>Scalech</h2>
          <p>A bold WordPress presence for a tech growth firm, built around one clear promise and a fast route to a free consultation.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development" data-subs="corporate-sites wix" data-industries="pest-control pool-services" data-live="https://www.patrickfishburnpga.com/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-patrick-fishburn.webp" alt="Patrick Fishburn">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Professional golf</span>
            <span>Live website</span>
          </div>
          <h2>Patrick Fishburn</h2>
          <p>A personal website for a PGA Tour golfer, bringing his story, tour stats, news and sponsors together in one place.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development" data-subs="landing-pages wordpress" data-industries="landscaping handyman" data-live="https://messylifecoach.co.uk/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-messy-life-coach.webp" alt="Messy Life Coach">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Coaching</span>
            <span>Live website</span>
          </div>
          <h2>Messy Life Coach</h2>
          <p>A warm, conversion-focused WordPress site for a UK menopause coach that leads midlife women to a free 20-minute call.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development" data-subs="product-sites squarespace" data-industries="power-washing remodelers" data-live="https://www.soilboy.sg/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-soilboy.webp" alt="Soilboy">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>E-commerce</span>
            <span>Live website</span>
          </div>
          <h2>Soilboy</h2>
          <p>An online plant shop for Singapore with houseplants, handmade ceramic pots and care guides, delivered to the door.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development graphic-design" data-subs="product-sites squarespace brand-collaterals" data-industries="hvac plumbing" data-live="https://www.supernaturalkitchen.com/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-supernatural.webp" alt="Supernatural">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>E-commerce</span>
            <span>Live website</span>
          </div>
          <h2>Supernatural</h2>
          <p>A playful, hand-drawn store for dye-free sprinkles and natural food colors that makes clean baking feel fun.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
            <a href="/graphic-design.php">Graphic Design</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development" data-subs="corporate-sites squarespace" data-industries="roofing pest-control" data-live="/live-preview?site=minaa-b">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-minaa-b.webp" alt="Minaa B.">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Author &amp; therapist</span>
            <span>Live website</span>
          </div>
          <h2>Minaa B.</h2>
          <p>A calm personal brand website for a therapist and author, presenting her books, speaking and The Siblinghood Theory.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development digital-marketing" data-subs="landing-pages squarespace funnel-design" data-industries="pool-services landscaping" data-live="/live-preview?site=digital-nomad-coach">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-digital-nomad-coach.webp" alt="Digital Nomad Coach">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Coaching</span>
            <span>Live website</span>
          </div>
          <h2>Digital Nomad Coach</h2>
          <p>A clean coaching website for people ready to escape the 9-5, with a free discovery call and a quiz to start the journey.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
            <a href="/digital-marketing.php">Digital Marketing</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development" data-subs="product-sites custom-web" data-industries="handyman power-washing" data-live="https://toucancocktails.com/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-toucan.webp" alt="Toucan Cocktails">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>E-commerce</span>
            <span>Live website</span>
          </div>
          <h2>Toucan Cocktails</h2>
          <p>A moody, video-led website for premium ready-to-craft cocktails, with a sampler box and a where-to-buy locator.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development" data-subs="product-sites shopify" data-industries="remodelers hvac" data-live="/live-preview?site=bruvi">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-bruvi.webp" alt="Bruvi">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>E-commerce</span>
            <span>Live website</span>
          </div>
          <h2>Bruvi</h2>
          <p>A Shopify store for a single-serve coffee brewer and B-Pods, built around product storytelling and easy reordering.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development graphic-design" data-subs="product-sites shopify brand-collaterals" data-industries="plumbing roofing" data-live="/live-preview?site=artisaire">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-artisaire.webp" alt="Artisaire">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>E-commerce</span>
            <span>Live website</span>
          </div>
          <h2>Artisaire</h2>
          <p>An elegant Shopify store for wedding invitations, cards and custom wax seals, with a design-your-own service.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
            <a href="/graphic-design.php">Graphic Design</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development" data-subs="product-sites shopify" data-industries="pest-control pool-services" data-live="/live-preview?site=kirrin-finch">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-kirrin-finch.webp" alt="Kirrin Finch">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>E-commerce</span>
            <span>Live website</span>
          </div>
          <h2>Kirrin Finch</h2>
          <p>A Shopify fashion store for menswear-inspired clothing for women and non-binary people, from dress shirts to full suits.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development" data-subs="product-sites shopify" data-industries="landscaping handyman" data-live="/live-preview?site=southern-novelscents">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-southern-novelscents.webp" alt="Southern Novelscents">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>E-commerce</span>
            <span>Live website</span>
          </div>
          <h2>Southern Novelscents</h2>
          <p>A Shopify store for book-inspired room and linen sprays, with new launches and collections right up front.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development" data-subs="corporate-sites custom-web" data-industries="power-washing remodelers" data-live="https://www.wonderfuleducation.org/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-wonderful-education.webp" alt="Wonderful Education">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Non-profit</span>
            <span>Live website</span>
          </div>
          <h2>Wonderful Education</h2>
          <p>A Webflow website for an education non-profit working to break the cycle of generational poverty, from preschool to career pathways.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development" data-subs="product-sites wix" data-industries="hvac plumbing" data-live="https://www.holzbuchstaben.ch/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-malco-wallshop.webp" alt="Malco Wallshop">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>E-commerce</span>
            <span>Live website</span>
          </div>
          <h2>Malco Wallshop</h2>
          <p>A Swiss Wix store for custom wooden letters, names and quotes that customers design for their own walls.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development" data-subs="product-sites shopify" data-industries="roofing pest-control" data-live="/live-preview?site=bitty-balm">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-bitty-balm.webp" alt="Bitty Balm">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>E-commerce</span>
            <span>Live website</span>
          </div>
          <h2>Bitty Balm</h2>
          <p>A bright Shopify store for non-toxic, multi-use makeup and moisture balms made for effortless everyday color.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development" data-subs="corporate-sites wix" data-industries="pool-services landscaping" data-live="https://www.amsterdamolympicrecords.nl/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-amsterdam-olympic-records.webp" alt="Amsterdam Olympic Records">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Music production</span>
            <span>Live website</span>
          </div>
          <h2>Amsterdam Olympic Records</h2>
          <p>A playful Wix website for an Amsterdam record label and studio, covering everything from songwriting to mastering and publishing.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development" data-subs="corporate-sites custom-web" data-industries="handyman power-washing" data-live="https://www.deeptech.build/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-deep-tech-momentum.webp" alt="Deep Tech Momentum">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Events &amp; investment</span>
            <span>Live website</span>
          </div>
          <h2>Deep Tech Momentum</h2>
          <p>A striking Framer website for Europe's frontier tech marketplace, bringing summits, capital and insights together.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development" data-subs="landing-pages custom-web" data-industries="remodelers hvac" data-live="/live-preview?site=black-diamond-limo">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-black-diamond-limo.webp" alt="Black Diamond Limo">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Luxury transport</span>
            <span>Live website</span>
          </div>
          <h2>Black Diamond Limo</h2>
          <p>A sleek Webflow website for a luxury car and limo service, built around a quick ride request.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development seo" data-subs="corporate-sites custom-web local-seo" data-industries="remodelers handyman" data-live="/live-preview?site=refresh-renovations">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-refresh-renovations.webp" alt="Refresh Renovations">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Home renovation</span>
            <span>Live website</span>
          </div>
          <h2>Refresh Renovations</h2>
          <p>A Webflow website for a national renovation company that guides homeowners from concept and design through to the build.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
            <a href="/seo.php">SEO</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development" data-subs="corporate-sites squarespace" data-industries="plumbing roofing" data-live="/live-preview?site=va-loan-nerd">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-va-loan-nerd.webp" alt="The VA Loan Nerd">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Mortgage education</span>
            <span>Live website</span>
          </div>
          <h2>The VA Loan Nerd</h2>
          <p>A veteran-led Squarespace website that makes VA home loans easier to understand through clear education and guidance.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development" data-subs="product-sites custom-web" data-industries="pest-control pool-services" data-live="https://www.upcapital.io/en-us">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-up-capital.webp" alt="Up Capital">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Fintech</span>
            <span>Live website</span>
          </div>
          <h2>Up Capital</h2>
          <p>A Webflow website for a small-business financing platform, built around one-click advance payments.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development" data-subs="landing-pages custom-web" data-industries="hvac power-washing" data-live="https://www.calbergcoaching.com/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-calberg-coaching.webp" alt="Calberg Coaching">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Leadership coaching</span>
            <span>Live website</span>
          </div>
          <h2>Calberg Coaching</h2>
          <p>A personal website for a leadership coach, centred on her programs, podcast and booking a call.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design digital-marketing social-media-advertising" data-subs="landing-pages strategy meta-ads" data-industries="plumbing roofing" data-live="/live-preview?site=bestie-media">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-bestie-media.webp" alt="Bestie Media">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Performance marketing</span>
            <span>Live website</span>
          </div>
          <h2>Bestie Media</h2>
          <p>A bold agency website for a Meta, Google and TikTok ads team serving e-commerce brands, with a free audit offer.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/digital-marketing.php">Digital Marketing</a>
            <a href="/social-media-advertising.php">Social Media Advertising</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development" data-subs="corporate-sites custom-web" data-industries="pest-control handyman" data-live="https://sparkengine.tv/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-spark-engine.webp" alt="Spark Engine">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Animation studio</span>
            <span>Live website</span>
          </div>
          <h2>Spark Engine</h2>
          <p>A Framer website for a 3D animation and CGI studio that explains complex technical products on screen.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design digital-marketing" data-subs="landing-pages funnel-design" data-industries="landscaping" data-live="https://sites.leadconnectorhq.com/preview/Jahj4IhcehXpYpAXwgeW">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-taylor-anthony.webp" alt="Taylor Anthony 365">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Lawn care</span>
            <span>Live website</span>
          </div>
          <h2>Taylor Anthony 365</h2>
          <p>A GoHighLevel landing page for year-round lawn care in St. Johns County, built to turn visits into free estimate requests.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/digital-marketing.php">Digital Marketing</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design digital-marketing" data-subs="landing-pages funnel-design" data-industries="landscaping" data-live="https://sites.leadconnectorhq.com/preview/oeyuwcaV4aPbZvWwo8u7">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-design-tree.webp" alt="Design Tree Home Services">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Tree &amp; turf care</span>
            <span>Live website</span>
          </div>
          <h2>Design Tree Home Services</h2>
          <p>A GoHighLevel landing page for an Arizona tree and artificial turf service, with an instant quote in the first screen.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/digital-marketing.php">Digital Marketing</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design digital-marketing" data-subs="landing-pages funnel-design" data-industries="landscaping" data-live="https://sites.leadconnectorhq.com/preview/aYXAHuxTFGclvAtWgc9a?notrack=true">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-pear-tree.webp" alt="Pear Tree Property Services">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Lawn maintenance</span>
            <span>Live website</span>
          </div>
          <h2>Pear Tree Property Services</h2>
          <p>A GoHighLevel page for a South Shore, MA property service that pairs lawn maintenance with a quick enquiry form.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/digital-marketing.php">Digital Marketing</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design digital-marketing" data-subs="landing-pages funnel-design" data-industries="landscaping" data-live="https://sites.leadconnectorhq.com/preview/vDPrJkjTFxy0KNBTL7SA?notrack=true">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-better-view.webp" alt="Better View Landscapes">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Landscaping</span>
            <span>Live website</span>
          </div>
          <h2>Better View Landscapes</h2>
          <p>A GoHighLevel landing page for a Northampton, MA landscaper covering design, installation, maintenance and snow removal.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/digital-marketing.php">Digital Marketing</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design digital-marketing" data-subs="landing-pages funnel-design" data-industries="landscaping" data-live="https://sites.leadconnectorhq.com/preview/QnEwGVkigIuAJmlbmrnI">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-prestige-tree.webp" alt="Prestige Tree Experts">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Tree care</span>
            <span>Live website</span>
          </div>
          <h2>Prestige Tree Experts</h2>
          <p>A GoHighLevel landing page for tree health care, with call and get-in-touch actions right in the first screen.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/digital-marketing.php">Digital Marketing</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design digital-marketing" data-subs="landing-pages funnel-design" data-industries="landscaping" data-live="https://sites.leadconnectorhq.com/preview/mNcWGtFCVPiZbrFr1WY3">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-beyond-the-curb.webp" alt="Beyond the Curb">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Landscape design</span>
            <span>Live website</span>
          </div>
          <h2>Beyond the Curb</h2>
          <p>A GoHighLevel landing page for a landscape design and installation company, built to turn interest into calls.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/digital-marketing.php">Digital Marketing</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development" data-subs="corporate-sites custom-web" data-industries="roofing pool-services" data-live="https://www.azur-camping.com/en">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-azur-camping.webp" alt="Azur Camping">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Travel &amp; hospitality</span>
            <span>Live website</span>
          </div>
          <h2>Azur Camping</h2>
          <p>A booking-led website for five campsites in southern Germany, with date search and best-price online booking.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
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
