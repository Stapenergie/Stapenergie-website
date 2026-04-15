<?php
/**
 * kantoren/index.php
 * Energielabel kantoor — label C-plicht SEO-magneet
 */
$root        = dirname(dirname(__FILE__)) . '/';
$title       = 'Energielabel Kantoor Aanvragen | Label C-plicht & Kosten | STAP Energie';
$description = 'Elk kantoor groter dan 100 m² moet minimaal label C hebben. Voldoet je pand niet? Dan mag je het niet meer als kantoor gebruiken. STAP Energie regelt het snel.';
$canonical   = 'https://stapenergie.nl/kantoren/';

$breadcrumbs = [
  ['label' => 'Home',    'url' => '/'],
  ['label' => 'Zakelijk','url' => '/zakelijk/'],
  ['label' => 'Kantoren'],
];

$cta_titel     = 'Regel je kantoorlabel vandaag nog';
$cta_subtitel  = 'Vul het aanvraagformulier in en STAP Energie neemt binnen twee werkdagen contact op met een offerte op maat.';
$cta_knop      = 'Direct aanvragen →';
$cta_knop_url  = '#aanvragen';
$cta_garanties = ['Gecertificeerd EPA-adviseur', 'Vaste transparante tarieven', 'Reactie binnen twee werkdagen'];

$faq_label = 'Veelgestelde vragen';
$faq_titel = 'Alles over de label C-plicht voor kantoren';
$faq_items = [
  ['vraag' => 'Mijn kantoor heeft al een energielabel, ben ik klaar?',
   'antwoord' => 'Niet automatisch. Controleer twee dingen: (1) is het label nog geldig? Een energielabel is maximaal 10 jaar geldig. (2) is de labelklasse C of beter? Een geldig label D, E, F of G voldoet niet aan de C-plicht.'],
  ['vraag' => 'Vanaf welke grootte geldt de verplichting?',
   'antwoord' => 'De label C-plicht geldt voor kantoorpanden groter dan 100 m² waarbij de kantoorfunctie meer dan 50% van het totale gebruiksoppervlak beslaat. Een kleine kantoorruimte boven een winkel valt er doorgaans niet onder.'],
  ['vraag' => 'Hoe wordt gehandhaafd, en wat zijn de risico\'s?',
   'antwoord' => 'Gemeenten en omgevingsdiensten voeren gerichte controles uit. Bij constatering volgt een schriftelijke aanschrijving met hersteltermijn. Daarna kan een last onder dwangsom worden opgelegd.'],
  ['vraag' => 'Mijn kantoor heeft nu label D, wat moet ik doen?',
   'antwoord' => 'Veel kantoren met label D kunnen label C halen met beperkte maatregelen, zoals LED-verlichting, betere isolatie van het dak of glas, of aanpassing van de ventilatie. STAP Energie brengt de meest kostenefficiënte route in kaart.'],
  ['vraag' => 'Hoe lang duurt het proces van aanvraag tot geldig label?',
   'antwoord' => 'Na je aanvraag nemen wij binnen twee werkdagen contact op voor het inplannen van de opname. Na de opname ontvangt je het label doorgaans binnen één week.'],
  ['vraag' => 'Wij huren ons kantoor, wat kunnen wij doen?',
   'antwoord' => 'De verplichting ligt volledig bij de pandeigenaar, die is wettelijk verantwoordelijk voor het aanvragen en bijhouden van het energielabel. Als huurder kun je je verhuurder aanspreken op deze verplichting.'],
];

include $root . 'includes/head.php';
include $root . 'includes/nav.php';
include $root . 'includes/breadcrumb.php';

// ── Highlight: label C-plicht urgentie
$highlight_variant = 'oranje';
$highlight_badge   = 'Van kracht sinds 1 januari 2023';
$highlight_tekst   = '<strong>Label C-plicht kantoren:</strong> elk kantoor groter dan 100 m² moet minimaal energielabel C hebben. Voldoet je pand niet? Dan mag je het niet meer als kantoor gebruiken. <a href="#aanvragen">Regel het nu →</a>';
include $root . 'includes/components/section-highlight.php';

// ── Hero
$hero_variant  = 'sub';
$hero_bg       = '/images/hero-kantoren.jpg';
$hero_eyebrow  = 'Label C-plicht kantoren';
$hero_titel    = 'Energielabel kantoor aanvragen, <em>snel en transparant geprijsd</em>';
$hero_lead     = 'Elk kantoor groter dan 100 m² moet minimaal energielabel C hebben. Voldoet je pand niet? Dan mag je het niet meer als kantoor gebruiken. STAP Energie regelt het label snel, transparant geprijsd en persoonlijk.';
$hero_usps     = [
  'Gecertificeerd EPA-adviseur',
  'Vaste transparante tarieven',
  'Reactie binnen twee werkdagen',
  'Officieel geregistreerd in EP-online',
];
$hero_cta      = 'Direct aanvragen →';
$hero_cta_url  = '#aanvragen';
$hero_cta2     = 'Bekijk tarieven';
$hero_cta2_url = '#prijzen';
include $root . 'includes/hero.php';
include $root . 'includes/trust.php';

