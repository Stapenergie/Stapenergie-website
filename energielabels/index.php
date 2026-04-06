<?php
$root        = dirname(dirname(__FILE__)) . '/';
$title       = 'Energielabel Aanvragen | Officieel & Erkend | STAP Energie';
$description = 'Officieel energielabel voor uw woning of bedrijfspand. STAP Energie — gecertificeerd EPA-adviseur, vaste prijzen, heel Nederland. Reactie binnen twee werkdagen.';
$canonical   = 'https://stapenergie.nl/energielabels/';

$breadcrumbs = [
  ['label' => 'Home',         'url' => '/'],
  ['label' => 'Energielabels'],
];

$cta_titel     = 'Klaar om uw energielabel aan te vragen?';
$cta_subtitel  = 'Vul het aanvraagformulier in en STAP Energie neemt binnen twee werkdagen contact op.';
$cta_knop      = 'Energielabel aanvragen →';
$cta_knop_url  = '#aanvraag';
$cta_garanties = ['Gecertificeerd EPA-adviseur', 'Officieel geregistreerd in EP-online', 'Reactie binnen twee werkdagen'];

$faq_label = 'Veelgestelde vragen';
$faq_titel = 'Alles over het energielabel';
$faq_items = [
  ['vraag' => 'Wanneer is een energielabel verplicht?',
   'antwoord' => 'Een energielabel is verplicht bij verkoop, verhuur of oplevering van een woning of bedrijfspand. Zonder geldig label riskeert u een boete van de ILT.'],
  ['vraag' => 'Hoe lang is een energielabel geldig?',
   'antwoord' => 'Een energielabel is 10 jaar geldig na registratie in EP-online. Na verduurzamingsmaatregelen kunt u uw label laten aanpassen via herlabelen.'],
  ['vraag' => 'Wat is het verschil tussen een woning- en een utiliteitslabel?',
   'antwoord' => 'Het woninglabel geldt voor alle woningen — appartementen, rijtjeswoningen, vrijstaande woningen. Het utiliteitslabel geldt voor kantoren, winkels, zorggebouwen en andere niet-woningen. De methodiek verschilt per gebouwtype.'],
  ['vraag' => 'Hoe lang duurt de opname?',
   'antwoord' => 'Een woningopname duurt gemiddeld 1 à 2 uur. Voor een bedrijfspand hangt de duur af van de omvang en het type gebouw. Na de opname ontvangt u het label doorgaans binnen één week.'],
  ['vraag' => 'Wat kost een energielabel?',
   'antwoord' => 'De prijs hangt af van het type en de oppervlakte. Voor woningen starten de prijzen vanaf € 195 incl. btw. Voor bedrijfspanden vanaf € 495 excl. btw. U ziet de exacte indicatieprijs direct in het aanvraagformulier.'],
];

include $root . 'includes/head.php';
include $root . 'includes/nav.php';
include $root . 'includes/breadcrumb.php';
?>

<!-- ══ URGENTIE BALK ══ -->
<div class="urgentie-balk">
  <div class="container">
    <div class="urgentie-inner">
      <span class="urgentie-badge">Nieuw per 29 mei 2026</span>
      <span class="urgentie-tekst"><strong>Nieuw labelontwerp (EPBD IV) &amp; uitgebreide labelplicht:</strong> monumenten niet langer uitgezonderd — alle publiek toegankelijke bedrijfspanden &gt;250m² moeten het label zichtbaar ophangen.</span>
      <a href="#wetgeving" class="urgentie-link">Meer over de regelgeving →</a>
    </div>
  </div>
</div>

<?php
// Hero
$hero_variant  = 'sub';
$hero_eyebrow  = 'Officieel & erkend energielabel';
$hero_titel    = 'Energielabel voor uw woning of bedrijfspand';
$hero_lead     = 'Verplicht bij verkoop, verhuur en oplevering. STAP Energie verzorgt officiële energielabels voor woningen én utiliteit — gecertificeerd, snel en voor een vaste prijs.';
$hero_usps     = [
  'Officieel erkend &amp; geregistreerd in EP-online',
  'Basismethodiek — bestaande bouw (woningen én utiliteit)',
  'Label 10 jaar geldig na afgifte',
  'Reactie binnen twee werkdagen — heel Nederland',
];
$hero_cta      = 'Label aanvragen →';
$hero_cta_url  = '#aanvraag';
$hero_cta2     = 'Bel direct';
$hero_cta2_url = 'tel:06XXXXXXXX';
include $root . 'includes/hero.php';
?>

