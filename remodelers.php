<?php
$page_title = 'Remodeling | WTF Labs';
$page_description = 'Websites and lead gen that help remodeling companies win bigger kitchen, bath, and whole-home projects.';
$current_page = 'industries';
include __DIR__ . '/includes/header.php';
?>

<?php /*

<section class="ihero-section">
  <div class="ihero-box">
    <header class="ihero-header reveal">
      <p class="ihero-eyebrow"><span class="ihero-eyebrow-dot"></span> Remodeling</p>
      <h1 class="ihero-heading">Remodeling marketing that wins <span class="accent-lime">bigger jobs</span></h1>
      <p class="ihero-lead">Websites, local SEO, and ads that show off your craftsmanship and bring in homeowners ready to invest in a kitchen, bath, or full remodel.</p>
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
      <!--
      <div class="ihero-canvas">
        <div class="ihero-side ihero-side-left">
          <img src="/assets/images/hero-remodelers-left.webp" alt="">
        </div>
        <div class="ihero-side ihero-side-right">
          <img src="/assets/images/hero-remodelers-right.webp" alt="">
        </div>
        <div class="ihero-banner">
          <img src="/assets/images/hero-remodelers-main.webp" alt="" class="ihero-banner-img" fetchpriority="high">
        </div>
      </div>
      -->
      <div class="hcar" data-hcar>
        <div class="hcar-track">
          <div class="hcar-card"><img src="/assets/images/hcar-remodelers-1.webp" alt="Remodelers image 1" loading="lazy"></div>
          <div class="hcar-card"><img src="/assets/images/hcar-remodelers-2.webp" alt="Remodelers image 2" loading="lazy"></div>
          <div class="hcar-card"><img src="/assets/images/hcar-remodelers-3.webp" alt="Remodelers image 3" loading="lazy"></div>
        </div>
        <div class="hcar-nav">
          <button type="button" class="hcar-arrow hcar-prev" aria-label="Previous image"><svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M15 18l-6-6 6-6" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
          <button type="button" class="hcar-arrow hcar-next" aria-label="Next image"><svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M9 6l6 6-6 6" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
        </div>
      </div>
      <a href="/contact.php" class="ihero-primary reveal reveal-delay-3" data-open-popup><span class="ihero-primary-label">Free Consultation</span></a>
      <div class="ihero-secondary reveal reveal-delay-1">
        <a href="/works.php" class="ihero-secondary-btn"><span class="ihero-secondary-label">See our work</span></a>
      </div>
    </div>
  </div>
</section>

<section class="niche-strip" aria-label="What we cover">
  <div class="niche-strip-track">
    <ul class="niche-strip-list">
      <li>Kitchen Remodels</li>
      <li>Bathroom Remodels</li>
      <li>Home Additions</li>
      <li>Basement Finishing</li>
      <li>Whole-Home Renovations</li>
      <li>Custom Cabinetry</li>
      <li>Flooring</li>
      <li>Design-Build</li>
    </ul>
    <ul class="niche-strip-list" aria-hidden="true">
      <li>Kitchen Remodels</li>
      <li>Bathroom Remodels</li>
      <li>Home Additions</li>
      <li>Basement Finishing</li>
      <li>Whole-Home Renovations</li>
      <li>Custom Cabinetry</li>
      <li>Flooring</li>
      <li>Design-Build</li>
    </ul>
  </div>
</section>

<section class="page-section industry-nav-section">
  <div class="container">
    <div class="works-filter-stack works-filter-stack--center home-filter-stack" data-trade-links>
      <div class="home-filter-row is-done">
        <p class="home-filter-label">Select the Industry and services</p>
        <div class="works-filters" id="homeWorksIndustries" role="tablist" aria-label="Filter by industry">
          <button type="button" class="works-filter" data-industry="all" role="tab" aria-selected="false">Featured</button>
          <button type="button" class="works-filter is-active" data-industry="remodelers" role="tab" aria-selected="true">Remodeling</button>
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
      <article class="work-card" data-featured data-tags="web-design web-development" data-subs="corporate-sites wordpress" data-industries="remodelers" data-live="https://miaremodelingcontractors.com/" data-live-tab>
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
      <article class="work-card" data-featured data-tags="web-design web-development" data-subs="corporate-sites wordpress" data-industries="hvac" data-live="/live-preview?site=tanous-hvac">
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
      <a href="/contact.php" class="btn btn-lime btn-lg">Free Consultation</a>
    </div>
  </div>
</section>

<section class="faq-section" id="faqs">
  <div class="container">
    <div class="section-header reveal">
      <p class="subheading">Remodeling FAQs</p>
      <h2>Questions about <span class="heading-accent">Remodeling</span></h2>
    </div>
    <div class="faq-list reveal">
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
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

*/ ?>

