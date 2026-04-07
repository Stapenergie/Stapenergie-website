<?php
/**
 * particulieren/index.php
 * Hub pagina voor particuliere woningeigenaren
 */
$root        = dirname(dirname(__FILE__)) . '/';
$title       = 'Energielabel Particulieren | Woning Aanvragen | STAP Energie';
$description = 'Energielabel voor uw woning aanvragen als particulier? STAP Energie verzorgt officiële energielabels voor alle woningtypen. Gecertificeerd, vaste prijzen, heel Nederland.';
$canonical   = 'https://stapenergie.nl/particulieren/';

$breadcrumbs = [
  ['label' => 'Home',         'url' => '/'],
  ['label' => 'Particulieren'],
];

$cta_titel     = 'Klaar om uw woninglabel aan te vragen?';
$cta_subtitel  = 'Vul het aanvraagformulier in en STAP Energie neemt binnen twee werkdagen contact op. Vaste prijs, gecertificeerd adviseur, geen gedoe.';
$cta_knop      = 'Label aanvragen →';
$cta_knop_url  = '#aanvraag';
$cta_garanties = ['Gecertificeerd EPA-adviseur', 'Officieel geregistreerd in EP-online', 'Binnen één week gereed'];

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
   'antwoord' => 'Toegang tot alle ruimtes — inclusief zolder, kelder en kruipruimte — is vereist. Wenselijk zijn ook bouwtekeningen, installatieverantwoording en facturen van isolatiemaatregelen.'],
  ['vraag' => 'Kan ik mijn energielabel verbeteren na verduurzaming?',
   'antwoord' => 'Ja. Na isolatie, HR++-glas of een warmtepomp kunt u uw label laten aanpassen via herlabelen — mogelijk binnen 24 maanden na de oorspronkelijke opnamedatum.'],
  ['vraag' => 'Verschilt het label voor een verhuurwoning van een koopwoning?',
   'antwoord' => 'Nee. Het energielabel beschrijft de energieprestatie van het gebouw op basis van de vaste kenmerken — ongeacht het gebruik of de eigendomsvorm.'],
  ['vraag' => 'Hoe snel kan ik een afspraak inplannen?',
   'antwoord' => 'In de meeste gevallen kunt u binnen één week terecht. Heeft u haast — bijvoorbeeld vanwege een nakende verkooptransactie — geef dit dan aan in uw aanvraag. STAP Energie kijkt wat qua planning mogelijk is.'],
];

include $root . 'includes/head.php';
include $root . 'includes/nav.php';
include $root . 'includes/breadcrumb.php';

// ── Hero
$hero_variant  = 'sub';
$hero_bg       = '/images/hero-woningen.jpg';
$hero_eyebrow  = 'Gecertificeerd EPA-adviseur';
$hero_titel    = 'Energielabel voor uw woning — <em>officieel, snel en persoonlijk</em>';
$hero_lead     = 'Of u nu verkoopt, verhuurt of wilt weten hoe energiezuinig uw woning is — STAP Energie verzorgt het officiële energielabel. Vaste prijs, geen verrassingen.';
$hero_usps     = [
  'Officieel geregistreerd in EP-online',
  'Vaste prijzen — geen verborgen kosten',
  'Binnen één week uw label op zak',
  'Persoonlijk advies zonder extra kosten',
];
$hero_cta      = 'Label aanvragen →';
$hero_cta_url  = '#aanvraag';
$hero_cta2     = 'Bel direct';
$hero_cta2_url = 'tel:06XXXXXXXX';
include $root . 'includes/hero.php';
include $root . 'includes/trust.php';

