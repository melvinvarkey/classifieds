<?php 

include("header.php");
session_start();
$id=$_SESSION['username'];
extract($_POST);

mysql_query("update register set firstname='$firstname',lastname='$lastname',gender='$gender',jobtitle='$jobtitle',address='$address',phoneno='$phoneno',email='$email',tou='$tou',flag='$flag' where username='$id'");
	
	

	
	/*$w=mysql_query("select * from login_details where username='$id'");
	$ww=mysql_fetch_array($w);
	$pas=$ww['password'];
	if($pas==$opass)
	{
	mysql_query("update login_details set password='$npass' where username='$id'");
	$_SESSION['password']=$npass;

	}*/

	header("location:puinfo.php");

?>