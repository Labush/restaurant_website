<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="NoS1gnal" />

    <!----MDBOOSTRAP------->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css" rel="stylesheet" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js"></script>
    <!---- FONT --->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">


    <title>Connexion</title>
    <link rel="stylesheet" href="style_php.css">
</head>

<body>
    <div id="bg-left"></div>
    <div id="bg-right"></div>

    <div class="login-form">
        <?php
        if (isset($_GET['login_err'])) {
            $err = htmlspecialchars($_GET['login_err']);

            switch ($err) {
                case 'password':
        ?>
                    <div class="alert alert-danger">
                        <strong>Erreur</strong> mot de passe incorrect
                    </div>
                <?php
                    break;

                case 'email':
                ?>
                    <div class="alert alert-danger">
                        <strong>Erreur</strong> email incorrect
                    </div>
                <?php
                    break;

                case 'already':
                ?>
                    <div class="alert alert-danger">
                        <strong>Erreur</strong> compte non existant
                    </div>
        <?php
                    break;
            }
        }
        ?>



        <form action="connexion.php" method="post">
            <h2 id="connect">Se connecter</h2>
            <!-- <a href=" inscription.php"> -->
            <h2 id="redirect_inscription" style="cursor: pointer;"><i class="fas fa-caret-right"></i> Inscription</h2>
            <!-- </a> -->
            <div class="form-group">
                <label class="label-log" for=""><i class="fas fa-caret-right"></i> Adresse e-mail</label>
                <input type="email" name="email" class="form-control" required="required" autocomplete="off">
            </div>
            <div class="form-group">
                <label class="label-log" for=""><i class="fas fa-caret-right"></i> Mot de passe</label>
                <input type="password" name="password" class="form-control" required="required" autocomplete="off">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-outline btn-block">Connexion</button>
            </div>
        </form>
    </div>
</body>

</html>