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
<link href="bootstrap/bootstrap.min.css" rel="stylesheet" media="screen">
	<script type="text/javascript" src="jquery-1.4.2.js"></script>
	<script type="text/javascript" src="ui/jquery.ui.core.js"></script>
	<script type="text/javascript" src="ui/jquery.ui.widget.js"></script>
	<script type="text/javascript" src="ui/jquery.ui.datepicker.js"></script>
	<script type="text/javascript">
	$(function() {		
		$('#bdate').datepicker({
			changeMonth: true,
			changeYear: true,
			yearRange: '1900:2100'
		});
		$('#txtjoin').datepicker({
			changeMonth: true,
			changeYear: true,
		});		
	});
	</script>

<style type="text/css">
input[type="text"]
{
	height:30px; !important
}
input[type="password"]
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

<link rel="stylesheet" type="text/css" href="datepicker/demo/css/calendar-style.css" />
	<link rel="stylesheet" type="text/css" href="datepicker/dist/css/pignose.calendar.css" />	
	<script type="text/javascript" src="datepicker/demo/js/jquery.latest.min.js"></script>
	<script type="text/javascript" src="datepicker/demo/js/moment.latest.min.js"></script>
	<script type="text/javascript" src="datepicker/demo/js/semantic.ui.min.js"></script>
	<script type="text/javascript" src="datepicker/demo/js/prism.min.js"></script>
	<script type="text/javascript" src="datepicker/dist/js/pignose.calendar.js"></script>
	<script type="text/javascript">
	//<![CDATA[
	$(function() {
		$('#wrapper .version strong').text('v' + $.fn.pignoseCalendar.ComponentVersion);
		function onSelectHandler(date, context) {
			/**
			 * @date is an array which be included dates(clicked date at first index)
			 * @context is an object which stored calendar interal data.
             * @context.calendar is a root element reference.
			 * @context.calendar is a calendar element reference.
			 * @context.storage.activeDates is all toggled data, If you use toggle type calendar.
             * @context.storage.events is all events associated to this date
			 */

            var $element = context.element;
			var $calendar = context.calendar;
			var $box = $element.siblings('.box').show();
			var text = 'You choose date ';

			if(date[0] !== null) {
				text += date[0].format('YYYY-MM-DD');
			}

			if(date[0] !== null && date[1] !== null) {
				text += ' ~ ';
			} else if(date[0] === null && date[1] == null) {
				text += 'nothing';
			}

			if(date[1] !== null) {
				text += date[1].format('YYYY-MM-DD');
			}

			$box.text(text);
		}
		        function onApplyHandler(date, context) {
            /**
             * @date is an array which be included dates(clicked date at first index)
             * @context is an object which stored calendar interal data.
             * @context.calendar is a root element reference.
             * @context.calendar is a calendar element reference.
             * @context.storage.activeDates is all toggled data, If you use toggle type calendar.
             * @context.storage.events is all events associated to this date
             */

            var $element = context.element;
            var $calendar = context.calendar;
            var $box = $element.siblings('.box').show();
            var text = 'You applied date ';

            if(date[0] !== null) {
                text += date[0].format('YYYY-MM-DD');
            }

            if(date[0] !== null && date[1] !== null) {
                text += ' ~ ';
            } else if(date[0] === null && date[1] == null) {
                text += 'nothing';
            }

            if(date[1] !== null) {
                text += date[1].format('YYYY-MM-DD');
            }

            $box.text(text);
        }
		// Input Calendar
		$('.input-calendar').pignoseCalendar({
      select: onSelectHandler,
	  apply: onApplyHandler,
			buttons: true, // It means you can give bottom button controller to the modal which be opened when you click.
		});

		$('.menu .item').tab();
	});
	</script>
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
		  					<h1>
								
									 Update your profile:
									
								</h1>
						</div>             
           				<p>&nbsp;
							
						</p>
           				<table style="padding-left:20px;" width="753" border="0" cellpadding="0" cellspacing="0">
             				<tr>
               					<td width="115" rowspan="12" align="right" bgcolor="#FFFFFF" style="vertical-align:top;">
			       					<img src="<?php echo $record["profile_photo"]; ?>" height="110" width="110">
				  					<!-- <a href="changephoto.php?changephoto_path=<?php echo $record["profile_photo"]; ?>" >
				   					Change Photo</a>      -->
								</td>
						<td rowspan="12" width="30">
						</td>                    
              					<td width="122" height="27" align="left" valign="middle" bgcolor="#FFFFFF">
			     				 <blockquote>
			       				 <blockquote>
			         			 <blockquote>
			          			 
								 	<span class="style3">
								 		First Name:
								 	</span>			           
								 
			           			 </blockquote>
			       				 </blockquote>
			     				 </blockquote>
								</td>
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
                 					</span>
								</td>
             				</tr>
             				<tr bgcolor="#993366">
               					<td height="27" align="left" valign="middle" bgcolor="#FFFFFF">
									 <blockquote>
									   <blockquote>
										 <blockquote>
										   <span >Middle Name: </span>
										   </blockquote>
									   </blockquote>
									 </blockquote>
								 </td>
								  <td align="left" bgcolor="#FFFFFF"><span class=" style3">
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
									 </span>
								  </td>
            				</tr>
							<tr>
								   <td height="28" align="left" valign="middle" bgcolor="#FFFFFF">
									 <blockquote>
									   <blockquote>
										 <blockquote>
										   <span >Last Name:</span>
										   </blockquote>
									   </blockquote>
									 </blockquote>
									</td>
								   <td align="left" bgcolor="#FFFFFF"><span class=" style3">
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
								   </span>
								   </td>
							</tr>
							<tr bgcolor="#993366">
								<td align="left" valign="middle" bgcolor="#FFFFFF">
									<blockquote>
										<blockquote>
											<blockquote>
											   <span>Birth-date:</span>
											   </blockquote>
											</blockquote>
									</blockquote>
								</td>
								<td align="left" bgcolor="#FFFFFF"><span class=" style3">
								 <label>
								 <input type="text" name="bdate" id="bdate" readonly="yes" value="<?php echo $record["Dob"]; ?>" class="input-calendar">
								 <script type="text/javascript">
									var f1 = new LiveValidation('bdate');
									f1.add(Validate.Presence,{failureMessage: " Please enter Birth date"});				   
								 </script> 
								 </label>
								</span>
								</td>
							</tr>
							 <tr bgcolor="#999999">
							   <td align="left" valign="middle" bgcolor="#FFFFFF">
								 <blockquote>
								   <blockquote>
									 <blockquote>
									   <span>Gender:</span>
									   </blockquote>
								   </blockquote>
								 </blockquote>
								 </td>
							   <td align="left" bgcolor="#FFFFFF">
								 <span class=" style3">
								 <label>                   
								   <input type="radio" name="gender" value="Male" <?php if($record["gender"]=="Male") echo "checked = 'checked'"?>>Male</label>            
								 <label>
								   <input type="radio" name="gender" value="Female" <?php if($record["gender"]=="Female") echo "checked = 'checked'"?>>Female</label>
								 </span></td>
							 </tr>
							 <tr>
							   <td align="left" valign="middle" bgcolor="#FFFFFF">
								 <blockquote>
								   <blockquote>
									 <blockquote>
									   <span > Address:</span>
									   </blockquote>
								   </blockquote>
								 </blockquote>
								</td>
							   <td align="left" bgcolor="#FFFFFF"><span class=" style3">
								 <label>
								 <textarea name="address" cols="40" rows="5"  id="address"><?php echo $record["address"]; ?></textarea>
								 <script type="text/javascript">
									var f1 = new LiveValidation('address');
									f1.add(Validate.Presence,{failureMessage: " Please enter Address"});
								 </script> 
								 </label>
							   </span>
							   </td>
							 </tr>
							 <tr bgcolor="#999999">
							   <td align="left" bgcolor="#FFFFFF">
							   <blockquote>
								 <blockquote>
								   <blockquote>
									 <span>City:</span>
								   </blockquote>
								 </blockquote>
							   </blockquote>
							   </td>
							   <td align="left" bgcolor="#FFFFFF"><span class=" style3">
							   <select name="city" size="1"  id="city" >
								<option>-----select-----</option>
										<?php
										  $cityQuery = "select *from mstr_city";
										  $rsCity = mysqli_query($conn,$cityQuery);
										  while($rowCity = mysqli_fetch_array($rsCity))
										  {
										  ?>
											<option value="<?php echo $rowCity['city_id']?>" <?php if($record["city_id"]==$rowCity['city_id']) echo "selected"; ?>>
											<?php echo $rowCity['city_name']?>
											</option>
										<?php }?>
								 <script type="text/javascript">
									var f1 = new LiveValidation('city');
									f1.add(Validate.Presence,{failureMessage: "Please enter city name"});				   
								 </script> 
								 </select>
							   </span>
							   </td>
							 </tr>
							 <tr bgcolor="#993366">
							   <td align="left" valign="middle" bgcolor="#FFFFFF">
								 <blockquote>
								   <blockquote>
									 <blockquote>
									   <span>Pin-code:</span>
									   </blockquote>
								   </blockquote>
								 </blockquote></td>
							   <td align="left" bgcolor="#FFFFFF"><span class=" style3">                
								 <input name="pincode" type="text" id="pincode" maxlength="6" value="<?php echo $record["pincode"]; ?>">						 
								 <script type="text/javascript">
									var f1 = new LiveValidation('pincode');
								   f1.add(Validate.Presence,{failureMessage: " It cannot be empty"});
								   f1.add(Validate.Format,{pattern: /^[0-9]+$/ ,failureMessage: " It allows only numbers"});
								   f1.add( Validate.Length, { minimum: 6, maximum: 6 } );
								 </script>                 
							   </span>
							  </td>
							 </tr>
							 <tr bgcolor="#999999">
							   <td align="left" valign="middle" bgcolor="#FFFFFF">
								 <blockquote>
								   <blockquote>
									 <blockquote>
									  <span >Contact number: </span>			          
									   </blockquote>
								   </blockquote>
								 </blockquote>
								 </td>
							   <td align="left" bgcolor="#FFFFFF"><span class=" style3">
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
							   <td align="left" valign="middle" bgcolor="#FFFFFF">
								 <blockquote>
								   <blockquote>
									 <blockquote>
									   <span >Email-id:</span>
									   </blockquote>
								   </blockquote>
								 </blockquote>
								 </td>
							   <td align="left" bgcolor="#FFFFFF"><span class=" style3">
								 <label>
							   <input name="emailid" type="text" id="emailid" size="40" maxlength="254" value="<?php echo $record["emailid"]; ?>"/>
								 <script type="text/javascript">
									var f1 = new LiveValidation('emailid');
									f1.add(Validate.Presence,{failureMessage: " Please enter email-id"});
									f1.add( Validate.Email );
								 </script> 
								 </label>
							   </span>
							   </td>
							 </tr>
							 
							  <tr bgcolor="#999999">
							   <td height="27" align="left" valign="middle" bgcolor="#FFFFFF">
								 <blockquote>
								   <blockquote>
									 <blockquote>
									   <span >Your recent photo:</span>
									   </blockquote>
								   </blockquote>
								 </blockquote>
								 </td>
							   <td align="left" bgcolor="#FFFFFF"><span class=" style3">
								 <label>
								 <input name="photo" type="file" id="photo" onClick=""  size="40">
								 </label>
								 </span>
								</td>
							 </tr>
							 <tr bgcolor="#999999">
							   <td height="27" align="left" valign="middle" bgcolor="#FFFFFF">
							   </td>
							   <td align="left" bgcolor="#FFFFFF">&nbsp;
							   </td>
							 </tr>
          				 </table>
		  		
		  	
			 <h3> Update your login details </h3><p>&nbsp;</p>            
           
           <table width="688" cellpadding="0" cellspacing="0">
             <tr bgcolor="#993366">
               <td width="91" align="left" bgcolor="#FFFFFF">
			   </td>
               <td width="153" height="32" align="left" bgcolor="#FFFFFF">
			   
			   <span > Choose Login Name:</span>
			   </td>
               <td width="442" align="left" bgcolor="#FFFFFF"><span class="style15">
			   
			 
                 <label>
                 <input name="uname"  id="uname" type="text"  size="24" value="<?php echo $record["username"]; ?>">
				 <script type="text/javascript">
				    var f1 = new LiveValidation('uname');
				    f1.add(Validate.Presence,{failureMessage: " Please enter user name"});
				   
				 </script> 
                 </label>
               </span>
			   </td>
             </tr>
			 
			  <tr bgcolor="#999999">
			    <td align="left" bgcolor="#FFFFFF">
				</td>              
			    <td height="31" align="left" bgcolor="#FFFFFF"><span >Old Password:</span>
				</td>             
			    <td align="left" bgcolor="#FFFFFF"><span class="style15">
			      <input name="oldpwd"  type="password" id="oldpwd"  size="24" value="<?php echo $record["password"]; ?>" >
			    </span>
				</td>
			   </tr>
			   <tr bgcolor="#999999">
				   <td align="left" bgcolor="#FFFFFF"> 
				   </td>               
				   <td height="32" align="left" bgcolor="#FFFFFF">
				   <span >New Password: </span>
				   </td>
				   <td align="left" bgcolor="#FFFFFF"><span class="style15">
					 <input name="password"  type="password" id="password" size="24"  />
					 <script type="text/javascript">
						var f1 = new LiveValidation('password');
					   f1.add(Validate.Presence,{failureMessage: " Please enter password"});				   
					 </script>                
				   </span>
				   </td>
             </tr>
			 
			  <tr bgcolor="#993366">
			    <td align="left" bgcolor="#FFFFFF">                
               <td height="32" align="left" bgcolor="#FFFFFF">
			   <span >Re-Type New Password: </span>
               <td align="left" bgcolor="#FFFFFF"><span class="style15">              
                 <input name="rpassword"  type="password" id="rpassword" size="24" />
				  <script type="text/javascript">
				    var f1 = new LiveValidation('rpassword');
				    f1.add(Validate.Presence,{failureMessage: " Please enter password"});
				  </script>                 
               </span></td>
             </tr>
			 <tr>
			 <td>
			 <p>&nbsp;</p>
			 </td>
			 </tr>
			 <tr>
                    <td></td><td></td><td>
					<input name="reset2" type="reset" class="header-button" value="Reset" />
					</td>
					</tr>
					<td></td><td></td><td>
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