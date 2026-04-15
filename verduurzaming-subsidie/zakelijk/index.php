<?php
/**
 * verduurzaming-subsidie/zakelijk/index.php
 * Verduurzaming & Subsidie — Zakelijke pagina
 */
$root        = dirname(dirname(dirname(__FILE__))) . '/';
$title       = 'Verduurzaming & Subsidie voor Bedrijven 2026 | STAP Energie';
$description = 'Subsidies voor zakelijke verduurzaming: ISDE, EIA en SDE++. STAP Energie brengt de juiste combinatie in kaart voor uw bedrijfspand, kantoor of vastgoed.';
$canonical   = 'https://stapenergie.nl/verduurzaming-subsidie/zakelijk/';

$breadcrumbs = [
  ['label' => 'Home',                     'url' => '/'],
  ['label' => 'Verduurzaming & Subsidie', 'url' => '/verduurzaming-subsidie/'],
  ['label' => 'Zakelijk'],
];

$cta_titel     = 'Welke subsidies passen bij uw situatie?';
$cta_subtitel  = 'STAP Energie brengt de juiste combinatie in kaart. Een eerste gesprek is vrijblijvend.';
$cta_knop      = 'Plan een adviesgesprek →';
$cta_knop_url  = '#contact';
$cta_garanties = ['15+ jaar ervaring in de energiemarkt', 'Geen productbelang', 'Reactie binnen twee werkdagen'];

$faq_label = 'Veelgestelde vragen';
$faq_titel = 'Veelgestelde vragen over zakelijke verduurzaming';
$faq_items = [
  ['vraag' => 'Kan ik EIA en ISDE combineren voor dezelfde maatregel?',
   'antwoord' => 'Dat hangt af van de maatregel en uw belastingpositie. EIA is een belastingvoordeel op de investering; ISDE is een directe subsidie op bepaalde apparatuur. In sommige gevallen is stapeling mogelijk, maar er gelden voorwaarden. STAP Energie brengt de meest voordelige combinatie voor uw situatie in kaart.'],
  ['vraag' => 'Hoe werkt de EIA precies?',
   'antwoord' => 'De Energie-investeringsaftrek (EIA) laat u 40% van de investering aftrekken van de fiscale winst. U betaalt daarmee effectief circa 11% minder belasting over het geïnvesteerde bedrag (bij 27,5% vpb-tarief). De investering moet op de Energielijst van RVO staan. U meldt vooraf — niet achteraf.'],
  ['vraag' => 'Voor welke investeringen geldt de SDE++?',
   'antwoord' => 'SDE++ is bedoeld voor grootschalige opwekking van hernieuwbare energie: zonnepanelen, windenergie, warmtepompen op industrieel niveau, groene waterstof. Het is geen subsidie maar een exploitatietoeslag: u ontvangt jarenlang een bijdrage op de geproduceerde energie. De aanvraagrondes zijn jaarlijks en concurrentieel.'],
  ['vraag' => 'Geldt de labelplicht voor kantoren ook voor mijn pand?',
   'antwoord' => 'Als uw kantoor groter is dan 100 m² en u er zakelijke activiteiten in uitoefent, geldt de labelplicht minimaal C. Was uw label al op C of hoger? Dan voldoet u. Heeft u label D of lager, dan bent u verplicht te verbeteren. STAP Energie verzorgt zowel het label als het verduurzamingsadvies.'],
  ['vraag' => 'Hoe begin ik als ik nog geen goed beeld heb van mijn energieverbruik?',
   'antwoord' => 'Dan begint u met een verbruiksanalyse of energielabel. Die geeft inzicht in waar het verbruik zit, wat de zwakste plekken van het gebouw zijn en welke maatregelen het meeste opleveren. Op basis daarvan stellen wij een adviestraject voor.'],
  ['vraag' => 'Wat kost een adviesgesprek bij STAP Energie?',
   'antwoord' => 'Een eerste kennismakingsgesprek is vrijblijvend en gratis. Daarin brengen we uw situatie in kaart en kijken we samen welke stap het meest logisch is. Op basis van dat gesprek ontvangt u een heldere offerte — zonder verborgen kosten.'],
];

