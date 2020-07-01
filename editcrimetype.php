<?php 
include("sessionHandler.php");
include("config.php");
$crimeid = $_GET['crimeid'];
$selectQuery = "select *from mstr_crimetype where crime_id = '".$crimeid."' ";

$rs = mysqli_query($conn,$selectQuery);
$record = mysqli_fetch_array($rs);

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
<h1>Edit Crime Type</h1>
<p>&nbsp;</p>
<form name="editcrimetype.php" action="updatecrimetype.php" method="post">
<table width="79%" border="0" bgcolor="#FFFFFF">
<tr>
	<td>
	</td>
	<td width="1%"></span><td width="1%"></td>
</tr>
<tr>
	<td height="10" colspan="4"></td>
</tr>
<tr>
	<td width="1%" height="27">&nbsp;</td>
  	<td width="36%" class="formField"><span class="style4 tableHeading style2"> Crime ID</span>:</td>
	<td width="32%" ><input  readonly="yes" type="text" id="crimeid" name="crimeid" value="<?php echo $record["crime_id"]; ?>"/>		
	</td>
	<td width="27%"><font color="#FF0000">
	  <div id="messageSecond"></div></font></td>
</tr>
<tr>
	<td width="1%" height="27">&nbsp;</td>
  	<td width="36%" class="formField"><span class="style4 tableHeading style2">Old Crime Type Name</span>:</td>
	<td width="32%" ><input  readonly="yes" type="text" id="crimetype" name="crimetype" value="<?php echo $record["crime_type"]; ?>"/>		
		
	  <script type="text/javascript">
				var f1 = new LiveValidation('crimetype');
				f1.add(Validate.Presence,{failureMessage: "\n It cannot be empty"});
				f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage: "It allows only characters"});
				f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage: "Invalid designation name"});

			</script>	</td>
	<td width="27%"><font color="#FF0000">
	  <div id="messageSecond"></div></font></td>
</tr>
<tr>
  <td height="88">&nbsp;</td>
  <td class="formField">Old Description: </td>
  <td ><textarea name="oldcrimedesc" cols="32" rows="3"  id="oldcrimedesc" readonly="readonly" >
  <?php echo $record["description"]; ?></textarea></td>
  <td>&nbsp;</td>
</tr>
<tr>
	<td width="1%" height="34">&nbsp;</td>
  	<td width="27%" class="formField">New Crime Type: </td>
	<td width="23%" >
	<input type="text" id="newcrimetype" name="newcrimetype" />
	<script type="text/javascript">
				var f1 = new LiveValidation('newcrimetype');
				f1.add(Validate.Presence,{failureMessage: "It cannot be empty"});
				f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage: "It allows only characters"});
				f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage: "Invalid new area name"});

			</script>	</td>
	<td width="45%">&nbsp;</td>
</tr>
<tr>
	<td width="1%">&nbsp;</td>
  	<td width="36%" class="formField">New  Description: </td>
	<td width="32%" >
	  <textarea name="newcrimedesc" cols="32" rows="3"  id="newcrimedesc"></textarea>
		<script type="text/javascript">
				    var f1 = new LiveValidation('newcrimedesc');
				    f1.add(Validate.Presence,{failureMessage: " Please enter crime descrption"});
				   </script> 
      </td>
	<td width="27%">&nbsp;</td>
</tr>
<tr>
	<td height="5" colspan="4"></td>
</tr>
<tr>
	<td width="1%">&nbsp;</td>
  	<td width="36%"></td>
	<td colspan="2" ><input name="reset" type="reset" class="header-button"  id="reset" value="Reset"/>
	<input name="update" type="submit" class="header-button"  id="update" value="Update"/></td>
</tr>
<tr>
	<td height="5" colspan="4"></td>
</tr>
</table>
</form>	
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
