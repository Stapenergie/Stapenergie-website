<?php
$root        = dirname(dirname(dirname(__FILE__))) . '/';
$title       = 'Energielabel Woning Aanvragen | Officieel & Gecertificeerd | STAP Energie';
$description = 'Energielabel voor je woning aanvragen? STAP Energie verzorgt officiële energielabels voor alle woningtypen. Vaste prijzen, snel geregeld, heel Nederland.';
$canonical   = 'https://stapenergie.nl/energielabels/woningen/';

$breadcrumbs = [
  ['label' => 'Home',          'url' => '/'],
  ['label' => 'Energielabels', 'url' => '/energielabels/'],
  ['label' => 'Woningen'],
];

$cta_titel     = 'Klaar om je woninglabel aan te vragen?';
$cta_subtitel  = 'Vul het aanvraagformulier in en STAP Energie neemt binnen twee werkdagen contact op. Vaste prijs, gecertificeerd adviseur, geen gedoe.';
$cta_knop      = 'Label aanvragen →';
$cta_knop_url  = '#aanvraag';
$cta_garanties = ['Gecertificeerd EPA-adviseur', 'Officieel geregistreerd in EP-online', 'Binnen één week gereed'];

$faq_label = 'Veelgestelde vragen';
$faq_titel = 'Alles wat je wilt weten over je woninglabel';
$faq_items = [
  ['vraag' => 'Hoe lang duurt een energielabelopname voor een woning?',
   'antwoord' => 'Een opname duurt gemiddeld 1 à 2 uur, afhankelijk van het woningtype. Het definitieve label is binnen één week beschikbaar.'],
  ['vraag' => 'Hoe lang is een energielabel geldig?',
   'antwoord' => 'Een energielabel is 10 jaar geldig na registratie in EP-online. Na verduurzaming kun je je label laten aanpassen via herlabelen.'],
  ['vraag' => 'Is een energielabel verplicht bij verkoop van mijn woning?',
   'antwoord' => 'Ja. Bij de overdracht ben je wettelijk verplicht een geldig energielabel aan de koper te overhandigen. Zonder label riskeer je een boete van de ILT.'],
  ['vraag' => 'Wat heb ik nodig voor de opname?',
   'antwoord' => 'Toegang tot alle ruimtes, inclusief zolder, kelder en kruipruimte, is vereist. Daarnaast is het wenselijk om de volgende documenten bij de hand te hebben: bouwtekeningen of plattegronden van de woning, installatiedocumentatie (cv-ketel, warmtepomp, ventilatie), facturen van verbouwingen of renovaties, facturen van isolatiemaatregelen (spouwmuur, vloer, dak, ramen) en overige bewijsstukken van energiebesparende maatregelen. Hoe meer documentatie beschikbaar is, hoe nauwkeuriger de opname en hoe beter het uiteindelijke label. STAP Energie informeert je na de aanvraag precies wat je kunt klaarzetten.'],
  ['vraag' => 'Kan ik mijn energielabel verbeteren na verduurzaming?',
   'antwoord' => 'Ja. Na isolatie, HR++-glas of een warmtepomp kun je je label laten aanpassen via herlabelen, mogelijk binnen 24 maanden na de oorspronkelijke opnamedatum.'],
  ['vraag' => 'Hoe snel kan ik een afspraak inplannen?',
   'antwoord' => 'In de meeste gevallen kun je binnen één week terecht. Heb je haast, bijvoorbeeld vanwege een nakende verkooptransactie, geef dit dan aan in je aanvraag. STAP Energie kijkt wat qua planning mogelijk is.'],
];

include $root . 'includes/head.php';
include $root . 'includes/nav.php';
include $root . 'includes/breadcrumb.php';
?>

<?php
// Hero variabelen
$hero_variant  = 'sub';
$hero_bg       = '/images/hero-woningen.jpg';
$hero_eyebrow  = 'Gecertificeerd EPA-adviseur';
$hero_titel    = 'Energielabel voor je woning,<br><em>officieel, snel en persoonlijk</em>';
$hero_lead     = 'Of je nu verkoopt, verhuurt of wilt weten hoe energiezuinig je woning is, STAP Energie verzorgt het officiële energielabel. Vaste prijs, geen verrassingen.';
$hero_usps     = [
  'Officieel geregistreerd in EP-online',
  'Vaste prijzen, geen verborgen kosten',
  'Binnen één week je label op zak',
  'Persoonlijk advies zonder extra kosten',
];
$hero_cta      = 'Label aanvragen →';
$hero_cta_url  = '#aanvraag';
$hero_cta2     = 'Bel direct';
$hero_cta2_url = 'tel:06XXXXXXXX';
include $root . 'includes/hero.php';
?>

