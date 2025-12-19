<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
<div>
    <h1><b>Registeration page</b></h1>
    <div class="Form-box">
        <form method="get" >
            <input type="text" name="username" placeholder="username:" required><br><br>
            <input type="password" name="password" placeholder="password:" required><br><br>   
            <input type="Submit" value="Register" name="register">
        </form>
        <div class="login-link">
            <p>Already have an account? <a href="login.php">Login here</a></p>
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

if(isset($_GET['register'])){

$username =$_GET["username"] ;
$password = $_GET["password"];

if(isset($_SESSION[$username])){

    echo("username : $username already registered.... ");
}

else{
    $_SESSION[$username]=$password;
    echo("Registration successfully");
}

}
}
?>

