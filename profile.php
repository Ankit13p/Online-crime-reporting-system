<?php 
include("sessionHandler.php");
include("config.php");
?>
<link type="text/css" href="themes/base/jquery.ui.all.css" rel="stylesheet" />
	<script type="text/javascript" src="jquery-1.4.2.js"></script>
	<script type="text/javascript" src="ui/jquery.ui.core.js"></script>
	<script type="text/javascript" src="ui/jquery.ui.widget.js"></script>
	<script type="text/javascript" src="ui/jquery.ui.datepicker.js"></script>
	<script type="text/javascript">
	$(function() {		
		$('#bdate').datepicker({
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
.style16 {margin: 0 0px 10px 0; padding: 16px 0 2px 27px; color: #959595; line-height: 140%; font-size: 18px; }
.style19 {font-size: 11px; }
.style20 {font-size: 11%; }
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
        <form action="chkprofile.php" method="post"  enctype="multipart/form-data" name="form1">
		 <div>
		  <h1> Step:1.Fill the following registration details:</h1></div>             
           <p>&nbsp;</p>
           <table width="565" border="0" align="center">
             <tr>
               <td width="211" align="left" valign="middle" bgcolor="#FFFFFF">
			     <blockquote>
			       <blockquote>
			         <blockquote>
			           <p><span class="style3">First Name:</span>			           </p>
			           </blockquote>
			       </blockquote>
			     </blockquote>
               <td width="543" align="left" bgcolor="#FFFFFF">
                 <span class="style3">
                 <input name="fname" type="text" id="fname" size="40" >
				 <script type="text/javascript">
				    var f1 = new LiveValidation('fname');
				    f1.add(Validate.Presence,{failureMessage: " Please enter Firstname"});
				   f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage:" It allows only characters"});
				    f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage: 
					       " Invalid Firstname"});
				 </script>
                 </span></td>
             </tr>
             <tr bgcolor="#993366">
               <td align="left" valign="middle" bgcolor="#FFFFFF">
			     <blockquote>
			       <blockquote>
			         <blockquote>
			           <p><span class="style3">Middle Name: </span>			           </p>
			           </blockquote>
			       </blockquote>
			     </blockquote>
               <td align="left" bgcolor="#FFFFFF"><span class="style3">
                 <label>
                 <input name="mname" type="text" id="mname" size="40">
				 <script type="text/javascript">
				    var f1 = new LiveValidation('mname');
				    f1.add(Validate.Presence,{failureMessage: " Please enter Middlename"});
				   f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage:
				   " It allows only characters"});
				    f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage: 
					       " Invalid Middlename"});
				 </script> 
                 </label>
               </span></td>
             </tr>
             <tr>
               <td align="left" valign="middle" bgcolor="#FFFFFF">
			     <blockquote>
			       <blockquote>
			         <blockquote>
			           <p><span class="style3">Last Name:</span>			           </p>
			           </blockquote>
			       </blockquote>
			     </blockquote>
               <td align="left" bgcolor="#FFFFFF"><span class="style3">
                 <label>
                 <input name="lname" type="text" id="lname" size="40">
				 <script type="text/javascript">
				    var f1 = new LiveValidation('lname');
				    f1.add(Validate.Presence,{failureMessage: " Please enter Lastname"});
				    f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage:
				       "It allows only characters"});
				    f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage:"Invalid Lastname"});
				 </script> 
                 </label>
               </span></td>
             </tr>
			   <tr>
               <td width="211" align="left" valign="middle" bgcolor="#FFFFFF">
			     <blockquote>
			       <blockquote>
			         <blockquote>
			           <p><span class="style3">User Name:</span>			           </p>
			           </blockquote>
			       </blockquote>
			     </blockquote>
               <td width="543" align="left" bgcolor="#FFFFFF">
                 <span class="style3">
                 <input name="uname" type="text" id="uname" size="40" >
				 <script type="text/javascript">
				    var f1 = new LiveValidation('uname');
				    f1.add(Validate.Presence,{failureMessage: " Please enter Username"});
				   f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage:" It allows only characters"});
				    f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage: 
					       " Invalid Username"});
				 </script>
                 </span></td>
             </tr>
			  <tr>
               <td width="211" align="left" valign="middle" bgcolor="#FFFFFF">
			     <blockquote>
			       <blockquote>
			         <blockquote>
			           <p><span class="style3">Password:</span>			           </p>
			           </blockquote>
			       </blockquote>
			     </blockquote>
               <td width="543" align="left" bgcolor="#FFFFFF">
                 <span class="style3">
                 <input name="password" type="text" id="password" size="40" >
				 <script type="text/javascript">
				    var f1 = new LiveValidation('password');
				    f1.add(Validate.Presence,{failureMessage: " Please enter password"});
				  
				 </script>
                 </span></td>
             </tr>
             <tr bgcolor="#993366">
               <td align="left" valign="middle" bgcolor="#FFFFFF">
			     <blockquote>
			       <blockquote>
			         <blockquote>
			           <p><span class="style3">Birth-date:</span>			           </p>
			           </blockquote>
			       </blockquote>
			     </blockquote>
               <td align="left" bgcolor="#FFFFFF"><span class="style3">
                 <label>
                 <input type="text" name="bdate" id="bdate" >
				 <script type="text/javascript">
				    var f1 = new LiveValidation('bdate');
				    f1.add(Validate.Presence,{failureMessage: " Please enter Birth date"});				   
				 </script> 
                 </label>
               </span></td>
             </tr>
             <tr bgcolor="#999999">
               <td align="left" valign="middle" bgcolor="#FFFFFF">
			     <blockquote>
			       <blockquote>
			         <blockquote>
			           <p><span class="style3">Gender:</span>			           </p>
			           </blockquote>
			       </blockquote>
			     </blockquote>
               <td align="left" bgcolor="#FFFFFF">
                 <span class="style3">
                 <label>                   
                   <input type="radio" name="gender" value="Male">Male</label>            
                 <label>
                   <input type="radio" name="gender" value="Female">Female</label>
                 </span></td>
             </tr>
             <tr>
               <td align="left" valign="middle" bgcolor="#FFFFFF">
			     <blockquote>
			       <blockquote>
			         <blockquote>
			           <p><span class="style3"> Address:</span>			           </p>
			           </blockquote>
			       </blockquote>
			     </blockquote>
               <td align="left" bgcolor="#FFFFFF"><span class="style3">
                 <label>
                 <textarea name="address" cols="40" rows="5"  id="address"></textarea>
				 <script type="text/javascript">
				    var f1 = new LiveValidation('address');
				    f1.add(Validate.Presence,{failureMessage: " Please enter Address"});
				   //f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage:
				   // " It allows only characters"});
				    //f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage: 
					      // " Invalid Address"});
				 </script> 
                 </label>
               </span></td>
             </tr>
             <tr bgcolor="#999999">
               <td align="left" bgcolor="#FFFFFF"><blockquote>
                 <blockquote>
                   <blockquote>
                     <p><span class="style3">City:</span>                 </p>
                   </blockquote>
                 </blockquote>
               </blockquote>
               <td align="left" bgcolor="#FFFFFF"><span class="style3">
               <select name="city" size="1"  id="city" >
			   <option>-----select-----</option>
				 		<?php
						  $cityQuery = "select *from mstr_city";
						  $rsCity = mysqli_query($conn,$cityQuery);
						  while($rowCity = mysqli_fetch_array($rsCity))
						  {
						  ?>
                  			<option value="<?php echo $rowCity['city_id']?>"><?php echo $rowCity['city_name']?></option>
                  		<?php }?>
				 <script type="text/javascript">
				    var f1 = new LiveValidation('city');
				    f1.add(Validate.Presence,{failureMessage: "Please enter city name"});				   
				 </script> 
                 </select>
			   </span></td>
             </tr>
			  <tr bgcolor="#999999">
               <td align="left" bgcolor="#FFFFFF"><blockquote>
                 <blockquote>
                   <blockquote>
                     <p><span class="style3">Area:</span>                 </p>
                   </blockquote>
                 </blockquote>
               </blockquote>
               <td align="left" bgcolor="#FFFFFF"><span class="style3">
               <select name="area" size="1"  id="area" >
			   <option>-----select-----</option>
				 		<?php
						  $cityQuery = "select *from mstr_area";
						  $rsCity = mysqli_query($conn,$cityQuery);
						  while($rowCity = mysqli_fetch_array($rsCity))
						  {
						  ?>
                  			<option value="<?php echo $rowCity['area_id']?>"><?php echo $rowCity['area_name']?></option>
                  		<?php }?>
				 <script type="text/javascript">
				    var f1 = new LiveValidation('area');
				    f1.add(Validate.Presence,{failureMessage: "Please enter area name"});				   
				 </script> 
                 </select>
			   </span></td>
             </tr>
             
             
             <tr bgcolor="#993366">
               <td align="left" valign="middle" bgcolor="#FFFFFF">
			     <blockquote>
			       <blockquote>
			         <blockquote>
			           <p><span class="style3">Pin-code:</span></p>
			           </blockquote>
			       </blockquote>
			     </blockquote></td>
               <td align="left" bgcolor="#FFFFFF"><span class="style3">                
                 <input name="pincode" type="text" id="pincode" maxlength="6">						 
				 <script type="text/javascript">
				    var f1 = new LiveValidation('pincode');
				   f1.add(Validate.Presence,{failureMessage: " It cannot be empty"});
				   f1.add(Validate.Format,{pattern: /^[0-9]+$/ ,failureMessage: " It allows only numbers"});
				   f1.add( Validate.Length, { minimum: 6, maximum: 6 } );
				 </script>                 
               </span></td>
             </tr>
             <tr bgcolor="#999999">
               <td align="left" valign="middle" bgcolor="#FFFFFF">
			     <blockquote>
			       <blockquote>
			         <blockquote>
			           <p><span class="style3">Contact number: </span>			           </p>
			           </blockquote>
			       </blockquote>
			     </blockquote>
               <td align="left" bgcolor="#FFFFFF"><span class="style3">
                 <label>
                 <input type="text" name="contactno" id="contactno" maxlength="12">
				 <script type="text/javascript">
				    var f1 = new LiveValidation('contactno');
				   f1.add(Validate.Presence,{failureMessage: " It cannot be empty"});
				   f1.add(Validate.Format,{pattern: /^[0-9]+$/ ,failureMessage: " It allows only numbers"});
				   f1.add( Validate.Length, { minimum: 6, maximum: 12 } );
				 </script>
                 </label>
               </span></td>
             </tr>
             <tr bgcolor="#993366">
               <td align="left" valign="middle" bgcolor="#FFFFFF">
			     <blockquote>
			       <blockquote>
			         <blockquote>
			           <p><span class="style3">Email-id:</span>			           </p>
			           </blockquote>
			       </blockquote>
			     </blockquote>
               <td align="left" bgcolor="#FFFFFF"><span class="style3">
                 <label>
                 <input name="emailid" type="text" id="emailid" size="40" maxlength="254" />
				 <script type="text/javascript">
				    var f1 = new LiveValidation('emailid');
				    f1.add(Validate.Presence,{failureMessage: " Please enter email-id"});
				    f1.add( Validate.Email );
				 </script> 
                 </label>
               </span></td>
             </tr>
             <tr bgcolor="#999999">
               <td height="27" align="left" valign="middle" bgcolor="#FFFFFF">
			     <blockquote>
			       <blockquote>
			         <blockquote>
			           <p><span class="style3">Your recent photo:</span></p>
			           </blockquote>
			       </blockquote>
			     </blockquote>
               <td align="left" bgcolor="#FFFFFF"><span class="style3">
                 <label>
                 <input name="photo" type="file" id="photo" onclick=""  size="40">
                 </label>
				 </span>			   </td>
             </tr>
			 
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
