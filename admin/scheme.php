<?php
session_start();
include('includes/config.php');
if( strlen($_SESSION['alogin']) == 0) header('location:index.php');
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Applied Scheme</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
</head>
<body>
<?php include('includes/header.php');?>
<?php if($_SESSION['alogin']!="") include('includes/menubar.php'); ?>

<!-- Scheme Container-->
<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">All Schemes </h1>
            </div>
        </div>
        <div class="row" >
            <div class="col-md-5">
                <div class="scheme">
                    <div class="scheme-heading">
                        <h3>Current Available Schemes</h3>
                        <img src="./img/small-arrow.JPG" alt="">
                    </div>
                    <div class="scheme-name-box">
                        <div class="scheme-name"><a href="particular-scheme.php?scheme_number=TR1234">Individual Tree Planting Scheme</a></div>
                        <div class="scheme-name"><a href="particular-scheme.php?scheme_number=IR4567">Individual Irrigation Scheme</a></div>
                        <div class="scheme-name"><a href="particular-scheme.php?scheme_number=FR7890">Individual Farms Scheme</a></div>
                        <div class="scheme-name"><a href="particular-scheme.php?scheme_number=AR1478">Herd For Animals Scheme</a></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="col-md-6"> </div> -->
        </div>
    </div>
</div>


<?php include('includes/footer.php');?>
<script src="assets/js/jquery-1.11.1.js"></script>
<script src="assets/js/bootstrap.js"></script>
</body>
</html>