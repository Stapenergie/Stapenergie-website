<?php
/**
 * includes/head.php
 * Gebruik: <?php include $root . 'includes/head.php'; ?>
 * Verwacht variabelen: $title, $description, $canonical (optioneel)
 */
?>
<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars($title) ?></title>
<meta name="description" content="<?= htmlspecialchars($description) ?>">
<?php if (!empty($canonical)): ?>
<link rel="canonical" href="<?= htmlspecialchars($canonical) ?>">
<?php endif; ?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=DM+Serif+Display&display=swap" rel="stylesheet">
<link rel="icon" type="image/svg+xml" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'%3E%3Crect width='32' height='32' rx='6' fill='%231a5c32'/%3E%3Ctext x='16' y='23' font-family='sans-serif' font-size='20' font-weight='700' fill='white' text-anchor='middle'%3ES%3C/text%3E%3C/svg%3E">
<link rel="stylesheet" href="/assets/css/base.css?v=4">
<link rel="stylesheet" href="/assets/css/nav.css">
<link rel="stylesheet" href="/assets/css/hero.css?v=3">
<link rel="stylesheet" href="/assets/css/breadcrumb.css">
<link rel="stylesheet" href="/assets/css/trust.css?v=2">
<link rel="stylesheet" href="/assets/css/cards.css?v=2">
<link rel="stylesheet" href="/assets/css/sections.css?v=4">
<link rel="stylesheet" href="/assets/css/components.css?v=5">
<link rel="stylesheet" href="/assets/css/faq.css">
<link rel="stylesheet" href="/assets/css/formulier.css">
<link rel="stylesheet" href="/assets/css/cta.css">
<link rel="stylesheet" href="/assets/css/footer.css">
<link rel="stylesheet" href="/assets/css/labelcheck.css">
</head>
<body>
