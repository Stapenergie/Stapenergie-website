<?php
$root = dirname(dirname(__FILE__)) . '/';
$paginatitel   = 'Verduurzaming & Subsidie | Stappenplan & Advies | STAP Energie';
$metadesc      = 'Slim verduurzamen begint niet bij de warmtepomp. STAP Energie helpt bedrijven en particulieren met de juiste volgorde, subsidies en een helder stappenplan.';
$canonical     = 'https://stapenergie.nl/verduurzaming-subsidie/';
$hreflang      = 'nl';

// ── Hero ────────────────────────────────────────────────────────────────────
$hero_variant  = 'sub';
$hero_bg       = '/images/hero-verduurzaming-hub.jpg';
$hero_eyebrow  = 'Verduurzaming & Subsidie';
$hero_titel    = 'Eerst besparen,<br>dan opwekken';
$hero_lead     = 'De meeste bedrijven beginnen bij de verkeerde stap. Ze investeren in zonnepanelen terwijl de verwarming nog de hele dag onnodig draait. Wij beginnen bij de vraag: waar zit uw verbruik eigenlijk?';
$hero_usps     = [
    'Onafhankelijk — geen productbelang',
    'Juiste volgorde, geen onnodige investering',
    'Subsidies volledig in kaart gebracht',
];
$hero_cta      = 'Vraag een gratis adviesgesprek aan';
$hero_cta_url  = '#contact';
$hero_cta2     = '';
$hero_cta2_url = '';

// ── Breadcrumb ───────────────────────────────────────────────────────────────
$breadcrumb = [
    ['label' => 'Home',                     'url' => $root],
    ['label' => 'Verduurzaming & Subsidie', 'url' => ''],
];

// ── FAQ ──────────────────────────────────────────────────────────────────────
$faq_items = [
    [
        'vraag'    => 'Hoeveel kan ik besparen door installaties beter in te regelen?',
        'antwoord' => 'Tussen de 10 en 30 procent energiebesparing is haalbaar zonder ook maar iets te kopen — puur door installaties goed in te stellen. Tijdklokken die op een willekeurig tijdstip staan na een stroomstoring, ventilatie die ook op zondag blijft draaien, klimaatsystemen op een vaste temperatuur terwijl het buiten al warm is. Dit soort verspilling zit in bijna elk pand, en het herstellen ervan kost vaak niet meer dan een paar honderd euro.',
    ],
    [
        'vraag'    => 'Moet ik alles in één keer aanpakken?',
        'antwoord' => 'Nee — en dat zou ook zelden slim zijn. Een goed verduurzamingsplan sluit aan bij de onderhoudsmomenten die u toch al gepland heeft. Kozijnen die worden vervangen? Dan ook meteen beter glas. Dak dat aan onderhoud toe is? Dan ook isoleren. Wie de juiste volgorde aanhoudt, heeft nooit spijt van een eerder genomen maatregel.',
    ],
    [
        'vraag'    => 'Welke subsidies zijn er voor mijn bedrijf?',
        'antwoord' => 'Voor zakelijke verduurzaming zijn de ISDE (warmtepompen, isolatie), de EIA (energiezuinige bedrijfsmiddelen) en de SDE++ (hernieuwbare energieopwekking) de meest relevante regelingen. Welke combinatie het meest oplevert, hangt af van uw situatie, uw belastingpositie en de geplande maatregelen. STAP Energie brengt dat voor u in kaart.',
    ],
    [
        'vraag'    => 'Heb ik een energielabel nodig voor ik begin met verduurzamen?',
        'antwoord' => 'Een energielabel is een uitstekende nulmeting — het geeft u een objectief beeld van hoe uw gebouw presteert en waar de grootste winst te behalen is. Het is niet wettelijk verplicht als startpunt voor verduurzaming, maar het maakt uw beslissingen een stuk scherper. Zeker voor kantoren van 100 m² of groter, die al een labelplicht hebben, is het een logische eerste stap.',
    ],
    [
        'vraag'    => 'Wat kost een adviesgesprek bij STAP Energie?',
        'antwoord' => "Een eerste kennismakingsgesprek is vrijblijvend en gratis. Daarin brengen we uw situatie in kaart en kijken we samen welke stap voor u het meest logisch is. Op basis van dat gesprek ontvangt u een heldere offerte — zonder verborgen kosten.",
    ],
    [
        'vraag'    => 'Mijn leverancier stelt warmtepompen voor. Is dat een goed advies?',
        'antwoord' => 'Misschien — maar het hangt af van uw situatie. Een warmtepomp werkt het best in een goed geïsoleerd gebouw. Zonder voldoende isolatiewaarde betaalt u waarschijnlijk meer dan nodig. Dat is precies waarom wij beginnen met inzicht en volgorde, niet met een product. Als de warmtepomp de juiste stap is, adviseren we die ook — maar pas op het juiste moment.',
    ],
];
?>
<?php include $root . 'includes/head.php'; ?>
<?php include $root . 'includes/nav.php'; ?>
<?php include $root . 'includes/breadcrumb.php'; ?>
<?php include $root . 'includes/hero.php'; ?>
<?php include $root . 'includes/trust.php'; ?>

