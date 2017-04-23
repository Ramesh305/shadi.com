<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Smart Search</title>
<link rel="stylesheet" href="../bootstrap-3.3.2-dist/css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="../bootstrap-3.3.2-dist/js/bootstrap.min.js" type="text/javascript" />
<link rel="stylesheet" href="aboutus.css" type="text/css" />
</head>

<body>
 
<div class="row">
       <?php include ('headermain.php'); ?></div>
<div class="row">
<?php include ('uppermenu.php'); ?> </div>


<form id="form1" name="form1" method="POST" action="">
<div class="container-fluid">

             <div class="table-responsive">
             <div id="title">Smart Search</div>
            <table class="smartsearch">
            

            <tr>
              <td colspan="2" bgcolor="#00CC00" class="column2">Basic Info</td>
</tr>
<tr>
      <td class="column1">Age   </td>
      <td>
        <select name="age" id="age">
        <?php
		for($i=18;$i<=80;$i++)
		echo "<option> $i </option>";
		?>
        </select>
   
        to 
          <select name="age2" id="age2" >
          <?php
		for($i=18;$i<=80;$i++)
		
		echo "<option> $i </option>";
		?>
          </select>
        </td>
    </tr>
    <tr>
      <td class="column1">Material status</td>
      <td>
        <select name="material status" id="material status">
          <option>--Select material status--</option>
        <option>Unmarried</option>
        <option>Divorced</option>
        <option>Widowed</option>
        <option>Awating Divorce</option>
        </select>
      </td>
    </tr>
    <tr>
      <td class="column1">Height </td>
      <td>
        <select name="height" id="height">
        </select>
      
        to 
       
          <select name="height2" id="height2">
          </select>
        </td>
    </tr>
    <tr>
      <td class="column1">Complexion</td>
      <td><label>
        <input type="radio" name="radio" id="Whitish" value="Whitish" />
      </label>
        Wheatish 
        <label>
          <input type="radio" name="radio" id="dark" value="dark" />
        </label>
        Dark 
        <label>
          <input type="radio" name="radio" id="fair" value="fair" />
        </label>
        Fair</td>
    </tr>
    <tr>
      <td class="column1">Photo Settings</td>
      <td><input type="checkbox" id="photo" /> Only with photo </td>
    </tr>
            <tr>
              <td colspan="2" bgcolor="#00CC00" class="column2">Religion & Social Background </td>
</tr>
<tr>
    <td class="column1">Religion</td>
    <td>
    <select name="religion" id="religion">
      <option>Hindu</option>
      <option>Muslim</option>
      <option>Jain</option>
      <option>Sikh</option>
      <option>Cristian</option>
      <option>Parsi</option>
    </select></td>
  </tr>
  <tr>
      <td class="column1">Community</td>
      <td>
        <select name="community" id="community">
        <option>--Select community--</option>
                  		<option>Hindu</option>
                  		<option>Muslim</option>
                 		<option>Jain</option>
                  		<option>Christian</option>
                  		<option>Sikh</option>
                  		<option>Buddhish</option>
                        <option>Jewish</option>
                        <option>No community</option>
                        </select>
      </td>
    </tr>
    <tr>
    <td class="column1">Mother Tongue</td>
    <td>
    
        <select name="mother tongue" id="mother tongue">
          <option>--select mother tongue--</option>
          <option>hindi</option>
          <option>marwadi</option>
          <option>English</option>
          <option>Gujrati</option>
          <option>Marathi</option>
        </select>
      </td>
      </tr>
     <tr>
              <td colspan="2" bgcolor="#00CC00" class="column2">Education & career</td>
</tr> 
<tr>
      <td class="column1">Education Level</td>
      <td>
        <select name="education level" id="education level">
 		<option>--Select education--</option>
          	<option>Master</option>
          	<option>Doctrate</option>
          	<option>Diploma</option>
          	<option>Undergraduate</option>
          	<option>Associates Degree</option>
          	<option>Honours Degree</option>
          	<option>Trade School</option>
          	<option>High School</option>
          	<option>Less than high school</option> 
  
        </select>
      </td>
    </tr>
    <tr>
      <td class="column1">Profission</td>
      <td>
        <select name="Profession" id="Profession">
        <option>--Select Profession--</option>
              	<option>B.A.</option>
          	  	<option>M.A</option>
          	  	<option>B.ed</option>
          	  	<option>B.sc</option>
          	  	<option>M.sc</option>
          	  	<option>M.sc.it</option>
          	  	<option>B.C.A</option>
          	  	<option>M.C.A</option>
          	  	<option>B.tech</option>
          	  	<option>M.tech</option>
          	  	<option>PGDCA</option>
          	  	<option>B.com</option>
          	  	<option>M.com</option>
        
        </select>
      </td>
    </tr>
<tr>
              <td colspan="2" bgcolor="#00CC00" class="column2">Search By Country </td>
</tr> 
<tr>
      <td class="column1">Country</td>
      <td>
        <select name="country" id="country">
          <option>--select Country--</option>
        </select>
      </td>
    </tr>
    <tr>
      <td class="column1">Special cases</td>
      <td>
        <select name="special cases" id="special cases">
          <option>--select Special cases--</option>
        </select>
      </td>
    </tr>
<tr>
      <td colspan="2"><button type="submit" id="submit1">Search</button></td>
    </tr>
    
  </table>
  <div class="row">
<?php include ('menu_controller_home_aboutus.php'); ?> </div>
</div></div>
</form>


</body>
</html>