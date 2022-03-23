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
                    <th>Titre</th>
                    <th>Date</th>
                    <th>Commentaire</th>
                    <th>Pseudo</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>action</th>



                </tr>
            </thead>

            <?php
            $stmt = allComment($pdo);
            while ($row = $stmt->fetch()) {
                $i = $row->commentaire;
                $i_id = $row->idCommentaire;
            ?>
                <tr id="<?= "r" . $i_id ?>">
                    <!-- ON UTILISE LE TAG PHP ET ECHO DANS LES CASES DU TABLEAU POUR LES REMPLIR AVEC LES DONNÉES -->
                    <td><?php echo $row->idCommentaire; ?></td>
                    <td><?php echo $row->titre; ?></td>
                    <td><?php echo $row->dateE; ?></td>
                    <td id="taille"><?php echo $row->commentaire; ?></td>
                    <td><?php echo $row->pseudo; ?></td>
                    <td><?php echo $row->nom; ?></td>
                    <td><?php echo $row->prenom; ?></td>
                    <td id="purge">
                        <div>
                            <input type="text" hidden value="<?= $row->idCommentaire ?>">
                            <button name="validate">Valider</button>
                            <input hidden class="id" id="id" value="<?= $row->idCommentaire ?>" type="text" name="idDelete">
                            <a id="tata" class="delete" data-id="<?= $row->idCommentaire ?>" href="http://<?= $b ?>/index.php?page=adminValidate&id=<?= $row->idCommentaire ?>">suprimer</a>
                        </div>
                    </td>
                </tr>
            <?php }
            ?>



        </table>
    </section>


</article>
<script>
    let t = document.getElementsByClassName('delete')
    let item
    for (item of t) {
        console.log(item)

        item.addEventListener('click', (event) => {
            event.preventDefault()

            let a = event.target.dataset.id
            let URL = "http://<?= $b ?>/index.php?page=adminValidate&id=" + a
            console.log(a);
            let id = ("r" + a)
            //let form = document.getElementById('delete')
            // let formData = new FormData()
            // formData.append("sendDelete", "retour")
            // formData.append("id", a)

            fetch(URL)
                .then(function(response) {
                    return response.text()
                })
                .then(function(data) {

                    console.log(data)
                    document.getElementById(id).remove()
                    alert("commentaire suprimer")
                })
        })
    }
</script>








<?php
include_once './common/footer.php'
?>