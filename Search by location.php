<?php
session_start();
include_once('connectioncore.php');
if($_SESSION['current_state']== "true")
{
$gen=$_SESSION['gen'];
if(isset($_POST['submit3']))
{
if(($_POST['state'])=="")
							{
		                    $select='<label class = "text-danger">*Please select country</lable>';
	                        }
else
{
$_SESSION['state'] = $_POST['state'];
header('Location:location_search.php');
}	
	

}
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SHUBHVIVAH</title>
<link rel="stylesheet" href="../bootstrap-3.3.2-dist/css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="../bootstrap-3.3.2-dist/js/bootstrap.min.js" type="text/javascript" />
<link rel="stylesheet" href="css_file.css" type="text/css" />
</head>

<body>
<div class="row">
       <?php include ('headermain.php'); ?></div>
       <div class="row">
<?php include ('uppermenu.php'); ?> </div>

 



  <div class="container">
  <form id="form1" name="form1" method="post" action="">
             
             <div id="title">Search by Location</div>
			 <div class="table-responsive">
            <table class="table4">
            
  <tr> <td colspan="2" bgcolor="#009900" class="column2">Select your Location</td> </tr>
  
    
<tr>
      <td class="column1">States</td>
      <td>
        <select name = "state" size="1" class="listbox">
			<option value="">---Select States---</option>
			<?php 
				$sqlstate = "select * from states where CountryID = 1";
				$rsstate = mysql_query($sqlstate);
					while($row = mysql_fetch_array($rsstate))
				{
					echo'<option value = "'.$row['State'].'">'.$row['State'].'</option><br/>';
				}
				
				?>	
	
			 
			</select>&nbsp;<?php
											
		                     echo $select;
	                       
							?>
      </td>
    </tr>
    
    
    
    
    <tr>
      <td colspan="2"><input type="submit" id="submit3" value="Search" name="submit3"/></td>
    </tr>
  </table>
  </div>
  
  </div>
  </form>
  </div>
  <div class="row">
<?php include ('footer.php'); ?> </div>
</div>  
</body>

</html>
<?php
}      
else
{
	header('Location:loginpage.php');
}?>