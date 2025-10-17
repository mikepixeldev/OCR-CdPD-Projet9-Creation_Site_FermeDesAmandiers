<?php
// Connexion à la base de données
require_once 'data/db.php';

//On recupère la saison courante via la date
$date = new DateTime();
// On détermine la saison courante en fonction du mois
$saisonCourante = '';

// On utilise le mois de la date actuelle pour déterminer la saison
// Les mois sont numérotés de 1 à 12
if ($date->format('m') >= 3 && $date->format('m') <= 5) {
    $saisonCourante = 'Printemps';
} elseif ($date->format('m') >= 6 && $date->format('m') <= 8) {
    $saisonCourante = 'Été';
} elseif ($date->format('m') >= 9 && $date->format('m') <= 11) {
    $saisonCourante = 'Automne';
} else {
    $saisonCourante = 'Hiver';
}

// Requête pour récupérer les produits, leur saison et leurs jours de disponibilité
$sql = "
    SELECT 
        p.id, 
        p.nom, 
        p.description, 
        p.image_url, 
        s.nom AS saison,
        GROUP_CONCAT(j.nom SEPARATOR ', ') AS jours
    FROM produits p
        LEFT JOIN saisons s ON p.saison_id = s.id
        LEFT JOIN produit_jour pj ON p.id = pj.produit_id
        LEFT JOIN jours j ON pj.jour_id = j.id
    WHERE s.nom = :saison
    GROUP BY p.id
";

// Préparation et exécution de la requête
$stmt = $pdo->prepare($sql);
// On lie le paramètre :saison à la saison courante
// On utilise PDO::PARAM_STR pour indiquer que c'est une chaîne de caractères
$stmt->bindParam(':saison', $saisonCourante, PDO::PARAM_STR);
// On exécute la requête
$stmt->execute();
// Récupération des résultats
// On utilise fetchAll pour récupérer tous les produits de la saison courante
$produits = $stmt->fetchAll(PDO::FETCH_ASSOC);


// Inclusion du header
$title = "Nos produits de saison – Ferme des Amandiers";
$metaDescription = "Consultez les paniers disponibles selon la saison et les jours de retrait (mercredi et samedi).";
include 'partials/header.php';
?>

<main>
    <!-- Titre principal -->
    <section class="hero">
        <div class="container hero-content">
            <h1>Nos produits de saison</h1>
            <p>Voici les produits disponibles cette semaine à la vente directe.</p>
        </div>
    </section>

    <!-- Boutons de filtrage (à rendre fonctionnels en JavaScript) -->
    <section class="filtre-produits">
        <button data-filtre="tous">Tous</button>
        <button data-filtre="mercredi">Mercredi</button>
        <button data-filtre="samedi">Samedi</button>
        <!-- Les boutons doivent permettre de filtrer les produits affichés selon le jour -->
    </section>

    <!-- Liste des produits -->
    <section class="products-grid">
        <!-- Chaque produit est affiché dans une <div> avec un attribut data-jour -->
        <?php foreach ($produits as $produit): ?>
            <?php
            // On prépare les classes pour le filtrage JS (ex : "mercredi samedi")
            $joursClasses = strtolower(str_replace(', ', ' ', $produit['jours']));

            // On affiche chaque produit avec ses informations : nom, description, image, saison et jours de disponibilité 
            // Il faudra ensuite filtrer les produits en fonction des saisons, pour n'afficher que ceux de la saison actuelle
            ?>
            <div class="produit-card" data-jour="<?= $joursClasses ?>">
                <img src="<?= $produit['image_url'] ?>" alt="<?= htmlspecialchars($produit['nom']) ?>">
                <h2><?= htmlspecialchars($produit['nom']) ?></h2>
                <p><?= htmlspecialchars($produit['description']) ?></p>
                <p><em>Saison : <?= $produit['saison'] ?></em></p>
                <p>Jours : <?= $produit['jours'] ?></p>
            </div>
        <?php endforeach; ?>
    </section>

    <!-- Il faut ajouter ici un script JS pour activer le filtrage dynamique -->
    <script>
        const boutonsFiltre = document.querySelectorAll('[data-filtre]');
        const produits = document.querySelectorAll('.produit-card');

        boutonsFiltre.forEach(bouton => {
            bouton.addEventListener('click', () => {
                const filtre = bouton.getAttribute('data-filtre');

                produits.forEach(produit => {
                    const joursProduit = produit.getAttribute('data-jour');

                    if (filtre === 'tous') {
                        // Afficher : retirer toutes les classes de masquage
                        produit.classList.remove('hidden', 'fade-out');

                    } else if (joursProduit.includes(filtre)) {
                        // Afficher : retirer toutes les classes de masquage
                        produit.classList.remove('hidden', 'fade-out');

                    } else {
                        // Masquer : animation en 2 temps
                        // 1️⃣ Fade-out avec transition CSS
                        produit.classList.add('fade-out');

                        // 2️⃣ Suppression de l'espace après la transition
                        setTimeout(() => {
                            produit.classList.add('hidden');
                        }, 300); // Durée = transition CSS
                    }
                });
            });
        });
    </script>
</main>

<?php include 'partials/footer.php'; ?>