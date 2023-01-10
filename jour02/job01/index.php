<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>runtrack2/jour02/job01</title>
</head>
<body>
<i>Job01</i>
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

$i=0;

while($i <= 1337){          
    echo $i;           
    echo "<br>";            
    $i++; // ou $i = $i+1      
    
    if($i == 42){
        echo "<b><u> $i </b></u>" ;
    }

}

?>

</body>
</html>
