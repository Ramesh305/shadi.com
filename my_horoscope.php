<?php
session_start();
//error_reporting(0);
include_once("connectioncore.php");
if(isset($_POST['submit_horoscope']))
{
$dob=$_POST['dob'];
$tob=$_POST['tob'];
$country=$_POST['country'];
$state=$_POST['state'];
$city=$_POST['city'];
$nakshtra=$_POST['nakshatra'];
$manglik=$_POST['manglik'];
$chart_style=$_POST['chart_style'];
$time_correction=$_POST['time_correction'];

$sql4="insert into horoscope values(null,null,'$dob','$tob','$country','$state','$city','$nakshtra','$manglik','$chart_style','$time_correction')";
$rs4 = mysql_query($sql4);

}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SHUBHVIVAH</title>
<link rel="stylesheet" href="../bootstrap-3.3.2-dist/css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="../bootstrap-3.3.2-dist/js/bootstrap.min.js" type="text/javascript" />
<link rel="stylesheet" href="aboutus.css" type="text/css" />
</head>

<body>
<?php include ('headermain.php'); 
require_once('uppermenu.php'); ?>
    
<div class="container">

<div class="row" id="horoscope_title"><h3 align="center" style="color:#FFFFFF; background-color:#CC0000;">Create Horoscope</h3>
</div>
<form method="post" enctype="multipart/form-data" id="horoscope_form">
<div class="table-responsive">
  <table id="my_horoscope" align="center">
    <tr>
      <td class="column1"><p>Date of Birth</p></td>
      <td>
        <input type="text" name="dob" id="dob"  placeholder="YYYY/MM/DD"/>
     </td>
    </tr>
    <tr>
      <td class="column1">Time of Birth</td>
      <td>
        <input type="text" name="tob" id="tob" placeholder="HH:MM:SS"/>
      </td>
    </tr>
    <tr>
      <td class="column1">Country of Birth</td>
      <td>
        <select name="country" id="country">
        <option value="">--Select Birth country--</option>
        <?php
		$sql2='select * from countries';
		$rs2=mysql_query($sql2);
		while($row=mysql_fetch_array($rs2))
		{
		echo '<option>'.$row['Country'].'</option>';
		}
		
		?>
        </select>
      </td>
    </tr>
    <tr>
      <td class="column1">State of Birth <label class="text-danger">*</label> </td>
      <td>
        <select name="state" id="state">
        <option>--Select Birth State--</option>
		<?php
		$sql='select * from states';
		$rs=mysql_query($sql);

		while($row=mysql_fetch_array($rs))
		{
		echo '<option>'.$row['State'].'</option>';
		}
		
		?>
        </select>
        <?php
						if(isset($_POST['submit_horoscope']))
						
							if(($_POST['state'])=="")
							{
		                     echo'<label class="text-danger">*Please Select living State</label>';
	                        }
							
						?>
      </td>
    </tr>
    <tr>
      <td class="column1">Place of Birth</td>
      <td>
        <select name="city" id="city">
        <option value="">--Select Birth City--</option>
        <?php
		$sql1='select * from cities';
		$rs1=mysql_query($sql1);

		while($row=mysql_fetch_array($rs1))
		{
		echo '<option>'.$row['City'].'</option>';
		}
		
		?>
        <?php
						if(isset($_POST['submit_horoscope']))
						
							if(($_POST['city'])=="")
							{
		                     echo'<label class="text-danger">*Please Select City</label>';
	                        }
							
						?>
        </select>
      </td>
    </tr>
    <tr>
      <td class="column1">Birth star/Nakshatra</td>
      <td>
        <select name="nakshatra" id="nakshatra">
        <option value="">--Select nakshtra--</option>
        <option>Aswini</option>
        <option>Bharani</option>
        <option>Krithika</option>
        <option>Rohini </option>
        <option>Mrigashiras</option>
        <option>Aardhra</option>
        <option>Punarvasu</option>
        <option>Pushyami</option>
        <option>Ashlesha</option>
        <option>Magha/Makha</option>
        <option>P.Phalguni/PoorvaPhalguni</option>
        <option>U.Phalguni/Uthraphalguni</option>
        <option>Hastha </option>
        <option>Chitra</option>
        <option>Swaathi </option>
        <option>Vishaakha</option>
        <option>Anuraadha</option>
        <option>Jyeshta</option>
        <option>Moola</option>
        <option>P.Shada/Poorvashaada</option>
        <option>U.Shada/Uthrashaada</option>
        <option>Shraavan </option>
        <option>Dhanishta</option>
        <option>Shathabhisha</option>
        <option>P.Bhadra/Poorvabhadra</option>
        <option>U.Bhadra/Uthrabhadra</option>
        <option>Revathi</option>
        </select>
      </td>
    </tr>
    <tr>
      <td class="column1">Manglik Status</td>
      <td><select name="manglik" id="manglik">
        <option value="">--Select manglik status--</option>
        <option>Yes</option>
        <option>No</option>
        <option>Don't Known</option>
        </select>
 </td>
    </tr>
    <tr>
      <td class="column1">Chart style</td>
      <td>
        <select name="chart_style" id="chart_style">
        <option value="">--Select Chart style--</option>
        <option>East Indian</option>
        <option>South Indian</option>
        <option>North Indian</option>
        <option>Kerala</option>
        </select>
      </td>
    </tr>
    <tr>
      <td class="column1">Time Correction</td>
      <td>
        <select name="time_correction" id="time_correction">
        <option value="">--Select Time Correction--</option>
        <option>Standard time</option>
        <option>Summer time</option>
        <option>Double Summer time</option>
        <option>War time</option>
        </select>
      </td>
    </tr>


    <tr>
      <td colspan="2"><input type="submit" name="submit_horoscope" id="submit_horoscope" value="Submit" />
      <input type="submit" name="reset" id="reset" value="reset" /></td>
    </tr>
    
    </table>
</form>

</div>
<?php include_once('footer.php');?>
</body>
</html>