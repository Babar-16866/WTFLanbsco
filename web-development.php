<?php
$page_title = 'Web Development | WTF Labs';
$page_description = 'Fast, reliable websites and web apps engineered for performance and growth.';
$current_page = 'services';
include __DIR__ . '/includes/header.php';
?>

<?php
$banner_breadcrumb = 'Web Development';
$banner_kicker = 'Service';
$banner_h1 = 'Web development that is <span class="about-hero-accent">fast</span>, clean, and scalable';
$banner_lead = 'Performance-minded builds on Webflow, WordPress, Shopify, React, and Laravel — with SEO baked in.';
$banner_primary_label = 'Get a quote';
$banner_secondary_label = 'See our work';
$banner_image = '/assets/images/mockup-main.webp';
$banner_float1 = '/assets/images/excel-landing.webp';
$banner_float2 = '/assets/images/device-2.webp';
$banner_card = 'Code that ships clean and stays fast.';
include __DIR__ . '/includes/page-banner.php';
?>

<section class="svc-section svc-work">
  <div class="container">
    <div class="svc-section-head reveal">
      <p class="svc-kicker"><span></span> Selected work</p>
      <h2>Development that ships <span class="heading-accent">and scales</span></h2>
      <p>CMS sites, platforms, and integrations engineered for speed, SEO, and day-to-day ownership.</p>
    </div>
    <div class="svc-cases reveal">
      <article class="svc-case">
        <div class="svc-case-media">
          <img loading="lazy" src="/assets/images/mockup-1.webp" alt="Prosperity platforms">
        </div>
        <div class="svc-case-body">
          <p class="svc-case-meta">USA · Enterprise web</p>
          <h3>Prosperity platforms</h3>
          <p>Large content systems with dynamic pages - structured so marketing can manage without developer bottlenecks.</p>
        </div>
      </article>
      <article class="svc-case">
        <div class="svc-case-media">
          <img loading="lazy" src="/assets/images/excel-mobile.webp" alt="Fulfillment for Europe">
        </div>
        <div class="svc-case-body">
          <p class="svc-case-meta">EU · Corporate + CMS</p>
          <h3>Fulfillment for Europe</h3>
          <p>Modern corporate site with a usable knowledge base and clean content operations.</p>
        </div>
      </article>
      <article class="svc-case">
        <div class="svc-case-media">
          <img loading="lazy" src="/assets/images/mobile-app.webp" alt="SolvoWorld">
        </div>
        <div class="svc-case-body">
          <p class="svc-case-meta">Global · Logistics</p>
          <h3>SolvoWorld</h3>
          <p>Restructured web presence with clearer UX and full content control for the internal team.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<section class="svc-section svc-process">
  <div class="container">
    <div class="svc-section-head reveal">
      <p class="svc-kicker"><span></span> Process</p>
      <h2>Web development: from discovery to <span class="heading-accent heading-accent--lime">launch</span></h2>
      <p>We handle every stage - strategy, craft, delivery, and follow-through - as one senior team.</p>
    </div>
    <div class="svc-process-grid reveal">
      <article class="svc-process-card">
        <span class="svc-process-num">01</span>
        <h3>Discovery → Architecture</h3>
        <p>Scope, stack, and integration map before code starts.</p>
      </article>
      <article class="svc-process-card">
        <span class="svc-process-num">02</span>
        <h3>Build → Integrate</h3>
        <p>Senior engineering with CMS, CRM, analytics, payments, and APIs.</p>
      </article>
      <article class="svc-process-card">
        <span class="svc-process-num">03</span>
        <h3>Quality &amp; SEO</h3>
        <p>Performance, accessibility, redirects, and clean scalable code.</p>
      </article>
      <article class="svc-process-card">
        <span class="svc-process-num">04</span>
        <h3>Follow-through</h3>
        <p>Launch support and three months of iteration when needed.</p>
      </article>
    </div>
  </div>
</section>

