<?php
/**
 * over-ons/index.php
 * Over STAP Energie — missie, visie, kernovertuigingen, oprichter
 */
$root        = dirname(dirname(__FILE__)) . '/';
$title       = 'Over STAP Energie | Missie, Visie & Oprichter Erik Dolman';
$description = 'STAP Energie geeft ondernemers grip op hun energiepositie — door onafhankelijk advies van iemand die de markt van binnenuit kent. Lees wie we zijn en waarom we bestaan.';
$canonical   = 'https://stapenergie.nl/over-ons/';

$breadcrumbs = [
  ['label' => 'Home',     'url' => '/'],
  ['label' => 'Over ons'],
];

$cta_titel     = 'Kennismaken?';
$cta_subtitel  = 'Plan een vrijblijvend gesprek. Wij beginnen met je situatie — niet met een standaard verhaal.';
$cta_knop      = 'Plan een kennismakingsgesprek →';
$cta_knop_url  = '/#contact';
$cta_garanties = ['15+ jaar ervaring in de energiemarkt', 'Geen productbelang', 'Reactie binnen twee werkdagen'];

$faq_label = 'Veelgestelde vragen';
$faq_titel = 'Vragen over STAP Energie';
$faq_items = [
  ['vraag' => 'Is STAP Energie echt onafhankelijk?',
   'antwoord' => 'STAP Energie verkoopt geen energiecontracten, geen installaties en geen producten. Wij adviseren — en onze beloning is niet afhankelijk van de keuze die je maakt. Wij werken nooit voor leveranciers of installateurs. Dat maakt het advies anders dan wat je krijgt van een partij die er belang bij heeft dat je tekent.'],
  ['vraag' => 'Wat is de achtergrond van Erik Dolman?',
   'antwoord' => 'Erik Dolman werkte 17 jaar aan de leverancierszijde van de energiemarkt. Bij SEFE Energy sloot hij de eerste contracten in Nederland, bouwde hij een partnerkanaal op van nul naar 125 actieve partners, en trainde hij verkoopteams. Bij NieuweStroom leidde hij de verkooporganisatie die groeide naar 100.000 aansluitingen. Hij heeft in de Raad van Toezicht van CIRE gezeten en mede de gedragscode van de energiesector opgesteld. In 2025 richtte hij STAP Energie op om die kennis in te zetten voor de klant.'],
  ['vraag' => 'Voor wie werkt STAP Energie?',
   'antwoord' => 'Zowel voor particuliere woningeigenaren als voor zakelijke opdrachtgevers: MKB-bedrijven, industriele afnemers, vastgoedeigenaren, makelaars, gemeenten en woningcorporaties. De aanpak verschilt per doelgroep, maar de overtuiging is altijd dezelfde: de klant verdient iemand aan zijn kant die de markt van binnenuit kent.'],
  ['vraag' => 'In welke regio werkt STAP Energie?',
   'antwoord' => 'STAP Energie is gevestigd in Leusden. Particuliere energielabels worden uitgevoerd in een straal van circa 10 km rond Leusden, waaronder Amersfoort, Woudenberg en Scherpenzeel. Zakelijke diensten — energie-inkoopadvies, verduurzamingsadvies en utiliteitslabels — worden aangeboden door heel Nederland.'],
  ['vraag' => 'Wat kost een kennismakingsgesprek?',
   'antwoord' => 'Een eerste kennismakingsgesprek is vrijblijvend en gratis. Daarin brengen we je situatie in kaart en kijken we samen welke stap het meest logisch is. Op basis van dat gesprek ontvangt je een heldere offerte — zonder verborgen kosten.'],
];

include $root . 'includes/head.php';
include $root . 'includes/nav.php';
include $root . 'includes/breadcrumb.php';

