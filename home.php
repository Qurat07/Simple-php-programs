<?php
session_start();
if(isset($_SESSION['logged_in'])){
    echo('
        <h1>Welcome to Home Page</h1> '. $_SESSION['logged_in'] .'
     <a href="logout.php">Logout</a>');
}
else{
    header("location:login.php");
}


?>
