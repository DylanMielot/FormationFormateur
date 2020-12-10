<!DOCTYPE HTML>
<html>
    <head>
        <title> TP - Base de données</title>
        <link rel="stylesheet" href="style/css/main.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <meta charset="utf-8" />
    </head>
    <body style="background-image: url('../style/images/wallpaper.jpg');
    background-repeat: no-repeat;
    background-size: cover;">
        <div class="container" style="margin-top:5%">
            <div class="card" style="background-color: rgba(256, 256, 256, 0.95);padding:20px;">
            <a href='..'> Menu principal </a>

    <!--====================================== ZONE D'EXERCICE =====================================
    
    Ajoutez du code PHP afin de récupérer les données de la base "gphy", insérez les dans un tableau,
    puis créez un fichier css, et liez le a cette page php. Faites en sorte que les professeurs et les
    étudiants soient dissociable.
    
    -->
    <?php

        $style_prof = "color: red;";
        $style_etu = "color: blue;";

        $bdd = new PDO('mysql:host=127.0.0.1;dbname=FormaFor;=charset=utf8', "root", "");
    
        $query = $bdd->prepare('select * from gphy');
        $query->execute();

        $data = $query->fetchAll();

        foreach($data as $personne){

            if ($personne['statut'] == "PROFESSEUR")
                echo "<p style=".$style_prof.">" . $personne['prenom'] . " " . $personne['nom'] . "</p>";
            else
                echo "<p style='".$style_etu."'>" . $personne['prenom'] . " " . $personne['nom'] . "</p>";
        }
    
    ?>

    <!--============================================================================================-->

            </div>
        </div>
    </body>
</html>