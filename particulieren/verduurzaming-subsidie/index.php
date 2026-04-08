<?php
$root = dirname(dirname(dirname(__FILE__))) . '/';
$paginatitel = 'Subsidie voor verduurzaming woning 2026 | STAP Energie';
$metadescription = 'Welke subsidies zijn er voor het verduurzamen van je woning? Overzicht van ISDE, warmtepomp, isolatie, zonneboiler en PVT-panelen. Actuele bedragen en voorwaarden.';
require_once $root . 'includes/head.php';
require_once $root . 'includes/nav.php';
?>

<?php
$hero = [
    'label'    => 'Verduurzaming & Subsidie',
    'titel'    => 'Subsidie voor het verduurzamen van je woning',
    'intro'    => 'Warmtepomp, isolatie, zonneboiler — voor de meeste ingrepen betaalt de overheid een deel mee. In 2026 is daar ruim €500 miljoen voor gereserveerd. Toch laat een groot deel van de woningeigenaren geld liggen. Niet omdat ze niet willen verduurzamen, maar omdat de regels net iets ingewikkelder zijn dan de folder doet vermoeden. Hieronder vind je de subsidies die er zijn, wat je er concreet voor terugkrijgt en waar je ze aanvraagt.',
    'cta_tekst' => 'Bekijk alle subsidies',
    'cta_url'   => '#subsidies',
    'cta_stijl' => 'primair',
];
require_once $root . 'includes/hero.php';
?>

<?php require_once $root . 'includes/trust.php'; ?>

<?php
// ── SECTIE 2: SUBSIDIE-OVERZICHT ──────────────────────────────────────────
$kaarten_label = 'Subsidies 2026';
$kaarten_titel = 'Waar kun je subsidie voor krijgen?';
$kaarten_intro = 'De meeste regelingen lopen via de ISDE van de Rijksoverheid. Vijf categorieën die voor woningeigenaren relevant zijn.';
$kaarten_variant = 'grijs';
$kaarten_cols = 3;
$kaarten_id = 'subsidies';

$kaarten = [
    [
        'titel'     => 'Isolatie',
        'icoon'     => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>',
        'tekst'     => 'Dak, vloer, spouwmuur, glas — voor alle vijf typen geldt een vast bedrag per m². Voer je binnen 24 maanden twee of meer maatregelen uit, of combineer je isolatie met een warmtepomp of zonneboiler? Dan verdubbelt het bedrag. Eén van de weinige subsidies waarbij meer doen letterlijk meer oplevert.',
        'badge'     => ['tekst' => 'ISDE', 'kleur' => 'groen'],
        'cta_tekst' => 'Meer over isolatie',
        'cta_url'   => '/kennisbank/isolatie/',
        'cta_stijl' => 'secundair',
    ],
    [
        'titel'     => 'Warmtepomp',
        'icoon'     => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2a10 10 0 100 20A10 10 0 0012 2z"/><path d="M12 6v6l4 2"/></svg>',
        'tekst'     => 'Een warmtepomp haalt warmte uit lucht, bodem of grondwater. De ISDE loopt van ongeveer €2.125 voor een hybride systeem tot ruim €4.400 voor een bodemwarmtepomp. Minimaal energielabel A++ vereist. Nieuw in 2026: subsidie is eens per drie jaar aanvraagbaar per systeem.',
        'badge'     => ['tekst' => 'ISDE', 'kleur' => 'groen'],
        'cta_tekst' => 'Meer over warmtepompen',
        'cta_url'   => '/kennisbank/warmtepomp/',
        'cta_stijl' => 'secundair',
    ],
    [
        'titel'     => 'Zonneboiler & PVT-panelen',
        'icoon'     => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="5"/><line x1="12" y1="1" x2="12" y2="3"/><line x1="12" y1="21" x2="12" y2="23"/><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/><line x1="1" y1="12" x2="3" y2="12"/><line x1="21" y1="12" x2="23" y2="12"/><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"/><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"/></svg>',
        'tekst'     => 'Een zonneboiler gebruikt zonwarmte voor je warmwater — onzichtbaar op het dak, merkbaar op de rekening. PVT-panelen combineren dat met stroomopwekking in één systeem. Meer opbrengst per m² dak dan losse systemen. Beide vallen onder de ISDE; voor een zonneboiler begin je al bij €300 subsidie.',
        'badge'     => ['tekst' => 'ISDE', 'kleur' => 'groen'],
        'cta_tekst' => 'Meer over zonneboilers & PVT',
        'cta_url'   => '/kennisbank/zonneboiler/',
        'cta_stijl' => 'secundair',
    ],
    [
        'titel'     => 'Zonnepanelen (PV-installatie)',
        'icoon'     => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2"/><line x1="12" y1="12" x2="12" y2="16"/><line x1="10" y1="14" x2="14" y2="14"/></svg>',
        'tekst'     => 'Standaard zonnepanelen vallen sinds 2023 niet meer onder de ISDE. Wat er nog wel is: een btw-nultarief op de aanschaf. De salderingsregeling — waarbij teruggeleverde stroom weggestreept wordt tegen je verbruik — wordt stapsgewijs afgebouwd. Zonnepanelen blijven de moeite waard, maar reken altijd met actuele cijfers.',
        'badge'     => ['tekst' => 'Btw-nultarief', 'kleur' => 'blauw'],
        'cta_tekst' => 'Meer over zonnepanelen',
        'cta_url'   => '/kennisbank/zonnepanelen/',
        'cta_stijl' => 'secundair',
    ],
    [
        'titel'     => 'Overige maatregelen',
        'icoon'     => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"/><path d="M19.07 4.93a10 10 0 010 14.14M4.93 4.93a10 10 0 000 14.14"/></svg>',
        'tekst'     => 'De ISDE dekt meer dan alleen de grote ingrepen. Aansluiting op een warmtenet levert €3.775 op, inclusief verwijdering van de gasaansluiting. Een elektrische kookplaat: €400. Nieuw in 2026: energiezuinige ventilatie is subsidiabel, mits gecombineerd met een isolatiemaatregel — eenmalig €400 extra.',
        'badge'     => ['tekst' => 'ISDE', 'kleur' => 'groen'],
        'cta_tekst' => 'Volledig overzicht op rvo.nl',
        'cta_url'   => 'https://www.rvo.nl/subsidies-financiering/isde/woningeigenaren',
        'cta_stijl' => 'secundair',
    ],
];
require_once $root . 'includes/sections/section-kaarten.php';
?>

