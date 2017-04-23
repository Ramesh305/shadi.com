<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel = "stylesheet" href="aboutus.css"/>
<link rel="stylesheet" href="bootstrap-3.3.2-dist/css/bootstrap.min.css" />
<link rel="stylesheet" href="bootstrap-3.3.2-dist/js/bootstrap.min.js" />


</head>

<body>
<form method="post">
<?php include_once('headermain.php');?>
<?php include_once('home_header.php');?>
<div class="container-fluid">

 
 	<div class="row" id = "about_file"  >
		 
		<label id="about_txt"><u>ABOUT US</u> </label><br/>
		<?php   
		$filename = 'about.txt';
		$mode = 'r';
		$fp = fopen($filename,$mode);
		while(!feof($fp))
		{
			echo fgets($fp).'<br/>';
			
		}
		fclose($fp);
		?>
 		</div>
 
</div>

</form>
<?php
include_once('footer.php');
?>
</body>
</html>
