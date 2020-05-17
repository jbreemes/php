<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
    <style>
        body{
            text-align: center;
        }
        .rood{
            border: red solid 5px;
        }
        .groen{
            border: green solid 5px;
        }

    </style>
</head>
<body>
<?php
for($p=1; $p <= 9; $p++){
        if($p % 2 == 0 ){
            $class = "class='rood'";
        } else{
            $class ="class='groen'";
        }
    echo "<img ".$class." src='IMG/aap".$p.".jpg'>";
}


?>
</body>
</html>