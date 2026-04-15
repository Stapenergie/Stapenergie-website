<?php
/**
 * vastgoed/index.php
 * Segmentpagina Vastgoed & Makelaars
 */
$root        = dirname(dirname(__FILE__)) . '/';
$title       = 'Energielabel Vastgoed | Snel & Betrouwbaar | STAP Energie';
$description = 'Energielabels voor vastgoedportefeuilles, beleggers en makelaars. Snel leverbaar, officieel geregistreerd in EP-online, volumetarief bij meerdere panden.';
$canonical   = 'https://stapenergie.nl/vastgoed/';

$breadcrumbs = [
  ['label' => 'Home',    'url' => '/'],
  ['label' => 'Zakelijk','url' => '/zakelijk/'],
  ['label' => 'Vastgoed'],
];

$cta_titel     = 'Energielabels voor jouw vastgoedportefeuille?';
$cta_subtitel  = 'Neem contact op voor een volumeofferte of een vrijblijvend kennismakingsgesprek.';
$cta_knop      = 'Vraag een offerte aan →';
$cta_knop_url  = '#contact';
$cta_garanties = ['Gecertificeerd EPA-adviseur', 'Officieel geregistreerd in EP-online', 'Reactie binnen twee werkdagen'];

$faq_label = 'Veelgestelde vragen';
$faq_titel = 'Vragen van vastgoedeigenaren en beleggers';
$faq_items = [
  ['vraag' => 'Moet elk pand in mijn portefeuille een geldig energielabel hebben?',
   'antwoord' => 'Niet per se tegelijk, maar wel op het moment van verkoop, verhuur of oplevering. Als je een pand wilt verkopen of een nieuw huurcontract wilt afsluiten, is een geldig label wettelijk verplicht. Het is verstandig om vooruit te lopen op transacties en labels op orde te houden.'],
  ['vraag' => 'Geldt er een verhuurverbod voor panden met een slecht label?',
   'antwoord' => 'Voor woningen is een verhuurverbod voor label E, F en G voorzien voor 2029, de exacte invoeringsdatum staat nog niet vast. Voor kantoren groter dan 100 m² geldt nu al een verplicht minimumklasse C. Voor andere utiliteitsgebouwen gelden vooralsnog geen expliciete verboden, maar de regelgeving trekt aan.'],
  ['vraag' => 'Hoe snel kan STAP Energie een label opnemen en registreren?',
   'antwoord' => 'In de meeste gevallen is een opname binnen één tot twee weken in te plannen. Na de opname ontvang je het label doorgaans binnen één week. Heb je haast vanwege een nakende transactie? Geef dat aan in je aanvraag.'],
  ['vraag' => 'Biedt STAP Energie volumetarieven voor meerdere panden?',
   'antwoord' => 'Ja. Bij drie of meer panden biedt STAP Energie een volumetarief. Voor grotere portefeuilles stellen wij een maatwerkofferte op. Neem contact op voor een offerte.'],
  ['vraag' => 'Wat als mijn huurder nog in het pand zit tijdens de opname?',
   'antwoord' => 'Dat is geen probleem. De opname vereist toegang tot alle ruimtes, maar de huurder hoeft niet aanwezig te zijn. STAP Energie plant de afspraak in afstemming met alle betrokkenen.'],
  ['vraag' => 'Kan een label de verkoopprijs van mijn pand beinvloeden?',
   'antwoord' => 'Ja. Panden met een goed energielabel zijn in de markt aantrekkelijker voor kopers en huurders, zeker nu energielasten een steeds grotere rol spelen in het huurrendement. Een slecht label kan de verkoop vertragen of de prijs drukken.'],
];

include $root . 'includes/head.php';
include $root . 'includes/nav.php';
include $root . 'includes/breadcrumb.php';

