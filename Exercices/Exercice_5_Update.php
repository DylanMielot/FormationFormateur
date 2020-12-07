<?php
require('Exercice_1_Connexion.php');
function update_personne(){


//====================================== ZONE D'EXERCICE =====================================//


    // Ajoutez une nouvelle personne dans la table "personne" en utilisant les méthodes
    // prepare et execute.

    $bdd = connect();
    $bdd->query("UPDATE `personne` SET `age`=23 WHERE `nom` like 'melin' and `prenom` like 'anthony'");
    


//============================================================================================//
}


?>