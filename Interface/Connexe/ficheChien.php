<html>
<head>
	<title>Résultats</title>
	<link rel="stylesheet" href="../Style/style.css" type="text/css" />
	<link rel="stylesheet" href="../Style/ficheChien.css" type="text/css" />
</head>
<body>
	<a href="../home.php"><img id="logo" src="../Image/spaLogo.png"></a>
	<?php
	include "../bd.php";
	$bdd = getBD();
	$rep = $bdd->query('select * from chien where idChien='.$_GET["identifiant"]);
	$sexe = $bdd->query('select sexe.NomSexe from chien,sexe where chien.idChien='.$_GET["identifiant"].' and chien.idSexe=sexe.IdSexe');
	$race = $bdd->query('select races.nomRace from races, etrerace where etrerace.idChien='.$_GET["identifiant"].' and races.idRace=etrerace.idRace ');
	$race=$race->fetch();
	$sexe = $sexe->fetch();
	$ligne = $rep->fetch();
	echo '<div id="chien">';
	echo "<h1 id='titre'>".$ligne["nomChien"]."</h1>";
	echo '<p> Identifiant : '.$ligne["idChien"].'</p>';
	echo '<img class="rond" src="../../BD/photo/'.$ligne["photo"].'">';
	echo '<p>Sexe : '.$sexe['NomSexe'].'</p>';
	echo '<p>Race : '.$race['nomRace'].'</p>';
	echo '</div>';
	?>
</body>
</html>