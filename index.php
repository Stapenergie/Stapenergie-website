<?php
/**
 * index.php — Homepage STAP Energie
 */

// ── /robots.txt en /sitemap.xml: de catch-all rewrite stuurt deze hierheen,
//    dus serveren we ze hier direct met het juiste content-type.
$__uri = strtok($_SERVER['REQUEST_URI'] ?? '', '?');
if ($__uri === '/robots.txt') {
    header('Content-Type: text/plain; charset=UTF-8');
    echo "User-agent: *\n";
    echo "Allow: /\n";
    echo "Disallow: /api/\n";
    echo "Disallow: /config/\n";
    echo "Disallow: /includes/\n\n";
    echo "Sitemap: https://stapenergie.nl/sitemap.xml\n";
    exit;
}
if ($__uri === '/sitemap.xml') {
    header('Content-Type: application/xml; charset=UTF-8');
    $__base  = 'https://stapenergie.nl';
    $__paths = [
        '/', '/energie-inkoop-advies/', '/energielabels/', '/energielabels/utiliteit/',
        '/energielabels/woningen/', '/verduurzaming-subsidie/', '/verduurzaming-subsidie/zakelijk/',
        '/verduurzaming-subsidie/particulieren/', '/zakelijk/', '/particulieren/', '/mkb/',
        '/vastgoed/', '/makelaars/', '/kantoren/', '/gemeenten-woningstichtingen/', '/industrie/',
        '/over-ons/', '/kennisbank/', '/kennisbank/warmtepomp/', '/kennisbank/isolatie/',
        '/kennisbank/zonnepanelen/', '/kennisbank/zonneboiler/', '/kennisbank/cv-ketel/',
        '/kennisbank/thuisbatterij/', '/kennisbank/laadpaal/', '/kennisbank/airco/',
        '/kennisbank/ems/', '/privacyverklaring/',
    ];
    echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
    echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
    foreach ($__paths as $__p) {
        echo '  <url><loc>' . $__base . $__p . '</loc></url>' . "\n";
    }
    echo '</urlset>' . "\n";
    exit;
}

$root        = dirname(__FILE__) . '/';
$title       = 'STAP Energie | Onafhankelijk Energie-inkoopadvies voor het MKB';
$description = 'Onafhankelijk energie-inkoopadvies voor MKB-ondernemers. Contractoptimalisatie, slimmer inkopen, energielabels en verduurzaming. 15+ jaar ervaring aan de leverancierszijde. Heel Nederland.';
$canonical   = 'https://stapenergie.nl/';

$cta_titel     = 'Klaar voor jouw eerste STAP?';
$cta_subtitel  = 'Gratis kennismakingsgesprek, geen verplichtingen, wel direct waarde. We reageren binnen twee werkdagen.';
$cta_knop      = 'Gratis gesprek inplannen';
$cta_knop_url  = '#contact';
$cta_garanties = ['Geen verplichtingen', 'Reactie binnen twee werkdagen', 'Heel Nederland'];

include $root . 'includes/head.php';
include $root . 'includes/nav.php';

// ── Hero groot (homepage variant met formulier)
$hero_variant   = 'groot';
$hero_bg        = '/images/hero.jpg';
$hero_label     = 'De onafhankelijke energieaannemer voor het MKB';
$hero_titel     = 'Jij onderneemt.<br>Wij regelen <em>je energie</em>.';
$hero_desc      = 'STAP Energie is de onafhankelijke energieaannemer voor MKB-ondernemers. Wij regelen je energiezaken, van energie-inkoop en energielabels tot verduurzaming, zodat jij je kunt richten op je bedrijf.';
$hero_checks    = [
  '15+ jaar energiemarktervaring',
  'Wij zijn niet sexy maar geven wel goed advies',
  'Reactie binnen twee werkdagen, werkzaam door heel Nederland',
];
$hero_link      = ['url' => '#diensten', 'tekst' => 'Bekijk alle diensten →'];
$hero_formulier = true;
$f_dienst       = '';
$f_type         = '';
$f_pagina       = 'homepage';
include $root . 'includes/hero.php';
?>

