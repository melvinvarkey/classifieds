<?php session_start(); 

include 'header.php';	

if($_SESSION['username']&&$_SESSION['password'])
{
	$checkusername=$_SESSION['username'];
	$checkpassword=$_SESSION['password'];
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
<script language="javascript">
function add()

{
						if(document.getElementById('pdesc').value==""||document.getElementById('price').value==""||document.getElementById('pno').value=="")
{
						
					if(document.getElementById('pdesc').value=='')
						document.getElementById('spdesc').style.display='block';
					else
						document.getElementById('spdesc').style.display='none';
					
					if(document.getElementById('price').value=='')
						document.getElementById('sprice').style.display='block';
					else
						document.getElementById('sprice').style.display='none';
					
					if(document.getElementById('pno').value!="")
					{
							if(!isNaN(document.getElementById('pno').value))
							{
								pn=document.getElementById('pno').value.length;
								if(pn<10)
								{
									 document.getElementById('spno').style.display='block';
								 }
	 							else
	 							{	
									document.getElementById('spno').style.display='none';
		 						}
							}
							else
							{
								document.getElementById('spno').style.display='block';
							}
						}
						else
						{
							document.getElementById('spno').style.display='block';
						}
				
						
					}
						else
						
						{
							document.addtrack.submit();
						} 
						
}


	</script>  
 

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
        <p>&nbsp;</p>
        <p class="first">&nbsp;</p>
        <p class="first"><?php echo '<img src="'.$_SESSION['pic'].'" height="171" width="161" />'; ?></p>
        
          <!-- Navigation with grid style -->
        </p>
        <dl class="nav3-grid">
          
          <dt><a href="puinfo.php">INFO	</a></dt>
          <dt><a href="puedit.php">EDIT	</a></dt>
          <dt><a href="putrackdtls.php">TRACK</a></dt>
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
        <h1 class="block">VEHICLES</h1>
        
       
        <div class="column1-unit">
        
          <form name="addtrack" id="addtrack" action="puaccominsert.php" method="post" > 
            
            <table width="624" border="1">
              <tr>
              <td width="167">Type</td>
               <td width="258"><select name="type" id="type">
              <option name="tw">Two Wheelers</option>
              <option name="fw">Four Wheelers</option>
        
            </select></td>
            
            
            
              <td width="153">&nbsp;</td>
              <tr>
              
              </tr>
              
              
              
             <tr>
    		 <td>Product Description</td>
    		 <TD><textarea rows="3" cols="23" name="pdesc" id="pdesc"  maxlength="400"  /></textarea></TD>
    		 <td >
      		 <span  id="spdesc" style="display:none; color:#FF0000">* Enter Product Description </span></td>
  
  
  
              <tr>
                <td>Price Range</td>
                <td><input name="price" type="text" id="price"/></td>
                <td><span  id="sprice" style="display:none; color:#FF0000">* Enter Price </span></td>
              </tr>
              
              
              
  			<tr>
  			  <td>Contact Info</td>
  			  <td><input name="pno" type="text" id="pno" size="10" maxlength="10"  /></td>
  			  <td> <span  id="spno" style="display:none; color:#FF0000">* Enter Contact Info </span></td>
			  </tr>
  
  
  
  			<tr>
    		<td>Click to add your track</td>
    		<td><input name="track" type="button" value="Add Track" onClick="add();" /></td>
   		 	<td>&nbsp;</td>
  			</tr>
 

  </table>
</form>

      
          </table>
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


