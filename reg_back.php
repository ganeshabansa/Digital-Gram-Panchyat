<?php
include("include/config.php");

$ename = $_GET['EmpName'];
$em = $_GET['email'];
$pass = $_GET['password'];
$repass = $_GET['repassword'];
$addr = $_GET['address'];
$c = $_GET['city'];
$s = $_GET['state'];
$count = $_GET['country'];
$pi = $_GET['pin'];

$query = "insert into registration values ('$ename','$em','$pass', '$addr', '$c', '$s', '$count', '$pi')";
$result = mysqli_query($con , $query);

$host = $_SERVER['HTTP_HOST'];
$uri = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');

if( $result ) {
  echo '<script>alert("Registration Successfull!")</script>';
  $extra = "login.php";
} else {
  echo '<script>alert("Registration Failed, Please Try Again!")</script>';
  $extra = "registration.php";
}

header("location: http://$host$uri/$extra");
exit();
?>