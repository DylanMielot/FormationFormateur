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
            <div class="card" style="background-color: rgba(256, 256, 256, 0.95);">
            <a href='..'> Menu principal </a>
                <h3 class="card-header" style="text-align:center;">Récupération de données : FetchAll</h3>
                <div class="card-body" style="text-align:center;">
                Vous avez appris à réceptionner les données une par une, et a les mettre dans un tableau.
                <br>
                Nous allons maintenant apprendre a réceptionner toutes les données directement dans un tableau.
                <br>
                Comme l'exercice précédent, vous allez devoir récupérer les informations de la table personne, mais cette fois-ci avec la méthode FetchAll.
                <br>
                Modifiez le fichier "Exercice_3_FetchAll.php" présent dans le dossier "Exercices" afin que la fonction renvoit le tableau de données.
                <br>
                <u>Pensez a actualiser cette page afin de vérifier l'affichage des personnes.</u>
                <br>
                
                <!-- Vérification exercice -->
                
                    <div style="margin-top:15px;"></div>
                    <?php

                        require('../Exercices/Exercice_3_Fetchall.php');

                        try{
                            $data = reception_personnes();
                            
                            //connexion a la bdd + requête (Ne pas reproduire dans les exercices, ça sera faux ! )
                            $bdd = connect();
                            $reponse = $bdd->query('select * from personne');
                            $data_true = $reponse->fetchAll();
                            
                            //on compare les données attendues et les données reçues
                            if($data_true === $data){

                                echo "<table border style='width:200px;margin:0 auto;'><tr><th>Prenom</th><th>Nom</th><th>Age</th></tr>";
                                
                                //tableau d'affichage
                                foreach($data as $personne){
                                    echo "<tr><td>" . $personne['prenom'] . "</td><td>" . $personne['nom'] . "</td><td>" . $personne['age'] . "</td></tr>";
                                }
                                
                                //bouton success
                                echo "</table>
                                <div style='margin:15px;color:green'>
                                    DONNÉE REÇUES
                                    </div>
                                <div style='margin:15px'>
                                    <a class='btn btn-sm btn-success' href='Insert.php'> Étape suivante </a>
                                </div>";

                            } else {

                                throw new Exception('Données incomplètes ou non reçues, vérifiez les noms de vos variables et votre requête');
                            }
                        }
                        catch(Throwable $e)
                        {
                            echo "<div style='color:red'>
                            DONNÉES NON RÉCEPTIONNÉES
                            </div> <br>
                            <div class='card'>
                                <u><h5 class='card-title'> Erreur :</h5></u>
                                <div class='card-body'>
                                    " . $e . "
                                </div>
                            </div>";
                        }

                    ?>
                </div>
            </div>
        </div>
    </body>
</html>