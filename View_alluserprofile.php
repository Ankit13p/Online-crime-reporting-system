<?php
include("sessionHandler.php");
include("config.php");
$selectQuery = "select *from mstr_profile ma,mstr_login  mc where ma.username=mc.username ";
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
	

			<div style="padding:30px 15px 0 15px;">
     <h1> View User Details</h1>
      
      <center>
      <table width="100%" border="0" bgcolor="#FFFFFF" border="0">
	<tr>
		<td colspan="10" height="49" align="center" valign="middle" class="rowBorder">&nbsp;&nbsp;&nbsp;&nbsp;
		</td>
	</tr>
	<tr>
		<td height="5" colspan="10"></td>
	</tr>
	<tr>
	<td colspan="10"><hr /></td>
	</tr>
	<tr >
	 
      <td width="auto" align="center" class="style4 tableHeading style2">Sr. No.</td>
      <td width="auto" align="center" class="style4 tableHeading style2">&nbsp;First Name</td>      
      <td width="auto" align="center" class="style4 tableHeading style2">Middle Name </td>
	   <td width="auto" align="center" class="style4 tableHeading style2">Last Name </td>
	    <td width="auto" align="center" class="style4 tableHeading style2">Gender </td>
		  <td width="auto" align="center" class="style4 tableHeading style2">Username </td>
		   <td width="auto" align="center" class="style4 tableHeading style2">Contact no </td>
	   <td width="auto" align="center" class="style4 tableHeading style2">Email id </td>
	  
	  
	  
	  
     
    </tr>
	<tr>
	<td colspan="10"><hr /></td>
	</tr>
    <?php
	$i = 1;
	while($record=mysqli_fetch_array($resultSet))
	{
	?>
    <tr>
   
      <td align="center" ><?php echo $i++; ?></td>
      <td align="center" >&nbsp;&nbsp;<?php echo $record["first_name"];?></td>      
      <td align="center" >&nbsp;&nbsp;<?php echo $record["middle_name"];?></td>
	  <td align="center" >&nbsp;&nbsp;<?php echo $record["last_name"];?></td>
	  <td align="center" >&nbsp;&nbsp;<?php echo $record["gender"];?></td>
	  <td align="center" >&nbsp;&nbsp;<?php echo $record["username"];?></td>
	  <td align="center" >&nbsp;&nbsp;<?php echo $record["contact_no"];?></td>
	  <td align="center" >&nbsp;&nbsp;<?php echo $record["emailid"];?></td>
     
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
