<?php include 'dbconnect.php';
	if(isset($_REQUEST['update']))
	{
		$pid=$_REQUEST['pid'];
		$q=$_REQUEST['quantity'];
		session_start();
		$id=$_SESSION['id'];
		$sql="UPDATE cart SET q='$q' WHERE pid='$pid' and userid='$id'";
		$res=mysqli_query($con,$sql);		
	}
	header("Location:cart.php");
?>