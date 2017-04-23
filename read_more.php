<?php
session_start();
if($_SESSION['current_state']== "true")
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Shubhvivah</title>
<link rel="stylesheet" href="../bootstrap-3.3.2-dist/css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="../bootstrap-3.3.2-dist/js/bootstrap.min.js" type="text/javascript" />
<link rel="stylesheet" href="css_file.css" type="text/css" />
</head>

<body>
<div class="row">
       <?php include ('headermain.php'); ?></div>
       <div class="row">
<?php include ('uppermenu.php'); ?> </div>

 



  <div class="container">
  <form id="form1" name="form1" method="post" action="">
             
             <div id="title">User Details</div>
			 <div class="table-responsive">
            <table class="table4">
            
  <tr> <td colspan="2" bgcolor="#009900" class="column2" align="center">Read More
  <?php
		$name=$_GET['id'];
		include_once('connectioncore.php');
$sqlfetch = "select * from registration where user_id = '$name'";
$rsfetch = mysql_query($sqlfetch);
while($rowfetch = mysql_fetch_array($rsfetch))
{
    echo '<table border="1"  width="338" height="160"> <tr>';
    echo '<td><label style="color:#009900;">Name</label></td>';
	echo '<td><i>'.$rowfetch[4].'&nbsp;'.$rowfetch[5].'</i></td></tr>';
	echo '<tr><td><label style="color:#009900;">Gender</label></td>';
	echo '<td> <i>'.$rowfetch[6].'</i></td></tr>';
	echo '<tr><td><label style="color:#009900;">DOB</label></td>';
	echo '<td><i>'.$rowfetch[7].'</i></td></tr>';
	echo '<tr><td><label style="color:#009900;">Religion</label></td>';
	echo '<td><i>'.$rowfetch[8].'</i></td></tr>';
	echo '<tr><td><label style="color:#009900;">Marital Status</label></td>';
	echo '<td> <i>'.$rowfetch[9].'</i></td></tr>';
	echo '<tr><td><label style="color:#009900;">Caste</label></td>';
	echo '<td><i>'.$rowfetch[10].'</i></td>';	
	echo '</tr></table>';
}
?>
</td> </tr>
  </table>
 
 
  </form>
  </div>
  <div class="row">
<?php include ('footer.php'); ?> </div>
</div>  
</body>
</html>
<?php
}      
else
{
	header('Location:loginpage.php');
}?>