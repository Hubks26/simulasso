<?php

require_once './../configuration/base-de-donnees.php';

try {
    // Récupération des données du formulaire d'inscription
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mail = $_POST['mail'];
    $motDePasse = $_POST['mdp'];
    $alsace = 0;

    // Préparation de la requête d'insertion
    $stmt = $conn->prepare("
    INSERT INTO Utilisateur (nom, prenom, mail, mdp, alsace) 
    VALUES (:nom, :prenom, :mail, :mdp, :bool)");

    // Liaison des paramètres avec les valeurs
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':mail', $mail);
    $stmt->bindParam(':mdp', $motDePasse);
    $stmt->bindParam(':bool', $alsace);

    // Exécution de la requête
    $stmt->execute();

    header('Location:./../prive/info-creation.php');
}catch (PDOException $e) {
    echo "Erreur d'enregistrement: " . $e->getMessage();
}





