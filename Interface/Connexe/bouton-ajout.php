<html>
<head>
<link rel="stylesheet" href="style.css" type="text/css"/>
<title>Bouton echec</title>
<style>
	background-color: whitesmoke;
	img {
  		width: inherit;
  		height: inherit;
  		border-radius: inherit;
	}

/* Bonus : keep aspect-ratio */ 
	img {
  		object-fit: cover;
  		object-position: right center;
	}

/* Bonus : effect on :hover */
	img {
  		transition: object-position .25s;
	}
	img:hover {
  		object-position: center;
	}
	.bouton{
		width: 100%;
		text-align: center;
		height: 100%
	}
	.bouton_img{
		top: 50%;
		transform: translateY(-50%);
		position: relative;
		height: 200px;
	}
</style>
</head>
<body>
<div class="bouton">
	<a href="benevole.php"><img id="logo" src="../Image/Ajoute.png" class="bouton_img"></a>
</div>
</body>
</html>