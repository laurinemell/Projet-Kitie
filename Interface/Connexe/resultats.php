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
	$bdd=getBD();
	$requete="select chien.* from chien, etrerace, etredecouleur where";

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
		if(!empty($_GET["Sexe"])){
			$requete=$requete." and";
		}
	}

	//Requêtes pour le sexe
	if(isset($_GET["sexe"])){
		$sexe=" chien.idSexe=".$_GET["sexe"];
		$requete=$requete.$sexe;
	}
	$requete=$requete." GROUP BY chien.idChien";
	$rep = $bdd->query($requete);
	if (empty($rep)) {
		echo 'Désolé aucun résultats trouvés.';
	}
	echo $requete;
	while ($ligne = $rep ->fetch()) {
		$id=$ligne["idChien"];
		$sexe = $bdd->query('select sexe.NomSexe from sexe where sexe.IdSexe='.$ligne["idSexe"]);
		$sexe=$sexe ->fetch();
		$ste=$bdd->query('select sterilisation.Etat from sterilisation where sterilisation.idSterilisation='.$ligne["idSterilisation"]);
		$ste=$ste ->fetch();
			echo '<a href="ficheChien.php?identifiant='.$id.'"><div class="chiens">';
			echo '<p class="sexe"> Sexe : '.$sexe['NomSexe'].'</p>';
			echo '<img class="rond" src="../../BD/photo/'.$ligne["photo"].'"/>';
			echo '<p class="prenom">Bonjour, je suis : '.$ligne["nomChien"].'</p>';
			echo '<p class="ste"> Stérilisé.e : '.$ste["Etat"].'</p>';
			echo '<p class="id">'.$id.'</p>';
		echo '</div></a>';
	}

	?>

</body>
</html>