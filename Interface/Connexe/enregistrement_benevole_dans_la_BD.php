<html>
<head>
<title>Enregistrement</title>
<link rel="stylesheet" href="styles/style2.css" type="text/css" media="screen" />

<?php

function enregistrer($nom,$prenom,$id,$mdp,$ajoutAnimal,$modifierAnimal,$benevole,$employe,$sexeH){
/* ajoutAnimal et modifierAnimal ne servent à rien puisque dans la BD le statut enmployé donne le droit de tout modifier et le statut benevole donne le froit de lecture */
/* les boutons du formulaire "benevole" et "employé" ne font rien apparemment quand on clique dessus */
	$bdd = new PDO('mysql:host=localhost:8889;dbname=projet_kitie;charset=utf8',
'root', 'root');
/*Attention il faut ajouter auto incrementation dans la BD si on veut que ça marche sans saisir l'id à chaque fois et donc enlever le parametre id*/
	$req="INSERT INTO `utilisateur` (`idUtilisateur`,`nom`, `prenom`, `idStatut`, `sexeHum`) VALUES (10,"."'".$n."'".", "."'".$p."'".", "."'".$adr."'".", ".$num.", "."'".$mail."'".", "."'".$mdp."'".")";
	echo $req;
	$reponse = $bdd->query($req);
	$reponse->closeCursor();
}

if($_GET['n']==""||$_GET['p']==""||$_GET['adr']==""||$_GET['mdp1']==""||$_GET['mdp2']==""||$_GET['genre']==""||$_GET['age']==""||$_GET['mdp1']!=$_GET['mdp2']){
echo "<meta http-equiv='refresh' content='2; URL=nouveau.php?n=".$_GET['n']."&p=".$_GET['p']."&adr=".$_GET['adr']."&num=".$_GET['num']."&mail=".$_GET['mail']."&age=".$_GET['age']."'>";
}
else{
enregistrer($_GET['p'],$_GET['n'],$_GET['adr'],$_GET['mail'],$_GET['num'],$_GET['mdp1']);
echo "<meta http-equiv='refresh' content='2; URL=index2.php'>";
}

?>
</head>
<body>
<?php

if(isset($_GET['p'])) {
echo $_GET['p'];
}
else{
echo "Le champ p n’existe pas";
}

echo '<BR>';

if(isset($_GET['n'])) {
echo $_GET['n'];
}
else{
echo "Le champ n n’existe pas";
}

echo '<BR>';

if(isset($_GET['genre'])) {
echo $_GET['genre'];
}
else{
echo "Le champ genre n’existe pas";
}

echo'<BR>';

if(isset($_GET['age'])) {
echo $_GET['age'];
}
else{
echo "Le champ age n’existe pas";
}

echo'<BR>';

if(isset($_GET['adr'])) {
echo $_GET['adr'];
}
else{
echo "Le champ adr n’existe pas";
}

echo '<BR>';

if(isset($_GET['mail'])) {
echo $_GET['mail'];
}
else{
echo "Le champ mail n’existe pas";
}

echo '<BR>';

if(isset($_GET['num'])) {
echo $_GET['num'];
}
else{
echo "Le champ num n’existe pas";
}

echo '<BR>';

if(isset($_GET['mdp1'])) {
echo $_GET['mdp1'];
}
else{
echo "Le champ mdp1 n’existe pas";
}

echo '<BR>';

if(isset($_GET['mdp2'])) {
echo $_GET['mdp2'];
}
else{
echo "Le champ mdp2 n’existe pas";
}
echo $_GET['mdp2'];

?>

</body>
</html>

