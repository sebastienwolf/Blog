<?php
include './common/connexion.php';
include_once './function/requete.php';
include_once './common/header.php';



if (isset($_POST['delete'])) {
    $id = filter_input(INPUT_GET, "id");

    $sql = "DELETE FROM article WHERE idArticle = $id";
    $pdo->query($sql);

    header("Location: http://<?= $b ?>/index.php?page=tableauDeBord");
}
