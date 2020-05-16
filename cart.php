<?php include 'dbconnect.php'; ?>
<?php include 'header.php'; ?>
<?php
  if(!isset($_SESSION['id']))
  {
    header("Location:login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Shopping - Cart Items</title>
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
            <h1 class="mb-0 bread">My Cart</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> / <span><a href='shop.php'>Product</a></span> / <span>Cart</span></p>
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
                    <th>&nbsp;</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Update</th>
                    <th>Total</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $id=$_SESSION['id'];
                  $sql="SELECT * FROM cart WHERE userid='$id'";
                  $result=mysqli_query($con,$sql);
                  $total=0;
                  while($row=mysqli_fetch_array($result))
                  {
                    $pid=$row['pid'];
                    $price=$row['price'];
                    $q=$row['q'];
                    $subtotal=$price*$q;
                    $total+=$subtotal;
                  
                    $sql2="SELECT * FROM product WHERE pid='$pid'";
                    $res=mysqli_query($con,$sql2);
                    $row1=mysqli_fetch_array($res);
                    $image=$row1['image'];
                    $pname=$row1['pname'];
                    $pdesc=$row1['pdesc'];
                    
                  ?> 

                  <tr class="text-center">
                    <td class="product-remove"><a href="removecart.php?pid=<?php echo $pid; ?>"><span class="ion-ios-close"></span></a></td>
                    
                    <td class="image-prod"><div class="img" style="background-image:url(<?php echo $image; ?>);"></div></td>
                    
                    <td class="product-name">
                      <h3><?php echo $pname; ?></h3>
                      <p><?php echo $pdesc; ?></p>
                    </td>
                    
                    <td class="price">Rs. <?php echo $price; ?></td>
                    <form action="cartupdate.php" method="post">
                    <td class="quantity">
                      <div class="input-group mb-3">
                        <input type="hidden" name="pid" value="<?php echo $pid; ?>">
                        <input type="number" value="<?php echo $q; ?>" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
                      </div>
                    </td>
                    <td>
                      <input type="submit" name="update" class="btn btn-outline-primary" value="Update" />
                    </td>
                    </form>
                    <td class="total"><?php echo $subtotal; ?></td>
                  </tr><!-- END TR-->
                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="cart-wrap ftco-animate">
              <div class="cart-total mb-3">
                <h3>Cart Totals</h3>
                <p class="d-flex">
                  <span>Discount</span>
                  <span>50.00 %</span>
                </p>
              <hr>
              <p class="d-flex total-price">
                  <span>Total</span>
                  <span><?php echo $total/2; ?></span>
              </p>
              </div>
            </div>
          </div>
        <div class="col-md-6">
          <div class="cart-detail bg-light p-3 p-md-4">
            <h3 class="billing-heading mb-4">Payment Method</h3>
              <form method="post" action="checkout.php">
              <div class="form-group">
                <div class="col-md-12">
                  <div class="radio">
                    <label><input type="radio" checked="checked" name="optradio" class="mr-2"> Cash On Delivery</label>
                  </div>
                </div>
            </div>
              <div class="form-group">
                <div class="col-md-12">
                  <div class="radio">
                    <label><input type="radio" name="optradio" class="mr-2"> Direct Bank Tranfer</label>
                  </div>
                </div>
            </div>
            <div class="form-group">
              <div class="col-md-12">
                <div class="radio">
                  <label><input type="radio" name="optradio" class="mr-2"> Check Payment</label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-12">
                <div class="radio">
                  <label><input type="radio" name="optradio" class="mr-2"> Paypal</label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-12">
                <div class="checkbox">
                  <label><input type="checkbox" value="" required="required" class="mr-2"> I have read and accept the terms and conditions</label>
                </div>
              </div>
            </div>
            <input type="submit" class="btn btn-primary py-3 px-4" name="checkout" value="Place an Order" />
          </form>
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