<?php 
include("sessionHandler.php");
include("config.php");
$username = $_GET['username'];
$selectQuery = "select *from mstr_officer mo,mstr_profile mp, mstr_login ml where ml.username = '".$username."' and ml.username =  mo.username and mo.username=mp.username and mp.username= ml.username ";


$rs = mysqli_query($conn,$selectQuery);
$record = mysqli_fetch_array($rs);
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
<style type="text/css">
<!--
.style3 {color: #000000}
.style6 {
	font-size: 18px;
	color: #797979;
}
.style10 {margin: 0 0px 10px 0; padding: 16px 0 2px 27px; color: #959595; line-height: 140%;}
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
   <form action="updateofficer.php" method="post" enctype="multipart/form-data" name="form1">
                <div>
                  <h1>Edit Information of Police  Officer</h1>
                </div>
                <p>&nbsp;</p>
                <table width="770" height="370" border="0" align="center">
                  <tr bgcolor="#999999">
                    <td height="26" align="left" valign="middle" bgcolor="#FFFFFF">
					<span class="style3">First Name</span>: </td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                      <input name="fname" type="text" id="fname" size="35"  value="<?php echo $record["first_name"]; ?>"/>
                      <script type="text/javascript">
						var f1 = new LiveValidation('fname');
						f1.add(Validate.Presence,{failureMessage: " Please enter Firstname"});
					  // f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,
					   //failureMessage:" It allows only characters"});
						f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,
						failureMessage:" Invalid Firstname"});
					 </script>
                    </span></td>
                  </tr>
				   <tr bgcolor="#999999">
                    <td height="26" align="left" valign="middle" bgcolor="#FFFFFF">
					<span class="style3">Middle Name</span>: </td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                      <input name="mname" type="text" id="mname" size="35"  value="<?php echo $record["middle_name"]; ?>"/>
                      <script type="text/javascript">
						var f1 = new LiveValidation('mname');
						f1.add(Validate.Presence,{failureMessage: " Please enter middlename"});
					  // f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,
					   //failureMessage:" It allows only characters"});
						f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,
						failureMessage:" Invalid middlename"});
					 </script>
                    </span></td>
                  </tr>
				  <tr>
                    <tr bgcolor="#999999">
                    <td height="26" align="left" valign="middle" bgcolor="#FFFFFF">
					<span class="style3">Last Name</span>: </td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                      <input name="lname" type="text" id="lname" size="35"  value="<?php echo $record["last_name"]; ?>"/>
                      <script type="text/javascript">
						var f1 = new LiveValidation('lname');
						f1.add(Validate.Presence,{failureMessage: " Please enter Lastname"});
					  // f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,
					   //failureMessage:" It allows only characters"});
						f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,
						failureMessage:" Invalid Lastname"});
					 </script>
                    </span></td>
                  </tr>
				   <tr>
                    <td width="165" align="left" valign="middle" bgcolor="#FFFFFF">
					<span class="style3">Gender: </span> </td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style3">
				  	 <label>
                      <input type="radio" name="gender" value="Male" <?php if($record["gender"]=="Male") echo "checked = 'checked'"?>/>
                        Male</label>
                      <label>
                      <input type="radio" name="gender" value="Female" <?php if($record["gender"]=="Female") echo "checked = 'checked'"?>/>
                        Female</label>
                    </span></td>
                  </tr>
                  <tr bgcolor="#993366">
                    <td align="left" valign="middle" bgcolor="#FFFFFF"><span class="style3">City:</span></td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                      <select name="city" size="1"  id="city" >
                        <?php
						  $cityQuery = "select *from mstr_city";
						  $rsCity = mysqli_query($conn,$cityQuery);
						  while($rowCity = mysqli_fetch_array($rsCity))
						  {
						  ?>
                        <option value="<?php echo $rowCity['city_id']?>" <?php if($record["city_id"]==$rowCity['city_id']) echo "selected"; ?>> <?php echo $rowCity['city_name']?></option>
                        <?php }?>
                        <script type="text/javascript">
				          var f1 = new LiveValidation('city');
				          f1.add(Validate.Presence,{failureMessage: "Please enter city name"});				   
				        </script>
                      </select>
                    </span></td>
                  </tr>
                  <tr bgcolor="#993366">
                    <td align="left" valign="middle" bgcolor="#FFFFFF">
					<span class="style3">Area Name: </span> </td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                      <select name="area" size="1"  id="area" >
                        <?php
						  $areaQuery = "select *from mstr_area";
						  $rsArea = mysqli_query($conn,$areaQuery);
						  while($rowArea = mysqli_fetch_array($rsArea))
						  {
						  ?>
                        <option value="<?php echo $rowArea['area_id']?>" <?php if($record["area_id"]==$rowArea['area_id']) echo "selected"; ?>> <?php echo $rowArea['area_name']?></option>
                        <?php }?>
                        <script type="text/javascript">
				          var f1 = new LiveValidation('area');
				          f1.add(Validate.Presence,{failureMessage: "Please enter area name"});				   
				        </script>
                      </select>
                    </span></td>
                  </tr>
                  <tr>
                    <td height="75" align="left" valign="middle" bgcolor="#FFFFFF">
					<span class="style3"> Address:</span> </td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
					 <textarea name="address" cols="32" rows="3"  id="address"><?php echo $record["address"]; ?></textarea>
                    
                      <script type="text/javascript">
				    var f1 = new LiveValidation('address');
				    f1.add(Validate.Presence,{failureMessage: " Please enter Address"});
				   //f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage:
				   // " It allows only characters"});
				    //f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage: 
					       //" Invalid Address"});
				 </script>
					  </span></td>
                  </tr>
                  <tr bgcolor="#999999">
                    <td height="26" align="left" valign="middle" bgcolor="#FFFFFF">
					<span class="style3">Email-id</span>: </td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                      <input name="emailid" type="text" id="emailid" size="35" maxlength="254" value="<?php echo $record["emailid"]; ?>" />
			            <script type="text/javascript">
				           var f1 = new LiveValidation('emailid');
				           f1.add(Validate.Presence,{failureMessage: " Please enter email-id"});
				           f1.add( Validate.Email );
				        </script>                       
                    </span></td></tr>
                  <tr bgcolor="#993366">
                    <td height="25" align="left" valign="middle" bgcolor="#FFFFFF">
					 
					<span class="style3">Contact number: </span> </td>
                    <td align="left" bgcolor="#FFFFFF">
					<input type="text" name="contactno" id="contactno" maxlength="12" value="<?php echo $record["contact_no"]; ?>" />
					<script type="text/javascript">
				       var f1 = new LiveValidation('contactno');
					   f1.add(Validate.Presence,{failureMessage: " It cannot be empty"});
					   f1.add(Validate.Format,{pattern: /^[0-9]+$/ ,
					   failureMessage: " It allows only numbers"});
					   f1.add( Validate.Length, { minimum: 6, maximum: 12 } );
					 </script>					</td>
                  </tr>
                  <tr bgcolor="#993366">
                    <td height="25" align="left" valign="middle" bgcolor="#FFFFFF">
					<span class="style3">pincode:</span> </td>
                    <td align="left" bgcolor="#FFFFFF">
					<input name="pincode" type="text" id="pincode" size="35" value="<?php echo $record["pincode"]; ?>" />
					<script type="text/javascript">
				    var f1 = new LiveValidation('pincode');
				   f1.add(Validate.Presence,{failureMessage: " It cannot be empty"});
				   f1.add(Validate.Format,{pattern: /^[0-9]+$/ ,failureMessage: " It allows only numbers"});
				   f1.add( Validate.Length, { minimum: 6, maximum: 6 } );
				 </script>				</td>
                  </tr>
				   <tr bgcolor="#993366">
                    <td height="25" align="left" valign="middle" bgcolor="#FFFFFF">
					<span class="style3">Joining Date:</span> </td>
                    <td align="left" bgcolor="#FFFFFF">
					<input name="Jdate" type="text" id="Jdate" size="35" value="<?php echo $record["Jdate"]; ?>" />
					</td>
                  </tr>
				  </tr>
				   <tr bgcolor="#993366">
                    <td height="25" align="left" valign="middle" bgcolor="#FFFFFF">
					<span class="style3">Last Date:</span> </td>
                    <td align="left" bgcolor="#FFFFFF">
					<input name="Ldate" type="text" id="Ldate" size="35" value="<?php echo $record["Ldate"]; ?>" />
										</td>
                  </tr>
				  <tr bgcolor="#993366">
                    <td align="left" valign="middle" bgcolor="#FFFFFF">
					<span class="style3">Police station name: </span> </td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                      <select name="psname" size="1"  id="psname" >
                        <?php
						  $psQuery  = "select *from mstr_policestation";
						  $rsPs = mysqli_query($conn, $psQuery );
						  while($rowArea = mysqli_fetch_array($rsPs))
						  {
						  ?>
                        <option value="<?php echo $rowArea['policestation_id']?>" <?php if($record['policestation_id']==$rowArea['policestation_id']) echo "selected"; ?>> <?php echo $rowArea['policestation_name']?></option>
                        <?php }?>
                        <script type="text/javascript">
				          var f1 = new LiveValidation('psname');
				          f1.add(Validate.Presence,{failureMessage: "Please enter policestation name"});				   
				        </script>
                      </select>
                    </span></td>
                  </tr>
				   <tr bgcolor="#993366">
                    <td align="left" valign="middle" bgcolor="#FFFFFF">
					<span class="style3">Designation name: </span> </td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
					<select name="designation" size="1"  id="designation" >
                        <?php
						  $desigQuery = "select *from mstr_designation";
						  $rsDesig = mysqli_query($conn,$desigQuery);
						  while($rowDesig = mysqli_fetch_array($rsDesig))
						  {
						  ?>
                   <option value="<?php echo $rowDesig['desi_id']?>"<?php if($record["desi_id"]==$rowDesig['desi_id']) echo "selected"; ?>>  
				   <?php echo $rowDesig['desi_name']?></option>
                   <?php }?>
                        <script type="text/javascript">
				    var f1 = new LiveValidation('designation');
				    f1.add(Validate.Presence,{failureMessage: "Please enter designation name"});   
				 </script>
                      </select>
                    </span></td>
                  </tr>
				  <tr bgcolor="#999999">
                    <td height="26" align="left" valign="middle" bgcolor="#FFFFFF">
					<span class="style3">Username</span>: </td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                      <input name="uname" type="text" id="uname" size="35"  value="<?php echo $record["username"]; ?>"/>
                      <script type="text/javascript">
						var f1 = new LiveValidation('uname');
						f1.add(Validate.Presence,{failureMessage: " Please enter username"});
					  // f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,
					   //failureMessage:" It allows only characters"});
						f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,
						failureMessage:" Invalid username"});
					 </script>
                    </span></td>
                  </tr>
				  <tr bgcolor="#999999">
                    <td height="26" align="left" valign="middle" bgcolor="#FFFFFF">
					<span class="style3">Password</span>: </td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                      <input name="password" type="password" id="password" size="35"  value="<?php echo $record["password"]; ?>"/>
                      <script type="text/javascript">
						var f1 = new LiveValidation('password');
						f1.add(Validate.Presence,{failureMessage: " Please enter password"});
					  // f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,
					   //failureMessage:" It allows only characters"});
						f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,
						failureMessage:" Invalid password"});
					 </script>
                    </span></td>
                  </tr>
				   <tr bgcolor="#999999">
                    <td height="26" align="left" valign="middle" bgcolor="#FFFFFF">
					<span class="style3">Re-enter Password</span>: </td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                      <input name="rpassword" type="text" id="rpassword" size="35"  />
                      <script type="text/javascript">
						var f1 = new LiveValidation('rpassword');
						f1.add(Validate.Presence,{failureMessage: " Please enter re-enter password"});
					  // f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,
					   //failureMessage:" It allows only characters"});
						f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,
						failureMessage:" Invalid re-enter password"});
					 </script>
                    </span></td>
                  </tr>
                  <tr bgcolor="#993366">
                    <td align="left" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
                    <td align="left" bgcolor="#FFFFFF">&nbsp;</td>
                  </tr>
                 <tr><td></td><td>
                <input name="reset" type="reset" class="header-button" value="Reset" />
				</td></tr>
				<tr><td></td><td>
                <input name="update"  type="submit" class="header-button" id="update" value="Update"/>
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