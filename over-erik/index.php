<?php
/**
 * over-erik/index.php
 * Over Erik Dolman & STAP Energie
 */
$root        = dirname(dirname(__FILE__)) . '/';
$title       = 'Over Erik Dolman | STAP Energie';
$description = 'Erik Dolman heeft 15+ jaar ervaring in de energiemarkt. Oprichter van STAP Energie, voorheen SEFE Energy en NieuweStroom. Onafhankelijk adviseur voor energielabels, verduurzaming en energie-inkoop.';
$canonical   = 'https://stapenergie.nl/over-erik/';

$breadcrumbs = [
  ['label' => 'Home',      'url' => '/'],
  ['label' => 'Over Erik'],
];

$cta_titel     = 'Kennismaken met STAP Energie?';
$cta_subtitel  = 'Plan een vrijblijvend gesprek. Wij beginnen met uw situatie, niet met een standaard verhaal.';
$cta_knop      = 'Plan een kennismakingsgesprek →';
$cta_knop_url  = '/#contact';
$cta_garanties = ['15+ jaar ervaring in de energiemarkt', 'Geen productbelang', 'Reactie binnen twee werkdagen'];

$faq_label = 'Veelgestelde vragen';
$faq_titel = 'Vragen over STAP Energie';
$faq_items = [
  ['vraag' => 'Wat is de achtergrond van Erik Dolman?',
   'antwoord' => 'Erik Dolman heeft meer dan 15 jaar gewerkt in de energiemarkt, aan de leverancierszijde. Bij SEFE Energy en NieuweStroom sloot hij contracten af met grote zakelijke afnemers en bouwde hij kennis op over hoe leveranciers denken, rekenen en onderhandelen. Die kennis zet hij nu in voor zijn klanten — aan hun kant van de tafel.'],
  ['vraag' => 'Is STAP Energie gecertificeerd?',
   'antwoord' => 'Erik Dolman is gecertificeerd EPA-adviseur. EPA staat voor Energie Prestatie Advies — de certificering die vereist is voor het opstellen van officieel geregistreerde energielabels. Energielabels van STAP Energie worden geregistreerd in EP-online, het nationale register van de overheid.'],
  ['vraag' => 'In welke regio werkt STAP Energie?',
   'antwoord' => 'STAP Energie is gevestigd in Leusden en werkt primair in de regio Leusden, Amersfoort en omgeving. Voor zakelijke dienstverlening — energie-inkoopadvies, verduurzamingsadvies en grotere opdrachtgevers — werken wij door heel Nederland.'],
  ['vraag' => 'Voor wie werkt STAP Energie?',
   'antwoord' => 'Zowel voor particuliere woningeigenaren als voor zakelijke opdrachtgevers: MKB-bedrijven, industriele afnemers, vastgoedeigenaren, makelaars, gemeenten en woningcorporaties. De aard van het advies verschilt per doelgroep, maar de aanpak is altijd hetzelfde: beginnen met uw situatie.'],
  ['vraag' => 'Hoe is STAP Energie onafhankelijk?',
   'antwoord' => 'STAP Energie verkoopt geen energiecontracten, geen installaties en geen producten. Wij adviseren — en onze beloning is niet afhankelijk van de keuze die u maakt. Dat maakt het advies anders dan wat u krijgt van een leverancier of installateur die baat heeft bij een specifieke uitkomst.'],
];

include $root . 'includes/head.php';
include $root . 'includes/nav.php';
include $root . 'includes/breadcrumb.php';

// ── Hero
$hero_variant  = 'sub';
$hero_bg       = '/images/hero-zakelijk.jpg';
$hero_eyebrow  = 'Over STAP Energie';
$hero_titel    = 'Erik Dolman. <em>15+ jaar aan de andere kant van de tafel.</em>';
$hero_lead     = 'STAP Energie is geen groot kantoor. Achter elke aanvraag staat één persoon: Erik Dolman, energiespecialist met 15+ jaar ervaring aan de leverancierszijde van de energiemarkt. Die kennis zet hij nu in voor zijn klanten.';
$hero_usps     = [
  '15+ jaar ervaring in de energiemarkt',
  'Gecertificeerd EPA-adviseur',
  'Voorheen SEFE Energy en NieuweStroom',
  'Gevestigd in Leusden, actief door heel Nederland',
];
$hero_cta      = 'Plan een kennismakingsgesprek →';
$hero_cta_url  = '/#contact';
$hero_cta2     = '';
$hero_cta2_url = '';
include $root . 'includes/hero.php';
include $root . 'includes/trust.php';

