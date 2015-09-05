<?php
session_start();
if(!isset($_SESSION['username']))
//	header("location:login.php");
include 'header.php';	
extract($_POST);
$username=$checkuser;
//echo $username;

$sql="select * from login_details where username='$username'";
$result=mysql_query($sql);
if(!$result)
{
 die('error'.mysql_error());
}
else
{
  if($result)
   {
      if(mysql_num_rows($result)==1)
	  {
		?>
		<script language="javascript">
		top.document.getElementById("available").style.display='none';
		top.document.getElementById("notavailable").style.display='block';
		</script>
		<?php
		
	  }
      else
	  {
        ?>
		<script language="javascript">
		
		top.document.getElementById("notavailable").style.display='none';
		top.document.getElementById("available").style.display='block';

		</script>
		<?php
		
	  }

   }
}
//mysql_close($con);

?>
</body>

