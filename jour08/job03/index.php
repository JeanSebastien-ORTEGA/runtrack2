<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>runtrack2/jour08/job03</title>
</head>
<body>

<i>Job03</i>
<br><br>
<h5>Session</h5>

<form method="POST" action="">
    <input type="text" name="prenom">
    <input type="submit" name="send" value="Envoyer">
</form>


<?php

session_start();
var_dump($_SESSION);




//if (isset($_POST['reset'])){
//     session_destroy();
//}

?>

<br><br>

<form method="POST" action="">
    <input type="submit" name="reset" value="Reset">
</form>


</body>
</html>

