<?php
$page_title = 'Industries | WTF Labs';
$page_description = 'Websites, local SEO, Google Ads, and social ads for remodelers, HVAC, plumbing, roofing, pest control, pool services, landscaping, handyman, and power washing businesses.';
$current_page = 'industries';
include __DIR__ . '/includes/header.php';

$industries = require __DIR__ . '/includes/industries-data.php';
$sub_images = ['websites' => 2, 'local-seo' => 3, 'google-ads' => 4, 'social-ads' => 1];

$industry_faqs = [
  ['Do you only work with home service businesses?', 'No, but home and field service companies are a big part of our work. We know how these customers search, compare, and book.'],
  ['Can you work with a single-location business?', 'Yes. Many of our industry clients are owner-operated or single-location teams. We scale the plan to your size and goals.'],
  ['Will our site connect to our booking or CRM software?', 'We integrate with tools like ServiceTitan, Housecall Pro, Jobber, and HubSpot so leads land where your team already works.'],
  ['How soon will we see more leads?', 'Paid campaigns can bring leads within weeks. Local SEO usually builds over three to six months and keeps compounding.'],
  ['Is my industry not listed?', 'Ask us. If you run a local service business, the same playbook usually applies - we tailor it to your market.'],
];
?>

<?php
$banner_kicker = 'Industries';
$banner_h1 = '<span class="about-hero-accent">Who</span> we grow';
$banner_lead = 'From remodelers and HVAC to roofing, pool, and power washing — one senior team building websites and campaigns that keep local service businesses booked.';
$banner_primary_label = 'Get a quote';
$banner_secondary_label = 'See our work';
$banner_image = industry_image($industries['remodelers'], 1);
$banner_float1 = industry_image($industries['hvac'], 1);
$banner_float2 = industry_image($industries['roofing'], 1);
$banner_card = 'Local service growth — one senior pod.';
include __DIR__ . '/includes/page-banner.php';
?>

<section class="page-section">
  <div class="container">
    <div class="works-filter-stack works-filter-stack--center">
      <div class="works-filters" id="industriesFilters" role="tablist" aria-label="Filter industries">
        <button type="button" class="works-filter is-active" data-filter="all" role="tab" aria-selected="true">All</button>
        <?php foreach ($industries as $slug => $industry): ?>
        <button type="button" class="works-filter" data-filter="<?php echo $slug; ?>" role="tab" aria-selected="false"><?php echo htmlspecialchars($industry['name']); ?></button>
        <?php endforeach; ?>
      </div>
      <div class="works-subfilters" id="industriesSubfilters" role="tablist" aria-label="Filter by service" hidden></div>
    </div>

    <div class="services-detail-grid" id="industriesGrid">
      <?php foreach ($industries as $slug => $industry): ?>
      <article class="service-detail-card" data-level="overview" data-tags="<?php echo $slug; ?>">
        <div class="service-detail-media">
          <a href="/<?php echo $slug; ?>.php"><img src="<?php echo industry_image($industry, 1); ?>" alt="<?php echo htmlspecialchars($industry['name']); ?>"></a>
        </div>
        <div class="service-detail-body">
          <h2><a href="/<?php echo $slug; ?>.php"><?php echo htmlspecialchars($industry['name']); ?></a></h2>
          <p><?php echo htmlspecialchars($industry['short']); ?></p>
          <ul>
            <?php foreach ($industry['bullets'] as $bullet): ?>
            <li><?php echo htmlspecialchars($bullet); ?></li>
            <?php endforeach; ?>
          </ul>
          <a href="/<?php echo $slug; ?>.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more &rarr;</a>
        </div>
      </article>
      <?php endforeach; ?>

      <?php foreach ($industries as $slug => $industry): ?>
      <?php foreach ($industry['subs'] as $sub => $card): ?>
      <article class="service-detail-card" data-level="sub" data-tags="<?php echo $slug; ?>" data-subs="<?php echo $sub; ?>" hidden>
        <div class="service-detail-media">
          <a href="/<?php echo $slug; ?>.php"><img src="<?php echo industry_image($industry, $sub_images[$sub]); ?>" alt="<?php echo htmlspecialchars($industry['name'] . ' ' . $industry_subs[$sub]); ?>" loading="lazy"></a>
        </div>
        <div class="service-detail-body">
          <p class="service-detail-kicker"><?php echo htmlspecialchars($industry['name']); ?></p>
          <h2><a href="/<?php echo $slug; ?>.php"><?php echo htmlspecialchars($industry_subs[$sub]); ?></a></h2>
          <p><?php echo htmlspecialchars($card[0]); ?></p>
          <ul>
            <?php foreach ($card[1] as $bullet): ?>
            <li><?php echo htmlspecialchars($bullet); ?></li>
            <?php endforeach; ?>
          </ul>
          <a href="/<?php echo $slug; ?>.php" class="text-link-blue" style="display:inline-block;margin-top:12px">Learn more &rarr;</a>
        </div>
      </article>
      <?php endforeach; ?>
      <?php endforeach; ?>
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
      <?php foreach ($industry_faqs as $i => $faq): ?>
      <div class="faq-item<?php echo $i === 0 ? ' is-open' : ''; ?>">
        <button class="faq-trigger" type="button" aria-expanded="<?php echo $i === 0 ? 'true' : 'false'; ?>">
          <span class="faq-num"><?php echo sprintf('%02d', $i + 1); ?></span>
          <span class="faq-question"><?php echo htmlspecialchars($faq[0]); ?></span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region"><div class="faq-panel-inner"><p><?php echo htmlspecialchars($faq[1]); ?></p></div></div>
      </div>
      <?php endforeach; ?>
    </div>
    <div class="faq-all-wrap reveal">
      <a href="/faqs.php" class="btn btn-lime faq-all-btn">View all FAQs <span aria-hidden="true">&rarr;</span></a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
