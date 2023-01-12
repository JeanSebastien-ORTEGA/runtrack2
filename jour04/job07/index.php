<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>runtrack2/jour04/job07</title>
</head>
<body>
<i>job07</i>
<br><br><br>

<form action="" method="get">


        <label for="hauteur"> Hauteur </label>
        <input type="text" name="hauteur">

        <br><br>

        <label for="largeur"> Largeur </label>
        <input type="text" name="largeur">
        
        <br><br>
        <input type="submit" name="submit" value="Envoyer">

        <br><br><br>

<?php

if($_GET["hauteur"] == 5 && $_GET["largeur"] == 10)

{
    echo "   ,_____, <br>
            /_\____\ <br>
            |__|____| ";
} 

else

{ 
    echo "Y'a rien";
}




   
?>

<br><br>

</form>

</body>
</html>
