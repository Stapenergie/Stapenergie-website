<?php
/**
 * industrie/index.php
 * Segmentpagina Industrie
 */
$root        = dirname(dirname(__FILE__)) . '/';
$title       = 'Energie-inkoopadvies voor de Industrie | STAP Energie';
$description = 'Energie-inkoopadvies voor industriele bedrijven. Complexe verbruiksprofielen, grote volumes, Europese aanbestedingen. STAP Energie kent de markt van binnenuit.';
$canonical   = 'https://stapenergie.nl/industrie/';

$breadcrumbs = [
  ['label' => 'Home',    'url' => '/'],
  ['label' => 'Zakelijk','url' => '/zakelijk/'],
  ['label' => 'Industrie'],
];

$cta_titel     = 'Weten wat STAP voor je organisatie kan betekenen?';
$cta_subtitel  = 'Plan een vrijblijvend kennismakingsgesprek. Wij beginnen met je situatie, niet met een standaard verhaal.';
$cta_knop      = 'Plan een kennismakingsgesprek →';
$cta_knop_url  = '#contact';
$cta_garanties = ['Onafhankelijk advies', 'Kennis van leverancier- en inkoopzijde', 'Reactie binnen twee werkdagen'];

$faq_label = 'Veelgestelde vragen';
$faq_titel = 'Vragen van industriele bedrijven over energie-inkoop';
$faq_items = [
  ['vraag' => 'Wat maakt energie-inkoop voor de industrie anders dan voor MKB?',
   'antwoord' => 'Volumes zijn groter, verbruiksprofielen zijn complexer en de contractstructuren zijn fundamenteel anders. Industriele afnemers hebben vaker te maken met bandbreedteafspraken, piekbelasting, saldering en dynamische contractvormen. Die complexiteit vereist advies van iemand die de inkoopmarkt van binnenuit kent.'],
  ['vraag' => 'Kan STAP Energie ondersteunen bij een Europese aanbesteding voor energie?',
   'antwoord' => 'Ja. STAP Energie heeft ervaring met Europese aanbestedingstrajecten voor energie. Wij ondersteunen bij het opstellen van het bestek, de beoordeling van offertes en de contractonderhandelingen.'],
  ['vraag' => 'Wat is het verschil tussen een vast, variabel en dynamisch contract voor grotere afnemers?',
   'antwoord' => 'Bij grote volumes heeft de keuze voor contractvorm een directe impact op de energiekosten. Een vast contract geeft zekerheid maar biedt geen flexibiliteit bij prijsdalingen. Een variabel of dynamisch contract geeft meer mogelijkheden voor actief inkoopbeheer, maar vereist ook meer monitoring. STAP Energie adviseert welke aanpak past bij je verbruiksprofiel en risicobereidheid.'],
  ['vraag' => 'Zijn er subsidies beschikbaar voor verduurzaming van industriele processen?',
   'antwoord' => 'Ja. Voor industriele bedrijven zijn onder meer de SDE++ (hernieuwbare energieopwekking), de EIA (energiezuinige bedrijfsmiddelen) en de DEI+ (demonstratieprojecten energie-innovatie) relevant. Welke regelingen van toepassing zijn, hangt af van je sector en de aard van de investeringen.'],
  ['vraag' => 'Hoe begint een traject met STAP Energie?',
   'antwoord' => 'Altijd met een kennismakingsgesprek. Wij beginnen met je situatie: wat is je verbruiksprofiel, welke contracten lopen er, wat zijn je doelstellingen? Op basis daarvan stellen wij een helder adviestraject voor, met een offerte vooraf.'],
];

include $root . 'includes/head.php';
include $root . 'includes/nav.php';
include $root . 'includes/breadcrumb.php';

// ── Hero
$hero_variant  = 'sub';
$hero_bg       = '/images/hero-zakelijk.jpg';
$hero_eyebrow  = 'Energie-inkoopadvies voor de industrie';
$hero_titel    = 'Grote volumes, complexe contracten. <em>Wij kennen de andere kant van de tafel.</em>';
$hero_lead     = 'Industriele bedrijven betalen voor energie op een heel andere manier dan het MKB. Volumes zijn groter, contracten zijn complexer en de marktdynamiek raakt je harder. STAP Energie heeft 15+ jaar ervaring aan de leverancierszijde en weet precies hoe die markt werkt.';
$hero_usps     = [
  '15+ jaar ervaring aan de leverancierszijde',
  'Kennis van complexe inkoopstructuren en Europese aanbestedingen',
  'Onafhankelijk — geen merkvoorkeur',
  'Reactie binnen twee werkdagen',
];
$hero_cta      = 'Plan een kennismakingsgesprek →';
$hero_cta_url  = '#contact';
$hero_cta2     = 'Meer over energie-inkoop';
$hero_cta2_url = '/energie-inkoop-advies/';
include $root . 'includes/hero.php';
include $root . 'includes/trust.php';