<!-- USP balk -->
<div class="usp-balk">
  <div class="container">
    <div class="usp-grid">
      <div class="usp-item">
        <div class="usp-icon">
          <svg width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 1l2 4h4l-3 3 1 4-4-2-4 2 1-4-3-3h4z" fill="currentColor"/></svg>
        </div>
        <div><strong>Officieel erkend</strong><span>Geregistreerd in EP-online</span></div>
      </div>
      <div class="usp-item">
        <div class="usp-icon">
          <svg width="18" height="18" viewBox="0 0 18 18" fill="none"><circle cx="9" cy="9" r="7" stroke="currentColor" stroke-width="1.5"/><path d="M9 5v4l3 2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
        </div>
        <div><strong>10 jaar geldig</strong><span>Na afgifte direct bruikbaar</span></div>
      </div>
      <div class="usp-item">
        <div class="usp-icon">
          <svg width="18" height="18" viewBox="0 0 18 18" fill="none"><circle cx="9" cy="9" r="7" stroke="currentColor" stroke-width="1.5"/><path d="M6 9l2 2 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </div>
        <div><strong>Basismethodiek</strong><span>Bestaande bouw — woning &amp; utiliteit</span></div>
      </div>
      <div class="usp-item">
        <div class="usp-icon">
          <svg width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 2L2 7v9h5v-5h4v5h5V7L9 2z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/></svg>
        </div>
        <div><strong>Aan huis &amp; op locatie</strong><span>Leusden, Amersfoort &amp; omgeving</span></div>
      </div>
    </div>
  </div>
</div>

<?php
// Labelcheck widget
include $root . 'includes/labelcheck.php';
?>

<!-- ══ SEGMENTKAARTEN: Woning / Utiliteit ══ -->
<section class="section" id="keuze">
  <div class="container">
    <span class="sec-label">Kies uw situatie</span>
    <h2 class="sec-title">Energielabel voor woningen of bedrijfspanden</h2>
    <p class="sec-sub">We verzorgen energielabels voor zowel particulieren als zakelijke opdrachtgevers. Kies uw situatie voor specifieke informatie en prijzen.</p>
    <div class="segment-kaarten">
      <!-- Woning -->
      <a href="/energielabels/woningen/" class="segment-kaart">
        <img src="/images/woning-eengezins.jpg" alt="Energielabel woning" class="segment-kaart-img" loading="lazy">
        <div class="segment-kaart-body">
          <h3>🏠 Energielabel woning</h3>
          <p>Voor appartementen, eengezinswoningen en vrijstaande woningen. Vaste prijzen per woningtype en oppervlakte.</p>
          <div class="segment-kaart-prijzen">
            <div class="segment-prijs-rij"><span class="prijs-label">Appartement tot 40m²</span><span class="prijs-val">€ 195</span></div>
            <div class="segment-prijs-rij"><span class="prijs-label">Appartement 40–100m²</span><span class="prijs-val">€ 249</span></div>
            <div class="segment-prijs-rij"><span class="prijs-label">Eengezinswoning</span><span class="prijs-val">v.a. € 295</span></div>
            <div class="segment-prijs-rij"><span class="prijs-label">Vrijstaand tot 150m²</span><span class="prijs-val">€ 345</span></div>
          </div>
          <span class="segment-kaart-link">Bekijk alle woningprijzen →</span>
        </div>
      </a>
      <!-- Utiliteit -->
      <a href="/energielabels/utiliteit/" class="segment-kaart">
        <img src="/images/hero.jpg" alt="Energielabel bedrijfspand" class="segment-kaart-img" loading="lazy">
        <div class="segment-kaart-body">
          <h3>🏢 Energielabel bedrijfspand</h3>
          <p>Voor kantoren, winkels, zorginstellingen en andere utiliteitsbouw. Prijzen op maat — neem contact op voor een offerte.</p>
          <div class="segment-kaart-prijzen">
            <div class="segment-prijs-rij"><span class="prijs-label">Klein bedrijfspand</span><span class="prijs-val">Offerte op maat</span></div>
            <div class="segment-prijs-rij"><span class="prijs-label">Middel (100–250m²)</span><span class="prijs-val">Offerte op maat</span></div>
            <div class="segment-prijs-rij"><span class="prijs-label">Groot (&gt;250m²)</span><span class="prijs-val">Offerte op maat</span></div>
            <div class="segment-prijs-rij"><span class="prijs-label">Ingelijst certificaat</span><span class="prijs-val">€ 25</span></div>
          </div>
          <span class="segment-kaart-link">Meer over utiliteit &amp; aanvragen →</span>
        </div>
      </a>
    </div>
  </div>
