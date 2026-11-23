<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/security.php';

$industries = ['Remodeling', 'Roofing', 'Handyman', 'Power Washing', 'HVAC', 'Plumbing', 'Pest Control', 'Pool Services', 'Landscaping'];
$budgets = ['$2,000 - $3,500', '$3,500 - $5,000', '$5,000 - $10,000', 'I am not sure. I\'d like to discuss.'];

$questions = [
  ['key' => 'frustration', 'type' => 'choice', 'text' => 'What feels most frustrating right now?', 'options' => [
    'No Marketing - No Leads - Only Referrals 🤷‍♂️',
    'Tried Marketing - Bad Experience - Wasted Money 😒',
    'Doing Great - But I want more 🤑',
  ]],
  ['key' => 'industry', 'type' => 'choice', 'text' => 'Which Industry are you in?', 'options' => $industries,
    'other_label' => 'Other', 'other_placeholder' => 'Which Industry are you in?'],
  ['key' => 'help', 'type' => 'choice', 'text' => 'What do you need help with?', 'options' => [
    'I need help with creating a new website',
    'I want to redesign my current website',
    'Right now, I need great marketing',
    'I need it all! Website and marketing both.',
  ]],
  ['key' => 'goal', 'type' => 'choice', 'text' => 'What do you want to achieve from your <span data-goal-target>website</span>?', 'options' => [
    'I want to get more customers',
    'I want to increase my sales',
    'I want to get better leads & bigger jobs',
  ]],
  ['key' => 'role', 'type' => 'choice', 'text' => 'How would you describe your role in your company?', 'options' => [
    'I’m the Owner / Founder of my company',
    'I’m the Co-Founder / Partner',
    'I’m the decision maker',
  ], 'other_label' => 'Other', 'other_placeholder' => 'How would you describe your role?'],
  ['key' => 'budget', 'type' => 'choice', 'text' => 'How much is a reasonable investment for your business growth?', 'options' => $budgets],
  ['key' => 'source_channel', 'type' => 'choice', 'text' => 'Almost there! How did you find us?', 'options' => [
    'You guys appeared on my Google Search',
    'I saw your ad on Meta',
    'I was referred to you guys',
  ]],
  ['key' => 'first_name', 'type' => 'name', 'text' => 'Great to know. Finally, let’s set up a time to discuss your needs. Tell us what’s your name?'],
  ['key' => 'call_time', 'type' => 'slot', 'text' => '<span data-name></span>, great to meet you! What would be a good time and day for us to speak?'],
  ['key' => 'contact', 'type' => 'contact', 'text' => 'Awesome, <span data-name></span>. Now, where should we send your meeting details? Enter your best email address and your phone'],
  ['key' => 'extras', 'type' => 'extras', 'text' => 'Leave blank or describe in your own words what’s your situation right now.'],
];
$letters = range('A', 'Z');
$show_gate = recaptcha_enabled() && !human_ok();
?>
<!DOCTYPE html>
<html lang="en" data-palette="index2">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Free Consultation | WTF Labs</title>
  <meta name="description" content="Answer a few quick questions and book your free consultation call with WTF Labs.">
  <meta name="robots" content="noindex">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/assets/css/consultation.css?v=<?php echo asset_version('assets/css/consultation.css'); ?>">
  <link rel="icon" href="/assets/images/logo-new-icon.png" type="image/png">
<?php if ($show_gate): ?>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
<?php endif; ?>
</head>
<body class="cq">
  <div class="cq-progress" aria-hidden="true"><span class="cq-progress-fill"></span></div>
  <div class="cq-logo"><img src="/assets/images/logo-thank-you-card.webp" alt="WTF Labs" width="72" height="70"></div>

<?php if ($show_gate): ?>
  <section class="cq-step cq-gate" data-gate>
    <div class="cq-inner">
      <p class="cq-q cq-gate-q">Before we start, please confirm you are not a robot.</p>
      <div class="cq-captcha"><div class="g-recaptcha" data-sitekey="<?php echo htmlspecialchars(security_value('recaptcha_site_key'), ENT_QUOTES); ?>" data-callback="cqHumanVerified"></div></div>
      <p class="cq-error" data-gate-error hidden></p>
    </div>
  </section>
