<?php
session_start(); // Démarrer la session

require_once './../configuration/base-de-donnees.php';

function authentifierUtilisateur($mail, $motDePasse)
{
    global $conn;

    try {
        // Requête pour récupérer l'utilisateur correspondant à l'email fourni
        $stmt = $conn->prepare("SELECT * FROM Utilisateur WHERE email = :mail");
        $stmt->bindParam(':mail', $mail);
        $stmt->execute();
        $utilisateur = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($utilisateur) {
            // Vérification du mot de passe
            if (password_verify($motDePasse, $utilisateur['mdp'])) {
                // Mot de passe correct, l'utilisateur est authentifié
                return true;
            } else {
                // Mot de passe incorrect
                return false;
            }
        } else {
            // Utilisateur non trouvé
            return false;
        }
    } catch (PDOException $e) {
        echo "Erreur de connexion à la base de données. <a href='./../index.php'>Revenir à l'accueil</a>";
        return false;
    }
}
