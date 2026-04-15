<?php
/**
 * includes/formulier.php
 * Gebruik: <?php include $root . 'includes/formulier.php'; ?>
 * Verwacht variabelen: $f_dienst (label|verduurzaming|inkoop|"")
 *                      $f_type   (particulier|zakelijk|"")
 *                      $f_pagina (naam van de pagina voor notificatiemail)
 */
$f_dienst = $f_dienst ?? '';
$f_type   = $f_type   ?? '';
$f_pagina = $f_pagina ?? 'onbekend';
?>
<div id="contact" style="scroll-margin-top:80px;">
<div id="stap-formulier"
     data-dienst="<?= htmlspecialchars($f_dienst) ?>"
     data-type="<?= htmlspecialchars($f_type) ?>"
     data-pagina="<?= htmlspecialchars($f_pagina) ?>">
<!-- CSS: zie /assets/css/formulier.css -->
<div class="sf-card">
  <h3>Vraag vrijblijvend aan</h3>
  <p class="sf-sub">Energielabel, inkoop &amp; verduurzamingsadvies &mdash; reactie binnen twee werkdagen.</p>

  <form class="sf-stack" id="sf-form" novalidate>
    <input type="hidden" name="pagina" id="sf-pagina" value="">
    <input type="hidden" name="type"   id="sf-type-hidden" value="">
    <input type="hidden" name="dienst" id="sf-dienst-hidden" value="">
    <input type="hidden" name="berekende_prijs" id="sf-prijs-hidden" value="">

    <!-- Type: Particulier / Zakelijk -->
    <div class="sf-type-btns">
      <button type="button" class="sf-type-btn" id="sf-btn-particulier" onclick="sfSetType('particulier')">Particulier</button>
      <button type="button" class="sf-type-btn" id="sf-btn-zakelijk"    onclick="sfSetType('zakelijk')">Zakelijk</button>
    </div>

    <!-- Naam -->
    <div class="sf-row">
      <div>
        <label for="sf-voornaam" style="position:absolute;width:1px;height:1px;overflow:hidden;clip:rect(0,0,0,0);">Voornaam</label>
        <input class="sf-input" type="text" id="sf-voornaam" name="voornaam" placeholder="Voornaam" required>
      </div>
      <div>
        <label for="sf-achternaam" style="position:absolute;width:1px;height:1px;overflow:hidden;clip:rect(0,0,0,0);">Achternaam</label>
        <input class="sf-input" type="text" id="sf-achternaam" name="achternaam" placeholder="Achternaam">
      </div>
    </div>

    <!-- Bedrijfsnaam: alleen zichtbaar bij zakelijk -->
    <div id="sf-bedrijf-wrap" style="display:none;">
      <label for="sf-bedrijf" style="position:absolute;width:1px;height:1px;overflow:hidden;clip:rect(0,0,0,0);">Bedrijfsnaam</label>
      <input class="sf-input" type="text" id="sf-bedrijf" name="bedrijf" placeholder="Bedrijfsnaam">
    </div>

    <!-- Contact -->
    <div>
      <label for="sf-email" style="position:absolute;width:1px;height:1px;overflow:hidden;clip:rect(0,0,0,0);">E-mailadres</label>
      <input class="sf-input" type="email" id="sf-email" name="email" placeholder="E-mailadres" required>
    </div>
    <div>
      <label for="sf-telefoon" style="position:absolute;width:1px;height:1px;overflow:hidden;clip:rect(0,0,0,0);">Telefoonnummer</label>
      <input class="sf-input" type="tel" id="sf-telefoon" name="telefoon" placeholder="Telefoonnummer">
    </div>

    <!-- Waarvoor -->
    <div>
      <label for="sf-dienst-select" style="position:absolute;width:1px;height:1px;overflow:hidden;clip:rect(0,0,0,0);">Waarvoor wil je contact?</label>
      <select class="sf-select" id="sf-dienst-select" onchange="sfDienstGewijzigd()" required>
        <option value="" disabled selected>Waarvoor wil je contact?</option>
        <option value="label">Energielabel aanvragen</option>
        <option value="verduurzaming">Verduurzamingsadvies</option>
        <option value="inkoop">Energie inkoop advies</option>
        <option value="subsidie">Subsidie advies</option>
        <option value="anders">Weet ik nog niet</option>
      </select>
    </div>

    <!-- Conditioneel blok: Energielabel particulier -->
    <div class="sf-blok" id="sf-blok-label-particulier">
      <label for="sf-woningtype" style="position:absolute;width:1px;height:1px;overflow:hidden;clip:rect(0,0,0,0);">Type woning</label>
      <select class="sf-select" id="sf-woningtype" name="woningtype" onchange="sfBerekenPrijs()">
        <option value="" disabled selected>Type woning</option>
        <option value="appartement_klein">Appartement tot 40&#x202F;m&#xB2;</option>
        <option value="appartement_groot">Appartement 40&#x2013;100&#x202F;m&#xB2;</option>
        <option value="eengezins_tussen">Eengezinswoning (tussenwoning)</option>
        <option value="eengezins_hoek">Hoekwoning / 2-onder-1-kap</option>
        <option value="vrijstaand_klein">Vrijstaande woning tot 150&#x202F;m&#xB2;</option>
        <option value="vrijstaand_groot">Vrijstaande woning groter dan 150&#x202F;m&#xB2;</option>
      </select>
      <div class="sf-prijs-box" id="sf-prijs-particulier"></div>
      <div class="sf-row" style="margin-top:.1rem;">
        <input class="sf-input" type="text" name="postcode"    placeholder="Postcode">
        <input class="sf-input" type="text" name="huisnummer"  placeholder="Huisnummer">
      </div>
      <select class="sf-select" id="sf-periode-particulier" name="gewenste_periode" style="margin-top:.1rem;">
        <option value="" selected>Gewenste periode (optioneel)</option>
        <option value="Spoedaanvraag (binnen 1 week)">Spoedaanvraag &mdash; binnen 1 week</option>
        <option value="Binnen 1 maand">Binnen 1 maand</option>
        <option value="Geen voorkeur">Geen voorkeur</option>
      </select>
    </div>

    <!-- Conditioneel blok: Energielabel zakelijk -->
    <div class="sf-blok" id="sf-blok-label-zakelijk">
      <label for="sf-pandtype" style="position:absolute;width:1px;height:1px;overflow:hidden;clip:rect(0,0,0,0);">Type pand</label>
      <select class="sf-select" id="sf-pandtype" name="pandtype">
        <option value="" disabled selected>Type pand</option>
        <option value="Kantoor">Kantoor</option>
        <option value="Winkel / retail">Winkel / retail</option>
        <option value="Zorg / onderwijs">Zorg / onderwijs</option>
        <option value="Logistiek / industrie">Logistiek / industrie</option>
        <option value="Anders">Anders</option>
      </select>
      <label for="sf-oppervlakte" style="position:absolute;width:1px;height:1px;overflow:hidden;clip:rect(0,0,0,0);">Oppervlakte</label>
      <select class="sf-select" id="sf-oppervlakte" name="oppervlakte" onchange="sfBerekenPrijs()" style="margin-top:.1rem;">
        <option value="" disabled selected>Oppervlakte pand</option>
        <option value="klein">Tot 100&#x202F;m&#xB2;</option>
        <option value="middel">100&#x2013;500&#x202F;m&#xB2;</option>
        <option value="groot">Groter dan 500&#x202F;m&#xB2;</option>
      </select>
      <div class="sf-prijs-box" id="sf-prijs-zakelijk"></div>
      <div class="sf-row" style="margin-top:.1rem;">
        <input class="sf-input" type="text" name="postcode"   placeholder="Postcode">
        <input class="sf-input" type="text" name="huisnummer" placeholder="Huisnummer">
      </div>
      <select class="sf-select" id="sf-periode-zakelijk" name="gewenste_periode" style="margin-top:.1rem;">
        <option value="" selected>Gewenste periode (optioneel)</option>
        <option value="Spoedaanvraag (binnen 1 week)">Spoedaanvraag &mdash; binnen 1 week</option>
        <option value="Binnen 1 maand">Binnen 1 maand</option>
        <option value="Geen voorkeur">Geen voorkeur</option>
      </select>
    </div>

    <!-- Opmerking: altijd -->
    <textarea class="sf-input" name="bericht" rows="3" placeholder="Opmerking of toelichting (optioneel)" style="resize:vertical;"></textarea>

    <!-- Checkboxes -->
    <label class="sf-check">
      <input type="checkbox" id="sf-privacy" required>
      Ik geef toestemming voor het verwerken van mijn gegevens om contact met mij op te nemen. Ik heb de <a href="/privacyverklaring/">privacyverklaring</a> gelezen.
    </label>
    <label class="sf-check commercieel">
      <input type="checkbox" id="sf-commercieel" name="commercieel_optin" value="1">
      Ik geef ook toestemming om commercieel benaderd te worden door STAP Energie over relevante diensten via e-mail of telefoon.
    </label>

    <button type="button" class="sf-submit" onclick="sfVerstuur()">Aanvraag versturen &#x2192;</button>
    <p class="sf-note">Vrijblijvend &middot; Geen verplichtingen &middot; Binnen twee werkdagen reactie</p>
  </form>
