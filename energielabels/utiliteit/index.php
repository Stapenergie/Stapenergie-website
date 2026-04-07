<?php
/**
 * energielabels/utiliteit/index.php
 * Energielabel bedrijfspand (utiliteit)
 */
$root        = dirname(dirname(dirname(__FILE__))) . '/';
$title       = 'Energielabel Bedrijfspand | Officieel & Gecertificeerd | STAP Energie';
$description = 'Officieel energielabel voor uw bedrijfspand. Gecertificeerd EPA-adviseur, vaste prijzen, heel Nederland. Kantoren, winkels, scholen, zorg en meer.';
$canonical   = 'https://stapenergie.nl/energielabels/utiliteit/';

$breadcrumbs = [
  ['label' => 'Home',          'url' => '/'],
  ['label' => 'Energielabels', 'url' => '/energielabels/'],
  ['label' => 'Bedrijfspand'],
];

$cta_titel     = 'Klaar om uw bedrijfspand te laten opnemen?';
$cta_subtitel  = 'Vul het aanvraagformulier in en STAP Energie neemt binnen twee werkdagen contact op met een offerte op maat.';
$cta_knop      = 'Aanvraag indienen →';
$cta_knop_url  = '#aanvraag';
$cta_garanties = ['Gecertificeerd EPA-adviseur', 'Officieel geregistreerd in EP-online', 'Reactie binnen twee werkdagen'];

$faq_label = 'Veelgestelde vragen';
$faq_titel = 'Alles over het energielabel voor bedrijfspanden';
$faq_items = [
  ['vraag' => 'Geldt de label-C-plicht ook als ik mijn kantoor huur?',
   'antwoord' => 'Ja. De label-C-verplichting geldt voor het pand — ongeacht of u eigenaar of huurder bent. Het is echter primair de verantwoordelijkheid van de eigenaar om het label te regelen. Huurders doen er verstandig aan dit te bespreken met de verhuurder.'],
  ['vraag' => 'Wat gebeurt er als ik geen geldig energielabel heb?',
   'antwoord' => 'Bij ontbreken van een verplicht energielabel riskeert u een boete van de Rijksdienst voor Ondernemend Nederland (RVO) of de gemeente. Voor kantoren zonder label C of beter kan de gemeente het gebruik verbieden.'],
  ['vraag' => 'Hoe lang duurt de opname bij een bedrijfspand?',
   'antwoord' => 'De duur van de opname hangt af van de omvang en complexiteit van het pand. Voor een klein kantoor of winkel duurt de opname doorgaans 1 à 2 uur. Grotere panden kunnen een halve dag vergen.'],
  ['vraag' => 'Mijn pand is recent gerenoveerd — geldt het oude label nog?',
   'antwoord' => 'Na een renovatie vervalt het bestaande energielabel. U heeft een nieuwe opname nodig. Dit is echter ook een kans: door de verbeteringen scoort uw pand waarschijnlijk aanzienlijk beter dan voorheen.'],
  ['vraag' => 'Welk energielabel is verplicht voor kantoren?',
   'antwoord' => 'Kantoorgebouwen met een gebruiksoppervlakte van 100 m² of meer moeten minimaal energielabel C bezitten. Kantoren die hier niet aan voldoen mogen in principe niet meer als kantoor worden gebruikt.'],
  ['vraag' => 'Is het energielabel ook verplicht bij verkoop van een bedrijfspand?',
   'antwoord' => 'Ja. Bij verkoop, verhuur én oplevering van een bedrijfspand is een geldig energielabel verplicht. De koper of huurder heeft recht op een geldig label.'],
  ['vraag' => 'Moet ik het energielabel zichtbaar ophangen in mijn pand?',
   'antwoord' => 'Ja, per 29 mei 2026 geldt voor alle publiek toegankelijke bedrijfspanden groter dan 250 m² met een geldig energielabel de verplichting dit label zichtbaar op te hangen.'],
];

include $root . 'includes/head.php';
include $root . 'includes/nav.php';
include $root . 'includes/breadcrumb.php';

