<?php
// Informations de connexion à la base de données
$servername = "localhost"; // Nom du serveur MySQL
$username = "simulasso_alicia"; // Nom d'utilisateur MySQL
$password = "Ao-xY_chiW*M"; // Mot de passe MySQL
$dbname = "simulasso_global"; // Nom de la base de données


try {
    // Création d'une nouvelle instance PDO
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // Configuration des options de PDO
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données: <a href='./../index.php'> Revenir à l'accueil </a>";
}
