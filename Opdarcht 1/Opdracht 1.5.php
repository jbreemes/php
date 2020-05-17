<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
    <style>

    </style>
</head>
<body>


<table border="1px">
    <tr>
        <th>Sr No         </th>
        <th> Taxi</th>
    </tr>
    <?php $Taxi = array("swift", "alto", "toyoto", "I10");
    $i=1;
    foreach ($Taxi as $value) {
        echo "<tr>";
        echo "<td>$i </td>" ;
        echo "<td>$value</td>";
        echo "</tr>";
        $i++;
    } ?>
</table>
</body>
</html>