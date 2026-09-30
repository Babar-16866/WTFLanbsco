<?php
/**
 * Industry inner page - same layout as the service inner pages.
 * Set $industry_slug before including.
 */
$industries = require __DIR__ . '/industries-data.php';
$industry = $industries[$industry_slug];
$name = $industry['name'];
$label = ucfirst($industry['label']);

$page_title = $name . ' | WTF Labs';
$page_description = $industry['short'];
$current_page = 'industries';
include __DIR__ . '/header.php';

$industry_faqs = array_merge($industry['faqs'], [
  ['How much does a website project cost?', 'Website projects start at $10,000. Most full-cycle B2B website engagements fall between $25,000 and $50,000. A focused landing page or smaller corporate site may fall in the $10,000–$20,000 range. Complex platforms may exceed $50,000. After the first conversation we give a realistic estimate.'],
  ['Which platform and technology stack should we use?', 'We recommend based on your business, content, integrations, and long-term plans. We build with Webflow, WordPress, Shopify, HubSpot, React, Vue, Node.js, Laravel, and Strapi. If you already have technical requirements, we work within them.'],
  ['Can you move faster if we have a hard deadline?', 'Yes, when the deadline is realistic and trade-offs are understood. We can expand the team, run design and development in parallel, and prioritize what is required for launch - then refine after go-live.'],
]);
?>

<?php
$banner_crumb_label = 'Industries';
$banner_crumb_href = '/industries.php';
$banner_breadcrumb = $name;
$banner_kicker = 'Industry';
$banner_h1 = htmlspecialchars($industry['h1']) . ' <span class="about-hero-accent">' . htmlspecialchars($industry['h1_accent']) . '</span>';
$banner_lead = $industry['lead'];
$banner_primary_label = 'Get a quote';
$banner_secondary_label = 'See our work';
$banner_image = industry_image($industry, 1);
$banner_float1 = industry_image($industry, 2);
$banner_float2 = industry_image($industry, 3);
$banner_card = $industry['card'];
include __DIR__ . '/page-banner.php';
?>

<section class="svc-section svc-work">
  <div class="container">
    <div class="svc-section-head reveal">
      <p class="svc-kicker"><span></span> Selected work</p>
      <h2><?php echo htmlspecialchars($label); ?> marketing that works in the <span class="heading-accent">real world</span></h2>
      <p><?php echo htmlspecialchars($industry['work_lead']); ?></p>
    </div>
    <div class="svc-cases reveal">
      <?php foreach ($industry['cases'] as $i => $case): ?>
      <article class="svc-case">
        <div class="svc-case-media">
          <img src="<?php echo industry_image($industry, $i + 2); ?>" alt="<?php echo htmlspecialchars($case[1]); ?>">
        </div>
        <div class="svc-case-body">
          <p class="svc-case-meta"><?php echo htmlspecialchars($case[0]); ?></p>
          <h3><?php echo htmlspecialchars($case[1]); ?></h3>
          <p><?php echo htmlspecialchars($case[2]); ?></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="svc-section svc-process">
  <div class="container">
    <div class="svc-section-head reveal">
      <p class="svc-kicker"><span></span> Process</p>
      <h2><?php echo htmlspecialchars($label); ?>: from discovery to <span class="heading-accent heading-accent--lime">booked jobs</span></h2>
      <p>We handle every stage - strategy, craft, delivery, and follow-through - as one senior team.</p>
    </div>
    <div class="svc-process-grid reveal">
      <?php foreach ($industry['process'] as $i => $step): ?>
      <article class="svc-process-card">
        <span class="svc-process-num"><?php echo sprintf('%02d', $i + 1); ?></span>
        <h3><?php echo htmlspecialchars($step[0]); ?></h3>
        <p><?php echo htmlspecialchars($step[1]); ?></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="svc-section svc-excellence">
  <div class="container">
    <div class="svc-excellence-layout reveal">
      <div class="svc-excellence-copy">
        <p class="svc-kicker"><span></span> Excellence</p>
        <h2>End-to-end <?php echo htmlspecialchars($industry['label']); ?> <span class="heading-accent">growth</span></h2>
        <?php foreach ($industry['excel'] as $paragraph): ?>
        <p><?php echo htmlspecialchars($paragraph); ?></p>
        <?php endforeach; ?>
        <ul class="why-feature-list">
          <?php foreach ($industry['bullets'] as $bullet): ?>
          <li><?php echo htmlspecialchars($bullet); ?></li>
          <?php endforeach; ?>
        </ul>
        <a href="/contact.php" class="btn btn-lime" style="margin-top:20px">Start a project</a>
      </div>
      <div class="svc-excellence-visual">
        <div class="svc-excellence-visual-main">
          <img src="<?php echo industry_image($industry, 4); ?>" alt="">
        </div>
        <div class="svc-excellence-chip">
          <span class="svc-excellence-chip-dot"></span>
          <p><?php echo htmlspecialchars($industry['chip']); ?></p>
        </div>
        <div class="svc-excellence-float svc-excellence-float--1">
          <img src="<?php echo industry_image($industry, 1); ?>" alt="">
        </div>
        <div class="svc-excellence-float svc-excellence-float--2">
          <img src="<?php echo industry_image($industry, 3); ?>" alt="">
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
include __DIR__ . '/testimonialslider.php';
?>

<section class="svc-section svc-more">
  <div class="container">
    <div class="svc-section-head reveal">
      <p class="svc-kicker"><span></span> Explore</p>
      <h2>Explore more <span class="heading-accent">industries</span></h2>
    </div>
    <div class="excel-tags reveal">
      <?php foreach ($industries as $slug => $other): ?>
      <?php if ($slug === $industry_slug) continue; ?>
      <a href="/<?php echo $slug; ?>.php" class="excel-tag"><?php echo htmlspecialchars($other['name']); ?></a>
      <?php endforeach; ?>
    </div>
    <div class="services-cta-band reveal" style="margin-top:40px">
      <div>
        <h3>Let's discuss growing your <?php echo htmlspecialchars($industry['label']); ?> business</h3>
        <p>We'll help you define the right next step.</p>
      </div>
      <a href="/contact.php" class="btn btn-lime btn-lg">Get a quote</a>
    </div>
  </div>
</section>

<section class="faq-section" id="faqs">
  <div class="container">
    <div class="section-header reveal">
      <p class="subheading"><?php echo htmlspecialchars($name); ?> FAQs</p>
      <h2>Questions about <span class="heading-accent"><?php echo htmlspecialchars($name); ?></span></h2>
    </div>
    <div class="faq-list reveal">
      <?php foreach ($industry_faqs as $i => $faq): ?>
      <div class="faq-item<?php echo $i === 0 ? ' is-open' : ''; ?>">
        <button class="faq-trigger" type="button" aria-expanded="<?php echo $i === 0 ? 'true' : 'false'; ?>">
          <span class="faq-num"><?php echo sprintf('%02d', $i + 1); ?></span>
          <span class="faq-question"><?php echo htmlspecialchars($faq[0]); ?></span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region">
          <div class="faq-panel-inner">
            <p><?php echo htmlspecialchars($faq[1]); ?></p>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <div class="faq-all-wrap reveal">
      <a href="/faqs.php" class="btn btn-lime faq-all-btn">View all FAQs <span aria-hidden="true">&rarr;</span></a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>
