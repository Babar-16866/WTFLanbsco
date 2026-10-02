<?php
$page_title = 'Graphic Design | WTF Labs';
$page_description = 'Visual identity, brand assets, and marketing creatives that look sharp and stay on-brand.';
$current_page = 'services';
include __DIR__ . '/includes/header.php';
?>

<?php
$banner_breadcrumb = 'Graphic Design';
$banner_kicker = 'Service';
$banner_h1 = 'Brand &amp; graphic design that looks <span class="about-hero-accent">sharp</span>';
$banner_lead = 'Visual identity, brand assets, and marketing creatives that look sharp and stay on-brand.';
$banner_primary_label = 'Get a quote';
$banner_secondary_label = 'See our work';
$banner_image = '/assets/images/service-graphic-design.jpg';
$banner_float1 = '/assets/images/excel-branding.webp';
$banner_float2 = '/assets/images/branding-2.webp';
$banner_card = 'Identity systems that ship on-brand.';
include __DIR__ . '/includes/page-banner.php';
?>

<section class="svc-section svc-work">
  <div class="container">
    <div class="svc-section-head reveal">
      <p class="svc-kicker"><span></span> Selected work</p>
      <h2>Graphic design that works in the <span class="heading-accent">real world</span></h2>
      <p>Brand systems and campaign creatives built for clarity, recognition, and reuse across every channel.</p>
    </div>
    <div class="svc-cases reveal">
      <article class="svc-case">
        <div class="svc-case-media">
          <img loading="lazy" src="/assets/images/service-graphic-design.jpg" alt="Global Leathers">
        </div>
        <div class="svc-case-body">
          <p class="svc-case-meta">USA · Brand &amp; web</p>
          <h3>Global Leathers</h3>
          <p>A premium visual system that strengthened brand presence and gave the company a clearer foundation for lead generation.</p>
        </div>
      </article>
      <article class="svc-case">
        <div class="svc-case-media">
          <img loading="lazy" src="/assets/images/excel-branding.webp" alt="Brand campaign kit">
        </div>
        <div class="svc-case-body">
          <p class="svc-case-meta">Multi-channel</p>
          <h3>Brand campaign kit</h3>
          <p>Logo, color, type, and campaign templates designed so marketing can ship on-brand assets without redesign every time.</p>
        </div>
      </article>
      <article class="svc-case">
        <div class="svc-case-media">
          <img loading="lazy" src="/assets/images/mockup-2.webp" alt="Pitch &amp; product decks">
        </div>
        <div class="svc-case-body">
          <p class="svc-case-meta">B2B</p>
          <h3>Pitch &amp; product decks</h3>
          <p>Investor and sales decks that feel as polished as the product - structured for storytelling and conversion.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<section class="svc-section svc-process">
  <div class="container">
    <div class="svc-section-head reveal">
      <p class="svc-kicker"><span></span> Process</p>
      <h2>Graphic design: from discovery to <span class="heading-accent heading-accent--lime">delivery</span></h2>
      <p>We handle every stage - strategy, craft, delivery, and follow-through - as one senior team.</p>
    </div>
    <div class="svc-process-grid reveal">
      <article class="svc-process-card">
        <span class="svc-process-num">01</span>
        <h3>Discovery → Direction</h3>
        <p>We align on brand goals, audience, and competitive context before a single pixel is drawn.</p>
      </article>
      <article class="svc-process-card">
        <span class="svc-process-num">02</span>
        <h3>System design</h3>
        <p>Logos, type, color, and component rules that scale from social posts to sales decks.</p>
      </article>
      <article class="svc-process-card">
        <span class="svc-process-num">03</span>
        <h3>Campaign creatives</h3>
        <p>Channel-ready assets with clear hierarchy, proof, and calls to action.</p>
      </article>
      <article class="svc-process-card">
        <span class="svc-process-num">04</span>
        <h3>Handoff &amp; kit</h3>
        <p>Organized files, usage guidelines, and templates your team can own.</p>
      </article>
    </div>
  </div>
