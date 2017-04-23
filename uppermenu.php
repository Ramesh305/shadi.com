<?php

error_reporting(0);
require_once('connectioncore.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>

<link rel = "stylesheet" href="aboutus.css"/>
<link rel="stylesheet" href="bootstrap-3.3.2-dist/css/bootstrap.min.css" />
<link rel="stylesheet" href="bootstrap-3.3.2-dist/jquery/jquery-1.9.1.min.js"/>

<link rel="stylesheet" href="bootstrap-3.3.2-dist/js/bootstrap.min.js" />

</head>

<body>
<form method = "post">
<nav class="navbar navbar-default" id="row2">
<ul>
		
		<li><a href="" name = "myprofile">My Profile</a>
			<ul>
				<li><a href="profile.php">View Profile</a></li>
				<li><a href="edit_profile1.php">Edit Profile</a></li>
				<li><a href="set_partner_profile.php">Set Partner Profile</a></li>
				
			</ul>
	  </li>
			
		<li><a href="#">My Messages</a>
		<ul>
		<li><a href="">Inbox</a>
		<ul>
						<li><a href="input box.php">Message Received</a></li>
						<li><a href="interest recieve.php">Interest Received</a></li>
						
					</ul>
					<li>
		<li><a href="output box.php">Outbox</a>
		<ul>
						<li><a href="outbox message.php">Sent Message</a></li>
						<li><a href="interest sent.php">Sent Request</a></li>
					</ul>
					<li>
		</ul>
		</li>
		<li><a href="PreferredMatch.php">My Matches</a>
			
	  </li>
			
			
			<li><a href="#">Search</a>
			<ul>
				<li><a href="quick search.php">Quick Search</a></li>
				<li><a href="search by profile id.php">Profile ID Search</a></li>
				<li><a href="Search by location.php">Search By Location</a></li>
				
			</ul>
			</li>
			<li><a href="http://www.ganeshaspeaks.com" target="_blank">Horoscope</a>
			<ul>
						
			</ul>
			<li><a href="#">Account Settings</a>
			<ul>
				<li><a href="chngepwd.php">Change Password</a></li>
				<li><a href="delete_profile.php">Delete My Account</a></li>
				
				
				
			</ul>
			</li>
		
	</ul>
	<?php include('logoutpage.php');?>
	
	<?php
		$sql = "select * from registration ";
	 $rs = mysql_query($sql);
		 while($row = mysql_fetch_array($rs))
	 {
	 if($row['email']==$_SESSION['email'] && $row['password']==$_SESSION['password']) 
	 {
	 echo '<label style="color:#cc0000; font-size:18px; margin-left:330px;">'."Welcome ".'</label>'.' '.'<label style=" font-style:italic; font-size:18px;">'.$row['name'].' '.$row['last_name'].'</label>';
	 }
	 }
	 ?>
		
</nav>
</form>
</body>
</html>
