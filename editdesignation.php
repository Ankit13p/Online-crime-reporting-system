<?php
ob_start();
include("sessionHandler.php");
include("config.php");
$desiid = $_GET['desiid'];
$selectQuery = "select *from mstr_designation where desi_id = '".$desiid."' ";


$rs = mysqli_query($conn,$selectQuery);
$record = mysqli_fetch_array($rs);
if(mysqli_num_rows($rs)==0)
	//header("location:viewpolice.php");
?>

<style type="text/css">
<!--
@import url("css/template.css");
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
<h1>Edit Designation</h1>
<p>&nbsp;</p>
<form name="editdesignation.php" action="updatedesignation.php" method="post">

<table width="80%" border="0" bgcolor="#FFFFFF">
<tr>
	<td>
	</td>
	<td width="1%"></span><td width="1%"></td>
</tr>
<tr>
	<td height="20" colspan="4"></td>
</tr>
<tr>
	<td width="1%" height="29">&nbsp;</td>
  	<td width="27%" class="formField"><span class="style4 tableHeading style2"> Designation ID</span>:</td>
	<td width="27%" ><input  readonly="yes" type="text" id="desiid" name="desiid" value="<?php echo $record["desi_id"]; ?>"/>		
	</td>
	<td width="41%"><font color="#FF0000">
	  <div id="messageSecond"></div></font></td>
</tr>
<tr>
	<td width="1%" height="29">&nbsp;</td>
  	<td width="27%" class="formField"><span class="style4 tableHeading style2">Old Designation Name</span>:</td>
	<td width="27%" ><input  readonly="yes" type="text" id="designation" name="designation" value="<?php echo $record["desi_name"]; ?>"/>		
		
	  <script type="text/javascript">
				var f1 = new LiveValidation('designation');
				f1.add(Validate.Presence,{failureMessage: "\n It cannot be empty"});
				f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage: "It allows only characters"});
				f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage: "Invalid designation name"});

			</script>	</td>
	<td width="41%"><font color="#FF0000">
	  <div id="messageSecond"></div></font></td>
</tr>
<tr>
	<td width="1%">&nbsp;</td>
  	<td width="27%" class="formField">New Designation Name: </td>
	<td width="27%" >
	<input type="text" id="newdesignation" name="newdesignation" />
	<script type="text/javascript">
				var f1 = new LiveValidation('newdesignation');
				f1.add(Validate.Presence,{failureMessage: "It cannot be empty"});
				f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage: "It allows only characters"});
				f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage: "Invalid new designation name"});

			</script>	</td>
	<td width="41%">&nbsp;</td>
</tr>
<tr>
	<td height="5" colspan="4"></td>
</tr>
<tr>
	<td width="1%">&nbsp;</td>
  	<td width="27%"></td>
	<td colspan="2" ><input name="reset" type="reset" class="header-button"  id="reset" value="Reset"/>
	<input name="update" type="submit" class="header-button"  id="update" value="Update"/></td>
</tr>
<tr>
	<td height="5" colspan="4"></td>
</tr>
</table>
<p>&nbsp;</p>
 
  </p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>	
 <p>&nbsp;</p>

   
<p>&nbsp;</p>
</div>

</p><div class="clear"></div>
	    <?php
	   include("footer1.php");
	   ?>
</div>
</div>
