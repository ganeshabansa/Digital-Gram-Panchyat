<?php
session_start();
error_reporting(0);

if( strlen($_SESSION['login']) > 0 ) {
    $show = true;
} else {
    header('location:index.php');
    exit();
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
	<link rel="stylesheet" href="css/scheme-info.css">

	<title>Tree Planting Scheme</title>
</head>

<body>
    <?php include('include/header.php');?>

	<div class="section">
		<div class="contain">
		<div class="scheme-head">
			<h3 class="scheme-heading">Individual Tree Planting Scheme</h3>
		</div>
		<div class="doc-head">
			<h5>List of Required Documents : </h5>
			<hr>
		</div>
		<div class="doc-list">
			<ol>
			<li>Gram Panchayat Gram Sabha Resolution Year 2021-2022</li>
			<li>Aadhar Card</li>
			<li>Caste Certificate</li>
			<li>Domicile Certificate</li>
			<li>Bank Passbook</li>
			<li>Satbara</li>
			<li>Job Card</li>
			<li>Certificate of Department of Agriculture for not availing the benifit earlier</li>
			<li>No Objection Certificate</li>
			<li>Two coppies of complete proposal should be submitted</li>
			</ol>
		</div>

		<div class="checkbox">
			<input type="checkbox" name="check-button" id="angryCheckbox">
			I agree for the scheme and I have the real documents which are mentioned as above. I will attach
			all necessary documents as per the propsal.
		</div>
		<form action="personal-information.php" method="get">
			<input type="hidden" name="schemeName" value="tree_planting">
			<div class="buttons">
				<a href="./index.php" class="back btn btn-primary"> Back</a>
				<button type="submit" id="continue" class="submit btn btn-success" disabled> Continue</a>
			</div>
		</form>
		</div>
	</div>

	<?php include('include/footer.php');?>

	<script>
		checkBox = document.getElementById('angryCheckbox').addEventListener('click', event => {
			var element = document.getElementById("continue");
			if(event.target.checked) {
                document.getElementById('continue').disabled = false;
			} else {
                document.getElementById('continue').disabled = true;
			}
		});
	</script>
    
    <!-- javaScripts libraries-->
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- pooper.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <!-- bootstrap.js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</body>
</html>