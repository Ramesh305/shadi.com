<?php
error_reporting(0);
session_start();
if($_SESSION['current_state']== "true")
{
include_once('connectioncore.php');
$gen=$_SESSION['gen'];

?>
<html>
<head>
<title>Search</title>
<link rel="stylesheet" type="text/css" href="aboutus.css" />
<link rel="stylesheet" href="bootstrap-3.3.2-dist/css/bootstrap.min.css" />
<link rel="stylesheet" href="bootstrap-3.3.2-dist/jquery/jquery-1.9.1.min.js"/>
<link rel="stylesheet" href="bootstrap-3.3.2-dist/js/bootstrap.min.js" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type = "text/javascript">
function getProfile(btn_id)
	{
		//alert(state_id);
		if(btn_id=="")
		{
			document.getElementById('qsearch_profile_div').innerHTML="Error";
			return false;
		}
		
		if(window.XMLHttpRequest)
		{
			var xmlhttp=new XMLHttpRequest();
			xmlhttp.onreadystatechange=function()
			{
				if(xmlhttp.readyState==4 && xmlhttp.status==200)
				{
					document.getElementById('qsearch_profile_div').innerHTML=xmlhttp.responseText;
				}
			}
			xmlhttp.open("GET","showProfile_login.php?id="+btn_id,true);
			xmlhttp.send();
		}
	}

</script>
</head>
<body>
<form method = "post" action="<?php $_SERVER['PHP_SELF']; ?>">
<?php include_once('headermain.php');
include_once('uppermenu.php');
?>
<div class = "container" id = "quick_search_container">
<label id = "qprofiles_title">Profiles</label>
<?php
$state = $_SESSION['state'];

?>
<div class = "row">
<div class = "col-md-6">
<hr/>
<?php

if($gen=='Male')
{
$sqlmatch = "SELECT * FROM registration WHERE State LIKE '%".$state."%' AND  gender='Female'";
}
else
{
$sqlmatch = "SELECT * FROM registration WHERE State LIKE '%".$state."%' AND gender='Male'";
}

$resultmatch = mysql_query($sqlmatch);
$rownum=mysql_num_rows($resultmatch);
if($rownum==0)
{
echo '<center><h3><b>Result not found!!!!</b></h3></center>';
}
else
{
   echo '<table id = "qsearch_table">';
	echo '<th class = "qsearch_table">Photo</th>';
	echo '<th class = "qsearch_table">Name</th>';
	echo '<th class = "qsearch_table">Profile View</th>';
	while($rowmatch = mysql_fetch_array($resultmatch)) 
	{
	

	$name = $rowmatch['name'];
	$path = $rowmatch['Path'];
	$id = $rowmatch[0];
	$last_name = $rowmatch['last_name'];
	echo '<tr class = "qsearch_table">';
	echo '<td  class = "qsearch_table">';
	echo '<img src = '.$path.' width = "50" height = "50"><br/>';
	echo '</td>';
	echo '<td class = "qsearch_table">';
	echo '<label>'.$name.'&nbsp;</label>';
	echo '<label>'.$last_name.'&nbsp; &nbsp; &nbsp;</label>';
	echo '</td>';
	echo '<td class = "qsearch_table">';
	echo "<button type = 'button'  id = '$id' name = '$id' onclick = 'getProfile(this.id)'>View Profile</button><br/>";
	echo '</td>';
	echo '</tr>';
	}
}


?>
</table>
</div><!--end of column-->
<div class = "col-md-6" id = "qsearch_profile_div">

</div>
</div><!--end of row-->
</div><!--end of container-->
<div><?php include_once('footer.php'); ?></div>
</form>
</body>
</html>
<?php
}      
else
{
	header('Location:loginpage.php');
}?>