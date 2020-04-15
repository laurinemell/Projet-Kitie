<html>
<head>
<title>Enregistrement</title>

<?php
//dans cette page, on vérifie pour chaque attribut s'il a été saisi et on modifie si c'est le cas//

//il faut que l'identifiant soit sélectionné pour pouvoir modifier le chien//
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
	//echo $req;
	$rep=$bdd->query($req);
	$rep->closeCursor();
	echo "Le tarif a été mis à jour"."</BR>";
	}

if(isset($_GET['mordeur'])){
	$req="UPDATE `chien` SET `idMordeur` = '".$_GET['mordeur']."' WHERE `chien`.`idChien` =".$_GET['identifiant'];
	//echo $req;
	$rep=$bdd->query($req);
	$rep->closeCursor();
	echo "L'évaluation mordeur a été mise à jour"."</BR>";
	}

if(isset($_GET['description'])){
	$req="UPDATE `chien` SET `description` = '".$_GET['description']."' WHERE `chien`.`idChien` =".$_GET['identifiant'];
	//echo $req;
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
	

$req11= $bdd->query('select * from etredecouleur WHERE etredecouleur.idChien='.$_GET["identifiant"]);
	 $req11 = $req11->fetch();
	 //print_r($req11);
	
if(isset($_GET['couleur'])){
	if (in_array($_GET['identifiant'], $req11)) {
	$req14="DELETE FROM etredecouleur WHERE idChien=".$_GET['identifiant'];
	$reponse14=$bdd->query($req14);
	}
	foreach ($_GET['couleur'] as $valeur ){
   $req12="INSERT INTO etredecouleur (idChien,idCouleur) VALUES ('".$_GET['identifiant']."','".$valeur."')";
 	$reponse12= $bdd->query($req12);
	$reponse12->closeCursor();
	echo "Les informations concernant les couleurs ont été mises à jour"."</BR>";
	}
	// $reponse14=closeCursor();
	}
	
// $req11->closeCursor();


if(isset($_GET['box'])){
	$req2="UPDATE `loger` SET `idBox` = '".$_GET['box']."' WHERE `loger`.`idChien` =".$_GET['identifiant'];
  	echo $req2."</BR>";
  	$reponse2 = $bdd->query($req2);
	$reponse2->closeCursor();
	echo "Le numéro du box a été mis à jour."."</BR>";
	}
  	

$req5 = $bdd->query('select * from etremalade where etremalade.idChien='.$_GET["identifiant"]);
	 $req5 = $req5->fetch();
	     // print_r($req5);

if(isset($_GET['maladie']) && isset($_GET['datediagnostique'])){
	if (in_array($_GET['identifiant'], $req5)) {
   $req6="UPDATE `etremalade` SET `idMaladie` = '".$_GET['maladie']."',`dateDiagnostique` = '".$_GET['datediagnostique']."' WHERE `etremalade`.`idChien` =".$_GET['identifiant'];
 	$reponse6= $bdd->query($req6);
	$reponse6->closeCursor();
	echo "Les informations concernant la santé ont bien été mises à jour"."</BR>";
	}
else {
	$req7="INSERT INTO etremalade (idMaladie,idChien,dateDiagnostique) VALUES ('".$_GET['maladie']."','".$_GET['identifiant']."','".$_GET['datediagnostique']."')";
 	$reponse7 = $bdd->query($req7);
	// $reponse7->closeCursor();
	echo "Les informations concernant la santé ont bien été saisies"."</BR>";
	}

}
	// $req5->closeCursor();


$req8= $bdd->query('select * from etrevaccine where etrevaccine.idChien='.$_GET["identifiant"]);
	 $req8 = $req8->fetch();
	     // print_r($req8);

if(isset($_GET['vaccin']) && isset($_GET['datevaccin'])){
	if (in_array($_GET['identifiant'], $req8)) {
   $req9="UPDATE `etrevaccine` SET `idVaccin` = '".$_GET['vaccin']."',`dateVaccin` = '".$_GET['datevaccin']."' WHERE `etrevaccine`.`idChien` =".$_GET['identifiant'];
 	$reponse9= $bdd->query($req9);
	$reponse9->closeCursor();
	echo "Les informations concernant le vaccin ont bien été mises à jour"."</BR>";
	}
else {
	$req10="INSERT INTO etrevaccine (idChien,idVaccin,dateVaccin) VALUES ('".$_GET['identifiant']."','".$_GET['vaccin']."','".$_GET['datevaccin']."')";
 	$reponse10 = $bdd->query($req10);
	$reponse10->closeCursor();
	echo "Les informations concernant le vaccin ont bien été saisies"."</BR>";
	}
}

$req11= $bdd->query('select * from etresociable where etresociable.idIndividu=1 and etresociable.idChien='.$_GET["identifiant"]);
	 $req11 = $req11->fetch();

if(isset ($_GET['chien'])){
		if (in_array($_GET['identifiant'], $req11)) {
	$req12="UPDATE `etresociable` SET `Appreciation` = '".$_GET['chien']."' WHERE `etresociable`.`idIndividu`=1 and `etresociable`.`idChien` =".$_GET['identifiant']; 
	$reponse12=$bdd->query($req12);
	// $reponse12->closeCursor();
	echo "La sociabilité avec le chien a été mis à jour"."</BR>";
	}
	else{
		$req13="INSERT INTO etresociable (idChien,idIndividu,Appreciation) VALUES ('".$_GET['identifiant']."',1,'".$_GET['chien']."')";
		$reponse13=$bdd->query($req13);
		// $reponse13=closeCursor();
		echo "Les informations concernant la table etresociable ont été saisies";
	}
}

$req14= $bdd->query('select * from etresociable where etresociable.idIndividu=2 and etresociable.idChien='.$_GET["identifiant"]);
	 $req14 = $req14->fetch();

if(isset ($_GET['chat'])){
		if (in_array($_GET['identifiant'], $req14)) {
	$req15="UPDATE `etresociable` SET `Appreciation` = '".$_GET['chat']."' WHERE `etresociable`.`idIndividu`=2 and `etresociable`.`idChien` =".$_GET['identifiant']; 
	$reponse15=$bdd->query($req15);
	// $reponse15->closeCursor();
	echo "La sociabilité avec le chat a été mis à jour"."</BR>";
	}
	else{
		$req16="INSERT INTO etresociable (idChien,idIndividu,Appreciation) VALUES ('".$_GET['identifiant']."',2,'".$_GET['chat']."')";
		$reponse16=$bdd->query($req16);
		// $reponse16=closeCursor();
		echo "Les informations concernant la table etresociable ont été saisies";
	}
}

$req17= $bdd->query('select * from etresociable where etresociable.idIndividu=3 and etresociable.idChien='.$_GET["identifiant"]);
	 $req17 = $req17->fetch();

if(isset ($_GET['enfant'])){
		if (in_array($_GET['identifiant'], $req17)) {
	$req18="UPDATE `etresociable` SET `Appreciation` = '".$_GET['enfant']."' WHERE `etresociable`.`idIndividu`=3 and `etresociable`.`idChien` =".$_GET['identifiant']; 
	$reponse18=$bdd->query($req18);
	// $reponse18->closeCursor();
	echo "La sociabilité avec l'enfant a été mis à jour"."</BR>";
	}
	else{
		$req19="INSERT INTO etresociable (idChien,idIndividu,Appreciation) VALUES ('".$_GET['identifiant']."',3,'".$_GET['enfant']."')";
		$reponse19=$bdd->query($req19);
		// $reponse19=closeCursor();
		echo "Les informations concernant la table etresociable ont été saisies";
	}
}

$req20= $bdd->query('select * from etrerace where etrerace.idChien='.$_GET["identifiant"]);
	 $req20 = $req20->fetch();

	if(isset($_GET['race']) && isset($_GET['etat']) && isset($_GET['lof'])){
		if (in_array($_GET['identifiant'], $req20)) {
 $req21="UPDATE `etrerace` SET `idRace` = '".$_GET['race']."',`idCategorie` = '".$_GET['etat']."',`idLof` = '".$_GET['lof']."' WHERE `etrerace`.`idChien` =".$_GET['identifiant'];
 	$reponse21 = $bdd->query($req21);
	// $reponse21->closeCursor();
	echo " Les informations concernant la race ont bien été mise à jour.";
 }
	else{
		$req22="INSERT INTO etrerace (idChien,idRace,idCategorie,idLof) VALUES ('".$_GET['identifiant']."','".$_GET['race']."','".$_GET['etat']."','".$_GET['lof']."')";
		$reponse22=$bdd->query($req22);
	echo "Les informations concernant la race ont bien été saisies"."</BR>";
	}
}

} 

// $req8->closeCursor();
echo "<meta http-equiv='refresh' content='2; URL=../../BD/listing.php'>";

?>
</head>
<body>
</body>
</html>