<?php
session_start();
require_once 'config.php';
// dans le cas où un visiteur tente d'accéder à landing page sans être connecté
if (!isset($_SESSION['user'])) { // si la donnée de $_SESSION['user'] n'existe pas alors (c-à-d visiteur pas connecté)
    header('Location:index.php'); // on redirige le visiteur vers index.php (=> page de connexion pour qu'il se connecte)
    die(); // stoper le script pour pas continuer sur le code en-dessous :
}

// On récupere les données de l'utilisateur qui se connecte
$req = $bdd->prepare('SELECT * FROM utilisateurs WHERE token = ?'); // ? = valeur passée à la requête
// ici on execute la requête SQL contenue dans $req avec la fonction execute()
$req->execute(array($_SESSION['user']));
$data = $req->fetch(); // on parcourt les lignes du tableau contenu dans le variable $req avec fetch()
// en fait : fetch() vient récupérer les résultats ligne par ligne, sous forme de array | stockés dans $ data.

?>
<!doctype html>
<html lang="en">

<head>
    <title>Mon compte</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="landing.css">
    <!--VUEJS-->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.0"></script>

    <link href="https://fonts.googleapis.com/css2?family=Khand:wght@300&display=swap" rel="stylesheet">

    <!----MDBOOSTRAP------->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css" rel="stylesheet" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Koulen&display=swap" rel="stylesheet">
</head>

<body>

    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-white p-4">
            <!-- <h5 class="text-dark item_menu h4">Lorem Ip's</h5> -->
            <a class="text-dark item_menu" style="text-transform:capitalize;">
                <i class="fas fa-user-circle"></i> <?php echo $data['pseudo']; ?>
            </a>

            <a href="index.php" class="item_menu item_menu_lien" style="text-decoration: underline;text-decoration-color:black;text-decoration-thickness:5px;text-underline-offset: 3px;">
                Se deconnecter
            </a>
        </div>
    </div>
    <nav class="navbar navbar-dark bg-white">
        <div class="container-fluid">
            <button class="navbar-toggler" style="color:#F69C12;" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </nav>

    <!----------------------------------------------------------->

    <!-------------------------------------------------------------------------------------------->
    <div id="app">
        <br>
        <h2 id="titre_menus">
            Nos <span style="color:#F69C12;">menus</span>
        </h2>
        <!-------------------->

        <!-- Pills navs -->
        <ul class="nav nav-pills mb-3" id="ex1" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active btn_pills" id="ex1-tab-1" data-mdb-toggle="pill" href="#ex1-pills-1" role="tab" aria-controls="ex1-pills-1" aria-selected="true"><i class="fas fa-caret-right"></i> Petit-dejeuner</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link btn_pills" id="ex1-tab-2" data-mdb-toggle="pill" href="#ex1-pills-2" role="tab" aria-controls="ex1-pills-2" aria-selected="false"><i class="fas fa-caret-right"></i> Dejeuner</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link btn_pills" id="ex1-tab-3" data-mdb-toggle="pill" href="#ex1-pills-3" role="tab" aria-controls="ex1-pills-3" aria-selected="false"><i class="fas fa-caret-right"></i> Diner</a>
            </li>
        </ul>
        <!-- Pills navs -->

        <!------------------------------------------------------------------------------------>
        <!------------------------------------------------------------------------------------>

        <!-- Pills content -->
        <div class="tab-content" id="ex1-content">
            <div class="tab-pane fade show active" id="ex1-pills-1" role="tabpanel" aria-labelledby="ex1-tab-1">
                <!-------- 1 ------------>
                <div class="row row-cols-1 row-cols-md-3 g-4">

                    <section v-for="Petitdejeuner in Petitdejeuners">

                        <div class="col">
                            <div class="card carte_menus h-100">
                                <img v-bind:src="Petitdejeuner.photoURL" style="height: 280px;" class="card-img-top" alt="Petit-dejeuner" />
                                <div class="card-body carte_body_menus">
                                    <h5 class="card-title carte_title_menus">
                                        {{ Petitdejeuner.name }}
                                    </h5>
                                    <p class="card-text">
                                        {{ Petitdejeuner.description }}
                                    </p>
                                    <br>
                                    <p class="carte_prix_menus">
                                        <button class="btn btn-light btn-rounded carte_prix_menus">
                                            {{ Petitdejeuner.prix }}€
                                        </button>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </section>

                </div>
                <!-------------------->
            </div>

            <div class="tab-pane fade" id="ex1-pills-2" role="tabpanel" aria-labelledby="ex1-tab-2">
                <!-------- 2 ------------>
                <div class="row row-cols-1 row-cols-md-3 g-4">

                    <section v-for="Dejeuner in Dejeuners">

                        <div class="col">
                            <div class="card carte_menus h-100">
                                <img v-bind:src="Dejeuner.photoURL" style="height: 280px;" class="card-img-top" alt="Dejeuner" />
                                <div class="card-body carte_body_menus">
                                    <h5 class="card-title carte_title_menus">
                                        {{ Dejeuner.name }}
                                    </h5>
                                    <p class="card-text">
                                        {{ Dejeuner.description }}
                                    </p>
                                    <br>
                                    <p class="carte_prix_menus">
                                        <button class="btn btn-light btn-rounded carte_prix_menus">
                                            {{ Dejeuner.prix }}€
                                        </button>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </section>

                </div>
                <!--------- 3 ----------->
            </div>

            <div class="tab-pane fade" id="ex1-pills-3" role="tabpanel" aria-labelledby="ex1-tab-3">
                <!-------------------->
                <div class="row row-cols-1 row-cols-md-3 g-4">

                    <section v-for="Diner in Diners">

                        <div class="col">
                            <div class="card carte_menus h-100">
                                <img v-bind:src="Diner.photoURL" style="height: 280px;" class="card-img-top" alt="Diner" />
                                <div class="card-body carte_body_menus">
                                    <h5 class="card-title carte_title_menus">
                                        {{ Diner.name }}
                                    </h5>
                                    <p class="card-text">
                                        {{ Diner.description }}
                                    </p>
                                    <br>
                                    <p class="carte_prix_menus">
                                        <button class="btn btn-light btn-rounded carte_prix_menus">
                                            {{ Diner.prix }}€
                                        </button>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </section>

                </div>
                <!-------------------->
            </div>
        </div>
        <!-- Pills content -->
    </div>

    <!-------------------------------------------------------------------------------------------->


    <footer class="text-center text-white">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);color: #F69C12;
      font-family: 'Koulen', cursive;letter-spacing: 3px;">
            © 2022 Copyright
            <br>
            <section style="margin-left: -90px;">
                <a class="text-white" href="../politique_de_confidentialite.html" style="margin-right: 150px;">Politique de confidentialite</a>
                <a class="text-white" href="../mentions_legales.html">Mentions legales</a>
            </section>
        </div>
        <!-- Copyright -->
    </footer>


</body>
<script type="text/javascript" src="../js/index.js"></script>
<script type="text/javascript" src="landing.js"></script>
<script type="text/javascript" src="../js/vuejs.js"></script>

</html>