<?php include $root . 'includes/trust.php'; ?>

<!-- WONINGTYPE CARDS -->
<section class="sectie sectie-wit" id="prijzen">
  <div class="sectie-inner">
    <span class="sectie-label">Kies je woningtype</span>
    <h2 class="sectie-titel">Energielabel voor elke woning</h2>
    <p class="sectie-intro">De opnametijd en prijs hangen af van het type en de oppervlakte van je woning.</p>
    <div class="card-grid card-grid--3">
      <div class="woning-card">
        <img class="woning-foto" src="/images/woning-appartement.jpg" alt="Appartement" width="600" height="400" loading="lazy">
        <div class="woning-body">
          <div class="woning-type">Woningtype</div>
          <h3>Appartement</h3>
          <p class="woning-omschr">Snel en officieel geregistreerd. Vaste prijs per oppervlakteklasse.</p>
          <div class="woning-prijzen">
            <div class="woning-prijs-rij"><span class="woning-prijs-rij-label">Tot 40 m²</span><span class="woning-prijs-rij-bedrag">€ 195</span></div>
            <div class="woning-prijs-rij"><span class="woning-prijs-rij-label">40 – 100 m²</span><span class="woning-prijs-rij-bedrag">€ 249</span></div>
          </div>
          <p class="woning-incl">Inclusief btw · EP-online registratie</p>
          <a href="#aanvraag" class="woning-cta btn-groen-outline">Aanvragen →</a>
        </div>
      </div>
      <div class="woning-card populair">
        <div class="woning-badge">Meest aangevraagd</div>
        <img class="woning-foto" src="/images/woning-eengezins.jpg" alt="Eengezinswoning" width="600" height="400" loading="lazy">
        <div class="woning-body">
          <div class="woning-type">Woningtype</div>
          <h3>Eengezinswoning</h3>
          <p class="woning-omschr">Rijtjeswoning of twee-onder-een-kap. Vaste prijs op woningtype.</p>
          <div class="woning-prijzen">
            <div class="woning-prijs-rij"><span class="woning-prijs-rij-label">Tussenwoning</span><span class="woning-prijs-rij-bedrag">€ 295</span></div>
            <div class="woning-prijs-rij"><span class="woning-prijs-rij-label">Hoekwoning / 2-onder-1-kap</span><span class="woning-prijs-rij-bedrag">€ 325</span></div>
          </div>
          <p class="woning-incl">Inclusief btw · EP-online registratie</p>
          <a href="#aanvraag" class="woning-cta btn-groen">Aanvragen →</a>
        </div>
      </div>
      <div class="woning-card">
        <img class="woning-foto" src="/images/woning-vrijstaand.jpg" alt="Vrijstaande woning" width="600" height="400" loading="lazy">
        <div class="woning-body">
          <div class="woning-type">Woningtype</div>
          <h3>Vrijstaande woning</h3>
          <p class="woning-omschr">Tot 150 m² vaste prijs, daarboven offerte op maat.</p>
          <div class="woning-prijzen">
            <div class="woning-prijs-rij"><span class="woning-prijs-rij-label">Tot 150 m²</span><span class="woning-prijs-rij-bedrag">€ 345</span></div>
            <div class="woning-prijs-rij"><span class="woning-prijs-rij-label">Groter dan 150 m²</span><span class="woning-prijs-rij-bedrag">Offerte op maat</span></div>
          </div>
          <p class="woning-incl">Inclusief btw · EP-online registratie</p>
          <a href="#aanvraag" class="woning-cta btn-groen-outline">Offerte aanvragen →</a>
        </div>
      </div>
    </div>
    <p class="prijzen-noot"><strong>Meerdere woningen?</strong> Bij 3 of meer woningen biedt STAP Energie een volumetarief. <a href="#aanvraag">Vraag naar de mogelijkheden →</a></p>
  </div>
</section>

