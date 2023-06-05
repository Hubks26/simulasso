<?php

$nomassociation = $_POST["nom-association"];


$filename = './../../documents/assemblee1.csv';

$file = fopen($filename, 'a+');

$texte = $nomassociation.",";

file_put_contents($filename, $texte, FILE_APPEND);

fclose($file);


header('Location: ./../../prive/etape1-3.php');
