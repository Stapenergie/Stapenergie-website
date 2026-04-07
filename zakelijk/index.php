<?php
/**
 * zakelijk/index.php
 * Hub pagina voor zakelijke klanten
 */
$root        = dirname(dirname(__FILE__)) . '/';
$title       = 'Zakelijk Energieadvies | Energie-inkoop, Labels & Verduurzaming | STAP Energie';
$description = 'Onafhankelijk energieadvies voor bedrijven. Energie-inkoopadvies, energielabels en verduurzaming voor MKB, kantoren, vastgoed en industrie.';
$canonical   = 'https://stapenergie.nl/zakelijk/';

$breadcrumbs = [
  ['label' => 'Home',    'url' => '/'],
  ['label' => 'Zakelijk'],
];

$cta_titel     = 'Klaar om uw energiestrategie aan te pakken?';
$cta_subtitel  = 'Neem contact op voor een vrijblijvend kennismakingsgesprek. STAP Energie neemt binnen twee werkdagen contact op.';
$cta_knop      = 'Neem contact op →';
$cta_knop_url  = '#aanvraag';
$cta_garanties = ['Onafhankelijk advies', 'Geen merkvoorkeur', 'Reactie binnen twee werkdagen'];

$faq_label = 'Veelgestelde vragen';
$faq_titel = 'Vragen over energie-inkoopadvies, labels en verduurzaming';
$faq_items = [
  ['vraag' => 'Waarom bewegen energieprijzen zo sterk?',
   'antwoord' => 'Energieprijzen worden bepaald door een combinatie van factoren: de vulgraad van gasopslagen in Europa, weersomstandigheden, de beschikbaarheid van hernieuwbare energie en geopolitieke ontwikkelingen. Die factoren zijn voortdurend in beweging, waardoor prijzen soms fors schommelen — zelfs binnen één seizoen. Wie die dynamiek begrijpt, kan beter inschatten wanneer het verstandig is om een contract vast te leggen en voor welke looptijd. <a href="/energie-inkoop-advies/" style="color:var(--groen);font-weight:500">Meer over energie-inkoopadvies &rarr;</a>'],
  ['vraag' => 'Moet ik voor gas en elektriciteit hetzelfde contract kiezen?',
   'antwoord' => 'Nee — en dat is een veelgemaakte fout. Gas en stroom bewegen op verschillende markten en hebben elk hun eigen seizoenspatroon en risicoprofiel. Bovendien verschilt uw verbruiksprofiel per type energie. Het is dan ook zelden optimaal om voor beide hetzelfde contracttype te kiezen. STAP Energie beoordeelt gas en stroom altijd afzonderlijk, en adviseert per situatie de meest passende contractvorm.'],
  ['vraag' => 'Wat is het verschil tussen een vast, variabel en dynamisch energiecontract?',
   'antwoord' => 'Er zijn drie gangbare contractvormen voor zakelijke energie. Bij een vast contract legt u de prijs voor een bepaalde looptijd vast — maximale zekerheid, maar u profiteert niet van prijsdalingen. Bij een variabel contract beweegt uw prijs mee met de markt, met meer potentieel voordeel maar ook meer risico. Bij een dynamisch contract schommelt de prijs per uur op basis van beursprijzen — aantrekkelijk als u verbruik kunt sturen. Welk type past, hangt af van uw profiel en risicobereidheid. <a href="/energie-inkoop-advies/" style="color:var(--groen);font-weight:500">Meer over energie-inkoopadvies &rarr;</a>'],
  ['vraag' => 'Is mijn bedrijfspand verplicht van een energielabel voorzien?',
   'antwoord' => 'Ja, voor de meeste zakelijke gebouwen geldt een labelplicht bij verkoop, verhuur of oplevering. Voor kantoren geldt daarnaast een aanvullende verplichting: kantoren van 100 m² of groter moeten minimaal energielabel C hebben. Zonder geldig label riskeert u handhaving door de gemeente. <a href="/energielabels/utiliteit/" style="color:var(--groen);font-weight:500">Meer over energielabels utiliteit &rarr;</a>'],
  ['vraag' => 'Wat kan ik met een energielabel als het eenmaal is afgegeven?',
   'antwoord' => 'Een energielabel is meer dan een sticker op uw gebouw. Het is een objectieve nulmeting die laat zien hoe uw pand presteert ten opzichte van vergelijkbare gebouwen. Dat maakt het een uitstekend startpunt voor een verbetertraject: u weet precies welke maatregelen het meeste effect hebben en welke subsidies beschikbaar zijn.'],
  ['vraag' => 'Hoe lang is een zakelijk energielabel geldig?',
   'antwoord' => 'Een energielabel voor een utiliteitsgebouw is tien jaar geldig. Heeft u in die periode relevante energiebesparende maatregelen genomen — zoals nieuwe installaties, betere isolatie of zonnepanelen — dan kunt u het label laten aanpassen via herlabelen. Dat is voordeliger dan een volledig nieuwe opname.'],
  ['vraag' => 'Wat levert verduurzaming mijn bedrijf financieel op?',
   'antwoord' => 'Verduurzaming verlaagt uw energiekosten structureel. Betere isolatie vermindert uw warmtevraag, efficiëntere installaties verbruiken minder energie en eigen opwekking via zonnepanelen verlaagt uw inkoopbehoefte. Bovendien zijn er diverse subsidies beschikbaar — zoals de SDE++ en de EIA — die de terugverdientijd aanzienlijk verkorten. <a href="/verduurzaming-subsidie/" style="color:var(--groen);font-weight:500">Meer over verduurzaming &rarr;</a>'],
  ['vraag' => 'Werkt STAP Energie samen met energieleveranciers?',
   'antwoord' => 'Ja — maar op onze voorwaarden. STAP Energie werkt samen met zorgvuldig geselecteerde energieleveranciers en installatiepartners die wij beoordelen op kwaliteit, betrouwbaarheid en prijs-kwaliteitsverhouding. Wij hebben geen exclusieve samenwerkingen of financiële prikkels om bepaalde partijen te bevoordelen. Ons advies is en blijft onafhankelijk. <a href="/energie-inkoop-advies/" style="color:var(--groen);font-weight:500">Meer over onze aanpak &rarr;</a>'],
];