<div class="rmx">
<section class="rmx-hero">
  <div class="rmx-hero-box">
    <div class="rmx-hero-copy reveal">
      <p class="ihero-eyebrow"><span class="ihero-eyebrow-dot"></span> Remodeling</p>
      <h1 class="rmx-h1">Make your craftsmanship <span class="accent-lime">sell the next big remodel.</span></h1>
      <p class="rmx-lead">Websites, local search and ads that show off your best work and bring in homeowners ready to invest in a kitchen, bath or whole-home remodel.</p>
      <a href="/contact.php" class="btn btn-lime btn-lg rmx-cta" data-open-popup>Free Consultation</a>
    </div>
    <div class="rmx-hero-art reveal reveal-delay-1" data-rmx-tilt>
      <span class="rmx-glow" aria-hidden="true"></span>
      <img src="/assets/images/rmx-hero.webp" alt="Remodeling company website on two phones: reviews, consult booking, before and after slider and project galleries" width="2375" height="1546" fetchpriority="high">
    </div>
  </div>
</section>

<section class="rmx-trust" aria-label="Review platforms">
  <div class="container">
    <p class="rmx-trust-label">Where homeowners check you before they call</p>
  </div>
  <div class="rmx-trust-track">
    <ul class="rmx-trust-list"><li class="rmx-logo rmx-logo--google"><svg viewBox="0 0 24 24" aria-hidden="true"><path fill="#4285F4" d="M21.6 12.2c0-.7-.1-1.4-.2-2H12v3.8h5.4a4.6 4.6 0 0 1-2 3v2.5h3.2c1.9-1.7 3-4.3 3-7.3z"/><path fill="#34A853" d="M12 22c2.7 0 5-.9 6.6-2.4l-3.2-2.5c-.9.6-2 1-3.4 1-2.6 0-4.8-1.8-5.6-4.1H3.1v2.6A10 10 0 0 0 12 22z"/><path fill="#FBBC05" d="M6.4 14a6 6 0 0 1 0-4V7.4H3.1a10 10 0 0 0 0 9.2z"/><path fill="#EA4335" d="M12 5.9c1.5 0 2.8.5 3.8 1.5l2.9-2.9A10 10 0 0 0 3.1 7.4L6.4 10c.8-2.3 3-4.1 5.6-4.1z"/></svg><span>Google Reviews</span></li><li class="rmx-logo rmx-logo--yelp"><svg viewBox="0 0 24 24" aria-hidden="true"><path fill="#D32323" d="M12.5 2.5c-.6-.3-4.4.8-5 1.2-.4.3-.5.7-.4 1.1l3.4 6.7c.5.9 1.8.6 1.8-.4l.3-7.5c0-.5-.1-.9-.1-1.1zM5 13.6l3.7-1.1c.9-.3.9-1.6 0-1.8L5 9.3c-.5-.1-1 .2-1.1.7-.2 1-.2 2 0 3 .1.5.6.8 1.1.6zm4.1 2.2l-2.6 2.9c-.3.4-.3 1 .1 1.3.8.6 1.7 1 2.6 1.3.5.1 1-.2 1-.7l.3-3.9c.1-1-1.1-1.5-1.4-.9zm6.5-.4c-.8-.4-1.7.5-1.2 1.3l2.1 3.3c.3.4.8.5 1.2.3.8-.6 1.5-1.3 2-2.1.3-.4.1-1-.4-1.2zm.8-2.5l3.8-1.1c.5-.2.8-.7.6-1.2-.3-1-.8-1.8-1.5-2.6-.4-.4-.9-.4-1.3 0l-2.6 2.9c-.6.8.1 2.2 1 2z"/></svg><span>Yelp</span></li><li class="rmx-logo rmx-logo--houzz"><svg viewBox="0 0 24 24" aria-hidden="true"><path fill="#4DBC15" d="M7 2v20h4.7v-6.3h2.6V22H19V10.2l-12-3.4V2z"/></svg><span>Houzz</span></li><li class="rmx-logo rmx-logo--angi"><svg viewBox="0 0 24 24" aria-hidden="true"><path fill="#FF6153" d="M12 2.5 3 10v11.5h6.5v-6h5v6H21V10z"/></svg><span>Angi</span></li><li class="rmx-logo rmx-logo--trustpilot"><svg viewBox="0 0 24 24" aria-hidden="true"><path fill="#00B67A" d="M12 2.5l2.4 7.2H22l-6.1 4.5 2.3 7.3L12 17l-6.2 4.5 2.3-7.3L2 9.7h7.6z"/></svg><span>Trustpilot</span></li><li class="rmx-logo rmx-logo--bbb"><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3" y="2" width="18" height="20" rx="2" fill="#005A78"/><path fill="#fff" d="M12 5c1.6 1 2.4 2.2 2.4 3.5 0 1-.6 1.8-1.2 2.4.9.4 1.6 1.2 1.6 2.4 0 1.7-1.3 3-2.8 3.7-1.5-.7-2.8-2-2.8-3.7 0-1.2.7-2 1.6-2.4-.6-.6-1.2-1.4-1.2-2.4C9.6 7.2 10.4 6 12 5z"/></svg><span>BBB</span></li><li class="rmx-logo rmx-logo--facebook"><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="10" fill="#1877F2"/><path fill="#fff" d="M13.4 21.9v-7.4h2.5l.4-2.9h-2.9V9.8c0-.8.2-1.4 1.4-1.4h1.5V5.8a20 20 0 0 0-2.2-.1c-2.2 0-3.7 1.3-3.7 3.8v2.1H8v2.9h2.4v7.4z"/></svg><span>Facebook</span></li><li class="rmx-logo rmx-logo--nextdoor"><svg viewBox="0 0 24 24" aria-hidden="true"><path fill="#8ED500" d="M12 3 2 11h3v10h5v-6h4v6h5V11h3z"/></svg><span>Nextdoor</span></li></ul>
    <ul class="rmx-trust-list" aria-hidden="true"><li class="rmx-logo rmx-logo--google"><svg viewBox="0 0 24 24" aria-hidden="true"><path fill="#4285F4" d="M21.6 12.2c0-.7-.1-1.4-.2-2H12v3.8h5.4a4.6 4.6 0 0 1-2 3v2.5h3.2c1.9-1.7 3-4.3 3-7.3z"/><path fill="#34A853" d="M12 22c2.7 0 5-.9 6.6-2.4l-3.2-2.5c-.9.6-2 1-3.4 1-2.6 0-4.8-1.8-5.6-4.1H3.1v2.6A10 10 0 0 0 12 22z"/><path fill="#FBBC05" d="M6.4 14a6 6 0 0 1 0-4V7.4H3.1a10 10 0 0 0 0 9.2z"/><path fill="#EA4335" d="M12 5.9c1.5 0 2.8.5 3.8 1.5l2.9-2.9A10 10 0 0 0 3.1 7.4L6.4 10c.8-2.3 3-4.1 5.6-4.1z"/></svg><span>Google Reviews</span></li><li class="rmx-logo rmx-logo--yelp"><svg viewBox="0 0 24 24" aria-hidden="true"><path fill="#D32323" d="M12.5 2.5c-.6-.3-4.4.8-5 1.2-.4.3-.5.7-.4 1.1l3.4 6.7c.5.9 1.8.6 1.8-.4l.3-7.5c0-.5-.1-.9-.1-1.1zM5 13.6l3.7-1.1c.9-.3.9-1.6 0-1.8L5 9.3c-.5-.1-1 .2-1.1.7-.2 1-.2 2 0 3 .1.5.6.8 1.1.6zm4.1 2.2l-2.6 2.9c-.3.4-.3 1 .1 1.3.8.6 1.7 1 2.6 1.3.5.1 1-.2 1-.7l.3-3.9c.1-1-1.1-1.5-1.4-.9zm6.5-.4c-.8-.4-1.7.5-1.2 1.3l2.1 3.3c.3.4.8.5 1.2.3.8-.6 1.5-1.3 2-2.1.3-.4.1-1-.4-1.2zm.8-2.5l3.8-1.1c.5-.2.8-.7.6-1.2-.3-1-.8-1.8-1.5-2.6-.4-.4-.9-.4-1.3 0l-2.6 2.9c-.6.8.1 2.2 1 2z"/></svg><span>Yelp</span></li><li class="rmx-logo rmx-logo--houzz"><svg viewBox="0 0 24 24" aria-hidden="true"><path fill="#4DBC15" d="M7 2v20h4.7v-6.3h2.6V22H19V10.2l-12-3.4V2z"/></svg><span>Houzz</span></li><li class="rmx-logo rmx-logo--angi"><svg viewBox="0 0 24 24" aria-hidden="true"><path fill="#FF6153" d="M12 2.5 3 10v11.5h6.5v-6h5v6H21V10z"/></svg><span>Angi</span></li><li class="rmx-logo rmx-logo--trustpilot"><svg viewBox="0 0 24 24" aria-hidden="true"><path fill="#00B67A" d="M12 2.5l2.4 7.2H22l-6.1 4.5 2.3 7.3L12 17l-6.2 4.5 2.3-7.3L2 9.7h7.6z"/></svg><span>Trustpilot</span></li><li class="rmx-logo rmx-logo--bbb"><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3" y="2" width="18" height="20" rx="2" fill="#005A78"/><path fill="#fff" d="M12 5c1.6 1 2.4 2.2 2.4 3.5 0 1-.6 1.8-1.2 2.4.9.4 1.6 1.2 1.6 2.4 0 1.7-1.3 3-2.8 3.7-1.5-.7-2.8-2-2.8-3.7 0-1.2.7-2 1.6-2.4-.6-.6-1.2-1.4-1.2-2.4C9.6 7.2 10.4 6 12 5z"/></svg><span>BBB</span></li><li class="rmx-logo rmx-logo--facebook"><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="10" fill="#1877F2"/><path fill="#fff" d="M13.4 21.9v-7.4h2.5l.4-2.9h-2.9V9.8c0-.8.2-1.4 1.4-1.4h1.5V5.8a20 20 0 0 0-2.2-.1c-2.2 0-3.7 1.3-3.7 3.8v2.1H8v2.9h2.4v7.4z"/></svg><span>Facebook</span></li><li class="rmx-logo rmx-logo--nextdoor"><svg viewBox="0 0 24 24" aria-hidden="true"><path fill="#8ED500" d="M12 3 2 11h3v10h5v-6h4v6h5V11h3z"/></svg><span>Nextdoor</span></li></ul>
  </div>
