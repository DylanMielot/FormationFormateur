<?php
require('Exercice_1_Connexion.php');
function reception_personnes(){


//====================================== ZONE D'EXERCICE =====================================//


    // Utilisez les bonnes méthodes pour envoyer un tableau contenant les données.
    // Les 3 méthodes : prepare, execute et fetch.
    // L'objectif est de return un tableau contenant toute les informations de la table personne.

    $bdd = connect();
    
    $query = $bdd->prepare('select * from personne');
    $query->execute();

    $data = [];
    while ($line = $query->fetch()) {
    	array_push($data, ($line));
    }

    
    return $data;

//============================================================================================//
}


?>