<?php
// Informations de connexion à la base de données
$servername = "servd162127.srv.odns.fr"; // Nom du serveur MySQL
$username = "simulasso_alicia"; // Nom d'utilisateur MySQL
$password = "Ao-xY_chiW*M"; // Mot de passe MySQL
$dbname = "simulasso_global"; // Nom de la base de données

// Créer une connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Erreur de connexion à la base de données : " . $conn->connect_error);
}

// Connexion réussie
echo "Connexion à la base de données réussie";

// Fermer la connexion
$conn->close();

