<?php
$page_title = 'Web Design & Development for Home-Service Businesses | WTF Labs';
$page_description = 'Premium, fast, conversion-focused websites for remodelers, HVAC, plumbers, roofers, pest control, pool companies, landscapers, and other home-service businesses.';
$current_page = 'services';
include __DIR__ . '/includes/header.php';
?>

<?php
$banner_breadcrumb = 'Web Design';
$banner_kicker = 'Premium Web Design + Development';
$banner_h1 = 'Make your business look as good online as <span class="about-hero-accent">the work you do.</span>';
$banner_lead = 'Custom websites for home-service companies that need to earn trust fast, work beautifully on mobile, and turn visitors into calls, estimates, bookings, and better-fit leads.';
$banner_primary_label = 'Get Your Free Website Consultation';
$banner_secondary_label = 'See Our Work';
$banner_image = '/assets/images/mockup-main.webp';
$banner_float1 = '/assets/images/excel-landing.webp';
$banner_float2 = '/assets/images/excel-uiux.webp';
$banner_card = 'Design that looks sharp and sells.';
include __DIR__ . '/includes/page-banner.php';
?>

<?php /*
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
          <img loading="lazy" src="/assets/images/mockup-main.webp" alt="TorchSensors">
        </div>
        <div class="svc-case-body">
          <p class="svc-case-meta">USA · Product launch</p>
          <h3>TorchSensors</h3>
          <p>An award-ready launch experience that helped a new product earn trust and drive day-one preorders.</p>
        </div>
      </article>
      <article class="svc-case">
        <div class="svc-case-media">
          <img loading="lazy" src="/assets/images/mockup-3.webp" alt="Cofinity-X">
        </div>
        <div class="svc-case-body">
          <p class="svc-case-meta">Germany · B2B tech</p>
          <h3>Cofinity-X</h3>
          <p>Complex systems explained clearly - authority design for partners, buyers, and onboarding flows.</p>
        </div>
      </article>
      <article class="svc-case">
        <div class="svc-case-media">
          <img loading="lazy" src="/assets/images/excel-uiux.webp" alt="Elvetiko">
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
          <img loading="lazy" src="/assets/images/mockup-main.webp" alt="">
        </div>
        <div class="svc-excellence-chip">
          <span class="svc-excellence-chip-dot"></span>
          <p>UI · Landing pages · Systems</p>
        </div>
        <div class="svc-excellence-float svc-excellence-float--1">
          <img loading="lazy" src="/assets/images/excel-uiux.webp" alt="">
        </div>
        <div class="svc-excellence-float svc-excellence-float--2">
          <img loading="lazy" src="/assets/images/torch-1.webp" alt="">
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
      <a href="/services.php#graphic-design" class="excel-tag">Graphic Design</a>
      <a href="/services.php#web-development" class="excel-tag">Web Development</a>
      <a href="/services.php#seo" class="excel-tag">SEO</a>
      <a href="/services.php#social-media-advertising" class="excel-tag">Social Media Advertising</a>
      <a href="/services.php#google-ads" class="excel-tag">Google Ads</a>
      <a href="/services.php#digital-marketing" class="excel-tag">Digital Marketing</a>
    </div>
    <div class="services-cta-band reveal" style="margin-top:40px">
      <div>
        <h3>Let's discuss your next Web Design project</h3>
        <p>We'll help you define the right next step.</p>
      </div>
      <a href="/contact.php" class="btn btn-lime btn-lg">Free Consultation</a>
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
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
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

*/ ?>