// ── Geldt dit voor mij — two-col met checklist
$two_col_variant = 'wit';
$two_col_label   = 'Geldt dit voor mij?';
$two_col_titel   = 'Geldt de label C-plicht voor je kantoor?';
$two_col_tekst   = 'De verplichting geldt niet voor elk kantoor. Hieronder ziet je snel of je situatie onder de regelgeving valt. Voldoe je aan alle punten hieronder? Dan is een geldig energielabel C, of beter, verplicht.';
$two_col_rechts  = '
  <ul class="checklist">
    <li class="checklist__item"><span class="checklist__vink">✓</span><span>Je bent <strong>eigenaar</strong> van het kantoorpand (niet huurder)</span></li>
    <li class="checklist__item"><span class="checklist__vink">✓</span><span>De gebruiksoppervlakte is <strong>groter dan 100 m²</strong></span></li>
    <li class="checklist__item"><span class="checklist__vink">✓</span><span>De kantoorfunctie beslaat <strong>meer dan 50%</strong> van het totale vloeroppervlak</span></li>
    <li class="checklist__item"><span class="checklist__vink">✓</span><span>Het pand is <strong>geen beschermd monument</strong> en wordt niet binnen twee jaar gesloopt</span></li>
  </ul>
  <div style="margin-top:20px;">
    <a href="#aanvragen" class="btn btn--primair">Aanvraag indienen →</a>
  </div>';
include $root . 'includes/components/section-two-col.php';

// ── Gevolgen
$kaarten_variant = 'grijs';
$kaarten_label   = 'Wat zijn de gevolgen?';
$kaarten_titel   = 'Wat zijn de gevolgen als je geen label C heeft?';
$kaarten_intro   = 'Gemeenten en omgevingsdiensten handhaven actief op de label C-plicht. De consequenties zijn ingrijpend, voor eigenaren én huurders.';
$kaarten_cols    = 3;
$kaarten_items   = [
  [
    'titel' => 'Boetes en dwangsommen',
    'tekst' => 'Bij constatering volgt eerst een waarschuwing met hersteltermijn. Daarna kan de gemeente een last onder dwangsom opleggen. Bij herhaald niet-voldoen riskeer je aanzienlijke boetes.',
    'icoon' => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>',
  ],
  [
    'titel' => 'Gebruiksverbod kantoor',
    'tekst' => 'Kantoren die niet voldoen aan de label C-plicht mogen in principe niet meer als kantoor worden gebruikt. Gemeenten kunnen gebruik verbieden totdat het label op orde is.',
    'icoon' => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>',
  ],
  [
    'titel' => 'Problemen bij herfinanciering',
    'tekst' => 'Bij het oversluiten of verlengen van een zakelijke hypotheek kijken financiers steeds vaker naar het energielabel. Een ontbrekend of slecht label kan financiering bemoeilijken.',
    'icoon' => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="15" rx="1"/><path d="M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2"/><line x1="12" y1="12" x2="12" y2="16"/><line x1="10" y1="14" x2="14" y2="14"/></svg>',
  ],
];
include $root . 'includes/components/section-kaarten.php';

// ── Prijskaarten
$kaarten_variant = 'wit';
$kaarten_label   = 'Tarieven';
$kaarten_titel   = 'Transparante vaste tarieven';
$kaarten_intro   = 'Geen verborgen kosten. De prijs is inclusief opname ter plaatse, energieprestatieberekening en officiële registratie in EP-Online. Geldig voor heel Nederland.';
$kaarten_cols    = 3;
$kaarten_id      = 'prijzen';
$kaarten_items   = [
  [
    'titel'      => 'Klein kantoor',
    'type'       => 'Tot 100 m²',
    'foto'       => '/images/bedrijfspand-klein.jpg',
    'foto_alt'   => 'Ondernemer voor klein kantoorpand',
    'prijsrijen' => [
      ['label' => 'Indicatief tarief', 'bedrag' => '€ 495'],
    ],
    'incl'       => 'Excl. btw · opname · berekening · EP-Online registratie',
    'cta_tekst'  => 'Aanvragen →',
    'cta_url'    => '#aanvragen',
    'cta_stijl'  => 'outline',
  ],
  [
    'titel'      => 'Middelgroot kantoor',
    'type'       => '100 – 500 m²',
    'foto'       => '/images/bedrijfspand-middel.jpg',
    'foto_alt'   => 'Collega\'s voor middelgroot kantoor',
    'badge'      => 'Meest gekozen',
    'prijsrijen' => [
      ['label' => 'Indicatief tarief', 'bedrag' => '€ 675'],
    ],
    'incl'       => 'Excl. btw · opname · berekening · EP-Online registratie · verbeteradvies op aanvraag',
    'cta_tekst'  => 'Aanvragen →',
    'cta_url'    => '#aanvragen',
    'cta_stijl'  => 'solid',
    'uitgelicht' => true,
  ],
  [
    'titel'      => 'Groot kantoor',
    'type'       => 'Meer dan 500 m²',
    'foto'       => '/images/bedrijfspand-groot.jpg',
    'foto_alt'   => 'Vastgoedbeheerder voor groot kantoor',
    'prijsrijen' => [
      ['label' => 'Tarief', 'bedrag' => 'Op aanvraag'],
    ],
    'incl'       => 'Excl. btw · maatwerktarief op omvang en complexiteit · verbeteradvies inbegrepen',
    'cta_tekst'  => 'Offerte aanvragen →',
    'cta_url'    => '#aanvragen',
    'cta_stijl'  => 'outline',
  ],
];
$kaarten_noot = '<strong>Meerdere kantoorpanden?</strong> Vraag naar ons portfoliotarief. <a href="#aanvragen">Neem contact op →</a>';
include $root . 'includes/components/section-kaarten.php';

