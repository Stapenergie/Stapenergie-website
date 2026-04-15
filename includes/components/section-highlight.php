<?php
/**
 * sections/section-highlight.php
 * Urgentie/mededeling balk — smal, boven of tussen secties
 *
 * Variabelen:
 *   $highlight_variant  string  optioneel — oranje (standaard) | groen | rood
 *   $highlight_badge    string  optioneel — badge tekst (bv. "Nieuw per 29 mei")
 *   $highlight_tekst    string  verplicht — mag <strong> en <a> bevatten
 */
$highlight_variant = $highlight_variant ?? 'oranje';
$highlight_badge   = $highlight_badge   ?? '';
$highlight_tekst   = $highlight_tekst   ?? '';
$variant_class     = $highlight_variant === 'groen' ? ' sectie-highlight--groen'
                   : ($highlight_variant === 'rood'  ? ' sectie-highlight--rood' : '');
?>
<div class="sectie-highlight<?= $variant_class ?>">
  <div class="sectie-highlight__inner">
    <?php if ($highlight_badge): ?>
      <span class="sectie-highlight__badge"><?= htmlspecialchars($highlight_badge) ?></span>
    <?php endif; ?>
    <span class="sectie-highlight__tekst"><?= $highlight_tekst /* mag HTML */ ?></span>
  </div>
</div>
<?php unset($highlight_variant,$highlight_badge,$highlight_tekst,$variant_class); ?>
