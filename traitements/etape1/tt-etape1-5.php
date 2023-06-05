<?php

$dateassemblee = $_POST["date-assemble-const"];
$heureassemblee = $_POST["heure-assemble-const"];
$adresseassemblee = $_POST["adresse-assemble-const"];

$filename = './../../documents/assemblee1.csv';

$file = fopen($filename, 'a+');

$texte = $dateassemblee ."\n".$heureassemblee."\n".$adresseassemblee."\n";

file_put_contents($filename, $texte, FILE_APPEND);

fclose($file);

header('Location: ./../../prive/resume-etape-1.php');
