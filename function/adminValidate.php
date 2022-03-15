<?php
include_once './common/connexion.php';
include_once './common/header.php';
include './function/function.php';


if (isset($_POST['validate'])) {
    $id = filter_input(INPUT_GET, "id");
    $stmtvalidate = "UPDATE commentaire SET status = 1  WHERE idCommentaire = $id";
    $test = $pdo->prepare($stmtvalidate);
    $test->execute();
}

if (isset($_POST['delete'])) {
    $id = filter_input(INPUT_GET, "id");
    $stmtdelete = "DELETE FROM commentaire WHERE idCommentaire= $id";
    $pdo->query($stmtdelete);
}

header("Location: http://$b/index.php?page=adminCommentaire");