// ── Hero
$hero_variant  = 'sub';
$hero_bg       = '/images/segment-vastgoed.jpg';
$hero_eyebrow  = 'Energielabels voor vastgoed';
$hero_titel    = 'Labels op orde houden in jouw portefeuille. <em>Zonder gedoe.</em>';
$hero_lead     = 'Voor vastgoedeigenaren en beleggers is een geldig energielabel een terugkerende verplichting. STAP Energie regelt het snel, officieel en transparant geprijsd.';
$hero_usps     = [
  'Gecertificeerd EPA-adviseur',
  'Officieel geregistreerd in EP-online',
  'Volumetarief bij meerdere panden',
  'Reactie binnen twee werkdagen',
];
$hero_cta      = 'Vraag een offerte aan →';
$hero_cta_url  = '#contact';
$hero_cta2     = 'Bekijk prijzen';
$hero_cta2_url = '#prijzen';
include $root . 'includes/hero.php';
include $root . 'includes/trust.php';

// ── Voor wie
$kaarten_variant = 'wit';
$kaarten_label   = 'Voor wie';
$kaarten_titel   = 'STAP Energie werkt voor de gehele vastgoedmarkt';
$kaarten_intro   = 'Of je nu een handjevol panden hebt of een grote portefeuille beheert, STAP Energie past het aanbod aan op je situatie.';
$kaarten_cols    = 3;
$kaarten_items   = [
  [
    'titel'  => 'Vastgoedbeleggers',
    'icoon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21V9l9-7 9 7v12"/><path d="M9 21v-6h6v6"/></svg>',
    'tekst'  => 'Portefeuillebeheer van energielabels voor woningen en utiliteitsgebouwen. Volumetarief bij meerdere panden, gecoordineerde planning en overzicht per object.',
    'cta_tekst' => 'Vraag volumeofferte aan →',
    'cta_url'   => '#contact',
    'cta_stijl' => 'outline',
  ],
  [
    'titel'  => 'Makelaars',
    'icoon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M20 7H4a2 2 0 00-2 2v6a2 2 0 002 2h16a2 2 0 002-2V9a2 2 0 00-2-2z"/><path d="M16 21V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v16"/></svg>',
    'tekst'  => 'Snelle levering voor verkooptransacties. STAP Energie werkt samen met makelaars die betrouwbare labellevering voor hun klanten willen regelen.',
    'cta_tekst' => 'Meer over makelaars →',
    'cta_url'   => '/makelaars/',
    'cta_stijl' => 'outline',
  ],
  [
    'titel'  => 'VvE\'s & beheerders',
    'icoon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="15" rx="1"/><path d="M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2"/><path d="M12 12v4M10 14h4"/></svg>',
    'tekst'  => 'Voor VvE\'s en vastgoedbeheerders met meerdere appartementen of utiliteitsgebouwen biedt STAP Energie een gezamenlijke aanpak per complex of portefeuille.',
    'cta_tekst' => 'Neem contact op →',
    'cta_url'   => '#contact',
    'cta_stijl' => 'outline',
  ],
];
include $root . 'includes/components/section-kaarten.php';

