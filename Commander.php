<?php
include("Headers.php");
?>

<link rel="stylesheet" href="CSS/Style_Commander.css">

<body>
    <form>
        <label><h1>Formulaire de commande</h1></label>
        <hr>
        <br>
        <select class="choix-velo" name="Velo" id="Velo"><br>
            <option>Selectionez un Velo</option>
            <option value="Velo1">Velo1</option>
            <option value="Velo2">Velo2</option>
            <label><option value="Velo3">Velo3</option>
            <label><option value="Velo4">Velo4</option>
        </select><br><br>

        <label class="sous-titre">Nom :</label><br> <input class="nom" type="text" name="Nom"><br>
        <br>
        <label class="sous-titre">Prénom :</label><br> <input class="nom" type="text" name="Prenom"><br>
        <br>
        <label class="sous-titre">E-mail :</label><br> <input class="nom" type="email" name="Email"><br>
        <br>
        <label class="sous-titre">Code Postal :</label><br> <input class="nom" type="number" name="Code Postal" min="10000" max="99999"><br>
        <br>
        <label class="sous-titre">Ville :</label><br> <input class="nom" type="text" name="Ville"><br>
        <br>
        <label class="sous-titre">Pays :</label><br> <input class="nom" type="text" name="Pays"><br>
        <br>
        <label class="sous-titre">Adresse :</label><br> <input class="nom" type="text" name="Adresse"><br>
        <br>

        <label class="sous-titre">Message :</label><br>
        <textarea name="nom" id="" cols="30" rows="5"></textarea><br>
        <br>

        <button>Commander</button>

    </form>

</body>