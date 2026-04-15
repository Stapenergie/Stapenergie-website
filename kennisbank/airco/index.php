<?php
/**
 * kennisbank/airco/index.php
 * Kennisartikel: Airco (warmte/koelvraag)
 */
$root        = dirname(dirname(dirname(__FILE__))) . '/';
$title       = 'Airco (Split-Systeem) | Verwarming & Koeling | STAP Energie';
$description = 'Airco split-systeem: COP 3–5 voor verwarming/koeling. €1.500–€3.500. Aanvulling op warmtepomp. Voor extra ruimtes of zomerse koeling.';
$canonical   = 'https://stapenergie.nl/kennisbank/airco/';

$breadcrumbs = [
  ['label' => 'Home',       'url' => '/'],
  ['label' => 'Kennisbank', 'url' => '/kennisbank/'],
  ['label' => 'Airco'],
];

$cta_titel     = 'Airco voor uw woning?';
$cta_subtitel  = 'Plan een vrijblijvend adviesgesprek. Wij beginnen met uw situatie.';
$cta_knop      = 'Plan een adviesgesprek →';
$cta_knop_url  = '/#contact';
$cta_garanties = ['15+ jaar ervaring in de energiemarkt', 'Geen productbelang', 'Reactie binnen twee werkdagen'];

$faq_label = 'Veelgestelde vragen';
$faq_titel = 'Veelgestelde vragen over airco';
$faq_items = [
  ['vraag' => 'Wat is het verschil tussen airco en warmtepomp?',
   'antwoord' => 'Beide werken op hetzelfde principe (lucht-lucht energie-uitwisseling). Verschil: warmtepomp is voor verwarming (winter), airco voor koeling (zomer). Moderne split-systemen doen beide. Technisch hetzelfde, functie verschilt.'],
  ['vraag' => 'Hoeveel stroom gebruikt airco?',
   'antwoord' => 'Bij COP 3–5 gebruikt airco 1 kWh stroom om 3–5 kWh warmte/koeling te leveren. Voor verwarming veel efficiënter dan elektrische verwarming. Voor koeling normaal (geen beter alternatief).'],
  ['vraag' => 'Is airco duur in onderhoud?',
   'antwoord' => 'Minimaal onderhoud: jaarlijkse inspectie, filters schoonmaken. Kosten ≈€100–€200/jaar. Zelden reparaties nodig. Levensduur: 15–20 jaar.'],
  ['vraag' => 'Kan ik airco combineren met warmtepomp?',
   'antwoord' => 'Ja. Warmtepomp voor hele huis, airco als aanvulling voor extra koeling (extra slaapkamer) of zomer. Goed combinatie, dubbele investering maar flexibiliteit.'],
  ['vraag' => 'Maakt airco geluid?',
   'antwoord' => 'Buitenunit maakt 25–35 dB (zacht) bij normaal gebruik. Alleen onder volbelasting luid. Binnenunit vrijwel stil. Geluidsbelasting meestal geen probleem.'],
];

include $root . 'includes/head.php';
include $root . 'includes/nav.php';
include $root . 'includes/breadcrumb.php';

