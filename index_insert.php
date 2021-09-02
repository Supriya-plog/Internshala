<?php
include('dbcon.php');
$ema = $_POST['email'];
$pass = $_POST['password'];
$mail = "select email from login where email = '$ema'";
$check = mysqli_query($con,$mail);
if(mysqli_num_rows($check)>0){
    echo "<script>alert('Email is already exist 😲');window.location.href = 'index.php';</script>";
    }
else{
   if($ema == '' && $pass == ''){
      echo "<script>alert('Please fill email and password');window.location.href = 'index.php';</script>"; 
   }
   else{
       if(mysqli_query($con,$query)){
    echo "<script>alert('New account is created');window.location.href = 'index.php';</script>";
    }
    else{
    echo "<script>alert('Not able to create your account 😲');window.location.href = 'index.php';</script>";
    }
   }
    
}

?>