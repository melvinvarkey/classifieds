<?php session_start(); 

include 'header.php';	

if($_SESSION['username']&&$_SESSION['password'])
{
	$checkusername=$_SESSION['username'];
	$checkpassword=$_SESSION['password'];
		//echo "<font color=black>Welcome, ". $_SESSION['username']." ".$_SESSION['password'];
	$sql=mysql_query("SELECT * From login_details WHERE username='$checkusername' and password='$checkpassword' and tou='2'");
	if($sql)
	if($row=mysql_fetch_array($sql))
	{


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

	echo "Welcome ". $_SESSION["username"];
		}
	?>
        </div>



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
        <p class="first">&nbsp;</p>
        <p class="first"><?php echo '<img src="'.$_SESSION['pic'].'" height="171" width="161" />'; ?></p>
        
          <!-- Navigation with grid style -->
        </p>
        <dl class="nav3-grid">
          
          <dt><a href="puinfo.php">INFO	</a></dt>
          <dt><a href="puedit.php">EDIT	</a></dt>
          <dt><a href="putrackdtls.php">TRACK</a>
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

	echo $_SESSION["username"]."'s"." Track ";
		}
	?></h1>

        <!-- Content unit - One column -->
        <h1 class="block">TRACK DETAILS</h1>
      <!-- php
	$qry=mysql_query("SELECT * From register WHERE username='$checkusername'");
	$qrys=mysql_query("select tou from login_details WHERE username='$checkusername'");

	$d=mysql_fetch_array($qry);
	$k=mysql_fetch_array($qrys);
           -->
        <div class="column1-unit">
      
	</table>
         
          <p class="caption">&nbsp;</p>
           <form action="puaddtrack.php" >
          <table width="545">
            <tr>
              <th width="251" height="41" class="top" scope="col"><font size="3">Select the Track Category</font> </th>
              <th width="337" class="top" scope="col">
             
              <select name="addtype">
              <option value="accc">Accomodation</option>
              <option value="appp">Apple Products</option>
              <option value="elee">Electronics</option>
              <option value="ifss">Items for sale</option>
              <option value="vehi">Vehicles</option>
                           
              </select>
              <input type="submit" value="Proceed" />
              
              
              
              </th>
              
            </tr>
           
          </table>
</form>
<form id=accc action="puaccom.php"></form>
<form id=appp action="puapplepdt.php"></form>
<form id=elee action="puelectronics.php"></form>
<form id=ifss action="puitems4sale.php"></form>
<form id=vehi action="puvehicles.php"></form>

					
<?php

if($_GET)
{
					if($_GET['addtype']=='accc')
				{?>
					<script language="javascript">document.getElementById("accc").submit(); </script> <?php } ?>
                    
                    
                    <?php
					if($_GET['addtype']=='appp')

				{?>
					<script language="javascript">document.getElementById("appp").submit(); </script> <?php } ?>
                    
                    
					<?php
					if($_GET['addtype']=='elee')

				{?>
					<script language="javascript">document.getElementById("elee").submit(); </script> <?php } ?>
                    
                    <?php
					if($_GET['addtype']=='ifss')

				{?>
					<script language="javascript">document.getElementById("ifss").submit(); </script> <?php } ?>
                    
                    <?php
					if($_GET['addtype']=='vehi')

				{?>
					<script language="javascript">document.getElementById("vehi").submit(); </script> <?php } } ?>
                    
                    
           



          <p class="caption">&nbsp;</p>
        </div>          
        <!-- Content unit - One column -->
        <h1 class="block">&nbsp; </h1>
        <div class="column1-unit"></div>
      </div>
    </div>
      
    <!-- C. FOOTER AREA -->      

    <div class="footer">
      <p>Copyright &copy; 2012 SMaRT CLASSIFIEDS | All Rights Reserved</p>
      <p class="credits"> Powered by <a href="index.php" title="Classifieds management">SMaRT</a> | <a href="rules.php" title="Terms of use">Terms of Use</a> | <a href="about.html" title="Contact Us">Contact Us</a></p>
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