// ── Hero
$hero_variant  = 'sub';
$hero_bg       = '/images/hero-verduurzaming-hub.jpg';
$hero_eyebrow  = 'Kennisbank';
$hero_titel    = 'Airco (split-systeem): <em>verwarming én koeling</em> in één toestel.';
$hero_lead     = 'Moderne split-systemen bieden zowel verwarming (winter) als koeling (zomer). Met COP 3–5 zeer efficiënt. €1.500–€3.500 per unit. Ideaal als aanvulling op warmtepomp of voor speciale ruimtes. Lees alles over types, kosten en geschiktheid.';
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
$two_col_titel     = 'Hoe werkt een split-systeem (airco)?';
$two_col_links     = '<p>Een split-systeem bestaat uit buitenunit en binnenunit met warmtepomp-technologie.</p>
<p><strong>Voor verwarming:</strong> Haalt warmte uit buitenlucht, brengt het naar binnen (zoals warmtepomp). COP 3–5.</p>
<p><strong>Voor koeling:</strong> Werkt omgekeerd — haalt warmte uit binnenluis, brengt het naar buiten (als koelkast).</p>
<p><strong>Verschil met centrale warmtepomp:</strong> Split-systeem werkt voor één ruimte (of meerdere units voor elk). Centrale warmtepomp voor hele huis. Beide dezelfde efficiëntie.</p>
<p><strong>Voordeel verwarming + koeling:</strong> Eén systeem voor beide functies — flexibel.</p>';
$two_col_cta       = [];
$two_col_rechts    = '<ul class="checklist">
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Verwarming + koeling in één</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>COP 3–5 (efficiënt)</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Voor één kamer/meerdere units</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Flexibel in gebruik</span></li>
</ul>';
include $root . 'includes/components/section-two-col.php';
unset($two_col_variant, $två_col_label, $två_col_titel, $two_col_omgekeerd, $two_col_links, $two_col_cta, $two_col_rechts);

// ── Types systemen
$kaarten_variant = 'grijs';
$kaarten_label   = 'Types';
$kaarten_titel   = 'Verschillende split-systemen';
$kaarten_intro   = 'Airco-systemen verschillen in vermogen en uitvoering.';
$kaarten_cols    = 3;
$kaarten_items   = [
  [
    'titel'     => 'Enkele unit (1-Split)',
    'icoon'     => '❄️',
    'badge'     => 'Compact',
    'tekst'     => 'Één binnenunit, één buitenunit. Voor één ruimte (max 20–30 m²). Eenvoudig, betaalbaar. Ideaal extra slaapkamer of kantoor.',
    'prijsrijen' => [
      ['label' => 'Kosten',             'bedrag' => '€ 1.500–€ 2.500'],
      ['label' => 'Capaciteit',         'bedrag' => '2,5–5 kW'],
    ],
  ],
  [
    'titel'     => 'Dubbele unit (2-Split)',
    'icoon'     => '❄️❄️',
    'badge'     => 'Flexibel',
    'tekst'     => 'Twee binnenunits, één buitenunit. Voor twee ruimtes. Onafhankelijke controle per unit. Goed compromis.',
    'prijsrijen' => [
      ['label' => 'Kosten',             'bedrag' => '€ 2.500–€ 4.000'],
      ['label' => 'Capaciteit',         'bedrag' => '2x 2,5 kW'],
    ],
  ],
  [
    'titel'     => 'Multi-split systeem (3+)',
    'icoon'     => '❄️❄️❄️',
    'badge'     => 'Uitgebreid',
    'tekst'     => 'Drie of meer units aan één buitenunit. Voor heel huis (alternatief centraal). Duur, maar zeer flexibel.',
    'prijsrijen' => [
      ['label' => 'Kosten',             'bedrag' => '€ 5.000–€ 10.000'],
      ['label' => 'Capaciteit',         'bedrag' => 'Per unit 2–3 kW'],
    ],
  ],
];
include $root . 'includes/components/section-kaarten.php';
unset($kaarten_variant, $kaarten_label, $kaarten_titel, $kaarten_intro, $kaarten_cols, $kaarten_items);

