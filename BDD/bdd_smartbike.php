<?php
try{
    $bdd = new PDO("mysql:host=localhost; dbname=SmartBike", "root", "");
}
    
catch (Exception $e){ //si exeption : ecrire problème bdd ($e est défini pour être egal aux erreurs)
    echo "Problème BDD $e";
}
?>