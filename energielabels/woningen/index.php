<?php
$root        = dirname(dirname(dirname(__FILE__))) . '/';
$title       = 'Energielabel Woning Aanvragen | Officieel & Gecertificeerd | STAP Energie';
$description = 'Energielabel voor uw woning aanvragen? STAP Energie verzorgt officiële energielabels voor alle woningtypen. Vaste prijzen, snel geregeld, heel Nederland.';
$canonical   = 'https://stapenergie.nl/energielabels/woningen/';
include $root . 'includes/head.php';
include $root . 'includes/nav.php';
?>

<!-- BREADCRUMB -->
<div class="breadcrumb">
  <div class="breadcrumb-inner">
    <a href="/">Home</a> <span>›</span>
    <a href="/energielabels/">Energielabels</a> <span>›</span>
    <span>Woningen</span>
  </div>
</div>

<!-- HERO -->
<section class="hero">
  <div class="hero-inner">
    <div class="hero-eyebrow"><div class="hero-eyebrow-dot"></div> Gecertificeerd EPA-adviseur</div>
    <h1>Energielabel voor uw woning —<br><em>officieel, snel en persoonlijk</em></h1>
    <p class="hero-lead">Of u nu verkoopt, verhuurt of wilt weten hoe energiezuinig uw woning is — STAP Energie verzorgt het officiële energielabel. Vaste prijs, geen verrassingen.</p>
    <div class="hero-usps">
      <div class="hero-usp"><div class="hero-usp-vink">✓</div> Officieel geregistreerd in EP-online</div>
      <div class="hero-usp"><div class="hero-usp-vink">✓</div> Vaste prijzen — geen verborgen kosten</div>
      <div class="hero-usp"><div class="hero-usp-vink">✓</div> Binnen één week uw label op zak</div>
      <div class="hero-usp"><div class="hero-usp-vink">✓</div> Persoonlijk advies zonder extra kosten</div>
    </div>
    <div class="hero-ctas">
      <a href="#aanvraag" class="btn-primair">Label aanvragen →</a>
      <a href="tel:06XXXXXXXX" class="btn-sec">Bel direct</a>
    </div>
  </div>
</section>

<!-- TRUST-BALK -->
<div class="trust-balk">
  <div class="trust-inner">
    <div class="trust-item">
      <div class="trust-icon"><svg viewBox="0 0 16 16" fill="none" stroke="#1a5c32" stroke-width="1.4" stroke-linecap="round"><path d="M8 1.5l1.8 3.6 4 .6-2.9 2.8.7 4L8 10.4l-3.6 1.9.7-4L2.2 5.7l4-.6z"/></svg></div>
      <div><div class="trust-label">Officieel erkend</div><div class="trust-sub">Geregistreerd in EP-online</div></div>
    </div>
    <div class="trust-item">
      <div class="trust-icon"><svg viewBox="0 0 16 16" fill="none" stroke="#1a5c32" stroke-width="1.4" stroke-linecap="round"><circle cx="8" cy="8" r="6.5"/><path d="M8 4.5v4l2.5 1.5"/></svg></div>
      <div><div class="trust-label">Binnen één week</div><div class="trust-sub">Snel en persoonlijk</div></div>
    </div>
    <div class="trust-item">
      <div class="trust-icon"><svg viewBox="0 0 16 16" fill="none" stroke="#1a5c32" stroke-width="1.4" stroke-linecap="round"><rect x="2" y="4" width="12" height="9" rx="1"/><path d="M5 4V3a3 3 0 016 0v1"/></svg></div>
      <div><div class="trust-label">Vaste prijzen</div><div class="trust-sub">Geen verborgen kosten</div></div>
    </div>
    <div class="trust-item">
      <div class="trust-icon"><svg viewBox="0 0 16 16" fill="none" stroke="#1a5c32" stroke-width="1.4" stroke-linecap="round"><path d="M2 8c0-3.3 2.7-6 6-6s6 2.7 6 6-2.7 6-6 6-6-2.7-6-6z"/><path d="M5.5 8l1.5 1.5 3.5-3.5"/></svg></div>
      <div><div class="trust-label">Reactie binnen twee werkdagen</div><div class="trust-sub">Heel Nederland</div></div>
    </div>
  </div>
