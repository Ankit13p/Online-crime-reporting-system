<?php 
ob_start();
include("sessionHandler.php");
include("config.php");
//include("sidebar.php");
//$areaname=$_GET['areaname'];
$areaid=$_GET['areaid'];
$selectQuery = "select *from mstr_area where area_id='".$areaid."' ";


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
	   
	<h1>Edit Area</h1>
		<p>&nbsp;</p>

		<form name="editarea" action="updatearea.php" method="post">
			<table width="67%" border="0" bgcolor="#FFFFFF">
				<tr>
					<td>
					</td>
					<td width="1%"></span><td width="1%">
					</td>
				</tr>
				<tr>
					<td height="20" colspan="4"></td>
				</tr>
				<tr>
					<td width="1%" height="35">&nbsp;
					</td>
					<td width="27%" class="formField"><span class="style4 tableHeading style2">ID</span>:
					</td>
					<td width="23%" ><input  readonly="yes" type="text" id="areaid" name="areaid" value="<?php echo $record["area_id"]; ?>"/>		
					</td>
					<td width="45%"><font color="#FF0000"><div id="messageSecond"></div></font>
					</td>
				</tr>
				<tr>
					<td width="1%" height="35">&nbsp;</td>
					<td width="27%" class="formField"><span class="style4 tableHeading style2">Old Area Name</span>:</td>
					<td width="23%" ><input  readonly="yes" type="text" id="area" name="area" value="<?php echo $record["area_name"]; ?>"/>		
						
						<script type="text/javascript">
							var f1 = new LiveValidation('area');
							f1.add(Validate.Presence,{failureMessage: "\n It cannot be empty"});
							f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage: "It allows only characters"});
							f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage: "Invalid area name"});
			
						</script>	
						
					</td>
					<td width="45%"><font color="#FF0000"><div id="messageSecond"></div></font></td>
				</tr>
				<tr>
					<td width="1%" height="34">&nbsp;</td>
					<td width="27%" class="formField">New Area Name: </td>
					<td width="23%" >
						<input type="text" id="newareaname" name="newareaname" />
						<script type="text/javascript">
									var f1 = new LiveValidation('newareaname');
									f1.add(Validate.Presence,{failureMessage: "It cannot be empty"});
									f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage: "It allows only characters"});
									f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage: "Invalid new area name"});
					
						</script>
					</td>
					<td width="45%">&nbsp;
					</td>
				</tr>
				<tr>
					<td height="5" colspan="4">
					</td>
				</tr>
				<tr>
					<td width="1%">&nbsp;
					</td>
  					<td width="27%">
					</td>
					<td colspan="2" >
						<input name="reset" type="reset" class="header-button"  id="reset" value="Reset"/>
						<input name="update" type="submit" class="header-button"  id="update" value="Update"/>
					</td>
				</tr>
				<tr>
					<td height="207" colspan="4"></td>
				</tr>
			</table>
			  <p>&nbsp;</p>
			  <p>&nbsp;</p>
			  <p>&nbsp;</p>
			  <p>&nbsp;</p>
		</form>	
</div>

</p><div class="clear"></div>
	    <?php
	   include("footer1.php");
	   ?>
</div>
</div>