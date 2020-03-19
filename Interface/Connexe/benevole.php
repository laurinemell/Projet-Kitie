<!DOCTYPE html>
<html>
<head>
	<title>Benevole</title>
	<link rel="stylesheet" href="../Style/style.css" type="text/css" />
	<link rel="stylesheet" href="../Style/benevole.css" type="text/css" />
</head>
<body>
	<a href="../home.php"><img id="logo" src="../Image/spaLogo.png"></a>
	<div id="head">
	<input id="ac" class="fo" type="button" value="Ajouter un chien">
	<input id="ab" class="fo" type="button" value="Ajouter un bénévole">
	</div>
	<div id="bd">
		<input type="search" id="barreRecherche" name="name" placeholder="Recherche par identifiant ou nom">
		<?php
		include "../bd.php";
		$bdd = getBD();
		$rep = $bdd->query('select * from chien');
		echo '<ul>';
		while ($ligne = $rep ->fetch()) {
			echo '<li>';
			echo '<a href="ficheChien.php?identifiant='.$ligne["idChien"].'"><img class="rond" src="../../BD/photo/'.$ligne["photo"].'"/></a>';
			echo '<p class="prenom">Bonjour, je suis : '.$ligne["nomChien"].'</p>';
			echo '</li>';
		}
		echo '</ul>';
		?>
	</div>
	<input id="ic" class="fo" type="button" value="Information sur les chiens">
</body>
</html>