<?php
include './common/connexion.php';
include_once './common/header.php';
include_once './function/requete.php';
?>

<article class="admintableau">
    <h2>Administration</h2>
    <div>
        <a href="http://<?= $b ?>/index.php?page=adminAddArticle"><button>Ajouter un article</button></a>
        <a href="http://<?= $b ?>/index.php?page=adminMessage"><button> Contact</button></a>
        <a href="http://<?= $b ?>/index.php?page=adminUser"><button>Modifier un utilisateur</button></a>

    </div>
    <section>
        <table class="table table-striped table-sm">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Titre</th>
                    <th scope="col">Catégorie</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <?php
            $stmt = popArticle($pdo, ['sql' => 1]);
            while ($row = $stmt->fetch()) {
                $i = $row->article ?>
                <tr>
                    <!-- ON UTILISE LE TAG PHP ET ECHO DANS LES CASES DU TABLEAU POUR LES REMPLIR AVEC LES DONNÉES -->
                    <form action="http://<?= $b ?>/index.php?page=adminModifArticle&id=<?= $row->idArticle ?>" method="post">
                        <td><?php echo $row->idArticle; ?></td>
                        <td><?php echo $row->titre; ?></td>
                        <td><?php echo $row->categorie; ?></td>
                        <td>
                            <button name="edit">Modifier</button>
                    </form>
                    <form action="http://<?= $b ?>/index.php?page=adminDeleteArt&id=<?= $row->idArticle ?>" method="post">
                        <button name="delete">Supprimer</button>
                    </form>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </section>


</article>

<?php
include_once './common/footer.php'
?>