<?php
// ── SECTIE 3: HIGHLIGHT ────────────────────────────────────────────────────
$highlight = [
    'tekst' => 'Combineer je twee of meer maatregelen binnen 24 maanden? Dan verdubbelt je isolatiesubsidie — ook als je isolatie combineert met een warmtepomp of zonneboiler. Weinig mensen weten dit op het moment dat ze de eerste offerte aanvragen.',
    'variant' => 'groen',
];
require_once $root . 'includes/sections/section-highlight.php';
?>

<?php
// ── SECTIE 4: HOE VRAAG JE ISDE AAN ──────────────────────────────────────
$stappen_label   = 'Aanvragen';
$stappen_titel   = 'Hoe de aanvraag werkt';
$stappen_intro   = 'ISDE vraag je altijd achteraf aan — nadat de maatregel is uitgevoerd en betaald. Aanvragen doe je zelf via rvo.nl, gratis en zonder tussenpersoon.';
$stappen_variant = 'wit';

$stappen = [
    [
        'titel' => 'Laat de maatregel uitvoeren',
        'tekst' => 'Door een gecertificeerde installateur. Doe-het-zelfwerkzaamheden tellen niet mee, ongeacht de kwaliteit van het materiaal. Vraag de installateur om op de factuur het aantal m², de meldcode en het betaalbewijs te vermelden.',
    ],
    [
        'titel' => 'Bewaar je documenten',
        'tekst' => 'Je hebt nodig: factuur met meldcode en m², betaalbewijs, en minimaal één foto van de uitgevoerde werkzaamheden. Ontbrekende documenten zijn de meest voorkomende reden voor een afwijzing.',
    ],
    [
        'titel' => 'Vraag aan via rvo.nl',
        'tekst' => 'Inloggen met DigiD, ISDE-aanvraagformulier invullen, documenten uploaden. Je hebt hier 24 maanden de tijd voor na uitvoering van de eerste maatregel.',
    ],
    [
        'titel' => 'Ontvang je subsidie',
        'tekst' => 'Bij een volledige aanvraag beslist de RVO binnen 8 weken. Bij goedkeuring wordt het bedrag rechtstreeks overgemaakt.',
    ],
];
require_once $root . 'includes/sections/section-stappen.php';
?>

<?php
// ── SECTIE 5: WAT VALT BUITEN DE SUBSIDIE ────────────────────────────────
$twocol_label   = 'Let op';
$twocol_titel   = 'Twee dingen die anders werken dan je misschien denkt';
$twocol_variant = 'grijs';

$twocol_links = [
    'subtitel' => 'Zonnepanelen zonder ISDE',
    'tekst'    => 'Zonnepanelen en subsidie worden in veel gesprekken als vanzelfsprekend in één adem genoemd. Dat klopt al een paar jaar niet meer. Standaard PV-panelen vallen buiten de ISDE. Het btw-nultarief is er nog wel, en de salderingsregeling loopt nog — maar daalt elk jaar verder. PVT-panelen, die naast stroom ook warmte opwekken, vallen wél onder de ISDE.',
];

$twocol_rechts = [
    'subtitel' => 'Doe-het-zelf telt niet mee',
    'tekst'    => 'ISDE is bedoeld voor professioneel uitgevoerde werkzaamheden. Je moet kunnen aantonen dat een gecertificeerde installateur het werk heeft gedaan — ook als het materiaal zelf perfect voldoet aan alle eisen. Zelf isoleren levert geen subsidie op.',
];
require_once $root . 'includes/sections/section-two-col.php';
?>