// ── Over Erik two-col
$two_col_variant   = 'wit';
$two_col_label     = 'De persoon achter STAP Energie';
$two_col_titel     = 'De markt van binnenuit';
$two_col_omgekeerd = false;
$two_col_links     = '
  <p style="color:var(--subtekst);line-height:1.7;margin-bottom:14px;">Erik Dolman werkte 17 jaar in de energiemarkt aan de leverancierszijde. Bij SEFE Energy — onderdeel van het Gazprom-concern — en later bij NieuweStroom sloot hij contracten af met grote industriele afnemers en zakelijke klanten. Hij weet hoe leveranciers denken, hoe contracten in elkaar zitten en waar de marges zitten.</p>
  <p style="color:var(--subtekst);line-height:1.7;margin-bottom:14px;">In 2025 richtte hij STAP Energie op. Niet als tussenpersoon, maar als adviseur die aan uw kant van de tafel staat. Met kennis van de energiemarkt die u als inkopende partij normaal niet heeft.</p>
  <p style="color:var(--subtekst);line-height:1.7;margin-bottom:20px;">STAP Energie is gecertificeerd EPA-adviseur en verzorgt officieel geregistreerde energielabels voor woningen en utiliteitsgebouwen in de regio Leusden en Amersfoort.</p>';
$two_col_cta       = ['tekst' => 'Bekijk onze diensten →', 'url' => '/', 'stijl' => 'outline'];
$two_col_rechts    = '
  <div class="over-img-wrap" style="max-width:400px;">
    <img src="/images/erik-portret.jpg" alt="Erik Dolman — STAP Energie" loading="lazy"
         style="width:100%;border-radius:var(--rl);object-fit:cover;object-position:center 10%;">
    <div class="over-badge">
      <div class="over-badge__num">15+</div>
      <div class="over-badge__lbl">jaar energie&shy;ervaring</div>
    </div>
  </div>';
include $root . 'includes/components/section-two-col.php';
unset($two_col_variant, $two_col_label, $two_col_titel, $two_col_omgekeerd, $two_col_links, $two_col_cta, $two_col_rechts);

// ── Drie diensten kaarten
$kaarten_variant = 'grijs';
$kaarten_label   = 'Wat STAP Energie doet';
$kaarten_titel   = 'Drie diensten, één adviseur';
$kaarten_intro   = 'STAP Energie overziet het complete energievraagstuk — van het label op uw pand tot de inkoop van energie en de route naar verduurzaming.';
$kaarten_cols    = 3;
$kaarten_items   = [
  [
    'titel'     => 'Energielabels',
    'icoon'     => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M8 7h8M8 12h5M8 17h3"/></svg>',
    'tekst'     => 'Officieel geregistreerde energielabels voor woningen en bedrijfspanden. Gecertificeerd EPA-adviseur, registratie in EP-online.',
    'cta_tekst' => 'Meer over energielabels →',
    'cta_url'   => '/energielabels/',
    'cta_stijl' => 'outline',
  ],
  [
    'titel'      => 'Energie-inkoopadvies',
    'uitgelicht' => true,
    'icoon'      => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>',
    'tekst'      => 'Contractanalyse, inkoopstrategie en onderhandelingsondersteuning. Met kennis van hoe leveranciers aan de andere kant van de tafel redeneren.',
    'cta_tekst'  => 'Meer over energie-inkoop →',
    'cta_url'    => '/energie-inkoop-advies/',
    'cta_stijl'  => 'solid',
  ],
  [
    'titel'     => 'Verduurzaming & Subsidies',
    'icoon'     => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>',
    'tekst'     => 'Verduurzaming in de juiste volgorde, met subsidies in kaart gebracht. Voor particulieren, MKB en grotere organisaties.',
    'cta_tekst' => 'Meer over verduurzaming →',
    'cta_url'   => '/verduurzaming-subsidie/',
    'cta_stijl' => 'outline',
  ],
];
include $root . 'includes/components/section-kaarten.php';
unset($kaarten_variant, $kaarten_label, $kaarten_titel, $kaarten_intro, $kaarten_cols, $kaarten_items);

include $root . 'includes/faq.php';
include $root . 'includes/cta.php';
include $root . 'includes/footer.php';
?>
