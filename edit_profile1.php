
<?php 
session_start();
if($_SESSION['current_state']== "true")
{
error_reporting(0);
$id=$_SESSION['UserId'];
require_once('connectioncore.php');
 $query_edit = "select * from create_profile where user_id ='$id'";
$rsf_edit = mysql_query($query_edit);
while($row_edit = mysql_fetch_array($rsf_edit))
{
$row_lang = $row_edit['culture'];
$row_edu = $row_edit['education'];
$row_eduf = $row_edit['education_faild'];
$row_pro = $row_edit['profession'];
$row_income = $row_edit['income'];
$row_working = $row_edit['working'];
$row_state = $row_edit['state'];
$row_city = $row_edit['city'];
$row_mob = $row_edit['phone_no'];
$row_about = $row_edit['about_us'];

}


if(isset($_POST['update']))
{
$culture = $_POST['culture'];
$education = $_POST['education'];
$education_field = $_POST['education_field'];
$profession = $_POST['profession'];
$monthly_income = $_POST['monthly_income'];
$working = $_POST['working'];
$state = $_POST['state'];
$city = $_POST['city'];
$phone = $_POST['phone'];
$pri = $_POST['privacy'];
$aboutMyself = $_POST['aboutMyself'];
$sql="update create_profile set culture='$culture',education='$education',education_faild='$education_field',profession='$profession',income=$monthly_income,working='$working',state='$state',city='$city',phone_no=$phone,phone_privacy='$pri',about_us='$aboutMyself' where user_id=".$id;
$rs=mysql_query($sql);
if($rs)
{
echo "Record updated.....";
}
else{
echo "Record not updated.....";
}
}

 ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>SHUBHVIVAH</title>
<link rel="stylesheet" href="../bootstrap-3.3.2-dist/css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="../bootstrap-3.3.2-dist/js/bootstrap.min.js" type="text/javascript" />
<link rel = "stylesheet" href="aboutus.css"/>
<!--<style type="text/css">
<!--
.style2 {font-size: medium}
.style5 {font-size: x-large; font-style: italic; font-weight: bold; }
-->
</style>
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
<?php require_once('uppermenu.php');?>
<div class="container">
<div class="table-responsibe" style="width:auto; height:auto;">
<form method="post">
  <table id="edit_profile_table">
    
    <tr>
      <td class="column1"><div align="right" class="style5">culture </div></td>
      <td>&nbsp;</td>
      <td><select name="culture" size="1" class="listbox">
	    <option value="" disabled selected><?php 
		echo $row_lang;
		?></option>
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
							
							
							
							
							
						</select>						</td>
    </tr>
    <tr>
      <td class="column1"><div align="right" class="style5">Education</div></td>
      <td>&nbsp;</td>
      <td><select name="education" size="1" id="education" class="listbox" onchange = "getRecords(this.value)">		
				<option value=""><?php echo $row_edu; ?></option>
			     <option value="">Please select....</option>
				 <?php
				 $sqledu = "select * from education";
                 $rsedu = mysql_query($sqledu);
				 while($row = mysql_fetch_array($rsedu))
				{
					echo'<option value = "'.$row['id'].'">'.$row['ed_name'].'</option><br/>';
				}
                 ?>
			</select>			</td>
    </tr>
    <tr>
      <td class="column1"><div align="right" class="style5">Education Field </div></td>
      <td>&nbsp;</td>
      <td> <select name="education_field" size="1" class="listbox" id = "education_field">
			     <option><?php echo $row_eduf; ?></option>
				 <option value="">Please select....</option>
			</select>			</td>
    </tr>
    <tr>
      <td class="column1"><div align="right" class="style5">Profession </div></td>
      <td>&nbsp;</td>
      <td><select name="profession" size="1" class="listbox">
	  <option><?php echo $row_pro;  ?></option>
				 <option value="">Please select....</option>
				 <option>Doctor</option>
				 <option>Engineer</option>
				 <option>Scientist</option>
				 <option>Reasercher</option>
				 <option>Businessmen</option>
				 <option>Employer</option>
				 <option>others</option>
			</select>			</td>
    </tr>
    <tr>
      <td class="column1"><div align="right" class="style5">Monthly Income</div></td>
      <td>&nbsp;</td>
      <td> <input type = "text" name = "monthly_income" value="<?php echo $row_income;   ?>"/></td>
    </tr>
    <tr>
      <td class="column1"><div align="right" class="style5">Working</div></td>
      <td>&nbsp;</td>
      <td><select name="working" size="1" class="listbox">
			     <option value="" disabled selected><?php echo $row_working;?></option>
				 <option value="">Please select....</option>
				 <option>Government</option>
				 <option>private</option>
			</select>			</td>
    </tr>
    <tr>
      <td class="column1"><div align="right" class="style5">State</div></td>
      <td>&nbsp;</td>
      <td><select name = "state" size="1" class="listbox">
	  <option value="" disabled selected><?php echo $row_state;?></option>
			<option value="">Please select....</option>
			<?php 
				$sqlstate = "select * from states where CountryID = 1";
				$rsstate = mysql_query($sqlstate);
					while($row = mysql_fetch_array($rsstate))
				{
					echo'<option value = "'.$row['State'].'">'.$row['State'].'</option><br/>';
				}
				
				?>	
	
			 
			</select></td>
    </tr>
    <tr>
      <td class="column1"><div align="right" class="style5">City </div></td>
      <td>&nbsp;</td>
      <td> <select name="city" size="1" class="listbox">
	  <option value="" disabled selected><?php echo $row_city;?></option>
			     <option value="">Please select....</option>
				 <?php 
				$sqlcity = "select * from cities where CountryID = 1";
				$rscity = mysql_query($sqlcity);
					while($row = mysql_fetch_array($rscity))
				{
					echo'<option value = "'.$row['City'].'">'.$row['City'].'</option><br/>';
				}
				
				?>	
			</select></td>
    </tr>
    <tr>
      <td class="column1"><div align="right" class="style5">Mobile NO </div></td>
      <td>&nbsp;</td>
      <td><input type="text" class="listbox" name = "phone" value="<?php echo $row_mob; ?>" /></td>
    </tr>
    <tr>
      <td class="column1"><div align="right" class="style5">Phone Privecy </div></td>
      <td>&nbsp;</td>
      <td><input type="radio" name="privacy" id="privacy" value="protected" />
		    protected
		 
		    <input type="radio" name="privacy" id="privacy" value="public" />
		    public</td>
    </tr>
    <tr>
      <td class="column1"><div align="right" class="style5">About Your Self </div></td>
      <td>&nbsp;</td>
      <td><textarea name="aboutMyself" cols="50" rows="5" id="aboutmyself" ><?php echo $row_about;?></textarea>	</td>
    </tr>

    <tr>
      <td colspan="3"><div align="center"><span class="style2"></span>
        <input type="submit" name="update" id="update" value="Update" />
      </div></td>
      </tr>
  </table>
  </form>
  </div>
  <?php require_once('footer.php');?>
</div>
</body>
</html>
<?php
}      
else
{
	header('Location:loginpage.php');
}?>