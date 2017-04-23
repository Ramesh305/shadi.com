<?php
@session_start();
error_reporting(0);
if(isset($_POST['logout']))
{
	$_SESSION['current_state'] = 'false';
	
	if($_SESSION['current_state'] == 'false')
	{
		header('Location:loginpage.php');
        session_destroy();		
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
<link rel="stylesheet" href="bootstrap-3.3.2-dist/css/bootstrap.min.css" />
<link rel="stylesheet" href="bootstrap-3.3.2-dist/jquery/jquery-1.9.1.min.js"/>
<link rel="stylesheet" href="bootstrap-3.3.2-dist/js/bootstrap.min.js" />

</head>

<body>
<form method="post">
<button type = "submit" name = "logout" class = "btn btn-primary">Logout</button>
</form>
</body>
</html>
