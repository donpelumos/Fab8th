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
	<link href="headlines.css" rel="stylesheet">
	<link href="custom.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="dist/js/bootstrap.min.js"></script>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-64403674-1', 'auto');
  ga('send', 'pageview');

</script>
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
		
		},5000); 	
		
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
                  </ul>
                </li>
				<li >
				<a href="articles.php" >
				<span style="font-size:16px; font-family:arial;">Articles</span><br><small>Useful Tips</small></a></li>
				<li class="dropdown active" style="border-bottom:5px solid #ED188A;">
				<a href="headlines.php"><span class="dropdown active" style="font-size:16px; font-family:arial;">Headlines</span><br><small  style="color:white;">Latest News</small></a></li>
				<li>
				<a href="contact.php"><span style="font-size:16px; font-family:arial;">Contact Us</span><br><small>Get in touch</small></a></li>
				
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>
	<!-- navbar --------->
	
	<div class="panel panel-default" style="width:90%; margin-left:5%; margin-right:5%; background-color:efefef;">
		<div class="panel-heading">
			<a href="headlines.php" class="gallery">Headlines</a>
				
		</div>
		
		<div class="panel-body" style="background-color:#dddddd; padding-left:2%; padding-right:2%; "  align="center">
			<!--Sample Articles--> <br>
			<div>
				<table>
				<tr>
					<td style="margin:0px;"><a href="http://www.fab8thproductions.com/headlines.php" class="button_mine">All </a></td>
					<td style="margin:0px;"><a href="http://www.fab8thproductions.com/headlines_ent.php" class="button_mine_ent">Entertainment</a></td>
					<td style="margin:0px;"><a href="http://www.fab8thproductions.com/headlines_soc.php" class="button_mine_soc">Soccer</a></td>
					<td style="margin:0px;"><a href="http://www.fab8thproductions.com/headlines_pol.php" class="button_mine_pol">Politics</a></td>
					<td style="margin:0px;"><a href="http://www.fab8thproductions.com/headlines_oth.php" class="button_mine_oth">Other</a></td>
				</tr>
				<tr>
					<td style="height:10px; margin-top:20px;"><hr class="featurette-divider" style="background-color:#ED188A; margin-top:5px; height:4px;"></td>
					<td style="height:10px; margin-top:20px; "></td>
					<td style="height:10px; margin-top:20px; "></td>
					<td style="height:10px; margin-top:20px; "></td>
					<td style="height:10px; margin-top:20px; "></td>
				</tr>
				</table>
			</div>
			<br>
			<!--
			<div class="col-lg-3 col-md-4 col-sm-5 col-xs-11" style="margin:10px; background-color:#efefef; border-radius:10px;margin-right:30px; margin-left:50px;">
				<div style="background-color:#d6d6d6; width:90%; margin-left:5%; margin-right:5%; margin-top:10px;">
					<font style="width:100%;color:#ED188A; font-size:28px;">Article #</font>
				</div>
				
                <div style="width:90%; margin-left:5%; margin-right:5%;margin-top:8px;">
					<img src="articles.png" width="100%" height="170"/>
					<font style="font-size:17px; color:#ED188A;">THIS IS THE ARTICLE TOPIC OR HEADING</font><br>
					This is the insight into the current article, whereby users read and know whether to continue reading the article by clicking the
					read more button or moving on to another article.
					<br><br>
					<a href="articleid.php?topic=THIS IS THE ARTICLE TOPIC OR HEADING&image=articles.png" class="button_mine">Read More</a>
					<br><br>
				</div>
			</div>
			-->
