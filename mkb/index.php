<?php
/**
 * mkb/index.php
 * Segmentpagina MKB & Bedrijven
 */
$root        = dirname(dirname(__FILE__)) . '/';
$title       = 'Energieadvies voor MKB & Bedrijven | STAP Energie';
$description = 'Energiekosten te hoog? STAP Energie helpt MKB-bedrijven met energie-inkoopadvies, energielabels en verduurzaming. Onafhankelijk advies, vaste prijzen, heel Nederland.';
$canonical   = 'https://stapenergie.nl/mkb/';

$breadcrumbs = [
  ['label' => 'Home',    'url' => '/'],
  ['label' => 'Zakelijk','url' => '/zakelijk/'],
  ['label' => 'MKB & Bedrijven'],
];

$cta_titel     = 'Weten wat STAP voor uw bedrijf kan betekenen?';
$cta_subtitel  = 'Plan een vrijblijvend kennismakingsgesprek. Binnen twee werkdagen reactie.';
$cta_knop      = 'Gratis kennismakingsgesprek →';
$cta_knop_url  = '#contact';
$cta_garanties = ['Geen verplichtingen', 'Reactie binnen twee werkdagen', 'Heel Nederland'];

$faq_label = 'Veelgestelde vragen';
$faq_titel = 'Vragen van MKB-ondernemers over energie';
$faq_items = [
  ['vraag' => 'Wanneer is het slim om mijn energiecontract te laten doorlichten?',
   'antwoord' => 'Eigenlijk altijd een goed moment — maar zeker als uw contract binnen 12 maanden afloopt, als u net een pand heeft gekocht of gehuurd, of als uw energierekening de afgelopen tijd opvallend gestegen is. Een contractanalyse kost u niets en levert bijna altijd bruikbare inzichten op.'],
  ['vraag' => 'Mijn bedrijfspand heeft een energielabel — moet ik daar iets mee?',
   'antwoord' => 'Dat hangt af van de klasse. Voor kantoren groter dan 100 m² is minimaal label C wettelijk verplicht. Heeft u een winkel, opslagruimte of productieruimte? Dan geldt de C-plicht niet automatisch, maar bij verkoop of verhuur is een geldig label wel verplicht. Heeft u twijfels over uw huidige situatie? STAP Energie kijkt het voor u na.'],
  ['vraag' => 'Wat levert verduurzaming een mkb-bedrijf financieel op?',
   'antwoord' => 'Meer dan de meeste ondernemers verwachten. Betere isolatie verlaagt uw stookkosten structureel. LED-verlichting verdient zich terug binnen twee jaar. Zonnepanelen verlagen uw inkoopbehoefte. En met regelingen als de ISDE en de EIA wordt de terugverdientijd aanzienlijk korter. STAP Energie brengt de meest rendabele maatregelen voor uw situatie in kaart.'],
  ['vraag' => 'Ik heb een klein bedrijf. Is energie-inkoopadvies dan ook zinvol?',
   'antwoord' => 'Ja. Juist kleinere bedrijven betalen vaak een opslag die grotere afnemers niet betalen, simpelweg omdat ze minder onderhandelingsruimte hebben. STAP Energie kent de markt van binnenuit en weet welke contractvormen voor welk verbruiksprofiel het meest voordelig zijn.'],
  ['vraag' => 'Werkt STAP Energie ook samen met leveranciers?',
   'antwoord' => 'Ja, maar op onze voorwaarden. STAP Energie werkt samen met zorgvuldig geselecteerde leveranciers en installatiepartners die wij beoordelen op kwaliteit en betrouwbaarheid. We kiezen altijd de partij die het beste bij uw situatie past.'],
  ['vraag' => 'Kan STAP Energie meerdere panden of locaties begeleiden?',
   'antwoord' => 'Ja. Voor MKB-bedrijven met meerdere vestigingen of panden biedt STAP Energie een gecoordineerde aanpak. Energielabels per pand, gecombineerde inkoopstrategie en verduurzamingsadvies op portefeuilleniveau.'],
];

