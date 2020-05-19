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
<FORM NAME ="site" METHOD ="POST" ACTION = "Opdracht%203.4.php" >

    <input type="text" name="inlognaam" placeholder="email" required value=> <br>
    <input type="password" name="wachtwoord" placeholder="wachtwoord" required value=>
    <input type="submit" name="knop" value="verstuur">
    <?php


    if (isset($_POST['knop'])){

        function checkCombo ($name, $password){

            $username = array('piet@worldonline.nl', 'klaas@carpets.nl', 'truushendriks@wegweg.nl');
            $wachtwoord = array('doetje123', 'snoepje777', 'arkiearkie201');
            $combination;

            if((($name == $username[0]) && ($password == $wachtwoord[0]))
                or (($name == $username[1]) && ($password == $wachtwoord[1]))
                or (($name == $username[2]) && ($password == $wachtwoord[2]))){
                echo "Welcome!";
                $combination = true;
            } else {
                echo "Sorry, geen toegang";
                $combination = false;
            }
            return $combination;
        }
        echo "<br>".checkCombo($_POST['inlognaam'], $_POST['wachtwoord']);
    }

    ?>
</FORM>
</body>
</html>