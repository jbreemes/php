<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
    <style>
        body{
            text-align: -moz-center;
        }

    </style>
</head>
<body>
<FORM NAME ="site" METHOD ="POST" ACTION = "Opdracht%203.1.php">

     <input type="text" name="inlognaam" placeholder="inlognaam" required value=> <br>
     <input type="password" name="wachtwoord" placeholder="wachtwoord" required value=>
     <input type="submit" name="knop" value="verstuur"> <br>
     <input type="email" name="email" placeholder="email" required value=>



</FORM>
<?php

if (isset($_POST['knop'])){
    $inlog =$_POST['inlognaam'];
    $wachtwoord =$_POST['wachtwoord'];
    $email =$_POST['email'];
}

?>
</body>
</html>