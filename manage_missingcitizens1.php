<?php
include("sessionHandler.php");
include("config.php");
//$username=$_SESSION['username'];
$selectQuery = "select * from mstr_missingcitizens m1, mstr_policestation ps, mstr_designation md, mstr_officer mo, mstr_area ma,mstr_city mc where m1.area_id = ps.area_id and mo.policestation_id = ps.policestation_id and md.desi_id = mo.desi_id and md.desi_name = 'PI'  and ma.area_id = m1.area_id and mc.city_id = ma.city_id and m1.status=0";

$resultSet = mysqli_query($conn,$selectQuery) or die(mysqli_error());
//echo $selectQuery;
?>

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
					 <h1> missing citizen detail </h1>
					  </h2>
					  <p>&nbsp;
					  </p>
						<center>
					  <table width="100%" border="1" bgcolor="#FFFFFF">
						<tr>
							<td colspan="8" height="49" align="center" valign="middle" class="rowBorder">&nbsp;&nbsp;&nbsp;&nbsp;
						<span class="highlight"> View missing citizen </span>
							</td>
						</tr>
						<tr>
							<td colspan="8"><hr />
							</td>
						</tr>
						<tr>
							<td width="12%" align="center" class="style4 tableHeading style2">Sr. No.</td>
							<td width="28%" class="style4 tableHeading style2">&nbsp;person Name</td>      
							<td width="32%" class="style4 tableHeading style2">Gender</td>
							<td width="32%" class="style4 tableHeading style2">Address</td>
							<td width="32%" class="style4 tableHeading style2">&nbsp;City</td>
							<td width="32%" class="style4 tableHeading style2">&nbsp;&nbsp;Area</td>	  
							<td width="32%" class="style4 tableHeading style2">&nbsp;&nbsp;Date of Missing</td>	  
							<td width="11%"><span class="style4">Forward</span></td>
						<tr>
						<td colspan="8"><hr /></td>
						</tr>
					<?php
					$i = 1;
					while($record=mysqli_fetch_array($resultSet))
					{
					?>
					<tr>
					  <td align="center" ><?php echo $i++; ?></td>
					  <td align="left" >&nbsp;&nbsp;<?php echo $record["first_name"];?></td>      
					  <td align="left" >&nbsp;&nbsp;<?php echo $record["gander"];?></td>
					  <td align="left" >&nbsp;&nbsp;<?php echo $record["address"];?></td>      
					  <td align="left" >&nbsp;&nbsp;<?php echo $record["city_name"];?></td>
					  <td align="left" >&nbsp;&nbsp;<?php echo $record["area_name"];?></td>      
					  <td align="left" >&nbsp;&nbsp;<?php echo $record["date_of_missing"];?></td>      
					  <td align="center" ><a href="PIforward1.php?m_id=<?php echo $record["missing_id"];?>">
					  <img title="Edit missing person" src="images/forward.png"  /> </a></td> 
					</tr>
					</tr>
					
					<?php
					}//while closed	
					?>
					
				  	</table>
					  <p>&nbsp;</p>
					  <p>&nbsp;</p>
					  <p>&nbsp;</p>
					  
					  </center>
		</div>

</p><div class="clear"></div>
	    <?php
	   include("footer1.php");
	   ?>
</div>
</div>
</div>

