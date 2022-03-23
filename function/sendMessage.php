<?php
session_start();

include './function.php';
include './common/connexion.php';

if (isset($_POST['sendMessage'])) {
    if (htmlspecialchars(filter_input(INPUT_POST, 'message')) &&  filter_input(INPUT_POST, 'mail')) {
        sendMessage();
        echo json_encode("1");
    } else {
        echo json_encode("3");
    }
}
