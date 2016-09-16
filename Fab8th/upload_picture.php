<?php
	//session_save_path("/home/users/web/b1621/ipg.fab8thproductionscom/cgi-bin/tmp");
	session_start(); 
	if($_SESSION['auth'] != "yes")
	{
		header("Location: admin_incorrect.php");
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
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 
    <script src="http://malsup.github.com/jquery.form.js"></script> 
	 
    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="upload_picture.css" rel="stylesheet">
	<link href="custom.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="dist/js/bootstrap.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function() { 
			$('#myForm').ajaxForm(function() { 
			alert('form was submitted');
			}); 
		}); 
	
	
	function myFunction() {
		//alert("HELLO");
		$("div.progress").show();
		$("div.deff").hide();
		
		setTimeout(function(){
			$("div.progress").hide();
			$("div.deff").show();
		
		},10000); 	
		
		setTimeout(function(){
			$("div.deff").hide();
		
		},2000); 	
	}
	
	$(window).load(function(){
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
				$('#blah').attr('width', 300);
				$('#blah').attr('height', 150);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#imgInp").change(function(){
        readURL(this);
    });
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
				<a href="#" style="border-bottom:5px solid #ED188A;"><span style="font-size:16px; font-family:arial;">Admin</span><br><small style="color:white;">Confidential</small></a></li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>
	<!-- navbar --------->
	
	<div class="panel panel-default" style="width:90%; margin-left:5%; margin-right:5%; background-color:efefef;">
		<div class="panel-heading">
			
			<table width="100%"><tr>
				<td width="60%">
					<a href="admin_home.php" class="gallery">Control Panel &raquo;</a>
					<font style="color:#000; font-size:17px;">Upload Picture</font>
				</td>
				<td align="right" style="padding:0px">
				<a href="admin.php" class="logout" style="margin:0px;">Sign Out</a> &nbsp;</td>
			</tr></table>	
		</div>
		
		<div class="panel-body" style="background-color:white; padding:0px;" align="center">
			<p style="font-family:inherit; font-size:24px; color:#ED188A;">UPLOAD PICTURE</p>
			
			<form id="myForm" method="post" action="picture_submitted.php" ENCTYPE="multipart/form-data">
				
				<INPUT NAME="file_up" TYPE="file" onchange="myFunction()" id="imgInp" required style="border:2px solid #ED188A;">
				<img id="blah" src="photos.png" alt="your image" width="200" height="200"/> <br>
				<div class="deff" style="display: none;">
					<font style="font-size16px;">DONE UPLOADING<font>
				</div>
				<div class="progress" style="width:300px; display:none;">
					<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
						<span class="sr-only">45% Complete</span>
					</div>
				</div>
				
				
				<!-- <font style="font-family:inherit; font-size:19px; color:#ED188A;">Image Description</font>
				<textarea name="message" rows="3" cols="10" wrap="hard" ></textarea> <br> -->
			
				<INPUT TYPE="submit" VALUE="ADD" class="button_mine">
			</form>
			
			<hr style="width:100%; color:#ED188A; border-top: 1px solid #ED188A;">
			<a class="button_mine" style="margin-bottom:20px;" href="all_pictures.php" target="_BLANK">View All Pictures</a>
			<H2>EXISTING PICTURES  </H2>
			
			<div align="center">
				<table frame="border" rules="all" style="border: 5px solid #ED188A; " >
				<!--
					<tr>
						<td> <img src="film_gallery/logos.png" class="thumbs"/> </td>
						<td>
							<font class="img_desc">IMAGE NAME</font> <br>
							<font class="img_alt">IMAGE ALT</font>
						</td>
						<td> <a href=""><img src="cancel.png" class="cancel_thumb" alt="1"/></a> <br> <font style="color:red; font-size:14px;">DELETE</font> </td>
					</tr>
				-->	
<?php
	$host="localhost";
	$user="fabthpro_website";
	$password="Fabprod_12345";
	$dbname="fabthpro_fab8th";
	$cxn = mysql_connect($host,$user,$password)
	or die("Couldn’t connect to server.");
	mysql_select_db($dbname);
		
		$query = "select image_name from picture order by id desc limit 10";
		$query2 = "select id from picture order by id desc limit 10";
		$query3 = "select alt from picture order by id desc limit 10";
		$query4 = "select date from picture order by id desc limit 10";
		$query5 = "select time from picture order by id desc limit 10";
		
	
	//echo $query;
	$result = mysql_query($query, $cxn)
	or die ("Could not execute query.");
	$result2 = mysql_query($query2, $cxn)
	or die ("Could not execute query.");
	$result4 = mysql_query($query4, $cxn)
	or die ("Could not execute query.");
	$result5 = mysql_query($query5, $cxn)
	or die ("Could not execute query.");
	
	$i = 1;
	$row1 = array();
	$row2 = array();
	$row4 = array();
	$row5 = array();
		while ($row = mysql_fetch_array($result))
		{
			$row1[] = $row;
		}
		while ($roww = mysql_fetch_array($result2))
		{
			$row2[] = $roww;
		}
		while ($rowwww = mysql_fetch_array($result4))
		{
			$row4[] = $rowwww;
		}
		while ($rowwwww = mysql_fetch_array($result5))
		{
			$row5[] = $rowwwww;
		}
		
			for($x = 0; $x < sizeof($row2); $x++)
			{
				
				echo 
					"<tr>
						<td> <img src=\"pictures/".$row1[$x][0] ." \" class=\"thumbs\"/> </td>
						
						<td> 
							<font style=\"color:#ED188A; font-size:18px;\">".$row1[$x][0]."</font> 
						</td>
						<td> 
							<font style=\"color:#ED188A; font-size:18px;\">".$row4[$x][0]."</font> 
						</td>
						<td> 
							<font style=\"color:#ED188A; font-size:18px;\">".$row5[$x][0]."</font> 
						</td>
						<td> <a href=\"picture_deleted.php?id=".$row2[$x][0]. "\"><img src=\"cancel.png\" class=\"cancel_thumb\" alt=\"".$row2[$x][0] ."\"/></a> <br> 
							 <font style=\"color:red; font-size:14px;\">DELETE</font> 
						</td>
						
					</tr>
					
					";
			}		
?>									
				
					

				</table>
			
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
                    	<small class="white-text">Fab8th Productions &copy; Copyright 2015.All Rights Reserved.</small>
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