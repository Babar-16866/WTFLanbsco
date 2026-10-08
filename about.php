<?php
$page_title = 'About Us | WTF Labs';
$page_description = 'The team you wish you hired the first time. Same senior crew, mature processes, consistent results - WTF Labs.';
$current_page = 'about';
include __DIR__ . '/includes/header.php';
?>

<?php
$banner_kicker = 'About us';
$banner_h1 = 'The team you wish you <span class="about-hero-accent">hired the first time</span>';
$banner_lead = 'We did not just hire people — we built a team, slowly and intentionally, until we found the lineup that delivers without drama.';
$banner_primary_label = 'Work with us';
$banner_secondary_label = 'See our work';
$banner_secondary_href = '/works.php';
$banner_proof = [['400+', 'projects'], ['2018', 'since'], ['4.8', 'rating'], ['0', 'churn']];
$banner_image = '/assets/images/people-main.jpg';
$banner_float1 = '/assets/images/team-1.jpg';
$banner_float2 = '/assets/images/team-2.jpg';
$banner_card = 'Same senior crew from strategy to launch';
include __DIR__ . '/includes/page-banner.php';
?>

<section class="page-section about-page">
  <div class="container">
    <div class="about-split reveal">
      <div class="about-split-copy">
        <p class="faq-page-label"><span></span> Who we are</p>
        <h2>Same crew. No churn. No interns running your project.</h2>
        <p>One senior team from strategy to launch. Mature processes. Clear ownership. We treat your goals like our own — and we do our best work with people who want a real partnership.</p>
        <ul class="why-feature-list">
          <li>Same senior pod from kickoff to launch</li>
          <li>Process built over hundreds of B2B projects</li>
          <li>Partnership energy — not ticket-farming</li>
        </ul>
      </div>
      <div class="about-split-media">
        <img loading="lazy" src="/assets/images/enterprise-team.jpg" alt="Enterprise delivery team">
        <div class="about-split-float">
          <img loading="lazy" src="/assets/images/team-1.jpg" alt="">
          <img loading="lazy" src="/assets/images/team-3.jpg" alt="">
        </div>
      </div>
    </div>

    <div class="about-timeline-wrap reveal">
      <div class="about-timeline-head">
        <p class="faq-page-label"><span></span> Timeline</p>
        <h2>How we got here</h2>
        <p class="about-timeline-lead">A short path from shipping websites to a stable senior pod that still owns every launch.</p>
      </div>
      <div class="about-timeline" role="list">
        <article class="about-timeline-item" role="listitem">
          <span class="about-timeline-dot" aria-hidden="true"></span>
          <span class="about-timeline-year">2018</span>
          <h3>First ships</h3>
          <p>WTF Labs starts shipping B2B websites</p>
        </article>
        <article class="about-timeline-item about-timeline-item--lime" role="listitem">
          <span class="about-timeline-dot" aria-hidden="true"></span>
          <span class="about-timeline-year">2020</span>
          <h3>Pod locked</h3>
          <p>Senior pod model locked in</p>
        </article>
        <article class="about-timeline-item" role="listitem">
          <span class="about-timeline-dot" aria-hidden="true"></span>
          <span class="about-timeline-year">2022</span>
          <h3>Zero churn</h3>
          <p>Stable core team — same faces since</p>
        </article>
        <article class="about-timeline-item about-timeline-item--now" role="listitem">
          <span class="about-timeline-dot" aria-hidden="true"></span>
          <span class="about-timeline-year">Today</span>
          <h3>400+ projects</h3>
          <p>Same craft, faster delivery</p>
        </article>
      </div>
    </div>

    <div class="about-team-strip reveal">
      <div class="about-team-strip-copy">
        <p class="faq-page-label"><span></span> The people</p>
        <h2>Faces behind the work</h2>
        <p>Designers, engineers, and strategists who stay — so your context never resets mid-project.</p>
      </div>
      <div class="about-team-photos">
        <img loading="lazy" src="/assets/images/team-1.jpg" alt="Team">
        <img loading="lazy" src="/assets/images/team-2.jpg" alt="Team">
        <img loading="lazy" src="/assets/images/team-3.jpg" alt="Team">
        <img loading="lazy" src="/assets/images/people-main.jpg" alt="Team">
        <img loading="lazy" src="/assets/images/people-collab.jpg" alt="Team">
      </div>
    </div>

    <div class="about-maturity reveal">
      <div class="about-maturity-panel">
        <div class="about-maturity-copy">
          <p class="faq-page-label"><span></span> Maturity</p>
          <h2>We're not perfect. But we keep working on our maturity</h2>
          <p>Maturity is a discipline — thousands of hours a year into craft, process, and team sync so results stay consistent.</p>
        </div>
        <div class="about-maturity-grid">
          <article>
            <span class="about-maturity-num">01</span>
            <h3>Encouraging self-learning</h3>
            <p>You do not become a pro working 8 to 5 — the team levels up by exploring bold ideas after hours.</p>
          </article>
          <article>
            <span class="about-maturity-num">02</span>
            <h3>Building pet projects</h3>
            <p>We explore new tech and fine-tune chemistry through side projects — not by learning on your dime.</p>
          </article>
          <article>
            <span class="about-maturity-num">03</span>
            <h3>Running regular retros</h3>
            <p>We make mistakes. After each retro, we decide what changes so we do not repeat them.</p>
          </article>
          <article>
            <span class="about-maturity-num">04</span>
            <h3>Monthly department syncs</h3>
            <p>Each month, teams share solutions, practices, and insights that raise the floor for every project.</p>
          </article>
          <article>
            <span class="about-maturity-num">05</span>
            <h3>Optional deep dives</h3>
            <p>When we dive deep, designers and developers sync so craft stays aligned end to end.</p>
          </article>
          <article>
            <span class="about-maturity-num">06</span>
            <h3>Recognition meets</h3>
            <p>We unplug regularly to share work and personal updates — morale is part of delivery quality.</p>
          </article>
        </div>
        <div class="about-equation-wrap">
          <button type="button" class="about-equation about-equation--cta" data-open-popup>
            Request a consultation
            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" aria-hidden="true"><path d="M3 11L11 3M11 3H5M11 3v6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </button>
        </div>
      </div>
    </div>

    <div class="about-method reveal">
      <div class="about-method-visual">
        <img loading="lazy" src="/assets/images/people-workshop.jpg" alt="WTF Labs collaboration">
        <div class="about-method-badge">Alfred energy</div>
      </div>
      <div class="about-method-copy">
        <p class="faq-page-label"><span></span> Our method</p>
        <h2>In three words: &ldquo;Alfred to Batman&rdquo;</h2>
        <p>You're Batman. We're Alfred. Fiercely loyal to the mission, the work, and every commitment we make. This is not a sales framework — it is how we show up.</p>
        <ul class="why-feature-list">
          <li>Solve user needs first — business goals follow</li>
          <li>Reminders, follow-ups, visibility — that's on us</li>
          <li>We're here for impact, not compliments</li>
        </ul>
        <p class="about-fine-line">The fine line: we serve, but we are not servants.</p>
      </div>
    </div>

  </div>
