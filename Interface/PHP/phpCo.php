<<<<<<< HEAD
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
		$bdd = getBD(kitie2);
		$rep = $bdd->query('select * from clients where mdp="'.$_GET["mdp"].'" and mail="'.$_GET["id"].'"');
		$data = $rep ->fetch();
			if(!empty($data)){
				$_SESSION["id"] = $data["idUtilisateur"];
				$_SESSION["nom"] = $data["nom"];
				$_SESSION["prenom"] = $data["prenom"];
				$_SESSION["Statu"] = $data["idStatu"];
				echo "<meta http-equiv='refresh' content='1; URL=../index.php?id=".$_GET['id']."'>";
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
=======
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
		$bdd = getBD(kitie2);
		$rep = $bdd->query('select * from clients where mdp="'.$_GET["mdp"].'" and mail="'.$_GET["id"].'"');
		$data = $rep ->fetch();
			if(!empty($data)){
				$_SESSION["id"] = $data["idUtilisateur"];
				$_SESSION["nom"] = $data["nom"];
				$_SESSION["prenom"] = $data["prenom"];
				$_SESSION["Statu"] = $data["idStatu"];
				echo "<meta http-equiv='refresh' content='1; URL=../index.php?id=".$_GET['id']."'>";
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
>>>>>>> 698466118abc3a0a512215be0ae628dddc101d20
</html>