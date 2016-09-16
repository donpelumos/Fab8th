<?php
	$host="localhost";
	$user="root";
	$password="";
	$dbname = "fab8th";
	$cxn = mysql_connect($host,$user,$password)
	or die("Couldn’t connect to server.");
	mysql_select_db($dbname);
		
		$query = "select image_name from ushering_gallery";
		$query2 = "select id from ushering_gallery";
		$query3 = "select alt from ushering_gallery";
	
	//echo $query;
	$result = mysql_query($query, $cxn)
	or die ("Could not execute query.");
	$result2 = mysql_query($query2, $cxn)
	or die ("Could not execute query.");
	$result3 = mysql_query($query3, $cxn)
	or die ("Could not execute query.");
	$i = 1;
	$row1 = array();
	$row2 = array();
	$row3 = array();
		while ($row = mysql_fetch_array($result))
		{
			$row1[] = $row;
		}
		for($x = 0; $x < sizeof($row1); $x++)
		{
			//echo $row1[$x][0]. "<br>";
		}
		
		while ($roww = mysql_fetch_array($result2))
		{
			$row2[] = $roww;
		}
		for($x = 0; $x < sizeof($row2); $x++)
		{
			//echo $row2[$x][0]."<br>";
		}
		
		while ($rowww = mysql_fetch_array($result3))
		{
			$row3[] = $rowww;
		}
		for($x = 0; $x < sizeof($row3); $x++)
		{
			//echo $row3[$x][0]."<br>";
		}
		echo "
			for($a = 0; $a < 2; $a++)
			{
					<tr>
						<td> <img src=\"ushering_gallery/".$row1[$a][0] ." \" class=\"thumbs\"/> </td>
						<td>
							<font class=\"img_desc\">IMAGE NAME</font> <br>
							<font class=\"img_alt\">IMAGE ALT</font>
						</td>
						<td> <a href=\"\"><img src=\"cancel.png\" class=\"cancel_thumb\" alt=\"1\"/></a> <br> <font style=\"color:red; font-size:14px;\">DELETE</font> </td>
					</tr>
			}		
					";
?>							