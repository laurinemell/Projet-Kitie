<html>
	<head>
	<title>Ajout Bénévole</title>
	<link rel="stylesheet" href="../Style/style.css" type="text/css" />
	<link rel="stylesheet" href="../Style/ajout-benevole.css" type="text/css" />
	</head>
	<body>
		<img id="logo" src="../Image/spaLogo.png">
		<form action="ajout_bouton.php" method="get" autocomplete="off">
		<div id="Formulaire">
			<div id="Identite">
			<input class="fo" type="text"name="nom"value="" placeholder="Nom"/></a>
			<input class="fo" type="text"name="prenom"value="" placeholder="Prenom"/></a>
			<input class="fo" type="text"name="mdp"value="" placeholder="Mot de passe"/></a>
			<input class="fo" type="text"name="id"value="" placeholder="Confirmation"/></a>
			</div>
			<div id="Droit">
			<p>Droit d'accès</p>
			<input type="checkbox" id="ajoutAnimal" value="True"/>
			<label for="ajoutAnimal"> Ajouter un animal</label>
			<input type="checkbox" id="modifierAnimal" value=" True"/>
			<?php $bdd = new PDO('mysql:host=localhost;dbname=kitie2;charset=utf8','root','root');?>
			<label name="droitAnimal"></label>
			<select name="droitAnimal" id="selecteur">
			<?php
				$rep1=$bdd->query('select * from statut');
				while ($ligne1 = $rep1 ->fetch()){
					echo '<option value="'.$ligne1["idStatut"].'">'.$ligne1["statut"].'</option>';
				}
			?>
			<label for="modifierAnimal"> Modifier un animal</label>
			<label for="sexeH">Sexe</label>
			<select name="sexeH" id="selecteur">
			<?php
				$rep2 = $bdd->query('select * from sexehumain');
				while ($ligne2 = $rep2 ->fetch()) {
					echo '<option value="'.$ligne2["sexeHum"].'">'.$ligne2["etat"].'</option>';
				}
			?>
			</select>
			</div>
			<div id="Valider">
			<input id="val" class="fb" type="submit" name="valider"value="Valider"/>
			<input id="ann" class="fb" type="submit" name="annuler"value="Annuler"/>
			</div>
		</div>
		</form>
	</body>
</html>