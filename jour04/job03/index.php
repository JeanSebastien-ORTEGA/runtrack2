<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>runtrack2/jour04/job03</title>
</head>
<body>
<i>Job03</i>
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
</form>

</body>
</html>
