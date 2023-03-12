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

    <!-- jQuery -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <style>
    .registration {
        justify-content: center;
        text-align: center;
        border: 1px solid rgb(250, 171, 193);
        background-color: rgb(252, 206, 214);
        border-radius: 20px;
        padding: 5px;
    }

    .form-group.required .control-label:after {
        content: "*";
        color: red;
    }
    </style>
	<title>Enter Your Personal Information</title>
</head>

<body>
    <?php include('include/header.php');?>
    
    
    <div class="container">
        <div class="container mt-4">
            <div class="registration">
                <h3>Personal Information</h3>
            </div>
            <hr>
            <div class="formm">
                <form action="personal-documents.php" method="GET">
                    <div class="form-row">
                        <div class="form-group required col-md-6">
                            <label for="inputEmail4" class="control-label">Name</label>
                            <input type="text" class="form-control" name="Name" id="name" placeholder="User Name">
                        </div>
                        <div class="form-group required col-md-6">
                            <label for="inputEmail4" class="control-label">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                        </div>
                        <div class="form-group required col-md-6">
                            <label for="inputPassword4" class="control-label">Mobile No</label>
                            <input type="tel" class="form-control" name="phone" id="phone" placeholder="Mobile No">
                        </div>
                        <div class="form-group required col-md-6">
                            <label for="address" class="control-label">Address</label>
                            <input type="text" class="form-control" name="address" id="address" placeholder="Address">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group required col-md-6">
                            <label for="inputCity" class="control-label">City</label>
                            <input type="text" class="form-control" name="city" id="inputCity" placeholder="City">
                        </div>
                        <div class="form-group required col-md-6">
                            <label for="inputPin" class="control-label">Pin</label>
                            <input type="text" class="form-control" name="pin" id="inputPin">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group required col-md-6">
                            <label for="gender" class="control-label">Gender</label><br>
                            <select class="form-control" id="gender" name="gender">
                                <option>Default select</option>
                                <option value="female">Female</option>
                                <option value="male">Male</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group required">
                            <label for="age" class="control-label">Age</label> <br>
                            <select class="form-control" id="age" name="age">
                                <option>Default select</option>
                                <option>20</option>
                                <option>21</option>
                                <option>22</option>
                                <option>24</option>
                                <option>25</option>
                                <option>26</option>
                                <option>27</option>
                                <option>28</option>
                                <option>29</option>
                                <option>30</option>
                                <option>31</option>
                                <option>32</option>
                                <option>34</option>
                                <option>35</option>
                                <option>36</option>
                                <option>37</option>
                                <option>38</option>
                                <option>39</option>
                                <option>40</option>
                                <option>41</option>
                            </select>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                I agree, all the above information is correct.
                            </label>
                        </div>
                    </div>

                    <input type="hidden" name="name" value="<?= $_GET['schemeName']?>">
                    
                    <?php 
                    if ( !empty( $_GET['schemeName'] )  ) { ?>
                        <a href="./<?= $_GET['schemeName']?>.php" id="back" class="btn btn-primary">Back</a>
                    <?php } else { ?>
                        <a href="./index.php" id="back" class="btn btn-primary">Back</a>
                    <?php } ?>

                    <button type="submit" id="continue" class="btn btn-success float-right" value="Submit" disabled>Continue</a>
                </form>
            </div>
        </div>
    </div>

	<?php include('include/footer.php');?>

    <script>

		$("#continue, #gridCheck").click(function() {
            console.log("Clicked");
            var email = $("#email").val();
            var name = $("#name").val();
            var phone = $("#phone").val();
            var address = $("#address").val();
            var inputCity = $("#inputCity").val();
            var inputPin = $("#inputPin").val();
            var gridCheck = $("#gridCheck").val();
            var age = $("#age").val();
            checkBox = document.getElementById('gridCheck');

            if (email == '' || name == '' || phone == '' || address == ''  || inputCity == ''  || inputPin == '' || gender == '' || age == '') {
                swal({
                title: "Empty Fields",
                text: "Please, Fill all the details..!",
                icon: "warning",
                button: "Ok",
                });
                checkBox.checked = false;
            } else {
                document.getElementById('continue').disabled = false;
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