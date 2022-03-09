<?php
session_start();
$b = $_SERVER['HTTP_HOST'];
$a = basename($_SERVER['PHP_SELF']);
$c = rtrim($a, ".php")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $c ?></title>
    <link rel="stylesheet" href="http://<?= $b ?>/css/style.css">
    <link rel="stylesheet" href="http://<?= $b ?>/police/DIdot/DidotHTFL06LightItal.ttf">
    <link rel="stylesheet" href="http://<?= $b ?>/police/Metropolis-Light/Metropolis-Light.otf">
    <link rel="stylesheet" href="http://<?= $b ?>/police/Roboto/Roboto-Light.ttf">
    <link rel="stylesheet" href="http://<?= $b ?>/police/Futura-Light.otf">

</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="http://<?= $b ?>/index.php?page=accueil">ACCUEIL</a></li>
                <li><a href="http://<?= $b ?>/index.php?page=recette">RECETTES</a></li>
                <li><a href="http://<?= $b ?>/index.php?page=aPropos">A PROPOS</a></li>
                <li><a href="http://<?= $b ?>/index.php?page=contact">CONTACT</a></li>
                <?php if (isset($_SESSION['userType'])) {
                    $type = $_SESSION['userType'];

                    if ($type == "admin") { ?>
                        <li><a href="./function/logOut.php">DECONNEXION</a></li>
                    <?php
                    }
                    if ($type == "utilisateur") { ?>
                        <li><a href="./function/logOut.php">DECONNEXION</a></li>
                    <?php
                    }
                } else { ?>
                    <li><a href="http://<?= $b ?>/index.php?page=connexionUser">CONNEXION</a></li>
                <?php } ?>
            </ul>
        </nav>
        <div>
            <img class="logo" src="http://<?= $b ?>/image/logo.png" alt="logo">
            <h1>AVENTURES GUSTATIVES</h1>

        </div>
    </header>
    <main>