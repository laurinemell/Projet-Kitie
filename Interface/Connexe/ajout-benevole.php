<html>
	<head>
	<title>Ajout Bénévole</title>
	<link rel="stylesheet" href="/style.css" type="text/css" />
	<link rel="stylesheet" href="/ajout-benevole.css" type="text/css" />
	</head>
	<body>
		<img id="logo" src="../Image/spaLogo.png">
		<form action="ajout_bouton.php" method="get" autocomplete="off">
		<div id="Formulaire">
			<div id="FormulaireAjout">
			<label for="nom"> Nom </label>
			<input class="fo" type="text"name="nom"value=""/></a>
			<br>
			<label for="prenom"> Prenom </label>
			<input class="fo" type="text"name="prenom"value=""/></a>
			<br>
			<label for="id"> Identifiant </label>
			<input class="fo" type="text"name="id"value=""/></a>
			<br>
			<label for="mdp"> Mot de passe </label>
			<input class="fo" type="text"name="mdp"value=""/></a>
			</div>
			<div id="FormulaireAjout2">
			<p>Droit d'accès</p>
			<input type="checkbox" id="ajoutAnimal" value="True"/>
			<label for="ajoutAnimal"> Ajouter un animal</label>
			<br>
			<input type="checkbox" id="modifierAnimal" value=" True"/>
			<label for="modifierAnimal"> Modifier un animal</label>
			<br>
			<input class="fo" type="button" name="benevole "value="Benevole"/>
			<input class="fo" type="button" name="employe "value="Employé"/>
			<label for="sexeH">Sexe</label>
			<select name="sexeH" id="sexeH">
			<?php
				$bdd = new PDO('mysql:host=localhost;dbname=kitie2;charset=utf8','root','root');
				$rep3 = $bdd->query('select * from sexehumain');
				while ($ligne3 = $rep3 ->fetch()) {
					echo '<option value="'.$ligne3["sexeHum"].'">'.$ligne3["etat"].'</option>';
				}
			?>
			</select>
			</div>
			<input id="val" class="fb" type="submit" name="valider"value="Valider"/>
			<input id="ann" class="fb" type="submit" name="annuler"value="Annuler"/>
		</div>
		</form>
	</body>
</html>