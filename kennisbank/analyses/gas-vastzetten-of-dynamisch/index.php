<?php
/**
 * kennisbank/analyses/gas-vastzetten-of-dynamisch/index.php
 * Analyse — aardgas vastzetten of dynamisch inkopen
 * Let op: de artikeltekst is van Erik Dolman en wordt letterlijk overgenomen, niet aangepast.
 */
$root        = dirname(dirname(dirname(dirname(__FILE__)))) . '/';
$title       = 'Aardgas vastzetten of dynamisch inkopen? | Analyse | STAP Energie';
$description = 'Analyse van de gasmarkt in 2026: lage voorraden, LNG-afhankelijkheid, backwardation en de afweging tussen een vast en dynamisch gascontract voor ondernemers.';
$canonical   = 'https://stapenergie.nl/kennisbank/analyses/gas-vastzetten-of-dynamisch/';

$gepubliceerd  = '2026-06-10';
$bijgewerkt    = '2026-06-10';
$artikel_titel = 'Hoe een muntje uit 1941 het verhaal vertelt over de gasmarkt van vandaag — en de vraag beantwoordt: moet ik mijn aardgas nu vastzetten of dynamisch inkopen?';
$og_image      = 'https://stapenergie.nl/images/hero.jpg';

$breadcrumbs = [
  ['label' => 'Home',       'url' => '/'],
  ['label' => 'Kennisbank', 'url' => '/kennisbank/'],
  ['label' => 'Analyses',   'url' => '/kennisbank/analyses/'],
  ['label' => 'Aardgas vastzetten of dynamisch?'],
];

$ld = [
  '@context'         => 'https://schema.org',
  '@type'            => 'Article',
  'headline'         => 'Aardgas vastzetten of dynamisch inkopen?',
  'description'      => $description,
  'datePublished'    => $gepubliceerd,
  'dateModified'     => $bijgewerkt,
  'image'            => $og_image,
  'inLanguage'       => 'nl-NL',
  'mainEntityOfPage' => ['@type' => 'WebPage', '@id' => $canonical],
  'author'           => [
    '@type'   => 'Person',
    'name'    => 'Erik Dolman',
    'jobTitle'=> 'Oprichter en energie-inkoopspecialist',
    'url'     => 'https://stapenergie.nl/over-ons/',
    'sameAs'  => ['https://www.linkedin.com/in/edolman/'],
  ],
  'publisher'        => [
    '@type' => 'Organization',
    'name'  => 'STAP Energie',
    'url'   => 'https://stapenergie.nl/',
  ],
];