</section>

<?php
$street_section_id = 'about-testimonials';
$street_kicker = 'nice people only';
include __DIR__ . '/includes/testimonialslider.php';
?>

<section class="page-section about-cta-section">
  <div class="container">
    <div class="services-cta-band reveal">
      <div>
        <h3>Want a team dedicated to your goals?</h3>
        <p>One that delivers without making you manage every step.</p>
      </div>
      <a href="/contact.php" class="btn btn-lime btn-lg" data-open-popup>Let's talk</a>
    </div>
  </div>
</section>

<section class="faq-section" id="about-faq">
  <div class="container">
    <div class="section-header reveal">
      <p class="subheading accent-blue">About FAQs</p>
      <h2>Still have questions?</h2>
    </div>
    <div class="faq-list reveal">
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">01</span>
          <span class="faq-question">How much does a website project cost?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region"><div class="faq-panel-inner"><p>Website projects start at $10,000. Most full-cycle B2B website engagements fall between $25,000 and $50,000.</p></div></div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">02</span>
          <span class="faq-question">How are payments structured?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region"><div class="faq-panel-inner"><p>Full-cycle: 30% upfront, 40% after design, 30% on completion. Smaller projects: 50/50.</p></div></div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">03</span>
          <span class="faq-question">Can you move faster if we have a hard deadline?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region"><div class="faq-panel-inner"><p>Yes, when the deadline is realistic. We can increase the team and run tasks in parallel.</p></div></div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">04</span>
          <span class="faq-question">Which platforms do you use?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region"><div class="faq-panel-inner"><p>Webflow, WordPress, Shopify, HubSpot, React, Vue, Node.js, Laravel, and Strapi.</p></div></div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">05</span>
          <span class="faq-question">What does your process look like?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region"><div class="faq-panel-inner"><p>Discovery through launch with the same senior team — see <a href="/faqs.php">FAQs</a> for more detail.</p></div></div>
      </div>
    </div>
    <div class="faq-all-wrap reveal">
      <a href="/faqs.php" class="btn btn-lime faq-all-btn">View all FAQs <span aria-hidden="true">&rarr;</span></a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
