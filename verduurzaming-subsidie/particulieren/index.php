<?php
/**
 * verduurzaming-subsidie/particulieren/index.php
 * SEO-kennispagina subsidies verduurzaming particulieren
 */
$root        = dirname(dirname(dirname(__FILE__))) . '/';
$title       = 'Subsidie voor verduurzaming woning 2026 | STAP Energie';
$description = 'Welke subsidies zijn er voor het verduurzamen van je woning? Overzicht van ISDE, warmtepomp, isolatie, zonneboiler en PVT-panelen. Actuele bedragen en voorwaarden.';
$canonical   = 'https://stapenergie.nl/verduurzaming-subsidie/particulieren/';

$breadcrumbs = [
  ['label' => 'Home',                     'url' => '/'],
  ['label' => 'Verduurzaming & Subsidie', 'url' => '/verduurzaming-subsidie/'],
  ['label' => 'Particulieren'],
];

include $root . 'includes/head.php';
include $root . 'includes/nav.php';
include $root . 'includes/breadcrumb.php';

// ── Hero ──────────────────────────────────────────────────────────────────
$hero_variant  = 'sub';
$hero_bg       = '/images/hero-verduurzaming.jpg';
$hero_eyebrow  = 'Verduurzaming & Subsidie';
$hero_titel    = 'Subsidie voor het verduurzamen van je woning';
$hero_lead     = 'Warmtepomp, isolatie, zonneboiler — voor de meeste ingrepen betaalt de overheid een deel mee. In 2026 is daar ruim €500 miljoen voor gereserveerd. Toch laat een groot deel van de woningeigenaren geld liggen. Niet omdat ze niet willen verduurzamen, maar omdat de regels net iets ingewikkelder zijn dan de folder doet vermoeden.';
$hero_cta      = 'Bekijk alle subsidies';
$hero_cta_url  = '#subsidies';
include $root . 'includes/hero.php';
include $root . 'includes/trust.php';

