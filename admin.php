<?php include 'header.php'; ?>
<?php include 'dbconnect.php'; ?>
<?php 
  if(!isset($_SESSION['id']))
  {
    header("Location:login.php");
  }
  if($_SESSION['id']!=1)
  {
    header("Location:login.php");
  }
?>
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
            <h1 class="mb-0 bread">Admin Panel</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> / <span>Admin Panel</span></p>
          </div>
        </div>
      </div>
    </div>
        
        <section class="ftco-section ftco-cart">
            <div class="container">
                <div class="row">
                <div class="col-md-12 ftco-animate">
                    <div class="cart-list">
                        <table class="table">
                            <thead class="thead-primary">
                              <tr class="text-center">
                                <th>&nbsp;</th>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Update</th>
                                <th>Delete</th>
                              </tr>
                            </thead>
                            <tbody>
                                <?php

                                $sql="Select * from product";
                                $result=mysqli_query($con,$sql);
                                while($row=mysqli_fetch_array($result))
                                {
                                    $pname=$row['pname'];
                                    $pid=$row['pid'];
                                    $pdesc=$row['pdesc'];
                                    $stock=$row['stock'];
                                    $price=$row['price'];
                                    $image=$row['image'];
                                ?>
                              <tr class="text-center">
                                <td class="image-prod"><img src="<?php echo $image; ?>" width='100%'/></td>
                                
                                <td class="product-name">
                                    <h3><?php echo $pname; ?></h3>
                                    <p><?php echo $pdesc; ?></p>
                                </td>
                                
                                <td class="price">
                                    <?php echo $price; ?>
                                </td>
                                
                                <td class="quantity">
                                    <?php echo $stock; ?>    
                                </td>
                                
                                <td>
                                    <?php
                                        echo "<a href='updateproduct.php?pid=$pid' class='btn btn-outline-danger'>Update</a>";
                                    ?>    
                                </td>

                                <td>  
                                    <?php
                                        echo "<a href='deleteproduct.php?pid=$pid' class='btn btn-outline-danger'>Delete</a>";
                                    ?>
                                </td>

                              </tr>
                              <?php
                                }
                                ?><!-- END TR-->
                            </tbody>
                          </table>
                      </div>
                </div>
            </div>     
            </div>
        </section>
      <div class="container">
        <h2>Add New Product</h2>
        <form action="productinsert.php" method="post" enctype="multipart/form-data">
          <input type="text" name="pname" class="form-control col-lg-5" placeholder="Product Name"/><br/>
          <textarea name="pdesc" rows="5" placeholder="Product Description" class="form-control col-lg-5" ></textarea><br/>
          <input type="number" name="stock" placeholder="Stock" class="form-control col-lg-5" /><br/>
          <input type="number" name="price" placeholder="Price" class="form-control col-lg-5" /><br/>
          <input type="file" name="file" placeholder="Image"  class="form-control col-lg-5" /><br/>
          <input type="submit" name="submit" value="Add Product" class="btn btn-outline-primary" /><br/>
        </form>
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