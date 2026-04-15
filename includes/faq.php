<?php
/**
 * includes/faq.php
 * FAQ accordion component
 *
 * Verwacht variabelen:
 *   $faq_titel  (string, optioneel — standaard "Veelgestelde vragen")
 *   $faq_label  (string, optioneel — het kleine label boven de titel)
 *   $faq_items  (array van ['vraag' => '...', 'antwoord' => '...'])
 *   $faq_bg     (string, optioneel — 'grijs' (standaard) | 'wit')
 */
$faq_titel = $faq_titel ?? 'Veelgestelde vragen';
$faq_label = $faq_label ?? 'FAQ';
$faq_bg    = $faq_bg    ?? 'grijs';
$faq_items = $faq_items ?? [];
if (!$faq_items) return; // Geen items? Niet renderen
?>
<section class="section <?= $faq_bg === 'grijs' ? 'sec-grijs' : '' ?>" id="faq">
  <div class="container" style="max-width: 720px;">
    <span class="sec-label"><?= htmlspecialchars($faq_label) ?></span>
    <h2 class="sec-title"><?= htmlspecialchars($faq_titel) ?></h2>
    <div class="faq__lijst">
      <?php foreach ($faq_items as $i => $item): ?>
        <div class="faq__item">
          <button class="faq__vraag" aria-expanded="false" aria-controls="faq-antwoord-<?= $i ?>">
            <?= htmlspecialchars($item['vraag']) ?>
          </button>
          <div class="faq__antwoord" id="faq-antwoord-<?= $i ?>" role="region">
            <p><?= $item['antwoord'] /* Mag HTML bevatten, zorg dat input vertrouwd is */ ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<script>
(function() {
  document.querySelectorAll('.faq__vraag').forEach(function(vraag) {
    vraag.addEventListener('click', function() {
      var antwoord = vraag.nextElementSibling;
      var isOpen   = vraag.classList.contains('open');
      // Sluit alle andere items
      document.querySelectorAll('.faq__vraag').forEach(function(v) {
        v.classList.remove('open');
        v.setAttribute('aria-expanded', 'false');
        if (v.nextElementSibling) v.nextElementSibling.style.maxHeight = null;
      });
      // Open dit item als het gesloten was
      if (!isOpen) {
        vraag.classList.add('open');
        vraag.setAttribute('aria-expanded', 'true');
        if (antwoord) antwoord.style.maxHeight = antwoord.scrollHeight + 'px';
      }
    });
  });
})();
</script>
