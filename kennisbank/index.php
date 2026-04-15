<?php
/**
 * kennisbank/index.php
 * Kennisbank hub — overzicht van alle kennisartikelen
 */
$root        = dirname(dirname(__FILE__)) . '/';
$title       = 'Kennisbank Verduurzaming | Warmtepomp, Isolatie & Subsidies | STAP Energie';
$description = 'Praktische gidsen over verduurzaming: warmtepomp, isolatie, zonnepanelen, thuisbatterij en meer. Onafhankelijke informatie van STAP Energie.';
$canonical   = 'https://stapenergie.nl/kennisbank/';

$breadcrumbs = [
  ['label' => 'Home',       'url' => '/'],
  ['label' => 'Kennisbank'],
];

$cta_titel     = 'Vragen over uw specifieke situatie?';
$cta_subtitel  = 'Artikel lezen is een goede start. Maar uw situatie is altijd specifiek. Plan een vrijblijvend adviesgesprek.';
$cta_knop      = 'Plan een adviesgesprek →';
$cta_knop_url  = '/#contact';
$cta_garanties = ['15+ jaar ervaring in de energiemarkt', 'Geen productbelang', 'Reactie binnen twee werkdagen'];

include $root . 'includes/head.php';
include $root . 'includes/nav.php';
include $root . 'includes/breadcrumb.php';

// ── Hero
$hero_variant  = 'sub';
$hero_bg       = '/images/hero-verduurzaming-hub.jpg';
$hero_eyebrow  = 'Kennisbank';
$hero_titel    = 'Praktische gidsen over verduurzaming. <em>Zonder verkoopbelang.</em>';
$hero_lead     = 'Welke maatregel past bij uw woning? Wat kost een warmtepomp echt? Wanneer zijn zonnepanelen de moeite waard? In de kennisbank van STAP Energie vindt u eerlijke informatie — zonder producten te verkopen.';
$hero_usps     = [];
$hero_cta      = 'Bekijk alle onderwerpen';
$hero_cta_url  = '#onderwerpen';
$hero_cta2     = '';
$hero_cta2_url = '';
include $root . 'includes/hero.php';

