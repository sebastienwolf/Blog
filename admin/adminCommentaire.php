<?php
include './common/connexion.php';
include_once './common/header.php';
include_once './function/requete.php';
include_once './function/requete.php';
?>
<article class="admintableau">
    <h2>Validation des commentaires</h2>
    <div>
        <a href="http://<?= $b ?>/index.php?page=tableauDeBord"><button>Retour</button></a>

    </div>
    <section>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Commentaire</th>
                    <th>Pseudo</th>
                    <th>date</th>
                    <th>nom d'article</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>action</th>



                </tr>
            </thead>
            <?php
            $stmt = allComment($pdo);
            while ($row = $stmt->fetch()) {
                $i = $row->commentaire ?>
                <tr>
                    <!-- ON UTILISE LE TAG PHP ET ECHO DANS LES CASES DU TABLEAU POUR LES REMPLIR AVEC LES DONNÉES -->
                    <td><?php echo $row->idCommentaire; ?></td>
                    <td><?php echo $row->titre; ?></td>
                    <td><?php echo $row->dateSend; ?></td>
                    <td><?php echo $row->commentaire; ?></td>
                    <td><?php echo $row->pseudo; ?></td>
                    <td><?php echo $row->nom; ?></td>
                    <td><?php echo $row->prenom; ?></td>
                    <td>
                        <div>
                            <form action="http://<?= $b ?>/index.php?page=adminValidate&id=<?= $row->idCommentaire ?>" method="post">

                                <input type="text" hidden value="<?= $row->idCommentaire ?>">
                                <button type="submit" name="validate">Valider</button>
                            </form>
                            <form action="http://<?= $b ?>/index.php?page=adminValidate&id=<?= $row->idCommentaire ?>" method="post">
                                <input hidden value="<?= $row->idCommentaire ?>" type="text" name="idDelete">
                                <button type="submit" class="delete" name="delete">Supprimer</button>
                            </form>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </section>


</article>

<?php
include_once './common/footer.php'
?>