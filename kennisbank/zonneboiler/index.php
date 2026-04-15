<?php
/**
 * kennisbank/zonneboiler/index.php
 * Kennisartikel: Zonneboiler
 */
$root        = dirname(dirname(dirname(__FILE__))) . '/';
$title       = 'Zonneboiler voor Warm Water | ISDE-Subsidie & Kosten | STAP Energie';
$description = 'Zonneboiler: 50–60% minder gas voor warm water. €1.500–€3.500. ISDE-subsidie €300+. PVT-panelen ook mogelijk. Combinatie met zonnepanelen.';
$canonical   = 'https://stapenergie.nl/kennisbank/zonneboiler/';

$breadcrumbs = [
  ['label' => 'Home',       'url' => '/'],
  ['label' => 'Kennisbank', 'url' => '/kennisbank/'],
  ['label' => 'Zonneboiler'],
];

$cta_titel     = 'Zonneboiler geschikt voor u?';
$cta_subtitel  = 'Plan een vrijblijvend adviesgesprek. Wij beginnen met uw situatie.';
$cta_knop      = 'Plan een adviesgesprek →';
$cta_knop_url  = '/#contact';
$cta_garanties = ['15+ jaar ervaring in de energiemarkt', 'Geen productbelang', 'Reactie binnen twee werkdagen'];

$faq_label = 'Veelgestelde vragen';
$faq_titel = 'Veelgestelde vragen over zonneboilers';
$faq_items = [
  ['vraag' => 'Hoeveel percent gas bespaar ik met een zonneboiler?',
   'antwoord' => 'Gemiddeld 50–60% van gasverbruik voor warm water. In zomer bijna 100%, in winter 20–30%. Jaarlijks gemiddeld dus rond 50%.'],
  ['vraag' => 'Wat is het verschil tussen zonneboiler en PVT-panelen?',
   'antwoord' => 'Zonneboiler gebruikt warmte direct via vloeistof in buizen. PVT-panelen (Photovoltaic-Thermal) doen zowel elektriciteit (stroom) en warmte in één paneel. PVT is efficiënter totaal, maar duurder.'],
  ['vraag' => 'Kan ik zonneboiler combineren met warmtepomp?',
   'antwoord' => 'Ja! Zonneboiler wärmt water op, warmtepomp kan dit water verder verwarmen of gebruiken voor verwarming. Goede synergie, beide gunstig subsidie.'],
  ['vraag' => 'Hoeveel warmwatergebruik is nodig?',
   'antwoord' => 'Zonneboiler loont best voor gezinnen met hoog dagelijks warm-watergebruik (douche, bad, wasmachine). Kleine gezinnen/alleenstaanden: minder rendement.'],
  ['vraag' => 'Hoe oud moet mijn huisinstallatie zijn?',
   'antwoord' => 'Zonneboiler werkt met elke boiler. Moet wel kompatibel (serpentijn of inhoud). Oude cv-installaties kunnen aangepast worden (kosten ±€500). STAP Energie adviseert op basis van uw systeem.'],
];

include $root . 'includes/head.php';
include $root . 'includes/nav.php';
include $root . 'includes/breadcrumb.php';

// ── Hero
$hero_variant  = 'sub';
$hero_bg       = '/images/hero-verduurzaming-hub.jpg';
$hero_eyebrow  = 'Kennisbank';
$hero_titel    = 'Zonneboiler: kosteloos warm water. <em>Door de zon verwarmd.</em>';
$hero_lead     = 'Een zonneboiler haalt warmte uit zonneschijn en warmt uw water op. Dit bespaard 50–60% gas voor warm water. Kost €1.500–€3.500 en wordt terugbetaald in 5–8 jaar. Ideaal als u al zonnepanelen hebt of veel warm water gebruikt.';
$hero_usps     = [];
$hero_cta      = 'Plan een adviesgesprek →';
$hero_cta_url  = '/#contact';
$hero_cta2     = '';
$hero_cta2_url = '';
include $root . 'includes/hero.php';
include $root . 'includes/trust.php';

// ── Hoe werkt het
$two_col_variant   = 'wit';
$two_col_label     = 'Werkingsprincipe';
$two_col_titel     = 'Hoe werkt een zonneboiler?';
$two_col_links     = '<p>Een zonneboiler bestaat uit zonnecollectoren op het dak (niet te verwarren met zonnepanelen — dit zijn thermische panelen, geen elektriciteit).</p>
<p><strong>Proces:</strong> Zonnestraling warmt vloeistof in de collector op. Deze warme vloeistof stroomt naar een boilertenk waar het water opwarmt via een warmtewisselaar (serpentijn).</p>
<p><strong>Voordeel:</strong> Directe warmte-overdracht, geen omzettingsverlies. Efficiëntie: 60–80% van inkomende zonnenergie.</p>
<p><strong>Winter/nacht:</strong> Elektrische verwarming of gasketel springt in. Dus u hebt altijd warm water.</p>';
$two_col_cta       = [];
$two_col_rechts    = '<ul class="checklist">
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Directe warmte van zon</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>50–60% minder gas/elektriciteit</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Backup voor winter</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>20–30 jaar levensduur</span></li>
</ul>';
include $root . 'includes/components/section-two-col.php';
unset($two_col_variant, $two_col_label, $två_col_titel, $two_col_omgekeerd, $two_col_links, $two_col_cta, $two_col_rechts);

