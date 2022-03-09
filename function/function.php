<?php
include '../common/connexion.php';
// ==================================================================================

function setSession($reponse)
{
    $_SESSION['pseudo'] = $reponse[0]->pseudo;
    $_SESSION['id'] = $reponse[0]->idUsers;
    $_SESSION['nom'] = $reponse[0]->nom;
    $_SESSION['prenom'] = $reponse[0]->prenom;
    $_SESSION['userType'] = $reponse[0]->userType;
}
// ==================================================================================
// function envoyer un message contact
function sendMessage()
{
    include '../common/connexion.php';

    $mail = $_POST['mail'];
    $message = $_POST['message'];

    $requete = "INSERT INTO message (idMessage, mail, message) VALUES
        (DEFAULT, '$mail', '$message')";

    $pdo->query($requete);
    $_SESSION['erreur'] = 1;

    header('Location: ../index.php?page=contact');
}
// ==================================================================================
// inscription user
function newInscriptionUser()
{
    include '../common/connexion.php';

    $userNom = $_POST['nom'];
    $userPrenom = $_POST['prenom'];
    $userMail = $_POST['mail'];
    $userPassword = $_POST['password'];
    $userPseudo = $_POST['userPseudo'];

    $option = ['cost' => 12,];
    $hash = password_hash($userPassword, PASSWORD_BCRYPT, $option);


    // prepare la requete
    $requete = $pdo->prepare("SELECT pseudo FROM users where pseudo = :verif");
    // execution de la requete  
    $requete->execute(["verif" => $userPseudo]);
    /// transformer le retour en tableau 
    $reponse = $requete->fetchAll();
    // vérification du mot de passe en variable 
    $nombreUser = count($reponse);

    if ($nombreUser == 0) {
        // vérification si l'utilisateur existe
        // $requeteInscription = "INSERT INTO user (idUser, nom, prenom, age, pseudo, mail, mdp) VALUES
        // (DEFAULT, '$userNom', '$userPrenom', '$userAge', '$userPseudo', '$userMail','$hash')";
        $requeteInscription = "INSERT INTO users (idUsers, nom, prenom, pseudo, mail, mdp, userType) VALUES
        (DEFAULT, '$userNom', '$userPrenom', '$userPseudo', '$userMail', '$hash', DEFAULT)";
        $pdo->query($requeteInscription);
        $_SESSION['erreur'] = 1;
        header('Location: ../index.php?page=connexionUser');
    } else {
        $_SESSION['erreur'] = 2;
        header('Location: ../index.php?page=connexionUser');
    }
}
// ==================================================================================
// connexion user

function logConnexionUser()
{
    include '../common/connexion.php';
    $userMail = $_POST['mail'];
    $password = $_POST['password'];

    $sql = $pdo->prepare("SELECT * FROM users where mail = :usermail ");
    $sql->execute(["usermail" => $userMail]);
    $reponse = $sql->fetchAll();
    // vérification du mot de passe en variable
    $verifPwd = password_verify($password, $reponse[0]->mdp);

    // si le mot de passe et pseudo alors on continue
    if ($verifPwd == true && ($userMail == $reponse[0]->mail)) // nom d'utilisateur et mot de passe correctes
    {
        setSession($reponse);

        if ($reponse[0]->userType == 'admin') {
            header('Location: ../index.php?page=accueil');
        } elseif ($reponse[0]->userType == 'auteur') {
            header('Location: ../index.php?page=accueil');
        } else {
            header('Location: ../index.php?page=accueil');
        }
    } else {
        $_SESSION['erreur'] = 4;
        header('Location: ../index.php?page=connexionUser');
    }
}
// ==================================================================================
// 