<section class="svc-section svc-excellence">
  <div class="container">
    <div class="svc-excellence-layout reveal">
      <div class="svc-excellence-copy">
        <p class="svc-kicker"><span></span> Excellence</p>
        <h2>End-to-end development <span class="heading-accent">excellence</span></h2>
        <p>You get a product that is fast, maintainable, and connected to your marketing stack - not a fragile handoff.</p>
        <p>We build websites that load fast, scale cleanly, and integrate with the tools your team already uses. From CMS sites to custom applications, development is structured for long-term maintainability.</p>
        <ul class="why-feature-list">
          <li>Custom sites &amp; CMS builds</li>
          <li>Integrations, forms &amp; analytics</li>
          <li>Performance, SEO &amp; security foundations</li>
        </ul>
        <a href="/contact.php" class="btn btn-lime" style="margin-top:20px">Start a project</a>
      </div>
      <div class="svc-excellence-visual">
        <div class="svc-excellence-visual-main">
          <img loading="lazy" src="/assets/images/mockup-main.webp" alt="">
        </div>
        <div class="svc-excellence-chip">
          <span class="svc-excellence-chip-dot"></span>
          <p>Build · Integrate · Ship</p>
        </div>
        <div class="svc-excellence-float svc-excellence-float--1">
          <img loading="lazy" src="/assets/images/excel-landing.webp" alt="">
        </div>
        <div class="svc-excellence-float svc-excellence-float--2">
          <img loading="lazy" src="/assets/images/device-2.webp" alt="">
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
        <h2>Engineering team for corporate & <span class="heading-accent">product web</span></h2>
        <p>A mature team that takes responsibility, keeps everything transparent, and stays one step ahead in communication.</p>
      </div>
      <ul class="svc-team-list">
        <li>Experienced PMs and focused engineering pods</li>
        <li>Join your workflow or own delivery end to end</li>
        <li>Transparent boards and weekly milestone reports</li>
        <li>Clear decision logs by email for key changes</li>
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
      <a href="/services.php#graphic-design" class="excel-tag">Graphic Design</a>
      <a href="/services.php#web-design" class="excel-tag">Web Design</a>
      <a href="/services.php#seo" class="excel-tag">SEO</a>
      <a href="/services.php#social-media-advertising" class="excel-tag">Social Media Advertising</a>
      <a href="/services.php#google-ads" class="excel-tag">Google Ads</a>
      <a href="/services.php#digital-marketing" class="excel-tag">Digital Marketing</a>
    </div>
    <div class="services-cta-band reveal" style="margin-top:40px">
      <div>
        <h3>Let's discuss your next Web Development project</h3>
        <p>We'll help you define the right next step.</p>
      </div>
      <a href="/contact.php" class="btn btn-lime btn-lg">Get a quote</a>
    </div>
  </div>
</section>

<section class="faq-section" id="faqs">
  <div class="container">
    <div class="section-header reveal">
      <p class="subheading">Web Development FAQs</p>
      <h2>Questions about <span class="heading-accent">Web Development</span></h2>
    </div>
    <div class="faq-list reveal">
      <div class="faq-item is-open">
        <button class="faq-trigger" type="button" aria-expanded="true">
          <span class="faq-num">01</span>
          <span class="faq-question">Which CMS options do you support?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region">
          <div class="faq-panel-inner">
            <p>Webflow, WordPress, HubSpot, Shopify, headless CMS like Strapi, and custom stacks when needed.</p>
          </div>
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">02</span>
          <span class="faq-question">Can you integrate our CRM and tools?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region">
          <div class="faq-panel-inner">
            <p>Yes - analytics, CRM, payments, email, and most third-party APIs with documentation.</p>
          </div>
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">03</span>
          <span class="faq-question">Do you provide post-launch support?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region">
          <div class="faq-panel-inner">
            <p>Yes. Launch support and optional three-month follow-through for fixes and iteration.</p>
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
