<html>
<head>
<title>Enregistrement</title>

</head>
<?php

function enregistrer($nom, $prenom, $age, $mail, $tel, $cp, $sexeHum){
	include "../bd.php";
	$bdd = getBD();
	$r="INSERT INTO adoptant (nom, prenom, age, mail, tel, codePostal, sexe) VALUES ("."'".$_GET['nom']."'".", "."'".$_GET['prenom']."'".", "."'".$_GET['age']."'".",  "."'".$_GET['mail']."'".", "."'".$_GET['tel']."'".","."'".$_GET['cp']."'".","."'".$_GET['sexe']."'".")";
	$rep=$bdd->query($r); 

	}
?>
<?php


if($_GET['nom']=="" || $_GET['prenom']=="" || $_GET['mail']=="" || $_GET['sexe']==""){
	echo "<meta http-equiv='refresh' content='2; URL=../Connexe/bouton-echec.html'>";
}
	
else {
		enregistrer($_GET['nom'],$_GET['prenom'],$_GET['age'],$_GET['mail'],$_GET['tel'],$_GET['cp'],$_GET['sexe']);
		echo "<meta http-equiv='refresh' content='2; URL=../Connexe/bouton-ajout.php'>";


	}

?> 
</head>
<body>

</body>
</html>