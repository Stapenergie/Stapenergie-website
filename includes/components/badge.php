<?php
/**
 * components/badge.php
 * Klein label/tag
 *
 * Variabelen (via $badge array):
 *   $badge['tekst']    string  verplicht
 *   $badge['variant']  string  optioneel — groen (standaard) | blauw | oranje | rood
 *
 * Gebruik:
 *   $badge = ['tekst' => 'Particulier', 'variant' => 'groen'];
 *   include $root . 'includes/components/badge.php';
 */
$b = $badge ?? [];
$variant = 'badge--' . ($b['variant'] ?? 'groen');
?>
<span class="badge <?= $variant ?>"><?= htmlspecialchars($b['tekst'] ?? '') ?></span>
