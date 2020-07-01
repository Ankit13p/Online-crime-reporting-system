<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>footer</title>
<style>
#wrap {
	
	background-color:#ffffff;
	
	
	font:Arial, Helvetica, sans-serif;
}


.clear { clear: both; }

.footer{
float:none;
width:auto;
padding:10px 0px 10px 280px;
border-top-style:groove;
border-top-color:#000000;
font-size:14px;
}


.footer li	{
margin:0 0 0 0 !important;
	float:left;
	padding:0px 8px 0px 8px;
	font-family:Museo_slab, Helvetica, sans-serif;
	text-decoration:none;
	list-style:none;
	}
.footer li a  {
	padding:0px 8px 0px 0px;
	float:left;
	font-family:Museo_slab, Helvetica, sans-serif;
text-decoration:none;
	color:#000000;
	
}

.footer li a:hover  {
	text-decoration:none;
	width:auto;
	color:#666666;
	font-family:Museo_slab, Helvetica, sans-serif;
	
	
}
.footer2{
font-family:Museo_slab; font size:50px; float:left; width:380px; text-align:right; padding: 15px 15px 15px 230px;
}
.footer2 p{
font-size:36px;}

.copyright{
text-align:center;

}


</style>

</head>

<body>

<body>
<div id="wrap">
  <div class="mheadborder"> </div>
 <div class="footer2"> 
  <p> We're ready to hear </p>
  <p> about your Request </p>
    
  </div>
  	<?php
		include("config.php");
		if(isset($_SESSION['username'])):
		?>
		<a href="FIRreg1.php"><img style="padding-top:15px;" src="images/start-now.png" /></a>
	<?php else:
	
			?>
			<a href="mustlogin.php"><img style="padding-top:15px;" src="images/start-now.png" /></a>
	<?php endif;
		?>
  
<br />
  <div class="clear"> 
  </div>
		<div class="footer">
		</div>
<div class="copyright">
					<p>Online Crime Reporting System &copy; 2018 </p>
</div>
</div>
					
</body>
</html>
