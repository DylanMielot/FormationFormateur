<?php
require('Exercice_1_Connexion.php');
function reception_personnes(){


//====================================== ZONE D'EXERCICE =====================================//


    // Utilisez les bonnes méthodes pour envoyer un tableau contenant les données.
    // Les 3 méthodes : prepare, execute et fetch.
    // L'objectif est de return un tableau contenant toute les informations de la table personne.

    $bdd = connect();
    
    
    $data = [];
    $query = $bdd->query('select * from personne');

    while ($line = $query->fetch()) {
    	array_push($data, ($line));
    }

    
    return $data;

//============================================================================================//
}


?>