<?php
// ── SECTIE 6: ENERGIELABEL ALS STARTPUNT ─────────────────────────────────
$twocol_label   = 'Slimmer verduurzamen';
$twocol_titel   = 'Weten waar je begint, scheelt achteraf';
$twocol_variant = 'wit';

$twocol_links = [
    'tekst'     => 'Een energielabel is meer dan een letter op papier. Het officiële rapport dat erbij hoort bevat concrete adviezen over welke maatregelen voor jouw woning het meeste opleveren — van isolatiewaarden tot installaties. Inclusief een verduurzamingsrapport met nuttige aanbevelingen om je woning stap voor stap energiezuiniger te maken. Zo weet je vooraf waar de subsidie-euro\'s het hardst werken, in plaats van dat je achteraf terugrekent.' . '<br><br>STAP verzorgt officiële energielabels met verduurzamingsrapport voor woningen in de regio Leusden, Amersfoort en omgeving. Doorgaans binnen twee werkdagen beschikbaar.',
    'cta_tekst' => 'Vraag een energielabel aan',
    'cta_url'   => '/energielabels/woningen/',
    'cta_stijl' => 'primair',
];

$twocol_rechts = [
    'foto'     => $root . 'images/erik-advies.jpg',
    'foto_alt' => 'STAP Energie adviseur',
];
require_once $root . 'includes/sections/section-two-col.php';
?>

<?php
// ── SECTIE 7: FAQ ─────────────────────────────────────────────────────────
$faq_titel   = 'Veelgestelde vragen';
$faq_variant = 'grijs';

$faq_items = [
    [
        'vraag'   => 'Voor welke maatregelen kan ik ISDE aanvragen?',
        'antwoord' => 'Warmtepompen, zonneboilers, PVT-panelen, vijf typen isolatie, elektrische kookplaten, aansluiting op een warmtenet en — nieuw in 2026 — energiezuinige ventilatie gecombineerd met isolatie. Het volledige overzicht staat op <a href="https://www.rvo.nl/subsidies-financiering/isde/woningeigenaren" target="_blank" rel="noopener">rvo.nl</a>.',
    ],
    [
        'vraag'   => 'Moet ik eigenaar én bewoner zijn?',
        'antwoord' => 'Ja. ISDE is uitsluitend voor eigenaar-bewoners. Een tweede woning, vakantiewoning of verhuurde woning komt niet in aanmerking — ook niet als je er zelf de kosten voor maakt.',
    ],
    [
        'vraag'   => 'Kan ik subsidie aanvragen voor zonnepanelen?',
        'antwoord' => 'Standaard PV-panelen vallen niet meer onder de ISDE. Het btw-nultarief geldt nog wel. PVT-panelen — die naast stroom ook warmte opwekken — vallen wél onder de ISDE.',
    ],
    [
        'vraag'   => 'Ik heb al betaald. Kan ik nog aanvragen?',
        'antwoord' => 'Dat is precies hoe het werkt. ISDE vraag je altijd achteraf aan, nadat de maatregel is uitgevoerd en betaald. Je hebt daar 24 maanden de tijd voor.',
    ],
    [
        'vraag'   => 'Zijn er ook lokale subsidies naast de ISDE?',
        'antwoord' => 'Ja, veel gemeenten bieden aanvullende regelingen aan. Via de <a href="https://www.verbeterjehuis.nl/energiesubsidiewijzer" target="_blank" rel="noopener">Energiesubsidiewijzer op verbeterjehuis.nl</a> vind je wat er in jouw gemeente beschikbaar is.',
    ],
    [
        'vraag'   => 'Hoe lang duurt de aanvraag?',
        'antwoord' => 'Bij een complete aanvraag beslist de RVO binnen 8 weken. De meest voorkomende vertraging: een factuur zonder meldcode of ontbrekende foto\'s van de werkzaamheden.',
    ],
];
require_once $root . 'includes/faq.php';
?>

<?php
// ── SECTIE 8: AFSLUITENDE LINKS ───────────────────────────────────────────
$kaarten_label   = 'Ook interessant';
$kaarten_titel   = '';
$kaarten_intro   = '';
$kaarten_variant = 'wit';
$kaarten_cols    = 2;
unset($kaarten_id);

$kaarten = [
    [
        'titel'     => 'Energielabel voor je woning',
        'tekst'     => 'Een officieel energielabel inclusief verduurzamingsrapport. Binnen twee werkdagen beschikbaar in de regio Leusden en Amersfoort.',
        'cta_tekst' => 'Naar energielabels woningen',
        'cta_url'   => '/energielabels/woningen/',
        'cta_stijl' => 'primair',
    ],
    [
        'titel'     => 'Verduurzaming voor bedrijven',
        'tekst'     => 'Ook zakelijk zijn er subsidies en maatregelen beschikbaar. Bekijk het overzicht voor ondernemers en vastgoedeigenaren.',
        'cta_tekst' => 'Naar verduurzaming zakelijk',
        'cta_url'   => '/verduurzaming-subsidie/zakelijk/',
        'cta_stijl' => 'secundair',
    ],
];
require_once $root . 'includes/sections/section-kaarten.php';
?>

<?php require_once $root . 'includes/footer.php'; ?>
