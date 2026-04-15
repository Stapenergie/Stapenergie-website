<?php
/**
 * kennisbank/thuisbatterij/index.php
 * Kennisartikel: Thuisbatterij
 */
$root        = dirname(dirname(dirname(__FILE__))) . '/';
$title       = 'Thuisbatterij (Home Battery) | Kosten, Rendement & Subsidie | STAP Energie';
$description = 'Thuisbatterij: slaat zonne-energie op voor 's avonds. €4.000–€8.000, terugverdientijd 8–12 jaar. Best met dynamische stroomcontract. Combinatie zonnepanelen.';
$canonical   = 'https://stapenergie.nl/kennisbank/thuisbatterij/';

$breadcrumbs = [
  ['label' => 'Home',       'url' => '/'],
  ['label' => 'Kennisbank', 'url' => '/kennisbank/'],
  ['label' => 'Thuisbatterij'],
];

$cta_titel     = 'Thuisbatterij geschikt voor u?';
$cta_subtitel  = 'Plan een vrijblijvend adviesgesprek. Wij beginnen met uw situatie.';
$cta_knop      = 'Plan een adviesgesprek →';
$cta_knop_url  = '/#contact';
$cta_garanties = ['15+ jaar ervaring in de energiemarkt', 'Geen productbelang', 'Reactie binnen twee werkdagen'];

