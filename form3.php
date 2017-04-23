<?php
error_reporting(0);
session_start();
require_once('connectioncore.php');

$query="select max(user_id) from registration";
$rsf=mysql_query($query);

if(isset($_POST['submit']))
{
$user_id = $_POST['user_id'];
$culture = $_POST['culture'];
$education = $_POST['education'];
$education_field = $_POST['education_field'];
$profession = $_POST['profession'];
$monthly_income = $_POST['monthly_income'];
$working = $_POST['working'];
$state = $_POST['state'];
$city = $_POST['city'];
$phone = $_POST['phone'];
$privacy = $_POST['privacy'];
$aboutMyself = $_POST['aboutMyself'];
$sql="insert into create_profile values('$user_id','$culture','$education','$education_field','$profession','$monthly_income','$working','$state','$city','$phone','$privacy','$aboutMyself')";
$rs=mysql_query($sql);
$height = $_POST['height'];
$weight = $_POST['weight'];
$built = $_POST['built'];
$complexion = $_POST['complexion'];
$eye_color = $_POST['eye_color'];
$hair_color = $_POST['hair_color'];
$diet = $_POST['diet'];
$drink = $_POST['drink'];
$smoke = $_POST['smoke'];
$sql3="insert into other_details values('$user_id','$height','$weight','$built','$complexion','$eye_color','$hair_color','$diet','$drink','$smoke')";
$rs3=mysql_query($sql3);
if($rs)
{
header('location:profile.php');
}
else{
header('location:form3.php');
}
}
if(isset($_POST['submit']))
{
if(($_POST['culture'])=="")
{
 $culture_text = 'Select culture';
  }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>SHUBHVIVAH</title>
<link rel="stylesheet" href="bootstrap-3.3.2-dist/css/bootstrap.min.css" />
<link rel="stylesheet" href="bootstrap-3.3.2-dist/js/bootstrap.min.js" />
<link rel="stylesheet" href="aboutus.css" type="text/css" />
<script type="text/javascript">
function getRecords(str)
	{
		//alert(state_id);
		if(str=="")
		{
			
			return false;
		}
		
		if(window.XMLHttpRequest)
		{
			var xmlhttp=new XMLHttpRequest();
			xmlhttp.onreadystatechange=function()
			{
				if(xmlhttp.readyState==4 && xmlhttp.status==200)
				{
					document.getElementById('education_field').innerHTML=xmlhttp.responseText;
				}
			}
			xmlhttp.open("GET","getrecords.php?id="+str,true);
			xmlhttp.send();
		}
	}
	
</script>
</head>
<body>

			<?php
           				
			include('headermain.php');
				  
			?>
	    
<form method = "post">
<div class = "container">
<div class = "row">
<p class = "create_profile_title">create profile</p>
<div class = "col-md-8" id = "all_information">
			<p class="profile_information">Personal information</p>
				<hr/>
				
			<input type="hidden" name = "user_id" id="user_id"  value="<?php while($row1=mysql_fetch_array($rsf))
{
echo $row1[0];
} ?>" />

		
				    
						<div class = "row">
						<div class="col-md-3">
						<p class="info">Culture
						<label class = "text-danger"><font  size = "4">*</font>
						</p>
						
						</div><!--closing of column-->
						
						
					<div class = "col-md 9">
						<select name="culture" size="1" class="listbox">
							<option value="">Please select....</option>
							<option>Bihari</option>
							<option>Bengali</option>
							<option>Hindi</option>
							<option>Gujrati</option>
							<option>Kannada</option>
							<option>Malyalam</option>
							<option>Oriya</option>
							<option>Punjabi</option>
							<option>Rajasthani</option>
							<option>Tamil</option>
							<option>Telugu</option>
							<option>Konkani</option>
							<option>Himachali</option>
							<option>Haryanvi</option>
							<option>Assamese</option>
							<option>Kashmiri</option>
							<option>Sikkim/Nepali</option>
							
						</select>&nbsp;<label class = "text-danger"><?php
						echo $culture_text;
						?>
						</label>
					
					</div><!--closing of column-->
					</div><hr/><!--closing of row-->
					
		    <p class="profile_information">Education & Career</p><hr/>
			<div class = "row">
		     <div class="col-md-3">
			   <p class="info">Education<label class = "text-danger"><font  size = "4">*</font>
			   
			   
			   </p>
			</div><!--closing of column-->
			<div class="col-md-9">
			<select name="education" id="education" class="listbox" onchange = "getRecords(this.value)">		
			
			     <option value="<?php echo $row['ed_name']; ?>">Please select....</option>
				 <?php
				 $sqledu = "select * from education";
                 $rsedu = mysql_query($sqledu);
				 while($row = mysql_fetch_array($rsedu))
				{
					echo'<option value = "'.$row['id'].'">'.$row['ed_name'].'</option><br/>';
				}
                 ?>
			</select>&nbsp;<label class = "text-danger"><?php
						if(isset($_POST['submit']))
						{
							if(($_POST['education'])=="")
							{
		                     echo'Select education';
	                        }
						}	
						?>
						</label>
            </div><!--closing of column-->
			</div><hr/><!--closing of row-->
			<div class="row">
		 <div class="col-lg-3">
		 <p class="info">Education field<label class = "text-danger"><font  size = "4">*</font>
			   </label>
		 
		 
		 </p>
		 </div>
		 <div class="col-lg-9">
		   <select name="education_field" size="1" class="listbox" id = "education_field">
			     <option value="">Please select....</option>
			</select>&nbsp;<label class = "text-danger"><?php
						if(isset($_POST['submit']))
						{
							if(($_POST['education_field'])=="")
							{
		                     echo'* Select education field';
	                        }
						}
						?>
						</label>
		 </div><!--closing of column-->
	     </div><hr/><!--closing of row-->
			<div class = "row">
			<div class = "col-md-3">
		 <p class="info"> Profession<label class = "text-danger"><font  size = "4">*</font>
			   </label>
		 
		 
		 </p>
		 
		 </div><!--closing of column-->
		 
		 
		 <div class = "col-lg-9">
		   <select name="profession" size="1" class="listbox">
				 <option value="">Please select....</option>
				 <option>Doctor</option>
				 <option>Engineer</option>
				 <option>Scientist</option>
				 <option>Reasercher</option>
				 <option>Businessmen</option>
				 <option>Employer</option>
				 <option>others</option>
			</select>&nbsp;<label class = "text-danger"><?php
						if(isset($_POST['submit']))
							if(($_POST['profession'])=="")
							{
		                     echo'Select profession';
	                        }
							
						?>
						</label>
		 </div><!--closing of column-->
		 </div><hr/><!--closing of row-->
		 <div class="row">
		 <div class="col-lg-3">
		 <p class="info"> Monthly income<label class = "text-danger"><font  size = "4">*</font>
			   </label>
		 
		 
		 </p>
		 </div>
		 <div class="col-lg-9">
		     <input type = "text" name = "monthly_income"/>
			</select>&nbsp;<label class = "text-danger"><?php
						if(isset($_POST['submit']))
							if(($_POST['monthly_income'])=="")
							{
		                     echo'* please enter monthly income';
	                        }
							
						?>
						</label>
		 </div><!--closing of column-->
		 </div><!--closing of row--><hr/>
		 <div class="row">
		 <div class="col-lg-3">
		 <p class="info">Working with<label class = "text-danger"><font  size = "4">*</font>
			   </label>
		 
		 
		 </p>
		 </div>
		 <div class="col-lg-9">
		   <select name="working" size="1" class="listbox">
			     <option value="">Please select....</option>
				 <option>Government</option>
				 <option>private</option>
			</select>&nbsp;<label class = "text-danger"><?php
						if(isset($_POST['submit']))
							if(($_POST['working'])=="")
							{
		                     echo'* Select working in';
	                        }
							
						?>
						</label>
		 </div><!--closing of column-->
		 </div><!--closing of row--><hr/>
		  
		   
			
		    <p class="profile_information">Location & Contact</p><hr/>
			<div class = "row">
		     <div class="col-lg-3">
			   <p class="info">State/Province<label class = "text-danger"><font  size

			   = "4">*</font>
			   </label>
			  
						</label>
			   
			   </p>
			</div><!--closing of column-->
			<div class = "col-md-9">
			<select name = "state" size="1" class="listbox">
			<option value="">Please select....</option>
			<?php 
				$sqlstate = "select * from states where CountryID = 1";
				$rsstate = mysql_query($sqlstate);
					while($row = mysql_fetch_array($rsstate))
				{
					echo'<option value = "'.$row['State'].'">'.$row['State'].'</option><br/>';
				}
				
				?>	
	
			 
			</select> &nbsp;<label class = "text-danger"><?php
						if(isset($_POST['submit']))
							if(($_POST['state'])=="")
							{
		                     echo'Select state';
	                        }
							
						?>
             </div><!--closing of column-->
			 </div><hr/><!--closing of row-->
			 <div class= "row">
			 <div class = "col-md-3">
			  <p class="info">City<label class = "text-danger"><font  size = "4">*</font>
			   </label>
			 
			  </p>
			</div><!--closing of column-->
			<div class = "col-md-9">
			   <select name="city" size="1" class="listbox">
			     <option value="">Please select....</option>
				 <?php 
				$sqlcity = "select * from cities where CountryID = 1";
				$rscity = mysql_query($sqlcity);
					while($row = mysql_fetch_array($rscity))
				{
					echo'<option value = "'.$row['City'].'">'.$row['City'].'</option><br/>';
				}
				
				?>	
			</select> &nbsp;<label class = "text-danger"><?php
						if(isset($_POST['submit']))
							if(($_POST['city'])=="")
							{
		                     echo'Select city';
	                        }
							
						?>
						</label>
			  </div><!--closing of column-->
			  </div><hr/><!--closing of row-->
			<div class = "row">
			<div class = "col-md-3">
			<p class="info">Cell Phone No.<label class = "text-danger"><font  size = "4">*</font>
			   </label></p>
			</div><!--closing of column-->
			<div class="col-lg-9">
			<input type="text" class="listbox" name = "phone" />&nbsp;<label class = "text-danger">
			<?php
						if(isset($_POST['submit']))
							if(($_POST['phone']) == "" &&(strlen($_POST['phone']))!= 10)
	                     {
		                       echo'Please enter the 10 digit phone number';
		
	                     }
						
						?>
						</label>
			</div><!--closing of column-->
			</div><hr/><!--closing of row-->
		     <p class="text-danger">
			 Note: Please give contact no of the person who will be              responsible for handling matrimonial inquires</p>
		    <div class = "row">
		    <div class = "col-md-3">
			<p class="info">Phone No Privacy<label class = "text-danger"><font  size = "4">*</font>
			   </label>

			</p>
		 </div><!--closing of column-->
		 <div class = "col-md-9">
		    <input type="radio" name="privacy" value="protected" />
		    protected
		 
		    <input type="radio" name="privacy" value="public" />
		    public
			&nbsp;<label class = "text-danger"><?php
						if(isset($_POST['submit']))
							if(isset($_POST['privacy']) == "")
	                     {
		                       echo'Select phone number privacy';
		
	                     }
						
						?>
						</label>
		  </p>
		  </div><!--closing of column-->
		  </div><hr/><!--closing of row-->
		    <p class="profile_information">About Myself 
			<label class = "text-danger"><font  size = "4">*</font>
			   </label>
			</p><hr/>
		     
			<div class = "row" align="center">
			<textarea name="aboutMyself" cols="50" rows="5" id="aboutmyself" placeholder=" Text about your self" ></textarea><br />		&nbsp;<label class = "text-danger"></label><?php
						if(isset($_POST['submit']))
							if(($_POST['aboutMyself']) == "")
	                     {
		                       echo'Enter your description';
		
	                     }

						?>
						</div><!--closing of row-->
            </div><!--closing of main column-->	
					
	<div class = "col-md-4">
<div id="otherdetails" class = "table-responsive">
		    
			<table class = "otherdetailstable">
			<tr><h1>Other details</h1></tr><hr/><br/>
			<tr><p class="detailspara">Height</p>
			
			<select size="1" id="height" name="height"><hr/>
			<option value = "">Please select....</option>
			<?php 
			for($i=3;$i<=9;$i++)
			 {
				 for($j = 1;$j<=9;$j++)
				 echo '<option>'.$i.' ft '.$j.' inch</option><br/>';
			 }?>
			</select> </tr><hr/>
			<tr><p class ="detailspara">Weight</p>
		    <select size="1" id="weight" name="weight"><hr/>
			<option value = "">Please select....</option> 
			<?php
			 for($i=40;$i<=300;$i++)
			 {
				 echo '<option>'.$i.' kg</option><br/>';
			 }
			 ?>
			</select> </tr><hr/>
			<tr><p class ="detailspara">Built</p>
			 <select size="1" id="built" name="built"><hr/>
			<option>Please select....</option>
			<option>Tall</option>
			<option>slim</option>
			<option>little</option>
			<option>fat</option>
			</select></tr><hr/>
			<tr><p class ="detailspara">Complexion</p> 
			<select size="1" id="complexion" name="complexion"><hr/>
			<option value = "">Please select....</option>
			<option>very fair</option>
			<option>fair</option>
			<option>Wheatish</option>
			<option>dark</option>
			<option></option>
			</select></tr><hr/>
			<tr><p class ="detailspara">Eye color</p>
			 <select  size="1" id="eye_color" name="eye_color"><hr/>
			<option value = "">Please select....</option>
			<option>Black</option>
			<option>Brown</option>
			<option>Blue</option>
			<option>Red</option>
			</select></tr><hr/>
			<tr><p class ="detailspara">Hair color</p>
			 <select  size="1" id="hair_color" name="hair_color"><hr/>
			<option value = "">Please select....</option>
			<option>Black</option>
			<option>Brown</option>
			<option>White</option>
			<option>Red</option>
			</select></tr><hr/>
			<tr><p class ="detailspara">Diet</p> 
			<select  size="1" id="diet" name="diet"><hr/>
			<option value = "">Please select....</option>
			<option>Vegeterian</option>
			<option>Non Vegeterian</option>
			</select></tr><hr/>
			<tr><p class ="detailspara">Drink</p> 
			<select  size="1" id="drink" name="drink"><hr/>
			<option value = "">Please select....</option>
			<option>Always</option>
			<option>Sometimes</option>
			<option>Do not drink</option>
			</select></tr><hr/>
			<tr><p class ="detailspara">Smoke</p> 
			<select  size="1" id="smoke" name="smoke"><hr/>
			<option value = "">Please select....</option>
			<option>Always</option>
			<option>Sometimes</option>
			<option>Do not smoke</option>
			</select></tr>
			</table>
			</div>
			<div id="agreement">
			   <p> I affirm that I have read & agree
                to the Shubhvivah.com Privacy Policy and
                Member Terms & Conditions. I
               consent to the processing of my
                personal data for the purpose of
                providing me with the Shubhvivah.com matchmaking services.</p>
			  <p> <button type="submit" id="submit1" class="btn btn-success" name = "submit">Submit</button></p>
			</div> <!--closing of otherdetails division-->
			</div><!--closing of other details column-->
</div><!--closing of row-->
</div><!--closing of container division-->
</form>
<div class="row">
<?php include ('footer.php'); ?> </div>
</div>  

</body>
</html>
