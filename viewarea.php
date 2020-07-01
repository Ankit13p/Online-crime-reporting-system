<link rel="stylesheet" type="text/css" href="css/message.css" media="all">
<link rel="stylesheet" href="css/template.css" type="text/css">
<link rel="stylesheet" href="css/constant.css" type="text/css">

<?php
include("config.php");
$selectQuery = "select *from mstr_area ma,mstr_city  mc where ma.city_id=mc.city_id ";
$resultSet = mysqli_query($conn,$selectQuery) or die(mysqli_error());
//echo $selectQuery;
?>
<style type="text/css">
<!--
.style15 {font-size: 18px}
-->
</style>

<?php
session_start(); 
?>

		<div class="main">
		<div id="wrap">   
<?php
	include("menu.php");
?>

			<div id="content">
	
<?php
   include("sidebar.php");
?>

			<div class="div2">
      <h1>View Area Details </h1>
      <p><a href="area.php"><h3> Add Area </h3></a>  
       
            </p>
<center>
      <table width="100%" border="1" bgcolor="#FFFFFF" >
	<tr>
		<td colspan="6" height="49" align="center" valign="middle" class="rowBorder">&nbsp;&nbsp;&nbsp;&nbsp;
	<span class="highlight"> View Area </span></td>
	</tr>
	<tr>
		<td height="5" colspan="6"></td>
	</tr>
<tr style="font-weight:bold;" >

	 
      <td  align="center" class="style4 tableHeading style2"><b>Sr. No.</b></td>
      <td class="style4 tableHeading style2"><b>Area Name</b></td>      
      <td  class="style4 tableHeading style2"><b>City Name</b> </td>
      <td  align="center" class="style4 tableHeading style2"><b>Edit</b></td>
      <td  align="center" class="style4 tableHeading style2"><b>Delete</b></td>
    </tr>
	<tr>
	<td colspan="6" height="5"></td>
</tr>

    <?php
	$i = 1;
	while($record=mysqli_fetch_array($resultSet))
	{
	?>
    <tr >
      
      <td align="center" ><?php echo $i++; ?></td>
      <td align="left" >&nbsp;&nbsp;<?php echo $record["area_name"];?></td>      
      <td align="left" >&nbsp;&nbsp;<?php echo $record["city_name"];?></td>
      <td align="center" ><a href="editarea.php?areaid=<?php echo $record["area_id"];?>">
	  <img title="Edit area" src="images/edit.png"  /> </a></td>
      <td align="center" ><a href="deletearea.php?areaid=<?php echo $record["area_id"];?>">
	  <img title="Delete area Details" src="images/delete.png" /></a></td>
    </tr>
	
    <?php
	}//while closed	
	?>
    
  </table>
</center>
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