include $root . 'includes/head.php';
include $root . 'includes/nav.php';
include $root . 'includes/breadcrumb.php';

// ── Hero
$hero_variant  = 'sub';
$hero_bg       = '/images/hero-zakelijk.jpg';
$hero_eyebrow  = 'Verduurzaming & Subsidie voor bedrijven';
$hero_titel    = 'De juiste subsidie voor uw bedrijf. <em>In de juiste volgorde.</em>';
$hero_lead     = 'Voor zakelijke verduurzaming zijn drie hoofdregelingen beschikbaar: ISDE, EIA en SDE++. Welke combinatie het meest oplevert, hangt af van uw verbruiksprofiel, uw belastingpositie en de aard van de investering. STAP Energie brengt dat in kaart.';
$hero_usps     = [
  '15+ jaar ervaring aan de energiemarkt',
  'ISDE, EIA en SDE++ in kaart gebracht voor uw situatie',
  'Geen productbelang — advies in uw belang',
  'Reactie binnen twee werkdagen',
];
$hero_cta      = 'Plan een adviesgesprek →';
$hero_cta_url  = '#contact';
$hero_cta2     = 'Bekijk subsidies';
$hero_cta2_url = '#subsidies';
include $root . 'includes/hero.php';
include $root . 'includes/trust.php';

// ── Drie subsidie-regelingen
$kaarten_variant = 'grijs';
$kaarten_label   = 'Subsidies 2026';
$kaarten_titel   = 'De drie hoofdregelingen voor zakelijke verduurzaming';
$kaarten_intro   = 'Elk met een andere systematiek, andere doelgroep en andere voorwaarden. Een goede subsidieaanvraag begint met begrijpen welke regeling voor uw situatie past.';
$kaarten_cols    = 3;
$kaarten_id      = 'subsidies';
$kaarten_items   = [
  [
    'titel'      => 'ISDE — directe subsidie',
    'uitgelicht' => false,
    'icoon'      => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>',
    'tekst'      => 'De Investeringssubsidie Duurzame Energie geldt ook voor zakelijke afnemers. Warmtepompen, zonneboilers, PVT-panelen en isolatie komen in aanmerking. Voor bedrijven gelden andere bedragen dan voor particulieren — en andere aanvraagvoorwaarden.',
    'extra'      => '<div style="margin-top:12px;"><span class="badge badge--groen">Directe uitkering</span></div>',
    'cta_tekst'  => 'Meer over ISDE zakelijk →',
    'cta_url'    => 'https://www.rvo.nl/subsidies-financiering/isde/zakelijke-gebruikers',
    'cta_stijl'  => 'outline',
  ],
  [
    'titel'      => 'EIA — belastingvoordeel',
    'uitgelicht' => true,
    'icoon'      => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>',
    'tekst'      => 'De Energie-investeringsaftrek geeft 40% extra aftrek op de investering, bovenop de normale afschrijving. U betaalt daarmee effectief circa 11% minder belasting over het geïnvesteerde bedrag. Geldt voor investeringen op de Energielijst van RVO. Melden vóór de investering — niet achteraf.',
    'extra'      => '<div style="margin-top:12px;"><span class="badge badge--groen">40% extra aftrek</span></div>',
    'cta_tekst'  => 'Meer over EIA →',
    'cta_url'    => 'https://www.rvo.nl/subsidies-financiering/eia',
    'cta_stijl'  => 'outline',
  ],
  [
    'titel'      => 'SDE++ — exploitatietoeslag',
    'uitgelicht' => false,
    'icoon'      => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="5"/><path d="M12 1v4M12 19v4M4.22 4.22l2.83 2.83M16.95 16.95l2.83 2.83M1 12h4M19 12h4M4.22 19.78l2.83-2.83M16.95 7.05l2.83-2.83"/></svg>',
    'tekst'      => 'De SDE++ is geen eenmalige subsidie maar een toeslag op de geproduceerde energie, gedurende 15 jaar. Bedoeld voor grootschalige opwekking: zonnepanelen, windenergie, industriele warmtepompen, geothermie. Aanvraag via concurrerende tenderprocedure, twee rondes per jaar.',
    'extra'      => '<div style="margin-top:12px;"><span class="badge badge--groen">15 jaar toeslag</span></div>',
    'cta_tekst'  => 'Meer over SDE++ →',
    'cta_url'    => 'https://www.rvo.nl/subsidies-financiering/sde',
    'cta_stijl'  => 'outline',
  ],
];
include $root . 'includes/components/section-kaarten.php';
unset($kaarten_variant, $kaarten_label, $kaarten_titel, $kaarten_intro, $kaarten_cols, $kaarten_items, $kaarten_id);

