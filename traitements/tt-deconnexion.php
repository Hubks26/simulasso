<?php
session_unset();
session_destroy(); // Détruire la session

header('Location: ./../index.php');
