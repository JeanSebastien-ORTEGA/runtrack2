<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>runtrack2/jour06/job05</title>
</head>
<body>

<i>Job05</i>
<br><br><br>

<form action="" method="get">

  <h1>Style CSS</h1>

    <select name="select">
        <option value="0">Default</option>
        <option value="1">Style 1</option>
        <option value="2">Style 2</option>
        <option value="3">Style 3</option>
    </select>

    <br><br>
        <input type="submit" name="submit" value="Envoyer">
    <br><br>


<?php

$select = "0";

switch($select)
{
 case '1':
  echo'<link rel="stylesheet" type="text/css" href="style1.css">';
  break;

 case 'Style 2':
  echo'Style 2';
  break;

 case 'Style 3':
  echo'Style 3';
  break;

 default :
  echo '' ;
  break;
}


?>

<br><br>
</form>
</body>
</html>




<!--

$legume = "rien";

switch($legume)
{
 case 'salade':
  echo'Vous avez acheté de la salade !';
  break;

 case 'Carotte':
  echo'Vous avez acheté de la Carotte !';
  break;

 case 'poivrons':
  echo'Vous avez acheté des poivrons!';
  break;

 case 'aubergines':
  echo'Vous avez acheté des aubergines!';
  break;

 default :
  echo 'Vous avez acheté un autre légume' ;
  break;
}








$stylesheet = "css";
switch($stylesheet) {
    case 'style1':
        $css = '.style1.css';
        break;
    case 'style2':
        $css = '.styles2.css';
        break;
    case 'style3':
        $css = '.styles3.css';
        break;
    default:
        $css = '.style.css';
        break;
}
 echo '<link rel="stylesheet" href="/path/to/styles/'.$css.'">'; -->