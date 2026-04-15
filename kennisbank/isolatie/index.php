<?php
/**
 * kennisbank/isolatie/index.php
 * Kennisartikel: Isolatie van uw woning
 */
$root        = dirname(dirname(dirname(__FILE__))) . '/';
$title       = 'Isolatie van Uw Huis | Types, Kosten & ISDE-Subsidie | STAP Energie';
$description = 'Isolatie: spouwmuur, vloer, dak, ramen. Kosten per type. ISDE-subsidie met doubling rule. ROI 5–10 jaar. Funderingselement van verduurzaming.';
$canonical   = 'https://stapenergie.nl/kennisbank/isolatie/';

$breadcrumbs = [
  ['label' => 'Home',       'url' => '/'],
  ['label' => 'Kennisbank', 'url' => '/kennisbank/'],
  ['label' => 'Isolatie'],
];

$cta_titel     = 'Isolatie checken?';
$cta_subtitel  = 'Plan een vrijblijvend adviesgesprek. Wij beginnen met uw situatie.';
$cta_knop      = 'Plan een adviesgesprek →';
$cta_knop_url  = '/#contact';
$cta_garanties = ['15+ jaar ervaring in de energiemarkt', 'Geen productbelang', 'Reactie binnen twee werkdagen'];

$faq_label = 'Veelgestelde vragen';
$faq_titel = 'Veelgestelde vragen over isolatie';
$faq_items = [
  ['vraag' => 'Wat is de doubling rule?',
   'antwoord' => 'De ISDE-subsidie verdubbelt als u binnen 24 maanden nadat u isolatie aanvraagt ook een warmtepomp of hybride ketel installeert. Dus eerst isolatie aanvragen, dan warmtepomp — u krijgt méér subsidie totaal.'],
  ['vraag' => 'Welk isolatietype geeft de meeste besparing?',
   'antwoord' => 'Dakisolatie geeft meist voordeel (dak verliest veel warmte). Daarna spouwmuurvulling (goedkoop, veel effect). Vloerisolatie helpt ook, maar is duurder. HR++ ramen als laatste. Combineren geeft best resultaat.'],
  ['vraag' => 'Hoeveel wordt mijn energielabel beter?',
   'antwoord' => 'Sterk afhankelijk van huistype en huidigestatus. Een goed geïsoleerd huis kan van label D naar B gaan. Een slecht huis van F naar D. STAP Energie berekent dit voor uw woning.'],
  ['vraag' => 'Kan ik isolatie zelf doen?',
   'antwoord' => 'Eenvoudige maatregelen (glaswol in zolder) zijn DIY-vriendelijk. Spouwmuurvulling vereist professionele apparatuur. Vloer- en dakisolatie meestal ook professioneel. Voor ISDE-subsidie moet het professioneel gebeuren.'],
  ['vraag' => 'Hoe lang duurt isolatiewerk?',
   'antwoord' => 'Spouwmuurvulling: 1 dag (min verstoring). Dakisolatie: 2–5 dagen. Ramen: 3–10 dagen per raam. Vloerisolatie: meerdagen afhankelijk van oppervlakte en techniek.'],
];

include $root . 'includes/head.php';
include $root . 'includes/nav.php';
include $root . 'includes/breadcrumb.php';

// ── Hero
$hero_variant  = 'sub';
$hero_bg       = '/images/hero-verduurzaming-hub.jpg';
$hero_eyebrow  = 'Kennisbank';
$hero_titel    = 'Isolatie: de basis van energiebesparing. <em>Warm in winter, koel in zomer.</em>';
$hero_lead     = 'Goede isolatie is het fundament van verduurzaming. Minder warmteverlies betekent lagere energierekening, beter comfort en een hoger energielabel. Lees alles over types isolatie, kosten en beschikbare subsidies.';
$hero_usps     = [];
$hero_cta      = 'Plan een adviesgesprek →';
$hero_cta_url  = '/#contact';
$hero_cta2     = '';
$hero_cta2_url = '';
include $root . 'includes/hero.php';
include $root . 'includes/trust.php';

// ── Introductie
$two_col_variant   = 'wit';
$two_col_label     = 'Basis';
$two_col_titel     = 'Waarom isolatie essentieel is';
$two_col_links     = '<p>Een typisch Nederlands huis verliest via verschillende wegen warmte naar buiten:</p>
<p><strong>Dak:</strong> 25% (hoge prioriteit)<br>
<strong>Muren:</strong> 35% (groot volume)<br>
<strong>Vloer:</strong> 10% (onder grondniveau beschermd)<br>
<strong>Ramen:</strong> 15% (veel contact buiten)<br>
<strong>Ventilatie:</strong> 15% (noodzakelijk, maar verlies)</p>
<p>Door gericht te isoleren, stoppen jullie dit verlies. Resultaat: lagere energierekening (€500–€2.000/jaar mogelijk), beter comfort, hoger energielabel.</p>';
$two_col_cta       = [];
$two_col_rechts    = '<ul class="checklist">
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Goede isolatie = voordeel voor alles</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Warmtepomp werkt beter</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Energielabel omhoog</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>ISDE-subsidie beschikbaar</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>ROI 5–10 jaar</span></li>
</ul>';
include $root . 'includes/components/section-two-col.php';
unset($two_col_variant, $two_col_label, $two_col_titel, $two_col_omgekeerd, $two_col_links, $two_col_cta, $two_col_rechts);

