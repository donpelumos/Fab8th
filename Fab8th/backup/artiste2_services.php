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
	<link href="artiste2_services.css" rel="stylesheet">
	<link href="artiste2.css" rel="stylesheet">
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
					<li><a href="artiste2_services.php" style="color:#ED188A; font-size:16px;  background-color:#e6e6e6;">Artiste Management</a></li>
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
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>
	<!-- navbar --------->
	
	
	<div class="panel panel-default" style="width:90%; margin-left:5%; margin-right:5%; background-color:efefef;">
	
		<div class="panel-heading">
			<font style="color:#000; font-size:20px;">Artiste Management</font>
		</div>
		<div class="panel-body" style="background-color:#dddddd; padding:0px;" align="center">
			
			<br>
			<div align="center" style="margin-left:10%; margin-right:10%; width:80%;">
				<img src="aspiring.jpg"  class="service_image"/>
			</div>
			
			<p align="center" class="service_text" >
				Are you and upcoming artiste, get across to us for management services and let us guide you to stardom.
			</p>	
			
			
			
			
			<form method="post" action="submitted5.php" align="center" style="opacity:0.8; margin-left:5%; margin-right:5%; width:90%; border-radius:10px;
			padding-top:20px;" width="90%">
			<div style="width:100%;" align="center">
			
				<table cellpadding="10" style="background-color:#f5f5f5; border: 5px solid #ED188A; padding:0px; margin:0px;">
				
				<tr>
					<td>
						<font class="table_font">Title</font>
					</td>
					<td>
						<select size="1" name="title" height="1" style="vertical-align: top;">
							<option value="Mr">Mr.
							<option value="Mrs">Mrs.  <option value="Master">Master  <option value="Miss">Miss  <option value="Engr">Engr.
							<option value="Dr">Dr.  <option value="Barr">Barrister  <option value="Prof">Prof.   
						</select>	
					</td>
					
				</tr>
				
				<tr style="background-color:white;">
					<td>
						<font class="table_font">Surname</font>
					</td>
					<td >
						<input type="text" name="surname" placeholder="Surname" required>
					</td>				
				</tr>
				
				<tr >
					<td>
						<font class="table_font">Firstname</font>
					</td>
					<td>
						<input type="text" name="firstname" placeholder="Firstname" required>
					</td>	
									
				</tr>
				
				<tr style="background-color:white;">
					<td>
						<font class="table_font">E-Mail Address</font>
					</td>
					<td>
						<input type="text" name="email" placeholder="email@domain.com" required>
					</td>				
				</tr>
				
				<tr >
					<td>
						<font class="table_font">Phone No.</font>
					</td>
					<td>
						<input type="text" name="phone" placeholder="XXXXXXXXXXX" required>
					</td>		
					
				</tr>
				
				<tr>
					<td colspan="2" align="center"> <input class="button_mine" type="submit" value="Submit" /> </td>
				</tr>
				
				</table>
			</div>
			
			</form>
			
			
		</div>
	</div>	
	
		<br>
		
		
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