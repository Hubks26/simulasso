<?php
session_start(); // Démarrer la session

$dateassemblee = $_POST["date-assemble-const"];
$heureassemblee = $_POST["heure-assemble-const"];
$adresseassemblee = $_POST["adresse-assemble-const"];

$filename = './../../documents/assemblee1.csv';

$file = fopen($filename, 'a+');

$texte = $dateassemblee .",".$heureassemblee.",".$adresseassemblee.",";

file_put_contents($filename, $texte, FILE_APPEND);

fclose($file);

header('Location: ./../../prive/resume-etape-1.php');
