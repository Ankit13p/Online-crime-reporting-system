<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Welcomw To Crime Reporting System</title>
<?php 
include("config.php");
include("sessionHandler.php");

$selectQuery = "select * from mstr_missingcitizens where first_name='".$_REQUEST['person']."'";
 $rs = mysqli_query($conn,$selectQuery)or die(mysqli_error());
$record = mysqli_fetch_array($rs);
   ?>

<style type="text/css">
<!--
.style3 {font-size: 14px}
-->
</style>
<div class="main">
<div id="wrap">   
<?php
	include("menu.php");
?>

			<link rel="stylesheet" href="css/template.css" type="text/css">
			<link rel="stylesheet" href="css/constant.css" type="text/css">
			<div id="content">
	
<?php
   include("sidebar.php");
?>

			<div class="div2">
<h1>Details </h1>
<br />
<p><font style="font-weight:bold";>&nbsp;Clue :</font> <?php echo $record["special_clue"];?></p><br />
<p>&nbsp;<font style="font-weight:bold";>Contact Number :</font> <?php echo $record["contactno"];?></p><br />
<p>&nbsp;<font style="font-weight:bold";>Description of missing person : </font><?php echo $record["descript"];?></p>
<br />
<p><font style="font-weight:bold";>&nbsp;status of missing fir :</font> <?php echo $record["status"];?></p>
</div>

</p><div class="clear"></div>
	    <?php
	   include("footer1.php");
	   ?>
</div>
</div>