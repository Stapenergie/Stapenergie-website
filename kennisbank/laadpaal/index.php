<?php
/**
 * kennisbank/laadpaal/index.php
 * Kennisartikel: Laadpaal (EV-oplader)
 */
$root        = dirname(dirname(dirname(__FILE__))) . '/';
$title       = 'Laadpaal Thuis | EV-Oplader Kosten & Subsidie | STAP Energie';
$description = 'Laadpaal thuis: 1-fase €800–€1.200, 3-fase €1.500–€2.500. SEEH-subsidie €500. Smart charging met zonnepanelen. Load-balancing belangrijk.';
$canonical   = 'https://stapenergie.nl/kennisbank/laadpaal/';

$breadcrumbs = [
  ['label' => 'Home',       'url' => '/'],
  ['label' => 'Kennisbank', 'url' => '/kennisbank/'],
  ['label' => 'Laadpaal'],
];

$cta_titel     = 'Laadpaal thuis installeren?';
$cta_subtitel  = 'Plan een vrijblijvend adviesgesprek. Wij beginnen met je situatie.';
$cta_knop      = 'Plan een adviesgesprek →';
$cta_knop_url  = '/#contact';
$cta_garanties = ['15+ jaar ervaring in de energiemarkt', 'Geen productbelang', 'Reactie binnen twee werkdagen'];

