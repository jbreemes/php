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
<FORM NAME ="leeftijd" METHOD ="POST" ACTION = "Opdracht%202.1.php">

    <INPUT TYPE = "text" name="inputbox" placeholder="Celcius naar farenheit" >
    <INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Bereken">

</FORM>
<?php

if (isset($_POST['Submit1'])){
    $graden=$_POST['inputbox']* 1.8 +32;

    echo $graden.' Farenheit';

}

?>
</body>
</html>