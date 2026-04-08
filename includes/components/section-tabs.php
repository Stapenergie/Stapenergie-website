<?php
/**
 * sections/section-tabs.php
 * Geswitchte tabs met gestructureerde content
 *
 * Variabelen:
 *   $tabs_variant  string  optioneel — wit | grijs (standaard)
 *   $tabs_label    string  optioneel
 *   $tabs_titel    string  verplicht
 *   $tabs_intro    string  optioneel
 *   $tabs_id       string  optioneel — HTML id
 *   $tabs_items    array   verplicht:
 *     [
 *       'tab_label' => 'Particulier',
 *       'titel'     => 'Voor particulieren',   optioneel
 *       'items'     => [                        optioneel — icon-tekst items
 *         ['icoon'=>'<svg>...</svg>', 'titel'=>'...', 'tekst'=>'...', 'badges'=>[]]
 *       ],
 *       'extra'     => '',                      optioneel — vrije HTML
 *     ]
 */
$tabs_variant = $tabs_variant ?? 'grijs';
$tabs_label   = $tabs_label   ?? '';
$tabs_titel   = $tabs_titel   ?? '';
$tabs_intro   = $tabs_intro   ?? '';
$tabs_id      = $tabs_id      ?? 'tabs-' . uniqid();
$tabs_items   = $tabs_items   ?? [];
?>
<section class="sectie sectie--<?= $tabs_variant ?>">
  <div class="sectie__inner">
    <?php if ($tabs_label): ?>
      <span class="sectie__label"><?= htmlspecialchars($tabs_label) ?></span>
    <?php endif; ?>
    <h2 class="sectie__titel"><?= htmlspecialchars($tabs_titel) ?></h2>
    <?php if ($tabs_intro): ?>
      <p class="sectie__intro"><?= htmlspecialchars($tabs_intro) ?></p>
    <?php endif; ?>

    <div id="<?= htmlspecialchars($tabs_id) ?>">
      <div class="sectie-tabs__nav">
        <?php foreach ($tabs_items as $i => $tab): ?>
          <button class="sectie-tabs__knop <?= $i === 0 ? 'sectie-tabs__knop--actief' : '' ?>"
                  onclick="stapTabsWissel('<?= htmlspecialchars($tabs_id) ?>', <?= $i ?>)">
            <?= htmlspecialchars($tab['tab_label'] ?? '') ?>
          </button>
        <?php endforeach; ?>
      </div>

      <?php foreach ($tabs_items as $i => $tab): ?>
        <div class="sectie-tabs__panel <?= $i === 0 ? 'sectie-tabs__panel--actief' : '' ?>">
          <?php if (!empty($tab['titel'])): ?>
            <h3 class="sectie-tabs__tab-titel">
              <?= htmlspecialchars($tab['titel']) ?>
            </h3>
          <?php endif; ?>

          <?php if (!empty($tab['items'])): ?>
            <div class="sectie-tabs__content">
              <?php foreach ($tab['items'] as $item): ?>
                <?php $icon_tekst = $item; include $root . 'includes/components/icon-tekst.php'; ?>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>

          <?php if (!empty($tab['extra'])): ?>
            <?= $tab['extra'] ?>
          <?php endif; ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<script>
function stapTabsWissel(containerId, actief) {
  var container = document.getElementById(containerId);
  if (!container) return;
  container.querySelectorAll('.sectie-tabs__knop').forEach(function(k, i) {
    k.classList.toggle('sectie-tabs__knop--actief', i === actief);
  });
  container.querySelectorAll('.sectie-tabs__panel').forEach(function(p, i) {
    p.classList.toggle('sectie-tabs__panel--actief', i === actief);
  });
}
</script>
<?php unset($tabs_variant,$tabs_label,$tabs_titel,$tabs_intro,$tabs_id,$tabs_items,$tab,$item,$i); ?>
