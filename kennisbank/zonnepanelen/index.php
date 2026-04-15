<?php
/**
 * kennisbank/zonnepanelen/index.php
 * Kennisartikel: Zonnepanelen
 */
$root        = dirname(dirname(dirname(__FILE__))) . '/';
$title       = 'Zonnepanelen voor Uw Huis | Kosten, Rendement & Saldering | STAP Energie';
$description = 'Zonnepanelen: 8–12 panelen, €5.000–€8.000, terugverdiening 7–9 jaar. Btw-nultarief. Salderingsregeling fasering. Combinatie met thuisbatterij.';
$canonical   = 'https://stapenergie.nl/kennisbank/zonnepanelen/';

$breadcrumbs = [
  ['label' => 'Home',       'url' => '/'],
  ['label' => 'Kennisbank', 'url' => '/kennisbank/'],
  ['label' => 'Zonnepanelen'],
];

$cta_titel     = 'Zonnepanelen geschikt voor u?';
$cta_subtitel  = 'Plan een vrijblijvend adviesgesprek. Wij beginnen met uw situatie.';
$cta_knop      = 'Plan een adviesgesprek →';
$cta_knop_url  = '/#contact';
$cta_garanties = ['15+ jaar ervaring in de energiemarkt', 'Geen productbelang', 'Reactie binnen twee werkdagen'];

$faq_label = 'Veelgestelde vragen';
$faq_titel = 'Veelgestelde vragen over zonnepanelen';
$faq_items = [
  ['vraag' => 'Hoeveel panelen heeft een gemiddeld huis nodig?',
   'antwoord' => 'Een typisch Nederlands eengezinshuis heeft 8–12 zonnepanelen nodig (3–4 kWp vermogen). Dit is afhankelijk van dak, oriëntatie, schaduw en energieverbruik. STAP Energie doet een site-analyse voor u.'],
  ['vraag' => 'Wat is de salderingsregeling en hoe verandert die?',
   'antwoord' => 'Saldering betekent: zonne-opbrengst wordt verrekend met stroomverbruik uit het net (tegen dezelfde prijs). Dit geldt nu voor particulieren. Vanaf 2027 geldt deels tegoed tegen lagere nettarief. Volledig einde 2030. Dit maakt thuisbatterij steeds interessanter.'],
  ['vraag' => 'Hoeveel opbrengst per jaar?',
   'antwoord' => 'Gemiddeld 900–1.100 kWh per kWp per jaar. Bij 4 kWp dus 3.600–4.400 kWh/jaar. Dit is 40–50% van jaarlijks huishoudverbruik (7.000–9.000 kWh). Met thuisbatterij hoger percentage zelf-gebruikt.'],
  ['vraag' => 'Werken zonnepanelen ook in winter of bewolkt weer?',
   'antwoord' => 'Ja, zonnepanelen produceren ook bij bewolking, maar 75% minder dan bij zon. In winter minder productie (korte dagen, lage zon). Summer/autumn is productie piek (maart–september).'],
  ['vraag' => 'Kan ik zonnepanelen zelf installeren?',
   'antwoord' => 'Technisch ja (DIY-panelen bestaan), maar NOT-aanbevolen: netaansluiting vereist gecertificeerde installateur, garantie vervalt, risico op elektrische onveiligheid. Beter: professioneel laten doen.'],
];

include $root . 'includes/head.php';
include $root . 'includes/nav.php';
include $root . 'includes/breadcrumb.php';

// ── Hero
$hero_variant  = 'sub';
$hero_bg       = '/images/hero-verduurzaming-hub.jpg';
$hero_eyebrow  = 'Kennisbank';
$hero_titel    = 'Zonnepanelen: uw eigen elektriciteit. <em>Gratis en schoon.</em>';
$hero_lead     = 'Zonnepanelen zetten zonneschijn om in stroom. Voor een typisch huis zijn 8–12 panelen nodig, kost €5.000–€8.000, en terugbetaald zich in 7–9 jaar. Daarna zuivere winst. Lees hier alles over kosten, opbrengst en combinaties.';
$hero_usps     = [];
$hero_cta      = 'Plan een adviesgesprek →';
$hero_cta_url  = '/#contact';
$hero_cta2     = '';
$hero_cta2_url = '';
include $root . 'includes/hero.php';
include $root . 'includes/trust.php';

// ── Hoe werken zonnepanelen
$two_col_variant   = 'wit';
$two_col_label     = 'Werkingsprincipe';
$two_col_titel     = 'Hoe werken zonnepanelen?';
$two_col_links     = '<p>Een zonnepaneel bevat siliciumcellen die fotonen (licht) omzetten in elektriciteit. Dit gebeurt direct — geen warmteverlies.</p>
<p><strong>Systeem:</strong> Panelen op dak → inverter (wisselstroom) → huishoudkast → gebruik in huis of teruglevering naar net.</p>
<p><strong>Opbrengst:</strong> Gemiddeld 900–1.100 kWh per kWp per jaar in Nederland. Veel in zomer (zon hoog), minder in winter (zon laag).</p>
<p><strong>Met batterij:</strong> 's Avonds en 's nachts verbruikt u opgeslagen energie ipv. duur stroom van net. Dit verhoogt rendement aanzienlijk.</p>';
$two_col_cta       = [];
$two_col_rechts    = '<ul class="checklist">
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Direkte omzetting zon → elektriciteit</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Geen onderhoud nodig (zelf-schoon)</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>25–30 jaar rendabel</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Efficiëntie modules: 20–22%</span></li>
</ul>';
include $root . 'includes/components/section-two-col.php';
unset($two_col_variant, $two_col_label, $two_col_titel, $two_col_omgekeerd, $two_col_links, $two_col_cta, $two_col_rechts);

