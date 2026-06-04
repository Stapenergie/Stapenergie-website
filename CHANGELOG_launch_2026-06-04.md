# Uitvoeringslog website launch-fixes — 4 juni 2026

Doorgevoerd na akkoord van Erik. Niets gedeployed; wijzigingen staan in de broncode.

## Live-blokkers
- **B-1/B-2**: `kennisbank/laadpaal` en `kennisbank/thuisbatterij` afgekapte footer-include hersteld (`includes/footer.php` + `?>` terug).
- **B-3**: `verduurzaming-subsidie/particulieren` afbeelding `erik-advies.jpg` → bestaande `erik-portret.jpg`.

## Compliance
- **C-1**: "Gecertificeerd EPA-adviseur" → "Energieaannemer voor het MKB" sitewide (badges/trust/cta/hero/checklists). Prozavarianten "gecertificeerd EPA-adviseur/adviseur" → "EPA-adviseur/adviseur". Label-titels "Officieel & Gecertificeerd" → "Officieel & Erkend". Losse "gecertificeerd, snel..." (mkb, energielabels, particulieren) opgeschoond.
- **C-2**: "Officieel erkend / Geregistreerd in EP-online" → "Onafhankelijk energie-inkoopadvies / Werkt uitsluitend voor jou" als sitewide default (trustbalk + cta + homepage-USP). Behouden op de 6 labeldienst-pagina's via eigen trust-override: `energielabels/`, `/woningen/`, `/utiliteit/`, `makelaars/`, `vastgoed/`, `particulieren/`. Kantoren claimde onterecht EP-online → vervangen. Homepage-dienstkaart EP-online-vermelding verzacht.
- **C-3**: trackrecord-claims (industrie, zakelijk) → "kunnen ondersteunen"; "jarenlange ervaring...STAP Energie" → "15+ jaar marktervaring kent de oprichter van STAP Energie, Erik...".
- **C-4b/C-4c**: kantoren + energielabels/utiliteit inkoopframing herschreven (geen "zonder extra kosten"/tussenpersoon). C-4a (verduurzaming) bewust ongewijzigd.
- **C-6**: ervaringsjaren overal "15+" (bio over-ons houdt 17); grammaticale slip "aan de energiemarkt" → "in de energiemarkt".

## Brand
- **BR-1**: em-dashes (—) weg in `verduurzaming-subsidie/particulieren` en `privacyverklaring`; ook em-dash-entiteiten (`&mdash;`) in footer, formulier en labelcheck.
- **BR-2**: uitroeptekens weg (formulier, cv-ketel, ems, zonneboiler) + bevestigingsmail `api/contact.php`.
- **BR-3**: u-vorm → je-vorm (over-ons, kennisbank-pagina's). Privacyverklaring blijft formeel.
- **BR-5**: spelling (wärmt→warmt, bespaard→bespaart, electric→elektrisch).

## Positionering / Developer
- **P-3/P-4**: ervaringsclaim geüniformeerd (zie C-6).
- **P-5**: nav- en footer-dienstvolgorde: inkoop eerst.
- **P-6**: term "energieaannemer" toegevoegd op `energie-inkoop-advies` en `over-ons`.
- **D-2**: footer-e-mail nu gewone `mailto:info@stapenergie.nl` (geen Cloudflare-obfuscatie).
- **D-3**: kennisbank-subpagina's (nav-dropdown + footerkolom) en verduurzaming-subpagina's (nav + footer) opgenomen; footer-grid naar 5 kolommen.
- **D-4**: `test_sync_check.txt` verplaatst naar `_archief_review/` (niet hard verwijderd).
- **D-1**: EP-online API-key als bugfix genoteerd in `BACKLOG.md`.
- **Telefoon**: overal 06-17099733 (incl. `tel:`-links en footer-weergave).

## Niet gedaan / openstaand
- Zonnepanelen-kennisbankpagina: inhoudelijke herziening (foute bedragen/verbruiken, te technisch) — apart oppakken.
- `test_sync_check.txt` definitief verwijderen bij deploy.
- Open VRAAG-punten uit het rapport die geen "doen" kregen (bv. educatieve bandbreedtes) zijn als akkoord/bevestigd verwerkt.

## Aanvulling — tegelfoto homepage + CSS-cache
- Homepage-tegel "Weet je het niet zeker?": foto werd op brede schermen tot een lage strook geknepen (vaste `height:200px`), waardoor het hoofd werd afgekapt. Opgelost door `.card__foto` van vaste hoogte naar `aspect-ratio: 16/10` (toont foto vrijwel volledig, consistent op mobiel en desktop). Originele foto `erik-zakelijk.jpg` behouden; losse `erik-zakelijk-kaart.jpg` ongebruikt.
- ROOT CAUSE van het "niets verandert"-rondje: CSS laadt met cache-bust `?v=N` in `includes/head.php`. Zonder ophogen blijft de oude CSS gecachet. Opgehoogd: `components.css?v=10`, `footer.css?v=3`. **Regel: bij elke CSS-edit het ?v= ophogen.**
