<?php
require_once __DIR__ . '/includes/config.php';

$industries = ['Remodeling', 'Roofing', 'Handyman', 'Power Washing', 'HVAC', 'Plumbing', 'Pest Control', 'Pool Services', 'Landscaping', 'Other'];
$budgets = ['$2,000 - $3,500', '$3,500 - $5,000', '$5,000 - $10,000', 'I am not sure. I\'d like to discuss.'];

$questions = [
  ['key' => 'frustration', 'type' => 'choice', 'text' => 'What feels most frustrating right now?', 'options' => [
    'No Marketing - No Leads - Only Referrals 🤷‍♂️',
    'Tried Marketing - Bad Experience - Wasted Money 😒',
    'Doing Great - But I want more 🤑',
  ]],
  ['key' => 'industry', 'type' => 'choice', 'text' => 'Which Industry are you in?', 'options' => $industries],
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
    'I’m the ultimate decision maker',
  ]],
  ['key' => 'budget', 'type' => 'choice', 'text' => 'How much is a reasonable investment for your business growth?', 'options' => $budgets],
  ['key' => 'source_channel', 'type' => 'choice', 'text' => 'Almost there! How did you find us?', 'options' => [
    'You guys appeared on my Google Search',
    'I saw your ad on Meta',
    'I was referred to you guys',
  ]],
  ['key' => 'first_name', 'type' => 'name', 'text' => 'Great to know. Finally, let’s set up a time to discuss your needs. But before that, what should I call you? What’s your first name?'],
  ['key' => 'call_time', 'type' => 'slot', 'text' => '<span data-name></span>, great to meet you! What would be a good time and day to give you a call?'],
  ['key' => 'contact', 'type' => 'contact', 'text' => 'Awesome, <span data-name></span>. Now, where should we send your meeting details? Enter your best email address and your phone'],
  ['key' => 'extras', 'type' => 'extras', 'text' => 'Extras… Describe in your own words or leave blank.'],
];
$letters = range('A', 'Z');
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
</head>
<body class="cq">
  <div class="cq-progress" aria-hidden="true"><span class="cq-progress-fill"></span></div>
  <div class="cq-logo"><img src="/assets/images/logo-new.webp" alt="WTF Labs" width="72" height="70"></div>

  <form class="cq-form" id="cqForm" action="/send-mail.php" method="post" novalidate>
    <input type="text" name="website" value="" tabindex="-1" autocomplete="off" class="cq-hp" aria-hidden="true">
    <?php foreach ($questions as $i => $q): ?>
    <section class="cq-step" data-step="<?php echo $i; ?>" data-key="<?php echo $q['key']; ?>" data-type="<?php echo $q['type']; ?>"<?php echo $i === 0 ? '' : ' hidden'; ?>>
      <div class="cq-inner">
        <p class="cq-q"><span class="cq-num"><?php echo $i + 1; ?><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h12M13 6l6 6-6 6"/></svg></span><span class="cq-q-text"><?php echo $q['text']; ?></span></p>

        <?php if ($q['type'] === 'choice'): ?>
        <div class="cq-options" role="radiogroup">
          <?php foreach ($q['options'] as $k => $opt): ?>
          <button type="button" class="cq-option" role="radio" aria-checked="false" data-value="<?php echo htmlspecialchars($opt, ENT_QUOTES); ?>"><span class="cq-key"><?php echo $letters[$k]; ?></span><span class="cq-option-text"><?php echo htmlspecialchars($opt); ?></span><svg class="cq-check" viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg></button>
          <?php endforeach; ?>
        </div>

        <?php elseif ($q['type'] === 'name'): ?>
        <input class="cq-input" type="text" name="first_name" autocomplete="given-name" placeholder="Type your answer here..." data-required>
        <div class="cq-actions"><button type="button" class="cq-ok" data-next>OK</button><span class="cq-hint">press <strong>Enter ↵</strong></span></div>

        <?php elseif ($q['type'] === 'slot'): ?>
        <p class="cq-tz">All times are in US Central Time.</p>
        <div class="cq-days" data-days></div>
        <div class="cq-slots" data-slots></div>
        <p class="cq-error" data-slot-error hidden></p>

        <?php elseif ($q['type'] === 'contact'): ?>
        <div class="cq-fields">
          <label class="cq-label">Email<input class="cq-input" type="email" name="email" autocomplete="email" inputmode="email" placeholder="name@example.com" data-required></label>
          <label class="cq-label">Phone<input class="cq-input" type="tel" name="phone" autocomplete="tel" inputmode="tel" placeholder="(201) 555-0123" data-required></label>
        </div>
        <div class="cq-actions"><button type="button" class="cq-ok" data-next>OK</button><span class="cq-hint">press <strong>Enter ↵</strong></span></div>

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
    <button type="button" class="cq-nav-btn" data-prev aria-label="Previous question"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M6 15l6-6 6 6"/></svg></button>
    <button type="button" class="cq-nav-btn" data-forward aria-label="Next question"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M6 9l6 6 6-6"/></svg></button>
  </div>

  <script src="/assets/js/consultation.js?v=<?php echo asset_version('assets/js/consultation.js'); ?>" defer></script>
</body>
</html>
