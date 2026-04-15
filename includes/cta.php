<?php
/**
 * includes/cta.php
 * Verwacht:
 *   $cta_titel     (string) — standaard tekst als leeg
 *   $cta_subtitel  (string)
 *   $cta_knop      (string) — tekst primaire knop
 *   $cta_knop_url  (string) — url primaire knop
 *   $cta_garanties (array)  — ['tekst1', 'tekst2']
 */
$cta_titel     = $cta_titel     ?? 'Klaar om de volgende stap te zetten?';
$cta_subtitel  = $cta_subtitel  ?? 'Vul het aanvraagformulier in en STAP Energie neemt binnen twee werkdagen contact op.';
$cta_knop      = $cta_knop      ?? 'Aanvraag indienen →';
$cta_knop_url  = $cta_knop_url  ?? '#aanvraag';
$cta_garanties = $cta_garanties ?? ['Gecertificeerd EPA-adviseur', 'Officieel geregistreerd in EP-online', 'Reactie binnen twee werkdagen'];
?>
<section class="cta-sectie">
  <div class="cta-inner">
    <h2><?= htmlspecialchars($cta_titel) ?></h2>
    <p><?= htmlspecialchars($cta_subtitel) ?></p>
    <div class="cta-knoppen">
      <a href="<?= htmlspecialchars($cta_knop_url) ?>" class="btn-primair"><?= htmlspecialchars($cta_knop) ?></a>
      <a href="tel:06XXXXXXXX" class="btn-sec">Bel ons direct</a>
    </div>
    <?php if ($cta_garanties): ?>
      <div class="cta-garanties">
        <?php foreach ($cta_garanties as $g): ?>
          <span class="cta-garantie"><span class="cta-vink">✓</span> <?= htmlspecialchars($g) ?></span>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </div>
</section>