// ── Types isolatie
$kaarten_variant = 'grijs';
$kaarten_label   = 'Types';
$kaarten_titel   = 'Verschillende isolatietechnieken';
$kaarten_intro   = 'Voor elk onderdeel van uw huis is isolatie mogelijk. Elk type heeft eigen kosten, besparing en complexiteit.';
$kaarten_cols    = 3;
$kaarten_items   = [
  [
    'titel'     => 'Spouwmuurvulling',
    'icoon'     => '🧱',
    'badge'     => 'Populair',
    'tekst'     => 'Vullen van de lege ruimte tussen binnen- en buitenmuur. Snel, efficiënt, niet disruptief. Werkt alleen voor huizen met spouwmuur (meestal na 1970).',
    'prijsrijen' => [
      ['label' => 'Kosten (gemiddeld huis)', 'bedrag' => '€ 2.000–€ 4.000'],
      ['label' => 'ISDE-subsidie',         'bedrag' => '€ 300–€ 1.000'],
    ],
  ],
  [
    'titel'     => 'Dakisolatie',
    'icoon'     => '🏠',
    'badge'     => 'Prioriteit 1',
    'tekst'     => 'Isolatie in de zolder of tussen dakspanten. Grootste warmteverlies via dak. Relatief goedkoop en veel effect.',
    'prijsrijen' => [
      ['label' => 'Kosten',              'bedrag' => '€ 1.500–€ 3.500'],
      ['label' => 'ISDE-subsidie',       'bedrag' => '€ 200–€ 800'],
    ],
  ],
  [
    'titel'     => 'Ramen (HR++/HR+++)',
    'icoon'     => '🪟',
    'badge'     => 'Sluiting',
    'tekst'     => 'Vervanging naar HR++/HR+++ ramen. Modern glas heeft betere isolatie. Duurder, maar mooier effect op huis.',
    'prijsrijen' => [
      ['label' => 'Kosten',              'bedrag' => '€ 3.000–€ 8.000'],
      ['label' => 'ISDE-subsidie',       'bedrag' => '€ 500–€ 2.000'],
    ],
  ],
  [
    'titel'     => 'Vloerisolatie',
    'icoon'     => '⬇️',
    'badge'     => 'Gericht',
    'tekst'     => 'Isolatie onder de grondslag. Minder dringend (grond wekt al), maar in sommige huizen aanzienlijke besparing.',
    'prijsrijen' => [
      ['label' => 'Kosten',              'bedrag' => '€ 2.000–€ 6.000'],
      ['label' => 'ISDE-subsidie',       'bedrag' => '€ 250–€ 750'],
    ],
  ],
  [
    'titel'     => 'Gevelisolatie (ETICS)',
    'icoon'     => '🏘️',
    'badge'     => 'Uitgebreid',
    'tekst'     => 'Thermische gevel (styropor + pleister). Voor hele zuidgevel. Veel werk, veel effect. Meestal gecombineerd met spouwmuur.',
    'prijsrijen' => [
      ['label' => 'Kosten',              'bedrag' => '€ 5.000–€ 15.000'],
      ['label' => 'ISDE-subsidie',       'bedrag' => '€ 750–€ 2.500'],
    ],
  ],
];
include $root . 'includes/components/section-kaarten.php';
unset($kaarten_variant, $kaarten_label, $kaarten_titel, $kaarten_intro, $kaarten_cols, $kaarten_items);

// ── ISDE Subsidie: de doubling rule
$two_col_variant   = 'wit';
$two_col_label     = 'Financiering';
$two_col_titel     = 'ISDE-subsidie: het doubling voordeel';
$two_col_links     = '<p><strong>ISDE (Investeringssubsidie Duurzame Energie)</strong> geeft geld voor isolatie:</p>
<p><strong>Spouwmuurvulling:</strong> €300–€1.000<br>
<strong>Dakisolatie:</strong> €200–€800<br>
<strong>Ramen:</strong> €500–€2.000<br>
<strong>Vloer:</strong> €250–€750</p>
<p><strong>Het doubling voordeel:</strong> Installeert u binnen 24 maanden nadat isolatie is aangevraagd ook een warmtepomp of hybride ketel? Dan verdubbelt uw subsidie voor beide maatregelen. Dit kan €4.000+ extra opbrengen.</p>
<p><strong>Strategie:</strong> Aanvragen isolatie eerst, installeer dan warmtepomp → maximaal subsidie.</p>';
$two_col_cta       = ['tekst' => 'Meer over ISDE →', 'url' => '/verduurzaming-subsidie/', 'stijl' => 'primair'];
$two_col_rechts    = '<ul class="checklist">
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>ISDE voor alle isolatietypes</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Doubling rule: +subsidie bij combinatie</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>24 maanden window voor combinatie</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Aanvraag voor werkstart vereist</span></li>
</ul>';
include $root . 'includes/components/section-two-col.php';
unset($two_col_variant, $two_col_label, $two_col_titel, $two_col_omgekeerd, $two_col_links, $two_col_cta, $two_col_rechts);

