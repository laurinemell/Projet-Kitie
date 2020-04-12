<?php
    include "../bd.php";
    $bdd = getBD();
    $rep = $bdd->query('select * from chien where idChien='.$_GET["identifiant"]);
    $sexe = $bdd->query('select sexe.NomSexe from chien,sexe where chien.idChien='.$_GET["identifiant"].' and chien.idSexe=sexe.IdSexe');
    $race = $bdd->query('select races.nomRace from races, etrerace where etrerace.idChien='.$_GET["identifiant"].' and races.idRace=etrerace.idRace ');
    $box = $bdd->query('select box.idBox from box, loger where loger.idChien='.$_GET["identifiant"].' and box.idBox=loger.idBox');
    $couleur = $bdd->query('select couleur.nomCouleur from couleur, etredecouleur where etredecouleur.idChien='.$_GET["identifiant"].' and couleur.idCouleur=etredecouleur.idCouleur ');
    $mordeur = $bdd->query('select mordeur.Evaluation from mordeur, chien where chien.idChien='.$_GET["identifiant"].' and chien.idMordeur=mordeur.idMordeur ');
    $etat = $bdd->query('select etatlegal.description from etatlegal, etrerace where etrerace.idChien='.$_GET["identifiant"].' and etrerace.idCategorie=etatlegal.idCategorie ');
    $etat1 = $bdd->query('select * from etrerace where idChien='.$_GET["identifiant"]);
    $sterilisation = $bdd->query('select sterilisation.Etat from sterilisation, chien where chien.idChien='.$_GET["identifiant"].' and sterilisation.idSterilisation=chien.idSterilisation ');
    $lof = $bdd->query('select lof.Lof from lof, etrerace where etrerace.idChien='.$_GET["identifiant"].' and etrerace.idLof=lof.idLof ');
    $vaccin = $bdd->query('select vaccin.nomVaccin from vaccin, etrevaccine where etrevaccine.idChien='.$_GET["identifiant"].' and etrevaccine.idVaccin=vaccin.idVaccin');
    $vaccin1 = $bdd->query('select * from etrevaccine where idChien='.$_GET["identifiant"]);

    $datevaccin = $bdd->query('select etrevaccine.dateVaccin from etrevaccine where etrevaccine.idChien='.$_GET["identifiant"].'');
    $tarification = $bdd->query('select tarification.tarif from tarification, chien where chien.idChien='.$_GET["identifiant"].' and tarification.idTarification=chien.idTarification');
    // $sociabilite =$bdd->query('select individu.nomIndividu, etresociable.Appreciation from individu,etresociable where etresociable.idChien='.$_GET["identifiant"].' and etresociable.idIndividu=individu.idIndividu');
     $maladie = $bdd->query('select etremalade.idMaladie,maladie.nomMaladie from maladie, etremalade where etremalade.idChien='.$_GET["identifiant"].' and etremalade.idMaladie=maladie.idMaladie');
     $maladie1= $bdd->query('select * from etremalade where idChien='.$_GET["identifiant"]);   
       $datediagnostique = $bdd->query('select etremalade.dateDiagnostique from etremalade where etremalade.idChien='.$_GET["identifiant"].'');
    $race=$race->fetch();
    $sexe = $sexe->fetch();
    $line = $rep->fetch();
    $box= $box->fetch();
    $couleur=$couleur->fetch();
    $mordeur=$mordeur->fetch();
    $etat=$etat->fetch();
    $etat1=$etat1->fetch();
    $sterilisation=$sterilisation->fetch();
    $lof=$lof->fetch();
    $vaccin=$vaccin->fetch();
    $vaccin1=$vaccin1->fetch();
    $datevaccin=$datevaccin->fetch();
    $tarification=$tarification->fetch();
    // $sociabilite=$sociabilite->fetch();
    $maladie=$maladie->fetch();
    $maladie1=$maladie1->fetch();
    $datediagnostique=$datediagnostique->fetch();

    // echo "<p>Prénom : ".$line["nomChien"]."</p>";
    // echo "<p>date entree :".$line["dateEntree"]."</p>";
    // echo '<p id="iden"> Identifiant : '.$line["idChien"].'</p>';
    // echo '<p>Date de Naissance : '.$line['dateNaissance'].'</p>';
    // echo '<p>Sexe : '.$sexe['NomSexe'].'</p>';
    // echo '<p>Race : '.$race['nomRace'].'</p>';
    // echo '<p>Box : '.$box['idBox'].'</p>';
    // echo '<p>id mordeur : '.$mordeur['Evaluation'].'</p>';
    // echo '<p>Couleur : '.$couleur['nomCouleur'].'</p>';
    // echo '<p>etat legal : '.$etat['description'].'</p>';
    // echo '<p>date entree : '.$line['dateEntree'].'</p>';
    // echo '<p>Stérilisation : '.$sterilisation['Etat'].'</p>';
    // echo '<p>LOF : '.$lof['Lof'].'</p>';
    // echo '<p>Vaccin : '.$vaccin['nomVaccin'].'</p>';
    // echo '<p> Date vaccin : '.$datevaccin['dateVaccin'].'</p>';
    // echo '<p> Tarification : '.$tarification['tarif'].'</p>';
    // echo '<p> Description : '.$line["description"].'</p>'
    // echo '<p> Sociabilité : '.$sociabilite["Appreciation"].'</p>';
    // echo '<p> Sociabilité : '.$sociabilite["nomIndividu"].'</p>';
    // echo '<p>Maladie : '.$maladie['nomMaladie'].'</p>';
    // echo '<p>Date diagnostique : '.$datediagnostique['dateDiagnostique'].'</p>';


    ?>
   
   <!DOCTYPE html>
