
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
  <link rel="stylesheet" type="text/css" media="screen,projection,print" href="./css/layout1_setup.css" />
  <link rel="stylesheet" type="text/css" media="screen,projection,print" href="./css/layout1_text.css" />
  <link rel="icon" type="image/x-icon" href="./img/favicon.ico" />
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

<!-- Global IE fix to avoid layout crash when single word size wider than column width -->
<!--[if IE]><style type="text/css"> body {word-wrap: break-word;}</style><![endif]-->

<script language="javascript">

function fun()
{
	if(document.getElementById('username').value!="")
	{	
		document.getElementById('susername').style.display='none';
  		document.getElementById('checkuser').value=document.getElementById('username').value;
		document.usercheckform.submit();
	}
	else
	{
  	document.getElementById('susername').style.display='block';
  	}
	
}
				function check()
			{
						if(document.getElementById('username').value==""||document.getElementById('firstname').value==""||document.getElementById('lastname').value==""||document.getElementById('jobtitle').value==""||document.getElementById('password').value==""||document.getElementById('cpassword').value==""||document.getElementById('address').value==""||document.getElementById('phoneno').value==""||document.getElementById('email').value=="")
				{
					if(document.getElementById('username').value=="")
						document.getElementById('susername').style.display='block';
					else
						document.getElementById('susername').style.display='none';
					
					if(document.getElementById('firstname').value=="")
						document.getElementById('sfirstname').style.display='block';
					else
						document.getElementById('sfirstname').style.display='none';
						
					if(document.getElementById('lastname').value=="")
						document.getElementById('slastname').style.display='block';
					else
						document.getElementById('slastname').style.display='none';
						
					if(document.getElementById('jobtitle').value=="")
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
								if(pn<10)
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
					
					
					if(document.getElementById('password').value=="")
						document.getElementById('spassword').style.display='block';
					else
					{
						pass=document.getElementById('password').value.length;
  						document.getElementById('spassword').style.display='none';
  						if(pass<6)
							 document.getElementById('spassmin').style.display='block';
						else
								 document.getElementById('spassmin').style.display='none';
					}	
					
			        if(document.getElementById('cpassword').value=='')
						document.getElementById('scpassword').style.display='block';
					else
						document.getElementById('scpassword').style.display='none';
					if(document.getElementById('password').value!=document.getElementById('cpassword').value)
						document.getElementById('serror').style.display='block';
					else
						document.getElementById('serror').style.display='none';
					}
				else 
				{
					if(document.getElementById("accept").checked)
							document.register.submit();
					else
							alert('Please read and accept our terms and conditions');

				}
			}
				
		</script>              



<link href="../wamp/www/proj till terms/js-form-validation.css" rel="stylesheet" type="text/css" />
<link href="../js-form-validation.css" rel="stylesheet" type="text/css" />
</head>

<!-- Global IE fix to avoid layout crash when single word size wider than column width -->
<!--[if IE]><style type="text/css"> body {word-wrap: break-word;}</style><![endif]-->

