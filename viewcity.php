<?php
include("sessionHandler.php");
include("config.php");


$selectQuery = "select *from mstr_city ";
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
 
      <h1>View City Details </h1>
      <p><a href="city.php" class="clear1 style7"> <h3> Add City </h3></a>  
       
        </strong>      </p>
	<center>
      <table width="100%" border="1" bgcolor="#FFFFFF">
	<tr>
		<td colspan="4" height="49" align="left" valign="middle" class="rowBorder">&nbsp;&nbsp;&nbsp;&nbsp;
		<span class="highlight">View City </span></td>
	</tr>
	<tr>
		<td height="5" colspan="4"></td>
	</tr>
	<tr style="font-weight:bold;" >
	  
      <td width="12%" align="center" class="style4 tableHeading style2">Sr. No.</td>
      <td width="49%" class="style4 tableHeading style2">&nbsp;City Name</td>      
      <td width="17%" align="center" class="style4 tableHeading style2">Edit</td>
      <td width="17%" align="center" class="style4 tableHeading style2">Delete</td>
    </tr>
	<tr>
	<td colspan="4" height="5"></td>
</tr>
    <?php
	$i = 1;
	while($record=mysqli_fetch_array($resultSet))
	{
	?>
    <tr >
      
      <td align="center" ><?php echo $i++; ?></td>
     <td align="left" >&nbsp;&nbsp;<?php echo $record["city_name"];?></td>    
      <td align="center" ><a href="editcity.php?cityid=<?php echo $record["city_id"];?>">
	  <img title="Edit City" src="images/edit.png"  /> </a></td>
      <td align="center" ><a href="deletecity.php?cityid=<?php echo $record["city_id"];?>">
	  <img title="Delete City Details" src="images/delete.png" /></a></td>
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
