<?php



ob_start();
include("sessionHandler.php");

include("header2.php");
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
					and ps.policestation_id = $policestation_id";



$resultSet = mysqli_query($conn,$selectFIRQuery) or die(mysqli_error());
?>
<body id="body">

   <div class="main">

   
<?php
	   include("slider1.php");
	   ?>
      <div id="wrap">   
	  <?php
	   include("menu.php");
	   ?>
<?php
include("sidebar.php");
?>

<link rel="stylesheet" href="files/template.css" type="text/css">
<link rel="stylesheet" href="files/constant.css" type="text/css">
<div id="content">
  <div class="clear3">
        <!--left-->
		
	<div id="container" class="wrapper-container">
       <div class="corner-top-left">
       <div class="corner-top-right">
       <div class="corner-bottom-left">
       <div class="corner-bottom-right">

 
      <h2 class="componentheading"><em>View details of all registered FIR: </em></h2>
      <a href="PIforward.php"></a>
	  <?php // base64_decode($_GET['msg'])?></strong>
      <table width="102%">
        <tr>
          <th height="40" colspan="8" class="first">&nbsp;&nbsp;<img src="images/view.png" align="absbottom"/>
		  <span class="highlight">List of All registered FIR </span></th>
        </tr>
		<tr>
	 
	  </tr>
  
        <tr>
          	<td width="7%" height="29"><span class="style4 tableHeading style2">Sr.No.</span></td>
			<td width="20%"><span class="style4">Whose FIR</span></td>
			<td width="14%"><span class="style4">City Name</span></td>
			<td width="13%"><span class="style4">Area Name</span></td>
			<td width="10%"><span class="style4">Id-Proof</span></td>
			<td width="13%"><span class="style4">Id-Proof No</span></td>
			<td width="12%"><span class="style4">Description</span></td>
			<td width="11%"><span class="style4">Status</span></td>
        </tr>
        <?php
	$i=1;
	while($record = mysqli_fetch_array($resultSet))
	{
	?>
	
	<tr>
		<td>
		<?php echo $i++; ?></td>
		<td><?php echo $record["first_name"];?></td>
		<td><?php echo $record["city_name"];?></td>
		<td><?php echo $record["area_name"];?></td>
		<td><?php echo $record["id_proof"];?></td>
		<td><?php echo $record["id_proof_no"];?></td>
		<td><?php echo $record["description"];?></td>
		<td>&nbsp;<a href="givestatus.php?fir_id=<?php echo $record["reg_id"];?>">
		<img title="Edit City" src="images/forward.png"  /></a>
		</td>
	   
	<tr>
	  
	  </tr>
  
<?php
}
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
      <p>&nbsp;</p>
       </div>
       </div>
	     </div>
		   </div>
	</div>
	
	    <?php
	   include("footer1.php");
	   ?>
</div>
</div>
