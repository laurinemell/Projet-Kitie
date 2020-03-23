<html>
	<head>
		<title> Projet Kitie </title>
		<link rel="stylesheet" href="Style/style.css" type="text/css" />
		<link rel="stylesheet" href="Style/home.css" type="text/css" />	
		<meta name="viewport" content="width=device-width, user-scalable=no">
	</head>
	<body>
		<a href="Connexe/connexion.php"><img id="logo" src="Image/spaLogo.png"></a>
		<center><a href="Connexe/criteres.php"><input id="criteres" type="button" name="Criteres" value="Critères et Recherche"/></a></center>
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
			$photo = $bdd->query('select chien.nomChien,chien.photo,chien.idChien from chien where idTarification=1 and photo!="" order by rand() LIMIT 12');
			while ($ligne = $photo ->fetch()) {
				echo '<a href="Connexe/ficheChien.php?identifiant='.$ligne["idChien"].'"><img class=rond src="../BD/photo/'.$ligne["photo"].'"></a>';
			}
			?>
		</div>
	</body>
</html>