// ── Twee-kolom: positief
$two_col_variant   = 'wit';
$two_col_label     = 'Waarom industriele bedrijven met STAP werken';
$two_col_titel     = 'De markt van binnenuit gekend';
$two_col_omgekeerd = false;
$two_col_links     = '
  <p style="color:var(--subtekst);line-height:1.7;margin-bottom:14px;">Erik Dolman werkte 15+ jaar aan de leverancierszijde van de energiemarkt. Bij SEFE Energy en NieuweStroom sloot hij contracten af met grote industriele afnemers en bouwde hij kennis op over hoe leveranciers denken, rekenen en onderhandelen.</p>
  <p style="color:var(--subtekst);line-height:1.7;margin-bottom:14px;">Die kennis zet STAP Energie nu in voor je. Niet als tussenpersoon die prijs vergelijkt, maar als adviseur die begrijpt wat er werkelijk in een contract staat en wat het op de lange termijn betekent voor je kosten.</p>
  <p style="color:var(--subtekst);line-height:1.7;margin-bottom:20px;">Geen merkvoorkeur. Geen verborgen agenda. Gewoon advies dat in jouw belang is.</p>';
$two_col_cta       = ['tekst' => 'Meer over energie-inkoopadvies →', 'url' => '/energie-inkoop-advies/', 'stijl' => 'outline'];
$two_col_rechts    = '
  <div style="display:flex;flex-direction:column;gap:20px;">
    <div class="icon-tekst">
      <div class="icon-tekst__icoon"><svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></div>
      <div class="icon-tekst__content"><div class="icon-tekst__titel">Contractanalyse als startpunt</div><div class="icon-tekst__tekst">Wij beginnen altijd met je bestaande contracten. Wat staat er werkelijk in? Wat zijn de risico's? Wat kan beter?</div></div>
    </div>
    <div class="icon-tekst">
      <div class="icon-tekst__icoon"><svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg></div>
      <div class="icon-tekst__content"><div class="icon-tekst__titel">Verbruiksprofiel als basis</div><div class="icon-tekst__tekst">Hoe verbruik je energie? Kun je verbruik sturen of verschuiven? Dat bepaalt welke contractvorm het meest voordelig is.</div></div>
    </div>
    <div class="icon-tekst">
      <div class="icon-tekst__icoon"><svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
      <div class="icon-tekst__content"><div class="icon-tekst__titel">Verduurzaming als strategie</div><div class="icon-tekst__tekst">Eigen opwekking geeft prijszekerheid en minder marktafhankelijkheid. STAP Energie adviseert over de meest rendabele route.</div></div>
    </div>
  </div>';
include $root . 'includes/components/section-two-col.php';

// ── Drie diensten
$kaarten_variant = 'grijs';
$kaarten_label   = 'Onze diensten voor de industrie';
$kaarten_titel   = 'Energie-inkoop, verduurzaming en energielabels';
$kaarten_intro   = 'STAP Energie overziet het complete energievraagstuk voor je organisatie.';
$kaarten_cols    = 3;
$kaarten_items   = [
  [
    'titel'      => 'Energie-inkoopadvies',
    'uitgelicht' => true,
    'icoon'      => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>',
    'tekst'      => 'Contractanalyse, inkoopstrategie en begeleiding bij aanbestedingen. Voor volumes waarbij de contractkeuze direct impact heeft op jouw resultaat.',
    'cta_tekst'  => 'Meer over energie-inkoop →',
    'cta_url'    => '/energie-inkoop-advies/',
    'cta_stijl'  => 'solid',
  ],
  [
    'titel'     => 'Verduurzaming & subsidies',
    'icoon'     => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="5"/><path d="M12 1v4M12 19v4M4.22 4.22l2.83 2.83M16.95 16.95l2.83 2.83M1 12h4M19 12h4M4.22 19.78l2.83-2.83M16.95 7.05l2.83-2.83"/></svg>',
    'tekst'     => 'SDE++, EIA en DEI+ in kaart gebracht voor jouw situatie. Eigen opwekking verlaagt je marktafhankelijkheid structureel.',
    'cta_tekst' => 'Meer over verduurzaming →',
    'cta_url'   => '/verduurzaming-subsidie/',
    'cta_stijl' => 'outline',
  ],
  [
    'titel'     => 'Energielabels utiliteit',
    'icoon'     => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M8 7h8M8 12h5M8 17h3"/></svg>',
    'tekst'     => 'Verplicht bij verkoop, verhuur en oplevering van bedrijfspanden. STAP Energie verzorgt officieel geregistreerde labels voor uw industriele gebouwen.',
    'cta_tekst' => 'Meer over utiliteitslabels →',
    'cta_url'   => '/energielabels/utiliteit/',
    'cta_stijl' => 'outline',
  ],
];
include $root . 'includes/components/section-kaarten.php';

// ── Contactformulier
?>
<section class="sectie sectie--grijs" id="contact">
  <div class="sectie__inner">
    <span class="sectie__label">Contact</span>
    <h2 class="sectie__titel">Plan een vrijblijvend kennismakingsgesprek</h2>
    <p class="sectie__intro">Vul het formulier in en STAP Energie neemt binnen twee werkdagen contact op.</p>
    <?php
    $f_dienst = 'inkoop';
    $f_type   = 'zakelijk';
    $f_pagina = 'industrie';
    include $root . 'includes/formulier.php';
    ?>
  </div>
</section>

<?php
include $root . 'includes/faq.php';
include $root . 'includes/cta.php';
include $root . 'includes/footer.php';
?>