// ── Woningtype cards met prijzen
$kaarten_variant = 'wit';
$kaarten_label   = 'Kies uw woningtype';
$kaarten_titel   = 'Energielabel voor elke woning';
$kaarten_intro   = 'De opnametijd en prijs hangen af van het type en de oppervlakte van uw woning.';
$kaarten_cols    = 3;
$kaarten_id      = 'prijzen';
$kaarten_items   = [
  [
    'titel'      => 'Appartement',
    'type'       => 'Woningtype',
    'foto'       => '/images/woning-appartement.jpg',
    'foto_alt'   => 'Appartement',
    'tekst'      => 'Snel en officieel geregistreerd. Vaste prijs per oppervlakteklasse.',
    'prijsrijen' => [
      ['label' => 'Tot 40 m²',   'bedrag' => '€ 195'],
      ['label' => '40 – 100 m²', 'bedrag' => '€ 249'],
    ],
    'incl'       => 'Inclusief btw · EP-online registratie',
    'cta_tekst'  => 'Aanvragen →',
    'cta_url'    => '#aanvraag',
    'cta_stijl'  => 'outline',
  ],
  [
    'titel'      => 'Eengezinswoning',
    'type'       => 'Woningtype',
    'foto'       => '/images/woning-eengezins.jpg',
    'foto_alt'   => 'Eengezinswoning',
    'badge'      => 'Meest aangevraagd',
    'tekst'      => 'Rijtjeswoning of twee-onder-een-kap. Vaste prijs op woningtype.',
    'prijsrijen' => [
      ['label' => 'Tussenwoning',            'bedrag' => '€ 295'],
      ['label' => 'Hoekwoning / 2-onder-1-kap', 'bedrag' => '€ 325'],
    ],
    'incl'       => 'Inclusief btw · EP-online registratie',
    'cta_tekst'  => 'Aanvragen →',
    'cta_url'    => '#aanvraag',
    'cta_stijl'  => 'solid',
    'uitgelicht' => true,
  ],
  [
    'titel'      => 'Vrijstaande woning',
    'type'       => 'Woningtype',
    'foto'       => '/images/woning-vrijstaand.jpg',
    'foto_alt'   => 'Vrijstaande woning',
    'tekst'      => 'Tot 150 m² vaste prijs, daarboven offerte op maat.',
    'prijsrijen' => [
      ['label' => 'Tot 150 m²',        'bedrag' => '€ 345'],
      ['label' => 'Groter dan 150 m²', 'bedrag' => 'Offerte op maat'],
    ],
    'incl'       => 'Inclusief btw · EP-online registratie',
    'cta_tekst'  => 'Offerte aanvragen →',
    'cta_url'    => '#aanvraag',
    'cta_stijl'  => 'outline',
  ],
];
$kaarten_noot = '<strong>Meerdere woningen?</strong> Bij 3 of meer woningen biedt STAP Energie een volumetarief. <a href="#aanvraag">Vraag naar de mogelijkheden →</a>';
include $root . 'includes/components/section-kaarten.php';

// ── Diensten voor woningeigenaren
$kaarten_variant = 'grijs';
$kaarten_label   = '-- Wat we voor u doen';
$kaarten_titel   = 'Alle diensten voor woningeigenaren';
$kaarten_intro   = 'Van verplicht energielabel tot een volledig verduurzamingsplan — en binnenkort ook een handige energievergelijker.';
$kaarten_cols    = 3;
$kaarten_items   = [
  [
    'titel'     => 'Energielabel woning',
    'icoon'     => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M8 7h8M8 12h5M8 17h3"/></svg>',
    'tekst'     => 'Verplicht bij verkoop en verhuur. Officieel geregistreerd in EP-online. Snel op afspraak bij u thuis.',
    'cta_tekst' => 'Meer info en aanvragen →',
    'cta_url'   => '/energielabels/woningen/',
    'cta_stijl' => 'outline',
  ],
  [
    'titel'     => 'Verduurzaming & Subsidie',
    'icoon'     => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>',
    'tekst'     => 'Persoonlijk stappenplan voor uw woning. Alle beschikbare subsidies in kaart — ISDE, SEEH, gemeentelijke regelingen.',
    'cta_tekst' => 'Meer info →',
    'cta_url'   => '/verduurzaming-subsidie/',
    'cta_stijl' => 'outline',
  ],
  [
    'titel'     => 'Energie vergelijker',
    'icoon'     => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>',
    'tekst'     => 'Vergelijk energiecontracten en vind het beste aanbod voor uw situatie. Onafhankelijk en overzichtelijk.',
    'extra'     => '<div style="margin-top:12px;"><span class="badge badge--groen">Binnenkort beschikbaar</span></div>',
  ],
];
include $root . 'includes/components/section-kaarten.php';

