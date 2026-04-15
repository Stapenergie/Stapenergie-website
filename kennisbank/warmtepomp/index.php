<?php
/**
 * kennisbank/warmtepomp/index.php
 * Kennisartikel: Warmtepomp voor uw huis
 */
$root        = dirname(dirname(dirname(__FILE__))) . '/';
$title       = 'Warmtepomp voor Uw Huis | Kosten, Subsidie & Types | STAP Energie';
$description = 'Hoe werkt een warmtepomp? Kosten €3.000–€15.000, ISDE-subsidie €2.125–€4.400. Types: lucht, bodem, water. Wanneer loont het?';
$canonical   = 'https://stapenergie.nl/kennisbank/warmtepomp/';

$breadcrumbs = [
  ['label' => 'Home',       'url' => '/'],
  ['label' => 'Kennisbank', 'url' => '/kennisbank/'],
  ['label' => 'Warmtepomp'],
];

$cta_titel     = 'Geschikt voor uw woning?';
$cta_subtitel  = 'Plan een vrijblijvend adviesgesprek. Wij beginnen met uw situatie.';
$cta_knop      = 'Plan een adviesgesprek →';
$cta_knop_url  = '/#contact';
$cta_garanties = ['15+ jaar ervaring in de energiemarkt', 'Geen productbelang', 'Reactie binnen twee werkdagen'];

$faq_label = 'Veelgestelde vragen';
$faq_titel = 'Veelgestelde vragen over warmtepompen';
$faq_items = [
  ['vraag' => 'Hoe werkt een warmtepomp precies?',
   'antwoord' => 'Een warmtepomp haalt warmte uit de lucht, grond of water en brengt deze in huis. Het werkt omgekeerd als een koelkast: in plaats van warmte uit het huis te zuigen, haalt het warmte uit de omgeving. Dit gebeurt door middel van verdamping en compressie van een koudemiddel.'],
  ['vraag' => 'Wat is het verschil tussen lucht-, bodem- en waterwarmtepompen?',
   'antwoord' => 'Een lucht-warmtepomp haalt warmte uit buitenlucht (goedkoopste, €3.000–€7.000). Een bodem-warmtepomp gebruikt aardwarmte uit het grondwater (efficiënter maar duurder, €10.000–€15.000). Een water-warmtepomp werkt met oppervlaktewater. Voor de meeste huizen is een lucht-warmtepomp het meest praktisch.'],
  ['vraag' => 'Hoeveel bespaar ik op energiekosten?',
   'antwoord' => 'Een warmtepomp met COP 3,5 besparen gemiddeld €500–€1.200 per jaar op gasverbruik, afhankelijk van je huidigegas-uitgaven en isolatie. Bij goed geïsoleerde woningen met lage energievraag is het rendement hoger (minder gasvast bedrag verbruik). Slecht geïsoleerde huizen zien minder besparing.'],
  ['vraag' => 'Hybride of volledig elektrisch?',
   'antwoord' => 'Een hybride warmtepomp combineert elektrische verwarming met je huidige gasketel. Volledig elektrisch betekent dat je gas helemaal verlaat. Hybride is makkelijker voor slechter geïsoleerde huizen, volledig elektrisch is schoner en gunstiger in de toekomst (gasprijzen stijgen).'],
  ['vraag' => 'Hoe oud mag mijn woning zijn voor een warmtepomp?',
   'antwoord' => 'Theoretisch kan elke woning een warmtepomp krijgen, maar het werkt beter in goed geïsoleerde huizen. Voor zeer oude, slecht geïsoleerde woningen kan een hybride aanpak voordelig zijn, of eerst isolatie verbeteren. STAP Energie adviseert altijd op basis van uw specifieke situatie.'],
];

include $root . 'includes/head.php';
include $root . 'includes/nav.php';
include $root . 'includes/breadcrumb.php';

