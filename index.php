<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" xml:lang="en-gb" xmlns="http://www.w3.org/1999/xhtml" lang="en-gb">
<head>
<?php
session_start();
include("config.php");
if(isset($_SESSION['username'])){
	$msg = base64_encode("Registered Successfully"); 
	header("location:home.php?msg=$msg");
}
?>
<link rel="stylesheet" href="css/specimen_stylesheet.css" type="text/css" charset="utf-8" />
<link rel="stylesheet" href="css/stylesheet.css" type="text/css" charset="utf-8" />
<style type="text/css">
@font-face {
    font-family: 'museo_slab';
    src: url('museoslab-500-webfont.eot');
    src: url('museoslab-500-webfont.eot?#iefix') format('embedded-opentype'),
         url('museoslab-500-webfont.woff2') format('woff2'),
         url('museoslab-500-webfont.woff') format('woff'),
         url('museoslab-500-webfont.ttf') format('truetype'),
         url('museoslab-500-webfont.svg#museo_slab500') format('svg');
    font-weight: normal;
    font-style: normal;

}


.clear { clear: both; }
.aboutm{

}
.abm{
padding:0px 20px 0px 75px;
margin:auto;
}
.abm img{ border-radius:150px; width:150px;}
.abm-col{
width:150px;
float:left;
padding:0px 20px 15px 20px;

}
.abm-col p{
padding:5px 0px 5px 60px;
font-family:museo_slab, Helvetica, sans-serif;
font-size:18px;
	color:#000000;
	text-align:center;

}
.abm-col a{
padding:5px 25px 5px 40px;}
.abm-col h1{
font-family:museo_slab;
padding:15px 0px 5px 60px;
margin:auto;
text-align:center;

font-size:30px;
color:#db1111;
border-bottom:none !important;
}

</style>
<!--Javascript included-->
<script type="text/javascript" src="css/mootools.js"></script>
<script type="text/javascript" src="css/caption.js"></script>
<script type="text/javascript" src="javascript/validation.js"></script>
<script src="javascript/jquery-latest.pack.js" type="text/javascript"></script>
<script src="javascript/jcarousellite_1.0.1c4.js" type="text/javascript"></script>
<script type="text/javascript">
$(function() {
	$(".newsticker-jcarousellite").jCarouselLite({
		vertical: true,
		hoverPause:true,
		visible: 3,
		auto:500,
		speed:1000
	});
});
</script>

  <title>Welcome To Online Crime Reporting System</title>

<!--StyleSheet included-->
<link rel="stylesheet" type="text/css" href="css/message.css" media="all">
<link rel="stylesheet" href="css/template.css" type="text/css">
<link rel="stylesheet" href="css/constant.css" type="text/css">


</script>


</head>
  
<body id="body">
   <div class="main">
      <div id="wrap">
	  <?php
	   include("header2.php");
	   ?>   
	  <?php
	   include("menu.php");
	   ?>
	 
<div class="div4">	   
<div class="div7">

<img src="images/25671289-Woman-in-shock-closing-mouth-with-his-hand-isolated-on-white-Stock-Photo copy.png" />
</div>

<div class="div8">
<h3> <font color="#D50000" >'DO NOT </font> stay <font color="#000080"> SILENT </font> about'</h3>
<p> "The world suffers a lot. Not because of the violence of bad people, but because of the silence of good people."</p>
<h3 style="font-size:35px; font-weight:bold;"> Let's stop it</h3>

</div>
<br />
 <div class="clear"></div>

  <div class="mheadborder"> </div>
 	 <div class="mhead"> Emergency Contacts</div>

  <div class="mheadborder"> </div>
  <br />

   <div class="aboutm">
   <div class="abm">
						
							<div class="abm-col">
							 <h1> <img style="width:auto; height:auto;" src="images/07.png"  /> &nbsp;111</h1>
								
								<p> All in one emergency no. </p>
								<div class="clear"></div>
								
								
							</div>
							
							
							
							<div class="abm-col">
							 <h1><img style="width:auto; height:auto;" src="images/07.png" /> &nbsp;111</h1>
							
							<p> Plolice emergency no. </p>
								<div class="clear"></div>
								
								
							</div>
							
							
							<div class="abm-col">
							 <h1><img style="width:auto; height:auto;" src="images/07.png"  /> &nbsp;111</h1>
								
								<p>Medical emergency no. </p>
								<div class="clear"></div>
								
								
							</div>
							<div class="abm-col">
							 <h1> <img style="width:auto; height:auto;" src="images/07.png"  /> &nbsp;111</h1>
								
								<p> Women help-line no. </p>
								<div class="clear"></div>
								
								
							</div>
							<div class="abm-col">
							 <h1> <img style="width:auto; height:auto;" src="images/07.png"  /> &nbsp;111</h1>
			<p>Fire emergency no. </p>
								<div class="clear"></div>
								
								
							</div>
							
							
							
							
						</div>
						</div>
					
						
								<div class="clear"></div>
								<br />
								
	
	<div class="clear"></div>
	  <div class="mheadborder"> </div>
 	 <div class="mhead"> Missing Citizens</div>

  <div class="mheadborder"> </div>
  <br />
	    

	   
	    <?php
	   include("footer1.php");
	   ?>
</div>
</div>

</body></html>
