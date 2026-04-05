<?php
/**
 * energielabels/woningen/index.php
 * Energielabel aanvragen voor woningen
 */
$root        = dirname(__DIR__, 2) . '/';
$title       = 'Energielabel Woning Aanvragen | STAP Energie';
$description = 'Officieel energielabel voor uw woning. Gecertificeerd EPA-adviseur, vaste prijzen, reactie binnen twee werkdagen. Heel Nederland.';
$canonical   = 'https://stapenergie.nl/energielabels/woningen/';

include $root . 'includes/head.php';
include $root . 'includes/nav.php';

// ── Hero
$hero_label    = 'Energielabel woningen';
$hero_titel    = 'Energielabel voor uw woning';
$hero_subtitel = 'Bij verkoop of verhuur van uw woning is een officieel energielabel verplicht. STAP Energie regelt het snel, persoonlijk en voor een vaste prijs.';
$hero_checks   = ['Gecertificeerd EPA-adviseur','Vaste prijs, geen verrassingen','Reactie binnen twee werkdagen','Heel Nederland'];
$hero_cta      = 'Aanvragen';
$hero_anchor   = '#aanvraag';
include $root . 'includes/hero.php';
?>

<!-- ══ WANNEER VERPLICHT ══════════════════════════════════════════════════════ -->
<section class="section">
  <div class="container">
    <span class="sec-label">Verplichting</span>
    <h2 class="sec-title">Wanneer heeft u een energielabel nodig?</h2>
    <p class="sec-sub">Een geldig energielabel is wettelijk verplicht bij:</p>
    <ul class="check-lijst">
      <li>Verkoop van uw woning — verplicht bij overdracht</li>
      <li>Verhuur van uw woning — verplicht voor huurders</li>
      <li>Oplevering van nieuwbouw</li>
      <li>Verlopen label — een energielabel is maximaal 10 jaar geldig</li>
    </ul>
  </div>
</section>

<!-- ══ WERKWIJZE ══════════════════════════════════════════════════════════════ -->
<section class="section sec-grijs">
  <div class="container">
    <span class="sec-label">Werkwijze</span>
    <h2 class="sec-title">Zo werkt het</h2>
    <div class="stappen-grid">
      <div class="stap-card">
        <div class="stap-num">1</div>
        <h3>Aanvraag indienen</h3>
        <p>Vul het formulier in. Binnen twee werkdagen nemen we contact op om de opname in te plannen.</p>
      </div>
      <div class="stap-card">
        <div class="stap-num">2</div>
        <h3>Opname ter plaatse</h3>
        <p>Een gecertificeerd EPA-adviseur bezoekt uw woning en voert de meting uit.</p>
      </div>
      <div class="stap-card">
        <div class="stap-num">3</div>
        <h3>Certificaat ontvangen</h3>
        <p>U ontvangt uw officiële energielabel, geregistreerd in EP-online. Geldig voor 10 jaar.</p>
      </div>
    </div>
    <p class="noot">* STAP Energie is gecertificeerd voor de basisopname woningen.</p>
  </div>
</section>

<!-- ══ FORMULIER ══════════════════════════════════════════════════════════════ -->
<section class="section" id="aanvraag">
  <div class="container container--smal">
    <span class="sec-label">Aanvragen</span>
    <h2 class="sec-title">Energielabel aanvragen</h2>
    <p class="sec-sub">Vrijblijvend. Reactie binnen twee werkdagen.</p>
    <?php
    $f_dienst = 'label';
    $f_type   = 'particulier';
    $f_pagina = 'woningen';
    include $root . 'includes/formulier.php';
    ?>
  </div>
</section>

<?php
// ── FAQ
$faq_label = 'Veelgestelde vragen';
$faq_titel = 'FAQ energielabel woning';
$faq_items = [
  ['vraag' => 'Wat kost een energielabel voor mijn woning?',     'antwoord' => 'De prijs hangt af van het type woning. Een appartement start vanaf &euro;&nbsp;195 incl. btw, een eengezinswoning vanaf &euro;&nbsp;295 incl. btw. U ziet de exacte prijs direct in het aanvraagformulier zodra u uw woningtype selecteert.'],
  ['vraag' => 'Hoe lang duurt het om een energielabel te krijgen?', 'antwoord' => 'Na uw aanvraag neemt STAP Energie binnen twee werkdagen contact op om de opname in te plannen. Na de opname ontvangt u het label doorgaans binnen enkele werkdagen.'],
  ['vraag' => 'Hoe lang is een energielabel geldig?',              'antwoord' => 'Een energielabel is maximaal 10 jaar geldig. Na die tijd heeft u een nieuw label nodig bij verkoop of verhuur.'],
  ['vraag' => 'Moet ik thuis zijn tijdens de opname?',             'antwoord' => 'Ja, de EPA-adviseur heeft toegang nodig tot de woning voor de meting. U spreekt samen een moment af dat u schikt.'],
  ['vraag' => 'Wat als ik een monument heb?',                      'antwoord' => 'Voor monumenten gelden bijzondere regels rondom de labelplicht. Neem contact op via het formulier &mdash; dan kijken we samen naar uw specifieke situatie.'],
];
include $root . 'includes/faq.php';
include $root . 'includes/footer.php';
?>