// ── Hero
$hero_variant  = 'sub';
$hero_bg       = '/images/hero-verduurzaming-hub.jpg';
$hero_eyebrow  = 'Kennisbank';
$hero_titel    = 'Warmtepomp: efficiënte verwarming met <em>elektrische energie</em>';
$hero_lead     = 'Een warmtepomp vervangt uw gasketel en haalt warmte uit lucht, grond of water. Lager energieverbruik, lagere kosten en geen gas meer. Lees hier hoe het werkt, wat het kost en wanneer het zinvol is.';
$hero_usps     = [];
$hero_cta      = 'Plan een adviesgesprek →';
$hero_cta_url  = '/#contact';
$hero_cta2     = '';
$hero_cta2_url = '';
include $root . 'includes/hero.php';
include $root . 'includes/trust.php';

// ── Introductie: hoe werkt het
$two_col_variant   = 'wit';
$two_col_label     = 'Werkingsprincipe';
$two_col_titel     = 'Hoe werkt een warmtepomp?';
$two_col_links     = '<p>Een warmtepomp werkt als een omgekeerde koelkast. In plaats van warmte uit het huis te zuigen, haalt het warmte uit de buitenlucht, grond of water — zelfs bij lage temperaturen. Het koudemiddel verdampt en neemt warmte op, wordt gecomprimeerd (waardoor het heter wordt) en geeft de warmte af aan uw water en radiators.</p>
<p><strong>Efficiëntie:</strong> Voor elke kilowattuur elektriciteit die u verbruikt, levert een moderne warmtepomp 3 tot 5 kilowattuur warmte (de COP, Coefficient of Performance). Dit is veel beter dan een elektrische verwarming (1:1) en veel schoner dan gas.</p>';
$two_col_cta       = [];
$two_col_rechts    = '<ul class="checklist">
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Haalt warmte uit lucht, grond of water</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>COP 3–5: veel efficiënter dan gas</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Lager elektriciteitsverbruik = lagere kosten</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Geen gas meer nodig</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Langere levensduur (20–25 jaar)</span></li>
</ul>';
include $root . 'includes/components/section-two-col.php';
unset($two_col_variant, $two_col_label, $two_col_titel, $two_col_omgekeerd, $two_col_links, $two_col_cta, $two_col_rechts);

// ── Types warmtepompen
$kaarten_variant = 'grijs';
$kaarten_label   = 'Types';
$kaarten_titel   = 'Verschillende soorten warmtepompen';
$kaarten_intro   = 'Afhankelijk van uw situatie kiest u voor een lucht-, bodem- of water-warmtepomp. Elke variant heeft eigen voordelen en beperkingen.';
$kaarten_cols    = 3;
$kaarten_items   = [
  [
    'titel'     => 'Lucht-warmtepomp',
    'icoon'     => '💨',
    'badge'     => 'Populairste',
    'tekst'     => 'Haalt warmte uit buitenlucht. Werkt tot circa –15°C. De meest betaalbare optie en geschikt voor bijna alle woningen. Kan ook koelen in zomer.',
    'prijsrijen' => [
      ['label' => 'Nieuw installatie', 'bedrag' => '€ 3.000–€ 7.000'],
      ['label' => 'Werkingsduur',     'bedrag' => '20–25 jaar'],
    ],
  ],
  [
    'titel'     => 'Bodem-warmtepomp',
    'icoon'     => '⛏️',
    'badge'     => 'Meest efficiënt',
    'tekst'     => 'Haalt warmte uit het grondwater of bodemwarmte. Veel efficiënter, maar vereist diepe boorputten. Duur, maar lange levensduur.',
    'prijsrijen' => [
      ['label' => 'Nieuw installatie', 'bedrag' => '€ 10.000–€ 15.000'],
      ['label' => 'COP',               'bedrag' => 'Vaak 4–5'],
    ],
  ],
  [
    'titel'     => 'Water-warmtepomp',
    'icoon'     => '💧',
    'badge'     => 'Niche',
    'tekst'     => 'Voor woningen dicht bij oppervlaktewater. Zeer efficiënt. Vereist vergunning en onderhoudskosten voor inlaatfilter.',
    'prijsrijen' => [
      ['label' => 'Installatie',      'bedrag' => '€ 8.000–€ 12.000'],
      ['label' => 'Beschikbaarheid',  'bedrag' => 'Beperkt'],
    ],
  ],
];
include $root . 'includes/components/section-kaarten.php';
unset($kaarten_variant, $kaarten_label, $kaarten_titel, $kaarten_intro, $kaarten_cols, $kaarten_items);

