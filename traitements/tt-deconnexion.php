<?php
session_destroy(); // Détruire la session

require_once './../configuration/base-de-donnees.php';
header('Location: ./../index.php');
