<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>VJVL </title>
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
                <FONT COLOR="white"> Vente de jeux Vidéos en Ligne </FONT>
            </a>
        </div>
    </header>


    <!-- banière-->

    <section class="container-fluid banner">
        <div class="ban">
            <img src="image/bannière.png" />
        </div>

    </section>

   <!-- <p>Aujourd'hui nous sommes le <?php echo date('d/m/Y'); ?>.</p>-->
    <!-- à propos-->
    <section class="container-fluid événements">
        <div class="container">
            <h2 id="about"> À PROPOS DU SITE</h2>
            <hr class="separator">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="dossier-partie text-center">
                        <div class="titre">
                            <h4> Jeux Vidéos </h4>
                        </div>
                        <div class="texte">
                            <span> Ici se trouve notre catalogue.</span>
                        </div>
                        <a href="liste.html">Cliquer ici pour plus d'information</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="dossier-partie text-center">
                        <div class="titre">
                            <h4> Nouveau sur notre site ? </h4>
                        </div>
                        <div class="texte">
                            <span>Vous pouvez vous enristrer pour faciliter vos achats.</span>
                        </div>
                        <a href="enregistre.php">Cliquer ici pour plus d'information</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <?php

    $mysqli = new mysqli('localhost', 'root', '', '');

    if ($mysqli->connect_error) {
        die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
    }
    echo '<p>Connection OK ' . $mysqli->host_info . '</p>';
    echo '<p>Server ' . $mysqli->server_info . '</p>';
    $mysqli->close();

    ?>
</body>

</html>