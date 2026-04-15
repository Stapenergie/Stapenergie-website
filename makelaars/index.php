<?php
/**
 * makelaars/index.php
 * Segmentpagina Makelaars
 */
$root        = dirname(dirname(__FILE__)) . '/';
$title       = 'Energielabel voor Makelaars | Snel Geleverd | STAP Energie';
$description = 'Energielabels snel geregeld voor makelaars en hun klanten. Betrouwbaar, officieel geregistreerd, vaste levertijd. Geen verrassingen voor je of je koper.';
$canonical   = 'https://stapenergie.nl/makelaars/';

$breadcrumbs = [
  ['label' => 'Home',    'url' => '/'],
  ['label' => 'Zakelijk','url' => '/zakelijk/'],
  ['label' => 'Makelaars'],
];

$cta_titel     = 'Labels snel geregeld voor je klanten?';
$cta_subtitel  = 'Neem contact op en STAP Energie denkt graag mee over een vaste samenwerking.';
$cta_knop      = 'Neem contact op →';
$cta_knop_url  = '#contact';
$cta_garanties = ['Gecertificeerd EPA-adviseur', 'Officieel geregistreerd in EP-online', 'Reactie binnen twee werkdagen'];

$faq_label = 'Veelgestelde vragen';
$faq_titel = 'Veelgestelde vragen van makelaars';
$faq_items = [
  ['vraag' => 'Hoe snel kan STAP Energie een label leveren?',
   'antwoord' => 'In de meeste gevallen is de opname binnen één tot twee weken in te plannen. Na de opname ontvangt je klant het label doorgaans binnen één week. Heb je haast vanwege een nakende overdracht? Geef dat aan bij de aanvraag.'],
  ['vraag' => 'Kan ik als makelaar een aanvraag doen namens mijn klant?',
   'antwoord' => 'Ja. Je kunt de aanvraag indienen via het formulier op deze pagina, of doorverwijzen naar de klant. STAP Energie stemt de opname af met de eigenaar of huurder en houdt je op de hoogte.'],
  ['vraag' => 'Wat als mijn klant vergeten is een label aan te vragen voor de overdracht?',
   'antwoord' => 'Dan helpen wij zo snel mogelijk. Geef de urgentie aan in je aanvraag. STAP Energie kijkt wat er qua planning mogelijk is. Een spoedopname is in overleg bespreekbaar.'],
  ['vraag' => 'Kan STAP Energie ook labels leveren voor bedrijfspanden die mijn klanten verkopen?',
   'antwoord' => 'Ja. STAP Energie verzorgt zowel woninglabels als utiliteitslabels. Voor kantoren, winkels en andere bedrijfspanden is de procedure anders dan voor woningen, maar het resultaat is hetzelfde: een officieel geregistreerd label in EP-online.'],
  ['vraag' => 'Biedt STAP Energie speciale tarieven voor makelaars die regelmatig labels aanvragen?',
   'antwoord' => 'Ja. Voor makelaars die regelmatig aanvragen doorsturen, biedt STAP Energie een vaste samenwerking met prioriteitsplanning en volumetarief. Neem contact op om de mogelijkheden te bespreken.'],
];

include $root . 'includes/head.php';
include $root . 'includes/nav.php';
include $root . 'includes/breadcrumb.php';

// ── Hero
$hero_variant  = 'sub';
$hero_bg       = '/images/hero-bedrijfspand.jpg';
$hero_eyebrow  = 'Energielabels voor makelaars';
$hero_titel    = 'Je klant verkoopt. Het label moet er zijn. <em>STAP regelt het.</em>';
$hero_lead     = 'Een energielabel is bij elke woningtransactie verplicht. Als makelaar wil je dat geregeld hebben voordat het een probleem wordt. STAP Energie levert snel, betrouwbaar en officieel.';
$hero_usps     = [
  'Gecertificeerd EPA-adviseur',
  'Officieel geregistreerd in EP-online',
  'Vaste levertijd, doorgaans binnen één week na opname',
  'Zowel woninglabels als utiliteitslabels',
];
$hero_cta      = 'Neem contact op →';
$hero_cta_url  = '#contact';
$hero_cta2     = 'Bekijk prijzen';
$hero_cta2_url = '#prijzen';
include $root . 'includes/hero.php';
include $root . 'includes/trust.php';

// ── Twee-kolom: het makelaarsprobleem
$two_col_variant   = 'wit';
$two_col_label     = 'Waarom makelaars met STAP werken';
$two_col_titel     = 'Een label dat er op tijd is, zonder gedoe';
$two_col_omgekeerd = false;
$two_col_links     = '
  <p style="color:var(--subtekst);line-height:1.7;margin-bottom:14px;">Een energielabel is verplicht bij de overdracht van een woning. Toch wordt het regelmatig op het laatste moment aangevraagd, soms pas als de koopakte al getekend is. Dat geeft stress voor alle betrokken partijen.</p>
  <p style="color:var(--subtekst);line-height:1.7;margin-bottom:14px;">STAP Energie werkt samen met makelaars die dat willen voorkomen. Snelle levering, heldere communicatie en een vaste aanspreekpersoon. Geen callcenter, geen onzekere levertijden.</p>
  <p style="color:var(--subtekst);line-height:1.7;margin-bottom:20px;">Ben je makelaar en wil je betrouwbare labellevering voor je klanten regelen? Neem contact op om de mogelijkheden te bespreken.</p>';
