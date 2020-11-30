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
                <h3 class="card-header" style="text-align:center;">Suppression de données</h3>
                <div class="card-body" style="text-align:center;">
                    <p>
                        Vous allez devoir supprimer des nouvelles données de la table personne. Modifiez le fichier "Exercice_6_Delete.php" contenu dans le dossier "Exercices"
                        <br>
                        pour supprimer une personne de la table.
                        <br>
                        <u>Pensez a actualiser cette page.</u>
                        <br>
                    </p>

                    <?php
                        require('../Exercices/Exercice_6_Delete.php');

                        $bdd = connect();
                        $query = $bdd->query("select * from personne");
                        $data_true = $query->fetchAll();

                        echo "<table border style='width:200px;margin:0 auto;'><tr><th>Prenom</th><th>Nom</th><th>Age</th></tr>";
                                
                        //tableau d'affichage
                        foreach($data_true as $personne){
                            echo "<tr><td>" . $personne['prenom'] . "</td><td>" . $personne['nom'] . "</td><td>" . $personne['age'] . "</td></tr>";
                        }
                        echo "</table> <br>";

                        try{

                            delete_personnes();

                            $bdd = connect();
                            $query2 = $bdd->query("select * from personne");
                            $data = $query2->fetchAll();

                            if(count($data) < count($data_true)){
                                echo "Données après suppression : ";
                                echo "<table border style='width:200px;margin:0 auto;'><tr><th>Prenom</th><th>Nom</th><th>Age</th></tr>";
                                
                                //tableau d'affichage
                                foreach($data as $personne){
                                    echo "<tr><td>" . $personne['prenom'] . "</td><td>" . $personne['nom'] . "</td><td>" . $personne['age'] . "</td></tr>";
                                }
                                
                                //bouton success
                                echo "</table>
                                <div style='margin:15px;color:green'>
                                    DONNÉES SUPPRIMÉES
                                </div>
                                <div style='margin:15px'>
                                    <a class='btn btn-sm btn-success' href='../index.html'> Terminé </a>
                                </div>";
                            } else {
                                throw new Exception('Donnée(s) non supprimée(s), vérifiez le nom de vos variables et votre requête');
                            }
                        }
                        catch(Throwable $e)
                        {
                            echo "<div style='color:red'>
                            DONNÉES NON SUPPRIMÉES
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