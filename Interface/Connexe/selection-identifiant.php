<!DOCTYPE html>
<html>
    <head>
    <title>Modifier un chien</title>
    <link rel="stylesheet" href="../Style/style.css" type="text/css" />
    <link rel="stylesheet" href="../Style/selection-identifiant.css" type="text/css" />
    </head>
    <a href="../../BD/listing.php"><img id="logo" src="../Image/spaLogo.png" ></a>
    <body>
    
        <?php
    include('../bd.php');
    session_start();
    sessionEmploye();
    ?>
                   <img id="img" src="../Image/chien.gif">

        
        <h1>Modifier un chien </h1>
        <h2>Veuillez choisir un chien pour pouvoir le modifier :</h2>
        
    <form  method="get" action="modifier-chien.php" autocomplete="off">
        <div id="div">
           <select class="fo" name="identifiant" id="identifiant">
            <option id="ch1">Choisir un chien</option>
                    <?php
                        $bdd = getBD();
                        $reponse = $bdd->query('SELECT * FROM chien');
                        while ($ligne = $reponse->fetch()) {
                            echo '<option value="'.$ligne["idChien"].'">'.$ligne["idChien"].'</option>';
                        }
            ?>
                </select>
                <br>
                <br>
    <input type="submit" class="fb" style="margin-left: 75px;" name="valider" value="Valider">
</div>
</form>

        <h2>Si la modification concerne une adoption :</h2>

<form  method="get" action="enregistrementAdoption.php" autocomplete="off" name="mon_form" onSubmit="return validation(this.form)">
        <div id="div">
           <select class="fo" name="identifiant" id="identifiant">
            <option>Choisir un chien</option>
                    <?php
                        $bdd = getBD();
                        $reponse = $bdd->query('SELECT * FROM chien');
                        while ($ligne = $reponse->fetch()) {
                            echo '<option value="'.$ligne["idChien"].'">'.$ligne["idChien"].'</option>';
                        }
            ?>
                </select>
                <br>
                <select class="fo" name="idA" >
            <option>Choisir un adoptant</option>
                    <?php
                        $reponse = $bdd->query('SELECT * FROM adoptant');
                        while ($ligne = $reponse->fetch()) {
                            echo '<option value="'.$ligne["idAdoptant"].'">'.$ligne["nom"].'</option>';
                        }
            ?>
                </select>
                <br>
                <br>
                <label for="datesortie">Date Sortie</label>
            <input classe="fb" type="date" id="datesortie" name="datesortie"
                    min="2000-01-01" max="2100-12-31">
                <br>
                <br>
    <input type="submit" class="fb" style="margin-left: 75px; name="valider" value="Valider">
</div>

</form>
</body>
</html>