// ── Types systemen
$kaarten_variant = 'grijs';
$kaarten_label   = 'Types';
$kaarten_titel   = 'Verschillende zonneboiler-systemen';
$kaarten_intro   = 'Er zijn enkele varianten. Welke past best hangt af van uw situatie.';
$kaarten_cols    = 2;
$kaarten_items   = [
  [
    'titel'     => 'Thermische zonneboiler',
    'icoon'     => '☀️',
    'badge'     => 'Klassiek',
    'tekst'     => 'Collectoren warmen water op. Goedkoop, betrouwbaar, veel leveranciers. Niet voor elektriciteit (anders zonnepanelen).',
    'prijsrijen' => [
      ['label' => 'Kosten',             'bedrag' => '€ 1.500–€ 3.000'],
      ['label' => 'ISDE-subsidie',      'bedrag' => '€ 300–€ 600'],
    ],
  ],
  [
    'titel'     => 'PVT-panelen (Hybrid)',
    'icoon'     => '⚡☀️',
    'badge'     => 'Modern',
    'tekst'     => 'Elektriciteit + warmte in één paneel. Meer rendement totaal, maar duurder. Goed voor wie alles wil (stroom + warm water).',
    'prijsrijen' => [
      ['label' => 'Kosten',             'bedrag' => '€ 5.000–€ 8.000'],
      ['label' => 'ISDE-subsidie',      'bedrag' => '€ 1.000–€ 2.000'],
    ],
  ],
];
include $root . 'includes/components/section-kaarten.php';
unset($kaarten_variant, $kaarten_label, $kaarten_titel, $kaarten_intro, $kaarten_cols, $kaarten_items);

// ── Kosten
$two_col_variant   = 'wit';
$two_col_label     = 'Investering';
$two_col_titel     = 'Wat kost een zonneboiler?';
$two_col_links     = '<p><strong>Thermische zonneboiler</strong> (typisch 4–6 m² collector + 300–500L boiler):</p>
<p>Collector(s): €1.000–€1.500<br>
Boiler & warmtewisselaar: €1.000–€1.500<br>
Installatie & aansluiting: €500–€1.000<br>
<strong>Totaal: €2.500–€4.000</strong> (gemiddeld €3.000)</p>
<p><strong>Terugverdientijd:</strong> 5–8 jaar (bij goed gasverbruik). Veel langer levensduur (25+ jaar).</p>
<p><strong>ISDE-subsidie:</strong> €300–€600 beschikbaar.</p>';
$two_col_cta       = ['tekst' => 'Meer over subsidies →', 'url' => '/verduurzaming-subsidie/', 'stijl' => 'primair'];
$two_col_rechts    = '<ul class="checklist">
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Thermisch: €2.500–€4.000</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>PVT hybrid: €5.000–€8.000</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>ISDE-subsidie €300–€2.000</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Terugverdien 5–8 jaar</span></li>
</ul>';
include $root . 'includes/components/section-two-col.php';
unset($two_col_variant, $two_col_label, $två_col_titel, $two_col_omgekeerd, $two_col_links, $two_col_cta, $two_col_rechts);

// ── Besparing
$two_col_variant   = 'grijs';
$two_col_label     = 'Rendement';
$two_col_titel     = 'Hoeveel bespaar ik?';
$two_col_links     = '<p><strong>Gemiddelde gasverbruik warm water:</strong> 1.000–1.500 m³ gas/jaar (typisch gezin).</p>
<p><strong>Met zonneboiler:</strong> Dit halveert naar 500–750 m³/jaar.</p>
<p><strong>In geld:</strong> Bij €2/m³ gasprijs = €500–€1.500 besparing per jaar.</p>
<p><strong>Seisoeneffect:</strong> Zomer 80–100% warm water van zon (vrijwel geen gas). Winter 20–30% (veel gas nodig). Jaargemiddeld: 50–60%.</p>
<p><strong>Bij combinatie warmtepomp:</strong> Warmtepomp kan zonneboiler-water verder verwarmen, extra efficiëntie.</p>';
$two_col_cta       = [];
$two_col_rechts    = '<ul class="checklist">
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>50–60% gas-besparing</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>€500–€1.500/jaar besparing</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Zomer nagenoeg 100% zonneenergy</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Winter gasketel back-up</span></li>
</ul>';
include $root . 'includes/components/section-two-col.php';
unset($two_col_variant, $two_col_label, $två_col_titel, $two_col_omgekeerd, $two_col_links, $two_col_cta, $two_col_rechts);