<!-- AANVRAAGFORMULIER -->
<section class="sectie sectie-grijs" id="aanvraag">
  <div class="sectie-inner">
    <span class="sectie-label">Aanvragen</span>
    <h2 class="sectie-titel">Vraag direct je energielabel aan</h2>
    <p class="sectie-intro">Vul het formulier in en STAP Energie neemt binnen twee werkdagen contact op.</p>
    <?php
    $f_dienst = 'label';
    $f_type   = 'particulier';
    $f_pagina = 'woningen';
    include $root . 'includes/formulier.php';
    ?>
  </div>
</section>

<!-- WERKWIJZE -->
<section class="sectie sectie-grijs">
  <div class="sectie-inner">
    <span class="sectie-label">Zo werkt het</span>
    <h2 class="sectie-titel">Van aanvraag tot officieel label in 4 stappen</h2>
    <p class="sectie-intro">Transparant, snel en zonder gedoe, STAP Energie regelt het van begin tot eind.</p>
    <div class="card-grid card-grid--4 stappen-grid">
      <div class="stap"><div class="stap-nr">1</div><h3>Aanvraag indienen</h3><p>Vul het formulier in. Binnen twee werkdagen nemen we contact op voor een afspraak.</p></div>
      <div class="stap"><div class="stap-nr">2</div><h3>Voorbereiding</h3><p>Je ontvangt een overzicht van wat je kunt klaarzetten voor een soepele opname.</p></div>
      <div class="stap"><div class="stap-nr">3</div><h3>Opname aan huis</h3><p>Een gecertificeerd EPA-adviseur komt langs. Gemiddeld 1 à 2 uur.</p></div>
      <div class="stap"><div class="stap-nr">4</div><h3>Label &amp; adviesrapport</h3><p>Binnen één week ontvang je het officieel geregistreerde label én een verduurzamingsadvies.</p></div>
    </div>
  </div>
</section>

<!-- WANNEER NODIG -->
<section class="sectie sectie-grijs">
  <div class="sectie-inner">
    <span class="sectie-label">Wanneer verplicht?</span>
    <h2 class="sectie-titel">In welke situatie heb je een woninglabel nodig?</h2>
    <p class="sectie-intro">Een energielabel is in diverse situaties wettelijk verplicht, voor particuliere én zakelijke woningeigenaren.</p>
    <div class="card-grid card-grid--4">
      <div class="situatie-card">
        <div class="situatie-icon"><svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9.5L12 3l9 6.5V20a1 1 0 01-1 1H4a1 1 0 01-1-1V9.5z"/><path d="M9 21V12h6v9"/></svg></div>
        <h3>Verkoop van je woning</h3>
        <p>Bij overdracht ben je verplicht een geldig label te overhandigen.</p>
        <div class="situatie-tags"><span class="tag tag-groen">Particulier</span></div>
      </div>
      <div class="situatie-card">
        <div class="situatie-icon"><svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12H3M3 6h18M3 18h18"/></svg></div>
        <h3>Verhuur van je woning</h3>
        <p>Bij elke nieuwe verhuur is een geldig label verplicht.</p>
        <div class="situatie-tags"><span class="tag tag-groen">Particulier</span><span class="tag tag-blauw">Zakelijk</span></div>
      </div>
      <div class="situatie-card">
        <div class="situatie-icon"><svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="8" width="18" height="13" rx="1"/><path d="M16 8V6a4 4 0 00-8 0v2"/></svg></div>
        <h3>Hypotheek &amp; financiering</h3>
        <p>Banken vragen steeds vaker om een label bij het afsluiten of oversluiten van je hypotheek.</p>
        <div class="situatie-tags"><span class="tag tag-groen">Particulier</span></div>
      </div>
      <div class="situatie-card">
        <div class="situatie-icon"><svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M4 21V8l8-5 8 5v13"/><path d="M9 21v-6h6v6"/></svg></div>
        <h3>Nieuwbouw &amp; renovatie</h3>
        <p>Bij oplevering van nieuwbouw is een label verplicht. Na ingrijpende renovaties is herlabelen de slimme stap.</p>
        <div class="situatie-tags"><span class="tag tag-groen">Particulier</span><span class="tag tag-blauw">Zakelijk</span></div>
      </div>
    </div>
  </div>
</section>