</section>

<!-- AANVRAAGFORMULIER -->
<section class="sectie sectie-grijs" id="aanvraag">
  <div class="sectie-inner">
    <span class="sectie-label">Aanvragen</span>
    <h2 class="sectie-titel">Vraag direct uw energielabel aan</h2>
    <p class="sectie-intro">Vul het formulier in — wij nemen binnen twee werkdagen contact op.</p>
    <?php
    $f_dienst = 'label';
    $f_type   = '';
    $f_pagina = 'energielabels';
    include $root . 'includes/formulier.php';
    ?>
  </div>
</section>

<!-- ══ AANVRAAGPROCES ══ -->
<section class="section sec-grijs" id="werkwijze">
  <div class="container">
    <span class="sec-label">Werkwijze</span>
    <h2 class="sec-title">Zo werkt het aanvragen</h2>
    <p class="sec-sub">In vier stappen van aanvraag naar officieel energielabel — transparant, snel en zonder gedoe.</p>
    <div class="proces-grid">
      <div class="proces-stap">
        <div class="proces-num">1</div>
        <h4>Gegevens achterlaten</h4>
        <p>Vul het aanvraagformulier in of bel direct. Binnen 24 uur nemen we contact met u op voor een afspraak.</p>
      </div>
      <div class="proces-stap">
        <div class="proces-num">2</div>
        <h4>Documenten opsturen</h4>
        <p>Na uw aanvraag ontvangt u een overzicht van benodigde documenten. Die stuurt u eenvoudig digitaal toe.</p>
      </div>
      <div class="proces-stap">
        <div class="proces-num">3</div>
        <h4>Inspectie op locatie</h4>
        <p>STAP Energie komt langs voor een grondige inspectie van uw woning of bedrijfspand. Persoonlijk en professioneel.</p>
      </div>
      <div class="proces-stap">
        <div class="proces-num">4</div>
        <h4>Label binnen één week</h4>
        <p>Na de inspectie ontvangt u het officiële energielabel digitaal — geregistreerd in EP-online en direct bruikbaar.</p>
      </div>
    </div>
  </div>
</section>