</div>

<!-- WONINGTYPE CARDS -->
<section class="sectie sectie-wit" id="prijzen">
  <div class="sectie-inner">
    <span class="sectie-label">Kies uw woningtype</span>
    <h2 class="sectie-titel">Energielabel voor elke woning</h2>
    <p class="sectie-intro">De opnametijd en prijs hangen af van het type en de oppervlakte van uw woning. Kies uw situatie en vraag direct aan.</p>
    <div class="woning-grid">
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
          <a href="#aanvraag" class="btn-groen-outline woning-cta">Aanvragen →</a>
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
          <a href="#aanvraag" class="btn-groen woning-cta">Aanvragen →</a>
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
          <a href="#aanvraag" class="btn-groen-outline woning-cta">Offerte aanvragen →</a>
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
    <h2 class="sectie-titel">Vraag direct uw energielabel aan</h2>
    <p class="sectie-intro">Vul het formulier in en STAP Energie neemt binnen twee werkdagen contact met u op.</p>
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
    <p class="sectie-intro">Transparant, snel en zonder gedoe — STAP Energie regelt het van begin tot eind.</p>
    <div class="stappen-grid">
      <div class="stap"><div class="stap-nr">1</div><h3>Aanvraag indienen</h3><p>Vul het formulier in. Binnen twee werkdagen nemen we contact op voor een afspraak.</p></div>
      <div class="stap"><div class="stap-nr">2</div><h3>Voorbereiding</h3><p>U ontvangt een overzicht van wat u kunt klaarzetten voor een soepele opname.</p></div>
      <div class="stap"><div class="stap-nr">3</div><h3>Opname aan huis</h3><p>Een gecertificeerd EPA-adviseur komt langs. Gemiddeld 1 à 2 uur.</p></div>
      <div class="stap"><div class="stap-nr">4</div><h3>Label &amp; adviesrapport</h3><p>Binnen één week ontvangt u het officieel geregistreerde label én een persoonlijk verduurzamingsadvies.</p></div>
    </div>
  </div>
</section>

