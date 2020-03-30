<?php
	function getBD(){
		$bdd= new PDO('mysql:host=localhost;dbname=projetkitie;charset=utf8', 'root', '');
		return $bdd;
	}
?>