// ── Highlight: label-C-plicht
$highlight_variant = 'oranje';
$highlight_badge   = 'Label C-plicht';
$highlight_tekst   = '<strong>Kantoren groter dan 100 m² zijn verplicht minimaal energielabel C te hebben.</strong> Voldoet uw pand hier niet aan? De gemeente kan gebruik verbieden. <a href="#aanvraag">Regel het nu →</a>';
include $root . 'includes/components/section-highlight.php';

// ── Hero
$hero_variant  = 'sub';
$hero_bg       = '/images/hero-bedrijfspand.jpg';
$hero_eyebrow  = 'Officieel & erkend energielabel';
$hero_titel    = 'Energielabel voor uw <em>bedrijfspand</em>';
$hero_lead     = 'Verplicht bij verkoop, verhuur en oplevering. STAP Energie verzorgt officiële energielabels voor kantoren, winkels, scholen, zorginstellingen en meer — persoonlijk, transparant en snel.';
$hero_usps     = [
  'Gecertificeerd EPA-adviseur',
  'Reactie binnen twee werkdagen',
  'Heel Nederland',
  'Officieel geregistreerd in EP-online',
];
$hero_cta      = 'Aanvraag indienen →';
$hero_cta_url  = '#aanvraag';
$hero_cta2     = 'Bel direct';
$hero_cta2_url = 'tel:06XXXXXXXX';
include $root . 'includes/hero.php';
include $root . 'includes/trust.php';

// ── Wanneer labelplichtig
$kaarten_variant = 'wit';
$kaarten_label   = 'Verplicht voor uw pand?';
$kaarten_titel   = 'Voor welke bedrijfspanden is een energielabel verplicht?';
$kaarten_intro   = 'De wet stelt een energieprestatieplicht aan een aantal specifieke gebruiksfuncties. Herkent u uw pand hieronder?';
$kaarten_cols    = 3;
$kaarten_items   = [
  [
    'titel' => 'Kantoor',
    'tekst' => 'Alle kantoorgebouwen met een gebruiksoppervlakte van 100 m² of meer zijn verplicht minimaal label C te hebben. Nieuw per 1 januari 2023.',
    'badge' => 'Label C verplicht',
    'cta_tekst' => 'Meer over kantoorlabels →',
    'cta_url'   => '/kantoren/',
    'cta_stijl' => 'outline',
  ],
  [
    'titel' => 'Winkel',
    'tekst' => 'Winkelpanden zijn labelplichtig bij verkoop, verhuur en oplevering. Het energielabel beïnvloedt ook de huurwaarde.',
    'cta_tekst' => 'Aanvraag indienen →',
    'cta_url'   => '#aanvraag',
    'cta_stijl' => 'outline',
  ],
  [
    'titel' => 'Onderwijs & Sport',
    'tekst' => 'Schoolgebouwen en sportaccommodaties vallen onder de energieprestatieplicht. Een geldig label is verplicht bij transacties.',
    'cta_tekst' => 'Aanvraag indienen →',
    'cta_url'   => '#aanvraag',
    'cta_stijl' => 'outline',
  ],
  [
    'titel' => 'Gezondheidszorg & Kinderopvang',
    'tekst' => 'Zorginstellingen, behandelcentra en kinderopvanggebouwen zijn labelplichtig bij verkoop, verhuur en oplevering.',
    'cta_tekst' => 'Aanvraag indienen →',
    'cta_url'   => '#aanvraag',
    'cta_stijl' => 'outline',
  ],
  [
    'titel' => 'Hotel & Logies',
    'tekst' => 'Hotels en andere logiesgebouwen met meerdere verblijven vallen onder de energieprestatieplicht.',
    'cta_tekst' => 'Aanvraag indienen →',
    'cta_url'   => '#aanvraag',
    'cta_stijl' => 'outline',
  ],
  [
    'titel' => 'Ander pand?',
    'tekst' => 'Twijfelt u of uw pand labelplichtig is? STAP Energie helpt u uitzoeken welke verplichtingen voor u gelden.',
    'cta_tekst' => 'Vraag het ons →',
    'cta_url'   => '#aanvraag',
    'cta_stijl' => 'outline',
  ],
];
include $root . 'includes/components/section-kaarten.php';