<?php
	$host="localhost";
	$user="fabthpro_website";
	$password="Fabprod_12345";
	$dbname="fabthpro_fab8th";
	$cxn = mysql_connect($host,$user,$password)
	or die("Couldn’t connect to server.");
	mysql_select_db($dbname);
		
		$query = "select image_name from headlines order by id desc";
		$query2 = "select id from headlines order by id desc";
		$query3 = "select heading from headlines order by id desc";
		$query4 = "select body from headlines order by id desc";
		$query5 = "select category from headlines order by id desc";
		$query6 = "select date from headlines order by id desc";
		$query7 = "select time from headlines order by id desc";
		$query8 = "select views from headlines order by id desc";
	
	//echo $query;
	$result = mysql_query($query, $cxn)
	or die ("Could not execute query.");
	$result2 = mysql_query($query2, $cxn)
	or die ("Could not execute query.");
	$result3 = mysql_query($query3, $cxn)
	or die ("Could not execute query.");
	$result4 = mysql_query($query4, $cxn)
	or die ("Could not execute query.");
	$result5 = mysql_query($query5, $cxn)
	or die ("Could not execute query.");
	$result6 = mysql_query($query6, $cxn)
	or die ("Could not execute query.");
	$result7 = mysql_query($query7, $cxn)
	or die ("Could not execute query.");
	$result8 = mysql_query($query8, $cxn)
	or die ("Could not execute query.");
	$i = 1;
	$row1 = array();
	$row2 = array();
	$row3 = array();
	$row4 = array();
	$row5 = array(); $row6 = array(); $row7 = array(); $row8 = array();
		while ($row = mysql_fetch_array($result))
		{
			$row1[] = $row;
		}		
		while ($roww = mysql_fetch_array($result2))
		{
			$row2[] = $roww;
		}
		while ($rowww = mysql_fetch_array($result3))
		{
			$row3[] = $rowww;
		}
		while ($rowwww = mysql_fetch_array($result4))
		{
			$row4[] = $rowwww;
		}
		while ($rowwwww = mysql_fetch_array($result5))
		{
			$row5[] = $rowwwww;
		}
		while ($rowwwwww = mysql_fetch_array($result6))
		{
			$row6[] = $rowwwwww;
		}
		while ($rowwwwwww = mysql_fetch_array($result7))
		{
			$row7[] = $rowwwwwww;
		}
		while ($rowwwwwwww = mysql_fetch_array($result8))
		{
			$row8[] = $rowwwwwwww;
		}
			for($x = 0; $x < sizeof($row3); $x++)
			{
				if($row5[$x][0] == "soccer")
				{
					echo 
					"
				
					<div class=\"col-lg-4 col-md-6 col-sm-6 col-xs-12\" style=\" background-color:white; margin-top:10px; margin-bottom:10px; border-radius:10px; max-height:520px;\">
						<div style=\"background-color:orange; width:90%; margin-top:10px;\">
							<font style=\"width:100%;color:white; font-size:28px;\">Soccer</font>
						</div>
				
						<div style=\"width:90%; margin-top:8px;\" >
						<img src=\"headlines/". $row1[$x][0]."\" width=\"100%\" height=\"170\"/>
					
					
						<h4 style=\"font-size:17px; color:orange; min-height:58px; margin:5px;\">". $row3[$x][0]."</h4>".
						"<div align=\"justify\" style=\"max-height:80px; margin-bottom:25px;\">".
						(strlen($row4[$x][0]) < 150 ?
						
						trim(substr($row4[$x][0],0,150)) . ". . . . . ." . str_repeat("&nbsp;",150-strlen($row4[$x][0]))					
						:
						trim(substr($row4[$x][0],0,150)) . ". . . . . ." 
						)
						."<br><br>
							
						</div>
							<a href=\"headlineid.php?id=".$row2[$x][0]."&image=".$row1[$x][0]."&topic=".$row3[$x][0]."\" class=\"button_mine\">Read More</a>
							<br><br>
							<hr class=\"featurette-divider\" style=\"background-color:orange; margin:0px; height:2px;\">
								<p style=\"float:left; margin-top:3px; margin-bottom:3px;\" >Posted : ".$row6[$x][0]."</p>
								<p style=\"float:right; margin-top:3px; margin-bottom:3px; \">Time : ".$row7[$x][0]."</p>					
							<hr class=\"featurette-divider\" style=\"background-color:orange; margin:0px; height:2px; clear:both;\">
					<div style=\"float:right; margin-top:4px;\">
						<table><tr>
						<td><img src=\"eye.png\" width=\"27px\" height=\"17px\"/></td>
						<td><font style=\"font-size:14px;\">".$row8[$x][0]." views</font></td>
						</tr></table>
					</div>	
				<br style=\"clear:both;\"><br>			
						</div>
						
					</div>
					
					";
				}
				else if($row5[$x][0] == "entertainment")
				{
					echo 
					"
				
					<div class=\"col-lg-4 col-md-6 col-sm-6 col-xs-12\" style=\" background-color:white; margin-top:10px; margin-bottom:10px; border-radius:10px; max-height:520px;\">
						<div style=\"background-color:green; width:90%; margin-top:10px;\">
							<font style=\"width:100%;color:white; font-size:28px;\">Entertainment</font>
						</div>
				
						<div style=\"width:90%; margin-top:8px;\" >
						<img src=\"headlines/". $row1[$x][0]."\" width=\"100%\" height=\"170\"/>
					
					
						<h4 style=\"font-size:17px; color:green; min-height:58px; margin:5px;\">". $row3[$x][0]."</h4>".
						"<div align=\"justify\" style=\"max-height:80px; margin-bottom:25px;\">".
							(strlen($row4[$x][0]) < 150 ?
				
							trim(substr($row4[$x][0],0,150)) . ". . . . . ." . str_repeat("&nbsp;",150-strlen($row4[$x][0]))					
							:
							trim(substr($row4[$x][0],0,150)) . ". . . . . ." 
							)
						."<br><br>
							
						</div>
							<a href=\"headlineid.php?id=".$row2[$x][0]."&image=".$row1[$x][0]."&topic=".$row3[$x][0]."\" class=\"button_mine\">Read More</a>
							<br><br>
							<hr class=\"featurette-divider\" style=\"background-color:green; margin:0px; height:2px;\">
								<p style=\"float:left; margin-top:3px; margin-bottom:3px;\" >Posted : ".$row6[$x][0]."</p>
								<p style=\"float:right; margin-top:3px; margin-bottom:3px; \">Time : ".$row7[$x][0]."</p>					
							<hr class=\"featurette-divider\" style=\"background-color:green; margin:0px; height:2px; clear:both;\">
							
					<div style=\"float:right; margin-top:4px;\">
						<table><tr>
						<td><img src=\"eye.png\" width=\"27px\" height=\"17px\"/></td>
						<td><font style=\"font-size:14px;\">".$row8[$x][0]." views</font></td>
						</tr></table>
					</div>	
				<br style=\"clear:both;\"><br>			
						</div>
						
					</div>
					
					";
				}
				else if($row5[$x][0] == "politics")
				{
					echo 
					"
				
					<div class=\"col-lg-4 col-md-6 col-sm-6 col-xs-12\" style=\"background-color:white; margin-top:10px; margin-bottom:10px; border-radius:10px; max-height:520px;\">
						<div style=\"background-color:#83BFDB; width:90%; margin-top:10px;\">
							<font style=\"width:100%;color:white; font-size:28px;\">Politics</font>
						</div>
				
						<div style=\"width:90%; margin-top:8px;\" >
						<img src=\"headlines/". $row1[$x][0]."\" width=\"100%\" height=\"170\"/>
					
					
						<h4 style=\"font-size:17px; color:#83BFDB; min-height:58px; margin:5px;\">". $row3[$x][0]."</h4>".
						"<div align=\"justify\" style=\"max-height:80px; margin-bottom:25px;\">".
							(strlen($row4[$x][0]) < 150 ?
				
							trim(substr($row4[$x][0],0,150)) . ". . . . . ." . str_repeat("&nbsp;",150-strlen($row4[$x][0]))					
							:
							trim(substr($row4[$x][0],0,150)) . ". . . . . ." 
							)
						."<br><br>
							
						</div>
							<a href=\"headlineid.php?id=".$row2[$x][0]."&image=".$row1[$x][0]."&topic=".$row3[$x][0]."\" class=\"button_mine\">Read More</a>
							<br><br>
							<hr class=\"featurette-divider\" style=\"background-color:#83BFDB; margin:0px; height:2px;\">
								<p style=\"float:left; margin-top:3px; margin-bottom:3px;\" >Posted : ".$row6[$x][0]."</p>
								<p style=\"float:right; margin-top:3px; margin-bottom:3px; \">Time : ".$row7[$x][0]."</p>					
							<hr class=\"featurette-divider\" style=\"background-color:#83BFDB; margin:0px; height:2px; clear:both;\">
						
					<div style=\"float:right; margin-top:4px;\">
						<table><tr>
						<td><img src=\"eye.png\" width=\"27px\" height=\"17px\"/></td>
						<td><font style=\"font-size:14px;\">".$row8[$x][0]." views</font></td>
						</tr></table>
					</div>	
				<br style=\"clear:both;\"><br>		
						</div>
						
					</div>
					
					";
				}
				else
				{
					echo 
					"
				
					<div class=\"col-lg-4 col-md-6 col-sm-6 col-xs-12\" style=\"background-color:white; margin-top:10px; margin-bottom:10px; border-radius:10px; max-height:520px;\">
						<div style=\"background-color:#E338CE; width:90%; margin-top:10px;\">
							<font style=\"width:100%;color:white; font-size:28px;\">Other</font>
						</div>
				
						<div style=\"width:90%; margin-top:8px;\" >
						<img src=\"headlines/". $row1[$x][0]."\" width=\"100%\" height=\"170\"/>
					
					
						<h4 style=\"font-size:17px; color:#E338CE; min-height:58px; margin:5px;\">". $row3[$x][0]."</h4>".
						"<div align=\"justify\" style=\"max-height:80px; margin-bottom:25px;\">".
						(strlen($row4[$x][0]) < 150 ?
				
						trim(substr($row4[$x][0],0,150)) . ". . . . . ." . str_repeat("&nbsp;",150-strlen($row4[$x][0]))					
						:
						trim(substr($row4[$x][0],0,150)) . ". . . . . ." 
						)
						."<br><br>
						
						</div>
							<a href=\"headlineid.php?id=".$row2[$x][0]."&image=".$row1[$x][0]."&topic=".$row3[$x][0]."\" class=\"button_mine\">Read More</a>
							<br><br>
							<hr class=\"featurette-divider\" style=\"background-color:#E338CE; margin:0px; height:2px;\">
								<p style=\"float:left; margin-top:3px; margin-bottom:3px;\" >Posted : ".$row6[$x][0]."</p>
								<p style=\"float:right; margin-top:3px; margin-bottom:3px; \">Time : ".$row7[$x][0]."</p>					
							<hr class=\"featurette-divider\" style=\"background-color:#E338CE; margin:0px; height:2px; clear:both;\">
							
					<div style=\"float:right; margin-top:4px;\">
						<table><tr>
						<td><img src=\"eye.png\" width=\"27px\" height=\"17px\"/></td>
						<td><font style=\"font-size:14px;\">".$row8[$x][0]." views</font></td>
						</tr></table>
					</div>	
				<br style=\"clear:both;\"><br>			
						</div>
						
					</div>
					
					";
				}
			}		
?>						
			
			
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