</section>

<section class="rmx-sec rmx-exp">
  <div class="container">
    <div class="section-header center rmx-head reveal">
      <p class="subheading">Our remodeling expertise</p>
      <h2 class="home-title">Everything you need to <span class="heading-accent">win the walkthrough.</span></h2>
      <p class="section-desc center-desc">Built only for remodelers. Every page, ad and form is designed to sell premium projects.</p>
    </div>
    <div class="rmx-exp-grid">
<article class="rmx-exp-card rmx-exp-card--xl reveal"><img src="/assets/images/rm-kitchen-2.webp" alt="" loading="lazy"><div class="rmx-exp-body"><span class="rmx-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="4" width="18" height="16" rx="3"/><circle cx="9" cy="10" r="2"/><path d="M21 16l-5-5-9 9"/></svg></span><h3>Portfolio-led websites</h3><p>Your finished kitchens and baths become the sales pitch, framed like a design magazine.</p></div></article>
<article class="rmx-exp-card rmx-exp-card--tall reveal"><img src="/assets/images/rm-bath-2.webp" alt="" loading="lazy"><div class="rmx-exp-body"><span class="rmx-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7S2 12 2 12z"/><circle cx="12" cy="12" r="3"/></svg></span><h3>Before and after storytelling</h3><p>Drag-to-reveal sliders that show the transformation in one swipe.</p></div></article>
<article class="rmx-exp-card reveal"><img src="/assets/images/rm-design-1.webp" alt="" loading="lazy"><div class="rmx-exp-body"><span class="rmx-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="5" y="3" width="14" height="18" rx="2"/><path d="M9 8h6M9 12h6M9 16h3"/></svg></span><h3>Budget-ready consult forms</h3><p>Capture project type, budget and timing before the first call.</p></div></article>
<article class="rmx-exp-card reveal"><img src="/assets/images/rm-exterior-1.webp" alt="" loading="lazy"><div class="rmx-exp-body"><span class="rmx-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 21s7-5.6 7-11a7 7 0 1 0-14 0c0 5.4 7 11 7 11z"/><circle cx="12" cy="10" r="2.5"/></svg></span><h3>Local SEO for big-ticket jobs</h3><p>Rank for kitchen, bath and addition searches in the towns you want.</p></div></article>
<article class="rmx-exp-card reveal"><img src="/assets/images/rm-crew-2.webp" alt="" loading="lazy"><div class="rmx-exp-body"><span class="rmx-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 11l14-6v14L3 13z"/><path d="M7 13v5a2 2 0 0 0 4 0v-3.5"/><path d="M20 9v6"/></svg></span><h3>Google and Meta ads</h3><p>Campaigns built around consultations, not cheap clicks.</p></div></article>
<article class="rmx-exp-card rmx-exp-card--wide reveal"><img src="/assets/images/rm-living-2.webp" alt="" loading="lazy"><div class="rmx-exp-body"><span class="rmx-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3l2.7 5.6 6.1.9-4.4 4.3 1 6.1L12 17l-5.4 2.9 1-6.1L3.2 9.5l6.1-.9z"/></svg></span><h3>Reviews and reputation</h3><p>Turn happy clients into five-star proof on every platform.</p></div></article>
    </div>
  </div>
