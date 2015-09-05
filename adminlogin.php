<?php 
session_start();
include 'header.php';

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
  
  <link rel="stylesheet" type="text/css" media="screen,projection,print" href="./css/layout4_setup.css" />
  <link rel="stylesheet" type="text/css" media="screen,projection,print" href="./css/layout4_text.css" />
  <link rel="icon" type="image/x-icon" href="./img/favicon.ico" />
  <!-- Start css3menu.com HEAD section -->
	<link rel="stylesheet" href="sss_files/css3menu1/style.css" type="text/css" /><style>._css3m{display:none}</style>
	<!-- End css3menu.com HEAD section -->
  <title>SMaRT Classifieds</title>
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
<body onload="startclock();">
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
	if(isset($_SESSION['username']))
		{

	echo "Welcome, ". $_SESSION["username"];
		}
	?></h3>
        </div>



        <!-- Navigation Level 1 -->
        <div class="nav1">  
          <ul>
            <li><a href="index.php" title="Go to Start page">Home</a></li>
            <li><a href="about.html" title="Get to know who we are">About</a></li>
            <li><a href="rules.php" title="Know More about us"> Rules</a></li>																		
            <li><a href="register.php" title="Not yet a member??">Register</a></li>
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
     
    </div>
    <!-- For alternative headers END PASTE here -->

    <!-- B. MAIN -->
    <div class="main">
 
      <!-- B.1 MAIN NAVIGATION -->
      <div class="main-navigation">

        <!-- Navigation Level 3 -->
       <div class="round-border-topright"></div>
        <h1 class="first">SEE MORE. . . </h1>

        <!-- Navigation with grid style -->
        <dl class="nav3-grid">
          <dt><a href="#">RECENTLY ADDED</a></dt>
          <dt><a href="#">TOP ADs</a></dt>
          <dt><a href="#">SEE MY PROFILE </a></dt>
          <dt><a href="#">SMaRT RULES</a></dt>
          
        </dl>                        

        <!-- Title -->                
        

        <!-- Subtitle -->
       
                        
        <!-- Login -->
        <h1>Login</h1>
        <div class="loginform">
           <form id="form1" name="form1" method='POST' action='adminlogin.php'>
            <p><a href="#">Username:</a>
              <input type="text" name="username" id="username" />
            </p>
            <p><a href="#">Password:</a>
              <input type="password" name="password" id="password" />
            </p>
            <span  id='none' style="display:none; color:#F00; font-size:12;">Please enter  Username and Password.</span>
<span  id="nouser" style="display:none; color:#F00; font-size:12;">Invalid User!</span>
<span  id="noapp" style="display:none; color:#F00; font-size:12;">User approval pending</span>
<span  id="nopass" style="display:none; color:#F00; font-size:12;">Incorrect password!</span>
          
            <p><input type="submit" name="submit" class="button" value="Login" id="submit"  /></p>
            
            <p><input type="checkbox" name="checkbox_1" id="checkbox_1" class="checkbox" tabindex="3" size="1" value="" onclick="webLoginCheckRemember()" /><label for="checkbox_1" class="right">Remember me</label></p>
            <br />
                       
             <p><a href="register.php">Not a Member yet ??</a> </p> <br />
    	      
	          <p>&nbsp;</p>
	        </fieldset>
          </form>
        </div>

        <!-- Search form -->                  
        <h1>&nbsp;</h1>
        <div class="searchform">
         
           
      
        </div>

        <!-- Text formats -->
        <h1>&nbsp;</h1>
</div>
 
      <!-- B.1 MAIN CONTENT -->
      <div class="main-content">
        
        <!-- Pagetitle -->
        <h1 class="pagetitle">&nbsp;</h1>

        <!-- Content unit - One column -->
        
<hr class="clear-contentunit" />       
                              
        <!-- Content unit - One column -->
        <h1 class="block">Welcome SMaRT Classifieds Admin,</h1>
         <div class="column1-unit">
         <h1>&nbsp;</h1>
         <p align="justify" class="style5"> <font color="#666666"> <i>SMaRT is a classified webpage. This is an ultimate knowledge gateway to Kerala.We want people to connect, participate and share. Hence most of the content of SMaRT comes from the online community itself. Our aim is to build an online community that serves all people who live in Kerala.</p>
         <p align="justify" class="style5">Participation is the heart of our website. This website is created by a group of four people. This project is an outcome of a miniproject. We are led by a teamleader and a mentor. Assistance were given by the supporting staffs.</p>
         <p align="justify" class="style5">&nbsp;</p>
<p align="justify" class="style5">&nbsp;</p>
        </div>
        
        <hr class="clear-contentunit" />                
                    
        <!-- Content unit - One column -->
        <h1 class="block"> </h1>
      </div>
    </div>
      
    <!-- C. FOOTER AREA -->      

      <div class="footer">
      <p>Copyright &copy; 2012 SMaRT CLASSIFIEDS | All Rights Reserved</p>
      <p class="credits"> Powered by <a href="index.html" title="Classifieds management">SMaRT</a> | <a href="rules.html" title="Terms of use">Terms of Use</a> | <a href="about.html" title="Contact Us">Contact Us</a></p>
    </div>    
</body>
</html>

<?php
	if($_POST['submit'])
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		if($username && $password)
		{
			include 'header.php';	
			$query= mysql_query("SELECT * from login_details WHERE username='$username'");
			$querys= mysql_query("SELECT * from register");
			$numrows = mysql_num_rows($query);
			$numrowss = mysql_num_rows($querys);
			if ($numrows!=0 && $numrowss!=0)
			{
				//code to login
				while ($row = mysql_fetch_assoc($query) and $rows = mysql_fetch_assoc($querys))
				{
					$dbusername = $row['username'];
					$dbpassword = $row['password'];
					$dbusertype = $row['tou'];
					$dbflag = $rows['flag'];
					
				}
				if($username==$dbusername&&$password==$dbpassword)
				{
					
					//echo "You're in! <a href='member.php'>Click</a> here to enter the member page ";
					$_SESSION['username']=$dbusername;
					$_SESSION['password']=$dbpassword;
					$_SESSION['tou']=$dbusertype;
					
					?>
                    <form id=admin action="admin.php" method="post"></form>
                    <form id=suinfo action="suinfo.php" method="post"></form>
                    <form id=puinfo action="puinfo.php" method="post"></form>
					
                    
                    
               
				<?php
					
					if($_SESSION['tou']==0)
				{?>
					<script language="javascript">document.getElementById("admin").submit(); </script> 
				<?php }
				?>   
                    
             <?php
			}
				else 
				{
					//echo "Incorrect password!";
					 ?>
					<script language="javascript">
					document.getElementById("nopass").style.display='block';
					</script>
					<?php
				}
				
			}
			else
			{
				//echo ("That user does't exist!");
				 ?>
				<script language="javascript">
				document.getElementById("nouser").style.display='block';
				</script>
				<?php
			}
		}
		else
		{
				  //echo ("Please enter  username and Password!");
				  ?>
				<script language="javascript">
				document.getElementById("none").style.display='block';
				</script>
		<?php
		}
	}
?>



