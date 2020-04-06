<?php
	function getBD(){
		//$bdd= new PDO('mysql:host=localhost;dbname=projetkitie;charset=utf8', 'root', '');
		
		//Laurine :
		$bdd= new PDO('mysql:host=localhost:8889;dbname=projetkitie;charset=utf8','root', 'root');
		return $bdd;
	}
?>