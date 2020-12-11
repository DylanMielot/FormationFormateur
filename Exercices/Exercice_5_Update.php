<?php
require('Exercice_1_Connexion.php');
function update_personne(){


//====================================== ZONE D'EXERCICE =====================================//


    // Ajoutez une nouvelle personne dans la table "personne" en utilisant les méthodes
    // prepare et execute.

    //connexion a la base de données
    $bdd = connect();

    //preparation de la requête
    $query = $bdd->prepare("UPDATE `personne` SET `age`=? WHERE `nom` like ? and `prenom` like ? ");
    //execution de la requête en spécifiant les paramètre de la requête dans un tableau
    $query->execute(array(23, 'melin', 'anthony'));
    
//============================================================================================//
}


?>