include $root . 'includes/head.php';
include $root . 'includes/nav.php';
include $root . 'includes/breadcrumb.php';

// ── Hero
$hero_variant  = 'sub';
$hero_bg       = '/images/segment-mkb.jpg';
$hero_eyebrow  = 'Energieadvies voor MKB & Bedrijven';
$hero_titel    = 'Energie is uw grootste variabele kostenpost. <em>Het hoeft niet zoveel te kosten.</em>';
$hero_lead     = 'De meeste mkb-bedrijven betalen te veel voor energie. Niet door pech, maar doordat het contract nooit grondig is doorgelicht. STAP Energie kijkt wat er beter kan.';
$hero_usps     = [
  'Onafhankelijk advies — aan uw kant van de tafel',
  '15+ jaar ervaring in de energiemarkt',
  'Energie-inkoop, energielabels en verduurzaming',
  'Reactie binnen twee werkdagen',
];
$hero_cta      = 'Plan een gratis gesprek →';
$hero_cta_url  = '#contact';
$hero_cta2     = 'Bekijk onze diensten';
$hero_cta2_url = '#diensten';
include $root . 'includes/hero.php';
include $root . 'includes/trust.php';

// ── Drie diensten
$kaarten_variant = 'wit';
$kaarten_label   = 'Wat STAP Energie voor u doet';
$kaarten_titel   = 'Drie diensten, één aanspreekpunt';
$kaarten_intro   = 'Energie-inkoop, energielabels en verduurzaming — STAP Energie overziet het complete energievraagstuk voor uw bedrijf.';
$kaarten_cols    = 3;
$kaarten_id      = 'diensten';
$kaarten_items   = [
  [
    'titel'      => 'Energie-inkoopadvies',
    'type'       => 'Meest gevraagd',
    'icoon'      => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>',
    'tekst'      => 'Uw factuur vertelt wat u betaalt. Wij weten of uw contract ook klopt. STAP Energie analyseert uw huidige contract en adviseert over contractvorm, looptijd en timing.',
    'uitgelicht' => true,
    'cta_tekst'  => 'Meer over energie-inkoop →',
    'cta_url'    => '/energie-inkoop-advies/',
    'cta_stijl'  => 'solid',
  ],
  [
    'titel'     => 'Energielabels',
    'type'      => 'Verplicht bij transacties',
    'icoon'     => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M8 7h8M8 12h5M8 17h3"/></svg>',
    'tekst'     => 'Verplicht bij verkoop, verhuur en oplevering van uw bedrijfspand. STAP Energie verzorgt officiële energielabels voor kantoren, winkels, opslagruimtes en andere utiliteitsgebouwen.',
    'cta_tekst' => 'Meer over energielabels →',
    'cta_url'   => '/energielabels/utiliteit/',
    'cta_stijl' => 'outline',
  ],
  [
    'titel'     => 'Verduurzaming & subsidies',
    'type'      => 'Financieel verstandig',
    'icoon'     => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>',
    'tekst'     => 'Welke maatregelen leveren het meeste op voor uw situatie? STAP Energie brengt de meest rendabele verbeteringen in kaart en begeleidt de uitvoering, inclusief beschikbare subsidies.',
    'cta_tekst' => 'Meer over verduurzaming →',
    'cta_url'   => '/verduurzaming-subsidie/',
    'cta_stijl' => 'outline',
  ],
];
include $root . 'includes/components/section-kaarten.php';

// ── Twee-kolom: het probleem
$two_col_variant   = 'grijs';
$two_col_label     = 'Waarom mkb-bedrijven te veel betalen';
$two_col_titel     = 'Het contract dat nooit echt bekeken is';
$two_col_omgekeerd = false;
$two_col_links     = '
  <p style="color:var(--subtekst);line-height:1.7;margin-bottom:14px;">De meeste mkb-bedrijven sluiten een energiecontract af als het vorige afloopt — zonder grondige vergelijking, zonder inzicht in wat de markt op dat moment doet. Het resultaat: een contract dat misschien prima was bij afsluiting, maar nu niet meer optimaal is.</p>
  <p style="color:var(--subtekst);line-height:1.7;margin-bottom:14px;">Energieprijzen bewegen voortdurend. Gasopslagstanden, seizoenen, geopolitieke ontwikkelingen — ze bepalen mede wat u betaalt. Wie die dynamiek begrijpt, kan beter inschatten wanneer het slim is om vast te leggen en voor hoe lang.</p>
  <p style="color:var(--subtekst);line-height:1.7;margin-bottom:20px;">STAP Energie begint altijd met een contractanalyse. Gratis, vrijblijvend, en bijna altijd verhelderend.</p>';
