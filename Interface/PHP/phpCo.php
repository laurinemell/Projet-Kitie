<?php session_start()?>
<html>
<head>
	<title>Connexion</title>
	<link rel="stylesheet" href="../Style/style.css" type="text/css" />
</head>
<style type="text/css">
	body {
  background: linear-gradient(45deg, #3773C7, #eb984e);
  background-size: 4000% 4000%;
  animation: gradient 2s ease infinite; /*Je l'ai mis plus lent c'est plus joli*/
  margin-left :auto;
  margin-right : auto;
}

@keyframes gradient {
    0% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0% 50%;
    }
}
h1{
	margin-top: 5em;
	margin-left: 5em;
	font-size: 3em;
	color: white;
}
</style>
<body>
	<h1>Patientez . . .</h1>
	<?php
	if(isset($_GET["valider"])){
		include "../bd.php";
		$bdd = getBD();
		$rep = $bdd->query('select * from utilisateur where mdp="'.$_GET["mdp"].'" and mail="'.$_GET["id"].'"');
		$ligne = $rep ->fetch();
		if(!empty($ligne)){
				$_SESSION["id"] = $ligne["idUtilisateur"];
				$_SESSION["nom"] = $ligne["nom"];
				$_SESSION["prenom"] = $ligne["prenom"];
				$_SESSION["Statut"] = $ligne["idStatut"];
				echo "<meta http-equiv='refresh' content='1; URL=../Connexe/benevole.php'>";
		}
		else{
				echo "<meta http-equiv='refresh' content='1; URL=../Connexe/connexion.php?msg=Vérifiez les identifiants'>";
		}
	}
	else{
		echo "<meta http-equiv='refresh' content='1; URL=../Connexe/connexion.php?msg=Merci de ne pas rentrer sur le site de manière illicite !'>";
	}
	$ligne ->closeCursor();
	?>
</body>
</html>