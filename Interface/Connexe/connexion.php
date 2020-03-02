<html>
	<head>
		<title>Connexion</title>
		<link rel="stylesheet" href="../Style/style.css" type="text/css" />
		<style type="text/css">
		.foc{
			/*Défini les boutons oranges*/
 		background-color:#FF8000;
 		border: none;
  		color: white;
  		padding: 16px 60px;
  		text-decoration: none;
  		margin: 4px 2px;
 		cursor: pointer;
 		border-radius: 32px;
 		width: 200px

		}
		div{
	position: relative;
	margin-left: auto;
	margin-right: auto;
	width: 25%;
}
		</style>
	</head>
		<img id="logo" src="../Image/spaLogo.png">
	<body>
		<form action="interface-benevole.php" method="get" autocomplete="on">
		<div>
			<input class="foc" type="text" name="id"value=""  placeholder="Identifiant"/>
			<br>
			<input class="foc" type="password" name="mdp"value="" placeholder="Mot de passe"/>
			<br>
			<input class="fb" type="submit"value="Valider"/>
		</div>
		</form>
	</body>
</html>