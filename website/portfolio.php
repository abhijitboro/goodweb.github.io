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
<body>

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
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about-us.php">About us</a></li>
                        <li><a href="services.php">Our Services</a></li>
                        <li><a class="active" href="portfolio.php">Portfolio</a></li>
                        <li><a href="features.php">Features</a></li>
                        <li><a href="testimonials.php">Testimonials</a></li>
                        <li><a href="pricing.php">Pricing</a></li>
						<li><a href="inf.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

   	<div class="banner-area banner-bg-1">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="banner">
						<h2>Our Portfolio</h2>
						<ul class="page-title-link">
							<li><a href="#">Home</a></li>
							<li><a href="#">Our Portfolio</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

    <div id="portfolio" class="section wb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Our Portfolio</h3>
                <p class="lead">We build professional website templates, web design projects, material designs and UI kits. <br>Some of our awesome completed projects in below.</p>
            </div><!-- end title -->
        </div><!-- end container -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <nav class="portfolio-filter text-center">
                        <ul>
                            <li><a class="btn btn-dark btn-radius btn-brd active" href="#" data-filter="*"><span class="oi hidden-xs" data-glyph="grid-three-up"></span> All</a></li>
                            <li><a class="btn btn-dark btn-radius btn-brd" data-toggle="tooltip" data-placement="top" title="5" href="#" data-filter=".cat1">Design</a></li>
                            <li><a class="btn btn-dark btn-radius btn-brd" href="#" data-toggle="tooltip" data-placement="top" title="12" data-filter=".cat2">Mockup</a></li>
                            <li><a class="btn btn-dark btn-radius btn-brd" href="#" data-toggle="tooltip" data-placement="top" title="21" data-filter=".cat3">Logos</a></li>
                            <li><a class="btn btn-dark btn-radius btn-brd" href="#" data-toggle="tooltip" data-placement="top" title="11" data-filter=".cat4">HTML</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <hr class="invis">

            <div id="da-thumbs" class="da-thumbs portfolio">
                <div class="post-media pitem item-w1 item-h1 cat1">
                    <a href="uploads/portfolio_01.jpg" data-rel="prettyPhoto[gal]">
                        <img src="uploads/portfolio_01.jpg" alt="" class="img-responsive">
                        <div>
                            <h3>Seahorse by Trevor <small>Web Design</small></h3>
                            <i class="flaticon-unlink"></i>
                        </div>
                    </a>
                </div>
                <div class="post-media pitem item-w1 item-h1 cat2">
                    <a href="uploads/portfolio_02.jpg" data-rel="prettyPhoto[gal]">
                        <img src="uploads/portfolio_02.jpg" alt="" class="img-responsive">
                        <div>
                            <h3>Tradested Mockop <small>Graphic Design</small></h3>
                            <i class="flaticon-unlink"></i>
                        </div>
                    </a>
                </div>
                <div class="post-media pitem item-w1 item-h1 cat1">
                    <a href="uploads/portfolio_03.jpg" data-rel="prettyPhoto[gal]">
                        <img src="uploads/portfolio_03.jpg" alt="" class="img-responsive">
                        <div>
                            <h3>Photography Material <small>Photography</small></h3>
                            <i class="flaticon-unlink"></i>
                        </div>
                    </a>
                </div>
                <div class="post-media pitem item-w1 item-h1 cat4">
                    <a href="uploads/portfolio_04.jpg" data-rel="prettyPhoto[gal]">
                        <img src="uploads/portfolio_04.jpg" alt="" class="img-responsive">
                        <div>
                            <h3>Responsive Menu <small>UI Design</small></h3>
                            <i class="flaticon-unlink"></i>
                        </div>
                    </a>
                </div>
                <div class="post-media pitem item-w1 item-h1 cat3">
                    <a href="uploads/portfolio_05.jpg" data-rel="prettyPhoto[gal]">
                        <img src="uploads/portfolio_05.jpg" alt="" class="img-responsive">
                        <div>
                            <h3>SnowMaker App <small>Application</small></h3>
                            <i class="flaticon-unlink"></i>
                        </div>
                    </a>
                </div>
                <div class="post-media pitem item-w1 item-h1 cat2">
                    <a href="uploads/portfolio_06.jpg" data-rel="prettyPhoto[gal]">
                        <img src="uploads/portfolio_06.jpg" alt="" class="img-responsive">
                        <div>
                            <h3>3D Mockups <small>Graphic Design</small></h3>
                            <i class="flaticon-unlink"></i>
                        </div>
                    </a>
                </div>
                <div class="post-media pitem item-w1 item-h1 cat1">
                    <a href="uploads/portfolio_07.jpg" data-rel="prettyPhoto[gal]">
                        <img src="uploads/portfolio_07.jpg" alt="" class="img-responsive">
                        <div>
                            <h3>Best of Design <small>Web Design</small></h3>
                            <i class="flaticon-unlink"></i>
                        </div>
                    </a>
                </div>
                <div class="post-media pitem item-w1 item-h1 cat4">
                    <a href="uploads/portfolio_08.jpg" data-rel="prettyPhoto[gal]">
                        <img src="uploads/portfolio_08.jpg" alt="" class="img-responsive">
                        <div>
                            <h3>Admin Dashboard <small>Admin Template</small></h3>
                            <i class="flaticon-unlink"></i>
                        </div>
                    </a>
                </div>
                <div class="post-media pitem item-w1 item-h1 cat3">
                    <a href="uploads/portfolio_09.jpg" data-rel="prettyPhoto[gal]">
                        <img src="uploads/portfolio_09.jpg" alt="" class="img-responsive">
                        <div>
                            <h3>Radio Mockup <small>Graphic Design</small></h3>
                            <i class="flaticon-unlink"></i>
                        </div>
                    </a>
                </div>

                <div class="post-media pitem item-w1 item-h1 cat2">
                    <a href="uploads/portfolio_10.jpg" data-rel="prettyPhoto[gal]">
                        <img src="uploads/portfolio_10.jpg" alt="" class="img-responsive">
                        <div>
                            <h3>Danny Jeffers <small>Web Design</small></h3>
                            <i class="flaticon-unlink"></i>
                        </div>
                    </a>
                </div>
            </div><!-- end portfolio -->
        </div><!-- end container -->
    </div><!-- end section -->
	
	<div id="services" class="parallax section lb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Our Service</h3>
                <p class="lead">Our Service unlimited solutions to all your business needs. in the installation package we prepare search engine optimization, social media support, we provide corporate identity and graphic design services.</p>
            </div><!-- end title -->

            <div class="owl-services owl-carousel owl-theme">
                <div class="service-widget">
                    <div class="post-media wow fadeIn">
                        <a href="uploads/service_01.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                        <img src="uploads/service_01.jpg" alt="" class="img-responsive img-rounded">
                    </div>
					<div class="service-dit">
						<h3>Smart Swatch Editions</h3>
						<p>Aliquam sagittis ligula et sem lacinia, ut facilisis enim sollicitudin. Proin nisi est, convallis nec purus vitae, iaculis posuere sapien. Cum sociis natoque.</p>
					</div>
                </div>
                <!-- end service -->

                <div class="service-widget">
                    <div class="post-media wow fadeIn">
                        <a href="uploads/service_02.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                        <img src="uploads/service_02.jpg" alt="" class="img-responsive img-rounded">
                    </div>
					<div class="service-dit">
						<h3>Web UI Kit Design</h3>
						<p>Duis at tellus at dui tincidunt scelerisque nec sed felis. Suspendisse id dolor sed leo rutrum euismod. Nullam vestibulum fermentum erat. It nam auctor. </p>
					</div>
                </div>
                <!-- end service -->

                <div class="service-widget">
                    <div class="post-media wow fadeIn">
                        <a href="uploads/service_03.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                        <img src="uploads/service_03.jpg" alt="" class="img-responsive img-rounded">
                    </div>
					<div class="service-dit">
						<h3>Mobile Optimization</h3>
						<p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet lacus vitae massa sodales aliquam at eget quam. Integer ultricies et magna quis accumsan.</p>
					</div>
                </div>
                <!-- end service -->

                <div class="service-widget">
                    <div class="post-media wow fadeIn">
                        <a href="uploads/service_04.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                        <img src="uploads/service_04.jpg" alt="" class="img-responsive img-rounded">
                    </div>
					<div class="service-dit">
						<h3>Digital Design for Mac</h3>
						<p>Praesent in neque congue sapien lobortis faucibus id eget erat. <br>Pellentesque maximus rutrum felis. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
					</div>
                </div>
                <!-- end service -->
            </div><!-- end row -->

            <hr class="hr1">

            <div class="text-center">
                <a data-scroll href="#portfolio" class="btn btn-light btn-radius btn-brd">View Our Portfolio</a>
            </div>
        </div><!-- end container -->
    </div><!-- end section -->

    <div id="testimonials" class="parallax section db parallax-off" style="background-image:url('uploads/parallax_03.jpg');">
        <div class="container">
            <div class="section-title text-center">
                <h3>Testimonials</h3>
                <p class="lead">We thanks for all our awesome testimonials! There are hundreds of our happy customers! <br>Let's see what others say about GoodWEB Solutions website template!</p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="testi-carousel owl-carousel owl-theme">
                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Wonderful Support!</h3>
                                <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
                            </div>
                            <div class="testi-meta">
                                <img src="uploads/testi_01.png" alt="" class="img-responsive alignleft">
                                <h4>James Fernando <small>- Manager of Racer</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Awesome Services!</h3>
                                <p class="lead">Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you completed.</p>
                            </div>
                            <div class="testi-meta">
                                <img src="uploads/testi_02.png" alt="" class="img-responsive alignleft">
                                <h4>Jacques Philips <small>- Designer</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Great & Talented Team!</h3>
                                <p class="lead">The master-builder of human happines no one rejects, dislikes avoids pleasure itself, because it is very pursue pleasure. </p>
                            </div>
                            <div class="testi-meta">
                                <img src="uploads/testi_03.png" alt="" class="img-responsive alignleft">
                                <h4>Venanda Mercy <small>- Newyork City</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->
                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Wonderful Support!</h3>
                                <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
                            </div>
                            <div class="testi-meta">
                                <img src="uploads/testi_01.png" alt="" class="img-responsive alignleft">
                                <h4>James Fernando <small>- Manager of Racer</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Awesome Services!</h3>
                                <p class="lead">Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you completed.</p>
                            </div>
                            <div class="testi-meta">
                                <img src="uploads/testi_02.png" alt="" class="img-responsive alignleft">
                                <h4>Jacques Philips <small>- Designer</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Great & Talented Team!</h3>
                                <p class="lead">The master-builder of human happines no one rejects, dislikes avoids pleasure itself, because it is very pursue pleasure. </p>
                            </div>
                            <div class="testi-meta">
                                <img src="uploads/testi_03.png" alt="" class="img-responsive alignleft">
                                <h4>Venanda Mercy <small>- Newyork City</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div><!-- end testimonial -->
                    </div><!-- end carousel -->
                </div><!-- end col -->
            </div><!-- end row -->

            <hr class="hr1">

            <div class="row logos">
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="uploads/logo_01.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="uploads/logo_02.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="uploads/logo_03.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="uploads/logo_04.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="uploads/logo_05.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="uploads/logo_06.png" alt="" class="img-repsonsive"></a>
                </div>
            </div><!-- end row -->

        </div><!-- end container -->
    </div><!-- end section -->

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <img src="images/logos/logo-2.png" alt="" />
                        </div>
                        <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis montes.</p>
                        <p>Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis montes.</p>
                    </div><!-- end clearfix -->
                </div><!-- end col -->

				<div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Pages</h3>
                        </div>

                        <ul class="footer-links hov">
                            <li><a href="#">Home <span class="icon icon-arrow-right2"></span></a></li>
							<li><a href="#">Blog <span class="icon icon-arrow-right2"></span></a></li>
							<li><a href="#">Pricing <span class="icon icon-arrow-right2"></span></a></li>
							<li><a href="#">About <span class="icon icon-arrow-right2"></span></a></li>
							<li><a href="#">Faq <span class="icon icon-arrow-right2"></span></a></li>
							<li><a href="#">Contact <span class="icon icon-arrow-right2"></span></a></li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="footer-distributed widget clearfix">
                        <div class="widget-title">
                            <h3>Subscribe</h3>
							<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which one know this tricks.</p>
                        </div>
						
						<div class="footer-right">
							<form method="get" action="#">
								<input placeholder="Subscribe our newsletter.." name="search">
								<i class="fa fa-envelope-o"></i>
							</form>
						</div>                        
                    </div><!-- end clearfix -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </footer><!-- end footer -->

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-left">                   
                    <p class="footer-company-name">All Rights Reserved. &copy; 2018 <a href="#">GoodWEB</a> Design By : 
					<a href="https://html.design/">html design</a></p>
                </div>

                
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
    <script src="js/portfolio.js"></script>
    <script src="js/hoverdir.js"></script>    

</body>
</html>