<?php
require('Exercice_1_Connexion.php');
function delete_personnes(){


//====================================== ZONE D'EXERCICE =====================================//


    // Supprimez une personne dans la table "personne" en utilisant les méthodes
    // prepare et execute.

    //connexion a la base de données
    $bdd = connect();

    //preparation de la requête
    $query = $bdd->prepare("DELETE FROM `personne` WHERE `nom` like ? and `prenom` like ?");
    //execution de la requête en spécifiant les paramètre de la requête dans un tableau
    $query->execute(array('MONNOM', 'Monprenom'));
    
//============================================================================================//
}


?>