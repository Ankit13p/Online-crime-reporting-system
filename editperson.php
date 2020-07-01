<?php 
ob_start();
include("sessionHandler.php");
include("config.php");

$selectQuery = "select * from mstr_missingcitizens where first_name = '". $_REQUEST['person']."'";
//echo $selectQuery;

$rs = mysqli_query($conn,$selectQuery);
$record = mysqli_fetch_array($rs);

if(mysqli_num_rows($rs)==0)
	header("location:manage_missingcitizens.php");

?>
<link type="text/css" href="themes/base/jquery.ui.all.css" rel="stylesheet" />
	<script type="text/javascript" src="jquery-1.4.2.js"></script>
	<script type="text/javascript" src="ui/jquery.ui.core.js"></script>
	<script type="text/javascript" src="ui/jquery.ui.widget.js"></script>
	<script type="text/javascript" src="ui/jquery.ui.datepicker.js"></script>
	<script type="text/javascript">
	$(function() {		
		$('#sdate').datepicker({
			changeMonth: true,
			changeYear: true,
			yearRange: '1900:2010'
		});
		$('#txtjoin').datepicker({
			changeMonth: true,
			changeYear: true,
		});		
	});	
	</script>

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
			<h1>Edit Missing Citizen Detail</h1>
<p>&nbsp;</p>

