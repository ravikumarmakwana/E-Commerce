<?php include 'header.php'; ?>
<?php include 'dbconnect.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Shopping - Product</title>
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
            <h1 class="mb-0 bread">Product</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> / <span><a href="shop.php">Products</a></span> / <span>Product</span></p>
          </div>
        </div>
      </div>
    </div>
    <?php
      $pid=$_REQUEST['pid'];
      $sql="SELECT * FROM product WHERE pid='$pid'";
      $result=mysqli_query($con,$sql);
      $row=mysqli_fetch_array($result);
      $pname=$row['pname'];
      $pdesc=$row['pdesc'];
      $image=$row['image'];
      $price=$row['price'];
    ?>
    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5 ftco-animate">
            <a class="image-popup"><img src="<?php echo $image; ?>" class="img-fluid" alt="Colorlib Template"></a>
          </div>
          <div class="col-lg-6 product-details pl-md-5 ftco-animate">
            <h3><?php echo $pname; ?></h3>
            <p class="price"><span>Rs. <?php echo $price; ?>  </span></p>
            <p><?php echo $pdesc; ?></p>
            <div class="row mt-4">
              <div class="w-100"></div>
            </div>
            <p><a href="addtocart.php?pid=<?php echo $pid; ?>&price=<?php echo $price; ?>" class="btn btn-primary py-3 px-5">Add to Cart</a></p>
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