<?php
/**
 * kennisbank/cv-ketel/index.php
 * Kennisartikel: CV-ketel vervangen
 */
$root        = dirname(dirname(dirname(__FILE__))) . '/';
$title       = 'CV-Ketel Vervangen | HR, Hybride of Warmtepomp | STAP Energie';
$description = 'CV-ketel vervangen: HR-ketel €1.500–€2.500, hybride €3.000–€7.000, volledig warmtepomp. Geen subsidie HR, wel ISDE voor hybrid/warmtepomp.';
$canonical   = 'https://stapenergie.nl/kennisbank/cv-ketel/';

$breadcrumbs = [
  ['label' => 'Home',       'url' => '/'],
  ['label' => 'Kennisbank', 'url' => '/kennisbank/'],
  ['label' => 'CV-Ketel'],
];

$cta_titel     = 'CV-ketel vervangen?';
$cta_subtitel  = 'Plan een vrijblijvend adviesgesprek. Wij beginnen met uw situatie.';
$cta_knop      = 'Plan een adviesgesprek →';
$cta_knop_url  = '/#contact';
$cta_garanties = ['15+ jaar ervaring in de energiemarkt', 'Geen productbelang', 'Reactie binnen twee werkdagen'];

$faq_label = 'Veelgestelde vragen';
$faq_titel = 'Veelgestelde vragen over CV-ketels';
$faq_items = [
  ['vraag' => 'Wanneer moet mijn CV-ketel vervangen?',
   'antwoord' => 'CV-ketels houden gemiddeld 15–20 jaar mee. Tekenen: veel reparaties nodig, lage efficiëntie, lekkages, of ketel is ouder dan 15 jaar. Check ook: voldoet uw huisinstallatie nog aan normen?'],
  ['vraag' => 'Waarom een HR-ketel i.p.v. normale ketel?',
   'antwoord' => 'HR-ketels (Hoge Rendement) recupereren warmte uit rookgassen. Dit geeft 90%+ rendement ipv 85%. Spaart gas en geld. Ook veel stiller en compacter.'],
  ['vraag' => 'Wat is het verschil tussen HR, hybride en volledig warmtepomp?',
   'antwoord' => 'HR-ketel: alleen gas, 90%+ rendement. Hybride: gas + elektrisch (warmtepomp-assist), 95%+. Volledig warmtepomp: alleen elektriciteit, nog zuiniger maar vereist isolatie en elektrisch vermogen.'],
  ['vraag' => 'Kan ik van HR-ketel overstappen naar warmtepomp later?',
   'antwoord' => 'Ja! HR-ketel nu (goedkoop), warmtepomp over 10 jaar (goede investering dan). Hybride is een tussenstap — u kunt telkens upgraden zonder volledig systeem opnieuw.'],
  ['vraag' => 'Hoe lang duurt cv-ketel vervangen?',
   'antwoord' => 'HR-ketel: meestal 1–2 dagen (plug-and-play). Hybride/warmtepomp: 2–5 dagen (extra werk, radiators/elektra). Geen gas-onderbreking van meer dan 1 dag.'],
];

include $root . 'includes/head.php';
include $root . 'includes/nav.php';
include $root . 'includes/breadcrumb.php';

// ── Hero
$hero_variant  = 'sub';
$hero_bg       = '/images/hero-verduurzaming-hub.jpg';
$hero_eyebrow  = 'Kennisbank';
$hero_titel    = 'CV-ketel vervangen: alle opties. <em>Van gas naar groen.</em>';
$hero_lead     = 'Uw CV-ketel is aan vervanging toe? U hebt keuzes: een nieuwe HR-ketel (snel, goedkoop), hybride (gas + electric), of volledig over op warmtepomp. Lees alles over kosten, subsidies en wat het beste voor u is.';
$hero_usps     = [];
$hero_cta      = 'Plan een adviesgesprek →';
$hero_cta_url  = '/#contact';
$hero_cta2     = '';
$hero_cta2_url = '';
include $root . 'includes/hero.php';
include $root . 'includes/trust.php';