// ── Systeem opzet
$kaarten_variant = 'grijs';
$kaarten_label   = 'Onderdelen';
$kaarten_titel   = 'Componenten van een zonnepanelen-systeem';
$kaarten_intro   = 'Een compleet systeem bestaat uit meerdere onderdelen. Elk speelt een rol in veiligheid en rendement.';
$kaarten_cols    = 3;
$kaarten_items   = [
  [
    'titel'     => 'Zonnepanelen',
    'icoon'     => '⚡',
    'badge'     => 'Stroom',
    'tekst'     => 'Siliciumcellen op aluminum frame. Typisch 400–450 Watt per paneel. Gebruiksduur 25–30 jaar. Terug betalen zich na 8–10 jaar.',
    'prijsrijen' => [
      ['label' => 'Prijs per paneel',  'bedrag' => '€ 200–€ 250'],
      ['label' => 'Efficiëntie',       'bedrag' => '20–22%'],
    ],
  ],
  [
    'titel'     => 'Inverter',
    'icoon'     => '🔌',
    'badge'     => 'Omzetter',
    'tekst'     => 'Zet gelijkstroom (DC) van panelen om in wisselstroom (AC) voor huishoudgebruik. Essentieel. Levensduur 10–15 jaar.',
    'prijsrijen' => [
      ['label' => 'Prijs',             'bedrag' => '€ 1.500–€ 2.500'],
      ['label' => 'Efficiëntie',       'bedrag' => '97–98%'],
    ],
  ],
  [
    'titel'     => 'Monitoring & kabels',
    'icoon'     => '📊',
    'badge'     => 'Controle',
    'tekst'     => 'Monitoring-app laat opbrengst zien in real-time. DC/AC kabels, breakers en connectoren zorgen voor veiligheid.',
    'prijsrijen' => [
      ['label' => 'Kosten',            'bedrag' => '€ 500–€ 1.000'],
      ['label' => 'Monitoring',        'bedrag' => 'Inbegrepen'],
    ],
  ],
];
include $root . 'includes/components/section-kaarten.php';
unset($kaarten_variant, $kaarten_label, $kaarten_titel, $kaarten_intro, $kaarten_cols, $kaarten_items);

// ── Kosten en besparing
$two_col_variant   = 'wit';
$two_col_label     = 'Investering';
$two_col_titel     = 'Wat kost een zonnepanelen-systeem?';
$two_col_links     = '<p><strong>Typisch 4 kWp-systeem (10 panelen):</strong></p>
<p>Panelen: 10 × €225 = €2.250<br>
Inverter: €2.000<br>
Montage & kabels: €1.000<br>
Monitoring: €500<br>
<strong>Totaal: €5.750 (gemiddeld €5.000–€8.000 afhankelijk van kwaliteit)</strong></p>
<p><strong>Geen ISDE-subsidie (meer).</strong> Maar wel btw-nultarief (voordeel ≈€1.000).</p>
<p><strong>Terugverdientijd:</strong> 7–9 jaar gemiddeld. Na terugbetaling 20+ jaar zuivere winst.</p>';
$two_col_cta       = [];
$two_col_rechts    = '<ul class="checklist">
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>4 kWp: €5.000–€8.000</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Btw-nultarief (voordeel ≈€1.000)</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Geen ISDE-subsidie meer</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Terugverdientijd 7–9 jaar</span></li>
</ul>';
include $root . 'includes/components/section-two-col.php';
unset($two_col_variant, $two_col_label, $two_col_titel, $two_col_omgekeerd, $two_col_links, $two_col_cta, $two_col_rechts);

// ── Opbrengst
$two_col_variant   = 'grijs';
$two_col_label     = 'Rendement';
$two_col_titel     = 'Hoeveel stroom produceert u?';
$two_col_links     = '<p><strong>Gemiddelde opbrengst:</strong> 900–1.100 kWh per kWp per jaar in Nederland.</p>
<p><strong>4 kWp systeem:</strong> 3.600–4.400 kWh per jaar.</p>
<p><strong>Huishouden verbruikt:</strong> typisch 7.000–9.000 kWh per jaar.</p>
<p><strong>Zelf-gebruik zonder batterij:</strong> circa 30–40% (rest teruggelevert).</p>
<p><strong>Met thuisbatterij:</strong> zelf-gebruik omhoog tot 60–70%, dus meer voordeel.</p>
<p><strong>Locatie telt:</strong> Zuid-Nederland: 5–10% meer. Noord: 5–10% minder. Ook dak-oriëntatie en schaduw zijn belangrijk.</p>';
$two_col_cta       = [];
$two_col_rechts    = '<ul class="checklist">
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>900–1.100 kWh/kWp/jaar (gemiddeld)</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Zelf-gebruik: 30–40% zonder batterij</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Met batterij: 60–70% zelf-gebruik</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Locatie & oriëntatie cruciaal</span></li>
</ul>';
include $root . 'includes/components/section-two-col.php';
unset($two_col_variant, $two_col_label, $two_col_titel, $two_col_omgekeerd, $two_col_links, $two_col_cta, $two_col_rechts);

