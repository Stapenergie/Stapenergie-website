<?php
/**
 * interim/index.php
 * STAP Interim — interim-expertise voor de energiesector
 */
$root        = dirname(dirname(__FILE__)) . '/';
$title       = 'STAP Interim — interim-expertise voor de energiesector | STAP Energie';
$description = 'Direct inzetbare energie-expertise voor organisaties. Interim en consultancy voor commerciële teams, prijs- en inkoopstrategie, EMS-implementaties, positionering en aanbestedingen.';
$canonical   = 'https://stapenergie.nl/interim/';
$og_image    = 'https://stapenergie.nl/images/erik-portret.jpg';

$breadcrumbs = [
  ['label' => 'Home', 'url' => '/'],
  ['label' => 'Interim'],
];

$ld = [
  '@context'    => 'https://schema.org',
  '@type'       => 'ProfessionalService',
  'name'        => 'STAP Interim',
  'description' => $description,
  'url'         => $canonical,
  'areaServed'  => 'Nederland',
  'provider'    => [
    '@type' => 'Organization',
    'name'  => 'STAP Energie',
    'url'   => 'https://stapenergie.nl/',
  ],
  'employee'    => [
    '@type'     => 'Person',
    'name'      => 'Erik Dolman',
    'jobTitle'  => 'Energiespecialist en interim-professional',
    'url'       => 'https://stapenergie.nl/over-ons/',
    'sameAs'    => ['https://www.linkedin.com/in/edolman/'],
    'knowsAbout'=> [
      'energie-inkoop',
      'commerciële teams in de energiesector',
      'prijs- en inkoopstrategie',
      'energiemanagementsystemen (EMS)',
      'aanbestedingsondersteuning',
      'marktpositionering',
    ],
  ],
];

$head_extra = '<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1">' . "\n"
  . '<meta property="og:type" content="website">' . "\n"
  . '<meta property="og:title" content="' . htmlspecialchars($title) . '">' . "\n"
  . '<meta property="og:description" content="' . htmlspecialchars($description) . '">' . "\n"
  . '<meta property="og:url" content="' . htmlspecialchars($canonical) . '">' . "\n"
  . '<meta property="og:image" content="' . htmlspecialchars($og_image) . '">' . "\n"
  . '<script type="application/ld+json">' . json_encode($ld, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';

$cta_titel     = 'Een vraagstuk waar dit van pas komt?';
$cta_subtitel  = 'Leg het me vrijblijvend voor, dan kijken we samen of en hoe mijn ervaring kan helpen.';
$cta_knop      = 'Neem contact op →';
$cta_knop_url  = '/#contact';
$cta_garanties = ['17 jaar in de energiemarkt', 'Direct inzetbaar, geen tussenlaag', 'Vrijblijvend gesprek'];

include $root . 'includes/head.php';
include $root . 'includes/nav.php';
include $root . 'includes/breadcrumb.php';

// ── Hero
$hero_variant = 'sub';
$hero_bg      = '/images/hero.jpg';
$hero_eyebrow = 'STAP Interim';
$hero_titel   = 'Zeventien jaar energie-expertise,<br><em>direct inzetbaar</em>';
$hero_lead    = 'Soms heb je geen bureau met een poule nodig, maar één iemand die de energiemarkt van binnenuit kent en meteen aan tafel zit. Via STAP Interim zet ik mijn ervaring tijdelijk in bij organisaties met een commercieel of strategisch energievraagstuk. Geen tussenlaag, geen marge over andermans uren, gewoon zeventien jaar trackrecord direct ingehuurd.';
$hero_usps    = [];
$hero_cta     = '';
$hero_cta2    = '';
include $root . 'includes/hero.php';
?>
<style>
.interim{max-width:760px;margin:0 auto;padding:48px 24px 8px;color:#1a1a1a}
.interim p{line-height:1.75;margin:0 0 18px;font-size:1.07rem}
.interim h2{font-size:1.5rem;color:#1a5c32;margin:38px 0 14px;line-height:1.3}
.interim h2:first-child{margin-top:0}
</style>

<section class="sectie sectie--wit">
  <div class="interim">
    <h2>Waar ik kan worden ingezet</h2>
    <p>Als generalistische energiespecialist ben ik breed inzetbaar. Een paar terreinen waar mijn ervaring direct van pas komt: het opzetten en professionaliseren van commerciële teams in het energiedomein, van structuur tot prestatie. Prijs- en inkoopstrategie en verdienmodellen, van contractvormen en marges tot een scherpe en uitlegbare propositie. De implementatie van energiemanagementsystemen, meerdere keren begeleid van keuze tot inrichting. Positionering en herpositionering, waar ik vaak heb meegedacht en meerdere trajecten van dichtbij heb vormgegeven. En aanbestedingsondersteuning bij tendertrajecten van grotere organisaties.</p>
    <p>Zit jouw vraagstuk daar niet precies tussen? Grote kans dat zeventien jaar in de energiemarkt er alsnog raakvlak mee heeft. Leg het me voor.</p>

    <h2>Trackrecord</h2>
    <p>Zeventien jaar aan de leverancierszijde van de energiemarkt. Bij SEFE Energy bouwde ik vanaf 2012 het partnerkanaal op, van nul naar 125 actieve partners. Bij NieuweStroom leidde ik als Manager Sales de verkooporganisatie naar 100.000 aansluitingen en 30 medewerkers. Die ervaring zet ik nu in voor jouw vraagstuk.</p>

    <h2>Hoe het werkt</h2>
    <p>Je huurt mij direct in, voor de periode en de inzet die passen. Korte lijnen, geen overhead, en iemand die de markt en de mensen erin kent.</p>
  </div>
</section>

<?php
include $root . 'includes/cta.php';
include $root . 'includes/footer.php';
?>
