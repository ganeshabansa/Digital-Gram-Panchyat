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
	<link rel="stylesheet" href="css/personal-documents.css">

	<title>Upload</title>
</head>


<body>
    <?php include('include/header.php');?>

    <div class="container1">
        <div class="container mt-4">
            <div class="registration">
                <h3>Personal Information</h3>
            </div>
            <hr class="line">
            <div class="form">
                <form enctype="multipart/form-data" method="POST" action="submit_form.php" class="formm">
                    <!-- Farm Info -->
                    <div class="farm-info">
                        <button type="button" class="btn btn-outline-secondary ebtn">Farm Details</button>
                        <hr class="brk">
                        <div class="form-row">
                            <div class="form-group required col-md-6">
                                <label for="City" class="control-label">Village</label>
                                <input type="text" class="form-control" name="village" id="City" placeholder="Enter City">
                            </div>
                            <div class="form-group required col-md-6">
                                <label for="GroupNo" class="control-label">Group No</label>
                                <input type="text" class="form-control" name="gname" id="GroupNo" placeholder="Enter Group No">
                            </div>
                            <div class="form-group required col-md-6">
                                <label for="inputPassword4" class="control-label">Total Farm Area</label>
                                <input type="area" class="form-control" name="area" id="farmarea" placeholder="Enter Total Farm Area">
                            </div>
                        </div>
                        <div class="form-row">
                            <label for="" class="question">Are you benified before ?</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inline" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">No</label>
                            </div>
                            <div class="file">
                                <input type="file" name="benified_file" class="input-file">
                            </div>
                        </div>
                    </div>

                    <!-- Addhar Info -->
                    <div class="aadhar-info">
                        <button type="button" class="btn btn-outline-secondary ebtn">Aadhar Details</button>
                        <hr class="brk">
                        <div class="form-row">
                            <div class="form-group required col-md-6">
                                <label for="aadharnumber" class="control-label">Aadhar Number</label>
                                <input type="text" class="form-control" name= "adhar" id="aadharnumber" placeholder="Aadhar Number">
                            </div>
                        </div>

                        <div class="form-group required form-row">
                            <label for="aadharnumber" class="control-label aadhar">Upload Your Aadhar Card</label>
                            <div class="file2">
                                <input type="file" name="adhar_file" class="input-file2">
                            </div>
                        </div>
                    </div>

                    <!-- Caste Info -->
                    <div class="caste-info">
                        <button type="button" class="btn btn-outline-secondary ebtn">Caste Details</button>
                        <hr class="brk">
                        <div class="form-row">
                            <div class="form-group required col-md-6">
                                <label for="userName" class="control-label">User Name</label>
                                <input type="text" class="form-control" name="username" id="userName" placeholder="Enter your name">
                            </div>
                            <div class="form-group required col-md-6">
                                <label for="crNo" class="control-label">Certificate No</label>
                                <input type="text" class="form-control" name="certno" id="crNo"
                                    placeholder="Enter caste certificate no">
                            </div>
                        </div>
                        <div class="form-group required form-row">
                            <label for="castnumber" class="control-label aadhar">Upload Your Caste Certificate</label>
                            <div class="file3">
                                <input type="file" name="cast_certfile" class="input-file2">
                            </div>
                        </div>
                    </div>

                    <!-- Domicile Info -->
                    <div class="domicile-info">
                        <button type="button" class="btn btn-outline-secondary ebtn">Domicile Details</button>
                        <hr class="brk">
                        <div class="form-row">
                            <div class="form-group required col-md-6">
                                <label for="userName" class="control-label">User Name</label>
                                <input type="text" class="form-control" name="uname" id="userName" placeholder="Enter your name">
                            </div>
                            <div class="form-group required col-md-6">
                                <label for="crNo" class="control-label">Certificate No</label>
                                <input type="text" class="form-control" name="crno" id="crNo"
                                    placeholder="Enter domicile certificate no">
                            </div>
                        </div>
                        <div class="form-group required form-row">
                            <label for="aadharnumber" class="control-label aadhar">Upload Your Domicile
                                Certificate</label>
                            <div class="file3">
                                <input type="file" name="domicile_cert" class="input-file2">
                            </div>
                        </div>
                    </div>

                    <!-- Bank Details Info -->
                    <div class="bank-info">
                        <button type="button" class="btn btn-outline-secondary ebtn">Bank Details</button>
                        <hr class="brk">
                        <div class="form-row">
                            <div class="form-group required col-md-4">
                                <label for="accNo" class="control-label">Account Number</label>
                                <input type="text" class="form-control" name="accno" id="accNo"
                                    placeholder="Enter your account Number">
                            </div>
                            <div class="form-group required col-md-3">
                                <label for="IFSC" class="control-label">IFSC Code</label>
                                <input type="text" class="form-control" name="ifsc" id="IFSC" placeholder="Enter IFSC code">
                            </div>
                            <div class="form-group required col-md-5">
                                <label for="branchname" class="control-label">Branch Nsme</label>
                                <input type="text" class="form-control" name="branch" id="branch" placeholder="Enter branch name">
                            </div>
                        </div>
                        <div class="form-group required form-row">
                            <label for="aadharnumber" class="control-label aadhar">Upload Your Passbook</label>
                            <div class="file3">
                                <input type="file" name="passbook_file" class="input-file2">
                            </div>
                        </div>
                    </div>
                    <hr>

                    <!-- Terms and Conditions Checkbox  -->
                    <div class="form-group agreement">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label agreement-statement" for="gridCheck">
                                As I registered as a Laborer under this scheme. I am willing to work with my family. If
                                the farms are sactioned to me under this scheme, my farmland will be fully Horticulture.
                            </label>
                        </div>
                    </div>
                    
                    <!-- Previous file data -->
                    <input type="hidden" name="name" value="<?= $_GET['Name']?>">
                    <input type="hidden" name="email" value="<?= $_GET['email'] ?>">
                    <input type="hidden" name="phone" value="<?= $_GET['phone'] ?>">
                    <input type="hidden" name="address" value="<?= $_GET['address'] ?>">
                    <input type="hidden" name="city" value="<?= $_GET['city'] ?>">
                    <input type="hidden" name="pin" value="<?= $_GET['pin'] ?>">
                    <input type="hidden" name="state" value="<?= "maharashtra" ?>">
                    <input type="hidden" name="gender" value="<?= $_GET['gender'] ?>">
                    <input type="hidden" name="age" value="<?= $_GET['age'] ?>">
                    <input type="hidden" name="age" value="<?= $_GET['schemeName'] ?>">

                    <!-- Go-Back and Submit Button -->
                    <div class="buttons">
                        <a href="./personal-information.php" class="btn btn-primary">Back</a>
                        <input type="submit" name="submit" value="Send" id="submit" class="btn btn-primary disabled" >
                    </div>
                </form>
            </div>
        </div>
    </div>

	<?php include('include/footer.php');?>

	<script>
		checkBox = document.getElementById('gridCheck').addEventListener('click', event => {
			var element = document.getElementById("submit");
			if(event.target.checked) {
				element.classList.remove("disabled");
			} else {
				element.classList.add("disabled");
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