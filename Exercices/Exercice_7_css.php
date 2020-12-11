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

        //connexion a la base de données
        $bdd = new PDO('mysql:host=127.0.0.1;dbname=FormaFor;=charset=utf8', "root", "");

        //préparation de la requête
        $query = $bdd->prepare('select * from gphy');
        //execution de la requête
        $query->execute();

        //récupération des données retournées par la requête dans le tableau $data
        $data = $query->fetchAll();

        // Pour chaque ligne du tableau $data (1 ligne = 1 personne)
        foreach($data as $personne){
            //Si le statut de la personne est professeur
            if ($personne['statut'] == "PROFESSEUR"){
                //On affiche son prenom et son nom en rouge
                echo "<p style='color: red;'>" . $personne['prenom'] . " " . $personne['nom'] . "</p>";
            }else{
                //Sinon on affiche la personne en bleu
                echo "<p style='color: blue;'>" . $personne['prenom'] . " " . $personne['nom'] . "</p>";
            }
        }
    
    ?>

    <!--============================================================================================-->

            </div>
        </div>
    </body>
</html>