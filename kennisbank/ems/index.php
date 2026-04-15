<?php
/**
 * kennisbank/ems/index.php
 * Kennisartikel: Energy Management System (EMS)
 */
$root        = dirname(dirname(dirname(__FILE__))) . '/';
$title       = 'Energy Management System (EMS) | Slimme Energie-Optimalisatie | STAP Energie';
$description = 'EMS: connect zonnepanelen, batterij, EV-charger, warmtepomp. Optimaliseer voor laagste kosten. Dynamisch contract essentieel. €500–€2.000.';
$canonical   = 'https://stapenergie.nl/kennisbank/ems/';

$breadcrumbs = [
  ['label' => 'Home',       'url' => '/'],
  ['label' => 'Kennisbank', 'url' => '/kennisbank/'],
  ['label' => 'EMS'],
];

$cta_titel     = 'EMS voor uw energiesysteem?';
$cta_subtitel  = 'Plan een vrijblijvend adviesgesprek. Wij beginnen met uw situatie.';
$cta_knop      = 'Plan een adviesgesprek →';
$cta_knop_url  = '/#contact';
$cta_garanties = ['15+ jaar ervaring in de energiemarkt', 'Geen productbelang', 'Reactie binnen twee werkdagen'];

$faq_label = 'Veelgestelde vragen';
$faq_titel = 'Veelgestelde vragen over EMS';
$faq_items = [
  ['vraag' => 'Hoe weet het EMS wat het beste moment is om te laden/ontladen?',
   'antwoord' => 'Met dynamisch contract: EMS leest elk uur de elektriciteitsmarkt (via API). Goedkope uren = lading batterij/auto, dure uren = ontlading. Zonder dynamisch: EMS kan alleen baseren op zonneschijn (minder slim).'],
  ['vraag' => 'Kan EMS ook mijn gasverbruik optimaliseren?',
   'antwoord' => 'Deels: EMS bestuurt warmtepomp-sturing (warmte opslaan in boiler tijdens goedkope stroom). Maar gas (hr-ketel) heeft geen EMS-aansluiting. Hybride warmtepomp (gas+elektra) biedt meer mogelijkheden.'],
  ['vraag' => 'Werkt EMS ook zonder zonnepanelen?',
   'antwoord' => 'Ja, maar voordeel is veel kleiner (alleen dynamisch contract). Met zonnepanelen: enorm voordeel. EMS loont beste met 3+ systemen (panelen, batterij, auto, warmtepomp).'],
  ['vraag' => 'Welke apparaten zijn EMS-compatible?',
   'antwoord' => 'Moderne zonnepanelen-inverters, thuisbatterijen, warmtepompen, EV-chargers hebben meestal EMS-aansluiting. Maar check: niet alle types zijn compatible. STAP Energie adviseert op basis van uw hardware.'],
  ['vraag' => 'Hoeveel kan ik besparen met EMS?',
   'antwoord' => 'Met dynamisch contract + 3+ systemen: €300–€600 per jaar mogelijk. Zonder panelen of dynamisch: veel minder. EMS loont alleen in "smart home" scenario.'],
];

include $root . 'includes/head.php';
include $root . 'includes/nav.php';
include $root . 'includes/breadcrumb.php';

// ── Hero
$hero_variant  = 'sub';
$hero_bg       = '/images/hero-verduurzaming-hub.jpg';
$hero_eyebrow  = 'Kennisbank';
$hero_titel    = 'EMS: laat uw energie zelf <em>denken en handelen.</em>';
$hero_lead     = 'Een Energy Management System (EMS) verbindt zonnepanelen, batterij, EV-charger en warmtepomp. Het optimaliseer automatisch wanneer elk systeem aan/uit gaat voor de laagste energiekosten. Met dynamisch contract kan dit €300–€600/jaar besparen. Lees hier hoe het werkt.';
$hero_usps     = [];
$hero_cta      = 'Plan een adviesgesprek →';
$hero_cta_url  = '/#contact';
$hero_cta2     = '';
$hero_cta2_url = '';
include $root . 'includes/hero.php';
include $root . 'includes/trust.php';

