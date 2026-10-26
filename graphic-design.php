<?php
$page_title = 'Branding & Creative for Home-Service Businesses | WTF Labs';
$page_description = 'Brand identity, ad creative, social assets, print, and field marketing design for home-service businesses.';
$current_page = 'services';
include __DIR__ . '/includes/header.php';
?>

<section class="ihero-section">
  <div class="ihero-box">
    <header class="ihero-header reveal">
      <p class="ihero-eyebrow"><span class="ihero-eyebrow-dot"></span> BRANDING + CREATIVE</p>
      <h1 class="ihero-heading">Look like the company customers <span class="accent-lime">expect to pay more for.</span></h1>
      <p class="ihero-lead">Brand systems and campaign creative that make your business feel established, consistent, and credible everywhere homeowners see you.</p>
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
      <!--
      <div class="ihero-canvas">
        <div class="ihero-side ihero-side-left">
          <img src="/assets/images/hero-graphic-design-left.webp" alt="">
        </div>
        <div class="ihero-side ihero-side-right">
          <img src="/assets/images/hero-graphic-design-right.webp" alt="">
        </div>
        <div class="ihero-banner">
          <img src="/assets/images/hero-graphic-design-main.webp" alt="" class="ihero-banner-img" fetchpriority="high">
        </div>
      </div>
      -->
      <div class="hcar" data-hcar>
        <div class="hcar-track">
          <div class="hcar-card"><img src="/assets/images/hcar-graphic-design-1.webp" alt="Graphic Design image 1" loading="lazy"></div>
          <div class="hcar-card"><img src="/assets/images/hcar-graphic-design-2.webp" alt="Graphic Design image 2" loading="lazy"></div>
          <div class="hcar-card"><img src="/assets/images/hcar-graphic-design-3.webp" alt="Graphic Design image 3" loading="lazy"></div>
          <div class="hcar-card"><img src="/assets/images/hcar-graphic-design-4.webp" alt="Graphic Design image 4" loading="lazy"></div>
          <div class="hcar-card"><img src="/assets/images/hcar-graphic-design-5.webp" alt="Graphic Design image 5" loading="lazy"></div>
          <div class="hcar-card"><img src="/assets/images/hcar-graphic-design-6.webp" alt="Graphic Design image 6" loading="lazy"></div>
        </div>
        <div class="hcar-nav">
          <button type="button" class="hcar-arrow hcar-prev" aria-label="Previous image"><svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M15 18l-6-6 6-6" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
          <button type="button" class="hcar-arrow hcar-next" aria-label="Next image"><svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M9 6l6 6-6 6" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
        </div>
      </div>
      <a href="/contact.php" class="ihero-primary reveal reveal-delay-3" data-open-step-popup><span class="ihero-primary-label">Talk About Your Brand</span></a>
      <div class="ihero-secondary"></div>
    </div>
  </div>
</section>

<section class="niche-strip" aria-label="What we cover">
  <div class="niche-strip-track">
    <ul class="niche-strip-list">
      <li>Logo Design</li>
      <li>Brand Identity</li>
      <li>Truck Wraps</li>
      <li>Yard Signs</li>
      <li>Flyers</li>
      <li>Business Cards</li>
      <li>Social Graphics</li>
      <li>Ad Creative</li>
      <li>Brand Guidelines</li>
    </ul>
    <ul class="niche-strip-list" aria-hidden="true">
      <li>Logo Design</li>
      <li>Brand Identity</li>
      <li>Truck Wraps</li>
      <li>Yard Signs</li>
      <li>Flyers</li>
      <li>Business Cards</li>
      <li>Social Graphics</li>
      <li>Ad Creative</li>
      <li>Brand Guidelines</li>
    </ul>
  </div>
</section>


<!-- WHY THIS SERVICE MATTERS -->
<section class="problem-section svc-why-section">
  <div class="container">
    <div class="section-header center problem-head reveal">
      <p class="subheading">WHY THIS SERVICE MATTERS</p>
      <h2 class="home-title">People judge the quality of the business before they ever <span class="heading-accent">meet the crew.</span></h2>
      <p class="section-desc center-desc">A homeowner may see your truck, Google listing, website, yard sign, ad, proposal, and social page before they ever speak to you. If each one looks like a different company, trust drops. A clear brand makes every touchpoint feel like part of the same professional business - and helps quality work stop looking interchangeable with low-bid competitors.</p>
    </div>
    <div class="why-done problem-box reveal">
      <div class="why-done-grid">
        <article class="why-done-card">
          <h3 class="why-done-num problem-label">Look established</h3>
          <p>A consistent visual system makes the business feel more deliberate, professional, and easier to remember.</p>
        </article>
        <article class="why-done-card">
          <h3 class="why-done-num problem-label">Support premium positioning</h3>
          <p>Strong presentation helps the quality of the brand match the quality of the work, especially when homeowners are comparing higher-priced project companies.</p>
        </article>
        <article class="why-done-card">
          <h3 class="why-done-num problem-label">Make marketing easier to produce</h3>
          <p>Clear colors, type, imagery, templates, and rules help future ads, social posts, print pieces, and sales materials stay consistent without starting from zero each time.</p>
        </article>
      </div>
    </div>
  </div>
</section>