<?php
/* ── SECTIE 1: Drie redenen ── */
$kaarten_label   = 'Waarom verduurzamen';
$kaarten_titel   = 'Al lang geen idealistische keuze meer';
$kaarten_intro   = 'Wie verduurzaamt omwille van de planeet heeft een nobel motief. Maar de zakelijke argumenten zijn inmiddels sterk genoeg om er gewoon op bedrijfseconomische gronden voor te kiezen.';
$kaarten_variant = 'grijs';
$kaarten_cols    = 3;
$kaarten = [
    [
        'foto'     => '/images/dienst-inkoop.jpg',
        'foto_alt' => 'Lagere energiekosten voor uw bedrijf',
        'titel'    => 'Lagere kosten',
        'tekst'    => 'Energie is voor de meeste bedrijven de grootste variabele kostenpost. Wie zijn verbruik structureel verlaagt, betaalt minder — ongeacht waar de energieprijs naartoe beweegt.',
    ],
    [
        'foto'     => '/images/hero-bedrijfspand.jpg',
        'foto_alt' => 'Minder afhankelijk van de energiemarkt',
        'titel'    => 'Minder afhankelijk',
        'tekst'    => 'Een besluit in Moskou, een storm in de Noordzee — de energieprijs wordt bepaald door factoren waar u geen invloed op heeft. Wie zijn eigen verbruik verlaagt en deels zelf opwekt, verkleint die afhankelijkheid structureel.',
    ],
    [
        'foto'     => '/images/erik-zakelijk.jpg',
        'foto_alt' => 'Betere financierbaarheid van uw vastgoed',
        'titel'    => 'Betere financierbaarheid',
        'tekst'    => 'Banken sturen stil maar consequent op verduurzaming. Bij een financieringsaanvraag wordt steeds vaker gevraagd naar energieverbruik en gebouwprestatie. Een slecht energieprofiel kost u rente — of het gesprek überhaupt.',
    ],
];
include $root . 'includes/components/section-kaarten.php';
unset($kaarten_label, $kaarten_titel, $kaarten_intro, $kaarten_variant, $kaarten_cols, $kaarten);
?>

<?php
/* ── SECTIE 2: De valkuil — section-contrast ── */
$contrast_variant = 'wit';
$contrast_label   = 'De gebruikelijke aanpak';
$contrast_titel   = 'Zo werkt de markt — en waarom dat raar is';
$contrast_intro   = 'De meeste verduurzamingstrajecten beginnen bij een leverancier die al weet wat hij verkoopt. Het antwoord staat vast; alleen de vraag moet nog worden geformuleerd.';
$contrast_links = [
    'tag'   => 'Gebruikelijke route',
    'items' => [
        'Leverancier stelt warmtepomp of zonnepanelen voor',
        'Offerte volgt vóór er iemand naar het verbruik heeft gekeken',
        'Investering wordt gedaan in opwek, terwijl het pand nog lekt',
        'Vijf jaar later blijkt de volgorde niet te kloppen',
    ],
    'noot'  => 'Het probleem is niet de maatregel — het is het moment.',
];
$contrast_rechts = [
    'tag'   => 'De STAP-aanpak',
    'items' => [
        'Eerst inzicht: waar zit het verbruik, wat kost het echt?',
        'Vervolgens de goede volgorde bepalen',
        'Kleine maatregelen die direct renderen',
        'Grote investeringen op het juiste moment — niet te vroeg',
    ],
    'noot'  => 'Wie de volgorde goed heeft, heeft nooit spijt van een eerder genomen stap.',
];
include $root . 'includes/components/section-contrast.php';
unset($contrast_variant, $contrast_label, $contrast_titel, $contrast_intro, $contrast_links, $contrast_rechts);
?>