// ── Introductie
$two_col_variant   = 'wit';
$two_col_label     = 'Concept';
$two_col_titel     = 'Wat is een Energy Management System?';
$two_col_links     = '<p>Een EMS is software + hardware die al uw energiesystemen verbindt en stuurt:</p>
<p><strong>Systemen die EMS aanstuurt:</strong><br>
→ Zonnepanelen (monitoring opbrengst)<br>
→ Thuisbatterij (laden/ontladen timing)<br>
→ EV-charger (auto laden wanneer slim)<br>
→ Warmtepomp (verwarming- timing)<br>
→ Elektra-meter (real-time monitoring)</p>
<p><strong>Voornaamste functie:</strong> Automatisch inschakelen/uitschakelen van systemen op momenten met goedkope stroom (dynamisch contract) of veel zon (zonnepanelen).</p>
<p><strong>Gevolg:</strong> Lagere energierekening, beter zelf-gebruik, minder belasting op net.</p>';
$two_col_cta       = [];
$two_col_rechts    = '<ul class="checklist">
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Verbind alle energiesystemen</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Automatische sturing</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Optimalisering 24/7</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Laagste energiekosten</span></li>
</ul>';
include $root . 'includes/components/section-two-col.php';
unset($two_col_variant, $två_col_label, $två_col_titel, $two_col_omgekeerd, $two_col_links, $two_col_cta, $två_col_rechts);

// ── Hoe werkt het
$two_col_variant   = 'grijs';
$two_col_label     = 'Werkingslogica';
$two_col_titel     = 'Hoe stuurt EMS uw energie?';
$two_col_links     = '<p><strong>Basis-algoritme:</strong></p>
<p>1. <strong>Monitoren:</strong> EMS leest elk moment de elektriciteitsmarkt (prijs per kWh) en zonneschijn (panelen output).<br>
2. <strong>Voorspellen:</strong> Op basis van weer, tijd van dag en contract, voorspelt EMS komende uren.<br>
3. <strong>Besluiten:</strong> Bepaalt optimaal moment voor elk systeem:<br>
   - Goedkope uren (€0,10–€0,20)? Batterij laden, auto laden, warmtepomp extra opwarmen.<br>
   - Dure uren (€0,40–€0,60)? Batterij ontladen, auto afladen, warmtepomp rustig.<br>
   - Zon schijnt? Zonnepanelen prioriteit, batterij laden, auto laden.<br>
4. <strong>Sturen:</strong> Geeft commando\'s aan elk systeem.<br>
5. <strong>Controleren:</strong> Monitored resultaat, past aan.</p>';
$two_col_cta       = [];
$two_col_rechts    = '<ul class="checklist">
  <li class="checklist__item"><span class="checklist__vink">1</span><span>Monitor marktprijzen</span></li>
  <li class="checklist__item"><span class="checklist__vink">2</span><span>Voorspel komende uren</span></li>
  <li class="checklist__item"><span class="checklist__vink">3</span><span>Bepaal optimale timing</span></li>
  <li class="checklist__item"><span class="checklist__vink">4</span><span>Stuur automatisch</span></li>
  <li class="checklist__item"><span class="checklist__vink">5</span><span>Controleer resultaat</span></li>
</ul>';
include $root . 'includes/components/section-two-col.php';
unset($two_col_variant, $två_col_label, $två_col_titel, $two_col_omgekeerd, $two_col_links, $two_col_cta, $two_col_rechts);

