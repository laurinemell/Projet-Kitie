<html>
<head>
<title>Enregistrement</title>

</head>
<?php

function enregistrer($nom, $prenom, $age, $mail, $tel, $cp, $sexeHum){
	$bdd = new PDO('mysql:host=localhost;dbname=projet_kitie;charset=utf8', 'root', '');
	$r="INSERT INTO adoptant (nom, prenom, age, mail, tel, codePostal, sexe) VALUES ("."'".$_GET['nom']."'".", "."'".$_GET['prenom']."'".", "."'".$_GET['age']."'".",  "."'".$_GET['mail']."'".", "."'".$_GET['tel']."'".","."'".$_GET['cp']."'".","."'".$sexeHum."'".")";
	echo $r;
	}
?>
<?php

function sexeHum($genre){
	if($_GET['genre']=="M"){
		$sexeHum=0;
	}
	else{
		$sexeHum=1;
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