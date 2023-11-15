<?php
    require_once("connexion.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WeatherApp-PHP</title>
</head>
<body>
    <table border="1" cellpadding="5">
        <thead>

            <tr>
                <th>Ville</th><th>Haut</th><th>Bas</th>
            </tr>

        </thead>
        <tbody>

            <?php
                foreach($dbh->query('SELECT * from meteo') as $row) {
                        echo '<tr><td>'.$row["ville"].'</td> <td>'.$row["haut"].'</td> <td>'.$row["bas"].'</td></tr>';
                }
                $dbh = null;
            ?>

        </tbody>
    </table>
    
    
    <div class="form">
        <fieldset class="formulaire">
            <legend>Ajouter une ville</legend>
                <form method="POST" action="addCity.php">
                    <fieldset class="city">
                        <legend></legend> 
                            <label for="city">Ville :</label>
                                <br>
                                <input id="city" type="text" name="city" placeholder="ville" required>
                                <br> 
                    </fieldset>
                    <fieldset class="haut">
                        <legend></legend> 
                            <label for="haut">T° (haut)</label>
                                <br>
                                <input id="haut" type="text" name="haut" placeholder="tempHaut" required>
                                <br> 
                    </fieldset>
                    <fieldset class="bas">
                        <legend></legend> 
                            <label for="bas">T° (bas)</label>
                                <br>
                                <input id="bas" type="text" name="bas" placeholder="tempBas" required>
                                <br> 
                    </fieldset>
                <br>
                <button type="submit" name="submit" value=" "><i class="fa-solid fa-paper-plane"></i> Envoyer</button>
            </form>
        </fieldset>
    </div>

    </form>

</body>
</html>