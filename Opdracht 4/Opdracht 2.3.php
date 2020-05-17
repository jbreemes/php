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
<FORM NAME ="leeftijd" METHOD ="POST" ACTION = "Opdracht%202.3.php">

    <INPUT TYPE = "text" name="inputbox" placeholder="Reverse" >
    <INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Ok">

</FORM>
<?php

if (isset($_POST['Submit1'])){
    $input=$_POST['inputbox'];

       $uitkomst= strrev($input);

       echo $uitkomst;




}

?>
</body>
</html>