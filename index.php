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
        case "tableauDeBord":
            tableauDeBord();
            break;
        case "adminAddArticle":
            adminAddArticle();
            break;
        case "adminMessage":
            adminMessage();
            break;
        case "adminModifArticle":
            adminModifArticle();
            break;
        case "adminUser":
            adminUser();
            break;
        case "adminDeleteArt":
            adminDeleteArt();
            break;
        case "adminModifUser":
            adminModifUser();
            break;
        case "adminCommentaire":
            adminCommentaire();
            break;

        case "adminValidate":
            adminValidate();
            break;

        case "adminInscription":
            adminInscription();
            break;
    }
} else {
    accueil();
}
