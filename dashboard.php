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

    <!-- jQuery -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <style>
    .header{
        box-sizing: border-box;
        text-align: center;
        margin: 10px;
    }
    </style>
	<title>Dashboard</title>
</head>

<body>
    <?php include('include/header.php');?>

    <header class="header">
        <nav>
            <h2>Gram-Vikas Yojna</h2>
        </nav>
        <p style="font-size: 16px;">
            You are now logged in. you can logout by clicking on signout link given below.
        </p>
    </header>

    <div id="center">
        <div id="contentbox">
            <div id="contentbox">
            <?php 
            
            $sql = "SELECT * FROM member where mem_id = $loggedin_id";
            
            while ( $rows = mysqli_fetch_array( $result ) ) { ?>
                <div id="signup">
                    <div id="signup-st">
                        <form action="./execute.php" method="get" id="signin" id="reg">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad">
                                <div class="panel panel-info">
                                    <div class="panel-heading" style="height: 45px;">
                                        <h3 style="margin: 0px;">Welcome <?php echo $loggedin_session; ?>,
                                        </h3>
                                    </div>
                                    <div id="signup">
                                            <div id="reg-head" class="headrg" style="font-size: 16px; margin: 5px;">Your
                                                Profile</div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-3 col-lg-3 "> <img alt="User Pic"
                                                            src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png"
                                                            class="img-circle img-responsive"> </div>
                                                    <div class=" col-md-9 col-lg-9 ">
                                                        <table class="table table-user-information">
                                                            <tbody>
                                                                <tr id="lg-1">
                                                                    <td class="tl-1">
                                                                        <div style="text-align: left;" id=tb-name>Reg
                                                                            id:</div>
                                                                    </td>
                                                                    <td class="tl-4">
                                                                        <?php echo $rows['mem_id']; ?>
                                                                    </td>
                                                                </tr>
                                                                <tr id="lg-1">
                                                                    <td class="tl-1">
                                                                        <div style="text-align:left;" id=tb-name>
                                                                            Username:</div>
                                                                    </td>
                                                                    <td class="tl-4">
                                                                        <?php echo $rows['ename']; ?>
                                                                    </td>
                                                                </tr>
                                                                <tr id="lg-1">
                                                                    <td class="tl-1">
                                                                        <div style="text-align:left;" id=tb-name>Email:
                                                                        </div>
                                                                    </td>
                                                                    <td class="tl-4">
                                                                        <?php echo $rows['em']; ?>
                                                                    </td>
                                                                </tr>
                                                                <tr id="lg-1">
                                                                    <td class="tl-1">
                                                                        <div style="text-align:left;" id=tb-name>
                                                                            Address:</div>
                                                                    </td>
                                                                    <td class="tl-4">
                                                                        <?php echo $rows['addr']; ?>
                                                                    </td>
                                                                </tr>
                                                                <tr id="lg-1">
                                                                    <td class="tl-1">
                                                                        <div style="text-align:left;" id=tb-name>City:
                                                                        </div>
                                                                    </td>
                                                                    <td class="tl-4">
                                                                        <?php echo $rows['c']; ?>
                                                                    </td>
                                                                </tr>
                                                                <tr id="lg-1">
                                                                    <td class="tl-1">
                                                                        <div style="text-align:left;" id=tb-name>State:
                                                                        </div>
                                                                    </td>
                                                                    <td class="tl-4">
                                                                        <?php echo $rows['s']; ?>
                                                                    </td>
                                                                </tr>
                                                                <tr id="lg-1">
                                                                    <td class="tl-1">
                                                                        <div style="text-align:left;" id=tb-name>
                                                                            Country:</div>
                                                                    </td>
                                                                    <td class="tl-4">
                                                                        <?php echo $rows['count']; ?>
                                                                    </td>
                                                                </tr>
                                                                <tr id="lg-1">
                                                                    <td class="tl-1">
                                                                        <div style="text-align:left;" id=tb-name>Pin:
                                                                        </div>
                                                                    </td>
                                                                    <td class="tl-4">
                                                                        <?php echo $rows['pi']; ?>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                        <a href="./logout.php" class="btn btn-primary">Logout</a>
                                                        <a href="./deleteac.php" class="btn btn-primary">Delete Account</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel-footer">
                                                <a data-original-title="Broadcast Message" data-toggle="tooltip"
                                                    type="button" class="btn btn-sm btn-primary"><i
                                                        class="glyphicon glyphicon-envelope"></i></a>
                                                <span class="pull-right">
                                                    <a href="edit.html" data-original-title="Edit this user"
                                                        data-toggle="tooltip" type="button"
                                                        class="btn btn-sm btn-warning"><i
                                                            class="glyphicon glyphicon-edit"></i></a>
                                                    <a data-original-title="Remove this user" data-toggle="tooltip"
                                                        type="button" class="btn btn-sm btn-danger"><i
                                                            class="glyphicon glyphicon-remove"></i></a>
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                <?php
            } ?>

            </div>
        </div>
    </div>
    
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