<!-- WHY THIS SERVICE MATTERS -->
<section class="problem-section svc-why-section">
  <div class="container">
    <div class="section-header center problem-head reveal">
      <p class="subheading">Why This Service Matters</p>
      <h2 class="home-title">Your website is where homeowners decide whether your price feels <span class="heading-accent">justified.</span></h2>
      <p class="section-desc center-desc">Before someone calls, books, or invites you into their home, they usually check you out. If the website looks cheap, loads slowly, hides the proof, or makes the next step hard, good leads hesitate. A strong site makes the business feel credible before the conversation starts - and helps the right customer move forward with less friction.</p>
    </div>
    <div class="why-done problem-box reveal">
      <div class="why-done-grid">
        <article class="why-done-card">
          <h3 class="why-done-num problem-label">For high-ticket project work</h3>
          <p>Show craftsmanship, before-and-after proof, case studies, process clarity, and the level of detail that helps serious homeowners feel comfortable with a premium estimate.</p>
        </article>
        <article class="why-done-card">
          <h3 class="why-done-num problem-label">For HVAC, plumbing, and urgent service</h3>
          <p>Load fast on mobile, make calling and booking obvious, show current trust signals, and help replacement buyers understand financing or system options without digging.</p>
        </article>
        <article class="why-done-card">
          <h3 class="why-done-num problem-label">For recurring route-based services</h3>
          <p>Make plans easy to compare, show service areas clearly, support online signup, and reduce the number of people who leave because they cannot get a simple answer without calling.</p>
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
        <p class="section-desc">We do not start with colors and animations. We start with what the site needs to help the customer understand, trust, and do next.</p>
      </div>
    </div>
    <div class="rail-viewport">
      <div class="rail-track">
        <article class="rail-card">
          <span class="rail-num">01</span>
          <h3>How do we decide what your website needs to do?</h3>
          <p>We learn which services you want more of, which leads waste your time, what customers ask before buying, what makes you different, and where the current site loses confidence. That gives the project a clear job before design begins.</p>
        </article>
        <article class="rail-card">
          <span class="rail-num">02</span>
          <h3>How do we structure the copy and user journey?</h3>
          <p>We organize the site around the questions a homeowner is already asking: Can I trust you? Do you do the work I need? Do you serve my area? What will happen next? Why should I choose you? The page should answer those questions in the right order and make the next action easy.</p>
        </article>
        <article class="rail-card">
          <span class="rail-num">03</span>
          <h3>How do we make it premium without slowing it down?</h3>
          <p>We use strong art direction, clean layouts, project proof, motion, and interactive elements only where they help. A remodeler may benefit from immersive before-and-after storytelling. An emergency plumber needs speed and clarity first. The experience should fit the way your customer buys.</p>
        </article>
        <article class="rail-card">
          <span class="rail-num">04</span>
          <h3>How do we build the tools your business needs?</h3>
          <p>Depending on the business, that can include lead forms, booking, project galleries, before-and-after experiences, service-area pages, interactive selectors, estimators, plan comparisons, CRM connections, analytics, and content management.</p>
        </article>
        <article class="rail-card">
          <span class="rail-num">05</span>
          <h3>What happens before and after launch?</h3>
          <p>We build responsively, check the experience across common screen sizes, connect forms and tracking, set the SEO foundation, launch, and then use real traffic to spot friction that is worth improving.</p>
        </article>
      </div>
    </div>
  </div>
</section>

<!-- WORK -->
<?php
$work_eyebrow = 'Featured Work';
$work_heading = 'See the work. <span class="accent-lime">See what changed.</span>';
$work_desc = '';
include __DIR__ . '/includes/featured-work.php';
?>

<!-- REVIEWS -->
<?php
$street_section_id = 'testimonials';
$street_heading = 'Good work should be easy to trust <span class="accent-blue">before the call.</span>';
$street_desc = '';
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
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">01</span>
          <span class="faq-question">Is this a template website?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region">
          <div class="faq-panel-inner">
            <p>No. The site is designed around your brand, services, proof, buyer journey, and goals. We may use proven conversion patterns, but the finished experience should not feel like the same contractor template with a different logo.</p>
          </div>
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">02</span>
          <span class="faq-question">Do you write the website copy too?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region">
          <div class="faq-panel-inner">
            <p>Yes. We structure the messaging around real buyer questions, objections, trust signals, services, and next steps so the words and design work together instead of being treated as separate jobs.</p>
          </div>
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">03</span>
          <span class="faq-question">Do I need 3D, heavy animation, or fancy effects?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region">
          <div class="faq-panel-inner">
            <p>Not automatically. For a high-end remodeler, immersive visuals can help the work feel premium. For an HVAC or plumbing company, speed and booking clarity matter more. We use interaction when it helps trust, understanding, or conversion - not just to make the page move.</p>
          </div>
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">04</span>
          <span class="faq-question">Can you connect forms, booking, CRM, analytics, or other tools?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region">
          <div class="faq-panel-inner">
            <p>Yes. Integrations can be planned into the build so leads, bookings, content, and tracking fit the way your team already works.</p>
          </div>
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">05</span>
          <span class="faq-question">Can you redesign an existing site without throwing everything away?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region">
          <div class="faq-panel-inner">
            <p>Yes. We first decide what is worth keeping - content, rankings, pages, brand elements, tools, or integrations - and then rebuild the parts that are holding the experience back.</p>
          </div>
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">06</span>
          <span class="faq-question">How long does a website project take?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region">
          <div class="faq-panel-inner">
            <p>It depends on the number of pages, content, integrations, interactive features, and how quickly approvals move. After discovery, we set a clear scope and milestones so you know what is being built and what needs your input.</p>
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
        <h3>Don’t let your website undersell<br>the quality of your work.</h3>
      </div>
      <a href="/contact.php" class="btn btn-lime btn-lg">Claim Your FREE Website Consultation</a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
