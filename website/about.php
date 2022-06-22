<?php

$link=mysqli_connect("localhost", "root", "") or  die(mysqli_error($link));
mysqli_select_db($link, "dfyne")or  die(mysqli_error($link));

try {
    $con=new PDO("mysql:host=localhost;dbname=dfyne","root","");
}catch(PDOExection $e){
    echo $e->getMessage();
}


?>

