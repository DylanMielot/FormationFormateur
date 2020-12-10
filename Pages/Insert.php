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
                <h3 class="card-header" style="text-align:center;">Insertion de données</h3>
                <div class="card-body" style="text-align:center;">
                    <p>
                        Vous allez devoir inserer de nouvelles données dans la table personne. Modifiez le fichier "Exercice_4_Insert.php" contenu dans le dossier "Exercices"
                        <br>
                        pour ajouter une nouvelle personne (vous) a la table.
                        <br>
                        <u>Pensez a actualiser cette page.</u>
                        <br>
                    </p>

                    <!-- Vérification exercice -->

                    <?php
                        require('../Exercices/Exercice_4_Insert.php');
                        try{
                            //connexion a la bdd + requête (Ne pas reproduire dans les exercices, ça sera faux ! )
                            insert_personnes();

                            $bdd = connect();
                            $query = $bdd->query("select * from personne");
                            $data = $query->fetchAll();

                            echo "<table border style='width:200px;margin:0 auto;'><tr><th>Prenom</th><th>Nom</th><th>Age</th></tr>";
                            foreach($data as $personne) echo "<tr><td>" . $personne['prenom'] . "</td><td>" . $personne['nom'] . "</td><td>" . $personne['age'] . "</td></tr>";
                            echo "</table>";

                            if(count($data) > 2){
                            

                                //bouton success
                                echo "
                                <div style='margin:15px;color:green'>
                                    DONNÉES INSÉRÉES
                                </div>
                                <div style='margin:15px'>
                                    <a class='btn btn-sm btn-success' href='Update.php'> Étape suivante </a>
                                </div>";
                            } else {
                                throw new Exception('Nouvelle(s) donnée(s) non insérée(s), vérifiez le nom de vos variables et votre requête');
                            }
                        }
                        catch(Throwable $e)
                        {
                            echo "<div style='color:red'>
                            DONNÉES NON INSÉRÉES
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