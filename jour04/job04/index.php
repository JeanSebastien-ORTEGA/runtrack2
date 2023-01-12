<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>runtrack2/jour04/job04</title>
</head>
<body>
<i>Job04</i>
<br><br><br>

<form action="" method="post">

        <label for="name"> Nom </label>
        <input type="name" name="nom">
        <label for="password"> Password </label>
        <input type="password" name="password">

        <input type="submit" name="submit" value="Envoyer">

        <br><br>
<?php

echo "<br>Nom : " . $_POST["nom"] . "<br> Password : " .$_POST["password"]."<br><br>";

echo "Le nombre d’argument POST envoyé est : " . count($_POST);


?>
<br><br>
<table>
        <thead>
            <tr>
                <th colspan="1">Argument</th>
                <td colspan="1">Valeur</td>

            </tr>
        </thead>
        <tbody>
        <tr>
                <td>
                Nom
                </td>
                
                <td>
                <?php
                echo $_POST["nom"]
                ?>
                </td>

            </tr>

            <tr>
                <td>
                Password
                </td>

                <td>
                <?php
                echo $_POST["password"]
                ?>
                </td>

            </tr>
        </tbody>
    </table>

</form>

</body>
</html>