</section>

<section class="rmx-sec rmx-ben">
  <div class="container">
    <div class="section-header center rmx-head reveal">
      <p class="subheading">Benefits for remodelers</p>
      <h2 class="home-title">What a better website <span class="heading-accent">does for your business.</span></h2>
      <p class="section-desc center-desc">Less chasing, more qualified consultations, and projects worth your crew's time.</p>
    </div>
  </div>
  <div class="rmx-ben-track reveal">
    <ul class="rmx-ben-list"><li class="rmx-ben-card"><span class="rmx-ben-num">01</span><span class="rmx-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3v18M16.5 7.5c0-1.9-2-3-4.5-3s-4.5 1.2-4.5 3.2c0 4.5 9 2.3 9 6.8 0 2-2 3.3-4.5 3.3s-4.5-1.2-4.5-3"/></svg></span><h3>Bigger average jobs</h3><p>Premium design attracts homeowners planning $40K+ projects.</p></li><li class="rmx-ben-card"><span class="rmx-ben-num">02</span><span class="rmx-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="8"/><circle cx="12" cy="12" r="4"/><circle cx="12" cy="12" r="1"/></svg></span><h3>Better-fit leads</h3><p>Budget and timeline filters weed out tire-kickers early.</p></li><li class="rmx-ben-card"><span class="rmx-ben-num">03</span><span class="rmx-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3l8 3v6c0 5-3.5 8-8 9-4.5-1-8-4-8-9V6z"/><path d="M8.5 12l2.5 2.5 4.5-5"/></svg></span><h3>Instant credibility</h3><p>Reviews, licenses and real photos build trust before the visit.</p></li><li class="rmx-ben-card"><span class="rmx-ben-num">04</span><span class="rmx-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></span><h3>Less time quoting</h3><p>Consult forms give you the full picture before you drive out.</p></li><li class="rmx-ben-card"><span class="rmx-ben-num">05</span><span class="rmx-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 20V10M10 20V4M16 20v-7M22 20H2"/></svg></span><h3>Steady pipeline</h3><p>SEO and ads keep consultations booked in slow seasons too.</p></li><li class="rmx-ben-card"><span class="rmx-ben-num">06</span><span class="rmx-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M17 2l4 4-4 4"/><path d="M3 11v-1a4 4 0 0 1 4-4h14"/><path d="M7 22l-4-4 4-4"/><path d="M21 13v1a4 4 0 0 1-4 4H3"/></svg></span><h3>More referrals</h3><p>A site worth sharing turns past clients into your sales team.</p></li><li class="rmx-ben-card"><span class="rmx-ben-num">07</span><span class="rmx-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="7" y="2" width="10" height="20" rx="2"/><path d="M11 18h2"/></svg></span><h3>Built for phones</h3><p>Most homeowners find you on mobile. Every page loads fast.</p></li><li class="rmx-ben-card"><span class="rmx-ben-num">08</span><span class="rmx-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="9" cy="8" r="3.5"/><path d="M2.5 20a6.5 6.5 0 0 1 13 0"/><path d="M16 4.5a3.5 3.5 0 0 1 0 7M18.5 20a6.5 6.5 0 0 0-3-5.5"/></svg></span><h3>One senior team</h3><p>Strategy, design and marketing from the same people.</p></li></ul>
    <ul class="rmx-ben-list" aria-hidden="true"><li class="rmx-ben-card"><span class="rmx-ben-num">01</span><span class="rmx-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3v18M16.5 7.5c0-1.9-2-3-4.5-3s-4.5 1.2-4.5 3.2c0 4.5 9 2.3 9 6.8 0 2-2 3.3-4.5 3.3s-4.5-1.2-4.5-3"/></svg></span><h3>Bigger average jobs</h3><p>Premium design attracts homeowners planning $40K+ projects.</p></li><li class="rmx-ben-card"><span class="rmx-ben-num">02</span><span class="rmx-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="8"/><circle cx="12" cy="12" r="4"/><circle cx="12" cy="12" r="1"/></svg></span><h3>Better-fit leads</h3><p>Budget and timeline filters weed out tire-kickers early.</p></li><li class="rmx-ben-card"><span class="rmx-ben-num">03</span><span class="rmx-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3l8 3v6c0 5-3.5 8-8 9-4.5-1-8-4-8-9V6z"/><path d="M8.5 12l2.5 2.5 4.5-5"/></svg></span><h3>Instant credibility</h3><p>Reviews, licenses and real photos build trust before the visit.</p></li><li class="rmx-ben-card"><span class="rmx-ben-num">04</span><span class="rmx-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></span><h3>Less time quoting</h3><p>Consult forms give you the full picture before you drive out.</p></li><li class="rmx-ben-card"><span class="rmx-ben-num">05</span><span class="rmx-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 20V10M10 20V4M16 20v-7M22 20H2"/></svg></span><h3>Steady pipeline</h3><p>SEO and ads keep consultations booked in slow seasons too.</p></li><li class="rmx-ben-card"><span class="rmx-ben-num">06</span><span class="rmx-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M17 2l4 4-4 4"/><path d="M3 11v-1a4 4 0 0 1 4-4h14"/><path d="M7 22l-4-4 4-4"/><path d="M21 13v1a4 4 0 0 1-4 4H3"/></svg></span><h3>More referrals</h3><p>A site worth sharing turns past clients into your sales team.</p></li><li class="rmx-ben-card"><span class="rmx-ben-num">07</span><span class="rmx-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="7" y="2" width="10" height="20" rx="2"/><path d="M11 18h2"/></svg></span><h3>Built for phones</h3><p>Most homeowners find you on mobile. Every page loads fast.</p></li><li class="rmx-ben-card"><span class="rmx-ben-num">08</span><span class="rmx-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="9" cy="8" r="3.5"/><path d="M2.5 20a6.5 6.5 0 0 1 13 0"/><path d="M16 4.5a3.5 3.5 0 0 1 0 7M18.5 20a6.5 6.5 0 0 0-3-5.5"/></svg></span><h3>One senior team</h3><p>Strategy, design and marketing from the same people.</p></li></ul>
  </div>
  <div class="container rmx-center reveal"><a href="/contact.php" class="btn btn-lime btn-lg rmx-cta" data-open-popup>Free Consultation</a></div>
