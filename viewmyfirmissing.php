<?php
session_start(); 
include("header2.php");

$username=$_SESSION['username'];
$selectQuery = "select * from mstr_missingcitizens mm,mstr_city mc where mm.city_id=mc.city_id and username='".$username."'";
$resultSet = mysqli_query($conn,$selectQuery) or die(mysqli_error());

  if(mysqli_num_rows($resultSet)==0)
  
 

?>
<body id="body">
  <?php
	   include("header2.php");
	   ?>

   <div class="main">

   
<?php
	   include("slider1.php");
	   ?>
      <div id="wrap">   
	  <?php
	   include("menu.php");
	   ?>
<?php
include("sidebar.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" xml:lang="en-gb" xmlns="http://www.w3.org/1999/xhtml" lang="en-gb">
<head>
  <title>Welcome to the Crime Reporting System</title>
  <?php include("facebox.php"); ?>
  <script type="text/javascript" src="files/mootools.js"></script>
  <script type="text/javascript" src="files/caption.js"></script>
<!--StyleSheet included-->
<link rel="stylesheet" type="text/css" href="css/message.css" media="all">
<!--Stylesheet ends here-->

<!--Javascript included-->
<script type="text/javascript" src="javascript/validation.js"></script>
<?php /*<script type="text/javascript" src="files/contact.jsp"></script> 
 */?>
<link rel="stylesheet" href="files/template.css" type="text/css">
<link rel="stylesheet" href="files/constant.css" type="text/css">

</head>

<body id="body">
<div id="container" class="wrapper-container">
    <div class="corner-top-left">
    <div class="corner-top-right">
    <div class="corner-bottom-left">
    <div class="corner-bottom-right">
    <div class="clear">
    
	<table class="blog" cellpadding="0" cellspacing="0">
	<tbody>	
	<tr><td valign="top">
	<div>
	<div class="wrapper-title">
	<div class="bull-title "></div>
	</div>
	
	
	<div class="article-indent">
	<div class="clear">
	<table class="contentpaneopen">
	<tbody>
	<tr>

	  <?php
	
	

	while($record=mysqli_fetch_array($resultSet))
	{
		if($record["status"]==0)
		{
	?>
	<td>
		 <h1>Your FIR Inquiry in progress.get more details from police station your Police Station.</h1><br /></td>
	  <td width="120" height="98" valign="top" bordercolor="#000000">
	  

	   <img src="<?php echo $record["upload_photo"]; ?>" height="120" width="109">&nbsp;</td>
	  <td width="332" colspan="2" valign="top"><p>Name:<?php echo $record["first_name"]; ?></p>
	    <p>Address:<?php echo $record["address"]; ?></p>
	    <p>Date of missing:<?php echo $record["date_of_missing"]; ?></p>
	    <p>City:<?php echo $record["city_name"]; ?></p>
	   <?php }
	   if($record["status"]==1)
		{?>
			<h1>Your FIR of <?php echo $record["first_name"];?> is forwaded to another police Station.Inquiry in progress.get more details from police station.
			
			<?php }
			} 
	    ?> </td>
	</tr>
	      <div class="clear">
        
      </div>
	  </div>
	  <div class="article-separator-indent"><span 
	class="article_separator">&nbsp;</span></div>
	    <div class="article-indent">
         
	      </div></td>
	
	</tr>
	</tbody></table>
	</td>
	</tr>
	
	</tbody></table>
	
	</div>
	</div>
	</div>
	</div>
	</div>

	    <?php
	   include("footer1.php");
	   ?>
</div>
</div>



</body></html>