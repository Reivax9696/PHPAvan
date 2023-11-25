<?php
session_start(); 

$nom = $_POST["nom"];
$edat = $_POST["edat"];
$pais = $_POST["pais"];
 
$_SESSION["username"] = $nom;
  
echo "<h2>Questionari:</h2>";
echo "Nom: $nom <br>";
echo "Edat: $edat <br>";
echo "Pais: $pais <br>";
    
echo "<h2>Username del usuari:</h2>";
echo "Username: {$_SESSION['username']}<br>";

?>