<?php
/**
 * components/card.php
 * Eén kaart — gebruikt door section-kaarten.php
 *
 * Variabelen (via $card array):
 *   $card['titel']      string   verplicht
 *   $card['tekst']      string   optioneel — omschrijving
 *   $card['type']       string   optioneel — bovenste label (bv. "Woningtype")
 *   $card['icoon']      string   optioneel — rauwe SVG HTML, toont boven titel
 *   $card['foto']       string   optioneel — pad naar afbeelding
 *   $card['foto_alt']   string   optioneel — alt-tekst foto
 *   $card['badge']      string   optioneel — badge tekst bovenop foto
 *   $card['prijsrijen'] array    optioneel — [['label'=>'...','bedrag'=>'...']]
 *   $card['incl']       string   optioneel — kleine inclusief-tekst
 *   $card['cta_tekst']  string   optioneel — knoptekst
 *   $card['cta_url']    string   optioneel — knop url
 *   $card['cta_stijl']  string   optioneel — 'solid' (standaard) | 'outline'
 *   $card['variant']    string   optioneel — '' (standaard) | 'dark' (donkere CTA card)
 *   $card['uitgelicht'] bool     optioneel — groene rand
 *   $card['extra']      string   optioneel — vrije HTML, alleen voor uitzonderingen
 *
 * Gebruik:
 *   $card = ['titel' => 'Appartement', 'tekst' => '...', ...];
 *   include $root . 'includes/components/card.php';
 */

$c = $card ?? [];
$cta_stijl = ($c['cta_stijl'] ?? 'solid') === 'outline' ? 'btn--outline' : 'btn--primair';
$variant   = $c['variant'] ?? '';
$klassen   = 'card' . (!empty($c['uitgelicht']) ? ' card--uitgelicht' : '') . ($variant === 'dark' ? ' card--dark' : '');
?>
<div class="<?= $klassen ?>">
  <?php if (!empty($c['foto'])): ?>
    <img class="card__foto"
         src="<?= htmlspecialchars($c['foto']) ?>"
         alt="<?= htmlspecialchars($c['foto_alt'] ?? '') ?>"
         loading="lazy">
  <?php endif; ?>

  <div class="card__body">
    <?php if (!empty($c['icoon'])): ?>
      <div class="card__icoon"><?= $c['icoon'] ?></div>
    <?php endif; ?>
    <?php if (!empty($c['badge'])): ?>
      <span class="card__badge"><?= htmlspecialchars($c['badge']) ?></span>
    <?php endif; ?>

    <?php if (!empty($c['type'])): ?>
      <div class="card__type"><?= htmlspecialchars($c['type']) ?></div>
    <?php endif; ?>

    <h3 class="card__titel"><?= htmlspecialchars($c['titel']) ?></h3>

    <?php if (!empty($c['tekst'])): ?>
      <p class="card__tekst"><?= htmlspecialchars($c['tekst']) ?></p>
    <?php endif; ?>

    <?php if (!empty($c['prijsrijen'])): ?>
      <div class="prijs-rijen">
        <?php foreach ($c['prijsrijen'] as $rij): ?>
          <?php $prijs_rij = $rij; include $root . 'includes/components/prijs-rij.php'; ?>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>

    <?php if (!empty($c['incl'])): ?>
      <p class="card__incl"><?= htmlspecialchars($c['incl']) ?></p>
    <?php endif; ?>

    <?php if (!empty($c['extra'])): ?>
      <?= $c['extra'] ?>
    <?php endif; ?>

    <?php if (!empty($c['cta_tekst'])): ?>
      <div class="card__cta">
        <a href="<?= htmlspecialchars($c['cta_url'] ?? '#') ?>"
           class="btn <?= $cta_stijl ?> btn--vol">
          <?= htmlspecialchars($c['cta_tekst']) ?>
        </a>
      </div>
    <?php endif; ?>
  </div>
</div>
