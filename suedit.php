<?php session_start(); 

include 'header.php';	

if($_SESSION['username']&&$_SESSION['password'])
{
	$checkusername=$_SESSION['username'];
	$checkpassword=$_SESSION['password'];
		//echo "<font color=black>Welcome, ". $_SESSION['username']." ".$_SESSION['password'];
	$sql=mysql_query("SELECT * From login_details WHERE username='$checkusername' and password='$checkpassword' and tou='1'");
	if($sql)
	if($row=mysql_fetch_array($sql))
	{
		
		
$qry=mysql_query("select firstname from register where username='$_SESSION[username]'");
$m=mysql_fetch_array($qry);
$_SESSION['firstname']=$m['firstname'];



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
  
  <link rel="stylesheet" type="text/css" media="screen,projection,print" href="./css/layout4_setup.css" />
  <link rel="stylesheet" type="text/css" media="screen,projection,print" href="./css/layout4_text.css" />
  <link rel="icon" type="image/x-icon" href="./img/favicon.ico" />
  <!-- Start css3menu.com HEAD section -->
	<link rel="stylesheet" href="sss_files/css3menu1/style.css" type="text/css" /><style>._css3m{display:none}</style>

<SCRIPT LANGUAGE="JavaScript">

var timerID = null;
var timerRunning = false;

function stopclock ()
{
if(timerRunning)
clearTimeout(timerID);
timerRunning = false;
}

function showtime () 
{
var now = new Date();
var hours = now.getHours();
var minutes = now.getMinutes();
var seconds = now.getSeconds()

var timeValue = "" + ((hours >12) ? hours -12 :hours)
timeValue += ((minutes < 10) ? ":0" : ":") + minutes
timeValue += ((seconds < 10) ? ":0" : ":") + seconds
timeValue += (hours >= 12) ? " P.M." : " A.M."
document.clock.face.value = timeValue;

// you could replace the above with this
// and have a clock on the status bar:
// window.status = timeValue;

timerID = setTimeout("showtime()",1000);
timerRunning = true;
}

function startclock () 
{
// Make sure the clock is stopped
stopclock();
showtime();
}

</SCRIPT>

<script language="javascript">

function submitme()
			{
						if(document.getElementById('firstname').value==""||document.getElementById('lastname').value==""||document.getElementById('jobtitle').value==""||document.getElementById('address').value==""||document.getElementById('phoneno').value==""||document.getElementById('email').value=="")
				{
					
					if(document.getElementById('firstname').value=="")
						document.getElementById('sfirstname').style.display='block';
					else
						document.getElementById('sfirstname').style.display='none';
						
					if(document.getElementById('lastname').value=='')
						document.getElementById('slastname').style.display='block';
					else
						document.getElementById('slastname').style.display='none';
						
						
						
						if(document.getElementById('jobtitle').value=='')
						document.getElementById('sjobtitle').style.display='block';
					else
						document.getElementById('sjobtitle').style.display='none';
						
					if(document.getElementById('address').value=='')
						document.getElementById('saddress').style.display='block';
					else
						document.getElementById('saddress').style.display='none';
						
						
						if(document.getElementById('phoneno').value!="")
					{
							if(!isNaN(document.getElementById('phoneno').value))
							{
								pn=document.getElementById('phoneno').value.length;
								if(pn<=10)
								{
									 document.getElementById('sphoneno').style.display='block';
								 }
	 							else
	 							{	
									document.getElementById('sphoneno').style.display='none';
		 						}
							}
							else
							{
								document.getElementById('sphoneno').style.display='block';
							}
						}
						else
						{
							document.getElementById('sphoneno').style.display='block';
						}
					
				
					if(document.getElementById('email').value=='')
					document.getElementById('semail').style.display='block';
					else
					{
							document.getElementById('semail').style.display='none';
							var em = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
							if(em.test(document.getElementById('email').value) == false)
								document.getElementById('semail').style.display='block';
							else
								document.getElementById('semail').style.display='none';
					}
					
					
					
				}
				else
	{
		document.regs.submit();
	}
	
			}
				
		</script> 
        <link href="../wamp/www/proj till terms/js-form-validation.css" rel="stylesheet" type="text/css" />
<link href="../js-form-validation.css" rel="stylesheet" type="text/css" />
</head>
   <!--<SCRIPT LANGUAGE="JavaScript">
//
//var timerID = null;
//var timerRunning = false;
//
//function stopclock ()
//{
//if(timerRunning)
//clearTimeout(timerID);
//timerRunning = false;
//}
//
//function showtime () 
//{
//var now = new Date();
//var hours = now.getHours();
//var minutes = now.getMinutes();
//var seconds = now.getSeconds()
//
//var timeValue = "" + ((hours >12) ? hours -12 :hours)
//timeValue += ((minutes < 10) ? ":0" : ":") + minutes
//timeValue += ((seconds < 10) ? ":0" : ":") + seconds
//timeValue += (hours >= 12) ? " P.M." : " A.M."
//document.clock.face.value = timeValue;
//
//// you could replace the above with this
//// and have a clock on the status bar:
//// window.status = timeValue;
//
//timerID = setTimeout("showtime()",1000);
//timerRunning = true;
//}
//
//function startclock () 
//{
//// Make sure the clock is stopped
//stopclock();
//showtime();
//}
//
//</SCRIPT>-->
	<!-- End css3menu.com HEAD section -->
  <title>SMaRT Classifieds</title>
</head>
<body onLoad="startclock();">
  <!-- Main Page Container -->
  <div class="page-container">

   <!-- For alternative headers START PASTE here -->

    <!-- A. HEADER -->      
    <div class="header">
      
      <!-- A.1 HEADER TOP -->
      <div class="header-top">
        
        <!-- Sitelogo and sitename -->
        <a class="sitelogo" href="index.php" title="Go to Start page"></a>
        <div class="sitename">
          <h1><a href="index.php" title="Go to Start page">SMaRT</a></h1>
          <h2>C L A S S I F I E D S</h2>
        </div>
    
        <!-- Navigation Level 0 -->
       <div align="right" class="nav0">
          <h3><?php
	if($_SESSION['username'])
		{

	echo "Welcome ". $_SESSION['username'];
		}
	?></h3></div>



        <!-- Navigation Level 1 -->
        <div class="nav1">  
          <ul>
            																	
            <li><a href="signout.php" title="click to signout">Sign Out </a></li>
          </ul>
        </div>              
      </div>
      
      <!-- A.2 HEADER MIDDLE -->
      <div class="header-middle">    
   
      <!-- Site message --></div>
      
      <!-- A.3 HEADER BOTTOM -->
      <div class="header-bottom">
      
        <!-- Navigation Level 2 (Drop-down menus) -->
        <div class="nav2">
	
          <!-- Navigation item -->
          <ul>
           <li><a href="#"></a></li>
          </ul>
          
<!-- Start css3menu.com BODY section -->

<!-- End css3menu.com BODY section -->
        </div>
	  </div>

      <!-- A.4 HEADER BREADCRUMBS -->
      <div class="times">
     <script> 
var mydate=new Date()  
var year=mydate.getYear()  
if (year < 1000) year+=1900  
var day=mydate.getDay()  
var month=mydate.getMonth()  
var daym=mydate.getDate()  
if (daym<10) daym="0"+daym  
var dayarray=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday")  
var montharray=new Array("January","February","March","April","May","June","July","August","September","October","November","December")  
document.write(" " +montharray[month]+" "+daym+", "+year+"")  
</script> <form name="clock" onSubmit="0">
<input type="button" style="background-color:  inherit; border: transparent" name="face" size=13 value="">
</form>  
   
      </div>
      <!-- Breadcrumbs -->
      <div class="header-breadcrumbs">
        
      </div>
    </div>

    <!-- For alternative headers END PASTE here -->

    <!-- B. MAIN -->
    <div class="main">
 
      <!-- B.1 MAIN NAVIGATION -->
      <div class="main-navigation">

        <!-- Navigation Level 3 -->
        <div class="round-border-topright"></div>
        <h1 class="first">&nbsp;</h1>
        <p class="first"><form action="suedit.php" method="post"
enctype="multipart/form-data">
<label for="file"></label>
<input type="file" name="file" id="file" > 
&nbsp;
<input type="submit" name="submit" value="Submit" class="button" >
</form></p>
<?php

if($_FILES)
{
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/pjpeg"))
&& ($_FILES["file"]["size"] < 20000000000))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
       	$id=$_SESSION['username'];
	$_FILES["file"]["name"]=$id.".jpg";
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
   $_FILES["file"]["name"];
	  $d="upload/".$_FILES["file"]["name"];
mysql_query("update register set pic='$d' WHERE username='$_SESSION[username]'");	  
$sqll=mysql_query("SELECT * From register WHERE username='$_SESSION[username]'");
		$r=mysql_fetch_array($sqll);
		$_SESSION['pic']=$r['pic'];
  
header("location:suinfo.php");
    }
  }
