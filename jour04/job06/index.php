<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>runtrack2/jour04/job06</title>
</head>
<body>
<i>job06</i>
<br><br><br>

<form action="" method="get">

        <label for="name"> Nombre </label>
        <input type="name" name="number">


        <input type="submit" name="submit" value="Pair / Impair">

        <br><br>

<?php

if($_GET["number"] % 2 == 0)

{
     echo $_GET["number"] . " est pair ";
}


else

{ 
    echo $_GET["number"] . " est impair ";
}
    
   
?>

<br><br>

</form>

</body>
</html>
