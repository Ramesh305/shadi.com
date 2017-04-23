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
<div class="row">
       <?php include ('headermain.php'); ?></div>
<div class="row">
<?php include ('uppermenu.php'); ?> </div>       
       
 <div class="container" id="advance_search_title">
<div class="row">
<div >Advance Search</div>
</div></div>
             
<form id="form1" name="form1" method="post" action="">
<div class="row">
<div class="table-responsive">
  <table border="0" cellspacing="0" cellpadding="0" align="center" id="advancesearch">
  <tr> <td colspan="2" bgcolor="#009900" class="column2">Fill Advance Search details for find life patner</td> </tr>

    <tr>
      <td class="column1">Age</td>
      <td>
        <select name="age" id="age">
        <?php
		for($i=18;$i<=80;$i++)
		echo "<option> $i </option>";
		?>
        </select> to
      
     
        <select name="age" id="age">
        <?php
		for($i=18;$i<=80;$i++)
		{
					?>
                     <option <?php if($i==23) echo 'selected' ?> ><?php echo $i ?> </option>
    <?php 
	}
	?>
        </select>
      </td>
    </tr>
    <tr>
      <td class="column1">Marital Status</td>
      <td>
        <select name="material status" id="material status">
        <option value="">--select status--</option>
        <option>Single</option>
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
        <option value="">--select religion--<option>
        <option>Select</option>
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
        <select name="height" id="height">
      <option value = "">Please select....</option>
			<?php 
			for($i=3;$i<=9;$i++)
			 {
				 for($j = 1;$j<=9;$j++)
				 echo '<option>'.$i.' ft '.$j.' inch</option><br/>';
			 }?> 
        </select>     
             to 
       
          <select name="height2" id="height2">
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
      <td class="column1">Community</td>
      <td>
        <select name="community" id="community">

        </select>
      </td>
    </tr>
    <tr>
      <td class="column1">Mother tongue</td>
      <td>
        <select name="mother tongue" id="mother tongue">
        <option>--select mother tongue--</option>
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
      <td class="column1">Manglik Dosham</td>
      <td><label>
        <input type="radio" name="radio" id="manglik" value="manglik" />
      </label>
        Manglik 
        <label>
          <input type="radio" name="radio" id="No manglik" value="No manglik" />
        </label>
        No Manglik 
        <label>
          <input type="radio" name="radio" id="doesn't matter" value="doesn't matter" />
        </label>
        Doesn't Matter</td>
    </tr>
    <tr>
      <td colspan="2"><button type="submit" id="submit1">Search</button></td>
    </tr>
  </table>
 
</form>
<div class="row">
<?php include ('footer.php'); ?> </div>
</div>  
</body>

</html>