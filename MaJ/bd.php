<html>
<head>
<title>Enregistrement</title>
<link rel="stylesheet" href="styles/style2.css" type="text/css" media="screen" />

<?php
/* Récupérer les données de la page du listing de la SPA */
include "fonctions.php";

$listing=recuperer_donnees_listing();
//echo "<pre>";
//print_r($listing[0]);
//echo "</pre>";

/*Récupérer les données de la BD */
$BD=recuperer_donnees_BD();
//print_r($BD);

/*Comparer les données, si les données n'existent pas alors on les rajoute */
//inserer_donnees($listing,$BD);

$i=10;
$longueur_listing=count($listing[0]); // ajouter /13 si nécessaire//
while ($i<$longueur_listing){		
	$y=0;
	$present=FALSE;
	while($y<count($BD) & $present==FALSE){
		if($listing[0][i]==$BD[y][0]){
			$present=TRUE;
			//echo "identique";
			echo $listing[0][i];
			echo $BD[y][0];
			}
		$y++;
		}
		if($present==FALSE){
			echo "ajouter";
		}
	//on ajoute +13 à $i //
	$i++;
	$i++;
	$i++;
	$i++;
	$i++;
	$i++;
	$i++;
	$i++;
	$i++;
	$i++;
	$i++;
	$i++;
	$i++;
}

echo $listing[0][985]; //10+13//
echo gettype($listing[0][985]);
$id=$listing[0][985];
$id=str_replace(' ','',$id);
echo gettype($BD[7][0]);
echo $BD[7][0];   //premier 0+1//
if($listing[0][985] == $BD[7][0]){
	echo "identique";
}
else{
	echo "different";
}

/* PROBLEMES :
IL FAUT LES 2 ESPACES, j'arrive à en enlever qu'un
LE if($listing[0][i]==$BD[y][0])  NE RECUPERE PAS LES VALEURS, il prend rien, deux riens sont égaux donc affiche identique */
?>

</head>
<body>

</body>
</html>

