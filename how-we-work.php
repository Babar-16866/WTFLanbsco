<?php
$page_title = 'How We Work | WTF Labs';
$page_description = 'No chaos. No scope creep. A 6-process system that delivers consistent results - WTF Labs.';
$current_page = 'how-we-work';
include __DIR__ . '/includes/header.php';

$processes = [
  ['Discovery', 'Clear scope, budget, deadlines, and a roadmap from idea to launch.', 'Clarity on cost, timeline, and what it takes to get there - plus what we need from you along the way.'],
  ['Research', 'Wireframes based on user goals and friction - built with JTBD.', 'Make sure people get it and want in - structure and copy rooted in real motivation.'],
  ['Design', 'Unique, memorable visuals that align brand and user needs.', 'Spark interest, build trust, and make it memorable across every breakpoint.'],
  ['Dev', 'Fast code, smart SEO, and interactions that make your site feel alive.', 'Lean performance with thoughtful SEO prep - not a template feeling.'],
  ['Integrations', 'Clean CMS, third-party tools, and an SEO-safe launch.', 'Everything works - from CMS to CRM, analytics, and email - without launch chaos.'],
  ['Follow-through', '3 months of improvements, testing, and hands-on support.', 'Prove the investment in real numbers - monitor, refine, and improve conversions.'],
];
?>

<?php
$banner_kicker = 'How we work';
$banner_h1 = 'No chaos. No scope creep. A <span class="about-hero-accent">6-process</span> system.';
$banner_lead = 'Since 2018 we have been refining the same senior team and the same system — to build websites, platforms, and apps that pay off.';
$banner_primary_label = 'Start a project';
$banner_secondary_label = 'See our work';
$banner_image = '/assets/images/people-workshop.jpg';
$banner_float1 = '/assets/images/why-craft.jpg';
$banner_float2 = '/assets/images/people-collab.jpg';
$banner_card = 'Discovery to follow-through. Same crew.';
include __DIR__ . '/includes/page-banner.php';
?>

<section class="page-section">
  <div class="container">
    <div class="process-intro reveal">
      <p class="svc-kicker"><span></span> Method</p>
      <h2>Refined over years of <span class="heading-accent">real client work</span></h2>
      <p>One team. Zero churn. Polishing the same system to build clear, memorable, and scalable digital products.</p>
    </div>

    <div class="process-grid reveal">
      <?php foreach ($processes as $i => $p): ?>
      <article class="process-card" id="process-<?php echo $i + 1; ?>">
        <span class="process-card-num"><?php echo str_pad((string) ($i + 1), 2, '0', STR_PAD_LEFT); ?></span>
        <h3><?php echo htmlspecialchars($p[0]); ?></h3>
        <p class="process-card-get"><strong>What you get:</strong> <?php echo htmlspecialchars($p[1]); ?></p>
        <p><?php echo htmlspecialchars($p[2]); ?></p>
      </article>
      <?php endforeach; ?>
    </div>

    <div class="process-promise reveal">
      <h2>When you work with us, you do not get &ldquo;random good.&rdquo;</h2>
      <p>You get reliable, consistent results - websites and platforms that are clear, intuitive, memorable, and easy to manage.</p>
    </div>

    <div class="about-quotes reveal">
      <h2>Real feedback from recent work</h2>
      <div class="about-quotes-grid">
        <blockquote>
          <p>&ldquo;They applied a clear method to complex needs - and nailed it.&rdquo;</p>
          <footer><strong>Wills Francis</strong><span>Founder</span></footer>
        </blockquote>
        <blockquote>
          <p>&ldquo;They turned complex tech into a clear, confident experience.&rdquo;</p>
          <footer><strong>Cofinity-X team</strong><span>Tech &amp; data platform</span></footer>
        </blockquote>
        <blockquote>
          <p>&ldquo;Project management was clear and collaborative.&rdquo;</p>
          <footer><strong>Johannes Schenk</strong><span>Co-founder</span></footer>
        </blockquote>
      </div>
    </div>

    <div class="services-cta-band reveal">
      <div>
        <h3>Let's discuss your next website</h3>
        <p>We'll help you define the right next step.</p>
      </div>
      <a href="/contact.php" class="btn btn-lime btn-lg">Get a quote</a>
    </div>
  </div>
</section>

<section class="faq-section" id="process-faq">
  <div class="container">
    <div class="section-header reveal">
      <p class="subheading">Process FAQs</p>
      <h2>Still <span class="heading-accent">have questions?</span></h2>
    </div>
    <div class="faq-list reveal">
      <div class="faq-item is-open">
        <button class="faq-trigger" type="button" aria-expanded="true">
          <span class="faq-num">01</span>
          <span class="faq-question">How many design concepts do you provide?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region"><div class="faq-panel-inner"><p>With a brand book: one strong direction with up to three variations. Without: we can explore three distinct concepts, then develop the selected one.</p></div></div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">02</span>
          <span class="faq-question">Do you handle SEO?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region"><div class="faq-panel-inner"><p>Yes - meta, OG tags, sitemaps, redirects, alt text, and SEO-friendly code on every project.</p></div></div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">03</span>
          <span class="faq-question">What happens after 3 months of support?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region"><div class="faq-panel-inner"><p>You get a clear report on what improved. Larger new pages need a separate estimate; retainers are available.</p></div></div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">04</span>
          <span class="faq-question">Can you create structure and copy?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region"><div class="faq-panel-inner"><p>Yes. Research, IA, wireframes, prototypes, and copywriting can be included.</p></div></div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">05</span>
          <span class="faq-question">How are payments structured?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region"><div class="faq-panel-inner"><p>Full-cycle: 30% upfront, 40% after design, 30% on completion. Smaller projects: 50/50.</p></div></div>
      </div>
    </div>
    <div class="faq-all-wrap reveal">
      <a href="/faqs.php" class="btn btn-lime faq-all-btn">View all FAQs <span aria-hidden="true">&rarr;</span></a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
