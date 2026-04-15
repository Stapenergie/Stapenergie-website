<?php
/**
 * privacyverklaring/index.php
 * Privacyverklaring STAP Energie
 */
$root        = dirname(dirname(__FILE__)) . '/';
$title       = 'Privacyverklaring | STAP Energie';
$description = 'Privacyverklaring van STAP Energie. Hoe wij omgaan met uw persoonsgegevens.';
$canonical   = 'https://stapenergie.nl/privacyverklaring/';

$breadcrumbs = [
  ['label' => 'Home',              'url' => '/'],
  ['label' => 'Privacyverklaring'],
];

include $root . 'includes/head.php';
include $root . 'includes/nav.php';
include $root . 'includes/breadcrumb.php';
?>

<main>
  <section class="sectie sectie--wit">
    <div class="sectie__inner sectie__inner--smal">
      <h1 class="sectie__titel">Privacyverklaring</h1>
      <p class="sectie__intro">Versie 1.0 — april 2026</p>

      <div class="prose">

        <h2>1. Wie zijn wij?</h2>
        <p>STAP Energie is een eenmanszaak gevestigd in Leusden, Nederland. Wij adviseren particulieren en zakelijke opdrachtgevers op het gebied van energielabels, energie-inkoop en verduurzaming.</p>
        <p>Contactgegevens:<br>
        STAP Energie<br>
        Leusden, Nederland<br>
        E-mail: <a href="mailto:info@stapenergie.nl">info@stapenergie.nl</a><br>
        Website: <a href="https://stapenergie.nl">stapenergie.nl</a><br>
        KvK-nummer: in aanvraag</p>

        <h2>2. Welke persoonsgegevens verwerken wij?</h2>
        <p>Wij verwerken alleen gegevens die u zelf aan ons verstrekt via het contactformulier op onze website. Het gaat om de volgende gegevens:</p>
        <ul>
          <li>Naam</li>
          <li>E-mailadres</li>
          <li>Telefoonnummer (indien opgegeven)</li>
          <li>Bedrijfsnaam (bij zakelijke aanvragen)</li>
          <li>Adres en postcode (bij aanvragen voor energielabels)</li>
          <li>De inhoud van uw bericht</li>
        </ul>
        <p>Wij vragen geen bijzondere persoonsgegevens (zoals gezondheidsgegevens of BSN-nummers).</p>

        <h2>3. Waarom verwerken wij uw gegevens?</h2>
        <p>Wij verwerken uw gegevens uitsluitend voor de volgende doeleinden:</p>
        <ul>
          <li>Het beantwoorden van uw contactverzoek of aanvraag</li>
          <li>Het plannen en uitvoeren van een energielabelopname of adviesgesprek</li>
          <li>Het verzenden van een offerte of opdrachtbevestiging</li>
          <li>Het nakomen van wettelijke verplichtingen (zoals de registratie van energielabels in EP-online)</li>
        </ul>
        <p>Als u via het formulier toestemming geeft voor commercieel contact, kunnen wij u ook informeren over onze diensten. U kunt deze toestemming te allen tijde intrekken.</p>

        <h2>4. Grondslag voor de verwerking</h2>
        <p>De verwerking van uw gegevens is gebaseerd op:</p>
        <ul>
          <li><strong>Uitvoering van een overeenkomst</strong> — wanneer u een dienst bij ons afneemt</li>
          <li><strong>Gerechtvaardigde belangen</strong> — voor het beantwoorden van uw contactverzoek</li>
          <li><strong>Toestemming</strong> — voor commerciële berichten, indien u daarvoor toestemming heeft gegeven</li>
          <li><strong>Wettelijke verplichting</strong> — voor registratie van energielabels in het nationale register EP-online</li>
        </ul>

        <h2>5. Hoe lang bewaren wij uw gegevens?</h2>
        <p>Wij bewaren uw gegevens niet langer dan noodzakelijk:</p>
        <ul>
          <li>Contactverzoeken zonder vervolg: maximaal 1 jaar</li>
          <li>Klantgegevens na afronding van een opdracht: 7 jaar (wettelijke bewaarplicht)</li>
          <li>Energielabelregistraties in EP-online: conform de wettelijke bewaartermijn van het register</li>
        </ul>

        <h2>6. Met wie delen wij uw gegevens?</h2>
        <p>Wij verkopen uw gegevens niet aan derden. Wij delen uw gegevens alleen indien dit noodzakelijk is voor de uitvoering van onze dienstverlening:</p>
        <ul>
          <li><strong>EP-online (RVO)</strong> — voor de registratie van energielabels, wettelijk verplicht</li>
          <li><strong>Hostingpartij</strong> — onze website wordt gehost bij mijn.host, die als verwerker optreedt</li>
          <li><strong>E-mailprovider</strong> — voor het verzenden van bevestigings- en notificatiemails</li>
        </ul>
        <p>Met verwerkers die uw gegevens namens ons verwerken, sluiten wij een verwerkersovereenkomst.</p>

        <h2>7. Cookies en tracking</h2>
        <p>Onze website maakt geen gebruik van tracking cookies of analysediensten van derden. Wij plaatsen geen cookies voor advertentiedoeleinden.</p>
        <p>Technische cookies die noodzakelijk zijn voor het functioneren van de website (zoals het bijhouden van een formuliersessie) kunnen worden geplaatst. Deze vallen onder de uitzondering op de cookiewetgeving en vereisen geen toestemming.</p>
        <p>Onze website laadt lettertypen via Google Fonts. Hierdoor kan Google uw IP-adres verwerken. Raadpleeg het <a href="https://policies.google.com/privacy" target="_blank" rel="noopener">privacybeleid van Google</a> voor meer informatie.</p>

        <h2>8. Uw rechten</h2>
        <p>Op grond van de Algemene Verordening Gegevensbescherming (AVG) heeft u de volgende rechten:</p>
        <ul>
          <li><strong>Inzagerecht</strong> — u kunt opvragen welke gegevens wij van u verwerken</li>
          <li><strong>Rectificatierecht</strong> — u kunt onjuiste gegevens laten corrigeren</li>
          <li><strong>Recht op verwijdering</strong> — u kunt verzoeken uw gegevens te wissen, tenzij wij deze wettelijk verplicht zijn te bewaren</li>
          <li><strong>Recht op beperking</strong> — u kunt de verwerking laten beperken in bepaalde gevallen</li>
          <li><strong>Recht op dataportabiliteit</strong> — u kunt een kopie van uw gegevens in een gangbaar formaat opvragen</li>
          <li><strong>Recht van bezwaar</strong> — u kunt bezwaar maken tegen de verwerking op basis van gerechtvaardigde belangen</li>
          <li><strong>Recht om toestemming in te trekken</strong> — u kunt uw toestemming voor commercieel contact te allen tijde intrekken</li>
        </ul>
        <p>Stuur uw verzoek naar <a href="mailto:info@stapenergie.nl">info@stapenergie.nl</a>. Wij reageren binnen vier weken.</p>

        <h2>9. Klacht indienen</h2>
        <p>Als u van mening bent dat wij uw persoonsgegevens niet correct verwerken, heeft u het recht om een klacht in te dienen bij de Autoriteit Persoonsgegevens via <a href="https://www.autoriteitpersoonsgegevens.nl" target="_blank" rel="noopener">autoriteitpersoonsgegevens.nl</a>.</p>

        <h2>10. Wijzigingen</h2>
        <p>Wij behouden het recht deze privacyverklaring te wijzigen. Wijzigingen worden gepubliceerd op deze pagina. Controleer deze pagina regelmatig voor de meest actuele versie.</p>

      </div>
    </div>
  </section>
</main>

<?php
include $root . 'includes/footer.php';
?>
