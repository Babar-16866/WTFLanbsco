<?php
/**
 * Shared dual-row testimonial marquee (Word on the street).
 * Optional: $street_section_id, $street_kicker
 */
$street_section_id = $street_section_id ?? 'testimonials';
$street_kicker = $street_kicker ?? 'word on the street';
?>
<section class="street-section" id="<?php echo htmlspecialchars($street_section_id); ?>">
  <!--
  <div class="container">
    <p class="street-kicker reveal"><span></span> <?php echo htmlspecialchars($street_kicker); ?></p>
  </div>
  -->
  <div class="container">
    <div class="section-header center street-head reveal">
      <h2>&hellip;AND THE CROWD GOES <span class="accent-blue">WTF!</span></h2>
    </div>
  </div>

  <div class="street-rows reveal">
    <div class="street-row" data-dir="left">
      <div class="street-row-track">
        <!-- Video -->
        <article class="street-card street-card--photo street-card--video street-card--tall" data-video="<?= BASE ?>/assets/videos/testimonial-demo.mp4">
          <video class="street-video" src="<?= BASE ?>/assets/videos/testimonial-demo.mp4#t=0.1" muted loop playsinline preload="none" poster="<?= BASE ?>/assets/images/testimonial-demo-poster.jpg" tabindex="-1" aria-hidden="true"></video>
          <div class="street-photo-overlay">
            <span class="street-logo">kernel</span>
            <p>We've worked with them for many projects now and <strong>am always blown away</strong>.</p>
          </div>
        </article>
        <article class="street-card street-card--quote street-card--md">
          <span class="street-badge">Reverb</span>
          <p><strong>WTF Labs has the creative depth</strong> to go from an idea to a fully packaged and branded deliverable.</p>
          <div class="street-meta">
            <img loading="lazy" class="street-avatar" src="<?= BASE ?>/assets/images/team-2.jpg" alt="">
            <div class="street-meta-text">
              <strong>David Kalt</strong>
              <span class="street-stars" aria-label="5 stars">★★★★★</span>
            </div>
          </div>
        </article>
        <!-- Video -->
        <article class="street-card street-card--photo street-card--video street-card--wide" data-video="<?= BASE ?>/assets/videos/testimonial-demo.mp4">
          <video class="street-video" src="<?= BASE ?>/assets/videos/testimonial-demo.mp4#t=0.1" muted loop playsinline preload="none" poster="<?= BASE ?>/assets/images/testimonial-demo-poster.jpg" tabindex="-1" aria-hidden="true"></video>
          <div class="street-photo-overlay">
            <span class="street-logo">USERWAY</span>
            <p>Despite high expectations, they always over-delivered — a testament to their <strong>creative prowess</strong>.</p>
          </div>
        </article>
        <article class="street-card street-card--quote street-card--sm">
          <span class="street-badge">TELUS</span>
          <p>We had many detailed requirements which WTF Labs <strong>were able to easily meet.</strong></p>
          <div class="street-meta">
            <img loading="lazy" class="street-avatar" src="<?= BASE ?>/assets/images/team-3.jpg" alt="">
            <div class="street-meta-text">
              <strong>Colleen Doll</strong>
              <span class="street-stars" aria-label="5 stars">★★★★★</span>
            </div>
          </div>
        </article>
        <!-- Video -->
        <article class="street-card street-card--photo street-card--video street-card--tall" data-video="<?= BASE ?>/assets/videos/testimonial-demo.mp4">
          <video class="street-video" src="<?= BASE ?>/assets/videos/testimonial-demo.mp4#t=0.1" muted loop playsinline preload="none" poster="<?= BASE ?>/assets/images/testimonial-demo-poster.jpg" tabindex="-1" aria-hidden="true"></video>
          <div class="street-photo-overlay">
            <span class="street-logo">ROOT</span>
            <p>Everyone that sees the UI says that is the <strong>best looking UI</strong> I've ever seen.</p>
          </div>
        </article>
        <article class="street-card street-card--quote street-card--md">
          <span class="street-badge">FOLIO XXIV</span>
          <p>Extremely impressive. <strong>Best I've seen in class.</strong></p>
          <div class="street-meta">
            <img loading="lazy" class="street-avatar" src="<?= BASE ?>/assets/images/people-main.jpg" alt="">
            <div class="street-meta-text">
              <strong>FOLIO Team</strong>
              <span class="street-stars" aria-label="5 stars">★★★★★</span>
            </div>
          </div>
        </article>
      </div>
    </div>

    <div class="street-row" data-dir="right">
      <div class="street-row-track">
        <article class="street-card street-card--quote street-card--md">
          <span class="street-badge">Fairmarkit</span>
          <p>Despite high expectations, they always over-delivered — a testament to their <strong>creative prowess</strong>.</p>
          <div class="street-meta">
            <img loading="lazy" class="street-avatar" src="<?= BASE ?>/assets/images/people-office.jpg" alt="">
            <div class="street-meta-text">
              <strong>Oliver Belin</strong>
              <span class="street-stars" aria-label="5 stars">★★★★★</span>
            </div>
          </div>
        </article>
        <!-- Video -->
        <article class="street-card street-card--photo street-card--video street-card--tall" data-video="<?= BASE ?>/assets/videos/testimonial-demo.mp4">
          <video class="street-video" src="<?= BASE ?>/assets/videos/testimonial-demo.mp4#t=0.1" muted loop playsinline preload="none" poster="<?= BASE ?>/assets/images/testimonial-demo-poster.jpg" tabindex="-1" aria-hidden="true"></video>
          <div class="street-photo-overlay">
            <span class="street-logo">starbridge</span>
            <p>I can't believe you guys <strong>did all this in a week.</strong></p>
          </div>
        </article>
        <article class="street-card street-card--quote street-card--lg">
          <span class="street-badge">License Lounge</span>
          <p>We showed the designs to key customers and they <strong>absolutely loved it.</strong></p>
          <div class="street-meta">
            <img loading="lazy" class="street-avatar" src="<?= BASE ?>/assets/images/people-workshop.jpg" alt="">
            <div class="street-meta-text">
              <strong>Jay Nesbitt</strong>
              <span class="street-stars" aria-label="5 stars">★★★★★</span>
            </div>
          </div>
        </article>
        <!-- Video -->
        <article class="street-card street-card--photo street-card--video street-card--wide" data-video="<?= BASE ?>/assets/videos/testimonial-demo.mp4">
          <video class="street-video" src="<?= BASE ?>/assets/videos/testimonial-demo.mp4#t=0.1" muted loop playsinline preload="none" poster="<?= BASE ?>/assets/images/testimonial-demo-poster.jpg" tabindex="-1" aria-hidden="true"></video>
          <div class="street-photo-overlay">
            <span class="street-logo">Vivodyne</span>
            <p>Everyone that's seen has said that it's <strong>hands down the best</strong> website they've seen.</p>
          </div>
        </article>
        <article class="street-card street-card--quote street-card--sm">
          <span class="street-badge">Skyline</span>
          <p>The amount of work done in between <strong>speaks for itself.</strong></p>
          <div class="street-meta">
            <img loading="lazy" class="street-avatar" src="<?= BASE ?>/assets/images/team-1.jpg" alt="">
            <div class="street-meta-text">
              <strong>Vasya Tremsin</strong>
              <span class="street-stars" aria-label="5 stars">★★★★★</span>
            </div>
          </div>
        </article>
        <article class="street-card street-card--quote street-card--md">
          <span class="street-badge">Commerce</span>
          <p><strong>+30% signups</strong> and almost <strong>+50% cart conversion</strong> after the redesign.</p>
          <div class="street-meta">
            <img loading="lazy" class="street-avatar" src="<?= BASE ?>/assets/images/team-2.jpg" alt="">
            <div class="street-meta-text">
              <strong>Mark Solomon</strong>
              <span class="street-stars" aria-label="5 stars">★★★★★</span>
            </div>
          </div>
        </article>
      </div>
    </div>
  </div>

  <div class="container street-cta reveal">
    <a href="/contact.php" class="btn btn-lime btn-lg" data-open-popup>I Wanna Join Them!</a>
  </div>
</section>
