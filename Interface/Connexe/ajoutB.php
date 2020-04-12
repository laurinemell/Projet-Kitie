<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../Style/style.css" type="text/css" />
<link rel="stylesheet" href="../Style/ajout-benevole.css" type="text/css" />
<title>Nouveau</title>
</head>
<body>
	<img id="logo" src="../Image/spaLogo.png">
<form method="get" action="../PHP/enregistrementB.php" autocomplete="on">
	<div id="Formulaire">
		<div id="Identite">
			<input class="fo" type="text"name="nom" value="" placeholder="Nom"/></a>
			<input class="fo" type="text"name="prenom" value="" placeholder="Prenom"/></a>
			<input class="fo" type="number"name="age" value="" placeholder="Age"/></a>
			<input class="fo" type="text" name="tel" value="" placeholder="Numéro de téléphone"/></a>
			<input class="fo" type="text" name="mail" value="" placeholder="e-mail"/></a>
			<input class="fo" type="password"name="mdp"value="" placeholder="Mot de passe"/></a>
			<input class="fo" type="password"name="mdp1"value="" placeholder="Confirmation"/></a>
			
		</div>
		<div id="Droit">
			<br/>
			<strong>Sexe:</strong> <br/>
			<?php
				include "../bd.php";
				$bdd = getBD();
 				$reponse = $bdd->query('SELECT * FROM sexehumain');
 				while ($ligne = $reponse->fetch()) {
 					echo '<INPUT type="radio" name="sexe" value="'.$ligne["sexeHum"].'">'.$ligne["etat"].'<br/>';
 				}
 			?>
		
			<br/>
    			
			<strong>Statut:</strong> <br/>
			<?php
 				$reponse = $bdd->query('SELECT * FROM statut');
 				while ($ligne = $reponse->fetch()) {
 					echo '<INPUT type="radio" name="statut" value="'.$ligne["idStatut"].'">'.$ligne["statut"].'<br/>';
 				}
 			?>
		</div>
		<div id="Valider">
			<input id="val" class="fb"  type="submit" name="valider" value="Valider"/>
			<a id="val" class="fb" href="home.php" > Annuler </a>

		</div>
	</div>
	


</form>
</body>
</html>