<?php
require('Exercice_1_Connexion.php');
function reception_personnes(){


//====================================== ZONE D'EXERCICE =====================================//


    // Utilisez les bonnes méthodes pour envoyer un tableau contenant les données.
    // Les 3 méthodes : prepare, execute et fetchAll.
    // L'objectif est de return un tableau contenant toute les informations de la table personne.

    //Connexion a la base de données
    $bdd = connect();
    
    //préparation de la requête
    $query = $bdd->prepare('select * from personne');
    //execution de la requête
    $query->execute();

    //Récupération de toutes les lignes de la requête dans le tableau $data
    $data = $query->fetchAll();

    return $data;

    
//============================================================================================//
}


?>