include $root . 'includes/head.php';
include $root . 'includes/nav.php';
include $root . 'includes/breadcrumb.php';

// ── Hero
$hero_variant  = 'sub';
$hero_bg       = '/images/hero-bedrijfspand.jpg';
$hero_eyebrow  = 'Onafhankelijk energieadvies voor bedrijven';
$hero_titel    = 'Energie: uw grootste variabele kostenpost — <em>en uw grootste kans</em>';
$hero_lead     = 'STAP Energie helpt bedrijven omschakelen naar een duurzamer, economischer en comfortabeler energiesysteem. Niet als ver toekomstperspectief, maar als verstandige keuze voor nu.';
$hero_usps     = [
  'Onafhankelijk — ons advies is altijd in uw belang, zonder merkvoorkeur',
  'Gecertificeerd EPA-adviseur voor energielabels',
  'Reactie binnen twee werkdagen',
  'MKB, kantoren, vastgoed en industrie',
];
$hero_cta      = 'Neem contact op →';
$hero_cta_url  = '#aanvraag';
$hero_cta2     = 'Bekijk diensten';
$hero_cta2_url = '#diensten';
include $root . 'includes/hero.php';
include $root . 'includes/trust.php';

// ── Alle diensten
$kaarten_variant = 'wit';
$kaarten_label   = 'Wat we voor u doen';
$kaarten_titel   = 'Alle energiezaken onder één dak';
$kaarten_intro   = 'STAP Energie is uw vaste aanspreekpunt voor alles wat met energie te maken heeft. Van inkoopstrategie tot energielabel en verduurzaming — één partij die het complete energievraagstuk voor u overziet.';
$kaarten_cols    = 3;
$kaarten_id      = 'diensten';
$kaarten_items   = [
  [
    'titel'     => 'Energie-inkoopadvies',
    'type'      => 'Meest gevraagd',
    'icoon'     => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>',
    'tekst'     => 'De energiemarkt beweegt voortdurend onder invloed van geopolitiek, seizoenspatronen en opslagcapaciteit. STAP Energie vertaalt die marktdynamiek naar concreet advies: welk contracttype past bij uw verbruiksprofiel?',
    'uitgelicht' => true,
    'cta_tekst' => 'Meer over energie-inkoopadvies →',
    'cta_url'   => '/energie-inkoop-advies/',
    'cta_stijl' => 'solid',
  ],
  [
    'titel'     => 'Energielabels',
    'type'      => 'Verplicht & waardevol',
    'icoon'     => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M8 7h8M8 12h5M8 17h3"/></svg>',
    'tekst'     => 'Een energielabel is voor veel bedrijfspanden een wettelijke verplichting — maar het is ook een krachtige nulmeting die richting geeft aan een verbetertraject.',
    'cta_tekst' => 'Meer over energielabels →',
    'cta_url'   => '/energielabels/utiliteit/',
    'cta_stijl' => 'outline',
  ],
  [
    'titel'     => 'Verduurzaming & subsidies',
    'type'      => 'Financieel verstandig',
    'icoon'     => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>',
    'tekst'     => 'Duurzame energie is allang niet meer alleen een morele keuze — het is een financieel verstandige strategie. STAP Energie brengt de meest rendabele maatregelen in kaart en begeleidt de uitvoering.',
    'cta_tekst' => 'Meer over verduurzaming →',
    'cta_url'   => '/verduurzaming-subsidie/',
    'cta_stijl' => 'outline',
  ],
];
include $root . 'includes/components/section-kaarten.php';

