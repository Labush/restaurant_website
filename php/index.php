<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----MDBOOSTRAP------->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css" rel="stylesheet" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Koulen&display=swap" rel="stylesheet">


    <title>Connexion</title>
    <link rel="stylesheet" href="connexion.css">
</head>

<body>
    <div id="bg-left"></div>
    <div id="bg-right"></div>

    <div class="login-form">

        <div class="danger-pop">
            <?php
            if (isset($_GET['login_err'])) {
                $err = htmlspecialchars($_GET['login_err']);

                switch ($err) {
                    case 'password':
            ?>
                        <div class="alert alert-danger">
                            <strong>Oups !</strong> Votre mot de passe est incorrect.
                        </div>
                    <?php
                        break;

                    case 'email':
                    ?>
                        <div class="alert alert-danger">
                            <strong>Oups !</strong> Votre adresse e-mail est incorrecte.
                        </div>
                    <?php
                        break;

                    case 'already':
                    ?>
                        <div class="alert alert-danger">
                            <strong>Oups !</strong> Votre adresse e-mail est incorrecte.
                        </div>
            <?php
                        break;
                }
            }
            ?>
        </div>

        <form action="connexion.php" method="post">
            <a href="../index.html" class="text-dark">
                <i class="fas fa-bars fa-2x"></i>
            </a>
            <h2 id="connect">Se connecter</h2>

            <a href=" inscription.php">
                <h2 id="redirect_inscription" style="cursor: pointer;"><i class="fas fa-caret-right"></i> S'inscrire</h2>
            </a>

            <!---------------------->

            <div class="form-group">
                <label class="label-log" for=""><i class="fas fa-caret-right"></i> Adresse e-mail</label>
                <input type="email" name="email" class="form-control" required="required" autocomplete="off">
            </div>

            <div class="form-group">
                <label class="label-log" for=""><i class="fas fa-caret-right"></i> Mot de passe</label>
                <input type="password" name="password" class="form-control" required="required" autocomplete="off">
            </div>

            <div class="form-group">
                <a href="" type="submit">
                    <button type="submit" class="btn btn-outline btn-block">Connexion</button>
                </a>
            </div>
        </form>
    </div>
</body>

</html>