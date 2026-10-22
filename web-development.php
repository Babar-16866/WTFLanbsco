<?php
$page_title = 'Web Design & Development for Home-Service Businesses | WTF Labs';
$page_description = 'Premium, fast, conversion-focused websites for remodeling, HVAC, plumbers, roofers, pest control, pool companies, landscapers, and other home-service businesses.';
$current_page = 'services';
include __DIR__ . '/includes/header.php';
?>

<section class="ihero-section">
  <div class="ihero-box">
    <header class="ihero-header reveal">
      <p class="ihero-eyebrow"><span class="ihero-eyebrow-dot"></span> Premium Web Design + Development</p>
      <h1 class="ihero-heading">Make your business look as good online as <span class="accent-lime">the work you do.</span></h1>
      <p class="ihero-lead">Custom websites for home-service companies that need to earn trust fast, work beautifully on mobile, and turn visitors into calls, estimates, bookings, and better-fit leads.</p>
    </header>
    <!--
    <div class="about-hero-proof">
      <div class="about-hero-proof-item">
        <strong>400+</strong>
        <span>projects</span>
      </div>
      <div class="about-hero-proof-item">
        <strong>2018</strong>
        <span>since</span>
      </div>
      <div class="about-hero-proof-item">
        <strong>4.8</strong>
        <span>rating</span>
      </div>
      <div class="about-hero-proof-item">
        <strong>48+</strong>
        <span>reviews</span>
      </div>
    </div>
    -->
    <div class="ihero-stage">
      <div class="ihero-canvas">
        <div class="ihero-side ihero-side-left">
          <img src="/assets/images/hero-web-development-left.webp" alt="">
        </div>
        <div class="ihero-side ihero-side-right">
          <img src="/assets/images/hero-web-development-right.webp" alt="">
        </div>
        <div class="ihero-banner">
          <img src="/assets/images/hero-web-development-main.webp" alt="" class="ihero-banner-img" fetchpriority="high">
        </div>
      </div>
      <a href="/contact.php" class="ihero-primary reveal reveal-delay-3" data-open-step-popup><span class="ihero-primary-label">Get Your Free Website Consultation</span></a>
      <div class="ihero-secondary reveal reveal-delay-1">
        <a href="/works.php" class="ihero-secondary-link"><span class="ihero-secondary-dot"></span><span class="ihero-secondary-text">See Our Work</span></a>
      </div>
    </div>
  </div>
</section>


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
