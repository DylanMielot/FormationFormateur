<?php
require('Exercice_1_Connexion.php');
function insert_personnes(){


//====================================== ZONE D'EXERCICE =====================================//


    // Ajoutez une nouvelle personne dans la table "personne" en utilisant les méthodes
    // prepare et execute.

    //Connexion a la base de données
    $bdd = connect();

    //préparation de la requête
    $query = $bdd->prepare("INSERT INTO `personne`(`nom`, `prenom`, `age`) VALUES (?, ?, ?)");
    //execution de la requête en spécifiant les paramètres de la requête dans un tableau
    $query->execute(array('MONNOM', 'Monprenom', 99));
    

//============================================================================================//
}

?>