// ── Use cases
$kaarten_variant = 'wit';
$kaarten_label   = 'Voorbeelden';
$kaarten_titel   = 'Praktische voorbeelden van EMS-optimalisatie';
$kaarten_intro   = 'Hier ziet u hoe EMS in real-life situaties werkt.';
$kaarten_cols    = 3;
$kaarten_items   = [
  [
    'titel'     => 'Zonnig middag + auto laden',
    'icoon'     => '☀️🚗',
    'tekst'     => 'Vandaag veel zon, 's middags zonnepanelen produceren veel. EMS zegt: laad nu de auto! Gratis stroom. Auto vollangs om 15u (veel zon), gereed voor avond.',
  ],
  [
    'titel'     => 'Dure avond + batterij ontladen',
    'icoon'     => '💸🔋',
    'tekst'     => '19u-21u: stroom duur (€0,50/kWh, piekbelasting). EMS ontlaad batterij nu in plaats van van net af te kopen. Bespaart fors.',
  ],
  [
    'titel'     => 'Goedkope nacht + warmtepomp opwarmen',
    'icoon'     => '🌙🔥',
    'tekst'     => '22u-6u: stroom goedkoop (€0,12/kWh). EMS stelt warmtepomp aan om boiler extra op te warmen. Opgeslagen warmte hele dag gebruiken.',
  ],
  [
    'titel'     => 'Batterij vol + stroom terugleveren',
    'icoon'     => '✅💰',
    'tekst'     => 'Zondag middag: veel zon, batterij al vol. EMS: geen verder laden, beter teruggeven naar net (geld verdienen) of opslaan voor avond.',
  ],
  [
    'titel'     => 'Multi-component balancing',
    'icoon'     => '⚖️',
    'tekst'     => 'Warmtepomp + auto beide willen laden, beperkt elektra. EMS: warmtepomp eerst (essentieel), auto daarna. Load-balancing perfekt.',
  ],
];
include $root . 'includes/components/section-kaarten.php';
unset($kaarten_variant, $kaarten_label, $kaarten_titel, $kaarten_intro, $kaarten_cols, $kaarten_items);

// ── Kosten en besparing
$two_col_variant   = 'grijs';
$two_col_label     = 'Investering';
$two_col_titel     = 'Kosten en besparing van EMS';
$two_col_links     = '<p><strong>EMS hardware + software:</strong></p>
<p>Basis-EMS: €500–€1.000<br>
Premium (meer features): €1.000–€2.000<br>
Installatie + aansluiting: €300–€500<br>
Jaarlijks abonnement (app/updates): €50–€150</p>
<p><strong>Besparing:</strong> Sterk afhankelijk van uw setup:<br>
Met zonnepanelen + batterij + dynamisch contract: €300–€600/jaar<br>
Met alleen zonnepanelen: €100–€200/jaar<br>
Zonder zonnepanelen: veel minder</p>
<p><strong>Terugverdientijd:</strong> 2–5 jaar (met goed systeem).</p>';
$two_col_cta       = [];
$two_col_rechts    = '<ul class="checklist">
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Hardware: €500–€2.000</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Installatie: €300–€500</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Jaarlijks: €50–€150</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Besparing: €300–€600/jaar</span></li>
</ul>';
include $root . 'includes/components/section-two-col.php';
unset($two_col_variant, $två_col_label, $två_col_titel, $two_col_omgekeerd, $two_col_links, $two_col_cta, $två_col_rechts);

// ── Dynamisch contract essentieel
$two_col_variant   = 'wit';
$two_col_label     = 'Essentieel';
$two_col_titel     = 'Dynamisch contract: de basis van EMS-voordeel';
$two_col_links     = '<p><strong>Zonder dynamisch contract:</strong> Elke kWh kost hetzelfde (bijv. €0,35). EMS kan enkel op basis van zonneschijn optimaliseren. Voordeel klein.</p>
<p><strong>Met dynamisch contract:</strong> Prijs varieert elk uur (bijv. €0,10 in nacht, €0,50 in piek). EMS wordt veel slimmer:</p>
<p>→ Laadt batteries/auto in goedkope uren (€0,10)<br>
→ Ontlaadt in dure uren (€0,50)<br>
→ Marge: €0,40 per kWh = groot voordeel!<br>
→ Met 3+ systemen: €300–€600/jaar mogelijk</p>
<p><strong>Aanbieders dynamische contracten:</strong> ANWB, Energiedirect, Feit, Easyenergy.</p>';
$two_col_cta       = [];
$two_col_rechts    = '<ul class="checklist">
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Dynamisch contract ESSENTIEEL</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Marge: €0,20–€0,40/kWh</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Voordeel €300–€600/jaar</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Zonder: EMS loont niet</span></li>
</ul>';
include $root . 'includes/components/section-two-col.php';
unset($two_col_variant, $två_col_label, $två_col_titel, $two_col_omgekeerd, $two_col_links, $two_col_cta, $två_col_rechts);

