<?php
   require_once("connection.php");
   if (empty($_POST['first_name'])) {
      echo "<script>alert('you much register with us!')</script>".header("location:registration.php");
   }
?>
<!-- /////////////////////////////////////////////////////// -->
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
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
        <!-- Modernizer for Portfolio -->
        <script src="js/modernizer.js"></script>
</head>
<body>
     <!-- message division -->
     <center>
        <div id="message" style="text-align: justify; margin-top: 15%; padding: 10px; width: 800px; height: auto; background-color: #eee; border: 0px solid #eee; border-radius: 5px;">
<?php
//  assigning Variables
if (isset($_POST['email']) and isset($_POST['password'])) {

   $Email  = $_POST['email'];
   $Password  = $_POST['password'];
                               
   $sql = "SELECT * FROM webusr WHERE EMAIL = '$Email' && PASSWORD = '$Password'";
   $collect_query = mysqli_query($conn, $sql);
   $match_query = mysqli_num_rows($collect_query);

   //  previuos data checking
   if ($match_query==1){
      $_SESSION['email']=$Email;
      echo "<center><h2 style='margin-top: 5px; color: #fd6802; text-transform: capitalize; font-family: arial;'>you are already registerd</h2></center>";
      header("refresh:1; url=admin.php");
   }else{
      if (empty($_POST['first_name'])) {
         header("refresh:1; url=registration.php");
         echo "<center><h2 style='margin-top: 5px; color: #fd6802; text-transform: capitalize; font-family: arial;'>blank form not recognize</h2></center>";
         
      }else{
         if (isset($_POST)) {

            // assigning variables
            $First_name  = $_POST['first_name'];
            $Last_name  = $_POST['last_name'];
            $Email  = $_POST['email'];
            $Password  = $_POST['password'];
            //  = password_hash($Password, PASSWORD_DEFAULT);
            $Phone  = $_POST['phone'];


         //  emailvalidation
         function checkemail($str) {
            return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
         }
         if(!checkemail($Email)){
            echo "<center><h2 style='margin-top: 5px; color: #fd6802; text-transform: capitalize; font-family: arial;'>email address is not valid!</h2></center>";
            header("refresh:1; url=registration.php");
                  
         }else{
               // queries
               $sql = "INSERT INTO webusr(first_name, last_name, email, password, phone) VALUES ('$First_name', '$Last_name', '$Email', '$Password', '$Phone')";
               if (!mysqli_query($conn, $sql)) {
                  echo "<h3 style='margin-top: 5px; color: #fd6802; text-transform: capitalize; font-family: arial;'>registration process failure!</h3>";
               }else{
                  echo "<h3 style='margin-top: 0px; color: #fd6802; text-transform: capitalize; font-family: arial;'>If you are change this email address than you will not recieve some valuable things!.</h3>";
                  echo "<h3 style='margin-top: 0px; color: #fd6802; text-transform: capitalize; font-family: arial;'>registration process success.</h3>";
                  $to_email = $Email;
                  $subject = 'Testing PHP Mail';
                  $message = 'your registration has been success!';
                  $headers = 'From: abhijitboro438@gmail.com';
                  if (!mail($to_email,$subject,$message,$headers)) {
                     echo "<h3 style='margin-top: 0px; color: #fd6802; text-transform: capitalize; font-family: arial;'>mail has not sent!</h3>";
                  }else{
                     echo "<h3 style='margin-top: 0px; color: #fd6802; text-transform: capitalize; font-family: arial;'>mail has been sent to: ".$to_email.".</h3>";
                  }
                  echo "<h3 style='margin-top: 0px; color: #fd6802; text-transform: capitalize; font-family: arial;'>now you can login <a href='admin.php'><span class='material-icons' style='margin-top: 5px;'>login</span></a></h3>";
               }
   
            }
         }
      }
   }
}
?>
        </div>
     </center>
    <!--  end message division -->

     <!-- ALL JS FILES -->
     <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
    <script src="js/portfolio.js"></script>
    <script src="js/hoverdir.js"></script>

</body>
</html>