// ── Hero
$hero_variant  = 'sub';
$hero_bg       = '/images/hero-zakelijk.jpg';
$hero_eyebrow  = 'Over STAP Energie';
$hero_titel    = 'Iemand aan je kant. <em>Die de andere kant van binnenuit kent.</em>';
$hero_lead     = 'De energiemarkt is ingericht vanuit het perspectief van de leverancier. STAP Energie is opgericht om dat te doorbreken — met insider-kennis, uitsluitend ingezet voor de klant.';
$hero_usps     = [
  '15+ jaar ervaring aan de leverancierszijde',
  'Gecertificeerd EPA-adviseur',
  'Geen productbelang — advies in je belang',
  'Gevestigd in Leusden, actief door heel Nederland',
];
$hero_cta      = 'Plan een kennismakingsgesprek →';
$hero_cta_url  = '/#contact';
$hero_cta2     = '';
$hero_cta2_url = '';
include $root . 'includes/hero.php';
include $root . 'includes/trust.php';

// ── Waarom STAP Energie bestaat
$two_col_variant   = 'wit';
$two_col_label     = 'Waarom wij bestaan';
$two_col_titel     = 'De markt begint altijd bij het product. Wij beginnen bij u.';
$two_col_omgekeerd = false;
$two_col_links     = '
  <p style="color:var(--subtekst);line-height:1.7;margin-bottom:14px;">Een gasleverancier verkoopt gas. Een installateur verkoopt installaties. Niemand begint bij de vraag: wat heeft deze ondernemer, in dit pand, met dit bedrijfsproces, werkelijk nodig? Dat is geen toeval — het is een businessmodel.</p>
  <p style="color:var(--subtekst);line-height:1.7;margin-bottom:14px;">Het gevolg is dat de gemiddelde ondernemer zijn energiestrategie baseert op het voorstel van de partij die er belang bij heeft dat hij tekent. Hij heeft een accountant voor zijn financiën, een jurist voor zijn contracten — maar voor energie vertrouwt hij op de partij die hem dat energie verkoopt. Dat is het equivalent van je belastingaangifte laten doen door de Belastingdienst.</p>
  <p style="color:var(--subtekst);line-height:1.7;margin-bottom:20px;">STAP Energie bestaat om dat gat te dichten. Niet als leverancier, niet als installateur — als adviseur die uitsluitend aan de kant van de klant staat.</p>';
$two_col_cta       = ['tekst' => 'Bekijk onze diensten →', 'url' => '/', 'stijl' => 'outline'];
$two_col_rechts    = '
  <ul class="checklist">
    <li class="checklist__item"><span class="checklist__vink">✓</span><span>Wij werken nooit voor leveranciers of installateurs</span></li>
    <li class="checklist__item"><span class="checklist__vink">✓</span><span>Geen provisie die ons advies stuurt</span></li>
    <li class="checklist__item"><span class="checklist__vink">✓</span><span>Wij beginnen altijd bij je situatie, niet bij onze dienst</span></li>
    <li class="checklist__item"><span class="checklist__vink">✓</span><span>Insider-kennis ingezet voor de klant</span></li>
  </ul>';
include $root . 'includes/components/section-two-col.php';
unset($two_col_variant, $two_col_label, $two_col_titel, $two_col_omgekeerd, $two_col_links, $two_col_cta, $two_col_rechts);

// ── Missie & Visie kaarten
$kaarten_variant = 'grijs';
$kaarten_label   = 'Missie & Visie';
$kaarten_titel   = 'Wie wij zijn en waar wij naartoe werken';
$kaarten_intro   = '';
$kaarten_cols    = 2;
$kaarten_items   = [
  [
    'titel'      => 'Missie',
    'uitgelicht' => false,
    'icoon'      => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 8v4l3 3"/></svg>',
    'tekst'      => 'STAP Energie geeft ondernemers en eigenaren grip op hun energiepositie — door onafhankelijk advies van iemand die de markt van binnenuit kent. Grip betekent: begrijpen wat je betaalt, weten wat je kunt veranderen en beslissingen nemen die bij je situatie passen. Niet bij het product van een leverancier.',
  ],
  [
    'titel'      => 'Visie',
    'uitgelicht' => false,
    'icoon'      => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>',
    'tekst'      => 'Een markt waarin elke ondernemer een adviseur heeft die aan zijn kant staat — zoals hij een accountant heeft voor zijn financiën en een jurist voor zijn contracten. Dat is er nu niet. STAP Energie is de eerste stap naar die markt.',
  ],
];
include $root . 'includes/components/section-kaarten.php';
unset($kaarten_variant, $kaarten_label, $kaarten_titel, $kaarten_intro, $kaarten_cols, $kaarten_items);