<html>
    <head>
    <title>Modifier un chien</title>
    <link rel="stylesheet" href="../Style/style.css" type="text/css" />
    <link rel="stylesheet" href="../Style/modifer-chien.css" type="text/css" />
    </head>
<div class="fixed-barre-top">
    <a href=".php>"><img id="logo" src="../Image/spaLogo.png"></a>
</div>
    <body>
        <!-- 
          <p> Vous avez choisi de modifier : <?php  echo "<a>".$line["nomChien"]."</a>" ?>
        <br>
            Identifiant : <?php  echo "<p>".$line["idChien"]."</p>" ?> </p> -->
    
    <form method="get" action="modification_chien_dans_la_BD.php" autocomplete="off" enctype=multipart/form-data>
        <div id="FormulaireAjout">
            <select class="fo" name="race" id="race">
                <option><?php  echo "<p>".$race["nomRace"]."</p>"; ?> </option>
                    <?php
                        // include "../bd.php";
                        // $bdd = getBD();
                        $reponse = $bdd->query('SELECT * FROM races');
                        while ($ligne = $reponse->fetch()) {
                            echo '<option value="'.$ligne["idRace"].'">'.$ligne["nomRace"].'</option>';
                        }
            ?>
             </select>
            <br>
            <select class="fo" name="box" id="box">
                <option><?php  echo "<p>".$box["idBox"]."</p>" ?></option>
                    <?php
                        $reponse = $bdd->query('SELECT * FROM box');
                        while ($ligne = $reponse->fetch()) {
                            echo '<option value="'.$ligne["idBox"].'">'.$ligne["idBox"].'</option>';
                        }
            ?>
                </select>
            <br>
            <label for="dateentree">Date entree</label>
            <input classe="fb" type="date" id="dateentree" name="dateentree"
                    min="2000-01-01" max="2100-12-31" value=<?php echo date('Y-m-d',strtotime($line["dateEntree"])) ?>>
            <br>
            <br>
            <label for="datesortie">Date Sortie</label>
            <input classe="fb" type="date" id="datesortie" name="datesortie"
                    min="2000-01-01" max="2100-12-31">
            <br>
            <br>
            <div id="hau">
                <?php  echo "<p>Couleurs : ".$couleur["nomCouleur"]."</p>"; ?>
                <?php
                $reponse = $bdd->query('SELECT * FROM couleur');
                        while ($ligne = $reponse->fetch()) {
                            echo '<tr><td>'.$ligne["nomCouleur"].'</td>';
                    echo" <td><input type='checkbox' name='couleur[]' value='".$ligne['idCouleur']."'></td>";
                    echo"<br>";
                    echo "</tr>";
                }
        ?>
    </div>

                <br>
                 <label class="fo" for="sociable">Sociabilité</label>
                <p>Chien :</p>
                <INPUT type= "radio" name="chien" value="0"> Non
                <br>
                <INPUT type= "radio" name="chien" value="1"> Oui
                 <p>Chat :</p>
                <INPUT type= "radio" name="chat" value="0"> Non
                <br>
                <INPUT type= "radio" name="chat" value="1"> Oui
                <p> Enfant :</p>
                <INPUT type= "radio" name="enfant" value="0"> Non
                <br>
                <INPUT type= "radio" name="enfant" value="1"> Oui
                <br>
                <br>
            </div>
            
            <div id="FormulaireAjout2">
            <label for="p">Prénom</label>
            <input class="fo" type="text"name="p" value=<?php  echo "".$line["nomChien"]."" ?> />
            <br>
            <label for="identifiant"> Identifiant </label>
            <input class="fo" type="text"name="identifiant" value=<?php  echo "".$line["idChien"]."" ?> />
            <br>
             <label for="date">Date de naissance</label>
            <input classe="fb" type="date" id="date" name="date"
                    min="2000-01-01" max="2100-12-31" value=<?php echo date('Y-m-d',strtotime($line["dateNaissance"])) ?>>
            <br>