// ── Prijskaarten
$kaarten_variant = 'grijs';
$kaarten_label   = 'Tarieven';
$kaarten_titel   = 'Indicatieve prijzen';
$kaarten_intro   = 'De prijs van een energielabel voor een bedrijfspand hangt af van de omvang. Onderstaande tarieven zijn indicatief.';
$kaarten_cols    = 3;
$kaarten_id      = 'prijzen';
$kaarten_items   = [
  [
    'titel'      => 'Klein bedrijfspand',
    'type'       => 'Tot 100 m²',
    'tekst'      => 'Opname op locatie door EPA-adviseur. Officieel rapport geregistreerd in EP-online. Label 10 jaar geldig na afgifte.',
    'prijsrijen' => [
      ['label' => 'Indicatief tarief', 'bedrag' => '€ 495'],
    ],
    'incl'       => 'Excl. btw · EP-online registratie',
    'cta_tekst'  => 'Aanvraag indienen →',
    'cta_url'    => '#aanvraag',
    'cta_stijl'  => 'outline',
  ],
  [
    'titel'      => 'Middelgroot bedrijfspand',
    'type'       => '100 – 500 m²',
    'tekst'      => 'Opname op locatie door EPA-adviseur. Officieel rapport geregistreerd in EP-online. Label 10 jaar geldig na afgifte.',
    'prijsrijen' => [
      ['label' => 'Indicatief tarief', 'bedrag' => '€ 675'],
    ],
    'incl'       => 'Excl. btw · EP-online registratie',
    'cta_tekst'  => 'Aanvraag indienen →',
    'cta_url'    => '#aanvraag',
    'cta_stijl'  => 'outline',
    'uitgelicht' => true,
    'badge'      => 'Meest aangevraagd',
  ],
  [
    'titel'      => 'Groot bedrijfspand',
    'type'       => '500 m² of meer',
    'tekst'      => 'Opname op locatie door EPA-adviseur. Officieel rapport geregistreerd in EP-online. Prijs op basis van omvang en complexiteit.',
    'prijsrijen' => [
      ['label' => 'Tarief', 'bedrag' => 'Op aanvraag'],
    ],
    'incl'       => 'Excl. btw · EP-online registratie',
    'cta_tekst'  => 'Offerte aanvragen →',
    'cta_url'    => '#aanvraag',
    'cta_stijl'  => 'outline',
  ],
];
include $root . 'includes/components/section-kaarten.php';

// ── Aanvraagformulier
?>
<section class="sectie sectie--grijs" id="aanvraag">
  <div class="sectie__inner">
    <span class="sectie__label">Aanvragen</span>
    <h2 class="sectie__titel">Vraag direct uw energielabel aan</h2>
    <p class="sectie__intro">Vul het formulier in — wij nemen binnen twee werkdagen contact op met een offerte op maat.</p>
    <?php
    $f_dienst = 'label';
    $f_type   = 'zakelijk';
    $f_pagina = 'utiliteit';
    include $root . 'includes/formulier.php';
    ?>
  </div>
</section>

<?php
// ── Zo werkt het
$stappen_variant = 'wit';
$stappen_label   = 'Werkwijze';
$stappen_titel   = 'Zo werkt het';
$stappen_intro   = 'Van aanvraag tot officieel energielabel in vier heldere stappen.';
$stappen_cols    = 4;
$stappen_items   = [
  ['nummer' => 1, 'titel' => 'Aanvraag indienen',      'tekst' => 'Vul het formulier in of bel direct. Binnen twee werkdagen nemen wij contact op voor een offerte en afspraakplanning.'],
  ['nummer' => 2, 'titel' => 'Documenten aanleveren',   'tekst' => 'U ontvangt een overzicht van benodigde documenten. Hoe meer u aanlevert, hoe nauwkeuriger de opname en hoe gunstiger het label.'],
  ['nummer' => 3, 'titel' => 'Inspectie op locatie',    'tekst' => 'Een gecertificeerd EPA-adviseur bezoekt uw pand. De opname duurt afhankelijk van de omvang enkele uren tot een halve dag.'],
  ['nummer' => 4, 'titel' => 'Label ontvangen',         'tekst' => 'U ontvangt het officieel geregistreerde energielabel. Geldig voor 10 jaar na afgifte.'],
];
include $root . 'includes/components/section-stappen.php';

