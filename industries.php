<?php
$page_title = 'Industries | WTF Labs';
$page_description = 'Websites, local SEO, Google Ads, and social ads for remodelers, HVAC, plumbing, roofing, pest control, pool services, landscaping, handyman, and power washing businesses.';
$current_page = 'industries';
include __DIR__ . '/includes/header.php';
?>

<?php
$banner_kicker = 'Industries';
$banner_h1 = '<span class="about-hero-accent">Who</span> we grow';
$banner_lead = 'From remodelers and HVAC to roofing, pool, and power washing — one senior team building websites and campaigns that keep local service businesses booked.';
$banner_primary_label = 'Get a quote';
$banner_secondary_label = 'See our work';
$banner_image = '/assets/images/industry-remodelers-1.webp';
$banner_float1 = '/assets/images/industry-hvac-1.webp';
$banner_float2 = '/assets/images/industry-roofing-1.webp';
$banner_card = 'Local service growth — one senior pod.';
include __DIR__ . '/includes/page-banner.php';
?>

<section class="page-section">
  <div class="container">
    <div class="works-filter-stack works-filter-stack--center">
      <div class="works-filters" id="industriesFilters" role="tablist" aria-label="Filter industries">
        <button type="button" class="works-filter is-active" data-filter="all" role="tab"
          aria-selected="true">All</button>
        <button type="button" class="works-filter" data-filter="remodelers" role="tab"
          aria-selected="false">Remodelers</button>
        <button type="button" class="works-filter" data-filter="hvac" role="tab" aria-selected="false">HVAC</button>
        <button type="button" class="works-filter" data-filter="plumbing" role="tab"
          aria-selected="false">Plumbing</button>
        <button type="button" class="works-filter" data-filter="roofing" role="tab"
          aria-selected="false">Roofing</button>
        <button type="button" class="works-filter" data-filter="pest-control" role="tab" aria-selected="false">Pest
          Control</button>
        <button type="button" class="works-filter" data-filter="pool-services" role="tab" aria-selected="false">Pool
          Services</button>
        <button type="button" class="works-filter" data-filter="landscaping" role="tab"
          aria-selected="false">Landscaping</button>
        <button type="button" class="works-filter" data-filter="handyman" role="tab"
          aria-selected="false">Handyman</button>
        <button type="button" class="works-filter" data-filter="power-washing" role="tab" aria-selected="false">Power
          Washing</button>
      </div>
      <!-- Sub navigation -->
      <div class="works-subfilters" id="industriesSubfilters" role="tablist" aria-label="Filter by service" hidden>
        <button type="button" class="works-filter works-subfilter is-active" data-sub="all" role="tab" aria-selected="true">All</button>
        <button type="button" class="works-filter works-subfilter" data-sub="websites" role="tab" aria-selected="false">Websites</button>
        <button type="button" class="works-filter works-subfilter" data-sub="local-seo" role="tab" aria-selected="false">Local SEO</button>
        <button type="button" class="works-filter works-subfilter" data-sub="google-ads" role="tab" aria-selected="false">Google Ads</button>
        <button type="button" class="works-filter works-subfilter" data-sub="social-ads" role="tab" aria-selected="false">Social Ads</button>
      </div>
    </div>

    <div class="services-detail-grid" id="industriesGrid">
      <!-- Overview cards: visible on All -->
      <article class="service-detail-card" data-level="overview" data-tags="remodelers">
        <div class="service-detail-media">
          <a href="/remodelers.php"><img src="/assets/images/industry-remodelers-1.webp" alt="Remodelers"></a>
        </div>
        <div class="service-detail-body">
          <h2><a href="/remodelers.php">Remodelers</a></h2>
          <p>Websites and lead gen that help remodeling companies win bigger kitchen, bath, and whole-home projects.</p>
          <ul>
            <li>Portfolio-led project galleries</li>
            <li>Quote forms that qualify budgets</li>
            <li>Local SEO for high-value jobs</li>
          </ul>
          <a href="/remodelers.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more
            &rarr;</a>
        </div>
      </article>

      <article class="service-detail-card" data-level="overview" data-tags="hvac">
        <div class="service-detail-media">
          <a href="/hvac.php"><img src="/assets/images/industry-hvac-1.webp" alt="HVAC"></a>
        </div>
        <div class="service-detail-body">
          <h2><a href="/hvac.php">HVAC</a></h2>
          <p>Websites and campaigns that keep HVAC techs booked through peak season and the slow months.</p>
          <ul>
            <li>Emergency &amp; seasonal service pages</li>
            <li>Online booking and call tracking</li>
            <li>Maintenance plan sign-ups</li>
          </ul>
          <a href="/hvac.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more &rarr;</a>
        </div>
      </article>

      <article class="service-detail-card" data-level="overview" data-tags="plumbing">
        <div class="service-detail-media">
          <a href="/plumbing.php"><img src="/assets/images/industry-plumbing-1.webp" alt="Plumbing"></a>
        </div>
        <div class="service-detail-body">
          <h2><a href="/plumbing.php">Plumbing</a></h2>
          <p>Websites and ads that make your plumbing company the first call for leaks, clogs, and water heaters.</p>
          <ul>
            <li>24/7 emergency call paths</li>
            <li>Water heater &amp; repipe landing pages</li>
            <li>Local SEO for every service area</li>
          </ul>
          <a href="/plumbing.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more
            &rarr;</a>
        </div>
      </article>

      <article class="service-detail-card" data-level="overview" data-tags="roofing">
        <div class="service-detail-media">
          <a href="/roofing.php"><img src="/assets/images/industry-roofing-1.webp" alt="Roofing"></a>
        </div>
        <div class="service-detail-body">
          <h2><a href="/roofing.php">Roofing</a></h2>
          <p>Websites and lead gen that help roofing contractors win replacements, repairs, and storm work.</p>
          <ul>
            <li>Free inspection booking</li>
            <li>Storm &amp; insurance claim pages</li>
            <li>Financing and warranty callouts</li>
          </ul>
          <a href="/roofing.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more
            &rarr;</a>
        </div>
      </article>

      <article class="service-detail-card" data-level="overview" data-tags="pest-control">
        <div class="service-detail-media">
          <a href="/pest-control.php"><img src="/assets/images/industry-pest-control-1.webp" alt="Pest Control"></a>
        </div>
        <div class="service-detail-body">
          <h2><a href="/pest-control.php">Pest Control</a></h2>
          <p>Websites and campaigns that turn one-time pest calls into recurring service plans.</p>
          <ul>
            <li>Pest-specific service pages</li>
            <li>Recurring plan sign-ups</li>
            <li>Seasonal campaign planning</li>
          </ul>
          <a href="/pest-control.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more
            &rarr;</a>
        </div>
      </article>

      <article class="service-detail-card" data-level="overview" data-tags="pool-services">
        <div class="service-detail-media">
          <a href="/pool-services.php"><img src="/assets/images/industry-pool-services-1.webp" alt="Pool Services"></a>
        </div>
        <div class="service-detail-body">
          <h2><a href="/pool-services.php">Pool Services</a></h2>
          <p>Websites and marketing that grow weekly pool routes, repairs, and seasonal openings.</p>
          <ul>
            <li>Weekly service plan sign-ups</li>
            <li>Repair &amp; equipment pages</li>
            <li>Opening and closing campaigns</li>
          </ul>
          <a href="/pool-services.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more
            &rarr;</a>
        </div>
      </article>

      <article class="service-detail-card" data-level="overview" data-tags="landscaping">
        <div class="service-detail-media">
          <a href="/landscaping.php"><img src="/assets/images/industry-landscaping-1.webp" alt="Landscaping"></a>
        </div>
        <div class="service-detail-body">
          <h2><a href="/landscaping.php">Landscaping</a></h2>
          <p>Websites and lead gen that help landscapers win design-build projects and maintenance contracts.</p>
          <ul>
            <li>Project galleries &amp; design showcases</li>
            <li>Maintenance contract sign-ups</li>
            <li>Seasonal lead campaigns</li>
          </ul>
          <a href="/landscaping.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more
            &rarr;</a>
        </div>
      </article>

      <article class="service-detail-card" data-level="overview" data-tags="handyman">
        <div class="service-detail-media">
          <a href="/handyman.php"><img src="/assets/images/industry-handyman-1.webp" alt="Handyman"></a>
        </div>
        <div class="service-detail-body">
          <h2><a href="/handyman.php">Handyman</a></h2>
          <p>Websites and local marketing that keep handyman businesses booked with repeat customers.</p>
          <ul>
            <li>Clear service lists &amp; pricing cues</li>
            <li>Easy online booking</li>
            <li>Repeat customer campaigns</li>
          </ul>
          <a href="/handyman.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more
            &rarr;</a>
        </div>
      </article>

      <article class="service-detail-card" data-level="overview" data-tags="power-washing">
        <div class="service-detail-media">
          <a href="/power-washing.php"><img src="/assets/images/industry-power-washing-1.webp" alt="Power Washing"></a>
        </div>
        <div class="service-detail-body">
          <h2><a href="/power-washing.php">Power Washing</a></h2>
          <p>Websites and campaigns that fill power washing schedules with homes, driveways, and commercial jobs.</p>
          <ul>
            <li>Instant quote forms</li>
            <li>Before/after galleries</li>
            <li>Residential &amp; commercial pages</li>
          </ul>
          <a href="/power-washing.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more
            &rarr;</a>
        </div>
      </article>

      <!-- Subcategory cards: visible when an industry tab is selected -->
      <!-- Remodelers -->
      <article class="service-detail-card" data-level="sub" data-tags="remodelers" data-subs="websites" hidden>
        <div class="service-detail-media">
          <a href="/remodelers.php"><img src="/assets/images/industry-remodelers-2.webp" alt="Remodelers Websites"></a>
        </div>
        <div class="service-detail-body">
          <p class="service-detail-kicker">Remodelers</p>
          <h2><a href="/remodelers.php">Websites</a></h2>
          <p>Portfolio-led sites that turn project photos into consultation requests.</p>
          <ul>
            <li>Before/after galleries</li>
            <li>Project story pages</li>
            <li>Consultation booking</li>
          </ul>
          <a href="/remodelers.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more
            &rarr;</a>
        </div>
      </article>

      <article class="service-detail-card" data-level="sub" data-tags="remodelers" data-subs="local-seo" hidden>
        <div class="service-detail-media">
          <a href="/remodelers.php"><img src="/assets/images/industry-remodelers-3.webp" alt="Remodelers Local SEO"></a>
        </div>
        <div class="service-detail-body">
          <p class="service-detail-kicker">Remodelers</p>
          <h2><a href="/remodelers.php">Local SEO</a></h2>
          <p>Rank for kitchen, bath, and remodel searches across your service area.</p>
          <ul>
            <li>Service-area landing pages</li>
            <li>Google Business Profile</li>
            <li>Review generation</li>
          </ul>
          <a href="/remodelers.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more
            &rarr;</a>
        </div>
      </article>

      <article class="service-detail-card" data-level="sub" data-tags="remodelers" data-subs="google-ads" hidden>
        <div class="service-detail-media">
          <a href="/remodelers.php"><img src="/assets/images/industry-remodelers-4.webp"
              alt="Remodelers Google Ads"></a>
        </div>
        <div class="service-detail-body">
          <p class="service-detail-kicker">Remodelers</p>
          <h2><a href="/remodelers.php">Google Ads</a></h2>
          <p>Search campaigns aimed at high-value remodel projects.</p>
          <ul>
            <li>Project-type ad groups</li>
            <li>Budget-qualified landing pages</li>
            <li>Call &amp; form tracking</li>
          </ul>
          <a href="/remodelers.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more
            &rarr;</a>
        </div>
      </article>

      <article class="service-detail-card" data-level="sub" data-tags="remodelers" data-subs="social-ads" hidden>
        <div class="service-detail-media">
          <a href="/remodelers.php"><img src="/assets/images/industry-remodelers-1.webp"
              alt="Remodelers Social Ads"></a>
        </div>
        <div class="service-detail-body">
          <p class="service-detail-kicker">Remodelers</p>
          <h2><a href="/remodelers.php">Social Ads</a></h2>
          <p>Visual campaigns that put your finished projects in front of local homeowners.</p>
          <ul>
            <li>Before/after creatives</li>
            <li>Homeowner audience targeting</li>
            <li>Retargeting site visitors</li>
          </ul>
          <a href="/remodelers.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more
            &rarr;</a>
        </div>
      </article>

      <!-- HVAC -->
      <article class="service-detail-card" data-level="sub" data-tags="hvac" data-subs="websites" hidden>
        <div class="service-detail-media">
          <a href="/hvac.php"><img src="/assets/images/industry-hvac-2.webp" alt="HVAC Websites"></a>
        </div>
        <div class="service-detail-body">
          <p class="service-detail-kicker">HVAC</p>
          <h2><a href="/hvac.php">Websites</a></h2>
          <p>Fast, mobile-first HVAC sites built around emergency and install calls.</p>
          <ul>
            <li>Emergency service CTAs</li>
            <li>Online scheduling</li>
            <li>Financing &amp; rebate pages</li>
          </ul>
          <a href="/hvac.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more &rarr;</a>
        </div>
      </article>

      <article class="service-detail-card" data-level="sub" data-tags="hvac" data-subs="local-seo" hidden>
        <div class="service-detail-media">
          <a href="/hvac.php"><img src="/assets/images/industry-hvac-3.webp" alt="HVAC Local SEO"></a>
        </div>
        <div class="service-detail-body">
          <p class="service-detail-kicker">HVAC</p>
          <h2><a href="/hvac.php">Local SEO</a></h2>
          <p>Map pack visibility for AC repair, furnace, and heat pump searches.</p>
          <ul>
            <li>City &amp; service pages</li>
            <li>Google Business Profile</li>
            <li>Review velocity</li>
          </ul>
          <a href="/hvac.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more &rarr;</a>
        </div>
      </article>

      <article class="service-detail-card" data-level="sub" data-tags="hvac" data-subs="google-ads" hidden>
        <div class="service-detail-media">
          <a href="/hvac.php"><img src="/assets/images/industry-hvac-4.webp" alt="HVAC Google Ads"></a>
        </div>
        <div class="service-detail-body">
          <p class="service-detail-kicker">HVAC</p>
          <h2><a href="/hvac.php">Google Ads</a></h2>
          <p>Search and Local Services Ads that follow the weather.</p>
          <ul>
            <li>Seasonal campaign switching</li>
            <li>LSA management</li>
            <li>Call tracking</li>
          </ul>
          <a href="/hvac.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more &rarr;</a>
        </div>
      </article>

      <article class="service-detail-card" data-level="sub" data-tags="hvac" data-subs="social-ads" hidden>
        <div class="service-detail-media">
          <a href="/hvac.php"><img src="/assets/images/industry-hvac-1.webp" alt="HVAC Social Ads"></a>
        </div>
        <div class="service-detail-body">
          <p class="service-detail-kicker">HVAC</p>
          <h2><a href="/hvac.php">Social Ads</a></h2>
          <p>Local campaigns for tune-ups, installs, and maintenance plans.</p>
          <ul>
            <li>Seasonal promo creatives</li>
            <li>Homeowner targeting</li>
            <li>Plan sign-up retargeting</li>
          </ul>
          <a href="/hvac.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more &rarr;</a>
        </div>
      </article>

      <!-- Plumbing -->
      <article class="service-detail-card" data-level="sub" data-tags="plumbing" data-subs="websites" hidden>
        <div class="service-detail-media">
          <a href="/plumbing.php"><img src="/assets/images/industry-plumbing-2.webp" alt="Plumbing Websites"></a>
        </div>
        <div class="service-detail-body">
          <p class="service-detail-kicker">Plumbing</p>
          <h2><a href="/plumbing.php">Websites</a></h2>
          <p>Call-first plumbing sites that convert urgent visitors in seconds.</p>
          <ul>
            <li>Click-to-call on every page</li>
            <li>Emergency service pages</li>
            <li>Trust badges &amp; reviews</li>
          </ul>
          <a href="/plumbing.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more
            &rarr;</a>
        </div>
      </article>

      <article class="service-detail-card" data-level="sub" data-tags="plumbing" data-subs="local-seo" hidden>
        <div class="service-detail-media">
          <a href="/plumbing.php"><img src="/assets/images/industry-plumbing-3.webp" alt="Plumbing Local SEO"></a>
        </div>
        <div class="service-detail-body">
          <p class="service-detail-kicker">Plumbing</p>
          <h2><a href="/plumbing.php">Local SEO</a></h2>
          <p>Own the map pack for leak, drain, and water heater searches.</p>
          <ul>
            <li>Service-area pages</li>
            <li>Google Business Profile</li>
            <li>Review requests</li>
          </ul>
          <a href="/plumbing.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more
            &rarr;</a>
        </div>
      </article>

      <article class="service-detail-card" data-level="sub" data-tags="plumbing" data-subs="google-ads" hidden>
        <div class="service-detail-media">
          <a href="/plumbing.php"><img src="/assets/images/industry-plumbing-4.webp" alt="Plumbing Google Ads"></a>
        </div>
        <div class="service-detail-body">
          <p class="service-detail-kicker">Plumbing</p>
          <h2><a href="/plumbing.php">Google Ads</a></h2>
          <p>Emergency and install campaigns tuned for cost per call.</p>
          <ul>
            <li>24/7 call campaigns</li>
            <li>Local Services Ads</li>
            <li>Geo &amp; zip targeting</li>
          </ul>
          <a href="/plumbing.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more
            &rarr;</a>
        </div>
      </article>

      <article class="service-detail-card" data-level="sub" data-tags="plumbing" data-subs="social-ads" hidden>
        <div class="service-detail-media">
          <a href="/plumbing.php"><img src="/assets/images/industry-plumbing-1.webp" alt="Plumbing Social Ads"></a>
        </div>
        <div class="service-detail-body">
          <p class="service-detail-kicker">Plumbing</p>
          <h2><a href="/plumbing.php">Social Ads</a></h2>
          <p>Local awareness and install offers that stay top of mind.</p>
          <ul>
            <li>Water heater promos</li>
            <li>Neighborhood targeting</li>
            <li>Past-customer retargeting</li>
          </ul>
          <a href="/plumbing.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more
            &rarr;</a>
        </div>
      </article>

      <!-- Roofing -->
      <article class="service-detail-card" data-level="sub" data-tags="roofing" data-subs="websites" hidden>
        <div class="service-detail-media">
          <a href="/roofing.php"><img src="/assets/images/industry-roofing-2.webp" alt="Roofing Websites"></a>
        </div>
        <div class="service-detail-body">
          <p class="service-detail-kicker">Roofing</p>
          <h2><a href="/roofing.php">Websites</a></h2>
          <p>Roofing sites that turn visitors into booked inspections.</p>
          <ul>
            <li>Free inspection booking</li>
            <li>Warranty &amp; financing pages</li>
            <li>Project photo galleries</li>
          </ul>
          <a href="/roofing.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more
            &rarr;</a>
        </div>
      </article>

      <article class="service-detail-card" data-level="sub" data-tags="roofing" data-subs="local-seo" hidden>
        <div class="service-detail-media">
          <a href="/roofing.php"><img src="/assets/images/industry-roofing-3.webp" alt="Roofing Local SEO"></a>
        </div>
        <div class="service-detail-body">
          <p class="service-detail-kicker">Roofing</p>
          <h2><a href="/roofing.php">Local SEO</a></h2>
          <p>Rank for roof repair and replacement across every city you serve.</p>
          <ul>
            <li>City landing pages</li>
            <li>Google Business Profile</li>
            <li>Review strategy</li>
          </ul>
          <a href="/roofing.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more
            &rarr;</a>
        </div>
      </article>

      <article class="service-detail-card" data-level="sub" data-tags="roofing" data-subs="google-ads" hidden>
        <div class="service-detail-media">
          <a href="/roofing.php"><img src="/assets/images/industry-roofing-4.webp" alt="Roofing Google Ads"></a>
        </div>
        <div class="service-detail-body">
          <p class="service-detail-kicker">Roofing</p>
          <h2><a href="/roofing.php">Google Ads</a></h2>
          <p>Search campaigns for replacements, repairs, and storm demand.</p>
          <ul>
            <li>Replacement-focused ad groups</li>
            <li>Storm-ready campaigns</li>
            <li>Lead quality tracking</li>
          </ul>
          <a href="/roofing.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more
            &rarr;</a>
        </div>
      </article>

      <article class="service-detail-card" data-level="sub" data-tags="roofing" data-subs="social-ads" hidden>
        <div class="service-detail-media">
          <a href="/roofing.php"><img src="/assets/images/industry-roofing-1.webp" alt="Roofing Social Ads"></a>
        </div>
        <div class="service-detail-body">
          <p class="service-detail-kicker">Roofing</p>
          <h2><a href="/roofing.php">Social Ads</a></h2>
          <p>Neighborhood campaigns that build awareness before homeowners need a roof.</p>
          <ul>
            <li>Job-site proof creatives</li>
            <li>Neighborhood targeting</li>
            <li>Inspection offers</li>
          </ul>
          <a href="/roofing.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more
            &rarr;</a>
        </div>
      </article>

      <!-- Pest Control -->
      <article class="service-detail-card" data-level="sub" data-tags="pest-control" data-subs="websites" hidden>
        <div class="service-detail-media">
          <a href="/pest-control.php"><img src="/assets/images/industry-pest-control-2.webp"
              alt="Pest Control Websites"></a>
        </div>
        <div class="service-detail-body">
          <p class="service-detail-kicker">Pest Control</p>
          <h2><a href="/pest-control.php">Websites</a></h2>
          <p>Clear pest control sites with pest pages and plan sign-ups.</p>
          <ul>
            <li>Pest-by-pest pages</li>
            <li>Plan comparison tables</li>
            <li>Online booking</li>
          </ul>
          <a href="/pest-control.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more
            &rarr;</a>
        </div>
      </article>

      <article class="service-detail-card" data-level="sub" data-tags="pest-control" data-subs="local-seo" hidden>
        <div class="service-detail-media">
          <a href="/pest-control.php"><img src="/assets/images/industry-pest-control-3.webp"
              alt="Pest Control Local SEO"></a>
        </div>
        <div class="service-detail-body">
          <p class="service-detail-kicker">Pest Control</p>
          <h2><a href="/pest-control.php">Local SEO</a></h2>
          <p>Show up for termite, rodent, and mosquito searches near you.</p>
          <ul>
            <li>City &amp; pest pages</li>
            <li>Google Business Profile</li>
            <li>Review requests</li>
          </ul>
          <a href="/pest-control.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more
            &rarr;</a>
        </div>
      </article>

      <article class="service-detail-card" data-level="sub" data-tags="pest-control" data-subs="google-ads" hidden>
        <div class="service-detail-media">
          <a href="/pest-control.php"><img src="/assets/images/industry-pest-control-4.webp"
              alt="Pest Control Google Ads"></a>
        </div>
        <div class="service-detail-body">
          <p class="service-detail-kicker">Pest Control</p>
          <h2><a href="/pest-control.php">Google Ads</a></h2>
          <p>Search campaigns for urgent pest problems and recurring plans.</p>
          <ul>
            <li>Pest-specific ad groups</li>
            <li>Local Services Ads</li>
            <li>Seasonal budgets</li>
          </ul>
          <a href="/pest-control.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more
            &rarr;</a>
        </div>
      </article>

      <article class="service-detail-card" data-level="sub" data-tags="pest-control" data-subs="social-ads" hidden>
        <div class="service-detail-media">
          <a href="/pest-control.php"><img src="/assets/images/industry-pest-control-1.webp"
              alt="Pest Control Social Ads"></a>
        </div>
        <div class="service-detail-body">
          <p class="service-detail-kicker">Pest Control</p>
          <h2><a href="/pest-control.php">Social Ads</a></h2>
          <p>Seasonal campaigns that reach homeowners before pests show up.</p>
          <ul>
            <li>Pre-season promos</li>
            <li>Neighborhood targeting</li>
            <li>Plan upgrade retargeting</li>
          </ul>
          <a href="/pest-control.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more
            &rarr;</a>
        </div>
      </article>

      <!-- Pool Services -->
      <article class="service-detail-card" data-level="sub" data-tags="pool-services" data-subs="websites" hidden>
        <div class="service-detail-media">
          <a href="/pool-services.php"><img src="/assets/images/industry-pool-services-2.webp"
              alt="Pool Services Websites"></a>
        </div>
        <div class="service-detail-body">
          <p class="service-detail-kicker">Pool Services</p>
          <h2><a href="/pool-services.php">Websites</a></h2>
          <p>Pool service sites with clear plans and simple sign-up.</p>
          <ul>
            <li>Weekly plan options</li>
            <li>Repair &amp; equipment pages</li>
            <li>Quote requests</li>
          </ul>
          <a href="/pool-services.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more
            &rarr;</a>
        </div>
      </article>

      <article class="service-detail-card" data-level="sub" data-tags="pool-services" data-subs="local-seo" hidden>
        <div class="service-detail-media">
          <a href="/pool-services.php"><img src="/assets/images/industry-pool-services-3.webp"
              alt="Pool Services Local SEO"></a>
        </div>
        <div class="service-detail-body">
          <p class="service-detail-kicker">Pool Services</p>
          <h2><a href="/pool-services.php">Local SEO</a></h2>
          <p>Rank for pool cleaning and repair in the neighborhoods you serve.</p>
          <ul>
            <li>Neighborhood pages</li>
            <li>Google Business Profile</li>
            <li>Review generation</li>
          </ul>
          <a href="/pool-services.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more
            &rarr;</a>
        </div>
      </article>

      <article class="service-detail-card" data-level="sub" data-tags="pool-services" data-subs="google-ads" hidden>
        <div class="service-detail-media">
          <a href="/pool-services.php"><img src="/assets/images/industry-pool-services-4.webp"
              alt="Pool Services Google Ads"></a>
        </div>
        <div class="service-detail-body">
          <p class="service-detail-kicker">Pool Services</p>
          <h2><a href="/pool-services.php">Google Ads</a></h2>
          <p>Search campaigns for repairs, equipment, and weekly service.</p>
          <ul>
            <li>Repair-focused ad groups</li>
            <li>Seasonal budgets</li>
            <li>Call &amp; form tracking</li>
          </ul>
          <a href="/pool-services.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more
            &rarr;</a>
        </div>
      </article>

      <article class="service-detail-card" data-level="sub" data-tags="pool-services" data-subs="social-ads" hidden>
        <div class="service-detail-media">
          <a href="/pool-services.php"><img src="/assets/images/industry-pool-services-1.webp"
              alt="Pool Services Social Ads"></a>
        </div>
        <div class="service-detail-body">
          <p class="service-detail-kicker">Pool Services</p>
          <h2><a href="/pool-services.php">Social Ads</a></h2>
          <p>Local campaigns that keep your brand in front of pool owners.</p>
          <ul>
            <li>Before/after pool creatives</li>
            <li>Route-area targeting</li>
            <li>Opening season offers</li>
          </ul>
          <a href="/pool-services.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more
            &rarr;</a>
        </div>
      </article>

      <!-- Landscaping -->
      <article class="service-detail-card" data-level="sub" data-tags="landscaping" data-subs="websites" hidden>
        <div class="service-detail-media">
          <a href="/landscaping.php"><img src="/assets/images/industry-landscaping-2.webp"
              alt="Landscaping Websites"></a>
        </div>
        <div class="service-detail-body">
          <p class="service-detail-kicker">Landscaping</p>
          <h2><a href="/landscaping.php">Websites</a></h2>
          <p>Photo-driven landscaping sites that sell your design work.</p>
          <ul>
            <li>Project galleries</li>
            <li>Design consultation booking</li>
            <li>Maintenance plan pages</li>
          </ul>
          <a href="/landscaping.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more
            &rarr;</a>
        </div>
      </article>

      <article class="service-detail-card" data-level="sub" data-tags="landscaping" data-subs="local-seo" hidden>
        <div class="service-detail-media">
          <a href="/landscaping.php"><img src="/assets/images/industry-landscaping-3.webp"
              alt="Landscaping Local SEO"></a>
        </div>
        <div class="service-detail-body">
          <p class="service-detail-kicker">Landscaping</p>
          <h2><a href="/landscaping.php">Local SEO</a></h2>
          <p>Rank for landscaping, hardscape, and lawn care across your area.</p>
          <ul>
            <li>City &amp; service pages</li>
            <li>Google Business Profile</li>
            <li>Review strategy</li>
          </ul>
          <a href="/landscaping.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more
            &rarr;</a>
        </div>
      </article>

      <article class="service-detail-card" data-level="sub" data-tags="landscaping" data-subs="google-ads" hidden>
        <div class="service-detail-media">
          <a href="/landscaping.php"><img src="/assets/images/industry-landscaping-4.webp"
              alt="Landscaping Google Ads"></a>
        </div>
        <div class="service-detail-body">
          <p class="service-detail-kicker">Landscaping</p>
          <h2><a href="/landscaping.php">Google Ads</a></h2>
          <p>Search campaigns for installs, cleanups, and maintenance.</p>
          <ul>
            <li>Project-type ad groups</li>
            <li>Seasonal budgets</li>
            <li>Lead quality tracking</li>
          </ul>
          <a href="/landscaping.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more
            &rarr;</a>
        </div>
      </article>

      <article class="service-detail-card" data-level="sub" data-tags="landscaping" data-subs="social-ads" hidden>
        <div class="service-detail-media">
          <a href="/landscaping.php"><img src="/assets/images/industry-landscaping-1.webp"
              alt="Landscaping Social Ads"></a>
        </div>
        <div class="service-detail-body">
          <p class="service-detail-kicker">Landscaping</p>
          <h2><a href="/landscaping.php">Social Ads</a></h2>
          <p>Visual campaigns that show off outdoor spaces you have built.</p>
          <ul>
            <li>Project showcase creatives</li>
            <li>Homeowner targeting</li>
            <li>Seasonal offers</li>
          </ul>
          <a href="/landscaping.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more
            &rarr;</a>
        </div>
      </article>

      <!-- Handyman -->
      <article class="service-detail-card" data-level="sub" data-tags="handyman" data-subs="websites" hidden>
        <div class="service-detail-media">
          <a href="/handyman.php"><img src="/assets/images/industry-handyman-2.webp" alt="Handyman Websites"></a>
        </div>
        <div class="service-detail-body">
          <p class="service-detail-kicker">Handyman</p>
          <h2><a href="/handyman.php">Websites</a></h2>
          <p>Clean handyman sites that look professional and book fast.</p>
          <ul>
            <li>Service list pages</li>
            <li>Online booking</li>
            <li>Reviews &amp; trust badges</li>
          </ul>
          <a href="/handyman.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more
            &rarr;</a>
        </div>
      </article>

      <article class="service-detail-card" data-level="sub" data-tags="handyman" data-subs="local-seo" hidden>
        <div class="service-detail-media">
          <a href="/handyman.php"><img src="/assets/images/industry-handyman-3.webp" alt="Handyman Local SEO"></a>
        </div>
        <div class="service-detail-body">
          <p class="service-detail-kicker">Handyman</p>
          <h2><a href="/handyman.php">Local SEO</a></h2>
          <p>Show up for the small-job searches homeowners make every day.</p>
          <ul>
            <li>Service &amp; city pages</li>
            <li>Google Business Profile</li>
            <li>Review generation</li>
          </ul>
          <a href="/handyman.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more
            &rarr;</a>
        </div>
      </article>

      <article class="service-detail-card" data-level="sub" data-tags="handyman" data-subs="google-ads" hidden>
        <div class="service-detail-media">
          <a href="/handyman.php"><img src="/assets/images/industry-handyman-4.webp" alt="Handyman Google Ads"></a>
        </div>
        <div class="service-detail-body">
          <p class="service-detail-kicker">Handyman</p>
          <h2><a href="/handyman.php">Google Ads</a></h2>
          <p>Focused local campaigns that bring in the jobs you want.</p>
          <ul>
            <li>Job-type ad groups</li>
            <li>Tight geo targeting</li>
            <li>Call tracking</li>
          </ul>
          <a href="/handyman.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more
            &rarr;</a>
        </div>
      </article>

      <article class="service-detail-card" data-level="sub" data-tags="handyman" data-subs="social-ads" hidden>
        <div class="service-detail-media">
          <a href="/handyman.php"><img src="/assets/images/industry-handyman-1.webp" alt="Handyman Social Ads"></a>
        </div>
        <div class="service-detail-body">
          <p class="service-detail-kicker">Handyman</p>
          <h2><a href="/handyman.php">Social Ads</a></h2>
          <p>Neighborhood campaigns that build a loyal local following.</p>
          <ul>
            <li>Before/after creatives</li>
            <li>Neighborhood targeting</li>
            <li>Repeat customer offers</li>
          </ul>
          <a href="/handyman.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more
            &rarr;</a>
        </div>
      </article>

      <!-- Power Washing -->
      <article class="service-detail-card" data-level="sub" data-tags="power-washing" data-subs="websites" hidden>
        <div class="service-detail-media">
          <a href="/power-washing.php"><img src="/assets/images/industry-power-washing-2.webp"
              alt="Power Washing Websites"></a>
        </div>
        <div class="service-detail-body">
          <p class="service-detail-kicker">Power Washing</p>
          <h2><a href="/power-washing.php">Websites</a></h2>
          <p>Visual power washing sites with instant quote forms.</p>
          <ul>
            <li>Before/after galleries</li>
            <li>Instant quote forms</li>
            <li>Residential &amp; commercial pages</li>
          </ul>
          <a href="/power-washing.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more
            &rarr;</a>
        </div>
      </article>

      <article class="service-detail-card" data-level="sub" data-tags="power-washing" data-subs="local-seo" hidden>
        <div class="service-detail-media">
          <a href="/power-washing.php"><img src="/assets/images/industry-power-washing-3.webp"
              alt="Power Washing Local SEO"></a>
        </div>
        <div class="service-detail-body">
          <p class="service-detail-kicker">Power Washing</p>
          <h2><a href="/power-washing.php">Local SEO</a></h2>
          <p>Rank for pressure washing, house washing, and driveway cleaning near you.</p>
          <ul>
            <li>City &amp; service pages</li>
            <li>Google Business Profile</li>
            <li>Photo-rich reviews</li>
          </ul>
          <a href="/power-washing.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more
            &rarr;</a>
        </div>
      </article>

      <article class="service-detail-card" data-level="sub" data-tags="power-washing" data-subs="google-ads" hidden>
        <div class="service-detail-media">
          <a href="/power-washing.php"><img src="/assets/images/service-social-media.jpg"
              alt="Power Washing Google Ads"></a>
        </div>
        <div class="service-detail-body">
          <p class="service-detail-kicker">Power Washing</p>
          <h2><a href="/power-washing.php">Google Ads</a></h2>
          <p>Search campaigns for homes, driveways, and commercial jobs.</p>
          <ul>
            <li>Service-type ad groups</li>
            <li>Seasonal budgets</li>
            <li>Quote form tracking</li>
          </ul>
          <a href="/power-washing.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more
            &rarr;</a>
        </div>
      </article>

      <article class="service-detail-card" data-level="sub" data-tags="power-washing" data-subs="social-ads" hidden>
        <div class="service-detail-media">
          <a href="/power-washing.php"><img src="/assets/images/industry-power-washing-1.webp"
              alt="Power Washing Social Ads"></a>
        </div>
        <div class="service-detail-body">
          <p class="service-detail-kicker">Power Washing</p>
          <h2><a href="/power-washing.php">Social Ads</a></h2>
          <p>Short before/after video ads that stop the scroll.</p>
          <ul>
            <li>Before/after video creatives</li>
            <li>Neighborhood targeting</li>
            <li>Seasonal offers</li>
          </ul>
          <a href="/power-washing.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more
            &rarr;</a>
        </div>
      </article>
    </div>

    <div class="services-cta-band reveal">
      <div>
        <h3>Don't see your industry?</h3>
        <p>Ask us - we tailor engagements for local service businesses of every size.</p>
      </div>
      <a href="/contact.php" class="btn btn-lime btn-lg">Let's talk</a>
    </div>
  </div>
