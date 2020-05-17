<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
    <style>
        body{
            text-align: left;
        }

    </style>
</head>
<body>

<?php

$swimclub = array("De Spartelkuikens" => "25", "De Waterbuffels" => "32", "Plonsmderin" => "11", "Bommetje" => "23");

$plaatje = 0;

foreach ($swimclub as $club => $leden) {
    $AantalLeden = floor($leden/5);
    echo $club. " ". $leden;
    for ($plaatje = 0; $plaatje < $AantalLeden; $plaatje++) {
        echo " <img src='img/zwem.png'>";
    }
    echo "<br>";
}
?>
</table>
</body>
</html>