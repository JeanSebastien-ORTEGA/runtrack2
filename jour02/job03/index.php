<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>runtrack2/jour02/job03</title>
</head>
<body>
<i>Job03</i>
<br><br><br>

<!-- 
while(condition){
     instruction 1;
     instruction 2;
     instruction 3;
}

for(initialisation; condition; incrémentation)
{
  bloc d'instructions;
}


-->

<?php

$i = 0;

while($i<=100){
    echo $i++;
    echo "<br>";

if($i <= 20){
    echo "<i>";
}

if($i == 42){
    echo "La Plateforme_";
}


}

?>

</body>
</html>
