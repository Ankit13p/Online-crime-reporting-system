<?php 
include("header.php");
include("config.php");

$uname = $_GET['username'];
$selectQuery = "select *from mstr_profile where username= '".$uname."' ";


$rs = mysqli_query($conn,$selectQuery);
$record = mysqli_fetch_array($rs);
if(mysqli_num_rows($rs)==0)
	//header("location:viewpolice.php");
?>


<style type="text/css">
<!--
@import url("css/template.css");
-->
</style>
<div id="content">
  <div class="clear">
        <!--right-->
        <!--left-->
<div id="left">
    <div class="left-indent"><div class="clear">
    <div class="wrapper-box module_menu"><div class="border-top"><div class="border-bottom">
    <div class="border-left"><div class="border-right"><div class="corner-top-left">
    <div class="corner-top-right"><div class="corner-bottom-left">
    <div class="corner-bottom-right clear">
	<div class="wrapper-box-indent">
    <div class="box-title">
    <div class="border1-top">
    <div class="border1-bottom">
    <div class="border1-left">
    <div class="border1-right">
    <div class="corner1-top-left">
    <div class="corner1-top-right">
    <div class="corner1-bottom-left">
    <div class="corner1-bottom-right clear">
                                                                        
	<h3>Main menu</h3>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
                                                                        
    <div class="main-box">
    <div class="clear">
	<ul class="menu">
	                 <li id="current" class="active item1">	<a href=""><span>Home</span></a></li>
	                 <li class="item2"><a href=""><span>Get Crime Alert </span></a></li>
					 <li class="item59"><a href="">Register Your FIR </a></li>
					 <li class="item60"><a href="">Police Station </a></li>
					 <li class="item61"><a href=""><span>Contact Us</span></a></li>
					 <li class="item62"><a href=""><span>Search</span></a></li>
					 <li class="item63"><a href=""><span>What's New? </span></a></li>
	</ul>
	</div>
    </div>
    </div>
    </div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
    </div>

	<div class="wrapper-box module s1">
	<div class="border-top">
	<div class="border-bottom">
	<div class="border-left">
	<div class="border-right">
	<div class="corner-top-left">
	<div class="corner-top-right">
	<div class="corner-bottom-left">
	<div class="corner-bottom-right clear">
	<div class="wrapper-box-indent">
	<div class="box-title">
    <div class="border1-top">
	<div class="border1-bottom">
	<div class="border1-left">
	<div class="border1-right">
	<div class="corner1-top-left">
	<div class="corner1-top-right">
	<div class="corner1-bottom-left">
	<div class="corner1-bottom-right clear">
	
	<h3>Popular</h3>
	
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	
	<div class="main-box">
	<div class="clear">
	  <ul class="mostread s1">
	    <li class="mostread s1"><a href="" class="mostread s1">Emergancy Contact Numbers</a></li>
	    <li class="mostread s1"><a href="" class="mostread s1">FIR Registration Guidelines</a></li>
		<li class="mostread s1"><a 	href=""	class="mostread s1"> Where should I report a crime? </a></li>
		<li class="mostread s1"><a 	href=""	class="mostread s1">What is Section 144 ?</a></li>
		<li class="mostread s1"><a 	href=""	class="mostread s1">For Recruitement </a></li>
		<li class="mostread s1"><a 	href=""	class="mostread s1">What to do in faulty Investigation?</a></li>
		<li class="mostread s1"><a 	href=""	class="mostread s1">What to do in Police Harassement?</a></li>
		</ul>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>

<body>

<div id="container" class="wrapper-container">
       <div class="corner-top-left">
       <div class="corner-top-right">
       <div class="corner-bottom-left">
       <div class="corner-bottom-right">
	   

<h1><span class="componentheading"><em>Edit User</em>:</span></h1>
<p>&nbsp;</p>
<form name="edituser.php" action="updateuser.php" method="post">
<table>
<tr>
	<td colspan="6" height="36" align="left" valign="middle" class="rowBorder">&nbsp;&nbsp;&nbsp;&nbsp;
		<img src="images/view.png" align="absbottom"/> <span class="highlight">Edit City Name </span></td>
	<td width="1%"></span><td width="1%"></td>
</tr>
 		
