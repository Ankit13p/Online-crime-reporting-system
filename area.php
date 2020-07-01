<?php 
session_start();
include("config.php");
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
	            
         <h1> Add Area Details </h1>
		 <p>&nbsp;</p>
           <table width="70%" border="0" bgcolor="#FFFFFF">

<tr>
	<td height="20" colspan="4"></td>
</tr>
<tr>
  <td height="37">&nbsp;</td>
  <td>City Name: </td>
  <td><span class="style3">
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
  <td>&nbsp;</td>
</tr>
<tr>
	<td width="1%">&nbsp;</td>
  	<td width="27%" class="formField"><span class="style3">Area Name</span>:</td>
	<td width="23%" ><input type="text" id="area" name="area" />		
		
			<script type="text/javascript">
				var f1 = new LiveValidation('area');
				f1.add(Validate.Presence,{failureMessage: "\n It cannot be empty"});
				f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage: "It allows only characters"});
				f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage: "Invalid Area  Full Name"});

			</script>	</td>
	<td width="45%"><font color="#FF0000"><div id="messageSecond"></div></font></td>
</tr>
<tr>
</tr>
<tr></tr>

<tr>
	<td width="1%">&nbsp;</td>
	<td width="27%" class="formField"><span class="style4 tableHeading style2">Pincode</span>:</td>
	<td width="23%" ><input type="text" id="pincode" name="pincode" />		
		
			<script type="text/javascript">
				var f1 = new LiveValidation('pincode');
				f1.add(Validate.Presence,{failureMessage: "\n It cannot be empty"});
				//f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage: "It allows only characters"});
				//f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage: "Invalid Area  Full Name"});

			</script>	</td>
	<td width="45%"><font color="#FF0000"><div id="messageSecond"></div></font></td>
	
</tr>
<tr>
</tr>
<tr></tr>
<tr>
	<td width="1%">&nbsp;</td>
  	<td width="27%"></td>
	<td colspan="2" ><input name="next" type="submit" class="header-button"  id="next" value="Save"/></td>
</tr>
</table	>	   
		   <p>&nbsp;</p>
		   <p>&nbsp;</p>
        </form> 
	</div>
    </div>
	</div>
	</div>
	</div>
 
<div class="clear"></div>
      <?php
	   include("footer1.php");
	   ?>
</div>
</div>
</div>



</body>
</html>
