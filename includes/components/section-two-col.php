<?php
/**
 * sections/section-two-col.php
 * Twee kolommen: tekst links + vrije rechterkant (foto, card, checklist)
 *
 * Variabelen:
 *   $two_col_variant    string  optioneel — wit (standaard) | grijs | groen
 *   $two_col_label      string  optioneel
 *   $two_col_titel      string  verplicht
 *   $two_col_tekst      string  optioneel — alinea tekst links
 *   $two_col_omgekeerd  bool    optioneel — visueel rechts, tekst links omwisselen
 *   $two_col_links      string  optioneel — vrije HTML linkerkolom (als $two_col_tekst niet volstaat)
 *   $two_col_rechts     string  verplicht — vrije HTML rechterkolom (foto, card, component)
 *   $two_col_cta        array   optioneel — ['tekst'=>'...','url'=>'...','stijl'=>'primair']
 */
$two_col_variant   = $two_col_variant   ?? 'wit';
$two_col_omgekeerd = $two_col_omgekeerd ?? false;
$two_col_label     = $two_col_label     ?? '';
$two_col_titel     = $two_col_titel     ?? '';
$two_col_tekst     = $two_col_tekst     ?? '';
$two_col_links     = $two_col_links     ?? '';
$two_col_rechts    = $two_col_rechts    ?? '';
$two_col_cta       = $two_col_cta       ?? [];
$omgekeerd_class   = $two_col_omgekeerd ? ' sectie-two-col__grid--omgekeerd' : '';
?>
<section class="sectie sectie--<?= $two_col_variant ?>">
  <div class="sectie__inner">
    <div class="sectie-two-col__grid<?= $omgekeerd_class ?>">
      <div class="sectie-two-col__content">
        <?php if ($two_col_label): ?>
          <span class="sectie__label"><?= htmlspecialchars($two_col_label) ?></span>
        <?php endif; ?>
        <h2 class="sectie__titel"><?= htmlspecialchars($two_col_titel) ?></h2>
        <?php if ($two_col_tekst): ?>
          <p class="sectie__intro" style="margin-bottom:0;"><?= htmlspecialchars($two_col_tekst) ?></p>
        <?php endif; ?>
        <?php if ($two_col_links): ?>
          <?= $two_col_links ?>
        <?php endif; ?>
        <?php if ($two_col_cta): ?>
          <a href="<?= htmlspecialchars($two_col_cta['url'] ?? '#') ?>"
             class="btn btn--<?= htmlspecialchars($two_col_cta['stijl'] ?? 'primair') ?>">
            <?= htmlspecialchars($two_col_cta['tekst'] ?? '') ?>
          </a>
        <?php endif; ?>
      </div>
      <div class="sectie-two-col__visueel">
        <?= $two_col_rechts ?>
      </div>
    </div>
  </div>
</section>
<?php unset($two_col_variant,$two_col_omgekeerd,$two_col_label,$two_col_titel,$two_col_tekst,$two_col_links,$two_col_rechts,$two_col_cta,$omgekeerd_class); ?>
