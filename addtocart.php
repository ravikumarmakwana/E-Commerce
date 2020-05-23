<?php include 'dbconnect.php';

	$pid=$_REQUEST['pid'];
	session_start();
	$id=$_SESSION['id'];
	$price=$_REQUEST['price'];
	$sql="INSERT INTO cart (pid,userid,q,price) values ('$pid','$id','1','$price')";
	$result=mysqli_query($con,$sql);
	$msg;
	if($result)
		$msg="Product add in cart successfully.";
	else
		$msg="Somthing Errors.";
	header("Location:shop.php?msg=$msg");
?>