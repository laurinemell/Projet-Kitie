<html>
	<head>
		<title> Critères </title>
		<link rel="stylesheet" href="../Style/style.css" type="text/css" />	
		<link rel="stylesheet" href="../Style/criteres.css" type="text/css" />
	</head>
	<body>
		<a href="../home.php"><img id="logo" src="../Image/spaLogo.png"></a>
			<center><h1 id="titre">Recherche et critères</h1></center>
		<form action="resultats.php" method="get" autocomplete="on">
		<div id="Criteres">
				<select name="Race" id="Races">
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
				<select name="Couleur" id="Couleur">
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
			<div id="Sexe">
				<?php
				$rep3 = $bdd->query('select * from sexe');
				while ($ligne3 = $rep3 ->fetch()) {
					echo '<INPUT type="radio" name="Sexe" value="'.$ligne3["IdSexe"].'">'.$ligne3["NomSexe"].'<br/>';
				}
				$rep3->closeCursor;
				?>
			</div>
			<button id="valider" id="valider">Valider</button>
		</div>


		<div id="imagesAcc">
			<?php
			$photo = $bdd->query('select chien.nomChien,chien.photo,chien.idChien from chien where idTarification=1 and photo!="" order by rand() LIMIT 5');
			while ($ligne = $photo ->fetch()) {
				echo '<a href="ficheChien.php?identifiant='.$ligne["idChien"].'"><img class=rond src="../../BD/photo/'.$ligne["photo"].'"></a>';
			}
			?>
		</div>
		</form>
	</body>
