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
	
<?php
   include("sidebar.php");
?>

			<div class="div2">
     <h1> View User Details</h1>
      <p><a href="profile.php" class="clear1 style7"><h3>  Add User </h3></a>  
       
        </strong>      </p>
      <center>
      <table width="100%" border="1" bgcolor="#FFFFFF">
	<tr>
		<td colspan="10" height="49" align="center" valign="middle" class="rowBorder">&nbsp;&nbsp;&nbsp;&nbsp;
		<span class="highlight"> View User </span></td>
	</tr>
	<tr>
		<td height="5" colspan="10"></td>
	</tr>
	<tr>
	<td colspan="10"><hr /></td>
	</tr>
	<tr >
	 
      <td width="12%" align="center" class="style4 tableHeading style2">Sr. No.</td>
      <td width="28%" align="center" class="style4 tableHeading style2">&nbsp;First Name</td>      
      <td width="32%" align="center" class="style4 tableHeading style2">Middle Name </td>
	   <td width="32%" align="center" class="style4 tableHeading style2">Last Name </td>
	    <td width="32%" align="center" class="style4 tableHeading style2">Gender </td>
		  <td width="32%" align="center" class="style4 tableHeading style2">username </td>
		   <td width="32%" align="center" class="style4 tableHeading style2">Contact no </td>
	   <td width="32%" align="center" class="style4 tableHeading style2">Email id </td>
	  
	  
	  
	  
      <td width="11%" align="center" class="style4 tableHeading style2">Edit</td>
      <td width="14%" align="center" class="style4 tableHeading style2">Delete</td>
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
      <td align="center" ><a href="editprofile.php?username=<?php echo $record["username"];?>">
	  <img title="Edit user" src="images/edit.png"  /> </a></td>
      <td align="center" ><a href="deleteuser.php?uid=<?php echo $record["id"];?>">
	  <img title="Delete user Details" src="images/delete.png" /></a></td>
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