<?php
/* ── SECTIE 3: Het stappenplan ── */
$stappen_label   = 'Het stappenplan';
$stappen_titel   = 'Eerst reduceren, dan opwekken';
$stappen_intro   = 'Goed inregelen wat er al staat levert tussen de 10 en 30 procent besparing op — zonder ook maar iets te kopen. Wie dat overslaat en direct naar de zonnepanelen gaat, investeert in de verkeerde volgorde.';
$stappen_variant = 'grijs';
$stappen_cols    = 3;
$stappen = [
    [
        'nummer' => '1',
        'titel'  => 'Inzicht in uw verbruik',
        'tekst'  => 'Weet wat u verbruikt — wanneer, waarvoor en hoeveel. In verrassend veel gevallen heeft men hier geen idee van. Een energielabel of verbruiksanalyse geeft u de nulmeting die elk goed plan nodig heeft.',
        'extra'  => '<a href="' . $root . 'energielabels/" class="stap__link">Meer over energielabels →</a>',
    ],
    [
        'nummer' => '2',
        'titel'  => 'Installaties goed inregelen',
        'tekst'  => 'Tijdklokken die na een stroomstoring verkeerd staan. Ventilatie die loopt als het gebouw leeg is. Een klimaatsysteem altijd op dezelfde temperatuur. Dit kost u tientallen procenten energieverspilling — herstellen kost vaak niet meer dan een paar honderd euro.',
        'extra'  => '',
    ],
    [
        'nummer' => '3',
        'titel'  => 'Kleine, goedkope maatregelen',
        'tekst'  => 'LED-verlichting (als u dat al niet heeft, is het gewoon hygiëne). Bewegingssensoren. CO₂-gestuurde ventilatie. Tijdklokken op installaties die onnodig draaien. Lage investering, korte terugverdientijd, direct resultaat.',
        'extra'  => '',
    ],
    [
        'nummer' => '4',
        'titel'  => 'Bouwkundige aanpak',
        'tekst'  => 'Dakisolatie, gevelisolatie, HR++-glas. Duur als losse investering — maar slim gepland op het moment dat er toch al onderhoud staat. Wie het dak vervangt en het dan niet isoleert, heeft een jaar later spijt.',
        'extra'  => '',
    ],
    [
        'nummer' => '5',
        'titel'  => 'Installatietechnische verbetering',
        'tekst'  => 'Warmtepomp, warmteterugwinning, vraaggestuurde ventilatie, weersafhankelijke temperatuurregeling. Dit zijn de maatregelen die het meest opleveren — maar alleen als de bouwschil al op orde is.',
        'extra'  => '',
    ],
    [
        'nummer' => '6',
        'titel'  => 'Opwekken en opslaan',
        'tekst'  => 'Zonnepanelen en batterijen. De kroon op een goed verduurzamingstraject — maar pas zinvol als de vraagkant is aangepakt. Anders investeert u te veel in opwek voor een verbruik dat u had kunnen halveren.',
        'extra'  => '',
    ],
];
include $root . 'includes/components/section-stappen.php';
unset($stappen_label, $stappen_titel, $stappen_intro, $stappen_variant, $stappen_cols, $stappen);
?>