</section>

<section class="rmx-sec">
  <div class="container">
    <div class="rmx-grab reveal">
      <div class="rmx-grab-copy">
        <h2>Still losing $60K kitchens to the contractor with the better website?</h2>
        <p>Homeowners judge your work by your website before they ever meet you. We make your projects look as good online as they do in person, so the right clients call you first.</p>
        <a href="/contact.php" class="btn btn-lime btn-lg rmx-cta" data-open-popup>Free Consultation</a>
      </div>
      <div class="rmx-grab-art" data-rmx-tilt>
        <img src="/assets/images/rmx-duo-quote.webp" alt="Remodeling quote form and reviews on phones" loading="lazy" width="1400" height="1520">
        <span class="rmx-float rmx-float--a"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M13 3L5 14h6l-1 7 8-11h-6z"/></svg> New lead: $58K kitchen</span>
        <span class="rmx-float rmx-float--b"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="5" width="18" height="16" rx="3"/><path d="M3 10h18M8 3v4M16 3v4"/></svg> Consult booked: Tue 11:30</span>
      </div>
    </div>
  </div>
</section>

<section class="rmx-sec rmx-niches">
  <div class="container">
    <div class="section-header center rmx-head reveal">
      <p class="subheading">Remodeling niches we serve</p>
      <h2 class="home-title">Whatever you build, <span class="heading-accent">we help you sell it.</span></h2>
      <p class="section-desc center-desc">From one-room refreshes to full design-build firms, each niche gets pages, ads and proof built around how its buyers decide.</p>
    </div>
    <ul class="rmx-niche-grid"><li class="rmx-niche reveal"><span class="rmx-niche-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="10" width="18" height="11" rx="1.5"/><path d="M3 14h18M8 10V5h8v5M10 17.5h4"/></svg></span><span>Kitchen remodelers</span></li><li class="rmx-niche reveal"><span class="rmx-niche-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 12h16v3a5 5 0 0 1-5 5H9a5 5 0 0 1-5-5z"/><path d="M6 12V6a2 2 0 0 1 4 0"/><path d="M7 20l-1 2M17 20l1 2"/></svg></span><span>Bathroom remodelers</span></li><li class="rmx-niche reveal"><span class="rmx-niche-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 20h5v-4h4v-4h4V8h5"/><path d="M3 20h18"/></svg></span><span>Basement finishing</span></li><li class="rmx-niche reveal"><span class="rmx-niche-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 11l7-6 7 6"/><path d="M5 10v10h10V10"/><path d="M19 13v6M16 16h6"/></svg></span><span>Home additions</span></li><li class="rmx-niche reveal"><span class="rmx-niche-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 11l9-7 9 7"/><path d="M5 10v10h14V10"/><path d="M10 20v-6h4v6"/></svg></span><span>Whole-home renovations</span></li><li class="rmx-niche reveal"><span class="rmx-niche-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="4" y="3" width="16" height="18" rx="1.5"/><path d="M12 3v18M9.5 11v2M14.5 11v2"/></svg></span><span>Custom cabinetry</span></li><li class="rmx-niche reveal"><span class="rmx-niche-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 21l9-9 9 9"/><path d="M7.5 16.5l4.5 4.5M12 12l4.5 4.5M16.5 16.5l-4.5 4.5"/><path d="M3 21h18"/></svg></span><span>Flooring and tile</span></li><li class="rmx-niche reveal"><span class="rmx-niche-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3v3M5 6l2 2M19 6l-2 2"/><circle cx="12" cy="12" r="4"/><path d="M3 21h18M6 21v-3h12v3"/></svg></span><span>Outdoor living</span></li><li class="rmx-niche reveal"><span class="rmx-niche-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="9" width="8" height="12" rx="1"/><path d="M13 21V5l8 4v12"/><path d="M6 13h2M16 12h2M16 16h2"/></svg></span><span>ADUs and garage conversions</span></li><li class="rmx-niche reveal"><span class="rmx-niche-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="4" width="14" height="6" rx="1.5"/><path d="M17 7h2a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2h-7v3"/><rect x="10" y="16" width="4" height="5" rx="1"/></svg></span><span>Interior finishing</span></li><li class="rmx-niche reveal"><span class="rmx-niche-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="8" cy="15" r="4"/><path d="M11 12l9-9M17 6l3 3M15 8l2 2"/></svg></span><span>Design-build firms</span></li><li class="rmx-niche reveal"><span class="rmx-niche-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="4" y="3" width="16" height="18" rx="1.5"/><path d="M8 7h2M14 7h2M8 11h2M14 11h2M8 15h2M14 15h2M10 21v-3h4v3"/></svg></span><span>Light commercial remodels</span></li></ul>
  </div>
