<?php
require_once './../configuration/base-de-donnees.php';

try {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Récupération des données du formulaire de connexion
        $mail = $_POST['mail'];
        $motDePasse = $_POST['mdp'];

        // Requête pour récupérer l'utilisateur correspondant à l'email fourni
        $stmt = $conn->prepare("SELECT * FROM Utilisateur WHERE mail = :mail");
        $stmt->bindParam(':mail', $mail);
        $stmt->execute();
        $utilisateur = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($utilisateur) {
            // Vérification du mot de passe
            if (password_verify($motDePasse, $utilisateur['mdp'])) {
                // Mot de passe correct, l'utilisateur est connecté
                echo "Connexion réussie!";
                // Autres actions après la connexion
            } else {
                // Mot de passe incorrect
                echo "Mot de passe incorrect.";
            }
        } else {
            // Utilisateur non trouvé
            echo "Email non trouvé.";
        }
    }
} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données: " . $e->getMessage();
}
