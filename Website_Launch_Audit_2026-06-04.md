# STAP Energie — Website Launch Audit

**Datum:** 4 juni 2026
**Opdrachtgever:** Erik Dolman (eigenaar)
**Orkestratie:** CEO STAP, met vier specialisten (Compliance, Brand Guard, Positionering & Copy, Developer/Link Checker)
**Bron-ankers:** Business Case v4.0 (H0, H3, H4, H5, H6) · Brand Guide v2.2 · broncode `Stapenergie-website/`

**Werkwijze:** Er is niets gewijzigd. Dit rapport is enkel ter beoordeling. Geef per punt akkoord (vul `J` of `N` in de kolom **Akk.**). Na jouw akkoord kunnen alle goedgekeurde fixes in één sessie worden doorgevoerd.

---

## Samenvatting

| Specialist | Issues | Waarvan harde fix | Waarvan ter beoordeling (VRAAG) |
|---|---|---|---|
| 1. Compliance Officer | 58 | 41 | 17 |
| 2. Brand Guard | 40 klanttekst (+~110 in code-commentaar, +3 spelling) | 40 | code-commentaar = VRAAG |
| 3. Positionering & Copy | 4 | 4 | 3 |
| 4. Developer / Link Checker | 7 | 3 blokkerend | 4 aandachtspunten |

**Pagina's die een "coming soon"-placeholder nodig hebben: GEEN.** Alle 29 beoordeelde pagina's bevatten volwaardige content. Twee kennisbankpagina's (`laadpaal`, `thuisbatterij`) hébben content maar zijn technisch kapot (zie B-1/B-2) en moeten worden gerepareerd, niet vervangen.

**Oordeel CEO:** de site staat positioneel en redactioneel sterk. De live-gang wordt geblokkeerd door drie technische punten (B-1, B-2, B-3) en één sitewide compliance-issue (C-1: "Gecertificeerd EPA-adviseur"). Die vier eerst, daarna de rest. Dezelfde "Gecertificeerd"-fix in twee gedeelde bestanden corrigeert de claim in één keer over vrijwel de hele site.

### Wat eerst moet (live-blokkers)

