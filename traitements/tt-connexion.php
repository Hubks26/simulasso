<?php
session_start(); // Démarrer la session

function authentifierUtilisateur($mail, $motDePasse)
{
    global $conn;
    $pdo = require_once './../configuration/base-de-donnees.php';

    // Requête pour récupérer l'utilisateur correspondant à l'email fourni
    $stmt = $conn->prepare("SELECT * FROM Utilisateur WHERE email = :mail");
    $stmt->bindParam(':mail', $mail);
    $stmt->execute();
    $utilisateur = $stmt->fetch();

    if ($utilisateur) {
        // Vérification du mot de passe
        if (password_verify($motDePasse, $utilisateur['mdp'])) {
            // Mot de passe correct, l'utilisateur est authentifié
            $statementSession = $pdo->prepare('INSERT INTO session VALUES ( DEFAULT, :userid )');
            $statementSession->bindValue(':userid', $utilisateur['id']);
            $statementSession->execute();
            $sessionId = $pdo->lastInsertId();
            setcookie('session', $sessionId, time() + 60 * 60 * 24, "", "", false, true);
            return true;
        } else {
            // Mot de passe incorrect
            $_SESSION['erreur'] = "Mot de passe incorrect.";
            return false;
        }
    } else {
        // Utilisateur non trouvé
        $_SESSION['erreur'] = "Utilisateur non trouvé.";
        return false;
    }
}