<?php endif; ?>

  <form class="cq-form" id="cqForm" action="/send-mail.php" method="post" novalidate<?php echo otp_enabled() ? ' data-otp-on' : ''; ?><?php echo $show_gate ? ' data-gated hidden' : ''; ?>>
    <input type="text" name="website" value="" tabindex="-1" autocomplete="off" class="cq-hp" aria-hidden="true">
    <?php foreach ($questions as $i => $q): ?>
    <section class="cq-step" data-step="<?php echo $i; ?>" data-key="<?php echo $q['key']; ?>" data-type="<?php echo $q['type']; ?>"<?php echo $i === 0 && !$show_gate ? '' : ' hidden'; ?>>
      <div class="cq-inner">
        <p class="cq-q"><span class="cq-num"><?php echo $i + 1; ?><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h12M13 6l6 6-6 6"/></svg></span><span class="cq-q-text"><?php echo $q['text']; ?></span></p>

        <?php if ($q['type'] === 'choice'): ?>
        <div class="cq-options<?php echo count($q['options']) + (empty($q['other_label']) ? 0 : 1) > 6 ? ' cq-options--grid' : ''; ?>" role="radiogroup">
          <?php foreach ($q['options'] as $k => $opt): ?>
          <button type="button" class="cq-option" role="radio" aria-checked="false" data-value="<?php echo htmlspecialchars($opt, ENT_QUOTES); ?>"><span class="cq-key"><?php echo $letters[$k]; ?></span><span class="cq-option-text"><?php echo htmlspecialchars($opt); ?></span><svg class="cq-check" viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg></button>
          <?php endforeach; ?>
          <?php if (!empty($q['other_label'])): ?>
          <div class="cq-option cq-other" role="radio" aria-checked="false" tabindex="0" data-other><span class="cq-key"><?php echo $letters[count($q['options'])]; ?></span><span class="cq-option-text"><?php echo htmlspecialchars($q['other_label']); ?></span><input class="cq-other-input" type="text" maxlength="120" placeholder="<?php echo htmlspecialchars($q['other_placeholder'], ENT_QUOTES); ?>" aria-label="<?php echo htmlspecialchars($q['other_placeholder'], ENT_QUOTES); ?>" hidden><svg class="cq-check" viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg></div>
          <?php endif; ?>
        </div>
        <div class="cq-actions"><button type="button" class="cq-ok" data-next>Next</button></div>

        <?php elseif ($q['type'] === 'name'): ?>
        <input class="cq-input" type="text" name="first_name" autocomplete="given-name" placeholder="Type your answer here..." data-required>
        <div class="cq-actions"><button type="button" class="cq-ok" data-next>Next</button></div>

        <?php elseif ($q['type'] === 'slot'): ?>
        <div class="cq-cal">
          <div class="cq-cal-month">
            <div class="cq-cal-head">
              <button type="button" class="cq-cal-nav" data-month-prev aria-label="Previous month"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M15 6l-6 6 6 6"/></svg></button>
              <p class="cq-cal-title" data-month-title></p>
              <button type="button" class="cq-cal-nav" data-month-next aria-label="Next month"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9 6l6 6-6 6"/></svg></button>
            </div>
            <div class="cq-cal-week" aria-hidden="true"><span>Sun</span><span>Mon</span><span>Tue</span><span>Wed</span><span>Thu</span><span>Fri</span><span>Sat</span></div>
            <div class="cq-cal-grid" data-days></div>
          </div>
          <div class="cq-cal-times">
            <p class="cq-cal-date" data-day-title></p>
            <p class="cq-cal-tz"><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3a14 14 0 0 1 0 18M12 3a14 14 0 0 0 0 18"/></svg>Central Time (US &amp; Canada)</p>
            <div class="cq-cal-slots" data-slots></div>
          </div>
        </div>
        <p class="cq-error" data-slot-error hidden></p>
        <div class="cq-actions"><button type="button" class="cq-ok" data-next>Next</button></div>

        <?php elseif ($q['type'] === 'contact'): ?>
        <div class="cq-fields">
          <div class="cq-field">
            <label class="cq-label" for="cqEmail">Email</label>
            <div class="cq-field-row">
              <span class="cq-field-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><rect x="3" y="5" width="18" height="14" rx="2.5"/><path d="M4 7l8 6 8-6"/></svg></span>
              <input class="cq-input" id="cqEmail" type="email" name="email" autocomplete="email" inputmode="email" placeholder="name@example.com" data-required>
            </div>
          </div>
          <div class="cq-field">
            <label class="cq-label" for="cqPhone">Phone</label>
            <div class="cq-field-row">
              <div class="cq-cc" data-cc>
                <button type="button" class="cq-cc-btn" aria-haspopup="listbox" aria-expanded="false" aria-label="Country code" data-cc-toggle><img class="cq-cc-flag" src="https://flagcdn.com/w40/us.png" alt="" width="22" height="16" data-cc-flag><span data-cc-dial>+1</span><svg class="cq-cc-caret" viewBox="0 0 24 24" aria-hidden="true"><path d="M6 9l6 6 6-6"/></svg></button>
                <div class="cq-cc-menu" data-cc-menu hidden>
                  <input class="cq-cc-search" type="text" placeholder="Search country" aria-label="Search country" data-cc-search>
                  <ul class="cq-cc-list" role="listbox" data-cc-list></ul>
                </div>
              </div>
              <input class="cq-input" id="cqPhone" type="tel" name="phone" autocomplete="tel-national" inputmode="numeric" maxlength="15" placeholder="2015550123" data-required>
            </div>
          </div>
          <div class="cq-field cq-otp" data-otp hidden>
            <label class="cq-label" for="cqOtp">Verification code</label>
            <p class="cq-otp-note" data-otp-note></p>
            <div class="cq-field-row">
              <span class="cq-field-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M12 3l7 3v5c0 4.5-3 8.3-7 10-4-1.7-7-5.5-7-10V6l7-3z"/><path d="M9 12l2 2 4-4"/></svg></span>
              <input class="cq-input" id="cqOtp" type="text" inputmode="numeric" autocomplete="one-time-code" maxlength="6" placeholder="6-digit code">
            </div>
            <button type="button" class="cq-otp-resend" data-otp-resend>Resend code</button>
          </div>
        </div>
        <div class="cq-actions"><button type="button" class="cq-ok" data-next>Next</button></div>

        <?php else: ?>
        <textarea class="cq-input cq-textarea" name="message" rows="3" placeholder="Type your answer here..."></textarea>
        <div class="cq-actions"><button type="submit" class="cq-ok cq-submit">Submit</button></div>
        <p class="cq-error" data-submit-error hidden></p>
        <?php endif; ?>
        <p class="cq-error" data-field-error hidden></p>
      </div>
    </section>
    <?php endforeach; ?>
  </form>

  <div class="cq-nav">
    <button type="button" class="cq-nav-btn" data-prev aria-label="Previous question"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M15 6l-6 6 6 6"/></svg></button>
    <button type="button" class="cq-nav-btn" data-forward aria-label="Next question"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9 6l6 6-6 6"/></svg></button>
  </div>

  <script src="/assets/js/consultation.js?v=<?php echo asset_version('assets/js/consultation.js'); ?>" defer></script>
</body>
</html>