</section>

<section class="faq-section" id="faqs">
  <div class="container">
    <div class="section-header reveal">
      <p class="subheading">Industries FAQs</p>
      <h2>Common questions before <span class="heading-accent">you hire</span></h2>
    </div>
    <div class="faq-list reveal">
      <div class="faq-item is-open">
        <button class="faq-trigger" type="button" aria-expanded="true">
          <span class="faq-num">01</span>
          <span class="faq-question">Do you only work with home service businesses?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18"
              viewBox="0 0 18 18" fill="none">
              <path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
            </svg></span>
        </button>
        <div class="faq-panel" role="region">
          <div class="faq-panel-inner">
            <p>No, but home and field service companies are a big part of our work. We know how these customers search,
              compare, and book.</p>
          </div>
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">02</span>
          <span class="faq-question">Can you work with a single-location business?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18"
              viewBox="0 0 18 18" fill="none">
              <path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
            </svg></span>
        </button>
        <div class="faq-panel" role="region">
          <div class="faq-panel-inner">
            <p>Yes. Many of our industry clients are owner-operated or single-location teams. We scale the plan to your
              size and goals.</p>
          </div>
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">03</span>
          <span class="faq-question">Will our site connect to our booking or CRM software?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18"
              viewBox="0 0 18 18" fill="none">
              <path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
            </svg></span>
        </button>
        <div class="faq-panel" role="region">
          <div class="faq-panel-inner">
            <p>We integrate with tools like ServiceTitan, Housecall Pro, Jobber, and HubSpot so leads land where your
              team already works.</p>
          </div>
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">04</span>
          <span class="faq-question">How soon will we see more leads?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18"
              viewBox="0 0 18 18" fill="none">
              <path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
            </svg></span>
        </button>
        <div class="faq-panel" role="region">
          <div class="faq-panel-inner">
            <p>Paid campaigns can bring leads within weeks. Local SEO usually builds over three to six months and keeps
              compounding.</p>
          </div>
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">05</span>
          <span class="faq-question">Is my industry not listed?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18"
              viewBox="0 0 18 18" fill="none">
              <path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
            </svg></span>
        </button>
        <div class="faq-panel" role="region">
          <div class="faq-panel-inner">
            <p>Ask us. If you run a local service business, the same playbook usually applies - we tailor it to your
              market.</p>
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