// ── De juiste volgorde two-col
$two_col_variant   = 'wit';
$two_col_label     = 'Aanpak';
$two_col_titel     = 'Subsidie is een middel, niet een startpunt';
$two_col_omgekeerd = false;
$two_col_links     = '
  <p style="color:var(--subtekst);line-height:1.7;margin-bottom:14px;">Veel bedrijven beginnen bij de subsidie in plaats van bij het probleem. Ze zoeken op welke regeling het meeste oplevert, en investeren daarnaar. Dat levert soms goed resultaat — maar vaker niet.</p>
  <p style="color:var(--subtekst);line-height:1.7;margin-bottom:14px;">De goede volgorde: begin met inzicht in uw verbruik. Waar lekt energie weg? Welke installaties zijn inefficiënt? Welke gebouwdelen vragen om aanpak? Pas als u dat weet, kunt u beoordelen welke maatregelen het meeste opleveren — en welke subsidies daarbij passen.</p>
  <p style="color:var(--subtekst);line-height:1.7;margin-bottom:20px;">STAP Energie helpt u die analyse te maken, zonder verkoopbelang.</p>';
$two_col_cta       = ['tekst' => 'Plan een adviesgesprek →', 'url' => '#contact', 'stijl' => 'primair'];
$two_col_rechts    = '
  <ul class="checklist">
    <li class="checklist__item"><span class="checklist__vink">✓</span><span>Verbruiksanalyse als nulmeting</span></li>
    <li class="checklist__item"><span class="checklist__vink">✓</span><span>Maatregelen in de juiste volgorde</span></li>
    <li class="checklist__item"><span class="checklist__vink">✓</span><span>Subsidies op basis van uw investering, niet andersom</span></li>
    <li class="checklist__item"><span class="checklist__vink">✓</span><span>EIA vooraf melden — STAP Energie begeleidt de aanvraag</span></li>
    <li class="checklist__item"><span class="checklist__vink">✓</span><span>SDE++ voor grootschalige opwekking</span></li>
    <li class="checklist__item"><span class="checklist__vink">✓</span><span>Labelplicht kantoren in kaart gebracht</span></li>
  </ul>';
include $root . 'includes/components/section-two-col.php';
unset($two_col_variant, $two_col_label, $two_col_titel, $two_col_omgekeerd, $two_col_links, $two_col_cta, $two_col_rechts);

