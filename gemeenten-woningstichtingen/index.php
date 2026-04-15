<?php
/**
 * gemeenten-woningstichtingen/index.php
 * Segmentpagina Gemeenten & Woningstichtingen
 */
$root        = dirname(dirname(__FILE__)) . '/';
$title       = 'Energielabels voor Gemeenten & Woningstichtingen | STAP Energie';
$description = 'Energielabels en verduurzamingsadvies voor gemeenten, woningstichtingen en woningcorporaties. Portefeuilleaanpak, volumetarief en gecoordineerde planning.';
$canonical   = 'https://stapenergie.nl/gemeenten-woningstichtingen/';

$breadcrumbs = [
  ['label' => 'Home',    'url' => '/'],
  ['label' => 'Zakelijk','url' => '/zakelijk/'],
  ['label' => 'Gemeenten & Woningstichtingen'],
];

$cta_titel     = 'Je portefeuille op orde brengen?';
$cta_subtitel  = 'Neem contact op voor een gesprek over je situatie en een offerte op maat.';
$cta_knop      = 'Neem contact op →';
$cta_knop_url  = '#contact';
$cta_garanties = ['Gecertificeerd EPA-adviseur', 'Portefeuilleaanpak mogelijk', 'Reactie binnen twee werkdagen'];

$faq_label = 'Veelgestelde vragen';
$faq_titel = 'Vragen van gemeenten en woningstichtingen';
$faq_items = [
  ['vraag' => 'Hoe werkt een portefeuilleaanpak voor energielabels?',
   'antwoord' => 'STAP Energie brengt samen met je in kaart welke panden als eerste aandacht vragen — op basis van huidige labelstatus, geplande transacties en verduurzamingsdoelen. Vervolgens plannen wij de opnames gecoordineerd in, zodat je zo min mogelijk last heeft van de logistiek.'],
  ['vraag' => 'Wat is de verplichting voor huurwoningen met een slecht energielabel?',
   'antwoord' => 'Voor woningen met label E, F of G is een verhuurverbod voorzien. De exacte invoeringsdatum staat nog niet definitief vast, maar het beleid trekt aan. Woningcorporaties doen er verstandig aan hun portefeuille nu in kaart te brengen en prioriteiten te stellen.'],
  ['vraag' => 'Kan STAP Energie ook bijdragen aan ons verduurzamingsplan?',
   'antwoord' => 'Ja. Naast energielabels biedt STAP Energie ook verduurzamingsadvies op portefeuilleniveau. Welke woningen lenen zich voor isolatie? Waar is een warmtepomp rendabel? STAP Energie brengt dat systematisch in kaart, inclusief beschikbare subsidies.'],
  ['vraag' => 'Werkt STAP Energie samen met gemeenten en corporaties op projectbasis?',
   'antwoord' => 'Ja. STAP Energie werkt zowel op losse opdrachten als op projectbasis. Voor grotere portefeuilles of meerjarige samenwerking stellen wij een maatwerkofferte op.'],
  ['vraag' => 'Welke subsidies zijn beschikbaar voor verduurzaming van huurwoningen?',
   'antwoord' => 'Voor woningcorporaties zijn onder meer de ISDE, het Nationaal Isolatie Programma en specifieke regelingen via RVO beschikbaar. Welke combinatie het meest oplevert, hangt af van je portefeuillesamenstelling en verduurzamingsstrategie. STAP Energie brengt dat in kaart.'],
];

include $root . 'includes/head.php';
include $root . 'includes/nav.php';
include $root . 'includes/breadcrumb.php';

// ── Hero
$hero_variant  = 'sub';
$hero_bg       = '/images/segment-gemeenten.jpg';
$hero_eyebrow  = 'Energielabels voor gemeenten & woningstichtingen';
$hero_titel    = 'Grote portefeuille, veel verplichtingen. <em>STAP brengt overzicht.</em>';
$hero_lead     = 'Gemeenten en woningstichtingen beheren tientallen tot honderden panden. STAP Energie helpt met een gecoordineerde aanpak voor energielabels en verduurzaming — op portefeuilleniveau, niet pand voor pand.';
$hero_usps     = [
  'Gecertificeerd EPA-adviseur',
  'Portefeuilleaanpak — gecoordineerde planning',
  'Energielabels en verduurzamingsadvies gecombineerd',
  'Volumetarief bij meerdere panden',
];
$hero_cta      = 'Neem contact op →';
$hero_cta_url  = '#contact';
$hero_cta2     = 'Meer over onze aanpak';
$hero_cta2_url = '#aanpak';
include $root . 'includes/hero.php';
include $root . 'includes/trust.php';

// ── Twee diensten
$kaarten_variant = 'wit';
$kaarten_label   = 'Wat STAP Energie biedt';
$kaarten_titel   = 'Energielabels en verduurzaming op portefeuilleniveau';
$kaarten_intro   = 'Twee diensten die voor gemeenten en woningstichtingen het meeste oplevert als ze worden gecombineerd.';
$kaarten_cols    = 2;
$kaarten_items   = [
  [
    'titel'      => 'Portefeuille energielabels',
    'icoon'      => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M8 7h8M8 12h5M8 17h3"/></svg>',
    'tekst'      => 'STAP Energie brengt de labelstatus van je volledige portefeuille in kaart, bepaalt prioriteiten op basis van geplande transacties en verduurzamingsdoelen, en verzorgt de opnames gecoordineerd.',
    'cta_tekst'  => 'Meer over energielabels →',
    'cta_url'    => '/energielabels/',
    'cta_stijl'  => 'outline',
  ],
  [
    'titel'      => 'Verduurzamingsadvies',
    'icoon'      => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>',
    'tekst'      => 'Welke woningen of panden lenen zich voor isolatie, warmtepompen of andere maatregelen? STAP Energie brengt de meest rendabele verbeteringen per object in kaart, inclusief beschikbare subsidies.',
    'cta_tekst'  => 'Meer over verduurzaming →',
    'cta_url'    => '/verduurzaming-subsidie/',
    'cta_stijl'  => 'outline',
  ],
];
include $root . 'includes/components/section-kaarten.php';

