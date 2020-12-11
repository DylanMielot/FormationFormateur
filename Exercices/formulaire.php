<?php

echo "Donnees recues :";
foreach($_POST as $key=>$value) {
	echo "<ul>".$key." => ".$value."</ul>";
}

//====================================== ZONE D'EXERCICE =====================================//

	

	// 1 - Recupereration des donnees de la variable $_POST
	// exemple : $valeur_bouton = $_POST['Bouton'];





	// 2 - Connexion � la base de donnees -> Utilisation de PDO
	// $bdd = new PDO('mysql:...')
	




	// 3 - Utilisation de PDO pour effectuer la requete
	// $requete = $bdd->prepare(...)
	// ...





//============================================================================================//

?>
<a href='Exercice_8_Formulaire.php'> Retour a la page </a>