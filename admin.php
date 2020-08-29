<?php 
	include 'header.php'; 
?>
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
    <!-- Required meta tags-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>
<body class="animsition">
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
            <div class="main-content">
                 <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Admin Panel</h2>
                                </div>
                            </div>
                        </div>
                        <?php 
                            $sql_1="Select * from admin";
                            $result_1=mysqli_query($con,$sql_1);
                            $data_1=mysqli_fetch_array($result_1);
                            $total_price_1=$data_1['total_price'];
                            $visitors=$data_1['visitors'];

                            $sql_2="Select * from user";
                            $result_2=mysqli_query($con,$sql_2);
                            $number_menbers=0;
                            while($data_2=mysqli_fetch_array($result_2))
                                $number_menbers++;

                            $sql_3="Select * from product";
                            $result_3=mysqli_query($con,$sql_3);
                            $number_product=0;
                            while($data_3=mysqli_fetch_array($result_3))
                                $number_product++;
                        ?>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php echo $visitors; ?></h2><br/>
                                                <span>Number of Visitors</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-shopping-cart"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php echo $number_menbers; ?></h2><br/>
                                                <span>Members</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-calendar-note"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php echo $number_product; ?></h2><br/>
                                                <span>Numbers of Products</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="fa fa-inr"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php echo $total_price_1; ?></h2><br/>
                                                <span>Total Earnings</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart4"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-lg-12">
                        <div class="overview-item overview-item--c1">
                            <div class="overview__inner">
                                <div style="text-align: center;" class="overview-box clearfix">
                                    <div class="text">
                                    	<a href="admin1.php"><h2>Manage Products</h2></a><br/>
                                        <span>Add New Products / Update Existing Products / Remove Products</span>
                                    </div>
                                </div>
                                <div class="overview-chart">
                                	<canvas id="widgetChart1"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
            </div>

    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="js/main1.js"></script>

</body>

</html>
<!-- end document-->
<?php 
	include 'footer.php'; 
?>