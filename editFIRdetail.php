<?php 
session_start();
include("config.php");
$selectQuery = "select * from fir_details fd,mstr_profile mp  where mp.id = fd.reg_id ";
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
.div1 h2
{
	padding:10px 0px 5px 0px;
	width:auto;
	height:auto;
	color:#333333;
}
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
		<form action="" method="post"  enctype="multipart/form-data" name="form1">
		 <div>
		   <h1> Update your fir detail</h1>
		 </div>             
           <p>&nbsp;</p>
           <table width="753" border="0" cellpadding="0" cellspacing="0">
             <tr>
               <td width="115" rowspan="11" align="right" valign="middle" bgcolor="#FFFFFF">
			       <img src="<?php echo $record["crimephoto1"]; ?>" height="120" width="109">
				   <a href="changephoto.php?changephoto_path=<?php echo $record["crimephoto1"]; ?>" rel="facebox">
				   Crime location Photo</a>                           
               </td>
			   </tr>
			   <tr>
			   <td width="115" rowspan="11" align="right" valign="middle" bgcolor="#FFFFFF">
			       <img src="<?php echo $record["crimephoto2"]; ?>" height="120" width="109">
				   <a href="changephoto.php?changephoto_path=<?php echo $record["crimephoto2"]; ?>" rel="facebox">
				   Crime location Photo</a>
			   
			  </td> 
			   
			  </tr> 
			   <tr>
			   		<td rowspan="11" width="30">
					</td>
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
               <td align="left" valign="middle" bgcolor="#FFFFFF">
			     <blockquote>
			       <blockquote>
			         <blockquote>
			           <span class="style3">Contact number: </span>
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
               <td align="left" valign="middle" bgcolor="#FFFFFF">
			     <blockquote>
			       <blockquote>
			         <blockquote>
			          <span class="style3">Email-id:</span>			         
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
			  <td align="left" valign="middle" bgcolor="#FFFFFF">
			     <blockquote>
			       <blockquote>
			         <blockquote>
			           <span class="style3"> Description:</span>
			           </blockquote>
			       </blockquote>
			     </blockquote>
               <td align="left" bgcolor="#FFFFFF"><span class="style15 style3">
                 <label>
                 <textarea name="desc" cols="40" rows="5"  id="desc"><?php echo $record["description"]; ?></textarea>
				 <script type="text/javascript">
				    var f1 = new LiveValidation('desc');
				    f1.add(Validate.Presence,{failureMessage: " Please enter description"});
				 </script> 
                 </label>
               </span></td>
             </tr>
             <tr bgcolor="#999999">
               <td height="27" align="right" valign="middle" bgcolor="#FFFFFF">
               <td align="left" bgcolor="#FFFFFF">&nbsp;</td>
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