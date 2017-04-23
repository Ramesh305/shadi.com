<?php 
error_reporting(0);
$email=$_POST['email'];
if($_POST['submit']=='Send')
{
require_once('connectioncore.php');

$query="select * from registration where email='$email'";
$result=mysql_query($query) or die(error);
if(mysql_num_rows($result))
{
$code=rand(100,999);
$message="You activation link is: http://shubhvivah.com/forgot.php?email=$email&code=$code";
mail($email, "Subject Goes Here", $message);
echo "Email sent";
}
else
{
echo "No user exist with this email id";
}
}
?>
<html>
<head>
</head>
<body>
<form action="forgot.php" method="post">
Enter you email ID: <input type="text" name="email">
<input type="submit" name="submit" value="Send">
</form>
</body>
</html>