<?php
/* ── SECTIE 4: Subsidies ── */
$kaarten_label   = 'Subsidies';
$kaarten_titel   = 'Wat er nu beschikbaar is';
$kaarten_intro   = 'Subsidies verlagen de terugverdientijd van maatregelen aanzienlijk — maar welke regeling het meest oplevert, hangt af van uw situatie. De belangrijkste regelingen op een rij.';
$kaarten_variant = 'wit';
$kaarten_cols    = 2;
$kaarten = [
    [
        'titel'     => 'Voor particulieren',
        'badge'     => 'Particulier',
        'tekst'     => 'Als woningeigenaar heeft u toegang tot de SEEH (subsidie voor spouwmuur-, vloer- en dakisolatie), de ISDE (warmtepompen en zonneboilers) en de Energiebespaarlening via het Warmtefonds. Gemeenten bieden soms aanvullende regelingen.',
        'cta_tekst' => 'Meer voor particulieren →',
        'cta_url'   => $root . 'verduurzaming-subsidie/particulieren/',
        'cta_stijl' => 'link',
    ],
    [
        'titel'      => 'Voor bedrijven',
        'badge'      => 'Zakelijk',
        'tekst'      => 'Zakelijke verduurzaming combineert meerdere regelingen: de ISDE voor warmtepompen en isolatie, de EIA (Energie-investeringsaftrek) voor energiezuinige bedrijfsmiddelen en de SDE++ voor hernieuwbare energieopwekking. Welke combinatie het meest oplevert, is altijd situatie-afhankelijk.',
        'cta_tekst'  => 'Vraag een adviesgesprek aan →',
        'cta_url'    => '#contact',
        'cta_stijl'  => 'primair',
        'uitgelicht' => true,
    ],
];
include $root . 'includes/components/section-kaarten.php';
unset($kaarten_label, $kaarten_titel, $kaarten_intro, $kaarten_variant, $kaarten_cols, $kaarten);
?>

<?php
/* ── SECTIE 5: Segment-keuze ── */
$kaarten_label   = 'Voor wie';
$kaarten_titel   = 'Particulier of zakelijk?';
$kaarten_intro   = 'De aanpak, subsidiemogelijkheden en volgorde verschillen per situatie. Kies uw situatie voor gerichte informatie.';
$kaarten_variant = 'grijs';
$kaarten_cols    = 2;
$kaarten = [
    [
        'foto'      => '/images/hero-woningen.jpg',
        'foto_alt'  => 'Verduurzaming voor woningeigenaren',
        'titel'     => 'Woningeigenaar',
        'tekst'     => 'U wilt uw woning verduurzamen en weten welke maatregelen het meest opleveren — en welke subsidies u kunt combineren.',
        'cta_tekst' => 'Naar particulieren →',
        'cta_url'   => $root . 'verduurzaming-subsidie/particulieren/',
        'cta_stijl' => 'secundair',
    ],
    [
        'foto'       => '/images/dienst-verduurzaming.jpg',
        'foto_alt'   => 'Verduurzaming voor bedrijven en vastgoed',
        'titel'      => 'Bedrijf of vastgoed',
        'tekst'      => 'U heeft een bedrijfspand, kantoor of vastgoedportefeuille en wilt weten hoe u slim én in de juiste volgorde verduurzaamt.',
        'cta_tekst'  => 'Vraag een adviesgesprek aan →',
        'cta_url'    => '#contact',
        'cta_stijl'  => 'primair',
        'uitgelicht' => true,
    ],
];
include $root . 'includes/components/section-kaarten.php';
unset($kaarten_label, $kaarten_titel, $kaarten_intro, $kaarten_variant, $kaarten_cols, $kaarten);
?>

<?php
/* ── SECTIE 6: Formulier ── */
$sectie_label   = 'Contact';
$sectie_titel   = 'Waar begint u?';
$sectie_intro   = 'Een eerste gesprek is vrijblijvend. We brengen uw situatie in kaart en kijken samen welke stap het meest logisch is — zonder verkoopbelang.';
$formulier_type = 'zakelijk';
include $root . 'includes/components/section-form.php';
unset($sectie_label, $sectie_titel, $sectie_intro, $formulier_type);
?>

<?php include $root . 'includes/faq.php'; ?>

<?php
$cta_titel = 'Niet alles hoeft in één keer.';
$cta_tekst = "Maar beginnen met de goede vraag scheelt u soms tienduizenden euro's. Neem contact op voor een vrijblijvend adviesgesprek.";
$cta_url   = '#contact';
$cta_knop  = 'Gratis adviesgesprek aanvragen';
include $root . 'includes/cta.php';
?>

<?php include $root . 'includes/footer.php'; ?>
