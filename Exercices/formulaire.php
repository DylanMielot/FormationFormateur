<?php

echo "Donnees recues :";
foreach($_POST as $key=>$value) {
	echo "<ul>".$key." => ".$value."</ul>";
}

//====================================== ZONE D'EXERCICE =====================================//

	// A partir des données recues, implementez les requetes necessaires afin :
	//	- d'ajouter une personne
	//  - de supprimer une personne

	$insert = "INSERT INTO `personne`(`nom`, `prenom`, `age`) VALUES (?, ?, ?)";
	$delete = "DELETE FROM `personne` WHERE `nom` like ? and `prenom` like ?";
	

	// 1 - Recupereration des donnees de la variable $_POST
	// exemple : $valeur_bouton = $_POST['Bouton'];

	$nom = $_POST["Nom"];
	$prenom = $_POST["Prenom"];
	$age = $_POST["Age"];
	$requete = $_POST["Query"];


	// 2 - Connexion à la base de donnees -> Utilisation de PDO

	$bdd = new PDO('mysql:host=127.0.0.1;dbname=FormaFor;=charset=utf8', "root", "");


	// 3 - Utilisation de PDO pour effectuer la requete

	if ($requete == "Insert") {
		$query = $bdd->prepare($insert);
		$query->execute(array($nom, $prenom, $age));
	}
	else if ($requete == "Delete") {
		$query = $bdd->prepare($delete);
		$query->execute(array($nom, $prenom));
	}


//============================================================================================//

?>
<a href='Exercice_8_Formulaire.php'> Retour a la page </a>