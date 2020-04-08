<!DOCTYPE html>
<html>
<head>
	<title>Projet Kitie</title>
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="stylesheet" href="homeMCss.css" type="text/css" />	
</head>
<body>
	<center><a href="Connexe/connexion.php"><img id="logo" src="Image/spaLogo.png"></a></center>
	<center><input type="search" id="barreRecherche" name="name" placeholder="Recherche et Critères"></center>
	<?php
		include "bd.php";
		$bdd = getBD();
		$rep = $bdd->query('select * from chien');
		$ligne = $rep->fetch();
			$i=0;
		while ($ligne = $rep ->fetch()&& $i<=5) { 
			echo '<div id=photo'.$i.'class="rond"> <img src="Image/'.$ligne["photo"].'> </div>';
			$i=$i+1;
			} 
		?>

</body>
</html>