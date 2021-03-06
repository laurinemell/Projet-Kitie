<html>
<head>
<title>Enregistrement</title>

<?php

// Les informations suivantes doivent être remplies lors de la saisie d'un chien//
if(!isset($_GET['identifiant']) || !isset($_GET['p']) || !isset($_GET['date']) || !isset($_GET['dateentree']) || !isset ($_GET['sexe']) || !isset($_GET['sterilisation']) || !isset ($_GET['tarif']) || !isset($_GET['mordeur']) || !isset($_GET['description'])){
	echo "Vous devez remplir toutes les informations"."</BR>";
	echo "<meta http-equiv='refresh' content='2; URL=ajout-chien.php'>";
}

else{
	include "../bd.php";
	$bdd = getBD();
	
	//si les informations nécessaires et une photo ont été saisies//
	if(isset($_GET['identifiant']) && isset($_GET['p']) && isset($_GET['date']) && isset($_GET['dateentree']) && isset ($_GET['sexe']) && isset($_GET['sterilisation']) && isset ($_GET['tarif']) && isset($_GET['mordeur']) && isset($_GET['description']) && isset($_GET['nomphoto'])){
 	rename("../../BD/photo/".$_GET['nomphoto'],"../../BD/photo/".$_GET['identifiant'].".jpg");
 	//echo $_GET['nomphoto'];
 	//echo $_GET['identifiant'];
 	$req="INSERT INTO chien (idChien,nomChien, dateNaissance, dateEntree, idSexe, idSterilisation, idTarification, idMordeur, description, photo) VALUES ('".$_GET['identifiant']."','".$_GET['p']."', '".$_GET['date']."', '".$_GET['dateentree']."', ".$_GET['sexe'].", '".$_GET['sterilisation']."', '".$_GET['tarif']."','".$_GET['mordeur']."', '".$_GET['description']."','".$_GET['identifiant'].".jpg')";
	//echo $req."</BR>";
	$reponse = $bdd->query($req);
	$reponse->closeCursor();
	echo "Les informations concernant la table chien ont bien été saisies"."</BR>";
	}
	
	//ou si les informations nécessaires ont été saisies mais sans photo//
	elseif(isset($_GET['identifiant']) && isset($_GET['p']) && isset($_GET['date']) && isset($_GET['dateentree']) && isset ($_GET['sexe']) && isset($_GET['sterilisation']) && isset ($_GET['tarif']) && isset($_GET['mordeur']) && isset($_GET['description']) && !isset($_GET['nomphoto'])){
	$req="INSERT INTO chien (idChien,nomChien, dateNaissance, dateEntree, idSexe, idSterilisation, idTarification, idMordeur, description, photo) VALUES ('".$_GET['identifiant']."','".$_GET['p']."', '".$_GET['date']."', '".$_GET['dateentree']."', ".$_GET['sexe'].", '".$_GET['sterilisation']."', '".$_GET['tarif']."','".$_GET['mordeur']."', '".$_GET['description']."','default.jpg')";
	//echo $req."</BR>";
	$reponse = $bdd->query($req);
	$reponse->closeCursor();
	echo "Les informations concernant la table chien ont bien été saisies"."</BR>";
	}
	
//si une ou plusieurs couleurs ont été saisies//
if(isset($_GET['couleur'])){
	foreach ($_GET['couleur'] as $valeur ){
 		$req1="INSERT INTO etredecouleur (idChien,idCouleur) VALUES ('".$_GET['identifiant']."','$valeur')"; 	
 		//echo $req1."</BR>";	
 		$reponse1 = $bdd->query($req1);
		$reponse1->closeCursor();
		echo "Les informations concernant la table couleur ont bien été saisies"."</BR>";
	}
	}

//si un box a été saisi//
if(isset($_GET['box'])){
  	$req2= "INSERT INTO loger (idBox,idChien) VALUES ('".$_GET['box']."','".$_GET['identifiant']."')";
  	//echo $req2."</BR>";
  	$reponse2 = $bdd->query($req2);
	$reponse2->closeCursor();
	echo "Les informations concernant la table loger ont bien été saisies"."</BR>";
	}
  	
//si un vaccin et sa date ont été saisis//
if(isset($_GET['vaccin']) && isset($_GET['datevaccin'])){
 	$req3="INSERT INTO etrevaccine (idChien,idVaccin,dateVaccin) VALUES ('".$_GET['identifiant']."','".$_GET['vaccin']."','".$_GET['datevaccin']."')";
 	//echo $req3."</BR>";
 	$reponse3 = $bdd->query($req3);
	$reponse3->closeCursor();
	echo "Les informations concernant la table etrevaccine ont bien été saisies"."</BR>";
	}

//si les informations concernant la race ont été saisies//
if(isset($_GET['race']) && isset($_GET['etat']) && isset($_GET['lof'])){
 	$req4="INSERT INTO etrerace (idChien,idRace,idCategorie,idLof) VALUES ('".$_GET['identifiant']."','".$_GET['race']."','".$_GET['etat']."','".$_GET['lof']."')";
	//echo $req4."</BR>";
	$reponse4 = $bdd->query($req4);
	$reponse4->closeCursor();
	echo "Les informations concernant la table etrerace ont bien été saisies"."</BR>";
	}
	
//si une ou plusieurs informations concernant la sociabilité ont été saisies//
if(isset($_GET['chien'])){
 	$req5="INSERT INTO etresociable (idChien,idIndividu,Appreciation) VALUES ('".$_GET['identifiant']."',1,'".$_GET['chien']."')";
	$reponse5 = $bdd->query($req5);
	$reponse5->closeCursor();
	echo "Les informations concernant la table etresociable ont bien été saisies"."</BR>";
	}
if(isset($_GET['chat'])){
 	$req6="INSERT INTO etresociable (idChien,idIndividu,Appreciation) VALUES ('".$_GET['identifiant']."',2,'".$_GET['chat']."')";
	$reponse6 = $bdd->query($req6);
	$reponse6->closeCursor();
	echo "Les informations concernant la table etresociable ont bien été saisies"."</BR>";
	}
if(isset($_GET['enfant'])){
 	$req7="INSERT INTO etresociable (idChien,idIndividu,Appreciation) VALUES ('".$_GET['identifiant']."',3,'".$_GET['enfant']."')";
	$reponse7 = $bdd->query($req7);
	$reponse7->closeCursor();
	echo "Les informations concernant la table etresociable ont bien été saisies"."</BR>";
	}
	
//si une maladie et sa date de diagnostique ont été saisies//
if(isset($_GET['maladie']) && isset($_GET['datediagnostique'])){
 	$req8="INSERT INTO etremalade (idMaladie,idChien,dateDiagnostique) VALUES ('".$_GET['maladie']."','".$_GET['identifiant']."','".$_GET['datediagnostique']."')";
 	//echo $req8."</BR>";
 	$reponse8 = $bdd->query($req8);
	$reponse8->closeCursor();
	echo "Les informations concernant la table etremalade ont bien été saisies"."</BR>";
	}
}
echo "<meta http-equiv='refresh' content='2; URL=../../BD/listing.php'>";

?>
</head>
<body>
</body>
</html>