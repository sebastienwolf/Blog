<?php
include_once '../common/connexion.php';


if (filter_input(INPUT_POST, "titre")) {
    $id = filter_input(INPUT_POST, "id");
    $titre = filter_input(INPUT_POST, "titre");

    $stmtTitre = "UPDATE article SET titre = '$titre' WHERE idArticle = $id";
    $pdo->query($stmtTitre);
}

if (filter_input(INPUT_POST, "resume")) {
    $id = filter_input(INPUT_POST, "id");
    $resume = filter_input(INPUT_POST, "resume");

    $stmtResume = "UPDATE article SET resume = '$resume' WHERE idArticle = $id";
    $pdo->query($stmtResume);
}

if (filter_input(INPUT_POST, "image")) {
    $id = filter_input(INPUT_POST, "id");
    $iùage = filter_input(INPUT_POST, "image");

    $stmtImage = "UPDATE article SET resume = '$image' WHERE idArticle = $id";
    $pdo->query($stmtImage);
}

if (filter_input(INPUT_POST, "description")) {
    $id = filter_input(INPUT_POST, "id");
    $description = filter_input(INPUT_POST, "description");

    $stmtDesc = "UPDATE article SET resume = '$description' WHERE idArticle = $id";
    $pdo->query($stmtDesc);
}

// RECUPERATION DES VALEURS DE LA FORM DU MENU DEROULANT ET DE L'ID DE LA COMMANDE
// ET LES TRANSFORME EN VARIABLE POUR LES INSERER DANS LA COMMANDE SQL
if (filter_input(INPUT_POST, "menu")) {
    $id = filter_input(INPUT_POST, "id");
    $menu = filter_input(INPUT_POST, "menu");

    $stmtCat = "UPDATE article SET idCategorie = '$menu' WHERE idArticle = $id";
    $pdo->query($stmtCat);
}

header("Location: http://<?= $b ?>/index.php?page=tableauDeBord");
