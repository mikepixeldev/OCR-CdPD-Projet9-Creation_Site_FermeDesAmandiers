<?php
// index.php

// Variables spécifiques à cette page (SEO + performance)
$title = "Ferme des Amandiers • Accueil";
$metaDescription = "Découvrez la Ferme des Amandiers : légumes de saison en vente directe, chaque mercredi et samedi.";
$preloadImage = "assets/img/hero-header.jpg";

// Inclusion du header
include('partials/header.php');
?>

<main>
    <!-- Section Hero / Accroche principale -->
    <section id="hero">
        <div class="container hero-content">

            <h1>Des légumes frais, locaux et de saison</h1>
            <p>Vente directe à la ferme chaque mercredi et samedi</p>

        </div>
    </section>

    <!-- Section Présentation de la ferme -->
    <section id="presentation">
        <div class="container presentation-content">
            <div class="presentation-text">
                <h2>Bienvenue à la Ferme des Amandiers</h2>
                <p>Installée depuis 2015, Sandrine cultive avec passion une grande variété de légumes de saison en agriculture raisonnée. Chaque semaine, elle propose ses récoltes fraîches à la vente directe, en drive à la ferme, chaque mercredi et samedi.</p>
                <p>Le site vous permet désormais de consulter les paniers disponibles avant de vous déplacer, et de découvrir l'univers de la ferme : ses méthodes de culture, ses valeurs, et les engagements de Sandrine pour une alimentation plus saine et locale.</p>
            </div>
            <figure>
                <img src="assets/img/la-ferme.jpg" alt="La Ferme des Amandiers" class="img-fluid img-shadow img-rounded">
            </figure>

        </div>
    </section>

    <!-- Section À propos de Sandrine -->
    <section id="a-propos">
        <div class="container a-propos-content">

            <figure>
                <img src="assets/img/sandrine.jpg" alt="Sandrine, maraîchère" class="img-fluid img-shadow img-rounded">
                <figcaption class="sr-only">Portrait de Sandrine, maraîchère de la Ferme des Amandiers</figcaption>
            </figure>
            <div>
                <h2>À propos de Sandrine</h2>
                <p>Sandrine est une maraîchère passionnée par la terre et les relations humaines. Engagée pour une agriculture raisonnée, elle met un point d'honneur à cultiver des légumes de qualité tout en respectant les rythmes de la nature.</p>
                <p>Proche de sa clientèle, elle aime échanger, conseiller et partager des recettes autour des produits de saison. Sa ferme est un lieu de vie, de rencontre, et de gourmandise.</p>
            </div>

        </div>
    </section>

    <!-- Section Nos valeurs -->
    <section id="valeurs">
        <div class="container values-content">

            <h2>Nos valeurs</h2>
            <ul class="values-grid">
                <li class="value-card">
                    <h3>Saisonnalité</h3>
                    <p>Nous ne vendons que des produits cultivés à maturité, respectant les saisons.</p>
                </li>
                <li class="value-card">
                    <h3>Transparence</h3>
                    <p>Vous savez d’où viennent vos produits et comment ils sont cultivés.</p>
                </li>
                <li class="value-card">
                    <h3>Circuit court</h3>
                    <p>Pas d’intermédiaires : directement du champ à votre panier.</p>
                </li>
                <li class="value-card">
                    <h3>Engagement local</h3>
                    <p>Nous participons activement à la vie du territoire et soutenons l’agriculture locale.</p>
                </li>
            </ul>

        </div>
    </section>

    <!-- Section Comment ça marche -->
    <section id="fonctionnement">

        <div class="container process-content">
            <h2>Comment ça marche&nbsp;?</h2>
            <ol class="process-grid">
                <li class="process-card">
                    <h3>1. Consultez les paniers</h3>
                    <p>Chaque mardi et vendredi, les paniers disponibles sont mis à jour sur le site.</p>
                </li>
                <li class="process-card">
                    <h3>2. Venez au drive</h3>
                    <p>Rendez-vous à la ferme le mercredi ou le samedi pour récupérer vos produits.</p>
                </li>
                <li class="process-card">
                    <h3>3. Profitez des saveurs locales</h3>
                    <p>Savourez des légumes cultivés avec soin, à deux pas de chez vous.</p>
                </li>
            </ol>
            <p>
                <a class="btn" href="produits.php">Voir les produits</a>
            </p>

        </div>
    </section>

</main>

<?php
// Inclusion du footer
include('partials/footer.php');
?>