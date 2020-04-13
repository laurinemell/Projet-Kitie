<?php
//
include "../bd.php";
$bdd = getBD();

function recommandation($bdd,$idChien,$couleur[],$races[],$sexe){
	$bdd=$bdd;
	$chien=$array($couleur[],races[],$sexe);
	$req='select chien.idChien,chien.idSexe from chien';
	$lesChiens=$bdd->query($req);
	$tabChiens=array();
	$couleur=
	while($ligne=$lesChiens ->fetch()){
		$tabChiens[]=array(
		)
	}

	
	//Calcul de la somme des carre du chien de référence
	$sumXcarre=0;
	for ($i=0; $i <sizeof($chienTab) ; $i++) { 
		$sumXcarre+=$chien[$i];
	}



	//Création du tableau des chiens
	$lesChiensTab=array();
	while($ligne=$lesChiens ->fetch()){
			$lesChiensTab[] = array(
				$ligne['idChien'],
				$ligne['races'],
				$ligne['couleur'],
				$ligne['sexe']
			);
	}


	$i=0
	$cosTab=array();
	$chiffreAgarder=array();
	//Le while permet de passer à la ligne suivante, calcul de cos
	while ( $i <= sizeof($lesChiensTab)) {
		$donnee=array();
		array_push($donnee, $lesChiensTab[$i][0]);
		$sumXY=0;
		$sumYcarre=0;
		for ($j=1; $j < sizeof($lesChiensTab[$i]); $i++) { 
			$sumXY+=$chienTab[$j]*$lesChiensTab[$i][$j];
			$sumYcarre+=pow($lesChiensTab[$i][$j], 2);
		}
		$racine=sqrt($sumXcarre*$sumYcarre);
		$equation=$sumXY/$racine;
		array_push($chiffreAgarder, $equation);
		array_push($donnee, $equation);
		array_push($cosTab, $donnee);
	 }
	 //tablebis qui permet le trie de manières décroissante les valeurs 
	$chiffreAgarder=asort($chiffreAgarder);

	 //Rangement par maximum seule les 5 plus grands cos sont conservé
	$donneeFinal=array();
	 for ($i=0; $i <5; $i++) { 
	 	$chiffreAgarder[$i];
	 	for ($j=0; $j < sizeof($cosTab); $j++) { 
	 		if($chiffreAgarder[$i]=$cosTab[$j][2])
	 			array_push($donneeFinal, $cosTab[$j][1]);
	 			unset($cosTab[$j][2]);
	 	}
	 }
	//retoure l'dentifiant des 5 chiens correspondant le plus
	return $donneeFinal;
?>