<?php include "dbconnect.php";
	if(isset($_POST['submit']))
	{
		$pname=$_POST['pname'];
		$pdesc=$_POST['pdesc'];
		$stock=$_POST['stock'];
		$price=$_POST['price'];

		$dirpath="Files/";
		$fileName=$dirpath.basename($_FILES['file']['name']);
		$fileSize=$_FILES['file']['size'];
		$fileType=$_FILES['file']['type'];
		$fileTemp=$_FILES['file']['tmp_name'];
		$msg="";
		$c=1;
		$part=explode("/", $fileType);
		if($part[0]!=="image")
		{
			$c=0;
			$msg+="This is Not Image<br/>";
		}
		if($c==1 && file_exists($fileName))
		{
			$c=0;
			$msg+="File is already exist<br/>";
		}
		if($c==1)
		{
			if(move_uploaded_file($fileTemp, $fileName))
			{
				$sql="INSERT INTO `product` (`pid`, `pname`, `pdesc`, `stock`, `price`, `image`) VALUES (NULL, '$pname', '$pdesc', '$stock', '$price', '$fileName')";
				if(mysqli_query($con,$sql))
					echo "Product Add Successfully .";
				else
					echo "Some of Error Occures.";
			}
			else
				$msg+="Some of Error Occure.<br/>";
		}
		if($c==0)
			echo $msg;
	}
	header("Location:admin.php");
?>