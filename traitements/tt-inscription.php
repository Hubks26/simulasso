<?php
session_start(); // Démarrer la session

require_once './../configuration/base-de-donnees.php';

try {
    // Récupération des données du formulaire d'inscription
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mail = $_POST['mail'];
    $motDePasse = $_POST['mdp'];
    $alsace = 0;

    $motDePasseCrypte = password_hash($motDePasse, PASSWORD_DEFAULT);

    // Préparation de la requête d'insertion
    $stmt = $conn->prepare("
    INSERT INTO Utilisateur (nom, prenom, mail, mdp, alsace) 
    VALUES (:nom, :prenom, :mail, :mdp, :bool)");

    // Liaison des paramètres avec les valeurs
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':mail', $mail);
    $stmt->bindParam(':mdp', $motDePasseCrypte);
    $stmt->bindParam(':bool', $alsace);

    // Exécution de la requête
    $stmt->execute();

    header('Location:./../prive/info-creation.php');
}catch (PDOException $e) {
    echo "Erreur d'enregistrement: " . $e->getMessage();
}





