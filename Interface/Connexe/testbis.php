<!DOCTYPE html>
<html>
<head>
	<title>Test Recommendation</title>
	<style type="text/css">
		html{
			background-color: red;
		}
	</style>
</head>
<body>
	<?php
	include '../bd.php';
	$bdd=getBD();
	$chien=$bdd->query('select chien.idSexe, chien.idSterilisation, chien.idTarification, chien.idMordeur from chien where chien.idChien=500561547');
	$chien=$chien->fetch();
	$chien=array($chien['idSexe'],$chien['idSterilisation'],$chien['idTarification'],$chien['idMordeur']);
	$lesChiens=$bdd->query('select chien.idChien, chien.idSexe, chien.idSterilisation, chien.idTarification, chien.idMordeur from chien where chien.idChien!=500561547 ');

	$chiensTab=array();
	while($chiens=$lesChiens->fetch()){
		$chiensTab[]=array(
			$chiens['idChien'],
			$chiens['idSexe'],
			$chiens['idSterilisation'],
			$chiens['idTarification'],
			$chiens['idMordeur']
		);
	}
	$sumXcarre=0;
	for ($i=0; $i < count($chien); $i++) { 
		$sumXcarre+=pow($chien[$i], 2);
	}

	
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
	rsort($recherche);
	$listeId=array();
	for ($i=0; $i <5 ; $i++) {
		for ($j=0; $j <count($cosTab); $j++) {
			if ($recherche[$i]==$cosTab[$j][1]) {
				$listeId[]=$cosTab[$j][0];
				echo '  '.$cosTab[$j][0];
			}	
		}
	}
	for ($i=0; $i <count($listeId) ; $i++) { 
		$photo=$bdd->query('select chien.nomChien, chien.photo from chien where chien.idChien='.$listeId[$i]);
		$photo=$photo->fetch();
		echo '<div>';
		echo $photo['nomChien'];
		echo '<img src="../../BD/photo/'.$photo['photo'].'">';
		echo '</div>';
	}
	?>
</body>
</html>