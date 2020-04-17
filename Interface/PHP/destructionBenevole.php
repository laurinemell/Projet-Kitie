<?php
include '../bd.php';
$bdd=getBD();
$benevole=$bdd->query('delete from utilisateur where utilisateur.idUtilisateur='.$_GET['identifiant']);
echo '<meta http-equiv="Refresh" content="0; url=../Connexe/navigationBenevole.php" />';
?>