<?php
session_start();
error_reporting(0);
require_once('connectioncore.php');

if(isset($_POST['signin']))
{
	$email = strip_tags($_POST["email"]);
	$password = strip_tags($_POST["password"]);
	$expire = time()+120;
    if ($email && $password) 
	{
	$query2 = mysql_query("SELECT * FROM registration WHERE email='$email'");
    $numrow = mysql_num_rows($query2);
    if ($numrow != 0) 
	{
        // LOGIN code
        while ($row = mysql_fetch_assoc($query2)) 
		{
            $dbusername = $row['email'];
            $dbpassword = $row['password'];
			$userid = $row['user_id'];
			$username = $row['name'];
			$gen = $row['gender'];
        }

        // Check to see if username and password match
        if(($email==$dbusername) && ($password==$dbpassword)) 
		{
            header("Location:profile.php");
        }
        else 
		{
            echo 'Sorry' .$email. 'Incorrect password';
        }
		
    }
}
if(isset($_POST['remember_me']))
{
	
setcookie('email',$email,$expire);
setcookie('password',$password,$expire);
}
$_SESSION['email'] = $dbusername;
$_SESSION['UserId'] = $userid;
$_SESSION['password'] = $password;
$_SESSION['username'] = $username;
$_SESSION['gen'] = $gen;
$_SESSION['current_state'] = 'true';
}
?>
<html>
<head>
<title>SHUBHVIVAH</title>
<link rel = "stylesheet" href="aboutus.css"/>
<link rel="stylesheet" href="bootstrap-3.3.2-dist/css/bootstrap.min.css" />
<link rel="stylesheet" href="bootstrap-3.3.2-dist/js/bootstrap.min.js" />
<script type = "text/javascript" src = "loginpagevalidation.js">
</script> 

</head>
<body>
<?php include('headermain.php');
require_once('home_header.php');
	   ?>
<div class = "container-fluid" id = "loginpage_container">
	
	<div class = "row" >
		<div class = "col-md-3">
		
		</div>
		<div class = "col-md-6">
		   <form role="form" id = "myform"  method = "post">
				<div class="form-group">
					<label for="email" id = "emaillabel">Email address:</label>
					<input type="email" class="form-control" id="email" placeholder = "ENTER EMAIL ADDRESS" name = "email" value="<?php if(isset($_COOKIE['email'])) 
                      echo $_COOKIE['email'];
                             ?>">
				</div>
				<div class="form-group">
					<label for="pwd" id = "pwdlabel" >Password:</label>
					<input type="password" class="form-control" id="pwd" placeholder = "ENTER PASSWORD " name = "password" value="<?php if(isset($_COOKIE['password'])) 
echo $_COOKIE['password'];
?>">
				</div>
				<div class="checkbox">
					<label><input type="checkbox" name = "remember_me"> Remember me</label>
				</div>
				<button type="submit" class="btn btn-default" id = "btn" name = "signin" >Sign In</button><br/>
				<a href = "forgot.php">Forgot password</a>
			</form>
		
		</div>
		<div class = "col-md-3">
		
		
         
		</div>
	</div>
	
</div>
<div class="container" style="margin-top:10%;text-align:center">
<p style="color:#FF0000;"><?php echo $_GET['msg']; ?></p>
<?php
	include_once('footer.php');
	?>

	</div>
</body>
</html>