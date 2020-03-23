<html>
	<head>
		<title> Critères </title>
		<link rel="stylesheet" href="../Style/style.css" type="text/css" />	
		<link rel="stylesheet" href="../Style/criteres.css" type="text/css" />
	</head>
	<body>
		<a href="../home.php"><img id="logo" src="../Image/spaLogo.png"></a>
			<center><input type="search" id="barreRecherche2" name="name"></center>
		<form action=resultats.php" method="get" autocomplete="on">
		<div id="Criteres">
			<div id="Race">
				<label for="Race">Race</label>
				<select name="Race" id="selecteur">
				<option value="">Faite un choix</option>
				<?php
					include "../bd.php";
					$bdd = getBD();
					$rep1 = $bdd->query('select * from races');
					$ligne1 = $rep1->fetch();
						while ($ligne1 = $rep1 ->fetch()) {
							echo '<option value="'.$ligne1["idRace"].'">'.$ligne1["nomRace"].'</option>';
						}
					$rep1->closeCursor;
				?>
				</select>
			</div>
			<div id="Couleur">
				<label for="couleur">Couleur</label>
				<select name="couleur" id="selecteur">
				<option value="">Faite un choix</option>
				<?php
					$rep2 = $bdd->query('select * from couleur');
					$ligne2 = $rep2->fetch();
						while ($ligne2 = $rep2 ->fetch()) {
							echo '<option value="'.$ligne2["idCouleur"].'">'.$ligne2["nomCouleur"].'
							</option>';
						}
					$rep2->closeCursor;
				?>
				</select>
			</div>
			<div id="Sexe">
				
			</div>
		</div>
		<div id="imagesAcc">
			<?php
			$photo = $bdd->query('select chien.nomChien,chien.photo,chien.idChien from chien where idTarification=1 and photo!="" order by rand() LIMIT 5');
			while ($ligne = $photo ->fetch()) {
				echo '<a href="ficheChien.php?identifiant='.$ligne["idChien"].'"><img class=rond src="../../BD/photo/'.$ligne["photo"].'"></a>';
			}
			?>
			<center><button class="fb" name="valider">Valider</button></center>
			<center><bouton id="bouton" type=submit name=action><img src="../Image/recherche.png"></bouton></center>
		</div>
		</form>
	</body>