// ── Kernovertuigingen
$kaarten_variant = 'wit';
$kaarten_label   = 'Kernovertuigingen';
$kaarten_titel   = 'Wat wij werkelijk geloven';
$kaarten_intro   = 'Dit zijn geen waarden voor op een poster. Het zijn de overtuigingen die bepalen welk advies wij geven, welke klanten wij aannemen en hoe wij reageren als het moeilijk wordt.';
$kaarten_cols    = 3;
$kaarten_items   = [
  [
    'titel' => 'Advies zonder context is geen advies',
    'icoon' => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>',
    'tekst' => 'Een energiecontract adviseren zonder de bedrijfsprocessen te kennen is raden. Een label afleveren zonder het gesprek te voeren over wat daarna komt is papierwerk. Wij beginnen altijd bij de situatie van de klant.',
  ],
  [
    'titel' => 'De volgorde is niet willekeurig',
    'icoon' => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>',
    'tekst' => 'Labels geven inzicht. Inkoop brengt directe besparing. Verduurzaming investeert de opgebouwde ruimte. Wie die volgorde omkeert, investeert te vroeg in het verkeerde moment. Wij houden die logica vast — ook als de klant iets anders vraagt.',
  ],
  [
    'titel' => 'Verduurzaming is een economische beslissing',
    'icoon' => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>',
    'tekst' => 'De energietransitie is onontkoombaar. Maar het argument begint altijd bij de rekening, niet bij de overtuiging. Een ondernemer die zijn energiekosten structureel verlaagt, bouwt een concurrentievoordeel op dat zijn concurrent pas ziet als het te laat is.',
  ],
  [
    'titel' => 'Eerlijkheid boven overtuigingskracht',
    'icoon' => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>',
    'tekst' => 'Wij maken geen prognoses die wij niet kunnen onderbouwen. Wij markeren onzekerheid als onzekerheid. Wij zeggen het als wij iets niet weten. Een advies dat overtuigend klinkt maar zwak onderbouwd is, is schadelijker dan geen advies.',
  ],
  [
    'titel' => 'Klein beginnen, structureel schalen',
    'icoon' => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 3h7v7H3zM14 3h7v7h-7zM14 14h7v7h-7zM3 14h7v7H3z"/></svg>',
    'tekst' => 'STAP Energie begint als eenmanszaak. Maar elke beslissing in het eerste jaar wordt getoetst aan schaal: maakt dit het later groter mogelijk, of sluit het dat juist uit? De ambitie is een volwaardige adviesorganisatie met nationaal bereik.',
  ],
  [
    'titel' => 'Insider-kennis hoort aan de kant van de klant',
    'icoon' => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg>',
    'tekst' => 'Zeventien jaar lang werkte de oprichter aan de andere kant van de tafel. Hij weet hoe contracten worden gestructureerd en waar de marges zitten. Die kennis zet STAP Energie nu uitsluitend in voor de klant — als eerlijk advies dat de klant eerder nooit heeft gehad.',
  ],
];
include $root . 'includes/components/section-kaarten.php';
unset($kaarten_variant, $kaarten_label, $kaarten_titel, $kaarten_intro, $kaarten_cols, $kaarten_items);

