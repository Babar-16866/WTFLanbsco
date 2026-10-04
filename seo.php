<?php
$page_title = 'SEO & Local Search for Home-Service Businesses | WTF Labs';
$page_description = 'Technical SEO, service pages, local search strategy, and content for home-service companies that want more qualified organic leads.';
$current_page = 'services';
include __DIR__ . '/includes/header.php';
?>

<?php
$banner_breadcrumb = 'SEO';
$banner_kicker = 'SEO + Local Search';
$banner_h1 = 'Be easier to find when homeowners are <span class="about-hero-accent">ready to hire.</span>';
$banner_lead = 'Technical SEO, service-area strategy, useful content, and conversion-focused pages built to increase qualified local visibility - not vanity traffic.';
$banner_primary_label = 'Get a Free SEO + Website Consultation';
$banner_secondary_label = 'See Our Work';
$banner_image = '/assets/images/service-seo.jpg';
$banner_float1 = '/assets/images/excel-landing.webp';
$banner_float2 = '/assets/images/excel-design-system.webp';
$banner_card = 'Rankings that turn into pipeline.';
include __DIR__ . '/includes/page-banner.php';
?>

<?php /*
<section class="svc-section svc-work">
  <div class="container">
    <div class="svc-section-head reveal">
      <p class="svc-kicker"><span></span> Selected work</p>
      <h2>SEO programs built for <span class="heading-accent">B2B growth</span></h2>
      <p>Technical health, intent-led content, and measurement that connects rankings to pipeline.</p>
    </div>
    <div class="svc-cases reveal">
      <article class="svc-case">
        <div class="svc-case-media">
          <img loading="lazy" src="/assets/images/mockup-3.webp" alt="Cofinity-X content system">
        </div>
        <div class="svc-case-body">
          <p class="svc-case-meta">Tech &amp; data</p>
          <h3>Cofinity-X content system</h3>
          <p>Authority content structure that makes complex offerings searchable and understandable.</p>
        </div>
      </article>
      <article class="svc-case">
        <div class="svc-case-media">
          <img loading="lazy" src="/assets/images/mockup-main.webp" alt="Corporate site SEO foundation">
        </div>
        <div class="svc-case-body">
          <p class="svc-case-meta">B2B</p>
          <h3>Corporate site SEO foundation</h3>
          <p>Meta, IA, internal linking, and performance fixes that prepare a site to rank and convert.</p>
        </div>
      </article>
      <article class="svc-case">
        <div class="svc-case-media">
          <img loading="lazy" src="/assets/images/service-seo.jpg" alt="Content roadmap">
        </div>
        <div class="svc-case-body">
          <p class="svc-case-meta">Ongoing</p>
          <h3>Content roadmap</h3>
          <p>Topic clusters mapped to buyer stages - briefs your team can execute consistently.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<section class="svc-section svc-process">
  <div class="container">
    <div class="svc-section-head reveal">
      <p class="svc-kicker"><span></span> Process</p>
      <h2>SEO: from audit to <span class="heading-accent">compounding growth</span></h2>
      <p>We handle every stage - strategy, craft, delivery, and follow-through - as one senior team.</p>
    </div>
    <div class="svc-process-grid reveal">
      <article class="svc-process-card">
        <span class="svc-process-num">01</span>
        <h3>Audit → Priorities</h3>
        <p>Technical, content, and competitor gaps ranked by impact.</p>
      </article>
      <article class="svc-process-card">
        <span class="svc-process-num">02</span>
        <h3>On-page &amp; IA</h3>
        <p>Titles, structure, internal links, and conversion-aware pages.</p>
      </article>
      <article class="svc-process-card">
        <span class="svc-process-num">03</span>
        <h3>Content engine</h3>
        <p>Keyword map, briefs, and publishing cadence.</p>
      </article>
      <article class="svc-process-card">
        <span class="svc-process-num">04</span>
        <h3>Measure &amp; iterate</h3>
        <p>Search Console, rankings, and lead quality reviews.</p>
      </article>
    </div>
  </div>
</section>

<section class="svc-section svc-excellence">
  <div class="container">
    <div class="svc-excellence-layout reveal">
      <div class="svc-excellence-copy">
        <p class="svc-kicker"><span></span> Excellence</p>
        <h2>SEO <span class="heading-accent">excellence</span> that supports marketing</h2>
        <p>You get a foundation that is crawlable, fast, and content-ready - then a plan that grows qualified organic traffic over time.</p>
        <p>SEO is treated as a growth system, not a one-time tweak. We fix technical foundations, align content with buyer intent, and build a roadmap that compounds organic traffic over time.</p>
        <ul class="why-feature-list">
          <li>Technical audits &amp; site health</li>
          <li>Keyword strategy &amp; on-page optimization</li>
          <li>Content plans that rank and convert</li>
        </ul>
        <a href="/contact.php" class="btn btn-lime" style="margin-top:20px">Start a project</a>
      </div>
      <div class="svc-excellence-visual">
        <div class="svc-excellence-visual-main">
          <img loading="lazy" src="/assets/images/service-seo.jpg" alt="">
        </div>
        <div class="svc-excellence-chip">
          <span class="svc-excellence-chip-dot"></span>
          <p>Technical · Content · Growth</p>
        </div>
        <div class="svc-excellence-float svc-excellence-float--1">
          <img loading="lazy" src="/assets/images/excel-landing.webp" alt="">
        </div>
        <div class="svc-excellence-float svc-excellence-float--2">
          <img loading="lazy" src="/assets/images/excel-design-system.webp" alt="">
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
        <h2>SEO paired with design <span class="heading-accent">& development</span></h2>
        <p>A mature team that takes responsibility, keeps everything transparent, and stays one step ahead in communication.</p>
      </div>
      <ul class="svc-team-list">
        <li>Recommendations your eng team can actually ship</li>
        <li>Clear reporting on traffic, rankings, and leads</li>
        <li>Coordination with content and paid channels</li>
        <li>No vanity metrics without business context</li>
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
      <a href="/services.php#web-development" class="excel-tag">Web Development</a>
      <a href="/services.php#social-media-advertising" class="excel-tag">Social Media Advertising</a>
      <a href="/services.php#google-ads" class="excel-tag">Google Ads</a>
      <a href="/services.php#digital-marketing" class="excel-tag">Digital Marketing</a>
    </div>
    <div class="services-cta-band reveal" style="margin-top:40px">
      <div>
        <h3>Let's discuss your next SEO project</h3>
        <p>We'll help you define the right next step.</p>
      </div>
      <a href="/contact.php" class="btn btn-lime btn-lg">Get a quote</a>
    </div>
  </div>
</section>

<section class="faq-section" id="faqs">
  <div class="container">
    <div class="section-header reveal">
      <p class="subheading">SEO FAQs</p>
      <h2>Questions <span class="heading-accent">about SEO</span></h2>
    </div>
    <div class="faq-list reveal">
      <div class="faq-item is-open">
        <button class="faq-trigger" type="button" aria-expanded="true">
          <span class="faq-num">01</span>
          <span class="faq-question">Is SEO a one-time project?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region">
          <div class="faq-panel-inner">
            <p>We start with foundations, then recommend an ongoing roadmap. SEO compounds with consistent content and technical hygiene.</p>
          </div>
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">02</span>
          <span class="faq-question">Do you write SEO content?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region">
          <div class="faq-panel-inner">
            <p>We can provide keyword maps, briefs, and content plans. Writing can be included or coordinated with your team.</p>
          </div>
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">03</span>
          <span class="faq-question">How do you report results?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region">
          <div class="faq-panel-inner">
            <p>Rankings, organic traffic, technical health, and lead quality - tied to business goals, not vanity metrics alone.</p>
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

<!-- WHY THIS SERVICE MATTERS -->
<section class="problem-section">
  <div class="container">
    <div class="section-header center problem-head reveal">
      <p class="subheading">Why This Service Matters</p>
      <h2 class="home-title">If the right homeowner cannot find you, your reputation never gets a chance to <span class="heading-accent">do its job.</span></h2>
      <p class="section-desc center-desc">Good SEO is not about collecting random traffic. It is about showing up for the services you actually want to sell, in the locations you actually want to serve, when the person searching has a real problem to solve. Weak local visibility sends that demand to competitors before you are even considered.</p>
    </div>
    <div class="why-done problem-box reveal">
      <div class="why-done-grid">
        <article class="why-done-card">
          <h3 class="why-done-num problem-label">High-ticket projects</h3>
          <p>Build visibility around valuable services and local intent, then give visitors enough proof and detail to feel comfortable taking the next step.</p>
        </article>
        <article class="why-done-card">
          <h3 class="why-done-num problem-label">Urgent service trades</h3>
          <p>Make it easier for high-intent local searches to reach fast, relevant service pages instead of generic pages that force people to keep looking.</p>
        </article>
        <article class="why-done-card">
          <h3 class="why-done-num problem-label">Recurring services</h3>
          <p>Build clear service and location coverage so you attract more of the neighborhoods and recurring customers that fit the routes you want to grow.</p>
        </article>
      </div>
    </div>
  </div>
</section>

<!-- OUR PROCESS -->
<section class="rail-section why-wtf-section" id="process" data-rail>
  <div class="rail-sticky">
    <div class="container">
      <div class="section-header rail-head reveal">
        <p class="subheading">Our Process</p>
        <h2 class="home-title">Built around how your customer <span class="heading-accent">actually chooses.</span></h2>
        <p class="section-desc">We focus on the technical foundation, the right service and location pages, useful content, and what visitors do after they arrive.</p>
      </div>
    </div>
    <div class="rail-viewport">
      <div class="rail-track">
        <article class="rail-card">
          <span class="rail-num">01</span>
          <h3>How do we find what is holding your search visibility back?</h3>
          <p>We Consultation technical issues, crawlability, indexing, redirects, page structure, internal links, metadata, speed, service coverage, local relevance, and the conversion path. The goal is to find the problems that matter before publishing more content.</p>
        </article>
        <article class="rail-card">
          <span class="rail-num">02</span>
          <h3>How do we decide which services and locations to target?</h3>
          <p>We map the site around the work you want more of and the areas you can actually serve well. That keeps the strategy tied to real business value instead of chasing traffic that does not turn into useful leads.</p>
        </article>
        <article class="rail-card">
          <span class="rail-num">03</span>
          <h3>How do we improve the website itself?</h3>
          <p>We strengthen the site structure, service pages, location pages, internal linking, technical setup, and on-page content so search engines and homeowners can understand what you do and where you do it.</p>
        </article>
        <article class="rail-card">
          <span class="rail-num">04</span>
          <h3>How do we create content people actually need?</h3>
          <p>We build content around real homeowner questions, buying stages, service problems, and project intent. Useful content should help someone make a decision - not exist just because a keyword tool said to publish another article.</p>
        </article>
        <article class="rail-card">
          <span class="rail-num">05</span>
          <h3>How do we measure whether SEO is helping the business?</h3>
          <p>We review visibility together with calls, forms, bookings, and lead quality. Rankings are useful signals, but qualified opportunities are the outcome that matters.</p>
        </article>
      </div>
    </div>
  </div>
</section>

<!-- WORK -->
<?php
$work_eyebrow = 'Featured Work';
$work_heading = 'See the work. <span class="accent-lime">See what changed.</span>';
$work_desc = 'Keep the gallery visual and easy to scan. Each project should show the problem, what was built, and the result or business outcome when that result is verified.';
include __DIR__ . '/includes/featured-work.php';
?>

<!-- REVIEWS -->
<?php
$street_section_id = 'testimonials';
$street_heading = 'Good work should be easy to trust <span class="accent-blue">before the sales call.</span>';
$street_desc = 'Use this section for short, verified client reviews that speak to communication, quality, speed, lead quality, conversion, or the difference the work made to the business.';
include __DIR__ . '/includes/testimonialslider.php';
?>

<!-- FAQS -->
<section class="faq-section" id="faqs">
  <div class="container">
    <div class="section-header reveal">
      <p class="subheading">FAQs</p>
      <h2 class="home-title">Questions worth answering before you make the next move.</h2>
    </div>
    <div class="faq-list reveal">
      <div class="faq-item is-open">
        <button class="faq-trigger" type="button" aria-expanded="true">
          <span class="faq-num">01</span>
          <span class="faq-question">Is local SEO just about ranking higher on Google?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region">
          <div class="faq-panel-inner">
            <p>Ranking matters, but it is not the whole job. We also care whether the page matches the search, builds trust, answers the right questions, and gives the homeowner a clear next step. Visibility without conversion can still waste opportunity.</p>
          </div>
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">02</span>
          <span class="faq-question">Do you guarantee a number-one ranking?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region">
          <div class="faq-panel-inner">
            <p>No credible SEO work can promise a permanent number-one position. SEO is a gradual process, our first goal is to bring you on the first page of Google, and eventually towards the first ranking as well.</p>
          </div>
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">03</span>
          <span class="faq-question">Do I need hundreds of city pages?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region">
          <div class="faq-panel-inner">
            <p>Not by default. More pages are only useful when they serve a real purpose and are meaningfully relevant. We would rather build a strong structure around the services and locations that matter than fill the site with thin pages nobody trusts.</p>
          </div>
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">04</span>
          <span class="faq-question">Can SEO work if my current website is weak?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region">
          <div class="faq-panel-inner">
            <p>It can improve visibility, but a weak site can still lose the traffic you earn. If the website is slow, confusing, or does not build trust, we will show you where SEO and website improvements need to work together.</p>
          </div>
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">05</span>
          <span class="faq-question">How quickly does SEO work?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region">
          <div class="faq-panel-inner">
            <p>The pace depends on your current site, technical issues, competition, existing authority, and the amount of work needed. We do not sell a fixed magic timeline. We prioritize the highest-impact problems first and track progress from there.</p>
          </div>
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">06</span>
          <span class="faq-question">What should I do first if I am not sure why local visibility is weak?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region">
          <div class="faq-panel-inner">
            <p>Start with the SEO + website Consultation. We will separate technical problems, missing service or location coverage, content gaps, and conversion issues so you know what deserves attention first.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="faq-all-wrap reveal">
      <a href="/faqs.php" class="btn btn-lime faq-all-btn">View all FAQs <span aria-hidden="true">&rarr;</span></a>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="page-section services-cta-section">
  <div class="container">
    <div class="services-cta-band reveal">
      <div>
        <h3>Want to know what is holding back your local sales?</h3>
      </div>
      <a href="/contact.php" class="btn btn-lime btn-lg">Claim Your FREE Website Consultation</a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
