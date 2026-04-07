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
    'titel'    => 'Kantoor',
    'tekst'    => 'Alle kantoorgebouwen met een gebruiksoppervlakte van 100 m² of meer zijn verplicht minimaal label C te hebben. Nieuw per 1 januari 2023.',
    'badge'    => 'Label C verplicht',
    'icoon'    => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M9 3v18M15 3v18M3 9h18M3 15h18"/></svg>',
    'cta_tekst' => 'Meer over kantoorlabels →',
    'cta_url'   => '/kantoren/',
    'cta_stijl' => 'outline',
  ],
  [
    'titel'    => 'Winkel',
    'tekst'    => 'Winkelpanden zijn labelplichtig bij verkoop, verhuur en oplevering. Het energielabel beïnvloedt ook de huurwaarde.',
    'icoon'    => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l1-6h16l1 6"/><path d="M3 9a3 3 0 006 0 3 3 0 006 0 3 3 0 006 0"/><path d="M5 21V9M19 21V9"/><rect x="8" y="14" width="8" height="7"/></svg>',
    'cta_tekst' => 'Meer over MKB →',
    'cta_url'   => '/mkb/',
    'cta_stijl' => 'outline',
  ],
  [
    'titel'    => 'Onderwijs & Sport',
    'tekst'    => 'Schoolgebouwen en sportaccommodaties vallen onder de energieprestatieplicht. Een geldig label is verplicht bij transacties.',
    'icoon'    => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M2 20h20M4 20V8l8-5 8 5v12"/><path d="M9 20v-5h6v5"/><path d="M12 3v4"/></svg>',
    'cta_tekst' => 'Aanvraag indienen →',
    'cta_url'   => '#aanvraag',
    'cta_stijl' => 'outline',
  ],
  [
    'titel'    => 'Gezondheidszorg & Kinderopvang',
    'tekst'    => 'Zorginstellingen, behandelcentra en kinderopvanggebouwen zijn labelplichtig bij verkoop, verhuur en oplevering.',
    'icoon'    => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>',
    'cta_tekst' => 'Aanvraag indienen →',
    'cta_url'   => '#aanvraag',
    'cta_stijl' => 'outline',
  ],
  [
    'titel'    => 'Hotel & Logies',
    'tekst'    => 'Hotels en andere logiesgebouwen met meerdere verblijven vallen onder de energieprestatieplicht.',
    'icoon'    => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21V5a2 2 0 012-2h14a2 2 0 012 2v16"/><path d="M3 21h18"/><path d="M9 21v-5a2 2 0 012-2h2a2 2 0 012 2v5"/><path d="M9 7h1M14 7h1M9 12h1M14 12h1"/></svg>',
    'cta_tekst' => 'Aanvraag indienen →',
    'cta_url'   => '#aanvraag',
    'cta_stijl' => 'outline',
  ],
  [
    'titel'    => 'Ander pand?',
    'tekst'    => 'Twijfelt u of uw pand labelplichtig is? STAP Energie helpt u uitzoeken welke verplichtingen voor u gelden.',
    'icoon'    => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>',
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
    'foto'       => '/images/bedrijfspand-klein.jpg',
    'foto_alt'   => 'Ondernemer voor klein bedrijfspand',
    'tekst'      => 'Opname op locatie door EPA-adviseur. Officieel rapport geregistreerd in EP-online. Label 10 jaar geldig na afgifte. Persoonlijk advies bij de opname.',
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
    'foto'       => '/images/bedrijfspand-middel.jpg',
    'foto_alt'   => 'Collega\'s voor middelgroot bedrijfspand',
    'tekst'      => 'Opname op locatie door EPA-adviseur. Officieel rapport geregistreerd in EP-online. Label 10 jaar geldig na afgifte. Persoonlijk advies bij de opname.',
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
    'foto'       => '/images/bedrijfspand-groot.jpg',
    'foto_alt'   => 'Vastgoedbeheerder voor groot bedrijfspand',
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
    'icoon' => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>',
  ],
  [
    'titel' => 'Vervalt na verbouwing',
    'tekst' => 'Na een ingrijpende renovatie of verbouwing vervalt het bestaande label. Een nieuwe opname is dan vereist.',
    'icoon' => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M2 20h20M4 20V8l8-5 8 5v12"/><path d="M15 20v-8H9v8"/><path d="M12 2l3 3-3 3"/></svg>',
  ],
  [
    'titel' => 'Herlabelen na verbetering',
    'tekst' => 'Heeft u verduurzamingsmaatregelen getroffen? Dan kunt u uw label laten verbeteren via herlabelen — voordeliger dan een volledig nieuwe opname.',
    'icoon' => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4v5h5"/><path d="M20 20v-5h-5"/><path d="M4 9a9 9 0 0115 0"/><path d="M20 15a9 9 0 01-15 0"/></svg>',
  ],
];
include $root . 'includes/components/section-kaarten.php';



// ── Ingelijst certificaat — section-highlight
$highlight_variant = 'groen';
$highlight_badge   = 'Nieuw per 29 mei 2026';
$highlight_tekst   = '<strong>Ophangplicht energielabel bedrijfspand:</strong> alle publiek toegankelijke bedrijfspanden groter dan 250 m² zijn verplicht hun energielabel zichtbaar op te hangen. STAP Energie levert een professioneel ingelijst certificaat. <a href="#aanvraag">Vraag het aan →</a>';
include $root . 'includes/components/section-highlight.php';

