<html>
	<head>
		<title> Critères </title>
		<link rel="stylesheet" href="style.css" type="text/css" />	
		<link rel="stylesheet" href="home.css" type="text/css" />
		<link rel="stylesheet" href="criteres.css" type="text/css" />	
	</head>
	<?php $bdd = new PDO('mysql:host=localhost;dbname=kitie2;charset=utf8', 'root', 'root'); ?>
	<body>
		<img id="logo" src="spaLogo.png">
		<div id="recherche">
			<input type="text" id="barreRecherche" name="name">
			<br>
			<input type="submit" id="valider" name="name">
		</div>
		<form action=recherche.php" method="post" autocomplete="on">
		<div id="barreCriteres">
			<div id="race">
				<label for="taille">Race</label>
				<select name="taille" id="taille">
				<option value="">Faite un choix</option>
				<?php
					$rep = $bdd->query('select * from races');
					$ligne = $rep->fetch();
						while ($ligne = $rep ->fetch()) {
							echo '<option value="'.$ligne["idRace"].'">'.$ligne["nomRace"].'</option>';
						}
				?>
				</select>
			</div>
			<div>
				<label for="taille">Sexe</label>
				<?php
					$rep2 = $bdd->query('select * from sexe');
					$ligne2 = $rep2->fetch();
						while ($ligne2 = $rep2 ->fetch()) {
							echo '<div> <input type="checkbox" id="'.$ligne2["IdSexe"].'" name="'.$ligne2["IdSexe"].'"checked><label for="'.$ligne2["IdSexe"].'">'.$ligne2["NomSexe"].'</label>
								</div>';
						}
					$rep2 ->closeCursor()
				?>
			</div>
			<div id="couleur">
				<label for="couleur">Couleur</label>
				<select name="couleur" id="couleur">
				<option value="">Faite un choix</option>
				<?php
					$rep3 = $bdd->query('select * from couleur');
					$ligne3 = $rep3->fetch();
						while ($ligne3 = $rep3 ->fetch()) {
							echo '<option value="'.$ligne3["idCouleur"].'">'.$ligne3["nomCouleur"].'</option>';
						}
				?>
				</select>
			</div>		
		</div>
		<input type="submit" id="valider" name="name">
		</form>
	</body>
