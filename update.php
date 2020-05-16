<?php include "dbconnect.php";
	if($_REQUEST['update'])
	{
		$pid=$_REQUEST['pid'];
		$image=$_REQUEST['image'];
		if(unlink($image))
		{
			$pname=$_REQUEST['pname'];
			$pdesc=$_REQUEST['pdesc'];
			$stock=$_REQUEST['stock'];
			$price=$_REQUEST['price'];
			
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
					$sql="UPDATE `product` SET `pname`='$pname',`pdesc`='$pdesc', `stock`='$stock', `price`='$price', `image`='$fileName' WHERE `pid`='$pid'";
					if(mysqli_query($con,$sql))
						echo "Product Update Successfully .";
					else
						echo "Some of Error Occures.";
				}
				else
					echo "Some of Error Occure.<br/>";
			}
			else
				echo "Some of the Errors.";

		}
		else{
			echo "Some of the Errors.";
		}
	}
	header("Location:admin.php");
?>