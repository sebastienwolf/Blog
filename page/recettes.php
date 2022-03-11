<?php
include './common/connexion.php';
include_once './common/header.php';
include_once './function/requete.php';
?>

<article class="cardsDetaille">
    <?php
    $stmtArticle = popArticle($pdo, ['sql' => 1]);
    while ($row = $stmtArticle->fetch()) {
        $i = $row->article
    ?>

        <div class="cards">
            <img src="<?= $row->image ?>" alt="">
            <p>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                </svg>
                <?= $row->prenom; ?> <?= $row->nom ?> &#149; Le <?= $row->dateCreate  ?>&#149; <?= $row->categorie ?>
            </p>
            <div class="text">
                <h3> <?= $row->titre ?> </h3>
                <p>
                    <?= $row->description ?>
                </p>
                <a href="http://<?= $b ?>/index.php?page=recetteDetaile&id=<?= $row->idArticle ?>"><button>Voir plus</button></a>
            </div>
            <div class="commentaire">
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-square-dots-fill" viewBox="0 0 16 16">
                        <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-2.5a1 1 0 0 0-.8.4l-1.9 2.533a1 1 0 0 1-1.6 0L5.3 12.4a1 1 0 0 0-.8-.4H2a2 2 0 0 1-2-2V2zm5 4a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                    </svg>
                    <?= $row->counter ?> commentaires
                </a>
            </div>
        </div>
    <?php } ?>
</article>

<?php
include_once './common/footer.php'
?>