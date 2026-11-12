<?php

// Chargement des donnees et des fonctions
require_once __DIR__ . '/data/livres.php';
require_once __DIR__ . '/includes/fonctions.php';

// Recuperation et verification de l'identifiant
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

// Recherche du livre
$livre = null;

if ($id !== false && $id !== null && $id > 0) {
    $livre = trouverLivreParId($livres, $id);
}

?>

<?php include 'includes/header.php'; ?>

<section class="detail">

    <?php if ($livre !== null): ?>

        <h2>Details du livre</h2>

        <div class="carte-detail">

            <?php echo afficherLivre($livre); ?>

            <a href="catalogue.php" class="btn">
                Retour au catalogue
            </a>

        </div>

    <?php else: ?>

        <div class="message-erreur">

            <h2>Livre introuvable</h2>

            <p>
                Le livre demande n'existe pas ou son identifiant est invalide.
            </p>

            <a href="catalogue.php" class="btn">
                Retour au catalogue
            </a>

        </div>

    <?php endif; ?>

</section>

<?php include 'includes/footer.php'; ?>