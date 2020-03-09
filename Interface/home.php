<html>
	<head>
		<title> Projet Kitie </title>
		<link rel="stylesheet" href="Style/style.css" type="text/css" />
		<link rel="stylesheet" href="Style/home.css" type="text/css" />		
	</head>
	<body>
		<a href="Connexe/connexion.php>"><img id="logo" src="Image/spaLogo.png"></a>
		<div id="recherche">
			<input type="text" id="barreRecherche" name="name">
			<br>
			<center><input type="submit" id="valider" name="name"><img src="Image/recherche.png"></center>

		</div> 
		<div id="interlude">
			<h1> La SPA en quelques mots </h1>
			<p>En 2019 la France 
			est le pays d'Europe avec le plus grand nombre d'abandon 
			d'animaux, la SPA a pour rôle d'accueillir les animaux abandonnés 
			et de leur offrir une nouvelle vie grâce à l'adoption. Cependant, 
			les adoptions ne sont pas toujours réussies et les animaux sont parfois 
			ramenés à la SPA, il est donc important de mettre à disposition des visiteurs, 
			des informations plus précises et adaptées pour des adoptions mieux réussies. 
			C'est ce que nous voulons mettre en place à travers ce projet.  
			</p>
		</div>
		<div id="imagesAcc">
			<?php
				include "bd.php";
				$bdd = getBD();
				$rep = $bdd->query('select * from chien');
				$ligne = $rep->fetch();
				$i=0;
				while ($ligne = $rep ->fetch()&& $i<=9) { 
					echo '<div id=photo'.$i.'class="rond"> <img src="Image/'.$ligne["photo"].'> </div>';
					$i=$i+1;
			} 
			?>
		</div>
	</body>
</html>