<!-- USP BALK -->
<div class="usp-balk">
  <div class="usp-inner">
    <div class="usp-item">
      <div class="usp-icon"><svg width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 1l2 4h4l-3 3 1 4-4-2-4 2 1-4-3-3h4z" fill="currentColor"/></svg></div>
      <div><strong>Onafhankelijk energie-inkoopadvies</strong><span>Werkt uitsluitend voor jou</span></div>
    </div>
    <div class="usp-item">
      <div class="usp-icon"><svg width="18" height="18" viewBox="0 0 18 18" fill="none"><circle cx="9" cy="9" r="7" stroke="currentColor" stroke-width="1.4"/><path d="M9 5v4l2.5 1.5" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"/></svg></div>
      <div><strong>Reactie binnen twee werkdagen</strong><span>Snel en persoonlijk</span></div>
    </div>
    <div class="usp-item">
      <div class="usp-icon"><svg width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 2l7 4v5c0 4-3.5 6-7 7C5.5 17 2 15 2 11V6l7-4z" stroke="currentColor" stroke-width="1.4" stroke-linejoin="round"/></svg></div>
      <div><strong>Vrijblijvend advies</strong><span>Geen verplichtingen</span></div>
    </div>
    <div class="usp-item">
      <div class="usp-icon"><svg width="18" height="18" viewBox="0 0 18 18" fill="none"><circle cx="9" cy="9" r="7" stroke="currentColor" stroke-width="1.4"/><path d="M6 9l2 2 4-4" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
      <div><strong>Heel Nederland</strong><span>Aan huis en op locatie</span></div>
    </div>
  </div>
</div>

<?php
// ── Diensten
$kaarten_variant = 'grijs';
$kaarten_label   = 'Wat we doen';
$kaarten_titel   = 'Onze diensten';
$kaarten_intro   = 'Van slimme energie-inkoop tot officieel energielabel en verduurzamingsplan. STAP Energie regelt het.';
$kaarten_cols    = 2;
$kaarten_id      = 'diensten';
$kaarten_items   = [
  [
    'titel'     => 'Energie-inkoopadvies',
    'foto'      => '/images/dienst-inkoop.jpg',
    'foto_alt'  => 'Energie-inkoopadvies',
    'tekst'     => 'Op het juiste moment inkopen, slim contracteren en structureel besparen. Onafhankelijk advies van iemand die weet hoe leveranciers denken.',
    'cta_tekst' => 'Meer info →',
    'cta_url'   => '/energie-inkoop-advies/',
    'cta_stijl' => 'outline',
  ],
  [
    'titel'     => 'Energielabels',
    'foto'      => '/images/hero.jpg',
    'foto_alt'  => 'Energielabels',
    'tekst'     => 'Verplicht bij verkoop, verhuur en voor bedrijfspanden. Snel geregeld voor een vaste prijs.',
    'cta_tekst' => 'Meer info →',
    'cta_url'   => '/energielabels/',
    'cta_stijl' => 'outline',
  ],
  [
    'titel'     => 'Verduurzaming & Subsidie',
    'foto'      => '/images/dienst-verduurzaming.jpg',
    'foto_alt'  => 'Verduurzaming en Subsidie',
    'tekst'     => 'Persoonlijk stappenplan op maat én alle subsidies in kaart. Verduurzamen wordt een stuk aantrekkelijker.',
    'cta_tekst' => 'Meer info →',
    'cta_url'   => '/verduurzaming-subsidie/',
    'cta_stijl' => 'outline',
  ],
  [
    'titel'     => 'Weet je het niet zeker?',
    'foto'      => '/images/erik-zakelijk.jpg',
    'foto_alt'  => 'Kennismakingsgesprek met Erik',
    'tekst'     => 'Plan een gratis kennismakingsgesprek zonder verplichtingen. Ik denk graag met je mee over de beste eerste stap.',
    'cta_tekst' => 'Plan gesprek →',
    'cta_url'   => '#contact',
    'cta_stijl' => 'solid',
    'variant'   => 'dark',
  ],
];
include $root . 'includes/components/section-kaarten.php';