// ── Prijzen
$kaarten_variant = 'grijs';
$kaarten_label   = 'Prijzen';
$kaarten_titel   = 'Transparante tarieven voor woningen en bedrijfspanden';
$kaarten_intro   = 'Vaste prijzen per woningtype, maatwerkofferte voor grotere objecten. Altijd vooraf duidelijk.';
$kaarten_cols    = 2;
$kaarten_id      = 'prijzen';
$kaarten_items   = [
  [
    'titel'      => 'Woninglabels',
    'badge'      => 'Inclusief btw',
    'tekst'      => 'Officieel energielabel voor appartementen, eengezinswoningen en vrijstaande woningen.',
    'prijsrijen' => [
      ['label' => 'Appartement tot 40 m²',       'bedrag' => '€ 195'],
      ['label' => 'Appartement 40-100 m²',        'bedrag' => '€ 249'],
      ['label' => 'Tussenwoning',                 'bedrag' => '€ 295'],
      ['label' => 'Hoekwoning / 2-onder-1-kap',   'bedrag' => '€ 325'],
      ['label' => 'Vrijstaande woning tot 150 m²', 'bedrag' => '€ 345'],
    ],
    'incl'      => 'Inclusief btw · EP-online registratie',
    'cta_tekst' => 'Meer over woninglabels →',
    'cta_url'   => '/energielabels/woningen/',
    'cta_stijl' => 'outline',
  ],
  [
    'titel'      => 'Utiliteitslabels',
    'badge'      => 'Exclusief btw',
    'tekst'      => 'Officieel energielabel voor kantoren, winkels, opslagruimtes en andere bedrijfspanden.',
    'prijsrijen' => [
      ['label' => 'Tot 100 m²',        'bedrag' => '€ 495'],
      ['label' => '100-500 m²',        'bedrag' => '€ 675'],
      ['label' => 'Groter dan 500 m²', 'bedrag' => 'Offerte op maat'],
    ],
    'incl'      => 'Exclusief btw · EP-online registratie',
    'cta_tekst' => 'Meer over utiliteitslabels →',
    'cta_url'   => '/energielabels/utiliteit/',
    'cta_stijl' => 'outline',
  ],
];
include $root . 'includes/components/section-kaarten.php';

// ── Twee-kolom: regelgeving en risico
$two_col_variant   = 'wit';
$two_col_label     = 'Regelgeving';
$two_col_titel     = 'De eisen worden strenger, het loont om voor te sorteren';
$two_col_omgekeerd = false;
$two_col_links     = '
  <p style="color:var(--subtekst);line-height:1.7;margin-bottom:14px;">De labelplicht bij verkoop en verhuur bestaat al langer. Maar de regelgeving trekt aan. Voor kantoren geldt al een minimumklasse C. Voor huurwoningen staat een verhuurverbod voor slecht presterende panden in de planning.</p>
  <p style="color:var(--subtekst);line-height:1.7;margin-bottom:14px;">Wie zijn portefeuille nu op orde brengt, voorkomt een inhaalslag op het slechtste moment, namelijk vlak voor een transactie of bij een inspectie.</p>
  <p style="color:var(--subtekst);line-height:1.7;margin-bottom:20px;">STAP Energie houdt het overzicht en signaleert welke panden als eerste aandacht vragen.</p>';
$two_col_cta       = [];
$two_col_rechts    = '
  <ul class="checklist">
    <li class="checklist__item"><span class="checklist__vink">✓</span><span>Energielabel verplicht bij elke verkoop en verhuur</span></li>
    <li class="checklist__item"><span class="checklist__vink">✓</span><span>Kantoren groter dan 100 m² verplicht minimaal label C</span></li>
    <li class="checklist__item"><span class="checklist__vink">✓</span><span>Verhuurverbod huurwoningen label E/F/G in voorbereiding (2029)</span></li>
    <li class="checklist__item"><span class="checklist__vink">✓</span><span>EPBD IV: strengere labelplicht per 29 mei 2026</span></li>
    <li class="checklist__item"><span class="checklist__vink">✓</span><span>Label beïnvloedt huurwaarde en verkoopprijs</span></li>
  </ul>';
include $root . 'includes/components/section-two-col.php';

// ── Contactformulier
?>
<section class="sectie sectie--grijs" id="contact">
  <div class="sectie__inner">
    <span class="sectie__label">Contact</span>
    <h2 class="sectie__titel">Offerte aanvragen of een gesprek inplannen</h2>
    <p class="sectie__intro">Vul het formulier in en STAP Energie neemt binnen twee werkdagen contact op.</p>
    <?php
    $f_dienst = 'label';
    $f_type   = 'zakelijk';
    $f_pagina = 'vastgoed';
    include $root . 'includes/formulier.php';
    ?>
  </div>
</section>

<?php
include $root . 'includes/faq.php';
include $root . 'includes/cta.php';
include $root . 'includes/footer.php';
?>