$two_col_cta       = ['tekst' => 'Neem contact op →', 'url' => '#contact', 'stijl' => 'primair'];
$two_col_rechts    = '
  <ul class="checklist">
    <li class="checklist__item"><span class="checklist__vink">✓</span><span>Label verplicht bij elke woning- en pandoverdracht</span></li>
    <li class="checklist__item"><span class="checklist__vink">✓</span><span>Opname doorgaans binnen 1-2 weken in te plannen</span></li>
    <li class="checklist__item"><span class="checklist__vink">✓</span><span>Label ontvangen binnen één week na opname</span></li>
    <li class="checklist__item"><span class="checklist__vink">✓</span><span>Zowel woningen als bedrijfspanden</span></li>
    <li class="checklist__item"><span class="checklist__vink">✓</span><span>Vaste samenwerking met prioriteitsplanning beschikbaar</span></li>
  </ul>';
include $root . 'includes/components/section-two-col.php';

// ── Prijzen
$kaarten_variant = 'grijs';
$kaarten_label   = 'Tarieven';
$kaarten_titel   = 'Duidelijke prijzen voor woningen en bedrijfspanden';
$kaarten_intro   = 'Vaste prijzen per woningtype, maatwerkofferte voor grotere objecten of meerdere panden.';
$kaarten_cols    = 2;
$kaarten_id      = 'prijzen';
$kaarten_items   = [
  [
    'titel'      => 'Woninglabels',
    'badge'      => 'Inclusief btw',
    'tekst'      => 'Appartementen, eengezinswoningen en vrijstaande woningen.',
    'prijsrijen' => [
      ['label' => 'Appartement tot 40 m²',       'bedrag' => '€ 195'],
      ['label' => 'Appartement 40-100 m²',        'bedrag' => '€ 249'],
      ['label' => 'Tussenwoning',                 'bedrag' => '€ 295'],
      ['label' => 'Hoekwoning / 2-onder-1-kap',   'bedrag' => '€ 325'],
      ['label' => 'Vrijstaande woning tot 150 m²', 'bedrag' => '€ 345'],
    ],
    'incl'      => 'Inclusief btw · EP-online registratie',
    'cta_tekst' => 'Meer over woninglabels →',
    'cta_url'   => '/energielabels/woningen/',
    'cta_stijl' => 'outline',
  ],
  [
    'titel'      => 'Utiliteitslabels',
    'badge'      => 'Exclusief btw',
    'tekst'      => 'Kantoren, winkels, opslagruimtes en andere bedrijfspanden.',
    'prijsrijen' => [
      ['label' => 'Tot 100 m²',        'bedrag' => '€ 495'],
      ['label' => '100-500 m²',        'bedrag' => '€ 675'],
      ['label' => 'Groter dan 500 m²', 'bedrag' => 'Offerte op maat'],
    ],
    'incl'      => 'Exclusief btw · EP-online registratie',
    'cta_tekst' => 'Meer over utiliteitslabels →',
    'cta_url'   => '/energielabels/utiliteit/',
    'cta_stijl' => 'outline',
  ],
];
include $root . 'includes/components/section-kaarten.php';

// ── Stappen
$stappen_variant = 'wit';
$stappen_label   = 'Hoe het werkt';
$stappen_titel   = 'Van aanvraag tot officieel label';
$stappen_intro   = 'Helder en snel. Je hoeft er weinig voor te doen.';
$stappen_cols    = 4;
$stappen         = [
  ['nummer' => 1, 'titel' => 'Aanvraag indienen',  'tekst' => 'Je of je klant vult het formulier in. STAP Energie neemt binnen twee werkdagen contact op voor een afspraak.'],
  ['nummer' => 2, 'titel' => 'Opname inplannen',   'tekst' => 'De opname wordt ingepland in afstemming met de bewoner of eigenaar. Doorgaans binnen één tot twee weken.'],
  ['nummer' => 3, 'titel' => 'Opname ter plaatse', 'tekst' => 'Een gecertificeerd EPA-adviseur neemt de woning of het pand op. Gemiddeld 1 a 2 uur voor een woning.'],
  ['nummer' => 4, 'titel' => 'Label ontvangen',    'tekst' => 'Binnen één week na de opname ontvangt je klant het officieel geregistreerde energielabel.'],
];
include $root . 'includes/components/section-stappen.php';
unset($stappen, $stappen_variant, $stappen_label, $stappen_titel, $stappen_intro, $stappen_cols);

// ── Contactformulier
?>
<section class="sectie sectie--grijs" id="contact">
  <div class="sectie__inner">
    <span class="sectie__label">Contact</span>
    <h2 class="sectie__titel">Neem contact op of stuur een aanvraag door</h2>
    <p class="sectie__intro">Vul het formulier in en STAP Energie neemt binnen twee werkdagen contact op.</p>
    <?php
    $f_dienst = 'label';
    $f_type   = 'zakelijk';
    $f_pagina = 'makelaars';
    include $root . 'includes/formulier.php';
    ?>
  </div>
</section>

<?php
include $root . 'includes/faq.php';
include $root . 'includes/cta.php';
include $root . 'includes/footer.php';
?>
