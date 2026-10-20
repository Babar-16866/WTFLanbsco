<?php
/**
 * Shared themed page banner (About-style split hero).
 *
 * Set before include:
 *   $banner_kicker, $banner_h1 (HTML ok), $banner_lead
 * Optional:
 *   $banner_breadcrumb (plain text after Services /)
 *   $banner_crumb_label, $banner_crumb_href (parent crumb, Services by default)
 *   $banner_primary_label, $banner_primary_href, $banner_primary_popup (bool)
 *   $banner_secondary_label, $banner_secondary_href
 *   $banner_proof (array of [strong, span])
 *   $banner_image, $banner_float1, $banner_float2, $banner_card
 */
$banner_kicker = $banner_kicker ?? '';
$banner_breadcrumb = $banner_breadcrumb ?? '';
$banner_crumb_label = $banner_crumb_label ?? 'Services';
$banner_crumb_href = $banner_crumb_href ?? '/services.php';
$banner_h1 = $banner_h1 ?? '';
$banner_lead = $banner_lead ?? '';
$banner_primary_label = $banner_primary_label ?? 'Free Consultation';
$banner_primary_href = $banner_primary_href ?? '/contact.php';
$banner_primary_popup = $banner_primary_popup ?? true;
$banner_primary_step = $banner_primary_step ?? false;
$banner_secondary_label = $banner_secondary_label ?? '';
$banner_secondary_href = $banner_secondary_href ?? '/works.php';
$banner_micro = $banner_micro ?? '';
$banner_proof = $banner_proof ?? [
  ['400+', 'projects'],
  ['2018', 'since'],
  ['4.8', 'rating'],
  ['48+', 'reviews'],
];
$banner_image = $banner_image ?? '/assets/images/mockup-main.webp';
$banner_float1 = $banner_float1 ?? '/assets/images/team-1.jpg';
$banner_float2 = $banner_float2 ?? '/assets/images/team-2.jpg';
?>
<section class="page-hero about-hero">
  <div class="container">
    <div class="about-hero-box reveal">
      <div class="about-hero-copy">
        <?php if ($banner_breadcrumb !== ''): ?>
          <p class="about-hero-crumb"><a href="<?php echo htmlspecialchars($banner_crumb_href); ?>"><?php echo htmlspecialchars($banner_crumb_label); ?></a> / <?php echo htmlspecialchars($banner_breadcrumb); ?></p>
        <?php endif; ?>
        <?php if ($banner_kicker !== ''): ?>
          <p class="page-kicker"><?php echo htmlspecialchars($banner_kicker); ?></p>
        <?php endif; ?>
        <h1><?php echo $banner_h1; ?></h1>
        <?php if ($banner_lead !== ''): ?>
          <p class="about-hero-lead"><?php echo htmlspecialchars($banner_lead); ?></p>
        <?php endif; ?>
        <div class="page-hero-actions">
          <a href="<?php echo htmlspecialchars($banner_primary_href); ?>" class="btn btn-lime btn-lg"<?php echo $banner_primary_step ? ' data-open-step-popup' : ($banner_primary_popup ? ' data-open-popup' : ''); ?>><?php echo htmlspecialchars($banner_primary_label); ?></a>
          <?php if ($banner_secondary_label !== ''): ?>
            <a href="<?php echo htmlspecialchars($banner_secondary_href); ?>" class="btn btn-outline-white btn-lg"><?php echo htmlspecialchars($banner_secondary_label); ?></a>
          <?php endif; ?>
        </div>
        <?php if ($banner_micro !== ''): ?>
          <p class="page-hero-micro"><?php echo htmlspecialchars($banner_micro); ?></p>
        <?php endif; ?>
        <?php if (!empty($banner_proof)): ?>
          <div class="about-hero-proof">
            <?php foreach ($banner_proof as $chip): ?>
              <div class="about-hero-proof-item">
                <strong><?php echo htmlspecialchars($chip[0]); ?></strong>
                <span><?php echo htmlspecialchars($chip[1]); ?></span>
              </div>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
      </div>

      <div class="about-hero-visual" aria-hidden="true">
        <div class="about-hero-visual-main">
          <img src="<?php echo htmlspecialchars($banner_image); ?>" alt="">
        </div>
        <div class="about-hero-float about-hero-float--1">
          <img src="<?php echo htmlspecialchars($banner_float1); ?>" alt="">
        </div>
        <div class="about-hero-float about-hero-float--2">
          <img src="<?php echo htmlspecialchars($banner_float2); ?>" alt="">
        </div>
        <div class="about-hero-lime-orb"></div>
      </div>
    </div>
  </div>
</section>
<?php
// Prevent bleed into next include on same request
unset(
  $banner_kicker, $banner_breadcrumb, $banner_crumb_label, $banner_crumb_href,
  $banner_h1, $banner_lead,
  $banner_primary_label, $banner_primary_href, $banner_primary_popup, $banner_primary_step,
  $banner_secondary_label, $banner_secondary_href, $banner_micro,
  $banner_proof, $banner_image, $banner_float1, $banner_float2, $banner_card
);
?>
