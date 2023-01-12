<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>runtrack2/jour03/job01</title>
</head>
<body>
<i>Job01</i>
<br><br><br>


<?php

$array=[200,204,173,98,171,404,459];

var_dump($array);

foreach($array as $key => $value){

if ($value % 2 == 0)
{
    echo "$value est paire <br/>";
}
elseif ($value % 2 == 1)
{
    echo "$value est impaire <br/>";
}

}

?>

</body>
</html>

<!-- foreach($array as $key => $value){

    echo ($value % 2 ? 'Chiffre impaire' : 'Chiffre paire');
}