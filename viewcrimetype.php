<?php
include("sessionHandler.php");
include("config.php");


$selectQuery = "select *from mstr_crimetype ";
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
 
      <h1>View Types of Crime Details </h1>
      <p><a href="crimetype.php"> <h3> Add Crime Type</h3> </a> 
          
        </strong></p>
	<center>
      <table width="100%" border="1" bgcolor="#FFFFFF">
	<tr>
		<td colspan="5" height="31" align="left" valign="middle" class="rowBorder">&nbsp;&nbsp;&nbsp;&nbsp;
		<span class="highlight"> View Different Types of Crime </span></td>
	</tr>
	<tr>
		<td height="5" colspan="5"></td>
	</tr>
	<tr >
	  
      <td width="10%" align="center" class="style4 tableHeading style2">Sr. No.</td>
      <td width="28%" class="style4 tableHeading style2">&nbsp;Crime Type Name </td>      
      <td width="34%" class="style4 tableHeading style2">Description</td>
      <td width="11%" align="center" class="style4 tableHeading style2">Edit</td>
      <td width="12%" align="center" class="style4 tableHeading style2">Delete</td>
    </tr>
	<tr>
	<td colspan="5" height="5"></td>
</tr>
<tr>
	<td colspan="5" class="rowLine2"></td>
</tr>
<tr>
	<td colspan="5" height="3"></td>
</tr>
    <?php
	$i = 1;
	while($record=mysqli_fetch_array($resultSet))
	{
	?>
    <tr >
     
      <td align="center" ><?php echo $i++; ?></td>
      <td align="left" ></a>&nbsp;&nbsp;<?php echo $record["crime_type"];?></td>      
      <td align="left" >&nbsp;<?php echo $record["description"] ;?></td>
      <td align="center" ><a href="editcrimetype.php?crimeid=<?php echo $record["crime_id"];?>">
	  <img title="Edit crime type" src="images/edit.png"  /> </a></td>
      <td align="center" ><a href="deletecrimetype.php?crimeid=<?php echo $record["crime_id"];?>">
	  <img title="Delete crime type Details" src="images/delete.png" /></a></td>
    </tr>
	
    <?php
	}//while closed	
	?>
    
  </table>
</center>
   <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
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