</div>


<script>
(function() {

  var _prijzen = null;
  var _init    = false;

  // ── Prijzen ophalen bij laden ──────────────────────────────────────────────
  fetch('/api/prijzen.php')
    .then(function(r) { return r.json(); })
    .then(function(data) {
      _prijzen = data;
      if (!_init) sfInit();
    })
    .catch(function() {
      // Prijzen ophalen mislukt — formulier werkt nog steeds, prijs-box blijft verborgen
      if (!_init) sfInit();
    });

  // ── Initialiseer op basis van data-attributen ─────────────────────────────
  function sfInit() {
    _init = true;
    var wrap   = document.getElementById('stap-formulier');
    var dienst = wrap.dataset.dienst || '';
    var type   = wrap.dataset.type   || '';
    var pagina = wrap.dataset.pagina || 'homepage';

    document.getElementById('sf-pagina').value = pagina;

    if (dienst) {
      var sel = document.getElementById('sf-dienst-select');
      sel.value = dienst;
      sfDienstGewijzigd();
    }
    if (type) {
      sfSetType(type);
    }
  }

  // ── Type: Particulier / Zakelijk ──────────────────────────────────────────
  window.sfSetType = function(type) {
    document.getElementById('sf-type-hidden').value = type;

    var btnP = document.getElementById('sf-btn-particulier');
    var btnZ = document.getElementById('sf-btn-zakelijk');
    var bedrijfWrap = document.getElementById('sf-bedrijf-wrap');

    if (type === 'particulier') {
      btnP.classList.add('actief');
      btnZ.classList.remove('actief');
      bedrijfWrap.style.display = 'none';
    } else {
      btnZ.classList.add('actief');
      btnP.classList.remove('actief');
      bedrijfWrap.style.display = 'block';
    }
    sfToonConditieBlok();
  };

  // ── Dienst gewijzigd ──────────────────────────────────────────────────────
  window.sfDienstGewijzigd = function() {
    var val = document.getElementById('sf-dienst-select').value;
    document.getElementById('sf-dienst-hidden').value = val;
    sfToonConditieBlok();
  };

  // ── Toon het juiste conditionele blok ─────────────────────────────────────
  function sfToonConditieBlok() {
    var dienst = document.getElementById('sf-dienst-select').value;
    var type   = document.getElementById('sf-type-hidden').value;

    var blokLP = document.getElementById('sf-blok-label-particulier');
    var blokLZ = document.getElementById('sf-blok-label-zakelijk');

    blokLP.classList.remove('zichtbaar');
    blokLZ.classList.remove('zichtbaar');

    if (dienst === 'label') {
      if (type === 'particulier') {
        blokLP.classList.add('zichtbaar');
      } else if (type === 'zakelijk') {
        blokLZ.classList.add('zichtbaar');
      }
    }
  }

  // ── Live prijsberekening ──────────────────────────────────────────────────
  window.sfBerekenPrijs = function() {
    if (!_prijzen) return;

    var type = document.getElementById('sf-type-hidden').value;

    if (type === 'particulier') {
      var woningtype = document.getElementById('sf-woningtype').value;
      var prijs      = _prijzen.particulier && _prijzen.particulier[woningtype];
      var box        = document.getElementById('sf-prijs-particulier');
      sfToonPrijsBox(box, prijs);

    } else if (type === 'zakelijk') {
      var opp   = document.getElementById('sf-oppervlakte').value;
      var prijs = _prijzen.zakelijk && _prijzen.zakelijk[opp];
      var box   = document.getElementById('sf-prijs-zakelijk');
      sfToonPrijsBox(box, prijs);
    }
  };

  function sfToonPrijsBox(box, prijs) {
    if (!box || !prijs) return;

    var btwLabel = prijs.btw === 'excl.' ? ' excl. btw' : ' incl. btw';

    if (prijs.type === 'vast' && prijs.prijs) {
      box.textContent = '\u2714 Indicatieprijs: \u20ac\u00a0' + prijs.prijs + btwLabel;
      box.classList.add('zichtbaar');
      document.getElementById('sf-prijs-hidden').value = '\u20ac ' + prijs.prijs + btwLabel;
    } else if (prijs.type === 'offerte') {
      box.textContent = '\u2714 ' + (prijs.tekst || 'Offerte op maat \u2014 we nemen contact op.');
      box.classList.add('zichtbaar');
      document.getElementById('sf-prijs-hidden').value = prijs.tekst || 'Offerte op maat';
    } else {
      box.classList.remove('zichtbaar');
      document.getElementById('sf-prijs-hidden').value = '';
    }
  }

  // ── Formulier versturen ───────────────────────────────────────────────────
  window.sfVerstuur = async function() {
    var form   = document.getElementById('sf-form');
    var btn    = form.querySelector('.sf-submit');

    // Verwijder eerdere foutmelding
    var oudeFout = form.querySelector('.sf-error');
    if (oudeFout) oudeFout.remove();

    // Valideer verplichte velden
    var voornaam = document.getElementById('sf-voornaam').value.trim();
    var email    = document.getElementById('sf-email').value.trim();
    var privacy  = document.getElementById('sf-privacy').checked;
    var dienst   = document.getElementById('sf-dienst-select').value;

    if (!voornaam) { sfFout(btn, 'Vul je voornaam in.', document.getElementById('sf-voornaam')); return; }
    if (!email || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) { sfFout(btn, 'Vul een geldig e-mailadres in.', document.getElementById('sf-email')); return; }
    if (!privacy) { sfFout(btn, 'Ga akkoord met de privacyverklaring om door te gaan.', document.getElementById('sf-privacy')); return; }
    if (!dienst) { sfFout(btn, 'Geef aan waarvoor je contact wilt.', document.getElementById('sf-dienst-select')); return; }

    if (btn.disabled) return;
    btn.disabled = true;
    var origTekst = btn.textContent;
    btn.textContent = 'Bezig met versturen\u2026';

    var data = new FormData(form);

    try {
      var response = await fetch('/api/contact.php', { method: 'POST', body: data });
      var json     = await response.json();

      if (json.succes) {
        var card = form.closest('.sf-card');
        card.innerHTML =
          '<div class="sf-succes">' +
          '<svg width="48" height="48" viewBox="0 0 48 48" fill="none" aria-hidden="true">' +
          '<circle cx="24" cy="24" r="24" fill="#e8f5ed"/>' +
          '<path d="M14 24.5l7 7 13-14" stroke="#1a5c32" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>' +
          '</svg>' +
          '<h3>Aanvraag ontvangen!</h3>' +
          '<p>We nemen <strong>binnen twee werkdagen</strong> contact met je op.<br>Je ontvangt ook een bevestiging per e-mail.</p>' +
          '</div>';
        // Scroll terug naar het formulier zodat de succesmelding zichtbaar is
        card.scrollIntoView({ behavior: 'smooth', block: 'center' });
      } else {
        btn.disabled    = false;
        btn.textContent = origTekst;
        sfFout(btn, (json.fouten && json.fouten[0]) || 'Er ging iets mis. Probeer het opnieuw.');
      }
    } catch(err) {
      btn.disabled    = false;
      btn.textContent = origTekst;
      sfFout(btn, 'Het versturen is helaas mislukt. Probeer het later opnieuw of stuur een e-mail naar info@stapenergie.nl.');
    }
  };

  function sfFout(btn, bericht, veld) {
    var p = document.createElement('p');
    p.className   = 'sf-error';
    p.textContent = bericht;
    btn.insertAdjacentElement('afterend', p);

    // Scroll naar het problematische veld en geef het focus + rode rand
    if (veld) {
      veld.style.borderColor = '#c0392b';
      veld.scrollIntoView({ behavior: 'smooth', block: 'center' });
      veld.focus();
      // Herstel de rand zodra de gebruiker iets typt of aanpast
      veld.addEventListener('input', function herstel() {
        veld.style.borderColor = '';
        veld.removeEventListener('input', herstel);
      }, { once: true });
      veld.addEventListener('change', function herstel() {
        veld.style.borderColor = '';
        veld.removeEventListener('change', herstel);
      }, { once: true });
    }
  }

})();
</script>
</div>
</div>
</div>
