<?php
include("Headers.php");
?>

<link rel="stylesheet" href="CSS/Style_Contact.css">
<body>
    <form>
        <h1>Formulaire de contact</h1>
        <hr>
        <br>
        <label class="sous-titre">Nom :</label><br> <input class="nom" type="text" name="Nom"><br>
        <br>
        <label class="sous-titre">Prénom :</label><br> <input class="nom" type="text" name="Prenom"><br>
        <br>
        <label class="sous-titre">E-mail :</label><br> <input class="nom" type="email" name="email"><br>
        <br>
        <label class="sous-titre">Entrez votre message :</label>
        <br>
        <textarea class="nom" name="Message" id="" cols="30" rows="5"></textarea><br>
        <br>
        <button>Envoyer</button>
    </form>
</body>