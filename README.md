# MEDIATHEQUE IPNET

## 1. Description du projet

Mediatheque IPNET est une application web dynamique developpee en PHP dans le cadre du TP 1 de l'UE IT 231 - Developpement Web I.

Elle permet de consulter un catalogue de livres, de filtrer les ouvrages par categorie et d'afficher les informations detaillees de chaque livre.

Les donnees sont stockees dans des tableaux PHP. Aucune base de donnees n'est utilisee.

## 2. Technologies utilisees

- PHP 8+
- HTML5
- CSS3
- WampServer
- Visual Studio Code

## 3. Structure du projet

```text
mediatheque-mp1/
├── index.php
├── catalogue.php
├── detail.php
├── apropos.php
├── includes/
│   ├── header.php
│   ├── footer.php
│   └── fonctions.php
├── data/
│   └── livres.php
├── css/
│   └── style.css
└── README.md
```

## 4. Fonctionnalites realisees

- Page d'accueil avec presentation et statistiques.
- Affichage du catalogue des livres.
- Filtrage des livres par categorie.
- Affichage des details d'un livre.
- Verification de l'identifiant du livre.
- Affichage d'un message si un livre est introuvable.
- Page de presentation de la mediatheque.
- Affichage dynamique de la date du jour.
- Gestion de la disponibilite des livres.

## 5. Installation et lancement

1. Installer WampServer sur l'ordinateur.
2. Demarrer les services de WampServer.
3. Verifier que l'icone de WampServer est verte.
4. Copier le dossier `mediatheque-mp1` dans le repertoire `C:\wamp64\www\`.
5. Ouvrir un navigateur web.
6. Saisir l'adresse suivante :

http://localhost/mediatheque-mp1/

## 6. Donnees utilisees

Le catalogue contient au moins 8 livres.

Chaque livre possede les informations suivantes :

- id
- titre
- auteur
- annee
- categorie
- prix
- disponible

Les donnees sont definies dans le fichier `data/livres.php`.

## 7. Fonctions PHP principales

Les fonctions suivantes sont definies dans `includes/fonctions.php` :

- `afficherLivre()` : affiche les informations d'un livre.
- `filtrerParCategorie()` : filtre les livres selon leur categorie.
- `trouverLivreParId()` : recherche un livre a partir de son identifiant.
- `compterLivresDisponibles()` : calcule le nombre de livres disponibles.

## 8. Securite

Les donnees affichees sont protegees avec la fonction `htmlspecialchars()`.

Les parametres transmis dans l'URL sont verifies avant leur utilisation.

## 9. Auteur

Projet realise dans le cadre du TP 1 de l'UE IT 231 - Developpement Web I.

Annee academique : 2026-2027.