<?php
require('Exercice_1_Connexion.php');
function update_personne(){


//====================================== ZONE D'EXERCICE =====================================//


    // Ajoutez une nouvelle personne dans la table "personne" en utilisant les méthodes
    // prepare et execute.

    $bdd = connect();

    $values = array(23, 'melin', 'anthony');

    $query = $bdd->prepare("UPDATE `personne` SET `age`=? WHERE `nom` like ? and `prenom` like ?");
    $query->execute($values);
    
//============================================================================================//
}


?>