// ── Geldigheid
$kaarten_variant = 'grijs';
$kaarten_label   = 'Geldigheid';
$kaarten_titel   = 'Hoe lang is het label geldig?';
$kaarten_intro   = 'Een energielabel voor een bedrijfspand is 10 jaar geldig na afgifte. In een aantal situaties vervalt het label eerder.';
$kaarten_cols    = 3;
$kaarten_items   = [
  [
    'titel' => '10 jaar geldig',
    'tekst' => 'Een energielabel is standaard 10 jaar geldig na registratie in EP-online. De einddatum staat vermeld op het label zelf.',
  ],
  [
    'titel' => 'Vervalt na verbouwing',
    'tekst' => 'Na een ingrijpende renovatie of verbouwing vervalt het bestaande label. Een nieuwe opname is dan vereist.',
  ],
  [
    'titel' => 'Herlabelen na verbetering',
    'tekst' => 'Heeft u verduurzamingsmaatregelen getroffen? Dan kunt u uw label laten verbeteren via herlabelen — voordeliger dan een volledig nieuwe opname.',
  ],
];
include $root . 'includes/components/section-kaarten.php';

// ── Cross-sell
$kaarten_variant = 'wit';
$kaarten_label   = 'Ook interessant';
$kaarten_titel   = 'Meer dan alleen een label';
$kaarten_intro   = 'Een energielabel is een startpunt. STAP Energie helpt u ook verder met energie-inkoop en verduurzaming.';
$kaarten_cols    = 2;
$kaarten_items   = [
  [
    'titel'     => 'Bespaar structureel op uw energiekosten',
    'type'      => 'Energie-inkoop',
    'tekst'     => 'Met een gunstig energiecontract op maat bespaart u als zakelijke gebruiker aanzienlijk op uw energierekening. STAP Energie vergelijkt en onderhandelt voor u — zonder extra kosten.',
    'cta_tekst' => 'Meer over energie-inkoop →',
    'cta_url'   => '/energie-inkoop-advies/',
    'cta_stijl' => 'outline',
  ],
  [
    'titel'     => 'Verduurzaam uw pand, profiteer van subsidies',
    'type'      => 'Verduurzaming',
    'tekst'     => 'Na uw energielabel weet u precies waar de verbeterpotentie zit. STAP Energie adviseert over isolatie, installaties en beschikbare subsidies voor zakelijke eigenaren.',
    'cta_tekst' => 'Bekijk verduurzamingsopties →',
    'cta_url'   => '/verduurzaming-subsidie/',
    'cta_stijl' => 'outline',
  ],
];
include $root . 'includes/components/section-kaarten.php';

// ── Ingelijst certificaat — section-highlight
$highlight_variant = 'groen';
$highlight_badge   = 'Nieuw per 29 mei 2026';
$highlight_tekst   = '<strong>Ophangplicht energielabel bedrijfspand:</strong> alle publiek toegankelijke bedrijfspanden groter dan 250 m² zijn verplicht hun energielabel zichtbaar op te hangen. STAP Energie levert een professioneel ingelijst certificaat. <a href="#aanvraag">Vraag het aan →</a>';
include $root . 'includes/components/section-highlight.php';

// ── Regio
$two_col_variant = 'wit';
$two_col_label   = 'Werkgebied';
$two_col_titel   = 'Actief in uw regio';
$two_col_tekst   = 'STAP Energie is gevestigd in Leusden en actief door heel Nederland. Voor zakelijke klanten in de regio Utrecht zijn wij uw lokale specialist — snel ter plaatse, persoonlijk contact.';
$two_col_rechts  = '
  <ul class="checklist">
    <li class="checklist__item"><span class="checklist__vink">✓</span><span>Leusden, Amersfoort & regio Utrecht</span></li>
    <li class="checklist__item"><span class="checklist__vink">✓</span><span>Woudenberg, Barneveld, Nijkerk, Ede</span></li>
    <li class="checklist__item"><span class="checklist__vink">✓</span><span>Randstad & heel Nederland op aanvraag</span></li>
    <li class="checklist__item"><span class="checklist__vink">✓</span><span>Persoonlijk contact — geen callcenter</span></li>
  </ul>';
include $root . 'includes/components/section-two-col.php';

include $root . 'includes/faq.php';
include $root . 'includes/cta.php';
include $root . 'includes/footer.php';
?>
