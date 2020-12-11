<?php
require('Exercice_1_Connexion.php');
function reception_personnes(){


//====================================== ZONE D'EXERCICE =====================================//


    // Utilisez les bonnes méthodes pour envoyer un tableau contenant les données.
    // Les 3 méthodes : prepare, execute et fetch.
    // L'objectif est de return un tableau contenant toute les informations de la table personne.

    //connexion a la base de données
    $bdd = connect();
    
    //préparation de la requête
    $requete = $bdd->prepare('select * from personne');
    //execution de la requête
    $requete->execute();

    //Création d'un tableau data vide
    $data = [];

    //Tant que $requete->fetch() renvoie une ligne, alors $line prend la valeur de cette ligne
    while ($line = $requete->fetch()) {
        //on insère la valeur de $line dans le tableau $data
    	array_push($data, ($line));
    }

    
    return $data;

//============================================================================================//
}


?>