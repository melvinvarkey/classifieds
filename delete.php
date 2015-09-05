<?php
include 'header.php';	
$selected_id=$_GET['selected_id'];


$qry=mysql_query("SELECT * From register WHERE id='$selected_id'");



$d=mysql_fetch_array($qry);


$username=$d['username'];


	$sql=mysql_query("delete From login_details where username='$username'");
	
	
	
	$sql=mysql_query("delete From register where id='$selected_id'");
	
	
	
header("location:admindelete.php");
	
	?>