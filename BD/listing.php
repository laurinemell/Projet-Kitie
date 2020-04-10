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
			
			$req='select chien.nomChien, chien.idChien, chien.dateNaissance, sexe.NomSexe, sterilisation.Etat, vaccin.nomVaccin, races.nomRace, couleur.nomCouleur, box.idBox, chien.dateEntree, tarification.tarif, lof.Lof, etatlegal.description, chien.photo
			FROM sexe, sterilisation, chien
			LEFT JOIN etrevaccine ON chien.idChien=etrevaccine.idChien
			LEFT JOIN vaccin ON etrevaccine.idVaccin=vaccin.idVaccin
			LEFT JOIN etrerace ON chien.idChien=etrerace.idChien
			LEFT JOIN races ON etrerace.idRace=races.idRace
			LEFT JOIN etredecouleur ON etredecouleur.idChien=chien.idChien
			LEFT JOIN couleur ON etredecouleur.idCouleur=couleur.idCouleur
			LEFT JOIN loger ON loger.idChien=chien.idChien
			LEFT JOIN box ON loger.idBox=box.idBox
			LEFT JOIN tarification ON chien.idTarification=tarification.idTarification
			LEFT JOIN lof ON lof.idLof=etrerace.idLof
			LEFT JOIN etatlegal ON etatlegal.idCategorie=etrerace.idCategorie
			WHERE chien.idSexe=sexe.IdSexe
			AND sterilisation.idSterilisation=chien.idSterilisation
			GROUP BY chien.idChien, vaccin.idVaccin, races.idRace, couleur.idCouleur, box.idBox, lof.idLof, etatlegal.idCategorie
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
			

	while ($ligne = $rep ->fetch()) { 
			if(in_array($ligne["idChien"],$listing_comparaison)){
			echo "<tr>";
			if($ligne["nomChien"]==""||$ligne["idChien"]==""||$ligne["dateNaissance"]==""||$ligne["NomSexe"]==""||$ligne["Etat"]==""||$ligne["nomVaccin"]==""||$ligne["nomRace"]==""||$ligne["nomCouleur"]==""||$ligne["idBox"]==""||$ligne["dateEntree"]==""||$ligne["tarif"]==""||$ligne["Lof"]==""||$ligne["description"]==""){
			echo "<th style='color:orange;'>".$ligne["nomChien"]."</th>";
			echo "<th style='color:orange;'>".$ligne["idChien"]."</th>";
			echo "<th style='color:orange;'>".$ligne["dateNaissance"]."</th>";
			echo "<th style='color:orange;'>".$ligne["NomSexe"]."</th>";
			echo "<th style='color:orange;'>".$ligne["Etat"]."</th>";
			echo "<th style='color:orange;'>".$ligne["nomVaccin"]."</th>";
			echo "<th style='color:orange;'>".$ligne["nomRace"]."</th>";
			echo "<th style='color:orange;'>".$ligne["nomCouleur"]."</th>";
			echo "<th style='color:orange;'>".$ligne["idBox"]."</th>";
			echo "<th style='color:orange;'>".$ligne["dateEntree"]."</th>";
			echo "<th style='color:orange;'>".$ligne["tarif"]."</th>";
			echo "<th style='color:orange;'>".$ligne["Lof"]."</th>";
			echo "<th style='color:orange;'>".$ligne["description"]."</th>";
			}
			else{
			echo "<th>".$ligne["nomChien"]."</th>";
			echo "<th>".$ligne["idChien"]."</th>";
			echo "<th>".$ligne["dateNaissance"]."</th>";
			echo "<th>".$ligne["NomSexe"]."</th>";
			echo "<th>".$ligne["Etat"]."</th>";
			echo "<th>".$ligne["nomVaccin"]."</th>";
			echo "<th>".$ligne["nomRace"]."</th>";
			echo "<th>".$ligne["nomCouleur"]."</th>";
			echo "<th>".$ligne["idBox"]."</th>";
			echo "<th>".$ligne["dateEntree"]."</th>";
			echo "<th>".$ligne["tarif"]."</th>";
			echo "<th>".$ligne["Lof"]."</th>";
			echo "<th>".$ligne["description"]."</th>";
			}
				foreach ($array as $x) {
				echo "<td><a href='../Interface/Connexe/ficheChien.php?identifiant=".$ligne["idChien"]."' >".$x."</td>";
			}
			if ($ligne["photo"] == NULL){
				$ligne["photo"] = "default.jpg";
			}
			echo "<th>"."<img class='img-chien' src='photo/".$ligne["photo"]."' />"."</th>";
			echo "<tr>";
		} 
		}
		$rep ->closeCursor()
		?>
		</table>
	</div>
</body>
</html>