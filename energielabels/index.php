<?php
/**
 * energielabels/index.php
 * Hub pagina — energielabels woning & bedrijfspand
 */
$root        = dirname(dirname(__FILE__)) . '/';
$title       = 'Energielabel Aanvragen | Officieel & Erkend | STAP Energie';
$description = 'Officieel energielabel voor uw woning of bedrijfspand. Gecertificeerd EPA-adviseur, vaste prijzen, heel Nederland. Reactie binnen twee werkdagen.';
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
   'antwoord' => 'Een energielabel is verplicht bij verkoop, verhuur of oplevering van een woning of bedrijfspand. Zonder geldig label riskeert u een boete van de Inspectie Leefomgeving en Transport (ILT).'],
  ['vraag' => 'Hoe lang is een energielabel geldig?',
   'antwoord' => 'Een energielabel is 10 jaar geldig na registratie in EP-online. Na verduurzamingsmaatregelen kunt u uw label laten aanpassen via herlabelen.'],
  ['vraag' => 'Wat is het verschil tussen een woning- en een utiliteitslabel?',
   'antwoord' => 'Het woninglabel geldt voor alle woningen. Het utiliteitslabel geldt voor kantoren, winkels, zorggebouwen en andere niet-woningen. De methodiek verschilt per gebouwtype.'],
  ['vraag' => 'Hoe lang duurt de opname?',
   'antwoord' => 'Een woningopname duurt gemiddeld 1 à 2 uur. Voor een bedrijfspand hangt de duur af van de omvang en het type gebouw. Na de opname ontvangt u het label doorgaans binnen één week.'],
  ['vraag' => 'Wat kost een energielabel?',
   'antwoord' => 'De prijs hangt af van het type en de oppervlakte. Voor woningen starten de prijzen vanaf € 195 incl. btw. Voor bedrijfspanden vanaf € 495 excl. btw.'],
];

include $root . 'includes/head.php';
include $root . 'includes/nav.php';
include $root . 'includes/breadcrumb.php';

// ── Highlight balk
$highlight_badge = 'Nieuw per 29 mei 2026';
$highlight_tekst = '<strong>Nieuw labelontwerp (EPBD IV) &amp; uitgebreide labelplicht:</strong> monumenten niet langer vrijgesteld, striktere eisen voor utiliteit. <a href="#wetgeving">Lees meer →</a>';
include $root . 'includes/components/section-highlight.php';

// ── Hero
$hero_variant  = 'sub';
$hero_bg       = '/images/hero-bedrijfspand.jpg';
$hero_eyebrow  = 'Officieel & erkend energielabel';
$hero_titel    = 'Energielabel voor uw woning of <em>bedrijfspand</em>';
$hero_lead     = 'Verplicht bij verkoop, verhuur en oplevering. STAP Energie verzorgt officiële energielabels voor woningen én utiliteit — gecertificeerd, snel en voor een vaste prijs.';
$hero_usps     = [
  'Officieel erkend & geregistreerd in EP-online',
  'Basisopname — bestaande bouw (woningen én utiliteit)',
  'Label 10 jaar geldig na afgifte',
  'Reactie binnen twee werkdagen — heel Nederland',
];
$hero_cta      = 'Label aanvragen →';
$hero_cta_url  = '#aanvraag';
$hero_cta2     = 'Bel direct';
$hero_cta2_url = 'tel:06XXXXXXXX';
include $root . 'includes/hero.php';

// ── Trust balk
include $root . 'includes/trust.php';

// ── Labelcheck
include $root . 'includes/labelcheck.php';

