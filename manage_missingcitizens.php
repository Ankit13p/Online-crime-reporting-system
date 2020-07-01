<?php
include("sessionHandler.php");
include("config.php");

$selectQuery = "select * from mstr_missingcitizens mmc,mstr_city mc,mstr_area ma where mmc.city_id=mc.city_id and mmc.area_id=ma.area_id";
$resultSet = mysqli_query($conn,$selectQuery) or die(mysqli_error());
//echo $selectQuery;
?>
<style type="text/css">
<!--
.style15 {font-size: 18px}
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
      <h1> missing citizen detail </h1>
      <p><a href="missing_person.php" class="clear1 style7"><h3> Add missing perosn </h3></a>  
       
        </strong>      </p>
      <p>&nbsp;</p><center>
      <table width="100%" border="1" bgcolor="#FFFFFF">
	<tr>
		<td colspan="9" height="49" align="center" valign="middle" class="rowBorder">&nbsp;&nbsp;&nbsp;&nbsp;
		<span class="highlight"><h3> View missing citizen </h3></span></td>
	</tr>
	<tr>
	<td colspan="9"><hr /></td>
	</tr>
	<tr >
	  
      <td width="12%" align="center" class="style4 tableHeading style2">Sr. No.</td>
      <td width="28%" align="center" class="style4 tableHeading style2">&nbsp;person Name</td>      
      <td width="32%" align="center" class="style4 tableHeading style2">Gender</td>
      <td width="32%" align="center" class="style4 tableHeading style2">Address</td>
      <td width="32%" align="center" class="style4 tableHeading style2">&nbsp;City</td>
      <td width="32%" align="center" class="style4 tableHeading style2">&nbsp;&nbsp;Area</td>	  
	  <td width="32%" align="center" class="style4 tableHeading style2">&nbsp;&nbsp;Date of Missing</td>	  
      <td width="11%" align="center" align="center" class="style4 tableHeading style2">&nbsp;&nbsp;&nbsp;Edit</td>
      <td width="14%" align="center" align="center" class="style4 tableHeading style2">&nbsp;&nbsp;&nbsp;Delete</td>
    </tr>
	<tr>
	<td colspan="9"><hr /></td>
	</tr>
    <?php
	$i = 1;
	while($record=mysqli_fetch_array($resultSet))
	{
	?>
    <tr >
      
      <td align="center" ><?php echo $i++; ?></td>
      <td align="center" >&nbsp;&nbsp;<?php echo $record["first_name"];?></td>      
      <td align="center" >&nbsp;&nbsp;<?php echo $record["gander"];?></td>
      <td align="center" >&nbsp;&nbsp;<?php echo $record["address"];?></td>      
      <td align="center" >&nbsp;&nbsp;<?php echo $record["city_name"];?></td>
      <td align="center" >&nbsp;&nbsp;<?php echo $record["area_name"];?></td>      
	        <td align="center" >&nbsp;&nbsp;<?php echo $record["date_of_missing"];?></td>      
     
      <td align="center" ><a href="editperson.php?person=<?php echo $record["first_name"];?>">
	  <img title="Edit missing person" src="images/edit.png"  /> </a></td>
      <td align="center" ><a href="deleteperson.php?person=<?php echo $record["first_name"];?>">
	  <img title="Delete missing person Details" src="images/delete.png" /></a></td>
    </tr>
	
    <?php
	}//while closed	
	?>
    
  </table></center>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
</div>

</p><div class="clear"></div>
	    <?php
	   include("footer1.php");
	   ?>
</div>
</div>