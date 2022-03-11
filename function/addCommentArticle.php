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
        header("Location: ../index.php?page=recetteDetaile&id=$idA");
        $_SESSION['erreur'] = 1;
    } else {
        $_SESSION['erreur'] = 3;
        header("Location: ../index.php?page=recetteDetaile&id=$idA");
    }
} else {
    $_SESSION['erreur'] = 2;
    header("Location: ../index.php?page=recetteDetaile&id=$idA");
}
