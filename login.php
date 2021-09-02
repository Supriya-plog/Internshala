<?php
session_start();
include('dbcon.php');
$ema = $_POST['email'];
$pass = $_POST['password'];
$error = "Email/password incorrect";
$perr = "There were error(s) in your form: A password is required ";
$check = mysqli_query($con,"select * from login where email = '$ema' and password = '$pass'");
if($pass == ""){
    $_SESSION["perr"] = $perr;
    echo '<script>window.location.href = "index.php";</script>';
}
if(mysqli_num_rows($check)>0){
        $_SESSION["email"] = $ema;
        echo '<script>window.location.href = "dashboard.php";</script>';
}
else{
    $_SESSION["error"] = $error;
    echo "<script>window.location.href = 'index.php';</script>";
}

?>