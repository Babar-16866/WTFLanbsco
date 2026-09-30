<?php
$page_title = 'Web Design | WTF Labs';
$page_description = 'Clear, modern website design that builds trust and turns visitors into leads.';
$current_page = 'services';
include __DIR__ . '/includes/header.php';
?>

<?php
$banner_breadcrumb = 'Web Design';
$banner_kicker = 'Service';
$banner_h1 = 'Web design that earns <span class="about-hero-accent">trust</span> and converts';
$banner_lead = 'Clear structure, sharp UI, and conversion-minded layouts for B2B companies ready to grow.';
$banner_primary_label = 'Get a quote';
$banner_secondary_label = 'See our work';
$banner_image = '/assets/images/mockup-main.webp';
$banner_float1 = '/assets/images/excel-landing.webp';
$banner_float2 = '/assets/images/excel-uiux.webp';
$banner_card = 'Design that looks sharp and sells.';
include __DIR__ . '/includes/page-banner.php';
?>

<section class="svc-section svc-work">
  <div class="container">
    <div class="svc-section-head reveal">
      <p class="svc-kicker"><span></span> Selected work</p>
      <h2>Web design built around <span class="heading-accent">business goals</span></h2>
      <p>From corporate sites to launch pages - interfaces designed to earn trust and move buyers forward.</p>
    </div>
    <div class="svc-cases reveal">
      <article class="svc-case">
        <div class="svc-case-media">
          <img src="/assets/images/mockup-main.webp" alt="TorchSensors">
        </div>
        <div class="svc-case-body">
          <p class="svc-case-meta">USA · Product launch</p>
          <h3>TorchSensors</h3>
          <p>An award-ready launch experience that helped a new product earn trust and drive day-one preorders.</p>
        </div>
      </article>
      <article class="svc-case">
        <div class="svc-case-media">
          <img src="/assets/images/mockup-3.webp" alt="Cofinity-X">
        </div>
        <div class="svc-case-body">
          <p class="svc-case-meta">Germany · B2B tech</p>
          <h3>Cofinity-X</h3>
          <p>Complex systems explained clearly - authority design for partners, buyers, and onboarding flows.</p>
        </div>
      </article>
      <article class="svc-case">
        <div class="svc-case-media">
          <img src="/assets/images/excel-uiux.webp" alt="Elvetiko">
        </div>
        <div class="svc-case-body">
          <p class="svc-case-meta">Cyprus · Healthcare</p>
          <h3>Elvetiko</h3>
          <p>A calm medical website that clarified the patient journey and strengthened trust at every step.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<section class="svc-section svc-process">
  <div class="container">
    <div class="svc-section-head reveal">
      <p class="svc-kicker"><span></span> Process</p>
      <h2>Web design: from discovery to <span class="heading-accent heading-accent--lime">launch</span></h2>
      <p>We handle every stage - strategy, craft, delivery, and follow-through - as one senior team.</p>
    </div>
    <div class="svc-process-grid reveal">
      <article class="svc-process-card">
        <span class="svc-process-num">01</span>
        <h3>Discovery → Research</h3>
        <p>Audience interviews, JTBD insights, wireframes, and copy validated before visual design.</p>
      </article>
      <article class="svc-process-card">
        <span class="svc-process-num">02</span>
        <h3>UI design</h3>
        <p>Original concepts, responsive layouts, interactive prototypes, and a reusable UI kit.</p>
      </article>
      <article class="svc-process-card">
        <span class="svc-process-num">03</span>
        <h3>Build-ready handoff</h3>
        <p>Specs, components, and states that developers can implement without guesswork.</p>
      </article>
      <article class="svc-process-card">
        <span class="svc-process-num">04</span>
        <h3>Follow-through</h3>
        <p>Post-launch review of behaviour and conversion - iterate what matters.</p>
      </article>
    </div>
  </div>
</section>