<body onLoad="startclock();">
  <p><!-- Main Page Container -->
  </p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <div class="page-container">

   <!-- For alternative headers START PASTE here -->

    <!-- A. HEADER -->      
    <div class="header">
      
      <!-- A.1 HEADER TOP -->
      <div class="header-top">
        
        <!-- Sitelogo and sitename -->
        <a class="sitelogo" href="index.php" title="Go to Start page"></a>
        <div class="sitename">
          <h1><a href="index.php" title="Go to Start page">SMaRT<span style="font-weight:normal;font-size:50%;">&nbsp;</span></a></h1>
          <h2>C L A S S I F I E D S</h2>
        </div>
    
        <!-- Navigation Level 0 -->
        <div align="right" class="nav0">
          <h3></h3>
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
          </	ul>
          
          <!-- Navigation item -->
         
          
          
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
        <h1 class="pagetitle">SMaRT CLASSIFIEDS</h1>

        <!-- Content unit - One column -->
    
          
        <!-- Content unit - One column -->
        <h1 class="block">REGISTER HERE </h1>
        <div class="column1-unit">
         <form name="register" id="register" action= "insert.php" method="post" >
           <TABLE width="708">
             <tr >
      <td height="34" ><b>Username:</b></font></td>
      <td width="242"><input type="text" name="username" id="username" size="30" onChange="fun();" >
        <td><span  id="susername" style="display:none; color:#FF0000">Enter User Name</span>
        
        <span name="notavailable" id="notavailable" style="display:none;color:red">* Username already exists</span> 
        <span name="available" id="available" style="display:none;color:green"> * Username is available</span>
        
        
          <TR>
            <TD width="283" height="28"><b>First name:</b></TD>
            <TD width="242"><input type="text" name="firstname" id="firstname" size="30"  ></TD>
            <td width="259"><span  id="sfirstname" style="display:none; color:#FF0000">Enter First name</span></td>
          </TR>
    <TR>
      <TD height="36" ><b>Last name:</b></TD>
      <TD width="242"><input type="text" name="lastname" id="lastname" size="30"  ></TD>
      <td width="259"><span  id="slastname" style="display:none; color:#FF0000">Enter Last name</span></td>
      </TR>
    <TR>
      <TD height="36" ><b>Gender :</b></TD>
      <TD width="242"><input type="radio" name="gender" id="gender" size="30" value="male" checked > Male
      <input type="radio" name="gender" id="gender" size="30" value="female" > Female</TD>
      <td></td>
    
      </TR>
    <TR>
      <TD height="36" ><b>Job Title:</b></TD>
      <TD width="242"><input type="text" name="jobtitle" id="jobtitle" size="30"  ></TD>
      <td width="259"><span  id="sjobtitle" style="display:none; color:#FF0000">Enter job title</span></td>
      </TR>
    <TD height="70"><b>Adddress:</b></TD>
      <TD><textarea rows==3 cols=23 name="address" id="address"  ></textarea></TD>
      <td ><span  id="saddress" style="display:none; color:#FF0000">Enter Address </span></td>
      <!--    <TR>
      <TD height="34">Gender:</TD>
        <TD><INPUT NAME="gender" TYPE="RADIO" VALUE="m" checked> 
          Male 
          <INPUT TYPE="RADIO" NAME="gender" VALUE="f"> Female </TD>
        </TR> -->
    <tr>
      <td height="32"><b>Phone no:</b></td>
      <td><input type="text" name="phoneno" size="30" id="phoneno"  /></td>
      <td ><span  id="sphoneno" style="display:none; color:#FF0000">Enter a valid phone no </span></td>
    </tr>
    <TR>
      <TD height="30"><b>Email id:</b></TD>
      <TD><input type="text" name="email" size=30 id="email"  ></TD>
      <td ><span  id="semail" style="display:none; color:#FF0000">Enter a valid email </span></td>
    </TR>
      <TD height="40"><b>Password:</b></TD>
        <TD><input type="password" name="password" id="password" size="30" ></TD>
        <td><span  id="spassword" style="display:none; color:#FF0000">Enter a Password (min6 char) </span><span  id="spassmin" style="display:none; color:#FF0000">password minimum  6 characters</span></td>
      </TR>
    <TR>
      <TD height="36"><b>Confirm Password:</b></TD>
      <TD><input type="password" name=="cpassword" id="cpassword" size ="30"  onchange="check();"></TD>
      <td><span  id="scpassword" style="display:none; color:#FF0000">Please Retype Password</span><span  id="serror" style="display:none; color:#FF0000">Please confirm your password..</span></td>
    <TR>
      <TD height="32"><b>Type of User:</b></TD>
      <TD>
      <input name="tou" type="radio" value="1" onChange="check();" checked="checked">SUPREME
       <input name="tou" type="radio" value="3" onChange="check();" >PREMIUM
       
      
      
      
      </TD>
      <td> </td>
      
      </TR>
    <TR>
      
      <TD height="59"><div align="left">
        <p align="left">
          <input name="accept" type="checkbox" id="accept" value="y" />
          I Accept the <a href="#">Terms & Conditions</a></p>
        </div></TD>
      <TD><div align="left">
       
       <input type="button" value= "REGISTER" onClick="check();"> </div></TD>
       <td></td>
      </TR>
    
    
</TABLE>
          
    <iframe name="iframesubmit" id="iframesubmit" width="100" height="0" style="margin-top:0px;" frameborder="0"></iframe>	      
   </form>    
          
              <form name="usercheckform"  action="check_availability.php" method="post" target="iframesubmit">
<input type="hidden" name="checkuser" id="checkuser">
</form>   

          
          
          
        </div>          
        <hr class="clear-contentunit" />        
                                             
        <!-- Content unit - One column -->
        <h1 class="block">&nbsp;</h1>
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



