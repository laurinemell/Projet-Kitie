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
	echo "<meta http-equiv='refresh' content='2; URL=listing.php'>";
}

?>

</head>
<body>
	<div class="fixed-barre-top">
		<img id="logo" src="../Interface/Image/spaLogo.png">
		<a class="fo" id="block1" class="fo" href="../Interface/Connexe/ajout-chien.php" > Ajouter un chien </a>
		<a class="fo" id="block2" class="fo" href="modif-chien" > Modifier un chien </a>
		<a class="fo" id="block3" class="fo" href="listing.php?synchroniser=true" > Mise à jour </a>
		<a class="fo" id="block4" href="BD.php"> Historique </a>


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
			$codesource=file_get_contents('https://340201.refugilys.org/specif/340201/www/chiens.php?APPLI=340201');
			preg_match_all("#<td bgcolor=''>.+</td>#",$codesource,$listing);
			$bdd = getBD();
			
			$req='select chien.nomChien, chien.idChien, chien.dateNaissance, sexe.NomSexe, sterilisation.Etat, vaccin.nomVaccin, races.nomRace, couleur.nomCouleur, box.idBox, chien.dateEntree, tarification.tarif,lof.Lof, etatlegal.description, chien.photo
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
				ORDER BY chien.nomChien';
				
			$rep = $bdd->query($req);
			$ligne = $rep->fetch();
			
	$i=10;
	$longueur_listing=count($listing[0]);
	$listing_comparaison=array();
	while ($i<$longueur_listing){
		$id_listing=separeNumeric($listing[0][$i]);
		array_push($listing_comparaison,$id_listing);
		/*on ajoute +13 à $i pour passer à l'id suivant*/
		$i+=13;
	}
			
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