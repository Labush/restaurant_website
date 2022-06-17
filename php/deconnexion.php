<?php
session_start();
session_destroy(); // La session est détruite, l'utilisateur est déconnecté
header('Location:index.php'); // on le renvoie vers index.php (= form de connexion)
die();
