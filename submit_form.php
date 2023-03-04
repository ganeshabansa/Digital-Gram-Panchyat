<?php
session_start();
error_reporting(0);

if( strlen($_SESSION['login']) > 0 ) {
    $show = true;
} else {
    header('location:index.php');
    exit();
}

// Check Post Data, Check File Data
// echo '<pre>';
// print_r($_POST);
// print_r($_FILES);
// echo '</pre>';

/*
// Fetch ALL The Documents
if ( isset($_FILES["benified_file"]) ) {
    $temp = $_FILES["benified_file"]["tmp_name"];
    $pathOfBonafied = "doc/". $_FILES["benified_file"]["name"];

    move_uploaded_file( $temp,  $pathOfBonafied );
}

if ( isset($_FILES["adhar_file"]) ) {
    $temp = $_FILES["adhar_file"]["tmp_name"];
    $pathOfAddhar = "doc/". $_FILES["adhar_file"]["name"];

    move_uploaded_file( $temp, $pathOfAddhar );
}

if ( isset($_FILES["cast_certfile"]) ) {
    $temp = $_FILES["cast_certfile"]["tmp_name"];
    $pathOfCastCertificate = "doc/". $_FILES["cast_certfile"]["name"];

    move_uploaded_file( $temp, $pathOfCastCertificate );
}

if ( isset($_FILES["domicile_cert"]) ) {
    $temp = $_FILES["domicile_cert"]["tmp_name"];
    $pathOfDomicile = "doc/". $_FILES["domicile_cert"]["name"];

    move_uploaded_file( $temp, $pathOfDomicile );
}

if ( isset($_FILES["passbook_file"]) ) {
    $temp = $_FILES["passbook_file"]["tmp_name"];
    $pathOfPassbook= "doc/". $_FILES["passbook_file"]["name"];

    move_uploaded_file( $temp, $pathOfPassbook );
}
// */

if ( isset( $_POST['name'] ) ) {

    $trackingId = "BGA" . date("ymdHis") . rand(1000,9999);
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $pincode = $_POST['pin'];
    // $s = $_POST['state'];
    $gender = $_POST['gender'];
    $age = $_POST['age'] ? $_POST['age'] : 24;
    $village = $_POST['village'];
    $gn = $_POST['gname'];
    $area = $_POST['area'];
    $in = $_POST['inline'];
    $addharNumber = $_POST['adhar'];
    $username= $_POST['username'];
    $cno = $_POST['certno'];
    $uname = $_POST['uname'];
    $crno= $_POST['crno'];
    $accountNumber = $_POST['accno'];
    $bankIFSC = $_POST['ifsc'];
    $branch = $_POST['branch'];
    $applied_date = date("Y/m/d");

    include("include/config.php");
    error_reporting(0);
    
    $query = "insert into individual_farms (tracking_number, Name, email, phone, address, city, pin, gender, age, village, gname, area, inline, benified_file, adhar_no, adhar_file, username, certno, cast_certfile, uname, cr_no, domicile_cert, accno, ifsc, branch, passbook_file, applied_date) values ( '$trackingId', '$name', '$email', '$phone', '$address', '$city','$pincode', '$gender', '$age', '$village', '$gn', '$area', '$in', '$pathOfBonafied', '$addharNumber' ,'$pathOfAddhar', '$username', '$cno' ,'$pathOfCastCertificate' , '$uname', '$crno', '$pathOfDomicile', '$accountNumber', '$bankIFSC', '$branch', '$pathOfPassbook', '$applied_date')";

    // if ( mysqli_query( $con , $query ) ) {
    //   echo '<script>alert("Data inserted successfully !")</script>';
    // } else {
    //   echo '<script>alert("Data not inserted")</script>';
    // }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <!-- CSS Links -->
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" href="css/header-footer.css">

	<title>Confirmation Page</title>
</head>

<body>
    <?php include('include/header.php');?>

    <!-- You Code Goes Here -->
    
	<?php include('include/footer.php');?>

    <!-- javaScripts libraries-->
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- pooper.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <!-- bootstrap.js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</body>
</html>