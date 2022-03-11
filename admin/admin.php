<?php
include './common/connexion.php';
include_once './common/header.php';
?>

<article class="admintableau">
    <h2>Administration</h2>
    <div>
        <a href="http://<?= $b ?>/index.php?page=adminAddArticle"><button>Ajouter un article</button></a>
        <a href="http://<?= $b ?>/index.php?page=adminContact"><button> Contact</button></a>
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
                    <form action="http://<?= $b ?>/index.php?page=adminModifArticle" method="post">
                        <td><?php echo $row->idArticle; ?></td>
                        <td><?php echo $row->titre; ?></td>
                        <td><?php echo $row->categorie; ?></td>
                        <td>
                            <input type="text" hidden name="idea" value="<?php echo $i ?>">
                            <button type="submit" class="btn btn-success" name="edit">Modifier</button>
                    </form>
                    <form action="http://<?= $b ?>/index.php?page=adminDeleteArt" method="post">
                        <button type="submit" class="btn btn-danger" name="delete">Supprimer</button>
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