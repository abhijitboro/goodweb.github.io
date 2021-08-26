<?php

session_start();
if (!$_SESSION['email']) {
  header("location: admin.php");
}

?>

<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>GoodWEB Solutions - Responsive HTML5 Landing Page Template</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body style="background-color: #eee;">

    <!-- LOADER -->
    <div id="preloader">
        <div class="loader">
			<div class="loader__bar"></div>
			<div class="loader__bar"></div>
			<div class="loader__bar"></div>
			<div class="loader__bar"></div>
			<div class="loader__bar"></div>
			<div class="loader__ball"></div>
		</div>
    </div><!-- end loader -->
    <!-- END LOADER -->
    
	<div class="top-bar">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="left-top">
						<div class="email-box">
                            <a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i>
                               <?php
                                    
                                    require_once("connection.php");
                                    // queries select method
                                    $sql = "SELECT * FROM webusr ORDER BY email DESC LIMIT 1";
                                    $collect = mysqli_query($conn, $sql);
                                    // fetching queries as array
                                    while ($rows = mysqli_fetch_array($collect)) {
                                        echo $rows[2];
                                    }
                               ?>
                            </a>
						</div>
						<div class="phone-box">
                            <a href="tel:1234567890"><i class="fa fa-phone" aria-hidden="true"></i>
                            <?php
                                    
                                    require_once("connection.php");
                                    // queries select method
                                    $sql = "SELECT * FROM webusr ORDER BY email DESC LIMIT 1";
                                    $collect = mysqli_query($conn, $sql);
                                    // fetching queries as array
                                    while ($rows = mysqli_fetch_array($collect)) {
                                        echo $rows[4];
                                    }
                               ?>
                            </a>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="right-top">
						<div class="social-box">
							<ul>
                                <li><a href="mailbox.php"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-rss-square" aria-hidden="true"></i></a></li>
							<ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <header class="header header_style_01">
        <nav class="megamenu navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="images/logos/logo.png" alt="image"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="active" href="index.php">Home</a></li>
                        <li><a href="about-us.php">About us</a></li>
                        <li><a href="services.php">Our Services</a></li>
                        <li><a href="portfolio.php">Portfolio</a></li>
                        <li><a href="features.php">Features</a></li>
                        <li><a href="testimonials.php">Testimonials</a></li>
                        <li><a href="pricing.php">Pricing</a></li>
						<li><a href="inf.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
<center>

<div id="form" class="row" style="margin-top: 5%; margin-left: 10px; margin-right: 10px; padding: 30px; width: 800px; height: auto; background-color: white; border: 0px solid #aaa; border-radius: 0px; text-align: justify;">
<?php
// connection reqired here
require_once("connection.php")
?>

<!-- //////////////////////////////////////////////////////////////// -->
<?php

// queries select method
$sql = "SELECT * FROM webusr ORDER BY email DESC LIMIT 1";

// checks queries
$collect = mysqli_query($conn, $sql);

// fetching queries as array
while ($rows = mysqli_fetch_array($collect)) {
    echo "<h3 style='margin-top: 5%; margin-left: 20%;'>"."Your Registration Successfully Done On ".$rows[5]."</h3>"."</br>";
    // echo "<h3 style='margin-left: 30%;'>"."First Name: ".$rows[0]."</h3>"."</br>";
    // echo "<h3 style='margin-left: 30%;'>"."Last Name: ".$rows[1]."</h3>"."</br>";
    // echo "<h3 style='margin-left: 30%;'>"."Email Address: ".$rows[2]."</h3>"."</br>";
    // echo "<h3 style='margin-left: 30%;'>"."Phone Number: ".$rows[4]."</h3>";
  }
?>
<!-- /////////////////////////////////////////////////////////////////// -->
</div>
</center>
	

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
    <script src="js/portfolio.js"></script>
    <script src="js/hoverdir.js"></script>
    <script>
        $(document).ready(function(){
            $("#contactform").click(function(){
                $(this).fadeOut("fast");
            });
        });
    </script>
</body>
</html>
