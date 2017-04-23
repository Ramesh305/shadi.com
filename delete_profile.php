<?PHP
session_start();
include("connectioncore.php");
$id = $_SESSION['UserId'];
if(isset($_POST['delete']))
{
$del = " delete from registration where user_id = $id ";
mysql_query($del);
$del = " delete from create_profile where user_id = $id ";
mysql_query($del);
$del = " delete from other_details where user_id = $id ";
mysql_query($del);
header('LOCATION: loginpage.php?msg=Your Profile has been deleted successfully!');

}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../bootstrap-3.3.2-dist/css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="../bootstrap-3.3.2-dist/js/bootstrap.min.js" type="text/javascript" />
<link rel="stylesheet" href="../ourproject/aboutus.css" type="text/css" />
<title>SHUBHVIVAH</title>
<script>
function delete()
{
confirm("Are you sure you want to delete account");

}

</script>
</head>
<body >

<div class="row">
<?php include ('headermain.php'); 
     include_once('uppermenu.php');
?></div>
<form method="post">
<center>
<h1>Click on delete button to remove accont</h1>
<input type="submit" name="delete" id="delete" value="Delete" onclick="return confirm('are  you shure to delete');" />

</center>
</form><br /><br /><br /><br /><br /><br /><br /> <br /><br /><br />
<?php  
     include_once('footer.php');
?>
</body>
</html>