<?php
$page_title = 'Client Feedback | WTF Labs';
$page_description = 'Tell us how your project with WTF Labs went - what worked, what we can improve, and whether you would recommend us.';
$current_page = 'forms';
$hide_contact_section = true;
include __DIR__ . '/includes/header.php';
?>

<?php
$banner_kicker = 'Client Feedback';
$banner_h1 = 'How did we <span class="about-hero-accent">do?</span>';
$banner_lead = 'Your honest feedback shapes how we work. Tell us what went well, what didn\'t, and what we should do differently next time.';
$banner_primary_label = 'Share feedback';
$banner_primary_href = '#feedback-form';
$banner_primary_popup = false;
$banner_secondary_label = 'See our work';
$banner_image = '/assets/images/people-collab.jpg';
$banner_float1 = '/assets/images/team-2.jpg';
$banner_float2 = '/assets/images/team-3.jpg';
$banner_card = 'Every answer is read by the team.';
include __DIR__ . '/includes/page-banner.php';
?>

<section class="page-section contact-page-section" id="feedback-form">
  <div class="container">
    <div class="contact-page-card reveal">
      <aside class="contact-page-aside">
        <p class="contact-page-label">Why it matters</p>
        <h2>Client Feedback</h2>
        <p class="contact-page-lead">Takes about 2 minutes. Good or bad, we want to hear it - it's how we keep getting better.</p>

        <ul class="contact-page-details">
          <li>
            <span class="contact-page-icon" aria-hidden="true">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M12 3l2.8 5.7 6.2.9-4.5 4.4 1.1 6.2L12 17.3 6.4 20.2l1.1-6.2L3 9.6l6.2-.9z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/></svg>
            </span>
            <div>
              <strong>Read by the whole team</strong>
              <p>Your project lead and our founders review every response.</p>
            </div>
          </li>
          <li>
            <span class="contact-page-icon" aria-hidden="true">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M21 12a8 8 0 0 1-11.6 7.1L4 20l1-4.6A8 8 0 1 1 21 12z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/></svg>
            </span>
            <div>
              <strong>We follow up</strong>
              <p>If something wasn't right, we'll reach out to make it right.</p>
            </div>
          </li>
          <li>
            <span class="contact-page-icon" aria-hidden="true">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><rect x="5" y="11" width="14" height="10" rx="2" stroke="currentColor" stroke-width="2"/><path d="M8 11V7a4 4 0 1 1 8 0v4" stroke="currentColor" stroke-width="2"/></svg>
            </span>
            <div>
              <strong>Private by default</strong>
              <p>We only publish your words as a testimonial if you say it's okay.</p>
            </div>
          </li>
        </ul>

        <div class="contact-page-links">
          <a href="/works.php">Our work</a>
          <a href="/how-we-work.php">How we work</a>
          <a href="/about.php">About us</a>
          <a href="/contact.php">Contact</a>
        </div>
      </aside>

      <div class="contact-page-form-wrap">
        <p class="contact-page-label">Your feedback</p>
        <h3>Tell us about your experience</h3>
        <form class="contact-form contact-page-form" id="clientFeedbackForm" action="/send-mail.php" method="post">
          <input type="text" name="website" value="" tabindex="-1" autocomplete="off" class="hp-field" aria-hidden="true">
          <input type="hidden" name="source" value="client-feedback">
          <div class="contact-form-row">
            <div class="field">
              <label for="cfName">What's your name?</label>
              <input id="cfName" type="text" name="name" required autocomplete="name" placeholder="Jane Doe">
            </div>
            <div class="field">
              <label for="cfEmail">What's your work email?</label>
              <input id="cfEmail" type="email" name="email" required autocomplete="email" placeholder="jane@company.com">
            </div>
          </div>
          <div class="contact-form-row">
            <div class="field">
              <label for="cfCompany">Company name</label>
              <input id="cfCompany" type="text" name="company" autocomplete="organization" placeholder="Acme Plumbing">
            </div>
            <div class="field">
              <label for="cfProject">Which project was it?</label>
              <select id="cfProject" name="project" required>
                <option value="" disabled selected>Select a service</option>
                <option>Website design &amp; development</option>
                <option>Shopify store</option>
                <option>Graphic design / branding</option>
                <option>SEO / Local SEO</option>
                <option>Google Ads</option>
                <option>Social media advertising</option>
                <option>Ongoing marketing</option>
              </select>
            </div>
          </div>
          <div class="field">
            <label>Overall, how happy are you with the result?</label>
            <div class="budget-pills">
              <label><input type="radio" name="overall_rating" value="5 - Excellent" checked> 5 - Excellent</label>
              <label><input type="radio" name="overall_rating" value="4 - Good"> 4 - Good</label>
              <label><input type="radio" name="overall_rating" value="3 - Okay"> 3 - Okay</label>
              <label><input type="radio" name="overall_rating" value="2 - Poor"> 2 - Poor</label>
              <label><input type="radio" name="overall_rating" value="1 - Very poor"> 1 - Very poor</label>
            </div>
          </div>
          <div class="field">
            <label>How was communication during the project?</label>
            <div class="budget-pills">
              <label><input type="radio" name="communication" value="Excellent"> Excellent</label>
              <label><input type="radio" name="communication" value="Good"> Good</label>
              <label><input type="radio" name="communication" value="Could be better"> Could be better</label>
            </div>
          </div>
          <div class="field">
            <label>Did we deliver on time?</label>
            <div class="budget-pills">
              <label><input type="radio" name="on_time" value="Yes"> Yes</label>
              <label><input type="radio" name="on_time" value="Mostly"> Mostly</label>
              <label><input type="radio" name="on_time" value="No"> No</label>
            </div>
          </div>
          <div class="field">
            <label>Would you recommend WTF Labs?</label>
            <div class="budget-pills">
              <label><input type="radio" name="recommend" value="Definitely"> Definitely</label>
              <label><input type="radio" name="recommend" value="Probably"> Probably</label>
              <label><input type="radio" name="recommend" value="Not sure"> Not sure</label>
              <label><input type="radio" name="recommend" value="No"> No</label>
            </div>
          </div>
          <div class="field">
            <label for="cfMessage">What did we do well?</label>
            <textarea id="cfMessage" name="message" rows="4" required placeholder="What stood out, results you've seen, anything you liked..."></textarea>
          </div>
          <div class="field">
            <label for="cfImprove">What could we improve?</label>
            <textarea id="cfImprove" name="improve" rows="3" placeholder="Be honest - it helps us get better."></textarea>
          </div>
          <label class="check">
            <input type="checkbox" name="testimonial_ok" value="Yes">
            <span>You can use my feedback as a testimonial on your website.</span>
          </label>
          <label class="check">
            <input type="checkbox" name="terms" required>
            <span>I agree to the <a href="/privacy-policy.php">Privacy Policy</a> and <a href="/terms-and-conditions.php">Terms of use</a>.</span>
          </label>
          <button type="submit" class="btn btn-lime btn-lg btn-block">Send feedback</button>
        </form>
      </div>
    </div>
  </div>
