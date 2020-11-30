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
                <h3 class="card-header" style="text-align:center;">Récupération de données : Fetch</h3>
                <div class="card-body" style="text-align:center;">
                    Maintenant que vous êtes connecté à la base de données, vous allez devoir récupérer des données contenu dans la table "personne".
                    <br>
                    La table personne contient 4 colonnes : id, prenom, nom et âge.
                    Cette table contient 3 lignes, vous devez compléter la page "Exercice_2_Fetch.php" contenu dans le dossier "Exercices" afin d'afficher avec un fetch l'ensemble des informations de ces 3 lignes.
                    <br>
                    <u>Pensez a actualiser cette page afin de vérifier l'affichage des personnes.</u>
                    <br>
                    <div style="margin-top:15px;"></div>
                    <?php

                        require('../Exercices/Exercice_2_Fetch.php');

                        try{
                            $data = reception_personnes();
                            
                            //connexion a la bdd + requête (Ne pas reproduire dans les exercices, ca sera faux ! )
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
                                    <a class='btn btn-sm btn-success' href='FetchAll.php'> Étape suivante </a>
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