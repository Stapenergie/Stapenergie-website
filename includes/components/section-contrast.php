<?php
/*
 * section-contrast.php — Twee-koloms contrast sectie
 *
 * Gebruik: vergelijk een "gebruikelijke aanpak" (links, neutraal)
 *          met de STAP-aanpak (rechts, groen/positief).
 *
 * Verplichte velden:
 *   $contrast_links  = ['tag' => '', 'items' => [], 'noot' => '']
 *   $contrast_rechts = ['tag' => '', 'items' => [], 'noot' => '']
 *
 * Optionele velden:
 *   $contrast_label   — sectielabel boven de titel
 *   $contrast_titel   — sectietitel (h2)
 *   $contrast_intro   — introtekst onder de titel
 *   $contrast_variant — 'wit' (default) | 'grijs'
 *   $contrast_rechts['extra'] — vrije HTML onderaan rechterblok (escape hatch)
 *                                alleen voor CTA of aanvullende accentcontent
 */
$bg = ($contrast_variant ?? 'wit') === 'grijs' ? 'sectie--grijs' : 'sectie--wit';
$links  = $contrast_links  ?? [];
$rechts = $contrast_rechts ?? [];
?>
<section class="sectie <?php echo $bg; ?>">
    <div class="sectie__inner">

        <?php if (!empty($contrast_label) || !empty($contrast_titel)): ?>
        <div class="sectie__header">
            <?php if (!empty($contrast_label)): ?>
            <span class="sectie__label"><?php echo htmlspecialchars($contrast_label); ?></span>
            <?php endif; ?>
            <?php if (!empty($contrast_titel)): ?>
            <h2 class="sectie__titel"><?php echo htmlspecialchars($contrast_titel); ?></h2>
            <?php endif; ?>
            <?php if (!empty($contrast_intro)): ?>
            <p class="sectie__intro"><?php echo htmlspecialchars($contrast_intro); ?></p>
            <?php endif; ?>
        </div>
        <?php endif; ?>

        <div class="contrast__grid">

            <?php /* ── Links: neutraal blok ── */ ?>
            <div class="contrast__blok contrast__blok--neutraal">
                <?php if (!empty($links['tag'])): ?>
                <p class="contrast__tag contrast__tag--neutraal"><?php echo htmlspecialchars($links['tag']); ?></p>
                <?php endif; ?>
                <?php if (!empty($links['items'])): ?>
                <ul class="contrast__lijst contrast__lijst--neutraal">
                    <?php foreach ($links['items'] as $item): ?>
                    <li><?php echo htmlspecialchars($item); ?></li>
                    <?php endforeach; ?>
                </ul>
                <?php endif; ?>
                <?php if (!empty($links['noot'])): ?>
                <p class="contrast__noot"><?php echo htmlspecialchars($links['noot']); ?></p>
                <?php endif; ?>
            </div>

            <?php /* ── Rechts: positief groen blok ── */ ?>
            <div class="contrast__blok contrast__blok--positief">
                <?php if (!empty($rechts['tag'])): ?>
                <p class="contrast__tag contrast__tag--positief"><?php echo htmlspecialchars($rechts['tag']); ?></p>
                <?php endif; ?>
                <?php if (!empty($rechts['items'])): ?>
                <ul class="contrast__lijst contrast__lijst--positief">
                    <?php foreach ($rechts['items'] as $item): ?>
                    <li><?php echo htmlspecialchars($item); ?></li>
                    <?php endforeach; ?>
                </ul>
                <?php endif; ?>
                <?php if (!empty($rechts['noot'])): ?>
                <p class="contrast__noot contrast__noot--groen"><?php echo htmlspecialchars($rechts['noot']); ?></p>
                <?php endif; ?>
                <?php if (!empty($rechts['extra'])): ?>
                <div class="contrast__extra"><?php echo $rechts['extra']; ?></div>
                <?php endif; ?>
            </div>

        </div>
    </div>
</section>
