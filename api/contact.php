<?php
/**
 * STAP Energie — Centrale formulierverwerker
 * Verwerkt alle contactformulieren op de site.
 * Stuurt notificatie naar info@stapenergie.nl + bevestiging naar de klant.
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

/**
 * Haal een POST-waarde op, gestript van HTML en extra witruimte.
 */
function veld(string $key, string $standaard = ''): string {
    return isset($_POST[$key])
        ? trim(strip_tags($_POST[$key]))
        : $standaard;
}

/**
 * Valideer een e-mailadres.
 */
function geldigEmail(string $email): bool {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

/**
 * Stuur een HTML-mail.
 */
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

/**
 * Bouw een nette HTML-mailtemplate op.
 */
function mailTemplate(string $inhoud, bool $isBevestiging = false): string {
    $kleur  = '#1a5c32';
    $titel  = $isBevestiging ? 'Bedankt voor uw aanvraag' : 'Nieuwe aanvraag';
    return <<<HTML
<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="margin:0;padding:0;background:#f7f8f5;font-family:'Helvetica Neue',Arial,sans-serif;">
  <table width="100%" cellpadding="0" cellspacing="0" style="background:#f7f8f5;padding:32px 16px;">
    <tr>
      <td align="center">
        <table width="600" cellpadding="0" cellspacing="0" style="max-width:600px;width:100%;background:#ffffff;border-radius:8px;overflow:hidden;box-shadow:0 2px 12px rgba(0,0,0,.08);">

          <!-- Header -->
          <tr>
            <td style="background:{$kleur};padding:28px 32px;">
              <p style="margin:0;font-size:22px;font-weight:700;color:#ffffff;letter-spacing:-0.3px;">
                STAP Energie
              </p>
              <p style="margin:6px 0 0;font-size:13px;color:rgba(255,255,255,.75);">
                Energielabels &amp; Verduurzaming
              </p>
            </td>
          </tr>

          <!-- Inhoud -->
          <tr>
            <td style="padding:32px;">
              {$inhoud}
            </td>
          </tr>

          <!-- Footer -->
          <tr>
            <td style="background:#f0f7f2;padding:20px 32px;border-top:1px solid #e2e8e0;">
              <p style="margin:0;font-size:12px;color:#4a5568;line-height:1.6;">
                STAP Energie &nbsp;·&nbsp; <a href="https://stapenergie.nl" style="color:{$kleur};text-decoration:none;">stapenergie.nl</a>
              </p>
            </td>
          </tr>

        </table>
      </td>
    </tr>
  </table>
</body>
</html>
HTML;
}

/**
 * Zet een array met label => waarde om naar nette HTML-rijen.
 */
function gegevensRijen(array $rijen): string {
    $html = '<table width="100%" cellpadding="0" cellspacing="0" style="border-collapse:collapse;">';
    foreach ($rijen as $label => $waarde) {
        if ($waarde === '' || $waarde === null) continue;
        $html .= <<<ROW
<tr>
  <td style="padding:10px 0;border-bottom:1px solid #e2e8e0;font-size:13px;color:#4a5568;width:38%;vertical-align:top;">{$label}</td>
  <td style="padding:10px 0 10px 16px;border-bottom:1px solid #e2e8e0;font-size:14px;color:#1a1a1a;font-weight:500;vertical-align:top;">{$waarde}</td>
</tr>
ROW;
    }
    $html .= '</table>';
    return $html;
}

// ─── Gegevens ophalen ─────────────────────────────────────────────────────────

$pagina     = veld('pagina', 'onbekend');
$source     = veld('source', '');

// Naam — verschillende formulieren gebruiken 'naam' of 'voornaam'+'achternaam'
$voornaam   = veld('voornaam');
$achternaam = veld('achternaam');
$naam       = veld('naam') ?: trim("$voornaam $achternaam");

$bedrijf    = veld('bedrijf');
$email      = veld('email');
$telefoon   = veld('telefoon');

// Adresgegevens
$adres      = veld('adres');
$postcode   = veld('postcode');
$huisnummer = veld('huisnummer');
$volledigAdres = $adres ?: trim("$postcode $huisnummer");

// Pand/woning specifiek
$woningtype     = veld('woningtype');
$pandtype       = veld('pandtype') ?: veld('type_pand');
$oppervlakte    = veld('oppervlakte');
$labelstatus    = veld('labelstatus');
$bouwjaar       = veld('bouwjaar');
$dienst         = veld('dienst');
$periode        = veld('datum') ?: veld('periode') ?: veld('gewenste_periode');
$spoed          = isset($_POST['spoed']) ? 'Ja' : '';
$bericht        = veld('bericht') ?: veld('toelichting') ?: veld('opmerking');

// Tijdstip
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

// ─── Paginanaam voor onderwerp ────────────────────────────────────────────────

$paginaNamen = [
    'homepage'    => 'Homepage',
    'particulieren' => 'Particulieren',
    'woningen'    => 'Energielabel Woningen',
    'energielabels' => 'Energielabels',
    'energielabels-particulier' => 'Energielabels (Particulier)',
    'energielabels-zakelijk'    => 'Energielabels (Zakelijk)',
    'utiliteit'   => 'Energielabel Utiliteit',
    'utiliteit-bedrijf'       => 'Energielabel Utiliteit (Bedrijf)',
    'utiliteit-certificaat'   => 'Energielabel Utiliteit (Certificaat)',
    'zakelijk'    => 'Zakelijk',
    'zakelijk-cta' => 'Zakelijk (CTA)',
    'kantoren'    => 'Kantoren',
];

$paginaLabel = $paginaNamen[$pagina] ?? ucfirst($pagina);

// ─── Notificatiemail naar STAP Energie ───────────────────────────────────────

$rijen = array_filter([
    'Naam'          => htmlspecialchars($naam),
    'Bedrijf'       => htmlspecialchars($bedrijf),
    'E-mail'        => '<a href="mailto:' . htmlspecialchars($email) . '" style="color:#1a5c32;">' . htmlspecialchars($email) . '</a>',
    'Telefoon'      => htmlspecialchars($telefoon),
    'Adres'         => htmlspecialchars($volledigAdres),
    'Woningtype'    => htmlspecialchars($woningtype),
    'Type pand'     => htmlspecialchars($pandtype),
    'Oppervlakte'   => htmlspecialchars($oppervlakte),
    'Labelstatus'   => htmlspecialchars($labelstatus),
    'Bouwjaar'      => htmlspecialchars($bouwjaar),
    'Dienst'        => htmlspecialchars($dienst),
    'Gewenste periode' => htmlspecialchars($periode),
    'Spoed'         => $spoed,
    'Opmerking'     => $bericht ? nl2br(htmlspecialchars($bericht)) : '',
]);

$notificatieInhoud = '
<h2 style="margin:0 0 8px;font-size:20px;color:#1a1a1a;font-weight:700;">Nieuwe aanvraag ontvangen</h2>
<p style="margin:0 0 24px;font-size:14px;color:#4a5568;">Via pagina: <strong>' . htmlspecialchars($paginaLabel) . '</strong> &nbsp;·&nbsp; ' . $tijdstip . '</p>
' . gegevensRijen($rijen) . '
<p style="margin:24px 0 0;font-size:13px;color:#4a5568;">
  Bron: ' . htmlspecialchars($source ?: '—') . '
</p>';

$notificatieOnderwerp = '=?UTF-8?B?' . base64_encode("Nieuwe aanvraag via $paginaLabel") . '?=';

stuurMail(
    ONTVANGER,
    $notificatieOnderwerp,
    mailTemplate($notificatieInhoud, false),
    $email
);

// ─── Bevestigingsmail naar de klant ──────────────────────────────────────────

$voornaamKlant = $voornaam ?: explode(' ', $naam)[0];

$bevestigingInhoud = '
<h2 style="margin:0 0 16px;font-size:20px;color:#1a1a1a;font-weight:700;">Bedankt voor uw aanvraag, ' . htmlspecialchars($voornaamKlant) . '!</h2>
<p style="margin:0 0 16px;font-size:15px;color:#1a1a1a;line-height:1.7;">
  Uw aanvraag is goed ontvangen. We nemen <strong>binnen twee werkdagen</strong> contact met u op om uw situatie te bespreken en u een passend voorstel te doen.
</p>
<p style="margin:0 0 24px;font-size:15px;color:#1a1a1a;line-height:1.7;">
  Heeft u in de tussentijd vragen? U kunt ons bereiken via <a href="mailto:' . ONTVANGER . '" style="color:#1a5c32;font-weight:500;">' . ONTVANGER . '</a>.
</p>

<div style="background:#f0f7f2;border-radius:8px;padding:20px 24px;margin:0 0 24px;">
  <p style="margin:0 0 12px;font-size:13px;font-weight:700;color:#1a5c32;text-transform:uppercase;letter-spacing:0.5px;">Uw aanvraaggegevens</p>
  ' . gegevensRijen(array_filter([
    'Naam'       => htmlspecialchars($naam),
    'E-mail'     => htmlspecialchars($email),
    'Telefoon'   => htmlspecialchars($telefoon),
    'Adres'      => htmlspecialchars($volledigAdres),
    'Woningtype' => htmlspecialchars($woningtype),
    'Type pand'  => htmlspecialchars($pandtype),
    'Oppervlakte'=> htmlspecialchars($oppervlakte),
    'Dienst'     => htmlspecialchars($dienst),
  ])) . '
</div>

<p style="margin:0;font-size:14px;color:#4a5568;line-height:1.6;">
  Met vriendelijke groet,<br>
  <strong style="color:#1a1a1a;">Erik Dolman</strong><br>
  STAP Energie
</p>';

$bevestigingOnderwerp = '=?UTF-8?B?' . base64_encode('Uw aanvraag bij STAP Energie is ontvangen') . '?=';

stuurMail(
    $email,
    $bevestigingOnderwerp,
    mailTemplate($bevestigingInhoud, true)
);

// ─── JSON-respons naar de browser ─────────────────────────────────────────────

header('Content-Type: application/json');
echo json_encode([
    'succes'  => true,
    'bericht' => 'Uw aanvraag is ontvangen. We nemen binnen twee werkdagen contact met u op.',
]);
exit;