<!-- WANNEER NODIG -->
<section class="sectie sectie-grijs">
  <div class="sectie-inner">
    <span class="sectie-label">Wanneer verplicht?</span>
    <h2 class="sectie-titel">In welke situatie heeft u een woninglabel nodig?</h2>
    <p class="sectie-intro">Een energielabel is in diverse situaties wettelijk verplicht — voor particuliere én zakelijke woningeigenaren.</p>
    <div class="situaties-grid">
      <div class="situatie-card">
        <div class="situatie-icon"><svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9.5L12 3l9 6.5V20a1 1 0 01-1 1H4a1 1 0 01-1-1V9.5z"/><path d="M9 21V12h6v9"/></svg></div>
        <h3>Verkoop van uw woning</h3>
        <p>Bij overdracht bent u verplicht een geldig label te overhandigen. Geen label? De ILT kan een boete opleggen.</p>
        <div class="situatie-tags"><span class="tag tag-groen">Particulier</span></div>
      </div>
      <div class="situatie-card">
        <div class="situatie-icon"><svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12H3M3 6h18M3 18h18"/></svg></div>
        <h3>Verhuur van uw woning</h3>
        <p>Bij elke nieuwe verhuur is een geldig label verplicht. Geldt voor zowel particuliere als zakelijke verhuurders.</p>
        <div class="situatie-tags"><span class="tag tag-groen">Particulier</span><span class="tag tag-blauw">Zakelijk</span></div>
      </div>
      <div class="situatie-card">
        <div class="situatie-icon"><svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="8" width="18" height="13" rx="1"/><path d="M16 8V6a4 4 0 00-8 0v2"/></svg></div>
        <h3>Hypotheek &amp; financiering</h3>
        <p>Banken vragen steeds vaker om een label bij het afsluiten of oversluiten van een hypotheek.</p>
        <div class="situatie-tags"><span class="tag tag-groen">Particulier</span></div>
      </div>
      <div class="situatie-card">
        <div class="situatie-icon"><svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M4 21V8l8-5 8 5v13"/><path d="M9 21v-6h6v6"/></svg></div>
        <h3>Nieuwbouw &amp; renovatie</h3>
        <p>Bij oplevering van een nieuwbouwwoning is een label verplicht. Na ingrijpende renovaties is herlabelen de slimme stap.</p>
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
    <p class="sectie-intro">Elke klasse beschrijft de energieprestatie van uw woning — van nul-op-de-meter tot energieslurper.</p>
    <div class="labelschaal-layout">
      <div class="labelschaal-uitleg">
        <h3>Wat bepaalt uw label?</h3>
        <p>Het energielabel is gebaseerd op isolatie, verwarmingssysteem, warm water, ventilatie en hernieuwbare energieopwekking.</p>
        <h3>Wat levert een beter label op?</h3>
        <p>Een hogere energieklasse betekent lagere energielasten, hogere verkoopwaarde en bij label A of B mogelijk rentevoordeel op uw hypotheek.</p>
        <h3>Herlabelen na verduurzaming</h3>
        <p>Na verduurzamingsmaatregelen kunt u uw label laten aanpassen via herlabelen — mogelijk binnen 24 maanden na de oorspronkelijke opnamedatum.</p>
        <a href="/verduurzaming-subsidie/" style="display:inline-flex;align-items:center;gap:8px;background:var(--groen);color:#fff;padding:11px 22px;border-radius:var(--r);font-weight:600;font-size:.9rem;margin-top:8px;">Verduurzaming &amp; subsidies →</a>
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
    <h2 class="sectie-titel">Particulier of zakelijk — het label is hetzelfde</h2>
    <p class="sectie-intro">Het energielabel voor een woning is technisch identiek, ongeacht wie de eigenaar is.</p>
    <div class="doelgroepen-grid">
      <div class="doelgroep-card">
        <div class="doelgroep-icon"><svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9.5L12 3l9 6.5V20a1 1 0 01-1 1H4a1 1 0 01-1-1V9.5z"/><path d="M9 21V12h6v9"/></svg></div>
        <h3>Particuliere woningeigenaren</h3>
        <p>U verkoopt uw huis, wilt uw hypotheek oversluiten of bent benieuwd hoe energiezuinig uw woning is.</p>
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
    <p class="sectie-intro">Energielabels zijn al jaren verplicht bij woningtransacties. Nieuwe Europese wetgeving maakt de eisen de komende jaren aanzienlijk strenger.</p>
    <div class="wetgeving-grid">
      <div class="wet-blok">
        <div class="wet-head">
          <div class="wet-icon wet-icon-groen"><svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.6" stroke-linecap="round"><path d="M3 9.5L12 3l9 6.5V20a1 1 0 01-1 1H4a1 1 0 01-1-1V9.5z"/><path d="M9 21V12h6v9"/></svg></div>
          <h3>Voor particuliere eigenaren</h3>
        </div>
        <div class="wet-rij"><span class="wet-dot">→</span><p><strong>Verplicht bij verkoop</strong> — Bij overdracht is een geldig label wettelijk verplicht.</p></div>
        <div class="wet-rij"><span class="wet-dot">→</span><p><strong>Geldigheid 10 jaar</strong> — Na registratie is het label 10 jaar geldig.</p></div>
        <div class="wet-rij"><span class="wet-dot">→</span><p><strong>Hypotheekvoordeel</strong> — Bij label A of B bieden grootbanken tot 0,3% rentevoordeel.</p></div>
      </div>
      <div class="wet-blok">
        <div class="wet-head">
          <div class="wet-icon wet-icon-blauw"><svg viewBox="0 0 24 24" fill="none" stroke="#1e3a8a" stroke-width="1.6" stroke-linecap="round"><rect x="2" y="7" width="20" height="15" rx="1"/><path d="M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2"/></svg></div>
          <h3>Voor zakelijke verhuurders</h3>
        </div>
        <div class="wet-rij"><span class="wet-dot">→</span><p><strong>Verplicht per verhuurde woning</strong> — Bij elke nieuwe verhuur is een geldig label verplicht.</p></div>
        <div class="wet-rij"><span class="wet-dot">→</span><p><strong>Verhuurverbod label E/F/G (2029)</strong> — Woningen met een slecht label mogen vóór 2029 maximaal label D hebben.</p></div>
        <div class="wet-rij"><span class="wet-dot">→</span><p><strong>WWS-koppeling</strong> — Vanaf 2024 telt het label mee in het woningwaarderingstelsel.</p></div>
      </div>
    </div>
  </div>