// ── Kosten
$two_col_variant   = 'wit';
$two_col_label     = 'Investering';
$two_col_titel     = 'Wat kost een warmtepomp?';
$two_col_links     = '<p>De totale kosten hangen af van het type, de installateur en uw situatie.</p>
<p><strong>Lucht-warmtepomp:</strong> €3.000–€7.000 (binnenunit + buitenunit + montage)</p>
<p><strong>Bodem-warmtepomp:</strong> €10.000–€15.000 (met boorwerk)</p>
<p><strong>Daarnaast:</strong> vervangen van radiators of radiatoren aanpassen (€2.000–€5.000), elektra aanpassen voor hoger vermogen (€500–€2.000).</p>
<p><strong>Terugverdienperiode:</strong> gemiddeld 8–15 jaar door besparing op gaskosten, afhankelijk van huistype en energieverbruik.</p>';
$two_col_cta       = ['tekst' => 'Meer over subsidies →', 'url' => '/verduurzaming-subsidie/', 'stijl' => 'primair'];
$two_col_rechts    = '<ul class="checklist">
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>ISDE-subsidie: €2.125–€4.400</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Mogelijk gecombineerd met isolatie-subsidie</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Warmtefonds: laagrentende lening</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Terugverdienperiode 8–15 jaar</span></li>
</ul>';
include $root . 'includes/components/section-two-col.php';
unset($two_col_variant, $two_col_label, $two_col_titel, $two_col_omgekeerd, $two_col_links, $two_col_cta, $two_col_rechts);

// ── Voor wie is een warmtepomp geschikt?
$two_col_variant   = 'grijs';
$two_col_label     = 'Geschikt voor';
$two_col_titel     = 'Voor wie is een warmtepomp zinvol?';
$two_col_links     = '<p>Een warmtepomp werkt best in:</p>
<p><strong>Goed geïsoleerde woningen</strong> (moderne of recent gerenoveerd): warmtepompen leveren lagere temperaturen dan gasketels. Dus goede isolatie en radiators zijn essentieel.</p>
<p><strong>Huizen met lage energievraag:</strong> Een label A/B huis is ideaal. Dan draait de warmtepomp niet constant op vol vermogen.</p>
<p><strong>Hybride als overgang:</strong> Hebben we slecht geïsoleerde woning? Een hybride warmtepomp combineert gas (voor piekbelasting) met elektrisch (normale dagen).</p>';
$two_col_cta       = [];
$two_col_rechts    = '<ul class="checklist">
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Goed geïsoleerde woning</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Voldoende buitenruimte (luchtpomp)</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Radiators of laagtemperatuur verwarming</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Elektrisch vermogen beschikbaar</span></li>
</ul>';
include $root . 'includes/components/section-two-col.php';
unset($two_col_variant, $two_col_label, $two_col_titel, $two_col_omgekeerd, $two_col_links, $two_col_cta, $two_col_rechts);

// ── Voor wie NIET geschikt
$two_col_variant   = 'wit';
$two_col_label     = 'Voorzichtigheid';
$two_col_titel     = 'Wanneer is een warmtepomp NIET geschikt?';
$two_col_links     = '<p><strong>Zeer slecht geïsoleerde woningen</strong> (oude monumental huizen, jaren 70-80) kunnen problemen geven. De warmtepomp moet constant op volle toeren draaien, wat duur is.</p>
<p><strong>Kleine ruimte buiten</strong> (appartement zonder balkon): lucht-warmtepomp heeft ruimte nodig voor buitenunit.</p>
<p><strong>Financieel:</strong> Lage energierekening? Dan duurt het langer voor de investering terugverdiend is.</p>
<p>In deze gevallen kan <strong>eerst isolatie verbeteren</strong> zinvol zijn, gevolgd door een warmtepomp — dit vergroot de besparing.</p>';
$two_col_cta       = [];
$two_col_rechts    = '<ul class="checklist">
  <li class="checklist__item"><span class="checklist__vink">✗</span><span>Zeer slecht geïsoleerde woning (label F/G)</span></li>
  <li class="checklist__item"><span class="checklist__vink">✗</span><span>Onvoldoende buitenruimte (appartementen)</span></li>
  <li class="checklist__item"><span class="checklist__vink">✗</span><span>Heel oude radiatorinstallatie</span></li>
  <li class="checklist__item"><span class="checklist__vink">✗</span><span>Zeer lage energierekening</span></li>
