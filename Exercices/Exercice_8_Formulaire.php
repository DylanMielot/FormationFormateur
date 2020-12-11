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
    <h3 class="card-header" style="text-align:center;">Exercice formulaire</h3>
    <div class="card-body" style="text-align:center;">

    <br><br>


    <!--====================================== ZONE D'EXERCICE =====================================
    
    Ajoutez les element html necessaire afin de recupérer le nom, prenom et l'age de la personne a saisir
    
    -->

        <!--Action permet de spécifier la page qui réceptionnera les données
        Methode permet d'indiquer la méthode pour faire passer les données d'une page a l'autre
        GET = les informations transitent dans l'URL
        POST = les informations ne sont pas visibles dans l'URL -->
        <form action="formulaire.php" method="post">

            <label for="Nom"> Nom </label>
            <input id="Nom" type='text' name='Nom' value='Azerty'> <br>

            <label for="Prenom"> Prenom </label>
            <input id="Prenom" type='text' name='Prenom' value='Qwerty'> <br>

            <label for="Age"> Age </label>
            <input id="Age" type='number' name='Age' value='20'> <br>

            <input type='radio' id="Insert" name='Query' value='Insert'>
            <label for="Insert"> Insert </label>

            <input type='radio' id="Delete" name='Query' value='Delete'>
            <label for="Delete"> Delete </label>

            <input type='submit' name='Bouton'>

        </form>


    <!--============================================================================================-->

    </div></div></div></body>
</html>