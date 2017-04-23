<?php
error_reporting(0);
session_start();
include_once('connectioncore.php');
$from_id=$_SESSION['UserId'];
$sql = " select * from my_intrestes where from_id = '$from_id' ";
$result = mysql_query($sql);
while($row = mysql_fetch_array($result))
{
	$my_intrestes = $row[2];
	$to_id   = $row[1];
	
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Intrest sent</title>
<link rel="stylesheet" href="../bootstrap-3.3.2-dist/css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="../bootstrap-3.3.2-dist/js/bootstrap.min.js" type="text/javascript" />
<link rel="stylesheet" href="aboutus.css" type="text/css" />
<link rel="stylesheet" href="bootstrap-3.3.2-dist/jquery/jquery-1.9.1.min.js" />
<script src="jquery-2.1.3.min.js"></script>
<script>
$(document).ready(function(){
	$(".p_intrests").hide();
	$("#send_message").hide();
	
    $("#new_intrests").click(function(){
		$("#send_message").hide();
		$("#a_intrests").hide();
        $("#n_intrests").toggle();
    });
	
	$("#accept_intrests").click(function(){
		$("#send_message").hide();
		$("#n_intrests").hide();
        $("#a_intrests").toggle();
		
    });
	$("#decline_intrests").click(function(){
		$("#a_intrests").hide();
		$("#n_intrests").hide();
        $("#send_message").toggle();
    });
	
});

</script>

</head>

<body>
<?php include ('headermain.php'); 
require_once('uppermenu.php'); 	?>
	<div class="container" id="New_Presonalized_Message">

<form>
	<div class="row" id="express_intrest_title">Send Message 
    </div>
       
	<div class="row" id = "message_well">
    
    
    
		<input type="button" name="new_intrests" id="new_intrests" value="Reply pending from member" /></button>
        
		<input type="button" name="accept_intrests" id="accept_intrests" value="Accept By Member" /></button>
        
		<input type="button" name="decline_intrests" id="decline_intrests" value="Decline Intrests"/>

</div><!--end of row-->

<div class="row" id="message_box">
	
    
    <label id="n_intrests" class="p_intrests"><p id="p_color"> Reply pending from member </p><br /><?php echo $my_intrestes;  ?>
    </label>
	<label id="a_intrests" class="p_intrests"><p id="p_color"> Accept By Member </p><br />
    <?php echo $to_id;
echo $my_intrestes;   ?></label>

<div id="send_message"><label><p id="p_color">Send Messages</p></label><br />
		<input type="email" name="email" id="email" placeholder="email id"/><br />
		<input type="button" name="send" id="send" value="Decline" />

</div>

</div><!--end of row-->



</form>

</div>

</body>
</html>