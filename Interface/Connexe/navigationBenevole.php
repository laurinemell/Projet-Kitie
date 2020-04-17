<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<title>Bénévoles</title>
	<link rel="stylesheet" href="../Style/style.css" type="text/css" />
	<link rel="stylesheet" href="../Style/resultats.css" type="text/css" />
</head>
<body>
	<a href="benevole.php"><img id="logo" src="../Image/spaLogo.png"></a>
	<?php
	include "../bd.php";
	$bdd=getBD();
	$benevole=$bdd->query('select * from utilisateur where utilisateur.idUtilisateur!='.$_SESSION["id"]);
	while($ligne = $benevole->fetch()){
		$id=$ligne['idUtilisateur'];
		echo '<a href="ficheBenevole.php?identifiant='.$id.'"><div class="chiens">';
		echo '<p> Nom : '.$ligne['nom'].'</p>';
		echo '<p> Prenom : '.$ligne['prenom'].'</p>';
		echo '<p> Identifiant : '.$id.'</p>';
		echo '<a href="../PHP/destructionBenevole.php?identifiant='.$id.'" target="_blank"> <input class="fb" type="button" type="button" value="Supprimer">';
		echo '</div></a>';
	}
	?>

</body>
</html>