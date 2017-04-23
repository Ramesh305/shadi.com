<?php 
 session_start();
 if($_SESSION['current_state']== "true")
{
include_once('connectioncore.php'); 
$gen=$_SESSION['gen'];
if($gen=='Male')
{
$sqlprofile = "select * from registration where gender='Female'";
}
else
{
$sqlprofile = "select * from registration where gender='Male'";
}
	 $rsprofile = mysql_query($sqlprofile);
	 
 
	 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>SHUBHVIVAH</title>
<link rel="stylesheet" type="text/css" href="bootstrap-3.3.2-dist/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/javascript" href="bootstrap-3.3.2-dist/js/bootstrap.min.js" />
<link rel="stylesheet" type="text/css" href="aboutus.css" />
</head>

<body>
<?php 
include ('headermain.php');
include_once('uppermenu.php'); ?>
<div class="container" id="pmatch">
<div id="preferred">
<p style="background-color:#cc0000; height:30px; color:#FFFFFF"><b>My Matches</b></p>
<p align="right"><a href="shubhvivahhomepage.php">Home</a> >> <i>My Matches</i></p>
<p style="background-color:#666666; height:30px; color:#FFFFFF"><b><i><label></label> Profile Match Found</i></b></p>
<?php
if($_SESSION['current_state']== "true")
{ 
while($rowprofile = mysql_fetch_array($rsprofile))
	 {
		$user_id = $rowprofile['user_id'];
		$name = $rowprofile['name'];
		$lname = $rowprofile['last_name'];
		  
		 $aboutmyself = $rowprofile['about'];
		 $Path=$rowprofile['Path'];
		
		
		?>
<div id="profile1">
<p><b>Profile Id: <label><?php echo $user_id;?></label></b></p>
<div id="preferredimage">
<?php echo '<img src  = "'.$Path.'" height = "160" width = "140"/>';?>

</div>
<p><b>Name:- <label><?php echo $name.' '; echo $lname;?></label></b></p>
<label><a href="read_more.php?id=<?php echo $user_id; ?>">Read More...</a></label>
</div>
<?php }

}      
else
{
	header('Location:loginpage.php');
}

 ?>


</div>

</div>
<?php 

include ('footer.php'); 

?>
</body>
</html>
<?php
}      
else
{
	header('Location:loginpage.php');
}?>