// ── Opties vergelijken
$two_col_variant   = 'wit';
$two_col_label     = 'Keuze';
$two_col_titel     = 'Drie opties: HR, Hybride, of Warmtepomp';
$two_col_links     = '<p>Bij vervangen van uw CV-ketel hebt u drie richtingen:</p>
<p><strong>1. Nieuwe HR-ketel:</strong> Upgrade uw huidige gasketel naar modern hoge-rendement model. Snel, goedkoop, weinig gedoe. Blijft gas gebruiken.</p>
<p><strong>2. Hybride warmtepomp:</strong> Combinatie van elektrisch (warmtepomp) voor normale dagen + gasketel voor piekbelasting/winter. Best of both worlds: minder gas, elektrisch voordeel, veilig.</p>
<p><strong>3. Volledig warmtepomp:</strong> Compleet weg van gas, 100% elektrisch. Schoon, laagste operationele kosten, maar vereist goede isolatie en vermogen.</p>';
$two_col_cta       = [];
$two_col_rechts    = '<ul class="checklist">
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>HR: snelle upgrade</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Hybride: transitie-optie</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Warmtepomp: toekomstbestendig</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Keuze hangt af van isolatie</span></li>
</ul>';
include $root . 'includes/components/section-two-col.php';
unset($two_col_variant, $two_col_label, $two_col_titel, $two_col_omgekeerd, $two_col_links, $two_col_cta, $two_col_rechts);

// ── Types ketels
$kaarten_variant = 'grijs';
$kaarten_label   = 'Opties';
$kaarten_titel   = 'Vergelijking: HR vs. Hybride vs. Warmtepomp';
$kaarten_intro   = 'Drie wegen voor warmte. Elk met eigen voor- en nadelen.';
$kaarten_cols    = 3;
$kaarten_items   = [
  [
    'titel'     => 'HR-Ketel',
    'icoon'     => '🔥',
    'badge'     => 'Budget',
    'tekst'     => 'Alleen gas, hoog rendement (90%+). Simpel, plug-and-play. Blijft afhankelijk van gas. Geen subsidie.',
    'prijsrijen' => [
      ['label' => 'Kosten',             'bedrag' => '€ 1.500–€ 2.500'],
      ['label' => 'Subsidie',           'bedrag' => '€ 0 (geen)'],
      ['label' => 'Rendement',          'bedrag' => '90–95%'],
    ],
  ],
  [
    'titel'     => 'Hybride Warmtepomp',
    'icoon'     => '⚡🔥',
    'badge'     => 'Balans',
    'tekst'     => 'Gas + elektriciteit. Flexibel, minder gas. Veilig backup. Goed compromis voor minder-geisoleerde huizen.',
    'prijsrijen' => [
      ['label' => 'Kosten',             'bedrag' => '€ 3.000–€ 7.000'],
      ['label' => 'ISDE-subsidie',      'bedrag' => '€ 2.125–€ 3.600'],
      ['label' => 'Rendement totaal',   'bedrag' => '95%+'],
    ],
  ],
  [
    'titel'     => 'Volledig Warmtepomp',
    'icoon'     => '⚡',
    'badge'     => 'Toekomst',
    'tekst'     => 'Alleen elektriciteit, geen gas meer. Schoon, laagste CO2. Vereist isolatie + elektra-capaciteit.',
    'prijsrijen' => [
      ['label' => 'Kosten',             'bedrag' => '€ 3.000–€ 10.000'],
      ['label' => 'ISDE-subsidie',      'bedrag' => '€ 2.125–€ 4.400'],
      ['label' => 'Rendement (COP)',    'bedrag' => '3–5'],
    ],
  ],
];
include $root . 'includes/components/section-kaarten.php';
unset($kaarten_variant, $kaarten_label, $kaarten_titel, $kaarten_intro, $kaarten_cols, $kaarten_items);

