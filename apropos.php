<?php
// Fonction qui retourne la date du jour
function afficherDateDuJour(): string
{
    return date("d/m/Y");
}
// Inclusion du fichier header
include_once __DIR__ . '/includes/header.php';
?>
<section class="apropos">
    <h1>A propos de la Mediatheque IPNET</h1>
    <p>
        Bienvenue sur le site de la Mediatheque IPNET.
        Cette application permet de consulter un catalogue de livres
        et de decouvrir les ouvrages disponibles.
    </p>
    <h2>Notre objectif</h2>
    <p>
        Notre objectif est de faciliter la consultation des livres
        et de permettre aux utilisateurs de trouver rapidement
        les ouvrages qui les interessent.
    </p>
    <h2>Les fonctionnalites du site</h2>
    <ul>
        <li>Consulter la liste des livres.</li>
        <li>Rechercher les livres par categorie.</li>
        <li>Afficher les details d'un livre.</li>
        <li>Connaitre la disponibilite des livres.</li>
        <li>Consulter les statistiques de la mediatheque.</li>
    </ul>
    <h2>Informations</h2>
    <p>
        Nom : Mediatheque IPNET
    </p>
    <p>
        Date du jour :
        <strong>
            <?php echo htmlspecialchars(afficherDateDuJour()); ?>
        </strong>
    </p>
</section>
<?php
// Inclusion du fichier footer
include_once __DIR__ . '/includes/footer.php';
?>