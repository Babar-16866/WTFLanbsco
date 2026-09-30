<?php
$page_title = 'Services | WTF Labs';
$page_description = 'Graphic design, web design, web development, SEO, social media advertising, Google Ads, and digital marketing - WTF Labs services.';
$current_page = 'services';
include __DIR__ . '/includes/header.php';
?>

<?php
$banner_kicker = 'Services';
$banner_h1 = '<span class="about-hero-accent">What</span> we excel at';
$banner_lead = 'From graphic design and websites to SEO, ads, and full-funnel digital marketing — one senior team focused on clarity, growth, and results.';
$banner_primary_label = 'Get a quote';
$banner_secondary_label = 'See our work';
$banner_image = '/assets/images/service-web-design.jpg';
$banner_float1 = '/assets/images/service-graphic-design.jpg';
$banner_float2 = '/assets/images/service-social-media.jpg';
$banner_card = 'Design, build, grow — one senior pod.';
include __DIR__ . '/includes/page-banner.php';
?>

<section class="page-section">
  <div class="container">
    <div class="works-filter-stack">
      <div class="works-filters" id="servicesFilters" role="tablist" aria-label="Filter services">
        <button type="button" class="works-filter is-active" data-filter="all" role="tab" aria-selected="true">All</button>
        <button type="button" class="works-filter" data-filter="graphic-design" role="tab" aria-selected="false">Graphic Design</button>
        <button type="button" class="works-filter" data-filter="web-design" role="tab" aria-selected="false">Web Design</button>
        <button type="button" class="works-filter" data-filter="web-development" role="tab" aria-selected="false">Web Development</button>
        <button type="button" class="works-filter" data-filter="seo" role="tab" aria-selected="false">SEO</button>
        <button type="button" class="works-filter" data-filter="social-media-advertising" role="tab" aria-selected="false">Social Ads</button>
        <button type="button" class="works-filter" data-filter="google-ads" role="tab" aria-selected="false">Google Ads</button>
        <button type="button" class="works-filter" data-filter="digital-marketing" role="tab" aria-selected="false">Digital Marketing</button>
      </div>
      <div class="works-subfilters" id="servicesSubfilters" role="tablist" aria-label="Filter by subcategory" hidden></div>
    </div>

    <div class="services-detail-grid" id="servicesGrid">
      <!-- Overview cards: visible on All -->
      <article class="service-detail-card" data-level="overview" data-tags="graphic-design">
        <div class="service-detail-media">
          <a href="/graphic-design.php"><img src="/assets/images/service-graphic-design.jpg" alt="Graphic Design"></a>
        </div>
        <div class="service-detail-body">
          <h2><a href="/graphic-design.php">Graphic Design</a></h2>
          <p>Visual identity, brand assets, and marketing creatives that look sharp and stay on-brand.</p>
          <ul>
            <li>Brand kits, logos &amp; visual systems</li>
            <li>Social, print &amp; campaign creatives</li>
            <li>Presentation and pitch decks</li>
          </ul>
          <a href="/graphic-design.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more &rarr;</a>
        </div>
      </article>

      <article class="service-detail-card" data-level="overview" data-tags="web-design">
        <div class="service-detail-media">
          <a href="/web-design.php"><img src="/assets/images/mockup-main.webp" alt="Web Design"></a>
        </div>
        <div class="service-detail-body">
          <h2><a href="/web-design.php">Web Design</a></h2>
          <p>Clear, modern website design that builds trust and turns visitors into leads.</p>
          <ul>
            <li>UI/UX for company &amp; product sites</li>
            <li>Landing pages built to convert</li>
            <li>Responsive, accessible layouts</li>
          </ul>
          <a href="/web-design.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more &rarr;</a>
        </div>
      </article>

      <article class="service-detail-card" data-level="overview" data-tags="web-development">
        <div class="service-detail-media">
          <a href="/web-development.php"><img src="/assets/images/product-dashboard.webp" alt="Web Development"></a>
        </div>
        <div class="service-detail-body">
          <h2><a href="/web-development.php">Web Development</a></h2>
          <p>Fast, reliable websites and web apps engineered for performance and growth.</p>
          <ul>
            <li>Custom sites &amp; CMS builds</li>
            <li>Integrations, forms &amp; analytics</li>
            <li>Performance, SEO &amp; security foundations</li>
          </ul>
          <a href="/web-development.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more &rarr;</a>
        </div>
      </article>

      <article class="service-detail-card" data-level="overview" data-tags="seo">
        <div class="service-detail-media">
          <a href="/seo.php"><img src="/assets/images/service-seo.jpg" alt="SEO"></a>
        </div>
        <div class="service-detail-body">
          <h2><a href="/seo.php">SEO</a></h2>
          <p>Search visibility that compounds - technical, on-page, and content SEO that drives qualified traffic.</p>
          <ul>
            <li>Technical audits &amp; site health</li>
            <li>Keyword strategy &amp; on-page optimization</li>
            <li>Content plans that rank and convert</li>
          </ul>
          <a href="/seo.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more &rarr;</a>
        </div>
      </article>

      <article class="service-detail-card" data-level="overview" data-tags="social-media-advertising">
        <div class="service-detail-media">
          <a href="/social-media-advertising.php"><img src="/assets/images/service-social-media.jpg" alt="Social Media Advertising"></a>
        </div>
        <div class="service-detail-body">
          <h2><a href="/social-media-advertising.php">Social Media Advertising</a></h2>
          <p>Paid social campaigns that reach the right audience with creatives that stop the scroll.</p>
          <ul>
            <li>Meta, LinkedIn, TikTok &amp; more</li>
            <li>Audience targeting &amp; creative testing</li>
            <li>Retargeting and funnel-aware spend</li>
          </ul>
          <a href="/social-media-advertising.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more &rarr;</a>
        </div>
      </article>

      <article class="service-detail-card" data-level="overview" data-tags="google-ads">
        <div class="service-detail-media">
          <a href="/google-ads.php"><img src="/assets/images/excel-landing.webp" alt="Google Ads"></a>
        </div>
        <div class="service-detail-body">
          <h2><a href="/google-ads.php">Google Ads</a></h2>
          <p>Search, display, and performance campaigns tuned for cost-efficient leads and revenue.</p>
          <ul>
            <li>Search &amp; Performance Max campaigns</li>
            <li>Landing page &amp; conversion tracking</li>
            <li>Ongoing bid, keyword &amp; creative optimization</li>
          </ul>
          <a href="/google-ads.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more &rarr;</a>
        </div>
      </article>

      <article class="service-detail-card" data-level="overview" data-tags="digital-marketing">
        <div class="service-detail-media">
          <a href="/digital-marketing.php"><img src="/assets/images/service-digital-marketing.jpg" alt="Digital Marketing"></a>
        </div>
        <div class="service-detail-body">
          <h2><a href="/digital-marketing.php">Digital Marketing</a></h2>
          <p>Full-funnel strategy that connects brand, content, and paid channels into one growth engine.</p>
          <ul>
            <li>Channel strategy &amp; campaign planning</li>
            <li>Content, email &amp; nurture programs</li>
            <li>Analytics, reporting &amp; continuous improvement</li>
          </ul>
          <a href="/digital-marketing.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more &rarr;</a>
        </div>
      </article>

      <!-- Subcategory cards: visible when a service tab is selected -->
      <!-- Graphic Design -->
      <article class="service-detail-card" data-level="sub" data-tags="graphic-design" data-subs="logo-design" hidden>
        <div class="service-detail-media">
          <a href="/graphic-design.php"><img src="/assets/images/service-graphic-design.jpg" alt="Logo Design"></a>
        </div>
        <div class="service-detail-body">
          <p class="service-detail-kicker">Graphic Design</p>
          <h2><a href="/graphic-design.php">Logo Design</a></h2>
          <p>Memorable marks and logo systems that scale from favicon to billboard.</p>
          <ul>
            <li>Primary &amp; secondary logo marks</li>
            <li>Clear space, color &amp; usage rules</li>
            <li>Export packs for print &amp; digital</li>
          </ul>
          <a href="/graphic-design.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more &rarr;</a>
        </div>
      </article>

      <article class="service-detail-card" data-level="sub" data-tags="graphic-design" data-subs="brand-collaterals" hidden>
        <div class="service-detail-media">
          <a href="/graphic-design.php"><img src="/assets/images/excel-branding.webp" alt="Brand Collaterals"></a>
        </div>
        <div class="service-detail-body">
          <p class="service-detail-kicker">Graphic Design</p>
          <h2><a href="/graphic-design.php">Brand Collaterals</a></h2>
          <p>On-brand kits marketing can reuse without reinventing every campaign.</p>
          <ul>
            <li>Brand kits &amp; visual systems</li>
            <li>Presentation &amp; pitch decks</li>
            <li>Templates for ongoing campaigns</li>
          </ul>
          <a href="/graphic-design.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more &rarr;</a>
        </div>
      </article>

      <article class="service-detail-card" data-level="sub" data-tags="graphic-design" data-subs="t-shirt" hidden>
        <div class="service-detail-media">
          <a href="/graphic-design.php"><img src="/assets/images/branding-1.webp" alt="T-shirt Design"></a>
        </div>
        <div class="service-detail-body">
          <p class="service-detail-kicker">Graphic Design</p>
          <h2><a href="/graphic-design.php">T-shirt Design</a></h2>
          <p>Apparel graphics that feel on-brand and print cleanly at any size.</p>
          <ul>
            <li>Merch &amp; event apparel artwork</li>
            <li>Print-ready file prep</li>
            <li>Mockups for stakeholder buy-in</li>
          </ul>
          <a href="/graphic-design.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more &rarr;</a>
        </div>
      </article>

      <article class="service-detail-card" data-level="sub" data-tags="graphic-design" data-subs="business-card" hidden>
        <div class="service-detail-media">
          <a href="/graphic-design.php"><img src="/assets/images/branding-2.webp" alt="Business Card"></a>
        </div>
        <div class="service-detail-body">
          <p class="service-detail-kicker">Graphic Design</p>
          <h2><a href="/graphic-design.php">Business Card</a></h2>
          <p>Sharp, print-ready cards that match your identity system.</p>
          <ul>
            <li>Front/back layouts</li>
            <li>Paper &amp; finish recommendations</li>
            <li>Print-ready exports</li>
          </ul>
          <a href="/graphic-design.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more &rarr;</a>
        </div>
      </article>

      <article class="service-detail-card" data-level="sub" data-tags="graphic-design" data-subs="social-media-post" hidden>
        <div class="service-detail-media">
          <a href="/graphic-design.php"><img src="/assets/images/service-social-media.jpg" alt="Social Media Post"></a>
        </div>
        <div class="service-detail-body">
          <p class="service-detail-kicker">Graphic Design</p>
          <h2><a href="/graphic-design.php">Social Media Post</a></h2>
          <p>Scroll-stopping creatives sized for every major network.</p>
          <ul>
            <li>Feed, story &amp; ad formats</li>
            <li>Template systems for volume</li>
            <li>On-brand typography &amp; color</li>
          </ul>
          <a href="/graphic-design.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more &rarr;</a>
        </div>
      </article>

      <!-- Web Design -->
      <article class="service-detail-card" data-level="sub" data-tags="web-design" data-subs="landing-pages" hidden>
        <div class="service-detail-media">
          <a href="/web-design.php"><img src="/assets/images/excel-landing.webp" alt="Landing Pages"></a>
        </div>
        <div class="service-detail-body">
          <p class="service-detail-kicker">Web Design</p>
          <h2><a href="/web-design.php">Landing Pages</a></h2>
          <p>Conversion-focused pages built to turn traffic into leads.</p>
          <ul>
            <li>Offer-led page structure</li>
            <li>Clear CTAs &amp; social proof</li>
            <li>Mobile-first layouts</li>
          </ul>
          <a href="/web-design.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more &rarr;</a>
        </div>
      </article>

      <article class="service-detail-card" data-level="sub" data-tags="web-design" data-subs="corporate-sites" hidden>
        <div class="service-detail-media">
          <a href="/web-design.php"><img src="/assets/images/mockup-main.webp" alt="Corporate Sites"></a>
        </div>
        <div class="service-detail-body">
          <p class="service-detail-kicker">Web Design</p>
          <h2><a href="/web-design.php">Corporate Sites</a></h2>
          <p>Company websites that build trust and explain complex offers clearly.</p>
          <ul>
            <li>IA &amp; page hierarchy</li>
            <li>Brand-consistent UI</li>
            <li>Accessible, responsive design</li>
          </ul>
          <a href="/web-design.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more &rarr;</a>
        </div>
      </article>

      <article class="service-detail-card" data-level="sub" data-tags="web-design" data-subs="product-sites" hidden>
        <div class="service-detail-media">
          <a href="/web-design.php"><img src="/assets/images/product-ui.webp" alt="Product Sites"></a>
        </div>
        <div class="service-detail-body">
          <p class="service-detail-kicker">Web Design</p>
          <h2><a href="/web-design.php">Product Sites</a></h2>
          <p>Product marketing sites that showcase value and drive signups.</p>
          <ul>
            <li>Feature storytelling</li>
            <li>Pricing &amp; comparison layouts</li>
            <li>Demo / signup flows</li>
          </ul>
          <a href="/web-design.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more &rarr;</a>
        </div>
      </article>

      <article class="service-detail-card" data-level="sub" data-tags="web-design" data-subs="redesigns" hidden>
        <div class="service-detail-media">
          <a href="/web-design.php"><img src="/assets/images/excel-uiux.webp" alt="Redesigns"></a>
        </div>
        <div class="service-detail-body">
          <p class="service-detail-kicker">Web Design</p>
          <h2><a href="/web-design.php">Redesigns</a></h2>
          <p>Modern refreshes that keep SEO equity while upgrading UX and clarity.</p>
          <ul>
            <li>Audit-led redesign plans</li>
            <li>Stronger visual hierarchy</li>
            <li>Conversion improvements</li>
          </ul>
          <a href="/web-design.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more &rarr;</a>
        </div>
      </article>

      <!-- Web Development -->
      <article class="service-detail-card" data-level="sub" data-tags="web-development" data-subs="wordpress" hidden>
        <div class="service-detail-media">
          <a href="/web-development.php"><img src="/assets/images/service-web-development.jpg" alt="WordPress"></a>
        </div>
        <div class="service-detail-body">
          <p class="service-detail-kicker">Web Development</p>
          <h2><a href="/web-development.php">WordPress</a></h2>
          <p>Fast, editable WordPress builds your team can own day to day.</p>
          <ul>
            <li>Custom themes &amp; Gutenberg</li>
            <li>Performance &amp; security hardening</li>
            <li>Easy content workflows</li>
          </ul>
          <a href="/web-development.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more &rarr;</a>
        </div>
      </article>

      <article class="service-detail-card" data-level="sub" data-tags="web-development" data-subs="wix" hidden>
        <div class="service-detail-media">
          <a href="/web-development.php"><img src="/assets/images/excel-landing.webp" alt="Wix"></a>
        </div>
        <div class="service-detail-body">
          <p class="service-detail-kicker">Web Development</p>
          <h2><a href="/web-development.php">Wix</a></h2>
          <p>Polished Wix sites when speed-to-launch matters most.</p>
          <ul>
            <li>Custom design inside Wix</li>
            <li>Forms, SEO &amp; integrations</li>
            <li>Editor handoff for your team</li>
          </ul>
          <a href="/web-development.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more &rarr;</a>
        </div>
      </article>

      <article class="service-detail-card" data-level="sub" data-tags="web-development" data-subs="squarespace" hidden>
        <div class="service-detail-media">
          <a href="/web-development.php"><img src="/assets/images/mockup-2.webp" alt="Squarespace"></a>
        </div>
        <div class="service-detail-body">
          <p class="service-detail-kicker">Web Development</p>
          <h2><a href="/web-development.php">Squarespace</a></h2>
          <p>Clean Squarespace builds with strong design and simple ownership.</p>
          <ul>
            <li>Template customization</li>
            <li>Commerce &amp; booking setup</li>
            <li>SEO foundations</li>
          </ul>
          <a href="/web-development.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more &rarr;</a>
        </div>
      </article>

      <article class="service-detail-card" data-level="sub" data-tags="web-development" data-subs="shopify" hidden>
        <div class="service-detail-media">
          <a href="/web-development.php"><img src="/assets/images/mockup-5.webp" alt="Shopify"></a>
        </div>
        <div class="service-detail-body">
          <p class="service-detail-kicker">Web Development</p>
          <h2><a href="/web-development.php">Shopify</a></h2>
          <p>Shopify storefronts built to convert and scale with your catalog.</p>
          <ul>
            <li>Theme customization</li>
            <li>Checkout &amp; app integrations</li>
            <li>Performance-minded setup</li>
          </ul>
          <a href="/web-development.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more &rarr;</a>
        </div>
      </article>

      <article class="service-detail-card" data-level="sub" data-tags="web-development" data-subs="web-app" hidden>
        <div class="service-detail-media">
          <a href="/web-development.php"><img src="/assets/images/product-dashboard.webp" alt="Web App"></a>
        </div>
        <div class="service-detail-body">
          <p class="service-detail-kicker">Web Development</p>
          <h2><a href="/web-development.php">Web App</a></h2>
          <p>Product UIs and web apps engineered for real workflows.</p>
          <ul>
            <li>React / Vue frontends</li>
            <li>API &amp; auth integrations</li>
            <li>Scalable architecture</li>
          </ul>
          <a href="/web-development.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more &rarr;</a>
        </div>
      </article>

      <article class="service-detail-card" data-level="sub" data-tags="web-development" data-subs="custom-web" hidden>
        <div class="service-detail-media">
          <a href="/web-development.php"><img src="/assets/images/device-1.webp" alt="Custom Web"></a>
        </div>
        <div class="service-detail-body">
          <p class="service-detail-kicker">Web Development</p>
          <h2><a href="/web-development.php">Custom Web</a></h2>
          <p>Bespoke builds when templates and CMS platforms are not enough.</p>
          <ul>
            <li>Laravel / Node backends</li>
            <li>Custom CMS &amp; integrations</li>
            <li>Security &amp; performance baselining</li>
          </ul>
          <a href="/web-development.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more &rarr;</a>
        </div>
      </article>

      <!-- SEO -->
      <article class="service-detail-card" data-level="sub" data-tags="seo" data-subs="technical-seo" hidden>
        <div class="service-detail-media">
          <a href="/seo.php"><img src="/assets/images/service-seo.jpg" alt="Technical SEO"></a>
        </div>
        <div class="service-detail-body">
          <p class="service-detail-kicker">SEO</p>
          <h2><a href="/seo.php">Technical SEO</a></h2>
          <p>Site health, crawlability, and indexation fixed at the foundation.</p>
          <ul>
            <li>Technical audits</li>
            <li>Core Web Vitals &amp; speed</li>
            <li>Structured data &amp; sitemap hygiene</li>
          </ul>
          <a href="/seo.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more &rarr;</a>
        </div>
      </article>

      <article class="service-detail-card" data-level="sub" data-tags="seo" data-subs="on-page" hidden>
        <div class="service-detail-media">
          <a href="/seo.php"><img src="/assets/images/excel-landing.webp" alt="On-Page SEO"></a>
        </div>
        <div class="service-detail-body">
          <p class="service-detail-kicker">SEO</p>
          <h2><a href="/seo.php">On-Page</a></h2>
          <p>Titles, structure, and copy tuned for intent and rankings.</p>
          <ul>
            <li>Keyword mapping</li>
            <li>Title / meta / heading systems</li>
            <li>Internal linking plans</li>
          </ul>
          <a href="/seo.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more &rarr;</a>
        </div>
      </article>

      <article class="service-detail-card" data-level="sub" data-tags="seo" data-subs="content-seo" hidden>
        <div class="service-detail-media">
          <a href="/seo.php"><img src="/assets/images/why-craft.jpg" alt="Content SEO"></a>
        </div>
        <div class="service-detail-body">
          <p class="service-detail-kicker">SEO</p>
          <h2><a href="/seo.php">Content SEO</a></h2>
          <p>Topic clusters and briefs that compound organic demand.</p>
          <ul>
            <li>Content strategy &amp; calendars</li>
            <li>Briefs writers can execute</li>
            <li>Refresh plans for aging pages</li>
          </ul>
          <a href="/seo.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more &rarr;</a>
        </div>
      </article>

      <article class="service-detail-card" data-level="sub" data-tags="seo" data-subs="local-seo" hidden>
        <div class="service-detail-media">
          <a href="/seo.php"><img src="/assets/images/people-office.jpg" alt="Local SEO"></a>
        </div>
        <div class="service-detail-body">
          <p class="service-detail-kicker">SEO</p>
          <h2><a href="/seo.php">Local SEO</a></h2>
          <p>Maps and local pack visibility for location-based businesses.</p>
          <ul>
            <li>Google Business Profile</li>
            <li>Local landing pages</li>
            <li>Citations &amp; review strategy</li>
          </ul>
          <a href="/seo.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more &rarr;</a>
        </div>
      </article>

      <!-- Social Ads -->
      <article class="service-detail-card" data-level="sub" data-tags="social-media-advertising" data-subs="meta-ads" hidden>
        <div class="service-detail-media">
          <a href="/social-media-advertising.php"><img src="/assets/images/service-social-media.jpg" alt="Meta Ads"></a>
        </div>
        <div class="service-detail-body">
          <p class="service-detail-kicker">Social Ads</p>
          <h2><a href="/social-media-advertising.php">Meta Ads</a></h2>
          <p>Facebook &amp; Instagram campaigns built around creative and conversion.</p>
          <ul>
            <li>Audience &amp; funnel setup</li>
            <li>Creative testing loops</li>
            <li>Retargeting structures</li>
          </ul>
          <a href="/social-media-advertising.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more &rarr;</a>
        </div>
      </article>

      <article class="service-detail-card" data-level="sub" data-tags="social-media-advertising" data-subs="linkedin-ads" hidden>
        <div class="service-detail-media">
          <a href="/social-media-advertising.php"><img src="/assets/images/excel-spatial.webp" alt="LinkedIn Ads"></a>
        </div>
        <div class="service-detail-body">
          <p class="service-detail-kicker">Social Ads</p>
          <h2><a href="/social-media-advertising.php">LinkedIn Ads</a></h2>
          <p>B2B demand gen with precise targeting and sharp creative.</p>
          <ul>
            <li>Job title / industry targeting</li>
            <li>Lead gen forms &amp; landing pages</li>
            <li>ABM-friendly campaigns</li>
          </ul>
          <a href="/social-media-advertising.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more &rarr;</a>
        </div>
      </article>

      <article class="service-detail-card" data-level="sub" data-tags="social-media-advertising" data-subs="tiktok-ads" hidden>
        <div class="service-detail-media">
          <a href="/social-media-advertising.php"><img src="/assets/images/excel-mobile.webp" alt="TikTok Ads"></a>
        </div>
        <div class="service-detail-body">
          <p class="service-detail-kicker">Social Ads</p>
          <h2><a href="/social-media-advertising.php">TikTok Ads</a></h2>
          <p>Native-feeling creatives and campaigns for attention-heavy feeds.</p>
          <ul>
            <li>Hook-led creative concepts</li>
            <li>Spark Ads &amp; testing frameworks</li>
            <li>Pixel &amp; event tracking</li>
          </ul>
          <a href="/social-media-advertising.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more &rarr;</a>
        </div>
      </article>

      <article class="service-detail-card" data-level="sub" data-tags="social-media-advertising" data-subs="creative-testing" hidden>
        <div class="service-detail-media">
          <a href="/social-media-advertising.php"><img src="/assets/images/mobile-app.webp" alt="Creative Testing"></a>
        </div>
        <div class="service-detail-body">
          <p class="service-detail-kicker">Social Ads</p>
          <h2><a href="/social-media-advertising.php">Creative Testing</a></h2>
          <p>Systematic creative tests that find winners faster.</p>
          <ul>
            <li>Hook / offer / format matrices</li>
            <li>Clear win criteria</li>
            <li>Scale plans for winners</li>
          </ul>
          <a href="/social-media-advertising.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more &rarr;</a>
        </div>
      </article>

      <!-- Google Ads -->
      <article class="service-detail-card" data-level="sub" data-tags="google-ads" data-subs="search-ads" hidden>
        <div class="service-detail-media">
          <a href="/google-ads.php"><img src="/assets/images/service-google-ads.jpg" alt="Search Ads"></a>
        </div>
        <div class="service-detail-body">
          <p class="service-detail-kicker">Google Ads</p>
          <h2><a href="/google-ads.php">Search Ads</a></h2>
          <p>Intent capture with tight keywords, ads, and landing alignment.</p>
          <ul>
            <li>Keyword architecture</li>
            <li>RSA &amp; extension strategy</li>
            <li>Query mining &amp; negatives</li>
          </ul>
          <a href="/google-ads.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more &rarr;</a>
        </div>
      </article>

      <article class="service-detail-card" data-level="sub" data-tags="google-ads" data-subs="display-ads" hidden>
        <div class="service-detail-media">
          <a href="/google-ads.php"><img src="/assets/images/excel-web3.webp" alt="Display Ads"></a>
        </div>
        <div class="service-detail-body">
          <p class="service-detail-kicker">Google Ads</p>
          <h2><a href="/google-ads.php">Display Ads</a></h2>
          <p>Awareness and remarketing creatives across the Google Display Network.</p>
          <ul>
            <li>Audience targeting</li>
            <li>Responsive display assets</li>
            <li>Frequency &amp; brand safety controls</li>
          </ul>
          <a href="/google-ads.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more &rarr;</a>
        </div>
      </article>

      <article class="service-detail-card" data-level="sub" data-tags="google-ads" data-subs="performance-max" hidden>
        <div class="service-detail-media">
          <a href="/google-ads.php"><img src="/assets/images/excel-landing.webp" alt="Performance Max"></a>
        </div>
        <div class="service-detail-body">
          <p class="service-detail-kicker">Google Ads</p>
          <h2><a href="/google-ads.php">Performance Max</a></h2>
          <p>Asset-rich PMax campaigns with clear goals and guardrails.</p>
          <ul>
            <li>Asset group strategy</li>
            <li>Audience signals</li>
            <li>Conversion tracking hygiene</li>
          </ul>
          <a href="/google-ads.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more &rarr;</a>
        </div>
      </article>

      <article class="service-detail-card" data-level="sub" data-tags="google-ads" data-subs="remarketing" hidden>
        <div class="service-detail-media">
          <a href="/google-ads.php"><img src="/assets/images/product-dashboard.webp" alt="Remarketing"></a>
        </div>
        <div class="service-detail-body">
          <p class="service-detail-kicker">Google Ads</p>
          <h2><a href="/google-ads.php">Remarketing</a></h2>
          <p>Bring warm traffic back with sequenced offers and messaging.</p>
          <ul>
            <li>Audience lists &amp; windows</li>
            <li>Offer sequencing</li>
            <li>Cross-channel remarketing</li>
          </ul>
          <a href="/google-ads.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more &rarr;</a>
        </div>
      </article>

      <!-- Digital Marketing -->
      <article class="service-detail-card" data-level="sub" data-tags="digital-marketing" data-subs="strategy" hidden>
        <div class="service-detail-media">
          <a href="/digital-marketing.php"><img src="/assets/images/service-digital-marketing.jpg" alt="Strategy"></a>
        </div>
        <div class="service-detail-body">
          <p class="service-detail-kicker">Digital Marketing</p>
          <h2><a href="/digital-marketing.php">Strategy</a></h2>
          <p>Channel plans that connect brand, demand, and revenue goals.</p>
          <ul>
            <li>Funnel &amp; channel mapping</li>
            <li>Budget allocation</li>
            <li>KPI frameworks</li>
          </ul>
          <a href="/digital-marketing.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more &rarr;</a>
        </div>
      </article>

      <article class="service-detail-card" data-level="sub" data-tags="digital-marketing" data-subs="content-marketing" hidden>
        <div class="service-detail-media">
          <a href="/digital-marketing.php"><img src="/assets/images/why-design.jpg" alt="Content Marketing"></a>
        </div>
        <div class="service-detail-body">
          <p class="service-detail-kicker">Digital Marketing</p>
          <h2><a href="/digital-marketing.php">Content Marketing</a></h2>
          <p>Content systems that educate buyers and feed every channel.</p>
          <ul>
            <li>Editorial calendars</li>
            <li>Blog / resource programs</li>
            <li>Repurposing for ads &amp; social</li>
          </ul>
          <a href="/digital-marketing.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more &rarr;</a>
        </div>
      </article>

      <article class="service-detail-card" data-level="sub" data-tags="digital-marketing" data-subs="email-marketing" hidden>
        <div class="service-detail-media">
          <a href="/digital-marketing.php"><img src="/assets/images/people-collab.jpg" alt="Email Marketing"></a>
        </div>
        <div class="service-detail-body">
          <p class="service-detail-kicker">Digital Marketing</p>
          <h2><a href="/digital-marketing.php">Email Marketing</a></h2>
          <p>Nurture and lifecycle email that keeps pipeline warm.</p>
          <ul>
            <li>Welcome &amp; nurture sequences</li>
            <li>Segmentation &amp; personalization</li>
            <li>Deliverability basics</li>
          </ul>
          <a href="/digital-marketing.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more &rarr;</a>
        </div>
      </article>

      <article class="service-detail-card" data-level="sub" data-tags="digital-marketing" data-subs="funnel-design" hidden>
        <div class="service-detail-media">
          <a href="/digital-marketing.php"><img src="/assets/images/why-influence.jpg" alt="Funnel Design"></a>
        </div>
        <div class="service-detail-body">
          <p class="service-detail-kicker">Digital Marketing</p>
          <h2><a href="/digital-marketing.php">Funnel Design</a></h2>
          <p>End-to-end funnels from first click to closed-won handoff.</p>
          <ul>
            <li>Landing + offer architecture</li>
            <li>Lead routing &amp; CRM hooks</li>
            <li>Measurement &amp; iteration loops</li>
          </ul>
          <a href="/digital-marketing.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more &rarr;</a>
        </div>
      </article>
    </div>

    <div class="services-cta-band reveal">
      <div>
        <h3>Don't see what you need?</h3>
        <p>Ask us - we tailor engagements for startups and enterprise teams.</p>
      </div>
      <a href="/contact.php" class="btn btn-lime btn-lg">Let's talk</a>
    </div>
  </div>
