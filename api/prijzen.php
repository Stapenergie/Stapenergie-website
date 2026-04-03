<?php
/**
 * STAP Energie — Prijzen API
 * Geeft de centrale prijsconfiguratie terug als JSON.
 * Wordt gebruikt door het universele contactformulier voor live prijsberekening.
 *
 * GET /api/prijzen.php
 * Response: application/json
 */

// Alleen GET toestaan
if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    http_response_code(405);
    exit;
}

// Cache-headers: 1 uur cachen, zodat elke paginabezoeker niet opnieuw hoeft te laden
header('Content-Type: application/json; charset=UTF-8');
header('Cache-Control: public, max-age=3600');
header('Access-Control-Allow-Origin: *');

// Laad de centrale prijsconfiguratie
$config = dirname(__DIR__) . '/config/prijzen.php';

if (!file_exists($config)) {
    http_response_code(500);
    echo json_encode(['error' => 'Prijsconfiguratie niet gevonden.']);
    exit;
}

require $config;

echo json_encode($prijzen, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
exit;
