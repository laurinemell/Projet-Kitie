<html>
<head>
<title>Enregistrement</title>

<?php

if(!isset($_GET['identifiant'])){
	echo "Vous devez saisir un identifiant"."</BR>";
	echo "<meta http-equiv='refresh' content='2; URL=selection-chien.php'>";
}

else{

	include "../bd.php";
	$bdd = getBD();

if(isset($_GET['p'])){
	$req="UPDATE `chien` SET `nomChien` = '".$_GET['p']."' WHERE `chien`.`idChien` =".$_GET['identifiant'];
	$rep=$bdd->query($req);
	$rep->closeCursor();
	echo "Le prénom a été mis à jour"."</BR>";
	}
	
if(isset($_GET['date'])){
	$req="UPDATE `chien` SET `dateNaissance` = '".$_GET['date']."' WHERE `chien`.`idChien` =".$_GET['identifiant'];
	$rep=$bdd->query($req);
	$rep->closeCursor();
	echo "La date de naissance a été mise à jour"."</BR>";
	}
	
if(isset($_GET['dateentree'])){
	$req="UPDATE `chien` SET `dateEntree` = '".$_GET['dateentree']."' WHERE `chien`.`idChien` =".$_GET['identifiant'];
	$rep=$bdd->query($req);
	$rep->closeCursor();
	echo "La date d'entrée a été mise à jour"."</BR>";
	}
	
if(isset($_GET['datesortie'])){
	$req="UPDATE `chien` SET `dateSortie` = '".$_GET['datesortie']."' WHERE `chien`.`idChien` =".$_GET['identifiant'];
	$rep=$bdd->query($req);
	$rep->closeCursor();
	echo "La date de sortie a été mise à jour"."</BR>";
	}

if(isset ($_GET['sexe'])){
	$req="UPDATE `chien` SET `idSexe` = '".$_GET['sexe']."' WHERE `chien`.`idChien` =".$_GET['identifiant'];
	$rep=$bdd->query($req);
	$rep->closeCursor();
	echo "Le sexe a été mis à jour"."</BR>";
	}

if(isset($_GET['sterilisation'])){
	$req="UPDATE `chien` SET `idSterilisation` = '".$_GET['sterilisation']."' WHERE `chien`.`idChien` =".$_GET['identifiant'];
	$rep=$bdd->query($req);
	$rep->closeCursor();
	echo "La stérilisation a été mise à jour"."</BR>";
	}
	
if(isset ($_GET['tarif'])){
	$req="UPDATE `chien` SET `idTarification` = '".$_GET['tarif']."' WHERE `chien`.`idChien` =".$_GET['identifiant'];
	// echo $req;
	$rep=$bdd->query($req);
	$rep->closeCursor();
	echo "Le tarif a été mis à jour"."</BR>";
	}

if(isset($_GET['mordeur'])){
	$req="UPDATE `chien` SET `idMordeur` = '".$_GET['mordeur']."' WHERE `chien`.`idChien` =".$_GET['identifiant'];
	echo $req;
	$rep=$bdd->query($req);
	$rep->closeCursor();
	echo "L'évaluation mordeur a été mise à jour"."</BR>";
	}

if(isset($_GET['description'])){
	$req="UPDATE `chien` SET `description` = '".$_GET['description']."' WHERE `chien`.`idChien` =".$_GET['identifiant'];
	echo $req;
	$rep=$bdd->query($req);
	$rep->closeCursor();
	echo "La description a été mise à jour"."</BR>";
	}

if(isset($_GET['nomphoto'])){
	rename("../../BD/photo/".$_GET['nomphoto'],"../../BD/photo/".$_GET['identifiant'].".jpg");
 	//echo $_GET['nomphoto'];
 	//echo $_GET['identifiant'];
	$req="UPDATE `chien` SET `photo` = '".$_GET['identifiant'].".jpg' WHERE `chien`.`idChien` =".$_GET['identifiant'];
	echo $req;
	$rep=$bdd->query($req);
	$rep->closeCursor();
	echo "La photo a été mise à jour"."</BR>";
	}


	
if(isset($_GET['couleur'])){
	foreach ($_GET['couleur'] as $valeur ){
		$req1="UPDATE `etredecouleur` SET `idCouleur` = '$valeur' WHERE `etredecouleur`.`idChien` =".$_GET['identifiant'];
 		//echo $req1."</BR>";	
 		$reponse1 = $bdd->query($req1);
		$reponse1->closeCursor();
		echo "Les informations concernant les couleurs ont été mises à jour."."</BR>";
	}
	}

if(isset($_GET['box'])){
	$req2="UPDATE `loger` SET `idBox` = '".$_GET['box']."' WHERE `loger`.`idChien` =".$_GET['identifiant'];
  	//echo $req2."</BR>";
  	$reponse2 = $bdd->query($req2);
	$reponse2->closeCursor();
	echo "Le numéro du box a été mis à jour."."</BR>";
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