// ── Subsidie-overzicht ────────────────────────────────────────────────────
$kaarten_variant = 'grijs';
$kaarten_label   = 'Subsidies 2026';
$kaarten_titel   = 'Waar kun je subsidie voor krijgen?';
$kaarten_intro   = 'De meeste regelingen lopen via de ISDE van de Rijksoverheid. Vijf categorieën die voor woningeigenaren relevant zijn.';
$kaarten_cols    = 3;
$kaarten_id      = 'subsidies';
$kaarten_items   = [
  [
    'titel'     => 'Isolatie',
    'icoon'     => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>',
    'tekst'     => 'Dak, vloer, spouwmuur, glas — voor alle vijf typen geldt een vast bedrag per m². Voer je binnen 24 maanden twee of meer maatregelen uit, of combineer je isolatie met een warmtepomp of zonneboiler? Dan verdubbelt het bedrag. Eén van de weinige subsidies waarbij meer doen letterlijk meer oplevert.',
    'extra'     => '<div style="margin-top:12px;"><span class="badge badge--groen">ISDE</span></div>',
    'cta_tekst' => 'Meer over isolatie',
    'cta_url'   => '/kennisbank/isolatie/',
    'cta_stijl' => 'outline',
  ],
  [
    'titel'     => 'Warmtepomp',
    'icoon'     => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>',
    'tekst'     => 'Een warmtepomp haalt warmte uit lucht, bodem of grondwater. De ISDE loopt van ongeveer €2.125 voor een hybride systeem tot ruim €4.400 voor een bodemwarmtepomp. Minimaal energielabel A++ vereist. Nieuw in 2026: subsidie is eens per drie jaar aanvraagbaar per systeem.',
    'extra'     => '<div style="margin-top:12px;"><span class="badge badge--groen">ISDE</span></div>',
    'cta_tekst' => 'Meer over warmtepompen',
    'cta_url'   => '/kennisbank/warmtepomp/',
    'cta_stijl' => 'outline',
  ],
  [
    'titel'     => 'Zonneboiler & PVT-panelen',
    'icoon'     => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="5"/><line x1="12" y1="1" x2="12" y2="3"/><line x1="12" y1="21" x2="12" y2="23"/><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/><line x1="1" y1="12" x2="3" y2="12"/><line x1="21" y1="12" x2="23" y2="12"/><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"/><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"/></svg>',
    'tekst'     => 'Een zonneboiler gebruikt zonwarmte voor je warmwater — onzichtbaar op het dak, merkbaar op de rekening. PVT-panelen combineren dat met stroomopwekking in één systeem. Meer opbrengst per m² dak dan losse systemen. Beide vallen onder de ISDE; voor een zonneboiler begin je al bij €300 subsidie.',
    'extra'     => '<div style="margin-top:12px;"><span class="badge badge--groen">ISDE</span></div>',
    'cta_tekst' => 'Meer over zonneboilers & PVT',
    'cta_url'   => '/kennisbank/zonneboiler/',
    'cta_stijl' => 'outline',
  ],
  [
    'titel'     => 'Zonnepanelen (PV-installatie)',
    'icoon'     => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>',
    'tekst'     => 'Standaard zonnepanelen vallen sinds 2023 niet meer onder de ISDE. Wat er nog wel is: een btw-nultarief op de aanschaf. De salderingsregeling — waarbij teruggeleverde stroom weggestreept wordt tegen je verbruik — wordt stapsgewijs afgebouwd. Zonnepanelen blijven de moeite waard, maar reken altijd met actuele cijfers.',
    'extra'     => '<div style="margin-top:12px;"><span class="badge badge--blauw">Btw-nultarief</span></div>',
    'cta_tekst' => 'Meer over zonnepanelen',
    'cta_url'   => '/kennisbank/zonnepanelen/',
    'cta_stijl' => 'outline',
  ],
  [
    'titel'     => 'Overige maatregelen',
    'icoon'     => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"/><path d="M19.07 4.93a10 10 0 010 14.14M4.93 4.93a10 10 0 000 14.14"/></svg>',
    'tekst'     => 'De ISDE dekt meer dan alleen de grote ingrepen. Aansluiting op een warmtenet levert €3.775 op, inclusief verwijdering van de gasaansluiting. Een elektrische kookplaat: €400. Nieuw in 2026: energiezuinige ventilatie is subsidiabel, mits gecombineerd met een isolatiemaatregel — eenmalig €400 extra.',
    'extra'     => '<div style="margin-top:12px;"><span class="badge badge--groen">ISDE</span></div>',
    'cta_tekst' => 'Volledig overzicht op rvo.nl',
    'cta_url'   => 'https://www.rvo.nl/subsidies-financiering/isde/woningeigenaren',
    'cta_stijl' => 'outline',
  ],
];
include $root . 'includes/components/section-kaarten.php';

// ── Highlight: dubbelingsregel ────────────────────────────────────────────
?>
<section class="sectie sectie--groen-licht">
  <div class="sectie__inner sectie__inner--smal">
    <p class="sectie-highlight__tekst"><strong>Slim combineren loont:</strong> combineer je twee of meer maatregelen binnen 24 maanden? Dan verdubbelt je isolatiesubsidie — ook als je isolatie combineert met een warmtepomp of zonneboiler. Weinig mensen weten dit op het moment dat ze de eerste offerte aanvragen.</p>
  </div>
</section>
<?php

