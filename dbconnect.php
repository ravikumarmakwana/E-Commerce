<?php
	$hostname="remotemysql.com";
	$username="CgakoqyBSR";
	$password="mRS48ze153";
	$dbname="CgakoqyBSR";
	$con=new mysqli($hostname,$username,$password,$dbname);
	if(!$con)
		echo "Connection Failed";
?>