</section>

<section class="svc-section svc-excellence">
  <div class="container">
    <div class="svc-excellence-layout reveal">
      <div class="svc-excellence-copy">
        <p class="svc-kicker"><span></span> Excellence</p>
        <h2>End-to-end brand <span class="heading-accent">excellence</span></h2>
        <p>You get a visual system that fits your brand and supports marketing - consistent on web, social, and print, with assets ready for the next campaign.</p>
        <p>We craft graphic systems that make your brand instantly recognizable - from logos and brand kits to campaign creatives and pitch decks. Every asset is designed for consistency across web, social, and print.</p>
        <ul class="why-feature-list">
          <li>Brand kits, logos &amp; visual systems</li>
          <li>Social, print &amp; campaign creatives</li>
          <li>Presentation and pitch decks</li>
        </ul>
        <a href="/contact.php" class="btn btn-lime" style="margin-top:20px">Start a project</a>
      </div>
      <div class="svc-excellence-visual">
        <div class="svc-excellence-visual-main">
          <img loading="lazy" src="/assets/images/service-graphic-design.jpg" alt="">
        </div>
        <div class="svc-excellence-chip">
          <span class="svc-excellence-chip-dot"></span>
          <p>Brand kits · Campaigns · Decks</p>
        </div>
        <div class="svc-excellence-float svc-excellence-float--1">
          <img loading="lazy" src="/assets/images/excel-branding.webp" alt="">
        </div>
        <div class="svc-excellence-float svc-excellence-float--2">
          <img loading="lazy" src="/assets/images/branding-1.webp" alt="">
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
        <h2>A design team that thinks <span class="heading-accent">like partners</span></h2>
        <p>A mature team that takes responsibility, keeps everything transparent, and stays one step ahead in communication.</p>
      </div>
      <ul class="svc-team-list">
        <li>Senior designers who own craft and deadlines</li>
        <li>Clear weekly updates on what shipped and what is next</li>
        <li>Structured feedback loops - no endless revision chaos</li>
        <li>Files organized for developers and marketers alike</li>
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
      <a href="/services.php#web-design" class="excel-tag">Web Design</a>
      <a href="/services.php#web-development" class="excel-tag">Web Development</a>
      <a href="/services.php#seo" class="excel-tag">SEO</a>
      <a href="/services.php#social-media-advertising" class="excel-tag">Social Media Advertising</a>
      <a href="/services.php#google-ads" class="excel-tag">Google Ads</a>
      <a href="/services.php#digital-marketing" class="excel-tag">Digital Marketing</a>
    </div>
    <div class="services-cta-band reveal" style="margin-top:40px">
      <div>
        <h3>Let's discuss your next Graphic Design project</h3>
        <p>We'll help you define the right next step.</p>
      </div>
      <a href="/contact.php" class="btn btn-lime btn-lg">Get a quote</a>
    </div>
  </div>
</section>

<section class="faq-section" id="faqs">
  <div class="container">
    <div class="section-header reveal">
      <p class="subheading">Graphic Design FAQs</p>
      <h2>Questions about <span class="heading-accent">Graphic Design</span></h2>
    </div>
    <div class="faq-list reveal">
      <div class="faq-item is-open">
        <button class="faq-trigger" type="button" aria-expanded="true">
          <span class="faq-num">01</span>
          <span class="faq-question">What is included in a graphic design engagement?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region">
          <div class="faq-panel-inner">
            <p>Brand kits, logo systems, campaign creatives, social templates, and pitch decks - scoped to your channels and reuse needs.</p>
          </div>
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">02</span>
          <span class="faq-question">Will we get editable source files?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region">
          <div class="faq-panel-inner">
            <p>Yes. You receive organized source files and usage guidelines so your team can keep producing on-brand assets.</p>
          </div>
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">03</span>
          <span class="faq-question">How many revision rounds are included?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region">
          <div class="faq-panel-inner">
            <p>We define revision rounds in the proposal. Structured feedback sessions keep iterations productive instead of endless.</p>
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
