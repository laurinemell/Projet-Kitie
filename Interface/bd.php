<?php
	function getBD($bd){
		$bdd = new PDO('mysql:host=localhost;dbname='.$bd.';port=3306','root','root');
		return $bdd;
	}
?>