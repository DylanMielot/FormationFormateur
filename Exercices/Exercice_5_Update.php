<?php
require('Exercice_1_Connexion.php');
function update_personne(){


//====================================== ZONE D'EXERCICE =====================================//


    // Ajoutez une nouvelle personne dans la table "personne" en utilisant les méthodes
    // prepare et execute.

    $bdd = connect();
    $query = $bdd->prepare("update personne set age=? where prenom like ? ");
    $query->execute([23, 'Anthony']);


//============================================================================================//
}


?>