</ul>';
include $root . 'includes/components/section-two-col.php';
unset($two_col_variant, $two_col_label, $two_col_titel, $two_col_omgekeerd, $two_col_links, $two_col_cta, $two_col_rechts);

// ── COP uitleg
$two_col_variant   = 'grijs';
$two_col_label     = 'Begrippen';
$two_col_titel     = 'Wat betekent COP en vermogensverhouding?';
$two_col_links     = '<p><strong>COP (Coefficient of Performance)</strong> is de verhouding tussen warmte-output en elektrisch vermogen. COP 3,5 betekent: voor elke kilowattuur elektriciteit krijg je 3,5 kWh warmte.</p>
<p><strong>Buitentemperatuur telt.</strong> Bij 0°C is de COP lager (circa 2,5) dan bij 7°C (circa 3,5). Daarom zijn bodem- en waterwarmtepompen betrouwbaarder (constant circa 4–5).</p>
<p><strong>Voor vergelijking:</strong> Een gasketel haalt ca. 90% rendement. Een warmtepomp met COP 3,5 is effectief 350% "rendement" — dus veel beter.</p>';
$two_col_cta       = [];
$two_col_rechts    = '<ul class="checklist">
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>COP 3–3,5: lucht-warmtepomp</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>COP 4–5: bodem- en waterwarmtepomp</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Meer COP = minder elektriciteit nodig</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Seizoensrendement SCOP voor werkelijke jaargemiddelden</span></li>
</ul>';
include $root . 'includes/components/section-two-col.php';
unset($two_col_variant, $two_col_label, $two_col_titel, $two_col_omgekeerd, $two_col_links, $two_col_cta, $two_col_rechts);

// ── Volledige overstap of hybride?
$two_col_variant   = 'wit';
$two_col_label     = 'Keuze';
$two_col_titel     = 'Volledig elektrisch of hybride?';
$two_col_links     = '<p><strong>Volledig elektrische warmtepomp:</strong> Werkt alleen op elektriciteit. Schoon, geen gas meer, onderhoudskosten laag. Vereist goede isolatie en/of veel elektrisch vermogen.</p>
<p><strong>Hybride warmtepomp:</strong> Combineert elektrische verwarming (warmtepomp) met uw bestaande gasketel. Gasketel springt in bij extreme kou. Minder strenge eisen aan isolatie, makkelijker te installeren, maar u blijft gas gebruiken.</p>
<p><strong>Toekomstbestendigheid:</strong> Gasprijzen stijgen. Volledig elektrisch is op lange termijn voordeliger — maar hybride kan nu al besparing geven.</p>';
$two_col_cta       = ['tekst' => 'Plan adviesgesprek →', 'url' => '/#contact', 'stijl' => 'primair'];
$two_col_rechts    = '<ul class="checklist">
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Volledig: beter geïsoleerde woningen</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Hybride: overgangsoptie, minder risico</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Beide krijgen ISDE-subsidie</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Keuze hangt af van uw isolatie</span></li>
</ul>';
include $root . 'includes/components/section-two-col.php';
unset($two_col_variant, $two_col_label, $two_col_titel, $two_col_omgekeerd, $two_col_links, $two_col_cta, $two_col_rechts);

include $root . 'includes/faq.php';
include $root . 'includes/cta.php';
include $root . 'includes/footer.php';
?>
