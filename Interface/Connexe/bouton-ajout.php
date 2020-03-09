<html>
<head>
<title>Bouton ajout</title>
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
<img src="../Image/Ajoute.PNG" alt="bouton ajout" class="bouton_img">
</div>
</body>
</html>