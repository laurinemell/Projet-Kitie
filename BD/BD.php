<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../Interface/Style/style.css" type="text/css" />
	<title>Base de données</title>

</head>
<body>
	<div class="fixed-barre-top">
		<img id="logo" src="../Interface/Image/spaLogo.png">
		<a class="fo" id="block1" class="fo" href="../Interface/Connexe/ajout-chien.php" > Ajouter un chien </a>
		<a class="fo" id="block2" class="fo" href="modif-chien" > Modifier un chien </a>
		<a class="fo" id="block3" href="../Interface/Connexe/ajoutB.php"> Ajouter un bénévole </a>
	</div>
	<div class="fixed-reste">
		<table class="flat-table" border="3">
			<tr>
				<th>Nom</th>
				<th>Id</th>
				<th>Date de naissance</th>
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
			$bdd = new PDO('mysql:host=localhost;dbname=projet_kitie;charset=utf8', 'root', '');
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
			if ($ligne["photo"] == NULL){
				$ligne["photo"] = "default";
			}
			echo "<th>"."<img class='img-chien' src='photo/".$ligne["photo"]."' />"."</th>";
			echo "<tr>";
		} 
		$rep ->closeCursor()
		?>
		</table>
	</div>
</body>
</html>