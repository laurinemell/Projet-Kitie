<?php
function recommandation($idChien,$req){
	include "../bd.php";
	$bdd=getBD();
	$chien='select chien.* from chien where chien.idChien='$idChien;
	$chien=$bdd->query($chien);
	$lesChiens=$bdd->query($req);
	
	//Création de array du chien principal
	array()
	while($ligne1=$chien ->fetch()){
			$lesChiensTab[] = array(
				$ligne['idChien'],
				$ligne['races'],
				$ligne['couleur'],
				$ligne['sexe']
			);
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
	$sumXY=0;
	$sumXcarre=0;
	$sumYcarre=0;
	$resultat=array();
	//Le while permet de passer à la ligne suivante
	while($y<sizeof($lesChiensTab[])){
		$sumXY=0;
		$sumXcarre=0;
		$sumYcarre=0;
		//moyenne de la ligne y
		//$moyenneLigne=array_sum($lesChiensTab[$y])/sizeof($lesChiensTab[$xi]);
		//Calcule de ligne en ligne
		for($x = 1; $x <= sizeof($lesChiensTab[$y]); $x++){
			//moyenne de la colone x
			//$moyenneColone=0;
			//for ($yb=0; $yb <=sizeof($lesChiensTab[]) ; $yb++) { 
			//	$moyenneColone+=$lesChiensTab[$yb][$xi];
			//}
			//Calcul de xi-MoyenneLigne
			$sumXi=$lesChiensTab[y][x]-$moyenneLigne;
			$sumYi=$lesChiensTab[x][y]-$moyenneColone;
			$sumXY+=$sumXi*$sumYi;
			$sumXcarre+=pow(sumXi, 2);
			$sumYcarre+=pow(sumYi, 2);
		}
		$sumBas=sqrt($sumYcarre*$sumXcarre);
		$fomule=$sumXY/$sumBas;
		$resultat[]=array(
			//récupére l'identifiant du chien à comparer
			$lesChiensTab[y][0],
			$formule
		);
	}

?>