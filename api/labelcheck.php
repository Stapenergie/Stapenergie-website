<?php
/**
 * STAP Energie — EP Online Labelcheck Proxy
 * Pad: /api/labelcheck.php
 *
 * Verbergt de API-key op de server.
 * Roep aan via: /api/labelcheck.php?postcode=3832AB&huisnummer=12
 *
 * Vereist: config.php met EP_ONLINE_API_KEY (buiten webroot plaatsen)
 * Of: definieer EP_ONLINE_API_KEY hieronder als tijdelijke oplossing.
 */

// ── CORS: alleen eigen domein ──
header('Content-Type: application/json; charset=UTF-8');
header('Access-Control-Allow-Origin: https://stapenergie.nl');
header('Cache-Control: no-store');

// ── API KEY (veilig buiten webroot, of tijdelijk hieronder invullen) ──
$config_file = dirname(__DIR__) . '/config/ep_online.php';
if (file_exists($config_file)) {
    require $config_file; // definieert EP_ONLINE_API_KEY
} else {
    define('EP_ONLINE_API_KEY', ''); // TODO: invullen na ontvangst API-key
}

// ── INPUT VALIDATIE ──
$postcode   = preg_replace('/\s+/', '', strtoupper(trim($_GET['postcode']   ?? '')));
$huisnummer = trim($_GET['huisnummer'] ?? '');

if (!preg_match('/^[1-9][0-9]{3}[A-Z]{2}$/', $postcode)) {
    http_response_code(400);
    echo json_encode(['error' => 'Ongeldige postcode']);
    exit;
}

if (empty($huisnummer) || !preg_match('/^[0-9]+/', $huisnummer)) {
    http_response_code(400);
    echo json_encode(['error' => 'Ongeldig huisnummer']);
    exit;
}

if (empty(EP_ONLINE_API_KEY)) {
    http_response_code(503);
    echo json_encode(['error' => 'API-key niet geconfigureerd', 'heeft_label' => false]);
    exit;
}

// ── EP ONLINE API AANROEP ──
// EP Online REST API v2 endpoint
$url = 'https://public.ep-online.nl/api/v2/PandEnergielabel/Adres'
     . '?postcode=' . urlencode($postcode)
     . '&huisnummer=' . urlencode($huisnummer);

$ch = curl_init();
curl_setopt_array($ch, [
    CURLOPT_URL            => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT        => 8,
    CURLOPT_HTTPHEADER     => [
        'Authorization: Bearer ' . EP_ONLINE_API_KEY,
        'Accept: application/json',
    ],
]);

$response  = curl_exec($ch);
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$curl_err  = curl_error($ch);
curl_close($ch);

// ── FOUTAFHANDELING ──
if ($curl_err || $response === false) {
    http_response_code(502);
    echo json_encode(['error' => 'Verbinding met EP-online mislukt', 'heeft_label' => false]);
    exit;
}

$data = json_decode($response, true);

// ── RESULTAAT VERWERKEN ──
if ($http_code === 200 && !empty($data)) {
    // EP Online geeft een array van resultaten — pak het meest recente definitieve label
    $label_entry = null;

    if (is_array($data)) {
        foreach ($data as $entry) {
            // Zoek definitief label (niet voorlopig)
            $status = strtolower($entry['statusOpname'] ?? $entry['status'] ?? '');
            if (str_contains($status, 'definitief') || str_contains($status, 'geregistreerd')) {
                $label_entry = $entry;
                break;
            }
        }
        // Geen definitief gevonden — pak eerste beschikbare
        if (!$label_entry && !empty($data[0])) {
            $label_entry = $data[0];
        }
    }

    if ($label_entry) {
        $label_letter = $label_entry['energieklasse']
                     ?? $label_entry['energielabelklasse']
                     ?? $label_entry['labelLetter']
                     ?? null;

        $geldig_tot   = $label_entry['registratiedatum']
                     ?? $label_entry['datumRegistratie']
                     ?? null;

        // Geldigheid: 10 jaar na registratie
        if ($geldig_tot) {
            $reg_date   = new DateTime($geldig_tot);
            $exp_date   = (clone $reg_date)->modify('+10 years');
            $geldig_tot = $exp_date->format('d-m-Y');
        }

        echo json_encode([
            'heeft_label' => true,
            'label'       => $label_letter ?? 'onbekend',
            'geldig_tot'  => $geldig_tot ?? 'onbekend',
        ]);
    } else {
        echo json_encode(['heeft_label' => false]);
    }
} elseif ($http_code === 404) {
    echo json_encode(['heeft_label' => false]);
} else {
    http_response_code(502);
    echo json_encode(['error' => 'EP-online fout: ' . $http_code, 'heeft_label' => false]);
}
