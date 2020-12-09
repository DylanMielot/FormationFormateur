<?php
require('Exercice_1_Connexion.php');
function insert_personnes(){


//====================================== ZONE D'EXERCICE =====================================//


    // Ajoutez une nouvelle personne dans la table "personne" en utilisant les méthodes
    // prepare et execute.

    $bdd = connect();

    $values = array('MONNOM', 'Monprenom', 99);

	$query = $bdd->prepare("INSERT INTO `personne`(`nom`, `prenom`, `age`) VALUES (?, ?, ?)");
    $query->execute($values);
    

//============================================================================================//
}

?>