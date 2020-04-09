<?php session_start() ?>
<!DOCTYPE html>
//
<html>
<head>
	<title>Benevole</title>
	<link rel="stylesheet" href="../Style/style.css" type="text/css" />
	<link rel="stylesheet" href="../Style/benevole.css" type="text/css" />
	<script type="text/javascript" src="../JavaScript/style.js"></script>
	<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
	<script type="text/javascript" src="../JavaScript/graphe.js"></script>
	<script src="https://cdn.anychart.com/js/8.0.1/anychart-core.min.js"></script>
    <script src="https://cdn.anychart.com/js/8.0.1/anychart-pie.min.js"></script>
</head>
<body>
	<a href="../home.php"><img id="logo" src="../Image/spaLogo.png"></a>
		<?php
		include "../bd.php";
		$bdd = getBD();
		if (empty($_SESSION['prenom'])) {
			echo "<meta http-equiv='refresh' content='1; URL=connexion.php?msg=Merci, de vous connectez !'>";
		}
		$fichier='sexe.json';
		if(file_exists($fichier)){
			unlink($fichier);
		}
		$fichier='couleur.json';
		if(file_exists($fichier)){
			unlink($fichier);
		}
// Recupere les donnees pour creation des graphes 
		$sexe=$bdd->query("select COUNT(chien.idChien) as nombre, sexe.NomSexe as sexe FROM chien,sexe where chien.idSexe=sexe.IdSexe GROUP BY chien.idSexe");
		$couleur=$bdd->query("select COUNT(chien.idChien) as nombre, couleur.nomCouleur as couleur FROM chien,etredecouleur,couleur where chien.idChien=etredecouleur.idChien and etredecouleur.idCouleur=couleur.idCouleur GROUP BY etredecouleur.idCouleur");	
		$sexeTab=array();
		while($ligne=$sexe ->fetch()){
			$sexeTab[] = array(
				'x' => $ligne['sexe'],
				'value' => $ligne['nombre']
			);
		}
		$Sex=json_encode($sexeTab);
		$nom='sexe.json';
		file_put_contents($nom, $Sex);
		$couleurTab=array();
		while($ligne=$couleur ->fetch()){
			$couleurTab[] = array(
				'x' => $ligne['couleur'],
				'value' => $ligne['nombre']
			);
		}
		$Cou=json_encode($couleurTab);
		$nom='couleur.json';
		file_put_contents($nom, $Cou);
	?>
	<?php
	if($_SESSION["Statut"]==1){
		echo '<div id="head">';
			echo '<a href="ajout-chien.php" target="_blank"> <input id="ajoutChien" class="fo" type="button" type="button" value="Ajouter un chien"></a>';
			echo '<a href="ajoutB.php" target="_blank"> <input id="ajoutBenevole" class="fo" type="button" type="button" value="Ajouter un bénévole"></a>';
		echo '</div>';
	}

	?>
	<?php
	echo '<a href="../PHP/sessionDestruction.php" target="_blank"> <input id="deconnexion" class="fo" type="button" type="button" value="Vous déconnecter, '.$_SESSION["prenom"].'"></a>';
	?>
	<center><a href="../../BD/bd.php" target="_blank"> <input id="Chien" class="fo" type="button" value="Information sur les chiens"> </a></body></center>
	<div id="apercu">
		<input type="search" id="barreRecherche" name="name" placeholder="Recherche par identifiant ou nom">
		<?php
		$rep = $bdd->query('SELECT * FROM chien ORDER BY dateEntree DESC ');
		while ($ligne = $rep ->fetch()) {
			echo '<a href="ficheChien.php?identifiant='.$ligne["idChien"].'"><div>';
			echo $ligne["nomChien"];
			echo '<img class="rond" src="../../BD/photo/'.$ligne["photo"].'"/>';
			echo '</div></a>';
		}
		?>
		<div id="espaceGraphe">
			<div id="selection">
					<button onclick="graphe(sexe)" >Sexe</button>
					<button onclick="graphe(races)" >Races</button>
			</div>
			<div id="graphe"></div>
		</div>
</body>
</html>