<?php
session_save_path("/home/users/web/b1621/ipg.fab8thproductionscom/cgi-bin/tmp");
	session_start(); 
	if($_SESSION['auth'] != "yes")
	{
		header("Location: admin_incorrect.php");
	}
	
?>
 
 <?php
	date_default_timezone_set('Africa/Lagos');
	$file_name=$_FILES['file_up']['name'];
	$alt = $_POST['message'];
	$id = date("YmdHis");
	$date = date("d")."-".date("M")."-".date("Y");
	$time = date('h:i A');
	//$file_name = "done";
	echo $file_name . "<br>";
	echo $alt . "<br>";
	echo $id . "<br>";
	
	$add= 'artiste_gallery/' . $file_name;

	
	move_uploaded_file ($_FILES[file_up][tmp_name], $add);
	echo "DONE UPLOADING" . "<br>";
	
	$host="fab8thproductionscom.ipagemysql.com";
	$user="website";
	$password="Fabprod_12345";
	$dbname = "fab8th";
	$cxn = mysql_connect($host,$user,$password)
	or die("Couldn’t connect to server.");
	mysql_select_db($dbname);
		
		$query = "insert into artiste_gallery(image_name, alt, id, date, time) 
		values('$file_name', '$alt', '$id', '$date', '$time')";
	
	//echo $query;
	$result = mysql_query($query, $cxn)
	or die ("Could not execute query.");
	echo "DONE UPLOADING TO DATABASE";
	
	
	
?>

<html>
    <head>
	<title>Fab8th</title>
	
	<meta http-equiv="refresh" content="2; url=update_artiste_gallery.php" />
    </head>
</html>