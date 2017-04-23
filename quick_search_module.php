<?php
error_reporting(0);
session_start();

include_once('connectioncore.php');
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
			xmlhttp.open("GET","showProfile.php?id="+btn_id,true);
			xmlhttp.send();
		}
	}

</script>
</head>
<body>
<form method = "post" action="<?php $_SERVER['PHP_SELF']; ?>">
<?php include_once('headermain.php');
include_once('home_header.php');
?>
<div class = "container" id = "quick_search_container">
<label id = "qprofiles_title">Profiles</label>
<?php
$match =$_SESSION['match'];
$age = $_SESSION['age'];
$age1 = $_SESSION['age1'];
$religion = $_SESSION['religion'];
$caste = $_SESSION['caste'];
$tongue = $_SESSION['tongue'];
?>
<div class = "row">
<div class = "col-md-6">
<table id = "qsearch_table">
<th class = "qsearch_table">Photo</th>
<th class = "qsearch_table">Name</th>
<th class = "qsearch_table">Profile View</th>
<hr/>
<?php
if(($_SESSION['match'] == "")&&($_SESSION['age'] == "")&&($_SESSION['age1'] == "")&&($_SESSION['religion'] == "")&&($_SESSION['caste'] == "")&&($_SESSION['tongue'] == ""))
{
	echo 'sorry no result found';
	header('LOCATION: home.php?msg=sorry no result found Plese select at least two field!');
}
else
{
//$_SESSION['match'] = $match;

if($match=='Male')
{
$sqlmatch = "SELECT * FROM registration WHERE gender='Male'";
}
else
{
$sqlmatch = "SELECT * FROM registration WHERE gender='Female'";
}				  
$resultmatch = mysql_query($sqlmatch);
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
