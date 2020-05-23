<?php include 'header.php'; ?>
<?php include 'dbconnect.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Shopping - My Profile</title>
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
            <h1 class="mb-0 bread">My Profile</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> / <span><a href='shop.php'>Product</a></span> / <span><a href="cart.php">Cart</a></span> / <span>My Profile</span></p>
          </div>
        </div>
      </div>
    </div>
    
    <section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/user.webp);">
          </div>
          <div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
            <div class="heading-section-bold mb-5 mt-md-5">
              <div class="ml-md-0">
                <?php
                  $id=$_SESSION['id'];
                  $sql="Select * from user where id='$id'";
                  $result=mysqli_query($con,$sql);
                  $data=mysqli_fetch_array($result);
                  $name=$data['fname']." ".$data['lname'];
                  $country=$data['country'];
                  $address=$data['address'];
                  $phoneno=$data['phoneno'];
                  $email=$data['email'];
                ?>
                <h3 class="mb-4" style="text-transform: capitalize;color: teal;"><?php echo $name; ?></h3>
              </div>
            </div>
            <div class="pb-md-5">
              <table cellpadding="10">
                <tr><th>Country</th><td><?php echo $country; ?></td></tr>
                <tr><th>Address</th><td><?php echo $address; ?></td></tr>
                <tr><th>Phone No</th><td><?php echo $phoneno; ?></td></tr>
                <tr><th>Email</th><td><?php echo $email; ?></td></tr>
              </table>
            </div>
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