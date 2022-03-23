function erreur() {

    if (data) {
        $err = data;
        if ($err == 2) {
            document.getElementById('err').innerHTML = "<p style='color:red'>erreur veuillez réesser</p>";
        }
        if ($err == 1) {
            document.getElementById('pseudo').value = ""
            document.getElementById('story').value = ""

            document.getElementById('err').innerHTML = "<p style='color:green'>message envoyé</p>";
        }
        if ($err == 3) {
            document.getElementById('err').innerHTML = "<p style='color:red'>Il manque une donnée</p>";
        }
    }
}