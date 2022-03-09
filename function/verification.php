<?php
include '../common/connexion.php';
include '../function/function.php';


if (isset($_POST['connexion'])) {

    if (
        htmlspecialchars(filter_input(INPUT_POST, 'password'))
        && filter_input(INPUT_POST, 'mail')
    ) {
        logConnexionUser();
    } else {
        $_SESSION['erreur'] = 3;
        header('Location: ../index.php?page=connexionUser');
    }
} else {
    $_SESSION['erreur'] = 3;
    header('Location: ../index.php?page=connexionUser');
}
