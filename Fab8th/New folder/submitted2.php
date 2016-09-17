<?php
	$fromPage = getEnv("HTTP_REFERER");
	//echo $fromPage;
	
	$host="fab8thproductionscom.ipagemysql.com";
	$user="website";
	$password="Fabprod_12345";
	$dbname = "fab8th";
	$cxn = mysql_connect($host,$user,$password)
	or die("Couldn’t connect to server.");
	mysql_select_db($dbname);
	
	$title = $_POST['title'];
	$surname = $_POST['surname'];
	$firstname = $_POST['firstname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$event = $_POST['event'];
	$cats = $_POST['cbox'];
	
	$N = count($cats);
	$res = "";
    //echo("You selected $N door(s): ");
    for($i=0; $i < $N; $i++)
    {
		$res = $res . "---". $cats[$i]; 
		//echo($aDoor[$i] . " ");
    }
	if(empty($title) || empty($surname) || empty($phone) || empty($email))

	{
	
	}
	else
	{
		$query = "insert into event_management(title, surname, firstname, email, phone, event, cbox) 
		values('$title', '$surname', '$firstname', '$email', '$phone', '$event', '$res')";
	}
		
	
	
	$result = mysql_query($query, $cxn)
	or die ("Could not execute query.");
	
	$to = "$email";
	$subject = "Order Received";
	$txt = "Dear ".$title." ".$firstname." ".$surname . " ,\r\nThis is to inform you that your booking for Event Management has been received by Fab8th Productions team and you will be contacted shortly.\r\nThanks for your patronage.";
	$headers = "From: fabservice@fab8thproductions.com" . "\r\n";
	
	mail($to,$subject,$txt,$headers);


	$to2 = "fab8thproductions@gmail.com";
	$subject2 = "New Booking";
	$txt2 = "<html>
	<head>
	<title>New Booking</title>
	</head>
	<body>
	<p>There is a new booking on www.fab8thproductions.com for Event Management as detailed below</p>
	<table border=\"3\" bordercolor=\"#ED188A\">
	<tr><td>Title</td><td>$title</td></tr>
	<tr><td>Surname</td><td>$surname</td></tr>
	<tr><td>First Name</td><td>$firstname</td></tr>
	<tr><td>E-Mail</td><td>$email</td></tr>
	<tr><td>Phone Number</td><td>$phone</td></tr>
	<tr><td>Event/Occassion</td><td>$event</td></tr>
	<tr><td>Categories</td><td>$res</td></tr>
	</table>
	</body>
	</html>";

	
	// Always set content-type when sending HTML email
	$headers2 = "MIME-Version: 1.0" . "\r\n";
	$headers2 .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers2 .= "From: fabservice@fab8thproductions.com" . "\r\n";
	$v = trim($surname);
	$v2 = trim($firstname);
	$v3 = trim($phone);
	$v4 = trim($email);
	if(empty($v) || empty($v2) || empty($v3) || empty($v4))

	{
	
	}
	else
	{
		mail($to2,$subject2,$txt2,$headers2);
	}
	//echo "DONE";
	
?>


<html>
    <head>
	<title>Fab8th</title>
	<link rel="icon" type="image/png" href="logo_new.png"/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
	<meta property="fb:app_id"          content="159757874206900" /> 
	<meta property="og:type"            content="website" /> 
	<meta property="og:site_name"       content="Fab8th Productions" /> 
	<meta property="og:description"     content="Fab8th Productions is a production outfit which majors in a wide range of services ranging from modelling 	
											and ushering services to film production, artiste booking and event management. " /> 
	<meta property="og:url"             content="http://www.fab8thproductions.com/newfab8thdb/home.php" /> 
	<meta property="og:title"           content="Fab8th" /> 
	<meta property="og:image"           content="http://www.fab8thproductions.com/newfab8thdb/fab_logo.jpg" /> 
	
	
    <title>Carousel Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
	<link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="submitted2.css" rel="stylesheet">
	<link href="custom.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<meta http-equiv="refresh" content="5; url=home.php" />
    </head>
	
<body>
	<div style="background-color:#ED188A; height:10px; width:100%;"></div>
	
	<!-- HEADER
   ============================= -->
   <div class="row" style="margin-left:5%; margin-right:5%;">
   
   <div class="col-md-8" >
   <table ></tr>
		<td class="logo_frame"><img class="logo" src="logo_new.png"></td>
		<td>
		<table style="table-layout:fixed; float:left; margin:0px;" height="95px">
			<tr><td style="margin-top:1px; margin-bottom:1px; padding:0px;"><p class="fab">FAB8th PRODUCTIONS</p></td></tr>
			<tr><td style="margin-top:1px; margin-bottom:1px;"><p class="fab_sub">Dishing out passion & creativity</p></td></tr>
		</table>
		</td>
	</tr></table>
	</div>
	<div class="col-md-4">
	<table align="right" style="margin-top:10px;">
		<tr><td align="right">
		
		<table align="right">
		<tr>
		<td style="valign: middle; align:right;"><p style="font-family:calibri; font-weight:bold; font-size:18px margin-top:0px; margin-bottom:0px;">Connect To Us : </p></td>
		<td><a href="http://www.facebook.com/fab8thproductions"><img class="socialicons" width="30px" height="30px" src="facebook_icon.png"></a></td>		
		<td><a href="https://twitter.com/fab8thprod1"><img class="socialicons" width="30px" height="30px" src="twitter_icon.png"></a></td>
		<td><a href="http://instagram.com/fab8thprod1"><img class="socialicons" width="30px" height="30px" src="instagram_icon.png"></a></td>
		<td><a href="contactus.php"><img class="socialicons" width="30px" height="30px" src="bbm.png"></a></td>
		<td><a href="contactus.php"><img class="socialicons" width="30px" height="30px" src="mail.png"></a></td>
		</tr>
		</table>
		</td></tr>
		<tr><td align="right">
		
		</td></tr>
		
		</table>
		</div>
		
	</div>
   <!-- header -->
   
   <!-- NAVBAR
   ============= -->
	<div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container2">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!-- <a class="navbar-brand" href="#">FAB8th Productions</a> -->
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li>
				<a href="home.php"><span style="font-size:16px; font-family:arial;">Home</span><br><small>Welcome</small></a></li>
                <li>
				<a href="about.php"><span style="font-size:16px; font-family:arial;">About Us</span><br><small>Who we are</small></a></li>
                <li>
				<a href="gallery.php"><span style="font-size:16px; font-family:arial;">Gallery</span><br><small>Our Work</small></a></li>
                <li class="dropdown active">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="border-bottom:5px solid #ED188A;">
					<span style="font-size:16px; font-family:arial;">Our Services</span><span class="caret"></span><br>
					<small style="color:white;">What we offer</small>				  
				  </a>
                  <ul class="dropdown-menu" role="menu" style="background-color:#101010;">
                    <li><a href="ushering_services.php" style="color:#ED188A; font-size:16px; ">Ushering Services</a></li>
                    <li><a href="event_services.php" style="color:#ED188A; font-size:16px;">Event Management</a></li>
                    <li><a href="artiste_services.php" style="color:#ED188A; font-size:16px;">Artiste Booking</a></li>
					<li><a href="artiste2_services.php" style="color:#ED188A; font-size:16px;">Artiste Management</a></li>
					<li><a href="film_services.php" style="color:#ED188A; font-size:16px; background-color:#e6e6e6;">Film Production</a></li>
                    <!-- <li class="divider"></li> -->
                    <!-- <li class="dropdown-header">Nav header</li> -->
                    <!-- <li><a href="#">Separated link</a></li> -->
                    <!-- <li><a href="#">One more separated link</a></li> -->
                  </ul>
                </li>
				<li>
				<a href="articles.php"><span style="font-size:16px; font-family:arial;">Articles</span><br><small>Latest News</small></a></li>
				<li>
				<a href="team.php"><span style="font-size:16px; font-family:arial;">The Team</span><br><small>Meet Us</small></a></li>
				<li>
				<a href="contact.php"><span style="font-size:16px; font-family:arial;">Contact Us</span><br><small>Get in touch</small></a></li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>
	<!-- navbar --------->
	
		<br><br><br>
			<div align="center"><img src="submission_successful.jpg" style="border: 10px solid teal; border-radius:8px;  width:80%"></div>
			<!-- <div align="center"><font style="font-size:19px;">Site will reload automatically.</font></div> -->
			<br>
			<div class="alert alert-success" role="alert" align="center" style="width:80%; margin-left:10%; margin-right:10%;">
				<a href="#" style="font-size:18px;" class="alert-link">Site will reload automatically.</a>
			</div>
		<br><br><br>	
	
	<!--FOOTER-->      
 <footer class="container2" style="width:90%; margin-right:5%; margin-left:5%;">
 	<div class="row" style="margin-right:0px; margin-left:0px;">
 		<div class="col-md-12">
			<div style="background:#222222;">
            	<div class="row" style="margin-right:0px; margin-left:0px; padding:10px;">
            		<div  class="col-md-8">
                    	<small class="white-text">Fab8th Productions © Copyright 2015.All Rights Reserved.</small>
                	</div>
            		<div class="col-md-4 text-right">
						  
						<small class="white-text">Powered By: <a href="www.jempton.webs.com" class="jempton">Jempton</a></small>
                	</div>
                </div>
			</div>
		</div>
 	</div>
 </footer>
	
</body>
		
</html>