// ── HR-Ketel
$two_col_variant   = 'wit';
$two_col_label     = 'Optie 1';
$two_col_titel     = 'HR-Ketel: simpel en voordelig';
$two_col_links     = '<p><strong>Wat:</strong> Nieuwe gasketel met condensatietechnologie. Recupereert warmte uit rookgassen — dus hoger rendement (90–95%).</p>
<p><strong>Kosten:</strong> €1.500–€2.500 installatie + ketel.</p>
<p><strong>Voordelen:</strong> Snel en goedkoop. Werkt als drop-in vervanging. Weinig gedoe. Jaarlijks 5–10% besparing op gasverbruik.</p>
<p><strong>Nadelen:</strong> Blijft gas gebruiken. Geen subsidie. Gasprijzen stijgen — op termijn minder voordelig.</p>
<p><strong>Geschikt voor:</strong> Budget-conscious, niet-geïsoleerd huis, risico-avers. Interim-oplossing.</p>';
$two_col_cta       = [];
$two_col_rechts    = '<ul class="checklist">
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>€1.500–€2.500</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Snel geïnstalleerd</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>90–95% rendement</span></li>
  <li class="checklist__item"><span class="checklist__vink">✗</span><span>Geen subsidie</span></li>
  <li class="checklist__item"><span class="checklist__vink">✗</span><span>Gasprijzen stijgen</span></li>
</ul>';
include $root . 'includes/components/section-two-col.php';
unset($two_col_variant, $two_col_label, $two_col_titel, $two_col_omgekeerd, $two_col_links, $two_col_cta, $two_col_rechts);

// ── Hybride
$two_col_variant   = 'grijs';
$two_col_label     = 'Optie 2';
$two_col_titel     = 'Hybride Warmtepomp: beste balans';
$two_col_links     = '<p><strong>Wat:</strong> Warmtepomp (elektriciteit) gekoppeld aan uw bestaande gasketel. Warmtepomp neemt normale dag-belasting, gasketel springt in bij extreme kou.</p>
<p><strong>Kosten:</strong> €3.000–€7.000 (warmtepomp-eenheid + montage).</p>
<p><strong>Voordelen:</strong> 40–60% minder gas gebruik. ISDE-subsidie €2.125–€3.600. Laag risico (gas-backup). Werkt ook in slechter geïsoleerde huizen.</p>
<p><strong>Nadelen:</strong> Nog steeds gas (maar veel minder). Elektriciteitsrekening omhoog.</p>
<p><strong>Geschikt voor:</strong> Gemiddeld geïsoleerd huis, wil besparen en subsidie, wil risico minimaliseren.</p>';
$two_col_cta       = ['tekst' => 'Meer over hybride →', 'url' => '/kennisbank/warmtepomp/', 'stijl' => 'primair'];
$two_col_rechts    = '<ul class="checklist">
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>€3.000–€7.000</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>40–60% minder gas</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>ISDE €2.125–€3.600</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Gas-backup veilig</span></li>
  <li class="checklist__item"><span class="checklist__vink">-</span><span>Elektra omhoog</span></li>
</ul>';
include $root . 'includes/components/section-two-col.php';
unset($two_col_variant, $two_col_label, $two_col_titel, $two_col_omgekeerd, $two_col_links, $two_col_cta, $two_col_rechts);

// ── Volledig warmtepomp
$two_col_variant   = 'wit';
$two_col_label     = 'Optie 3';
$two_col_titel     = 'Volledig Warmtepomp: toekomstbestendig';
$two_col_links     = '<p><strong>Wat:</strong> Gasketel volledig vervangen door warmtepomp. Alleen elektriciteit voor verwarming en warm water.</p>
<p><strong>Kosten:</strong> €3.000–€10.000 (warmtepomp + radiators/upgrade + elektra).</p>
<p><strong>Voordelen:</strong> Geen gas meer (schoon). Laagste operationele kosten op lange termijn. ISDE-subsidie €2.125–€4.400. Toekomstbestendig.</p>
<p><strong>Nadelen:</strong> Hogere investeringslast. Vereist goed geïsoleerde woning of hybride fasen. Elektrisch vermogen moet beschikbaar zijn.</p>
<p><strong>Geschikt voor:</strong> Goed geïsoleerd huis, wil geen gas meer, lange-termijn-denker, prioriteit duurzaamheid.</p>';
$two_col_cta       = ['tekst' => 'Meer over warmtepomp →', 'url' => '/kennisbank/warmtepomp/', 'stijl' => 'primair'];
$two_col_rechts    = '<ul class="checklist">
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>€3.000–€10.000</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Geen gas (schoon)</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>ISDE €2.125–€4.400</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Laagste kosten langetermijn</span></li>
  <li class="checklist__item"><span class="checklist__vink">✗</span><span>Vereist isolatie + elektra</span></li>
