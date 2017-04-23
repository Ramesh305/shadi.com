<?php
session_start();
include_once('connectioncore.php');
$from_id=$_SESSION['UserId'];
$sql = "select * from my_messages where from_id ='$from_id'";
$result = mysql_query($sql);
while($row = mysql_fetch_array($result))
{
	$message = $row[2];
	$to_id   = $row[1];
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Outbox</title>
<link rel="stylesheet" href="../bootstrap-3.3.2-dist/css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="../bootstrap-3.3.2-dist/js/bootstrap.min.js" type="text/javascript" />
<link rel="stylesheet" href="aboutus.css" type="text/css" />
<link rel="stylesheet" href="bootstrap-3.3.2-dist/jquery/jquery-1.9.1.min.js" />


<script src="jquery-2.1.3.min.js"></script>
<script>
$(document).ready(function(){
	$(".p_message").hide();
	$("#send_message").hide();
	
    
	
	$("#replied_message").click(function(){
		$("#send_message").hide();
		$("#n_message").hide();
        $("#a_message").toggle();
		
    });
	$("#new_message").click(function(){
		$("#send_message").hide();
		$("#a_message").hide();
        $("#n_message").toggle();
    });
	
	$("#reply_btn").click(function(){
		$("#a_message").hide();
		$("#n_message").hide();
        $("#send_message").toggle();
    });
	
});

</script>

</head>

<body>
	<?php include ('uppermenu.php'); ?>
	<div class="container" id="New_Presonalized_Message">

<form>
	<div class="row" id="message_title">New Presonalized Message 
    </div>
       
	<div class="row" id = "message_well">
    <input type="button" name="replied_message" id="replied_message" value="Replied Message" /></button>
    
		<input type="button" name="new_message" id="new_message" value="New Message" /></button>
        
		
        
		<input type="button" name="reply_btn" id="reply_btn" value="Reply"/>

</div><!--end of row-->

<div class="row" id="message_box">
	
   
	<label id="a_message" class="p_message"><p id="p_color"> Replied Messages </p><br /><?php echo $to_id;
echo $message;   ?>
</label>

<label id="n_message" class="p_message"><p id="p_color"> New Messages </p><br /><?php echo $message;  ?>
    </label>

<div id="send_message"><label><p id="p_color">Send Messages</p></label><br />
		<input type="email" name="email" id="email" placeholder="email id"/><br />
		<input type="text" name="message" id="message" placeholder="Message" /><br />
		<input type="button" name="send" id="send" value="send_message" />
        </div>

</div>

</div><!--end of row-->



</form>

</div>

</body>

</html>