// ── Segmenten
$kaarten_variant = 'grijs';
$kaarten_label   = 'Voor wie';
$kaarten_titel   = 'Wij werken voor de gehele zakelijke markt';
$kaarten_intro   = 'Van ondernemer tot gemeente — elk type organisatie profiteert van onafhankelijk energieadvies.';
$kaarten_cols    = 3;
$kaarten_items   = [
  [
    'titel'     => 'Kantoren',
    'icoon'     => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M9 3v18M15 3v18M3 9h18M3 15h18"/></svg>',
    'tekst'     => 'Kantoren van 100 m² of groter moeten verplicht minimaal label C hebben. STAP Energie begeleidt u van opname tot certificaat en adviseert over het verbetertraject.',
    'cta_tekst' => 'Meer over kantoren →',
    'cta_url'   => '/kantoren/',
    'cta_stijl' => 'outline',
  ],
  [
    'titel'     => 'MKB',
    'icoon'     => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l1-6h16l1 6"/><path d="M3 9a3 3 0 006 0 3 3 0 006 0 3 3 0 006 0"/><path d="M5 21V9M19 21V9"/><rect x="8" y="14" width="8" height="7"/></svg>',
    'tekst'     => 'Voor middelgrote bedrijven is energie vaak de grootste variabele kostenpost. Met het juiste inkoopcontract en gerichte maatregelen is direct besparing mogelijk.',
    'cta_tekst' => 'Meer over MKB →',
    'cta_url'   => '/mkb/',
    'cta_stijl' => 'outline',
  ],
  [
    'titel'     => 'Vastgoed & makelaars',
    'icoon'     => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M4 21V8l8-5 8 5v13"/><path d="M9 21v-6h6v6"/></svg>',
    'tekst'     => 'Een actueel energielabel is bij verkoop en verhuur verplicht. STAP Energie levert snel en betrouwbaar labels voor uw vastgoedportefeuille.',
    'cta_tekst' => 'Meer over vastgoed →',
    'cta_url'   => '/vastgoed/',
    'cta_stijl' => 'outline',
  ],
  [
    'titel'     => 'Gemeenten & woningstichtingen',
    'icoon'     => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21V9l9-7 9 7v12"/><path d="M9 21v-6h6v6"/><path d="M12 3v4"/></svg>',
    'tekst'     => 'Portfoliobeheer van energielabels voor grote vastgoedportefeuilles, gecombineerd met verduurzamingsadvies op portefeuilleniveau.',
    'cta_tekst' => 'Meer informatie →',
    'cta_url'   => '/gemeenten-woningstichtingen/',
    'cta_stijl' => 'outline',
  ],
  [
    'titel'     => 'Industrie',
    'icoon'     => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M2 20V8l6-4v4l6-4v4l6-4v16"/><path d="M2 20h20"/></svg>',
    'tekst'     => 'Industriële bedrijven hebben door hun volumes en complexe verbruiksprofielen baat bij een gedegen inkoopstrategie. STAP Energie heeft ervaring met Europese aanbestedingstrajecten.',
    'cta_tekst' => 'Meer over industrie →',
    'cta_url'   => '/industrie/',
    'cta_stijl' => 'outline',
  ],
  [
    'titel'     => 'Andere organisatie?',
    'icoon'     => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>',
    'tekst'     => 'Elke organisatie is anders. Neem contact op en STAP Energie kijkt samen met u wat de meest waardevolle energiestap is voor uw specifieke situatie.',
    'cta_tekst' => 'Neem contact op →',
    'cta_url'   => '#aanvraag',
    'cta_stijl' => 'outline',
  ],
];
include $root . 'includes/components/section-kaarten.php';

