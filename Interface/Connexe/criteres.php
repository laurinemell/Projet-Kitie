<html>
	<head>
		<title> Critères </title>
		<link rel="stylesheet" href="../Style/style.css" type="text/css" />	
		<link rel="stylesheet" href="../Style/criteres.css" type="text/css" />
		<link rel="stylesheet" media="screen and (max-width: 400px)" href="../Mobile/criteresMCss.css" />

	</head>
	<body>
		<a href="../home.php"><img id="logo" src="../Image/spaLogo.png"></a>
		<?php
		if(isset($_GET["msg"])){
			echo '<center><h1 id="alert">'.$_GET['msg'].'</h1></center>';
		}
		else{
			echo '<center><h1 id="titre">Recherche et critères</h1></center>';
		}
		?>
		<form action="resultats.php" method="get" autocomplete="on">
		<div id="Criteres">
				<div id="Races">
 				<?php
 				include "../bd.php";
				$bdd = getBD();
 				$reponse = $bdd->query('select races.* from etrerace,races where etrerace.idRace=races.idRace group by races.idRace');
 						while ($ligne = $reponse->fetch()) {
                			echo '<tr><td>'.$ligne["nomRace"].'</td>';
                			echo" <td><input type='checkbox' name='races[]' value='".$ligne["idRace"]."'></td>";
                			echo"<br>";
                			echo "</tr>";
                		}
                $reponse ->closeCursor(); 
 				?>
 				</div>
				</select>
				<div id="Couleur">
 				<?php
 				$reponse = $bdd->query('select couleur.* from couleur,etredecouleur where etredecouleur.idCouleur=couleur.idCouleur group by couleur.idCouleur');
 						while ($ligne = $reponse->fetch()) {
                			echo '<tr><td>'.$ligne["nomCouleur"].'</td>';
                			echo" <td><input type='checkbox' name='couleur[]' value='".$ligne['idCouleur']."'></td>";
                			echo"<br>";
                			echo "</tr>";
                		}
                $reponse ->closeCursor(); 
 				?>
 				</div>
				</select>
			<div id="Sexe">
				<?php
				$rep3 = $bdd->query('select * from sexe');
				while ($ligne3 = $rep3 ->fetch()) {
					echo '<INPUT type="checkbox" name="sexe" value="'.$ligne3["IdSexe"].'">'.$ligne3["NomSexe"].'<br/>';
				}
				$rep3->closeCursor();
				?>
			</div>
			<center><button id="valider" class="fo">Valider</button></center>
		</div>


		<div id="imagesAcc">
			<?php
			$photo = $bdd->query('select chien.nomChien,chien.photo,chien.idChien from chien where idTarification=1 and photo!="" order by rand() LIMIT 5');
			while ($ligne = $photo ->fetch()) {
				echo '<a href="ficheChien.php?identifiant='.$ligne["idChien"].'"><img class=rond src="../../BD/photo/'.$ligne["photo"].'"></a>';
			}
			mysql_close($photo);
			?>
		</div>
		</form>
	</body>