<!-- ══ WAT IS EEN ENERGIELABEL ══ -->
<section class="section" id="wat-is-een-energielabel">
  <div class="container">
    <div class="uitleg-grid">
      <div>
        <span class="sec-label">Uitleg</span>
        <h2 class="sec-title">Wat is een energielabel?</h2>
        <p class="sec-sub">Een energielabel toont hoe energiezuinig een gebouw is, op een schaal van A (zeer zuinig) tot G (energieslurper). Het label maakt woningen en gebouwen vergelijkbaar.</p>
        <div class="uitleg-punten">
          <div class="uitleg-punt">
            <div class="uitleg-punt-icon">
              <svg width="22" height="22" viewBox="0 0 22 22" fill="none"><rect x="3" y="3" width="16" height="16" rx="3" stroke="currentColor" stroke-width="1.5"/><path d="M7 11h8M7 7h5M7 15h6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
            </div>
            <div>
              <h4>Basismethodiek — bestaande bouw</h4>
              <p>STAP Energie werkt uitsluitend met de basismethodiek voor bestaande woningen en utiliteitsgebouwen. Geen nieuwbouwmethoden — gericht op de bestaande gebouwenvoorraad.</p>
            </div>
          </div>
          <div class="uitleg-punt">
            <div class="uitleg-punt-icon">
              <svg width="22" height="22" viewBox="0 0 22 22" fill="none"><circle cx="11" cy="11" r="8" stroke="currentColor" stroke-width="1.5"/><path d="M11 7v4l3 2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
            </div>
            <div>
              <h4>10 jaar geldig</h4>
              <p>Na afgifte is het energielabel tien jaar geldig. Registratie vindt officieel plaats in het landelijke EP-online register.</p>
            </div>
          </div>
          <div class="uitleg-punt">
            <div class="uitleg-punt-icon">
              <svg width="22" height="22" viewBox="0 0 22 22" fill="none"><path d="M11 3L3 8v11h6v-5h4v5h6V8L11 3z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/></svg>
            </div>
            <div>
              <h4>Objectieve vergelijking</h4>
              <p>Het label vergelijkt de energieprestatie van uw woning of bedrijfspand met andere gebouwen. Een eerlijk en erkend meetinstrument.</p>
            </div>
          </div>
        </div>
      </div>
      <div>
        <p style="font-size:.85rem;color:var(--subtekst);margin-bottom:.8rem;font-weight:600;">Label — van zuinig naar energieslurper</p>
        <div class="uitleg-label-bar">
          <div class="label-rij"><div class="label-letter label-aplus4">A++++</div><span class="label-desc">Nul-op-de-meter woning — levert meer energie op dan verbruikt</span></div>
          <div class="label-rij"><div class="label-letter label-aplus3">A+++</div><span class="label-desc">Zeer energiezuinig — bijna energieneutraal</span></div>
          <div class="label-rij"><div class="label-letter label-aplus2">A++</div><span class="label-desc">Zeer energiezuinig — uitstekende isolatie en installaties</span></div>
          <div class="label-rij"><div class="label-letter label-aplus1">A+</div><span class="label-desc">Zeer energiezuinig — ruim boven huidige nieuwbouweis</span></div>
          <div class="label-rij"><div class="label-letter label-a">A</div><span class="label-desc">Energiezuinig — goede prestatie, hogere woningwaarde</span></div>
          <div class="label-rij"><div class="label-letter label-b">B</div><span class="label-desc">Goed — moderne isolatiestandaard</span></div>
          <div class="label-rij"><div class="label-letter label-c">C</div><span class="label-desc">Redelijk — minimumeis kantoren &gt;100m²</span></div>
          <div class="label-rij"><div class="label-letter label-d">D</div><span class="label-desc">Matig — minimum huurwoningen vóór 2029</span></div>
          <div class="label-rij"><div class="label-letter label-e">E</div><span class="label-desc">Onvoldoende — verduurzaming aanbevolen</span></div>
          <div class="label-rij"><div class="label-letter label-f">F</div><span class="label-desc">Slecht — huurwoningen moeten verbeteren vóór 2029</span></div>
          <div class="label-rij"><div class="label-letter label-g">G</div><span class="label-desc">Zeer slecht — hoogste energiekosten</span></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══ WETGEVING ══ -->