$two_col_cta       = ['tekst' => 'Vraag een gratis contractanalyse aan →', 'url' => '#contact', 'stijl' => 'primair'];
$two_col_rechts    = '
  <div style="display:flex;flex-direction:column;gap:20px;">
    <div class="icon-tekst">
      <div class="icon-tekst__icoon"><svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg></div>
      <div class="icon-tekst__content"><div class="icon-tekst__titel">Contractanalyse als startpunt</div><div class="icon-tekst__tekst">Wij doorlichten uw bestaande contract op prijs, voorwaarden en risico. U krijgt een helder beeld van wat beter kan.</div></div>
    </div>
    <div class="icon-tekst">
      <div class="icon-tekst__icoon"><svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg></div>
      <div class="icon-tekst__content"><div class="icon-tekst__titel">Gas en stroom apart beoordelen</div><div class="icon-tekst__tekst">Gas en stroom bewegen op verschillende markten. Het is zelden optimaal om voor beide hetzelfde contracttype te kiezen.</div></div>
    </div>
    <div class="icon-tekst">
      <div class="icon-tekst__icoon"><svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622C17.176 19.29 21 14.591 21 9c0-1.042-.133-2.052-.382-3.016z"/></svg></div>
      <div class="icon-tekst__content"><div class="icon-tekst__titel">Altijd aan uw kant van de tafel</div><div class="icon-tekst__tekst">STAP Energie heeft geen merkvoorkeur. Wij kiezen de partij die het beste bij uw situatie past, niet de partij die ons het meeste oplevert.</div></div>
    </div>
  </div>';
include $root . 'includes/components/section-two-col.php';

// ── Twee-kolom: energielabel voor mkb
$two_col_variant   = 'wit';
$two_col_label     = 'Energielabel voor uw bedrijfspand';
$two_col_titel     = 'Verplicht bij verkoop, verhuur en oplevering';
$two_col_omgekeerd = true;
$two_col_links     = '
  <p style="color:var(--subtekst);line-height:1.7;margin-bottom:14px;">Bij elke transactie met uw bedrijfspand is een geldig energielabel wettelijk verplicht. Maar het label is meer dan een administratieve verplichting. Het geeft een objectieve nulmeting van hoe uw pand presteert en vormt een goed vertrekpunt voor een verbetertraject.</p>
  <p style="color:var(--subtekst);line-height:1.7;margin-bottom:20px;">STAP Energie verzorgt officiële energielabels voor kantoren, winkels, opslagruimtes en andere utiliteitsgebouwen. Gecertificeerd, snel en transparant geprijsd.</p>';
$two_col_cta       = ['tekst' => 'Meer over energielabels utiliteit →', 'url' => '/energielabels/utiliteit/', 'stijl' => 'outline'];
$two_col_rechts    = '
  <ul class="checklist">
    <li class="checklist__item"><span class="checklist__vink">✓</span><span>Verplicht bij verkoop, verhuur en oplevering</span></li>
    <li class="checklist__item"><span class="checklist__vink">✓</span><span>Gecertificeerd EPA-adviseur, officieel geregistreerd in EP-online</span></li>
    <li class="checklist__item"><span class="checklist__vink">✓</span><span>Kantoren groter dan 100 m² verplicht minimaal label C</span></li>
    <li class="checklist__item"><span class="checklist__vink">✓</span><span>Label 10 jaar geldig na registratie</span></li>
    <li class="checklist__item"><span class="checklist__vink">✓</span><span>Herlabelen na verduurzaming mogelijk</span></li>
    <li class="checklist__item"><span class="checklist__vink">✓</span><span>Meerdere panden? Volumetarief beschikbaar</span></li>
  </ul>';