// ── Segmentkaarten
$kaarten_variant = 'wit';
$kaarten_label   = 'Kies uw situatie';
$kaarten_titel   = 'Energielabel voor woning of bedrijfspand';
$kaarten_intro   = 'Afhankelijk van het type gebouw gelden andere regels, methodieken en prijzen.';
$kaarten_cols    = 2;
$kaarten_items   = [
  [
    'titel'     => 'Energielabel woning',
    'tekst'     => 'Voor appartementen, rijtjeswoningen, twee-onder-een-kapwoningen en vrijstaande woningen. Verplicht bij verkoop, verhuur en oplevering.',
    'badge'     => '🏠 Woningen',
    'prijsrijen' => [
      ['label' => 'Appartement vanaf',     'bedrag' => '€ 195'],
      ['label' => 'Eengezinswoning vanaf', 'bedrag' => '€ 295'],
    ],
    'incl'      => 'Inclusief btw · EP-online registratie',
    'cta_tekst' => 'Meer over woninglabels →',
    'cta_url'   => '/energielabels/woningen/',
    'cta_stijl' => 'outline',
  ],
  [
    'titel'     => 'Energielabel bedrijfspand',
    'tekst'     => 'Voor kantoren, winkels, zorggebouwen en andere utiliteitsgebouwen. Verplicht bij transacties en oplevering. Striktere eisen per 2026.',
    'badge'     => '🏢 Utiliteit',
    'prijsrijen' => [
      ['label' => 'Kleinschalig pand vanaf', 'bedrag' => '€ 495'],
      ['label' => 'Groter pand',              'bedrag' => 'Offerte op maat'],
    ],
    'incl'      => 'Excl. btw · EP-online registratie',
    'cta_tekst' => 'Meer over utiliteitslabels →',
    'cta_url'   => '/energielabels/utiliteit/',
    'cta_stijl' => 'outline',
    'uitgelicht' => false,
  ],
];
include $root . 'includes/components/section-kaarten.php';

// ── Aanvraagformulier
?>
<section class="sectie sectie--grijs" id="aanvraag">
  <div class="sectie__inner">
    <span class="sectie__label">Aanvragen</span>
    <h2 class="sectie__titel">Vraag direct uw energielabel aan</h2>
    <p class="sectie__intro">Vul het formulier in — wij nemen binnen twee werkdagen contact op.</p>
    <?php
    $f_dienst = 'label';
    $f_type   = '';
    $f_pagina = 'energielabels';
    include $root . 'includes/formulier.php';
    ?>
  </div>
</section>

<?php
// ── Aanvraagproces stappen
$stappen_variant = 'grijs';
$stappen_label   = 'Zo werkt het';
$stappen_titel   = 'Van aanvraag naar officieel label in 4 stappen';
$stappen_intro   = 'Transparant, snel en zonder gedoe — STAP Energie regelt het van begin tot eind.';
$stappen_cols    = 4;
$stappen_items   = [
  ['nummer' => 1, 'titel' => 'Aanvraag indienen',   'tekst' => 'Vul het formulier in of bel direct. Binnen twee werkdagen nemen we contact op voor een afspraak.'],
  ['nummer' => 2, 'titel' => 'Voorbereiding',        'tekst' => 'U ontvangt een overzicht van wat u kunt klaarzetten voor een soepele opname.'],
  ['nummer' => 3, 'titel' => 'Opname ter plaatse',   'tekst' => 'Een gecertificeerd EPA-adviseur komt langs voor een grondige inspectie.'],
  ['nummer' => 4, 'titel' => 'Label ontvangen',      'tekst' => 'Binnen één week ontvangt u het officieel geregistreerde label + adviesrapport.'],
];
include $root . 'includes/components/section-stappen.php';

// ── Wat is een energielabel
$two_col_variant = 'wit';
$two_col_label   = 'Wat is een energielabel?';
$two_col_titel   = 'Een officieel bewijs van energieprestatie';
$two_col_tekst   = 'Een energielabel geeft aan hoe energiezuinig een gebouw is — op een schaal van A++++ (meest zuinig) tot G (minst zuinig). Het label is gebaseerd op isolatie, verwarmingssysteem, ventilatie en hernieuwbare energie. Het is officieel geregistreerd in EP-online en 10 jaar geldig.';
$two_col_rechts  = '
  <div class="infobox infobox--info" style="margin-bottom:16px;">
    <span class="infobox__icoon">ℹ️</span>
    <div class="infobox__tekst"><strong>Wist u dat?</strong> Een woning met label A is gemiddeld 2–5% meer waard dan een vergelijkbare woning met label C of lager.</div>
  </div>
  <ul class="checklist">
    <li class="checklist__item"><span class="checklist__vink">✓</span><span>Verplicht bij verkoop, verhuur en oplevering</span></li>
    <li class="checklist__item"><span class="checklist__vink">✓</span><span>Geregistreerd in het landelijke EP-online register</span></li>
    <li class="checklist__item"><span class="checklist__vink">✓</span><span>10 jaar geldig — herlabelen na verduurzaming mogelijk</span></li>
    <li class="checklist__item"><span class="checklist__vink">✓</span><span>Invloed op hypotheekrente, huurprijs en verkoopwaarde</span></li>
  </ul>';
