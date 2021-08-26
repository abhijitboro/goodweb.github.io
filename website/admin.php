<!DOCTYPE html>
<html>
<head>
        <!-- Basic -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">   
       
        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
     
         <!-- Site Metas -->
        <title>Login To GoodWEB - Responsive HTML5 Landing </title>  
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
        <script src="js/jquery.min.js"></script>
    

</head>
<body>
    <center>
         </br>
           </br>
     <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="contact_form">
                           <div class="section-title text-center" style="text-align: right; color: black;">
                                <a href="system.php"><h4>Registration</4></a>
                            </div>
                        <center>
                            <div id="message" style="text-align: justify;">
<?php  
 require('connection.php');
 session_start();
 error_reporting(E_ALL);

if (isset($_POST['email']) AND isset($_POST['password'])){
    // Assigning POST values to variables.
    $Email = $_POST['email'];
    $Password = $_POST['password'];

    // CHECK FOR THE RECORD FROM TABLE
    $query = "SELECT * FROM webusr WHERE EMAIL = '$Email' AND PASSWORD = '$Password'";
 
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    $count = mysqli_num_rows($result);

    if ($count == 1){
        $_SESSION['email']=$Email;
        header("location: index.php");
    }else{
        echo "<center><h2 style='margin-left: 30px; color: #fd6802; text-transform: capitalize; letter-spacing: 0.9px; font-family: arial;'>invalid email address and password</h2></center>";
        header("refresh: 1; url=admin.php");
    }
}
?>
                            </div>
                        </center>
                        <form id="contactform" class="row" action="" name="contactform" method="POST" style="width: 400px; height: 320px;">
                            <div class="section-title text-center">
                                <span class="lead"  style="margin-top: 5px; margin-left: 30px; font-size: 30px; text-transform: uppercase; font-family: arial; font-weight: bolder; letter-spacing: 2px; color: darkgrey;" >login to goodweb</span>
                                <!-- <legend style="margin-top: 5px;"></legend> -->
                            </div>
                            <fieldset class="row-fluid">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Email Address" style="width: 400px; height: 40px; letter-spacing: 1px;">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" style="width: 400px; height: 40px; letter-spacing: 1px;">
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4  text-center">
                                    <button type="submit" value="submit" id="submit" style="margin-right: 0; margin-left: 0; width: 400px;" class="btn btn-light btn-radius" style="width: 500px;">Login</button>
                                </div>                     
                            </fieldset>
                        </form>
                            <span style="color: grey; letter-spacing: 1px;">Do You want to clean?</span><a href="logout.php"><input type="button" class="text-center" name="session" value="session" style="background-color: #f2f3f5; border: 0px solid white;"></a>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
            <!-- end input form -->
  </center>
</body>
</html>
