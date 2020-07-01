<?php 
session_start(); 
include("config.php");
?>
<style type="text/css">
.div1 h2
{
	padding:10px 0px 5px 0px;
	width:auto;
	height:auto;
	color:#333333;
}
.div2 input[type="text"]
{
	height:30px; !important
}
input[type="submit"]
{
	height:30px; !important
}
input[type="reset"]
{
	height:30px; !important
}


</style>
<div class="main">
<div id="wrap">   
<?php
	include("menu.php");
?>

			<link rel="stylesheet" href="css/template.css" type="text/css">
			<link rel="stylesheet" href="css/constant.css" type="text/css">
			<link href="bootstrap/bootstrap.min.css" rel="stylesheet" media="screen">
			<div id="content">
	
<?php
   include("sidebar.php");
?>

			<div class="div2">
        <form action="chkFIRreg2.php" method="post" enctype="multipart/form-data" name="form1">
		 <div>
		   <h1>Step:2. &nbsp; Fill &nbsp; the  &nbsp; following &nbsp; FIR &nbsp; details</h1>
		   &nbsp;
		   <h2><span class="componentheading">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Information about suspect):</span>
		     </h2>
		 </div>             
           <p>&nbsp;</p>
           <table width="770" height="323" border="0" align="center" cellpadding="10" cellspacing="5">
             <tr>
               <td width="165" align="right" valign="middle" bgcolor="#FFFFFF">
			     <span class="style3">First Name:                 </span>
               <td align="left" bgcolor="#FFFFFF">
                 <span class="style3">
                 <input name="fname" type="text" id="fname" size="35" >
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
               <td align="right" valign="middle" bgcolor="#FFFFFF">
			   <span class="style3">Middle Name: </span>
               <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                 <label>
                 <input name="mname" type="text" id="mname" size="35">
				 <script type="text/javascript">
				    var f1 = new LiveValidation('mname');
				    f1.add(Validate.Presence,{failureMessage: " Please enter Middlename"});
				   //f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage:
				   // " It allows only characters"});
				    f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage: 
					       " Invalid Middlename"});
				 </script> 
                 </label>
               </span></td>
             </tr>
             <tr>
               <td align="right" valign="middle" bgcolor="#FFFFFF">
			   <span class="style3">Last Name:</span>
               <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                 <label>
                 <input name="lname" type="text" id="lname" size="35">
				 <script type="text/javascript">
				    var f1 = new LiveValidation('lname');
				    f1.add(Validate.Presence,{failureMessage: " Please enter Lastname"});
				   //f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage:
				   // " It allows only characters"});
				    f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage:"Invalid Lastname"});
				 </script> 
                 </label>
               </span></td>
             </tr>
             <tr bgcolor="#999999">
               <td height="28" align="right" valign="middle" bgcolor="#FFFFFF">
			   <span class="style3">Gender:</span>
               <td align="left" bgcolor="#FFFFFF">
                 <span class="style15 style3">
                 <label>                   
                   <input type="radio" name="gender" value="Male">Male</label>        
                 <label>
                   <input type="radio" name="gender" value="Female">Female</label>
                 </span></td>
             </tr>
             <tr>
               <td height="60" align="right" valign="middle" bgcolor="#FFFFFF">
			   <span class="style3"> Address:</span>
               <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
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
               </span><span class="style15 style3">
                 <textarea name="address" cols="32" rows="3"  id="address"></textarea>
               </span></td>
               </tr>
             
             <tr bgcolor="#993366">
               <td height="46" align="right" bgcolor="#FFFFFF"><span class="style3">City:</span></td>
               <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                 <select name="city" size="1"  id="city" >
                   <option>----select----</option>
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
             <tr bgcolor="#993366">
               <td align="right" valign="middle" bgcolor="#FFFFFF">
			   <span class="style3">Pin-code:</span></td>
               <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                
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
               <td align="right" valign="middle" bgcolor="#FFFFFF">
			   <span class="style3">Contact number: </span>
               <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
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
               <td align="right" valign="middle" bgcolor="#FFFFFF">
			   <span class="style3">Email-id:</span>
               <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                 <label>
                 <input name="emailid" type="text" id="emailid" size="35" maxlength="254" />
				 <script type="text/javascript">
				    var f1 = new LiveValidation('emailid');
				    f1.add(Validate.Presence,{failureMessage: " Please enter email-id"});
				    f1.add( Validate.Email );
				 </script> 
                 </label>
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