// ── Kennisbank artikelen
$kaarten_variant = 'wit';
$kaarten_label   = 'Onderwerpen';
$kaarten_titel   = 'Alle kennisartikelen';
$kaarten_intro   = 'Kies een onderwerp voor een praktische gids over die specifieke maatregel — van kosten en subsidies tot wanneer het de moeite waard is.';
$kaarten_cols    = 3;
$kaarten_id      = 'onderwerpen';
$kaarten_items   = [
  [
    'titel'     => 'Warmtepomp',
    'icoon'     => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>',
    'badge'     => 'Verwarming',
    'tekst'     => 'Alles over warmtepompen: hoe werken ze, wat kosten ze, wanneer is het slim en welke subsidie is er beschikbaar?',
    'cta_tekst' => 'Lees het artikel →',
    'cta_url'   => '/kennisbank/warmtepomp/',
    'cta_stijl' => 'outline',
  ],
  [
    'titel'     => 'Isolatie',
    'icoon'     => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>',
    'badge'     => 'Isolatie',
    'tekst'     => 'Spouwmuur, vloer, dak en glas: welke isolatiemaatregel levert het meeste op, en wanneer combineer je slim?',
    'cta_tekst' => 'Lees het artikel →',
    'cta_url'   => '/kennisbank/isolatie/',
    'cta_stijl' => 'outline',
  ],
  [
    'titel'     => 'Zonnepanelen',
    'icoon'     => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>',
    'badge'     => 'Opwekking',
    'tekst'     => 'Kosten, opbrengst, terugverdientijd en de invloed van de salderingsafbouw. Wat u moet weten voor 2026.',
    'cta_tekst' => 'Lees het artikel →',
    'cta_url'   => '/kennisbank/zonnepanelen/',
    'cta_stijl' => 'outline',
  ],
  [
    'titel'     => 'Zonneboiler',
    'icoon'     => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="5"/><line x1="12" y1="1" x2="12" y2="3"/><line x1="12" y1="21" x2="12" y2="23"/><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/><line x1="1" y1="12" x2="3" y2="12"/><line x1="21" y1="12" x2="23" y2="12"/><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"/><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"/></svg>',
    'badge'     => 'Warm water',
    'tekst'     => 'Een zonneboiler verlaagt uw gasverbruik voor warm water tot 60%. Lees wanneer het een slimme keuze is.',
    'cta_tekst' => 'Lees het artikel →',
    'cta_url'   => '/kennisbank/zonneboiler/',
    'cta_stijl' => 'outline',
  ],
  [
    'titel'     => 'CV-ketel vervangen',
    'icoon'     => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>',
    'badge'     => 'Verwarming',
    'tekst'     => 'Uw ketel aan vervanging toe? Vervangen door een moderne HR-ketel, hybride warmtepomp of volledig elektrisch — wat past het beste?',
    'cta_tekst' => 'Lees het artikel →',
    'cta_url'   => '/kennisbank/cv-ketel/',
    'cta_stijl' => 'outline',
  ],
  [
    'titel'     => 'Thuisbatterij',
    'icoon'     => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="7" y="7" width="10" height="14" rx="2"/><path d="M10 7V5a2 2 0 014 0v2"/><line x1="10" y1="11" x2="14" y2="11"/><line x1="12" y1="9" x2="12" y2="13"/></svg>',
    'badge'     => 'Opslag',
    'tekst'     => 'Sla eigen zonne-energie op voor gebruik op het juiste moment. Wanneer is een thuisbatterij écht interessant?',
    'cta_tekst' => 'Lees het artikel →',
    'cta_url'   => '/kennisbank/thuisbatterij/',
    'cta_stijl' => 'outline',
  ],
  [
    'titel'     => 'Laadpaal thuis',
    'icoon'     => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="2" width="14" height="20" rx="2"/><line x1="12" y1="18" x2="12" y2="18.01"/><path d="M9 7h6M9 11h4"/></svg>',
    'badge'     => 'Mobiliteit',
    'tekst'     => 'Een eigen laadpaal laden op zonne-energie: kosten, installatie, subsidie en de slimste combinatie met uw energiesysteem.',
    'cta_tekst' => 'Lees het artikel →',
    'cta_url'   => '/kennisbank/laadpaal/',
    'cta_stijl' => 'outline',
  ],
  [
    'titel'     => 'Airco & warmte-koud',
    'icoon'     => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M9 3v18M15 3v18M3 9h18M3 15h18"/></svg>',
    'badge'     => 'Klimaat',
    'tekst'     => 'Een moderne airco koelt én verwarmt efficiënt. Hoe verhoudt het zich tot een warmtepomp, en wanneer is het de juiste keuze?',
    'cta_tekst' => 'Lees het artikel →',
    'cta_url'   => '/kennisbank/airco/',
    'cta_stijl' => 'outline',
  ],
  [
    'titel'     => 'Energiemanagementsysteem',
    'icoon'     => '<svg viewBox="0 0 24 24" fill="none" stroke="#1a5c32" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"/><path d="M12 1v4M12 19v4M4.22 4.22l2.83 2.83M16.95 16.95l2.83 2.83M1 12h4M19 12h4M4.22 19.78l2.83-2.83M16.95 7.05l2.83-2.83"/></svg>',
    'badge'     => 'Slim beheer',
    'tekst'     => 'Een EMS koppelt zonnepanelen, batterij, laadpaal en warmtepomp slim. Altijd de goedkoopste energie op het juiste moment.',
    'cta_tekst' => 'Lees het artikel →',
    'cta_url'   => '/kennisbank/ems/',
    'cta_stijl' => 'outline',
  ],
];
include $root . 'includes/components/section-kaarten.php';
unset($kaarten_variant, $kaarten_label, $kaarten_titel, $kaarten_intro, $kaarten_cols, $kaarten_items, $kaarten_id);

// ── CTA + footer
include $root . 'includes/cta.php';
include $root . 'includes/footer.php';
?>
