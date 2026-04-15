<?php
/**
 * STAP Energie — Centrale formulierverwerker
 * Verwerkt alle contactformulieren op de site.
 * Stuurt notificatie naar info@stapenergie.nl + bevestiging naar de klant.
 *
 * AVG-grondslagen:
 *   - Contactopname: uitvoering overeenkomst (geen aparte checkbox vereist)
 *   - Commercieel benaderen: toestemming (opt-in checkbox, nooit vooraf aangevinkt)
 *   - Bewijs van toestemming: tijdstip + IP worden opgeslagen bij commerciële opt-in
 */

// ─── Configuratie ────────────────────────────────────────────────────────────
define('ONTVANGER',     'info@stapenergie.nl');
define('AFZENDER',      'info@stapenergie.nl');
define('BEDRIJFSNAAM',  'STAP Energie');
define('SITE_URL',      'https://stapenergie.nl');

// ─── Veiligheidscheck: alleen POST toestaan ───────────────────────────────────
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit('Methode niet toegestaan.');
}

// ─── Hulpfuncties ─────────────────────────────────────────────────────────────

function veld(string $key, string $standaard = ''): string {
    return isset($_POST[$key])
        ? trim(strip_tags($_POST[$key]))
        : $standaard;
}

function geldigEmail(string $email): bool {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

function stuurMail(string $aan, string $onderwerp, string $body, string $replyTo = ''): bool {
    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $headers .= "From: " . BEDRIJFSNAAM . " <" . AFZENDER . ">\r\n";
    if ($replyTo) {
        $headers .= "Reply-To: $replyTo\r\n";
    }
    $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
    return mail($aan, $onderwerp, $body, $headers);
}

function mailTemplate(string $inhoud, bool $isBevestiging = false): string {
    $kleur = '#1a5c32';
    return <<<HTML
<!DOCTYPE html>
<html lang="nl">
<head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"></head>
<body style="margin:0;padding:0;background:#f7f8f5;font-family:'Helvetica Neue',Arial,sans-serif;">
  <table width="100%" cellpadding="0" cellspacing="0" style="background:#f7f8f5;padding:32px 16px;">
    <tr><td align="center">
      <table width="600" cellpadding="0" cellspacing="0" style="max-width:600px;width:100%;background:#ffffff;border-radius:8px;overflow:hidden;box-shadow:0 2px 12px rgba(0,0,0,.08);">
        <tr>
          <td style="background:{$kleur};padding:28px 32px;">
            <p style="margin:0;font-size:22px;font-weight:700;color:#ffffff;letter-spacing:-0.3px;">STAP Energie</p>
            <p style="margin:6px 0 0;font-size:13px;color:rgba(255,255,255,.75);">Energielabels, inkoop &amp; verduurzaming</p>
          </td>
        </tr>
        <tr><td style="padding:32px;">{$inhoud}</td></tr>
        <tr>
          <td style="background:#f0f7f2;padding:20px 32px;border-top:1px solid #e2e8e0;">
            <p style="margin:0;font-size:12px;color:#4a5568;line-height:1.6;">
              STAP Energie &nbsp;&middot;&nbsp; Energielabels, inkoop &amp; verduurzaming &nbsp;&middot;&nbsp;
              <a href="https://stapenergie.nl" style="color:{$kleur};text-decoration:none;">stapenergie.nl</a>
            </p>
          </td>
        </tr>
      </table>
    </td></tr>
  </table>
</body>
</html>
HTML;
}

function gegevensRijen(array $rijen): string {
    $html = '<table width="100%" cellpadding="0" cellspacing="0" style="border-collapse:collapse;">';
    foreach ($rijen as $label => $waarde) {
        if ($waarde === '' || $waarde === null) continue;
        $html .= "<tr>
          <td style=\"padding:10px 0;border-bottom:1px solid #e2e8e0;font-size:13px;color:#4a5568;width:38%;vertical-align:top;\">{$label}</td>
          <td style=\"padding:10px 0 10px 16px;border-bottom:1px solid #e2e8e0;font-size:14px;color:#1a1a1a;font-weight:500;vertical-align:top;\">{$waarde}</td>
        </tr>";
    }
    $html .= '</table>';
    return $html;
}

// ─── Gegevens ophalen ─────────────────────────────────────────────────────────

$pagina      = veld('pagina', 'onbekend');
$source      = veld('source', '');
$type        = veld('type', '');        // 'particulier' of 'zakelijk'
$dienst      = veld('dienst');

// Naam
$voornaam    = veld('voornaam');
$achternaam  = veld('achternaam');
$naam        = veld('naam') ?: trim("$voornaam $achternaam");
$bedrijf     = veld('bedrijf');

// Contact
$email       = veld('email');
$telefoon    = veld('telefoon');

// Adres
$postcode    = veld('postcode');
$huisnummer  = veld('huisnummer');
$adres       = veld('adres');
$volledigAdres = $adres ?: trim("$postcode $huisnummer");

// Pand / woning
$woningtype     = veld('woningtype');
$pandtype       = veld('pandtype') ?: veld('type_pand');
$oppervlakte    = veld('oppervlakte');
$labelstatus    = veld('labelstatus');
$bouwjaar       = veld('bouwjaar');
$periode        = veld('datum') ?: veld('periode') ?: veld('gewenste_periode');
$spoed          = isset($_POST['spoed']) ? 'Ja' : '';
$berekendePrijs = veld('berekende_prijs');
$bericht        = veld('bericht') ?: veld('toelichting') ?: veld('opmerking');

// AVG: commerciële opt-in
$commercieelOptIn = isset($_POST['commercieel_optin']) && $_POST['commercieel_optin'] === '1';
$optInTijdstip    = date('j F Y, H:i:s');
$optInIp          = $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'] ?? 'onbekend';

$tijdstip = date('j F Y, H:i');

// ─── Validatie ────────────────────────────────────────────────────────────────

$fouten = [];
if (empty($naam)) {
    $fouten[] = 'Naam ontbreekt.';
}
if (empty($email) || !geldigEmail($email)) {
    $fouten[] = 'Geldig e-mailadres ontbreekt.';
}

if (!empty($fouten)) {
    http_response_code(400);
    header('Content-Type: application/json');
    echo json_encode(['succes' => false, 'fouten' => $fouten]);
    exit;
}

// ─── Paginanamen voor onderwerp ───────────────────────────────────────────────

$paginaNamen = [
    'homepage'                   => 'Homepage',
    'particulieren'              => 'Particulieren',
    'woningen'                   => 'Energielabel Woningen',
    'energielabels'              => 'Energielabels',
    'energielabels-particulier'  => 'Energielabels (Particulier)',
    'energielabels-zakelijk'     => 'Energielabels (Zakelijk)',
    'utiliteit'                  => 'Energielabel Bedrijfspand',
    'utiliteit-bedrijf'          => 'Energielabel Bedrijfspand',
    'utiliteit-certificaat'      => 'Energielabel Certificaat',
    'zakelijk'                   => 'Zakelijk',
    'kantoren'                   => 'Kantoren',
    'energie-inkoop-advies'      => 'Energie inkoop advies',
    'verduurzaming'              => 'Verduurzaming',
    'subsidie'                   => 'Subsidie advies',
];

$paginaLabel = $paginaNamen[$pagina] ?? ucfirst($pagina);

// ─── Notificatiemail naar STAP Energie ───────────────────────────────────────

$typeLabel = $type === 'zakelijk' ? 'Zakelijk' : ($type === 'particulier' ? 'Particulier' : '');

$rijen = array_filter([
    'Naam'             => htmlspecialchars($naam),
    'Bedrijf'          => htmlspecialchars($bedrijf),
    'Type'             => htmlspecialchars($typeLabel),
    'E-mail'           => '<a href="mailto:' . htmlspecialchars($email) . '" style="color:#1a5c32;">' . htmlspecialchars($email) . '</a>',
    'Telefoon'         => htmlspecialchars($telefoon),
    'Dienst'           => htmlspecialchars($dienst),
    'Adres'            => htmlspecialchars($volledigAdres),
    'Woningtype'       => htmlspecialchars($woningtype),
    'Type pand'        => htmlspecialchars($pandtype),
    'Oppervlakte'      => htmlspecialchars($oppervlakte),
    'Indicatieprijs'   => $berekendePrijs ? htmlspecialchars($berekendePrijs) : '',
    'Labelstatus'      => htmlspecialchars($labelstatus),
    'Bouwjaar'         => htmlspecialchars($bouwjaar),
    'Gewenste periode' => htmlspecialchars($periode),
    'Spoed'            => $spoed,
    'Opmerking'        => $bericht ? nl2br(htmlspecialchars($bericht)) : '',
]);

// Commerciële opt-in toevoegen aan notificatiemail
$optInRegel = $commercieelOptIn
    ? '<tr><td colspan="2" style="padding:10px 0;border-bottom:1px solid #e2e8e0;font-size:13px;background:#f0f7f2;color:#1a5c32;font-weight:700;">&#10003; Commerciële opt-in gegeven — tijdstip: ' . $optInTijdstip . ' &nbsp;|&nbsp; IP: ' . htmlspecialchars($optInIp) . '</td></tr>'
    : '<tr><td colspan="2" style="padding:10px 0;border-bottom:1px solid #e2e8e0;font-size:13px;color:#9aa5b4;">&#10007; Geen commerciële opt-in</td></tr>';

$notificatieInhoud = '
<h2 style="margin:0 0 8px;font-size:20px;color:#1a1a1a;font-weight:700;">Nieuwe aanvraag ontvangen</h2>
<p style="margin:0 0 24px;font-size:14px;color:#4a5568;">Via pagina: <strong>' . htmlspecialchars($paginaLabel) . '</strong> &nbsp;&middot;&nbsp; ' . $tijdstip . '</p>
' . gegevensRijen($rijen) . '
<table width="100%" cellpadding="0" cellspacing="0" style="border-collapse:collapse;margin-top:0;">' . $optInRegel . '</table>
<p style="margin:24px 0 0;font-size:13px;color:#4a5568;">Bron: ' . htmlspecialchars($source ?: '—') . '</p>';

$notificatieOnderwerp = '=?UTF-8?B?' . base64_encode("Nieuwe aanvraag via $paginaLabel") . '?=';

stuurMail(
    ONTVANGER,
    $notificatieOnderwerp,
    mailTemplate($notificatieInhoud, false),
    $email
);

// ─── Bevestigingsmail naar de klant ──────────────────────────────────────────

$voornaamKlant = $voornaam ?: explode(' ', $naam)[0];

$commercieelZin = $commercieelOptIn
    ? '<p style="margin:0 0 16px;font-size:14px;color:#4a5568;line-height:1.7;">Je heeft ook toestemming gegeven om commercieel benaderd te worden. Je kunt deze toestemming altijd intrekken via <a href="mailto:' . ONTVANGER . '" style="color:#1a5c32;">' . ONTVANGER . '</a>.</p>'
    : '';

$prijsZin = $berekendePrijs
    ? '<p style="margin:0 0 16px;font-size:14px;color:#4a5568;line-height:1.7;">Op basis van je keuze is de indicatieve prijs <strong style="color:#1a1a1a;">' . htmlspecialchars($berekendePrijs) . '</strong>. Dit is onder voorbehoud van onze opname ter plaatse.</p>'
    : '';

$bevestigingInhoud = '
<h2 style="margin:0 0 16px;font-size:20px;color:#1a1a1a;font-weight:700;">Bedankt voor je aanvraag, ' . htmlspecialchars($voornaamKlant) . '!</h2>
<p style="margin:0 0 16px;font-size:15px;color:#1a1a1a;line-height:1.7;">
  Je aanvraag is goed ontvangen. We nemen <strong>binnen twee werkdagen</strong> contact met je op om je situatie te bespreken.
</p>
' . $prijsZin . '
<p style="margin:0 0 24px;font-size:15px;color:#1a1a1a;line-height:1.7;">
  Heeft u in de tussentijd vragen? Bereik ons via <a href="mailto:' . ONTVANGER . '" style="color:#1a5c32;font-weight:500;">' . ONTVANGER . '</a>.
</p>
<div style="background:#f0f7f2;border-radius:8px;padding:20px 24px;margin:0 0 24px;">
  <p style="margin:0 0 12px;font-size:13px;font-weight:700;color:#1a5c32;text-transform:uppercase;letter-spacing:0.5px;">Je aanvraaggegevens</p>
  ' . gegevensRijen(array_filter([
    'Naam'        => htmlspecialchars($naam),
    'E-mail'      => htmlspecialchars($email),
    'Telefoon'    => htmlspecialchars($telefoon),
    'Dienst'      => htmlspecialchars($dienst),
    'Woningtype'  => htmlspecialchars($woningtype),
    'Type pand'   => htmlspecialchars($pandtype),
    'Oppervlakte' => htmlspecialchars($oppervlakte),
    'Adres'       => htmlspecialchars($volledigAdres),
  ])) . '
</div>
' . $commercieelZin . '
<p style="margin:0;font-size:14px;color:#4a5568;line-height:1.6;">
  Met vriendelijke groet,<br>
  <strong style="color:#1a1a1a;">Erik Dolman</strong><br>
  STAP Energie
</p>';

$bevestigingOnderwerp = '=?UTF-8?B?' . base64_encode('Je aanvraag bij STAP Energie is ontvangen') . '?=';

stuurMail(
    $email,
    $bevestigingOnderwerp,
    mailTemplate($bevestigingInhoud, true)
);

// ─── JSON-respons naar de browser ─────────────────────────────────────────────

header('Content-Type: application/json');
echo json_encode([
    'succes'  => true,
    'bericht' => 'Je aanvraag is ontvangen. We nemen binnen twee werkdagen contact met je op.',
]);
exit;
