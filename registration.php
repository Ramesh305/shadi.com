<?php
error_reporting(0);
include_once("connectioncore.php");
$sql='select * from states';
$rs=mysql_query($sql);
session_start();
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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>registration form</title>
<link rel="stylesheet" href="../bootstrap-3.3.2-dist/css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="../bootstrap-3.3.2-dist/js/bootstrap.min.js" type="text/javascript" />
<link rel="stylesheet" href="bootstrap-3.3.2-dist/jquery/jquery-1.9.1.min.js"/>
<link rel="stylesheet" href="aboutus.css" type="text/css" />
</head>
<body>

<?php 

include ('headermain.php');
require_once('home_header.php'); ?>
<div class="container-fluid">
<div class="row">
<div class="registrationtitle" align="center">Register free</div>
</div>
</div>
<form id="form" enctype="multipart/form-data" name="form" method="post" >
     
          <div class="row">
             <div class="table-responsive">
            <table class="table" id="registration_form">
            <tr>
              <td colspan="2" bgcolor="#00CC00" class="column2">Account Information</td>
</tr>
            <tr>
    <td class="column1">Email<label class="text-danger"> * </label></td>
    <td><input type="text" id="email" placeholder="Email id" name="email"/>&nbsp;
	<?php 
	
	    if(isset($_POST['Register']))
		if(isset($_POST['email'])=="")
	    {
	       echo '<label class="text-danger"> *Please fill email</label><br>';
	    }
	    else
	   {
	 if(preg_match("^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$^",$_POST['email']))
	 {
	 echo '<label class="text-danger"> *Please fill valid Email Id</label><br>';
	 }
	 }
	?>
	</td>
  </tr>
  <tr>
    <td class="column1">Password <label class="text-danger"> * </label></td>
    <td><input type="password" id="pass" placeholder="Password" name="pass" />&nbsp;
    <?php 
	if(isset($_POST['Register']))
	if(isset($_POST['pass'])==" ")
	{
	echo '<label class="text-danger"> *Please fill Password</label><br>';
	}
	if(isset($_POST['Register']))
	if(strlen($_POST['pass']==1 && $_POST['pass']< 10))
	{
	echo 'Password is too short!!!<br>';
	}
    ?></td>
  </tr>
  <tr>
    <td class="column1">Confirm Password<label class="text-danger"> *</label></td>
    <td><input type="password" id="confirm password" placeholder="confirm password" name="cpass" />&nbsp;
	<?php 
	if(isset($_POST['Register']))
	if(isset($_POST['cpass'])==" ")
	{
	echo '<label class="text-danger"> *Please fill Password</label><br>';}
	?></td>
  </tr>
  <tr>
    <td class="column1">First Name<label class="text-danger"> *</label></td>
    <td><input type="text" id="Frist Name" placeholder="First Name" name="fname" />&nbsp;
    <?php
    if(isset($_POST['Register']))
	if(isset($_POST['fname'])==" ")
	{
	echo '<label class="text-danger"> *Please fill Frist Name <br></label>';
	}
	?>
    </td>
  </tr>
  <tr>
    <td class="column1">Last Name<label class="text-danger"> *</label></td>
    <td><input type="text" id="Last Name" placeholder="Last Name" name="lname" />
    &nbsp;
     <?php
    if(isset($_POST['Register']))
	if(isset($_POST['lname'])==" ")
	{
	echo '<label class="text-danger"> *Please fill Last Name <br></label>';
	}
	?>
    </td>
  </tr>
  <tr>
    <td class="column1">Gender<label class="text-danger"> *</label> </td>
    <td>
	<input type="radio" id="gender" name="gender" value="Male" />Male &nbsp;&nbsp;
    <input type="radio" id="gender" name="gender" value="Female" />Female &nbsp;&nbsp;
	&nbsp;&nbsp;
	<?php
	if(isset($_POST['Register']))

