<?php
include("Headers.php");
include("BDD/bdd_smartbike.php");

$photos = $bdd ->query("SELECT * from velo")->fetchAll();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Style_Produit.css">
    <title>Nos produits</title>
</head>

<body>

<?php
echo "<div class='Produits'>";
foreach($photos as $photo) {
    echo"
    <div class='space'>
        <img src=".$photo['Photo']." width='280' height='250' alt='Photo du premier velo'><br>
        <a href='Velo".$photo["ID_Velo"].".php'><button class='binfo'>Plus d info</button></a><br>
        <button class='bajt'>Ajouter au panier</button>
    </div>
    
    ";
}
echo"</div>";
?>
    
</body>
</html>
