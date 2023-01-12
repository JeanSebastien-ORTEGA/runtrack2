<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>runtrack2/jour04/job05</title>
</head>
<body>
<i>job05</i>
<br><br><br>

<form action="" method="post">

        <label for="name"> Username </label>
        <input type="name" name="nom">
        <label for="password"> Password </label>
        <input type="password" name="password">

        <input type="submit" name="submit" value="Envoyer">

        <br><br>

<?php

if($_POST["nom"] == "John" && $_POST["password"] == "Rambo") 

{
     echo " C'est pas ma guerre ";
}


else 

{ 
    echo "Votre pire cauchemar" ;
}
    
   
?>

<br><br>

</form>

</body>
</html>