// ── Voor wie
$kaarten_variant = 'wit';
$kaarten_label   = 'Kies jouw situatie';
$kaarten_titel   = 'Voor wie is STAP Energie?';
$kaarten_intro   = 'Of je nu ondernemer bent of woningeigenaar, STAP Energie heeft een passend aanbod voor jou.';
$kaarten_cols    = 2;
$kaarten_id      = 'voor-wie';
$kaarten_items   = [
  [
    'titel'     => 'Zakelijk',
    'icoon'     => '<svg viewBox="0 0 28 28" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"><rect x="3" y="10" width="22" height="15" rx="2"/><path d="M9 10V8a5 5 0 0110 0v2"/></svg>',
    'tekst'     => 'Voor MKB, vastgoed, makelaars, kantoren, gemeenten, woningstichtingen en industrie. Energielabels, verduurzaming en inkoop op maat.',
    'cta_tekst' => 'Meer info →',
    'cta_url'   => '/zakelijk/',
    'cta_stijl' => 'outline',
  ],
  [
    'titel'     => 'Particulieren',
    'icoon'     => '<svg viewBox="0 0 28 28" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12L14 3l11 9v13a1 1 0 01-1 1H4a1 1 0 01-1-1V12z"/><path d="M10 26V16h8v10"/></svg>',
    'tekst'     => 'Voor woningeigenaren die een energielabel nodig hebben of hun woning willen verduurzamen. Persoonlijk en dichtbij.',
    'cta_tekst' => 'Meer info →',
    'cta_url'   => '/particulieren/',
    'cta_stijl' => 'outline',
  ],
];
include $root . 'includes/components/section-kaarten.php';

// ── Over Erik
?>
<section class="sectie sectie--grijs" id="over-erik">
  <div class="sectie__inner">
    <div class="sectie-two-col__grid">
      <div class="over-img-wrap">
        <img src="/images/erik-portret.jpg" alt="Erik Dolman" loading="lazy"
             style="width:100%;border-radius:var(--rl);object-fit:cover;object-position:center 10%;">
        <div class="over-badge">
          <div class="over-badge__num">15+</div>
          <div class="over-badge__lbl">jaar energie&shy;ervaring</div>
        </div>
      </div>
      <div class="sectie-two-col__content">
        <span class="sectie__label">Wie is STAP Energie?</span>
        <h2 class="sectie__titel">Erik Dolman,<br>Energieaannemer & Inkoopspecialist</h2>
        <blockquote class="over-quote">"STAP Energie is voor mij de plek waar ervaring, ondernemerschap en overtuiging samenkomen. Niet als abstract ideaal maar als concrete business: onafhankelijk energieadvies voor ondernemers die behoefte hebben aan iemand die de markt kent."</blockquote>
        <p style="color:var(--subtekst);line-height:1.7;margin-bottom:12px;">Als oprichter van STAP Energie breng ik 15+ jaar ervaring in de energiemarkt mee. Van Sales Manager bij SEFE Energy tot NieuweStroom, die kennis zet ik nu in voor jou.</p>
        <p style="color:var(--subtekst);line-height:1.7;margin-bottom:20px;">Niet met een standaard verhaal, maar met eerlijk en persoonlijk advies dat écht past bij jouw situatie.</p>
        <div class="over-tags">
          <span class="over-tag">15+ jaar energiesector</span>
          <span class="over-tag">SEFE Energy</span>
          <span class="over-tag">NieuweStroom</span>
          <span class="over-tag">EPA-adviseur</span>
        </div>
        <a href="/over-ons/" class="btn btn--outline" style="margin-top:20px;display:inline-flex;">Meer over ons →</a>
      </div>
    </div>
  </div>
</section>

<?php
include $root . 'includes/cta.php';
include $root . 'includes/footer.php';
?>