include $root . 'includes/components/section-two-col.php';

// ── Wetgeving tabs
$tabs_variant = 'grijs';
$tabs_label   = 'Regelgeving';
$tabs_titel   = 'Wanneer bent u verplicht?';
$tabs_intro   = 'Het energielabel is wettelijk verplicht in diverse situaties. De regels gelden voor zowel woningeigenaren als zakelijke gebouweigenaren.';
$tabs_id      = 'wetgeving';
$tabs_items   = [
  [
    'tab_label' => '🏠 Particulier / Woningen',
    'items'     => [
      ['icoon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>',
       'titel' => 'Verplicht bij verkoop en verhuur', 'tekst' => 'Bij overdracht of verhuur van een woning bent u wettelijk verplicht een geldig label te overhandigen. Boete bij ontbreken: tot € 435.'],
      ['icoon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>',
       'titel' => 'Hogere verkoopwaarde', 'tekst' => 'Een woning met label A is gemiddeld 2–5% meer waard. Kopers en banken letten steeds meer op het label.'],
      ['icoon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"><rect x="3" y="8" width="18" height="13" rx="1"/><path d="M16 8V6a4 4 0 00-8 0v2"/></svg>',
       'titel' => 'Hypotheekvoordeel bij A/B label', 'tekst' => 'Grootbanken bieden tot 0,3% rentevoordeel op hypotheken voor woningen met label A of B.'],
      ['icoon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"><path d="M4 21V8l8-5 8 5v13"/><path d="M9 21v-6h6v6"/></svg>',
       'titel' => 'Herlabelen na verduurzaming', 'tekst' => 'Na isolatie, nieuwe ramen of een warmtepomp kunt u uw label laten aanpassen. Mogelijk binnen 24 maanden na de opname.'],
    ],
  ],
  [
    'tab_label' => '🏢 Zakelijk / Utiliteit',
    'items'     => [
      ['icoon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"><rect x="2" y="7" width="20" height="15" rx="1"/><path d="M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2"/></svg>',
       'titel' => 'Verplicht bij transacties', 'tekst' => 'Bij verkoop, verhuur of oplevering van utiliteitsgebouwen is een geldig energielabel wettelijk verplicht.'],
      ['icoon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"><path d="M12 2a10 10 0 100 20A10 10 0 0012 2z"/><path d="M12 6v6l4 2"/></svg>',
       'titel' => 'Energielabelplicht kantoren', 'tekst' => 'Kantoren met meer dan 100 m² moeten voldoen aan minimaal label C. Bij niet-voldoen kan de gemeente gebruik verbieden.'],
      ['icoon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622C17.176 19.29 21 14.591 21 9c0-1.042-.133-2.052-.382-3.016z"/></svg>',
       'titel' => 'EPBD IV — strengere eisen 2026', 'tekst' => 'Nieuwe Europese regelgeving stelt vanaf 2026 hogere eisen aan het energielabel van utiliteitsgebouwen. Monumenten zijn niet langer vrijgesteld.'],
      ['icoon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"><path d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>',
       'titel' => 'Invloed op huurprijs utiliteit', 'tekst' => 'Het label beïnvloedt de markthuurwaarde van commercieel vastgoed. Beleggers en huurders stellen steeds hogere eisen.'],
    ],
  ],
];
include $root . 'includes/components/section-tabs.php';

