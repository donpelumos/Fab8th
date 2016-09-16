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
	$rep = "\"";
	$body = str_replace(")","\)",str_replace("(","\(",str_replace(";","\;",str_replace("\"",$rep,str_replace("'","\'",$_POST['message'])))));
	$id = $_GET['id'];
	$heading = str_replace(")","\)",str_replace("(","\(",str_replace(";","\;",str_replace("\"",$rep,str_replace("'","\'",$_POST['topic'])))));
	$category = $_POST['category'];
	//$file_name = "done";
	echo $file_name . "<br>";
	echo $body . "<br>";
	echo $id . "<br>";
	
	$host="fab8thproductionscom.ipagemysql.com";
	$user="website";
	$password="Fabprod_12345";
	$dbname = "fab8th";
	$cxn = mysql_connect($host,$user,$password)
	or die("Couldn’t connect to server.");
	mysql_select_db($dbname);
	if(empty($heading) || empty($body))
	{		
		
	}
	else
	{		
		$query = "update headlines set body='$body', heading='$heading', category='$category' where id=$id";
	}	
	//echo $query;
	$result = mysql_query($query, $cxn)
	or die ("Could not execute query.");
	echo "DONE UPLOADING TO DATABASE";
	
	
	
?>

<html>
    <head>
	<title>Fab8th</title>
	
	<meta http-equiv="refresh" content="2; url=update_headlines.php" />
    </head>
</html>