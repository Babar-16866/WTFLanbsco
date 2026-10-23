<?php
/**
 * Shared dual-row testimonial marquee (Word on the street).
 * Optional: $street_section_id, $street_kicker
 */
$street_section_id = $street_section_id ?? 'testimonials';
$street_kicker = $street_kicker ?? 'word on the street';
$street_eyebrow = $street_eyebrow ?? '';
$street_heading = $street_heading ?? '&hellip;AND THE CROWD GOES <span class="accent-blue">WTF!</span>';
$street_desc_set = isset($street_desc);
$street_desc = $street_desc ?? '';
?>
<section class="street-section" id="<?php echo htmlspecialchars($street_section_id); ?>">
  <div class="container">
    <div class="section-header center street-head reveal">
<?php if ($street_eyebrow !== ''): ?>
      <p class="subheading"><?php echo htmlspecialchars($street_eyebrow); ?></p>
<?php endif; ?>
      <h2><?php echo $street_heading; ?></h2>
<?php if ($street_desc_set || $street_desc !== ''): ?>
      <p class="section-desc center-desc"><?php echo htmlspecialchars($street_desc); ?></p>
<?php endif; ?>
    </div>
  </div>

  <div class="street-rows reveal">
    <div class="street-row" data-dir="left">
      <div class="street-row-track">
        <article class="street-card street-card--photo street-card--video street-card--wide" data-video="<?= BASE ?>/assets/videos/wtf.mp4">
          <video class="street-video" src="<?= BASE ?>/assets/videos/wtf-preview.mp4" muted loop playsinline preload="none" poster="<?= BASE ?>/assets/images/wtf-poster.jpg" tabindex="-1" aria-hidden="true"></video>
          <div class="street-photo-overlay">
            <span class="street-logo">USERWAY</span>
            <p>Despite high expectations, they always over-delivered — a testament to their <strong>creative prowess</strong>.</p>
          </div>
        </article>
        <article class="street-card street-card--quote street-card--md">
          <span class="street-badge">Cedarline HVAC</span>
          <p>&quot;Noman actually listened to what we wanted instead of pushing a bunch of stuff we didn&#39;t need. The whole process was surprisingly easy.&quot;</p>
          <div class="street-meta">
            <img loading="lazy" class="street-avatar" src="<?= BASE ?>/assets/images/team-1.jpg" alt="">
            <div class="street-meta-text">
              <strong>Travis Mercer</strong>
              <span class="street-stars" aria-label="5 stars">★★★★★</span>
            </div>
          </div>
        </article>
        <article class="street-card street-card--photo street-card--video street-card--wide" data-video="<?= BASE ?>/assets/videos/wtflabs-02.webm">
          <video class="street-video" src="<?= BASE ?>/assets/videos/wtflabs-02-preview.webm" muted loop playsinline preload="none" poster="<?= BASE ?>/assets/images/wtflabs-02-poster.jpg" tabindex="-1" aria-hidden="true"></video>
          <div class="street-photo-overlay">
            <span class="street-logo">Vivodyne</span>
            <p>Everyone that's seen has said that it's <strong>hands down the best</strong> website they've seen.</p>
          </div>
        </article>
        <article class="street-card street-card--quote street-card--md">
          <span class="street-badge">Copper Peak Roofing</span>
          <p>&quot;We&#39;ve dealt with agencies before, but Bilal made communication a lot easier. He understood our business and paid attention to the little details.&quot;</p>
          <div class="street-meta">
            <img loading="lazy" class="street-avatar" src="<?= BASE ?>/assets/images/team-2.jpg" alt="">
            <div class="street-meta-text">
              <strong>Dorian Wells</strong>
              <span class="street-stars" aria-label="5 stars">★★★★★</span>
            </div>
          </div>
        </article>
        <article class="street-card street-card--photo street-card--video street-card--wide" data-video="<?= BASE ?>/assets/videos/wtf.mp4">
          <video class="street-video" src="<?= BASE ?>/assets/videos/wtf-preview.mp4" muted loop playsinline preload="none" poster="<?= BASE ?>/assets/images/wtf-poster.jpg" tabindex="-1" aria-hidden="true"></video>
          <div class="street-photo-overlay">
            <span class="street-logo">USERWAY</span>
            <p>Despite high expectations, they always over-delivered — a testament to their <strong>creative prowess</strong>.</p>
          </div>
        </article>
        <article class="street-card street-card--quote street-card--sm">
          <span class="street-badge">Harbor Bend Plumbing</span>
          <p>&quot;The new website looks fantastic. It&#39;s cleaner, easier to navigate, and finally feels like it represents our company properly. Really happy with WTF Labs.&quot;</p>
          <div class="street-meta">
            <img loading="lazy" class="street-avatar" src="<?= BASE ?>/assets/images/team-3.jpg" alt="">
            <div class="street-meta-text">
              <strong>Lauren Whitcomb</strong>
              <span class="street-stars" aria-label="5 stars">★★★★★</span>
            </div>
          </div>
        </article>
        <article class="street-card street-card--photo street-card--video street-card--wide" data-video="<?= BASE ?>/assets/videos/wtflabs-02.webm">
          <video class="street-video" src="<?= BASE ?>/assets/videos/wtflabs-02-preview.webm" muted loop playsinline preload="none" poster="<?= BASE ?>/assets/images/wtflabs-02-poster.jpg" tabindex="-1" aria-hidden="true"></video>
          <div class="street-photo-overlay">
            <span class="street-logo">Vivodyne</span>
            <p>Everyone that's seen has said that it's <strong>hands down the best</strong> website they've seen.</p>
          </div>
        </article>
        <article class="street-card street-card--quote street-card--md">
          <span class="street-badge">Stone &amp; Spruce Landscaping</span>
          <p>&quot;Noman and Bilal were great to work with. What stood out most was how quickly they understood what we were trying to accomplish.&quot;</p>
          <div class="street-meta">
            <img loading="lazy" class="street-avatar" src="<?= BASE ?>/assets/images/team-2.jpg" alt="">
            <div class="street-meta-text">
              <strong>Elliot Hayes</strong>
              <span class="street-stars" aria-label="5 stars">★★★★★</span>
            </div>
          </div>
        </article>
        <article class="street-card street-card--quote street-card--sm">
          <span class="street-badge">Brightlane Auto Detailing</span>
          <p>&quot;Man, what a difference. Our old site looked like it hadn&#39;t been touched in ten years. This is exactly the kind of upgrade we needed.&quot;</p>
          <div class="street-meta">
            <img loading="lazy" class="street-avatar" src="<?= BASE ?>/assets/images/team-1.jpg" alt="">
            <div class="street-meta-text">
              <strong>Marcus Bell</strong>
              <span class="street-stars" aria-label="5 stars">★★★★★</span>
            </div>
          </div>
        </article>
      </div>
    </div>

    <div class="street-row" data-dir="right">
      <div class="street-row-track">
        <article class="street-card street-card--photo street-card--video street-card--wide" data-video="<?= BASE ?>/assets/videos/wtflabs-02.webm">
          <video class="street-video" src="<?= BASE ?>/assets/videos/wtflabs-02-preview.webm" muted loop playsinline preload="none" poster="<?= BASE ?>/assets/images/wtflabs-02-poster.jpg" tabindex="-1" aria-hidden="true"></video>
          <div class="street-photo-overlay">
            <span class="street-logo">Vivodyne</span>
            <p>Everyone that's seen has said that it's <strong>hands down the best</strong> website they've seen.</p>
          </div>
        </article>
        <article class="street-card street-card--quote street-card--md">
          <span class="street-badge">Northfield Insulation</span>
          <p>&quot;Bilal was patient with all my questions, and trust me, I had plenty. Never felt rushed or pressured into anything.&quot;</p>
          <div class="street-meta">
            <img loading="lazy" class="street-avatar" src="<?= BASE ?>/assets/images/team-3.jpg" alt="">
            <div class="street-meta-text">
              <strong>Tessa Monroe</strong>
              <span class="street-stars" aria-label="5 stars">★★★★★</span>
            </div>
          </div>
        </article>
        <article class="street-card street-card--quote street-card--md">
          <span class="street-badge">Juniper Ridge Renovations</span>
          <p>&quot;I appreciated that they weren&#39;t afraid to tell us when something could be done better. Noman brought ideas we honestly hadn&#39;t considered.&quot;</p>
          <div class="street-meta">
            <img loading="lazy" class="street-avatar" src="<?= BASE ?>/assets/images/people-main.jpg" alt="">
            <div class="street-meta-text">
              <strong>Graham Ellison</strong>
              <span class="street-stars" aria-label="5 stars">★★★★★</span>
            </div>
          </div>
        </article>
        <article class="street-card street-card--quote street-card--md">
          <span class="street-badge">Bluecrest Pressure Washing</span>
          <p>&quot;Good communication, solid work, and no unnecessary back-and-forth. That&#39;s really all I ask for when hiring someone. Would work with them again.&quot;</p>
          <div class="street-meta">
            <img loading="lazy" class="street-avatar" src="<?= BASE ?>/assets/images/people-office.jpg" alt="">
            <div class="street-meta-text">
              <strong>Shane Porter</strong>
              <span class="street-stars" aria-label="5 stars">★★★★★</span>
            </div>
          </div>
        </article>
        <article class="street-card street-card--photo street-card--video street-card--wide" data-video="<?= BASE ?>/assets/videos/wtf.mp4">
          <video class="street-video" src="<?= BASE ?>/assets/videos/wtf-preview.mp4" muted loop playsinline preload="none" poster="<?= BASE ?>/assets/images/wtf-poster.jpg" tabindex="-1" aria-hidden="true"></video>
          <div class="street-photo-overlay">
            <span class="street-logo">USERWAY</span>
            <p>Despite high expectations, they always over-delivered — a testament to their <strong>creative prowess</strong>.</p>
          </div>
        </article>
        <article class="street-card street-card--quote street-card--md">
          <span class="street-badge">Oakline Garage Doors</span>
          <p>&quot;Bilal and Noman made the entire experience feel collaborative. We always knew what was happening and had plenty of opportunities to give input.&quot;</p>
          <div class="street-meta">
            <img loading="lazy" class="street-avatar" src="<?= BASE ?>/assets/images/team-2.jpg" alt="">
            <div class="street-meta-text">
              <strong>Adriana Holt</strong>
              <span class="street-stars" aria-label="5 stars">★★★★★</span>
            </div>
          </div>
        </article>
        <article class="street-card street-card--quote street-card--lg">
          <span class="street-badge">Westmark Electrical</span>
          <p>&quot;What I liked about WTF Labs was that they kept things simple. No confusing technical explanations, just clear answers and a plan that made sense.&quot;</p>
          <div class="street-meta">
            <img loading="lazy" class="street-avatar" src="<?= BASE ?>/assets/images/people-workshop.jpg" alt="">
            <div class="street-meta-text">
              <strong>Caleb Russo</strong>
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
