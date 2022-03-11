<?php
include './common/connexion.php';
include_once './common/header.php';
include_once './function/requete.php';
?>
<article class="contact">
    <h2>
        Modification
    </h2>
    <form action="../function/modifArticle.php" method="POST">
        <div>
            <input type="text" name="titre" placeholder="Titre">
            <textarea type="text" name="resume" placeholder="Resumer"></textarea>
            <input type="text" name="image" placeholder="Image">
            <textarea type="text" name="description" placeholder="Description"></textarea>
            <select name="menu" id="menu">
                <option value="1">dessert</option>
                <option value="2">plat</option>
                <option value="3">apperitif</option>

            </select>
            <input hidden value="<?= filter_input(INPUT_GET, "id") ?>" type="text" name="id" placeholder="Image">

        </div>
        <button>Modifier</button>
    </form>

</article>
<?php
include_once './common/footer.php'
?>