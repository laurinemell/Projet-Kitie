<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<title>Benevole</title>
	<link rel="stylesheet" href="../Style/style.css" type="text/css" />
	<link rel="stylesheet" href="../Style/benevole.css" type="text/css" />
	<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
	<script type="text/javascript" src="../JavaScript/graphe.js"></script>
</head>
<body>
	<a href="../home.php"><img id="logo" src="../Image/spaLogo.png"></a>
	<div id="head">
	<a href="ajout-chien.php" target="_blank"> <input id="ac" class="fo" type="button" type="button" value="Ajouter un chien"></a>
	<a href="ajoutB.php" target="_blank"> <input id="ab" class="fo" type="button" type="button" value="Ajouter un bénévole"></a>
	</div>
	<div id="donnee">
		<div id="selection">
			<ul>
				<?php
				include "../bd.php";
				$bdd = getBD();
				$sex= $bdd->query('SELECT COUNT(chien.idChien) as nombre, sexe.NomSexe as sexe FROM chien,sexe where chien.idSexe=sexe.IdSexe GROUP BY chien.idSexe');
				while ($ligne = $sex ->fetch()) {

				}
				?>
				<input type="checkbox" onclick="graphe(1)">Sexe<br>
				<input type="checkbox" onclick="graphe(2)">Race<br>
				<input type="checkbox" onclick="graphe(3)">Couleur<br>
				<div id="chartContainer" style="height: 370px; width: 100%;"></div>
			</ul>
		</div>
	</div>
	<div id="apercu">
		<input type="search" id="barreRecherche" name="name" placeholder="Recherche par identifiant ou nom">
		<?php
		//echo '<p> Bonjour, '.$_SESSION["prenom"].'.</p>'
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
	<a href="../PHP/sessionDestruction.php" target="_blank"> <input id="ab" class="fo" type="button" type="button" value="Deconnexion"></a>
	<center><a href="../../BD/bd.php" target="_blank"> <input id="ic" class="fo" type="button" value="Information sur les chiens"> </a></body></center>
</body>
</html>