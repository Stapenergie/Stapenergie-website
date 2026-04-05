<?php
/**
 * includes/labelcheck.php
 * EP Online labelcheck widget
 *
 * Optionele variabelen:
 *   $lc_titel    (string) — standaard "Check uw energielabel"
 *   $lc_subtitel (string) — standaard toelichting
 *   $lc_id       (string) — unieke ID als widget meerdere keren op pagina staat
 */
$lc_titel    = $lc_titel    ?? 'Check uw energielabel';
$lc_subtitel = $lc_subtitel ?? 'Vul uw postcode en huisnummer in en ontdek direct of er een geldig energielabel geregistreerd staat voor uw adres.';
$lc_id       = $lc_id       ?? 'lc';
?>
<section class="labelcheck">
  <div class="container">
    <div class="labelcheck__inner">

      <div class="labelcheck__tekst">
        <span class="sec-label">Directe check</span>
        <h2><?= htmlspecialchars($lc_titel) ?></h2>
        <p><?= htmlspecialchars($lc_subtitel) ?></p>
      </div>

      <div class="labelcheck__widget">
        <div class="labelcheck__velden">
          <input class="form-input"
                 type="text"
                 id="<?= $lc_id ?>-postcode"
                 placeholder="Postcode (bijv. 3833 AB)"
                 maxlength="7"
                 autocomplete="postal-code">
          <input class="form-input"
                 type="text"
                 id="<?= $lc_id ?>-huisnummer"
                 placeholder="Huisnummer"
                 maxlength="10"
                 autocomplete="address-line2">
        </div>
        <button class="labelcheck__btn"
                id="<?= $lc_id ?>-btn"
                onclick="voerLabelcheckUit('<?= $lc_id ?>')">
          Zoek op &rarr;
        </button>
        <div class="labelcheck__loading" id="<?= $lc_id ?>-loading">
          Opzoeken in EP-online&hellip;
        </div>
        <div class="labelcheck__resultaat" id="<?= $lc_id ?>-resultaat"></div>
      </div>

    </div>
  </div>
</section>

<script>
(function() {
  function voerLabelcheckUit(id) {
    var postcode   = document.getElementById(id + '-postcode').value.trim().replace(/\s/g, '');
    var huisnummer = document.getElementById(id + '-huisnummer').value.trim();
    var resultaat  = document.getElementById(id + '-resultaat');
    var loading    = document.getElementById(id + '-loading');
    var btn        = document.getElementById(id + '-btn');

    // Valideer invoer
    if (!postcode || !huisnummer) {
      resultaat.className = 'labelcheck__resultaat labelcheck__resultaat--geen zichtbaar';
      resultaat.innerHTML = '<h5>Vul postcode en huisnummer in</h5><p>Beide velden zijn verplicht voor de check.</p>';
      return;
    }

    // Sla op in cookie voor leaddata (30 dagen)
    var exp = new Date();
    exp.setDate(exp.getDate() + 30);
    document.cookie = 'stap_check_postcode=' + encodeURIComponent(postcode)   + '; expires=' + exp.toUTCString() + '; path=/; SameSite=Lax';
    document.cookie = 'stap_check_hnr='      + encodeURIComponent(huisnummer) + '; expires=' + exp.toUTCString() + '; path=/; SameSite=Lax';

    // UI: laadstatus
    resultaat.className = 'labelcheck__resultaat';
    loading.classList.add('zichtbaar');
    btn.disabled = true;

    fetch('/api/labelcheck.php?postcode=' + encodeURIComponent(postcode) + '&huisnummer=' + encodeURIComponent(huisnummer))
      .then(function(r) {
        if (!r.ok) throw new Error('API niet bereikbaar');
        return r.json();
      })
      .then(function(data) {
        loading.classList.remove('zichtbaar');
        btn.disabled = false;

        if (data.heeft_label) {
          resultaat.className = 'labelcheck__resultaat labelcheck__resultaat--heeft zichtbaar';
          resultaat.innerHTML =
            '<h5>&#10003; Geldig energielabel gevonden</h5>' +
            '<p>Label: <strong>' + (data.label || 'onbekend') + '</strong>' +
            (data.geldig_tot ? ' &mdash; geldig tot ' + data.geldig_tot : '') + '.</p>' +
            '<p style="margin-top:.5rem;"><a href="/verduurzaming-subsidie/">Bekijk verduurzamingsmogelijkheden &rarr;</a></p>';
        } else {
          resultaat.className = 'labelcheck__resultaat labelcheck__resultaat--geen zichtbaar';
          resultaat.innerHTML =
            '<h5>&#9888; Geen geldig label gevonden</h5>' +
            '<p>Voor dit adres staat nog geen definitief energielabel geregistreerd in EP-online. Bij verkoop, verhuur of oplevering is dit verplicht.</p>' +
            '<p style="margin-top:.5rem;"><a href="#aanvraag">Energielabel aanvragen &rarr;</a></p>';
        }
      })
      .catch(function() {
        loading.classList.remove('zichtbaar');
        btn.disabled = false;
        resultaat.className = 'labelcheck__resultaat labelcheck__resultaat--fout zichtbaar';
        resultaat.innerHTML =
          '<h5>Check tijdelijk niet beschikbaar</h5>' +
          '<p>De directe check is momenteel niet bereikbaar. U kunt ook zelf zoeken via <a href="https://www.ep-online.nl" target="_blank" rel="noopener">ep-online.nl</a> of direct een aanvraag indienen.</p>' +
          '<p style="margin-top:.5rem;"><a href="#aanvraag">Aanvraag indienen &rarr;</a></p>';
      });
  }

  // Maak functie globaal zodat onclick hem kan aanroepen
  window.voerLabelcheckUit = voerLabelcheckUit;

  // Enter-toets in invoervelden
  ['<?= $lc_id ?>-postcode', '<?= $lc_id ?>-huisnummer'].forEach(function(id) {
    var el = document.getElementById(id);
    if (el) {
      el.addEventListener('keydown', function(e) {
        if (e.key === 'Enter') voerLabelcheckUit('<?= $lc_id ?>');
      });
    }
  });
})();
</script>