<label for="sexe" class="fo"><?php  echo "<p> Sexe du chien : ".$sexe["NomSexe"]."</p>" ?>
     Changer le sexe : </label>
                <INPUT type= "radio" name="sexe" value="0" > Male
                <br>
                <INPUT type= "radio" name="sexe" value="1"> Femelle
                <br>
                <br>
<label for="sterilisation" class="fo"> <?php  echo "<p>Etat de la stérilisation : ".$sterilisation["Etat"]." <br> Changer l'état :</p>" ?></label>
                <INPUT type= "radio" name="sterilisation" value="0"> Non
                <br>
                <INPUT type= "radio" name="sterilisation" value="1"> Oui
                <br>
                <br>
                <label for="lof" class="fo"> <?php  echo "<p>LOF: ".$lof["Lof"]."</p>" ?>
     Changer l'état :</label>
                <INPUT type= "radio" name="lof" value="0"> Non
                <br>
                <INPUT type= "radio" name="lof" value="1"> Oui
                <br>
                  <br>
                <label>Evaluation Mordeur</label>
            <select class="fo" name="mordeur" id="mordeur">
            <?php echo '<option value="'.$line["idMordeur"].'">'.$mordeur["Evaluation"].'</option>'; ?>
            <br>
                   <?php
                        $reponse = $bdd->query('SELECT * FROM mordeur');
                        while ($ligne = $reponse->fetch()) {
                            echo '<option value="'.$ligne["idMordeur"].'">'.$ligne["Evaluation"].'</option>';
                        }
            ?>
                </select>
                <br>
                <br>
            <label>Etat légal</label>
            <select class="fo" name="etat" id="etat">
            <?php echo '<option value="'.$etat1["idCategorie"].'">'.$mordeur["Evaluation"].'</option>'; ?>
                    <?php
                        $reponse = $bdd->query('SELECT * FROM etatlegal');
                        while ($ligne = $reponse->fetch()) {
                            echo '<option value="'.$ligne["idCategorie"].'">'.$ligne["description"].'</option>';
                        }
            ?>
                </select>
