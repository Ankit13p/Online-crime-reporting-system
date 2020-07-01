
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" xml:lang="en-gb" xmlns="http://www.w3.org/1999/xhtml" lang="en-gb">
<head>
<link rel="stylesheet" type="text/css" href="css/message.css" media="all">

<link rel="stylesheet" href="css/template.css" type="text/css">
<link rel="stylesheet" href="css/constant.css" type="text/css">

<style type="text/css">
#wrap {
	margin-top: 0px;
	background-color:#EEE;
	margin-right: auto;
	margin-bottom: 10px;
	margin-left: auto;
	padding: 0px;
	
	font:Arial, Helvetica, sans-serif;
}

.must{
padding:40px 0px 0px 0px;


}
.must1{

float:left;
padding:25px 0px 40px 10px;

}
.must2{
width:500px;
padding:25px 10px 40px 20px;
float:left;


}


.clear { clear: both; }

</style>

</head>

<body id="body">

   <div class="main">

      <div id="wrap">   
	  <?php
	   include("menu.php");
	   ?>
    		<div class="must">
						<div class="mhead">You must login or signup to register FIR <img src="images/smile.gif" height="35" /></div>
		<div class="mheadborder"> </div>

						
			</div> 		
			<div class="must1">
					 <?php
	   					include("login.php");
	  				 ?>
			</div> 
			<div class="must2">  <?php
	   include("registration.php");
	   ?></div>
	   
</div><div class="clear"></div>

		
 



	    <?php
	   include("footer1.php");
	   ?>
</div>
	   </div>

</body></html>
