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
	$k= date('y/m/d');
 
mysql_query("insert into track VALUES ('$username','$ptype','$pname','$pdesc','$price','$pno','$k','$acc')");

header("location:sutrackdtls.php");
?> 