<!-- LABELSCHAAL -->
<section class="sectie sectie-wit">
  <div class="sectie-inner">
    <span class="sectie-label">Wat betekent het?</span>
    <h2 class="sectie-titel">De energieklassen A++++ t/m G</h2>
    <p class="sectie-intro">Elke klasse beschrijft de energieprestatie van je woning, van nul-op-de-meter tot energieslurper.</p>
    <div class="labelschaal-layout">
      <div class="labelschaal-uitleg">
        <h3>Wat bepaalt je label?</h3>
        <p>Het energielabel is gebaseerd op isolatie, verwarmingssysteem, warm water, ventilatie en hernieuwbare energieopwekking.</p>
        <h3>Wat levert een beter label op?</h3>
        <p>Een hogere energieklasse betekent lagere energielasten, hogere verkoopwaarde en bij label A of B mogelijk rentevoordeel op je hypotheek.</p>
        <h3>Herlabelen na verduurzaming</h3>
        <p>Na verduurzamingsmaatregelen kun je je label laten aanpassen via herlabelen, mogelijk binnen 24 maanden na de oorspronkelijke opnamedatum.</p>
        <a href="/verduurzaming-subsidie/" class="btn-groen" style="display:inline-flex;width:auto;margin-top:8px;padding:11px 22px;border-radius:var(--r);font-weight:600;font-size:.9rem;">Verduurzaming &amp; subsidies →</a>
      </div>
      <div class="label-lijst">
        <div class="label-rij"><div class="label-pijl lp-a4">A++++</div><div class="label-info"><div class="label-info-titel">Nul-op-de-meter</div><div class="label-info-sub">Levert meer op dan verbruikt</div><span class="label-tag lt-groen">Nieuwbouwstandaard 2026+</span></div></div>
        <div class="label-rij"><div class="label-pijl lp-a3">A+++</div><div class="label-info"><div class="label-info-titel">Bijna energieneutraal</div><div class="label-info-sub">Uitstekende isolatie, warmtepomp</div></div></div>
        <div class="label-rij"><div class="label-pijl lp-a2">A++</div><div class="label-info"><div class="label-info-titel">Zeer energiezuinig</div><div class="label-info-sub">Uitstekende isolatie en installaties</div></div></div>
        <div class="label-rij"><div class="label-pijl lp-a1">A+</div><div class="label-info"><div class="label-info-titel">Energiezuinig</div><div class="label-info-sub">Ruim boven huidige nieuwbouweis</div></div></div>
        <div class="label-rij"><div class="label-pijl lp-a">A</div><div class="label-info"><div class="label-info-titel">Goed energielabel</div><div class="label-info-sub">Hogere woningwaarde</div><span class="label-tag lt-groen">Hypotheekrentevoordeel</span></div></div>
        <div class="label-rij"><div class="label-pijl lp-b">B</div><div class="label-info"><div class="label-info-titel">Redelijk energiezuinig</div><div class="label-info-sub">Moderne isolatiestandaard</div></div></div>
        <div class="label-rij"><div class="label-pijl lp-c">C</div><div class="label-info"><div class="label-info-titel">Gemiddeld</div><div class="label-info-sub">Gedeeltelijk geïsoleerd</div></div></div>
        <div class="label-rij"><div class="label-pijl lp-d">D</div><div class="label-info"><div class="label-info-titel">Onder gemiddeld</div><div class="label-info-sub">Beperkte isolatie</div></div></div>
        <div class="label-rij"><div class="label-pijl lp-e">E</div><div class="label-info"><div class="label-info-titel">Weinig energiezuinig</div><div class="label-info-sub">Hoge energielasten</div><span class="label-tag lt-rood">Verhuurverbod risico 2029</span></div></div>
        <div class="label-rij"><div class="label-pijl lp-f">F</div><div class="label-info"><div class="label-info-titel">Energieonzuinig</div><div class="label-info-sub">Nauwelijks isolatie</div><span class="label-tag lt-rood">Actie vereist</span></div></div>
        <div class="label-rij"><div class="label-pijl lp-g">G</div><div class="label-info"><div class="label-info-titel">Niet energiezuinig</div><div class="label-info-sub">Slechtst mogelijke score</div><span class="label-tag lt-rood">Actie vereist</span></div></div>
      </div>
    </div>
  </div>
</section>

