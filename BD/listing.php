<?php
session_start();
?>
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
		<?php
    if($_SESSION["Statut"]==1){
        echo '<div id="head">';
            echo '<a href="ajout-chien.php" target="_blank"> <input id="ajoutChien" class="fo" type="button" type="button" value="Ajouter un chien"></a>';
            echo '<a href="ajoutB.php" target="_blank"> <input id="ajoutBenevole" class="fo" type="button" type="button" value="Ajouter un bénévole"></a>';
        echo '</div>';
    }

           // <a href="ajout-chien.php" target="_blank"> <input id="ajoutChien" class="fo" type="button" type="button" value="Ajouter un chien"></a>';
            //echo '<a href="ajoutB.php" target="_blank"> <input id="ajoutBenevole" class="fo" type="button" type="button" value="Ajouter un bénévole"></a>';
       // echo '</div>';
    


    ?>
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
			
			$req='select chien.nomChien, chien.idChien, chien.dateNaissance, sexe.NomSexe, sterilisation.Etat, vaccin.nomVaccin,group_concat(races.nomRace) as nomRace, group_concat(couleur.nomCouleur) as nomCouleur, box.idBox, chien.dateEntree, tarification.tarif, lof.Lof, etatlegal.description, chien.photo
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
			GROUP BY chien.idChien, vaccin.idVaccin,box.idBox, lof.idLof, etatlegal.idCategorie
			ORDER BY chien.nomChien';
				
			$rep = $bdd->query($req);
			
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
				echo "<tr>";
				$non_rempli = $ligne["nomChien"]==""||$ligne["idChien"]==""||$ligne["dateNaissance"]==""||$ligne["NomSexe"]==""||$ligne["Etat"]==""||$ligne["nomVaccin"]==""||$ligne["nomRace"]==""||$ligne["nomCouleur"]==""||$ligne["idBox"]==""||$ligne["dateEntree"]==""||$ligne["tarif"]==""||$ligne["Lof"]==""||$ligne["description"]=="";
				if ($non_rempli) {
					$color_ligne = 'orange';
				} else {
					$color_ligne = 'black';
				}
				$donnees_table = array($ligne["nomChien"],
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
					$ligne["description"]);
				// Afficher toutes les donnees sauf la photo 
				foreach ($donnees_table as $donnee_colonne) {
					echo "<td><a  style='color:".$color_ligne.";' href='../Interface/Connexe/ficheChien.php?identifiant=".$ligne["idChien"]."' >".$donnee_colonne."</td>";
				}
				// Afficher les photos des chiens si il y en a, photo default sinon
				if ($ligne["photo"] == NULL) {
					$photo = "default.jpg";
				} else {
					$photo = $ligne["photo"];
				}
				echo "<th>"."<img class='img-chien' src='photo/".$photo."' />"."</th>";
				echo "</tr>";
			} 
		$rep ->closeCursor()
		?>
		</table>
	</div>
</body>
</html>