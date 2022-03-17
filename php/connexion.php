<?php
session_start();
require_once 'config.php';

if (!empty($_POST['email']) && !empty($_POST['password'])) {
    // Faille XSS | On passe les champs avec fonction PHP htmlspecialchars (XSS: ça string <>&'") dans des variables
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    $email = strtolower($email);

    // Est-que l'utilisateur est dans notre BDD ?
    // Appel/Accès de la fonction prepare() de l'objet $bdd | on prépare notre requête SQL | ? = valeur à passer à la requête
    $check = $bdd->prepare('SELECT pseudo, email, password, token FROM utilisateurs WHERE email = ?');
    // la fonction execute() vient executer notre requête précédemment préparée, avec prepare() | array pcq tableau de valeurs
    $check->execute(array($email));
    // nouvelle variable $data qui va contenir l'appel de la méthode fetch() de l'objet $check
    // fetch() vient récupérer les résultats ligne par ligne, sous forme de array | stockés dans $ data.
    $data = $check->fetch();
    //rowCount() retourne le nombre de lignes affectées par le dernier appel à la fonction execute(), ici ligne 16.
    // nbr de lignes stocké dans $row
    $row = $check->rowCount();
    // En résumé :
    // Si une ligne est retournée dans $row c'est que l'utilisateur existe dans la BDD, l'e-mail est reconnu.
    // S'il n'y a pas de ligne, c'est que l'e-mail n'a pas été reconnu comme existant en BDD. L'utilisateur n'existe donc pas.



    // la condition 'Si $row supérieure à 0' signifie alors 'si un utilisateur avec cette adresse e-mail est enregistré en BDD'
    if ($row > 0) {
        // Si le mail est bon niveau format
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Si le mot de passe est le bon
            if (password_verify($password, $data['password'])) {
                // On créer la session et on redirige sur landing.php
                $_SESSION['user'] = $data['token'];
                header('Location: landing.php');
                die();
            } else {
                header('Location: index.php?login_err=password');
                die();
            }
        } else {
            header('Location: index.php?login_err=email');
            die();
        }
    } else {
        header('Location: index.php?login_err=already');
        die();
    }
} else {
    header('Location: index.php');
    die();
} // si le formulaire est envoyé sans aucune données
