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
	if(isset($_GET["Race"])){
		$race=' chien.idChien=etrerace.idChien and etrerace.idRace='.$_GET["Race"];
		/*if($_GET["Sexe"]="" || $_GET["Couleur"]=""){
			$bis=" and ";
			$race=$race.$bis;
		}
		$requete=$requete.$race;
	/*}
	if(isset($_GET["Couleur"])){
		$couleur=' etredecouleur.idChien=chien.idChien and etredecouleur.idCouleur='.$_GET["Couleur"];
		if(isset($_GET["Sexe"])){
			$sexe=" and ";
			$couleur=$couleur.$sexe;
		}
		$requete=$requete.$couleur;
	}
	if(isset($_GET["Sexe"])){
		$sexe="chien.idSexe=".$_GET["Sexe"];
		$requete=$requete.$sexe;
	}
	$rep = $bdd->query($requete);
	if(empty($rep)){
		echo '<p>Désolé aucuns résultats</p>';
	}*/

	//Début de l'afichage
	echo "Requête effectuée";
	//$sexe = $bdd->query('select sexe.NomSexe from chien,sexe where chien.idChien='.$_GET["identifiant"].' and chien.idSexe=sexe.IdSexe');
	//$race = $bdd->query('select races.nomRace from races, etrerace where etrerace.idChien='.$_GET["identifiant"].' and races.idRace=etrerace.idRace ');
	while ($ligne = $rep ->fetch()) {
		echo '<div class="chiens">';
			echo '<a href="ficheChien.php?identifiant='.$ligne["idChien"].'"><img class="rond" src="../../BD/photo/'.$ligne["photo"].'"/></a>';
			echo '<p class="prenom">Bonjour, je suis : '.$ligne["nomChien"].'</p>';
			echo '<p class="nais"> Né.e : '.$ligne["dateNaissance"].'</p>';
			/*echo '<p class="sexe">'.$ligne["NomSexe"].'</p>';*/
			echo '<p class="ste">'.$ligne["idSterilisation"].'</p>';
		echo '</div>';
			} 
	?>
	<hr class="separation"/>
</body>
</html>