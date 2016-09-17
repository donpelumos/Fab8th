<?php
	//session_save_path("/home/users/web/b1621/ipg.fab8thproductionscom/cgi-bin/tmp");
	session_start(); 
	
	$_SESSION['auth'] = "no";
?>
<html>
	<head>
		<title>Admin</title>
		<link rel="icon" type="image/png" href="logo_new.png"/>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="admin.css" rel="stylesheet">
	</head>
	<body style="background-color:#e6e6e6; width:100%; height:100%; margin:0px; padding:0px;"  >
		<table  style="width:100%; height:100%; margin:0px; padding:0px;">
		<tr><td valign="middle" align="center">
			<div class="div_width" align="center" style="border: 5px solid #ED188A; border-radius:5px; background-color:whitesmoke;">
				<br>
				<form action="admin_home.php" method="post">
					<font class="heading1">FAB8TH PRODUCTIONS</font> <br>
					<font style="font-family:inherit; font-size:28px;">Admin Page</font> <br><br>
					<input type="password" name="password" id="password" placeholder="Password" required> <br>
					<input type="submit" value="Login" class="button_mine">
				</form>
								
				<br>
			</div>
		</td></tr>
		</table>
	</body>
</html>