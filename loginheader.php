<?php 
 
include_once('connectioncore.php'); 
$sqlprofile = "select * from registration ";
	 $rsprofile = mysql_query($sqlprofile);
	 
	 while($rowprofile = mysql_fetch_array($rsprofile))
	 {
		$name = $rowprofile['name'];
		  
		 
		$Path=$rowprofile['Path'];
		}
	 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>HEADER</title>
<link rel="stylesheet" href="aboutus.css" />
<link rel="stylesheet" href="bootstrap-3.3.2-dist/css/bootstrap.min.css" />
<link rel="stylesheet" href="bootstrap-3.3.2-dist/js/bootstrap.min.js" />
</head>

<body>
<div class="container-fluid">
    <div class="row">
		<div class="col-md-6">
		
		<label id="slogan" name="slogan">SHUBHVIVAH.COM</label>
		
		</div>
		<div class="col-md-6" id="sm_text" align="right">
		<p>Wellcome <?php echo $name; ?></p>
		<label id="simplifying"><?php echo '<img src  = "'.$Path.'" height = "100" width = "100"/>';?> </label>
		
		</div>
		</div>
		
	<div class="row" >
	    <div class="col-md-6" id="sm_text">
		<label id="simplifying">Simplifying </label>
		<label id="matchmaking">matchmaking</label>
		</div>
		
		
</div>

</body>
</html>