// ── Voordelen
$kaarten_variant = 'wit';
$kaarten_label   = 'Waarom een energielabel?';
$kaarten_titel   = 'De voordelen van een goed label';
$kaarten_intro   = 'Een energielabel is meer dan een verplichting — het is een instrument dat direct invloed heeft op waarde, kosten en kansen.';
$kaarten_cols    = 3;
$kaarten_items   = [
  [
    'titel' => 'Hogere woningwaarde',
    'badge' => '2–5%',
    'tekst' => 'Woningen met een goed energielabel zijn gemiddeld 2 tot 5% meer waard dan vergelijkbare woningen met een slechter label. Ze worden ook sneller verkocht.',
  ],
  [
    'titel' => 'Lagere energiekosten',
    'badge' => '€ 1.500/jaar',
    'tekst' => 'Een beter energielabel betekent een betere energieprestatie. Dat vertaalt zich direct in lagere energiekosten per jaar.',
  ],
  [
    'titel' => 'Hypotheekrentevoordeel',
    'badge' => 'Tot 0,3%',
    'tekst' => 'Bij label A of B bieden grootbanken een rentevoordeel op de hypotheek. Dat scheelt op een gemiddelde hypotheek al snel honderden euro\'s per jaar.',
  ],
];
include $root . 'includes/components/section-kaarten.php';

// ── Subsidie & verduurzaming
$two_col_variant   = 'grijs';
$two_col_label     = 'Subsidie & verduurzaming';
$two_col_titel     = 'Beter label na verduurzaming';
$two_col_tekst     = 'Heeft u na de opname maatregelen getroffen? Dan kunt u uw label laten verbeteren via herlabelen. STAP Energie adviseert u ook over beschikbare subsidies zoals ISDE, het Warmtefonds en de Nationaal Isolatie Programma.';
$two_col_cta       = ['tekst' => 'Bekijk verduurzaming & subsidies →', 'url' => '/verduurzaming-subsidie/', 'stijl' => 'primair'];
$two_col_rechts    = '
  <ul class="checklist">
    <li class="checklist__item"><span class="checklist__vink">✓</span><span>ISDE subsidie — isolatie, warmtepomp, zonneboiler</span></li>
    <li class="checklist__item"><span class="checklist__vink">✓</span><span>Warmtefonds — laagrentende lening voor verduurzaming</span></li>
    <li class="checklist__item"><span class="checklist__vink">✓</span><span>Nationaal Isolatie Programma</span></li>
    <li class="checklist__item"><span class="checklist__vink">✓</span><span>Herlabelen binnen 24 maanden na opname</span></li>
  </ul>';
include $root . 'includes/components/section-two-col.php';

// ── Regio
$two_col_variant   = 'wit';
$two_col_label     = 'Werkgebied';
$two_col_titel     = 'Actief in Leusden, Amersfoort en omgeving';
$two_col_tekst     = 'STAP Energie is gevestigd in Leusden en actief in de gehele regio Utrecht. Voor particulieren in Leusden, Amersfoort, Woudenberg en Achterveld is STAP Energie uw lokale specialist. Voor zakelijke klanten werken we door heel Nederland.';
$two_col_rechts    = '
  <ul class="checklist">
    <li class="checklist__item"><span class="checklist__vink">✓</span><span>Leusden & Amersfoort — thuismarkt</span></li>
    <li class="checklist__item"><span class="checklist__vink">✓</span><span>Woudenberg, Achterveld, Barneveld, Nijkerk</span></li>
    <li class="checklist__item"><span class="checklist__vink">✓</span><span>Heel Utrecht & Gelderse Vallei</span></li>
    <li class="checklist__item"><span class="checklist__vink">✓</span><span>Zakelijk: heel Nederland</span></li>
  </ul>';
$two_col_cta       = [];
include $root . 'includes/components/section-two-col.php';

include $root . 'includes/faq.php';
include $root . 'includes/cta.php';
include $root . 'includes/footer.php';
?>
