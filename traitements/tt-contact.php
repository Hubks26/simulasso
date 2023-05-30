<?php

if (htmlspecialchars($_POST['contenu']) !== null) {
    $contenu_message = htmlspecialchars($_POST['contenu']);
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $mail = htmlspecialchars($_POST['mail']);
    $objet = htmlspecialchars($_POST['objet']);

    $entete  = 'MIME-Version: 1.0' . "\r\n";
    $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $entete .= 'From: contact@picasso.mmi-velizy.fr' . "\r\n";
    $entete .= 'Reply-to: ' . $mail;

    $message = '<h1>Message envoyé depuis la page Contact de simulasso</h1>
        <p>
        <b>Nom : </b>' . $nom . '<br>
        <b>Prénom : </b>' . $prenom . '<br>
        <b>Email : </b>' . $mail . '<br>
        <b>Objet : </b>' . $objet . '<br>
        <b>Message : </b>' . $contenu_message . '</p>';

    $retour = mail($mail, 'Envoi depuis page Contact Simulasso', $message, $entete);
    if($retour)
        echo '<p>Votre message a bien été envoyé.</p>';
}
?>