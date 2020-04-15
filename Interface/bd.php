<?php
	function getBD(){
		$bdd = new PDO('mysql:host=localhost;dbname=projetkitie;port=3306','root','root');
		return $bdd;
	}
	function sessionEmploye(){
		//Cette fonction regarde si une session est active et si l'utlisateur est bénévole elle est alors plus riche en option et plus contraignante.
		if(!isset($_SESSION["Statut"]) or $_SESSION["Statut"]!=1 ){
			echo "<meta http-equiv='refresh' content='0.000001; URL=connexion.php?msg=Merci, de vous connectez !'>";
		}
	}
	function sessionActive(){
		//Cette fonction regarde si une session est active, elle est plus souple.
		if(!isset($_SESSION["Statut"])){
			echo "<meta http-equiv='refresh' content='0.000001; URL=connexion.php?msg=Merci, de vous connectez !'>";
		}
	}
?>