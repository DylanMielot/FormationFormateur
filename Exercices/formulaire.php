<?php

echo "Donnees recues :";
foreach($_POST as $key=>$value) {
	echo "<ul>".$key." => ".$value."</ul>";
}

//====================================== ZONE D'EXERCICE =====================================//


	// 1 - Recupereration des donnees de la variable $_POST
	// exemple : $valeur_bouton = $_POST['Bouton'];

	$nom = $_POST["Nom"];
	$prenom = $_POST["Prenom"];
	$age = $_POST["Age"];
	$requete = $_POST["Query"];


	// 2 - Connexion � la base de donnees -> Utilisation de PDO

	$bdd = new PDO('mysql:host=127.0.0.1;dbname=FormaFor;=charset=utf8', "root", "");


	// 3 - Utilisation de PDO pour effectuer la requete
	//Si le bouton radio était sur "insert"
	if ($requete == "Insert") {
		//préparation de la requête
		$query = $bdd->prepare("INSERT INTO `personne`(`nom`, `prenom`, `age`) VALUES (?, ?, ?)");
		//execution de la requête en spécifiant les paramètres de la requête récupérés a la première étape
		$query->execute(array($nom, $prenom, $age));
	}
	else if ($requete == "Delete") {
		//préparation de la requête
		$query = $bdd->prepare("DELETE FROM `personne` WHERE `nom` like ? and `prenom` like ?");
		//execution de la requête en spécifiant les paramètres de la requête récupérés a la première étape
		$query->execute(array($nom, $prenom));
	}


//============================================================================================//

?>
<a href='Exercice_8_Formulaire.php'> Retour a la page </a>