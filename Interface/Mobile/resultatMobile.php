<!DOCTYPE html>
<html>
<head>
	<title>Résultats</title>
	<link rel="stylesheet" href="../Style/style.css" type="text/css" />
	<link rel="stylesheet" href="resultatMCss.css" type="text/css" />	
</head>
<body>
	<p id="Res">Résultats</p>
	<?php
	include "../bd.php";
	$bdd = getBD();
	$rep = $bdd->query('select * from chien');
	while ($ligne = $rep ->fetch()) {
		echo '<div class="chiens">';
			echo '<a href="ficheChien.php?identifiant='.$ligne["idChien"].'"><img class="rond" src="../../BD/photo/'.$ligne["photo"].'"/></a>';
			echo '<p class="prenom">Bonjour, je suis : '.$ligne["nomChien"].'</p>';
			echo '<p class="nais"> Né.e : '.$ligne["dateNaissance"].'</p>';
			echo '<p class="sexe">'.$ligne["idSexe"].'</p>';
			echo '<p class="ste">'.$ligne["idSterilisation"].'</p>';
		echo '</div>';
			} 
	?>
</body>
</html>