</div>
  <br>

  <div id="FormulaireAjout2">
 <label for="vaccin">Vaccin</label>
            <select class="fb" name="vaccin" id="vaccin">
 <?php echo '<option value="'.$vaccin1["idVaccin"].'">'.$vaccin["nomVaccin"].'</option>'; ?>                
     <?php
                        $reponse = $bdd->query('SELECT * FROM vaccin');
                        while ($ligne = $reponse->fetch()) {
                            echo '<option value="'.$ligne["idVaccin"].'">'.$ligne["nomVaccin"].'</option>';
                        }
            ?>
                </select>
            <br>
            <label for="datevaccin">Date du vaccin</label>
            <input classe="fb" type="date" id="datevaccin" name="datevaccin"
                    min="2000-01-01" max="2100-12-31" value=<?php echo date('Y-m-d',strtotime($datevaccin["dateVaccin"])) ?>>
                    <br>
                    <br>
                    <label>Maladie</label>
            <select class="fb" name="maladie" id="maladie">
            <?php echo '<option value="'.$maladie1["idMaladie"].'">'.$maladie["nomMaladie"].'</option>'; ?>
                        <?php
                        $reponse = $bdd->query('SELECT * FROM maladie');
                while ($ligne = $reponse->fetch()) {
                    echo '<option value="'.$ligne["idMaladie"].'">'.$ligne["nomMaladie"].'</option>';
                        }
            ?>
                </select>
               <br>
                    <label for="datediagnostique">Date du diagnostique</label>
            <input classe="fb" type="date" id="datediagnostique" name="datediagnostique"
                    min="2000-01-01" max="2100-12-31" value=<?php echo date('Y-m-d',strtotime($datediagnostique["dateDiagnostique"])) ?>>
                    <br>

            <label for="tarif">Tarification</label>
            <select class="fb" name="tarif" id="tarif">
            <?php echo '<option value="'.$line["idTarification"].'">'.$tarification["tarif"].'</option>'; ?>
                  <?php
                        $reponse = $bdd->query('SELECT * FROM tarification');
                        while ($ligne = $reponse->fetch()) {
                            echo '<option value="'.$ligne["idTarification"].'">'.$ligne["tarif"].'</option>';
                        }
            ?>
                </select>
                <br>
            <label for="description"> Description </label>
            <TEXTAREA style="font-family: times new roman"  class="am" rows="10" name="description" value= <?php  echo "<p>".$line["description"]."" ?></TEXTAREA>
             <br>

<?php
if($_FILES['photo']['name']==""){
}
else{
?>
<input type="hidden" name="nomphoto" value=<?php echo $_FILES['photo']['name'] ?> >          
<?php
}
?>
            <br>
            <input id="valider" class="fb" type="submit" name="valider"value="Valider"/>
            </div>

</form>
<div id="FormulaireAjout3">
 <p style= color:red;>Le format de la photo doit être .jpg :</p>
        <form method="post" enctype="multipart/form-data">
            <input type="file" name="photo">
            <input type="submit" name="valider_photo" value="Visualiser la photo">
        </form>
        
    <?php
    if(isset($_POST['valider_photo'])){
        if (isset($_FILES['photo']['tmp_name'])) {
            if($_FILES['photo']['type']=='image/jpeg'){
             $retour = copy($_FILES['photo']['tmp_name'], $_FILES['photo']['name']);
                 if($retour) {
                      echo "<div style=float:right; id='rondChien' class='rond'>"."<img src=../../BD/photo/".$_FILES['photo']['name']." id='output'/>"."</div>"."</BR>"."</BR>";
                      rename($_FILES['photo']['name'], "../../BD/photo/".$_FILES['photo']['name']);
                    }
                }
          else{
                echo "La photo n'est pas au format .jpg";        
             }
         }
        }
    ?>
</div>

    </body>
</html>