<?php include 'dbconnect.php'; ?>
<?php include 'header.php'; ?>
<?php
  $msg="Please try to Login.";
  if(isset($_REQUEST['login']))
  {
    $username=$_REQUEST['username'];
    $pwd=$_REQUEST['pwd'];
    $sql="SELECT * FROM user where username='$username' and pwd='$pwd'";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($result);
    if($row['id']!=null)
    {
      $_SESSION['id']=$row['id'];
      $msg="Login Successful";
    }
    else
    {
      $msg="Login Failed";
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Shopping - Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
        <div class="hero-wrap hero-bread" style="background-image: url('images/bg_4.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">Login</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Login</span></p>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-8 ftco-animate">
              <form class="billing-form bg-light p-3 p-md-5">
                <h3 class="mb-4 billing-heading">Login</h3>
                  <div class="row align-items-end">
                    <div class="w-100"></div>
                     <div class="col-md-6">
                        <div class="form-group">
                          <label for="username">Username</label>
                          <input type="text" name="username" class="form-control"/>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="Password">Password</label>
                          <input type="password" name="pwd" class="form-control"/>
                        </div>
                      </div>
                                <input type="submit" name="login" value="Login" class="btn btn-primary py-3 px-4"/>
                            </div>
                        </form>
                        <?php 
                          if(strlen($msg)!=0)
                            echo "<h3 style='color:teal'>".$msg."</h3>";
                        ?>
                    </div>
                </div>
            </div> 
        </section>
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
  </body>
</html>
<?php include 'footer.php'; ?>