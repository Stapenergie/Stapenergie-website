<?php
/**
 * kennisbank/analyses/index.php
 * Analyses — overzicht van marktanalyses en long reads
 */
$root        = dirname(dirname(dirname(__FILE__))) . '/';
$title       = 'Analyses & marktinzichten energie | STAP Energie';
$description = 'Onafhankelijke marktanalyses over energie-inkoop: gasprijzen, contractvormen, wet- en regelgeving en wat het betekent voor ondernemers. Door STAP Energie.';
$canonical   = 'https://stapenergie.nl/kennisbank/analyses/';

$breadcrumbs = [
  ['label' => 'Home',       'url' => '/'],
  ['label' => 'Kennisbank', 'url' => '/kennisbank/'],
  ['label' => 'Analyses'],
];

$cta_titel     = 'Een vraag over jouw energie-inkoop?';
$cta_subtitel  = 'Analyses lezen is een goede start. Voor jouw specifieke situatie denk ik graag mee. Plan een vrijblijvend gesprek.';
$cta_knop      = 'Plan een adviesgesprek →';
$cta_knop_url  = '/#contact';
$cta_garanties = ['15+ jaar ervaring in de energiemarkt', 'Geen productbelang', 'Reactie binnen twee werkdagen'];

include $root . 'includes/head.php';
include $root . 'includes/nav.php';
include $root . 'includes/breadcrumb.php';

// ── Hero
$hero_variant  = 'sub';
$hero_bg       = '/images/hero.jpg';
$hero_eyebrow  = 'Analyses';
$hero_titel    = 'Marktinzichten die je <em>aan het denken zetten</em>';
$hero_lead     = 'Onafhankelijke analyses over de energiemarkt: wat er beweegt, waarom het beweegt, en wat een slimme keuze is. Geschreven vanuit zeventien jaar ervaring aan de leverancierszijde.';
$hero_usps     = [];
$hero_cta      = '';
$hero_cta2     = '';
include $root . 'includes/hero.php';

// ── Analyses
$kaarten_variant = 'wit';
$kaarten_label   = 'Analyses';
$kaarten_titel   = 'Alle analyses';
$kaarten_intro   = 'Marktanalyses en achtergrondstukken over energie-inkoop, prijzen en regelgeving.';
$kaarten_cols    = 3;
$kaarten_id      = 'analyses';
$kaarten_items   = [
  [
    'titel'     => 'Aardgas: vastzetten of dynamisch?',
    'badge'     => 'Aardgas · juni 2026',
    'tekst'     => 'Van een gasmunt uit 1941 tot backwardation: hoe de gasmarkt nu beweegt, en hoe je je inkoop voorbereidt voor de winter.',
    'cta_tekst' => 'Lees de analyse →',
    'cta_url'   => '/kennisbank/analyses/gas-vastzetten-of-dynamisch/',
    'cta_stijl' => 'outline',
  ],
];
include $root . 'includes/components/section-kaarten.php';
unset($kaarten_variant, $kaarten_label, $kaarten_titel, $kaarten_intro, $kaarten_cols, $kaarten_items, $kaarten_id);

// ── CTA + footer
include $root . 'includes/cta.php';
include $root . 'includes/footer.php';
?>
