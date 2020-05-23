<?php include 'dbconnect.php';

	$pid=$_REQUEST['pid'];
	$price=$_REQUEST['price'];

	session_start();
	if(isset($_SESSION['id']))
		header("Location:addtocart.php?pid=$pid&price=$price");
	else
		header("Location:login.php");
?>