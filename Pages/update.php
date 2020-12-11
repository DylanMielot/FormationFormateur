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
                <h3 class="card-header" style="text-align:center;">Modification de données</h3>
                <div class="card-body" style="text-align:center;">
                    <p>
                        Maintenant que vous savez insérer de nouvelles données, nous allons voir comment modifier des données dans la base de données.
                        <br>
                        Vous allez devoir modifier le fichier "Exercice_5_update.php" contenu dans le dossier "Exercices".
                        <br>
                         "anthony melin", qui a 22 ans vient d'avoir son anniversaire, il a donc maintenant 23 ans.
                        <br>
                        A vous de mettre a jour l'âge d'Anthony. Vous pourrez ensuite modifier les données que vous souhaitez.
                        <br>
                        <u>Pensez a actualiser cette page pour prendre compte des changements.</u>
                    </p>

                    <!-- Vérification exercice -->

                    <?php
                        require('../Exercices/Exercice_5_Update.php');
                        try{
                            update_personne();
                            
                            //connexion a la bdd + requête (Ne pas reproduire dans les exercices, ça sera faux ! )
                            $bdd = connect();
                            $query = $bdd->query("select * from personne where prenom like 'anthony' and nom like 'melin'");
                            $anthony = $query->fetch();

                            echo "<table border style='width:200px;margin:0 auto;'><tr><th>Prenom</th><th>Nom</th><th>Age</th></tr>";
                            echo "<tr><td>" . $anthony['prenom'] . "</td><td>" . $anthony['nom'] . "</td><td>" . $anthony['age'] . "</td></tr>";
                            echo "</table>";

                            if($anthony['age'] == 23){
                                
                                //bouton success
                                echo "
                                <div style='margin:15px;color:green'>
                                    DONNÉES MODIFIÉES
                                </div>
                                <div style='margin:15px'>
                                    <a class='btn btn-sm btn-success' href='Delete.php'> Étape suivante </a>
                                </div>";
                            } else {
                                throw new Exception('L\'age d\'anthony enregistré n\'est pas 23, vérifiez le nom de vos variables et votre requête');
                            }
                        }
                        catch(Throwable $e)
                        {
                            echo "<div style='color:red'>
                            DONNÉES NON MODIFIÉES
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