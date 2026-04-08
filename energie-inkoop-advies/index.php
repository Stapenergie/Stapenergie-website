<?php
$root = dirname(dirname(__FILE__)) . '/';

$page_titel     = 'Energie-inkoop advies voor bedrijven | STAP Energie';
$page_beschrijving = 'Wij nemen uw energie-inkoop over. Contractanalyse, volledig contractbeheer en collectieve inkoop — onafhankelijk, transparant en afgestemd op uw bedrijfsproces.';
$page_canonical = 'https://stapenergie.nl/energie-inkoop-advies/';

include $root . 'includes/head.php';
include $root . 'includes/nav.php';
?>

<?php
$breadcrumb_items = [
    ['label' => 'Home',                  'url' => '/'],
    ['label' => 'Energie-inkoop advies', 'url' => ''],
];
include $root . 'includes/breadcrumb.php';
?>

<?php
$hero_variant  = 'split';
$hero_bg       = $root . 'images/hero-energie-inkoop.jpg';
$hero_eyebrow  = 'Energie-inkoop advies';
$hero_titel    = 'Uw factuur vertelt u wat u betaalt. Wij weten of uw contract ook klopt.';
$hero_lead     = 'Wij nemen uw energie-inkoop over. Met kennis van de markt, zonder verborgen agenda, en met ruimte om echt te begrijpen hoe uw bedrijf werkt.';
$hero_usps     = [
    'Gratis contractanalyse als startpunt',
    'Geen verborgen vergoedingen',
    'Van analyse tot volledig contractbeheer',
];
$hero_cta      = 'Vraag een gratis contractanalyse aan';
$hero_cta_url  = '#analyse';
include $root . 'includes/hero.php';
?>

<?php
$trust_items = [
    ['icoon' => 'check', 'tekst' => 'Onafhankelijk energieadvies'],
    ['icoon' => 'check', 'tekst' => 'Geen verborgen vergoedingen'],
    ['icoon' => 'check', 'tekst' => 'Kennis van leverancier én inkoopzijde'],
    ['icoon' => 'check', 'tekst' => 'Twee werkdagen reactietijd'],
];
include $root . 'includes/trust.php';
unset($trust_items);
?>

<?php
/* -------------------------------------------------- */
/* SECTIE 3 — HET PROBLEEM                            */
/* -------------------------------------------------- */
$twocol_variant = 'grijs';
$twocol_label   = 'Waarom het misgaat';
$twocol_titel   = 'De meeste bedrijven kijken alleen naar de prijs per kWh';
$twocol_links   = '<p>Energie-inkoop lijkt eenvoudig: vergelijken, kiezen, tekenen. En dan loopt het contract. De prijs per kWh is één regel. Wat er verder in staat — volumebandbreedte, afwijkingsboetes, dynamische clausules — bepaalt wat u werkelijk betaalt.</p>
<p>De energiemarkt is de afgelopen jaren structureel complexer geworden. Leveranciers werken met steeds meer variabelen. Adviespartijen schieten op die markt af zonder de inkoopkant te kennen. De ondernemer staat er intussen alleen voor.</p>';
$twocol_rechts  = '<p>STAP kijkt verder dan de rekening. Wij beginnen bij uw bedrijfsproces. Hoe verbruikt u energie? Kunt u verbruik sturen? Wat kunt u financieel opvangen als de energieprijs verdubbelt? Pas als dat beeld compleet is, gaan we naar de markt.</p>';
include $root . 'includes/components/section-two-col.php';
unset($twocol_variant, $twocol_label, $twocol_titel, $twocol_links, $twocol_rechts);
?>

