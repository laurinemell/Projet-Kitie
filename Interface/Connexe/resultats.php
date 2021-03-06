<?php 
	session_start();
?>
<html>
<head>
	<title>Résultats</title>
	<link rel="stylesheet" href="../Style/style.css" type="text/css" />
	<link rel="stylesheet" href="../Style/resultats.css" type="text/css" />
	<style type="text/css">
	<style type="text/css">
		body {
		  background: linear-gradient(45deg, #3773C7, #eb984e);
		  background-size: 4000% 4000%;
		  animation: gradient 2s ease infinite; /*Je l'ai mis plus lent c'est plus joli*/
		  margin-left :auto;
		  margin-right : auto;
		}

		@keyframes gradient {
		    0% {
		        background-position: 0% 50%;
		    }
		    50% {
		        background-position: 100% 50%;
		    }
		    100% {
		        background-position: 0% 50%;
		    }
		}
		h1{
			margin-top: 5em;
			margin-left: 5em;
			font-size: 3em;
			color: white;
		}

		.retour {
			position: relative; top: 8em; left: 1em;
		}
	</style>
}
</head>
<body>
	<a href="../home.php"><img id="logo" src="../Image/spaLogo.png"></a>
	<div class="retour">
		<a class="fb" href="criteres.php" > Retour </a>
	</div>
	<?php
	 function age($date) { 
	 	$age = date('Y') - date('Y', strtotime($date)); 
        if (date('md') < date('md', strtotime($date))) { 
            return $age - 1; 
        } 
        return $age; 
    }
	// Partie de la requête
	include "../bd.php";
	$bdd=getBD();
	if(empty($_GET["races"]) and !isset($_GET["sexe"]) and empty($_GET["couleur"])){
		$requete="select chien.* from chien where chien.dateSortie='' or chien.dateSortie=null order by chien.photo desc";
	}
	else{
		$requete="select chien.* from chien, etredecouleur, etrerace where chien.idChien=etredecouleur.idChien and chien.idChien=etrerace.idChien and chien.dateSortie='' and ";

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
		$requete=$requete." group by chien.idChien order by chien.photo desc";
	}
		$rep = $bdd->query($requete);
	
	if (!$rep){
		echo "<meta http-equiv='refresh' content='0.001; URL=criteres.php?msg=Autres critères !'>";
	}
	else{
		$chiens_recommande = 0;
		while ($ligne = $rep ->fetch()) {
			if ($ligne["photo"] != "" && $chiens_recommande < 5) {
				$chiens_recommande++;
				if (count($_SESSION['recommandation_chien_img']) >= 5)
					array_shift($_SESSION['recommandation_chien_img']); 
				array_push($_SESSION['recommandation_chien_img'], $ligne);
			}
			$id=$ligne["idChien"];
			$sexe = $bdd->query('select sexe.NomSexe from sexe where sexe.IdSexe='.$ligne["idSexe"]);
			$race=$bdd->query('select races.nomRace from races,etrerace where races.idRace=etrerace.idRace and etrerace.idChien='.$id);
			$sexe=$sexe ->fetch();
			$ste=$bdd->query('select sterilisation.Etat from sterilisation where sterilisation.idSterilisation='.$ligne["idSterilisation"]);
			$couleur=$bdd->query('select couleur.nomCouleur from couleur, etredecouleur where couleur.idCouleur=etredecouleur.idCouleur and etredecouleur.idChien='.$id);
			$ste=$ste ->fetch();
			echo '<a href="ficheChien.php?identifiant='.$id.'"><div class="chiens">';
			echo '<p class="sexe"> Sexe : '.$sexe['NomSexe'].'</p>';
			echo '<img class="rond" src="../../BD/photo/'.$ligne["photo"].'"/>';
			echo '<p class="prenom">Je suis : '.$ligne["nomChien"].', '.age($ligne['dateNaissance']).' ans</p>';
			echo '<p class="ste"> Stérilisé.e : '.$ste["Etat"].'</p>';
			echo '<p class="id">'.$id.'</p>';
			echo '<ul class="couleur">';
			echo '<li> Race.s : </li>';
			while($raceLecture=$race ->fetch()){
				echo '<li>'.$raceLecture['nomRace'].' </li>';
			}
			echo '</ul>';
			echo '<ul class="couleur">';
			echo '<li> Couleur.s : </li>';
			while($cou=$couleur ->fetch()){
				echo '<li>'.$cou['nomCouleur'].' </li>';
			}
			echo '</ul>';
			echo '</div></a>';
	}
	$rep->closeCursor();
}
	?>

</body>
</html>