</section>

<section class="rmx-sec rmx-panels">
  <div class="container">
    <div class="section-header center rmx-head reveal">
      <p class="subheading">Inside a remodeler website</p>
      <h2 class="home-title">Built for every step <span class="heading-accent">of the remodel.</span></h2>
      <p class="section-desc center-desc">What homeowners see, what you manage, and how the two connect.</p>
    </div>
    <div class="rmx-tabs reveal" role="tablist" aria-label="Website panels"><button type="button" class="rmx-tab is-active" role="tab" aria-selected="true" data-rmx-tab="0">Homeowner pages</button><button type="button" class="rmx-tab" role="tab" aria-selected="false" data-rmx-tab="1">Project showcase</button><button type="button" class="rmx-tab" role="tab" aria-selected="false" data-rmx-tab="2">Owner dashboard</button><button type="button" class="rmx-tab" role="tab" aria-selected="false" data-rmx-tab="3">Budget planner</button></div>
    <div class="rmx-stage reveal" data-rmx-stage>
      <div class="rmx-stage-col"><div class="rmx-feats is-active" data-rmx-pane="0"><div class="rmx-feat"><h4>Clear service pages</h4><p>Kitchens, baths and additions each get a page that sells.</p></div><div class="rmx-feat"><h4>Process at a glance</h4><p>Show the steps so buyers know what happens next.</p></div><div class="rmx-feat"><h4>Photo-first layouts</h4><p>Your best projects lead every page, not stock images.</p></div></div><div class="rmx-feats" data-rmx-pane="1"><div class="rmx-feat"><h4>Filter by room</h4><p>Homeowners jump straight to kitchens, baths or basements.</p></div><div class="rmx-feat"><h4>Filter by town</h4><p>Show the work you did a few streets away.</p></div><div class="rmx-feat"><h4>Project stories</h4><p>Scope, timeline and finish details for every job.</p></div></div><div class="rmx-feats" data-rmx-pane="2"><div class="rmx-feat"><h4>Every lead in one place</h4><p>Calls, forms and bookings land in a single inbox.</p></div><div class="rmx-feat"><h4>Budget at a glance</h4><p>See project type and budget before you call back.</p></div><div class="rmx-feat"><h4>Hot lead alerts</h4><p>Big jobs get flagged so you reply first.</p></div></div><div class="rmx-feats" data-rmx-pane="3"><div class="rmx-feat"><h4>Instant ballpark</h4><p>Homeowners see a realistic range in seconds.</p></div><div class="rmx-feat"><h4>Line-item preview</h4><p>Cabinets, counters and flooring broken out simply.</p></div><div class="rmx-feat"><h4>Financing options</h4><p>Monthly estimates make big projects feel reachable.</p></div></div></div>
      <div class="rmx-stage-phone"><span class="rmx-glow" aria-hidden="true"></span><img class="rmx-screen is-active" data-rmx-pane="0" src="/assets/images/rmx-tab-1.webp" alt="Homeowner pages screen" loading="lazy" width="720" height="1400"><img class="rmx-screen" data-rmx-pane="1" src="/assets/images/rmx-tab-2.webp" alt="Project showcase screen" loading="lazy" width="720" height="1400"><img class="rmx-screen" data-rmx-pane="2" src="/assets/images/rmx-tab-3.webp" alt="Owner dashboard screen" loading="lazy" width="720" height="1400"><img class="rmx-screen" data-rmx-pane="3" src="/assets/images/rmx-tab-4.webp" alt="Budget planner screen" loading="lazy" width="720" height="1400"></div>
      <div class="rmx-stage-col"><div class="rmx-feats is-active" data-rmx-pane="0"><div class="rmx-feat"><h4>One-tap consult</h4><p>Booking sits on every screen, always one thumb away.</p></div><div class="rmx-feat"><h4>Local proof</h4><p>Neighborhood projects and reviews near the homeowner.</p></div><div class="rmx-feat"><h4>Fast on any phone</h4><p>Pages load quickly even on weak mobile signal.</p></div></div><div class="rmx-feats" data-rmx-pane="1"><div class="rmx-feat"><h4>Big, sharp photos</h4><p>Full-width images that make craftsmanship obvious.</p></div><div class="rmx-feat"><h4>Before and after</h4><p>Swipe-to-reveal comparisons that sell the change.</p></div><div class="rmx-feat"><h4>Ask about this</h4><p>A request button tied to each project you show.</p></div></div><div class="rmx-feats" data-rmx-pane="2"><div class="rmx-feat"><h4>Pipeline value</h4><p>Know what is booked and what is still open.</p></div><div class="rmx-feat"><h4>Source tracking</h4><p>See which ads and searches bring real jobs.</p></div><div class="rmx-feat"><h4>One-tap follow-up</h4><p>Call or text the homeowner straight from the lead.</p></div></div><div class="rmx-feats" data-rmx-pane="3"><div class="rmx-feat"><h4>Fewer price shocks</h4><p>Expectations are set before you walk in.</p></div><div class="rmx-feat"><h4>Qualified requests</h4><p>Only serious, budget-aware buyers reach out.</p></div><div class="rmx-feat"><h4>Exact pricing CTA</h4><p>One button moves them to a real quote.</p></div></div></div>
    </div>
  </div>
