<?php
session_start();
error_reporting(0);

if( strlen($_SESSION['login']) > 0 ) {
    $show = true;
} else {
    $show = false;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- CSS Links -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header-footer.css">
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <!-- <link rel="stylesheet" href="css/login.css"> -->

    <!-- Styles -->
    <style>
        .arrow {
            border: solid black;
            border-width: 0 3px 3px 0;
            display: inline-block;
            padding: 12px;
        }

        .arrow-prev {
            left: 10px;
            position: absolute;
            top: 50%;
            transform: translateY(-50%) rotate(135deg);

        }

        .arrow-next {
            right: 10px;
            position: absolute;
            top: 50%;
            transform: translateY(-50%) rotate(-45deg);
        }

        [id^="item"] {
            display: none;
        }

        .item-1 {
            z-index: 2;
            opacity: 1;
            background: url('./img/sbka-sath.jpg');
            background-size: cover;
        }

        .item-2 {
            background: url('./img/yojna-yadi.jpg');
            background-size: cover;
            box-sizing: border-box;
        }

        *:target~.item-1 {
            opacity: 0;
        }

        #item-1:target~.item-1 {
            opacity: 1;

        }

        #item-2:target~.item-2,
        #item-3:target~.item-3 {
            z-index: 3;
            opacity: 1;
        }

        .middle {
            display: flex;
        }

    </style>

    <title>Digital Gram Panchyat E-Portal</title>
</head>
    