// ── Aanvraagformulier
?>
<section class="sectie sectie--grijs" id="aanvraag">
  <div class="sectie__inner">
    <span class="sectie__label">Aanvragen</span>
    <h2 class="sectie__titel">Vraag direct uw energielabel aan</h2>
    <p class="sectie__intro">Vul het formulier in en STAP Energie neemt binnen twee werkdagen contact op.</p>
    <?php
    $f_dienst = 'label';
    $f_type   = 'particulier';
    $f_pagina = 'particulieren';
    include $root . 'includes/formulier.php';
    ?>
  </div>
</section>

<?php
// ── Werkwijze
$stappen_variant = 'grijs';
$stappen_label   = 'Zo werkt het';
$stappen_titel   = 'Van aanvraag tot officieel label in 4 stappen';
$stappen_intro   = 'Transparant, snel en zonder gedoe — STAP Energie regelt het van begin tot eind.';
$stappen_cols    = 4;
$stappen_items   = [
  ['nummer' => 1, 'titel' => 'Aanvraag indienen',   'tekst' => 'Vul het formulier in. Binnen twee werkdagen nemen we contact op voor een afspraak.'],
  ['nummer' => 2, 'titel' => 'Voorbereiding',        'tekst' => 'U ontvangt een overzicht van wat u kunt klaarzetten voor een soepele opname.'],
  ['nummer' => 3, 'titel' => 'Opname aan huis',      'tekst' => 'Een gecertificeerd EPA-adviseur komt langs. Gemiddeld 1 à 2 uur.'],
  ['nummer' => 4, 'titel' => 'Label & adviesrapport', 'tekst' => 'Binnen één week ontvangt u het officieel geregistreerde label én een persoonlijk verduurzamingsadvies.'],
];
include $root . 'includes/components/section-stappen.php';

// ── Wanneer nodig
$kaarten_variant = 'grijs';
$kaarten_label   = 'Wanneer verplicht?';
$kaarten_titel   = 'In welke situatie heeft u een woninglabel nodig?';
$kaarten_intro   = 'Een energielabel is in diverse situaties wettelijk verplicht — voor particuliere én zakelijke woningeigenaren.';
$kaarten_cols    = 4;
$kaarten_items   = [
  [
    'titel' => 'Verkoop van uw woning',
    'tekst' => 'Bij overdracht bent u verplicht een geldig label te overhandigen.',
    'icoon' => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9.5L12 3l9 6.5V20a1 1 0 01-1 1H4a1 1 0 01-1-1V9.5z"/><path d="M9 21V12h6v9"/></svg>',
    'extra' => '<div style="margin-top:8px;"><span class="badge badge--groen">Particulier</span></div>',
  ],
  [
    'titel' => 'Verhuur van uw woning',
    'tekst' => 'Bij elke nieuwe verhuur is een geldig label verplicht.',
    'icoon' => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12H3M3 6h18M3 18h18"/></svg>',
    'extra' => '<div style="margin-top:8px;display:flex;gap:5px;"><span class="badge badge--groen">Particulier</span><span class="badge badge--blauw">Zakelijk</span></div>',
  ],
  [
    'titel' => 'Hypotheek & financiering',
    'tekst' => 'Banken vragen steeds vaker om een label bij het afsluiten of oversluiten van een hypotheek.',
    'icoon' => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="8" width="18" height="13" rx="1"/><path d="M16 8V6a4 4 0 00-8 0v2"/></svg>',
    'extra' => '<div style="margin-top:8px;"><span class="badge badge--groen">Particulier</span></div>',
  ],
  [
    'titel' => 'Nieuwbouw & renovatie',
    'tekst' => 'Bij oplevering van nieuwbouw is een label verplicht. Na ingrijpende renovaties is herlabelen de slimme stap.',
    'icoon' => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M4 21V8l8-5 8 5v13"/><path d="M9 21v-6h6v6"/></svg>',
    'extra' => '<div style="margin-top:8px;display:flex;gap:5px;"><span class="badge badge--groen">Particulier</span><span class="badge badge--blauw">Zakelijk</span></div>',
  ],
];
include $root . 'includes/components/section-kaarten.php';

