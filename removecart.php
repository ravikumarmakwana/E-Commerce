<?php
	include 'dbconnect.php';
	$pid=$_REQUEST['pid'];
	session_start();
	$id=$_SESSION['id'];
	$sql="DELETE FROM cart WHERE pid='$pid' and userid='$id'";
	$res=mysqli_query($con,$sql);
	header("Location:cart.php");
?>