// ── Waarom STAP Energie
$kaarten_variant = 'wit';
$kaarten_label   = 'Eerlijk advies, altijd in uw belang';
$kaarten_titel   = 'Waarom STAP Energie?';
$kaarten_intro   = 'STAP Energie werkt samen met zorgvuldig geselecteerde leveranciers en installatiepartners — maar ons advies is altijd onpartijdig.';
$kaarten_cols    = 3;
$kaarten_items   = [
  [
    'titel' => 'Onafhankelijk advies',
    'icoon' => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622C17.176 19.29 21 14.591 21 9c0-1.042-.133-2.052-.382-3.016z"/></svg>',
    'tekst' => 'STAP Energie heeft geen merkvoorkeur. Wij selecteren op kwaliteit en kiezen de partij die het beste bij uw situatie past — niet de partij die ons het meeste oplevert.',
  ],
  [
    'titel' => 'Gedegen marktkennis',
    'icoon' => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>',
    'tekst' => 'Met jarenlange ervaring in energie-inkooptrajecten voor MKB en industrie kent STAP Energie de markt van binnenuit. Wij begrijpen waarom prijzen bewegen en wat dat betekent voor uw strategie.',
  ],
  [
    'titel' => 'Één aanspreekpunt',
    'icoon' => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg>',
    'tekst' => 'Energie-inkoop, energielabels en verduurzaming — STAP Energie overziet het complete energievraagstuk. U heeft altijd één vast aanspreekpunt die uw situatie kent.',
  ],
];
include $root . 'includes/components/section-kaarten.php';

// ── Energiemarkt two-col
$two_col_variant   = 'grijs';
$two_col_label     = 'Energie-inkoopadvies';
$two_col_titel     = 'De energiemarkt beweegt — weet u waarom?';
$two_col_tekst     = '';
$two_col_omgekeerd = false;
$two_col_links     = '
  <p style="color:var(--subtekst);line-height:1.7;margin-bottom:14px;">Energieprijzen zijn geen vast gegeven. Ze worden bepaald door een samenspel van factoren: de vulgraad van gasopslagen in Europa, geopolitieke spanningen, seizoenspatronen en de groeiende rol van duurzame opwek. Wie begrijpt hoe die factoren samenhangen, kan beter inschatten wanneer het verstandig is om een contract af te sluiten — en voor hoe lang.</p>
  <p style="color:var(--subtekst);line-height:1.7;margin-bottom:14px;">Daarbij geldt: wat voor gas geldt, geldt niet automatisch voor elektriciteit. De optimale contractvorm verschilt per type energie én per verbruiksprofiel. Hoe meer u uw verbruik kunt sturen en spreiden, hoe meer contractvrijheid u zich kunt permitteren.</p>
  <p style="color:var(--subtekst);line-height:1.7;margin-bottom:20px;">Duurzame opwek — zoals zonne-energie — speelt daarin een steeds grotere rol. Zelf energie opwekken verlaagt uw afhankelijkheid van de markt, versterkt uw energiepositie op de lange termijn én is financieel gewoon aantrekkelijk. Niet omdat het moet van de overheid, maar omdat het verstandig is.</p>';
$two_col_cta       = ['tekst' => 'Meer over energie-inkoopadvies →', 'url' => '/energie-inkoop-advies/', 'stijl' => 'outline'];
$two_col_rechts    = '
  <div style="display:flex;flex-direction:column;gap:20px;">
    <div class="icon-tekst">
      <div class="icon-tekst__icoon"><svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg></div>
      <div class="icon-tekst__content"><div class="icon-tekst__titel">Marktdynamiek begrijpen</div><div class="icon-tekst__tekst">Gasopslagstanden, geopolitieke ontwikkelingen en seizoenen bepalen mede uw energieprijs. Wie dit begrijpt, kan beter timen.</div></div>
    </div>
    <div class="icon-tekst">
      <div class="icon-tekst__icoon"><svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M9 3v18M15 3v18M3 9h18M3 15h18"/></svg></div>
      <div class="icon-tekst__content"><div class="icon-tekst__titel">Gas en stroom apart beoordelen</div><div class="icon-tekst__tekst">Gas en stroom bewegen op verschillende markten. Het is zelden optimaal om voor beide hetzelfde contracttype te kiezen.</div></div>
    </div>
    <div class="icon-tekst">
      <div class="icon-tekst__icoon"><svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M8 12h8M12 8v8"/></svg></div>
      <div class="icon-tekst__content"><div class="icon-tekst__titel">Verbruik sturen = meer vrijheid</div><div class="icon-tekst__tekst">Hoe flexibeler uw verbruik, hoe beter u kunt profiteren van dynamische contractvormen en lagere piekprijzen.</div></div>
    </div>
    <div class="icon-tekst">
      <div class="icon-tekst__icoon"><svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="5"/><path d="M12 1v4M12 19v4M4.22 4.22l2.83 2.83M16.95 16.95l2.83 2.83M1 12h4M19 12h4M4.22 19.78l2.83-2.83M16.95 7.05l2.83-2.83"/></svg></div>
      <div class="icon-tekst__content"><div class="icon-tekst__titel">Zelf energie opwekken als strategie</div><div class="icon-tekst__tekst">Eigen opwekking geeft u prijszekerheid, minder marktafhankelijkheid en lagere kosten. Een zakelijk verstandige keuze — niet alleen een groene.</div></div>
    </div>
  </div>';
