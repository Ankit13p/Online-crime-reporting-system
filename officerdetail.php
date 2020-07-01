<?php
require_once("sessionHandler.php");
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
		$('#jdate').datepicker({
			changeMonth: true,
			changeYear: true,
			yearRange: '1900:2010'
		});
		$('#txtjoin').datepicker({
			changeMonth: true,
			changeYear: true,
		});		
	});
	$(function() {		
		$('#ldate').datepicker({
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
.style6 {
	font-size: 18px;
	color: #797979;
}
.style10 {margin: 0 0px 10px 0; padding: 16px 0 2px 27px; color: #959595; line-height: 140%;}
.style15 {font-size: 18px}
.style19 {font-size: 11px; }
.style21 {margin: 0 0px 10px 0; padding: 16px 0 2px 27px; color: #959595; line-height: 140%; font-size: 18px; }
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
              <form action="chkOfficerdetail.php" method="post" enctype="multipart/form-data" name="form1">
                <div>
                  <h1>Information about Officer:</h1>
                </div>
                <p>&nbsp;</p>
                <table width="770" height="556" border="0" align="center">
                  <tr>
                    <td width="165" align="left" valign="middle" bgcolor="#FFFFFF"><span class="style3">First Name: </span> </td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style3">
                      <input name="fname" type="text" id="fname" size="35" />
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
				  <tr>
	<td height="5" colspan="6" ></td>
</tr>

                  <tr bgcolor="#993366">
                    <td align="left" valign="middle" bgcolor="#FFFFFF"><span class="style3">Middle Name: </span> </td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style3">
                      <label>
                      <input name="mname" type="text" id="mname" size="35" />
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
	<td height="5" colspan="6" ></td>
</tr>
                  <tr>
                    <td height="33" align="left" valign="middle" bgcolor="#FFFFFF"><span class="style3">Last Name:</span> </td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style3">
                      <label>
                      <input name="lname" type="text" id="lname" size="35" />
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
				   <tr>
	<td height="2" colspan="6" ></td>
</tr>
                  <tr bgcolor="#999999">
                    <td height="28" align="left" valign="middle" bgcolor="#FFFFFF"><span class="style3">Gender:</span> </td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style3">
                      <label>
                      <input type="radio" name="gender" value="Male" />
                        Male</label>
                      <label>
                      <input type="radio" name="gender" value="Female" />
                        Female</label>
                    </span></td>
                  </tr>
                  <tr>
                    <td height="60" align="left" valign="middle" bgcolor="#FFFFFF"><span class="style3"> Address:</span> </td>
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
				   <tr>
	<td height="5" colspan="6" ></td>
</tr>
                   <tr bgcolor="#993366">
                     <td align="left" valign="middle" bgcolor="#FFFFFF"><span class="style3">City</span>:</td>
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
                     <td align="left" valign="middle" bgcolor="#FFFFFF"><span class="style3">Area</span>:</td>
                     <td align="left" bgcolor="#FFFFFF"><span class="style3">
                       <select name="area" size="1"  id="area" >
                         <option>----select----</option>
						 <?php
						  $cityQuery = "select *from mstr_area";
						  $rsCity = mysqli_query($conn,$cityQuery);
						  while($rowCity = mysqli_fetch_array($rsCity))
						  {
						  ?>
                         <option value="<?php echo $rowCity['area_id']?>"> <?php echo $rowCity['area_name']?></option>
                         <?php }?>
                         <script type="text/javascript">
				    var f1 = new LiveValidation('area');
				    f1.add(Validate.Presence,{failureMessage: "Please enter area name"});		   
				       </script>
                       </select>
                     </span></td>
                   </tr>
                  <tr bgcolor="#993366">
                    <td align="left" valign="middle" bgcolor="#FFFFFF"><span class="style3">Pin-code:</span></td>
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
				   <tr>
	<td height="4" colspan="6" ></td>
</tr>
                  <tr bgcolor="#999999">
                    <td align="left" valign="middle" bgcolor="#FFFFFF"><span class="style3">Contact number: </span> </td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style3">
                      <label>
                      <input type="text" name="contactno" id="contactno" maxlength="12" />
                      <script type="text/javascript">
				    var f1 = new LiveValidation('contactno');
				   f1.add(Validate.Presence,{failureMessage: " It cannot be empty"});
				   f1.add(Validate.Format,{pattern: /^[0-9]+$/ ,
				   failureMessage: " It allows only numbers"});
				   f1.add( Validate.Length, { minimum: 6, maximum: 12 } );
				 </script>
                      </label>
                    </span></td>
                  </tr>
				   <tr>
	<td height="4" colspan="6" ></td>
</tr>
                  <tr bgcolor="#993366">
                    <td align="left" valign="middle" bgcolor="#FFFFFF"><span class="style3">Email-id:</span> </td>
                    <td align="left" bgcolor="#FFFFFF"><input name="emailid" type="text" id="emailid" size="35" maxlength="254" />
                        <script type="text/javascript">
				    var f1 = new LiveValidation('emailid');
				    f1.add(Validate.Presence,{failureMessage: " Please enter email-id"});
				    f1.add( Validate.Email );
				 </script>                    </td>
                  </tr>
				   <tr>
	<td height="4" colspan="6" ></td>
</tr>
                  <tr bgcolor="#993366">
                    <td align="left" valign="middle" bgcolor="#FFFFFF"><span class="style3">Joining Date:</span> </td>
                    <td align="left" bgcolor="#FFFFFF"><input type="text" name="jdate" id="jdate" /></td>
                  </tr>
				   <tr>
	<td height="4" colspan="6" ></td>
</tr>
                  <tr bgcolor="#993366">
                    <td align="left" valign="middle" bgcolor="#FFFFFF"><span class="style3">Last Date:</span> </td>
                    <td align="left" bgcolor="#FFFFFF"><input type="text" name="ldate" id="ldate" /></td>
                  </tr>
                  <tr bgcolor="#993366">
                    <td align="left" valign="middle" bgcolor="#FFFFFF"><span class="style3">Police station name:</span> </td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style3">
                      <select name="psname" size="1"  id="psname"  >
                        <option>--------------select------------</option>
						<?php
						  $psQuery = "select *from mstr_policestation";
						  $rsPs = mysqli_query($conn,$psQuery);
						  while($rowPs = mysqli_fetch_array($rsPs))
						  {
						  ?>
                        <option value="<?php echo $rowPs['policestation_id']?>"> 
						<?php echo $rowPs['policestation_name']?></option>
                        <?php }?>
                        <script type="text/javascript">
				  //var f1 = new LiveValidation('psname');
				    //f1.add(Validate.Presence,{failureMessage: "Please enter police station name"});   
				 </script>
                      </select>
                    </span></td>
                  </tr>
                  <tr bgcolor="#993366">
                    <td height="46" align="left" valign="middle" bgcolor="#FFFFFF"><span class="style3">Designation Name:</span> </td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style3">
                      <select name="designation" size="1"  id="designation" >
                        <option>----select----</option>
						<?php
						  $desigQuery = "select *from mstr_designation";
						  $rsDesig = mysqli_query($conn,$desigQuery);
						  while($rowDesig = mysqli_fetch_array($rsDesig))
						  {
						  ?>
                        <option value="<?php echo $rowDesig['desi_id']?>"> <?php echo $rowDesig['desi_name']?></option>
                        <?php }?>
                        <script type="text/javascript">
				    var f1 = new LiveValidation('designation');
				    f1.add(Validate.Presence,{failureMessage: "Please enter designation name"});   
				 </script>
                      </select>
                    </span></td>
                  </tr>
                </table>
                
                <div>
                  <h2>&nbsp;&nbsp;<span class="componentheading">Log in information:</span></h2>
                </div>
                <p>&nbsp;</p>
                <table width="643">
                  <tr bgcolor="#993366">
                    <td width="173" height="33" align="left" valign="middle" bgcolor="#FFFFFF"><span class="style3">Choose login name:</span> </td>
                    <td width="458" align="left" bgcolor="#FFFFFF"><span class="style15">
                      <label>
                      <input name="loginname"  id="loginname" type="text" size="24" />
                      <script type="text/javascript">
				    //var f1 = new LiveValidation('loginname');
				    //f1.add(Validate.Presence,{failureMessage: " Please enter log-in name"});
				   
				 </script>
                      </label>
                    </span></td>
                  </tr>
                  <tr bgcolor="#999999">
                    <td height="33" align="left" valign="middle" bgcolor="#FFFFFF"><span class="style3">Password: </span> </td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style15">
                      <input name="password"  type="password" id="password" size="24" />
                      <script type="text/javascript">
				    var f1 = new LiveValidation('password');
				   f1.add(Validate.Presence,{failureMessage: " Please enter password"});				   
				 </script>
                    </span></td>
                  </tr>
                  <tr bgcolor="#993366">
                    <td height="30" align="left" valign="middle" bgcolor="#FFFFFF"><span class="style3">Re-Type Password: </span> </td>
                    <td align="left" bgcolor="#FFFFFF"><span class="style15">
                      <input name="rpassword"  type="password" id="rpassword" size="24" />
                      <script type="text/javascript">
				    var f1 = new LiveValidation('rpassword');
				    f1.add(Validate.Presence,{failureMessage: " Please enter password"});
				  </script>
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
