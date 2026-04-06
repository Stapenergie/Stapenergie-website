<?php
/**
 * includes/hero.php
 * Universele hero component — twee varianten
 *
 * VARIANT: hero--groot (homepage)
 * ────────────────────────────────
 * $hero_variant  = 'groot'
 * $hero_bg       = '/images/hero.jpg'
 * $hero_label    = 'Energielabel, inkoop & verduurzamingsadvies'
 * $hero_titel    = 'Duurzame impact<br>maken is <em>leuk</em>'  (mag HTML)
 * $hero_desc     = 'STAP Energie helpt...'
 * $hero_checks   = ['Officieel erkend...', 'Reactie binnen twee werkdagen']
 * $hero_link     = ['url'=>'#diensten', 'tekst'=>'Bekijk alle diensten →']
 * $hero_formulier = true   (voegt formulier-blok toe rechts)
 *
 * VARIANT: hero--sub (subpagina's)
 * ────────────────────────────────
 * $hero_variant  = 'sub'  (standaard)
 * $hero_eyebrow  = 'Gecertificeerd EPA-adviseur'
 * $hero_titel    = 'Energielabel voor uw woning — <em>snel en persoonlijk</em>'
 * $hero_lead     = 'Of u nu verkoopt...'
 * $hero_usps     = ['Officieel geregistreerd in EP-online', ...]
 * $hero_cta      = 'Label aanvragen →'
 * $hero_cta_url  = '#aanvraag'
 * $hero_cta2     = 'Bel direct'           (optioneel tweede knop)
 * $hero_cta2_url = 'tel:06XXXXXXXX'
 */

$hero_variant    = $hero_variant    ?? 'sub';
$hero_bg         = $hero_bg         ?? '';
$hero_label      = $hero_label      ?? '';
$hero_eyebrow    = $hero_eyebrow    ?? '';
$hero_titel      = $hero_titel      ?? '';
$hero_desc       = $hero_desc       ?? '';
$hero_lead       = $hero_lead       ?? '';
$hero_checks     = $hero_checks     ?? [];
$hero_usps       = $hero_usps       ?? [];
$hero_link       = $hero_link       ?? [];
$hero_cta        = $hero_cta        ?? '';
$hero_cta_url    = $hero_cta_url    ?? '#aanvraag';
$hero_cta2       = $hero_cta2       ?? 'Bel direct';
$hero_cta2_url   = $hero_cta2_url   ?? 'tel:06XXXXXXXX';
$hero_formulier  = $hero_formulier  ?? false;
?>

<?php if ($hero_variant === 'groot'): ?>
<!-- HERO GROOT (homepage) -->
<section class="hero hero--groot" id="hero">
  <?php if ($hero_bg): ?>
    <img src="<?= htmlspecialchars($hero_bg) ?>" alt="" class="hero-bg" fetchpriority="high">
  <?php endif; ?>
  <div class="hero-overlay"></div>
  <div class="hero-inner">
    <div class="hero-content">
      <?php if ($hero_label): ?>
        <span class="hero-label"><?= htmlspecialchars($hero_label) ?></span>
      <?php endif; ?>
      <h1 class="hero-title"><?= $hero_titel /* mag HTML bevatten */ ?></h1>
      <?php if ($hero_desc): ?>
        <p class="hero-desc"><?= htmlspecialchars($hero_desc) ?></p>
      <?php endif; ?>
      <?php if ($hero_checks): ?>
        <ul class="hero-checks">
          <?php foreach ($hero_checks as $check): ?>
            <li><?= htmlspecialchars($check) ?></li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>
      <?php if ($hero_link): ?>
        <a href="<?= htmlspecialchars($hero_link['url']) ?>" class="hero-link">
          <?= htmlspecialchars($hero_link['tekst']) ?>
        </a>
      <?php endif; ?>
    </div>
    <?php if ($hero_formulier): ?>
      <div id="contact" style="scroll-margin-top:80px;">
        <div id="stap-formulier"
             data-dienst="<?= htmlspecialchars($f_dienst ?? '') ?>"
             data-type="<?= htmlspecialchars($f_type ?? '') ?>"
             data-pagina="<?= htmlspecialchars($f_pagina ?? 'homepage') ?>">
          <?php include $root . 'includes/formulier.php'; ?>
        </div>
      </div>
    <?php endif; ?>
  </div>
</section>

<?php else: ?>
<!-- HERO SUB (subpagina's) -->
<section class="hero hero--sub"<?php if ($hero_bg): ?> style="--hero-bg: url('<?= htmlspecialchars($hero_bg) ?>')"<?php endif; ?>>
  <div class="hero-inner">
    <?php if ($hero_eyebrow): ?>
      <div class="hero-eyebrow">
        <div class="hero-eyebrow-dot"></div>
        <?= htmlspecialchars($hero_eyebrow) ?>
      </div>
    <?php endif; ?>
    <h1><?= $hero_titel /* mag HTML bevatten */ ?></h1>
    <?php if ($hero_lead): ?>
      <p class="hero-lead"><?= htmlspecialchars($hero_lead) ?></p>
    <?php endif; ?>
    <?php if ($hero_usps): ?>
      <div class="hero-usps">
        <?php foreach ($hero_usps as $usp): ?>
          <div class="hero-usp">
            <div class="hero-usp-vink">✓</div>
            <?= htmlspecialchars($usp) ?>
          </div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
    <?php if ($hero_cta): ?>
      <div class="hero-ctas">
        <a href="<?= htmlspecialchars($hero_cta_url) ?>" class="btn-primair">
          <?= htmlspecialchars($hero_cta) ?>
        </a>
        <?php if ($hero_cta2): ?>
          <a href="<?= htmlspecialchars($hero_cta2_url) ?>" class="btn-sec">
            <?= htmlspecialchars($hero_cta2) ?>
          </a>
        <?php endif; ?>
      </div>
    <?php endif; ?>
  </div>
</section>
<?php endif; ?>