</section>

<section class="faq-section" id="feedback-faq">
  <div class="container">
    <div class="section-header reveal">
      <p class="subheading">Feedback FAQs</p>
      <h2>A few quick <span class="heading-accent">answers</span></h2>
    </div>
    <div class="faq-list reveal">
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">01</span>
          <span class="faq-question">Who reads my feedback?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region"><div class="faq-panel-inner"><p>Your project lead and our founders. We go through every response in our monthly team review.</p></div></div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">02</span>
          <span class="faq-question">Will my feedback be published?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region"><div class="faq-panel-inner"><p>Only if you tick the testimonial box. Even then, we'll send you the final quote to approve before it goes live.</p></div></div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" type="button" aria-expanded="false">
          <span class="faq-num">03</span>
          <span class="faq-question">Something went wrong - what now?</span>
          <span class="faq-icon-wrap" aria-hidden="true"><svg class="faq-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
        </button>
        <div class="faq-panel" role="region"><div class="faq-panel-inner"><p>Tell us in the form and we'll get in touch within one business day to fix it. You can also reach us at <a href="mailto:info@wtflabsco.com">info@wtflabsco.com</a>.</p></div></div>
      </div>
    </div>
    <div class="faq-all-wrap reveal">
      <a href="/faqs.php" class="btn btn-lime faq-all-btn">View all FAQs <span aria-hidden="true">&rarr;</span></a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
