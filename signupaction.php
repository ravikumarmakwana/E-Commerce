<?php include 'dbconnect.php';
	if(isset($_REQUEST['signup']))
	{
		$fname =$_REQUEST['fname'];
		$lname=$_REQUEST['lname'];
		$username=$_REQUEST['username'];
		$pwd=$_REQUEST['pwd'];
		$country=$_REQUEST['country'];
		$address=$_REQUEST['address'];
		$phoneno=$_REQUEST['phoneno'];
		$email=$_REQUEST['email'];
		$msg="";

		$regexname="/^[a-zA-Z]+$/";
		$regexpwd="/^[a-zA-Z0-9.$@]*[.$@]+[a-zA-Z0-9.$@]*/";
		$regexcountry="/^[a-z A-Z]+$/";
		$regexphoneno="/^[9|8|7|6][0-9]{9,10}$/";
		$regexemail="/^[a-zA-Z0-9]+[a-zA-Z0-9@.]*\\@[a-zA-Z0-9]+\\.[a-zA-Z0-9@.]+$/";
		if(!preg_match($regexname, $fname) || !preg_match($regexname, $lname) || !preg_match($regexname, $username))
		{
			$msg+="Please enter the valid name.\n";
		}
		if(!preg_match($regexpwd, $pwd))
		{
			$msg+="Please enter the valid password\n";
		}
		if(!preg_match($regexcountry, $country))
		{
			$msg+="Please enter the valid country\n";
		}
		if(!preg_match($regexphoneno, $phoneno))
		{
			$msg+="Please enter the valid phone no\n";
		}
		if(!preg_match($regexemail, $email))
		{
			$msg+="Please enter the valid email\n";
		}
		if(strlen($msg)==0)
		{
			$sql="INSERT INTO user (fname,lname,username,pwd,country,address,phoneno,email) VALUES ('$fname','$lname','$username','$pwd','$country','$address','$phoneno','$email')";
			$r=mysqli_query($con,$sql);
			if($r!=null)
			{
				$msg="Sign Up Successful. Welcome $fname ".$lname;
			}
		}
		else
			$msg="Sign Up Failed";
		header("Location:signup.php?msg=$msg");
	}
?>