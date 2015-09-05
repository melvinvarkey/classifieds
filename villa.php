<?php 
session_start();
include 'header.php';	
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
  <link rel="stylesheet" type="text/css" media="screen,projection,print" href="./css/layout1_setup.css" />
  <link rel="stylesheet" type="text/css" media="screen,projection,print" href="./css/layout1_text.css" />
  <link rel="icon" type="image/x-icon" href="./img/favicon.ico" />
  <link rel="stylesheet" href="sss_files/css3menu1/style.css" type="text/css" /><style>._css3m{display:none}</style>
  <title>SMaRT CLASSIFIEDS</title>
</head>
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

<!-- Global IE fix to avoid layout crash when single word size wider than column width -->
<!--[if IE]><style type="text/css"> body {word-wrap: break-word;}</style><![endif]-->

<body onLoad="startclock(); timerONE=window.setTimeout">
  <!-- Main Page Container -->
  <div class="page-container">

   <!-- For alternative headers START PASTE here -->

    <!-- A. HEADER -->      
    <div class="header">
      
      <!-- A.1 HEADER TOP -->
      <div class="header-top">
        
        <!-- Sitelogo and sitename -->
        <a class="sitelogo" href="#" title="Go to Start page"></a>
        <div class="sitename">
          <h1><a href="index.php" title="Go to Start page">SMaRT<span style="font-weight:normal;font-size:50%;">&nbsp;</span></a></h1>
          <h2>C L A S S I F I E D S</h2>
        </div>
    
        <!-- Navigation Level 0 -->
        <div align="right" class="nav0">
        <?php
	if($_SESSION['username'])
		{

	echo "Welcome ". $_SESSION["username"];
		}
	?>
         
        </div>			

        <!-- Navigation Level 1 -->
        <div class="nav1">
          <ul>
            <li><a href="index.php" title="Go to Start page">Home</a></li>
            <li><a href="about.html" title="Get to know who we are">About</a></li>
            <li><a href="rules.php" title="Get in touch with us">Rules</a></li>																		
            <li><a href="register.php" title="Join with Us">Register</a></li>
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
            <li><a href="about.html">Overview</a></li>
          </ul>
          
          <!-- Navigation item -->
          
         <!-- Start css3menu.com BODY section -->
<ul id="css3menu1" class="topmenu">
	<li class="topfirst"><a href="#" style="height:15px;line-height:15px;"><span>My Menu</span></a>
	<ul>
		<li class="subfirst"><a href="#">Add Track</a></li>
		<li><a href="#">View Profile</a></li>
		
	</ul></li>
	<li class="topmenu"><a href="#" style="height:15px;line-height:15px;"><span>Accomodation</span></a>
	<ul>
		<li class="subfirst"><a href="flat.php">New Flats            </a></li>
		<li><a href="villa.php">New Villas</a></li>
	</ul></li>
	<li class="topmenu"><a href="#" style="height:15px;line-height:15px;"><span>Apple Products</span></a>
	<ul>
		<li class="subfirst"><a href="Ipad.php">I - Pad</a></li>
		<li><a href="Iphone.php">I - Phone</a></li>
		<li><a href="Ipod.php">I - pod Nano</a></li>
		<li><a href="Ishuffle.php">I - Shuffle</a></li>
		<li><a href="Itouch.php">I - Touch</a></li>
		<li><a href="IMacbook.php">Macbook</a></li>
	</ul></li>
	<li class="topmenu"><a href="#" style="height:15px;line-height:15px;"><span>Electronics</span></a>
	<ul>
		<li class="subfirst"><a href="Camera.php">Camera</a></li>
		<li><a href="Mobile.php">Mobile</a></li>
		<li><a href="Laptop & Pc.php">Laptops &amp; Pc</a></li>
		<li><a href="Other Gadgets.php">Other Gadgets</a></li>
	</ul></li>
	<li class="topmenu"><a href="#" style="height:15px;line-height:15px;"><span>Items 4 Sale</span></a>
	<ul>
		<li class="subfirst"><a href="Furniture.php">Furnitures</a></li>
		<li><a href="Home Appliances.php">Home Appliances</a></li>
		<li><a href="Others.php">Others</a></li>
	</ul></li>
	<li class="topmenu"><a href="#" style="height:15px;line-height:15px;"><span>Vehicles</span></a>
	<ul>
		<li class="subfirst"><a href="fourwheeler.php">Four Wheelers</a></li>
		<li ><a href="Twowheeler.php">Two Wheelers</a></li>
	</ul></li>
	<li class="topmenu"><a href="#" style="height:15px;line-height:15px;">Kerala Guide</a></li>
	<li class="toplast"><a href="#" style="height:15px;line-height:15px;">News</a></li>
</ul><p class="_css3m"><a href="http://css3menu.com/">CSS3 Menus Drop Down Css3Menu.com</a></p>
<!-- End css3menu.com BODY section -->
          
          
          
          
          
          
          
          <!-- Navigation item -->        </div>
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
      <div class="header-breadcrumbs"><!-- Search form --></div>
    </div>

   <!-- For alternative headers END PASTE here -->

    <!-- B. MAIN -->
    <div class="main">
  
      <!-- B.1 MAIN CONTENT -->
      <div class="main-content">
        
        <!-- Pagetitle -->
       

        <!-- Content unit - One column -->
    
      
        <!-- Content unit - Two columns -->
        <hr class="clear-contentunit" />

        <!-- Content unit - Three columns -->
        <hr class="clear-contentunit" />

        <!-- Content unit - One column -->
        <h1 class="block">ACCOMODATION - VILLAS</h1>
        <div class="column1-unit"></p>              
          <table width="545">
            <tr>
          
            <th width="92" class="top" scope="col">Product Type</th>
            <th width="157" class="top" scope="col">Product Description</th>
            <th width="90" class="top" scope="col">Price</th>
            <th width="90" class="top" scope="col">Contact Info</th>
            <th width="90" class="top" scope="col">Posted By</th>
            <th width="124" class="top" scope="col">Added on</th>
            
            </tr>
             <?php
   
 
	$sqls=mysql_query("SELECT * From accomodation where type='villa'");
	$i=1;
	if( mysql_num_rows($sqls)!=0)
 	{
		
	while($rows=mysql_fetch_array($sqls))
	{
		
		//$dbid = $row['id'];
		//$dbids = $rows['id'];
		
		$dbtype = $rows['type'];
		$dbpdesc = $rows['pdesc'];
		$dbprice = $rows['price'];
		$dbpno = $rows['pno'];
		$dbusername=$rows['username'];
		$dbdat = $rows['date'];
		if($i%2==0);
		{
			//echo "<tr><td>".$i."<td><b>".$dbusername;
			//echo "<td>"."<b>".$dbids;
			
			echo "<td>"."<b>".$dbtype;
			echo "<td>"."<b>".$dbpdesc;
			echo "<td>"."<b>".$dbprice;
			echo "<td>"."<b>".$dbpno;
			echo "<td>"."<b>".$dbusername;
			echo "<td>"."<b>".$dbdat;

			
		} echo "<tr>"; 
				
	}
	}
	
	?>   
    	  </table>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
        </div>

        <!-- Content unit - One column -->
        

        <!-- Content unit - One column --><!-- Content unit - One column -->
        <h1 class="block">&nbsp;</h1>
        <div class="column1-unit">
  <div class="loginform"></div>
      </div>      
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



