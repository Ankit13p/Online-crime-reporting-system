<?php 
session_start(); 
?>
<style type="text/css">
<!--
.style15 {font-size: 18px}
-->
</style>
<link rel="stylesheet" href="css/template.css" type="text/css">
<link rel="stylesheet" href="css/constant.css" type="text/css">
<div id="content">
<div class="main">
<div id="wrap">   
<?php
	include("menu.php");
?>
<?php
   include("sidebar.php");
?>

			<div class="div2">
       <form action="chkcity.php" method="post"  enctype="multipart/form-data" name="form1">
		 <div>
		 
		 </div>             
           <h1> Add City</h1>
           <table width="70%" height="155" border="0" bgcolor="#FFFFFF">
<tr>
	<td colspan="6" height="29" align="left" valign="middle" class="rowBorder">&nbsp;&nbsp;&nbsp;&nbsp;
	</td>
	<td width="1%"></td>
</tr>
<tr>
	<td height="20" colspan="4"></td>
</tr>
<tr>
	<td width="1%">&nbsp;</td>
  	<td width="27%" class="formField"><span class="style4" tableHeading="style2">City Name</span>:</td>
	<td width="23%" ><input type="text" id="city" name="city" />		
			<script type="text/javascript">
				var f1 = new LiveValidation('city');
				f1.add(Validate.Presence,{failureMessage: "\n It cannot be empty"});
				f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage: "It allows only characters"});
				f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage: "Invalid Designation Full Name"});

			</script>	</td>
	<td width="45%"><font color="#FF0000"><div id="messageSecond"></div></font></td>
</tr>
<tr>
	<td width="1%">&nbsp;</td>
  	<td width="27%" class="formField">&nbsp;</td>
	<td width="23%" >	</td>
	<td width="45%">&nbsp;</td>
</tr>
<tr>
	<td height="5" colspan="4"></td>
</tr>
<tr>
	<td width="1%">&nbsp;</td>
  	<td width="27%"></td>
	<td colspan="2" ><input name="next" type="submit" class="header-button"  id="next" value="Save"/></td>
</tr>
<tr>
	<td height="5" colspan="4"></td>
</tr>
</table>

 <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>
    </div></p>
  <p>

  </p>
  <p>&nbsp;</p>
       </form> 
</div>

</p><div class="clear"></div>
	    <?php
	   include("footer1.php");
	   ?>
</div>
</div>