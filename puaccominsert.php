<?php
session_start();
$checkusername=$_SESSION['username'];
$checkpassword=$_SESSION['password'];
include 'header.php';
extract($_POST);


   $sqls=mysql_query("SELECT * From login_details where username='".$checkusername."' and password='".$checkpassword."'");

	while($rows=mysql_fetch_array($sqls))
	{	
	
		$username = $rows['username'];
	}
	$k= date('Y-m-d H:i:s',time());
 
mysql_query("insert into accomodation VALUES ('','$username','$type','$pdesc','$price','$pno','$k')");

header("location:putrackdtls.php");
?> 