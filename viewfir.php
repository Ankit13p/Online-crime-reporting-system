<?php
ob_start();
include("sessionHandler.php");
include("config.php");


//if(!$_SESSION[type]=="Police Officer")
//header("location:home.php");
$officer_mstr_policestation = "SELECT policestation_id FROM mstr_officer WHERE username = '".$_SESSION['username']."'";

$result = mysqli_query($conn,$officer_mstr_policestation) or die(mysqli_error());
$raw=mysqli_fetch_array($result);
$policestation_id = $raw['policestation_id'];

$selectFIRQuery = "select * from fir_details fd, mstr_policestation ps, mstr_designation md, mstr_officer mo,mstr_profile mp,mstr_area ma,mstr_city mc 
					where fd.area_id = ps.area_id and mo.policestation_id = ps.policestation_id 
					and md.desi_id = mo.desi_id  and mp.id = fd.reg_id 
					and ma.area_id = fd.area_id and mc.city_id = ma.city_id 
					and ps.policestation_id = $policestation_id 
					and fd.status_id=1";



$resultSet = mysqli_query($conn,$selectFIRQuery);
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
 
     <h1>View details of all registered FIR: </h1><br />
	  <?php // base64_decode($_GET['msg'])?></strong><center>
      <table width="100%" border="1">
        <tr>
          <th height="40" colspan="8" class="first">&nbsp;&nbsp;
		  <span class="highlight">List of All registered FIR </span></th>
        </tr>
		<tr>
	 
	  </tr>
  <tr>
	<td colspan="8"><hr /></td>
	</tr>
        <tr>
          	<td width="7%" height="29" align="center"><span class="style4 tableHeading style2">Sr.No.</span></td>
			<td width="20%" align="center"><span class="style4">Whose FIR</span></td>
			<td width="14%" align="center"><span class="style4">City Name</span></td>
			<td width="13%" align="center"><span class="style4">Area Name</span></td>
			<td width="10%" align="center"><span class="style4">Id-Proof</span></td>
			<td width="13%" align="center"><span class="style4">Id-Proof No</span></td>
			<td width="12%" align="center"><span class="style4">Description</span></td>
			<td width="11%" align="center"><span class="style4">Forward</span></td>
        </tr>
	<tr>
	<td colspan="8"><hr /></td>
	</tr>
        <?php
	$i=1;
	while($record = mysqli_fetch_array($resultSet))
	{
	?>
	
	<tr>
		<td>
		<?php echo $i++; ?></td>
		<td align="center"><?php echo $record["first_name"];?></td>
		<td align="center"><?php echo $record["city_name"];?></td>
		<td align="center"><?php echo $record["area_name"];?></td>
		<td align="center"><?php echo $record["id_proof"];?></td>
		<td align="center"><?php echo $record["id_proof_no"];?></td>
		<td align="center"><?php echo $record["description"];?></td>
		<td align="center">&nbsp;<a style="text-decoration:none" href="PIforward.php?fir_id=<?php echo $record["reg_id"];?>">
		<img title="Edit City" src="images/forward.png"  /></a>
		</td>
	   
	<tr>
	  
	  </tr>
  
<?php
}
?>
</table>   </center>  
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
      <p>&nbsp;</p>
</div>

</p><div class="clear"></div>
	    <?php
	   include("footer1.php");
	   ?>
</div>
</div>