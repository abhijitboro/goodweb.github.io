<?php
require_once("connection.php");
?>

<!DOCTYPE html>
<html>
<head>
        <!-- Basic -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">   
       
        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
     
         <!-- Site Metas -->
        <title>Register To GoodWEB - Responsive HTML5 Landing </title>  
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
    

</head>
<body>
    <center>
     <!-- input form -->
             </br>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="contact_form" style="margin-bottom: 30px;">
                            <div class="section-title text-center" style="text-align: right; color: black; display: inline;">
                            <h5>You already have account?</h5><a href="admin.php"><h5>Login</5></a>
                            </div>

                            <!-- message division -->
                        <center>
                            <div id="message" style="text-align: justify;">
                           
                            </div>
                        </center>
                            <!--  end message division -->
                        
                            <form id="contactform" class="row" action="register.php" name="contactform" method="POST" style="width: 400px; height: 600px;">
                        <div class="section-title text-center">
                            <h1 class="lead" style="margin-top: 5px; margin-left: 20%; text-transform: uppercase; font-weight: bolder; letter-spacing: 2px; color: darkgrey;">Resgistration form</h1>
                            <!-- <legend style="margin-top: 5px;"></legend> -->
                        </div>
                            <fieldset class="row-fluid">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <?php
                                       if (empty($_POST['first_name'])) {
                                           echo "<h5 style='margin-left: 0; text-align: justify; letter-spacing: 1px; color: red;'>First Name !</h5>";
                                       }
                                    ?>
                                    <input type="text" name="first_name" id="first_name" class="form-control" placeholder="" style="width: 400px; height: 40px; letter-spacing: 1px;">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <?php
                                       if (empty($_POST['last_name'])) {
                                           echo "<h5 style='margin-left: 0; text-align: justify; letter-spacing: 1px; color: red;'>Last Name !</h5>";
                                       }
                                    ?>
                                    <input type="text" name="last_name" id="last_name" class="form-control" placeholder="" style="width: 400px; height: 40px; letter-spacing: 1px;">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <?php
                                       if (empty($_POST['email'])) {
                                           echo "<h5 style='margin-left: 0; text-align: justify; letter-spacing: 1px; color: red;'>Email Adress !</h5>";
                                       }
                                    ?>
                                    <input type="text" name="email" id="email" class="form-control" placeholder="" style="width: 400px; height: 40px; letter-spacing: 1px;">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <?php
                                       if (empty($_POST['password'])) {
                                           echo "<h5 style='margin-left: 0; text-align: justify; letter-spacing: 1px; color: red;'>Password !</h5>";
                                       }
                                    ?>
                                    <input type="text" name="password" id="password" class="form-control" placeholder="" style="width: 400px; height: 40px; letter-spacing: 1px;">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <?php
                                       if (empty($_POST['phone'])) {
                                           echo "<h5 style='margin-left: 0; text-align: justify; letter-spacing: 1px; color: red;'>Phone Number !</h5>";
                                       }
                                    ?>
                                    <input type="text" name="phone" id="phone" class="form-control" placeholder="" style="width: 400px; height: 40px; letter-spacing: 1px;">
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
                                    <button type="submit" value="submit" id="submit" style="margin-right: 0; margin-left: 0; width: 400px;" class=" btn btn-light ">Submit</button>
                                </div>
                            </fieldset>
                        </form>
                    </br>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
            <!-- end input form -->
  </center>
</body>
</html>