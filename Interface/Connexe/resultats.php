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
	$bdd = getBD();
	$requete="select * from chien, etrerace, etredecouleur where";
	//
	//Etat de Race
	if (isset($_GET["Race"])) {
		$race=' chien.idChien=etrerace.idChien and etrerace.idRace='.$_GET["Race"];
		$requete=$requete.$race;
		if(!empty($_GET["Sexe"]) or !empty($_GET["Couleur"])){
			$requete=$requete." and";
		}
	}
	//
	//Etat de Couleur
	if (isset($_GET["Couleur"])) {
		$couleur=' etredecouleur.idChien=chien.idChien and etredecouleur.idCouleur='.$_GET["Couleur"];
		$requete=$requete.$couleur;
		if(empty($_GET["Sexe"])){
			$requete=$requete." and";
		}
	}
	//
	//Etat du Sexe
	if(isset($_GET["Sexe"])){
		$sexe=" chien.idSexe=".$_GET["Sexe"];
		$requete=$requete.$sexe;
	}
	//Requête entrée
	$rep = $bdd->query($requete);
	if(empty($rep)){
		echo '<p>Désolé aucuns résultats</p>';
		echo "<meta http-equiv='refresh' content='1; URL=criteres.php?msg='Aucun résultats désolé'";
	}
	while ($ligne = $rep ->fetch()) {
		echo '<div class="chiens">';
			echo '<a href="ficheChien.php?identifiant='.$ligne["idChien"].'"><img class="rond" src="../../BD/photo/'.$ligne["photo"].'"/></a>';
			echo '<p class="prenom">Bonjour, je suis : '.$ligne["nomChien"].'</p>';
			echo '<p class="ste">'.$ligne["idSterilisation"].'</p>';
		echo '</div>';
	}
	?>
	<hr class="separation"/>
</body>
</html>