</section>

<section class="rmx-sec">
  <div class="container">
    <div class="rmx-grab rmx-grab--alt reveal">
      <div class="rmx-grab-art" data-rmx-tilt>
        <img src="/assets/images/rmx-trio.webp" alt="Remodeling services, project tracker and consult booking on phones" loading="lazy" width="1840" height="1495">
      </div>
      <div class="rmx-grab-copy">
        <h2>Looking for a team that actually understands remodeling?</h2>
        <p>We have built websites for kitchen, bath and design-build firms. We know how your buyers shop, so we design every page to turn browsing into booked consultations.</p>
        <a href="/contact.php" class="btn btn-lime btn-lg rmx-cta" data-open-popup>Free Consultation</a>
      </div>
    </div>
  </div>
</section>

<section class="page-section industry-nav-section rmx-work" id="work">
  <div class="container">
    <div class="section-header center rmx-head reveal">
      <p class="subheading">Remodeling websites we built</p>
      <h2 class="home-title">Real remodelers. <span class="heading-accent">Real websites.</span></h2>
      <p class="section-desc center-desc">Pick a trade and a service, then open any project to see the live site.</p>
    </div>
    <div class="works-filter-stack works-filter-stack--center home-filter-stack" data-trade-links>
      <div class="home-filter-row is-done">
        <p class="home-filter-label">Select the Industry and services</p>
        <div class="works-filters" id="homeWorksIndustries" role="tablist" aria-label="Filter by industry">
          <button type="button" class="works-filter" data-industry="all" role="tab" aria-selected="false">Featured</button>
          <button type="button" class="works-filter is-active" data-industry="remodelers" role="tab" aria-selected="true">Remodeling</button>
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
      <article class="work-card" data-featured data-tags="web-design web-development" data-subs="corporate-sites wordpress" data-industries="remodelers" data-live="https://miaremodelingcontractors.com/" data-live-tab>
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
      <article class="work-card" data-featured data-tags="web-design web-development" data-subs="corporate-sites wordpress" data-industries="hvac" data-live="/live-preview?site=tanous-hvac">
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

