<?php 

// Fetch ALL The Documents
if ( isset($_FILES["benified_file"]) ) {
    $benfile = $_FILES["benified_file"]["name"];
    $temp = $_FILES["benified_file"]["tmp_name"];
    
    $pathOfBonafied = "doc/".$benfile;
    move_uploaded_file($temp, $pathOfBonafied);
    // echo "<br>".$pathOfBonafied;
}

if ( isset($_FILES["adhar_file"]) ) {
    $benfile = $_FILES["adhar_file"]["name"];
    $temp = $_FILES["adhar_file"]["tmp_name"];
    
    $pathOfAddhar = "doc/".$benfile;
    move_uploaded_file($temp,$pathOfAddhar);
    // echo "<br>".$pathOfAddhar;
}

if ( isset($_FILES["cast_certfile"]) ) {
    $benfile = $_FILES["cast_certfile"]["name"];
    $temp = $_FILES["cast_certfile"]["tmp_name"];
    
    $pathOfCastCertificate = "doc/".$benfile;
    move_uploaded_file($temp,$pathOfCastCertificate);
    // echo "<br>".$pathOfCastCertificate;
}

if ( isset($_FILES["domicile_cert"]) ) {
    $benfile = $_FILES["domicile_cert"]["name"];
    $temp = $_FILES["domicile_cert"]["tmp_name"];
    
    $pathOfDomicile = "doc/".$benfile;
    move_uploaded_file($temp,$pathOfDomicile);
    // echo "<br>".$pathOfDomicile;
}

if ( isset($_FILES["passbook_file"]) ) {
    $benfile = $_FILES["passbook_file"]["name"];
    $temp = $_FILES["passbook_file"]["tmp_name"];
    
    $pathOfPassbook= "doc/".$benfile;
    move_uploaded_file($temp,$pathOfPassbook);
    // echo "<br>".$pathOfPassbook;
}


if ( isset($_POST['name']) ) {

    $name = $_POST['name'];
    $em = $_POST['email'];
    $phone = $_POST['phone'];
    $addr = $_POST['address'];
    $c = $_POST['city'];
    $pi = $_POST['pin'];
    $s = $_POST['state'];
    $gen = $_POST['gender'];
    $ag = $_POST['age'];

    $vl = $_POST['village'];
    $gn = $_POST['gname'];
    $ar = $_POST['area'];
    $in = $_POST['inline'];
    $adhar = $_POST['adhar'];
    $username= $_POST['username'];
    $cno = $_POST['certno'];
    $uname = $_POST['uname'];
    $crno= $_POST['crno'];
    $acno = $_POST['accno'];
    $if = $_POST['ifsc'];
    $br= $_POST['branch'];

    // echo "$village<br>";
    // echo "$gname<br>";
    // echo "$area<br>";

    // echo "$name<br>";
    // echo "$em<br>";
    // echo "$phone<br>";
    // echo "$addr<br>";
    // echo "$c<br>";
    // echo "$pi<br>";
    // echo "$s<br>";
    // echo "$gen<br>";
    // echo "$ag<br>";
    include("conn_db.php");
    error_reporting(0);
    
    $query = "insert into individual_farms (Name, email, phone, address, city, pin, gender, age, village, gname, area, inline, benified_file, adhar_no, adhar_file, username, certno, cast_certfile, uname, cr_no, domicile_cert, accno, ifsc, branch, passbook_file) values ('$name', '$em', '$phone', '$addr', '$c','$pi', '$gen', '$ag', '$vl', '$gn', '$ar', '$in', '$pathOfBonafied', '$adhar' ,'$pathOfAddhar', '$username', '$cno' ,'$pathOfCastCertificate' , '$uname', '$crno', '$pathOfDomicile', '$acno', '$if', '$br', '$pathOfPassbook')";
    // $query = "insert into individual_farms (Name, email, phone, address, city, pin, gender, age) values ('$name','$em','$phone', '$addr', '$c','$pi', '$gen', '$ag')";
    $data = mysqli_query($conn , $query);
    if($data){
      echo '<script>alert("Data inserted successfully !")</script>';
    }
    else{
      echo '<script>alert("Data not inserted")</script>';
    }
}

// Check Post Data
echo '<pre>';
print_r($_POST);
echo '</pre>';

// Check File Data
echo '<pre>';
print_r($_FILES);
echo '</pre>';

        
?>