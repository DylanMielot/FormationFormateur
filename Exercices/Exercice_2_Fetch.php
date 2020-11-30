<?php
require('Exercice_1_Connexion.php');
function reception_personnes(){


//====================================== ZONE D'EXERCICE =====================================//


    // Les 3 points d'interrogations doivent être remplacés par les bonnes méthodes :
    // prepare, execute ou fetch.
    // L'objectif est de return un tableau contenant toute les informations de la table personne.

    $bdd = connect();
    $query = $bdd->prepare("select * from personne");
    $query->execute();

    $data = [];
    while($personne = $query->fetch() ){
        $data[] = $personne;
    }

    //tableau des données récupérées
    return $data;


//============================================================================================//
}


?>