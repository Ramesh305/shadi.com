<?php
session_start();
require_once('connectioncore.php');
$id=$_SESSION['UserId'];
if(isset($_POST['change']))
{
	$new_password=$_POST['new_password'];
	$update = "update registration set password =$new_password where user_id=$id";
   mysql_query($update);
   header('LOCATION: loginpage.php?msg=Your password has been changed successfully!');
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

<div class="row">
<?php include ('headermain.php'); 
     include_once('uppermenu.php');
?></div>


<form method="post" action="chngepwd.php">
           <div class="container" id = "container_change_password">

            <div class="table-responsive" id = "change_password_div">
            <table class="table" id = "change_password_table">
			<tr id = "title_change_password">
            <label id="chnge_password_label">Change Password</label>
              </tr>
 <tr> <td colspan="2" bgcolor="#009900" id="home_path"><<a href="">Home</a>&nbsp;<a href="">>>Change Password</a></td> </tr>
  
   <tr>
      <td class="title_password"><b>Password</b></td>
      <td>
       
      </td>
    </tr>
    <tr>
      <td class="title_password"> Old Password</td>
      <td>
        <input type="password" name="old_password" id="textfield"/> 
      </td>
    </tr>
	 <tr>
      <td class="title_password">New Password</td>
      <td>
       <input type="password" name="new_password" id="new_password"/>  
      </td>
    </tr>
	 <tr>
      <td class="title_password">Confirm New Password</td>
      <td>
        <input type="password" name="confirm_password" id="confirm_password"/>      </td>
    </tr>
	
   <tr>
      <td ><input type="submit"  name="change" id="change" value="Change" /></td>
	  <td ><input type="Reset" id="Reset" value="Reset"/></td>
	  
    </tr>
  </table>
</form>

</body>

</html>