<?php
//session_save_path("/home/users/web/b1621/ipg.fab8thproductionscom/cgi-bin/tmp");
	session_start(); 
	if($_SESSION['auth'] != "yes")
	{
		header("Location: admin_incorrect.php");
	}
	
?>
 
 <?php
	date_default_timezone_set('Africa/Lagos');
	$file_name=str_replace(" ","_",$_FILES['file_up']['name']);
	$rep = "\"";
	$body = str_replace(")","\)",str_replace("(","\(",str_replace(";","\;",str_replace("\"",$rep,str_replace("'","\'",$_POST['message'])))));
	$category = $_POST['category'];
	$id = date("YmdHis");
	$heading = str_replace(")","\)",str_replace("(","\(",str_replace(";","\;",str_replace("\"",$rep,str_replace("'","\'",$_POST['topic'])))));
	//$file_name = "done";
	echo $file_name . "<br>";
	echo $body . "<br>";
	echo $id . "<br>";
	$date = date("d")."-".date("M")."-".date("Y");
	$time = date('h i A');
	$add= 'headlines/' . $file_name;

	
	move_uploaded_file ($_FILES[file_up][tmp_name], $add);
	echo "DONE UPLOADING" . "<br>";
	
	$host="localhost";
	$user="fabthpro_website";
	$password="Fabprod_12345";
	$dbname="fabthpro_fab8th";
	$cxn = mysql_connect($host,$user,$password)
	or die("Couldn’t connect to server.");
	mysql_select_db($dbname);
	if(empty($heading) || empty($body) || empty($file_name))
	{		
		
	}	
	else
	{
		$query = "insert into headlines(id, image_name, heading, body, category, date, time) 
		values('$id','$file_name', '$heading', '$body', '$category', '$date', '$time')";
	}
	//echo $query;
	$result = mysql_query($query, $cxn)
	or die ("Could not execute query.");
	echo "DONE UPLOADING TO DATABASE";
	
	/*
define('FACEBOOK_SDK_V4_SRC_DIR', '/fb-php-sdk-v4/src/Facebook/');
require __DIR__ . '/facebook-php-sdk-v4/autoload.php';

// configuration
$appid = '389246104587427';
$appsecret = '1e0252df9bff72754f676f004161ad4b';
$pageId = '793474677361329';
$msg = "$body";
$title = "$heading";
$uri = "http://www.fab8thproductions.com/headlineid.php?topic=".$heading."&image=".$file_name."&id=".$id;
$desc = "$body";
$pic = "http://www.fab8thproductions.com/headlines/" . $file_name;
$action_name = 'Go to PHP Infinite';
$action_link = "http://www.fab8thproductions.com/headlineid.php?topic=".$heading."&image=".$file_name."&id=".$id;

$facebook = new Facebook(array(
'appId' => $appid,
'secret' => $appsecret,
'cookie' => false,
));

$user = $facebook->getUser();

// Contact Facebook and get token
if ($user) {
// you're logged in, and we'll get user acces token for posting on the wall
try {
$page_info = $facebook->api("/$pageId?fields=CAACEdEose0cBAGxwQS8DNKfaClYZAhT2p2diMXR7CzHjwyZCLB0X2qJ0MrXtuqd3PyLr13NYDyC1eZBGir0gb1h9L6FXsdLYVZCk3bPGCHFZANFjuIKCpGKqrLTCZASi4kCM8hs2t7PcENoiv9aqSPvqVz3Lhpw79mVf4WXXz2ZBdsPl6aNmu4uNMp382kZAS4sZD");
if (!empty($page_info['access_token'])) {
$attachment = array(
'access_token' => $page_info['access_token'],
'message' => $msg,
'name' => $title,
'link' => $uri,
'description' => $desc,
'picture'=>$pic,
'actions' => json_encode(array('name' => $action_name,'link' => $action_link))
);

$status = $facebook->api("/$pageId/feed", "post", $attachment);
} else {
$status = 'No access token recieved';
}
} catch (FacebookApiException $e) {
error_log($e);
$user = null;
}
} else {
// you're not logged in, the application will try to log in to get a access token
//header("Location:{$facebook->getLoginUrl(array('scope' => 'photo_upload,user_status,publish_stream,user_photos,manage_pages'))}");
alert('error');
}

echo $status;
	*/
?>

<html>
    <head>
	<title>Fab8th</title>
	
	<meta http-equiv="refresh" content="2; url=update_headlines.php" />
    </head>
</html>