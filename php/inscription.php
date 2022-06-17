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
    <!---- FONT --->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Koulen&display=swap" rel="stylesheet">


    <title>Inscription</title>
    <link rel="stylesheet" href="inscription.css">
</head>

<body>

    <div id="bg-left"></div>
    <div id="bg-right"></div>

    <div class="login-form">
        <?php
        if (isset($_GET['reg_err'])) {
            $err = htmlspecialchars($_GET['reg_err']);

            switch ($err) {
                case 'success':
        ?>
                    <div class="alert alert-success">
                        <strong>Succès</strong> inscription réussie !
                    </div>
                <?php
                    break;

                case 'password':
                ?>
                    <div class="alert alert-danger">
                        <strong>Erreur</strong> mot de passe différent
                    </div>
                <?php
                    break;

                case 'email':
                ?>
                    <div class="alert alert-danger">
                        <strong>Erreur</strong> email non valide
                    </div>
                <?php
                    break;

                case 'email_length':
                ?>
                    <div class="alert alert-danger">
                        <strong>Erreur</strong> email trop long
                    </div>
                <?php
                    break;

                case 'pseudo_length':
                ?>
                    <div class="alert alert-danger">
                        <strong>Erreur</strong> pseudo trop long
                    </div>
                <?php
                case 'already':
                ?>
                    <div class="alert alert-danger">
                        <strong>Erreur</strong> compte deja existant
                    </div>
        <?php

            }
        }
        ?>

        <form action="inscription_traitement.php" method="post" onsubmit="return checkForm(this);">

            <a href="../index.html" class="text-dark">
                <i class="fas fa-bars fa-2x"></i>
            </a>

            <section style="margin-top:-30px;">
                <h2 id="inscrire">S'inscrire</h2>
                <!---->
                <a href="index.php">
                    <h2 id="redirect_inscrire" style="cursor: pointer;"><i class="fas fa-caret-right"></i> Se connecter</h2>
                </a>
                <!----->
                <div class="form-group">
                    <label class="label-log" for=""><i class="fas fa-caret-right"></i> Pseudo</label>
                    <input type="text" name="pseudo" class="form-control" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <label class="label-log" for=""><i class="fas fa-caret-right"></i> Adresse e-mail</label>
                    <input type="email" name="email" class="form-control" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <label class="label-log" for=""><i class="fas fa-caret-right"></i> Mot de passe</label>
                    <input type="password" name="password" class="form-control" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <label class="label-log" for=""><i class="fas fa-caret-right"></i> Confirmez votre mot de passe</label>
                    <input type="password" name="password_retype" class="form-control" required="required" autocomplete="off">
                </div>

                <input type="checkbox" required name="terms">
                <label for="checkbox">
                    J’ai lu et accepte <a href="../politique_de_confidentialite.html">la politique de confidentialité</a> du site
                </label>

                <div class="form-group" style="margin-top: -40px;" required>
                    <button type="submit" class="btn btn-primary btn-block">S'inscrire</button>
                </div>
            </section>
        </form>
    </div>
</body>
<script>
    function checkForm(form) {
        if (!form.terms.checked) {
            alert("Vous devez accepter la politique de confidentialité pour vous inscrire.");
            form.terms.focus();
            return false;
        }
        return true;
    }
</script>

</html>