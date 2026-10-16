<?php
$page_title = 'Insights | WTF Labs';
$page_description = 'Practical website, SEO, and ads insights for remodeling, HVAC, plumbing, roofing, pest control, and pool companies.';
$current_page = 'insights';
include __DIR__ . '/includes/header.php';
?>

<?php
$banner_kicker = 'Insights';
$banner_h1 = 'Straight talk on <span class="about-hero-accent">growth</span>';
$banner_lead = 'Practical playbooks for local service businesses — what wins the call, the booking, and the bigger job. No fluff, just what we see working.';
$banner_primary_label = 'Get a free consultation';
$banner_primary_href = '/contact.php';
$banner_primary_popup = false;
$banner_primary_step = true;
$banner_secondary_label = 'See our work';
$banner_image = '/assets/images/industry-remodelers-2.webp';
$banner_float1 = '/assets/images/industry-hvac-1.webp';
$banner_float2 = '/assets/images/industry-pool-services-1.webp';
$banner_card = 'Lessons from real local campaigns.';
include __DIR__ . '/includes/page-banner.php';
?>

<section class="page-section" id="top-insights">
  <div class="container">
    <div class="works-grid reveal">
      <article class="work-card">
        <div class="work-card-media">
          <a href="#remodelers-lose-projects"><img loading="lazy" src="/assets/images/industry-remodelers-1.webp" alt="Remodeled kitchen"></a>
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Remodeling</span>
            <span>6 min read</span>
          </div>
          <h2>Why Remodelers Lose $50K Projects to Worse Competitors</h2>
          <p>Homeowners can't judge craftsmanship online, so they judge everything else. Here's where good remodelers quietly lose the big jobs.</p>
          <a href="#remodelers-lose-projects" class="text-link-blue card-more-link">Read article &rarr;</a>
        </div>
      </article>

      <article class="work-card">
        <div class="work-card-media">
          <a href="#hvac-mobile-calls"><img loading="lazy" src="/assets/images/industry-hvac-2.webp" alt="HVAC technician at a thermostat"></a>
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>HVAC</span>
            <span>5 min read</span>
          </div>
          <h2>Why HVAC Websites Lose Emergency Calls on Mobile</h2>
          <p>When the AC dies at 9pm, people search on their phone and call the first company that makes it easy. Most sites make it hard.</p>
          <a href="#hvac-mobile-calls" class="text-link-blue card-more-link">Read article &rarr;</a>
        </div>
      </article>

      <article class="work-card">
        <div class="work-card-media">
          <a href="#plumbing-google-ads"><img loading="lazy" src="/assets/images/industry-plumbing-1.webp" alt="Plumber fixing a sink"></a>
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Plumbing</span>
            <span>7 min read</span>
          </div>
          <h2>Google Ads for Plumbing Companies</h2>
          <p>How to structure campaigns so you pay for burst pipes and water heaters - not DIY searches, job seekers, and calls from three counties away.</p>
          <a href="#plumbing-google-ads" class="text-link-blue card-more-link">Read article &rarr;</a>
        </div>
      </article>

      <article class="work-card">
        <div class="work-card-media">
          <a href="#pest-control-recurring"><img loading="lazy" src="/assets/images/industry-pest-control-3.webp" alt="Pest control technician with a homeowner"></a>
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Pest Control</span>
            <span>5 min read</span>
          </div>
          <h2>How Pest Control Companies Turn One-Off Jobs Into Recurring Plans</h2>
          <p>The first treatment is the most expensive customer you'll ever win. Here's how to make sure it isn't the last one.</p>
          <a href="#pest-control-recurring" class="text-link-blue card-more-link">Read article &rarr;</a>
        </div>
      </article>

      <article class="work-card">
        <div class="work-card-media">
          <a href="#roofing-website-examples"><img loading="lazy" src="/assets/images/industry-roofing-3.webp" alt="New roof on a family home"></a>
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Roofing</span>
            <span>6 min read</span>
          </div>
          <h2>Website Examples for Roofing Companies</h2>
          <p>Five page patterns we see on roofing sites that consistently turn visitors into booked inspections - and what makes each one work.</p>
          <a href="#roofing-website-examples" class="text-link-blue card-more-link">Read article &rarr;</a>
        </div>
      </article>

      <article class="work-card">
        <div class="work-card-media">
          <a href="#pool-local-seo"><img loading="lazy" src="/assets/images/industry-pool-services-4.webp" alt="Backyard pool at sunset"></a>
        </div>
        <div class="work-card-body">
          <div class="work-card-meta">
            <span>Pool Services</span>
            <span>6 min read</span>
          </div>
          <h2>Local SEO for Pool Companies</h2>
          <p>How pool cleaning and repair companies show up in the map pack for the neighborhoods they already drive through every week.</p>
          <a href="#pool-local-seo" class="text-link-blue card-more-link">Read article &rarr;</a>
        </div>
      </article>
    </div>

    <div class="services-cta-band reveal">
      <div>
        <h3>Want to know what your site is missing?</h3>
        <p>Get a free audit with a clear list of what to fix first.</p>
      </div>
      <a href="/contact.php" class="btn btn-lime btn-lg" data-open-step-popup>Get a free consultation</a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
