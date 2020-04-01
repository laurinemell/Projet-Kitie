<!DOCTYPE html>
<html>
<head>
	<title>Résultats</title>
	<link rel="stylesheet" href="../Style/style.css" type="text/css" />
	<link rel="stylesheet" href="../Style/resultats.css" type="text/css" />
</head>
<body>
	<a href="../home.php"><img id="logo" src="../Image/spaLogo.png"></a>
	<?php
	// Partie de la requête
	include "../bd.php";
	//$bdd=getBD();
	$bdd = new PDO('mysql:host=localhost;dbname=kitie;port=3306','root','root');
	$requete="select * from chien, etrerace, etredecouleur where";

	//Requêtes pour les races
	if (isset($_GET["races"])) {
		$race=' chien.idChien=etrerace.idChien';
		$requete=$requete.$race;
		foreach ($_GET['races'] as $value) {
			$race=' or etrerace.idRace='.$value;
			$requete=$requete.$race;
			}
		if(!empty($_GET["sexe"]) or !empty($_GET["couleur"])){
			$requete=$requete." and";
		}
	}

	//Requêtes pour les couleur
	if (isset($_GET["couleur"])) {
		$couleur=' etredecouleur.idChien=chien.idChien';
		$requete=$requete.$couleur;
		foreach ($_GET['couleur'] as $value) {
			$couleur=' or etredecouleur.idCouleur='.$value;
			$requete=$requete.$couleur;
			}
		if(empty($_GET["Sexe"])){
			$requete=$requete." and";
		}
	}

	//Requêtes pour le sexe
	if(isset($_GET["sexe"])){
		$sexe=" chien.idSexe=".$_GET["sexe"];
		$requete=$requete.$sexe;
	}
	echo $requete;
	echo gettype($requete);
	$rep = $bdd->query($requete);
	while ($ligne = $rep ->fetch()) {
		echo '<div class="chiens">';
			echo '<a href="ficheChien.php?identifiant='.$ligne["idChien"].'"><img class="rond" src="../../BD/photo/'.$ligne["photo"].'"/></a>';
			echo '<p class="prenom">Bonjour, je suis : '.$ligne["nomChien"].'</p>';
			echo '<p class="ste">'.$ligne["idSterilisation"].'</p>';
		echo '</div>';
	}

	?>

</body>
</html>