else
  {
  echo "Invalid file";
  }
}
?>




        <p class="first"><?php echo '<img src="'.$_SESSION['pic'].'" height="171" width="161" />'; ?></p>
        
          <!-- Navigation with grid style -->
        </p>
        <dl class="nav3-grid">
          
          <dt><a href="suinfo.php">INFO	</a></dt>
          <dt><a href="suedit.php">EDIT	</a></dt>
          <dt><a href="sutrackdtls.php">TRACK</a>
          <dt><a href="accounts.php">ACCOUNTS TABLE</a></dt>
        </dl>
        <!-- Title -->                
        <h1>&nbsp;</h1>  

      </div>
 
      <!-- B.1 MAIN CONTENT -->
      <div class="main-content">
        
        <!-- Pagetitle -->
        <h1 class="pagetitle">
		<?php
	if($_SESSION['username'])
		{

	echo $_SESSION["username"]."'s"." Profile ";
		}
	?></h1>

        <!-- Content unit - One column -->
        <h1 class="block">EDIT DETAILS</h1>
        <div class="column1-unit">
         <form name="register" id="register" action= "insert.php" method="post"> 
		 <?php
$qry=mysql_query("SELECT * From register WHERE username='$checkusername'");
$qrys=mysql_query("SELECT tou From login_details WHERE username='$checkusername'");
$d=mysql_fetch_array($qry);
$b=mysql_fetch_array($qrys);
?>
      
           
           
          
          
   </form>    
          
        
