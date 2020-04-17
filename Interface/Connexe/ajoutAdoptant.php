<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../Style/style.css" type="text/css" />
<link rel="stylesheet" href="../Style/ajout-benevole.css" type="text/css" />
<title>Nouveau</title>
</head>
<body>
	<?php
    include "../bd.php";
    session_start();
    sessionEmploye();
    ?>

    <a href="benevole.php"><img id="logo" src="../Image/spaLogo.png"></a>
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
			<?php
				$bdd = getBD();
 				$reponse = $bdd->query('SELECT * FROM sexehumain');
 				while ($ligne = $reponse->fetch()) {
 					echo '<INPUT type="radio" name="sexe" value="'.$ligne["sexeHum"].'">'.$ligne["etat"].'<br/>';
 				}
 			?>
		
			<br/>
		</div>
		<div id="Valider">
			<input id="val" class="fb"  type="submit" name="valider" value="Valider"/>
			<a href="benevole.php" target="_blank"> <input class="fb" type="button" type="button" value="Annuler">

		</div>
	</div>
	


</form>
</body>
</html>