</div>

<?php
$street_section_id = 'testimonials';
include __DIR__ . '/includes/testimonialslider.php';
?>

<section class="faq-section" id="faqs">
  <div class="container">
    <div class="section-header reveal">
      <p class="subheading">Remodeling FAQs</p>
      <h2 class="home-title">Questions remodelers <span class="heading-accent">ask us first.</span></h2>
    </div>
    <div class="faq-list reveal">
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">01</span>
          <span class="faq-question">How much does a remodeling website cost?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region"><div class="faq-panel-inner"><p>It depends on pages, galleries and features like budget forms or financing tools. Most remodeler sites start with a focused build and grow from there. A free consultation gives you a clear quote.</p></div></div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">02</span>
          <span class="faq-question">Can you use photos of my past projects?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region"><div class="faq-panel-inner"><p>Yes, and we should. Real kitchens, baths and additions sell far better than stock photos. We help you choose, edit and organize your best work.</p></div></div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">03</span>
          <span class="faq-question">Will the website bring me bigger jobs?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region"><div class="faq-panel-inner"><p>Premium design, project galleries and budget-aware forms attract homeowners planning larger remodels and filter out price shoppers early.</p></div></div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">04</span>
          <span class="faq-question">How long does a remodeler website take?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region"><div class="faq-panel-inner"><p>Most projects launch in four to eight weeks, depending on page count and how quickly photos and content come together.</p></div></div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">05</span>
          <span class="faq-question">Do you handle SEO and ads too?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region"><div class="faq-panel-inner"><p>Yes. We can run local SEO, Google Ads and social ads around the projects you want more of, all connected to the same website.</p></div></div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">06</span>
          <span class="faq-question">Can I update projects myself?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region"><div class="faq-panel-inner"><p>Yes. We set up an easy way to add new projects, photos and reviews, and we train you on it before launch.</p></div></div>
      </div>
    </div>
    <div class="faq-all-wrap reveal">
      <a href="/faqs.php" class="btn btn-lime faq-all-btn">View all FAQs <span aria-hidden="true">&rarr;</span></a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
