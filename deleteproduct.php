<?php include 'dbconnect.php';
	if(isset($_REQUEST['pid']))
	{
		$pid=$_REQUEST['pid'];
		$sql="Select * from product where pid='$pid'";
		$result=mysqli_query($con,$sql);
		$data=mysqli_fetch_array($result);
		$image=$data['image'];
		if(unlink($image))
		{
			if(mysqli_query($con,"Delete from product where pid='$pid'"))
				echo "Successful";
			else
				echo "Errors";
		}
		else
			echo "Errors";
	}
	header("Location:admin.php");
?>