// ── Zo werkt het
$stappen_variant = 'grijs';
$stappen_label   = 'Zo werkt het';
$stappen_titel   = 'Van aanvraag tot geldig energielabel';
$stappen_intro   = 'Helder en zonder gedoe, STAP Energie regelt het van begin tot eind.';
$stappen_cols    = 4;
$stappen_items   = [
  ['nummer' => 1, 'titel' => 'Aanvraag & offerte',      'tekst' => 'Je vult het formulier in. Binnen twee werkdagen neemt STAP Energie contact op voor een bevestiging en afspraakplanning.'],
  ['nummer' => 2, 'titel' => 'Documenten aanleveren',   'tekst' => 'Je ontvangt een overzicht van benodigde documenten. Hoe meer je aanlevert, hoe nauwkeuriger de opname.'],
  ['nummer' => 3, 'titel' => 'Inspectie op locatie',    'tekst' => 'Een gecertificeerd EPA-adviseur bezoekt je kantoor. De opname duurt afhankelijk van de omvang enkele uren.'],
  ['nummer' => 4, 'titel' => 'Label ontvangen',         'tekst' => 'Je ontvangt het officieel geregistreerde energielabel. Geldig voor 10 jaar na afgifte.'],
];
include $root . 'includes/components/section-stappen.php';

// ── Aanvraagformulier
?>
<section class="sectie sectie--wit" id="aanvragen">
  <div class="sectie__inner">
    <span class="sectie__label">Aanvragen</span>
    <h2 class="sectie__titel">Vraag direct je kantoorlabel aan</h2>
    <p class="sectie__intro">Vul het formulier in, wij nemen binnen twee werkdagen contact op met een offerte op maat.</p>
    <?php
    $f_dienst = 'label';
    $f_type   = 'zakelijk';
    $f_pagina = 'kantoren';
    include $root . 'includes/formulier.php';
    ?>
  </div>
</section>

<?php
// ── Ook interessant
$kaarten_variant = 'grijs';
$kaarten_label   = 'Ook interessant';
$kaarten_titel   = 'Meer dan alleen een energielabel';
$kaarten_intro   = 'Het energielabel is een nulmeting, het startpunt voor slimmere energiebeslissingen. STAP Energie helpt je verder.';
$kaarten_cols    = 2;
$kaarten_items   = [
  [
    'type'      => 'Verduurzaming',
    'titel'     => 'Voldoe je nog niet aan label C?',
    'tekst'     => 'Heeft je kantoor label D, E, F of G? Dan moeten er energiebesparende maatregelen worden genomen. STAP Energie brengt de meest kostenefficiënte route in kaart, zodat je snel, zonder onnodige investeringen, aan de norm voldoet.',
    'cta_tekst' => 'Meer over verduurzaming zakelijk →',
    'cta_url'   => '/zakelijk/',
    'cta_stijl' => 'outline',
  ],
  [
    'type'      => 'Energie-inkoop',
    'titel'     => 'Bespaar op je energiecontract',
    'tekst'     => 'Naast een beter label kun je ook direct besparen op je energiekosten. STAP Energie vergelijkt energiecontracten voor zakelijke gebruikers en onderhandelt voor je, zonder extra kosten.',
    'cta_tekst' => 'Meer over energie-inkoop →',
    'cta_url'   => '/energie-inkoop-advies/',
    'cta_stijl' => 'outline',
  ],
];
include $root . 'includes/components/section-kaarten.php';

include $root . 'includes/faq.php';
include $root . 'includes/cta.php';
include $root . 'includes/footer.php';
?>
