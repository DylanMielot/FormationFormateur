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
                <h3 class="card-header" style="text-align:center;">Connexion a une base de données</h3>
                <div class="card-body" style="text-align:center;">
                    <p>
                        Le but de cet exercice est que vous réussissiez a vous connecter et a accéder a la base de données "tp_bdd" en utilisant la méthode PDO. 
                        <br>
                        Vous allez devoir modifier la page Exercice_1_Connexion.php présent dans le dossier "Exercices".
                        <br>
                        Le status de connexion passera a "connecté" lorsque la connexion à la base de données sera effectuée.
                        <br>
                        <u>Pensez a actualiser cette page pour actualiser le status.</u>
                    </p>

                    <!-- Vérification exercice -->
                    
                    <?php
                        require('../Exercices/Exercice_1_Connexion.php');
                        try{
                            $connexion = connect();
                            echo "
                                <div style='margin:15px;color:green'>
                                    STATUS : CONNECTE
                                </div>
                                <a class='btn btn-sm btn-success' href='Fetch.php'> Étape suivante </a>";

                            $q = "
                                DROP TABLE IF EXISTS personne;
                                CREATE TABLE personne (
                                    nom VARCHAR(50),
                                    prenom VARCHAR(50),
                                    age INT
                                    );
                                INSERT INTO `personne`(`nom`, `prenom`, `age`) VALUES ('MIELOT','Dylan',22);
                                INSERT INTO `personne`(`nom`, `prenom`, `age`) VALUES ('MELIN','Anthony',22);

                                DROP TABLE IF EXISTS gphy;
                                CREATE TABLE gphy (
                                    nom VARCHAR(50),
                                    prenom VARCHAR(50),
                                    statut VARCHAR(50)
                                    );
                                INSERT INTO gphy(nom, prenom, statut) VALUES ('GENIET', 'Annie', 'PROFESSEUR');
                                INSERT INTO gphy(nom, prenom, statut) VALUES ('MIELOT', 'Dylan', 'ETUDIANT');
                                INSERT INTO gphy(nom, prenom, statut) VALUES ('FOUSSE', 'Allan', 'PROFESSEUR');
                                INSERT INTO gphy(nom, prenom, statut) VALUES ('GENIET', 'Dominique', 'PROFESSEUR');
                                INSERT INTO gphy(nom, prenom, statut) VALUES ('MELIN', 'Anthony', 'ETUDIANT');
                            ";
                            $connexion->query($q);
                        }
                        catch(Throwable $e)
                        {
                            echo "
                            <div style='color:red'>
                                STATUS : NON CONNECTE
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