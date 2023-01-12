<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>runtrack2/jour04/job01</title>
</head>
<body>
<i>Job01</i>
<br><br><br>

<form action="" method="get">

        <label for="name"> Nom </label>
        <input type="name" name="nom">
        <label for="name"> Prénom </label>
        <input type="mail" name="prenom">

        <input type="submit" name="submit" value="Envoyer">

        <br><br><br>
<?php

var_dump($_GET);

echo "<br>Bonjour " . $_GET["nom"] . ", " .$_GET["prenom"]." ! <br><br>";

echo "Le nombre d’argument GET envoyé est : " . count($_GET);

    


?>


</form>




</body>
</html>











<!-- <table>
    <thead>
        <tr>
            <th colspan="1">Argument</th>
            <td colspan="1">Valeur</td>

        </tr>
    </thead>
    <tbody>
    <tr>
            <td>

            </td>

            <td>

            </td>

        </tr>

        <tr>
            <td>

            </td>

            <td>
 
            </td>

        </tr>
    </tbody>
</table> -->