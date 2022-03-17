<?php
session_start();
require_once 'config.php';
// si la session existe pas soit si l'on est pas connecté on redirige
if (!isset($_SESSION['user'])) {
    header('Location:index.php');
    die();
}

// On récupere les données de l'utilisateur
$req = $bdd->prepare('SELECT * FROM utilisateurs WHERE token = ?');
$req->execute(array($_SESSION['user']));
$data = $req->fetch();

?>
<!doctype html>
<html lang="en">

<head>
    <title>Mon compte</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="landing.css">
    <!--VUEJS-->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.0"></script>

    <link href="https://fonts.googleapis.com/css2?family=Khand:wght@300&display=swap" rel="stylesheet">

    <!----MDBOOSTRAP------->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css" rel="stylesheet" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js"></script>
</head>

<body>

    <!-- <div class="text-center">
        <h1 class="p-5">Bonjour <?php echo $data['pseudo']; ?> !</h1>
        <a href="deconnexion.php" class="btn btn-danger btn-lg">Déconnexion</a>

        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#change_password">
            Changer mon mot de passe
        </button>
    </div> -->
    <div class="menu">
        <header>
            <div id="menu">
                <!---->
            </div>
        </header>
    </div>

    <div class="content">

        <div class="content_menu">
            <h2 id="menu_titre">Nos menus <i class="fas fa-long-arrow-alt-down"></i></h2>
            <br>

            <!-- <div id="app">
                <ul id="parallaxe">
                    <li class="carte" :key="item.id" v-for="item in items">
                        <img v-bind:src="item.photoURL" class="card-img-top" />
                        <div class="card-body">
                            <h5 class="card-title" v-text="item.titre"></h5>
                            <a class="shop">
                                <button class="btn btn-rounded btn-dark">
                                    <i class="fas fa-shopping-cart"></i>
                                </button>
                            </a>
                            <br><br>

                            <p class="card-text" v-text="item.description"></p>
                            <br>
                        </div>

                        <div class="prix_rounded">
                            <span v-text="item.prix"></span>€
                        </div>
                    </li>
                </ul>
            </div> -->

            <ul id="parallaxe">
                <li class="carte">
                    <img class="card-img-top" src="../img/img_menu/dej.jpg" />
                    <div class="card-body">
                        <h5 class="card-title">Menu 1</h5>
                        <a class="shop">
                            <button class="btn btn-rounded btn-dark">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </a>
                        <br><br>

                        <p class="card-text">
                            Lorem ipsum dolor sit ipsum vouptarum amet consectetur adipisicing elit.
                        </p>
                        <br>
                    </div>

                    <div class="prix_rounded">
                        <span>3.50€</span>
                    </div>
                </li>

                <li class="carte">
                    <img class="card-img-top" src="../img/img_menu/menu.jpg" />
                    <div class="card-body">
                        <h5 class="card-title">Menu 2</h5>
                        <a class="shop">
                            <button class="btn btn-rounded btn-dark">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </a>
                        <br><br>

                        <p class="card-text">
                            Lorem ipsum dolor sit ipsum vouptarum amet consectetur adipisicing elit.
                        </p>
                        <br>
                    </div>

                    <div class="prix_rounded">
                        <span>7.50€</span>
                    </div>
                </li>

                <li class="carte">
                    <img class="card-img-top" src="../img/img_menu/soir.jpg" />
                    <div class="card-body">
                        <h5 class="card-title">Menu 3</h5>
                        <a class="shop">
                            <button class="btn btn-rounded btn-dark">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </a>
                        <br><br>

                        <p class="card-text">
                            Lorem ipsum dolor sit ipsum vouptarum amet consectetur adipisicing elit.
                        </p>
                        <br>
                    </div>

                    <div class="prix_rounded">
                        <span>13€</span>
                    </div>
                </li>

                <li class="carte">
                    <img class="card-img-top" src="../img/img_menu/dej2.jpg" />
                    <div class="card-body">
                        <h5 class="card-title">Menu 4</h5>
                        <a class="shop">
                            <button class="btn btn-rounded btn-dark">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </a>
                        <br><br>

                        <p class="card-text">
                            Lorem ipsum dolor sit ipsum vouptarum amet consectetur adipisicing elit.
                        </p>
                        <br>
                    </div>

                    <div class="prix_rounded">
                        <span>4.50€</span>
                    </div>
                </li>

                <li class="carte">
                    <img class="card-img-top" src="../img/img_menu/menu2.jpg" />
                    <div class="card-body">
                        <h5 class="card-title">Menu 5</h5>
                        <a class="shop">
                            <button class="btn btn-rounded btn-dark">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </a>
                        <br><br>

                        <p class="card-text">
                            Lorem ipsum dolor sit ipsum vouptarum amet consectetur adipisicing elit.
                        </p>
                        <br>
                    </div>

                    <div class="prix_rounded">
                        <span>7.90€</span>
                    </div>
                </li>

                <li class="carte">
                    <img class="card-img-top" src="../img/img_menu/soir2.jpg" />
                    <div class="card-body">
                        <h5 class="card-title">Menu 6</h5>
                        <a class="shop">
                            <button class="btn btn-rounded btn-dark">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </a>
                        <br><br>

                        <p class="card-text">
                            Lorem ipsum dolor sit ipsum vouptarum amet consectetur adipisicing elit.
                        </p>
                        <br>
                    </div>

                    <div class="prix_rounded">
                        <span>12€</span>
                    </div>
                </li>
            </ul>
        </div>

        <div style="height: 600px;">

            <div id="newsletter">
                <label for="" id="titre_newsletter"><span style="font-weight: bold;">Notre newsletter mensuelle :</span> code-promos et infos !</label>
                <br><br>
                <input type="text" style="margin-left: 100px;">
                <br><br>
                <button class="btn btn-dark" id="btn_newsletter" type="submit">Je m'inscris !</button>
            </div>

            <img id="img" src="../img/img.jpg" width="500px">

        </div>
    </div>

    <script type="text/javascript" src="../js/index.js"></script>
    <script type="text/javascript" src="../js/parallaxe.js"></script>
    <!-- vuejs
    <script type="text/javascript" src="vuejs.js"></script> -->

</body>

</html>