include $root . 'includes/components/section-two-col.php';

// ── Energielabels zakelijk two-col
$two_col_variant   = 'wit';
$two_col_label     = 'Energielabels zakelijk';
$two_col_titel     = 'Een label is meer dan een verplichting';
$two_col_tekst     = '';
$two_col_omgekeerd = true;
$two_col_cta       = [];
$two_col_links     = '
  <p style="color:var(--subtekst);line-height:1.7;margin-bottom:14px;">Een energielabel laat zien hoe uw gebouw presteert in vergelijking met andere, vergelijkbare panden. Dat maakt het een krachtige nulmeting: het geeft u een objectieve uitgangswaarde voor een verbetertraject.</p>
  <p style="color:var(--subtekst);line-height:1.7;margin-bottom:14px;">Vanaf die nulmeting kunt u gefaseerd verbeteren — denk aan betere isolatie, efficiëntere installaties of de overstap naar hernieuwbare opwekking. Elk verbeterproject verlaagt uw energiekosten én verbetert uw label.</p>
  <p style="color:var(--subtekst);line-height:1.7;margin-bottom:20px;">Wilt u nóg meer inzicht? Dan kunt u het energielabel koppelen aan aanvullende indicatoren die iets zeggen over zowel de gebouwprestatie als het werkelijke gebruik, zoals de <strong>WEII-indicator</strong>. Die combinatie geeft u een volledig beeld: hoe presteert het gebouw, én hoe efficiënt wordt het gebruikt?</p>
  <div style="display:flex;gap:12px;flex-wrap:wrap;">
    <a href="/energielabels/utiliteit/" class="btn btn--primair">Energielabel bedrijfspand</a>
    <a href="/energielabels/woningen/" class="btn btn--outline">Energielabel woning</a>
  </div>';
