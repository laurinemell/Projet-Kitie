<html>
<head>
	<title>Résultats</title>
	<link rel="stylesheet" href="../Style/style.css" type="text/css" />
	<link rel="stylesheet" href="../Style/ficheChien.css" type="text/css" />
</head>
<body>
	<a href="../home.php"><img id="logo" src="../Image/spaLogo.png"></a>

	<?php
	 function age($date) { 
	 	/*
    Titre : Calcul l'age àpartir d'une date de naissance                                                                 
                                                                                                                          
    URL   : https://phpsources.net/code_s.php?id=590
    Auteur           : anakink                                                                                            
    Date édition     : 08 Juin 2010                                                                                                                                
*/
/*---------------------------------------------------------------*/
         $age = date('Y') - $date; 
        if (date('md') < date('md', strtotime($date))) { 
            return $age - 1; 
        } 
        return $age; 
    } 
	include "../bd.php";
	$bdd = getBD();
	$id=$_GET["identifiant"];
	$rep = $bdd->query('select * from chien where idChien='.$_GET["identifiant"]);
	$sexe = $bdd->query('select sexe.NomSexe from chien,sexe where chien.idChien='.$id.' and chien.idSexe=sexe.IdSexe');
	$race = $bdd->query('select races.nomRace from races, etrerace where etrerace.idChien='.$id.' and races.idRace=etrerace.idRace ');
	$prix = $bdd->query('select tarification.tarif from tarification,chien where chien.idTarification=tarification.idTarification and chien.idChien='.$id);
	$etatLegal= $bdd->query('select etatlegal.idCategorie,etatlegal.description from etatlegal,etrerace where etrerace.idCategorie=etatlegal.idCategorie and etrerace.idChien='.$id.' group by etrerace.idCategorie'); 
	$vaccin=$bdd->query('select vaccin.nomVaccin from vaccin,etrevaccine where vaccin.idVaccin=etrevaccine.idVaccin and etrevaccine.idChien='.$id);
	$malade= $bdd->query('select maladie.nomMaladie from maladie,etremalade where maladie.idMaladie=etremalade.idMaladie and etremalade.idChien='.$id);
	$social=$bdd->query('select sociabilite.Note, individu.nomIndividu from sociabilite,individu,etresociable where sociabilite.idSociabilite=etresociable.Appreciation and individu.idIndividu=etresociable.idIndividu and etresociable.idChien='.$id);

	$race=$race->fetch();
	$sexe = $sexe->fetch();
	$prix = $prix->fetch();
	$ligne = $rep->fetch();
	$etat=$etatLegal->fetch();
	echo '<div id=social>';
    echo '<p> Socialité</p>';
    while ($socials=$social->fetch()) {
    	echo '<p>'.$socials['nomIndividu']. ' : '.$socials['Note'].' </p>';
    }
    $social->closeCursor();
    echo '</div>';
    


	$recommandation=recommandation($id);
	echo '<ul id="reco">';
	echo '<p id="pRe">Chiens susceptibles de vous interesser</p>';
	for ($i=0; $i <5 ; $i++) { 
		$photo=$bdd->query('select chien.nomChien, chien.photo,chien.idChien from chien where chien.idChien='.$recommandation[$i]);
		$photo=$photo->fetch();
		echo '<a href="ficheChien.php?identifiant='.$photo['idChien'].'"><li class="chien">';
		echo '<p>'.$photo['nomChien'].'</p>';
		echo '<img class="rond2" src="../../BD/photo/'.$photo['photo'].'">';
		echo '</li></a>';	
	}
	echo '</ul>';

	echo '<img class="rond" src="../../BD/photo/'.$ligne["photo"].'">';
	echo '<div id="chien">';
	echo "<h1 id='titre'>".$ligne["nomChien"]."</h1>";
	echo '<p id="prix">'.$prix['tarif'].' €</p>';
	echo '<p id="iden"> Identifiant : '.$ligne["idChien"].'</p>';
	echo '<p>Age : '.age($ligne['dateNaissance']).' ans</p>';
	echo '<p>Sexe : '.$sexe['NomSexe'].'</p>';
	echo '<p>Race : '.$race['nomRace'].'</p>';
	echo '<p id="cat"> Catégorie : '.$etat['idCategorie'].', '.$etat['description'].'</p>';
	echo '</div>';
	echo '<p id="description"> Description : <br> '.$ligne["description"].'</p>';
	$rep->closeCursor();
	echo '<div id="sante">';
	echo '<p id="carnet"> Carnet de santé : </p>';
	echo '<div id="vaccin">';
	echo '<p>Vaccin.s :</p>';
	while ($vaccins=$vaccin->fetch()) {
		echo '<p>- '.$vaccins['nomVaccin'].'</p>';
    }
    $vaccin->closeCursor();
    echo '</div>';
    echo '<div id="malade">';
    echo '<p>Maladie.s :</p>';
	echo '<ul>';
	while ($malades=$malade->fetch()) {
		echo '<p>'.$malades['nomMaladie'].'</p>';
    }
    echo '</div>';
    echo '</div>';

    


    /*echo '<div id="malade">';
    echo '<p>Maladie.s :</p>';
	echo '<ul>';
	while ($malade=$malade->fetch()) {
		echo '<li>'.$malade['nomMaladie'].'</li>';
    }
    echo'</ul>';
    echo '</div>';
    echo '</div>';

    echo '<div id="social">';
    echo '<ul>';
    echo '<li> Social </li>';
    while ($socialW=$social->fetch()){
    	echo '<li>'.$socialW['nomIndividu'].' : '.$socialW['Note'].'</li>';
    }
    echo '</ul>';
    echo '</div>';*/
	?>
</body>
</html>