<?php
$usernumber = $_GET['usernumber'];
$systemnumber = rand(1,10);

if($usernumber==$systemnumber)
    echo("Congratulations! you win cash prize of 100,0000");
else
    echo("Bad luck try again lucky number is : ".$systemnumber);
?>