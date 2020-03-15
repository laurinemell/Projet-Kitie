<<<<<<< HEAD
<?php session_start()?>
<html>
<head>
	<title>php</title>
</head>
<style type="text/css">
	html{
		background-color: pink;
	}
</style>
<body>
	<?php
		if(isset($_GET["valider"])){
			include "../bd.php";
			$bdd = getBD(kitie2);
		}

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
		background-color: pink;
	}
</style>
<body>
	<?php
		if(isset($_GET["valider"])){
			include "../bd.php";
			$bdd = getBD(kitie2);
		}

	?>	
</body>
>>>>>>> 698466118abc3a0a512215be0ae628dddc101d20
</html>