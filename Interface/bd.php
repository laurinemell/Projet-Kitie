<?php
	function getBD(){
		$bdd = new PDO('mysql:host=localhost;dbname=kitie-projet;port=3306','root','root');
		return $bdd;
	}
	function sessionEmploye(){
		if(!isset($_SESSION["Statut"]) or $_SESSION["Statut"]!=1 ){
			echo "<meta http-equiv='refresh' content='0.000001; URL=connexion.php?msg=Merci, de vous connectez !'>";
		}
	}
	function sessionActive(){
		if(!isset($_SESSION["Statut"])){
			echo "<meta http-equiv='refresh' content='0.000001; URL=connexion.php?msg=Merci, de vous connectez !'>";
		}
	}
?>