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
	if(empty($_GET["races"]) and !isset($_GET["sexe"]) and empty($_GET["couleur"])){
		$requete="select chien.* from chien";
	}
	else{
		$requete="select chien.* from chien, etredecouleur, etrerace where chien.idChien=etredecouleur.idChien and chien.idChien=etrerace.idChien and ";

		//Requêtes pour les races
		if (isset($_GET["races"])) {
			$requete=$requete."(";
			$i=0;
			while ($i< sizeof($_GET['races'])) {
				$race='etrerace.idRace='.$_GET['races'][$i];
				$requete=$requete.$race;
				$i++;
				if($i != sizeof($_GET['races'])){
					$requete=$requete." or ";
				}
			}
			$requete=$requete.")";
			if(isset($_GET["sexe"]) or isset($_GET["couleur"])){
				$requete=$requete." and";
			}
		}

		//Requêtes pour les couleurs
		if (isset($_GET["couleur"])) {
			$requete=$requete."(";
			$i=0;
			while ($i< sizeof($_GET['couleur'])) {
				$couleur=' etredecouleur.idCouleur='.$_GET['couleur'][$i];
				$requete=$requete.$couleur;
				$i++;
				if($i != sizeof($_GET['couleur'])){
					$requete=$requete." or ";
				}
			}
			$requete=$requete.")";
			if(isset($_GET["sexe"])){
				$requete=$requete." and";
			}
		}

		//Requêtes pour le sexe
		if(isset($_GET["sexe"])){
			$sexe=" chien.idSexe=".$_GET["sexe"];
			$requete=$requete.$sexe;
		}
		$requete=$requete." group by chien.idChien";
	}
		$rep = $bdd->query($requete);
	
	if (!$rep){
		echo "<meta http-equiv='refresh' content='0.001; URL=criteres.php?msg=Autres critères !'>";
	}
	else{
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
	$rep->closeCursor();
}
	?>

</body>
</html>