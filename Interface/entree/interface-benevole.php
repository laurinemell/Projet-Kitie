<html>

	<head>

	<title>Interface Bénévole</title>

	<link rel="stylesheet" href="kitie.css" type="text/css" />

	</head>

	<img id="logo" src="spaLogo.png">

	<body>
<?php
	$bdd= new PDO('mysql:host=localhost;dbname=kitie2;charset=utf8', 'root', '');
	$bdd=getBD();
?>
<table border="1">

<tr>
<th>chien</th>
<th>adoptant</th>
<th>box</th>
<th>couleur</th>
<th>etatlegal</th>
<th>individu</th>
<th>lof</th>
<th>maladie</th>
<th>mordeur</th>
<th>race</th>
<th>sexe</th>
<th>sexehumain</th>
<th>statut</th>
<th>sterelisation</th>
<th>tarification</th>
<th>utilisateur</th>
<th>vaccin</th>

</tr>
<?php
echo "ooo";
	$reponse = $bdd->query('select * from chien');
	echo $reponse;
?>

</table>
</body>
</html>