// ── Verplichtingen two-col
$two_col_variant   = 'grijs';
$two_col_label     = 'Regelgeving';
$two_col_titel     = 'Verduurzamen is voor sommige bedrijven al een verplichting';
$two_col_omgekeerd = true;
$two_col_links     = '
  <p style="color:var(--subtekst);line-height:1.7;margin-bottom:14px;">Naast vrijwillige verduurzaming zijn er voor bedrijven ook verplichtingen. Kantoren groter dan 100 m² moeten minimaal energielabel C hebben — wie dat nog niet heeft, moet maatregelen nemen. Grotere bedrijven vallen onder de informatieplicht energiebesparing en moeten elke vier jaar rapporteren over energiebesparende maatregelen.</p>
  <p style="color:var(--subtekst);line-height:1.7;margin-bottom:14px;">Wie nu investeert, combineert de verplichting met de beschikbare subsidies. Wie wacht, doet de investering alsnog — maar zonder de regelingen die nu nog open staan.</p>';
$two_col_cta       = ['tekst' => 'Meer over energielabels bedrijfspanden →', 'url' => '/energielabels/utiliteit/', 'stijl' => 'outline'];
$two_col_rechts    = '
  <ul class="checklist">
    <li class="checklist__item"><span class="checklist__vink">✓</span><span>Kantoren groter dan 100 m² verplicht minimaal label C</span></li>
    <li class="checklist__item"><span class="checklist__vink">✓</span><span>Informatieplicht energiebesparing voor grotere bedrijven</span></li>
    <li class="checklist__item"><span class="checklist__vink">✓</span><span>Verhuurverbod huurwoningen label E/F/G in voorbereiding (2029)</span></li>
    <li class="checklist__item"><span class="checklist__vink">✓</span><span>EPBD IV: strengere labelplicht per 29 mei 2026</span></li>
  </ul>';
include $root . 'includes/components/section-two-col.php';
unset($two_col_variant, $two_col_label, $two_col_titel, $two_col_omgekeerd, $two_col_links, $two_col_cta, $two_col_rechts);

// ── Contactformulier
?>
<section class="sectie sectie--wit" id="contact">
  <div class="sectie__inner">
    <span class="sectie__label">Contact</span>
    <h2 class="sectie__titel">Plan een vrijblijvend adviesgesprek</h2>
    <p class="sectie__intro">STAP Energie brengt uw situatie in kaart en adviseert welke subsidies en maatregelen voor u het meeste opleveren.</p>
    <?php
    $f_dienst = '';
    $f_type   = 'zakelijk';
    $f_pagina = 'verduurzaming-zakelijk';
    include $root . 'includes/formulier.php';
    ?>
  </div>
</section>

<?php
include $root . 'includes/faq.php';

// ── Afsluitende links
$kaarten_variant = 'grijs';
$kaarten_label   = 'Ook interessant';
$kaarten_titel   = '';
$kaarten_intro   = '';
$kaarten_cols    = 2;
$kaarten_items   = [
  [
    'titel'     => 'Energielabel bedrijfspand',
    'icoon'     => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M8 7h8M8 12h5M8 17h3"/></svg>',
    'tekst'     => 'Een officieel utiliteitslabel voor uw kantoor, winkel of bedrijfspand. Verplicht bij verkoop en verhuur, noodzakelijk voor de labelplicht C bij kantoren.',
    'cta_tekst' => 'Naar utiliteitslabels',
    'cta_url'   => '/energielabels/utiliteit/',
    'cta_stijl' => 'outline',
  ],
  [
    'titel'     => 'Verduurzaming voor particulieren',
    'icoon'     => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>',
    'tekst'     => 'Ook als woningeigenaar zijn er subsidies beschikbaar. Bekijk het overzicht van ISDE, SEEH en andere regelingen voor uw woning.',
    'cta_tekst' => 'Naar verduurzaming particulieren',
    'cta_url'   => '/verduurzaming-subsidie/particulieren/',
    'cta_stijl' => 'outline',
  ],
];
include $root . 'includes/components/section-kaarten.php';
unset($kaarten_variant, $kaarten_label, $kaarten_titel, $kaarten_intro, $kaarten_cols, $kaarten_items);

include $root . 'includes/cta.php';
include $root . 'includes/footer.php';
?>