<tr>
               <td width="115" rowspan="11" align="right" valign="middle" bgcolor="#FFFFFF">
			       <img src="<?php echo $record["profile_photo"]; ?>" height="120" width="109">
				   <a href="changephoto.php?changephoto_path=<?php echo $record["profile_photo"]; ?>" rel="facebox">
				   Change Photo</a>   
				   </td>
				   </tr>
 <tr>
   <td align="right" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
   <td colspan="3" align="left" bgcolor="#FFFFFF">&nbsp;</td>
 </tr>
 <tr>
			<td width="165" align="right" valign="middle" bgcolor="#FFFFFF">
			<span class="style3">First Name: </span> </td>
			<td colspan="3" align="left" bgcolor="#FFFFFF"><span class="style3">
			<input type="text" value="<?php echo $record["first_name"]; ?>" 
			       name="fname" id="fname" />
                      <script type="text/javascript">
						var f1 = new LiveValidation('fname');
						f1.add(Validate.Presence,{failureMessage: " Please enter Firstname"});
					  // f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,
					   //failureMessage:" It allows only characters"});
						f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,
						failureMessage:" Invalid name"});
					 </script>
                    </span></td>
                  </tr>
				  <tr>
			<td width="165" align="right" valign="middle" bgcolor="#FFFFFF">
			<span class="style3">Middle Name: </span> </td>
			<td colspan="3" align="left" bgcolor="#FFFFFF"><span class="style3">
			<input type="text" value="<?php echo $record["middle_name"]; ?>" 
			       name="mname" id="mname" />
                      <script type="text/javascript">
						var f1 = new LiveValidation('mname');
						f1.add(Validate.Presence,{failureMessage: " Please enter Middlename"});
					  // f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,
					   //failureMessage:" It allows only characters"});
						f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,
						failureMessage:" Invalid name"});
					 </script>
                    </span></td>
                  </tr>
				  <tr>
			<td width="165" align="right" valign="middle" bgcolor="#FFFFFF">
			<span class="style3">Last Name: </span> </td>
			<td colspan="3" align="left" bgcolor="#FFFFFF"><span class="style3">
			<input type="text" value="<?php echo $record["last_name"]; ?>" 
			       name="lname" id="lname" />
                      <script type="text/javascript">
						var f1 = new LiveValidation('lname');
						f1.add(Validate.Presence,{failureMessage: " Please enter lastname"});
					  // f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,
					   //failureMessage:" It allows only characters"});
						f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,
						failureMessage:" Invalid name"});
					 </script>
                    </span></td>
                  </tr>
				  <tr>
			<td width="165" align="right" valign="middle" bgcolor="#FFFFFF">
			<span class="style3">Gender: </span> </td>
			<td colspan="3" align="left" bgcolor="#FFFFFF"><span class="style3">
			<input type="text" value="<?php echo $record["gender"]; ?>" 
			       name="gender" id="gender" />
                      <script type="text/javascript">
						var f1 = new LiveValidation('gender');
						f1.add(Validate.Presence,{failureMessage: " Please enter gender"});
					  // f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,
					   //failureMessage:" It allows only characters"});
						f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,
						failureMessage:" Invalid name"});
					 </script>
                    </span></td>
                  </tr>
				  <tr>
			<td width="165" align="right" valign="middle" bgcolor="#FFFFFF"><span class="style3">Date of birth: </span> </td>
			<td colspan="3" align="left" bgcolor="#FFFFFF"><span class=" style15 style3">
			<input type="text" value="<?php echo $record["Dob"]; ?>" 
			       name="Dob" id="Dob" />
                      <script type="text/javascript">
						var f1 = new LiveValidation('fDob');
						f1.add(Validate.Presence,{failureMessage: " Please enter birthdate"});
					  // f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,
					   //failureMessage:" It allows only characters"});
						f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,
						failureMessage:" Invalid name"});
					 </script>
                    </span></td>
                  </tr>
				   <tr>
                    <td height="60" align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000"> Address:</span> </td>
                    <td width="207" align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                      <label>
                      <TEXTAREA ROWS="5" COLS="30" name="address" id="address" style="background-color: #EEEEEE"><?php echo $record["address"]; ?></TEXTAREA>
                      <script type="text/javascript">
				    var f1 = new LiveValidation('address');
				    f1.add(Validate.Presence,{failureMessage: " Please enter Address"});
				   //f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage:
				   // " It allows only characters"});
				    //f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage: 
					       //" Invalid Address"});
				 </script>
                      </label>
                    </span></td>
					</tr>
					<tr bgcolor="#993366">
                    <td align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">Contact number</span>: </td>
                    <td colspan="3" align="left" bgcolor="#FFFFFF"><span class="style15 style3">
					 <input type="text" value="<?php echo $record["contact_no"]; ?>" name="contactno" maxlength="12" />
					<script type="text/javascript">
				       var f1 = new LiveValidation('contactno');
					   f1.add(Validate.Presence,{failureMessage: " It cannot be empty"});
					   f1.add(Validate.Format,{pattern: /^[0-9]+$/ ,
					   failureMessage: " It allows only numbers"});
					   f1.add( Validate.Length, { minimum: 6, maximum: 12 } );
					 </script></span></td>
                  </tr>
				  <tr bgcolor="#999999">
                    <td align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">Email-id</span>: </td>
                    <td colspan="3" align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                       <input type="text" value="<?php echo $record["emailid"]; ?>" name="emailid"  maxlength="254"/>
			            <script type="text/javascript">
				           var f1 = new LiveValidation('emailid');
				           f1.add(Validate.Presence,{failureMessage: " Please enter email-id"});
				           f1.add( Validate.Email );
				        </script>                       
                    </span></td>
                  </tr>
				   
                  <tr bgcolor="#993366">
                    <td align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">Area Name: </span> </td>
                    <td colspan="3" align="left" bgcolor="#FFFFFF"><span class="style15 style3">
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
                 <tr ><td></td>
                    <td align="right" valign="middle" bgcolor="#FFFFFF"><span class="style19" style="color: #000000">Pincode: </span> </td>
                    <td colspan="3" align="left" bgcolor="#FFFFFF">
					 <input type="text" value="<?php echo $record["pincode"]; ?>" name="pincode" maxlength="12" />
					<script type="text/javascript">
				       var f1 = new LiveValidation('pincode');
					   f1.add(Validate.Presence,{failureMessage: " It cannot be empty"});
					   f1.add(Validate.Format,{pattern: /^[0-9]+$/ ,
					   failureMessage: " It allows only numbers"});
					   f1.add( Validate.Length, { minimum: 6, maximum: 12 } );
					 </script></span></td>
                  </tr>
				  <tr><td></td>
                    <td width="74" align="right" valign="middle" bgcolor="#FFFFFF">
					<span class="style19" style="color: #000000">City:</span></td>
                    <td width="296" align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                      <select name="city" size="1"  id="city" >
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
	<td width="1%">&nbsp;</td>
  	<td width="27%"></td>
	<td colspan="2" ><input name="reset" type="reset" class="header-button"  id="reset" value="Reset"/>
	<input name="update" type="submit" class="header-button"  id="update" value="Update"/></td>
</tr>
        </tr>
	</table>
	</div>  
    </div>
    </div>
    </div>
    </div>
</form>	
	   
</body>
</html>