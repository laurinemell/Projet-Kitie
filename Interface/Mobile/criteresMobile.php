<!DOCTYPE html>
<html>
<head>
	<title>Critères</title>
	<link rel="stylesheet" href="../Style/style.css" type="text/css" />
	<link rel="stylesheet" href="criteresMCss.css" type="text/css" />
	<meta name="viewport" content="width=device-width, user-scalable=no">
</head>
<body>
	<p>Critères</p>
	<div id="Race">
		<label for="taille">Race</label>
		<select name="taille" id="selecteur">
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
		<center><label for="couleur">Couleur</label>
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
		</select></center>
	</div>
</body>
</html>