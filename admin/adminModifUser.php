<?php
include './common/connexion.php';
include_once './common/header.php';
?>

<article class="contact">
    <h2>
        Inscription
    </h2>
    <form action="./function/modifUser.php" method="POST">
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
            <select name="type" id="type">
                <option value="1">utilsateur</option>
                <option value="2">admin</option>

            </select>

            <input hidden value="<?= filter_input(INPUT_GET, "id") ?>" type="text" name="id">
        </div>
        <button class="creer" name="creer">Modifier</button>

    </form>

</article>

<?php
include_once './common/footer.php'
?>