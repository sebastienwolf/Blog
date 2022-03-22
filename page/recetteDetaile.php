<?php
include './common/connexion.php';
include_once './common/header.php';
include_once './function/requete.php';

$recette = $_SESSION['idRecette'];

?>

<article class="cardsDetaille">
    <?php
    // $stmtArticle = popDetailArticle($pdo, 'article.idArticle = $i');
    $a = filter_input(INPUT_GET, "id");
    $stmtArticle = popArticle($pdo, ['sql' => "article.idArticle = ?", "id" => $a]);
    $row = $stmtArticle->fetch();
    $i = $row->article
    ?>

    <div class="cards">
        <p>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
            </svg>
            <?= $row->prenom; ?> <?= $row->nom ?> &#149; Le <?= $row->dateE  ?>&#149; <?= $row->categorie ?>
        </p>
        <h3> <?= $row->titre ?> </h3>

        <p>
            <?= $row->resume ?>
        </p>
        <img src="<?= $row->image ?>" alt="">
        <div class="text">
            <p>
                <?= $row->description ?>
            </p>
        </div>
        <div class="commentaire">
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-square-dots-fill" viewBox="0 0 16 16">
                    <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-2.5a1 1 0 0 0-.8.4l-1.9 2.533a1 1 0 0 1-1.6 0L5.3 12.4a1 1 0 0 0-.8-.4H2a2 2 0 0 1-2-2V2zm5 4a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                </svg>
                <?= $row->counterEnd ?> commentaires
            </a>
        </div>
        <section class="AllComment">
            <div>
                <?php
                $popCom = popCom($pdo, ['sqlCom' =>  $a]);
                while ($b = $popCom->fetch()) {
                    $id = $b->idUsers;
                ?>
                    <div class="affichageCom">
                        <p> <?= $b->pseudo; ?> &#149; Le <?= $b->dateE  ?> </p>

                        <p class="coment">
                            <?= $b->commentaire ?>
                        </p>

                        <?php if (($_SESSION['id'] == $id || $_SESSION['userType'] == "admin")) { ?>
                            <a href="">suprimer</a>
                        <?php } ?>
                    </div>
                <?php }
                ?>
            </div>
    </div>

    </section>

    <?php if (isset($_SESSION['id'])) { ?>
        <section class="recetteCom">
            <h4>Laisser un commentaire</h4>
            <form action="./function/addCommentArticle.php" method="POST">
                <input type="text" name="pseudo" id="" placeholder="Pseudo">
                <textarea id="story" name="story" rows="5" cols="33" placeholder="Commentaire"></textarea>
                <input value="<?= $filter = filter_input(INPUT_GET, "id") ?>" type="text" name="id" hidden>
                <button name="addComment">envoyer</button>
            </form>
            <?php
            if (isset($_SESSION['erreur'])) {
                $err = $_SESSION['erreur'];
                unset($_SESSION['erreur']);
                if ($err == 2) {
                    echo "<p style='color:red'>erreur veuillez réesser</p>";
                }
                if ($err == 1) {
                    echo "<p style='color:green'>message envoyé</p>";
                }
                if ($err == 3) {
                    echo "<p style='color:red'>Il manque une donnée</p>";
                }
            }
            ?>
        </section>
    <?php } ?>
    <section class="recetteNew">
        <h4>Recettes récentes</h4>
        <div>

            <?php
            $miniCards = popLastArticle($pdo, ['sql' => 3]);
            while ($row = $miniCards->fetch()) {
                $i = $row->article
            ?>
                <div class="miniCards">
                    <img src="<?= $row->image ?>" alt="">
                    <div>
                        <h5> <?= $row->titre ?> </h5>
                        <?= $row->resume ?>
                        <a href="http://<?= $b ?>/index.php?page=recetteDetaile&id=<?= $row->idArticle ?>"><button>Voir plus</button></a>
                    </div>
                    <div>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-square-dots-fill" viewBox="0 0 16 16">
                                <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-2.5a1 1 0 0 0-.8.4l-1.9 2.533a1 1 0 0 1-1.6 0L5.3 12.4a1 1 0 0 0-.8-.4H2a2 2 0 0 1-2-2V2zm5 4a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                            </svg>
                            <?= $row->counter ?> commentaires
                        </a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>
</article>

<?php
include_once './common/footer.php'
?>