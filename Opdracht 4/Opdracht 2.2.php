<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
    <style>
        body{
            text-align: center;
        }

    </style>
</head>
<body>
<FORM NAME ="leeftijd" METHOD ="POST" ACTION = "Opdracht%202.2.php">

    <INPUT TYPE = "text" name="inputbox" placeholder="Is het deelbaar door 3?" >
    <INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Bereken">

</FORM>
<?php

if (isset($_POST['Submit1'])){
    $graden=$_POST['inputbox']/3;


    if (is_int($graden)){
    echo $graden;

    }else{
      echo 'Niet deelbaar door 3';

    }



}

?>
</body>
</html>