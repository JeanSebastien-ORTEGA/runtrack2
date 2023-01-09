<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>runtrack2/jour01/job03</title>
</head>
<body>
    <i>Job03</i>
<br><br><br>
    <table>
    <thead>
        <tr>
            <th colspan="1">Nom</th>
            <td colspan="1">Type</td>
            <td colspan="1">Note</td>
            <td colspan="1">Bon ?</td>
            <td colspan="1">Recette</td>
        </tr>
    </thead>
    <tbody>
    <tr>
            <td>
                <?php
                    $Nom="Muffin";
                    echo"$Nom";
                ?>
            </td>

            <td>
            <?php
                    $Type="Gateau";
                    echo"$Type";
                ?>
            </td>

            <td>
            <?php
                    $Note=20;
                    echo"$Note";
                ?>
            </td>
           
            <td>
            <?php
                    $bon=true;
                    echo"$bon";
                ?>
            </td>

            <td>
            <?php
                    $Recette= 2.5;
                    echo"$Recette";
                ?>
            </td>
        </tr>

        <tr>
            <td>
                <?php
                    $Nom="Cookie";
                    var_dump($Nom);
                    echo"$Nom";
                ?>
            </td>

            <td>
            <?php
                    $Type="Gateau";
                    var_dump($Type);
                    echo"$Type";
                ?>
            </td>

            <td>
            <?php
                    $Note=20;
                    var_dump($Note);
                    echo"$Note";
                ?>
            </td>
            
            <td>
            <?php
                    $bon=true;
                    echo"$bon";
                ?>
            </td>

            <td>
            <?php
                    $Recette= 1.5;
                    var_dump($Recette);
                    echo"$Recette";
                ?>
            </td>
        </tr>
    </tbody>
</table>
</body>
</html>