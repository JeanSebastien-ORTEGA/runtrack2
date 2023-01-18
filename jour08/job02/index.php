<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>runtrack2/jour08/job01</title>
</head>
<body>

<i>Job01</i>
<br><br>
<h5>Compteur</h5>

<?php

setcookie('TestCookie', 'nbvisites', time()+3600);
var_dump($_COOKIE);

if (isset($_POST["reset"]))
    $_COOKIE["nbvisites"] = 0;

if (!isset($_COOKIE["nbvisites"]))
    $_COOKIE["nbvisites"] = 0;
else 
    $_COOKIE["nbvisites"] = $_COOKIE["nbvisites"] + 1;
echo $_COOKIE["nbvisites"];

?>

<br><br>

<form method="POST" action="">
    <input type="submit" name="reset" value="Reset">
</form>


</body>
</html>

