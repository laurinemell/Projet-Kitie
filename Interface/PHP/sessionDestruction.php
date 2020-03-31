<?php
	session_start();
	if(isset($_SESSION["nom"])){
		session_destroy();
		echo '<meta http-equiv="Refresh" content="0; url=../home.php" />';
	}
	
	else{
		echo "<meta http-equiv='refresh' content='1; URL=../home.php'>";
	}
?>