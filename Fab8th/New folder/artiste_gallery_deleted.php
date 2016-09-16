<?php
session_save_path("/home/users/web/b1621/ipg.fab8thproductionscom/cgi-bin/tmp");
	session_start(); 
	if($_SESSION['auth'] != "yes")
	{
		header("Location: admin_incorrect.php");
	}
	
?>
 
 <?php
	$id = $_GET['id'];
	
	$host="fab8thproductionscom.ipagemysql.com";
	$user="website";
	$password="Fabprod_12345";
	$dbname = "fab8th";
	$cxn = mysql_connect($host,$user,$password)
	or die("Couldn’t connect to server.");
	mysql_select_db($dbname);
		
		$query = "delete from artiste_gallery where id = '$id'";
	
	//echo $query;
	echo $id;
	$result = mysql_query($query, $cxn)
	or die ("Could not execute query.");
	echo "DONE DELETING FROM DATABASE";
	
	
	
?>

<html>
    <head>
	<title>Fab8th</title>
	
	<meta http-equiv="refresh" content="2; url=update_artiste_gallery.php" />
    </head>
</html>