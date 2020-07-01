<?php 
//session_start();
include("config.php")?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" xml:lang="en-gb" xmlns="http://www.w3.org/1999/xhtml" lang="en-gb"><head>
  <title>Welcome to the  Crime Reporting System</title>
  
    <!--StyleSheet included-->
<link rel="stylesheet" type="text/css" href="css/message.css" media="all">
<link href="bootstrap/bootstrap.min.css" rel="stylesheet" media="screen">
<!--Stylesheet ends here-->

<!--Javascript included-->
<script type="text/javascript" src="javascript/validation.js"></script>
<link type="text/css" href="themes/base/jquery.ui.all.css" rel="stylesheet" />
	<script type="text/javascript" src="jquery-1.4.2.js"></script>
	<script type="text/javascript" src="ui/jquery.ui.core.js"></script>
	<script type="text/javascript" src="ui/jquery.ui.widget.js"></script>
	<script type="text/javascript" src="ui/jquery.ui.datepicker.js"></script>
	
<style type="text/css">
.rb{
width:600px;
margin:auto;
}
.rb h1{
font-family:Bebas;
font-size:24px;
padding:0px 0px 0px 0px;
color:#000000;
border-bottom:4px solid #cf0000;
}
.rb h2{
padding:15px 0 0 0;
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
	
			<link rel="stylesheet" href="css/template.css" type="text/css">
			<link rel="stylesheet" href="css/constant.css" type="text/css">
<div class="rb">
<h1>Registration &nbsp;&nbsp;Form</h1>
        <form action="chkregistration.php" method="post"  enctype="multipart/form-data" name="form1">
		<div>
		   <h2>Step:1 &nbsp; &nbsp;&nbsp; &nbsp;Fill &nbsp; &nbsp;the &nbsp; &nbsp;following &nbsp; &nbsp;registration &nbsp; &nbsp;details:</h2>
		 </div>            
           <p>&nbsp;</p>
           <table width="770" border="0" align="center">
             <tr>
               <td width="211" align="left" valign="middle" bgcolor="#FFFFFF">
			     <blockquote>
			       <blockquote>
			         <blockquote>
			           <span class="style3">First Name:</span>			         
		             </blockquote>
			       </blockquote>
			     </blockquote>
               <td width="302" height="15" align="left" bgcolor="#FFFFFF">
                 <span class="style3">
				 <label>
                 <input name="fname" type="text" id="fname" size="40" >
				 <script type="text/javascript">
				    var f1 = new LiveValidation('fname');
				    f1.add(Validate.Presence,{failureMessage: " Please enter Firstname"});
				   f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage:" It allows only characters"});
				    f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage: 
					       " Invalid Firstname"});
				 </script>
				 </label>
               </span></td>
             </tr>
             <tr bgcolor="#993366">
               <td align="left" valign="middle" bgcolor="#FFFFFF">
			     <blockquote>
			       <blockquote>
			         <blockquote>
			          <span class="style3">Middle Name: </span>			         
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
			           <span class="style3">Last Name:</span>
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
             <tr bgcolor="#993366">
               <td align="left" valign="middle" bgcolor="#FFFFFF">
			     <blockquote>
			       <blockquote>
			         <blockquote>
			           <span class="style3">Birth-date:</span>
		             </blockquote>
			       </blockquote>
			     </blockquote>
               <td align="left" bgcolor="#FFFFFF"><span class="style3">
                 <label>
                 <input type="text" name="bdate" id="bdate" readonly="yes" class="input-calendar">
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
			           <span class="style3">Gender:</span>
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
			           <span class="style3"> Address:</span>
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
                    <span class="style3">City:</span>
                   </blockquote>
                 </blockquote>
               </blockquote>
               <td align="left" bgcolor="#FFFFFF"><span class="style3">
               <select name="city" size="1"  id="city" onchange="print_area('area',this.selectedIndex);">
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
                   <span class="style3">Area:</span>
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
						<script language="javascript">print_city("city");</script>
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
			          <span class="style3">Pin-code:</span>
		             </blockquote>
			       </blockquote>
			     </blockquote></td>
               <td align="left" bgcolor="#FFFFFF">    
			   <label>            
                 <input name="pincode" type="text" id="pincode" maxlength="6">						 
				 <script type="text/javascript">
				    var f1 = new LiveValidation('pincode');
				   f1.add(Validate.Presence,{failureMessage: " It cannot be empty"});
				   f1.add(Validate.Format,{pattern: /^[0-9]+$/ ,failureMessage: " It allows only numbers"});
				   f1.add( Validate.Length, { minimum: 6, maximum: 6 } );
				 </script>
				 </label>                 
              </td>
             </tr>
             <tr bgcolor="#999999">
               <td align="left" valign="middle" bgcolor="#FFFFFF">
			     <blockquote>
			       <blockquote>
			         <blockquote>
			           <span class="style3">Contact number: </span>
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
			           <span class="style3">Email-id:</span>
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
               <td align="left" valign="middle" bgcolor="#FFFFFF">
			     <blockquote>
			       <blockquote>
			         <blockquote>
			           <span class="style3">Your recent photo:</span>
		             </blockquote>
			       </blockquote>
			     </blockquote>
               <td align="left" bgcolor="#FFFFFF">
                 <label>
                 <input name="photo" type="file" id="photo" onclick=""  size="40">
                 </label>
				 		   </td>
             </tr>
			 
             </tr>
          </table>
		  <p>&nbsp;</p>
		  <div class="article-separator-indent"><span class="style3"class="article_separator">&nbsp;</span></div>
		  <p>&nbsp;</p>
		  <div>
		    <h2> Step:2. &nbsp;&nbsp;Fill&nbsp;&nbsp; the&nbsp;&nbsp; following &nbsp;&nbsp;Log-in&nbsp;&nbsp; details:</em></span></h2>
		  </div>             
           <p>&nbsp;</p>            
           
           <table width="770" align="center">
             <tr bgcolor="#993366">
               <td width="211" height="27" align="left" bgcolor="#FFFFFF">
			   <span class="style3"> Choose login name:</span>
               <td width="265" align="left" bgcolor="#FFFFFF"><span class="style3"> <label>
                 <input name="loginname"  id="loginname" type="text" size="24">
				 <script type="text/javascript">
				    var f1 = new LiveValidation('loginname');
				    f1.add(Validate.Presence,{failureMessage: " Please enter log-in name"});
				   
				 </script> 
                 </label>
               </span></td>
             </tr>
			  <tr bgcolor="#999999">
               <td align="left" bgcolor="#FFFFFF">
			   <span class="style3">Password: </span>
               <td align="left" bgcolor="#FFFFFF"><span class="style3">
			   <label>
			    <input name="password"  type="password" id="password" size="24" />
			 <script type="text/javascript">
				    var f1 = new LiveValidation('password');
				    f1.add(Validate.Presence,{failureMessage: " Please enter password"});				   
				 </script>       
				</label>        
               </span></td>
             </tr>
			 <tr></tr>
			 <tr></tr>
			 <tr></tr>
			  <tr bgcolor="#993366">
               <td align="left" bgcolor="#FFFFFF">
			   <span class="style3">Re-Type Password: </span>
               <td align="left" bgcolor="#FFFFFF"><span class="style3"> 
			   <label>             
                 <input name="rpassword"  type="password" id="rpassword" size="24" />
				  <script type="text/javascript">
				    var f1 = new LiveValidation('rpassword');
				    f1.add(Validate.Presence,{failureMessage: " Please enter password"});
				  </script>
				 </label>                 
               </span></td>
             </tr>
			 <tr></tr>
			 <tr></tr>
			 <tr></tr>
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


</body></html>
