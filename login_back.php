<?php
session_start();
error_reporting(0);

include("include/config.php");

$email = $_GET['email'];
$password = $_GET['password'];

$data = mysqli_query( $con, "SELECT * FROM registration WHERE email='$email' and password='$password'" );
$num = mysqli_fetch_array( $data );

$host = $_SERVER['HTTP_HOST'];
$uri = rtrim( dirname( $_SERVER['PHP_SELF'] ),'/\\' );

if ( $num > 0 ) {
    echo '<script>alert("Login successfully !")</script>';
    $_SESSION['login'] = 159951;
    $_SESSION['name'] = $num['EmpName'];
    $_SESSION['email'] = $email;
    
    $extra = "index.php";
} else{
    $_SESSION['login'] = 0;
    $_SESSION['errmsg'] = "Invalid Email or Password, Please Try Again!";
    echo '<script>alert("Invalid Email or Password")</script>';
    $extra = "login.php";
}
header("location: http://$host$uri/$extra");
exit();

?>