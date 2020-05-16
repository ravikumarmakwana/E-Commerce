<?php include 'header.php'; ?>
<?php include 'dbconnect.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Shopping Admin Panel</title>
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
            <h1 class="mb-0 bread">Update Product</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span><a href="admin.php">Admin Panel</a></span> <span>Update Product</span></p>
          </div>
        </div>
      </div>
    </div>
      <div class="container">
        <h2>Update Product</h2>
    <?php 
	if($_REQUEST['pid'])
	{
		$pid=$_REQUEST['pid'];
		$sql="Select * from product where pid='$pid'";
		$rs=mysqli_query($con,$sql);
		$data=mysqli_fetch_array($rs);
		
		$pname=$data['pname'];
		$pdesc=$data['pdesc'];
		$stock=$data['stock'];
		$price=$data['price'];
		$image=$data['image'];
		
		echo "<form method='post' action='update.php' enctype='multipart/form-data'/>";
		echo "<input type='hidden' class='form-control col-lg-5' name='pid' value='$pid'/>";
		echo "<input type='hidden' name='image' value='$image'/>";
		echo "<input type='text' name='pname' class='form-control col-lg-5' value='$pname'/><br/>";
		echo "<textarea name='pdesc'  class='form-control col-lg-5'  rows='5'>".$pdesc."</textarea><br/>";
		echo "<input type='number'  class='form-control col-lg-5'  name='stock' value='$stock'/><br/>";
		echo "<input type='number'  class='form-control col-lg-5' placeholder='Price' name='price' value'$price'/><br/>";
		echo "<img src='$image'  class='col-lg-5' />&nbsp;<input required='required' type='file' name='file'/><br/><br/>";
		echo "<input type='submit' name='update' class='btn btn-outline-primary col-lg-2' value='Update'/>";
		echo "</form>";
	}

?>

      </div>
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