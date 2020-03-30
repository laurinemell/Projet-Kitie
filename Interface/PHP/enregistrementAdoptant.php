<html>
<head>
<title>Enregistrement</title>

</head>
<?php

function enregistrer($nom, $prenom, $age, $mail, $tel, $cp, $sexeHum){
	include "bd.php";
	$bdd = getBD();
	$r="INSERT INTO adoptant (nom, prenom, age, mail, tel, codePostal, sexe) VALUES ("."'".$_GET['nom']."'".", "."'".$_GET['prenom']."'".", "."'".$_GET['age']."'".",  "."'".$_GET['mail']."'".", "."'".$_GET['tel']."'".","."'".$_GET['cp']."'".","."'".$sexeHum."'".")";
	$rep=$bdd->query($r); 

	}
?>
<?php

$sexeHum=1;

function sexeHum($genre){
	if($_GET['genre']=="M"){
		$sexeHum=0;
	}
}


if($_GET['nom']=="" || $_GET['prenom']=="" || $_GET['mail']=="" || $_GET['genre']==""){
	echo "<meta http-equiv='refresh' content='2; URL=../Connexe/bouton-echec.html'>";
	echo "<meta http-equiv='refresh' content='2; URL=../Connexe/ajoutAdoptant.php'>";
}
	
else {
		sexeHum($_GET['genre']);
		enregistrer($_GET['nom'],$_GET['prenom'],$_GET['age'],$_GET['mail'],$_GET['tel'],$_GET['tel'],$sexeHum);

	}

?> 
</head>
<body>

</body>
</html>