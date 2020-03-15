<html>
	<head>
		<title>Connexion</title>
		<link rel="stylesheet" href="../Style/style.css" type="text/css" />
		<style type="text/css">
		.foc{
			/*Défini les boutons oranges*/
 		background-color:#EB681F;
 		opacity: 0.7;
 		border: none;
  		color: white;
  		padding: 16px 60px;
 		border-radius: 5em;
 		width: 15em;
 		margin-top: 0.5em;
 		text-align: center;
 		}
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
		<a href="../home.php"><img id="logo" src="../Image/spaLogo.png"></a>
	<body>
		<form action="../PHP/phpCo.php" method="get" autocomplete="on">
		<div>
			<center><input class="foc" type="text" name="id"value=""  placeholder="Identifiant"/></center>
			<br>
			<center><input class="foc" type="password" name="mdp"value="" placeholder="Mot de passe"/></center>
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