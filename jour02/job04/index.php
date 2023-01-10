<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>runtrack2/jour02/job04</title>
</head>
<body>
<i>Job04</i>
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

for($i=0; $i < 100; $i = $i+1){
    echo $i;
    echo "<br>";

    if  ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz";
      }

      elseif($i % 3 == 0 ) {
          echo "Fizz";
      }

      elseif($i % 5 == 0 ) {
          echo "Buzz";
      }

      
}
?>

</body>
</html>