<!-- DOELGROEPEN -->
<section class="sectie sectie-wit">
  <div class="sectie-inner">
    <span class="sectie-label">Voor iedereen met een woning</span>
    <h2 class="sectie-titel">Particulier of zakelijk, het label is hetzelfde</h2>
    <p class="sectie-intro">Het energielabel voor een woning is technisch identiek, ongeacht wie de eigenaar is.</p>
    <div class="card-grid card-grid--2">
      <div class="doelgroep-card">
        <div class="doelgroep-icon"><svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9.5L12 3l9 6.5V20a1 1 0 01-1 1H4a1 1 0 01-1-1V9.5z"/><path d="M9 21V12h6v9"/></svg></div>
        <h3>Particuliere woningeigenaren</h3>
        <p>Je verkoopt je huis, wilt je hypotheek oversluiten of bent benieuwd hoe energiezuinig je woning is.</p>
        <div class="check-lijst">
          <div class="check-item"><span class="check-vink">✓</span> Verplicht bij verkoop en verhuur</div>
          <div class="check-item"><span class="check-vink">✓</span> Relevant voor hypotheek &amp; NHG</div>
          <div class="check-item"><span class="check-vink">✓</span> Advies over subsidies (ISDE, Warmtefonds)</div>
          <div class="check-item"><span class="check-vink">✓</span> Persoonlijk contact, geen callcenter</div>
        </div>
      </div>
      <div class="doelgroep-card">
        <div class="doelgroep-icon"><svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="15" rx="1"/><path d="M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2"/></svg></div>
        <h3>Zakelijke woningeigenaren</h3>
        <p>Verhuurders, beleggers, VvE's of vastgoedontwikkelaars met woningen in bezit.</p>
        <div class="check-lijst">
          <div class="check-item"><span class="check-vink">✓</span> Verplicht per verhuurde woning</div>
          <div class="check-item"><span class="check-vink">✓</span> Verhuurverbod label E/F/G dreigt (2029)</div>
          <div class="check-item"><span class="check-vink">✓</span> Volumetarief bij 3 of meer woningen</div>
          <div class="check-item"><span class="check-vink">✓</span> VvE? Gezamenlijke aanvraag mogelijk</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- WETGEVING -->
<section class="sectie sectie-grijs">
  <div class="sectie-inner">
    <span class="sectie-label">Regelgeving</span>
    <h2 class="sectie-titel">Wat zegt de wet over woninglabels?</h2>
    <p class="sectie-intro">Energielabels zijn al jaren verplicht bij woningtransacties. Nieuwe Europese wetgeving maakt de eisen strenger.</p>
    <div class="card-grid card-grid--2">
      <div class="wet-blok">
        <div class="wet-head">
          <div class="wet-icon wet-icon-groen"><svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.6" stroke-linecap="round"><path d="M3 9.5L12 3l9 6.5V20a1 1 0 01-1 1H4a1 1 0 01-1-1V9.5z"/><path d="M9 21V12h6v9"/></svg></div>
          <h3>Voor particuliere eigenaren</h3>
        </div>
        <div class="wet-rij"><span class="wet-dot">→</span><p><strong>Verplicht bij verkoop</strong>, Bij overdracht is een geldig label wettelijk verplicht.</p></div>
        <div class="wet-rij"><span class="wet-dot">→</span><p><strong>Geldigheid 10 jaar</strong>, Na registratie is het label 10 jaar geldig.</p></div>
        <div class="wet-rij"><span class="wet-dot">→</span><p><strong>Hypotheekvoordeel</strong>, Bij label A of B bieden grootbanken tot 0,3% rentevoordeel.</p></div>
      </div>
      <div class="wet-blok">
        <div class="wet-head">
          <div class="wet-icon wet-icon-blauw"><svg viewBox="0 0 24 24" fill="none" stroke="#1e3a8a" stroke-width="1.6" stroke-linecap="round"><rect x="2" y="7" width="20" height="15" rx="1"/><path d="M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2"/></svg></div>
          <h3>Voor zakelijke verhuurders</h3>
        </div>
        <div class="wet-rij"><span class="wet-dot">→</span><p><strong>Verplicht per verhuurde woning</strong>, Bij elke nieuwe verhuur is een geldig label verplicht.</p></div>
        <div class="wet-rij"><span class="wet-dot">→</span><p><strong>Verhuurverbod label E/F/G (2029)</strong>, Woningen met een slecht label mogen vóór 2029 maximaal label D hebben.</p></div>
        <div class="wet-rij"><span class="wet-dot">→</span><p><strong>WWS-koppeling</strong>, Vanaf 2024 telt het label mee in het woningwaarderingstelsel.</p></div>
      </div>
    </div>
  </div>
</section>

<?php
include $root . 'includes/faq.php';
include $root . 'includes/cta.php';
include $root . 'includes/footer.php';
?>