$head_extra = '<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">' . "\n"
  . '<meta property="og:type" content="article">' . "\n"
  . '<meta property="og:title" content="' . htmlspecialchars($artikel_titel) . '">' . "\n"
  . '<meta property="og:description" content="' . htmlspecialchars($description) . '">' . "\n"
  . '<meta property="og:url" content="' . htmlspecialchars($canonical) . '">' . "\n"
  . '<meta property="og:image" content="' . htmlspecialchars($og_image) . '">' . "\n"
  . '<meta property="article:published_time" content="' . $gepubliceerd . '">' . "\n"
  . '<meta property="article:modified_time" content="' . $bijgewerkt . '">' . "\n"
  . '<script type="application/ld+json">' . json_encode($ld, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';

$cta_titel     = 'Twijfel je over je gasinkoop?';
$cta_subtitel  = 'Vast, dynamisch of een mix: de juiste keuze hangt af van jouw bedrijf. Plan een vrijblijvend gesprek, dan maken we die afweging samen scherp.';
$cta_knop      = 'Plan een adviesgesprek →';
$cta_knop_url  = '/#contact';
$cta_garanties = ['15+ jaar ervaring in de energiemarkt', 'Geen productbelang', 'Reactie binnen twee werkdagen'];

include $root . 'includes/head.php';
include $root . 'includes/nav.php';
include $root . 'includes/breadcrumb.php';

// ── Hero (titel = artikel-H1)
$hero_variant = 'sub';
$hero_bg      = '/images/hero.jpg';
$hero_eyebrow = 'Analyse · Aardgas';
$hero_titel   = $artikel_titel;
$hero_lead    = '';
$hero_usps    = [];
$hero_cta     = '';
$hero_cta2    = '';
include $root . 'includes/hero.php';
?>
<style>
.analyse{max-width:760px;margin:0 auto;padding:48px 24px 8px;color:#1a1a1a}
.analyse-meta{font-size:.95rem;color:#4a5568;margin-bottom:28px;border-bottom:1px solid #e2e8f0;padding-bottom:18px}
.analyse-meta strong{color:#1a5c32}
.analyse p{line-height:1.75;margin:0 0 18px;font-size:1.07rem}
.analyse h2{font-size:1.5rem;color:#1a5c32;margin:38px 0 14px;line-height:1.3}
.analyse .kernantwoord{background:#f0f7f2;border-left:4px solid #1a5c32;border-radius:8px;padding:22px 26px;margin:6px 0 30px}
.analyse .kernantwoord h2{margin-top:0;font-size:1.3rem}
.analyse .kernantwoord p:last-child{margin-bottom:0}
</style>

<section class="sectie sectie--wit">
  <article class="analyse">
    <div class="analyse-meta">
      Door <strong>Erik Dolman</strong>, oprichter STAP Energie &middot; Gepubliceerd 10 juni 2026
    </div>

    <p>Vroeger gooide je een gasmuntje in de meter en kreeg je gas. Voor 2,5 cent kreeg je anderhalve dag warmte, betaald op het moment zelf. Geen geld in huis betekende een koude kamer. Je kocht je winter in kleine beetjes: precies zoveel als je je kon veroorloven, en net genoeg om het warm te houden.</p>

    <p>Het muntje is verdwenen. De vraag erachter niet. Hoe zorg je dat je de winter betaalbaar, warm en zonder stress doorkomt? Alleen regel je dat nu met een energiecontract en een inkoopstrategie, niet met kleingeld in de meter.</p>

    <div class="kernantwoord" id="kernantwoord">
      <h2>Het korte antwoord: vastzetten of dynamisch?</h2>
      <p>Er is geen universeel goed antwoord. Dynamisch betekent dat je de marktprijs van het moment betaalt, met scherpe pieken bij verstoringen zoals dit voorjaar. De termijnmarkt staat in backwardation: de jaren 2027 tot en met 2029 noteren lager dan vandaag. Vastzetten kan dus rust en een gunstig niveau opleveren, maar je geeft wel de kans op verdere daling op.</p>
      <p>De kunst is niet om de markt te voorspellen. De kunst is om een keuze te maken die past bij wat jouw bedrijf aan prijsschommeling kan dragen. En structureel geldt: de enige kuub die geen last heeft van prijsschommelingen, is de kuub die je niet meer gebruikt.</p>
    </div>

    <h2>Waarom dit nu urgenter is dan ooit</h2>
    <p>De vraag hoe slim in te kopen is dit jaar urgenter dan in tijden van de gasmunt. Juist nu, ook al staan we vlak voor de zomervakantie en niet voor de skivakantie.</p>
    <p>De Europese gasvoorraden staan historisch laag. De EU verlaagde het vuldoel van 90 naar 80 procent en Nederland haalde die norm zelfs voor het eerst sinds jaren niet. Tegelijk leunen we steeds zwaarder op LNG, en een groot deel daarvan komt uit de Verenigde Staten, waar het via fracking uit de grond wordt gehaald.</p>
    <p>Het is een wereldproduct: een tanker vaart naar de haven waar de prijs het hoogst is. In Rotterdam wordt het met stikstof bijgemengd zodat het gas geschikt is voor ons om te gebruiken. Daarmee ligt onze gasvraag deels in handen van een markt aan de andere kant van de oceaan. Je prijs hangt aan beslissingen die ver buiten je gezichtsveld worden genomen.</p>

    <h2>Wat we dit voorjaar zagen</h2>
    <p>Hoe ver dat reikt, zagen we dit voorjaar. In maart liep de spanning met Iran op, raakte de Straat van Hormuz vrijwel onbegaanbaar en werden gasinstallaties in Qatar geraakt. De toevoer naar Europa stokte. De gasprijs sprong van rond de dertig euro per megawattuur in februari naar bijna vijftig in maart, het hoogste niveau sinds 2023.</p>
    <p>Wie op dat moment dynamisch zat, betaalde die piek direct. Bakkers en andere ondernemers die hun oven niet zomaar uit kunnen zetten, kwamen in de knel. Dat is de keerzijde van dynamisch: je betaalt de prijs van het moment, ook als dat moment je slecht uitkomt.</p>

    <h2>Wat de termijnmarkt zegt</h2>
    <p>De termijnmarkt verwacht op dit moment juist dat gas goedkoper wordt. De prijzen voor 2027, 2028 en 2029 liggen lager dan die van vandaag. Dat heet backwardation: de toekomst is op papier goedkoper dan het heden, doordat er de komende jaren nieuwe LNG-capaciteit bijkomt en de markt verwacht dat de huidige verstoringen tijdelijk zijn.</p>
    <p>Of dat zo is, valt te bezien. Aardgas is een handelsproduct, maar ook een geopolitiek wapen. En het is niet zozeer de vraag of dat wapen wordt ingezet, maar wanneer. Tegelijk geldt: vastzetten betekent ook een verplichting. Je legt je afname vast.</p>

    <h2>De afweging voor ondernemers</h2>
    <p>Daar zit de echte keuze. Blijf je dynamisch en accepteer je de pieken, in ruil voor een markt die op termijn lager wijst? Of zet je die lagere jaren juist nu vast en koop je rust en continuïteit in je bedrijf? Of kies je ertussenin: dit jaar dynamisch, en 2027 tot en met 2029 alvast vastleggen op een niveau dat nu nog interessant is.</p>
    <p>Je kunt ook kiezen voor een hybride vorm, bijvoorbeeld 50 procent dynamisch en 50 procent vast. Er zit risico aan beide kanten, want één verstoring of juist verruiming draait het beeld zo weer om.</p>
    <p>De kunst is niet de markt voorspellen, maar een keuze maken die past bij wat jouw bedrijf kan dragen.</p>

    <h2>De echte winst zit dieper</h2>
    <p>Tot zover de keuze voor de contractvorm. Het echte antwoord ligt nog een laag dieper. Zolang je gas nodig hebt, koop het slim in. En stop wat je daarmee bespaart in minder gas nodig hebben.</p>
    <p>Want de enige kuub die geen last heeft van Irak, Qatar of Hormuz, is de kuub die je niet meer gebruikt. Niet alleen slim vanwege de inkoop, maar ook vanwege alle kosten die vanuit de overheid op ons afkomen.</p>
    <p>De bijmengverplichting voor groen gas gaat vanaf 2027 spelen. ETS2, betalen voor CO2-uitstoot, komt in 2028. Daartegenover staan ook voordelen, zoals een verhoogde investeringsaftrek in 2027. Gas is nu duur, goedkoper zal het niet worden. Die pijn kun je wel dempen door slim in te kopen en strategisch na te denken over hoe je minder afhankelijk wordt.</p>

    <h2>Waar STAP Energie voor staat</h2>
    <p>Daarom sta ik met STAP Energie naast ondernemers. Niet om je een contract te verkopen, maar om die afweging op tijd scherp te maken, voordat de winter er weer is.</p>
  </article>
</section>

<?php
include $root . 'includes/cta.php';
include $root . 'includes/footer.php';
?>
