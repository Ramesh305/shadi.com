<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
	<?php
		$name=$_GET['id'];
		include_once('connectioncore.php');
$sqlfetch = "select * from registration where user_id = '$name'";
$rsfetch = mysql_query($sqlfetch);
while($rowfetch = mysql_fetch_array($rsfetch))
{
   
	echo '<table border="1"  width="338" height="160"> <tr>';
    echo '<td><label>Name</label></td>';
	echo '<td><label>'.$rowfetch[4].'&nbsp;'.$rowfetch[5].'</label></td></tr>';
	echo '<tr><td><label>Gender</label></td>';
	echo '<td> <label>'.$rowfetch[6].'</label></td></tr>';
	echo '<tr><td><label>DOB</label></td>';
	echo '<td><label>'.$rowfetch[7].'</label></td></tr>';
	echo '<tr><td><label>Religion</label></td>';
	echo '<td><label>'.$rowfetch[8].'</label></td></tr>';
	echo '<tr><td><label>Marital Status</label></td>';
	echo '<td> <label>'.$rowfetch[9].'</label></td></tr>';
	echo '<tr><td><label>Caste</label></td>';
	echo '<td><label>'.$rowfetch[10].'</label></td>';	
	echo '</tr></table>';	
}
?>
</body>
</html>
