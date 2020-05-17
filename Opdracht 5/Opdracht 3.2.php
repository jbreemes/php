<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
    <style>
        body{
            text-align: -moz-center;
        }
        img{
            width:300px;
            height:200px;
        }

    </style>
</head>
<body>
<FORM NAME ="site" METHOD ="POST" ACTION = "Opdracht%203.2.php">
    <select name="dier[]">
        <option hidden disabled selected value="Select">Select</option>}
        <option value="monkey">monkey</option>
        <option value="tiger">tiger</option>
        <option value="dolphin">dolphin</option>
    </select>
    <input type="submit" name="submit" value="Ok">

</FORM>
<?php

if (isset($_POST["submit"])){
    foreach ($_POST["dier"] as $dier ){
        echo '<br>';
        echo "<img src='IMG/".$dier.".jpg'>";
    }

}else{
    error_log("choose an animal");
}

?>
</body>
</html>