$faq_label = 'Veelgestelde vragen';
$faq_titel = 'Veelgestelde vragen over laadpalen';
$faq_items = [
  ['vraag' => 'Wat is het verschil tussen 1-fase en 3-fase laden?',
   'antwoord' => '1-fase (11 kW max): gelijk aan huishoudstroom. Auto laadt in 6–8 uur. 3-fase (22 kW max): sneller, 4–5 uur vol. 3-fase vereist beschikbare aansluiting en daarvoor mogelijk elektra-upgrade.'],
  ['vraag' => 'Hoe veel kost elektriciteit voor EV-laden?',
   'antwoord' => 'Elektrische auto verbruikt ≈15–20 kWh per 100 km. Bij €0,25/kWh = €3,75–€5 per 100 km. Auto op benzine: €8–€12 per 100 km. Dus EV veel goedkoper.'],
  ['vraag' => 'Kan ik EV laden met mijn zonnepanelen?',
   'antwoord' => 'Ja! Smart charging: laad 's middags wanneer zon schijnt. Met dynamisch contract: laad in goedkope uren. Met smart home/EMS: automatisch optimaliseren.'],
  ['vraag' => 'Is laadpaal thuis veiliger dan openbare?',
   'antwoord' => 'Ja. Thuis: veilig, bekend voeding, eigen beheer. Openbaar: veiliger dan vorig decennium, maar thuis altijd preferent (betrouwbaarder, goedkoper).'],
  ['vraag' => 'Kan ik laadpaal zelf installeren?',
   'antwoord' => 'Niet aanbevolen. Laadpaal moet door erkende installateur worden geplaatst (elektra-veiligheid). SEEH-subsidie vereist ook professionele installatie.'],
];

include $root . 'includes/head.php';
include $root . 'includes/nav.php';
include $root . 'includes/breadcrumb.php';

// ── Hero
$hero_variant  = 'sub';
$hero_bg       = '/images/hero-verduurzaming-hub.jpg';
$hero_eyebrow  = 'Kennisbank';
$hero_titel    = 'Laadpaal thuis: schoon en goedkoop tanken. <em>Auto laden op zonne-energie.</em>';
$hero_lead     = 'Elektrische auto's zijn schoon en goedkoop in gebruik. Thuis een laadpaal installeren maakt het nog beter — oplaad 's nachts met dynamische stroom of overdag met zonnepanelen. Kost €800–€2.500, subsidie beschikbaar.';
$hero_usps     = [];
$hero_cta      = 'Plan een adviesgesprek →';
$hero_cta_url  = '/#contact';
$hero_cta2     = '';
$hero_cta2_url = '';
include $root . 'includes/hero.php';
include $root . 'includes/trust.php';

// ── Introductie
$two_col_variant   = 'wit';
$two_col_label     = 'Waarom';
$two_col_titel     = 'Waarom een laadpaal thuis?';
$two_col_links     = '<p>Laadpaal thuis is sneller, betrouwbaarder en goedkoper dan openbare laadpunten.</p>
<p><strong>Voordelen:</strong></p>
<p>→ Laad 's nachts (goedkope stroom) of overdag (zonnepanelen)<br>
→ Altijd beschikbaar (geen wacht-rijen)<br>
→ Slimmer laden mogelijk (smart charging)<br>
→ Tot €500 subsidie (SEEH)<br>
→ Veiliger dan openbare laadpunten</p>
<p><strong>Onderhoudskosten stroom:</strong> Elektrische auto = ±€3–€5 per 100 km (vs. €8–€12 benzine).</p>';
$two_col_cta       = [];
$two_col_rechts    = '<ul class="checklist">
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Sneller en betrouwbaarder</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Smart charging met zonnepanelen</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Goedkoper dan openbaar</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>SEEH-subsidie beschikbaar</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Veiliger thuis</span></li>
</ul>';
include $root . 'includes/components/section-two-col.php';
unset($two_col_variant, $two_col_label, $two_col_titel, $two_col_omgekeerd, $two_col_links, $two_col_cta, $two_col_rechts);

// ── Types laadpalen
$kaarten_variant = 'grijs';
$kaarten_label   = 'Types';
$kaarten_titel   = 'Verschillende laadpaal-typen';
$kaarten_intro   = 'Laadsnelheid en kosten hangen af van laadtype.';
$kaarten_cols    = 2;
$kaarten_items   = [
  [
    'titel'     => '1-Fase Laadpaal (11 kW)',
    'icoon'     => '🔌',
    'badge'     => 'Standaard',
    'tekst'     => 'Gebruikt huishoudstroom (1 fase). Voor de meeste elektrische auto\'s geschikt. Laadt gemiddeld 6–8 uur voledig op.',
    'prijsrijen' => [
      ['label' => 'Kosten',             'bedrag' => '€ 800–€ 1.200'],
      ['label' => 'Laadtijd',           'bedrag' => '6–8 uur volledig'],
      ['label' => 'SEEH-subsidie',      'bedrag' => '€ 300–€ 500'],
    ],
  ],
  [
    'titel'     => '3-Fase Laadpaal (22 kW)',
    'icoon'     => '⚡',
    'badge'     => 'Sneller',
    'tekst'     => 'Drie-fase stroom (industrieel). Veel sneller: 4–5 uur volledig. Vereist drie-fase aansluiting en mogelijk elektra-upgrade.',
    'prijsrijen' => [
      ['label' => 'Kosten',             'bedrag' => '€ 1.500–€ 2.500'],
      ['label' => 'Laadtijd',           'bedrag' => '4–5 uur volledig'],
      ['label' => 'SEEH-subsidie',      'bedrag' => '€ 500 (gelijk)'],
    ],
  ],
];
include $root . 'includes/components/section-kaarten.php';
unset($kaarten_variant, $kaarten_label, $kaarten_titel, $kaarten_intro, $kaarten_cols, $kaarten_items);

// ── Kosten
$two_col_variant   = 'wit';
$two_col_label     = 'Investering';
$two_col_titel     = 'Wat kost een laadpaal?';
$two_col_links     = '<p><strong>1-fase laadpaal (11 kW):</strong></p>
<p>Laadpaal: €400–€700<br>
Installatie: €400–€600<br>
<strong>Totaal: €800–€1.200</strong></p>
<p><strong>3-fase laadpaal (22 kW):</strong></p>
<p>Laadpaal: €600–€1.000<br>
Installatie + elektra: €1.000–€1.500<br>
Mogelijk elektra-upgrade: €500–€2.000<br>
<strong>Totaal: €1.500–€4.500</strong> (afhankelijk huisinstallatie)</p>
<p><strong>SEEH-subsidie:</strong> €300–€500 (2026)</p>
<p><strong>Terugverdientijd:</strong> 3–5 jaar via lagere laad-kosten.</p>';
$two_col_cta       = [];
$two_col_rechts    = '<ul class="checklist">
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>1-fase: €800–€1.200</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>3-fase: €1.500–€2.500 (basis)</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>SEEH-subsidie €300–€500</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Terugverdientijd 3–5 jaar</span></li>
</ul>';
include $root . 'includes/components/section-two-col.php';
unset($two_col_variant, $two_col_label, $two_col_titel, $two_col_omgekeerd, $two_col_links, $two_col_cta, $two_col_rechts);

// ── Smart charging
$two_col_variant   = 'grijs';
$two_col_label     = 'Optimalisering';
$two_col_titel     = 'Smart charging: intelligente laadtiming';
$two_col_links     = '<p><strong>Standaard laadpaal:</strong> Je laadt wanneer je wilt. Geen optimalisatie.</p>
<p><strong>Smart laadpaal:</strong> Laadpaal communiceert met netwerk/auto. Mogelijkheden:</p>
<p>→ <strong>Laad in goedkope uren:</strong> Dynamisch contract? Laadpaal laadt 's nachts goedkoop (€0,10–€0,20/kWh), niet duur (€0,40–€0,50/kWh).<br>
→ <strong>Zonnepanelen:</strong> Laad 's middags wanneer zon schijnt — gratis stroom!<br>
→ <strong>Load-balancing:</strong> Laadpaal deelt stroom met warmtepomp/thuisbatterij — geen overbelasting.</p>
<p><strong>Voordeel:</strong> €100–€300 extra besparing per jaar mogelijk.</p>';
$two_col_cta       = [];
$two_col_rechts    = '<ul class="checklist">
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Laad in goedkope uren</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Zonnepanelen: gratis laden</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Load-balancing met andere systemen</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Voordeel: €100–€300/jaar extra</span></li>
</ul>';
include $root . 'includes/components/section-two-col.php';
unset($two_col_variant, $two_col_label, $two_col_titel, $two_col_omgekeerd, $two_col_links, $two_col_cta, $two_col_rechts);

// ── Met zonnepanelen
$two_col_variant   = 'wit';
$two_col_label     = 'Combinatie';
$two_col_titel     = 'Laadpaal + zonnepanelen: optimaal';
$two_col_links     = '<p><strong>Scenario:</strong> Je hebt zonnepanelen en elektrische auto.</p>
<p><strong>Ideaal:</strong> 's Middags wanneer zon schijnt, auto laden. Dit geeft:</p>
<p>→ Gratis laad-stroom (of zeer goedkoop)<br>
→ Vermindert teruglevering naar net (dus minder subsidie-verlies bij saldering)<br>
→ Maximaal zelf-gebruik van zonnepanelen</p>
<p><strong>Met thuisbatterij nog beter:</strong> Batterij 's middags laden van zon, auto 's middags laden van zon, 's avonds batterij gebruiken.</p>
<p><strong>Met EMS (Energy Management System):</strong> Alles geoptimaliseerd: zonnepanelen → batterij → auto → verwarming.</p>';
$two_col_cta       = ['tekst' => 'Meer over zonnepanelen →', 'url' => '/kennisbank/zonnepanelen/', 'stijl' => 'primair'];
$two_col_rechts    = '<ul class="checklist">
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Laad met zonnestroom</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Gratis of zeer goedkoop</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Batterij + laadpaal = synergisch</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Met EMS: volledig geoptimaliseerd</span></li>
</ul>';
include $root . 'includes/components/section-two-col.php';
unset($two_col_variant, $two_col_label, $two_col_titel, $two_col_omgekeerd, $two_col_links, $two_col_cta, $two_col_rechts);

// ── Load balancing
$two_col_variant   = 'grijs';
$two_col_label     = 'Technisch';
$two_col_titel     = 'Load-balancing: meerdere systemen delen stroom';
$two_col_links     = '<p><strong>Situatie:</strong> Je hebt warmtepomp + laadpaal + thuisbatterij = veel stroomvraag tegelijk.</p>
<p><strong>Probleem:</strong> Elektrische aansluiting heeft beperkte capaciteit (meestal 1–3 fases van 25–40 Ampère). Alles tegelijk is overbelasting.</p>
<p><strong>Oplossing: Load-balancing:</strong> Intelligente sturing verdeelt beschikbare stroom:</p>
<p>→ Warmtepomp krijgt priority (verwarming is essentieel)<br>
→ Laadpaal krijgt rest wanneer wartepomp niet volledig draait<br>
→ Batterij laadt wanneer beide stil staan</p>
<p><strong>Voordeel:</strong> Geen overbelasting, alles werkt efficiënt.</p>';
$two_col_cta       = [];
$two_col_rechts    = '<ul class="checklist">
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Intelligente stroombeheer</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Prioriteiten bepalen</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Geen overbelasting</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Essentieel bij meerdere systemen</span></li>
</ul>';
include $root . 'includes/components/section-two-col.php';
unset($two_col_variant, $two_col_label, $two_col_titel, $two_col_omgekeerd, $two_col_links, $two_col_cta, $two_col_rechts);

// ── Geschiktheid
$two_col_variant   = 'wit';
$two_col_label     = 'Voorzorg';
$two_col_titel     = 'Is laadpaal thuis voor je geschikt?';
$two_col_links     = '<p><strong>Ideaal als u:</strong></p>
<p>✓ Elektrische auto hebt (of plant)<br>
✓ Oprit/garage met stroom hebt<br>
✓ Overdag thuis parkeert of 's nachts laadt<br>
✓ Zonnepanelen hebt (of plant)<br>
✓ Dynamisch contract neemt</p>
<p><strong>Minder geschikt als u:</strong></p>
<p>✗ Geen parkeerplek thuis<br>
✗ Altijd openbare laadpalen gebruikt<br>
✗ Zeer zelden thuis bent</p>';
$two_col_cta       = ['tekst' => 'Plan adviesgesprek →', 'url' => '/#contact', 'stijl' => 'primair'];
$two_col_rechts    = '<ul class="checklist">
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>EV thuis parkeren</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Stroom in oprit/garage</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Zonnepanelen ideaal</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Dynamisch contract</span></li>
</ul>';
include $root . 'includes/components/section-two-col.php';
unset($two_col_variant, $two_col_label, $two_col_titel, $two_col_omgekeerd, $two_col_links, $two_col_cta, $two_col_rechts);

// ── SEEH Subsidie
$two_col_variant   = 'grijs';
$two_col_label     = 'Subsidie';
$two_col_titel     = 'SEEH-subsidie voor laadpalen';
$two_col_links     = '<p><strong>SEEH (Stimulering Elektrisch Vervoer Huishoudingen):</strong> Overheidssubsidie voor thuislaadpalen.</p>
<p><strong>Bedrag:</strong> €300–€500 (vast bedrag)</p>
<p><strong>Voorwaarden:</strong><br>
→ Particuliere thuislaadpaal (geen bedrijf)<br>
→ Erkende installateur (professioneel)<br>
→ Netbeheerder goedkeuring<br>
→ Aanvraag vóór werkstart</p>
<p><strong>Procedure:</strong> STAP Energie begeleidt aanvraag en coördinatie met netbeheerder.</p>';
$two_col_cta       = ['tekst' => 'Meer over subsidies →', 'url' => '/verduurzaming-subsidie/', 'stijl' => 'primair'];
$two_col_rechts    = '<ul class="checklist">
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>€300–€500 subsidie</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Erkende installatie</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Netbeheerder goedkeuring</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Aanvraag vóór werkstart</span></li>
</ul>';
include $root . 'includes/components/section-two-col.php';
unset($two_col_variant, $two_col_label, $two_col_titel, $two_col_omgekeerd, $two_col_links, $two_col_cta, $two_col_rechts);

include $root . 'includes/faq.php';
include $root . 'includes/cta.php';
include $root . 'includes/footer.php';
?>
