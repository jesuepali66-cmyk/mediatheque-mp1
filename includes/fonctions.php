<?php
// Fonction 1 : Afficher les informations d'un livre
function afficherLivre(array $livre): string
{
    $titre = htmlspecialchars($livre['titre']);
    $auteur = htmlspecialchars($livre['auteur']);
    $annee = htmlspecialchars((string) $livre['annee']);
    $categorie = htmlspecialchars($livre['categorie']);
    $prix = htmlspecialchars((string) $livre['prix']);

    $disponibilite = $livre['disponible']
        ? "Disponible"
        : "Indisponible";

    return "
        <div class='livre'>
            <h3>$titre</h3>
            <p><strong>Auteur :</strong> $auteur</p>
            <p><strong>Année :</strong> $annee</p>
            <p><strong>Catégorie :</strong> $categorie</p>
            <p><strong>Prix :</strong> $prix FCFA</p>
            <p><strong>Disponibilité :</strong> $disponibilite</p>
        </div>
    ";
}


// Fonction 2 : Filtrer les livres par catégorie
function filtrerParCategorie(array $livres, string $categorie): array
{
    $resultats = [];

    foreach ($livres as $livre) {
        if ($livre['categorie'] === $categorie) {
            $resultats[] = $livre;
        }
    }

    return $resultats;
}


// Fonction 3 : Trouver un livre par son identifiant
function trouverLivreParId(array $livres, int $id): ?array
{
    foreach ($livres as $livre) {
        if ($livre['id'] === $id) {
            return $livre;
        }
    }

    return null;
}


// Fonction 4 : Compter les livres disponibles
function compterLivresDisponibles(array $livres): int
{
    $total = 0;

    foreach ($livres as $livre) {
        if ($livre['disponible'] === true) {
            $total++;
        }
    }

    return $total;
}

?>