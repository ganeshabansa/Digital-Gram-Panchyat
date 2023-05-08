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
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="css/track-application.css">

    <!-- jQuery -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <style>
      .container {
    display: flex;
    flex-direction: row;
    justify-content: center;
    gap: 4rem;
  }

  .box {
    padding: 1rem;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
  }

  .box.text {
    font-size: 1.2rem;
    font-weight: bold;
    text-align: center;
    background: #9ebffb;
  }

  .box.input {
    width: 300px;
    height: 40px;
    font-size: 1rem;
    padding: 0.5rem;
    background: #9ebffb;
  }

  .box.button {
    background-color: #007bff;
    color: #fff;
    border: none;
    cursor: pointer;
    font-size: 1.2rem;
    padding: 0.5rem 1rem;
    transition: all 0.2s ease-in-out;
  }

  .box.button:hover {
    background-color: #0069d9;
  }
        
    </style>

	<title>Track Your Application</title>
</head>
     
 

<body>
    <?php include('include/header.php');?>

    <!-- Your Code start here --> 
     <div class="outer-">
    
    <div class="container">
      <div class="box text">Enter the Tracking number of your Application to track the Status</div>
      <div class="box input"><input type="text" placeholder="Enter tracking number" style="width:100%;"></div>
      <div class="box button" style="center;">Submit</div>
    </div>
    
    </div>
   
    

    
    
 
        
    
    
    <!-- Your Code end here -->
    
	<?php include('include/footer.php');?>

	</script>

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