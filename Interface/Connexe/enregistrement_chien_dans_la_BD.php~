<html>
<head>
<title>Enregistrement</title>

</head>
<?php

function enregistrer ($identifiant, $p, $date, $dateentree, $sexe, $sterilisation, $tarif, $mordeur, $box, $couleur, $lof, $vaccin, $datevaccin, $etat, $description) {
include "bd.php";
$bdd = getBD();
 $req=("INSERT INTO chien (idChien,nomChien, dateNaissance, dateEntree, idSexe, idSterilisation, idTarification, idMordeur, description) VALUES ("."'".$_GET['identifiant']."'".","."'".$_GET['p']."'".", "."'".$_GET['date']."'".", "."'".$_GET['dateentree']."'".", ".$_GET['sexe'].", "."'".$_GET['sterilisation']."'".", "."'".$_GET['tarif']."'".","."'".$_GET['mordeur']."'".","."'".$_GET['description']."'".")");

 $req1=("INSERT INTO etredecouleur (idChien,idCouleur) VALUES ("."'".$_GET['identifiant']."'".","."'".$_GET['couleur']."'".")");

 $req2= ("INSERT INTO loger (idBox,idChien) VALUES ("."'".$_GET['box']."'".","."'".$_GET['identifiant']."'".")");

 $req3=("INSERT INTO etrevaccine (idChien,idVaccin,dateVaccin) VALUES ("."'".$_GET['identifiant']."'".","."'".$_GET['vaccin']."'".","."'".$_GET['datevaccin']."'".")");

 $req4=("INSERT INTO etrerace (idChien,idRace,idCategorie,idLof) VALUES ("."'".$_GET['identifiant']."'".","."'".$_GET['race']."'".","."'".$_GET['etat']."'".","."'".$_GET['lof']."'".")");

echo $req;
echo $req1;
echo $req2;
echo $req3;
echo $req4;

$reponse = $bdd->query($req);
$reponse->closeCursor();

$reponse1 = $bdd->query($req1);
$reponse1->closeCursor();

$reponse2 = $bdd->query($req2);
$reponse2->closeCursor();

$reponse3 = $bdd->query($req3);
$reponse3->closeCursor();

$reponse4 = $bdd->query($req4);
$reponse4->closeCursor();
 }

if($_GET['identifiant']==""){

	echo "<meta http-equiv='refresh' content='2; URL=chienxampp.php'>";
}

else{

enregistrer($_GET['identifiant'],$_GET['p'],$_GET['date'],$_GET['dateentree'],$_GET['sexe'],$_GET['sterilisation'],$_GET['tarif'],$_GET['mordeur'],$_GET['description'],$_GET['race'],$_GET['box'],$_GET['couleur'],$_GET['lof'],$_GET['vaccin'],$_GET['datevaccin'],$_GET['etat']);

echo "<meta http-equiv='refresh' content='2; URL=chienxampp.php'>";

}



?>

</head>
<body>


</body>
</html>