// ── Combinatie zonnepanelen
$two_col_variant   = 'wit';
$two_col_label     = 'Synergie';
$two_col_titel     = 'Zonneboiler + zonnepanelen';
$two_col_links     = '<p><strong>Goede combinatie:</strong> Als u al zonnepanelen hebt (of plant), een zonneboiler toevoegen vergroot voordeel.</p>
<p><strong>Totale energiebesparing:</strong> Zonnepanelen voor elektriciteit + zonneboiler voor warm water = veel minder afhankelijk van het net.</p>
<p><strong>Elektrische waterverwarming in zomer:</strong> Zonneboiler levert warmte. Zonnepanelen leveren elektriciteit. Samen optimaal.</p>
<p><strong>Met batterij & EMS:</strong> Nog slimmer: EMS voert elektriciteit van zonnepanelen prioriteit warmwater, daarna rest.</p>';
$two_col_cta       = ['tekst' => 'Meer over zonnepanelen →', 'url' => '/kennisbank/zonnepanelen/', 'stijl' => 'primair'];
$two_col_rechts    = '<ul class="checklist">
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Zonneboiler + panelen = synergisch</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Totale energiebesparing hoog</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Warmte & elektriciteit afgedekt</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Met EMS, volledig geoptime</span></li>
</ul>';
include $root . 'includes/components/section-two-col.php';
unset($two_col_variant, $two_col_label, $två_col_titel, $two_col_omgekeerd, $two_col_links, $two_col_cta, $two_col_rechts);

// ── Voor wie geschikt?
$two_col_variant   = 'grijs';
$two_col_label     = 'Geschiktheid';
$two_col_titel     = 'Voor wie is een zonneboiler zinvol?';
$two_col_links     = '<p><strong>Ideaal als u:</strong></p>
<p>→ Veel warm water gebruikt (grote gezin, bad)<br>
→ Dak met ruimte voor collector (4–6 m²)<br>
→ Zuid/west-oriëntatie (veel zon)<br>
→ Huisinstallatie geschikt (boiler met serpentijn)<br>
→ Al zonnepanelen hebt (extra synergie)</p>
<p><strong>Minder voordeel bij:</strong> Alleenstaande/klein gezin (laag gasverbruik), noordelijk dak, veel schaduw, zeer nieuwe cv-installatie (efficiënt al), appartement.</p>';
$two_col_cta       = ['tekst' => 'Plan adviesgesprek →', 'url' => '/#contact', 'stijl' => 'primair'];
$two_col_rechts    = '<ul class="checklist">
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Groot gezin/veel warmwater</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Ruime dakruimte beschikbaar</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Zuid/west-oriëntatie</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Al zonnepanelen (of gepland)</span></li>
</ul>';
include $root . 'includes/components/section-two-col.php';
unset($two_col_variant, $two_col_label, $två_col_titel, $two_col_omgekeerd, $two_col_links, $two_col_cta, $two_col_rechts);

// ── Installatie & Onderhoud
$two_col_variant   = 'wit';
$two_col_label     = 'Praktijk';
$two_col_titel     = 'Installatie en onderhoud';
$two_col_links     = '<p><strong>Installatie duurt:</strong> 2–5 dagen (dakwerk, aansluiting, testen).</p>
<p><strong>Onderhoud:</strong> Minimaal — jaarlijks inspectie door monteur voldoende (€100–€150/jaar).</p>
<p><strong>Vervangingsinterval:</strong> 25–30 jaar. Collector kan korter slijten (koppelingen), maar meestal 20+ jaar standaard.</p>
<p><strong>Kale vervangingskosten:</strong> €1.500–€2.000 voor volledige collector-set na 25 jaar.</p>';
$two_col_cta       = [];
$two_col_rechts    = '<ul class="checklist">
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Installatie 2–5 dagen</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Jaarlijks onderhoudskosten ±€150</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Levensduur 25–30 jaar</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Zelden reparatie nodig</span></li>
</ul>';
include $root . 'includes/components/section-two-col.php';
unset($two_col_variant, $two_col_label, $två_col_titel, $two_col_omgekeerd, $two_col_links, $two_col_cta, $two_col_rechts);

include $root . 'includes/faq.php';
include $root . 'includes/cta.php';
include $root . 'includes/footer.php';
?>
