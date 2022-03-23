<?php

include '../common/connexion.php';
include '../function/function.php';
include_once '../function/requete.php';
$idA = htmlspecialchars(filter_input(INPUT_POST, 'id'));

if (isset($_POST['addComment'])) {

    if (
        htmlspecialchars(filter_input(INPUT_POST, 'pseudo'))
        && htmlspecialchars(filter_input(INPUT_POST, 'story'))
    ) {
        $pseudo = htmlspecialchars(filter_input(INPUT_POST, 'pseudo'));
        $text = htmlspecialchars(filter_input(INPUT_POST, 'story'));
        $idU = $_SESSION['id'];
        $idA = htmlspecialchars(filter_input(INPUT_POST, 'id'));

        addCommentArticle($pdo, ['sql1' => $text, 'sql2' => $pseudo, 'sql3' => $idU, 'sql4' => $idA]);
        if ($_POST['addComment'] == 'retour') {
            // $_SESSION['erreur'] = 1;
            echo json_encode("1");
        }
        // header("Location: ../index.php?page=recetteDetaile&id=$idA");
    } else {
        echo json_encode("3");
        // $_SESSION['erreur'] = 3;
        // exit;
        // header("Location: ../index.php?page=recetteDetaile&id=$idA");
    }
} else {
    echo json_encode("2");
    // $_SESSION['erreur'] = 2;
    // exit;
    // header("Location: ../index.php?page=recetteDetaile&id=$idA");
}
