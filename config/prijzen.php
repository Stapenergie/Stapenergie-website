<?php
/**
 * STAP Energie — Centrale prijsconfiguratie
 * Dit is de enige plek waar prijzen worden beheerd.
 * Wijzig hier een prijs en alle pagina's pakken dit automatisch op.
 *
 * Sleutels zijn stabiel en worden gebruikt door:
 *   - api/prijzen.php (JSON endpoint voor het formulier)
 *   - Elke pagina die prijzen toont via de prijzen-API
 */

$prijzen = [

    // ── Particulier: woningen ──────────────────────────────────────────────
    'particulier' => [
        'appartement_klein' => [
            'label'  => 'Appartement tot 40\u00a0m\u00b2',
            'prijs'  => 195,
            'type'   => 'vast',
        ],
        'appartement_groot' => [
            'label'  => 'Appartement 40\u2013100\u00a0m\u00b2',
            'prijs'  => 249,
            'type'   => 'vast',
        ],
        'eengezins_tussen' => [
            'label'  => 'Eengezinswoning (tussenwoning)',
            'prijs'  => 295,
            'type'   => 'vast',
        ],
        'eengezins_hoek' => [
            'label'  => 'Hoekwoning / 2-onder-1-kap',
            'prijs'  => 325,
            'type'   => 'vast',
        ],
        'vrijstaand_klein' => [
            'label'  => 'Vrijstaande woning tot 150\u00a0m\u00b2',
            'prijs'  => 345,
            'type'   => 'vast',
        ],
        'vrijstaand_groot' => [
            'label'  => 'Vrijstaande woning groter dan 150\u00a0m\u00b2',
            'prijs'  => null,
            'type'   => 'offerte',
            'tekst'  => 'Offerte op maat',
        ],
    ],

    // ── Zakelijk: bedrijfspanden ───────────────────────────────────────────
    'zakelijk' => [
        'klein' => [
            'label'  => 'Tot 100\u00a0m\u00b2',
            'prijs'  => 495,
            'type'   => 'vast',
        ],
        'middel' => [
            'label'  => '100\u2013500\u00a0m\u00b2',
            'prijs'  => 675,
            'type'   => 'vast',
        ],
        'groot' => [
            'label'  => 'Groter dan 500\u00a0m\u00b2',
            'prijs'  => null,
            'type'   => 'offerte',
            'tekst'  => 'Offerte op maat',
        ],
    ],

    // ── Extra diensten ─────────────────────────────────────────────────────
    'extra' => [
        'certificaat_ingelijst' => [
            'label'  => 'Ingelijst certificaat (optioneel)',
            'prijs'  => 25,
            'type'   => 'vast',
        ],
    ],

];
