<?php include("config.php");
?><head>
  <title>Welcome To Crime Reporting System</title>
  <?php
  	include("sessionHandler.php");
	
//echo $selectQuery;


	
	$selectQuery = "select * from mstr_missingcitizens mm,mstr_city mc where mm.city_id=mc.city_id ";
$resultSet = mysqli_query($conn,$selectQuery) or die(mysqli_error());

  if(mysqli_num_rows($resultSet)==0)
   ?>

<!--StyleSheet included-->
<link rel="stylesheet" type="text/css" href="css/message.css" media="all">
<!--Stylesheet ends here-->

<!--Javascript included-->
<script type="text/javascript" src="javascript/validation.js">

</script>

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
			 <h1> Missing Citizens</h1>
	
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
	
	$i = 1;

	while($record=mysqli_fetch_array($resultSet))
	{
	?>
	  <td width="120" height="98" valign="top" bordercolor="#000000">
	  <?php $i++; ?>
	  <img style="border-radius:150px" src="<?php echo $record["upload_photo"]; ?>" height="110" width="110">&nbsp;</td>
	  <td width="332" colspan="2" valign="top"><p> <font style="font-weight:bold";>Name: </font><?php echo $record["first_name"]; ?></p>
	    <p> <font style="font-weight:bold";>Address: </font><?php echo $record["address"]; ?></p>
	    <p> <font style="font-weight:bold";>Date of missing: </font><?php echo $record["date_of_missing"]; ?></p>
	    <p>  <font style="font-weight:bold";>City: </font><?php echo $record["city_name"]; ?></p>
	    </td>
		
	</tr>
	<tr>
	  <td>&nbsp;</td>
	  <td colspan="2"><div class="border-link"> 
	<a href="viewmore.php?person=<?php echo $record["first_name"];?>" rel="facebox" class="readon">View More</a> </div></td>
	</tr>
	
	 
	<?php } ?>
	</tbody>
	
	</table>
	
	</div>
	</div>
	</div>
	</td>
	</tr>
	</tbody>
	
	</table>
</div>

</p><div class="clear"></div>
	    <?php
	   include("footer1.php");
	   ?>
</div>
</div>