// ── Doelgroepen
$kaarten_variant = 'wit';
$kaarten_label   = 'Voor iedereen met een woning';
$kaarten_titel   = 'Particulier of zakelijk — het label is hetzelfde';
$kaarten_intro   = 'Het energielabel voor een woning is technisch identiek, ongeacht wie de eigenaar is.';
$kaarten_cols    = 2;
$kaarten_items   = [
  [
    'titel' => 'Particuliere woningeigenaren',
    'icoon' => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9.5L12 3l9 6.5V20a1 1 0 01-1 1H4a1 1 0 01-1-1V9.5z"/><path d="M9 21V12h6v9"/></svg>',
    'tekst' => 'U verkoopt uw huis, wilt uw hypotheek oversluiten of bent benieuwd hoe energiezuinig uw woning is.',
    'extra' => '
      <ul class="checklist" style="margin-top:12px;">
        <li class="checklist__item"><span class="checklist__vink">✓</span><span>Verplicht bij verkoop en verhuur</span></li>
        <li class="checklist__item"><span class="checklist__vink">✓</span><span>Relevant voor hypotheek &amp; NHG</span></li>
        <li class="checklist__item"><span class="checklist__vink">✓</span><span>Advies over subsidies (ISDE, Warmtefonds)</span></li>
        <li class="checklist__item"><span class="checklist__vink">✓</span><span>Persoonlijk contact, geen callcenter</span></li>
      </ul>',
  ],
  [
    'titel' => 'Zakelijke woningeigenaren',
    'icoon' => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="15" rx="1"/><path d="M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2"/></svg>',
    'tekst' => 'Verhuurders, beleggers, VvE\'s of vastgoedontwikkelaars met woningen in bezit.',
    'extra' => '
      <ul class="checklist" style="margin-top:12px;">
        <li class="checklist__item"><span class="checklist__vink">✓</span><span>Verplicht per verhuurde woning</span></li>
        <li class="checklist__item"><span class="checklist__vink">✓</span><span>Verhuurverbod label E/F/G dreigt (2029)</span></li>
        <li class="checklist__item"><span class="checklist__vink">✓</span><span>Volumetarief bij 3 of meer woningen</span></li>
        <li class="checklist__item"><span class="checklist__vink">✓</span><span>VvE? Gezamenlijke aanvraag mogelijk</span></li>
      </ul>',
  ],
];
include $root . 'includes/components/section-kaarten.php';

