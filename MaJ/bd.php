<html>
<head>
<title>Enregistrement</title>
<link rel="stylesheet" href="styles/style2.css" type="text/css" media="screen" />

<?php
/* Récupérer les données de la page du listing de la SPA */
include "fonctions.php";

$tableau_donnees=recuperer_donnees();
echo "<pre>";
print_r($tableau_donnees[0]);
echo "</pre>";
?>

</head>
<body>

</body>
</html>

