<html>
	<head>
		<title>Connexion</title>
		<link rel="stylesheet" href="../Style/style.css" type="text/css" />
		<style type="text/css">
		div{
			margin-left: auto;
			margin-right: auto;
			margin-top: 7em;
			width: 15em;
		}
		p{
			background-color: #f64545;
			border-radius: 5em;
			padding: 0.5em;
			text-align: center;
			color: white;
		}
		</style>
	</head>
	<body>
		<a href="../home.php"><img id="logo" src="../Image/spaLogo.png"></a>
		<form action="../PHP/phpCo.php" method="get" autocomplete="on">
		<div>
			<center><input class="fo" type="text" name="id"value=""  placeholder="Identifiant"/></center>
			<br>
			<center><input class="fo" type="password" name="mdp"value="" placeholder="Mot de passe"/></center>
			<br>
			<center><button class="fb" name="valider">Valider</button></center>
			<?php
			if (!empty($_GET['msg'])) {
				echo "<p>".$_GET['msg']."</p>";
			}
			?>
		</div>
		</form>
	</body>
</html>