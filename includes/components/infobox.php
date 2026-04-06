<?php
/**
 * components/infobox.php
 * Waarschuwing of info blok
 *
 * Variabelen (via $infobox array):
 *   $infobox['tekst']    string  verplicht
 *   $infobox['titel']    string  optioneel — vette koptekst
 *   $infobox['variant']  string  optioneel — info (standaard) | waarschuwing | succes | fout
 *   $infobox['icoon']    string  optioneel — emoji of kleine tekst (bv. 'ℹ️')
 *
 * Gebruik:
 *   $infobox = ['tekst' => 'Let op: ...', 'variant' => 'waarschuwing'];
 *   include $root . 'includes/components/infobox.php';
 */
$ib = $infobox ?? [];
$variant = 'infobox--' . ($ib['variant'] ?? 'info');
$iconen  = ['info' => 'ℹ️', 'waarschuwing' => '⚠️', 'succes' => '✅', 'fout' => '❌'];
$icoon   = $ib['icoon'] ?? $iconen[$ib['variant'] ?? 'info'] ?? 'ℹ️';
?>
<div class="infobox <?= $variant ?>">
  <span class="infobox__icoon"><?= $icoon ?></span>
  <div class="infobox__tekst">
    <?php if (!empty($ib['titel'])): ?>
      <strong><?= htmlspecialchars($ib['titel']) ?></strong>
    <?php endif; ?>
    <?= htmlspecialchars($ib['tekst']) ?>
  </div>
</div>
