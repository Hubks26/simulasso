<?php
session_start(); // Démarrer la session
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
                header('location:./../prive/mes-infos.php');
            } else {
                $_SESSION['erreur'] = "Identifiants incorrects.";
                header("Location: ./../libre/connexion.php"); // Redirection vers la page de connexion
                exit();
            }
        } else {
            // Utilisateur non trouvé, stockage du message d'erreur dans une variable de session
            $_SESSION['erreur'] = "Identifiants incorrects.";
            header("Location: ./../libre/connexion.php"); // Redirection vers la page de connexion
            exit();
        }
    }
} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données: <a href='./../index.php'> Revenir à l'accueil </a>";
}
