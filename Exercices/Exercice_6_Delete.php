<?php
require('Exercice_1_Connexion.php');
function delete_personnes(){


//====================================== ZONE D'EXERCICE =====================================//


    // Supprimez une personne dans la table "personne" en utilisant les méthodes
    // prepare et execute.

    $bdd = connect();

    $values = array('MONNOM', 'Monprenom');

    $query = $bdd->prepare("DELETE FROM `personne` WHERE `nom` like ? and `prenom` like ?");
    $query->execute($values);
    
//============================================================================================//
}


?>