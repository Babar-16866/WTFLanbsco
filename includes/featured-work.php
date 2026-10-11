<?php
$work_eyebrow = $work_eyebrow ?? '';
$work_heading = $work_heading ?? 'INSPIRATIONAL WORK. <span class="accent-lime">BUILT TO EARN TRUST.</span>';
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
        <p class="home-filter-label">Select the Industry and services</p>
        <div class="works-filters" id="homeWorksIndustries" role="tablist" aria-label="Filter works by industry">
          <button type="button" class="works-filter is-active" data-industry="all" role="tab" aria-selected="true">Featured</button>
          <button type="button" class="works-filter" data-industry="remodelers" role="tab" aria-selected="false">Remodelers</button>
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
      <div class="home-filter-row" id="homeWorksServiceRow" hidden>
        <!-- <p class="home-filter-label">Select the Service</p> -->
        <div class="works-filters" id="homeWorksFilters" role="tablist" aria-label="Filter works by service">
          <button type="button" class="works-filter is-active" data-filter="all" role="tab" aria-selected="true">All</button>
          <!-- <button type="button" class="works-filter" data-filter="graphic-design" role="tab" aria-selected="false">Graphic Design</button> -->
          <!-- <button type="button" class="works-filter" data-filter="web-design" role="tab" aria-selected="false">Web Design</button> -->
          <button type="button" class="works-filter" data-filter="web-development" role="tab" aria-selected="false">Web Design</button>
          <button type="button" class="works-filter" data-filter="seo" role="tab" aria-selected="false">SEO</button>
          <button type="button" class="works-filter" data-filter="social-media-advertising" role="tab" aria-selected="false">Social Media</button>
          <button type="button" class="works-filter" data-filter="google-ads" role="tab" aria-selected="false">Google Ads</button>
          <!-- <button type="button" class="works-filter" data-filter="digital-marketing" role="tab" aria-selected="false">Digital Marketing</button> -->
        </div>
      </div>
      <div class="home-filter-row">
        <span class="home-filter-label" aria-hidden="true"></span>
        <div class="works-subfilters" id="homeWorksSubfilters" role="tablist" aria-label="Filter by subcategory" hidden></div>
      </div>
    </div>

    <div class="works-grid home-works-grid reveal" id="homeWorksGrid" data-smooth>
      <?php /*
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
      */ ?>
      <article class="work-card" data-featured data-tags="web-design web-development" data-subs="corporate-sites wordpress" data-industries="remodelers" data-live="https://teamworkhomedesigns.com/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-teamwork-home-designs.webp" alt="Teamwork Home Designs">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Austin, TX</span>
            <span>WordPress</span>
          </div>
          <h2>Teamwork Home Designs</h2>
          <p>A clean WordPress site for an Austin general contractor, built around kitchen and bath transformations and a free consultation call.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-featured data-tags="web-design web-development" data-subs="corporate-sites custom-web" data-industries="remodelers" data-live="https://primeconstructionaustin.com/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-prime-construction.webp" alt="Prime Construction">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Austin, TX</span>
            <span>Custom coded</span>
          </div>
          <h2>Prime Construction</h2>
          <p>A custom-built design and build site for an Austin remodeler, leading with finished kitchens, baths and whole-home renovations.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-featured data-tags="web-design web-development" data-subs="corporate-sites wordpress" data-industries="remodelers" data-live="https://miaremodelingcontractors.com/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/industry-remodelers-2.webp" alt="Mia Remodeling Contractors">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Miami, FL</span>
            <span>WordPress</span>
          </div>
          <h2>Mia Remodeling Contractors</h2>
          <p>A WordPress site for a Miami remodeling contractor covering bathrooms, kitchens, decks, patio enclosures and pergolas.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-featured data-tags="web-design web-development" data-subs="corporate-sites wordpress" data-industries="remodelers" data-live="https://elbazconstructioncorp.com/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/industry-remodelers-4.webp" alt="Elbaz Construction">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Miami, FL</span>
            <span>WordPress</span>
          </div>
          <h2>Elbaz Construction</h2>
          <p>A WordPress site for a Miami and Hollywood general contractor focused on kitchen and bathroom remodeling across South Florida.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-featured data-tags="web-design web-development" data-subs="landing-pages wix" data-industries="remodelers" data-live="https://www.ymedinaremodeling.com/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-ymedina-remodeling.webp" alt="YMedina Remodeling">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Miami, FL</span>
            <span>Wix</span>
          </div>
          <h2>YMedina Remodeling</h2>
          <p>A Wix site for a Miami remodeling company with a free estimate form right in the first screen.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-featured data-tags="web-design web-development" data-subs="corporate-sites squarespace" data-industries="remodelers" data-live="/live-preview?site=excel-remodeling">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-excel-remodeling.webp" alt="Excel Remodeling">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Maryland</span>
            <span>Squarespace</span>
          </div>
          <h2>Excel Remodeling</h2>
          <p>A Squarespace site for a Maryland roofing and siding company, built around trust and a free no-pressure estimate.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-featured data-tags="web-design web-development" data-subs="corporate-sites squarespace" data-industries="remodelers" data-live="https://www.environschicago.com/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-environs-chicago.webp" alt="Environs Group">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Chicago, IL</span>
            <span>Squarespace</span>
          </div>
          <h2>Environs Group</h2>
          <p>An elegant Squarespace site for a Chicago builder and interior design studio, showing available homes and recent projects.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-featured data-tags="web-design web-development" data-subs="corporate-sites wix" data-industries="remodelers" data-live="https://www.unitedelitegroup.com/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-united-elite-group.webp" alt="United Elite Group">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>New York, NY</span>
            <span>Wix</span>
          </div>
          <h2>United Elite Group</h2>
          <p>A Wix site for a New York City luxury renovation contractor, with portfolio-led storytelling and a free consultation.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-featured data-tags="web-design web-development" data-subs="redesigns squarespace" data-industries="remodelers" data-live="https://www.eurodesignremodel.com/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-euro-design-remodel.webp" alt="Euro Design Remodel">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Maryland</span>
            <span>Squarespace</span>
          </div>
          <h2>Euro Design Remodel</h2>
          <p>A Squarespace site for a Maryland bathroom remodeler with 20 years of experience, built to book free design consultations.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development" data-subs="corporate-sites custom-web" data-industries="power-washing" data-live="/live-preview?site=austin-pressure-washing-and-roof-cleanin">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-austin-pressure-washing-and-roof-cleanin.webp" alt="Austin Pressure Washing &amp; Roof Cleaning">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Austin, TX</span>
            <span>Custom Web</span>
          </div>
          <h2>Austin Pressure Washing &amp; Roof Cleaning</h2>
          <p>A dark, premium site for an Austin pressure washing and roof cleaning crew, with reviews and a quote button up front.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development" data-subs="corporate-sites wordpress" data-industries="power-washing" data-live="https://timemachineatx.com/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/industry-power-washing-2.webp" alt="Time Machine ATX">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Austin, TX</span>
            <span>WordPress</span>
          </div>
          <h2>Time Machine ATX</h2>
          <p>A WordPress site for an award-winning Austin pressure washing company serving homes and commercial properties.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development" data-subs="corporate-sites wix" data-industries="power-washing" data-live="https://www.southernshinetexas.com/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-southern-shine.webp" alt="Southern Shine">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Austin, TX</span>
            <span>Wix</span>
          </div>
          <h2>Southern Shine</h2>
          <p>A bold Wix site for an Austin exterior cleaning company, built around a fast quote and local trust.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development" data-subs="corporate-sites wordpress" data-industries="power-washing" data-live="https://atxcleanprowash.com/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-atx-clean-pro-wash.webp" alt="ATX Clean Pro Wash">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Austin, TX</span>
            <span>WordPress</span>
          </div>
          <h2>ATX Clean Pro Wash</h2>
          <p>A sleek WordPress site for a soft wash crew cleaning homes, driveways, roofs, decks and fences.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development" data-subs="corporate-sites custom-web" data-industries="power-washing" data-live="https://sonicwashsacramento.com/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-sonic-wash.webp" alt="Sonic Wash">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Sacramento, CA</span>
            <span>Custom Web</span>
          </div>
          <h2>Sonic Wash</h2>
          <p>A clean, review-led site for a Sacramento pressure washing company with click-to-call in the first screen.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development" data-subs="corporate-sites squarespace" data-industries="landscaping" data-live="https://www.handmlandscaping.com/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-handm-landscaping.webp" alt="H&amp;M Landscaping">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Flint, MI</span>
            <span>Squarespace</span>
          </div>
          <h2>H&amp;M Landscaping</h2>
          <p>A Squarespace site for a Genesee County landscaper covering design, construction and maintenance.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-featured data-tags="web-design web-development" data-subs="corporate-sites custom-web" data-industries="landscaping" data-live="https://landscapedesignhouston.com/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-texan-landscape-group.webp" alt="Texan Landscape Group">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Houston, TX</span>
            <span>Custom Web</span>
          </div>
          <h2>Texan Landscape Group</h2>
          <p>A full-service landscaping site for a Houston design-build-maintain team, with project stats and quote paths.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development" data-subs="corporate-sites custom-web" data-industries="landscaping" data-live="https://www.2galslandscaping.com/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-2-gals-landscaping.webp" alt="2 Gals Landscaping">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Houston, TX</span>
            <span>Custom Web</span>
          </div>
          <h2>2 Gals Landscaping</h2>
          <p>An elegant site for a Houston landscaping and construction company focused on native gardens and hardscaping.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development" data-subs="corporate-sites wordpress" data-industries="landscaping" data-live="https://evergreenlawncaretx.com/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-evergreen-outdoor.webp" alt="Evergreen Outdoor">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Houston, TX</span>
            <span>WordPress</span>
          </div>
          <h2>Evergreen Outdoor</h2>
          <p>A WordPress site for a Houston lawn care company, with an estimate form right in the hero.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development" data-subs="corporate-sites custom-web" data-industries="pool-services" data-live="https://southtexaspooltilecleaning.com/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-south-texas-pool-tile-cleaning.webp" alt="South Texas Pool Tile Cleaning">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>San Antonio, TX</span>
            <span>Custom Web</span>
          </div>
          <h2>South Texas Pool Tile Cleaning</h2>
          <p>A bold site for a San Antonio pool tile cleaning, repair and resurfacing specialist with free estimates.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development" data-subs="corporate-sites wordpress" data-industries="pool-services" data-live="/live-preview?site=summit-pool-and-spa">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-summit-pool-and-spa.webp" alt="Summit Pool &amp; Spa">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>East Bay, CA</span>
            <span>WordPress</span>
          </div>
          <h2>Summit Pool &amp; Spa</h2>
          <p>A WordPress site for an East Bay pool service focused on consistent maintenance and clear communication.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development" data-subs="corporate-sites custom-web" data-industries="pool-services" data-live="/live-preview?site=asa-pools-and-hot-tubs">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-asa-pools-and-hot-tubs.webp" alt="ASA Pools &amp; Hot Tubs">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Seattle, WA</span>
            <span>Custom Web</span>
          </div>
          <h2>ASA Pools &amp; Hot Tubs</h2>
          <p>A custom-built site for a Seattle pool and hot tub service with a quote form in the first screen.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development" data-subs="corporate-sites custom-web" data-industries="pool-services" data-live="https://slcpoolservice.com/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/industry-pool-services-2.webp" alt="SLC Pool Service">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Salt Lake City, UT</span>
            <span>Custom Web</span>
          </div>
          <h2>SLC Pool Service</h2>
          <p>A fast custom site for a family-owned Utah pool repair, maintenance and diagnostics company.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development" data-subs="corporate-sites custom-web" data-industries="pool-services" data-live="https://www.aqualecu.com/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-aqua-lecu-pool-services.webp" alt="Aqua Lecu Pool Services">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Orlando, FL</span>
            <span>Custom Web</span>
          </div>
          <h2>Aqua Lecu Pool Services</h2>
          <p>A clean site for an Orlando pool cleaning company with no contracts and free estimates.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development" data-subs="corporate-sites custom-web" data-industries="pest-control" data-live="https://agropestpros.com/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-agro-pest-control.webp" alt="Agro Pest Control">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Phoenix, AZ</span>
            <span>Custom Web</span>
          </div>
          <h2>Agro Pest Control</h2>
          <p>A bright site for an Arizona pest control company built around residential and commercial service paths.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development" data-subs="corporate-sites wordpress" data-industries="pest-control" data-live="https://arrownj.com/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-arrow-pest-control.webp" alt="Arrow Pest Control">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>New Jersey</span>
            <span>WordPress</span>
          </div>
          <h2>Arrow Pest Control</h2>
          <p>A WordPress site for a New Jersey pest control company protecting homes and businesses since 1973.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development" data-subs="corporate-sites wordpress" data-industries="pest-control" data-live="https://nozzlenolen.com/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-nozzle-nolen.webp" alt="Nozzle Nolen">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Southeast Florida</span>
            <span>WordPress</span>
          </div>
          <h2>Nozzle Nolen</h2>
          <p>A WordPress site for a Florida pest control company with free inspections and online scheduling.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development" data-subs="corporate-sites wordpress" data-industries="pest-control" data-live="https://www.altapestcontrol.com/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-alta-pest-control.webp" alt="Alta Pest Control">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Texas &amp; Oklahoma</span>
            <span>WordPress</span>
          </div>
          <h2>Alta Pest Control</h2>
          <p>A WordPress site for an eco-friendly termite, mosquito and pest control company in Texas and Oklahoma.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development" data-subs="corporate-sites wordpress" data-industries="pest-control" data-live="https://aptivepestcontrol.com/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-aptive-pest-control.webp" alt="Aptive Pest Control">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Nationwide</span>
            <span>WordPress</span>
          </div>
          <h2>Aptive Pest Control</h2>
          <p>A WordPress site for a national residential pest control brand with year-round protection plans.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development" data-subs="corporate-sites wordpress" data-industries="pest-control" data-live="https://akelapest.com/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-akela-pest-control.webp" alt="Akela Pest Control">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Riverside, CA</span>
            <span>WordPress</span>
          </div>
          <h2>Akela Pest Control</h2>
          <p>A WordPress site for an eco-friendly Riverside pest control company with affordable plans.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development" data-subs="corporate-sites wordpress" data-industries="pest-control" data-live="https://beesmartcolorado.com/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-bee-smart-pest-control.webp" alt="Bee Smart Pest Control">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Denver, CO</span>
            <span>WordPress</span>
          </div>
          <h2>Bee Smart Pest Control</h2>
          <p>A WordPress site for a local pest control company serving North Denver and Boulder County.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development" data-subs="corporate-sites wordpress" data-industries="pest-control" data-live="https://elitewildlifeservices.com/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-elite-wildlife-services.webp" alt="Elite Wildlife Services">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Houston, TX</span>
            <span>WordPress</span>
          </div>
          <h2>Elite Wildlife Services</h2>
          <p>A WordPress site for a humane Houston wildlife removal company with an inspection request form.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development" data-subs="corporate-sites wordpress" data-industries="roofing" data-live="https://foreverroofing.net/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-forever-roofing.webp" alt="Forever Roofing">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Pacific Northwest</span>
            <span>WordPress</span>
          </div>
          <h2>Forever Roofing</h2>
          <p>A WordPress site for a roofing, siding and windows company offering free quotes on new installations.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development" data-subs="corporate-sites wordpress" data-industries="roofing" data-live="https://ecoroofingnw.com/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-eco-roofing-and-roof-cleaning.webp" alt="Eco Roofing &amp; Roof Cleaning">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Pacific Northwest</span>
            <span>WordPress</span>
          </div>
          <h2>Eco Roofing &amp; Roof Cleaning</h2>
          <p>A WordPress site for a top-rated Northwest roofing and roof cleaning company.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development" data-subs="corporate-sites custom-web" data-industries="roofing" data-live="https://www.yurasroofing.com/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-yuras-roofing.webp" alt="Yuras Roofing">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>San Antonio, TX</span>
            <span>Custom Web</span>
          </div>
          <h2>Yuras Roofing</h2>
          <p>A custom-built site for a family-owned San Antonio roofer since 1949, with an estimate form up front.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development" data-subs="corporate-sites wordpress" data-industries="roofing" data-live="https://vh1roofing.com/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-vh1-roofing.webp" alt="VH1 Roofing">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Tulsa, OK</span>
            <span>WordPress</span>
          </div>
          <h2>VH1 Roofing</h2>
          <p>A WordPress site for a veteran-supporting Tulsa roofing company with free inspection requests.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development" data-subs="corporate-sites wordpress" data-industries="roofing" data-live="https://voyagerexteriors.com/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-voyager-exteriors.webp" alt="Voyager Exteriors">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Twin Cities, MN</span>
            <span>WordPress</span>
          </div>
          <h2>Voyager Exteriors</h2>
          <p>A WordPress site for a Twin Cities exterior contractor covering decks, siding and roofing.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development" data-subs="corporate-sites wordpress" data-industries="roofing" data-live="https://janneyroofing.com/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-janney-home-services.webp" alt="Janney Home Services">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Florida</span>
            <span>WordPress</span>
          </div>
          <h2>Janney Home Services</h2>
          <p>A WordPress site for a Florida roofing and window replacement company with storm-ready solutions.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development" data-subs="corporate-sites wordpress" data-industries="roofing" data-live="https://tadlockroofing.com/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-tadlock-roofing.webp" alt="Tadlock Roofing">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Florida</span>
            <span>WordPress</span>
          </div>
          <h2>Tadlock Roofing</h2>
          <p>A WordPress site for one of America’s Top 100 roofing contractors serving North Florida.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development" data-subs="corporate-sites wordpress" data-industries="roofing" data-live="https://www.lindholmroofing.com/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-lindholm-roofing.webp" alt="Lindholm Roofing">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Chicago, IL</span>
            <span>WordPress</span>
          </div>
          <h2>Lindholm Roofing</h2>
          <p>A WordPress site for a family-owned Chicago roofing contractor trusted since 1949.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development" data-subs="corporate-sites wix" data-industries="handyman" data-live="https://www.columbushandyman.net/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-columbus-handyman.webp" alt="Columbus Handyman">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Columbus, OH</span>
            <span>Wix</span>
          </div>
          <h2>Columbus Handyman</h2>
          <p>A Wix site for a licensed Central Ohio handyman and general contractor with 21+ years of experience.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development" data-subs="corporate-sites custom-web" data-industries="handyman" data-live="https://kwhandymanmiamifl.com/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-kw-handyman.webp" alt="KW Handyman">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Miami, FL</span>
            <span>Custom Web</span>
          </div>
          <h2>KW Handyman</h2>
          <p>A custom-built site for a Miami handyman and facility management company with nationwide reach.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development" data-subs="corporate-sites custom-web" data-industries="handyman" data-live="/live-preview?site=tri-miami-handyman-services">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-tri-miami-handyman-services.webp" alt="TRI Miami Handyman Services">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Miami, FL</span>
            <span>Custom Web</span>
          </div>
          <h2>TRI Miami Handyman Services</h2>
          <p>A custom-built site for a Miami-Dade remodeling and property improvement company.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development" data-subs="corporate-sites wordpress" data-industries="handyman" data-live="https://prohandymanmia.com/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-pro-handyman-miami.webp" alt="Pro Handyman Miami">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Miami, FL</span>
            <span>WordPress</span>
          </div>
          <h2>Pro Handyman Miami</h2>
          <p>A WordPress site for a Miami-Dade handyman voted best in Miami, covering repairs and maintenance.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development" data-subs="corporate-sites wordpress" data-industries="handyman" data-live="https://allin1dallas.com/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-all-in-1-handy-man.webp" alt="All In 1 Handy Man">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Dallas, TX</span>
            <span>WordPress</span>
          </div>
          <h2>All In 1 Handy Man</h2>
          <p>A WordPress site for a Dallas and Richardson handyman with a quick service request form.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development" data-subs="corporate-sites custom-web" data-industries="handyman" data-live="https://h2gservices.com/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-h2g-handyman-services.webp" alt="H2G Handyman Services">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Irving, TX</span>
            <span>Custom Web</span>
          </div>
          <h2>H2G Handyman Services</h2>
          <p>A custom-built site for an Irving handyman offering TV mounting, assembly, painting and repairs.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development" data-subs="corporate-sites wordpress" data-industries="handyman" data-live="https://hprohandyman.com/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-h-pro-handyman.webp" alt="H-PRO Handyman">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Florida</span>
            <span>WordPress</span>
          </div>
          <h2>H-PRO Handyman</h2>
          <p>A WordPress site for a handyman specializing in TV mounting, furniture assembly and hanging services.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development" data-subs="corporate-sites squarespace" data-industries="handyman" data-live="/live-preview?site=extreme-handyman-services">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-extreme-handyman-services.webp" alt="Extreme Handyman Services">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Sacramento, CA</span>
            <span>Squarespace</span>
          </div>
          <h2>Extreme Handyman Services</h2>
          <p>A Squarespace site for a Sacramento handyman providing reliable home repairs since 2006.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development" data-subs="corporate-sites wordpress" data-industries="handyman" data-live="https://thehandymansflive.com/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-the-handyman-sf.webp" alt="The Handyman SF">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>San Francisco, CA</span>
            <span>WordPress</span>
          </div>
          <h2>The Handyman SF</h2>
          <p>A WordPress site for a same-day San Francisco handyman with text-to-quote booking.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development" data-subs="corporate-sites wordpress" data-industries="handyman" data-live="https://fullhousepros.com/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-fullhouse-pros.webp" alt="Fullhouse Pros">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>San Francisco Bay Area</span>
            <span>WordPress</span>
          </div>
          <h2>Fullhouse Pros</h2>
          <p>A WordPress site for a Bay Area remodeling and handyman company built around fast estimates.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development" data-subs="corporate-sites custom-web" data-industries="handyman" data-live="https://imthatguyhandyman.com/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-i-m-that-guy-handyman.webp" alt="I’m That Guy Handyman">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Tulsa, OK</span>
            <span>Custom Web</span>
          </div>
          <h2>I’m That Guy Handyman</h2>
          <p>A custom-built site for a family-owned Jenks and Tulsa handyman with 240+ five-star reviews.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development" data-subs="corporate-sites wordpress" data-industries="handyman" data-live="https://extremehandyman.com/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-extreme-handyman-service.webp" alt="Extreme Handyman® Service">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Seattle, WA</span>
            <span>WordPress</span>
          </div>
          <h2>Extreme Handyman® Service</h2>
          <p>A WordPress site for a licensed Seattle and Bellevue handyman with 30+ years of experience.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

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

      <article class="work-card" data-featured data-tags="web-design web-development" data-subs="corporate-sites wordpress" data-industries="plumbing" data-live="https://beyondwow.com/">
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

      <article class="work-card" data-tags="web-design web-development" data-subs="corporate-sites squarespace" data-industries="hvac" data-live="https://www.paragonmechanical.com/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-paragon-mechanical.webp" alt="Paragon Mechanical">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Silicon Valley, CA</span>
            <span>Squarespace</span>
          </div>
          <h2>Paragon Mechanical</h2>
          <p>A Squarespace site for a full-service Silicon Valley mechanical, HVAC and plumbing contractor.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development" data-subs="corporate-sites wix" data-industries="hvac" data-live="https://www.airbossheatingandcooling.com/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-airboss-heating-and-cooling.webp" alt="Airboss Heating &amp; Cooling">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>North Carolina</span>
            <span>Wix</span>
          </div>
          <h2>Airboss Heating &amp; Cooling</h2>
          <p>A Wix site for a certified North Carolina HVAC service and installation company.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development" data-subs="corporate-sites wordpress" data-industries="hvac" data-live="https://www.davisair.net/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-davis-air-conditioning-and-heating.webp" alt="Davis Air Conditioning &amp; Heating">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Clermont, FL</span>
            <span>WordPress</span>
          </div>
          <h2>Davis Air Conditioning &amp; Heating</h2>
          <p>A WordPress site for a family-owned Clermont HVAC company with free estimates.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-featured data-tags="web-design web-development" data-subs="corporate-sites wordpress" data-industries="hvac" data-live="https://www.tanousnj.com/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-tanous-hvac.webp" alt="Tanous HVAC">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Hoboken, NJ</span>
            <span>WordPress</span>
          </div>
          <h2>Tanous HVAC</h2>
          <p>A WordPress site for a family-owned Hudson County HVAC company answering calls 24/7.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development" data-subs="corporate-sites wordpress" data-industries="hvac" data-live="https://kalosflorida.com/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/industry-hvac-3.webp" alt="Kalos Services">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Central Florida</span>
            <span>WordPress</span>
          </div>
          <h2>Kalos Services</h2>
          <p>A WordPress site for a family-owned HVAC, electrical and plumbing company in Central Florida.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development" data-subs="corporate-sites squarespace" data-industries="hvac" data-live="https://www.aircorheatingcooling.com/">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-aircor-heating-and-cooling.webp" alt="Aircor Heating &amp; Cooling">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Chicago, IL</span>
            <span>Squarespace</span>
          </div>
          <h2>Aircor Heating &amp; Cooling</h2>
          <p>A Squarespace site for a Chicago HVAC company focused on comfort and healthy air.</p>
          <div class="work-card-tags">
            <a href="/web-design.php">Web Design</a>
            <a href="/web-development.php">Web Development</a>
          </div>
        </div>
      </article>

      <article class="work-card" data-tags="web-design web-development" data-subs="corporate-sites wordpress" data-industries="hvac" data-live="https://www.alexandersheating.com/?utm_source=direct&amp;utm_medium=none&amp;utm_campaign=Direct">
        <div class="work-card-media">
          <img loading="lazy" decoding="async" width="960" height="600" src="/assets/images/work-live-alexander-s-heating-and-ac.webp" alt="Alexander’s Heating &amp; AC">
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Redmond, WA</span>
            <span>WordPress</span>
          </div>
          <h2>Alexander’s Heating &amp; AC</h2>
          <p>A WordPress site for an Eastside HVAC company with online booking and service requests.</p>
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
      <a href="/contact.php" class="btn btn-lime btn-lg street-join-float street-join-float--light" data-open-popup aria-hidden="true" tabindex="-1">I&rsquo;m sold! Call me!</a>
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
    <div class="live-modal-progress" aria-hidden="true"></div>
    <iframe class="live-modal-frame" id="liveModalFrame" title="Live website preview" src="about:blank"></iframe>
  </div>
</div>
