# Backlog / bugfixes — Stapenergie-website

## Open

- **EP-online labelcheck API-key.** `api/labelcheck.php` vereist `config/ep_online.php` met `EP_ONLINE_API_KEY`. Dat bestand ontbreekt, waardoor de labelcheck-widget een nette fallback toont ("Check tijdelijk niet beschikbaar", met verwijzing naar EP-online en de mogelijkheid een aanvraag in te dienen). Werkend maken zodra de API-key beschikbaar is. (Bewust zo gelaten bij launch — niet blokkerend.)

## Nog te doen bij deploy

- `_archief_review/test_sync_check.txt` definitief verwijderen (stond in webroot, is verplaatst ter review).
- Zonnepanelen-kennisbankpagina (`kennisbank/zonnepanelen/`) inhoudelijk herzien: verkeerde bedragen/verbruiken en te technisch. Apart oppakken.
