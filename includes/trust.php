<?php
/**
 * includes/trust.php
 * Verwacht: $trust_items = [['icon'=>'<svg>...', 'label'=>'...', 'sub'=>'...']]
 * Of gebruik de standaard items als $trust_items leeg is.
 */
if (empty($trust_items)) {
  $trust_items = [
    ['svg' => '<path d="M8 1.5l1.8 3.6 4 .6-2.9 2.8.7 4L8 10.4l-3.6 1.9.7-4L2.2 5.7l4-.6z"/>', 'label' => 'Officieel erkend', 'sub' => 'Geregistreerd in EP-online'],
    ['svg' => '<circle cx="8" cy="8" r="6.5"/><path d="M8 4.5v4l2.5 1.5"/>', 'label' => 'Reactie binnen twee werkdagen', 'sub' => 'Snel en persoonlijk'],
    ['svg' => '<rect x="2" y="4" width="12" height="9" rx="1"/><path d="M5 4V3a3 3 0 016 0v1"/>', 'label' => 'Vaste prijzen', 'sub' => 'Geen verborgen kosten'],
    ['svg' => '<path d="M2 8c0-3.3 2.7-6 6-6s6 2.7 6 6-2.7 6-6 6-6-2.7-6-6z"/><path d="M5.5 8l1.5 1.5 3.5-3.5"/>', 'label' => 'Gecertificeerd EPA-adviseur', 'sub' => 'Heel Nederland'],
  ];
}
?>
<div class="trust-balk">
  <div class="trust-inner">
    <?php foreach ($trust_items as $item): ?>
      <div class="trust-item">
        <div class="trust-icon">
          <svg viewBox="0 0 16 16" fill="none" stroke="#1a5c32" stroke-width="1.4" stroke-linecap="round">
            <?= $item['svg'] ?>
          </svg>
        </div>
        <div>
          <div class="trust-label"><?= htmlspecialchars($item['label']) ?></div>
          <?php if (!empty($item['sub'])): ?>
            <div class="trust-sub"><?= htmlspecialchars($item['sub']) ?></div>
          <?php endif; ?>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
