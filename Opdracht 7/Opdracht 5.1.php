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
<FORM NAME ="site" METHOD ="POST" ACTION = "Opdracht%205.1.php" >

    <input type="text" name="inlognaam" placeholder="email of gebruikernaam" required value=> <br>
    <input type="password" name="wachtwoord" placeholder="wachtwoord" value=>
    <input type="submit" name="submit" value="Ok">
    <?php

    $host = "localhost";
    $user = "root";
    $password = "root";
    $dbname = "school";



    $dbs = new PDO('mysql:host=localhost; dbname=school; port=3306', $user, $password);
    // Check connection
    if (!$dbs) {
        die("Connection failed: " . mysqli_connect_error());
    }


    if (isset($_POST['submit'])){
        $gebruiker =$_POST['inlognaam'];
        $wachtwoord =$_POST['wachtwoord'];


        $inlog= $dbs ->query("select naam,wachtwoord from login where naam='$gebruiker' and wachtwoord ='$wachtwoord'")
        or die("Error while searching");

        if ($inlog->fetch()) {

        } elseif($gebruiker=='admin' && $wachtwoord =='admin01'){

             header('location: Opdracht%205.11.php');
        }else{
            echo "Geen toegang";
        }



    }
    ?>
</FORM>
</body>
</html>

