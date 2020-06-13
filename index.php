<?php include 'header.php';?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Shopping Home</title>
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
		<?php
      $sql1="Select * from admin";
      $result=mysqli_query($con,$sql1);
      $data=mysqli_fetch_array($result);
      $visitors=$data['visitors'];
      $visitors++;
      $sql2="Update admin set visitors='$visitors'";
      $result2=mysqli_query($con,$sql2);
    ?>
		<div class="hero-wrap js-fullheight" style="background-image: url('images/bg_4.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
        	<h3 class="v">E-Commerce</h3>
        	<h3 class="vr">Develop By Ravikumar</h3>
          <div class="col-md-11 ftco-animate text-center">
            <h1>Let's Shop</h1>
            <h2><span>Start Shopping</span></h2>
          </div>
          <div class="mouse">
						<a href="#" class="mouse-icon">
							<div class="mouse-wheel"><span class="ion-ios-arrow-down"></span></div>
						</a>
					</div>
        </div>
      </div>
    </div>

    <div class="goto-here"></div>
    
	<section class="ftco-section bg-light">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<h1 class="big">Products</h1>
            <h2 class="mb-4">Our Products</h2>
          </div>
        </div>    		
    	</div>
    	<div class="container-fluid">
    		<div class="row">
    			<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="product">
    					<a href="shop.php" class="img-prod"><img class="img-fluid" src="images/laptop10.jpeg" alt="Colorlib Template"></a>
    					<div class="text py-3 px-3">
    						<h3><a href="shop.php">Laptops</a></h3>
    					</div>
    				</div>
    			</div>
    			<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="product">
    					<a href="shop.php" class="img-prod"><img class="img-fluid" src="images/phone3.jpeg" alt="Colorlib Template"></a>
    					<div class="text py-3 px-3">
    						<h3><a href="shop.php">India's Smart Phones</a></h3>
    						</div>
    				</div>
    			</div>
    			<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="product">
    					<a href="shop.php" class="img-prod"><img class="img-fluid" src="images/hphone7.jpeg" alt="Colorlib Template"></a>
    					<div class="text py-3 px-3">
    					 <h3><a href="shop.php">Head Phones</a></h3>
    					</div>
    				</div>
    			</div>
    	</div>
    </div>
    </section>

    <section class="ftco-section ftco-section-more img" style="background-image: url(images/phone6.jpeg);">
    	<div class="container">
    		<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section ftco-animate">
          	<h2>Summer Sale</h2>
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