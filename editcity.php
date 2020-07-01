<?php 
ob_start();
include("sessionHandler.php");
include("config.php");
//include("sidebar.php");

$cityid=$_GET['cityid'];
$selectQuery = "select * from mstr_city where city_id='".$cityid."' ";


$rs = mysqli_query($conn,$selectQuery);
$record = mysqli_fetch_array($rs);

?>

<style type="text/css">
<!--
@import url("css/template.css");
-->
</style>
<?php
?>
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
<h1>Edit City</h1>
<p>&nbsp;</p>

<form name="editcity" action="updatecity.php" method="post">
<table width="67%" border="0" bgcolor="#FFFFFF">
<tr>
	<td >
</td>
</tr>
<tr>
	<td height="20" colspan="4"></td>
</tr>
<tr>
	<td width="1%" height="35">&nbsp;</td>
  	<td width="27%" class="formField"><span class="style4 tableHeading style2">ID</span>:</td>
	<td width="23%" ><input  readonly="yes" type="text" id="cityid" name="cityid" value="<?php echo $record["city_id"]; ?>"/>		
		
	</td>
	<td width="45%"><font color="#FF0000"><div id="messageSecond"></div></font></td>
</tr>
<tr>
	<td width="1%" height="35">&nbsp;</td>
  	<td width="27%" class="formField"><span class="style4 tableHeading style2">Old City Name</span>:</td>
	<td width="23%" ><input  readonly="yes" type="text" id="city" name="city" value="<?php echo $record["city_name"]; ?>"/>		
		
			<script type="text/javascript">
				var f1 = new LiveValidation('city');
				f1.add(Validate.Presence,{failureMessage: "\n It cannot be empty"});
				f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage: "It allows only characters"});
				f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage: "Invalid city name"});

			</script>	</td>
	<td width="45%"><font color="#FF0000"><div id="messageSecond"></div></font></td>
</tr>
<tr>
	<td width="1%" height="34">&nbsp;</td>
  	<td width="27%" class="formField">New City Name: </td>
	<td width="23%" >
	<input type="text" id="newcityname" name="newcityname" />
	<script type="text/javascript">
				var f1 = new LiveValidation('newcityname');
				f1.add(Validate.Presence,{failureMessage: "It cannot be empty"});
				f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage: "It allows only characters"});
				f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage: "Invalid new city name"});

			</script>	</td>
	<td width="45%">&nbsp;</td>
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
	<td height="207" colspan="4"></td>
</tr>
</table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>
 
  </p>
  <p>&nbsp;</p>
</form>	
			</div>
		</div>
			<div class="clear"></div>
	   
<?php
	include("footer1.php");
?>

		</div>
		</div>