// ── Wetgeving tabs
$tabs_variant = 'grijs';
$tabs_label   = 'Regelgeving';
$tabs_titel   = 'Wat zegt de wet over woninglabels?';
$tabs_intro   = 'Energielabels zijn al jaren verplicht bij woningtransacties. Nieuwe Europese wetgeving maakt de eisen de komende jaren aanzienlijk strenger.';
$tabs_id      = 'wetgeving';
$tabs_items   = [
  [
    'tab_label' => 'Voor particuliere eigenaren',
    'items'     => [
      ['icoon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><path d="M3 9.5L12 3l9 6.5V20a1 1 0 01-1 1H4a1 1 0 01-1-1V9.5z"/><path d="M9 21V12h6v9"/></svg>',
       'titel' => 'Verplicht bij verkoop', 'tekst' => 'Bij overdracht is een geldig label wettelijk verplicht. Geen label: boete tot €435 van de ILT.'],
      ['icoon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>',
       'titel' => 'Geldigheid 10 jaar', 'tekst' => 'Na registratie is het label 10 jaar geldig. Na verduurzaming kunt u herlabelen.'],
      ['icoon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><rect x="3" y="8" width="18" height="13" rx="1"/><path d="M16 8V6a4 4 0 00-8 0v2"/></svg>',
       'titel' => 'Hypotheekvoordeel', 'tekst' => 'Bij label A of B bieden grootbanken tot 0,3% rentevoordeel op uw hypotheek.'],
    ],
  ],
  [
    'tab_label' => 'Voor zakelijke verhuurders',
    'items'     => [
      ['icoon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><rect x="2" y="7" width="20" height="15" rx="1"/><path d="M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2"/></svg>',
       'titel' => 'Verplicht per verhuurde woning', 'tekst' => 'Bij elke nieuwe verhuur is een geldig label verplicht. De ILT kan een dwangsom opleggen.'],
      ['icoon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><path d="M12 2a10 10 0 100 20A10 10 0 0012 2z"/><path d="M12 6v6l4 2"/></svg>',
       'titel' => 'Verhuurverbod label E/F/G (2029)', 'tekst' => 'Woningen met een slecht label mogen vóór 2029 maximaal label D hebben om verhuurd te worden.'],
      ['icoon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><path d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>',
       'titel' => 'WWS-koppeling', 'tekst' => 'Vanaf 2024 telt het label mee in het woningwaarderingstelsel. Een beter label = hogere maximale huurprijs.'],
    ],
  ],
];
include $root . 'includes/components/section-tabs.php';

// ── Vervolgstappen: populaire maatregelen
$kaarten_variant = 'wit';
$kaarten_label   = '-- Verder verduurzamen';
$kaarten_titel   = 'Wat komt er na uw energielabel?';
$kaarten_intro   = 'Een energielabel geeft inzicht — maar de echte winst zit in de vervolgstap. STAP Energie helpt u begrijpen welke maatregelen het meeste opleveren voor uw situatie.';
$kaarten_cols    = 4;
$kaarten_noot    = '';

