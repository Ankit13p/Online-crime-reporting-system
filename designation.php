<?php
session_start(); 
?>

<?php /* FOR GREYBOX USE
<script type="text/javascript" src="javascript/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="greybox/gb_styles.css" media="screen" />
<script type="text/javascript" src="greybox/gb_scripts.js"></script>
<script type="text/javascript" src="greybox/AJS_fx.js"></script>
<script type="text/javascript" src="greybox/AJS.js"></script>
<script type="text/javascript">
   jQuery(document).ready(function($) {
      $('a[rel*=greybox]').greybox({
        loading_image : 'greybox/indicator.gif',
        close_image : 'greybox/g_close.gif'
      })
    })
  </script>
  <link type="text/css" href="themes/base/jquery.ui.all.css" rel="stylesheet" />
	<script type="text/javascript" src="jquery-1.3.2.js"></script>
	<script type="text/javascript" src="ui/jquery.ui.core.js"></script>
	<script type="text/javascript" src="ui/jquery.ui.accordion.js"></script>
	<link type="text/css" href="demos.css" rel="stylesheet" />
	<script type="text/javascript">
	$(function() {
		$("#accordion").accordion();
	});
	</script>*/?>
	

<link rel="stylesheet" href="files/template.css" type="text/css">
<link rel="stylesheet" href="files/constant.css" type="text/css">
<style type="text/css">
<!--
.style15 {font-size: 18px}
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
        <form action="chkdesignation.php" method="post"  enctype="multipart/form-data" name="form1">
		 <div>
		  
		 </div>             
           <h1> Add Designation:</h1>
		   <p>&nbsp;</p>
           <table width="70%" border="0" bgcolor="#FFFFFF">
<tr>
	<td>
	</td>
	<td width="1%"></span><td width="1%"></td>
</tr>
<tr>
	<td height="9" colspan="4"></td>
</tr>
<tr>
	<td width="1%">&nbsp;</td>
  	<td width="27%" class="formField"><span class="style4 tableHeading style2">Designation Name</span>:</td>
	<td width="23%" ><input type="text" id="designation" name="designation" />		
		
			<script type="text/javascript">
				var f1 = new LiveValidation('designation');
				f1.add(Validate.Presence,{failureMessage: "\n It cannot be empty"});
				f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage: "It allows only characters"});
				f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage: "Invalid designation name"});

			</script>	</td>
	<td width="45%"><font color="#FF0000"><div id="messageSecond"></div></font></td>
</tr>
<tr>
	<td width="1%">&nbsp;</td>
  	<td width="27%">&nbsp;</td>
	<td width="23%" >
	  </td>
	<td width="45%">&nbsp;</td>
</tr>
<tr>
	<td height="5" colspan="4"></td>
</tr>
<tr>
	<td width="1%">&nbsp;</td>
  	<td width="27%"></td>
	<td colspan="2" ><a style="text-decoration:none" href="viewdesignation.php"><input name="Cancel" type="button" class="header-button"  id="Cancel" value="Cancel"/></a>
	<input name="save" type="submit" class="header-button"  id="save" value="Save"/></td>
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
		   <p>&nbsp;</p>
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
</html>
