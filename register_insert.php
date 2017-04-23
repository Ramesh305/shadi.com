<?php
error_reporting(0);
session_start();
include_once("connectioncore.php");
if(isset($_POST['Register']))
{
$email=$_POST['email'];
$pass=$_POST['pass'];
$profile=$_POST['profile'];
$name=$_POST['fname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$dob=$_POST['dd'];
$religion=$_POST['religion'];
$marital=$_POST['marital_status'];
$caste=$_POST['caste'];
$language=$_POST['mother_tongue'];
$contact=$_POST['mobile_number'];
$state=$_POST['living_in'];
$file=$_FILES['file']['name'];
$tmp_name=$_FILES['file']['tmp_name'];
$path='uploade/'.$file;
$error=$_FILES['file']['error'];

$_SESSION['fname']=$name;
$_SESSION['lname']=$lname;
$_SESSION['mail']=$email;
$_SESSION['pass']=$pass;
if($error==0)
{
$up=move_uploaded_file($tmp_name,$path);
$sql2="insert into registration values(null,'$email','$pass','$profile','$name','$lname','$gender','$dob','$religion','$marital','$caste','$language','$contact','$state','$path')";
$rs=mysql_query($sql2);

if($rs)
{
header('location:form3.php');
}
else
{
header('location:registration.php');
}

}
}

?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
