<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../Interface/Style/style.css" type="text/css" />
	<title>Base de données</title>

<?php

include "getbd.php";

/* toutes les fonctions sont écrites ici car le include "fonctions.php" fait planter la page, problème non résolu */

function separeNumeric($text) {
        $nums="";
        if ($text!=null&&strlen($text)>0) {
            for ($i=0;$i<strlen($text);$i++) {
                $c=$text[$i];
                if(is_numeric($c)) {
                    $nums.= $c;
                }
            }
        }
        $nums=substr($nums,1);
        return $nums;
}

function recuperer_donnees_listing(){
$codesource=file_get_contents('https://340201.refugilys.org/specif/340201/www/chiens.php?APPLI=340201');
preg_match_all("#<td bgcolor=''>.+</td>#",$codesource,$tableau_resultat);
return $tableau_resultat;
}

function recuperer_donnees_BD(){
	$bdd = getBD();
	$req="SELECT DISTINCT * FROM chien";
	$reponse = $bdd->query($req);
	$donnees=array();
	while ($chiens=$reponse->fetch()){
	array_push($donnees,$chiens);
	}
	$reponse->closeCursor();
	return $donnees;
}

function inserer_donnees($id,$nom,$date_naissance,$date_entree,$sexe,$sterilise,$box){
	$bdd = getBD();
	$req="INSERT INTO `chien` (`idChien`, `nomChien`, `dateNaissance`, `dateEntree`,`dateSortie`, `idSexe`, `idSterilisation`, `idTarification`,`idMordeur`, `photo`, `description`) VALUES ('".$id."', '".$nom."', '".$date_naissance."', '".$date_entree."', NULL , '".$sexe."', '".$sterilise."', '3','0','default.jpg','')";
	//echo $req;
	$req2="INSERT INTO `loger` (`idBox`, `idChien`, `dateDebut`, `dateFin`) VALUES ('".$box."', '".$id."', '".$date_entree."', NULL)";
	//echo $req2;
	$reponse1=$bdd->query($req);
	$reponse2=$bdd->query($req2);
}

function comparer_donnees($listing,$BD){
	$i=10;
	$longueur_listing=count($listing[0]);
	while ($i<$longueur_listing){		
		$y=0;
		$present=FALSE;
		$id_listing=separeNumeric($listing[0][$i]);
		while($y<count($BD) & $present==FALSE){
			if(in_array($id_listing, $BD[$y])){
				$present=TRUE;
				echo "identique";
				echo " id listing : ".$id_listing."</BR>";
				}
			$y++;
			}
			if($present==FALSE){
				$nom="";
				$nom_listing=substr($listing[0][$i-1],63);
				for ($z=0;$z<strlen($nom_listing);$z++) {
                if($nom_listing[$z]==" ") {
                    $z=strlen($nom_listing);
                }
                else{
							$nom=$nom.$nom_listing[$z];
                }
                }
				
				$date_naissance_listing=substr($listing[0][$i-6],63,13);
				$date_naissance=substr($date_naissance_listing,3,4)."-".substr($date_naissance_listing,0,2)."-01";
				
				$date_entree_listing=substr($listing[0][$i-8],63,10);
				$date_entree=substr($date_entree_listing,6,4)."-".substr($date_entree_listing,3,2)."-".substr($date_entree_listing,0,2);
				
				$sexe_listing=substr($listing[0][$i-5],63,1);
				$sexe=0;
				if($sexe_listing=="F"){
					$sexe=1;				
				}
				
				$sterilise_listing=substr($listing[0][$i-4],63,1);
				$sterilise=0;
				if($sterilise_listing=="X"){
					$sterilise=1;				
				}
				else{
					$sterilise=0;				
				}
				
				$box=substr($listing[0][$i-10],56,4);
				
				echo "ajouter ";
				//echo " id : ".$id_listing;
				//echo $sexe;
				//echo " nom : ".$nom;
				//echo $sterilise;
				//echo $date_naissance;
				//echo $date_entree;
				//echo " box : ".$box;
				echo "</BR>";
				
				inserer_donnees($id_listing,$nom,$date_naissance,$date_entree,$sexe,$sterilise,$box);
			}
		/*on ajoute +13 à $i pour passer à l'id suivant*/
		$i++;
		$i++;
		$i++;
		$i++;
		$i++;
		$i++;
		$i++;
		$i++;
		$i++;
		$i++;
		$i++;
		$i++;
		$i++;
	}
}

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
		<a class="fo" id="block3" href="../Interface/Connexe/ajoutB.php"> Ajouter un bénévole </a>
		<a class="fo" id="block4" class="fo" href="BD.php?synchroniser=true" > Synchroniser </a>

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
		$i++;
		$i++;
		$i++;
		$i++;
		$i++;
		$i++;
		$i++;
		$i++;
		$i++;
		$i++;
		$i++;
		$i++;
		$i++;
	}
			
			while ($ligne = $rep ->fetch()) { 
			if(in_array($ligne["idChien"],$listing_comparaison)){
			echo "<tr>";
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