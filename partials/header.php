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

    <!-- Normalize.css pour corriger les bugs navigateurs -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">

    <!-- Preconnect pour Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Fonts : Playfair Display + Open Sans -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

    <!-- Preload image principale -->
    <?php if (!empty($preloadImage)): ?>
        <link rel="preload" as="image" href="<?= htmlspecialchars($preloadImage) ?>">
    <?php endif; ?>

    <!-- Feuille de style principale -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header>

        <!-- Logo / Titre du site -->
        <div class="site-title">
            <a href="index.php">
                <h1>Ferme des Amandiers</h1>
            </a>
        </div>

        <!-- Navigation principale -->
        <nav>
            <a href="index.php">Accueil</a>
            <a href="produits.php">Produits</a>
        </nav>

    </header>