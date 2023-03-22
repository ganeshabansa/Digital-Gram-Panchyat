<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- CSS Links -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/header-footer.css">

    <title>Register Yourself!</title>
</head>

<body>
	<?php include('include/header.php');?>

	<div class="container mt-4">
		<div class="registration">
			<h3>Please Register Here</h3>
		</div>
		<hr>
		<div class="formm">
			<form action="./reg_back.php" method="GET">
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="inputEmail4">Employee Name :</label>
						<input type="text" class="form-control" name="EmpName" id="EmpName" placeholder="EmpName">
					</div>
					<div class="form-group col-md-6">
						<label for="inputEmail4">Email : </label>
						<input type="text" class="form-control" name="email" id="username" placeholder="Email">
					</div>
					<div class="form-group col-md-6">
						<label for="inputPassword4">Password : </label>
						<input type="password" class="form-control" name="password" id="password" placeholder="Password">
					</div>
					<div class="form-group col-md-6">
						<label for="inputPassword4">Confirm Password : </label>
						<input type="password" class="form-control" name="repassword" id="inputPassword4" placeholder="Password">
					</div>
				</div>
				
				<div class="form-group">
					<label for="inputAddress2">Address : </label>
					<input type="text" class="form-control" name="address" id="inputAddress2" placeholder="Apartment or floor">
				</div>

				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="inputCity">City : </label>
						<input type="text" class="form-control" name="city" id="inputCity">
					</div>
					<div class="form-group col-md-6">
						<label for="inputState">State : </label>
						<input type="text" class="form-control" name="state" id="state">
					</div>
					<div class="form-group col-md-6">
						<label for="inputCountry">Country : </label>
						<input type="text" class="form-control" name="country" id="country">
					</div>
					<div class="form-group col-md-2">
						<label for="inputPin">Pin : </label>
						<input type="number" class="form-control" name="pin" id="inputPin">
					</div>
				</div>

				<div class="center">
					<div class="form-group">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" id="gridCheck">
							<label class="form-check-label" for="gridCheck">
							Remember Me
							</label>
						</div>
					</div>
					<button type="submit" class="btn btn-primary">Sign up</button>
				</div>
			</form>
		</div>
	</div>

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