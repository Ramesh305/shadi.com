<?php
include_once("connectioncore.php");
if(isset($_POST['contact_submit']))
{
$name=$_POST['user_name'];
$email=$_POST['Email_id'];
$message=$_POST['message'];
$sql="insert into feedback values (null,'$name','$email','$message')";
$rs=mysql_query($sql);
echo "thank you for feedback";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SHUBHVIVAH</title>
<link rel="stylesheet" href="../bootstrap-3.3.2-dist/css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="../bootstrap-3.3.2-dist/js/bootstrap.min.js" type="text/javascript" />
<link rel="stylesheet" href="aboutus.css" type="text/css" />

</head>

<body>

<div class="row">
       <?php include('headermain.php'); ?>
<?php include ('home_header.php'); ?> </div>   
       
       <div id="contact_img">
       <img src="image/images (2).jpg" width="677" height="119" /></div>
       <div class="container" id="contact_us_title">
<div class="row" >
<div >Feedback</div>
</div></div>

<form id="contact_us" name="contact_us" method="post" action="">
  <table width="540" height="228">
    <tr>
      <td width="184" class="column1">Name</td>
      <td width="287">
        <input type="text" name="user_name" id="user_name" placeholder="Name" />
      </td>
    </tr>
    <tr>
      <td class="column1">Email ID</td>
      <td>
        <input type="text" name="Email_id" id="Email_id" placeholder="Email ID"/>
      </td>
    </tr>
    <tr>
      <td class="column1">Message</td>
      <td>
        <textarea name="message" id="message" cols="40" rows="5" placeholder="Message"></textarea>
      </td>
    </tr>
    <tr>
      <td colspan="2">
      <input type="submit" name="contact_submit" value="submit" id="contact_submit"/>
    </td></tr>
  </table>
</form>
<div class="row" style="text-align:center; margin-top:10%">
<?php include ('footer.php'); ?> </div>
</div>  
</body>
</html>