<section class="section sec-grijs" id="wetgeving">
  <div class="container">
    <span class="sec-label">Regelgeving</span>
    <h2 class="sec-title">Wanneer bent u verplicht?</h2>
    <p class="sec-sub">Het energielabel is wettelijk verplicht in diverse situaties. De regels gelden voor zowel woningeigenaren als zakelijke gebouweigenaren.</p>

    <div class="wetgeving-tabs wetgeving-tabs-mt" role="tablist">
      <button class="wetgeving-tab active" onclick="wisselWetgeving('particulier')" role="tab">🏠 Particulier / Woningen</button>
      <button class="wetgeving-tab" onclick="wisselWetgeving('zakelijk')" role="tab">🏢 Zakelijk / Utiliteit</button>
    </div>

    <!-- Particulier panel -->
    <div class="wetgeving-panel active" id="wet-particulier">
      <div class="wet-card">
        <div class="wet-card-icon">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
        </div>
        <h4>Verplicht bij</h4>
        <ul>
          <li>Verkoop van de woning</li>
          <li>Verhuur van de woning</li>
          <li>Oplevering van een nieuw gebouw</li>
          <li>Overdracht aan nieuwe eigenaar</li>
        </ul>
        <span class="boete-badge">⚠️ Boete bij ontbreken: tot € 435</span>
      </div>
      <div class="wet-card">
        <div class="wet-card-icon">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/><path d="M9 22V12h6v10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </div>
        <h4>WWS-koppeling huurprijs</h4>
        <ul>
          <li>Het energielabel telt mee in het woningwaarderingstelsel (WWS)</li>
          <li>Een beter label = hogere maximale huurprijs</li>
          <li>Verhuurders met label E, F of G mogen vóór 2029 maximaal label D verhuren</li>
          <li>Relevant voor alle verhuurders van huurwoningen</li>
        </ul>
      </div>
      <div class="wet-card wet-card-highlight">
        <div class="wet-card-icon">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/></svg>
        </div>
        <h4>Nieuw per 29 mei 2026 (EPBD IV)</h4>
        <ul>
          <li>Nieuw labelontwerp — labels afgegeven vóór die datum blijven gewoon geldig</li>
          <li>Monumenten zijn niet langer uitgezonderd van de labelplicht</li>
          <li>Meer gebouwtypes krijgen een labelplicht</li>
        </ul>
      </div>
      <div class="wet-card">
        <div class="wet-card-icon">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.5"/><path d="M12 8v4l3 2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
        </div>
        <h4>Hypotheekvoordeel bij beter label</h4>
        <ul>
          <li>Grootbanken geven hypotheekkorting bij label A of B</li>
          <li>Groene hypotheek kan tot 0,3% rentevoordeel opleveren</li>
          <li>Gunstigere leencapaciteit bij energiezuinige woning</li>
          <li>Vraag uw hypotheekadviseur naar de actuele mogelijkheden</li>
        </ul>
      </div>
    </div>

    <!-- Zakelijk panel -->
    <div class="wetgeving-panel" id="wet-zakelijk">
      <div class="wet-card">
        <div class="wet-card-icon">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><rect x="2" y="7" width="20" height="14" rx="2" stroke="currentColor" stroke-width="1.5"/><path d="M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
        </div>
        <h4>Kantoren &gt;100m² — label C verplicht</h4>
        <ul>
          <li>Verplicht minimaal label C sinds 1 januari 2023</li>
          <li>Geldt voor alle kantoorgebouwen groter dan 100m²</li>
          <li>Bij ontbreken risico op sluiting door gemeente</li>
          <li>Labelplicht geldt ook voor gehuurde kantoorruimte</li>
        </ul>
        <span class="boete-badge">⚠️ Boete kan oplopen tot duizenden euro's</span>
      </div>
      <div class="wet-card">
        <div class="wet-card-icon">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/></svg>
        </div>
        <h4>Verplicht bij verkoop, verhuur &amp; oplevering</h4>
        <ul>
          <li>Elk bedrijfspand dat wordt verkocht of verhuurd</li>
          <li>Bij oplevering van nieuw of gerenoveerd pand</li>
          <li>Geldt voor alle soorten utiliteitsbouw</li>
          <li>Makelaar of notaris controleert aanwezigheid</li>
        </ul>
      </div>
      <div class="wet-card wet-card-highlight">
        <div class="wet-card-icon">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M4 22v-7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
        </div>
        <h4>Label aan de muur — per 29 mei 2026</h4>
        <ul>
          <li>Alle publiek toegankelijke bedrijfspanden &gt;250m² met een geldig label moeten dit zichtbaar ophangen</li>
          <li>Verplicht bij ingang of receptie</li>
          <li>STAP Energie levert een ingelijst certificaat voor € 25</li>
          <li>Handig als u al een label heeft — direct compliant</li>
        </ul>
        <span class="muur-badge">
          <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M2 7h10M7 2v10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
          Ingelijst certificaat — € 25
        </span>
      </div>
      <div class="wet-card">
        <div class="wet-card-icon">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/></svg>
        </div>
        <h4>Nieuw per 29 mei 2026 (EPBD IV)</h4>
        <ul>
          <li>Nieuw labelontwerp — bestaande labels blijven geldig</li>
          <li>Monumenten niet langer uitgezonderd van labelplicht</li>
          <li>Zichtbaar ophangen verplicht voor alle utiliteitsbouw met geldig label</li>
          <li>Tijdig aanvragen voorkomt verplichte situaties</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ══ VOORDELEN ══ -->
