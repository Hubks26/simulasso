<?php
session_start(); // Démarrer la session

$activiteassociation = $_POST["activite-association"];

$filename = './../../documents/assemblee1.csv';

$file = fopen($filename, 'a+');

$texte = $activiteassociation.",";

file_put_contents($filename, $texte, FILE_APPEND);

fclose($file);

header('Location: ./../../prive/etape1-4.php');
