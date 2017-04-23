<?php
session_start();
include_once('connectioncore.php');
error_reporting(0);
if($_SESSION['current_state']== "true")
{
if(isset($_POST['submit3']))
{

if(($_POST['marital_status'] == "")||($_POST['caste'] == "")||($_POST['mother_tongue'] == "")||($_POST['religion'] == "")||($_POST['age'] == "")||($_POST['age2'] == "") ||($_POST['height'] == "") || ($_POST['height2'] == ""))
{
	$error= 'please select all  field!!!!';
	
}
else
{

  	$_SESSION['search_marital'] = $_POST['marital_status'];
	$_SESSION['search_caste'] = $_POST['caste'];
	$_SESSION['search_tongue'] = $_POST['mother_tongue'];
	$_SESSION['search_religion'] = $_POST['religion'];
    $_SESSION['search_age'] = $_POST['age'];
	$_SESSION['search_age2'] = $_POST['age2'];
	 $_SESSION['search_height'] = $_POST['height'];
	$_SESSION['search_height2'] = $_POST['height2'];
	header('Location:quick_search_login.php');
}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../bootstrap-3.3.2-dist/css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="../bootstrap-3.3.2-dist/js/bootstrap.min.js" type="text/javascript" />
<link rel="stylesheet" href="aboutus.css" type="text/css" />
<title>quick search</title>
</head>
<body>
<div class="row">
<?php include ('headermain.php'); ?></div>
<div class="row">
<?php include ('uppermenu.php'); ?> </div>
<div class="container">

<form id="form1" name="form1" method="post" action="">
  
             <div class="table-responsive">
             <div id="title"> Quick Search</div>
            <table class="table" align="center">
            
  <tr> <td colspan="2" class="column2">Find your life patner with Quick Search <p style="color:#FF0000;"><?php echo $error; ?></p></td></tr>
  
    <tr>
	
      <td class="column1">Age </td>
      <td>
        <select name="age" id="age">
		<option value = "">--</option>
        
       <?php
		for($i=18;$i<=80;$i++)
		echo "<option> $i </option>";
		?>
        </select> 		
   
        to 
          <select name="age2" id="age2">
           <option value = "">--</option>
          <?php
		for($i=18;$i<=80;$i++)
		{
			echo "<option> $i </option>";
		}
		?>
          </select>
          
        </td>
    </tr>
    <tr>
      <td class="column1">Height</td>
      <td>
        <select name="height" id="height">
        <option value = "">Please select....</option>
        <?php 
			for($i=3;$i<=9;$i++)
			 {
				 for($j=0;$j<=9;$j++)
				 echo '<option>'.$i.' ft '.$j.' inch</option><br/>';
			 }?>

        </select>
      
        to 
       
          <select name="height2" id="height2">
          <option value = "">--Please select--</option>
        <?php 
			for($i=3;$i<=7;$i++)
			 {
				 for($j=0;$j<=9;$j++)
				 echo '<option>'.$i.' ft '.$j.' inch'.'</option><br/>';
			 }?>
          </select>
                    
          
        </td>
    </tr>
    <tr>
      <td class="column1">Marital status </td>
      <td>
        <select name="marital_status" id="marital status">
          <option>--select status--</option>
          <option>Unmarried</option>
          <option>Widow</option>
          <option>Divorced</option>
          <option>Annueld</option>
        </select>
      </td>
    </tr>
    <tr>
      <td class="column1">Religion <label class="text-danger">*</label></td>
      <td>
        <select name="religion" id="religion">
          <option value="">--select religion--</option>
          <option>Hindu</option>
      <option>Muslim</option>
      <option>Jain</option>
      <option>Sikh</option>
      <option>Cristian</option>
      <option>Parsi</option>
          </select>
	   
      </td>
    </tr>
    <tr>
      <td class="column1">Caste<label class="text-danger">*</label></td>
      <td>
        <select name="caste" id="caste">
          <option value="">--select caste--</option>
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
      <td class="column1">Mother Tongue<label class="text-danger">*</label></td>
      <td>
        <select name="mother_tongue" id="mother tongue">
          <option value="">--select mother tongue--</option>
          <option>Select</option>
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
          
      </td>
    </tr>
    
    
    <tr>
      <td colspan="2"><input type="submit"  name="submit3" id="submit3" value="Search"/></td>
    </tr>
  </table>
  </div>
</form>
</div>
<div class="row">
<?php include ('footer.php'); ?> </div>

</body>
</html>
<?php
}      
else
{
	header('Location:loginpage.php');
}?>