$faq_label = 'Veelgestelde vragen';
$faq_titel = 'Veelgestelde vragen over thuisbatterijen';
$faq_items = [
  ['vraag' => 'Hoeveel energie kan een thuisbatterij opslaan?',
   'antwoord' => 'Gemiddeld 5–13 kWh (kilowatt-uur). Een typisch huishouden gebruikt 7–9 kWh per dag. Dus een batterij stelt u in staat om 's middags opgeslagen zonne-energie 's avonds/nacht te gebruiken.'],
  ['vraag' => 'Hoe lang houden batterijen mee?',
   'antwoord' => 'Moderne lithium-batterijen houden 10–15 jaar mee. Ze verouderen door laad/ontlaad-cycli (niet door tijd). Met 300–500 cycli per jaar gaat een batterij 20–50 jaar mee, maar capaciteit neemt af.'],
  ['vraag' => 'Wat is een dynamische stroomcontract?',
   'antwoord' => 'Met een dynamische contract betaalt u elk uur een ander tarief (volgt marktprijs). Slimme batterij-besturing laadt goedkoop en ontlaadt duur → forse besparing. Zonder dynamisch contract, voordeel is minder groot.'],
  ['vraag' => 'Kan ik zelf mijn batterij laden?',
   'antwoord' => 'Ja, als u stroom van het net wilt kopen voor 's nacht. Met dynamisch contract: laden in goedkope uren, ontladen in dure uren = winst. Zonder: gewoon laden als het veel kost — leidt niet tot besparing.'],
  ['vraag' => 'Werkt batterij ook zonder zonnepanelen?',
   'antwoord' => 'Ja, technisch wel. Maar voordeel is veel kleiner (alleen dynamisch contract). Met zonnepanelen: maximaal voordeel. Dus batterij is vooral zinvol met panelen of dynamic contract.'],
];

include $root . 'includes/head.php';
include $root . 'includes/nav.php';
include $root . 'includes/breadcrumb.php';

// ── Hero
$hero_variant  = 'sub';
$hero_bg       = '/images/hero-verduurzaming-hub.jpg';
$hero_eyebrow  = 'Kennisbank';
$hero_titel    = 'Thuisbatterij: sla zonnelicht op. <em>Gebruik het wanneer u wilt.</em>';
$hero_lead     = 'Een thuisbatterij slaat overdag zonne-energie op en geeft deze 's avonds af. Dit verhoogt zelf-gebruik naar 60–70% in plaats van 30–40%. Met zonnepanelen en dynamische stroom-contract kan dit €300–€600/jaar besparen. Lees hier alles over kosten, voordeel en geschiktheid.';
$hero_usps     = [];
$hero_cta      = 'Plan een adviesgesprek →';
$hero_cta_url  = '/#contact';
$hero_cta2     = '';
$hero_cta2_url = '';
include $root . 'includes/hero.php';
include $root . 'includes/trust.php';

// ── Introductie
$two_col_variant   = 'wit';
$two_col_label     = 'Werkingsprincipe';
$two_col_titel     = 'Hoe werkt een thuisbatterij?';
$two_col_links     = '<p>Een thuisbatterij (home battery/power wall) slaat elektriciteit op in lithium-ionbatterijen.</p>
<p><strong>Proces:</strong> Zonnepanelen produceren elektriciteit → inverter → batterij laadt op. 's Avonds: batterij ontlaadt → uw huis gebruikt deze energie.</p>
<p><strong>Zonder batterij:</strong> 30–40% zelf-gebruikt (overdag wanneer zon schijnt), 60% geleverd terug naar het net (tegen lagere prijs met salderingseinde).</p>
<p><strong>Met batterij:</strong> 60–70% zelf-gebruikt (ook 's avonds), 30–40% terug naar net. Veel beter rendement.</p>
<p><strong>Met dynamisch contract:</strong> Nog beter — batterij laadt goedkope uren, ontlaadt dure uren → extra besparing.</p>';
$two_col_cta       = [];
$two_col_rechts    = '<ul class="checklist">
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Slaat zonne-energie op</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Verhoogt zelf-gebruik tot 70%</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Functioneert 10–15 jaar</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Capaciteit: 5–13 kWh</span></li>
</ul>';
include $root . 'includes/components/section-two-col.php';
unset($two_col_variant, $two_col_label, $two_col_titel, $two_col_omgekeerd, $two_col_links, $two_col_cta, $two_col_rechts);

// ── Types batterijen
$kaarten_variant = 'grijs';
$kaarten_label   = 'Types';
$kaarten_titel   = 'Verschillende batterij-typen';
$kaarten_intro   = 'Thuisbatterijen verschillen in capaciteit, chemie en prijs. Kies op basis van uw verbruik.';
$kaarten_cols    = 3;
$kaarten_items   = [
  [
    'titel'     => 'Kleine batterij (5 kWh)',
    'icoon'     => '📦',
    'badge'     => 'Budget',
    'tekst'     => 'Voor apparte/klein gezin. Slaat een deel avond-verbruik op. Goedkoop, compact. Beperkte buffering.',
    'prijsrijen' => [
      ['label' => 'Kosten',             'bedrag' => '€ 4.000–€ 5.000'],
      ['label' => 'Geschikt voor',      'bedrag' => 'Klein huishouden'],
    ],
  ],
  [
    'titel'     => 'Middelgrote batterij (8–10 kWh)',
    'icoon'     => '📦📦',
    'badge'     => 'Populair',
    'tekst'     => 'Standaard voor huishouden. Slaat meeste avond-verbruik op. Goed evenwicht kosten/voordeel.',
    'prijsrijen' => [
      ['label' => 'Kosten',             'bedrag' => '€ 6.000–€ 7.500'],
      ['label' => 'Geschikt voor',      'bedrag' => 'Gemiddeld gezin'],
    ],
  ],
  [
    'titel'     => 'Grote batterij (13+ kWh)',
    'icoon'     => '📦📦📦',
    'badge'     => 'Premium',
    'tekst'     => 'Voor groot gezin of vele toestellen. Slaat bijna hele nacht op. Duur, maar maximaal voordeel.',
    'prijsrijen' => [
      ['label' => 'Kosten',             'bedrag' => '€ 8.000–€ 12.000'],
      ['label' => 'Geschikt voor',      'bedrag' => 'Groot huishouden'],
    ],
  ],
];
include $root . 'includes/components/section-kaarten.php';
unset($kaarten_variant, $kaarten_label, $kaarten_titel, $kaarten_intro, $kaarten_cols, $kaarten_items);

// ── Kosten
$two_col_variant   = 'wit';
$two_col_label     = 'Investering';
$two_col_titel     = 'Wat kost een thuisbatterij?';
$two_col_links     = '<p><strong>Standaard 8–10 kWh batterij:</strong></p>
<p>Batterij-module: €3.500–€4.500<br>
Inverter (twee-richting): €1.500–€2.500<br>
Installatie & kabels: €500–€1.000<br>
Monitoring: €200–€400<br>
<strong>Totaal: €6.000–€8.500 (gemiddeld €7.000)</strong></p>
<p><strong>Geen ISDE-subsidie meer,</strong> maar wel btw-nultarief (voordeel ≈€1.200).</p>
<p><strong>Terugverdientijd:</strong> 8–12 jaar (afhankelijk van dynamisch contract en zonnepanelen).</p>';
$two_col_cta       = [];
$two_col_rechts    = '<ul class="checklist">
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>8–10 kWh: €6.000–€8.500</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Btw-nultarief voordeel</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Geen ISDE-subsidie meer</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Terugverdientijd 8–12 jaar</span></li>
</ul>';
include $root . 'includes/components/section-two-col.php';
unset($two_col_variant, $two_col_label, $two_col_titel, $two_col_omgekeerd, $two_col_links, $two_col_cta, $two_col_rechts);

// ── Besparing
$two_col_variant   = 'grijs';
$two_col_label     = 'Rendement';
$two_col_titel     = 'Hoeveel bespaar ik?';
$two_col_links     = '<p><strong>Met zonnepanelen + gewoon contract:</strong></p>
<p>Zelf-gebruik omhoog van 30% naar 70% → extra opbrengst ±€200–€300/jaar.</p>
<p><strong>Met zonnepanelen + dynamisch contract:</strong></p>
<p>Extra opbrengst door slim laden/ontladen: ±€300–€600/jaar.</p>
<p><strong>Zonder zonnepanelen (alleen dynamisch contract):</strong></p>
<p>Veel kleiner voordeel (±€100–€200/jaar). Moeite niet waard.</p>
<p><strong>Totale besparing 8–12 jaar:</strong> €2.000–€7.200, genoeg om terug te verdienen (afhankelijk scenario).</p>';
$two_col_cta       = [];
$two_col_rechts    = '<ul class="checklist">
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Met panelen + vast: €200–€300/jr</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Met panelen + dynamisch: €300–€600/jr</span></li>
  <li class="checklist__item"><span class="checklist__vink">✗</span><span>Zonder panelen: klein voordeel</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Dynamisch contract essentieel</span></li>
</ul>';
include $root . 'includes/components/section-two-col.php';
unset($two_col_variant, $two_col_label, $two_col_titel, $two_col_omgekeerd, $two_col_links, $two_col_cta, $two_col_rechts);

// ── Combinatie zonnepanelen
$two_col_variant   = 'wit';
$two_col_label     = 'Synergie';
$two_col_titel     = 'Batterij + zonnepanelen = ideaal';
$two_col_links     = '<p><strong>Zonder batterij:</strong> Zonnepanelen leveren overdag, 's avonds duur stroom van net.</p>
<p><strong>Met batterij:</strong> Zonnepanelen leveren → batterij opslaan → 's avonds gebruiken. Veel beter zelf-gebruik.</p>
<p><strong>Effect:</strong> Van 30–40% zelf-gebruik naar 60–70%. Dit bespaart veel geld.</p>
<p><strong>Met EMS + dynamisch contract:</strong> Nog beter — EMS bestuurt alles intelligent (laden goedkoop, ontladen duur).</p>
<p><strong>Conclusie:</strong> Batterij loont vooral met zonnepanelen. Zonder panelen: veel minder voordeel.</p>';
$two_col_cta       = ['tekst' => 'Meer over zonnepanelen →', 'url' => '/kennisbank/zonnepanelen/', 'stijl' => 'primair'];
$two_col_rechts    = '<ul class="checklist">
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Batterij verhoogt zelf-gebruik</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>30% → 70% mogelijk</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Met panelen: essentieel</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Met EMS: maximaal voordeel</span></li>
</ul>';
include $root . 'includes/components/section-two-col.php';
unset($two_col_variant, $two_col_label, $two_col_titel, $two_col_omgekeerd, $two_col_links, $two_col_cta, $two_col_rechts);

// ── Dynamisch contract
$two_col_variant   = 'grijs';
$two_col_label     = 'Essentieel';
$two_col_titel     = 'Dynamisch energiecontract: het voordeel';
$two_col_links     = '<p><strong>Klassiek contract:</strong> Vast tarief (bijv. €0,35/kWh). U betaalt altijd hetzelfde.</p>
<p><strong>Dynamisch contract:</strong> Tarief volgt intraday markt (elk uur ander). Goedkoop 's nachts/weekend, duur 's ochtends/avonds.</p>
<p><strong>Met batterij + dynamisch:</strong> Laad 's nachts goedkoop (€0,10–€0,20/kWh), ontlaad 's avonds duur (€0,40–€0,60/kWh) → grote marge!</p>
<p><strong>Voordeel ≈ €300–€600/jaar.</strong> Dit maakt batterij veel interessanter.</p>
<p><strong>Aanbieders:</strong> ANWB, Energiedirect, Feit, Easyenergy, anderen.</p>';
$two_col_cta       = [];
$two_col_rechts    = '<ul class="checklist">
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Dynamisch contract essentieel</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Laad goedkoop, ontlaad duur</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Marge: €0,20–€0,40 per kWh</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Voordeel: €300–€600/jaar</span></li>
</ul>';
include $root . 'includes/components/section-two-col.php';
unset($two_col_variant, $two_col_label, $two_col_titel, $two_col_omgekeerd, $two_col_links, $two_col_cta, $two_col_rechts);

// ── Voor wie geschikt?
$two_col_variant   = 'wit';
$two_col_label     = 'Geschiktheid';
$two_col_titel     = 'Voor wie is een thuisbatterij zinvol?';
$two_col_links     = '<p><strong>Zeer geschikt als u:</strong></p>
<p>✓ Al zonnepanelen hebt (of plant)<br>
✓ Dynamisch energiecontract neemt<br>
✓ Huis met hoog dage-energieverbruik<br>
✓ 's Avonds thuis bent (verbruikt lokale energie)</p>
<p><strong>Minder geschikt als u:</strong></p>
<p>✗ Geen zonnepanelen hebt<br>
✗ Vaste tarief-contract wilt houden<br>
✗ Veel overdag werkt (verbruikt zon-energie niet)<br>
✗ Klein huishouden met laag verbruik</p>';
$two_col_cta       = ['tekst' => 'Plan adviesgesprek →', 'url' => '/#contact', 'stijl' => 'primair'];
$two_col_rechts    = '<ul class="checklist">
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Met zonnepanelen</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Dynamisch contract</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Hoog dagverbruik</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>'s Avonds thuis</span></li>
</ul>';
include $root . 'includes/components/section-two-col.php';
unset($two_col_variant, $two_col_label, $two_col_titel, $two_col_omgekeerd, $two_col_links, $two_col_cta, $two_col_rechts);

// ── Duurzaamheid
$two_col_variant   = 'grijs';
$two_col_label     = 'Langdurig';
$two_col_titel     = 'Levensduur en onderhoud';
$two_col_links     = '<p><strong>Levensduur:</strong> Moderne lithium-batterijen: 10–15 jaar officieel. In praktijk: nog veel langer, capaciteit neemt langzaam af (tot 80% na 10 jaar).</p>
<p><strong>Cycli:</strong> Een cycle = laden + ontladen. Met 300–500 cycli per jaar: batterij 20–50 jaar in theorie.</p>
<p><strong>Onderhoud:</strong> Vrijwel geen onderhoud. Jaarlijkse inspectie ≈€100.</p>
<p><strong>Vervangingskosten:</strong> Na 10–15 jaar vervangings-batterij-modul ≈€2.000–€3.000.</p>';
$two_col_cta       = [];
$two_col_rechts    = '<ul class="checklist">
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>10–15 jaar officiële levensduur</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>In praktijk 20–30 jaar mogelijk</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Minimal onderhoud</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Capaciteit af ≈ 10% per 10 jaar</span></li>
</ul>';
include $root . 'includes/components/section-two-col.php';
unset($two_col_variant, $two_col_label, $two_col_titel, $two_col_omgekeerd, $two_col_links, $two_col_cta, $two_col_rechts);

include $root . 'includes/faq.php';
include $root . 'includes/cta.php';
include $root . 'includes/footer.php';
?>
