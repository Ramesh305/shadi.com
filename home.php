<?php
session_start();
error_reporting(0);
$_SESSION['match'] = $_POST['match'];
$_SESSION['age']= $_POST['select'];
$_SESSION['age1'] = $_POST['select2'];
$_SESSION['religion'] = $_POST['select3'];
$_SESSION['caste']= $_POST['select4'];
$_SESSION['tongue'] = $_POST['select5'];
if(isset($_POST['quick_search_btn']))
{
		
	header('Location:quick_search_module.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>SHUBHVIVAH</title>
<link rel="stylesheet" type="text/css" href="aboutus.css" />
<link rel="stylesheet" href="bootstrap-3.3.2-dist/css/bootstrap.min.css" />
<script src="bootstrap-3.3.2-dist/js/bootstrap.min.js"></script>
</head>

<body style="background-image:url(image/background.jpg);">

<?php include_once('headermain.php');?>
<form method = "post" action "<?php $_SERVER['PHP_SELF']; ?>">
<div class="container">
<nav class="navbar navbar-inverse" id="nav" >
<div id="menubar"> 
<ul class="nav navbar-nav navbar-left">
<li><a href="home.php">Home</a></li>
<li ><a href="registration.php">Registration</a></li>

<li><a href="Aboutus.php">About Us</a></li>
<li><a href="contact us.php">Contact US</a></li>
<li><a href="faqs.php">Faqs</a></li>
<li><a href="feedback.php">Feedback</a></li>
<li><a href="loginpage.php">Login</a></li>
</ul>
</div>
</nav>

<div id="search"><p align="center" id="qs">Quick Search</p>

<p align="center" style="color:#FF0000;"><?php echo $_GET['msg']; ?></p>
<table width="338" height="160" border="0" cellpadding="0" cellspacing="0" align="center">
  <tr>
  
    <td width="162">Looking For</td>
    <td width="142">
      <input type="radio"   value="Male" name="match" />
      Male
   
      <input type="radio"   value="Female" name="match" />
Female</td>
  </tr>
    <tr>
    <td>Age</td>
    <td>
	<br /> <select name="select">
	
	
	<?php
	for($i=18;$i<=85;$i++)
	{
	echo '<option>'.$i.'</option>';	
	}	
	?>
    </select>
	
     To 
     <select name="select2">
	
	
	 <?php
	for($i=18;$i<=85;$i++)
	{
	   ?>
		<option <?php if($i==23) echo 'selected' ?>> <?php echo $i; ?></option>;	
		
		<?php } ?>
	}
	?>
     </select> </td>
  </tr>
  <tr>
    <td>Religion</td>
    <td><br /><select name="select3">
	<option value = "">--Select--</option>
	<option>Hindu</option>
	<option>Sikh</option>
	<option>Christian</option>
	<option>Muslim</option>
	<option>Jain</option>
	<option>Buddhist</option>
	<option>Atheist</option>
	<option>Other Religion</option>
    </select></td>
  </tr>
  <tr>
    <td height="24">Caste</td>
    <td><br /><select name="select4">
	<option value = "">--Select Caste--</option>
          <option>Agrawal</option>
		  <option>Rajput</option>
		  <option>Jain</option>
		  <option>Bhrahman</option>
		  <option>Yadav</option>
		  <option>Saini</option>
		  <option>Sunar</option>
		  <option>Lohana</option>
		  <option>Mahar</option>
		  <option>Antil</option>
		  <option>Ahir</option>
		  <option>Dalit</option>
		  <option>Chaudhri</option>
		  <option>Iyer</option>
		  <option>Dangi</option>
		  <option>Maheshwari</option>
		  <option>Kayasth</option>
		  <option>Others</option>
		  </select>
    </select></td>
  </tr>
  <tr>
    <td height="25">Mother Tongue</td>
    <td><br />
	<select name="select5">
	<option value = "">--Select--</option>
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
    </select></td>
  </tr>
  <tr>
    </div>
    </tr>
  <tr>
    <td height="24" colspan="2"><div align="center"><br />
      <input type="submit" name="quick_search_btn" value="Search Profile" />
	  
    </div></td>
    </tr>
	<div style="margin-top:30px;">
	
	
  </div>
</table>
</div>
<div class="container" id="banner">

</div>
<div id="slider">
<p style="background-color:#cc0000; height:30px; color:#FFFFFF"><b>Premium Display</b></p>
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <!-- use jssor.slider.mini.js (39KB) or jssor.sliderc.mini.js (31KB, with caption, no slideshow) or jssor.sliders.mini.js (26KB, no caption, no slideshow) instead for release -->
    <!-- jssor.slider.mini.js = jssor.sliderc.mini.js = jssor.sliders.mini.js = (jssor.core.js + jssor.utils.js + jssor.slider.js) -->
    <script type="text/javascript" src="js/jssor.core.js"></script>
    <script type="text/javascript" src="js/jssor.utils.js"></script>
    <script type="text/javascript" src="js/jssor.slider.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlaySteps: 4,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
                $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                               //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideDuration: 160,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                $SlideWidth: 200,                                   //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 150,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 3, 					                //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 4,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                              //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 0,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 0,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 0,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                },

                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 4                                       //[Optional] Steps to go for each navigation request, default value is 1
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var bodyWidth = document.body.clientWidth;
                if (bodyWidth)
                    jssor_slider1.$SetScaleWidth(Math.min(bodyWidth, 740));
                else
                    window.setTimeout(ScaleSlider, 30);
            }

            ScaleSlider();

            if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
                $(window).bind('resize', ScaleSlider);
            }


            //if (navigator.userAgent.match(/(iPhone|iPod|iPad)/)) {
            //    $(window).bind("orientationchange", ScaleSlider);
            //}
            //responsive code end
        });
    </script>
    <!-- Jssor Slider Begin -->
    <!-- You can move inline styles to css file or css block. -->
    <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 740px; height: 220px; overflow: hidden;">

        <!-- Loading Screen -->
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
            <div style="position: absolute; display: block; background: url(img/loading.gif) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
        </div>

        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 740px; height: 220px; overflow: hidden;">
            <div><img u="image" src="image/bandhan.jpg" /></div>
            <div><img u="image" src="image/best-marriage.jpg" /></div>
            <div><img u="image" src="image/Flash2.jpg" /></div>
            <div><img u="image" src="image/header.jpg" /></div>
            <div><img u="image" src="image/jharokhe.jpg" /></div>
            <div><img u="image" src="image/marriage.jpg" /></div>
            <div><img u="image" src="image/marriage-rings.jpg" /></div>
            <div><img u="image" src="image/matrimonial-sites.jpg" /></div>
            <div><img u="image" src="image/Matrimonial-verification.jpg" /></div>
            <div><img u="image" src="image/muslim_wedding_hands.jpg" /></div>
            <div><img u="image" src="image/shringar.jpg" /></div>
            <div><img u="image" src="image/wedding.jpg" /></div>
            <div><img u="image" src="image/bandhan.jpg" /></div>
            <div><img u="image" src="image/wedding.jpg" /></div>
            <div><img u="image" src="image/shringar.jpg" /></div>
            <div><img u="image" src="image/muslim_wedding_hands.jpg" /></div>
            <div><img u="image" src="image/Matrimonial-verification.jpg" /></div>
            <div><img u="image" src="image/matrimonial-sites.jpg" /></div>
            <div><img u="image" src="image/marriage.jpg" /></div>
            <div><img u="image" src="image/header.jpg" /></div>
            <div><img u="image" src="image/marriage.jpg" /></div>
            <div><img u="image" src="image/header.jpg" /></div>
            <div><img u="image" src="image/Matrimonial-verification.jpg" /></div>
        </div>
        
        <!-- Bullet Navigator Skin Begin -->
        <style>
            /* jssor slider bullet navigator skin 03 css */
            /*
            .jssorb03 div           (normal)
            .jssorb03 div:hover     (normal mouseover)
            .jssorb03 .av           (active)
            .jssorb03 .av:hover     (active mouseover)
            .jssorb03 .dn           (mousedown)
            */
            .jssorb03 div, .jssorb03 div:hover, .jssorb03 .av
            {
                background: url(img/b03.png) no-repeat;
                overflow:hidden;
                cursor: pointer;
            }
            .jssorb03 div { background-position: -5px -4px; }
            .jssorb03 div:hover, .jssorb03 .av:hover { background-position: -35px -4px; }
            .jssorb03 .av { background-position: -65px -4px; }
            .jssorb03 .dn, .jssorb03 .dn:hover { background-position: -95px -4px; }
        </style>
        <!-- bullet navigator container -->
        <div u="navigator" class="jssorb03" style="position: absolute; bottom: 4px; right: 6px;">
            <!-- bullet navigator item prototype -->
            <div u="prototype" style="position: absolute; width: 21px; height: 21px; text-align:center; line-height:21px; color:white; font-size:12px;"><NumberTemplate></NumberTemplate></div>
        </div>
        <!-- Bullet Navigator Skin End -->
        
        <!-- Arrow Navigator Skin Begin -->
        <style>
            /* jssor slider arrow navigator skin 03 css */
            /*
            .jssora03l              (normal)
            .jssora03r              (normal)
            .jssora03l:hover        (normal mouseover)
            .jssora03r:hover        (normal mouseover)
            .jssora03ldn            (mousedown)
            .jssora03rdn            (mousedown)
            */
            .jssora03l, .jssora03r, .jssora03ldn, .jssora03rdn
            {
            	position: absolute;
            	cursor: pointer;
            	display: block;
                background: url(img/a03.png) no-repeat;
                overflow:hidden;
            }
            .jssora03l { background-position: -3px -33px; }
            .jssora03r { background-position: -63px -33px; }
            .jssora03l:hover { background-position: -123px -33px; }
            .jssora03r:hover { background-position: -183px -33px; }
            .jssora03ldn { background-position: -243px -33px; }
            .jssora03rdn { background-position: -303px -33px; }
        </style>
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora03l" style="width: 55px; height: 55px; top: 123px; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora03r" style="width: 55px; height: 55px; top: 123px; right: 8px">
        </span>
        <!-- Arrow Navigator Skin End -->
        <a style="display: none" href="http://www.jssor.com">slideshow</a>
    </div>
    <!-- Jssor Slider End -->
</div>
<div id="slider1">
<p style="background-color:#cc0000; height:30px; color:#FFFFFF"><b>Success Stories</b></p>
<marquee direction="up" onmouseover="stop();">
<p><a href="">Hindu Matrimonials</a></p>
<p><a href="">Sikh Matrimonials</a></p>
<p><a href="">Christian Matrimonials</a></p>
<p><a href="">Muslim Matrimonials</a></p>


</marquee>
</div>


</div>
</form>
<div><?php include_once('footer.php'); ?></div>
</body>
</html>
