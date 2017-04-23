<?php
error_reporting(0);
session_start();
$search_by_id = $_POST['search_by_id'];
$_SESSION['search_user_id'] = $_POST['search_by_id'];
include_once('connectioncore.php');
if(isset($_POST['search']))
{
$sql = "select * from registration where user_id = '$search_by_id'";
$result = mysql_query($sql);
while($row = mysql_fetch_array($result))
{
	$user_id = $row[0];
	if($user_id == $search_by_id)
	{
		
		header('Location:search_profile.php');
	}
}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../bootstrap-3.3.2-dist/css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="../bootstrap-3.3.2-dist/js/bootstrap.min.js" type="text/javascript" />
<link rel="stylesheet" href="aboutus.css" type="text/css" />

<title>SHUBHVIVAH</title>

</head>

<body>
<?php
 include_once('headermain.php');

 ?>
<div class="row">
<?php include ('uppermenu.php'); ?> </div>

<form method="post" id="search_by_id_form">

<div class="container-fluid" >
<div class="row">
<p id="search_by_idtitle">Search profile by ID</p></div>
<div class="row">
<div class="col-md-5" id="search_profile_title"><p>Enter Profile ID</p></div>
<div class="col-md-5" id="search_profile_box"><input type="text" name="search_by_id" /></div>
</div>
<div class="row">
<div class="col-md-10"><button type="submit" name="search" id="search_id" value="search">Search
</button></div>
</div>
        
        
    </div></div></form>
    <div class="row">
<?php include ('footer.php'); 

?> </div>
</div>  

 
   
</body>
 
</html>