// ── Kosten
$two_col_variant   = 'wit';
$two_col_label     = 'Investering';
$two_col_titel     = 'Wat kost een split-systeem?';
$two_col_links     = '<p><strong>Enkele unit (2,5–3,5 kW):</strong></p>
<p>Apparaat: €700–€1.200<br>
Installatie (boor + bedrading): €800–€1.300<br>
<strong>Totaal: €1.500–€2.500</strong></p>
<p><strong>Dubbele unit (2x):</strong> €2.500–€4.000</p>
<p><strong>Jaarlijkse onderhoud:</strong> €100–€200 (inspectie, filters)</p>
<p><strong>Geen ISDE-subsidie</strong> (voor verwarming alleen van belang voor hoofdsysteem).</p>
<p><strong>Levensduur:</strong> 15–20 jaar. Goede investering.</p>';
$two_col_cta       = [];
$two_col_rechts    = '<ul class="checklist">
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>1 unit: €1.500–€2.500</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>2 units: €2.500–€4.000</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Onderhoud: €100–€200/jaar</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Levensduur 15–20 jaar</span></li>
</ul>';
include $root . 'includes/components/section-two-col.php';
unset($two_col_variant, $två_col_label, $två_col_titel, $two_col_omgekeerd, $two_col_links, $two_col_cta, $two_col_rechts);

// ── Verwarming
$two_col_variant   = 'grijs';
$two_col_label     = 'Functie';
$two_col_titel     = 'Split-systeem als aanvullende verwarming';
$two_col_links     = '<p><strong>Scenario:</strong> U hebt warmtepomp voor hele huis, maar één kamer is ongemakkelijk warm (of ver weg).</p>
<p><strong>Oplossing:</strong> Aanvullende split-airco voor die ruimte.</p>
<p><strong>Voordelen:</strong><br>
→ COP 3–5 (efficiënt)<br>
→ Fijne regeling per kamer<br>
→ Niet afhankelijk van centrale installatie<br>
→ Ook koeling in zomer</p>
<p><strong>Kosten:</strong> €1.500–€2.500 per unit.</p>
<p><strong>Besparing:</strong> Elektrische verwarming van die kamer (zou kostbaar zijn) vervangen → jaarlijks €100–€200 besparing.</p>';
$two_col_cta       = [];
$two_col_rechts    = '<ul class="checklist">
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Aanvulling op warmtepomp</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Fijne regeling per kamer</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>COP 3–5 efficiënt</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Ook zomerse koeling</span></li>
</ul>';
include $root . 'includes/components/section-two-col.php';
unset($two_col_variant, $två_col_label, $två_col_titel, $two_col_omgekeerd, $two_col_links, $two_col_cta, $two_col_rechts);

// ── Koeling
$two_col_variant   = 'wit';
$two_col_label     = 'Zomer';
$two_col_titel     = 'Koeling in zomerse hitte';
$two_col_links     = '<p><strong>Probleem:</strong> Huizen worden in zomer ongemakkelijk warm. Traditioneel: ramen open (lawaai, insecten), geen oplossing.</p>
<p><strong>Oplossing: Split-airco voor koeling:</strong> Haalt warmte uit de kamer, brengt het naar buiten.</p>
<p><strong>Prestatie:</strong> 1 kW elektriciteit levert 3–5 kW koeling → efficiënt.</p>
<p><strong>Gebruikspatroon:</strong> Vooral zomer (juni–september). Overige tijd verwarming of uit.</p>
<p><strong>Kosten zomer-elektriciteit:</strong> Koeling kan €100–€300 extra kosten per zomer (afhankelijk omvang). Veel beter dan geen oplossing (oncomfortabel).</p>';
$two_col_cta       = [];
$two_col_rechts    = '<ul class="checklist">
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Efficiënte koeling</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>COP 3–5 ook voor koelen</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Voorkomt overbodige hitte</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Nuttig in klimaatverandering</span></li>
</ul>';
include $root . 'includes/components/section-two-col.php';
unset($two_col_variant, $två_col_label, $två_col_titel, $two_col_omgekeerd, $two_col_links, $two_col_cta, $two_col_rechts);

