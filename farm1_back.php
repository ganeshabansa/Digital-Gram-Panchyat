<?php

$name=$_GET['Name'];
$em= $_GET['email'];
$phone= $_GET['phone'];
$addr= $_GET['address'];
$c=$_GET['city'];
$pi= $_GET['pin'];
$s= $_GET['state'];
$gen=$_GET['gender'];
$ag= $_GET['age'];

echo "$name";
echo "$em";
echo "$phone";
echo "$addr";
echo "$c";
echo "$pi";
echo "$gen";
echo "$ag";

$host= "localhost";
$username= "root";
$password = "";

$db_name = "project";

$conn = mysqli_connect($host, $username, $password, $db_name);
$query = "insert into individual_farms values ('$ename','$em','$phone','$addr', '$c', '$pi', '$gen', '$ag')";
$data = mysqli_query($conn , $query);

if($data){
  echo '<script>alert("Data inserted successfully !")</script>';
}
else{
  echo '<script>alert("All fields are required")</script>';
}

?>