<?php
/* -------------------------------------------------- */
/* SECTIE 4 — ONZE DIENSTEN                           */
/* -------------------------------------------------- */
$kaarten_label   = 'Wat wij doen';
$kaarten_titel   = 'Van losse analyse tot volledig ontzorgen';
$kaarten_variant = 'wit';
$kaarten_cols    = 3;
$kaarten_items   = [
    [
        'foto'     => $root . 'images/inkoop-contractanalyse.jpg',
        'foto_alt' => 'Contractanalyse energie',
        'titel'    => 'Uw huidige contract doorgelicht',
        'tekst'    => 'Wij analyseren uw bestaande overeenkomst op prijs, voorwaarden, volumeafspraken en risico\'s. U krijgt een helder beeld van wat klopt, wat niet, en wat beter kan.',
    ],
    [
        'foto'     => $root . 'images/inkoop-contractbeheer.jpg',
        'foto_alt' => 'Volledig contractbeheer energie',
        'titel'    => 'Energie-inkoop van uw bordje',
        'tekst'    => 'Met een volmacht handelen wij namens u: offertes opvragen, contracten beoordelen, onderhandelen met leveranciers. U blijft altijd op de hoogte.',
    ],
    [
        'foto'     => $root . 'images/inkoop-collectief.jpg',
        'foto_alt' => 'Collectief en tender energie',
        'titel'    => 'Schaalvoordeel voor meerdere locaties',
        'tekst'    => 'Voor bedrijven met meerdere aansluitingen, franchisegevers en vastgoedeigenaren bundelen wij contracten in een mantelovereenkomst. Huurders en franchisenemers liften mee op uw schaalgrootte, zonder zelf contractpartij te zijn. Voor organisaties die een inkooptraject willen structureren, begeleiden wij ook tenders.',
    ],
];
include $root . 'includes/components/section-kaarten.php';
unset($kaarten_label, $kaarten_titel, $kaarten_variant, $kaarten_cols, $kaarten_items);
?>

<?php
/* -------------------------------------------------- */
/* SECTIE 5 — HOE WIJ KIJKEN (contrast)               */
/* -------------------------------------------------- */
$contrast_variant = 'grijs';
$contrast_label   = 'Onze aanpak';
$contrast_titel   = 'Een goed contract begint bij een eerlijk risicoprofiel';
$contrast_intro   = '';
$contrast_links   = [
    'tag'   => 'Gebruikelijke aanpak',
    'items' => [
        'Contract vergelijken op kWh-prijs',
        'Tekenen voor de laagste aanbieding',
        'Hopen dat het verbruik klopt',
        'Verrast worden door afwijkingsboetes',
    ],
    'noot'  => 'Werkt prima. Tot de markt beweegt.',
];
$contrast_rechts  = [
    'tag'   => 'STAP-aanpak',
    'items' => [
        'Bedrijfsproces analyseren: productie, verwarming, stuurbaarheid',
        'Financiële risicotolerantie bepalen: wat als de prijs verdrievoudigt?',
        'Contractvorm kiezen die bij het profiel past: vast, variabel, dynamisch of klikcontract',
        'Contractvoorwaarden doorlichten, inclusief volumebandbreedte',
    ],
    'noot'  => 'Niet altijd de laagste prijs op papier. Wel de beste uitkomst in de praktijk.',
    'extra' => '<a href="#analyse" class="knop knop--groen">Start met een gratis analyse</a>',
];
include $root . 'includes/components/section-contrast.php';
unset($contrast_variant, $contrast_label, $contrast_titel, $contrast_intro, $contrast_links, $contrast_rechts);
?>

<?php
/* -------------------------------------------------- */
/* SECTIE 6 — WERKWIJZE                               */
/* -------------------------------------------------- */
$stappen_label   = 'Werkwijze';
$stappen_titel   = 'Van eerste gesprek tot zorgeloos contractbeheer';
$stappen_variant = 'wit';
$stappen_cols    = 4;
$stappen = [
    [
        'titel' => 'Analyse',
        'tekst' => 'Wij beginnen met uw huidige situatie: bestaande contracten, verbruiksdata, locaties en bedrijfsproces. Zo ontstaat een volledig beeld van wat er speelt en waar kansen liggen.',
    ],
    [
        'titel' => 'Strategie',
        'tekst' => 'Op basis van uw risicoprofiel en bedrijfsvoering stellen wij een inkoopstrategie op. Welke contractvorm past? Wanneer is het juiste moment om in te kopen? Wat zijn de risico\'s van elke keuze? Die vragen beantwoorden wij samen met u.',
    ],
    [
        'titel' => 'Volmacht & uitvoering',
        'tekst' => 'Om u te kunnen ontzorgen, vragen wij een volmacht aan. Daarmee handelen wij namens u: offertes opvragen, contracten sluiten, leveranciers aansturen. Transparant, altijd in overleg.',
    ],
    [
        'titel' => 'Beheer & rapportage',
        'tekst' => 'Na contractsluiting blijven wij actief. Wij monitoren verbruik, bewaken contractlooptijden en leveren periodieke inkooprapportages. Zo blijft u in control zonder er zelf tijd aan te besteden.',
    ],
];
include $root . 'includes/components/section-stappen.php';
unset($stappen_label, $stappen_titel, $stappen_variant, $stappen_cols, $stappen);
?>

