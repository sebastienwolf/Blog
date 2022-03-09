<?php
include './common/connexion.php';
include_once './common/header.php';
?>

<article class="contact">
    <h2>
        Connexion
    </h2>
    <form action="Connexion" method="POST">
        <div>
            <label for="">Titre</label>
            <input type="text" name="mail" id="">

            <label for=""> Resume</label>
            <textarea name="resume" id="" cols="30" rows="10"></textarea>

            <label for=""> Contenu</label>
            <textarea name="contenu" id="" cols="30" rows="10"></textarea>

            <label for="file" class="label-file"> Veuillez choisir une image</label>
            <input id="file" class="input-file" type="file" name="image" id="">

            <label for=""> Titre</label>
            <select name="categorie" id="">
                <option value="client">client</option>
                <option value="livreur">livreur</option>
                <option value="admin">admin</option>
            </select>

            <label for=""> Auteur</label>
            <select name="auteur" id="">
                <option value="client">client</option>
                <option value="livreur">livreur</option>
                <option value="admin">admin</option>
            </select>
            <button class="creer">Créer</button>
        </div>
    </form>
</article>

<?php
include_once './common/footer.php'
?>