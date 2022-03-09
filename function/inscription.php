<?php
include '../common/connexion.php';
include '../function/function.php';


if (isset($_POST['creer'])) {
    //prépare nos variable d'entré
    if (
        htmlspecialchars(filter_input(INPUT_POST, 'nom'))
        && htmlspecialchars(filter_input(INPUT_POST, 'prenom'))
        && htmlspecialchars(filter_input(INPUT_POST, 'password'))
        && filter_input(INPUT_POST, 'mail')
        && htmlspecialchars(filter_input(INPUT_POST, 'userPseudo'))
    ) {
        newInscriptionUser();
    } else {
        $_SESSION['erreur'] = 3;
        header('Location: ../index.php?page=connexionUser');
    }
} else {
    $_SESSION['erreur'] = 3;
    header('Location: ../index.php?page=connexionUser');
}
