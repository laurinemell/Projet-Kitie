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
comparer_donnees($listing,$BD);

?>

</head>
<body>

</body>
</html>

