<?php session_start()?>
<html>
<head>
<<<<<<< HEAD
	<title>ajoutBénévole</title>
</head>
<style type="text/css">
	html{
		background-color: pink;
	}
</style>
<body>
	<?php
		if(isset($_GET["valider"])){
			include "../bd.php";
			$bdd = getBD(kitie2);
		}

	?>	
</body>

<?php session_start()?>
<html>
<head>
=======
>>>>>>> 1d721e7650b751b18d4d557a204cbc88c7b1e099
	<title>php</title>
</head>
<style type="text/css">
	html{
		background-color: pink;
	}
</style>
<body>
	<?php
		if(isset($_GET["valider"])){
			include "../bd.php";
			$bdd = getBD(kitie2);
<<<<<<< HEAD
=======
			if($_GET['mdp1']!="" && $_GET['mdp2']!="" && "".$_GET['mdp1'].""=="".$_GET['mdp2'].""){
				
			}
>>>>>>> 1d721e7650b751b18d4d557a204cbc88c7b1e099
		}

	?>	
</body>
</html>