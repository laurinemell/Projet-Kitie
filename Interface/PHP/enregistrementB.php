<html>
<head>
<title>Enregistrement</title>

</head>
<?php

function enregistrer($nom, $prenom, $age, $mail, $tel, $idStatut, $sexeHum, $mdp){
	include "../bd.php";
	$bdd = getBD();
	$req="INSERT INTO utilisateur (nom, prenom, age, mail, tel, idStatut, sexeHum, mdp) VALUES ("."'".$_GET['nom']."'".", "."'".$_GET['prenom']."'".", "."'".$_GET['age']."'".",  "."'".$_GET['mail']."'".", "."'".$_GET['tel']."'".","."'".$_GET['statut']."'".","."'".$_GET['sexe']."'".","."'".$_GET['mdp']."'".")";
	$reponse = $bdd->query($req);
	$reponse->closeCursor();	}
?>
<?php


if($_GET['mdp']!= $_GET['mdp1'] || $_GET['mdp']=="" || $_GET['nom']=="" || $_GET['prenom']=="" || $_GET['mail']=="" || $_GET['sexe']==""||$_GET['statut']==""){
	echo "<meta http-equiv='refresh' content='2; URL=../Connexe/bouton-echec.html'>";
}
	
else {
		enregistrer($_GET['nom'],$_GET['prenom'],$_GET['age'],$_GET['mail'],$_GET['tel'],$_GET['statut'],$_GET['sexe'],$_GET['mdp']);
		echo "<meta http-equiv='refresh' content='2; URL=../Connexe/bouton-ajout.php'>";

	}

?> 
</head>
<body>

</body>
</html>