// ── Salderingsregeling
$two_col_variant   = 'wit';
$two_col_label     = 'Regelgeving';
$two_col_titel     = 'De salderingsregeling — fasering 2027–2030';
$two_col_links     = '<p><strong>Saldering huishoudens (nu):</strong> Zonneopbrengst teruggeleverd tegen dezelfde tarief als u koopt (full netting). Dit is voordelig.</p>
<p><strong>Verandering 2027:</strong> Teruggeleverde stroom krijgt lagere prijs (deels saldering). Dit vermindert rendement.</p>
<p><strong>2030 en verder:</strong> Volledige einde saldering. Teruggeleide stroom tegen veel lager markt-tarief.</p>
<p><strong>Gevolg:</strong> Nu zonnepanelen nog zeer interessant. Met batterij om zelf meer te gebruiken, nog beter. Uitstel verkleint voordeel.</p>';
$two_col_cta       = ['tekst' => 'Meer over subsidies →', 'url' => '/verduurzaming-subsidie/', 'stijl' => 'primair'];
$two_col_rechts    = '<ul class="checklist">
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Nu: volledige saldering</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>2027: deels saldering (lagere prijs)</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>2030: einde saldering</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Batterij = voordeel zelf-gebruik</span></li>
</ul>';
include $root . 'includes/components/section-two-col.php';
unset($two_col_variant, $two_col_label, $two_col_titel, $two_col_omgekeerd, $two_col_links, $two_col_cta, $two_col_rechts);

// ── Combinaties
$two_col_variant   = 'grijs';
$two_col_label     = 'Synergie';
$two_col_titel     = 'Zonnepanelen + thuisbatterij = optimaal';
$two_col_links     = '<p><strong>Thuisbatterij combineert goed met zonnepanelen:</strong></p>
<p><strong>Zonder batterij:</strong> 30–40% zelf-gebruikt, rest naar net (tegen lagere opbrengst bij salderingseinde).</p>
<p><strong>Met batterij:</strong> Zonne-energie 's middags opgeslagen, 's avonds/nacht gebruikt → 60–70% zelf-gebruik, veel meer voordeel.</p>
<p><strong>EV-laden + zonnepanelen:</strong> Ook interessant: auto 's middags laden met zonneenergie, geen netbelasting.</p>
<p><strong>EMS (Energy Management System):</strong> Optimaliseert zonneopbrengst, batterijladen, EV-laden en verwarming voor laagste kosten.</p>';
$two_col_cta       = [];
$two_col_rechts    = '<ul class="checklist">
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Batterij: +30% zelf-gebruik</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>EV laden met zonne-energie</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>EMS optimaliseert alles</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Synergiewinst: fors voordeel</span></li>
</ul>';
include $root . 'includes/components/section-two-col.php';
unset($two_col_variant, $two_col_label, $två_col_titel, $two_col_omgekeerd, $two_col_links, $two_col_cta, $two_col_rechts);

// ── Dak en situatie
$two_col_variant   = 'wit';
$two_col_label     = 'Voorzorg';
$two_col_titel     = 'Is uw dak geschikt?';
$two_col_links     = '<p><strong>Ideale situatie:</strong></p>
<p>Zuid-oriëntering (meeste zon)<br>
Minimaal 3–4 m² ruimte<br>
Geen schaduw van bomen/buren<br>
Dak ouder dan 10 jaar? → eerst vervangen<br>
Staaldak? → onderbeaming nodig</p>
<p><strong>Als niet ideaal:</strong> STAP Energie doet site-analyse. Ook west/oost-oriëntatie kan werken, alleen iets minder opbrengst (20–30%).</p>
<p><strong>Appartement?</strong> Mogelijk op balkon (klein systeem), maar meestal niet rendabel. Gebouw-zonnepanelen soms beter.</p>';
$two_col_cta       = ['tekst' => 'Plan adviesgesprek →', 'url' => '/#contact', 'stijl' => 'primair'];
$two_col_rechts    = '<ul class="checklist">
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Zuid ideaal, west/oost ook goed</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Minimaal 3–4 m² ruimte</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Geen schaduw van bomen</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Dak in goede staat</span></li>
</ul>';
include $root . 'includes/components/section-two-col.php';
unset($two_col_variant, $two_col_label, $two_col_titel, $two_col_omgekeerd, $two_col_links, $two_col_cta, $two_col_rechts);

include $root . 'includes/faq.php';
include $root . 'includes/cta.php';
include $root . 'includes/footer.php';
?>
