<?php
include 'header.php';
extract($_POST);
$k= date('Y-m-d H:i:s',time());
if($tou==2)
	$flag=2;
else
	$flag=3;

mysql_query("insert into login_details VALUES ('$username','$password','$tou','$k')");


mysql_query("insert into register (username,firstname,lastname,gender,jobtitle,address,phoneno,email,tou,flag) VALUES
('$username','$firstname','$lastname','$gender','$jobtitle','$address','$phoneno','$email','$tou','$flag')");





header("location:index.php");
?> 