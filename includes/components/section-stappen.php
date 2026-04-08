<?php
/*
 * section-stappen.php — Genummerde stappen grid
 * Velden:  $stappen_label, $stappen_titel, $stappen_intro
 *          $stappen_cols (optioneel, default 4)
 *          $stappen_variant (optioneel: 'grijs' | 'wit', default 'wit')
 *          $stappen[] — array van stappen met:
 *            nummer*, titel*, tekst*, extra (optioneel — vrije HTML onder tekst)
 */
$cols    = $stappen_cols    ?? 4;
$variant = $stappen_variant ?? 'wit';
$bg      = $variant === 'grijs' ? 'sectie--grijs' : 'sectie--wit';
?>
<section class="sectie <?php echo $bg; ?>">
    <div class="sectie__inner">
        <?php if (!empty($stappen_label) || !empty($stappen_titel)): ?>
        <div class="sectie__header">
            <?php if (!empty($stappen_label)): ?>
            <span class="sectie__label"><?php echo htmlspecialchars($stappen_label); ?></span>
            <?php endif; ?>
            <?php if (!empty($stappen_titel)): ?>
            <h2 class="sectie__titel"><?php echo htmlspecialchars($stappen_titel); ?></h2>
            <?php endif; ?>
            <?php if (!empty($stappen_intro)): ?>
            <p class="sectie__intro"><?php echo htmlspecialchars($stappen_intro); ?></p>
            <?php endif; ?>
        </div>
        <?php endif; ?>

        <div class="sectie-stappen__grid sectie-stappen__grid--<?php echo (int)$cols; ?>">
            <?php foreach ($stappen as $stap): ?>
            <div class="stap">
                <div class="stap__nummer"><?php echo htmlspecialchars($stap['nummer']); ?></div>
                <h3 class="stap__titel"><?php echo htmlspecialchars($stap['titel']); ?></h3>
                <p class="stap__tekst"><?php echo htmlspecialchars($stap['tekst']); ?></p>
                <?php if (!empty($stap['extra'])): ?>
                <div class="stap__extra"><?php echo $stap['extra']; ?></div>
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
