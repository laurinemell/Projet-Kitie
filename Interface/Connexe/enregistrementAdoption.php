<html>
<head>
<title>Enregistrement Adoption</title>

<head>
<?php

function enregistrer($idAdoptant){
	include "../bd.php";
	$bdd = getBD();
	$r="UPDATE `chien` SET `idAdoptant` = '".$_GET['idA']."' WHERE `chien`.`idChien` =".$_GET['identifiant'];
	$rep=$bdd->query($r); 
$req="UPDATE `chien` SET `dateSortie` = '".$_GET['datesortie']."' WHERE `chien`.`idChien` =".$_GET['identifiant'];
	$reponse=$bdd->query($req);
	}
?>
<?php


if($_GET['idA']==""){
	echo "<meta http-equiv='refresh' content='2; URL=selection-identifiant.php'> Vous devez remplir toutes les informations !";
}
	
else {
		enregistrer($_GET['idA']);
		echo "<meta http-equiv='refresh' content='2; URL=../../BD/listing.php'>";


	}

?> 

</head>
<body>

</body>
</html>