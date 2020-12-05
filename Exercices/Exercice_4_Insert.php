<?php
require('Exercice_1_Connexion.php');
function insert_personnes(){


//====================================== ZONE D'EXERCICE =====================================//


    // Ajoutez une nouvelle personne dans la table "personne" en utilisant les méthodes
    // prepare et execute.

    $bdd = connect();
	$query = $bdd->query("INSERT INTO `personne`(`nom`, `prenom`, `age`) VALUES ('MONNOM','Monprenom',99)");
    


//============================================================================================//
}

?>