<body>
    <?php include('include/header.php');?>
    
    <div class="middle-body">
        <!-- Left Secontion - Adhar Link, Notice, Helpline -->
        <div class="col-sm-3 col-xs-12 notice">
            
            <div class="alert alert-warning text-center">
                <a href="https://uidai.gov.in/en/my-aadhaar/about-your-aadhaar/aadhaar-myth-busters.html" target="_blank">
                    <img src="./img/PostBank.jpg" alt="Post Bank" width="100%" />
                    <h4 id="alertText">Guidelines for Aadhaar linking to bank account</h4>
                </a>
            </div>

            <div class="notice-panel">
                <div class="notice-heading">
                    <div class="bell-icon">
                        <img src="./img/bell.JPG" alt="Notice Icon">
                    </div>
                    <div class="notice-panel-text text-center">
                        <h3>Notices</h3>
                    </div>
                </div>
                <div class="notices text-center">
                    <ul>
                        <li>Notice - 1</li>
                        <li>Notice - 2</li>
                        <li>Notice - 3</li>
                        <li>Notice - 4</li>
                    </ul>
                </div>
            </div>
            
            <div class="notice-panel">
                <div class="notice-heading">
                    <div class="bell-icon">
                        <img src="./img/call.JPG" alt="Call Icon">
                    </div>
                    <div class="notice-panel-text text-center">
                        <h3 id="panel-text">Helpline Number</h3>
                    </div>
                </div>
                <div class="notices text-center">
                    <div class="help-number"><a href="">00-000000000</a></div>
                </div>
            </div>
        </div>

        <!-- Middle Section - Carousel, Application Form -->
        <div class="col-sm-6 col-xs-12">
            <div class="middle-panel panel-default">
                <!-- Wrapper for slides -->
                <div class="carousel-wrapper">
                    <span id="item-1"></span>
                    <span id="item-2"></span>
                    <div class="carousel-item item-1">
                        <a href="#item-1" class="arrow-prev arrow"></a>
                        <a href="#item-2" class="arrow-next arrow"></a>
                    </div>

                    <div class="carousel-item item-2">
                        <a href="#item-1" class="arrow-prev arrow"></a>
                        <a href="#item-1" class="arrow-next arrow"></a>
                    </div>

                </div>
            </div>

            <?php if ( $show === true ) { //var_dump($_SESSION); ?>
            <?php } ?>

            <div class="scheme">
                <div class="scheme-heading">
                    <?php if ( $show === true ) { ?> 
                        <h3>Click To Apply For the Scheme</h3>
                    <?php } else { ?>
                        <h3>Please Login to Apply for following Scheme</h3>
                    <?php } ?>
                    <img src="./img/small-arrow.JPG" alt="">
                </div>
                <div class="scheme-name">
                    <div class="scheme4"><a href="./tree_planting.php">Individual Tree Planting Scheme</a></div>
                    <div class="scheme3"><a href="./individual_irrigation.php">Individual Irrigation Scheme</a></div>
                    <div class="scheme1"><a href="./individual_farms.php">Individual Farms Scheme</a></div>
                    <div class="scheme2"><a href="#">Herd For Animals Scheme - Coming Soon</a></div>
                </div>
            </div>
        </div>

        <!-- Right Section - Profile, Scheme Details, Logout -->
        <div class="col-sm-3 col-xs-12 notice">
            
            <div class="alert alert-warning text-center">
                <a href="https://uidai.gov.in/en/my-aadhaar/about-your-aadhaar/aadhaar-myth-busters.html" target="_blank">
                    <img src="./img/PostBank.jpg" alt="Post Bank" width="100%" />
                    <h4 id="alertText">Guidelines for Aadhaar linking to bank account</h4>
                </a>
            </div>

            <?php if ( $show === true ) { //var_dump($_SESSION); ?>                
            <div class="clickproceed">
                <div>
                    <!-- <img src="./img/down-arrows.JPG" alt=""> -->
                    <h4 class='text-center'>Welcome <?= $_SESSION['name'] ?>! </h4>
                </div>
                <div class="box">
                    <div class="box-items"><a href="./dashboard.php">My Profile</a></div>
                    <div class="box-items"><a href="">Track Your Application</a></div>
                    <!-- <div class="box-items"><a href="">My Cancelled Scheme</a></div> -->
                    <div class="box-items"><a href="./logout.php">LogOut</a></div>
                </div>
            </div>
            <?php } else {  } ?>

        </div>
    </div>

    <div class="container quote-box text-center">
        <div class="card">
                <div class="card-body">
                <blockquote class="blockquote mb-0">
                <p>A wonderful blend of technology & people power for India's growth, 'MyGov' has several discussion forums, on-line & on-ground tasks. I am delighted to invite you to join 'MyGov' & contribute towards taking India to greater heights of progress.</p>
                <footer class="blockquote-footer">Narendra Modi <cite title="Source Title">Times of India</cite></footer>
                </blockquote>
            </div>
        </div>
    </div>

    <!-- <section id="contact">
        <div class="section-content">
            <h1 class="section-header"> <label class="get-in" style="font-size: 20px;"> Get in </label><span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> Touch with us</span></h1>
            <h3> Feel Free To Contact Us</h3>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="well well-sm">
                        <form>
                            <div class="row about">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">
                                            Name</label>
                                        <input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
                                    </div>
                                    <div class="form-group">
                                        <label for="email">
                                            Email Address</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                            </span>
                                            <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="subject">
                                            Subject</label>
                                        <select id="subject" name="subject" class="form-control" required="required">
                                            <option value="na" selected="">Choose One:</option>
                                            <option value="service">General Customer Service</option>
                                            <option value="suggestions">Suggestions</option>
                                            <option value="product">Product Support</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">
                                            Message</label>
                                        <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary pull-right" id="btnContactUs" style="font-size: 20px;">
                                        Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <form class="address">
                        <legend><span class="glyphicon glyphicon-globe"></span> Our office</legend>
                        <address>
                            <strong>P224+7WF,</strong><br>
                            Local Government Office, <br>
                            Nutan Colony,<br>
                            Gangapur Maharashtra.<br>
                            <abbr title="Phone">
                                Pin : </abbr>
                            431 109
                        </address>
                        <address>
                            <strong>Full Name</strong><br>
                            <a href="mailto:#">first.last@example.com</a>
                        </address>
                    </form>
                </div>
            </div>
        </div>
    </section> -->
    

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