// Sub-label boven grid
?>
<section class="sectie sectie--wit">
  <div class="sectie__inner">
    <span class="sectie__label">-- Verder verduurzamen</span>
    <h2 class="sectie__titel">Wat komt er na uw energielabel?</h2>
    <p class="sectie__intro">Een energielabel geeft inzicht — maar de echte winst zit in de vervolgstap. STAP Energie helpt u begrijpen welke maatregelen het meeste opleveren voor uw situatie.</p>

    <p class="sectie__label" style="margin-bottom:16px;">-- Populaire vervolgstappen na een energielabel</p>
    <div class="sectie-kaarten__grid sectie-kaarten__grid--4" style="margin-bottom:40px;">
      <?php $card = ['titel'=>'Warmtepomp','type'=>'Verwarming','icoon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"/><path d="M8 14s1.5 2 4 2 4-2 4-2"/><line x1="9" y1="9" x2="9.01" y2="9"/><line x1="15" y1="9" x2="15.01" y2="9"/></svg>','tekst'=>'Een warmtepomp vervangt uw cv-ketel en verlaagt uw gasverbruik tot wel 70%. Geschikt voor goed geïsoleerde woningen.','cta_tekst'=>'Meer lezen →','cta_url'=>'/kennisbank/warmtepomp/','cta_stijl'=>'outline']; include $root . 'includes/components/card.php'; ?>
      <?php $card = ['titel'=>'Isolatie','type'=>'Isolatie','icoon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M9 3v18M15 3v18M3 9h18M3 15h18"/></svg>','tekst'=>'Spouwmuur-, vloer- en dakisolatie zijn vaak de meest kosteneffectieve maatregelen. Direct merkbaar in comfort én stookkosten.','cta_tekst'=>'Meer lezen →','cta_url'=>'/kennisbank/isolatie/','cta_stijl'=>'outline']; include $root . 'includes/components/card.php'; ?>
      <?php $card = ['titel'=>'Zonnepanelen','type'=>'Opwekking','icoon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="5"/><line x1="12" y1="1" x2="12" y2="3"/><line x1="12" y1="21" x2="12" y2="23"/><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/><line x1="1" y1="12" x2="3" y2="12"/><line x1="21" y1="12" x2="23" y2="12"/><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"/><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"/></svg>','tekst'=>'Zonnepanelen zijn in de meeste gevallen binnen 7 jaar terugverdiend. Combineer met een thuisbatterij voor maximaal rendement.','cta_tekst'=>'Meer lezen →','cta_url'=>'/kennisbank/zonnepanelen/','cta_stijl'=>'outline']; include $root . 'includes/components/card.php'; ?>
      <?php $card = ['titel'=>'HR-ketel vervangen','type'=>'Verwarming','icoon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>','tekst'=>'Een verouderde cv-ketel vervangen door een moderne HR-ketel of hybride warmtepomp is vaak een slimme tussenstap.','cta_tekst'=>'Meer lezen →','cta_url'=>'/kennisbank/cv-ketel/','cta_stijl'=>'outline']; include $root . 'includes/components/card.php'; ?>
    </div>

    <p class="sectie__label" style="margin-bottom:16px;">-- Slimmer wonen — de volgende stap</p>
    <div class="sectie-kaarten__grid sectie-kaarten__grid--4">
      <?php $card = ['titel'=>'Thuisbatterij','type'=>'Opslag','icoon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="7" y="7" width="10" height="14" rx="2"/><path d="M10 7V5a2 2 0 014 0v2"/><line x1="10" y1="11" x2="14" y2="11"/><line x1="12" y1="9" x2="12" y2="13"/></svg>','tekst'=>"Sla zelf opgewekte zonne-energie op voor gebruik 's avonds of bij piekprijzen. Interessant bij dynamisch energiecontract.",'cta_tekst'=>'Meer lezen →','cta_url'=>'/kennisbank/thuisbatterij/','cta_stijl'=>'outline']; include $root . 'includes/components/card.php'; ?>
      <?php $card = ['titel'=>'Laadpaal thuis','type'=>'Mobiliteit','icoon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="2" width="14" height="20" rx="2"/><line x1="12" y1="18" x2="12" y2="18.01"/><path d="M9 7h6M9 11h4"/></svg>','tekst'=>'Laad uw elektrische auto slim thuis op — bij voorkeur op uw eigen zonne-energie. Subsidie beschikbaar via SEEH-regeling.','cta_tekst'=>'Meer lezen →','cta_url'=>'/kennisbank/laadpaal/','cta_stijl'=>'outline']; include $root . 'includes/components/card.php'; ?>
      <?php $card = ['titel'=>'Airco / warmte-koud','type'=>'Klimaat','icoon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M9 3v18M15 3v18M3 9h18M3 15h18"/></svg>','tekst'=>'Een moderne airco koelt in de zomer én verwarmt efficiënt in de winter. Werkt als aanvulling op een warmtepomp of als alternatief.','cta_tekst'=>'Meer lezen →','cta_url'=>'/kennisbank/airco/','cta_stijl'=>'outline']; include $root . 'includes/components/card.php'; ?>
      <?php $card = ['titel'=>'Energiemanagementsysteem','type'=>'Slim beheer','icoon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"/><path d="M12 1v4M12 19v4M4.22 4.22l2.83 2.83M16.95 16.95l2.83 2.83M1 12h4M19 12h4M4.22 19.78l2.83-2.83M16.95 7.05l2.83-2.83"/></svg>','tekst'=>'Een EMS koppelt uw zonnepanelen, batterij, laadpaal en warmtepomp slim aan elkaar. Zo gebruikt u altijd de goedkoopste energie.','cta_tekst'=>'Meer lezen →','cta_url'=>'/kennisbank/ems/','cta_stijl'=>'outline']; include $root . 'includes/components/card.php'; ?>
    </div>
  </div>
</section>
<?php

include $root . 'includes/faq.php';
include $root . 'includes/cta.php';
include $root . 'includes/footer.php';
?>
