<?php
/**
 * components/icon-tekst.php
 * Icoon + titel + tekst — voor voordelen, situaties, wetgeving items
 *
 * Variabelen (via $icon_tekst array):
 *   $icon_tekst['icoon']   string  verplicht — rauwe SVG HTML
 *   $icon_tekst['titel']   string  verplicht
 *   $icon_tekst['tekst']   string  optioneel
 *   $icon_tekst['badges']  array   optioneel — [['tekst'=>'...','variant'=>'...']]
 *   $icon_tekst['extra']   string  optioneel — vrije HTML
 *
 * Gebruik:
 *   $icon_tekst = ['icoon' => '<svg>...</svg>', 'titel' => '...', 'tekst' => '...'];
 *   include $root . 'includes/components/icon-tekst.php';
 */
$it = $icon_tekst ?? [];
?>
<div class="icon-tekst">
  <div class="icon-tekst__icoon"><?= $it['icoon'] ?? '' ?></div>
  <div class="icon-tekst__content">
    <div class="icon-tekst__titel"><?= htmlspecialchars($it['titel'] ?? '') ?></div>
    <?php if (!empty($it['tekst'])): ?>
      <div class="icon-tekst__tekst"><?= htmlspecialchars($it['tekst']) ?></div>
    <?php endif; ?>
    <?php if (!empty($it['badges'])): ?>
      <div style="display:flex;gap:5px;margin-top:6px;flex-wrap:wrap;">
        <?php foreach ($it['badges'] as $b): ?>
          <?php $badge = $b; include $root . 'includes/components/badge.php'; ?>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
    <?php if (!empty($it['extra'])): ?><?= $it['extra'] ?><?php endif; ?>
  </div>
</div>