</section>

<section class="faq-section" id="faqs">
  <div class="container">
    <div class="section-header reveal">
      <p class="subheading">Services FAQs</p>
      <h2>Common questions before <span class="heading-accent">you hire</span></h2>
    </div>
    <div class="faq-list reveal">
      <div class="faq-item is-open">
        <button class="faq-trigger" type="button" aria-expanded="true">
          <span class="faq-num">01</span>
          <span class="faq-question">How much does a website project cost?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region"><div class="faq-panel-inner"><p>Website projects start at $10,000. Most full-cycle B2B website engagements fall between $25,000 and $50,000. After the first conversation we give a realistic estimate.</p></div></div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">02</span>
          <span class="faq-question">Which platform and technology stack should we use?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region"><div class="faq-panel-inner"><p>We build with Webflow, WordPress, Shopify, HubSpot, React, Vue, Node.js, Laravel, and Strapi based on your needs.</p></div></div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">03</span>
          <span class="faq-question">How are payments structured?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region"><div class="faq-panel-inner"><p>Full-cycle: 30% upfront, 40% after design, 30% on completion. Smaller projects: 50/50.</p></div></div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">04</span>
          <span class="faq-question">Can you move faster if we have a hard deadline?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region"><div class="faq-panel-inner"><p>Yes, when the deadline is realistic. We can increase the team and run tasks in parallel.</p></div></div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">05</span>
          <span class="faq-question">What does your website process look like?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region"><div class="faq-panel-inner"><p>Discovery, research, positioning, structure, copywriting, UX/UI, development, integrations, testing, and launch - same senior team throughout.</p></div></div>
      </div>
    </div>
    <div class="faq-all-wrap reveal">
      <a href="/faqs.php" class="btn btn-lime faq-all-btn">View all FAQs <span aria-hidden="true">&rarr;</span></a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
