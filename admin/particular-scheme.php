<?php
session_start();
include('includes/config.php');
if( strlen($_SESSION['alogin']) == 0) header('location:index.php');

$scheme_number = $_GET['scheme_number'];

if ( $scheme_number == 'TR1234' ) {
    // echo $scheme_number;
} elseif ($scheme_number == 'IR4567') {
} elseif ($scheme_number == 'FR7890') {
    $table_name = "individual_farms";
} elseif ($scheme_number == 'AR1478') {
} else {
    echo "Something Went Wrong!";
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title></title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
</head>
<body>
<?php include('includes/header.php');?>
<?php if($_SESSION['alogin']!="") include('includes/menubar.php'); ?>

<!-- Content Goes Here -->
<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">
                    <?php 
                    if ( $scheme_number == 'TR1234' ) {
                        echo "Individual Tree Planting Scheme";
                        
                    } elseif ($scheme_number == 'IR4567') {
                        echo "Individual Irrigation Scheme";
                    } elseif ($scheme_number == 'FR7890') {
                        echo "Individual Farms Scheme";
                    } elseif ($scheme_number == 'AR1478') {
                        echo "Herd For Animals Scheme";
                    } else {
                        echo "No Schemes are available!";
                    }
                    ?>
                </h1>
            </div>
        </div>
        <div class="row" >
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    Applied Users List
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive table-bordered">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>User Name </th>
                                        <th>User E-Mail </th>
                                        <th>User Phone Number </th>
                                        <th>Village </th>
                                        <!-- <th>Semester</th> -->
                                        <!-- <th>Enrollment Date</th> -->
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = mysqli_query($con,"select * from $table_name");
                                    $cnt = 1;
                                    while( $row = mysqli_fetch_array($sql) ) { ?>
                                        <tr>
                                            <td><?php echo $cnt;?></td>
                                            <td><?php echo htmlentities($row['Name']);?></td>
                                            <td><?php echo htmlentities($row['email']);?></td>
                                            <td><?php echo htmlentities($row['phone']);?></td>
                                            <td><?php echo htmlentities($row['village']);?></td>
                                            <!-- <td><?php echo htmlentities($row['sem']);?></td> -->
                                            <!-- <td><?php echo htmlentities($row['edate']);?></td> -->
                                            <td>
                                            <a href="print.php?id=<?php echo $row['certno']?>" target="_blank">
                                                <button class="btn btn-primary"><i class="fa fa-print "></i> Print</button> </a>                                   
                                            </td>
                                        </tr>
                                    <?php $cnt++; } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!--  End  Bordered Table  -->
                </div>
                </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php');?>
<script src="assets/js/jquery-1.11.1.js"></script>
<script src="assets/js/bootstrap.js"></script>
</body>
</html>