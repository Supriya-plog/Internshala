<?php
session_start();
include ('dbcon.php');
$email = $_SESSION['email'];
$address = $_POST['diary'];
$get_id = "select id from login where email = '$email'";
$result = mysqli_query($con,$get_id);
$data = mysqli_fetch_array($result);
$id = end($data);

$update = "update login set diary = '$address' where id = '$id'";
if(mysqli_query($con,$update)){
    echo "<script>window.location.href = 'dashboard.php';</script>";
}
else{
    echo "<script>alert('Not able to insert 😲');window.location.href = 'dashboard.php';</script>";
}

?>