| ID | Punt | Akk. |
|---|---|---|
| B-1 | `kennisbank/laadpaal/index.php` is afgekapt → PHP-fout, geen footer | |
| B-2 | `kennisbank/thuisbatterij/index.php` is afgekapt → PHP-fout, geen footer | |
| B-3 | Ontbrekende afbeelding `/images/erik-advies.jpg` (broken image) | |
| C-1 | "Gecertificeerd EPA-adviseur" sitewide → "Energieaannemer voor het MKB" | |
| C-2 | "Officieel erkend / Geregistreerd in EP-online" sitewide → "Onafhankelijk energie-inkoopadvies" (labelpagina's uitgezonderd) | |

---

## A. Live-blokkers (Developer) — eerst oplossen

| ID | Pagina / locatie | Probleem | Minimale fix | Akk. |
|---|---|---|---|---|
| B-1 | `kennisbank/laadpaal/index.php` (einde) | Bestand afgekapt op `include $root . 'includes/f` — footer-include + afsluitende `?>` ontbreken. PHP parse-/fatal error, pagina rendert niet correct. **Geverifieerd.** | Laatste regels herstellen naar `include $root . 'includes/footer.php';` + `?>` (zoals alle andere kennisbankpagina's) | |
| B-2 | `kennisbank/thuisbatterij/index.php` (einde) | Idem: afgekapt op `include `. PHP-fout, geen footer. **Geverifieerd.** | Idem als B-1 | |
| B-3 | `verduurzaming-subsidie/particulieren/index.php` r163 | `<img src="/images/erik-advies.jpg">` bestaat niet (alleen `erik-portret.jpg` en `erik-zakelijk.jpg` aanwezig). Broken image. **Geverifieerd.** | Verwijs naar bestaande afbeelding (`erik-portret.jpg`) of plaats `erik-advies.jpg` in `/images/` | |

### Aandachtspunten Developer (niet blokkerend)

| ID | Punt | Advies | Akk. |
|---|---|---|---|
| D-1 | Labelcheck-widget werkt niet: `api/labelcheck.php` vereist `config/ep_online.php` met `EP_ONLINE_API_KEY`; dat bestand bestaat niet → API geeft 503. Widget vangt dit netjes op ("Check tijdelijk niet beschikbaar"). **VRAAG:** bewust nog niet aangemaakt (key nog niet ontvangen)? | Key invullen vóór live, of widget verbergen | |
| D-2 | Footer-e-mail loopt via Cloudflare e-mail-obfuscatie (`/cdn-cgi/l/email-protection`). Werkt alleen achter Cloudflare. **VRAAG:** draait productie achter Cloudflare? | Bevestigen; zo niet, gewone `mailto:` gebruiken | |
| D-3 | Kennisbank-subpagina's en `verduurzaming-subsidie/zakelijk` + `/particulieren` staan niet in nav/footer (alleen via interne kaarten bereikbaar). Vindbaarheid. | Bewuste keuze? Anders opnemen in nav/footer of sitemap | |
| D-4 | `test_sync_check.txt` staat in de webroot; `source`-veld wordt door formulier niet meegestuurd (defaultet leeg, harmloos). | Testbestand verwijderen vóór live | |

*Goed bevonden:* alle interne nav-/footerlinks werken, contactformulier (`api/contact.php` → `info@stapenergie.nl`) en prijzen-API (`api/prijzen.php` → `config/prijzen.php`) zijn correct en AVG-net opgezet.

---

## B. Compliance Officer — 58 issues

**Globaal correct:** telefoonnummer (06-48 18 05 99) overal consistent; KvK overal "in oprichting"; "17 jaar" alleen in de over-ons-biografie; geen reviews/klantaantallen/marktleider-claims.

### C-1 — "Gecertificeerd EPA-adviseur" weg, sitewide (HARDE FIX, akkoord Erik 4-6)

Je bent nog niet gecertificeerd. Overal "Gecertificeerd/Erkend EPA-adviseur" → **"Energieaannemer voor het MKB"**. In titels waar het woord los staat (`Officieel & Gecertificeerd/Erkend`) wordt "Gecertificeerd/Erkend" verwijderd. Geldt op **álle** pagina's, ook de labelpagina's. Zodra je gecertificeerd bent, draaien we dit terug. Verspreid over 16 bestanden. **Twee fixes met sitewide effect eerst:**

| Prio | Bestand | Regel | Akk. |
|---|---|---|---|
| HOOG | `includes/trust.php` | r12 `'Gecertificeerd EPA-adviseur'` → `'Energieaannemer voor het MKB'` (trustbalk, alle pagina's) | |
| HOOG | `includes/cta.php` | r15 default `'Gecertificeerd EPA-adviseur'` → `'Energieaannemer voor het MKB'` | |

Overige vindplaatsen (zelfde vervanging → `Energieaannemer voor het MKB`; in titels het woord `Gecertificeerd/Erkend` verwijderen):

`energielabels/` r7/r8/r20/r133 · `energielabels/woningen/` r3/r14/r17/r45/r142 · `energielabels/utiliteit/` r7/r8/r21/r59/r211 · `gemeenten-woningstichtingen/` r21/r49 · `makelaars/` r21/r49/r131 · `particulieren/` r8/r17/r20/r48/r181 · `kantoren/` r21/r57/r173 · `vastgoed/` r21/r51 · `zakelijk/` r55 · `mkb/` r139/r144 · `over-ons/` r49/r152 · (laag, code-commentaar) `includes/hero.php` r20, `includes/components/checklist.php` r10.

**Akkoord op C-1 als geheel (alle 38):** `___`

*Niet fout (geen wijziging):* "gecertificeerde/erkende installateur" op subsidie- en kennisbankpagina's — gaat over derden/subsidie-eisen, niet over STAP.

### C-2 — "Officieel erkend / Geregistreerd in EP-online" weg op niet-labelpagina's (HARDE FIX, akkoord Erik 4-6)

Je bent nog niet als EPA-adviseur geregistreerd in EP-online. Op alle **niet-labelpagina's** "Officieel erkend / Geregistreerd in EP-online" → **"Onafhankelijk energie-inkoopadvies"**.

**Uitzondering — labelpagina's blijven ongemoeid:** op `energielabels/`, `energielabels/woningen/` en `energielabels/utiliteit/` blijft "Officieel erkend / geregistreerd in EP-online" staan (het label zelf wordt officieel geregistreerd).

*Mechaniek:* de gedeelde standaard aanpassen (geldt voor homepage + alle niet-labelpagina's); de labelpagina's zetten hun garanties al per pagina en blijven dus zoals ze zijn.

| Bestand / pagina | Regel | Actie | Akk. |
|---|---|---|---|
| `includes/trust.php` | r9 | `'Officieel erkend' / 'Geregistreerd in EP-online'` → `'Onafhankelijk energie-inkoopadvies'` (sitewide default) | |
| `includes/cta.php` | r15 | default `'Officieel geregistreerd in EP-online'` → `'Onafhankelijk energie-inkoopadvies'` | |
| `index.php` (homepage) | r43 | `'Officieel erkend / Geregistreerd in EP-online'` → `'Onafhankelijk energie-inkoopadvies'` | |
| `energielabels/`, `/woningen/`, `/utiliteit/` | div. | **blijven staan** (uitzondering) | |

**VRAAG:** `makelaars/`, `vastgoed/` en `particulieren/` zijn geen labelpagina, maar tonen via eigen `cta_garanties` wél "Officieel geregistreerd in EP-online" (makelaars r? / vastgoed r? / particulieren — zie C-1-lijst). Daar ook vervangen door "Onafhankelijk energie-inkoopadvies", of laten staan omdat ze de labeldienst aanbieden? `___`

### C-3 — Niet-aantoonbaar STAP-trackrecord (3 fixes + 1 VRAAG)

STAP is een nieuwe onderneming; "STAP heeft ervaring met…" suggereert een eigen historie die alleen bij Erik persoonlijk ligt.

| ID | Pagina | Regel | Quote | Minimale fix | Akk. |
|---|---|---|---|---|---|
| C-3a | `industrie/` | r29 | "STAP Energie heeft ervaring met Europese aanbestedingstrajecten voor energie." | "Wij kunnen ondersteunen bij Europese aanbestedingstrajecten voor energie." | |
| C-3b | `zakelijk/` | r147 | "STAP Energie heeft ervaring met Europese aanbestedingstrajecten." | "STAP Energie kan ondersteunen bij Europese aanbestedingstrajecten." | |
| C-3c | `zakelijk/` | r178 | "Met jarenlange ervaring in energie-inkooptrajecten voor MKB en industrie kent STAP Energie de markt…" | "Met ruim 15 jaar marktervaring kent STAP Energie de markt van binnenuit…" | |
| C-3d (VRAAG) | `industrie/` | r50 | hero_usp "Kennis van complexe inkoopstructuren en Europese aanbestedingen" — kennis (geen trackrecord), waarschijnlijk OK | bevestigen | |

### C-4 — Besparingsbeloftes met getallen (3 fixes + 2 VRAAG)

Bandbreedtes op dossierbasis mogen; algemene STAP-besparingsbeloftes niet.

| ID | Pagina | Regel | Quote | Minimale fix | Akk. |
|---|---|---|---|---|---|
| C-4a | `verduurzaming-subsidie/` | r255 | "…scheelt je soms tienduizenden euro's." | "…kan een groot verschil maken." | |
| C-4b | `kantoren/` | r213 | "…kun je ook direct besparen…onderhandelt voor je, zonder extra kosten." | "…kun je mogelijk besparen op je energiekosten…" (zie ook P-1) | |
| C-4c | `energielabels/utiliteit/` | r316 | "…bespaart je aanzienlijk…zonder extra kosten." | "…kan je energierekening verlagen…" (zie ook P-2) | |
| C-4d (VRAAG) | `kennisbank/ems/` | r34/r47 | "Hoeveel kan ik besparen met EMS?" €300–€600/jaar — educatief, waarschijnlijk OK | bevestigen | |
| C-4e (VRAAG) | kennisbank-pagina's | div. | educatieve bandbreedtes (warmtepomp €500–€1.200, isolatie €600–€1.200, thuisbatterij €300–€600). Educatief, m.i. toegestaan | bevestigen beleid | |

### C-5 — "Zonder extra kosten" bij inkoop (2 vindplaatsen, VRAAG)

`energie-inkoop-advies/` noemt een maandelijkse fee (r171/r211). "Onderhandelt voor je, zonder extra kosten" (`kantoren/` r213, `energielabels/utiliteit/` r316) kan misleidend zijn t.o.v. dat fee-model. **VRAAG/besluit — zie ook P-1/P-2.** `___`

### C-6 — Consistentie ervaringsjaren (VRAAG)

`verduurzaming-subsidie/zakelijk/` r51 "15+ jaar ervaring **aan de** energiemarkt" — ongrammaticaal en afwijkend. **VRAAG: overal gelijktrekken naar één formulering?** (zie ook P-3/P-4). `___`

---

## C. Brand Guard — 40 issues in klanttekst

**Geen** verboden woorden ("ontzorgen", "dé partner", "tot wel X%", "onzekere tijden", "duurzame toekomst"), **geen** hype/superlatieven, **geen** AI-clichés aangetroffen. Sterke naleving. De issues zitten in leestekens en aanspreekvorm.

### BR-1 — Em-dashes (—) in klanttekst (28, HARDE FIX)

Em-dashes zijn verboden; vervang door komma, dubbele punt of haakjes.

| ID | Pagina | Regels | Aantal | Akk. |
|---|---|---|---|---|
| BR-1a | `verduurzaming-subsidie/particulieren/` | r26, 43, 61, 70(2x), 79, 92, 101, 142, 157, 176(2x), 180, 184(2x) | 13 | |
| BR-1b | `privacyverklaring/` | r25, r63–66, r80–82, r94–100 (li-regels) | 15 | |

### BR-2 — Uitroeptekens (6, HARDE FIX)

| ID | Pagina | Regel | Fix | Akk. |
|---|---|---|---|---|
| BR-2a | `includes/formulier.php` | r314 "Aanvraag ontvangen!" | "Aanvraag ontvangen" | |
| BR-2b | `kennisbank/cv-ketel/` | r33 "Ja! HR-ketel…" | "Ja. HR-ketel…" | |
| BR-2c | `kennisbank/cv-ketel/` | r185 "…dubbele subsidie!" | "…dubbele subsidie." | |
| BR-2d | `kennisbank/ems/` | r171 "…groot voordeel!" | "…groot voordeel." | |
| BR-2e | `kennisbank/ems/` | r233 "Controleer privacybeleid!" | "Controleer privacybeleid." | |
| BR-2f | `kennisbank/zonneboiler/` | r31 "Ja! Zonneboiler…" | "Ja. Zonneboiler…" | |

### BR-3 — Je-/u-vorm consistentie (6, HARDE FIX)

Norm is je-vorm. Privacyverklaring mag bewust formeel (u) blijven.

| ID | Pagina | Regel | Fix | Akk. |
|---|---|---|---|---|
| BR-3a | `over-ons/` | r63 "Wij beginnen bij u." | "Wij beginnen bij jou." | |
| BR-3b | `kennisbank/` | r31 "…vindt u eerlijke informatie…" | "vind je" | |
| BR-3c | `kennisbank/zonneboiler/` | r47 "Ideaal als u al zonnepanelen hebt" | "als je al zonnepanelen hebt" | |
| BR-3d | `kennisbank/zonneboiler/` | r149 "Als u al zonnepanelen hebt…" | "Als je al zonnepanelen hebt" | |
| BR-3e | `kennisbank/isolatie/` | r27 "…als u binnen 24 maanden nadat u…" | "als je binnen 24 maanden nadat je…" | |
| BR-3f | `kennisbank/thuisbatterij/` | r33 "Ja, als u stroom…wilt kopen" | "als je stroom…wilt kopen" | |

### BR-4 — Em-dashes in PHP-commentaar (~110, VRAAG)

Geen klantimpact; staat in ontwikkelaarsdocumentatie bovenin componenten/pagina's. **VRAAG: meenemen in de opschoning ja/nee?** `___`

### BR-5 — Spelling/anglicismen (3, VRAAG buiten brand-scope)

`kennisbank/zonneboiler/` r31 `wärmt` → `warmt`; r47 `bespaard` → `bespaart`; `kennisbank/cv-ketel/` r47 `gas + electric` → `gas + elektrisch`. `___`

---

## D. Positionering & Copy — 4 issues + 3 vragen

**Globaal sterk:** inkoop-kern, drie-diensten-volgorde (label → inkoop → verduurzaming) en de onafhankelijke insider-positie zijn consequent doorgevoerd. `energie-inkoop-advies/`, `over-ons/` en de verduurzamingspagina's zijn modelpagina's.

| ID | Pagina | Regel | Probleem | Minimale correctie | Akk. |
|---|---|---|---|---|---|
| P-1 | `kantoren/` | r213 | "…vergelijkt energiecontracten…en onderhandelt voor je, zonder extra kosten" zet inkoop neer als gratis vergelijker/tussenpersoon — strijdig met het fee-model en de adviseurspositie (overlapt C-4b/C-5) | "STAP Energie neemt jouw energie-inkoop over: van contractanalyse tot onderhandelen met leveranciers, onafhankelijk." | |
| P-2 | `energielabels/utiliteit/` | r316 | "vergelijkt en onderhandelt voor je, zonder extra kosten" — zelfde tussenpersoon/gratis-framing (overlapt C-4c/C-5) | "STAP Energie analyseert jouw contract en koopt onafhankelijk voor je in." | |
| P-3 | `mkb/` | r53 | hero "ruim 15 jaar ervaring in de energiemarkt" vs "17 jaar" elders — inconsistente kernclaim (overlapt C-6) | beleidskeuze: overal "ruim 15 jaar" (marketing) óf "17 jaar" (feitelijk, alleen bio) | |
| P-4 | `verduurzaming-subsidie/zakelijk/` | r51 | "15+ jaar ervaring aan de energiemarkt" — grammaticaal fout (overlapt C-6) | "15+ jaar ervaring aan de leverancierszijde" | |

### Twijfelpunten (VRAAG)

| ID | Punt | Akk./besluit |
|---|---|---|
| P-5 | `includes/nav.php` r18–20: dropdown-volgorde Diensten zet Energie-inkoop als laatste, terwijl inkoop de kern is. Inkoop bovenaan zetten? (Homepage zet inkoop wél als eerste kaart.) | |
| P-6 | Term "energieaannemer" komt alleen op de homepage voor (2x), niet op `over-ons/` of de inkoop-kernpagina. Bewust schaars, of toevoegen waar hij thuishoort? | |
| P-7 | Particulieren worden als volwaardige doelgroep neergezet; BC ziet hen als lead-engine/leerschool, niet als zwaartepunt. Conform website-opzet — alleen ter bevestiging. | |

---

## E. Coming soon-placeholders

**Geen enkele pagina vereist een placeholder.** Alle 29 beoordeelde pagina's bevatten volwaardige content (kleinste: `privacyverklaring/`, 117 regels). De badge "Binnenkort beschikbaar" op één dienstkaart in `particulieren/` (r150) en de "Energie vergelijker — binnenkort" zijn bewuste contentkeuzes op verder volledige pagina's, geen lege shells.

De twee afgekapte kennisbankpagina's (B-1, B-2) hebben volledige content en moeten technisch worden gerepareerd, niet vervangen.

---

## F. Openstaande vragen aan Erik (samengevat)

1. **C-2** — `makelaars/`, `vastgoed/`, `particulieren/` (geen labelpagina maar bieden labeldienst): "Officieel geregistreerd in EP-online" ook vervangen, of laten staan? (hoofdbesluit C-1/C-2 is akkoord)
2. **C-4d/C-4e** — educatieve besparingsbandbreedtes op kennisbankpagina's: binnen beleid?
3. **C-5 / P-1 / P-2** — "zonder extra kosten" bij inkoop i.r.t. het fee-model: hoe formuleren?
4. **C-6 / P-3 / P-4** — één lijn kiezen voor ervaringsjaren ("ruim 15 jaar" vs "17 jaar").
5. **D-1** — EP-online API-key / labelcheck vóór live regelen of widget verbergen?
6. **D-2** — draait productie achter Cloudflare (footer-e-mail)?
7. **D-3** — kennisbank- en verduurzaming-subpagina's in nav/footer opnemen?
8. **BR-4** — em-dashes in code-commentaar meenemen in de opschoning?
9. **P-5 / P-6** — dropdown-volgorde diensten en gebruik term "energieaannemer".

---

## G. Volgorde van uitvoeren na akkoord

1. Live-blokkers: B-1, B-2, B-3.
2. Sitewide compliance: C-1 (begin met `includes/trust.php` + `includes/cta.php`).
3. Overige harde fixes: C-3a/b/c, C-4a/b/c, BR-1, BR-2, BR-3, P-1, P-2, P-4.
4. Besluiten op de VRAAG-punten (sectie F), daarna doorvoeren.
5. Opschonen: D-4 (`test_sync_check.txt`), eventueel BR-4/BR-5.

*Niets van het bovenstaande is uitgevoerd. Wijzigingen volgen pas na jouw akkoord per punt.*
