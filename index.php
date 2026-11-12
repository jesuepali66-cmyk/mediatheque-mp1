<?php
// Chargement des donnees et des fonctions
require_once __DIR__ . '/data/livres.php';
require_once __DIR__ . '/includes/fonctions.php';

?>

?>

<?php include 'includes/header.php'; ?>

<section class="accueil">

    <h2>Bienvenue à la Médiathèque IPNET</h2>

    <p>
        Découvrez notre collection de livres dans différents domaines :
        informatique, histoire, littérature et bien plus encore.
    </p>

    <div class="statistiques">

        <div class="statistique">
            <h3><?php echo count($livres); ?></h3>
            <p>Livres au catalogue</p>
        </div>

        <div class="statistique">
            <h3><?php echo compterLivresDisponibles($livres); ?></h3>
            <p>Livres disponibles</p>
        </div>

    </div>

    <a href="catalogue.php" class="btn">
        Découvrir notre catalogue
    </a>

</section>

<?php include 'includes/footer.php'; ?>