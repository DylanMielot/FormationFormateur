<?php
require('Exercice_1_Connexion.php');
function insert_personnes(){


//====================================== ZONE D'EXERCICE =====================================//


    // Ajoutez une nouvelle personne dans la table "personne" en utilisant les méthodes
    // prepare et execute.

    $bdd = connect();
    $query = $bdd->preare('insert into personne(prenom, nom, age) values(?, ?, ?)');
    $query->execute(['lucas', 'delaveau', '22']);


//============================================================================================//
}


?>