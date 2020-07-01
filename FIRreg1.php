<?php 
session_start(); 
include("config.php");
?>
			<link type="text/css" href="themes/base/jquery.ui.all.css" rel="stylesheet" />
			<link href="bootstrap/bootstrap.min.css" rel="stylesheet" media="screen">
			<script type="text/javascript" src="jquery-1.4.2.js"></script>
			<script type="text/javascript" src="ui/jquery.ui.core.js"></script>
			<script type="text/javascript" src="ui/jquery.ui.widget.js"></script>
			<script type="text/javascript" src="ui/jquery.ui.datepicker.js"></script>
			<script type="text/javascript" src="ui/jquery.jtimepicker.js"></script>

	
<style type="text/css">
.div1 h2
{
	padding:10px 0px 5px 0px;
	width:auto;
	height:auto;
	color:#333333;
}

input[type="text"]
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
        <form action="chkFIRreg1.php" method="post" enctype="multipart/form-data" name="form1">
	
		   <h1>Step: &nbsp; 1. &nbsp; Fill the following FIR  details</h1>
		         
           <p>&nbsp;</p>
           <table width="770" height="812" align="center" cellpadding="10" cellspacing="5">
             <tr>
               <td width="165" align="left" valign="middle" bgcolor="#FFFFFF">
			     <blockquote>
			       <span class="style3">First Name:</span>			           
			       </blockquote>
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
               <td align="left" valign="middle" bgcolor="#FFFFFF">
			     <blockquote>
			      <span class="style3">Middle Name: </span>			         
			       </blockquote>
               <td align="left" bgcolor="#FFFFFF"><span class="style3">
                 <label>
                 <input name="mname" type="text" id="mname" size="35">
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
			       <span class="style3">Last Name:</span>			           
			       </blockquote>
               <td align="left" bgcolor="#FFFFFF"><span class="style3">
                 <label>
                 <input name="lname" type="text" id="lname" size="35">
				 <script type="text/javascript">
				    var f1 = new LiveValidation('lname');
				    f1.add(Validate.Presence,{failureMessage: " Please enter Lastname"});
				    f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage:
				           " It allows only characters"});
				    f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage:"Invalid Lastname"});
				 </script> 
                 </label>
               </span></td>
             </tr>
             <tr bgcolor="#993366">
               <td height="30" align="left" valign="middle" bgcolor="#FFFFFF"><span class="style3">Gender:</span>             
               <td align="left" bgcolor="#FFFFFF"><span class="style3">
                 <label>
                 <input type="radio" name="gender" value="Male" />
                 Male</label>
                 <label>
                 <input type="radio" name="gender" value="Female" />
                 Female</label>
               </span> </td>
               </tr>
             <tr bgcolor="#993366">
               <td height="30" align="left" valign="middle" bgcolor="#FFFFFF">
			     
			       <span class="style3">Date of crime:</span>			           
               <td align="left" bgcolor="#FFFFFF"><span class="style3">
                 <label>
                 <input type="text" name="date" id="date" readonly="yes" class="input-calendar">
				 <script type="text/javascript">
				    var f1 = new LiveValidation('date');
				    f1.add(Validate.Presence,{failureMessage: " Please enter date"});				   
				 </script> 
                 </label>
               </span></td><br />
               </tr>
             <tr bgcolor="#999999">
               <td height="28" align="left" valign="middle" bgcolor="#FFFFFF">
			     <blockquote>
			       <span class="style3">Time of crime:</span>
			       </blockquote>
               <td align="left" bgcolor="#FFFFFF">
                 <span class="style3">
                 <label></label>
                 <input type="text" name="time2" id="time2" />
                 <?php /*<a href="#" id="time2_toggler">Time</a>
               <div id="time2_picker" class="time_picker_div"></div>*/?>
                 </span></td>
             </tr>
             <tr>
               <td height="60" align="left" valign="middle" bgcolor="#FFFFFF">
			     <blockquote>
			       <span class="style3"> Your Address:</span>			          
			       </blockquote>
               <td align="left" bgcolor="#FFFFFF"><span class="style3">
                 <label>
                 <script type="text/javascript">
				    var f1 = new LiveValidation('address');
				    f1.add(Validate.Presence,{failureMessage: " Please enter Address"});
				   //f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage:
				   // " It allows only characters"});
				    //f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage: 
					      // " Invalid Address"});
				 </script> 
                 </label>
               </span><span class="style3">
                 <textarea name="address" cols="32" rows="3"  id="address"></textarea>
               </span></td>
               </tr>
             
             <tr bgcolor="#993366">
               <td align="left" valign="middle" bgcolor="#FFFFFF"><span class="style3">City:</span></td>
               <td align="left" bgcolor="#FFFFFF"><span class="style3">
                 <select name="city" size="1"  id="city" >
				  <option >----select----</option>
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
               <td align="left" valign="middle" bgcolor="#FFFFFF"><span class="style3">Area Name:</span></td>
               <td align="left" bgcolor="#FFFFFF"><span class="style3">
                 <select name="area" size="1"  id="area" >
				 <option>----select----</option>
                   <?php
						  $areaQuery = "select *from mstr_area";
						  $rsArea = mysqli_query($conn,$areaQuery);
						  while($rowArea = mysqli_fetch_array($rsArea))
						  {
						  ?>
                   <option value="<?php echo $rowArea['area_id']?>"> <?php echo $rowArea['area_name']?></option>
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
			       <span class="style3">Pin-code:</span>
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
			      <span class="style3">Contact number: </span>			          
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
			       <span class="style3">Email-id:</span>			           
			       </blockquote>
               <td align="left" bgcolor="#FFFFFF"><span class="style3">
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
             <tr bgcolor="#999999">
               <td align="left" valign="middle" bgcolor="#FFFFFF"><span class="style3">Crime Type: </span>             
               <td align="left" bgcolor="#FFFFFF"><span class="style3">
                 <select name="crimetype" size="1"  id="crimetype" >
				 <option>----select----</option>
                   <?php
						  $crimetypeQuery = "select *from mstr_crimetype";
						  $rscrimetype = mysqli_query($conn,$crimetypeQuery);
						  while($rowcrimetype = mysqli_fetch_array($rscrimetype))
						  {
						  ?>
                   <option value="<?php echo $rowcrimetype['crime_id']?>"><?php echo $rowcrimetype['crime_type']?></option>
                   <?php }?>
                   <script type="text/javascript">
				    var f1 = new LiveValidation('crimetype');
				    f1.add(Validate.Presence,{failureMessage: "Please enter type of crime"});				   
				 </script>
                 </select>
               </span></td>
               </tr>
             <tr bgcolor="#999999">
               <td align="left" valign="middle" bgcolor="#FFFFFF"><blockquote>
                 <span class="style3">Crime Location Address:</span>              
               </blockquote>
               <td align="left" bgcolor="#FFFFFF"><script type="text/javascript">
				    var f1 = new LiveValidation('crimelocation');
				    f1.add(Validate.Presence,{failureMessage: " Please enter crime location"});
				   //f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage:
				   // " It allows only characters"});
				    //f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage: 
					       //" Invalid Address"});
				 </script>			   <textarea name="crimelocation" cols="32" rows="3"  id="crimelocation"></textarea></td>
               </tr>
             <tr bgcolor="#999999">
               <td align="left" valign="middle" bgcolor="#FFFFFF"><blockquote>
                 <span class="style3">Choose Id-Proof:</span>                 
               </blockquote>
               <td align="left" bgcolor="#FFFFFF"><span class="style3">
                 <select name="idproof" size="1"  id="idproof" >
				   <option value="" selected="selected">----select----</option>
                   <option value="Election Card">Driving License</option>
                   <option value="PAN Card">Passport</option>
                   <option value="License Card">18+ card</option>
                   				 		
				 <script type="text/javascript">
				    var f1 = new LiveValidation('idproof');
				    f1.add(Validate.Presence,{failureMessage: "Please enter identification proof"});				   
				 </script> 
                 </select>
               </span></td>
               </tr>
             <tr bgcolor="#999999">
               <td align="left" valign="middle" bgcolor="#FFFFFF"><blockquote>
                <span class="style3">Number of Id-Proof:</span>                 
               </blockquote>
               <td align="left" bgcolor="#FFFFFF"><label>
                <input type="text" name="idproofno" id="idproofno" maxlength="12">
				 <script type="text/javascript">
				    var f1 = new LiveValidation('idproofno');
				   f1.add(Validate.Presence,{failureMessage: " It cannot be empty"});
				   f1.add(Validate.Format,{pattern: /^[0-9]+$/ ,failureMessage: " It allows only numbers"});
				   f1.add( Validate.Length, { minimum: 6, maximum: 12 } );
				 </script>
               </label></td>
             </tr>
             <tr bgcolor="#999999">
               <td align="left" valign="middle" bgcolor="#FFFFFF"><blockquote>
                <span class="style3">Brief description of incident:</span>                 
               </blockquote>
               <td align="left" bgcolor="#FFFFFF">
			   <textarea name="crimedesc" cols="32" rows="3"  id="crimedesc"></textarea>
			   <script type="text/javascript">
				    var f1 = new LiveValidation('crimedesc');
				    f1.add(Validate.Presence,{failureMessage: " Please enter crime description"});
				   //f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage:
				   // " It allows only characters"});
				    //f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage: 
					  //     " Invalid Address"});
				 </script>			   </td>
             </tr>
             <tr bgcolor="#999999">
               <td height="18" align="left" valign="middle" bgcolor="#FFFFFF">             
               <td align="left" bgcolor="#FFFFFF">&nbsp;</td>
             </tr>
             <tr bgcolor="#999999">
               <td height="32" align="left" valign="middle" bgcolor="#FFFFFF">
			     <blockquote>
			       <span class="style3">Photo of crime location:</span>			          
			       </blockquote>
               <td align="left" bgcolor="#FFFFFF"><input name="photo1" type="file" id="photo1" size="35" /></td>
             </tr>
             <tr bgcolor="#999999">
               <td height="32" align="left" valign="middle" bgcolor="#FFFFFF">
			     <blockquote>
			       <span class="style3">Photo of crime location:</span>			          
			       </blockquote>
               <td align="left" bgcolor="#FFFFFF"><span class="style3">
                 <label>
                 <input name="photo2" type="file" id="photo2" size="35">
                 </label></span></td>
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