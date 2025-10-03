<!DOCTYPE html>
<html lang="fr">

<head>
    <?php
    // Variables SEO (peuvent être définies avant l'include depuis chaque page)
    $title            = $title ?? 'Ferme des Amandiers';
    $metaDescription  = $metaDescription ?? 'Vente directe de paniers de légumes de saison – retrait le mercredi et le samedi.';
    $canonical        = $canonical ?? ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
    $ogImage          = $ogImage ?? 'assets/img/hero-header.jpg';
    $absOgImage       = (strpos($ogImage, 'http') === 0)
        ? $ogImage
        : ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/' . ltrim($ogImage, '/'));
    ?>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?= htmlspecialchars($title) ?></title>
    <meta name="description" content="<?= htmlspecialchars($metaDescription) ?>" />
    <link rel="canonical" href="<?= htmlspecialchars($canonical) ?>" />
    <meta name="robots" content="index,follow" />

    <!-- Open Graph / Twitter -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?= htmlspecialchars($title) ?>" />
    <meta property="og:description" content="<?= htmlspecialchars($metaDescription) ?>" />
    <meta property="og:url" content="<?= htmlspecialchars($canonical) ?>" />
    <meta property="og:image" content="<?= htmlspecialchars($absOgImage) ?>" />
    <meta name="twitter:card" content="summary_large_image" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&amp;family=Playfair+Display:wght@600&amp;display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Preload image principale sur la home -->
    <?php if (!empty($preloadImage)): ?>
        <link rel="preload" as="image" href="<?= htmlspecialchars($preloadImage) ?>">
    <?php endif; ?>
</head>

<body>
    <header>
        <!-- Logo ou nom du site -->
        <div class="site-title">
            <h1>Ferme des Amandiers</h1>
        </div>

        <!-- Menu de navigation -->
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="produits.php">Produits</a></li>
            </ul>
        </nav>
    </header>