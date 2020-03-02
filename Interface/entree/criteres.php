<html>
	<head>
		<title> Critères </title>
		<link rel="stylesheet" href="style.css" type="text/css" />	
		<link rel="stylesheet" href="home.css" type="text/css" />
		<link rel="stylesheet" href="criteres.css" type="text/css" />	
	</head>
	<body>
		<img id="logo" src="spaLogo.png">
		<div id="recherche">
			<input type="text" id="barreRecherche" name="name">
			<br>
			<input type="submit" id="valider" name="name">
		</div>
		<div id="barreCriteres">
			<label for="taille">Taille</label>
			<select name="taille" id="taille">
			<option value="">Choix d'une taille</option>
			<?php
			$bdd = new PDO('mysql:host=localhost;dbname=kitie2;charset=utf8', 'root', 'root');
			$rep = $bdd->query('select * from races');
			$ligne = $rep->fetch();
			while ($ligne = $rep ->fetch()) { 
				echo "<option value=".$ligne["idRace"].">.$ligne["nomRace"].</option>";
			} 
		$rep ->closeCursor()
		?>	
			</select>
		</div>
			
		</div>
	</body>
