<?php
include("sessionHandler.php");
include("config.php");
?>
<link rel="stylesheet" href="files/template.css" type="text/css">
<link rel="stylesheet" href="files/constant.css" type="text/css">
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
.style3 {color: #000000}
.style15 {font-size: 18px}
.style19 {font-size: 11px; }
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
   <form action="chkPolicestationdetail.php" method="post" enctype="multipart/form-data" name="form1">
                <div>
                  <h1> Information about Police Station</h1>
                </div>
                <p>&nbsp;</p>
                <table width="770" height="433" border="0" align="center" cellpadding="10" cellspacing="5">
                  <tr>
                    <td width="165" height="25" align="Left" valign="middle" bgcolor="#FFFFFF">
					<span class="style3">Police Station Name: </span> </td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style3">
                      <input name="psname" type="text" id="psname" size="35" />
                      <script type="text/javascript">
						var f1 = new LiveValidation('psname');
						f1.add(Validate.Presence,{failureMessage: " Please enter Firstname"});
					  // f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,
					   //failureMessage:" It allows only characters"});
						f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,
						failureMessage:" Invalid Firstname"});
					 </script>
                    </span></td>
                  </tr>
                  <tr bgcolor="#993366">
                    <td height="21" align="Left" valign="middle" bgcolor="#FFFFFF"><span class="style3">Starting Date:</span></td>
                    <td align="left" bgcolor="#FFFFFF"><input type="text" name="sdate" id="sdate" /></td>
                  </tr>
                  <tr bgcolor="#993366">
                    <td height="46" align="Left" valign="middle" bgcolor="#FFFFFF"><span class="style3">City:</span></td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style3">
                      <select name="city" size="1"  id="city" >
                        <option>----select----</option>
						<?php
						  $cityQuery = "select *from mstr_city";
						  $rsCity = mysqli_query($conn,$cityQuery);
						  while($rowCity = mysqli_fetch_array($rsCity))
						  {
						  ?>
                        <option value="<?php echo $rowCity['city_id']?>"> <?php echo $rowCity['city_name']?></option>
                        <?php }?>
                        <script type="text/javascript">
				          var f1 = new LiveValidation('city');
				          f1.add(Validate.Presence,{failureMessage: "Please enter city name"});				   
				        </script>
                      </select>
                    </span></td>
                  </tr>
                  <tr bgcolor="#993366">
                    <td height="46" align="Left" valign="middle" bgcolor="#FFFFFF">
					<span class="style3">Area Name: </span> </td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style3">
                      <select name="area" size="1"  id="area" >
					    <option>----select----</option>  
                        <?php
						  $areaQuery = "select *from mstr_area";
						  $rsArea = mysqli_query($conn,$areaQuery);
						  while($rowArea = mysqli_fetch_array($rsArea))
						  {
						  ?>
                        <option value="<?php echo $rowArea['area_id']?>"> 
						<?php echo $rowArea['area_name']?></option>
                        <?php }?>
                        <script type="text/javascript">
				          var f1 = new LiveValidation('area');
				          f1.add(Validate.Presence,{failureMessage: "Please enter area name"});				   
				        </script>
                      </select>
                    </span></td>
                  </tr>
				   
                  <tr>
                    <td height="79" align="Left" valign="middle" bgcolor="#FFFFFF">
					<span class="style3"> Address:</span> </td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style3">
                      <label>
                      <script type="text/javascript">
				    var f1 = new LiveValidation('address');
				    f1.add(Validate.Presence,{failureMessage: " Please enter Address"});
				   //f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage:
				   // " It allows only characters"});
				    //f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage: 
					       //" Invalid Address"});
				 </script>
                      </label>
                    </span><span class="style3">
                      <textarea name="address" cols="32" rows="3"  id="address"></textarea>
                    </span></td>
                  </tr>
                  <tr bgcolor="#993366">
                    <td height="28" align="Left" valign="middle" bgcolor="#FFFFFF">
					<span class="style3">Pin-code:</span></td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style3">
                      <input name="pincode" type="text" id="pincode" maxlength="6" />
                      <script type="text/javascript">
					   var f1 = new LiveValidation('pincode');
					   f1.add(Validate.Presence,{failureMessage: " It cannot be empty"});
					   f1.add(Validate.Format,{pattern: /^[0-9]+$/ ,
					   failureMessage: " It allows only numbers"});
					   f1.add( Validate.Length, { minimum: 6, maximum: 6 } );
				     </script>
                    </span></td>
                  </tr>
                  <tr bgcolor="#999999">
                    <td height="27" align="Left" valign="middle" bgcolor="#FFFFFF"><span class="style3">Contact number:</span></td>
                    <td align="left" bgcolor="#FFFFFF"><input type="text" name="contactno" id="contactno" maxlength="12" /></td>
                  </tr>
                  <tr bgcolor="#999999">
                    <td height="27" align="Left" valign="middle" bgcolor="#FFFFFF">
					<span class="style3">Email-id</span>: </td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style3">
                      <input name="emailid" type="text" id="emailid" size="35" maxlength="254" />
			            <script type="text/javascript">
				           var f1 = new LiveValidation('emailid');
				           f1.add(Validate.Presence,{failureMessage: " Please enter email-id"});
				           f1.add( Validate.Email );
				        </script>                       
                    </span></td>
                  </tr>
                  <tr bgcolor="#993366">
                    <td height="28" align="Left" valign="middle" bgcolor="#FFFFFF"><span class="style3">Contact Person:</span></td>
                    <td align="left" bgcolor="#FFFFFF"><input name="contactperson" type="text" id="contactperson" size="35" /><script type="text/javascript">
					<script type="text/javascript">
				    var f1 = new LiveValidation('contactperson');
				    f1.add(Validate.Presence,{failureMessage: " Please enter contact person name"});
				  // f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,
				   //failureMessage:" It allows only characters"});
				    f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,
					failureMessage:" Invalid contact person names"});
				 </script>					</td>
                  </tr>
                  <tr bgcolor="#993366">
                    <td align="Left" valign="middle" bgcolor="#FFFFFF"></td>
                    <td align="left" bgcolor="#FFFFFF"></td>
                  </tr>
				
            	<tr><td></td><td>
                <input name="reset" type="reset" class="header-button" value="Reset" />
				</td></tr>
				<tr><td></td><td>
                <input name="next"  type="submit" class="header-button" id="next" value="Submit"/>
				</td></tr>
				</table>
				
   </form>
 </div>

</p><div class="clear"></div>
	    <?php
	   include("footer1.php");
	   ?>
</div>
</div>