// ── Aanpak two-col
$two_col_variant   = 'grijs';
$two_col_label     = 'De aanpak';
$two_col_titel     = 'Gecoordineerd, niet pand voor pand';
$two_col_omgekeerd = false;
$two_col_id        = 'aanpak';
$two_col_links     = '
  <p style="color:var(--subtekst);line-height:1.7;margin-bottom:14px;">Een losse labelaanvraag per pand kost onevenredig veel tijd en coordinatie. STAP Energie werkt voor grotere opdrachtgevers met een gestructureerde aanpak: eerst overzicht, dan prioriteiten stellen, dan plannen.</p>
  <p style="color:var(--subtekst);line-height:1.7;margin-bottom:14px;">Welke panden hebben een verlopen label? Welke transacties staan op de agenda? Welke woningen zitten in de risicozone voor het aankomende verhuurverbod? Op basis van die vragen stellen wij samen een planning op.</p>
  <p style="color:var(--subtekst);line-height:1.7;margin-bottom:20px;">Wij rapporteren per oplevering en houden je op de hoogte van de voortgang. Je hebt altijd een vast aanspreekpunt.</p>';
$two_col_cta       = ['tekst' => 'Plan een kennismakingsgesprek →', 'url' => '#contact', 'stijl' => 'primair'];
$two_col_rechts    = '
  <ul class="checklist">
    <li class="checklist__item"><span class="checklist__vink">✓</span><span>Eerst inzicht in labelstatus per pand</span></li>
    <li class="checklist__item"><span class="checklist__vink">✓</span><span>Prioriteiten op basis van transacties en regelgeving</span></li>
    <li class="checklist__item"><span class="checklist__vink">✓</span><span>Gecoordineerde planning — zo min mogelijk overlast</span></li>
    <li class="checklist__item"><span class="checklist__vink">✓</span><span>Volumetarief bij meerdere panden</span></li>
    <li class="checklist__item"><span class="checklist__vink">✓</span><span>Vaste aanspreekpersoon gedurende het traject</span></li>
    <li class="checklist__item"><span class="checklist__vink">✓</span><span>Gecombineerd met verduurzamingsadvies mogelijk</span></li>
  </ul>';
include $root . 'includes/components/section-two-col.php';
unset($two_col_id);

// ── Regelgeving two-col
$two_col_variant   = 'wit';
$two_col_label     = 'Regelgeving';
$two_col_titel     = 'De verplichtingen voor huurwoningen worden strenger';
$two_col_omgekeerd = true;
$two_col_links     = '
  <p style="color:var(--subtekst);line-height:1.7;margin-bottom:14px;">Voor woningcorporaties en gemeenten met huurwoningen trekt de regelgeving aan. Een verhuurverbod voor woningen met label E, F of G is voorzien — de exacte invoeringsdatum staat nog niet definitief vast, maar de richting is duidelijk.</p>
  <p style="color:var(--subtekst);line-height:1.7;margin-bottom:14px;">Wie nu in kaart brengt welke woningen in de risicozone zitten, kan tijdig prioriteiten stellen en subsidies benutten. Wie wacht, maakt het zichzelf moeilijker en duurder.</p>';
$two_col_cta       = ['tekst' => 'Meer over verduurzaming en subsidies →', 'url' => '/verduurzaming-subsidie/', 'stijl' => 'outline'];
$two_col_rechts    = '
  <ul class="checklist">
    <li class="checklist__item"><span class="checklist__vink">✓</span><span>Energielabel verplicht bij elke verhuur en verkoop</span></li>
    <li class="checklist__item"><span class="checklist__vink">✓</span><span>Verhuurverbod label E/F/G woningen in voorbereiding (2029)</span></li>
    <li class="checklist__item"><span class="checklist__vink">✓</span><span>Kantoren groter dan 100 m² verplicht minimaal label C</span></li>
    <li class="checklist__item"><span class="checklist__vink">✓</span><span>Subsidies beschikbaar via ISDE, Warmtefonds en NIP</span></li>
  </ul>';
include $root . 'includes/components/section-two-col.php';

// ── Contactformulier
?>
<section class="sectie sectie--grijs" id="contact">
  <div class="sectie__inner">
    <span class="sectie__label">Contact</span>
    <h2 class="sectie__titel">Plan een kennismakingsgesprek</h2>
    <p class="sectie__intro">Vul het formulier in en STAP Energie neemt binnen twee werkdagen contact op om je situatie te bespreken.</p>
    <?php
    $f_dienst = '';
    $f_type   = 'zakelijk';
    $f_pagina = 'gemeenten-woningstichtingen';
    include $root . 'includes/formulier.php';
    ?>
  </div>
</section>

<?php
include $root . 'includes/faq.php';
include $root . 'includes/cta.php';
include $root . 'includes/footer.php';
?>
