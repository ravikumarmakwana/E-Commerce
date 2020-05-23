<?php
	$servername="remotemysql.com";
    $username="CgakoqyBSR";
    $password="mRS48ze153";
    $dbname="CgakoqyBSR";
	$con=new mysqli($servername,$username,$password,$dbname);
	if(!$con)
		echo "Connection Failed";
?>