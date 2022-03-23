<?php
include './common/connexion.php';
include_once './common/header.php';
?>

<article class="contact">
    <h2>
        Contact
    </h2>
    <form id="form" action="./function/sendMessage.php" method="POST">
        <div>
            <label for="">Email</label>
            <input type="email" name="mail" id="mail">
            <label for="">Message</label>
            <textarea name="message" id="message" cols="30" rows="10"></textarea>
        </div>
        <button type="submit" name="sendMessage">Envoyer</button>
    </form>
    <h3 id="err"></h3>
    <script>
        let URL = "./function/sendMessage.php "
        document.getElementById('form').addEventListener('submit', event => {
            event.preventDefault();
            let form = document.getElementById("form")
            let formData = new FormData(form)
            formData.append('sendMessage', 'retour')

            fetch(URL, {
                    body: formData,
                    method: "post"

                })
                .then(function(response) {
                    return response.json()

                })
                .then(function(data) {
                    if (data) {
                        $err = data;

                        if ($err == 1) {
                            document.getElementById('mail').value = ""
                            document.getElementById('message').value = ""

                            document.getElementById('err').innerHTML = "<p style='color:green'>message envoyé</p>";
                        }
                        if ($err == 3) {
                            document.getElementById('err').innerHTML = "<p style='color:red'>Il manque une donnée</p>";
                        }
                    }
                })

        })
    </script>
</article>

<?php
include_once './common/footer.php'
?>