<?php

function accueil()
{
    require_once './page/acceuil.php';
}

function aPropos()
{
    require_once './page/aPropos.php';
}

function contact()
{
    require_once './page/contact.php';
}
function connexionUser()
{
    require_once './page/connexionUser.php';
}
function recette()
{
    require_once './page/recettes.php';
}
function recetteDetaile()
{
    require_once './page/recetteDetaile.php';
}
function inscriptionUser()
{
    require_once './page/inscriptionUser.php';
}
function tableauDeBord()
{
    if ($_SESSION['userType'] == "admin") {
        require_once './admin/admin.php';
    } else {
        accueil();
    }
}
function adminAddArticle()
{
    if ($_SESSION['userType'] == "admin") {
        require_once './admin/adminAddArticle.php';
    } else {
        accueil();
    }
}
function adminContact()
{
    if ($_SESSION['userType'] == "admin") {
        require_once './admin/adminContact.php';
    } else {
        accueil();
    }
}
function adminModifArticle()
{
    if ($_SESSION['userType'] == "admin") {
        require_once './admin/adminModifArticle.php';
    } else {
        accueil();
    }
}
function adminUser()
{
    if ($_SESSION['userType'] == "admin") {
        require_once './admin/adminUser.php';
    } else {
        accueil();
    }
}
function adminDeleteArt()
{
    if ($_SESSION['userType'] == "admin") {
        require_once './admin/adminDeleteArt.php';
    } else {
        accueil();
    }
}
