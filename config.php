<?php
$hoteBD = "localhost";
$user = "root";
$pass = "";
$nomBD = "portfolio";

// Connexion à la base de données avec mysqli_connect
$connexion = mysqli_connect($hoteBD, $user, $pass, $nomBD);

// Vérification de la connexion
if (!$connexion) {
    die("Impossible de se connecter à la base de données : " . mysqli_connect_error());
}

// Optionnel : définir le charset pour éviter les problèmes d'encodage
mysqli_set_charset($connexion, "utf8");
?>


