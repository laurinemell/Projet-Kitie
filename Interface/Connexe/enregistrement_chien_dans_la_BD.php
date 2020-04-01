<html>
<head>
<title>Enregistrement</title>

<?php

if(!isset($_GET['identifiant']) || !isset($_GET['p']) || !isset($_GET['date']) || !isset($_GET['dateentree']) || !isset ($_GET['sexe']) || !isset($_GET['sterilisation']) || !isset ($_GET['tarif']) || !isset($_GET['mordeur']) || !isset($_GET['description'])){
	echo "Vous devez remplir toutes les informations"."</BR>";
	echo "<meta http-equiv='refresh' content='2; URL=ajout-chien.php'>";
}

else{
	include "../bd.php";
	$bdd = getBD();
	
	if(isset($_GET['identifiant']) && isset($_GET['p']) && isset($_GET['date']) && isset($_GET['dateentree']) && isset ($_GET['sexe']) && isset($_GET['sterilisation']) && isset ($_GET['tarif']) && isset($_GET['mordeur']) && isset($_GET['description']) && isset($_GET['photo'])){
 	$req="INSERT INTO chien (idChien,nomChien, dateNaissance, dateEntree, idSexe, idSterilisation, idTarification, idMordeur, description, photo) VALUES ("."'".$_GET['identifiant']."'".","."'".$_GET['p']."'".", "."'".$_GET['date']."'".", "."'".$_GET['dateentree']."'".", ".$_GET['sexe'].", "."'".$_GET['sterilisation']."'".", "."'".$_GET['tarif']."'".","."'".$_GET['mordeur']."'".", "."'".$_GET['description']."'".","."'".$_GET['photo']."')";
	//echo $req."</BR>";
	$reponse = $bdd->query($req);
	$reponse->closeCursor();
	echo "Les informations concernant la table chien ont bien été saisies"."</BR>";
	}
	
if(isset($_GET['couleur'])){
	foreach ($_GET['couleur'] as $valeur ){
 		$req1="INSERT INTO etredecouleur (idChien,idCouleur) VALUES ('".$_GET['identifiant']."','$valeur')"; 	
 		//echo $req1."</BR>";	
 		$reponse1 = $bdd->query($req1);
		$reponse1->closeCursor();
		echo "Les informations concernant la table couleur ont bien été saisies"."</BR>";
	}
	}

if(isset($_GET['box'])){
  	$req2= "INSERT INTO loger (idBox,idChien) VALUES ('".$_GET['box']."','".$_GET['identifiant']."')";
  	//echo $req2."</BR>";
  	$reponse2 = $bdd->query($req2);
	$reponse2->closeCursor();
	echo "Les informations concernant la table loger ont bien été saisies"."</BR>";
	}
  	
if(isset($_GET['vaccin']) && isset($_GET['datevaccin'])){
 	$req3="INSERT INTO etrevaccine (idChien,idVaccin,dateVaccin) VALUES ('".$_GET['identifiant']."','".$_GET['vaccin']."','".$_GET['datevaccin']."')";
 	//echo $req3."</BR>";
 	$reponse3 = $bdd->query($req3);
	$reponse3->closeCursor();
	echo "Les informations concernant la table etrevaccine ont bien été saisies"."</BR>";
	}

if(isset($_GET['race']) && isset($_GET['etat']) && isset($_GET['lof'])){
 	$req4="INSERT INTO etrerace (idChien,idRace,idCategorie,idLof) VALUES ('".$_GET['identifiant']."','".$_GET['race']."','".$_GET['etat']."','".$_GET['lof']."')";
	//echo $req4."</BR>";
	$reponse4 = $bdd->query($req4);
	$reponse4->closeCursor();
	echo "Les informations concernant la table etrerace ont bien été saisies"."</BR>";
	}

//echo "<meta http-equiv='refresh' content='2; URL=chienxampp.php'>";
}


?>
</head>
<body>
</body>
</html>