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

// ── Ook interessant
$kaarten_variant = 'wit';
$kaarten_label   = 'Ook interessant';
$kaarten_titel   = 'Meer dan alleen een label';
$kaarten_intro   = 'Een energielabel is een startpunt. STAP Energie helpt u ook verder.';
$kaarten_cols    = 2;
$kaarten_items   = [
  [
    'type'      => 'Verduurzaming',
    'titel'     => 'Verbeter uw label na verduurzaming',
    'tekst'     => 'Na isolatie, HR++-glas of een warmtepomp kunt u uw label laten verbeteren via herlabelen. STAP Energie adviseert u ook over beschikbare subsidies zoals ISDE en het Warmtefonds.',
    'cta_tekst' => 'Bekijk verduurzaming & subsidies →',
    'cta_url'   => '/verduurzaming-subsidie/',
    'cta_stijl' => 'outline',
  ],
  [
    'type'      => 'Energielabel woning',
    'titel'     => 'Direct naar de woningen pagina',
    'tekst'     => 'Bekijk alle woningtypen met bijbehorende prijzen, werkwijze en veelgestelde vragen over het energielabel voor uw specifieke woning.',
    'cta_tekst' => 'Naar energielabel woningen →',
    'cta_url'   => '/energielabels/woningen/',
    'cta_stijl' => 'outline',
  ],
];
include $root . 'includes/components/section-kaarten.php';

include $root . 'includes/faq.php';
include $root . 'includes/cta.php';
include $root . 'includes/footer.php';
?>
