<?php session_start()?>
<html>
<head>
	<title>php</title>
</head>
<style type="text/css">
	html{
		background-color: red;
	}
</style>
<body>
	<?php
	$nom = $_GET["id"];
	$mdp = $_GET["mdp"];
	if(isset($_GET["valider"])){
		include "../bd.php";
		$bdd = getBD();
		$rep = $bdd->query('select * from utilisateur where mdp="'.$_GET["mdp"].'" and mail="'.$_GET["id"].'"');
		$data = $rep ->fetch();
		echo "Session créée";
			if(!empty($data)){
				$_SESSION["id"] = $data["idUtilisateur"];
				$_SESSION["nom"] = $data["nom"];
				$_SESSION["prenom"] = $data["prenom"];
				$_SESSION["Statu"] = $data["idStatu"];
				echo "<meta http-equiv='refresh' content='1; URL=../home.php?id=".$_GET['id']."'>";
			}
			else{
				echo "<meta http-equiv='refresh' content='1; URL=../Connexe/connexion.php?msg='Attention, identifiant incorrects '>";
			}
	}
	else{
		echo "<meta http-equiv='refresh' content='1; URL=../Connexe/connexion.php?msg=Merci de ne pas rentrer sur le site de manière illicite !'>";
	}
	$rep ->closeCursor();
	?>

</body>
</html>