<?php
/* -------------------------------------------------- */
/* SECTIE 7 — WAAROM STAP                             */
/* -------------------------------------------------- */
$kaarten_label   = 'Waarom STAP';
$kaarten_titel   = 'Wij kennen de markt van binnenuit';
$kaarten_variant = 'grijs';
$kaarten_cols    = 2;
$kaarten_items   = [
    [
        'titel' => 'Kennis van de andere kant van de tafel',
        'tekst' => 'Erik heeft jarenlang bij energieleveranciers gewerkt en contracten opgesteld. Inclusief de clausules die klanten zelden opvallen. Die kennis zet STAP nu in voor uw belang.',
    ],
    [
        'titel' => 'Transparant en onafhankelijk',
        'tekst' => 'STAP werkt op basis van een duidelijke fee. Geen verborgen vergoedingen van leveranciers. Ons belang is uw beste contract.',
    ],
];
include $root . 'includes/components/section-kaarten.php';
unset($kaarten_label, $kaarten_titel, $kaarten_variant, $kaarten_cols, $kaarten_items);
?>

<?php
/* -------------------------------------------------- */
/* SECTIE 8 — FORMULIER                               */
/* -------------------------------------------------- */
?>
<section id="analyse" class="sectie sectie--wit">
    <div class="sectie__inner">
        <span class="sectie__label">Gratis contractanalyse</span>
        <h2 class="sectie__titel">Wil weten of uw contract klopt?</h2>
        <p class="sectie__intro">Stuur uw contract of een recente factuur mee, dan kijken wij wat er speelt. Vrijblijvend, binnen twee werkdagen reactie.</p>
    </div>
    <?php include $root . 'includes/formulier.php'; ?>
</section>

<?php
/* -------------------------------------------------- */
/* SECTIE 9 — FAQ                                     */
/* -------------------------------------------------- */
$faq_items = [
    [
        'vraag'  => 'Wat is het verschil tussen STAP en een energieleverancier?',
        'antwoord' => 'Een leverancier verkoopt energie. Wij kopen het voor u in. Onafhankelijk, zonder belang bij een bepaalde leverancier.',
    ],
    [
        'vraag'  => 'Waarom heeft u een volmacht nodig?',
        'antwoord' => 'Om u echt te ontzorgen, moeten wij namens u kunnen handelen: offertes aanvragen, contracten aangaan, gegevens opvragen. Zonder volmacht zijn wij een adviseur. Met volmacht zijn wij uw energiebeheerder.',
    ],
    [
        'vraag'  => 'Welke contractvormen zijn er?',
        'antwoord' => 'Vast, variabel, dynamisch en klikcontract. Welke het best past, hangt af van uw verbruiksprofiel, stuurbaarheid en risicobereidheid. Dat bepalen wij samen in de analysefase.',
    ],
    [
        'vraag'  => 'Wat kost het?',
        'antwoord' => 'Wij werken op basis van een maandelijkse fee, afgestemd op de omvang van uw energiebeheer. Geen verborgen vergoedingen. Wat wij ontvangen, weet u.',
    ],
    [
        'vraag'  => 'Is dit ook geschikt voor meerdere locaties of franchiseorganisaties?',
        'antwoord' => 'Ja. Wij bundelen contracten voor bedrijven met meerdere aansluitingen in een mantelovereenkomst. Voor franchisegevers en vastgoedeigenaren bieden wij collectieve constructies waarbij huurders en franchisenemers meeliften zonder zelf contractpartij te zijn.',
    ],
    [
        'vraag'  => 'Kunnen jullie ook een tender begeleiden?',
        'antwoord' => 'Ja. Voor organisaties die een inkooptraject willen structureren, begeleiden wij het volledige tenderproces. Van programma van eisen tot beoordeling van offertes.',
    ],
];
include $root . 'includes/faq.php';
unset($faq_items);
?>

<?php
/* -------------------------------------------------- */
/* SECTIE 10 — AFSLUITENDE CTA                        */
/* -------------------------------------------------- */
$cta_titel  = "Energie-inkoop van uw bordje. Permanent.";
$cta_tekst  = 'Start met een gratis contractanalyse en ontdek wat er beter kan.';
$cta_knop   = 'Vraag de analyse aan';
$cta_url    = '#analyse';
include $root . 'includes/cta.php';
unset($cta_titel, $cta_tekst, $cta_knop, $cta_url);
?>

<?php include $root . 'includes/footer.php'; ?>
