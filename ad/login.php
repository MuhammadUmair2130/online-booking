<?php
session_start();
include 'config.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin - Online Movie Booking System</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Choices.js-->
    <link rel="stylesheet" href="vendor/choices.js/public/assets/styles/choices.min.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="login-page">
      <div class="container d-flex align-items-center position-relative py-5">
        <div class="card shadow-sm w-100 rounded overflow-hidden bg-none">
          <div class="card-body p-0">
            <div class="row gx-0 align-items-stretch">
              <!-- Logo & Information Panel-->
              <div class="col-lg-6">
                <div class="info d-flex justify-content-center flex-column p-4 h-100">
                  <div class="py-5">
                    <h1 class="display-6 fw-bold">Admin Panel</h1>
                    <p class="fw-light mb-0">Enter Your Email and Password To get access of Admin Panel Dashboard!.</p>
                  </div>
                </div>
              </div>
              <!-- Form Panel    -->
              <div class="col-lg-6 bg-white">
                <div class="d-flex align-items-center px-4 px-lg-5 h-100 bg-dash-dark-2">
                  <form class="login-form py-5 w-100" method="post" >
                    <div class="input-material-group mb-3">
                      <input class="input-material" id="login-username" type="text" name="ad_email" autocomplete="on" required data-validate-field="loginUsername">
                      <label class="label-material" for="login-username">admin email</label>
                    </div>
                    <div class="input-material-group mb-4">
                      <input class="input-material" id="login-password" type="password" name="ad_password" required data-validate-field="loginPassword">
                      <label class="label-material" for="login-password">Password</label>
                    </div>
                    <button class="btn btn-primary mb-3" id="login" name="btnlogin" type="submit">Login</button><br><a class="text-sm text-paleBlue" href="#">Forgot Password?</a><br><small class="text-gray-500">Do not have an account? </small><a class="text-sm text-paleBlue" href="register.html">Signup</a>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php
if(isset($_POST['btnlogin'])){
  $ademail=$_POST['ad_email'];
  $adpassword=$_POST['ad_password'];
  $ad_select=mysqli_query($con,"select email,password from tbladminlogin where email='$ademail' and password='$adpassword'");

  $ad_fetch=mysqli_fetch_assoc($ad_select);
  if(mysqli_num_rows($ad_select)>0){

    // session for admin
    
      $_SESSION["admin"]=$ad_fetch['email'];
    
    // session for admin
    
    
      echo 
      "
      <script>window.location.assign('dashboard.php')</script>
      ";
    
    
    }
    else{
    
      echo '<script>alert("Invalid Email Or Password!")</script>';
    
    }
    
}


?>



    <!-- JavaScript files-->
 <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="js/front.js"></script>


 



  </body>
</html>