<section class="section" id="voordelen">
  <div class="container">
    <span class="sec-label">Waarom een energielabel?</span>
    <h2 class="sec-title">De voordelen van een goed label</h2>
    <p class="sec-sub">Een energielabel is meer dan een verplichting — het is een instrument dat direct invloed heeft op waarde, kosten en kansen.</p>
    <div class="voordelen-grid">
      <div class="voordeel-card">
        <div class="voordeel-icon">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </div>
        <div class="voordeel-getal">2–5%</div>
        <h4>Hogere woningwaarde</h4>
        <p>Woningen met een goed energielabel zijn gemiddeld 2 tot 5% meer waard dan vergelijkbare woningen met een slechter label. En ze worden sneller verkocht.</p>
      </div>
      <div class="voordeel-card">
        <div class="voordeel-icon">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M12 2a10 10 0 100 20A10 10 0 0012 2z" stroke="currentColor" stroke-width="1.5"/><path d="M12 6v6l4 2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
        </div>
        <div class="voordeel-getal">€ 1.500</div>
        <h4>Lagere energiekosten per jaar</h4>
        <p>Een beter energielabel betekent een betere energieprestatie. Dat vertaalt zich direct in lagere stookkosten — tot wel € 1.500 per jaar minder.</p>
      </div>
      <div class="voordeel-card">
        <div class="voordeel-icon">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M9 12l2 2 4-4m5 2a9 9 0 11-18 0 9 9 0 0118 0z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </div>
        <div class="voordeel-getal">✓</div>
        <h4>Sneller verkocht</h4>
        <p>Woningen met een zichtbaar goed energielabel worden aantoonbaar sneller verkocht. Kopers en huurders letten steeds vaker op energieprestatie.</p>
      </div>
      <div class="voordeel-card">
        <div class="voordeel-icon">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" stroke="currentColor" stroke-width="1.5"/><path d="M9 22V12h6v10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
        </div>
        <div class="voordeel-getal">0,3%</div>
        <h4>Hypotheekkorting</h4>
        <p>Veel grootbanken bieden rentekortingen aan bij een groen energielabel (A of B). Dit kan oplopen tot 0,3% rentekorting op uw hypotheek.</p>
      </div>
      <div class="voordeel-card">
        <div class="voordeel-icon">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><rect x="2" y="7" width="20" height="14" rx="2" stroke="currentColor" stroke-width="1.5"/><path d="M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2" stroke="currentColor" stroke-width="1.5"/></svg>
        </div>
        <div class="voordeel-getal">WWS</div>
        <h4>Hogere maximale huurprijs</h4>
        <p>Verhuurders profiteren direct: een beter energielabel verhoogt het puntentotaal in het woningwaarderingstelsel, wat een hogere maximale huurprijs mogelijk maakt.</p>
      </div>
      <div class="voordeel-card">
        <div class="voordeel-icon">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/><path d="M9 12l2 2 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </div>
        <div class="voordeel-getal">+</div>
        <h4>Persoonlijk verduurzamingsadvies</h4>
        <p>STAP Energie adviseert u — naast het label — ook over gerichte verduurzamingsmaatregelen. Zo weet u direct welke stappen het meeste opleveren voor uw situatie.</p>
      </div>
    </div>
  </div>
</section>

