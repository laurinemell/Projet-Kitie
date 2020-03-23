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
	include "../bd.php";
	$bdd = getBD();
	$requete="select * from chien, etrerace, etredecouleur where";
	if(isset($_GET["Race"])){
		$requete."chien.idChien=etrerace.idChien and etrerace.idRace=".$_GET["Race"]." and ";
	}
	if(isset($_GET["Couleur"])){
		$requete."etredecouleur.idCouleur=".$_GET["Couleur"]." and ";
	}
	if(isset($_GET["Sexe"])){
		$requete."chien.idSexe=".$_GET["Sexe"];
	}
	$rep = $bdd->query($requete);
	$sexe = $bdd->query('select sexe.NomSexe from chien,sexe where chien.idChien='.$_GET["identifiant"].' and chien.idSexe=sexe.IdSexe');
	$race = $bdd->query('select races.nomRace from races, etrerace where etrerace.idChien='.$_GET["identifiant"].' and races.idRace=etrerace.idRace ');
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