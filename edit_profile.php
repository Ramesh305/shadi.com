<?php 
session_start();
error_reporting(0);

?>
<html>
<head>
<title>edit user profile</title>

<link rel="stylesheet" href="../bootstrap-3.3.2-dist/css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="../bootstrap-3.3.2-dist/js/bootstrap.min.js" type="text/javascript" />
<link rel = "stylesheet" href="aboutus.css"/>

</head>
<body>
	<div class = "container-fluid" id = "profile1">
	<div class = "row">
	<label id = "title_edit_profile">Edit Profile</label>
	<form method = "post" action = "edit_profile.php">
	<button type = "submit" name = "edit" id = "edit" class = "edit">Edit</button>
	 <button type = "submit" name = "update" id = "update" class = "update">Update</button><br>
	 </form>
	</div>
	
	</label>
	<hr/>
	
	</label>
	<div class = "row">
	  <div class = "col-md-4">
	 <label class = "profiletitle">User Id</label><hr/>
	 <label class = "profiletitle">Marital Status</label><hr/>
	 <label class = "profiletitle">Culture</label><hr/>
	 <label class = "profiletitle">Education</label><hr/>
	 <label class = "profiletitle">Education Field</label><hr/>
	 <label class = "profiletitle">Profession</label><hr/>
	 <label class = "profiletitle">Monthly Income</label><br/><hr/>
	 <label class = "profiletitle">Working With</label><br/><hr/>
	 <label class = "profiletitle">Community</label><br/><hr/>
	 <label class = "profiletitle">Sub-Community</label><br/><hr/>
	 <label class = "profiletitle">state</label><br/><hr/>
	 <label class = "profiletitle">city</label><br/><hr/>
	 <label class = "profiletitle">Cell Phone Number</label><br/><hr/>
	 <label class = "profiletitle">Phone Number Privacy</label><br/><hr/>
	 <label class = "profiletitle">About Myself</label><br/><br/><hr/>
	 <label class = "profiletitle">Any Disability</label>
	 </div>
	  <div class = "col-md-4">
	  <?php
	  
	 echo '<label class = "pro">'.$user_id.'</label><hr/>';
	  echo '<label class = "pro">'.$marital_status.'</label><hr/>';
	 echo '<label class = "pro">'.$culture.'</label><hr/>';
	 echo '<label class = "pro">'.$education.'</label><hr/>';
	 echo '<label class = "pro">'.$education_field.'</label><hr/>';
	 echo'<label class = "pro">'.$profession.'</label><hr/>';
	 echo '<label class = "pro">'.$income.'</label><hr/>';
	 echo '<label class = "pro">'.$woking_with.'</label><hr/>';
	 echo '<label class = "pro">'.$community.'</label><hr/>';
	echo '<label class = "pro">'.$sub_community.'</label><hr/>';
	 echo '<label class = "pro">'.$state.'</label><hr/>';
	 echo '<label class = "pro">'.$city.'</label><hr/>';
	 echo '<label class = "pro">'.$phoneNo.'</label><hr/>';
	echo'<label class = "pro">'.$phoneNoPrivacy .'</label><hr/>';
	echo '<label class = "pro">'.$aboutMyself.'</label><hr/>';
	 echo '<label class = "pro">'.$any_disability.'</label>';
	
	 
						?>
	 </div>
	 <div class = "col-md-4" id = "editControl">
	 <br/><br/>
	 <form method = "post" action = "edit_profile.php">
	 
	  <?php 
	  if(isset($_POST['edit']))
	  {
	   echo '<hr/><p class = "radio-group" name = "radio_marital">
		  <input type="radio" name="maritalStatus" value="single" />
     						 single
   
    						
      							<input type="radio" name="maritalStatus" value="Divorsed" />
      						divorsed
    
    						
      							<input type="radio" name="maritalStatus" value="Widowed" />
      						widowed
    						
      							<input type="radio" name="meritalstatus" value="Separated" />
      						separated
							
						
	   					</p><hr/>';
	  echo '<select name="culture" size="1" class="listbox">
							<option value="">Please select....</option>
							<option value = "Bihari">Bihari</option>
							<option value = "Bengali">Bengali</option>
							<option value = "Hindi">Hindi</option>
							<option value = "Gujrati">Gujrati</option>
							<option value = "Kannada">Kannada</option>
							<option value = "Malyalam">Malyalam</option>
							<option value = "Oriya">Oriya</option>
							<option value = "Punjabi">Punjabi</option>
							<option value = "Rajsthani">Rajsthani</option>
							<option value = "Tamil">Tamil</option>
							<option value = "Telugu">Telugu</option>
							<option value = "Konkani">Konkani</option>
							<option value = "Himachali">Himachali</option>
							<option value = "Haryanvi" >Haryanvi</option>
							<option value = "Assamese">Assamese</option>
							<option value = "Kashmiri">Kashmiri</option>
							<option value = "Sikkim">Sikkim/Nepali</option>
							
						</select><hr/>';
						 
						
	 echo '<select name="culture" size="1" class="listbox">
							<option value="">Please select....</option>
							<option value = "Bihari">Bihari</option>
							<option value = "Bengali">Bengali</option>
							<option value = "Hindi">Hindi</option>
							<option value = "Gujrati">Gujrati</option>
							<option value = "Kannada">Kannada</option>
							<option value = "Malyalam">Malyalam</option>
							<option value = "Oriya">Oriya</option>
							<option value = "Punjabi">Punjabi</option>
							<option value = "Rajsthani">Rajsthani</option>
							<option value = "Tamil">Tamil</option>
							<option value = "Telugu">Telugu</option>
							<option value = "Konkani">Konkani</option>
							<option value = "Himachali">Himachali</option>
							<option value = "Haryanvi" >Haryanvi</option>
							<option value = "Assamese">Assamese</option>
							<option value = "Kashmiri">Kashmiri</option>
							<option value = "Sikkim">Sikkim/Nepali</option>
							
						</select><hr/>';
	  }
		
		if(isset($_POST['update']))
		{
			 $maritalstatus = $_POST['maritalStatus'];
			 if($maritalstatus == "")
	         {
				 
			 }
			 else
			 {
	        $sqlupdate = "update create_profile set marital_status = '$maritalstatus' where user_id = '$user_id'";
		$rsupdate = mysql_query($sqlupdate);
		if($rsupdate)
		{
			echo 'has been updated';
		}
		else
		{
			echo mysql_error();
		}
			 }
		 
			 $Culture = $_POST['culture'];
			 
	           if($Culture == "")
			   {
				   
			   }
			   else
			   {
	        $sqlupdate = "update create_profile set culture = '$Culture' where user_id = '$user_id'";
		$rsupdate = mysql_query($sqlupdate);
		if($rsupdate)
		{
			echo 'has been updated';
		}
		else
		{
			echo mysql_error();
		}
		 
			   }
	  	 
	$Culture = $_POST['culture'];
	if($Culture == "")
	{
		
	}
	else
	{
	 $sqlupdate = "update create_profile set culture = '$Culture' where user_id = '$user_id'";
		$rsupdate = mysql_query($sqlupdate);
		if($rsupdate)
		{
			echo 'has been updated';
		}
		else
		{
			echo mysql_error();
		}
		}
		}
	  ?>
	  </form>
	 </div>
	 
	 </div>
	
    </div>
	
	<?php
if(isset($_POST['logout']))
{
	header('Location:loginpage.php');
	session_destroy();
}


?>


</body>
</html>