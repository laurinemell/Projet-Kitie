<html>
<head>
<title>Enregistrement</title>

</head>
<?php

function enregistrer($nom, $prenom, $age, $mail, $tel, $idStatut, $sexeHum, $mdp){
	$bdd = new PDO('mysql:host=localhost;dbname=projet_kitie;charset=utf8', 'root', '');
	$r="INSERT INTO utilisateur (nom, prenom, age, mail, tel, idStatut, sexeHum, mdp) VALUES ("."'".$_GET['nom']."'".", "."'".$_GET['prenom']."'".", "."'".$_GET['age']."'".",  "."'".$_GET['mail']."'".", "."'".$_GET['tel']."'".", "."'".$idStatut."'".","."'".$sexeHum."'".","."'".$_GET['mdp']."'".")";
	$rep=$bdd->query($r); 
	}
?>
<?php
function statut($statut){
	if($_GET['statut']=="employe"){
		$idStatut=1;
	}
	else{
		$idStatut=0;
	}
}

function sexeHum($genre){
	if($_GET['genre']=="M"){
		$sexeHum=0;
	}
	else{
		$sexeHum=1;
	}
}


if($_GET['mdp']!= $_GET['mdp1'] || $_GET['mdp']=="" || $_GET['nom']=="" || $_GET['prenom']=="" || $_GET['mail']=="" || $_GET['genre']==""||$_GET['statut']==""){
	echo "<meta http-equiv='refresh' content='2; URL=../Connexe/bouton-echec.html'>";
	echo "<meta http-equiv='refresh' content='2; URL=../Connexe/ajoutB.php'>";
}
	
else {
		statut($_GET['statut']);
		sexeHum($_GET['genre']);
		enregistrer($_GET['nom'],$_GET['prenom'],$_GET['age'],$_GET['mail'],$_GET['tel'],$idStatut,$sexeHum,$_GET['mdp']);
		echo "<meta http-equiv='refresh' content='2; URL=../Connexe/bouton-ajout.php'>";

	}

?> 
</head>
<body>

</body>
</html>