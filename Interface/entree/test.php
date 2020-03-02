<!DOCTYPE html>
<html>
<head>
	<title>test</title>
</head>
<body>
	<table border="3">
	<?php
		$bdd = new PDO('mysql:host=localhost;dbname=kitie2;charset=utf8', 'root', 'root');
		$rep = $bdd->query('select * from chien');
		$ligne = $rep->fetch();
		while ($ligne = $rep ->fetch()) { 
		echo "<tr>";
		//echo"<th>"<a href="article/".$ligne[nom].".html{" > .$ligne["nom"]. </a>"</th>"
		echo "<th>".$ligne["nomChien"]."</th>";
		echo "<th>".$ligne["idChien"]."</th>";
		echo "<th>".$ligne["idSexe"]."</th>";
		echo "<th>".$ligne["idMordeur"]."</th>";
		echo "</th>";
		} 
	$rep ->closeCursor()
		?>
</body>
</html>