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

                    <!-- Vérification exercice -->

                    <?php
                        try {
                            require('../Exercices/Exercice_6_Delete.php');

                            delete_personnes();

                            //connexion a la bdd + requête (Ne pas reproduire dans les exercices, ça sera faux ! )
                            $bdd = connect();
                            $query = $bdd->query("select * from personne");
                            $data = $query->fetchAll();

                            //tableau d'affichage
                            echo "<table border style='width:200px;margin:0 auto;'><tr><th>Prenom</th><th>Nom</th><th>Age</th></tr>";
                            foreach($data as $personne) echo "<tr><td>" . $personne['prenom'] . "</td><td>" . $personne['nom'] . "</td><td>" . $personne['age'] . "</td></tr>";
                            echo "</table>";

                            //on compare le tableau avant et après appel de la fonction delete
                            if(count($data) < 3){
                                
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