<form name="frmperson" action="updateperson.php" method="post">
<table  width="67%" border="0" bgcolor="#FFFFFF">
             <tr>
               <td width="250" height="45" align="left" valign="middle" bgcolor="#FFFFFF">
			     <span class="style3">First Name: </span>
               <td colspan="3" align="left" bgcolor="#FFFFFF">
                 <span class="style3">
                <input type="text" disabled="disabled" value="<?php echo $record["first_name"]; ?>" name="fname" />
				 <script type="text/javascript">
				    var f1 = new LiveValidation('fname');
				    f1.add(Validate.Presence,{failureMessage: " Please enter Firstname"});
				   f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,
				   failureMessage:" It allows only characters"});
				    f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,
					failureMessage:" Invalid Firstname"});
				 </script>
                 </span></td>
             
			 </tr>
             <tr bgcolor="#993366">
				<td width="" height="37" align="left" valign="middle" bgcolor="#FFFFFF">
			   <span class="style19" style="color: #000000">Middle Name: </span>
			   
				<td colspan="3" align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                 <label>
                <input type="text" disabled="disabled" value="<?php echo $record["middle_name"]; ?>" name="mname" />
				 <script type="text/javascript">
				    var f1 = new LiveValidation('mname');
				    f1.add(Validate.Presence,{failureMessage: " Please enter Middlename"});
				   //f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage:
				   // " It allows only characters"});
				    f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,
					failureMessage:" Invalid Middlename"});
				 </script> 
                 </label>
               </span></td>
             </tr>
             <tr>
               <td height="41" align="left" valign="middle" bgcolor="#FFFFFF">
			   <span class="style19" style="color: #000000">Last Name:</span>
               <td colspan="3" align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                 <label>
                 <input type="text" disabled="disabled" value="<?php echo $record["last_name"]; ?>" name="lname" />
				 <script type="text/javascript">
				    var f1 = new LiveValidation('lname');
				    f1.add(Validate.Presence,{failureMessage: " Please enter Lastname"});
				   //f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage:
				   // " It allows only characters"});
				    f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,
					failureMessage:"Invalid Lastname"});
				 </script> 
                 </label>
               </span></td>
             </tr>
             <tr bgcolor="#999999">
               <td height="47" align="left" valign="middle" bgcolor="#FFFFFF">
			   <span class="style19" style="color: #000000">Gender:</span>
               <td colspan="3" align="left" bgcolor="#FFFFFF">
                 <span class="style15 style3">
                 <label>                   
                   <input type="radio" name="gender" disabled="disabled" value="Male" <?php if($record["gander"]=="Male") echo "checked = 'checked'"?>>Male</label>        
                 <label>
                   <input type="radio" name="gender" disabled="disabled" value="Female" <?php if($record["gander"]=="Female") echo "checked = 'checked'"?>  >Female</label>
                 </span></td>
             </tr>
             <tr>
               <td height="113" align="left" valign="middle" bgcolor="#FFFFFF">
			   <span class="style19" style="color: #000000"> Address:</span>
               <td width="197" align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                 <label>
                 <TEXTAREA ROWS="5" COLS="30" name="address" disabled="disabled" id="address" style="background-color: #EEEEEE" ><?php echo $record["address"]; ?></TEXTAREA>
				 <script type="text/javascript">
				    var f1 = new LiveValidation('address');
				    f1.add(Validate.Presence,{failureMessage: " Please enter Address"});
				   //f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage:
				   // " It allows only characters"});
				    //f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage: 
					       //" Invalid Address"});
				 </script> 
                 </label>
               </span></td><td width="181"></td></tr>
			   <tr>
               <td width="100" height="52" align="left" valign="middle" bgcolor="#FFFFFF">
			   <span class="style19" style="color: #000000">City:</span></td>
               <td width="197" align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                 <select name="city" size="1"  id="city" disabled="disabled" >
				 		<?php
						  $cityQuery = "select *from mstr_city";
						  $rsCity = mysqli_query($conn,$cityQuery);
						  while($rowCity = mysqli_fetch_array($rsCity))
						  {
						  ?>
                  			<option value="<?php echo $rowCity['city_id']?>" <?php if($record["city_id"]==$rowCity['city_id']) echo "selected"; ?>>
							<?php echo $rowCity['city_name']?></option>
                  		<?php }?>
				 <script type="text/javascript">
				    var f1 = new LiveValidation('city');
				    f1.add(Validate.Presence,{failureMessage: "Please enter city name"});				   
				 </script> 
                 </select>
				 </span></td>
             </tr>

			  <tr>
               <td width="100" height="52" align="left" valign="middle" bgcolor="#FFFFFF">
			   <span class="style19" style="color: #000000">Area:</span></td>
               <td width="197" align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                 <select name="area" size="1"  id="area" disabled="disabled" >
				 		<?php
						  $cityQuery = "select *from mstr_area";
						  $rsCity = mysqli_query($conn,$cityQuery);
						  while($rowCity = mysqli_fetch_array($rsCity))
						  {
						  ?>
                  			<option value="<?php echo $rowCity['area_id']?>" <?php if($record["area_id"]==$rowCity['area_id']) echo "selected"; ?>>
							<?php echo $rowCity['area_name']?></option>
                  		<?php }?>
				 <script type="text/javascript">
				    var f1 = new LiveValidation('area');
				    f1.add(Validate.Presence,{failureMessage: "Please enter area name"});				   
				 </script> 
                 </select>
				 </span></td>
             </tr>
             <tr bgcolor="#993366">
                    <td height="23" align="left" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">Missing Date:</span> </td>
                    <td align="left" bgcolor="#FFFFFF"><input disabled="disabled" type="text" name="jdate" id="jdate"   value="<?php echo $record["date_of_missing"]; ?>"/></td>
                  </tr>
             <tr bgcolor="#993366">
               <td height="99" align="left" valign="middle" bgcolor="#FFFFFF">
			   <span class="style19" style="color: #000000">Special Clue :</span></td>
               <td colspan="3" align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                                 
                 <TEXTAREA ROWS="5" COLS="30" name="clue" id="clue" disabled="disabled" style="background-color: #EEEEEE" ><?php echo $record["special_clue"]; ?></TEXTAREA>
               </span></td>
             </tr>
			 <tr bgcolor="#993366">
               <td height="99" align="left" valign="middle" bgcolor="#FFFFFF">
			   <span class="style19" style="color: #000000">Status :</span></td>
               <td colspan="3" align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                                 
                 <TEXTAREA ROWS="5" COLS="30" name="status" id="status"  style="background-color: #EEEEEE" ><?php echo $record["status"]; ?></TEXTAREA>
               </span></td>
             </tr>
    <tr>
                    <td></td><td>
					<input name="reset2" type="reset" class="header-button" value="Reset" />
					</td>
					</tr>
					<td></td><td>
                    <input name="Submit" type="submit" class="header-button"  value="Submit" /></td>
                  </tr>
           </table>
	
</form>	
</div>

</p><div class="clear"></div>
	    <?php
	   include("footer1.php");
	   ?>
</div>
</div>