// ── Kompatibiliteit
$two_col_variant   = 'grijs';
$two_col_label     = 'Technisch';
$two_col_titel     = 'Welke apparaten werken met EMS?';
$two_col_links     = '<p><strong>Zonnepanelen-inverter:</strong> Moderne inverters (Solaredge, Fronius, SMA) zijn EMS-compatible. Oude modellen misschien niet.</p>
<p><strong>Thuisbatterij:</strong> Tesla Powerwall, LG Chem, Huawei, Pylontech: ja. Budget-merken soms niet.</p>
<p><strong>EV-Charger:</strong> Wallbox, Pulsar, Easee: EMS-capable. Goedkope chargers: meestal niet.</p>
<p><strong>Warmtepomp:</strong> Moderne warmtepompen (Nibe, Vaillant, IVT) hebben EMS-interface. Oudere: misschien niet.</p>
<p><strong>Advies:</strong> Controleer kompatibiliteit bij aankoop. STAP Energie adviseert op basis van uw plan.</p>';
$two_col_cta       = [];
$two_col_rechts    = '<ul class="checklist">
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Moderne apparaten meestal compatible</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Check bij aankoop</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Budget-merken soms niet</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>STAP adviseert op match</span></li>
</ul>';
include $root . 'includes/components/section-two-col.php';
unset($two_col_variant, $två_col_label, $två_col_titel, $two_col_omgekeerd, $two_col_links, $two_col_cta, $två_col_rechts);

// ── Voor wie geschikt
$two_col_variant   = 'wit';
$two_col_label     = 'Geschiktheid';
$two_col_titel     = 'Voor wie is EMS zinvol?';
$two_col_links     = '<p><strong>Zeer geschikt als u:</strong></p>
<p>✓ 3+ energiesystemen hebt (panelen, batterij, auto, warmtepomp)<br>
✓ Dynamisch energiecontract neemt<br>
✓ Actief energiebeheer wilt (app-monitoring)<br>
✓ Maximale besparing wilt bereiken<br>
✓ Smart home-mindset hebt</p>
<p><strong>Minder geschikt als u:</strong></p>
<p>✗ Vaste tarief-contract wilt houden<br>
✗ Alleen zonnepanelen (geen batterij/auto)<br>
✗ Geen interesse in apps/monitoring<br>
✗ Budget beperkt</p>';
$two_col_cta       = ['tekst' => 'Plan adviesgesprek →', 'url' => '/#contact', 'stijl' => 'primair'];
$two_col_rechts    = '<ul class="checklist">
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>3+ energiesystemen</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Dynamisch contract</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Interesse in optimalisatie</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Tech-savvy</span></li>
</ul>';
include $root . 'includes/components/section-two-col.php';
unset($two_col_variant, $två_col_label, $två_col_titel, $two_col_omgekeerd, $two_col_links, $two_col_cta, $två_col_rechts);

// ── Privacy en veiligheid
$two_col_variant   = 'grijs';
$two_col_label     = 'Zorg';
$two_col_titel     = 'Privacy en veiligheid van EMS-data';
$two_col_links     = '<p><strong>Data die EMS verzamelt:</strong> Realtime energiegebruik per systeem, stroom-marktprijzen, weersgegevens.</p>
<p><strong>Privacy:</strong> Dit gegevens gaat naar cloud-server van EMS-leverancier. Controleer privacybeleid!</p>
<p><strong>Veiligheid:</strong> EMS-hardware moet veilig zeggen tegen cyberaanvallen. Moderne EMS hebben encryptie en updates.</p>
<p><strong>Lokaal vs. Cloud:</strong> Sommige EMS kunnen lokaal werken (minder privacy-risk). Check bij aankoop.</p>
<p><strong>STAP Energie advies:</strong> Kies betrouwbare merk met sterke security-record.</p>';
$two_col_cta       = [];
$two_col_rechts    = '<ul class="checklist">
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Check privacybeleid</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Encryptie + updates</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Lokaal werken voorkeur</span></li>
  <li class="checklist__item"><span class="checklist__vink">✓</span><span>Gevestigde merk kiezen</span></li>
</ul>';
include $root . 'includes/components/section-two-col.php';
unset($two_col_variant, $två_col_label, $två_col_titel, $two_col_omgekeerd, $two_col_links, $two_col_cta, $två_col_rechts);

include $root . 'includes/faq.php';
include $root . 'includes/cta.php';
include $root . 'includes/footer.php';
?>