</ul>';
include $root . 'includes/components/section-two-col.php';
unset($two_col_variant, $two_col_label, $two_col_titel, $two_col_omgekeerd, $two_col_links, $two_col_cta, $two_col_rechts);

// ── Subsidie
$two_col_variant   = 'grijs';
$two_col_label     = 'Financiering';
$two_col_titel     = 'ISDE-Subsidie en terugverdientijd';
$two_col_links     = '<p><strong>HR-ketel:</strong> €0 subsidie. Terugverdientijd: 10+ jaar (alleen gas-besparing).</p>
<p><strong>Hybride warmtepomp:</strong> €2.125–€3.600 ISDE. Terugverdientijd: 5–8 jaar.</p>
<p><strong>Volledig warmtepomp:</strong> €2.125–€4.400 ISDE. Terugverdientijd: 8–12 jaar (sterk afhankelijk van isolatie).</p>
<p><strong>Dubbeling regel:</strong> Combineer isolatie + warmtepomp binnen 24 maanden → dubbele subsidie!</p>
<p><strong>Warmtefonds:</strong> Laagrentende lening beschikbaar voor alle opties.</p>';
$two_col_cta       = ['tekst' => 'Meer over subsidies →', 'url' => '/verduurzaming-subsidie/', 'stijl' => 'primair'];
$two_col_rechts    = '<ul class="checklist">
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>HR: geen subsidie</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Hybride: €2.125–€3.600</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Warmtepomp: €2.125–€4.400</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Doubling regel: +subsidie</span></li>
</ul>';
include $root . 'includes/components/section-two-col.php';
unset($two_col_variant, $two_col_label, $two_col_titel, $two_col_omgekeerd, $two_col_links, $two_col_cta, $two_col_rechts);

// ── Hoe kiezen?
$two_col_variant   = 'wit';
$two_col_label     = 'Keuzehelper';
$two_col_titel     = 'Hoe kies je?';
$two_col_links     = '<p><strong>Check uw situatie:</strong></p>
<p><strong>1. Isolatiegraad:</strong> Label A/B geïsoleerd? → warmtepomp full is goed. Label C/D/E? → hybride beter. Label F/G slecht? → HR-ketel + isolatie eerst.</p>
<p><strong>2. Budget:</strong> Weinig? → HR-ketel nu, warmtepomp later. Meer? → hybride of volledig meteen.</p>
<p><strong>3. Toekomstverwachting:</strong> Gas duurder? → weg van gas is slim. Risico-avers? → hybride hybrid middenpositie.</p>
<p><strong>STAP Energie adviseert u op basis van uw huistype en doelen — geen vooroordeel.</strong></p>';
$two_col_cta       = ['tekst' => 'Plan adviesgesprek →', 'url' => '/#contact', 'stijl' => 'primair'];
$two_col_rechts    = '<ul class="checklist">
  <li class="checklist__item"><span class="checklist__vink">1</span><span>Check isolatie (label)</span></li>
  <li class="checklist__item"><span class="checklist__vink">2</span><span>Bepaal budget</span></li>
  <li class="checklist__item"><span class="checklist__vink">3</span><span>Bekijk toekomst (gas/elektra)</span></li>
  <li class="checklist__item"><span class="checklist__vink">4</span><span>Adviseur helpt verder</span></li>
</ul>';
include $root . 'includes/components/section-two-col.php';
unset($two_col_variant, $two_col_label, $two_col_titel, $two_col_omgekeerd, $two_col_links, $two_col_cta, $two_col_rechts);

include $root . 'includes/faq.php';
include $root . 'includes/cta.php';
include $root . 'includes/footer.php';
?>
