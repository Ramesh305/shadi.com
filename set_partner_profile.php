<?php
session_start();
if($_SESSION['current_state']== "true")
{
include_once('connectioncore.php');
if(isset($_POST['submit1']))
{

$dob = $_POST['dob'];
$marital_status = $_POST['marital_status'];
$religion = $_POST['religion'];
$fheight = $_POST['fheight'];
$height = $_POST['height'];
$mother_tongue = $_POST['mother_tongue'];
if(($dob=="")&&($marital_status=="")&&($fheight=="")&&($height=="")&&($mother_tongue==""))
{
 $error = '<p style="color:red;">Please select all fields!!!</p>';
}
else
{
$sql = "insert into set_partner_profile values
(NULL,'$dob','$marital_status','$religion','$fheight','$height','$mother_tongue')";
$rs=mysql_query($sql);
if($rs)
{
$error = '<p style="color:red;">Records Inserted!!!</p>';
}
else
{
$error='<p style="color:red;">Records not inserted!!!</p>';
}
}
}



?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SHUBHVIVAH</title>
</head>

<body>
       <?php include ('headermain.php'); ?>
<?php include ('uppermenu.php'); ?>
      
 <div class="container">
 <form id="form1" name="form1" method="post" enctype="multipart/form-data">  
 
  <div class="row" id="partner_profile_title">
Set Partner Profile
</div>
<div class="table-responsive">
 <table border="0" cellspacing="0" cellpadding="0" align="center" id="advancesearch">
  <tr> <td colspan="2" bgcolor="#009900" class="column2">Fill Advance Search details for find life patner<p><?php echo $error; ?></p></td> </tr>

    <tr>
      <td class="column1">Date Of Birth</td>
      <td>
        <input type="text" name="dob" id="dob" placeholder="YYYY/MM/DD" value="" />
      </td>
    </tr>
    <tr>
      <td class="column1">Marital Status</td>
      <td>
        <select name="marital_status" id="marital_status">
        <option value="">--select status--</option>
        <option>Unmarried</option>
        <option>Widowed</option>
        <option>Annuled</option>
        <option>Divorced</option>
        </select>
      </td>
    </tr>
    <tr>
      <td class="column1">Religion</td>
      <td>
        <select name="religion" id="religion">
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
        </select>
      </td>
    </tr>
    <tr>
      <td class="column1">Height</td>
      <td>
        <select name="fheight" id="fheight">
      <option value = "">Please select....</option>
			<?php 
			for($i=3;$i<=9;$i++)
			 {
				 for($j = 1;$j<=9;$j++)
				 echo '<option>'.$i.' ft '.$j.' inch</option><br/>';
			 }?> 
        </select>     
             to 
       
          <select name="height" id="height">
          <option value = "">Please select....</option>
			<?php 
			for($i=3;$i<=9;$i++)
			 {
				 for($j = 1;$j<=9;$j++)
				 echo '<option>'.$i.' ft '.$j.' inch</option><br/>';
			 }?> 
             
          </select>
        
      </td>
    </tr>
    <tr>
      <td class="column1">Mother tongue</td>
      <td>
        <select name="mother_tongue" id="mother_tongue">
         <option value="">--select status--</option>
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
      
      <td colspan="2"><input type="submit" name="submit1" id="submit1" value="Submit"/></td>
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