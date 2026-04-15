<?php
/**
 * includes/breadcrumb.php
 * Verwacht: $breadcrumbs = [['label'=>'Home','url'=>'/'],['label'=>'Energielabels','url'=>'/energielabels/'],['label'=>'Woningen']]
 */
if (empty($breadcrumbs)) return;
?>
<div class="breadcrumb">
  <div class="breadcrumb-inner">
    <?php foreach ($breadcrumbs as $i => $crumb): ?>
      <?php if ($i > 0): ?><span>›</span><?php endif; ?>
      <?php if (!empty($crumb['url'])): ?>
        <a href="<?= htmlspecialchars($crumb['url']) ?>"><?= htmlspecialchars($crumb['label']) ?></a>
      <?php else: ?>
        <span><?= htmlspecialchars($crumb['label']) ?></span>
      <?php endif; ?>
    <?php endforeach; ?>
  </div>
</div>
