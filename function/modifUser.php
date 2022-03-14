<?php
include_once '../common/connexion.php';
include_once '../common/header.php';
include '../function/function.php';


if (filter_input(INPUT_POST, "nom")) {
    $id = filter_input(INPUT_POST, "id");
    $nom = filter_input(INPUT_POST, "nom");

    $stmtnom = "UPDATE users SET nom = '$nom' WHERE idUsers = $id";
    $pdo->query($stmtnom);
}

if (filter_input(INPUT_POST, "prenom")) {
    $id = filter_input(INPUT_POST, "id");
    $prenom = filter_input(INPUT_POST, "prenom");

    $stmtprenom = "UPDATE users SET prenom = '$prenom' WHERE idUsers = $id";
    $pdo->query($stmtprenom);
}

if (filter_input(INPUT_POST, "mail")) {
    $id = filter_input(INPUT_POST, "id");
    $image = filter_input(INPUT_POST, "mail");

    $stmtmail = "UPDATE users SET prenom = '$mail' WHERE idUsers = $id";
    $pdo->query($stmtmail);
}

if (filter_input(INPUT_POST, "password")) {
    $id = filter_input(INPUT_POST, "id");
    $password = filter_input(INPUT_POST, "password");

    $stmtDesc = "UPDATE users SET prenom = '$password' WHERE idUsers = $id";
    $pdo->query($stmtDesc);
}

// RECUPERATION DES VALEURS DE LA FORM DU userPseudo DEROULANT ET DE L'ID DE LA COMMANDE
// ET LES TRANSFORME EN VARIABLE POUR LES INSERER DANS LA COMMANDE SQL
if (filter_input(INPUT_POST, "userPseudo")) {
    $id = filter_input(INPUT_POST, "id");
    $userPseudo = filter_input(INPUT_POST, "userPseudo");

    $stmtPseudo = "UPDATE users SET idCategorie = '$userPseudo' WHERE idUsers = $id";
    $pdo->query($stmtPseudo);
}

if (filter_input(INPUT_POST, "type")) {
    $id = filter_input(INPUT_POST, "id");
    $userType = filter_input(INPUT_POST, "userPseudo");

    $stmtType = "UPDATE users SET idType = '$userType' WHERE idUsers = $id";
    $pdo->query($stmtType);
}


header("Location: http://$b/index.php?page=adminUser");
