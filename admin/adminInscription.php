<?php
include './common/connexion.php';
include_once './common/header.php';
?>

<article class="contact">
    <h2>
        Inscription
    </h2>
    <div>
        <a href="http://<?= $b ?>/index.php?page=tableauDeBord"><button>Retour</button></a>

    </div>
    <form action="./function/inscription.php" method="POST">
        <div>
            <!-- <label for=""><b>Nom :</b></label> -->
            <input type="text" name="nom" placeholder="Nom">
            <!-- <label for=""><b>Prénom :</b></label> -->
            <input type="text" name="prenom" placeholder="Prénom">
            <!-- <label for=""><b>Email :</b></label> <br> -->
            <input type="email" name="mail" placeholder="Mail">
            <!-- <label for=""><b>Mot de Passe :</b></label> -->
            <input type="password" name="password" placeholder="Password">
            <!-- <label for=""><b>Pseudo :</b></label> -->
            <input type="text" name="userPseudo" placeholder="Pseudo">
        </div>
        <button class="creer" name="creer">Créer</button>

    </form>

</article>

<?php
include_once './common/footer.php'
?>