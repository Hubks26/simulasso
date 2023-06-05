<?php

$nomdemandeur = $_POST["nom-demandeur"];
$prenomdemandeur = $_POST["prenom-demandeur"];
$adressedemandeur = $_POST["adresse-demandeur"];

$filename = './../../documents/assemblee1.csv';

$file = fopen($filename, 'a+');

$texte = $nomdemandeur ."\n".$prenomdemandeur."\n".$adressedemandeur."\n";

file_put_contents($filename, $texte, FILE_APPEND);

fclose($file);

header('Location: ./../../prive/etape1-5.php');
