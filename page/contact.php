<?php
include './common/connexion.php';
include_once './common/header.php';
?>

<article class="contact">
    <h2>
        Contact
    </h2>
    <form action="./function/sendMessage.php" method="POST">
        <div>
            <label for="">Email</label>
            <input type="email" name="mail" id="">
            <label for="">Message</label>
            <textarea name="message" id="" cols="30" rows="10"></textarea>
        </div>
        <button name="sendMessage">Envoyer</button>
    </form>
    <?php
    if (isset($_SESSION['erreur'])) {
        $err = $_SESSION['erreur'];
        unset($_SESSION['erreur']);
        if ($err == 2) {
            echo "<p style='color:red'>manque une donnée</p>";
        }
        if ($err == 1) {
            echo "<p style='color:green'>message envoyé</p>";
        }
    }
    ?>
</article>

<?php
include_once './common/footer.php'
?>