if(!isset($_POST['gen']))
{
	echo '<label class="text-danger"> *Please Select Gender </lable>';
 }
 		?>
    </td>
  </tr>
 
  <tr>
    <td class="column1">DOB </td>
    <td><input type="" name="dd" id="dd" placeholder="dd/mm/yyyy" /></td>
	
    <!--/*<select name="dd" id="dd">
    <option>DD</option>
    <?php  
	for($i=1;$i<=31;$i++)
	echo "<option> $i </option>";
	?>
    </select>
    <select name="mm" id="mm">
    <option>MM</option>
    <?php  
	for($i=1;$i<=12;$i++)
	echo "<option> $i </option>";
	?>
    </select>
    <select name="yyyy" id="yyyy">
	<option>YYYY</option>
    <?php  
	for($i=1945;$i<=1998;$i++)
	echo "<option> $i </option>";
	?>
    </select>*/-->
   <!-- &nbsp;<label class = "text-danger"><?php
						if(isset($_POST['Register']))
							if(($_POST['dd'])=="")
							{
		                     echo'Select date';
	                        }
							?>
  </td>-->
  
  
  </tr>
  <tr>
    <td class="column1">Profile for</td>
    <td>
    	<select name="profile" id="profile_for">
        <option value="">--select profile for--</option>
        <option>Self</option>
        <option>Brother</option>
        <option>Sister</option>
        <option>Relative</option>
        <option>Daughter</option>
        <option>Son</option>
        </select>
        <?php
						if(isset($_POST['Register']))
							if(isset($_POST['profile_for'])=="")
							{
		                     echo'<label class="text-danger">*Please Select profile for</label>';
	                        }
							
						?>
     </td>
  </tr>
  <tr>
    <td class="column1">Religion</td>
    <td>
    <select name="religion" size="1" id="religion">
	  <option value="">--select religion--</option>
	<option>Hindu</option>
	<option>Sikh</option>
	<option>Christian</option>
	<option>Muslim</option>
	<option>Jain</option>
	<option>Buddhist</option>
	<option>Atheist</option>
	<option>Other Religion</option>
    </select>
    <?php
						if(isset($_POST['Register']))
							if(($_POST['religion'])=="")
							{
		                     echo'<label class="text-danger">*Please Select religion</label>';
	                        }
							
						?>
    </td></tr>
    <tr>
    <td class="column1">Marital status</td>
    <td>
    <select name="marital_status" id="marital_status">
          <option value="">--select status--</option>
		  <option>Unmarried</option>
          <option>Widow</option>
          <option>Divorced</option>
          <option>Annueld</option>       
          </select>
        <?php
						if(isset($_POST['Register']))
							if(($_POST['marital_status'])=="")
							{
		                     echo'<label class="text-danger">*Please Select status</label>';
	                        }
							
						?>
    </td>
  </tr>
  <tr>
  <td class="column1">Caste</td>
  <td>
  <select name = "caste" id="caste">
  <option value = "">--Select Caste--</option>
  <option>Agrawal</option>
		  <option>Rajput</option>
		  <option>Jain</option>
		  <option>Bhrahman</option>
		  <option>Yadav</option>
		  <option>Saini</option>
		  <option>Sunar</option>
		  <option>Lohana</option>
		  <option>Mahar</option>
		  <option>Antil</option>
		  <option>Ahir</option>
		  <option>Dalit</option>
		  <option>Chaudhri</option>
		  <option>Iyer</option>
		  <option>Dangi</option>
		  <option>Maheshwari</option>
		  <option>Kayasth</option>
		  <option>Others</option>
		  </select>
		  </td>
		  </tr>
  <tr>
    <td class="column1">Mother Tongue</td>
    <td>
    
        <select name="mother_tongue" id="mother_tongue">
          <option>--select mother tongue--</option>
          
	<option>Arabic</option>
	<option>Assamese</option>
	<option>Bangali</option>
	<option>Bhojpiri</option>
	<option>Bodo</option>
	<option>Dogri</option>
	<option>French</option>
	<option>Garhwaki</option>
	<option>German</option>
	<option>Gujarati</option>
	<option>Himanchali</option>
	<option>Haryanvi</option>
	<option>Hindi</option>
	<option>Cannada</option>
	<option>Kashmiri</option>
	<option>Konkani</option>
	<option>Kumaoni</option>
	<option>Malyalam</option>
	<option>Maithali</option>
	<option>Manipuri</option>
        </select>
      <?php
						if(isset($_POST['Register']))
							if(($_POST['mother_tongue'])=="")
							{
		                     echo'<label class="text-danger">*Please Select mother tongue</label>';
	                        }
							
						?>
    </td>
  </tr>
  
 
  <tr>
    <td class="column1">Mobile Number<label class="text-danger"> *</label></td>
    <td><input type="text" id="mobile_number" placeholder="Mobile number" name = "mobile_number" />
	<?php
		if(isset($_POST['Register']))
		if(($_POST['phone']) == "" && (strlen($_POST['phone']))!= 10)
	      {
		   echo'<label class="text-danger">*Please enter the 10 digit phone number</lable>';
		  }
	?>
</td>
  </tr>
  <tr>
    <td class="column1">State Living In </td>
    <td><select name="living_in" id="living_in">
	
        <option>--Select living in--</option>
		<?php
		while($row=mysql_fetch_array($rs))
		{
		echo '<option>'.$row['State'].'</option>';
		}
		
		?>
		
		
      </select>
      <?php
						if(isset($_POST['Register']))
						
							if(($_POST['living_in'])=="")
							{
		                     echo'<label class="text-danger">*Please Select living in</label>';
	                        }
							
						?>
      </td>
  </tr>
  <tr>
  <td class="column1">Uploade Your Photo</td>
  <td><input type="file" name="file" id="file" /></td>
  </tr>
  
<tr>
    <td colspan="2">
        <input type="checkbox" name="agree" id="agree" />
I agree with all terms & conditions <label class="text-danger"> *</label></td>
</tr>
<tr>
<td><input type="submit" id="Register" name="Register" value="Register"/></td>
<td> </td></tr>

</table>

</div>

</div>
</form>
<div class="row">
<?php include ('footer.php'); 
?> </div>
</div>  
 </body>
 </html>