// ── Hoe de aanvraag werkt ─────────────────────────────────────────────────
$stappen_variant = 'wit';
$stappen_label   = 'Aanvragen';
$stappen_titel   = 'Hoe de aanvraag werkt';
$stappen_intro   = 'ISDE vraag je altijd achteraf aan — nadat de maatregel is uitgevoerd en betaald. Aanvragen doe je zelf via rvo.nl, gratis en zonder tussenpersoon.';
$stappen_cols    = 4;
$stappen_items   = [
  [
    'nummer' => 1,
    'titel'  => 'Laat de maatregel uitvoeren',
    'tekst'  => 'Door een gecertificeerde installateur. Doe-het-zelfwerkzaamheden tellen niet mee, ongeacht de kwaliteit van het materiaal. Vraag de installateur om op de factuur het aantal m², de meldcode en het betaalbewijs te vermelden.',
  ],
  [
    'nummer' => 2,
    'titel'  => 'Bewaar je documenten',
    'tekst'  => 'Je hebt nodig: factuur met meldcode en m², betaalbewijs, en minimaal één foto van de uitgevoerde werkzaamheden. Ontbrekende documenten zijn de meest voorkomende reden voor een afwijzing.',
  ],
  [
    'nummer' => 3,
    'titel'  => 'Vraag aan via rvo.nl',
    'tekst'  => 'Inloggen met DigiD, ISDE-aanvraagformulier invullen, documenten uploaden. Je hebt hier 24 maanden de tijd voor na uitvoering van de eerste maatregel.',
  ],
  [
    'nummer' => 4,
    'titel'  => 'Ontvang je subsidie',
    'tekst'  => 'Bij een volledige aanvraag beslist de RVO binnen 8 weken. Bij goedkeuring wordt het bedrag rechtstreeks overgemaakt.',
  ],
];
include $root . 'includes/components/section-stappen.php';

// ── Wat valt buiten de subsidie ───────────────────────────────────────────
?>
<section class="sectie sectie--grijs">
  <div class="sectie__inner">
    <span class="sectie__label">Let op</span>
    <h2 class="sectie__titel">Twee dingen die anders werken dan je misschien denkt</h2>
    <div class="sectie-kaarten__grid sectie-kaarten__grid--2">
      <?php $card = [
        'titel' => 'Zonnepanelen zonder ISDE',
        'icoon' => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>',
        'tekst' => 'Zonnepanelen en subsidie worden in veel gesprekken als vanzelfsprekend in één adem genoemd. Dat klopt al een paar jaar niet meer. Standaard PV-panelen vallen buiten de ISDE. Het btw-nultarief is er nog wel, en de salderingsregeling loopt nog — maar daalt elk jaar verder. PVT-panelen, die naast stroom ook warmte opwekken, vallen wél onder de ISDE.',
      ]; include $root . 'includes/components/card.php'; ?>
      <?php $card = [
        'titel' => 'Doe-het-zelf telt niet mee',
        'icoon' => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 000 1.4l1.6 1.6a1 1 0 001.4 0l3.77-3.77a6 6 0 01-7.94 7.94l-6.91 6.91a2.12 2.12 0 01-3-3l6.91-6.91a6 6 0 017.94-7.94l-3.76 3.76z"/></svg>',
        'tekst' => 'ISDE is bedoeld voor professioneel uitgevoerde werkzaamheden. Je moet kunnen aantonen dat een gecertificeerde installateur het werk heeft gedaan — ook als het materiaal zelf perfect voldoet aan alle eisen. Zelf isoleren levert geen subsidie op.',
      ]; include $root . 'includes/components/card.php'; ?>
    </div>
  </div>
</section>
<?php

// ── Energielabel als startpunt ────────────────────────────────────────────
?>
<section class="sectie sectie--wit">
  <div class="sectie__inner">
    <span class="sectie__label">Slimmer verduurzamen</span>
    <h2 class="sectie__titel">Weten waar je begint, scheelt achteraf</h2>
    <div class="sectie-two-col">
      <div class="sectie-two-col__tekst">
        <p>Een energielabel is meer dan een letter op papier. Het officiële rapport dat erbij hoort bevat concrete adviezen over welke maatregelen voor jouw woning het meeste opleveren — van isolatiewaarden tot installaties. Inclusief een verduurzamingsrapport met nuttige aanbevelingen om je woning stap voor stap energiezuiniger te maken.</p>
        <p>Zo weet je vooraf waar de subsidie-euro\'s het hardst werken, in plaats van dat je achteraf terugrekent.</p>
        <p>STAP verzorgt officiële energielabels met verduurzamingsrapport voor woningen in de regio Leusden, Amersfoort en omgeving. Doorgaans binnen twee werkdagen beschikbaar.</p>
        <a href="/energielabels/woningen/" class="knop knop--primair">Vraag een energielabel aan</a>
      </div>
      <div class="sectie-two-col__media">
        <img src="/images/erik-advies.jpg" alt="STAP Energie energieadviseur" loading="lazy">
      </div>
    </div>
  </div>