</script></div>
        <hr class="clear-contentunit" />        
                                             
        <!-- Content unit - One column -->
        
        
        
         <form name="regs" id="regs" action="suupdate.php" method="post" >
         
          <table width="630" border="1">
            <tr>
              <td width="140" height="46"><font size="2"><b>Username</b></font></td>
              <td width="183"><input name="username" type="text" disabled id="username"  value="<?php echo $d["username"]; ?>"  /> </td>
              <td width="226">&nbsp;</td>
            </tr>
            <tr>
              <td height="46"><font size="2"><b>First Name</b></font></td>
              <td><input type="text" name="firstname" id="firstname"  value="<?php echo $d["firstname"]; ?>" /></td>
              
              <td><span id="sfirstname" style="display:none; color: #F00"> *Please enter  First Name</span></td>
            </tr>
            <tr>
              <td height="46"><font size="2"><b>Last Name</b></font></td>
              <td><input type="text" name="lastname" id="lastname"  value="<?php echo $d["lastname"]; ?>" /></td>
              <td><span id="slastname" style="display:none; color: #F00"> *Please enter Last Name</span></td>
            </tr>
            <tr>
              <td><b><font size="2">Gender</font></b></td>
              <td><input type="text" name="gender" id="gender"  value="<?php echo $d["gender"]; ?>" /></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td height="42"><font size="2"><b>Job Title</b></font></td>
              <td><input type="text" name="jobtitle" id="jobtitle"  value="<?php echo $d["jobtitle"]; ?>" /></td>
              <td><span id="sjobtitle" style="display:none; color: #F00"> *Please enter  Job title</span></td>
            </tr>
            <tr>
              <td height="42"><font size="2"><b>Address</b></font></td>
              <td><input type="text" name="address" id="address"  value="<?php echo $d["address"]; ?>" /></td>
              <td><span id="saddress" style="display:none; color: #F00"> *Please enter  Address</span></td>
            </tr>
            <tr>
              <td height="46"><font size="2"><b>Mobile Number</b></font></td>
              <td><input type="text" name="phoneno" id="phoneno"  value="<?php echo $d["phoneno"]; ?>" /></td>
              <td><span id="sphoneno" style="display:none; color: #F00"> *Please enter Phoneno</span></td>
            </tr>
            <tr>
              <td height="46"><font size="2"><b>Email-Id</b></font></td>
              <td><input type="text" name="email" id="email"  value="<?php echo $d["email"]; ?>" /></td>
              <td><span id="semail" style="display:none; color: #F00"> *Please enter your Email-Id</span></td>
            </tr>
            <tr>
              <td><font size="2"><b>Type of Membership</b></font></td>
              <td><input name="tou" type="text" disabled id="tou"  value="<?php if($b["tou"]==1)
			  			echo "SUPREME";
					else echo "PREMIUM";
 ?>"  /></td>
              <td>&nbsp;</td>
            </tr>
            
          </table>
          <h1 class="block"> 
            <input type="button"  id="b1" name="b1" value="Update" align="right" onclick="submitme()"/>
          </h1>
          
             </form>
          
          <div class="column1-unit"></div>
      
        <!-- Content unit - One column -->
       
        <div class="column1-unit"></div>
        
       
        
      </div>
    </div>

      
    <!-- C. FOOTER AREA -->      

    <div class="footer">
      <p>Copyright &copy; 2012 SMaRT CLASSIFIEDS | All Rights Reserved</p>
      <p class="credits"> Powered by <a href="index.html" title="Classifieds management">SMaRT</a> | <a href="rules.html" title="Terms of use">Terms of Use</a> | <a href="about.html" title="Contact Us">Contact Us</a></p>
    </div>       
  </div> 
  
</body>
</html>
<?php

	}
	else
		include 'index.php';	
}
else
		die("You must be logged in.");	
	?>