include $root . 'includes/components/section-two-col.php';

// ── Stappen: hoe werkt het
$stappen_variant = 'grijs';
$stappen_label   = 'Zo werkt het';
$stappen_titel   = 'Van eerste contact tot advies op maat';
$stappen_intro   = 'Helder proces, geen verrassingen.';
$stappen_cols    = 4;
$stappen         = [
  ['nummer' => 1, 'titel' => 'Kennismakingsgesprek', 'tekst' => 'We beginnen met een kort gesprek om uw situatie te begrijpen. Wat zijn uw grootste energiekosten en wat zijn uw doelstellingen?'],
  ['nummer' => 2, 'titel' => 'Analyse & nulmeting',  'tekst' => 'Op basis van uw verbruiksdata en contracten stellen wij een helder beeld op van uw huidige situatie. Dat is de basis voor goed advies.'],
  ['nummer' => 3, 'titel' => 'Concreet advies',      'tekst' => 'U ontvangt een onderbouwd advies over inkoop, label of verduurzaming — afgestemd op uw situatie, niet een standaard verhaal.'],
  ['nummer' => 4, 'titel' => 'Begeleiding',          'tekst' => 'STAP Energie begeleidt de uitvoering en blijft beschikbaar voor vragen. Energieprijzen veranderen — uw strategie blijft actueel.'],
];
include $root . 'includes/components/section-stappen.php';
unset($stappen, $stappen_variant, $stappen_label, $stappen_titel, $stappen_intro, $stappen_cols);

// ── Voordelen
$kaarten_variant = 'wit';
$kaarten_label   = 'Waarom STAP Energie';
$kaarten_titel   = 'De markt van binnenuit gekend';
$kaarten_intro   = 'Met 15+ jaar ervaring aan de leverancierszijde weet STAP Energie precies hoe de energiemarkt werkt — en wat dat betekent voor uw contract.';
$kaarten_cols    = 3;
$kaarten_items   = [
  [
    'titel' => 'Kennis van beide kanten',
    'icoon' => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg>',
    'tekst' => 'Erik Dolman werkte 15+ jaar aan de leverancierszijde — bij SEFE Energy en NieuweStroom. Hij weet hoe leveranciers denken en wat er werkelijk speelt in contractonderhandelingen.',
  ],
  [
    'titel' => 'Geen merkvoorkeur',
    'icoon' => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622C17.176 19.29 21 14.591 21 9c0-1.042-.133-2.052-.382-3.016z"/></svg>',
    'tekst' => 'STAP Energie heeft geen exclusieve samenwerkingen die het advies kleuren. Wij selecteren op kwaliteit en kiezen de partij die het beste bij uw situatie past.',
  ],
  [
    'titel' => 'Één aanspreekpunt',
    'icoon' => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M9 3v18M15 3v18M3 9h18M3 15h18"/></svg>',
    'tekst' => 'Of het nu gaat om inkoop, een energielabel of verduurzaming — u heeft altijd één vast aanspreekpunt die uw situatie kent en het complete energievraagstuk overziet.',
  ],
];
include $root . 'includes/components/section-kaarten.php';

// ── Contactformulier
?>
<section class="sectie sectie--grijs" id="contact">
  <div class="sectie__inner">
    <span class="sectie__label">Contact</span>
    <h2 class="sectie__titel">Plan een gratis kennismakingsgesprek</h2>
    <p class="sectie__intro">Vul het formulier in en STAP Energie neemt binnen twee werkdagen contact op.</p>
    <?php
    $f_dienst = '';
    $f_type   = 'zakelijk';
    $f_pagina = 'mkb';
    include $root . 'includes/formulier.php';
    ?>
  </div>
</section>

<?php
include $root . 'includes/faq.php';
include $root . 'includes/cta.php';
include $root . 'includes/footer.php';
?>
