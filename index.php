<?php
session_start();
include './controleur/controleur.php';
$filter = filter_input(INPUT_GET, "page");
if ($filter) {

    switch ($filter) {
        case "accueil":
            accueil();
            break;
        case "aPropos":
            aPropos();
            break;
        case "contact":
            contact();
            break;
        case "connexionUser":
            connexionUser();
            break;
        case "recette":
            recette();
            break;
        case "recetteDetaile":
            recetteDetaile();
            break;
        case "inscriptionUser":
            inscriptionUser();
            break;
    }
} else {
    accueil();
}
