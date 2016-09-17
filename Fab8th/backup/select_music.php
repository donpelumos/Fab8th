 <?php
	date_default_timezone_set('Africa/Lagos');
	$id = $_GET['id'];
	
	
	
	$host="localhost";
	$user="fabthpro_website";
	$password="Fabprod_12345";
	$dbname="fabthpro_fab8th";
	$cxn = mysql_connect($host,$user,$password)
	or die("Couldn’t connect to server.");
	mysql_select_db($dbname);
		
		$query = "select track_name from music where id = '$id'";
	
	//echo $query;
	$result = mysql_query($query, $cxn)
	or die ("Could not execute query.");
	//echo "DOWNLOADING";
	
	
	
	$i = 1;
	$row1 = array();
	
		while ($row = mysql_fetch_array($result))
		{
			$row1[] = $row;
		}	
	$url = 'http://www.fab8thproductions.com/music/'. $row1[0][0];
	//echo $url;
	echo "
		<html>
			<head>
				<title>Fab8th</title>
	
				<!-- <meta http-equiv=\"refresh\" content=\"2; url=$url\" /> -->
				<a href=\"$url\" download>Click To Download</a>
			</head>
	</html>
	";
?>