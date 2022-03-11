<?php
include './common/connexion.php';
include_once './common/header.php';
include_once './function/requete.php';
?>
<article class="admintableau">
    <h2>Administration</h2>
    <div>
        <a href="http://<?= $b ?>/index.php?page=tableauDeBord"><button>Retour</button></a>

    </div>
    <section>
        <table class="table table-striped table-sm">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Pseudo</th>
                    <th scope="col">Mail</th>
                    <th scope="col">Type</th>
                    <th scope="col">Action</th>


                </tr>
            </thead>
            <?php
            $stmt = user($pdo);
            while ($row = $stmt->fetch()) {
                $i = $row->users ?>
                <tr>
                    <!-- ON UTILISE LE TAG PHP ET ECHO DANS LES CASES DU TABLEAU POUR LES REMPLIR AVEC LES DONNÉES -->
                    <form action="http://<?= $b ?>/index.php?page=adminModifUser" method="post">
                        <td><?php echo $row->idUsers; ?></td>
                        <td><?php echo $row->nom; ?></td>
                        <td><?php echo $row->prenom; ?></td>
                        <td><?php echo $row->pseudo; ?></td>
                        <td><?php echo $row->mail; ?></td>
                        <td><?php echo $row->userType; ?></td>
                        <td>
                            <input type="text" hidden name="idea" value="<?php echo $i ?>">
                            <button type="submit" class="btn btn-success" name="edit">Modifier</button>
                    </form>
                    <form action="http://<?= $b ?>/index.php?page=adminDeleteUser" method="post">
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