<!-- WORK -->
<?php
$work_eyebrow = 'Featured Work';
$work_heading = 'GREAT WORK. <span class="accent-lime">BUILT TO EARN TRUST.</span>';
$work_desc = 'Immersive where it helps. Fast where speed matters. Clear where buyers need confidence. Every build should fit the sales cycle behind it.';
include __DIR__ . '/includes/featured-work.php';
?>

<!-- OUR PROCESS -->
<section class="rail-section why-wtf-section" id="process" data-rail>
  <div class="rail-sticky">
    <div class="container">
      <div class="section-header rail-head reveal">
        <p class="subheading">OUR PROCESS</p>
        <h2 class="home-title">Built around how your customer <span class="heading-accent">actually chooses.</span></h2>
        <p class="section-desc">Branding is more than a logo. We build a visual system that can hold up across the places customers actually see you.</p>
      </div>
    </div>
    <div class="rail-viewport">
      <div class="rail-track">
        <article class="rail-card">
          <span class="rail-num">01</span>
          <h3>How do we define what the brand should stand for?</h3>
          <p>We look at your market, competitors, services, customers, reputation, and the kind of position you want to own. The goal is to clarify what should feel different about your business before we design the look.</p>
        </article>
        <article class="rail-card">
          <span class="rail-num">02</span>
          <h3>How do we build the visual identity?</h3>
          <p>We shape the logo direction, color, typography, image style, layout language, and other visual elements so the business feels recognizable and consistent instead of pieced together.</p>
        </article>
        <article class="rail-card">
          <span class="rail-num">03</span>
          <h3>How do we carry the brand across every customer touchpoint?</h3>
          <p>We apply the system to the places that matter - website, ads, social assets, print, yard signs, door hangers, sales materials, campaign creative, and field or vehicle support where needed.</p>
        </article>
        <article class="rail-card">
          <span class="rail-num">04</span>
          <h3>Can we refresh an existing brand instead of starting over?</h3>
          <p>Yes. If the current brand has recognition or elements worth keeping, we can modernize and organize it rather than forcing a complete reset.</p>
        </article>
        <article class="rail-card">
          <span class="rail-num">05</span>
          <h3>What do we hand over so the brand stays consistent?</h3>
          <p>We document the core visual rules and reusable assets so future marketing can stay on-brand even as the business adds new campaigns, pages, vendors, or team members.</p>
        </article>
      </div>
    </div>
  </div>
</section>

<!-- REVIEWS -->
<?php
$street_section_id = 'testimonials';
$street_heading = '…AND THE CROWD GOES <span class="accent-blue">WTF!</span>';
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
          <span class="faq-question">Do I need a full rebrand?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region">
          <div class="faq-panel-inner">
            <p>Not always. If the name, logo, or existing recognition still has value, a brand refresh may be enough. We first decide whether the real problem is the identity itself or simply inconsistent execution around it.</p>
          </div>
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">02</span>
          <span class="faq-question">Is branding just a logo project?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region">
          <div class="faq-panel-inner">
            <p>No. The logo is one part of the system. The bigger goal is to make the website, ads, social content, proposals, signs, print, and field presence feel like the same company.</p>
          </div>
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">03</span>
          <span class="faq-question">Can you keep my current logo and improve everything around it?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region">
          <div class="faq-panel-inner">
            <p>Yes. If the logo is usable, we can build a stronger visual system around it with better typography, color, layouts, imagery, and creative standards.</p>
          </div>
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">04</span>
          <span class="faq-question">Will better branding automatically create more leads?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region">
          <div class="faq-panel-inner">
            <p>Branding is not a magic lead switch. What it can do is improve recognition, trust, consistency, and the way your price and quality are perceived. It works best when the website, offer, search, and advertising are also doing their jobs.</p>
          </div>
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">05</span>
          <span class="faq-question">Can you design trucks, yard signs, door hangers, and sales materials?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region">
          <div class="faq-panel-inner">
            <p>Yes. Field and print design can be included so the brand stays consistent beyond the website and social channels.</p>
          </div>
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">06</span>
          <span class="faq-question">Can you also create campaign and social creative?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region">
          <div class="faq-panel-inner">
            <p>Yes. We can extend the brand into ad creative, social templates, campaign kits, and other marketing assets so future promotions still look and feel like your business.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="faq-all-wrap faq-ask reveal">
      <!-- <a href="/faqs.php" class="btn btn-lime faq-all-btn">View all FAQs <span aria-hidden="true">&rarr;</span></a> -->
      <div class="section-header faq-ask-head"><h2 class="faq-ask-title">Still have questions?</h2></div>
      <a href="tel:+15123379723" class="btn btn-lime faq-all-btn faq-call-btn">Call Now <span aria-hidden="true">&rarr;</span></a>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="page-section services-cta-section">
  <div class="container">
    <!--
    <div class="services-cta-band reveal">
      <div>
        <h3>Ready to stop looking pieced together?</h3>
      </div>
      <a href="/contact.php" class="btn btn-lime btn-lg">Start a Conversation</a>
    </div>
    -->
    <div class="services-cta-band services-cta-band--split reveal">
      <div class="svc-cta-copy">
        <h3>Ready to stop looking pieced together?</h3>
        <div class="svc-cta-act">
          <a href="/contact.php" class="btn btn-lime btn-lg">Start a Conversation</a>
        </div>
      </div>
      <div class="svc-cta-art"><img src="/assets/images/cta-phones-graphic-design.webp" alt="Brand assets, brand guide and social ad screens on phones" width="1280" height="1120" loading="lazy"></div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
