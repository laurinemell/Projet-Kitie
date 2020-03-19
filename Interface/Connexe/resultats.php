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
	$rep = $bdd->query('select * from chien');
	$sexe = $bdd->query('select sexe.NomSexe from chien,sexe where chien.idChien='.$_GET["identifiant"].' and chien.idSexe=sexe.IdSexe');
	while ($ligne = $rep ->fetch()) {
		echo '<div class="chiens">';
			echo '<a href="ficheChien.php?identifiant='.$ligne["idChien"].'"><img class="rond" src="../../BD/photo/'.$ligne["photo"].'"/></a>';
			echo '<p class="prenom">Bonjour, je suis : '.$ligne["nomChien"].'</p>';
			echo '<p class="nais"> Né.e : '.$ligne["dateNaissance"].'</p>';
			echo '<p class="sexe">'.$ligne["NomSexe"].'</p>';
			echo '<p class="ste">'.$ligne["idSterilisation"].'</p>';
		echo '</div>';
			} 
	?>
	<hr class="separation"/>
</body>
</html>