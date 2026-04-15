<?php
/**
 * components/prijs-rij.php
 * Eén prijsregel: label links, bedrag rechts
 *
 * Variabelen (via $prijs_rij array):
 *   $prijs_rij['label']   string  verplicht
 *   $prijs_rij['bedrag']  string  verplicht
 *
 * Gebruik:
 *   $prijs_rij = ['label' => 'Tot 40 m²', 'bedrag' => '€ 195'];
 *   include $root . 'includes/components/prijs-rij.php';
 */
$pr = $prijs_rij ?? [];
?>
<div class="prijs-rij">
  <span class="prijs-rij__label"><?= htmlspecialchars($pr['label'] ?? '') ?></span>
  <span class="prijs-rij__bedrag"><?= htmlspecialchars($pr['bedrag'] ?? '') ?></span>
</div>
