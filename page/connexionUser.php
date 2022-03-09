<?php
include './common/connexion.php';
include_once './common/header.php';
?>

<article class="contact">
    <h2>
        Connexion
    </h2>
    <form action="../function/verification.php" method="POST">
        <div>

            <input type="email" placeholder="E-mail" name="mail" id="">
            <input type="text" placeholder="Mot de passe" name="password" id="">
        </div>
        <button name="connexion">Connexion</button>

    </form>

    <button><a href="http://<?= $b ?>/index.php?page=inscriptionUser"> Inscription</a></button>

    <?php
    if (isset($_SESSION['erreur'])) {
        $err = $_SESSION['erreur'];
        unset($_SESSION['erreur']);

        if ($err == 4) {
            echo "<p style='color:red'>Le mot de passe est erroné</p>";
        }
        if ($err == 3) {
            echo "<p style='color:red'>Il manque une donnée</p>";
        }
        if ($err == 2) {
            echo "<p style='color:red'>veuillez changer de pseudo</p>";
        }
        if ($err == 1) {
            echo "<p style='color:green'>Inscription reussi veuillez vous connecter</p>";
        }
    }
    ?>


</article>

<?php
include_once './common/footer.php'
?>