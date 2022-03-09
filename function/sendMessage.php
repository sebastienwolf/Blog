<?php
session_start();

include './function.php';
include './common/connexion.php';

if (isset($_POST['sendMessage'])) {
    if (htmlspecialchars(filter_input(INPUT_POST, 'message')) &&  filter_input(INPUT_POST, 'mail')) {
        sendMessage();
    } else {
        $_SESSION['erreur'] = 2;
        header('Location: ../index.php?page=contact');
    }
}