<section class="svc-section svc-excellence">
  <div class="container">
    <div class="svc-excellence-layout reveal">
      <div class="svc-excellence-copy">
        <p class="svc-kicker"><span></span> Excellence</p>
        <h2>End-to-end web design <span class="heading-accent">excellence</span></h2>
        <p>You get a website that fits your brand and supports marketing - with clear hierarchy, proof, and CTAs tuned to your goals.</p>
        <p>Our web design work focuses on clarity, credibility, and conversion. We map user journeys, design high-impact layouts, and deliver interfaces that feel premium on every device.</p>
        <ul class="why-feature-list">
          <li>UI/UX for company &amp; product sites</li>
          <li>Landing pages built to convert</li>
          <li>Responsive, accessible layouts</li>
        </ul>
        <a href="/contact.php" class="btn btn-lime" style="margin-top:20px">Start a project</a>
      </div>
      <div class="svc-excellence-visual">
        <div class="svc-excellence-visual-main">
          <img src="/assets/images/mockup-main.webp" alt="">
        </div>
        <div class="svc-excellence-chip">
          <span class="svc-excellence-chip-dot"></span>
          <p>UI · Landing pages · Systems</p>
        </div>
        <div class="svc-excellence-float svc-excellence-float--1">
          <img src="/assets/images/excel-uiux.webp" alt="">
        </div>
        <div class="svc-excellence-float svc-excellence-float--2">
          <img src="/assets/images/torch-1.webp" alt="">
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
        <h2>Expert design team for <span class="heading-accent">B2B websites</span></h2>
        <p>A mature team that takes responsibility, keeps everything transparent, and stays one step ahead in communication.</p>
      </div>
      <ul class="svc-team-list">
        <li>Senior UX/UI paired with clear project ownership</li>
        <li>Real-time visibility into progress and decisions</li>
        <li>Weekly reports: shipped, in progress, blocked</li>
        <li>Daily communication in Slack or your preferred channel</li>
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
      <h2>Explore more <span class="heading-accent">services</span></h2>
    </div>
    <div class="excel-tags reveal">
      <a href="/graphic-design.php" class="excel-tag">Graphic Design</a>
      <a href="/web-development.php" class="excel-tag">Web Development</a>
      <a href="/seo.php" class="excel-tag">SEO</a>
      <a href="/social-media-advertising.php" class="excel-tag">Social Media Advertising</a>
      <a href="/google-ads.php" class="excel-tag">Google Ads</a>
      <a href="/digital-marketing.php" class="excel-tag">Digital Marketing</a>
    </div>
    <div class="services-cta-band reveal" style="margin-top:40px">
      <div>
        <h3>Let's discuss your next Web Design project</h3>
        <p>We'll help you define the right next step.</p>
      </div>
      <a href="/contact.php" class="btn btn-lime btn-lg">Get a quote</a>
    </div>
  </div>
</section>

<section class="faq-section" id="faqs">
  <div class="container">
    <div class="section-header reveal">
      <p class="subheading">Web Design FAQs</p>
      <h2>Questions about <span class="heading-accent">Web Design</span></h2>
    </div>
    <div class="faq-list reveal">
      <div class="faq-item is-open">
        <button class="faq-trigger" type="button" aria-expanded="true">
          <span class="faq-num">01</span>
          <span class="faq-question">Do you design mobile and desktop?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region">
          <div class="faq-panel-inner">
            <p>Yes. Every layout is designed for desktop, tablet, and mobile with accessible hierarchy and clear CTAs.</p>
          </div>
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">02</span>
          <span class="faq-question">Can you work from our brand book?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region">
          <div class="faq-panel-inner">
            <p>Yes. If you have a brand system we extend it into UI. If not, we can define visual direction first.</p>
          </div>
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">03</span>
          <span class="faq-question">Do you hand off to developers?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region">
          <div class="faq-panel-inner">
            <p>Yes - specs, components, and states so engineering can implement without guesswork.</p>
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

<?php include __DIR__ . '/includes/footer.php'; ?>
