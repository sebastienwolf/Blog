<?php
include_once '../common/connexion.php';
include_once '../common/header.php';
include '../function/function.php';


if (isset($_POST['delete'])) {
    $id = filter_input(INPUT_POST, "idDelete");
    $stmtdelete = "DELETE FROM users WHERE idUsers= $id";
    $pdo->query($stmtdelete);
}

header("Location: http://$b/index.php?page=adminUser");
