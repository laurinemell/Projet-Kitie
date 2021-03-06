<?php
include "../Interface/bd.php";

// on commence par récupérer les données de la page du listing de la SPA que la directrice nous a donné//
function recuperer_donnees_listing(){
$codesource=file_get_contents('https://340201.refugilys.org/specif/340201/www/chiens.php?APPLI=340201');
preg_match_all("#<td bgcolor=''>.+</td>#",$codesource,$tableau_resultat);
return $tableau_resultat;
}

// cette fonction servira a récupérer uniquement les lettres dans une chaîne de caractère//
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

// on récupère les données de la BD//
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

// cette fonction servira à insérer les données dans la BD//
function inserer_donnees($id,$nom,$date_naissance,$date_entree,$sexe,$sterilise,$box){
	$bdd = getBD();
	$req="INSERT INTO `chien` (`idChien`, `nomChien`, `dateNaissance`, `dateEntree`,`dateSortie`, `idSexe`, `idSterilisation`, `idTarification`,`idMordeur`, `photo`, `description`) VALUES ('".$id."', '".$nom."', '".$date_naissance."', '".$date_entree."', NULL , '".$sexe."', '".$sterilise."', '3','0','default.jpg','')";
	//echo $req;
	$req2="INSERT INTO `loger` (`idBox`, `idChien`, `dateDebut`, `dateFin`) VALUES ('".$box."', '".$id."', '".$date_entree."', NULL)";
	//echo $req2;
	$reponse1=$bdd->query($req);
	$reponse2=$bdd->query($req2);
}

// cette fonction traite d'abord les données récupérées dans le listing car elles ne sont pas comparable telles quelles //
// puis elle compare avec les données de la BD pour décider s'il faut ajouter ces informations dans la BD ou si elles y sont déjà //
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
		// sur mon ordinateur $i+=13; ne fonctionne pas...//
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

?>