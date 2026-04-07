<?php
/**
 * sections/section-stappen.php
 * Genummerde stappen met verbindingslijn
 *
 * Variabelen:
 *   $stappen_variant  string  optioneel — wit | grijs (standaard)
 *   $stappen_label    string  optioneel
 *   $stappen_titel    string  verplicht
 *   $stappen_intro    string  optioneel
 *   $stappen_cols     int     optioneel — 2 | 3 | 4 (standaard)
 *   $stappen_items    array   verplicht — [['nummer'=>1,'titel'=>'...','tekst'=>'...']]
 *
 * Item velden:
 *   nummer  int     verplicht
 *   titel   string  verplicht
 *   tekst   string  verplicht
 */
$stappen_variant = $stappen_variant ?? 'grijs';
$stappen_cols    = $stappen_cols    ?? 4;
$stappen_label   = $stappen_label   ?? '';
$stappen_titel   = $stappen_titel   ?? '';
$stappen_intro   = $stappen_intro   ?? '';
$stappen_items   = $stappen_items   ?? [];
?>
<section class="sectie sectie--<?= $stappen_variant ?>">
  <div class="sectie__inner">
    <?php if ($stappen_label): ?>
      <span class="sectie__label"><?= htmlspecialchars($stappen_label) ?></span>
    <?php endif; ?>
    <h2 class="sectie__titel"><?= htmlspecialchars($stappen_titel) ?></h2>
    <?php if ($stappen_intro): ?>
      <p class="sectie__intro"><?= htmlspecialchars($stappen_intro) ?></p>
    <?php endif; ?>

    <div class="sectie-stappen__grid sectie-stappen__grid--<?= $stappen_cols ?>">
      <?php foreach ($stappen_items as $stap): ?>
        <div class="stap">
          <div class="stap__nummer"><?= (int)($stap['nummer'] ?? 0) ?></div>
          <h3 class="stap__titel"><?= htmlspecialchars($stap['titel'] ?? '') ?></h3>
          <p class="stap__tekst"><?= htmlspecialchars($stap['tekst'] ?? '') ?></p>
          <?php if (!empty($stap['extra'])): ?><?= $stap['extra'] ?><?php endif; ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php unset($stappen_variant,$stappen_cols,$stappen_label,$stappen_titel,$stappen_intro,$stappen_items,$stap); ?>
