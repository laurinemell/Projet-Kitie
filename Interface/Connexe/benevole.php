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
	<a href="ajout-chien.php" target="_blank"> <input id="ac" class="fo" type="button" type="button" value="Ajouter un chien"></a>
	<a href="ajoutB.php" target="_blank"> <input id="ab" class="fo" type="button" type="button" value="Ajouter un bénévole"></a>
	</div>
	<div id="donnee">
		<div id="selection">
		</div>
	</div>
	<div id="apercu">
		<input type="search" id="barreRecherche" name="name" placeholder="Recherche par identifiant ou nom">
		<?php
		include "../bd.php";
		$bdd = getBD();
		$rep = $bdd->query('SELECT * FROM chien ORDER BY dateEntree DESC ');
		while ($ligne = $rep ->fetch()) {
			echo '<tr><td>'.$ligne["nomChien"].'</td>';
			echo '<td><a href="ficheChien.php?identifiant='.$ligne["idChien"].'"><img class="rond" src="../../BD/photo/'.$ligne["photo"].'"/></td>';
			echo '</tr>';
		}
		?>
	</div>
	<center><a href="../../BD/bd.php" target="_blank"> <input id="ic" class="fo" type="button" value="Information sur les chiens"> </a></body></center>
</body>
</html>