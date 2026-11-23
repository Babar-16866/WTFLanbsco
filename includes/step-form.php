<?php
$cq_first_options = [
  'No Marketing - No Leads - Only Referrals 🤷‍♂️',
  'Tried Marketing - Bad Experience - Wasted Money 😒',
  'Doing Great - But I want more 🤑',
];
?>
        <div class="cq-card" data-cq-start>
          <div class="cq-card-progress" aria-hidden="true"><span></span></div>
          <p class="form-step-title">Start Here</p>
          <p class="cq-card-q">What is your current situation right now?</p>
          <div class="cq-card-options" role="list">
            <?php foreach ($cq_first_options as $i => $opt): ?>
            <a class="cq-card-option" role="listitem" href="/consultation?a1=<?php echo $i; ?>" target="_blank" rel="noopener"><span class="cq-card-key"><?php echo chr(65 + $i); ?></span><span><?php echo htmlspecialchars($opt); ?></span></a>
            <?php endforeach; ?>
          </div>
        </div>