</section>

<?php
// FAQ
$faq_label = 'Veelgestelde vragen';
$faq_titel = 'Alles wat u wilt weten over uw woninglabel';
$faq_items = [
  ['vraag' => 'Hoe lang duurt een energielabelopname voor een woning?',
   'antwoord' => 'Een opname duurt gemiddeld 1 à 2 uur, afhankelijk van het woningtype. Het definitieve label is binnen één week beschikbaar.'],
  ['vraag' => 'Hoe lang is een energielabel geldig?',
   'antwoord' => 'Een energielabel is 10 jaar geldig na registratie in EP-online. Na verduurzaming kunt u uw label laten aanpassen via herlabelen.'],
  ['vraag' => 'Is een energielabel verplicht bij verkoop van mijn woning?',
   'antwoord' => 'Ja. Bij de overdracht bent u wettelijk verplicht een geldig energielabel aan de koper te overhandigen. Zonder label riskeert u een boete van de ILT.'],
  ['vraag' => 'Wat heb ik nodig voor de opname?',
   'antwoord' => 'Toegang tot alle ruimtes is vereist. Daarnaast is het wenselijk om bouwtekeningen, installatieverantwoording en facturen van isolatiemaatregelen bij de hand te hebben.'],
  ['vraag' => 'Kan ik mijn energielabel verbeteren na verduurzaming?',
   'antwoord' => 'Ja. Na isolatie, HR++-glas of een warmtepomp kunt u uw label laten aanpassen via herlabelen — mogelijk binnen 24 maanden na de oorspronkelijke opnamedatum.'],
  ['vraag' => 'Hoe snel kan ik een afspraak inplannen?',
   'antwoord' => 'In de meeste gevallen kunt u binnen één week terecht. Heeft u haast — geef dit dan aan in uw aanvraag.'],
];
include $root . 'includes/faq.php';
?>

<!-- CTA -->
<section class="cta-sectie">
  <div class="cta-inner">
    <h2>Klaar om uw woninglabel aan te vragen?</h2>
    <p>Vul het aanvraagformulier in en STAP Energie neemt binnen twee werkdagen contact met u op. Vaste prijs, gecertificeerd adviseur, geen gedoe.</p>
    <div class="cta-knoppen">
      <a href="#aanvraag" class="btn-primair">Label aanvragen →</a>
      <a href="tel:06XXXXXXXX" class="btn-sec">Bel ons direct</a>
    </div>
    <div class="cta-garanties">
      <span class="cta-garantie"><span class="cta-vink">✓</span> Gecertificeerd EPA-adviseur</span>
      <span class="cta-garantie"><span class="cta-vink">✓</span> Officieel geregistreerd in EP-online</span>
      <span class="cta-garantie"><span class="cta-vink">✓</span> Binnen één week gereed</span>
    </div>
  </div>
