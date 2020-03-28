<html>
	<head>
		<title> Critères </title>
		<link rel="stylesheet" href="../Style/style.css" type="text/css" />	
		<link rel="stylesheet" href="../Style/criteres.css" type="text/css" />
	</head>
	<body>
		<a href="../home.php"><img id="logo" src="../Image/spaLogo.png"></a>
			<center><h1 id="titre">Recherche et critères</h1></center>
		<form action="resultats.php" method="get" autocomplete="on">
		<div id="Criteres">
				<div id="Races">
 				<?php
 				include "../bd.php";
				$bdd = getBD();
 				$reponse = $bdd->query('select * from races');
 						while ($ligne = $reponse->fetch()) {
                			echo '<tr><td>'.$ligne["nomRace"].'</td>';
                			echo" <td><input type='checkbox' name='couleur' value='".$ligne["idRace"]."'></td>";
                			echo"<br>";
                			echo "</tr>";
                		}
                		$ligne->closeCursor;
 				?>
 				</div>
				</select>
				<div id="Couleur">
 				<?php
 				$reponse = $bdd->query('SELECT * FROM couleur');
 						while ($ligne = $reponse->fetch()) {
                			echo '<tr><td>'.$ligne["nomCouleur"].'</td>';
                			echo" <td><input type='checkbox' name='couleur' value='".$ligne['idCouleur']."'></td>";
                			echo"<br>";
                			echo "</tr>";
                		}
 				?>
 				</div>
				</select>
			<div id="Sexe">
				<?php
				$rep3 = $bdd->query('select * from sexe');
				while ($ligne3 = $rep3 ->fetch()) {
					echo '<INPUT type="radio" name="Sexe" value="'.$ligne3["IdSexe"].'">'.$ligne3["NomSexe"].'<br/>';
				}
				$rep3->closeCursor;
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
			?>
		</div>
		</form>
	</body>