<!-- ══ SUBSIDIE & VERDUURZAMING ══ -->
<section class="section sec-grijs" id="subsidies">
  <div class="container">
    <div class="subsidie-grid">
      <div>
        <span class="sec-label">Verduurzaming &amp; subsidie</span>
        <h2 class="sec-title">Wilt u ook een beter label?</h2>
        <p class="sec-sub">Een energielabel geeft inzicht — maar de echte winst zit in de vervolgstap. STAP Energie adviseert u ook over gerichte verduurzamingsmaatregelen én beschikbare subsidies.</p>
        <div class="subsidie-kaarten">
          <div class="subsidie-kaart">
            <div class="subsidie-dot"></div>
            <span>ISDE-subsidie — isolatie, warmtepomp, zonneboiler</span>
            <small>Particulier</small>
          </div>
          <div class="subsidie-kaart">
            <div class="subsidie-dot"></div>
            <span>SEEH — spouwmuur-, vloer- en dakisolatie</span>
            <small>Particulier</small>
          </div>
          <div class="subsidie-kaart">
            <div class="subsidie-dot"></div>
            <span>Gemeentelijke verduurzamingsregelingen</span>
            <small>Particulier &amp; Zakelijk</small>
          </div>
          <div class="subsidie-kaart">
            <div class="subsidie-dot"></div>
            <span>EIA — Energie Investeringsaftrek</span>
            <small>Zakelijk</small>
          </div>
          <div class="subsidie-kaart">
            <div class="subsidie-dot"></div>
            <span>SDE++ — stimulering duurzame energie</span>
            <small>Zakelijk</small>
          </div>
        </div>
        <p style="font-size:.83rem;color:var(--subtekst);margin-top:1rem;">Meer informatie over subsidies volgt binnenkort in onze kennisbank. <a href="/verduurzaming-subsidie/" style="color:var(--groen);font-weight:600;">Bekijk alvast onze verduurzamingspagina →</a></p>
      </div>
      <div class="subsidie-cta-blok">
        <h4>Persoonlijk verduurzamingsadvies</h4>
        <p>Na de labelinspectie adviseert STAP Energie u over welke maatregelen het meeste opleveren voor uw specifieke situatie. Of u nu wilt besparen, comfortabeler wilt wonen of uw label wilt verbeteren — we denken graag mee.</p>
        <p style="font-size:.85rem;color:var(--subtekst);margin-top:.8rem;margin-bottom:1.2rem;">Goed om te weten: bij een beter energielabel geven grootbanken vaak ook hypotheekkorting. Vraag uw adviseur naar de actuele groene hypotheekmogelijkheden.</p>
        <a href="#aanvraag" class="btn-groen">Aanvraag indienen →</a>
      </div>
    </div>
  </div>
</section>

<!-- ══ REGIO — alleen B2C ══ -->
<section class="section" id="werkgebied">
  <div class="container">
    <div class="regio-grid">
      <div>
        <span class="sec-label">Werkgebied</span>
        <h2 class="sec-title">Actief in uw regio</h2>
        <p class="sec-sub">STAP Energie is actief door heel Nederland, maar heeft een focus op de regio rondom Leusden. Snel ter plaatse en vertrouwd met de lokale woningmarkt.</p>
        <div class="regio-tags">
          <span class="regio-tag hoofd">Leusden</span>
          <span class="regio-tag hoofd">Amersfoort</span>
          <span class="regio-tag hoofd">Woudenberg</span>
          <span class="regio-tag hoofd">Achterveld</span>
          <span class="regio-tag">Utrecht</span>
          <span class="regio-tag">Soest</span>
          <span class="regio-tag">Baarn</span>
          <span class="regio-tag">Nijkerk</span>
          <span class="regio-tag">Zeist</span>
          <span class="regio-tag">Bunschoten</span>
          <span class="regio-tag">De Bilt</span>
          <span class="regio-tag">Heel Nederland</span>
        </div>
      </div>
      <div class="regio-info">
        <h4>Buiten de regio?</h4>
        <p>STAP Energie werkt door heel Nederland. Buiten de directe regio kan een kleine reisvergoeding van toepassing zijn. Vraag gerust naar de mogelijkheden — we denken graag met u mee.</p>
        <a href="#aanvraag" class="btn-groen">Aanvragen →</a>
      </div>
    </div>
  </div>
</section>

<?php
include $root . 'includes/faq.php';
include $root . 'includes/cta.php';
include $root . 'includes/footer.php';
?>

<script>
function wisselWetgeving(type) {
  var panelP = document.getElementById('wet-particulier');
  var panelZ = document.getElementById('wet-zakelijk');
  var tabs   = document.querySelectorAll('.wetgeving-tab');

  panelP.classList.toggle('active', type === 'particulier');
  panelZ.classList.toggle('active', type === 'zakelijk');

  tabs.forEach(function(t, i) {
    t.classList.toggle('active', (i === 0 && type === 'particulier') || (i === 1 && type === 'zakelijk'));
  });
}
</script>
