<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
    <style>


    </style>
</head>
<body>
<FORM NAME ="leeftijd" METHOD ="POST" ACTION = "Opdracht%201.4.php">

    <INPUT TYPE = "text" name="inputbox" placeholder="leeftijd" >
    <INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Bereken">

</FORM>
<?php

 if (isset($_POST['Submit1'])){
     $leeftijd=$_POST['inputbox'];
     $bedrag=10;
    if  ($leeftijd > 65){
        $bedrag = $bedrag*0.5;
        }

   if ($leeftijd <= 12){
         $bedrag = $bedrag*0.5;
         }

     if  ($leeftijd < 3){
         $bedrag =0;
        }


     echo "het bedrag is: $bedrag";

}

?>


</body>
</html>