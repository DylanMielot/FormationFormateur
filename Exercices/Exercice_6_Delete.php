<?php
require('Exercice_1_Connexion.php');
function delete_personnes(){


//====================================== ZONE D'EXERCICE =====================================//


    // Supprimez une personne dans la table "personne" en utilisant les méthodes
    // prepare et execute.

    $bdd = connect();
    $query = $bdd->repare("delete from personne where prenom like ?");
    $query->execute(['lucas']);


//============================================================================================//
}


?>