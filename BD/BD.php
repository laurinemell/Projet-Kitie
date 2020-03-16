<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css" type="text/css" />
	<title>test</title>
	<style>
*{
	border: 1px red dotted;
}
.fo{
	/*Défini les boutons oranges*/
  background-color:#FEBE7E;
  border: none;
  color: darkgray;
  padding: 16px 50px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 32px;
}
a{
	position: fixed;
	top:0px;
	width: 200px;
	margin-left: auto;
	margin-right: auto;
}
#block1{
	width: 45%;
  margin-right: 50%;
  height: 80px;
}
#block2{
	width: 50%;
	margin-left: 50%;
	margin-top:-80px;
}
img{
	height: 50px;
	width: 50px;
}
	</style>
}
</head>
	<img id="logo" src="spaLogo.png">

<body>
<a class="fo" id="block1" class="fo" href="ajout-chien" > Ajouter ou modifier un chien </a></p>
<a class="fo" id="block2" href="ajout-benevole"> Ajouter un bénévole </a>

	<table border="3">
	<tr>
<th>nomChien</th>
<th>idChien</th>
<th>DateNaissance</th>
<th>Sexe</th>
<th>Stérélisation</th>
<th>Vaccins</th>
<th>Race</th>
<th>Couleurs</th>
<th>Box</th>
<th>Date entrée</th>
<th>Tarif</th>
<th>Lof</th>
<th>Catégorie</th>
<th>Photo</th>

</tr>
<?php
		$bdd = new PDO('mysql:host=localhost;dbname=projet-kitie;charset=utf8', 'root', '');
		$rep = $bdd->query('select chien.nomChien, chien.idChien, chien.dateNaissance, sexe.NomSexe, sterilisation.Etat, vaccin.nomVaccin, races.nomRace, couleur.nomCouleur, box.idBox, chien.dateEntree, tarification.tarif,lof.Lof, etatlegal.description, chien.photo
FROM chien, sexe, sterilisation, vaccin, etrevaccine, races, etrerace, couleur, etredecouleur, box, loger, tarification, etatlegal, Lof
WHERE chien.idSexe=sexe.IdSexe 
	AND sterilisation.idSterilisation=chien.idSterilisation 
	AND vaccin.idVaccin=etrevaccine.idVaccin 
	AND etrevaccine.idChien=chien.idChien 
	AND races.idRace=etrerace.idRace
	AND etredecouleur.idCouleur=couleur.idCouleur 
	AND chien.idChien=etredecouleur.idChien
	AND etrerace.idChien=chien.idChien
	AND loger.idBox=box.idBox 
	AND loger.idChien=chien.idChien
	AND tarification.idTarification=chien.idTarification
	AND lof.idLof=etrerace.idLof
	AND etatlegal.idCategorie=etrerace.idCategorie
GROUP BY (chien.idChien)');
		$ligne = $rep->fetch();
		while ($ligne = $rep ->fetch()) { 
		echo "<tr>";
		echo "<th>".$ligne["nomChien"]."</th>";
		echo "<th>".$ligne["idChien"]."</th>";
		echo "<th>".$ligne["dateNaissance"]."</th>";
		echo "<th>".$ligne["NomSexe"]."</th>";
		echo "<th>".$ligne["Etat"]."</th>";
		echo "<th>".$ligne["nomVaccin"]."</th>";
		echo "<th>".$ligne["nomRace"]."</th>";
		echo "<th>".$ligne["nomCouleur"]."</th>";
		echo "<th>".$ligne["idBox"]."</th>";
		echo "<th>".$ligne["dateEntree"]."</th>";
		echo "<th>".$ligne["tarif"]."</th>";
		echo "<th>".$ligne["Lof"]."</th>";
		echo "<th>".$ligne["description"]."</th>";
		echo "<th>"."<img src='photo/".$ligne["photo"]."' />"."</th>";






		echo "<tr>";

		} 

	$rep ->closeCursor()
		?>
</body>
</html>