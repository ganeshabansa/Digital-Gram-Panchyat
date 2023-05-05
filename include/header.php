<?php
error_reporting(0);
?>
<header >
    <!-- Mini Bar -->
    <div class="topStrip">
        <!-- Logo and Name -->
        <ul class="leftLink">
            <div class="minibar-logo">
                <img class="flag" src="https://swachhbharatmission.gov.in/SBMCMS/writereaddata/images/indianflag.jpg" alt="Indian Flag"/>
                <h6>Government of India</h6>
            </div>
        </ul>

        <!-- Ṣearch Bar and 'A+', 'A', 'A-' Signs -->
        <ul class="rightLink">
            <div id="accessControl" class="textResizeWrapper">
                <input type="submit" name="" value="A-" title="Decrease Font Size" class="fontScaler normal font-normal" />
                <input type="submit" name="" value="A" title="Normal Font Size" class="fontScaler current large font-large" />
                <input type="submit" name="" value="A+" title="Increase Font Size" class="fontScaler largest font-largest" />
            </div>

            <!-- Search Bar -->
            <div class="searchBox">
                <div class="inputSearch">
                    <input type="text" title="Search" class="searchInput ui-autocomplete-input" placeholder="Search" />
                    <input type="submit" title="Go" class="searchSubmit" value="Search"/>
                </div>
            </div>
        </ul>
    </div>

    <!-- Navbar -->
    <div class="container-fluid custom-container" style="max-height:100px">
        <div class="siteLogo">
            <img src="./img/logo1.png" alt="" height="80" width="80">
            <!-- <div class="mlogo">
                <h2 class='mlogo-font' font-family="Times New Roman, serif">Gram Vikas Yojna</h2>
                <h3 class='mlogo-font' > Gangapur </h3>
            </div> -->
        </div>
        <div class="middle-navbar">
            <section class="nav">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                <a class="nav-link" href="./login.php">Login</a>
                <a class="nav-link" href="./registration.php">Registration</a>
                <a class="nav-link" href="./contact.php">Contact Us</a>
            </section>
        </div>
        <div class="img1">
            <img class="iimg1" src="./img/sj.png" alt="" height="80" width="80">
        </div>
    </div>

</header>

<!-- Moving Text -->
<div class="class-marquee">
    <marquee behavior="" direction="" width="100%" scrolldelay="1sec">
        <p>Welcome To Digital Gram Panchayat, Gangapur</p>
    </marquee>
</div>