// ── Documentatie: wat kunt u alvast voorbereiden
$stappen_variant = 'grijs';
$stappen_label   = 'Voorbereiding';
$stappen_titel   = 'Wat kunt u alvast voorbereiden?';
$stappen_intro   = 'Hoe meer documentatie u aanlevert, hoe nauwkeuriger de opname en hoe gunstiger het label dat aantoonbaar haalbaar is. Zonder documentatie rekenen wij met conservatieve aannames — dat werkt in uw nadeel.';
$stappen_cols    = 3;
$stappen_items   = [
  [
    'nummer' => 1,
    'titel'  => 'Bouwtekeningen en plattegronden',
    'tekst'  => 'Gevels, doorsneden, verdiepingsplattegronden en eventuele renovatietekeningen. Hoe recenter en gedetailleerder, hoe beter. Dit vormt de basis voor een nauwkeurige opname van de thermische schil en het gebouwoppervlak.',
    'extra'  => '<span class="doc-tip">Heeft u ook het bouwjaar of renovatiejaar paraat? Neem dit mee — inclusief bewijs zoals een omgevingsvergunning of koopakte.</span>',
  ],
  [
    'nummer' => 2,
    'titel'  => 'Installatieschema\'s en technische documentatie',
    'tekst'  => 'Systeemschema\'s, inregelrapporten en inspectierapporten van de verwarmings-, koel- en ventilatiesystemen. Het fabricagejaar van installaties is hierbij belangrijk — dit bepaalt mede het berekende rendement.',
  ],
  [
    'nummer' => 3,
    'titel'  => 'Facturen en leverbonnen van isolatiematerialen',
    'tekst'  => 'Facturen of leverbonnen van isolatiewerkzaamheden — met vermelding van merk, type en hoeveelheden. De factuur moet controleerbaar gekoppeld zijn aan het adres of de bouwlocatie.',
  ],
  [
    'nummer' => 4,
    'titel'  => 'Keurings- en kwaliteitsverklaringen van installaties',
    'tekst'  => 'Certificaten, productbladen of fabrikantspecificaties van ketels, warmtepompen, ventilatiesystemen of zonnepanelen.',
    'extra'  => '<span class="doc-tip">Heeft u deze documenten niet bij de hand? Wij doen ons best om de benodigde gegevens tijdens de opname ter plekke op te zoeken.</span>',
  ],
  [
    'nummer' => 5,
    'titel'  => 'Bouwjaar en renovatiejaar (met bewijs)',
    'tekst'  => 'Het bouwjaar is bepalend voor standaardwaarden als er geen gedetailleerde informatie beschikbaar is. Als uw pand gerenoveerd is, is het renovatiejaar minstens zo relevant — dit kan het label aanzienlijk verbeteren.',
    'extra'  => '<span class="doc-tip">Bewijs: omgevingsvergunning, bouwvergunning, koopakte of taxatierapport.</span>',
  ],
  [
    'nummer' => 6,
    'titel'  => 'Recente energieverbruiksgegevens',
    'tekst'  => 'Energienota\'s of verbruiksdata van de afgelopen jaren. Niet verplicht voor het label, maar nuttig om de berekende energieprestatie te toetsen aan het werkelijke verbruik.',
  ],
];
include $root . 'includes/components/section-stappen.php';

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

// ── Ook interessant — boven FAQ
$kaarten_variant = 'grijs';
$kaarten_label   = 'Ook interessant';
$kaarten_titel   = 'Meer dan alleen een label';
$kaarten_intro   = 'Een energielabel is een startpunt. STAP Energie helpt u ook verder met energie-inkoop en verduurzaming.';
$kaarten_cols    = 3;
$kaarten_items   = [
  [
    'type'      => 'Energie-inkoop',
    'titel'     => 'Bespaar structureel op uw energiekosten',
    'tekst'     => 'Met een gunstig energiecontract op maat bespaart u als zakelijke gebruiker aanzienlijk op uw energierekening. STAP Energie vergelijkt en onderhandelt voor u — zonder extra kosten.',
    'cta_tekst' => 'Meer over energie-inkoop →',
    'cta_url'   => '/energie-inkoop-advies/',
    'cta_stijl' => 'outline',
  ],
  [
    'type'      => 'Verduurzaming',
    'titel'     => 'Van label naar daadwerkelijke besparing',
    'tekst'     => 'Weten welke maatregelen het meeste opleveren voor uw specifieke pand? STAP Energie adviseert u over isolatie, warmtepompen, zonnepanelen en beschikbare subsidies.',
    'cta_tekst' => 'Bekijk verduurzamingsopties →',
    'cta_url'   => '/verduurzaming-subsidie/',
    'cta_stijl' => 'outline',
  ],
  [
    'type'      => 'Vastgoed',
    'titel'     => 'Meerdere panden tegelijk',
    'tekst'     => 'Beheerder of eigenaar van meerdere bedrijfspanden? STAP Energie werkt ook voor vastgoedbeheerders en -fondsen met vaste tariefafspraken en efficiënte planningscoördinatie.',
    'cta_tekst' => 'Bekijk vastgoedpagina →',
    'cta_url'   => '/vastgoed/',
    'cta_stijl' => 'outline',
  ],
];
include $root . 'includes/components/section-kaarten.php';

include $root . 'includes/faq.php';
include $root . 'includes/cta.php';
include $root . 'includes/footer.php';
?>
