<?php 
session_start();
error_reporting(0);

?>
<html>
<head>
<title>profile</title>
<link rel = "stylesheet" href="profile.css"/>
<link rel="stylesheet" href="bootstrap-3.3.2-dist/css/bootstrap.min.css" />
<link rel="stylesheet" href="bootstrap-3.3.2-dist/jquery/jquery-1.9.1.min.js"/>
<link rel="stylesheet" href="bootstrap-3.3.2-dist/js/bootstrap.min.js" />
</head>
<body>

<?php  

if($_SESSION['current_state']== "true")
{   include_once('display_username');
	$user_id=$_SESSION['UserId'];
	include('uppermenu.php');
	
	require_once('connectioncore.php');
	 $sqlprofile = "select * from create_profile where user_id =$user_id ";
	 $rsprofile = mysql_query($sqlprofile);
	 while($rowprofile = mysql_fetch_array($rsprofile))
	 {
		$user_id = $rowprofile['user_id'];
		$marital_status = $rowprofile['marital_status'];
	    $culture= $rowprofile['culture'];
		$education = $rowprofile['education'];
		$profession = $rowprofile['profession'];
		$state = $rowprofile['state'];
		$city = $rowprofile['city'];
		$phoneNo = $rowprofile['phoneNo'];
		$phoneNoPrivacy = $rowprofile['phoneNoPrivacy'];
		$aboutMyself = $rowprofile['aboutMyself'];
		$woking_with = $rowprofile['woking_with'];
		$any_disability = $rowprofile['any_disability'];
		$community = $rowprofile['community'];
		$sub_community = $rowprofile['sub-community'];
		$education_field = $rowprofile['education field'];
		$income = $rowprofile['income'];
	 }
	?>
	<div class = "container-fluid" id = "profile">
	
	
	<label id = "title">My Profile</label>
	
	</label>
	<hr/>
	
	</label>
	  <div class = "col-md-4">
	 <label class = "profiletitle">User Id</label><br/>
	 <label class = "profiletitle">Marital Status</label><br/>
	 <label class = "profiletitle">Culture</label><br/>
	 <label class = "profiletitle">Education</label><br/>
	 <label class = "profiletitle">Education Field</label><br/>
	 <label class = "profiletitle">Profession</label><br/>
	 <label class = "profiletitle">Monthly Income</label><br/>
	 <label class = "profiletitle">Working With</label><br/>
	 <label class = "profiletitle">Community</label><br/>
	 <label class = "profiletitle">Sub-Community</label><br/>
	 <label class = "profiletitle">state</label><br/>
	 <label class = "profiletitle">city</label><br/>
	 <label class = "profiletitle">Cell Phone Number</label><br/>
	 <label class = "profiletitle">Phone Number Privacy</label><br/>
	 <label class = "profiletitle">About Myself</label><br/>
	 <label class = "profiletitle">Any Disability</label>
	 </div>
	  <div class = "col-md-4">
	  <?php
	 echo '<label class = "pro">'.$user_id.'</label><br/>';
	  echo '<label class = "pro">'.$marital_status.'</label><br/>';
	  echo '<label class = "pro">'.$culture.'</label><br/>';
	 echo '<label class = "pro">'.$education.'</label><br/>';
	 echo '<label class = "pro">'.$education_field.'</label><br/>';
	 echo'<label class = "pro">'.$profession.'</label><br/>';
	 echo '<label class = "pro">'.$income.'</label><br/>';
	 echo '<label class = "pro">'.$woking_with.'</label><br/>';
	 echo '<label class = "pro">'.$community.'</label><br/>';
	echo '<label class = "pro">'.$sub_community.'</label><br/>';
	 echo '<label class = "pro">'.$state.'</label><br/>';
	 echo '<label class = "pro">'.$city.'</label><br/>';
	 echo '<label class = "pro">'.$phoneNo.'</label><br/>';
	echo'<label class = "pro">'.$phoneNoPrivacy .'</label><br/>';
	echo '<label class = "pro">'.$aboutMyself.'</label><br/>';
	 echo '<label class = "pro">'.$any_disability.'</label>';
	 ?>
	 </div>
	 <div class = "col-md-4">
	 <?php
	    if(isset($_POST['submit']))
	    {
		$date = date("Y/m/d");
		$time = time();
		$filename= $_FILES['fileUpload']['name'];
		$ext = end( explode('.', $filename));
		$filename= $time;
		$tmpname = $_FILES['fileUpload']['tmp_name'];
		
		$error = $_FILES['fileUpload']['error'];
		$type = $_FILES['fileUpload']['type'];
	    $type = strtolower($type);
       
	   $destination= 'uploads/'.$filename.'.'.$ext;
	if($_FILES['fileUpload']['error']!=0)
	{
	 echo 'file size is too large';
	 }
		else
		{	
	     if(!file_exists($destination))
	    {
        $r = move_uploaded_file($tmpname,$destination);
	    }
			if($r)
			{
				echo '<strong> file uploaded successfully </strong>';
				
				
			}
			else
			{
				echo 'error in file upload';
			}
		}
		        $sqlmatch = "select * from upload_image";
				$rsmatch = mysql_query($sqlmatch);
				while($rowmatch = mysql_fetch_array($rsmatch))
				{
					$dbuser_id = $rowmatch['user_id'];
				}
				
	
				if($dbuser_id == $user_id) 
				{
				$sqlupload = "UPDATE upload_image SET image_path = '$destination' WHERE user_id = $user_id";
					$rsupload =  mysql_query($sqlupload);
					if($rsupload)
					{
						echo 'query running';
					}
					else
					{
						echo mysql_error();
					}
				}
				else
				{
					$sqlupload = " insert into upload_image(user_id ,image_path, submission_date) values('$user_id' ,'$destination' ,'$date') ";
					$rsupload =  mysql_query($sqlupload);
					if($rsupload)
					{
						echo 'query running';
					}
					else
					{
						echo mysql_error();
					}
				}
      
	  echo '<img src  = "'.$destination.'" height = "150" width = "150"/>';
	  
	  }
	  
	 ?>
	 <form method="post" enctype="multipart/form-data" action = "profile.php">
         <input type="file" name="fileUpload" id="fileUpload"/>
         <input type="submit" name="submit" value="Submit" />
	  </form>
	 </div>
	 </div>
    </div>
	<?php
include_once('logout_user_module.php');
}      
else
{
	header('Location:loginpage.php');
}

?>


</body>
</html>