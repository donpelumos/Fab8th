<html lang="en">
  <head>
    
	<link rel="icon" type="image/png" href="logo_new.png"/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Jempton">
				<?php 
					$_SERVER['REQUEST_URI'] = 'red';
					$url = $_SERVER['REQUEST_URI'];
					$new_url = "http://www.fab8thproductions.com".$url;
					$url_img = "http://www.fab8thproductions.com/articles/";
					
					//echo $new_url;
					
					$host="fab8thproductionscom.ipagemysql.com";
					$user="website";
					$password="Fabprod_12345";
					$dbname = "fab8th";
					$cxn = mysql_connect($host,$user,$password)
					or die("Couldn’t connect to server.");
					mysql_select_db($dbname);
					$id = $_GET['id'];
						$query = "select image_name from articles where id='$id'";
						$query2 = "select heading from articles where id='$id'";
						$query3 = "select body from articles where id='$id'";
		
						//echo $query;
						$result = mysql_query($query, $cxn)
						or die ("Could not execute query.");
						$result2 = mysql_query($query2, $cxn)
						or die ("Could not execute query.");
						$result3 = mysql_query($query3, $cxn)
						or die ("Could not execute query.");
					$row1 = array(); $row2 = array(); $row3 = array();
	
					while ($row = mysql_fetch_array($result))
					{
						$row1 = $row;
					}
					while ($roww = mysql_fetch_array($result2))
					{
						$row2 = $roww;
					}
					while ($rowww = mysql_fetch_array($result3))
					{
						$row3 = $rowww;
					}
					$url_img = $url_img . $row1[0];
					
					echo 
					"
					<title>".$row2[0]."</title>
	<meta property=\"fb:app_id\"          content=\"159757874206900\" /> 
	<meta property=\"og:type\"            content=\"website\" /> 
	<meta property=\"og:site_name\"            content=\"Fab8th Productions\" /> 
	<meta property=\"og:url\"             content=\"". $new_url ."\" /> 
	<meta property=\"og:title\"           content=\"". $row2[0] . "\" /> 
	<meta property=\"og:image\"           content=\"" . $url_img . "\" /> 		
	<meta property=\"og:description\"     content=\"" .substr($row3[0],0,300) . "\" /> 
			
					";
		?>
	
	
	
			
    <title>Carousel Template for Bootstrap</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 
    <script src="http://malsup.github.com/jquery.form.js"></script> 
	 
    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="headlineid.css" rel="stylesheet">
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
   
   <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=389246104587427&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
   
   
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
				<li class="dropdown active">
				<a href="articles.php" class="dropdown active" style="border-bottom:5px solid #ED188A;">
				<span style="font-size:16px; font-family:arial;">Articles</span><br><small style="color:white;">Useful Tips</small></a></li>
				<li>
				<a href="headlines.php"><span style="font-size:16px; font-family:arial;">Headlines</span><br><small>Latest News</small></a></li>
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
			<a href="articles.php" class="gallery">Articles &raquo;</a>
			
			
		</div>
		
		<div class="panel-body" style="background-color:#dddddd;" align="center"> 
				
			<div class="col-md-8" align="justify">
			<div align="center">
			<?php 
					$host="fab8thproductionscom.ipagemysql.com";
					$user="website";
					$password="Fabprod_12345";
					$dbname = "fab8th";
					$cxn = mysql_connect($host,$user,$password)
					or die("Couldn’t connect to server.");
					mysql_select_db($dbname);
					$id = $_GET['id'];
						$query2 = "select heading from articles where id='$id'";
						
						//echo $query;
						$result2 = mysql_query($query2, $cxn)
						or die ("Could not execute query.");
					$row2 = array();
	
					while ($roww = mysql_fetch_array($result2))
					{
						$row2 = $roww;
					}
				echo "	
				<font class=\"art_topic\">".$row2[0]."</font><br><br> 
				";
			?>		
			<?php 
					$host="fab8thproductionscom.ipagemysql.com";
					$user="website";
					$password="Fabprod_12345";
					$dbname = "fab8th";
					$cxn = mysql_connect($host,$user,$password)
					or die("Couldn’t connect to server.");
					mysql_select_db($dbname);
					$id = $_GET['id'];
						$query2 = "select image_name from articles where id='$id'";
						
						//echo $query;
						$result2 = mysql_query($query2, $cxn)
						or die ("Could not execute query.");
					$row2 = array();
	
					while ($roww = mysql_fetch_array($result2))
					{
						$row2 = $roww;
					}
				echo "	
				<img src=\"articles/".$row2[0]."\" width =\"90%\" class=\"art_image\" style= \"border: 4px solid #ED188A; border-radius:15px;\"/><br>
				";
			    ?>	
			</div>		
			<div style="width:90%; margin-left:5%;">
				<br>
				<font class="art_body"> 
				<?php 
					$host="fab8thproductionscom.ipagemysql.com";
	$user="website";
	$password="Fabprod_12345";
	$dbname = "fab8th";
					$cxn = mysql_connect($host,$user,$password)
					or die("Couldn’t connect to server.");
					mysql_select_db($dbname);
					$id = $_GET['id'];
						$query = "select body from articles where id='$id'";
						$query2 = "select heading from articles where id='$id'";
						$query7 = "select views from articles where id='$id'";
		
						//echo $query;
						$result = mysql_query($query, $cxn)
						or die ("Could not execute query.");
						$result2 = mysql_query($query2, $cxn)
						or die ("Could not execute query.");
						$result7 = mysql_query($query7, $cxn)
						or die ("Could not execute query.");
					$row1 = array(); $row2 = array(); $row7 = array();
	
					while ($row = mysql_fetch_array($result))
					{
						$row1 = $row;
					}
					while ($roww = mysql_fetch_array($result2))
					{
						$row2 = $roww;
					}
					while ($rowww = mysql_fetch_array($result7))
					{
						$row7 = $rowww;
					}
						$new_views = $row7[0] + 1;
						$update = "update articles set views = '$new_views' where id='$id'";
						$upd_result = mysql_query($update, $cxn)
						or die ("Could not execute query.");
		
					echo "<font class=\"body_text\">" . $row1[0] . "</font>"; ?>
				</font>	
				<hr>
				<p style="font-family:Titillium Web; line-height:1.5; color:#4E4F52; font-size:14px;">
					To subscribe to more articles like this, like our page and share amongst your friends on social media
				</p>

				<?php 
					$url = $_SERVER['REQUEST_URI'];
					$new_url = "http://www.fab8thproductions.com".$url;
					echo "
				<table><tr>
					<td style=\"margin:0px; padding:0px\">	
					<div class=\"fb-share-button\" data-href=\"".$new_url."\" 
					data-layout=\"button_count\"></div><br>
					</td>
					<td>&nbsp;</td>
					<td style=\"margin:0px; padding:0px\">
					<a class=\"twitter-share-button\" href=\"".$new_url."\" style=\"float:left;\"
					data-size=\"default\">Tweet</a>
					</td>
					<td>&nbsp;</td>
					<td>
					<img src=\"eye.png\" width=\"27px\" height=\"17px\"/>&nbsp;<font style=\"font-size:15px;\"> ".$row7[0]." views</font>
					</td>
				</tr></table>
				
					<br style=\"clear:both;\">
					<div class=\"fb-like\" data-href=\"".$new_url."\"  data-share=\"false\"
					data-layout=\"standard\" data-action=\"like\" data-show-faces=\"true\" data-share=\"true\"></div>
					
					<div  class=\"fb-comments\" data-href=\"". $new_url. "\" data-numposts=\"10\" data-colorscheme=\"light\" data-version=\"v2.3\"></div>
					";
					//echo $new_url;
				?>
			</div>	
				
			</div>
			<div class="col-md-4" style="background-color:#f9f9f9;">
					<br>
					<font style="color:#ED188A; font-size:22px;"> 
						Join Our Community
					</font>
					<hr>
					<div class="fb-page" data-href="https://www.facebook.com/fab8thproductions" style="border: 3px #ED188A solid; border-radius:5px;" 
					data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true">
					<div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/fab8thproductions">
					<a href="https://www.facebook.com/fab8thproductions">Fab8th Productions</a></blockquote></div></div>
					
					<!--<div class="fb-like-box" data-href="https://www.facebook.com/fab8thproductions" height="500px" style="border: 3px #ED188A solid; border-radius:5px;"
					data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>-->
					
					
					<hr>
										
					<a class="twitter-follow-button"
					href="https://twitter.com/fab8thprod1"
				
					data-size="large"
					data-show-count="true"
					data-lang="en">
					Follow @twitterapi
					</a>
		<script>window.twttr=(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],
		t=window.twttr||{};if(d.getElementById(id))return;js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";
		fjs.parentNode.insertBefore(js,fjs);t._e=[];t.ready=function(f){t._e.push(f);};return t;}(document,"script","twitter-wjs"));</script>
		
				<hr>
					<a href ="http://www.konga.com" target="_blank">
						<img src= "konga.jpg" width="80%" height="400px"/>
					</a>
				
				<br><br>
			</div>
		</div>
		
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