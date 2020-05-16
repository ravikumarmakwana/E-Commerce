<?php include 'header.php'; ?>
<?php include 'dbconnect.php'; ?>
<?php
 
  if(!isset($_SESSION['id']))
  {
    header("Location:login.php");
  }

  if(isset($_REQUEST['msg']))
  {
    $msg=$_REQUEST['msg'];
    echo "<script type='text/javascript'>";
    echo "alert('$msg')";
    echo "</script>";
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Shopping - Products</title>
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
            <h1 class="mb-0 bread">Products</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Products</span></p>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h1 class="big">Products</h1>
            <h2 class="mb-4">Products</h2>
          </div>
        </div>        
      </div>

      <section class="ftco-section bg-light">
            <div class="container-fluid">
                <div class="row">
                    <?php
                        $data=mysqli_query($con,"Select * from product");
                        while($row=mysqli_fetch_array($data))
                        {
                        $pid=$row["pid"];
                        $pname=$row["pname"];
                        $price=$row["price"];
                        $stock=$row["stock"];
                        $img=$row["image"];
                    ?>  
                    <div class="col-sm col-md-6 col-lg-3 ftco-animate">
                        <div class="product">
                            <a href="single.php?pid=<?php echo $pid; ?>" class="img-prod"><img class="img-fluid" src='<?php echo $img; ?>' alt="Colorlib Template">
                            </a>
                            <div class="text py-3 px-3">
                                <h3><a href="#"><?php echo $pname; ?></a></h3>
                                <div class="d-flex">
                                    <div class="pricing">
                                        <p class="price"><span class="price-sale">RS. <?php echo $price; ?></span></p>
                                    </div>
                                </div>
                                <hr>
                                <p class="bottom-area d-flex">
                                    <a href="addtocart.php?pid=<?php echo $pid; ?>&price=<?php echo $price; ?>" class="add-to-cart"><span>Add to cart <i class="ion-ios-add ml-1"></i></span></a>
                                </p>
                            </div>
                        </div>
                    </div>
                  <?php
                      }
                  ?>
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