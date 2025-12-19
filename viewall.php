<?php
session_start();

foreach($_SESSION as $key=>$value){
    echo("<br> SESSION key: $key and Value: $value");
}
?>