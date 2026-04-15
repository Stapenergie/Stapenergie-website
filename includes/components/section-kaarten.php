<?php
/**
 * sections/section-kaarten.php
 * Grid van kaarten — woningtypes, segmenten, situaties
 *
 * Variabelen:
 *   $kaarten_variant  string  optioneel — wit (standaard) | grijs | groen
 *   $kaarten_label    string  optioneel — kleine tekst boven titel
 *   $kaarten_titel    string  verplicht
 *   $kaarten_intro    string  optioneel
 *   $kaarten_cols     int     optioneel — 2 | 3 (standaard) | 4
 *   $kaarten_id       string  optioneel — HTML id attribuut op de sectie
 *   $kaarten_noot     string  optioneel — kleine tekst onder grid
 *   $kaarten_items    array   verplicht — zie components/card.php
 *
 * Gebruik: zie components/card.php voor item-structuur
 */
$kaarten_variant = $kaarten_variant ?? 'wit';
$kaarten_cols    = $kaarten_cols    ?? 3;
$kaarten_id      = $kaarten_id      ?? '';
$kaarten_label   = $kaarten_label   ?? '';
$kaarten_titel   = $kaarten_titel   ?? '';
$kaarten_intro   = $kaarten_intro   ?? '';
$kaarten_noot    = $kaarten_noot    ?? '';
$kaarten_items   = $kaarten_items   ?? [];
?>
<section class="sectie sectie--<?= $kaarten_variant ?>"<?= $kaarten_id ? ' id="' . htmlspecialchars($kaarten_id) . '"' : '' ?>>
  <div class="sectie__inner">
    <?php if ($kaarten_label): ?>
      <span class="sectie__label"><?= htmlspecialchars($kaarten_label) ?></span>
    <?php endif; ?>
    <h2 class="sectie__titel"><?= htmlspecialchars($kaarten_titel) ?></h2>
    <?php if ($kaarten_intro): ?>
      <p class="sectie__intro"><?= htmlspecialchars($kaarten_intro) ?></p>
    <?php endif; ?>

    <div class="sectie-kaarten__grid sectie-kaarten__grid--<?= $kaarten_cols ?>">
      <?php foreach ($kaarten_items as $card): ?>
        <?php include $root . 'includes/components/card.php'; ?>
      <?php endforeach; ?>
    </div>

    <?php if ($kaarten_noot): ?>
      <p class="sectie-kaarten__noot"><?= $kaarten_noot /* mag HTML bevatten */ ?></p>
    <?php endif; ?>
  </div>
</section>
<?php
// Reset variabelen zodat ze de volgende sectie niet beïnvloeden
unset($kaarten_variant,$kaarten_cols,$kaarten_id,$kaarten_label,$kaarten_titel,$kaarten_intro,$kaarten_noot,$kaarten_items,$card);
?>
