<?php session_start() ?>
<?php
include "../bd.php";
$bdd = getBD();
$sexe=$bdd->query("select COUNT(chien.idChien) as nombre, sexe.NomSexe as sexe FROM chien,sexe where chien.idSexe=sexe.IdSexe GROUP BY chien.idSexe");
$couleur=$bdd->query("select COUNT(chien.idChien) as nombre, couleur.nomCouleur as couleur FROM chien,etredecouleur,couleur where chien.idChien=etredecouleur.idChien and etredecouleur.idCouleur=couleur.idCouleur GROUP BY etredecouleur.idCouleur");
$race=$bdd->query("select COUNT(etrerace.idChien) as nombre, races.nomRace from etrerace, races where etrerace.idRace=races.idRace group by races.nomRace ORDER BY `nombre` DESC limit 10 ");
$couleurTab=array();
    while($ligne=$couleur ->fetch()){
      $couleurTab[] = array(
        $ligne['couleur'],
        (int)$ligne['nombre']
      );
    }
$couleur=json_encode($couleurTab);
$sexeTab=array();
$sexeTab[]=array('Sexe','Nombre');
    while($ligne=$sexe ->fetch()){
      $sexeTab[] = array(
        $ligne['sexe'],
        (int)$ligne['nombre']
      );
    }
$sexe=json_encode($sexeTab);
$raceTab=array();
    while($ligne=$race ->fetch()){
      $raceTab[] = array(
        $ligne['nomRace'],
        (int)$ligne['nombre']
      );
    }
$race=json_encode($raceTab);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Benevole</title>
	<link rel="stylesheet" href="../Style/style.css" type="text/css" />
	<link rel="stylesheet" href="../Style/benevole.css" type="text/css" />
	<script type="text/javascript" src="../JavaScript/graphe.js"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

	<!--Création du graphique pour les couleurs-->
	<script type="text/javascript">
		google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);


      // Callback that creates and populates a data table, 
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

      // Create the data table.
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'couleur');
      data.addColumn('number', 'nombre');
      data.addRows(<?php echo $couleur ?>);

      // Set chart options
      var options = {'title':'Répartition des Couleurs',
                     'width':400,
                     'height':300,
                     backgroundColor: { fill:'transparent' }
                 };

      // Instantiate and draw our chart, passing in some options.
      var chart = new google.visualization.PieChart(document.getElementById('couleur'));
      chart.draw(data, options);
    }
	</script>

	<!--Création du graphique pour les sexes -->
	<script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable(<?php echo $sexe ?>);

        var options = {
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>

    <!--Création du graphique pour les races-->

    <script type="text/javascript">
		google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);


      // Callback that creates and populates a data table, 
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

      // Create the data table.
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'race');
      data.addColumn('number', 'nombre');
      data.addRows(<?php echo $race ?>);

      // Set chart options
      var options = {'title':'Répartition des Races',
                     'width':400,
                     'height':300,
                     backgroundColor: { fill:'transparent' }
                 };

      // Instantiate and draw our chart, passing in some options.
      var chart = new google.visualization.PieChart(document.getElementById('races'));
      chart.draw(data, options);
    }
	</script>



</head>
<body>
	<a href="../home.php"><img id="logo" src="../Image/spaLogo.png"></a>
		<?php
		if (empty($_SESSION['prenom'])) {
			echo "<meta http-equiv='refresh' content='1; URL=connexion.php?msg=Merci, de vous connectez !'>";
		}
		$fichier='sexe.json';
		if(file_exists($fichier)){
			unlink($fichier);
		}
		//$fichier='couleur.json';
		//if(file_exists($fichier)){
		//	unlink($fichier);
		//}
// Recupere les donnees pour creation des graphes 
		
		/*$sexeTab=array();
		while($ligne=$sexe ->fetch()){
			$sexeTab[] = array(
				'label' => $ligne['sexe'],
				'value' => $ligne['nombre']
			);
		}
		$Sex=json_encode($sexeTab);
		$nom='sexe.json';
		file_put_contents($nom, $Sex);
		/*$couleurTab=array();
		while($ligne=$couleur ->fetch()){
			$couleurTab[] = array(
				'label' => $ligne['couleur'],
				'value' => $ligne['nombre']
			);
		}
		//$Cou=$couleurTab;
		//$nom='couleur.json';
		//file_put_contents($nom, $Cou);*/
	?>
	<?php
	if($_SESSION["Statut"]==1){
		echo '<div id="head">';
			echo '<a href="ajout-chien.php" target="_blank"> <input id="ajoutChien" class="fo" type="button" type="button" value="Ajouter un chien"></a>';
			echo '<a href="ajoutB.php" target="_blank"> <input id="ajoutBenevole" class="fo" type="button" type="button" value="Ajouter un bénévole"></a>';
		echo '</div>';
	}

	?>
	<?php
	echo '<a href="../PHP/sessionDestruction.php" target="_blank"> <input id="deconnexion" class="fo" type="button" type="button" value="Vous déconnecter, '.$_SESSION["prenom"].'"></a>';
	?>
	<center><a href="../../BD/bd.php" target="_blank"> <input id="Chien" class="fo" type="button" value="Information sur les chiens"> </a></body></center>
	<div id="apercu">
		<?php
		$rep = $bdd->query('SELECT * FROM chien ORDER BY dateEntree DESC ');
		while ($ligne = $rep ->fetch()) {
			echo '<a href="modifier-chien.php?identifiant='.$ligne["idChien"].'"><div class="mesChiens">';
			echo '<p>'.$ligne["nomChien"].'</p>';
			echo '<img class="rond" src="../../BD/photo/'.$ligne["photo"].'"/>';
			echo '</div></a>';
		}
		

		?>
		<div id="espaceGraphe">
			<div id="couleur" style="width:500; height:300" onclick="style('graphe')"></div>
			<div id="races" style="width:400; height:300" onclick="style('graphe')"></div>
			<div id="columnchart_material" style="width: 380px; height: 190px;"></div>
		</div>
</body>
</html>