<?php
	$database = 'mysql:dbname=workchop_main;host=localhost;';
	$user = 'workchop_admin';
	$pwd = 'workchop_12345';
	
	//phpinfo();
	
	try {
		$db = new PDO($database, $user, $pwd);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$query = $db->prepare("INSERT INTO temporary_vendors (vendor_name, vendor_type, mobile_number, email_address, location_index, vendor_id, password, suspended_index, date_time)
			VALUES (:name, :type, :mobile_number, :email, :location_index, :vendor_id, :password, :suspended_index, :date_time)");
		$query->bindParam(':name',$name);
		$query->bindParam(':type',$type);
		$query->bindParam(':mobile_number',$mobile_number);
		$query->bindParam(':email',$email);
		$query->bindParam(':location_index',$location_index);
		$query->bindParam(':vendor_id',$vendor_id);
		$query->bindParam(':password',$password);
		$query->bindParam(':suspended_index',$suspended_index);
		$query->bindParam(':date_time',$date_time);
		
		$name = strip_tags(trim($_GET['name']));  
		$type = strip_tags(trim($_GET['type']));  
		$mobile_number = strip_tags(trim($_GET['mobile_number']));  
		$email = strip_tags(trim($_GET['email_address']));
		$location_index = strip_tags(trim($_GET['location_index']));  
		$vendor_id = md5(time().strip_tags(trim($_GET['password'])));  
		$password = md5(strip_tags(trim($_GET['password'])));  
		$suspended_index = strip_tags(trim($_GET['suspended_index']));
		$date_time = strip_tags(trim($_GET['date_year']))."/".strip_tags(trim($_GET['date_month']))."/".strip_tags(trim($_GET['date_day']))." ".
		strip_tags(trim($_GET['date_hour'])).":".strip_tags(trim($_GET['date_minute'])).":".strip_tags(trim($_GET['date_second']));
		
		$query->execute();
		echo "done--".$vendor_id;
	} 
	catch(PDOException $e) {
		die('Could not connect to the database:<br/>' . $e);
	}
?>