// ── Prioriteiten en strategie
$two_col_variant   = 'grijs';
$two_col_label     = 'Strategie';
$two_col_titel     = 'In welke volgorde?';
$two_col_links     = '<p><strong>Stap 1 — Dak:</strong> Grootste warmteverlies, meest voordelig. Meestal eerst.</p>
<p><strong>Stap 2 — Spouwmuur:</strong> Goedkoop per m², groot effect. Alleen voor huizen na 1970 met spouwmuur.</p>
<p><strong>Stap 3 — Ramen:</strong> Zichtbaar voordeel, beter comfort en geluid. Duurder per m².</p>
<p><strong>Stap 4 — Vloer:</strong> Minder prioriteit, meer complexiteit. Meestal laatst.</p>
<p><strong>Warmtepomp-timing:</strong> Isolatie eerst uitvoeren (en ISDE aanvragen). Dan binnen 24 maanden warmtepomp installeren → doubling van subsidie.</p>';
$two_col_cta       = [];
$two_col_rechts    = '<ul class="checklist">
  <li class="checklist__item"><span class="checklist__vink">1</span><span>Dak (25% warmteverlies)</span></li>
  <li class="checklist__item"><span class="checklist__vink">2</span><span>Spouwmuur (35% verlies)</span></li>
  <li class="checklist__item"><span class="checklist__vink">3</span><span>Ramen HR++ (15% verlies)</span></li>
  <li class="checklist__item"><span class="checklist__vink">4</span><span>Vloer (10% verlies)</span></li>
</ul>';
include $root . 'includes/components/section-two-col.php';
unset($two_col_variant, $two_col_label, $two_col_titel, $two_col_omgekeerd, $two_col_links, $two_col_cta, $two_col_rechts);

// ── ROI en besparing
$two_col_variant   = 'wit';
$two_col_label     = 'Financieel';
$two_col_titel     = 'Besparing en terugverdienperiode';
$two_col_links     = '<p>Isolatie bespaart jaarlijks op energiekosten. De hoogte hangt af van uw huisenergielabel, gasgebruik en gaskosten.</p>
<p><strong>Typische besparing:</strong></p>
<p>Een gemiddeld huis (label D, €2.000/jaar gas) kan door volledige isolatie €600–€1.200/jaar besparen.</p>
<p><strong>Terugverdienperiode:</strong> 5–10 jaar (afhankelijk van maatregelen en gaskosten). Na terugbetaling is het zuivere winst.</p>
<p><strong>Energielabel effect:</strong> Van label D/E naar B is niet ongewoon. Dit verhoogt woningwaarde met 2–5%.</p>';
$two_col_cta       = ['tekst' => 'Energielabel aanvragen →', 'url' => '/energielabels/', 'stijl' => 'primair'];
$two_col_rechts    = '<ul class="checklist">
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Jaarlijkse besparing: €600–€1.200</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Terugverdienperiode: 5–10 jaar</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Woningwaarde +2–5% mogelijk</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Beter comfort: minder tocht</span></li>
</ul>';
include $root . 'includes/components/section-two-col.php';
unset($two_col_variant, $two_col_label, $two_col_titel, $two_col_omgekeerd, $two_col_links, $two_col_cta, $two_col_rechts);

// ── Materialen
$two_col_variant   = 'grijs';
$two_col_label     = 'Details';
$two_col_titel     = 'Materialen en U-waarden';
$two_col_links     = '<p>Isolatiematerialen verschillen in R-waarde (warmteweerstand). Hoe hoger, hoe beter.</p>
<p><strong>Spouwmuur:</strong> Glaswol, polyurethaan, of combinaties. R-waarde typisch 1,5–2,5 m²K/W.</p>
<p><strong>Dak:</strong> Glaswol, rockwool, of PUR. Typisch 3–6 m²K/W nodig.</p>
<p><strong>Ramen:</strong> HR++ betekent U-waarde ≤1,2 W/m²K. HR+++ is ≤0,8 W/m²K (beter).</p>
<p><strong>Vloer:</strong> Polyurethaan of EPS-schuim, 4–6 cm dik.</p>
<p>Vakinstalleuren kiezen geschikte materialen en dikte voor uw situatie.</p>';
$two_col_cta       = [];
$two_col_rechts    = '<ul class="checklist">
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Glaswol/rockwool: budget-friendly</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Polyurethaan/PUR: hoger R-waarde</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Ramen HR++/HR+++ standaard</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Professionele installatie essentieel</span></li>
</ul>';
include $root . 'includes/components/section-two-col.php';
unset($two_col_variant, $two_col_label, $två_col_titel, $two_col_omgekeerd, $two_col_links, $two_col_cta, $two_col_rechts);

include $root . 'includes/faq.php';
include $root . 'includes/cta.php';
include $root . 'includes/footer.php';
?>
