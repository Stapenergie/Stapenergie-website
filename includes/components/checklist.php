<?php
/**
 * components/checklist.php
 * Lijst met vinkjes
 *
 * Variabelen (via $checklist array):
 *   $checklist['items']   array   verplicht — ['tekst1', 'tekst2', ...]
 *
 * Gebruik:
 *   $checklist = ['items' => ['Gecertificeerd EPA-adviseur', 'Vaste prijzen']];
 *   include $root . 'includes/components/checklist.php';
 */
$cl = $checklist ?? [];
?>
<ul class="checklist">
  <?php foreach ($cl['items'] ?? [] as $item): ?>
    <li class="checklist__item">
      <span class="checklist__vink">✓</span>
      <span><?= htmlspecialchars($item) ?></span>
    </li>
  <?php endforeach; ?>
</ul>