$two_col_rechts    = '
  <div style="background:var(--groen-licht);border-radius:var(--rl);padding:28px;border:1px solid var(--rand);">
    <div style="font-size:.75rem;font-weight:700;letter-spacing:.08em;text-transform:uppercase;color:var(--groen);margin-bottom:16px;">Energielabelschaal</div>
    <div style="display:flex;flex-direction:column;gap:6px;">
      <div style="display:flex;align-items:center;gap:10px;font-size:.82rem;"><span style="background:#009036;color:#fff;font-weight:700;padding:3px 8px;border-radius:4px;min-width:44px;text-align:center;">A++++</span><span style="color:var(--subtekst);">Uiterst energiezuinig</span></div>
      <div style="display:flex;align-items:center;gap:10px;font-size:.82rem;"><span style="background:#18993e;color:#fff;font-weight:700;padding:3px 8px;border-radius:4px;min-width:44px;text-align:center;">A+++</span><span style="color:var(--subtekst);">Uitstekend energiezuinig</span></div>
      <div style="display:flex;align-items:center;gap:10px;font-size:.82rem;"><span style="background:#52ae32;color:#fff;font-weight:700;padding:3px 8px;border-radius:4px;min-width:44px;text-align:center;">A++</span><span style="color:var(--subtekst);">Zeer goed energiezuinig</span></div>
      <div style="display:flex;align-items:center;gap:10px;font-size:.82rem;"><span style="background:#6aba42;color:#fff;font-weight:700;padding:3px 8px;border-radius:4px;min-width:44px;text-align:center;">A+</span><span style="color:var(--subtekst);">Goed energiezuinig</span></div>
      <div style="display:flex;align-items:center;gap:10px;font-size:.82rem;"><span style="background:#c3d500;color:#333;font-weight:700;padding:3px 8px;border-radius:4px;min-width:44px;text-align:center;">A</span><span style="color:var(--subtekst);">Energiezuinig</span></div>
      <div style="display:flex;align-items:center;gap:10px;font-size:.82rem;"><span style="background:#f7e500;color:#333;font-weight:700;padding:3px 8px;border-radius:4px;min-width:44px;text-align:center;">B</span><span style="color:var(--subtekst);">Energiezuinig</span></div>
      <div style="display:flex;align-items:center;gap:10px;font-size:.82rem;"><span style="background:#f7a600;color:#333;font-weight:700;padding:3px 8px;border-radius:4px;min-width:44px;text-align:center;">C</span><span style="color:var(--subtekst);">Redelijk zuinig</span></div>
      <div style="display:flex;align-items:center;gap:10px;font-size:.82rem;"><span style="background:#e06400;color:#fff;font-weight:700;padding:3px 8px;border-radius:4px;min-width:44px;text-align:center;">D</span><span style="color:var(--subtekst);">Gemiddeld</span></div>
      <div style="display:flex;align-items:center;gap:10px;font-size:.82rem;"><span style="background:#cc1e1e;color:#fff;font-weight:700;padding:3px 8px;border-radius:4px;min-width:44px;text-align:center;">E</span><span style="color:var(--subtekst);">Matig</span></div>
      <div style="display:flex;align-items:center;gap:10px;font-size:.82rem;"><span style="background:#aa0000;color:#fff;font-weight:700;padding:3px 8px;border-radius:4px;min-width:44px;text-align:center;">F</span><span style="color:var(--subtekst);">Weinig zuinig</span></div>
      <div style="display:flex;align-items:center;gap:10px;font-size:.82rem;"><span style="background:#7a0000;color:#fff;font-weight:700;padding:3px 8px;border-radius:4px;min-width:44px;text-align:center;">G</span><span style="color:var(--subtekst);">Zeer onzuinig</span></div>
    </div>
    <p style="font-size:.75rem;color:var(--subtekst);margin-top:14px;border-top:1px solid var(--rand);padding-top:12px;">Kantoren van 100 m² of groter zijn wettelijk verplicht minimaal label C te hebben.</p>
  </div>';
include $root . 'includes/components/section-two-col.php';

// ── Zo werkt het
$stappen_variant = 'grijs';
$stappen_label   = 'Zo werkt het';
$stappen_titel   = 'Zo werkt STAP Energie';
$stappen_intro   = 'Helder proces, geen verrassingen. Van eerste contact tot advies op maat.';
$stappen_cols    = 4;
$stappen_items   = [
  ['nummer' => 1, 'titel' => 'Kennismakingsgesprek',   'tekst' => 'We beginnen altijd met een kort gesprek om uw situatie te begrijpen. Wat is uw verbruiksprofiel, wat zijn uw doelstellingen en wat zijn de meest urgente vraagstukken?'],
  ['nummer' => 2, 'titel' => 'Offerte & opdracht',      'tekst' => 'U ontvangt een heldere offerte op basis van het kennismakingsgesprek. Na akkoord gaan wij officieel voor u aan de slag — geen verrassingen achteraf.'],
  ['nummer' => 3, 'titel' => 'Analyse & nulmeting',     'tekst' => 'Op basis van uw verbruiksdata, contracten en gebouwinformatie stellen wij een helder beeld op van uw huidige situatie. Dat is de basis voor elk goed advies.'],
  ['nummer' => 4, 'titel' => 'Advies & begeleiding',    'tekst' => 'U ontvangt een concreet, onderbouwd advies en wij begeleiden de uitvoering. Energiemarkten veranderen — wij zorgen dat uw strategie actueel blijft.'],
];
include $root . 'includes/components/section-stappen.php';

// ── Aanvraagformulier
?>
<section class="sectie sectie--wit" id="aanvraag">
  <div class="sectie__inner">
    <span class="sectie__label">Contact</span>
    <h2 class="sectie__titel">Vrijblijvend kennismakingsgesprek</h2>
    <p class="sectie__intro">Vul het formulier in en STAP Energie neemt binnen twee werkdagen contact op.</p>
    <?php
    $f_dienst = '';
    $f_type   = 'zakelijk';
    $f_pagina = 'zakelijk';
    include $root . 'includes/formulier.php';
    ?>
  </div>
</section>

<?php
include $root . 'includes/faq.php';
include $root . 'includes/cta.php';
include $root . 'includes/footer.php';
?>
