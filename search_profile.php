<?php 
session_start();
error_reporting(0);
?>
<html>
<head>
<title>SHUBHVIVAH</title>
<link rel = "stylesheet" href="aboutus.css"/>
<link rel="stylesheet" href="bootstrap-3.3.2-dist/css/bootstrap.min.css" />
<link rel="stylesheet" href="bootstrap-3.3.2-dist/jquery/jquery-1.9.1.min.js"/>
<link rel="stylesheet" href="bootstrap-3.3.2-dist/js/bootstrap.min.js" />
</head>
<body>
<?php  
$user_id = $_SESSION['search_user_id'];
 include_once('headermain.php');
if($_SESSION['current_state']== "true")
{  
	include_once('uppermenu.php');
	require_once('connectioncore.php');
	 $sqlprofile = "select * from create_profile where user_id = $user_id";
	 $rsprofile = mysql_query($sqlprofile);
	
	 while($rowprofile = mysql_fetch_array($rsprofile))
	 {
		
	    $culture= $rowprofile['culture'];
		if($culture=="")
		{
		 $culture1='Not Mention';
		}
		else
		{
		$culture1=$culture;
		}
		
		$education = $rowprofile['education'];
		if($education=="")
		{
		 $education1='Not Mention';
		}
		else
		{
		$education1=$education;
		}
		
		$education_field = $rowprofile['education_faild'];
		if($education_field=="")
		{
		 $education_field1='Not Mention';
		 
		}
		else
		{
		$education_field1=$education_field;
		}
		$profession = $rowprofile['profession'];
		if($profession=="")
		{
		$profession1='Not Mention';
		}
		else
		{
		 $profession1=$profession;
		}
		
		
		$income = $rowprofile['income'];
		if($income=="")
		{
		 $income1='Not Mention';
		}
		else
		{
		$income1=$income;
		}
		
		$working = $rowprofile['working'];
		if($working=="")
		{
		 $working1='Not Mention';
		}
		else
		{
		$working1=$working;
		}
		
		
		$state = $rowprofile['state'];
		if($state=="")
		{
		 $state1='Not Mention';
		}
		else
		{
		$state1=$state;
		}
		
		
		
		$city = $rowprofile['city'];
		if($city=="")
		{
		 $city1='Not Mention';
		}
		else
		{
		$city1=$city;
		}
		$aboutus = $rowprofile['about_us'];
		if($aboutus=="")
		{
		 $aboutus1='Not Mention';
		}
		else
		{
		$aboutus1=$aboutus;
		}
	 }
	
	?>
	
	<div class = "container-fluid" id = "profile">
	<label id = "title">SHUBHVIVAH</label>
	
	</label>
	<hr/>
	
	</label>
	  <div class = "col-md-4">
	 <label class = "profiletitle">User Id</label><br/>
	 <label class = "profiletitle">Culture</label><br/>
	 <label class = "profiletitle">Education</label><br/>
	 <label class = "profiletitle">Education Field</label><br/>
	 <label class = "profiletitle">Profession</label><br/>
	 <label class = "profiletitle">Monthly Income</label><br/>
	 <label class = "profiletitle">Working With</label><br/>
	 
	 <label class = "profiletitle">state</label><br/>
	 <label class = "profiletitle">city</label><br/>
	 <label class = "profiletitle">About Myself</label><br/>
	 
	 </div>
	  <div class = "col-md-4">
	  <?php
	 echo '<label class = "pro">'.$user_id.'</label><br/>';
	  echo '<label class = "pro">'.$culture1.'</label><br/>';
	 echo '<label class = "pro">'.$education1.'</label><br/>';
	 echo '<label class = "pro">'.$education_field1.'</label><br/>';
	 echo'<label class = "pro">'.$profession1.'</label><br/>';
	 echo '<label class = "pro">'.$income1.'</label><br/>';
	 echo '<label class = "pro">'.$working1.'</label><br/>';
	 echo '<label class = "pro">'.$state1.'</label><br/>';
	 echo '<label class = "pro">'.$city1.'</label><br/>';
	echo '<label class = "pro">'.$aboutus1.'</label><br/>';
	 ?>
	 </div>
	 <div class = "col-md-4">
	
	 </div>
	 </div>
    </div>
	<?php
}      
else
{
	header('Location:loginpage.php');
}
include_once('footer.php');
?>


</body>
</html>