<html>
<head>
<title>Enregistrement</title>
<link rel="stylesheet" href="styles/style2.css" type="text/css" media="screen" />

<?php

/* on devrait peut-être demander de confirmer le mot de passe ? */

function enregistrer($nom,$prenom,$id,$mdp,$statut,$sexeH){
/* ajoutAnimal et modifierAnimal ne servent à rien puisque dans la BD le statut enmployé donne le droit de tout modifier et le statut benevole donne le froit de lecture */
/* les boutons du formulaire "benevole" et "employé" ne font rien apparemment quand on clique dessus */
	$bdd = new PDO('mysql:host=localhost:8889;dbname=projet_kitie;charset=utf8',
'root', 'root');
/*Demande-t-on à l'utilisateur de choisir son id ? Ou on peut faire une auto incrémentation*/

	/* pour que le if suivant fonctionne il faut passer le type de benevole et employe en radio et l'appeler statut (une seule variable comme genre) */
	if($statut=="benevole"){
	$idStatut=2;	
	}	
	else if($statut="employé"){
	$idStatut=1;	
	}
	else{
	echo "Nous n'avons pas pu déterminer quel est votre statut"
	}
	
	$req="INSERT INTO `utilisateur` (`idUtilisateur`,`nom`, `prenom`,'mdp', `idStatut`, `sexeHum`) VALUES ('".$nom."'".","."'".$prenom."'".", "."'".$id."'".", "."'".$mdp."'".", ".$idStatut.", "."'".$sexeH."')";
	echo $req;
	$reponse = $bdd->query($req);
	$reponse->closeCursor();
}

/* le if suivant renvoie à la page du formulaire avec le nom prenom et l'id remplis si un des paramètres n'est pas rempli */
if($_GET['nom']==""||$_GET['prenom']==""||$_GET['id']==""||$_GET['mdp']==""||$_GET['statut']==""[[$_GET['SexeH']==""){
echo "<meta http-equiv='refresh' content='2; URL=nouveau.php?nom=".$_GET['nom']."&prenom=".$_GET['prenom']."&id=".$_GET['id']."'>";
}
else{
enregistrer($_GET['nom'],$_GET['prenom'],$_GET['id'],$_GET['mdp'],$_GET['satut'],$_GET['sexeH']);
echo "<meta http-equiv='refresh' content='2; URL=bouton-ajout.php'>";
}

?>
</head>
<body>

</body>
</html>