</section>
<?php

// ── FAQ ───────────────────────────────────────────────────────────────────
$faq_label = 'Veelgestelde vragen';
$faq_titel = 'Veelgestelde vragen over verduurzamingssubsidie';
$faq_items = [
  [
    'vraag'    => 'Voor welke maatregelen kan ik ISDE aanvragen?',
    'antwoord' => 'Warmtepompen, zonneboilers, PVT-panelen, vijf typen isolatie, elektrische kookplaten, aansluiting op een warmtenet en — nieuw in 2026 — energiezuinige ventilatie gecombineerd met isolatie. Het volledige overzicht staat op <a href="https://www.rvo.nl/subsidies-financiering/isde/woningeigenaren" target="_blank" rel="noopener">rvo.nl</a>.',
  ],
  [
    'vraag'    => 'Moet ik eigenaar én bewoner zijn?',
    'antwoord' => 'Ja. ISDE is uitsluitend voor eigenaar-bewoners. Een tweede woning, vakantiewoning of verhuurde woning komt niet in aanmerking — ook niet als je er zelf de kosten voor maakt.',
  ],
  [
    'vraag'    => 'Kan ik subsidie aanvragen voor zonnepanelen?',
    'antwoord' => 'Standaard PV-panelen vallen niet meer onder de ISDE. Het btw-nultarief geldt nog wel. PVT-panelen — die naast stroom ook warmte opwekken — vallen wél onder de ISDE.',
  ],
  [
    'vraag'    => 'Ik heb al betaald. Kan ik nog aanvragen?',
    'antwoord' => 'Dat is precies hoe het werkt. ISDE vraag je altijd achteraf aan, nadat de maatregel is uitgevoerd en betaald. Je hebt daar 24 maanden de tijd voor.',
  ],
  [
    'vraag'    => 'Zijn er ook lokale subsidies naast de ISDE?',
    'antwoord' => 'Ja, veel gemeenten bieden aanvullende regelingen aan. Via de <a href="https://www.verbeterjehuis.nl/energiesubsidiewijzer" target="_blank" rel="noopener">Energiesubsidiewijzer op verbeterjehuis.nl</a> vind je wat er in jouw gemeente beschikbaar is.',
  ],
  [
    'vraag'    => 'Hoe lang duurt de aanvraag?',
    'antwoord' => 'Bij een complete aanvraag beslist de RVO binnen 8 weken. De meest voorkomende vertraging: een factuur zonder meldcode of ontbrekende foto\'s van de werkzaamheden.',
  ],
];
include $root . 'includes/faq.php';

// ── Afsluitende links ─────────────────────────────────────────────────────
$kaarten_variant = 'grijs';
$kaarten_label   = 'Ook interessant';
$kaarten_titel   = '';
$kaarten_intro   = '';
$kaarten_cols    = 2;
unset($kaarten_id);
$kaarten_items   = [
  [
    'titel'     => 'Energielabel voor je woning',
    'icoon'     => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M8 7h8M8 12h5M8 17h3"/></svg>',
    'tekst'     => 'Een officieel energielabel inclusief verduurzamingsrapport. Binnen twee werkdagen beschikbaar in de regio Leusden en Amersfoort.',
    'cta_tekst' => 'Naar energielabels woningen',
    'cta_url'   => '/energielabels/woningen/',
    'cta_stijl' => 'solid',
  ],
  [
    'titel'     => 'Verduurzaming voor bedrijven',
    'icoon'     => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="15" rx="1"/><path d="M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2"/></svg>',
    'tekst'     => 'Ook zakelijk zijn er subsidies en maatregelen beschikbaar. Bekijk het overzicht voor ondernemers en vastgoedeigenaren.',
    'cta_tekst' => 'Naar verduurzaming zakelijk',
    'cta_url'   => '/verduurzaming-subsidie/zakelijk/',
    'cta_stijl' => 'outline',
  ],
];
include $root . 'includes/components/section-kaarten.php';

include $root . 'includes/footer.php';
?>