// ── Combinatie warmtepomp
$two_col_variant   = 'grijs';
$two_col_label     = 'Synergie';
$two_col_titel     = 'Split-airco + centrale warmtepomp';
$two_col_links     = '<p><strong>Scenario:</strong> U hebt centrale warmtepomp, maar één kamer blijft koud of u wilt aanvullende koeling.</p>
<p><strong>Voordelen combinatie:</strong><br>
→ Centrale warmtepomp als baseline (efficient voor heel huis)<br>
→ Split-airco als fijnregeling (extra warmte/koeling per kamer)<br>
→ Flexibel: afzonderlijk aan/uit</p>
<p><strong>Elektrische balans:</strong> Load-balancing essentieel (beide trekken stroom).</p>
<p><strong>Totale investering:</strong> Warmtepomp (€3.000–€10.000) + split-airco (€1.500–€2.500) = €4.500–€12.500.</p>';
$two_col_cta       = ['tekst' => 'Meer over warmtepomp →', 'url' => '/kennisbank/warmtepomp/', 'stijl' => 'primair'];
$two_col_rechts    = '<ul class="checklist">
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Centrale verwarming + lokale fine-tuning</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Flexibele sturing</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Beide efficiënt (COP 3–5)</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Load-balancing nodig</span></li>
</ul>';
include $root . 'includes/components/section-two-col.php';
unset($two_col_variant, $två_col_label, $två_col_titel, $two_col_omgekeerd, $two_col_links, $two_col_cta, $two_col_rechts);

// ── Voor wie geschikt
$two_col_variant   = 'wit';
$two_col_label     = 'Geschiktheid';
$two_col_titel     = 'Voor wie is een split-airco zinvol?';
$two_col_links     = '<p><strong>Zeer geschikt als u:</strong></p>
<p>✓ Extra verwarming/koeling voor één kamer nodig<br>
✓ Centrale warmtepomp hebt (aanvulling)<br>
✓ Zomerkoeling waardeert<br>
✓ Voldoende financiële ruimte</p>
<p><strong>Minder geschikt als u:</strong></p>
<p>✗ Hele huis verwarmen nodig (gebruik centrale warmtepomp)<br>
✗ Budget beperkt<br>
✗ Geen elektra-capaciteit beschikbaar</p>';
$two_col_cta       = ['tekst' => 'Plan adviesgesprek →', 'url' => '/#contact', 'stijl' => 'primair'];
$two_col_rechts    = '<ul class="checklist">
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Extra kamer-verwarming</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Met centrale warmtepomp</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Zomerkoeling nodig</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Elektra-capaciteit beschikbaar</span></li>
</ul>';
include $root . 'includes/components/section-two-col.php';
unset($two_col_variant, $två_col_label, $två_col_titel, $two_col_omgekeerd, $two_col_links, $two_col_cta, $two_col_rechts);

// ── Onderhoudskosten
$two_col_variant   = 'grijs';
$two_col_label     = 'Praktijk';
$two_col_titel     = 'Onderhoud en levensduur';
$two_col_links     = '<p><strong>Onderhoud:</strong> Minimaal — jaarlijks inspectie + filtervervanging (5 minuten zelf).</p>
<p><strong>Jaarlijkse kosten:</strong> Inspectie (als nodig): €50–€100. Self-service filters: €10–€20.</p>
<p><strong>Levensduur:</strong> 15–20 jaar gemiddeld. Compressor (hartje) goed beveiligd.</p>
<p><strong>Reparaties:</strong> Zelden nodig. Groote risico: koudemiddellek (€300–€500 reparatie).</p>
<p><strong>Vervangingscyclus:</strong> Na 15–20 jaar volledige vervanging (compressor vermoeid).</p>';
$two_col_cta       = [];
$two_col_rechts    = '<ul class="checklist">
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Minimaal onderhoud</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Jaarlijks ≈€100</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Levensduur 15–20 jaar</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Zelden reparaties</span></li>
</ul>';
include $root . 'includes/components/section-two-col.php';
unset($two_col_variant, $två_col_label, $två_col_titel, $two_col_omgekeerd, $two_col_links, $two_col_cta, $two_col_rechts);

include $root . 'includes/faq.php';
include $root . 'includes/cta.php';
include $root . 'includes/footer.php';
?>