// ── Over Erik
$two_col_variant   = 'grijs';
$two_col_label     = 'De oprichter';
$two_col_titel     = 'Erik Dolman — 17 jaar aan de andere kant van de tafel';
$two_col_omgekeerd = false;
$two_col_links     = '
  <p style="color:var(--subtekst);line-height:1.7;margin-bottom:14px;">Erik Dolman werkte 17 jaar aan de leverancierszijde van de energiemarkt. Bij SEFE Energy — een van de grootste aardgasleveranciers ter wereld — sloot hij de eerste contracten in Nederland, bouwde hij een partnerkanaal op van nul naar 125 actieve partners en trainde hij verkoopteams. Bij NieuweStroom leidde hij de verkooporganisatie die groeide naar 100.000 aansluitingen.</p>
  <p style="color:var(--subtekst);line-height:1.7;margin-bottom:14px;">Hij heeft in de Raad van Toezicht van CIRE gezeten — het integriteitsregister van de energiesector — en mede de gedragscode opgesteld die de sector nog steeds hanteert. Hij weet hoe leveranciers contracten structureren, welke clausules in hun voordeel werken en hoe verkoopteams zijn getraind om klanten te binden.</p>
  <p style="color:var(--subtekst);line-height:1.7;margin-bottom:20px;">In 2025 richtte hij STAP Energie op. Niet als extra partij in de markt, maar als adviseur die die kennis uitsluitend inzet voor de klant. Gecertificeerd EPA-adviseur, gevestigd in Leusden, actief door heel Nederland.</p>';
$two_col_cta       = ['tekst' => 'Plan een kennismakingsgesprek →', 'url' => '/#contact', 'stijl' => 'primair'];
$two_col_rechts    = '
  <div class="over-img-wrap" style="max-width:420px;">
    <img src="/images/erik-portret.jpg" alt="Erik Dolman — oprichter STAP Energie" loading="lazy"
         style="width:100%;border-radius:var(--rl);object-fit:cover;object-position:center 10%;">
    <div class="over-badge">
      <div class="over-badge__num">15+</div>
      <div class="over-badge__lbl">jaar energie&shy;ervaring</div>
    </div>
  </div>';
include $root . 'includes/components/section-two-col.php';
unset($two_col_variant, $two_col_label, $two_col_titel, $two_col_omgekeerd, $two_col_links, $two_col_cta, $two_col_rechts);

// ── Drie diensten
$kaarten_variant = 'wit';
$kaarten_label   = 'Wat wij doen';
$kaarten_titel   = 'Drie diensten, één aanpak';
$kaarten_intro   = 'Geen losse producten — drie uitingsvormen van één propositie. De besparingen uit stap twee financieren de investering in stap drie.';
$kaarten_cols    = 3;
$kaarten_items   = [
  [
    'titel'     => 'Energielabels',
    'icoon'     => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M8 7h8M8 12h5M8 17h3"/></svg>',
    'tekst'     => 'De ingang. Verplicht, concreet, een nulmeting. Een label laat zien waar een gebouw staat — en opent het gesprek over wat er beter kan.',
    'cta_tekst' => 'Meer over energielabels →',
    'cta_url'   => '/energielabels/',
    'cta_stijl' => 'outline',
  ],
  [
    'titel'      => 'Energie-inkoopadvies',
    'uitgelicht' => true,
    'icoon'      => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>',
    'tekst'      => 'De strategische laag. Contractvorm kiezen die past bij je risicoprofiel. Weten wanneer en hoe in te kopen. Dit is waar de informatieasymmetrie het grootst is — en waar Eriks achtergrond het sterkst is.',
    'cta_tekst'  => 'Meer over energie-inkoop →',
    'cta_url'    => '/energie-inkoop-advies/',
    'cta_stijl'  => 'solid',
  ],
  [
    'titel'     => 'Verduurzaming & Subsidies',
    'icoon'     => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>',
    'tekst'     => 'De investering. Eerst reduceren, dan opwekken. De juiste volgorde, op het juiste moment, met subsidies in kaart gebracht.',
    'cta_tekst' => 'Meer over verduurzaming →',
    'cta_url'   => '/verduurzaming-subsidie/',
    'cta_stijl' => 'outline',
  ],
];
include $root . 'includes/components/section-kaarten.php';
unset($kaarten_variant, $kaarten_label, $kaarten_titel, $kaarten_intro, $kaarten_cols, $kaarten_items);

include $root . 'includes/faq.php';
include $root . 'includes/cta.php';
include $root . 'includes/footer.php';
?>
