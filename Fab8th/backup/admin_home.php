<?php
	//session_save_path("/home/users/web/b1621/ipg.fab8thproductionscom/cgi-bin/tmp");
	session_start(); 
	
	if($_SESSION['auth'] == "yes")
	{		
	}
	else
	{
		$ent_password = $_POST['password'];	
		$host="localhost";
	$user="fabthpro_website";
	$password="Fabprod_12345";
	$dbname="fabthpro_fab8th";
		$cxn = mysql_connect($host,$user,$password)
		or die("Couldn’t connect to server.");
		mysql_select_db($dbname);		
			$query = "select pwd from password";		
		//echo $query;
		$result = mysql_query($query, $cxn)
		or die ("Could not execute query.");
	
		$row1 = array();	
			while ($row = mysql_fetch_array($result))
			{
				$row1[] = $row;
			}	
		//echo $row1[0][0];	//echo $ent_password . "<br>";//echo md5($ent_password);
		if(md5($ent_password) != $row1[0][0])
		{
			header("Location: admin_incorrect.php");
		}	
		$_SESSION['auth'] = "yes";
	}
?>
<html lang="en">
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
	<meta property="og:site_name"            content="Fab8th Productions" /> 
	<meta property="og:description"     content="Fab8th Productions is a production outfit which majors in a wide range of services ranging from modelling 	
											and ushering services to film production, artiste booking and event management. " /> 
	<meta property="og:url"             content="http://www.fab8thproductions.com/newfab8thdb/home.php" /> 
	<meta property="og:title"           content="Fab8th" /> 
	<meta property="og:image"           content="http://www.fab8thproductions.com/newfab8thdb/fab_logo.jpg" /> 
	
	
	
		
		
    <title>Carousel Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="admin_home.css" rel="stylesheet">
	<link href="custom.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="dist/js/bootstrap.min.js"></script>
	<script type="text/javascript">
    $(document).ready(function(){
        $("select.s1").change(function(){
            $( "select.s1 option:selected").each(function(){
                if($(this).attr("value")=="other1"){
                    $("input.othercol1").show();
                }
				else{
					$("input.othercol1").hide();
				}                
            });
        }).change();
    });
	
	$(document).ready(function(){
        $("select.s2").change(function(){
            $( "select.s2 option:selected").each(function(){
                if($(this).attr("value")=="other2"){
                    $("input.othercol2").show();
                }
				else{
					$("input.othercol2").hide();
				}                
            });
        }).change();
    });
	</script>
    
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
		<td><a href="http://www.facebook.com/fab8thprod1"><img class="socialicons" width="30px" height="30px" src="facebook_icon.png"></a></td>		
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
                <li >
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" >
					<span style="font-size:16px; font-family:arial;">Our Services</span><span class="caret"></span><br>
					<small >What we offer</small>				  
				  </a>
                  <ul class="dropdown-menu" role="menu" style="background-color:#101010;">
                    <li><a href="ushering_services.php" style="color:#ED188A; font-size:16px; ">Ushering Services</a></li>
                    <li><a href="event_services.php" style="color:#ED188A; font-size:16px;">Event Management</a></li>
                    <li><a href="artiste_services.php" style="color:#ED188A; font-size:16px;">Artiste Booking</a></li>
					<li><a href="artiste2_services.php" style="color:#ED188A; font-size:16px;">Artiste Management</a></li>
					<li><a href="film_services.php" style="color:#ED188A; font-size:16px;">Film Production</a></li>
                    <!-- <li class="divider"></li> -->
                    <!-- <li class="dropdown-header">Nav header</li> -->
                    <!-- <li><a href="#">Separated link</a></li> -->
                    <!-- <li><a href="#">One more separated link</a></li> -->
                  </ul>
                </li>
				<li>
				<a href="articles.php"><span style="font-size:16px; font-family:arial;">Articles</span><br><small>Useful Tips</small></a></li>
				<li>
				<a href="headlines.php"><span style="font-size:16px; font-family:arial;">Headlines</span><br><small>Latest News</small></a></li>
				<li>
				<a href="contact.php"><span style="font-size:16px; font-family:arial;">Contact Us</span><br><small>Get in touch</small></a></li>
				<li class="dropdown active">
				<a href="contact.php" style="border-bottom:5px solid #ED188A;"><span style="font-size:16px; font-family:arial;">Admin</span><br><small style="color:white;">Confidential</small></a></li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>
	<!-- navbar --------->
	
	
	<div class="panel panel-default" style="width:90%; margin-left:5%; margin-right:5%; background-color:efefef;">
	<table width="100%"><tr>
		<td width="60%" style="padding:0px"><div class="panel-heading"><font style="color:#000; font-size:26px; margin-left:20px;">Make Updates</font></div></td>
		<td align="right" style="padding:0px">
		<a href="logout.php" class="logout" style="margin:0px;">Sign Out</a> &nbsp;</td>
	</tr></table>	
		<div class="panel-body" style="background-color:white; padding:0px;">
			<div class="row" style="width:90%; margin-left:5%; margin-right:5%;">
			
				<div class="col-lg-6" style="margin-top:3%; margin-bottom:3%;">
					<table>
						<tr>
							<td><img src="ush3.jpg" class="thumbnail"/></td>
							<td valign="top"><font style="font-size:20px;" color="#5a5a5a">Update Ushering Gallery</font><br><br>
							<!-- <a class="btn btn-default" href="ushering_gallery.php" role="button" style="font-size:16px;">View Pictures</a></td> -->
							<a class="button_mine" href="update_ush_gallery.php" role="button" style="font-size:16px;">Update</a></td>
						</tr>
					</table>
				</div>
				
				<div class="col-lg-6" style="margin-top:3%; margin-bottom:3%;">
					<table>
						<tr>
							<td><img src="img4.jpg" class="thumbnail"/></td>
							<td valign="top"><font style="font-size:20px;" color="#5a5a5a">Update Events Gallery</font><br><br>
							<!-- <a class="btn btn-default" href="events_gallery.php" role="button" style="font-size:16px;">View Pictures</a></td> -->
							<a class="button_mine" href="update_event_gallery.php" role="button" style="font-size:16px;">Update</a></td>
						</tr>
					</table>
				</div>
				
				<div class="col-lg-6" style="margin-top:3%; margin-bottom:3%;">
					<table>
						<tr>
							<td><img src="img9.jpg" class="thumbnail"/></td>
							<td valign="top"><font style="font-size:20px;" color="#5a5a5a">Update Artiste Performance Gallery</font><br><br>
							<!-- a class="btn btn-default" href="artiste_gallery.php" role="button" style="font-size:16px;">View Pictures</a></td> -->
							<a class="button_mine" href="update_artiste_gallery.php" role="button" style="font-size:16px;">Update</a></td>
						</tr>
					</table>
				</div>
				
				<div class="col-lg-6" style="margin-top:3%; margin-bottom:3%;">
					<table>
						<tr>
							<td><img src="img7.jpg" class="thumbnail"/></td>
							<td valign="top"><font style="font-size:20px;" color="#5a5a5a">Update Film Production Gallery</font><br><br>
							<!-- <a class="btn btn-default" href="film_gallery.php" role="button" style="font-size:16px;">View Pictures</a></td> -->
							<a class="button_mine" href="update_film_gallery.php" role="button" style="font-size:16px;">Update</a></td>
						</tr>
					</table>
				</div>
				
				<div class="col-lg-6" style="margin-top:3%; margin-bottom:3%;">
					<table>
						<tr>
							<td><img src="articles.png" class="thumbnail"/></td>
							<td valign="top"><font style="font-size:20px;" color="#5a5a5a">Update Articles</font><br><br>
							<!-- a class="btn btn-default" href="artiste_gallery.php" role="button" style="font-size:16px;">View Pictures</a></td> -->
							<a class="button_mine" href="update_articles.php" role="button" style="font-size:16px;">Update</a></td>
						</tr>
					</table>
				</div>
				
				<div class="col-lg-6" style="margin-top:3%; margin-bottom:3%;">
					<table>
						<tr>
							<td><img src="headlines.jpg" class="thumbnail"/></td>
							<td valign="top"><font style="font-size:20px;" color="#5a5a5a">Update Headlines</font><br><br>
							<!-- <a class="btn btn-default" href="film_gallery.php" role="button" style="font-size:16px;">View Pictures</a></td> -->
							<a class="button_mine" href="update_headlines.php" role="button" style="font-size:16px;">Update</a></td>
						</tr>
					</table>
				</div>
				
				<div class="col-lg-6" style="margin-top:3%; margin-bottom:3%;">
					<table>
						<tr>
							<td><img src="music icon.png" class="thumbnail"/></td>
							<td valign="top"><font style="font-size:20px;" color="#5a5a5a">Upload Music</font><br><br>
							<!-- <a class="btn btn-default" href="upload_music.php" role="button" style="font-size:16px;">View Pictures</a></td> -->
							<a class="button_mine" href="upload_music.php" role="button" style="font-size:16px;">Upload</a></td>
						</tr>
					</table>
				</div>
				
				<div class="col-lg-6" style="margin-top:3%; margin-bottom:3%;">
					<table>
						<tr>
							<td><img src="camera_2.png" class="thumbnail"/></td>
							<td valign="top"><font style="font-size:20px;" color="#5a5a5a">Upload Pictures</font><br><br>
							<!-- <a class="btn btn-default" href="upload_music.php" role="button" style="font-size:16px;">View Pictures</a></td> -->
							<a class="button_mine" href="upload_picture.php" role="button" style="font-size:16px;">Upload</a></td>
						</tr>
					</table>
				</div>
			</div>	
		</div>
	</div>	
	
	
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
	
	
		<script src="index4_files/vlb_engine/vlbdata1.js" type="text/javascript"></script>
	</body>

</html>	