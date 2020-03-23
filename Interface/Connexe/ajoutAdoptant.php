<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../Style/style.css" type="text/css" />
<link rel="stylesheet" href="../Style/ajout-benevole.css" type="text/css" />
<title>Nouveau</title>
</head>
<body>
	<img id="logo" src="../Image/spaLogo.png">
<form method="get" action="../PHP/enregistrementAdoptant.php" autocomplete="on">
	<div id="Formulaire">
		<div id="Identite">
			<input class="fo" type="text"name="nom" value="" placeholder="Nom"/></a>
			<input class="fo" type="text"name="prenom" value="" placeholder="Prenom"/></a>
			<input class="fo" type="number"name="age" value="" placeholder="Age"/></a>
			<input class="fo" type="number"name="cp" value="" placeholder="Code postal"/></a>
			<input class="fo" type="text" name="tel" value="" placeholder="Numéro de téléphone"/></a>
			<input class="fo" type="text" name="mail" value="" placeholder="e-mail"/></a>
			
		</div>
		<div id="Droit">
			<br/>
			<strong>Sexe:</strong> <br/>
			<INPUT type="radio" name="genre" value="M"> homme <br/>
			<INPUT type="radio" name="genre" value="F"> femme<br/>
			<br/>
		</div>
		<div id="Valider">
			<input id="val" class="fb"  type="submit" name="valider" value="Valider"/>
			<a id="val" class="fb" href="home.php" > Annuler </a>

		</div>
	</div>
	


</form>
</body>
</html>