<?php

require_one('connectioncore.php');
 
	$sqlcity = "select * from sikkim";
	$rscity = mysql_query($sqlcity);
	

	while($rowcity = mysql_fetch_array($rscity))
	{
		echo '<option value = "'.$rowcity['city_name'].'">'.$rowcity['city_name'].'</option>';

	}
	
	
?>