</section>

<?php include $root . 'includes/footer.php'; ?>

<style>
/* ── Pagina-specifieke CSS die niet in base.css zit ── */
.breadcrumb { background: var(--lichtgrijs); border-bottom: 1px solid var(--rand); }
.breadcrumb-inner { max-width: 1200px; margin: 0 auto; padding: 10px 40px; display: flex; align-items: center; gap: 7px; font-size: .8rem; color: var(--subtekst); }
.breadcrumb-inner a { color: var(--groen); }

.hero { background: var(--groen); padding: 72px 40px 80px; position: relative; overflow: hidden; }
.hero::before { content: ''; position: absolute; top: -100px; right: -100px; width: 480px; height: 480px; background: radial-gradient(circle, rgba(46,168,85,.2) 0%, transparent 70%); pointer-events: none; }
.hero-inner { max-width: 1200px; margin: 0 auto; position: relative; z-index: 1; }
.hero-eyebrow { display: inline-flex; align-items: center; gap: 6px; background: rgba(255,255,255,.12); color: rgba(255,255,255,.9); font-size: .75rem; font-weight: 600; letter-spacing: .07em; text-transform: uppercase; padding: 5px 12px; border-radius: 20px; margin-bottom: 20px; }
.hero-eyebrow-dot { width: 6px; height: 6px; background: #2ea855; border-radius: 50%; }
.hero h1 { font-family: 'DM Serif Display', serif; font-size: clamp(1.9rem, 4vw, 2.85rem); color: #fff; line-height: 1.12; margin-bottom: 16px; max-width: 700px; }
.hero h1 em { font-style: normal; color: #a7f3c0; }
.hero-lead { color: rgba(255,255,255,.82); font-size: 1rem; line-height: 1.7; max-width: 580px; margin-bottom: 28px; }
.hero-usps { display: flex; flex-direction: column; gap: 9px; margin-bottom: 36px; }
.hero-usp { display: flex; align-items: center; gap: 9px; color: rgba(255,255,255,.88); font-size: .9rem; }
.hero-usp-vink { width: 18px; height: 18px; flex-shrink: 0; background: rgba(255,255,255,.15); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: .65rem; font-weight: 700; }
.hero-ctas { display: flex; gap: 12px; flex-wrap: wrap; }
.btn-primair { display: inline-flex; align-items: center; gap: 8px; background: #fff; color: var(--groen); font-weight: 700; font-size: .95rem; padding: 13px 26px; border-radius: var(--r); box-shadow: 0 4px 16px rgba(0,0,0,.15); transition: transform .2s, box-shadow .2s; }
.btn-primair:hover { transform: translateY(-2px); box-shadow: 0 8px 24px rgba(0,0,0,.2); }
.btn-sec { display: inline-flex; align-items: center; gap: 8px; border: 1.5px solid rgba(255,255,255,.38); color: #fff; font-weight: 600; font-size: .9rem; padding: 12px 22px; border-radius: var(--r); transition: border-color .2s, background .2s; }
.btn-sec:hover { border-color: #fff; background: rgba(255,255,255,.08); }

.trust-balk { background: var(--groen-licht,#f0f7f2); border-bottom: 1px solid var(--rand); }
.trust-inner { max-width: 1200px; margin: 0 auto; padding: 16px 40px; display: flex; align-items: stretch; flex-wrap: wrap; }
.trust-item { display: flex; align-items: center; gap: 10px; flex: 1; min-width: 180px; padding: 8px 20px; border-right: 1px solid var(--rand); }
.trust-item:last-child { border-right: none; }
.trust-icon { width: 34px; height: 34px; background: var(--groen-card); border-radius: 8px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; }
.trust-icon svg { width: 16px; height: 16px; }
.trust-label { font-size: .8rem; font-weight: 700; color: var(--tekst); line-height: 1.2; }
.trust-sub { font-size: .72rem; color: var(--subtekst); }

.sectie { padding: 80px 40px; }
.sectie-wit { background: #fff; }
.sectie-grijs { background: var(--lichtgrijs); }
.sectie-inner { max-width: 1200px; margin: 0 auto; }
.sectie-label { display: inline-block; font-size: .72rem; font-weight: 700; letter-spacing: .1em; text-transform: uppercase; color: var(--groen); margin-bottom: 8px; }
.sectie-titel { font-family: 'DM Serif Display', serif; font-size: clamp(1.5rem, 3vw, 2.1rem); color: var(--tekst); line-height: 1.2; margin-bottom: 12px; }
.sectie-intro { color: var(--subtekst); font-size: .95rem; max-width: 540px; line-height: 1.7; margin-bottom: 48px; }

.woning-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; }
.woning-card { background: #fff; border: 1px solid var(--rand); border-radius: var(--rl); overflow: hidden; position: relative; transition: box-shadow .2s, transform .2s; display: flex; flex-direction: column; }
.woning-card:hover { box-shadow: var(--shadow-lg); transform: translateY(-4px); }
.woning-card.populair { border: 2px solid var(--groen); }
.woning-badge { position: absolute; top: 12px; right: 12px; z-index: 2; background: var(--groen); color: #fff; font-size: .68rem; font-weight: 700; letter-spacing: .04em; text-transform: uppercase; padding: 4px 10px; border-radius: 20px; }
.woning-foto { width: 100%; height: 200px; object-fit: cover; }
.woning-body { padding: 24px; display: flex; flex-direction: column; flex: 1; }
.woning-type { font-size: .7rem; font-weight: 700; letter-spacing: .08em; text-transform: uppercase; color: var(--subtekst); margin-bottom: 4px; }
.woning-body h3 { font-size: 1.05rem; font-weight: 700; margin-bottom: 6px; }
.woning-omschr { font-size: .84rem; color: var(--subtekst); line-height: 1.5; margin-bottom: 16px; }
.woning-prijzen { display: flex; flex-direction: column; gap: 6px; margin-bottom: 14px; }
.woning-prijs-rij { display: flex; justify-content: space-between; align-items: center; padding: 7px 10px; background: var(--lichtgrijs); border-radius: var(--r); font-size: .84rem; }
.woning-prijs-rij-label { color: var(--subtekst); }
.woning-prijs-rij-bedrag { font-weight: 700; color: var(--groen); }
.woning-incl { font-size: .72rem; color: var(--subtekst); margin-bottom: 18px; }
.woning-cta { margin-top: auto; display: inline-flex; align-items: center; justify-content: center; padding: 10px 22px; border-radius: var(--r); font-weight: 600; font-size: .9rem; transition: background .2s; width: 100%; }
.btn-groen { background: var(--groen); color: #fff; }
.btn-groen:hover { background: var(--groen-mid); }
.btn-groen-outline { border: 2px solid var(--groen); color: var(--groen); background: transparent; }
.btn-groen-outline:hover { background: var(--groen-licht); }
.prijzen-noot { margin-top: 20px; text-align: center; font-size: .83rem; color: var(--subtekst); }
.prijzen-noot a { color: var(--groen); font-weight: 600; }

.stappen-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; position: relative; }
.stappen-grid::before { content: ''; position: absolute; top: 28px; left: calc(12.5% + 14px); right: calc(12.5% + 14px); height: 2px; background: linear-gradient(90deg, #2ea855, var(--groen-mid)); }
.stap { background: #fff; border: 1px solid var(--rand); border-radius: var(--rl); padding: 26px 20px; text-align: center; position: relative; z-index: 1; transition: box-shadow .2s; }
.stap:hover { box-shadow: var(--shadow-lg); }
.stap-nr { width: 40px; height: 40px; background: var(--groen); color: #fff; font-weight: 800; font-size: 1rem; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 14px; box-shadow: 0 0 0 4px #fff, 0 0 0 5px #2ea855; }
.stap h3 { font-size: .9rem; font-weight: 700; margin-bottom: 6px; }
.stap p { font-size: .8rem; color: var(--subtekst); line-height: 1.6; }

.situaties-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; }
.situatie-card { background: #fff; border: 1px solid var(--rand); border-radius: var(--rl); padding: 26px 22px; transition: box-shadow .2s, transform .2s, border-color .2s; }
.situatie-card:hover { box-shadow: var(--shadow-lg); transform: translateY(-3px); border-color: #2ea855; }
.situatie-icon { width: 44px; height: 44px; background: var(--groen-card); border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-bottom: 14px; }
.situatie-icon svg { width: 22px; height: 22px; }
.situatie-card h3 { font-size: .95rem; font-weight: 700; margin-bottom: 6px; }
.situatie-card p { font-size: .83rem; color: var(--subtekst); line-height: 1.55; }
.situatie-tags { display: flex; gap: 6px; flex-wrap: wrap; margin-top: 10px; }
.tag { font-size: .67rem; font-weight: 600; letter-spacing: .04em; text-transform: uppercase; padding: 3px 9px; border-radius: 20px; }
.tag-groen { background: var(--groen-card); color: var(--groen); }
.tag-blauw { background: #e8f0ff; color: #1e3a8a; }

.labelschaal-layout { display: grid; grid-template-columns: 1fr 1.1fr; gap: 60px; align-items: start; }
.labelschaal-uitleg h3 { font-size: .95rem; font-weight: 700; margin-bottom: 6px; }
.labelschaal-uitleg p { font-size: .88rem; color: var(--subtekst); line-height: 1.65; margin-bottom: 18px; }
.label-lijst { display: flex; flex-direction: column; gap: 4px; }
.label-rij { display: flex; align-items: center; gap: 12px; }
.label-pijl { display: flex; align-items: center; justify-content: center; color: #fff; font-weight: 800; font-size: .82rem; padding: 6px 0; border-radius: 4px 0 0 4px; clip-path: polygon(0 0, 88% 0, 100% 50%, 88% 100%, 0 100%); flex-shrink: 0; }
.lp-a4{background:#009036;width:88px}.lp-a3{background:#18993e;width:80px}.lp-a2{background:#52ae32;width:72px}.lp-a1{background:#6aba42;width:64px}.lp-a{background:#c3d500;color:#333;width:58px}.lp-b{background:#f7e500;color:#333;width:56px}.lp-c{background:#f7a600;color:#333;width:54px}.lp-d{background:#e06400;width:54px}.lp-e{background:#cc1e1e;width:54px}.lp-f{background:#aa0000;width:54px}.lp-g{background:#7a0000;width:54px}
.label-info { flex: 1; }
.label-info-titel { font-size: .8rem; font-weight: 700; color: var(--tekst); line-height: 1.2; }
.label-info-sub { font-size: .72rem; color: var(--subtekst); }
.label-tag { display: inline-block; margin-top: 2px; font-size: .64rem; font-weight: 600; padding: 2px 7px; border-radius: 20px; }
.lt-groen { background: var(--groen-card); color: var(--groen); }
.lt-rood { background: #fee2e2; color: #991b1b; }

.doelgroepen-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 24px; }
.doelgroep-card { border: 1px solid var(--rand); border-radius: var(--rl); padding: 32px 28px; position: relative; overflow: hidden; transition: box-shadow .2s, transform .2s; }
.doelgroep-card:hover { box-shadow: var(--shadow-lg); transform: translateY(-3px); }
.doelgroep-card::before { content: ''; position: absolute; top: 0; left: 0; right: 0; height: 3px; background: linear-gradient(90deg, #2ea855, var(--groen-mid)); }
.doelgroep-icon { width: 46px; height: 46px; background: var(--groen-card); border-radius: 11px; display: flex; align-items: center; justify-content: center; margin-bottom: 16px; }
.doelgroep-icon svg { width: 22px; height: 22px; }
.doelgroep-card h3 { font-family: 'DM Serif Display', serif; font-size: 1.2rem; margin-bottom: 8px; }
.doelgroep-card p { font-size: .88rem; color: var(--subtekst); line-height: 1.65; margin-bottom: 18px; }
.check-lijst { display: flex; flex-direction: column; gap: 7px; }
.check-item { display: flex; align-items: flex-start; gap: 8px; font-size: .85rem; color: var(--subtekst); }
.check-vink { color: #2ea855; font-weight: 700; flex-shrink: 0; }

.wetgeving-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 24px; }
.wet-blok { background: #fff; border: 1px solid var(--rand); border-radius: var(--rl); padding: 26px; }
.wet-head { display: flex; align-items: center; gap: 10px; margin-bottom: 14px; }
.wet-icon { width: 36px; height: 36px; border-radius: 8px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; }
.wet-icon svg { width: 17px; height: 17px; }
.wet-icon-groen { background: var(--groen-card); }
.wet-icon-blauw { background: #e8f0ff; }
.wet-blok h3 { font-size: .95rem; font-weight: 700; }
.wet-rij { display: flex; align-items: flex-start; gap: 9px; padding: 9px 0; border-bottom: 1px solid var(--rand); font-size: .85rem; }
.wet-rij:last-child { border-bottom: none; }
.wet-dot { color: #2ea855; font-weight: 700; flex-shrink: 0; margin-top: 2px; }
.wet-rij p { color: var(--subtekst); line-height: 1.5; }
.wet-rij strong { color: var(--tekst); }

.cta-sectie { background: var(--groen); padding: 80px 40px; text-align: center; position: relative; overflow: hidden; }
.cta-inner { max-width: 640px; margin: 0 auto; position: relative; z-index: 1; }
.cta-inner h2 { font-family: 'DM Serif Display', serif; font-size: clamp(1.7rem, 3vw, 2.3rem); color: #fff; margin-bottom: 12px; }
.cta-inner p { color: rgba(255,255,255,.8); font-size: .95rem; margin-bottom: 28px; line-height: 1.65; }
.cta-knoppen { display: flex; gap: 14px; justify-content: center; flex-wrap: wrap; }
.cta-garanties { margin-top: 24px; display: flex; justify-content: center; gap: 22px; flex-wrap: wrap; }
.cta-garantie { display: flex; align-items: center; gap: 5px; color: rgba(255,255,255,.65); font-size: .78rem; }
.cta-vink { color: #2ea855; }

@media (max-width: 900px) {
  .woning-grid, .doelgroepen-grid { grid-template-columns: 1fr 1fr; }
  .stappen-grid, .situaties-grid { grid-template-columns: 1fr 1fr; }
  .stappen-grid::before { display: none; }
  .labelschaal-layout, .wetgeving-grid { grid-template-columns: 1fr; gap: 32px; }
  .sectie { padding: 56px 24px; }
  .hero { padding: 48px 24px 56px; }
  .trust-inner, .breadcrumb-inner { padding-left: 24px; padding-right: 24px; }
}
@media (max-width: 480px) {
  .woning-grid, .stappen-grid, .situaties-grid { grid-template-columns: 1fr; }
  .hero-ctas, .cta-knoppen { flex-direction: column; align-items: flex-start; }
  .cta-knoppen { align-items: center; }
  .trust-inner { flex-direction: column; }
  .trust-item { border-right: none; border-bottom: 1px solid var(--rand); min-width: unset; width: 100%; }
  .trust-item:last-child { border-bottom: none; }
}
</style>
