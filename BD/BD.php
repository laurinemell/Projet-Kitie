<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../Interface/Style/style.css" type="text/css" />
	<title>Base de données</title>

<?php
include ('fonctions.php');
if (isset($_GET['synchroniser'])){
	ob_start();
	$listing=recuperer_donnees_listing();
	$BD=recuperer_donnees_BD();
	comparer_donnees($listing,$BD);
	ob_end_clean();
	echo "<meta http-equiv='refresh' content='2; URL=BD.php'>";
}
?>


</head>
<body>

	<div class="fixed-barre-top">
		<img id="logo" src="../Interface/Image/spaLogo.png">
		<a class="fo" id="block1" class="fo" href="BD.php?synchroniser=true" > Mise à jour </a>
		<a class="fo" id="block2" href="listing.php"> Retour au listing </a>
	</div>
	<div class="fixed-reste">
		<table class="flat-table" border="3">
			<tr>
				<th>Nom</th>
				<th>Id</th>
				<th>Date de naissance</th>
				<th>Sexe</th>
				<th>Stérélisation</th>
				<th>Vaccins</th>
				<th>Race</th>
				<th>Couleurs</th>
				<th>Box</th>
				<th>Date entrée</th>
				<th>Tarif</th>
				<th>Lof</th>
				<th>Catégorie</th>
				<th>Photo</th>

			</tr>
			<?php	
			$bdd = getBD();
			$rep = $bdd->query('select chien.nomChien, chien.idChien, chien.dateNaissance, sexe.NomSexe, sterilisation.Etat, vaccin.nomVaccin, races.nomRace, couleur.nomCouleur, box.idBox, chien.dateEntree, tarification.tarif,lof.Lof, etatlegal.description, chien.photo
				FROM chien, sexe, sterilisation, vaccin, etrevaccine, races, etrerace, couleur, etredecouleur, box, loger, tarification, etatlegal, Lof
				WHERE chien.idSexe=sexe.IdSexe 
					AND sterilisation.idSterilisation=chien.idSterilisation 
					AND vaccin.idVaccin=etrevaccine.idVaccin 
					AND etrevaccine.idChien=chien.idChien 
					AND races.idRace=etrerace.idRace
					AND etredecouleur.idCouleur=couleur.idCouleur 
					AND chien.idChien=etredecouleur.idChien
					AND etrerace.idChien=chien.idChien
					AND loger.idBox=box.idBox 
					AND loger.idChien=chien.idChien
					AND tarification.idTarification=chien.idTarification
					AND lof.idLof=etrerace.idLof
					AND etatlegal.idCategorie=etrerace.idCategorie
				GROUP BY (chien.idChien)
				ORDER BY chien.nomChien');
			$ligne = $rep->fetch();
			while ($ligne = $rep ->fetch()) { 
			echo "<tr>";
		$array = [$ligne["nomChien"], 
					$ligne["idChien"],
					$ligne["dateNaissance"],
					$ligne["NomSexe"],
					$ligne["Etat"],
					$ligne["nomVaccin"],
					$ligne["nomRace"],
					$ligne["nomCouleur"],
					$ligne["idBox"],
					$ligne["dateEntree"],
					$ligne["tarif"],
					$ligne["Lof"],
					$ligne["description"]];
			foreach ($array as $x) {
				echo "<td><a href='../Interface/Connexe/ficheChien.php?identifiant=".$ligne["idChien"]."' >".$x."</td>";
			}
			if ($ligne["photo"] == NULL){
				$ligne["photo"] = "default.jpg";
			}
			echo "<th>"."<img class='img-chien' src='photo/".$ligne["photo"]."' />"."</th>";
			echo "<tr>";
		} 
		$rep ->closeCursor()
		?>
		</table>
	</div>
</body>
</html>