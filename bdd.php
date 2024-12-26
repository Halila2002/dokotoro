<?php
$serveur = "localhost";
$utilisateur = "u924654367.halela";
$motDePasse = "3hSJAVicQCMEnhh";
$baseDeDonnees ="dokotoro";

try {
    $connexion = new PDO("mysql:host=$serveur;dbname=$baseDeDonnees", $utilisateur, $motDePasse);
} catch(PDOException $e) {
    echo "Échec de la connexion : " . $e->getMessage();
}
?>
