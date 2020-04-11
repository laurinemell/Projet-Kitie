<!DOCTYPE html>
<html>
    <head>
    <title>Modifier un chien</title>
    <link rel="stylesheet" href="../Style/style.css" type="text/css" />
    <link rel="stylesheet" href="../Style/ajout-chien.css" type="text/css" />
    </head>
    <img id="logo" src="../Image/spaLogo.png" >
    <body>
        
        <h1>Modifier un chien </h1>
        <br>
        <h2>Veuillez choisir un chien pour pouvoir le modifier :</h2>
        
    <form  method="get" action="modifier-chien.php" autocomplete="off">
           <select class="fo" name="identifiant" id="identifiant">
            <option>Choisir un chien</option>
                    <?php
                        include "../bd.php";
                        $bdd = getBD();
                        $reponse = $bdd->query('SELECT * FROM chien');
                        while ($ligne = $reponse->fetch()) {
                            echo '<option value="'.$ligne["idChien"].'">'.$ligne["idChien"].'</option>';
                        }
            ?>
                </select>
                <br>
                <br>
    <input type="submit" name="valider" value="Valider">


</form>