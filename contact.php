<?php 

if ( isset($_POST['query']) && isset($_POST['phone']) ) {
    
    include("include/config.php");
    error_reporting(0);
    
    $fname = $_POST['f_name'];
    $lname = $_POST['l_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $query = $_POST['query'];


    $query = "insert into contact (first_name, last_name, contact_number, email, query) values ( '$fname', '$lname', '$phone', '$email', '$query')";

    if ( mysqli_query( $con , $query ) ) {
        echo '<script>alert("Query Submitted Successfully!")</script>';
        // header('location:index.php');
    } else {
        echo '<script>alert("Something Went Wrong!")</script>';
    }
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
	<link rel="stylesheet" href="css/contact.css">
	<link rel="stylesheet" href="css/header-footer.css">
    <!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->

    <!-- jQuery -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	<title>Contact Us</title>
	
	<!-- For CSS -->
	<style>
	</style>
	
</head>
<body>
    <!-- <div stylee="height:100px"> -->
	<?php include('include/header.php');?>
    <!-- </div> -->
    <!-- Your Code Goes here -->

    <section>
        <div class="container">

            <div class="contactinfo">
                <h2>contact Info</h2>
                <ul class="info">
                    <li>
                        <span><img src="./img/location.png"></span>
                        <span>Gram Panchyat Ganagapur, Taluka Ganagapur<br>
                            Dist. Sambhaji Nagar, Maharashtra 411006 <br></span>
                    </li>
                    <li>
                        <span><img src="./img/email.png"></span>
                        <span>gramvikasyojana@gmail.com</span>
                    </li>
                    <li>
                        <span><img src="./img/phn.png"></span>
                        <span>310-386-1000</span>
                    </li>
                </ul>
            </div>
    
            <div class="Contactform">
                <h2>send a message</h2>
                <form method="post">
                <div class="formBox">
                    <div class="inputBox w50">
                        <input class="input_style" type="text" name="f_name" placeholder="First Name" required>
                    </div>
                    
                    <div class="inputBox w50">
                        <input class="input_style" type="text" name="l_name" placeholder="Second Name" required>
                    </div>
                    
                    <div class="inputBox w50">
                        <input class="input_style" type="text" name="email" placeholder="Email Address" required>
                    </div>
                    
                    <div class="inputBox w50">
                        <input class="input_style" type="text" name="phone" placeholder="Phone Number" required>
                    </div>
                    
                    <div class="inputBox w100">
                        <textarea name="query" class="query_style" placeholder="Write Your Message here..." required></textarea>
                    </div>
                    <input class="submit_button btn" type="submit" name="submit" value="send">
                </div>
                </form>
            </div>
        </div>
    </section>
	
	<!-- You Stop Writing here -->
	<?php include('include/footer.php');?>

	<!-- javaScripts libraries-->
	<!-- <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script> -->
	<!-- <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->

	<!-- jQuery -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<!-- pooper.js -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<!-- bootstrap.js -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>
