<?php
	function getBD(){
		$bdd = new PDO('mysql:host=localhost;dbname=kitie2;port=3306','root','root');
		return $bdd;
	}
?>