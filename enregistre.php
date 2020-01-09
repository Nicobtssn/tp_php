<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Enregistrement</title>
    <link rel="shortcut icon" href="image/logo.jpg" type="images/png">
    <!-- css-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/monstyle.css">
</head>

<body>

    <!-- header -->
    <header class="container-fluid header">
        <div class="container">
            <a class="logo">
                <FONT COLOR="white"> Pour vous enregistrer </FONT>
            </a>
            <nav class="menu">
                <a href="index.php"> Accueil </a>
            </nav>
        </div>
    </header>

    <section class="container-fluid texte">
        <div class="container">
            <h3 id="h3">Etapes a suivre : </h3>
            <hr class="separateur">
            <p>
                <h1>Inscription<h1>

                        <form method="post" ">
                            <p>Nom</p>
                            <input type=" text" name="Nom">
                            <p>Prenom</p>
                            <input type="text" name="Prenom">
                            <p>email</p>
                            <input type="email" name="email">
                            <p>CB</p>
                            <input type="text" name="CB">
                            <p>Password (6 caractère min)</p>
                            <input type="password" name="Mdp">
                            <p>Répetez votre password</p>
                            <input type="password" name="repeatMdp"><br><br>
                            <input type="submit" name="submit" value="Valider">

                        </form>

                        <?php

                        if (isset($_POST['submit'])) {
                            /* on test si les champ sont bien remplis */
                            if (empty($_POST['Nom']) and empty($_POST['Prenom']) and empty($_POST['email']) and empty($_POST['Mdp']) and empty($_POST['repeatMdp']) and empty($_POST['CB'])) {
                                /* on test si le mdp contient bien au moins 6 caractère */
                                if (strlen($password) >= 6) {
                                    /* on test si les deux mdp sont bien identique */
                                    if ($password == $repeatpassword) {
                                        // On crypte le mot de passe
                                        $password = md5($password);
                                        // on se connecte à MySQL et on sélectionne la base
                                        $c = new mysqli("localhost", "root", "");
                                        //On créé la requête
                                        $sql = "INSERT INTO Client VALUES ('','$Nom','$Prenom','$email','$Mdp','$CB')";
                                        /* execute et affiche l'erreur mysql si elle se produit */
                                        if (!$c->query($sql)) {
                                            printf("Message d'erreur : %s\n", $c->error);
                                        }
                                        // on ferme la connexion
                                        mysqli_close($c);
                                    } else echo "Les mots de passe ne sont pas identiques";
                                } else echo "Le mot de passe est trop court !";
                            } else echo "Veuillez saisir tous les champs !";
                        }
                        ?>
</body>

</html>
</p>

</section>

<section class="container-fluid">
    <div class="container">
        <ul class="pagination">
            <li class="disabled"><a href="#"> « </a></li>
            <li class="active"><a href="index.html"> Accueil </a></li>
            <li><a href="liste.html"> - Jeux Vidéos </a></li>
            <li><a href="#"> » </a></li>
        </ul>
    </div>
</section>

</body>

</html>