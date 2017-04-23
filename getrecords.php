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
		$query=mysql_query("select * from education_field where id=".$name);
		while($r=mysql_fetch_array($query))
		{
			echo '<option value="'.$r[2]. '">'.$r[2].'</option>';
		}
	 ?>
	 </body>
</html>