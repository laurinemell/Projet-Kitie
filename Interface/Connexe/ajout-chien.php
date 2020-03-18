<!DOCTYPE html>
<html>
	<head>
	<title>Ajouter un chien</title>
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="ajout-chien.css" type="text/css" />
	</head>
	<img id="logo" src="../Image/spaLogo.png" >
	<body>
	
	<form method="get" action="enregistrement_chien_dans_la_BD.php" autocomplete="off">
		<div id="Formulaire">
			<div id="FormulaireAjout">
<!-- 			<placehorder for="race">Race</placehorder>
 -->			<select class="fo" name="race" id="race">
    			<option>--Choisir une race--</option>
    				<?php
						include "bd.php";
						$bdd = getBD();
 						$reponse = $bdd->query('SELECT * FROM races');
						//$ligne = $reponse->fetch(); ne pas le mettre sinon ça ne prends pas la première donnée
 						while ($ligne = $reponse->fetch()) {
                			echo '<option value="'.$ligne["idRace"].'">'.$ligne["nomRace"].'</option>';
            			}
            ?>
				</select>
			<br>
<!-- <placehorder for="box">Box</placehorder> -->
			<select class="fo" name="box" id="box">
    			<option>--Choisir un box--</option>
    				<?php
 						$reponse = $bdd->query('SELECT * FROM box');
 						while ($ligne = $reponse->fetch()) {
                			echo '<option value="'.$ligne["idBox"].'">'.$ligne["idBox"].'</option>';
            			}
            ?>
				</select>
			<br>
			<label for="dateentree">Date entree</label>
			<input classe="fb" type="date" id="dateentree" name="dateentree"
       				min="2000-01-01" max="2100-12-31">
			<br>
			<br>
			<!-- <label for="couleur">Couleur</label> -->
			<select class="fo" name="couleur" id="couleur">
    			<option>--Choisir une couleur--</option>
    				<?php
						
 						$reponse = $bdd->query('SELECT * FROM couleur');
 						while ($ligne = $reponse->fetch()) {
                			echo '<option value="'.$ligne["idCouleur"].'">'.$ligne["nomCouleur"].'</option>';
            			}
            ?>
				</select>
				
				<br>
				<!-- <placehorder for="mordeur">Evaluation mordeur</placehorder> -->
			<select class="fo" name="mordeur" id="mordeur">
    			<option>--Choisir une évaluation mordeur--</option>
    				<?php
 						$reponse = $bdd->query('SELECT * FROM mordeur');
 						while ($ligne = $reponse->fetch()) {
                			echo '<option value="'.$ligne["idMordeur"].'">'.$ligne["Evaluation"].'</option>';
            			}
            ?>
				</select>
				<br>

    			<!-- <label for="sociable"> Sociabilité </label> -->
			<!-- <select class="fo" name="sociable" id="sociable"> -->
    			<!-- <option value="">--Choisir--</option> -->
    			<!-- <option value="soc1">oui</option> -->
    			<!-- <option value="soc2">non</option> -->
    			<!-- </select> -->
    			<br>
    			<!-- <label for="etat">Etat Légal</label> -->
			<select class="fo" name="etat" id="etat">
    			<option>--Choisir un Etat légal--</option>
    				<?php
 						$reponse = $bdd->query('SELECT * FROM etatlegal');
 						while ($ligne = $reponse->fetch()) {
                			echo '<option value="'.$ligne["idCategorie"].'">'.$ligne["description"].'</option>';
            			}
            ?>
				</select>
			</div>
			
			<div id="FormulaireAjout2">
			<label for="p"> Prenom </label>
			<input class="fo" type="text"name="p"value=""/></a>
			<br>
			<label for="prenom"> Identifiant </label>
			<input class="fo" type="text"name="identifiant"value=""/></a>
			<br>
			<label for="date">Date de naissance</label>
			<input classe="fb" type="date" id="date" name="date"
       				min="2000-01-01" max="2100-12-31">
			<br>
			<br>

<label for="sexe">Sexe</label>
<INPUT type= "radio" name="sexe" value="0"> Male
<br>
<INPUT type= "radio" name="sexe" value="1"> Femelle
				<br>
    			<br>
 					<label for="sterilisation"> Stérilisation </label>
<INPUT type= "radio" name="sterilisation" value="0"> Non
<br>
<INPUT type= "radio" name="sterilisation" value="1"> Oui
				<br>
				<br>
				<label for="lof">LOF</label>


<INPUT type= "radio" name="lof" value="0"> Non
<br>
<INPUT type= "radio" name="lof" value="1"> Oui
				<br>
				<br>
				</div>
			<div id="rondChien" class="rond">
  <img src="../Image/Kitie.jpg" alt="miaou" /> </div>
  <br>
  
  <div id="FormulaireAjout2">

 <label for="vaccin">Vaccin</label>
			<select class="fb" name="vaccin" id="vaccin">
    			<option>--Choisir--</option>
    				<?php
 						$reponse = $bdd->query('SELECT * FROM vaccin');
 						while ($ligne = $reponse->fetch()) {
                			echo '<option value="'.$ligne["idVaccin"].'">'.$ligne["nomVaccin"].'</option>';
            			}
            ?>
    			</select>
			<br>
			<label for="datevaccin">Date du vaccin</label>
			<input classe="fb" type="date" id="datevaccin" name="datevaccin"
       				min="2000-01-01" max="2100-12-31">
       				<br>
			<label for="tarif">Tarification</label>
			<select class="fb" name="tarif" id="tarif">
    			<option>--Choisir--</option>
    				<?php
 						$reponse = $bdd->query('SELECT * FROM tarification');
 						while ($ligne = $reponse->fetch()) {
                			echo '<option value="'.$ligne["idTarification"].'">'.$ligne["tarif"].'</option>';
            			}
            ?>
    			</select>
    			<br>
    		<label for="description"> Description </label>
			<TEXTAREA style="font-family: times new roman"  class="am" rows="10" name="description"></TEXTAREA>
			 <br>
			<br>
			<input id="valider" class="fb" type="submit" name="valider"value="Valider"/>
			</div>
</form>
	</body>
</html>