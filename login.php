<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
<div>
    <h1><b>LOGIN PAGE</b></h1>
    <div class="Form-box">
        <form method="get" >
            <input type="text" name="username" placeholder="username:" required><br><br>
            <input type="password" name="password" placeholder="password:" required><br><br>   
            <input type="Submit" value="login" name="login">
        </form>
        <div class="signup-link">
            <p>Create a new account? <a href="Registration.php">Signup here</a></p>
        </div>
    </div>
</div>
</body>
</html>



<?php
session_start();

if(isset($_SESSION['logged_in'])){
    header("home.php");
}

else{
    if(isset($_GET['login'])){

    $username = $_GET['username'];
    $password = $_GET['password'];

    if(isset($_SESSION[$username])){ 
        $_SESSION['logged_in'] = $username;
        header("location:home.php");

    }
    else{
        echo "Invalid username or password! <a href='Registration.php'>Register here</a>";
    }
}

}

?>