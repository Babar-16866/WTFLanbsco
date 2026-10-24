<?php
$work_eyebrow = $work_eyebrow ?? '';
$work_heading = $work_heading ?? 'GREAT WORK. <span class="accent-lime">BUILT TO EARN TRUST.</span>';
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
      <div class="home-filter-row" id="homeWorksServiceRow" hidden>
        <div class="works-filters" id="homeWorksFilters" role="tablist" aria-label="Filter works by service">
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
    <div class="live-modal-progress" aria-hidden="true"></div>
    <iframe class="live-modal-frame" id="liveModalFrame" title="Live website preview" src="about:blank"></iframe>
  </div>
</div>
