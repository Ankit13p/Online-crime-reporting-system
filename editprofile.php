<?php 
session_start();
include("config.php");
$selectQuery = "select * from mstr_profile mp,mstr_login ml  where mp.username = '".$_SESSION['username']."' and mp.username = ml.username ";
//echo $selectQuery;

$rs = mysqli_query($conn,$selectQuery);
$record = mysqli_fetch_array($rs);

if(mysqli_num_rows($rs)==0)
	//header("location:viewprofile.php");
?>
<link type="text/css" href="themes/base/jquery.ui.all.css" rel="stylesheet" />
	<script type="text/javascript" src="jquery-1.4.2.js"></script>
	<script type="text/javascript" src="ui/jquery.ui.core.js"></script>
	<script type="text/javascript" src="ui/jquery.ui.widget.js"></script>
	<script type="text/javascript" src="ui/jquery.ui.datepicker.js"></script>
	<link type="text/css" href="demos.css" rel="stylesheet" />
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
        <form action="updateprofile1.php" method="post"  enctype="multipart/form-data" name="form1">
		 <div>
		   <h1> Update your profile:</h1></div>             
           <p>&nbsp;</p>
           <table width="753" border="0" cellpadding="0" cellspacing="0">
             <tr>
               <td width="115" rowspan="11" align="right" valign="middle" bgcolor="#FFFFFF">
			       <img src="<?php echo $record["profile_photo"]; ?>" height="120" width="109">
				   <a href="changephoto.php?changephoto_path=<?php echo $record["profile_photo"]; ?>" >
				   Change Photo</a>                           
               <td width="122" height="27" align="right" valign="middle" bgcolor="#FFFFFF">
			     <blockquote>
			       <blockquote>
			         <blockquote>
			           <p><span class="style3">First Name:</span>			           </p>
			           </blockquote>
			       </blockquote>
			     </blockquote>
               <td width="516" align="left" bgcolor="#FFFFFF">
                 <span class="style3">
                 <input name="fname" type="text" id="fname" size="40" value="<?php echo $record["first_name"]; ?>" >
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
               <td height="27" align="right" valign="middle" bgcolor="#FFFFFF">
			     <blockquote>
			       <blockquote>
			         <blockquote>
			           <p><span class="style19" style="color: #000000">Middle Name: </span></p>
			           </blockquote>
			       </blockquote>
			     </blockquote>
               <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                 <label>
                 <input name="mname" type="text" id="mname" size="40" value="<?php echo $record["middle_name"]; ?>">
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
               <td height="28" align="right" valign="middle" bgcolor="#FFFFFF">
			     <blockquote>
			       <blockquote>
			         <blockquote>
			           <p><span class="style19" style="color: #000000">Last Name:</span></p>
			           </blockquote>
			       </blockquote>
			     </blockquote>
               <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                 <label>
                 <input name="lname" type="text" id="lname" size="40" value="<?php echo $record["last_name"]; ?>">
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
             <tr bgcolor="#993366">
               <td align="right" valign="middle" bgcolor="#FFFFFF">
			     <blockquote>
			       <blockquote>
			         <blockquote>
			           <p><span class="style19" style="color: #000000">Birth-date:</span></p>
			           </blockquote>
			       </blockquote>
			     </blockquote>
               <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                 <label>
                 <input type="text" name="bdate" id="bdate" readonly="yes" value="<?php echo $record["Dob"]; ?>">
				 <script type="text/javascript">
				    var f1 = new LiveValidation('bdate');
				    f1.add(Validate.Presence,{failureMessage: " Please enter Birth date"});				   
				 </script> 
                 </label>
               </span></td>
             </tr>
             <tr bgcolor="#999999">
               <td align="right" valign="middle" bgcolor="#FFFFFF">
			     <blockquote>
			       <blockquote>
			         <blockquote>
			           <p><span class="style19" style="color: #000000">Gender:</span></p>
			           </blockquote>
			       </blockquote>
			     </blockquote>
               <td align="left" bgcolor="#FFFFFF">
                 <span class="style15 style3">
                 <label>                   
                   <input type="radio" name="gender" value="Male" <?php if($record["gender"]=="Male") echo "checked = 'checked'"?>>Male</label>            
                 <label>
                   <input type="radio" name="gender" value="Female" <?php if($record["gender"]=="Female") echo "checked = 'checked'"?>>Female</label>
                 </span></td>
             </tr>
             <tr>
               <td align="right" valign="middle" bgcolor="#FFFFFF">
			     <blockquote>
			       <blockquote>
			         <blockquote>
			           <p><span class="style19" style="color: #000000"> Address:</span></p>
			           </blockquote>
			       </blockquote>
			     </blockquote>
               <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                 <label>
                 <textarea name="address" cols="40" rows="5"  id="address"><?php echo $record["address"]; ?></textarea>
				 <script type="text/javascript">
				    var f1 = new LiveValidation('address');
				    f1.add(Validate.Presence,{failureMessage: " Please enter Address"});
				 </script> 
                 </label>
               </span></td>
             </tr>
             <tr bgcolor="#999999">
               <td align="right" bgcolor="#FFFFFF"><blockquote>
                 <blockquote>
                   <blockquote>
                     <p><span class="style19" style="color: #000000">City:</span></p>
                   </blockquote>
                 </blockquote>
               </blockquote>
               <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
               <select name="city" size="1"  id="city" >
				<option>-----select-----</option>
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
             
             <tr bgcolor="#993366">
               <td align="right" valign="middle" bgcolor="#FFFFFF">
			     <blockquote>
			       <blockquote>
			         <blockquote>
			           <p><span class="style19" style="color: #000000">Pin-code:</span></p>
			           </blockquote>
			       </blockquote>
			     </blockquote></td>
               <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">                
                 <input name="pincode" type="text" id="pincode" maxlength="6" value="<?php echo $record["pincode"]; ?>">						 
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
			     <blockquote>
			       <blockquote>
			         <blockquote>
			           <p><span class="style19" style="color: #000000">Contact number: </span>			           </p>
			           </blockquote>
			       </blockquote>
			     </blockquote>
               <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                 <label>
                 <input type="text" name="contactno" id="contactno" maxlength="12" value="<?php echo $record["contact_no"]; ?>">
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
			     <blockquote>
			       <blockquote>
			         <blockquote>
			           <p><span class="style19" style="color: #000000">Email-id:</span>			           </p>
			           </blockquote>
			       </blockquote>
			     </blockquote>
               <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                 <label>
               <input name="emailid" type="text" id="emailid" size="40" maxlength="254" value="<?php echo $record["emailid"]; ?>"/>
				 <script type="text/javascript">
				    var f1 = new LiveValidation('emailid');
				    f1.add(Validate.Presence,{failureMessage: " Please enter email-id"});
				    f1.add( Validate.Email );
				 </script> 
                 </label>
               </span></td>
             </tr>
             <tr bgcolor="#999999">
               <td height="27" align="right" valign="middle" bgcolor="#FFFFFF">
               <td align="left" bgcolor="#FFFFFF">&nbsp;</td>
             </tr>
           </table>
		  <p>&nbsp;</p>
		  <div class="article-separator-indent"><span 
	class="article_separator">&nbsp;</span></div>
		  <p>&nbsp;</p>
		  <div>
		    <h3>Update Log-in details:</h2>
		  </div>             
           <p>&nbsp;</p>            
           
           <table width="688" cellpadding="0" cellspacing="0">
             <tr bgcolor="#993366">
               <td width="91" align="right" bgcolor="#FFFFFF">               
               <td width="153" height="32" align="right" bgcolor="#FFFFFF">
			   <span class="style19" style="color: #000000"> Choose login name:</span>
               <td width="442" align="left" bgcolor="#FFFFFF"><span class="style15">
                 <label>
                 <input name="loginname"  id="loginname" type="text" size="24" value="<?php echo $record["username"]; ?>">
				 <script type="text/javascript">
				    var f1 = new LiveValidation('loginname');
				    f1.add(Validate.Presence,{failureMessage: " Please enter log-in name"});
				   
				 </script> 
                 </label>
               </span></td>
             </tr>
			  <tr bgcolor="#999999">
			    <td align="right" bgcolor="#FFFFFF">              
			    <td height="31" align="right" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">Old Password:</span>              
			    <td align="left" bgcolor="#FFFFFF"><span class="style15">
			      <input name="oldpwd"  type="password" id="oldpwd"  size="24" value="<?php echo $record["password"]; ?>" >
			    </span></td>
			    </tr>
			  <tr bgcolor="#999999">
			    <td align="right" bgcolor="#FFFFFF">                
               <td height="32" align="right" bgcolor="#FFFFFF">
			   <span class="style19" style="color: #000000">New Password: </span>
               <td align="left" bgcolor="#FFFFFF"><span class="style15">
                 <input name="password"  type="password" id="password" size="24"  />
				 <script type="text/javascript">
				    var f1 = new LiveValidation('password');
				   f1.add(Validate.Presence,{failureMessage: " Please enter password"});				   
				 </script>                
               </span></td>
             </tr>
			 
			  <tr bgcolor="#993366">
			    <td align="right" bgcolor="#FFFFFF">                
               <td height="32" align="right" bgcolor="#FFFFFF">
			   <span class="style19" style="color: #000000">Re-Type New Password: </span>
               <td align="left" bgcolor="#FFFFFF"><span class="style15">              
                 <input name="rpassword"  type="password" id="rpassword" size="24" />
				  <script type="text/javascript">
				    var f1 = new LiveValidation('rpassword');
				    f1.add(Validate.Presence,{failureMessage: " Please enter password"});
				  </script>                 
               </span></td>
             </tr>
			 
			  <tr align="center" bgcolor="#FFFFFF">
			  <td colspan="3"><input name="reset" type="reset" class="header-button" value="Reset" />
			    <input name="Submit" type="submit" class="header-button"  value="Update" /></td>
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