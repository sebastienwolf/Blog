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
                    <th scope="col">Mail</th>
                    <th scope="col">Message</th>


                </tr>
            </thead>
            <?php
            $stmt = reception($pdo);
            while ($row = $stmt->fetch()) {
                $i = $row->message ?>
                <tr>
                    <!-- ON UTILISE LE TAG PHP ET ECHO DANS LES CASES DU TABLEAU POUR LES REMPLIR AVEC LES DONNÉES -->
                    <td><?php echo $row->idMessage; ?></td>
                    <td><?php echo $row->mail; ?></td>
                    <td><?php echo $row->message; ?></td>
                </tr>
            <?php } ?>
        </table>
    </section>


</article>

<?php
include_once './common/footer.php'
?>