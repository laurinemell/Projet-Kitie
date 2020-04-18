<?php
	function getBD(){
		$bdd = new PDO('mysql:host=localhost;dbname=kitie;port=3306','root','root');
		return $bdd;
	}
	function sessionEmploye(){
		if(!isset($_SESSION["Statut"]) or $_SESSION["Statut"]!=1 ){
			echo "<meta http-equiv='refresh' content='0.000001; URL=connexion.php?msg=Merci, de vous connectez !'>";
		}
	}
	function sessionActive(){
		if(!isset($_SESSION["Statut"])){
			echo "<meta http-equiv='refresh' content='0.000001; URL=connexion.php?msg=Merci, de vous connectez !'>";
		}
	}
	function recommandation($idChien){
		/*
		Permet de générer une recommandation de chiens similaires pour un chien donnée, cette fonction compare les similirattés sur la base du mordeur, sexe, tarif et stérilisation.
		Renvois 5 chiens similaires.
		*/
		$bdd=getBD();
		//Récupére les données du chien de référence appelé $idChien.
		$chien=$bdd->query('select chien.idSexe, chien.idSterilisation, chien.idTarification, chien.idMordeur from chien where chien.idChien='.$idChien);
		$chien=$chien->fetch();
		$chien=array($chien['idSexe'],$chien['idSterilisation'],$chien['idTarification'],$chien['idMordeur']);

		//Récupére les données type mordeur, stérilisation, sexe, et tarification.
		$lesChiens=$bdd->query('select chien.idChien, chien.idSexe, chien.idSterilisation, chien.idTarification, chien.idMordeur from chien where chien.idChien!='.$idChien);

		$chiensTab=array();
		while($chiens=$lesChiens->fetch()){
			$chiensTab[]=array($chiens['idChien'],$chiens['idSexe'],$chiens['idSterilisation'],$chiens['idTarification'],$chiens['idMordeur']);
		}
		//Effectue la sommation au carre des valeur du chien de référence.
		$sumXcarre=0;
		for ($i=0; $i < count($chien); $i++) { 
		$sumXcarre+=pow($chien[$i], 2);
		}

		//Calcul de cos entre le chien de référence et les autres chiens du refuge le tout en le conciliant dans une array.
		$cosTab=array();
		$recherche=array();
		for ($i=0; $i < count($chiensTab) ; $i++) { 
			$sumYcarre=0;
			$sumXY=0;
			for ($j=1; $j < count($chiensTab[$i]) ; $j++) {
				$donne=$chiensTab[$i][$j];
				$sumYcarre+=pow($donne,2);
				$sumXY+=$chiensTab[$i][$j]*$chien[$j-1];
			}
			$sumCarre=$sumYcarre*$sumXcarre;
			$sumCarre=sqrt($sumCarre);
			$calcul=$sumXY/$sumCarre;
			$cosTab[]=array($chiensTab[$i][0],$calcul);
			$recherche[]=$calcul;
		}

		//Range la liste recherche du plus grand au plus petit;
		rsort($recherche);
		$listeId=array();
		for ($i=0; $i <5 ; $i++) {
			for ($j=0; $j <count($cosTab); $j++) {
				if ($recherche[$i]==$cosTab[$j][1]) {
					$listeId[]=$cosTab[$j][0];
					unset($recherche[$i]);
					unset($cosTab[$j][1]);
				}	
			}
		}
	return $listeId;
	}
?>