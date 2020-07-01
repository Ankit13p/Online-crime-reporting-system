<?php
include("sessionHandler.php");
include("config.php");
$selectQuery = "select *from mstr_designation ";
$resultSet = mysqli_query($conn,$selectQuery) or die(mysqli_error());
//echo $selectQuery;
?>

<link rel="stylesheet" href="files/template.css" type="text/css">
<link rel="stylesheet" href="files/constant.css" type="text/css">
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
      <h1>View Designation Details</h1>
      <p><a href="designation.php"> <h3>Add Designation</h3> </a> 
         
        </strong></p>
<center>
      <table width="100%" border="1" bgcolor="#FFFFFF">
	<tr>
		<td colspan="4" height="33" align="left" valign="middle" class="rowBorder">&nbsp;&nbsp;&nbsp;&nbsp;
		<span class="highlight"> View Designation </span></td>
	</tr>
	<tr>
		<td height="5" colspan="4"></td>
	</tr>
	<tr style="font-weight:bold;" >

	 
      <td width="10%" align="center" class="style4 tableHeading style2">Sr. No.</td>
      <td width="51%" class="style4 tableHeading style2">&nbsp;Designation  Name</td>      
      <td width="17%" align="center" class="style4 tableHeading style2">Edit</td>
      <td width="17%" align="center" class="style4 tableHeading style2">Delete</td>
    </tr>
	<tr>
	<td colspan="4" height="5"></td>
</tr>
<tr>
	<td colspan="4" class="rowLine2"></td>
</tr>
<tr>
	<td colspan="4" height="3"></td>
</tr>
    <?php
	$i = 1;
	while($record=mysqli_fetch_array($resultSet))
	{
	?>
    <tr >
     
      <td align="center" ><?php echo $i++; ?></td>
      <td align="left" ></a>&nbsp;&nbsp;<?php echo $record["desi_name"];?></td>      
      <td align="center" ><a href="editdesignation.php?desiid=<?php echo $record["desi_id"];?>">
	  <img title="Edit designation" src="images/edit.png"  /> </a></td>
      <td align="center" ><a href="deletedesignation.php?desiid=<?php echo $record["desi_id"];?>">
	  <img title="Delete designation Details" src="images/delete.png" /></a></td>
    </tr>
	
    <?php
	}//while closed	
	?>
   
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>

   
</center>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      </div>




</p>
</div>

</p><div class="clear"></div>
	    <?php
	   include("footer1.php");
	   ?>
</div>
</div>