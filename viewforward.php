<?php
include("sessionHandler.php");
include("config.php");
$selectQuery = "select *from fir_forward ";
$resultSet = mysqli_query($conn,$selectQuery) or die(mysqli_error());
//echo $selectQuery;
?>
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

 
     <h1> View Fir Forward Details: </h1><p>
       
        </strong>      </p>
      <center>
      <table width="100%" border="1" bgcolor="#FFFFFF">
	
	<tr>
		<td colspan="6" height="49" align="center" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;
		<span class="highlight"> View Fir Forward Details </span></td>
	</tr>
	<tr>
	<td colspan="6"><hr /></td>
	</tr>
	<tr>
	<td width="12%" align="center" class="style4 tableHeading style2">Sr.No.</td>
      <td width="30%" align="center" class="style4 tableHeading style2">&nbsp;To Officer</td>      
      <td width="25%" align="center" class="style4 tableHeading style2">desription</td>
      <td width="25%" align="center" class="style4 tableHeading style2">From Officer</td>
    </tr>
	<tr>
	<td colspan="6"><hr /></td>
	</tr>
  <?php
	$i = 1;
	while($record=mysqli_fetch_array($resultSet))
	{
	?>
    <tr >
      
      <td align="center" ><?php echo $i++; ?></td>
     <!--<td align="left" >&nbsp;&nbsp;<?php echo $record["F_id"];?></td>    -->
      <td align="center" ><?php echo $record["username"];?>
	  </td>
      <td align="center" ><?php echo $record["description"];?>
	  </td>
	   <td align="center" ><?php echo $record["frmofficer"];?>
	  </td>
    </tr>
	
    <?php
	}//while closed	
	?>
    
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
<p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
</div>

</p><div class="clear"></div>
	    <?php
	   include("footer1.php");
	   ?>
</div>
</div>