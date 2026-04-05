<?php
/**
 * includes/hero.php
 * Page hero component voor subpagina's
 *
 * Verwacht variabelen:
 *   $hero_titel    (string, verplicht)
 *   $hero_subtitel (string, optioneel)
 *   $hero_label    (string, optioneel — het kleine label boven de titel)
 *   $hero_checks   (array, optioneel — lijst met checkmarks)
 *   $hero_variant  (string, optioneel — 'groen' (standaard) | 'wit')
 *   $hero_anchor   (string, optioneel — href van de CTA knop)
 *   $hero_cta      (string, optioneel — tekst van de CTA knop)
 */
$hero_variant  = $hero_variant  ?? 'groen';
$hero_label    = $hero_label    ?? '';
$hero_subtitel = $hero_subtitel ?? '';
$hero_checks   = $hero_checks   ?? [];
$hero_anchor   = $hero_anchor   ?? '#aanvraag';
$hero_cta      = $hero_cta      ?? '';
?>
<section class="page-hero hero--<?= htmlspecialchars($hero_variant) ?>">
  <div class="container">
    <?php if ($hero_label): ?>
      <span class="sec-label"><?= htmlspecialchars($hero_label) ?></span>
    <?php endif; ?>

    <h1 style="font-family: var(--serif); font-size: clamp(2rem, 4vw, 3.2rem); line-height: 1.1; letter-spacing: -.02em; margin-bottom: 1rem;">
      <?= htmlspecialchars($hero_titel) ?>
    </h1>

    <?php if ($hero_subtitel): ?>
      <p style="font-size: 1rem; max-width: 520px; line-height: 1.75; margin-bottom: <?= $hero_checks ? '1.5rem' : '0' ?>;">
        <?= htmlspecialchars($hero_subtitel) ?>
      </p>
    <?php endif; ?>

    <?php if ($hero_checks): ?>
      <ul class="hero-checks">
        <?php foreach ($hero_checks as $check): ?>
          <li><?= htmlspecialchars($check) ?></li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>

    <?php if ($hero_cta): ?>
      <a href="<?= htmlspecialchars($hero_anchor) ?>" class="btn-wit" style="margin-top: 2rem; display: inline-flex;">
        <?= htmlspecialchars($hero_cta) ?> &rarr;
      </a>
    <?php endif; ?>
  </div>
</section>
