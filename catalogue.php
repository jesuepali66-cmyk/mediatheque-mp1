<?php

// Chargement des donnees et des fonctions
require_once __DIR__ . '/data/livres.php';
require_once __DIR__ . '/includes/fonctions.php';

// Recuperation des categories disponibles
$categories = [];

foreach ($livres as $livre) {
    if (!in_array($livre['categorie'], $categories, true)) {
        $categories[] = $livre['categorie'];
    }
}

// Recuperation du filtre
$categorieSelectionnee = $_GET['categorie'] ?? '';

if (!is_string($categorieSelectionnee)) {
    $categorieSelectionnee = '';
}

// Verification de la categorie
$categorieInvalide = false;

if ($categorieSelectionnee !== '') {

    if (in_array($categorieSelectionnee, $categories, true)) {

        $livresAffiches = filtrerParCategorie(
            $livres,
            $categorieSelectionnee
        );

    } else {

        $livresAffiches = [];
        $categorieInvalide = true;

    }

} else {

    $livresAffiches = $livres;

}

?>

<?php include 'includes/header.php'; ?>

<section class="catalogue">

    <h2>Notre catalogue de livres</h2>

    <p>Decouvrez les differents livres disponibles dans notre mediatheque.</p>

    <!-- Menu de filtrage -->
    <div class="filtrage">

        <h3>Filtrer par categorie</h3>

        <a href="catalogue.php" class="btn">Tous les livres</a>

        <?php foreach ($categories as $categorie): ?>

            <a
                href="catalogue.php?categorie=<?php echo urlencode($categorie); ?>"
                class="btn"
            >
                <?php echo htmlspecialchars($categorie); ?>
            </a>

        <?php endforeach; ?>

    </div>

    <!-- Affichage des messages -->
    <?php if ($categorieInvalide): ?>

        <p class="message-erreur">
            La categorie demandee n'existe pas.
        </p>

    <?php else: ?>

        <h3 class="nombre-livres">
            Nombre de livres affiches :
            <?php echo count($livresAffiches); ?>
        </h3>

        <?php if (count($livresAffiches) > 0): ?>

            <div class="liste-livres">

                <?php foreach ($livresAffiches as $livre): ?>

                    <div class="carte-livre">

                        <?php echo afficherLivre($livre); ?>

                        <a
                            href="detail.php?id=<?php echo (int) $livre['id']; ?>"
                            class="btn"
                        >
                            Voir les details
                        </a>

                    </div>

                <?php endforeach; ?>

            </div>

        <?php else: ?>

            <p>Aucun livre trouve dans cette categorie.</p>

        <?php endif; ?>

    <?php endif; ?>

</section>

<?php include 'includes/footer.php'; ?>