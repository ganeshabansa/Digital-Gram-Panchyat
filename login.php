<?php
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- CSS Links -->
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/header-footer.css">
    <link rel="stylesheet" href="css/bootstrap.css"/>

	<!-- jQuery -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <title>Login to Portal</title>
</head>

<body>
	<?php include('include/header.php');?>

    <div class="container">
		<!-- <h1 class="form-heading">login Form</h1> -->
		<div class="login-form">
			<div class="main-div">
				<div class="panel">
				  <h1 style="font-family: 'Times New Roman', Times, serif;">User Login</h2>
				  <p>Please enter your email and password</p>
				  <span style="color:red;" ><?php echo htmlentities($_SESSION['errmsg']); ?><?php echo htmlentities($_SESSION['errmsg']="");?></span>
				</div>	  
				<form action="./login_back.php" method="get" id="Login">
					<div class="form-group">
					  <input type="email" class="form-control" name='email' id="email" placeholder="Enter Email Address">
					</div>
					<div class="form-group">
					  <input type="password" class="form-control" name='password' id="password" placeholder="Enter Password">
					</div>
					<div class="forgot">
					  <a href="reset.html">Forgot password?</a>
					</div>
					<button type="submit" id="login" class="btn btn-primary">Login</button>
				</form>
			</div>
		</div>
	</div>

  	<?php include('include/footer.php');?>

	<script>
		$("#login").click(function() {
		var email = $("#email").val();
		var password = $("#password").val();

		if (email == '' || password == '') {
			swal({
			title: "Fields Empty",
			text: "Please, check the missing field..!",
			icon: "warning",
			button: "Ok",
			});
		} 
		// else {
		//   swal({
		//     title: "Successfully Submitted..!",
		//     icon: "success",
		//     button: "Ok",
		//   });
		// }
		});
	</script>

</body>
</html>