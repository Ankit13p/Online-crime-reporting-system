<?php
include("sessionHandler.php");
include("config.php");
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

    <form id="form1" name="form1" method="post" action="">

 
      <h1>View Details of policestation</h1>  
      <p><a href="policestationdetail.php"> <h3> Add policestation</h3></a> 
          
        </strong></p>
<center>
      <table width="100%" border="1">
<tr>
<td colspan="7"><hr /></td>
</tr>
        <tr>
          <th height="38" colspan="7" align="left" class="first"><span class="rowBorder">&nbsp;<span class="highlight">&nbsp; 
          View Officer Details <?php
            
         $cn = mysqli_connect("localhost","root","");
mysqli_select_db($cn,"crs") or die("Error in selecting database");
$result = mysqli_query($cn,"SELECT city_name FROM mstr_city");
?>
 Select City:
          <select name="city" id="city">
          <option value="null">NULL</option>
          
<?php
$i=1;
while($row = mysqli_fetch_array($result)) {
?>
<option value="<?php $row["city_name"];?>"> <?php echo $row["city_name"];?></option>
<?php
$i++;
}
//echo $_POST[city];
?>
</select>

          </span></span>            <span class="rowBorder"><span class="highlight">
<?php
//echo $_POST[city];

?>
 
          
            <input type="submit" name="submit" id="submit" value="Submit" onClick="" />
            </span></span></th>
            <?php

$selectAllUserQuery = "select *from mstr_policestation mp,mstr_area a where a.area_id = mp.area_id";
$resultSet = mysqli_query($conn,$selectAllUserQuery) or die(mysqli_error());

    

			
			?>
			
        </tr>
        <tr>
          		<td width="5%" height="23"><span class="style4 tableHeading style2">&nbsp;Sr.No.</span></td>
			<td width="15%"><span class="style4 tableHeading style2">Policestation Name</span></td>
			<td width="10%"><span class="style4 tableHeading style2">Area Name</span>	</td>
			<td width="21%"><span class="style4 tableHeading style2">Address</span></td>
			<td width="11%"><span class="style4 tableHeading style2">Pincode</span></td>
			<td width="7%"><span class="style4 tableHeading style2">Edit</span></td>
			<td width="7%"><span class="style4 tableHeading style2">Delete</span></td>
        </tr>
<?php        if(isset($_POST['submit']))
			{

$c = mysqli_connect("localhost","root","");
mysqli_select_db($c,"crs") or die("Error in selecting database");
if($_POST['city']!=="null")
{
$q= "select * from mstr_policestation mo,mstr_area md,mstr_city mp where mo.area_id=md.area_id and mo.city_id=mp.city_id and mp.city_name='$_POST[city]'";
	
}

else
{
$q="select *from mstr_policestation mp,mstr_area a where a.area_id = mp.area_id";
	
}
$result=mysqli_query($c,$q);

$i=1;

	while($record = mysqli_fetch_array($result))
	{
		?>
        
<tr>

		<td><?php echo $i++; ?></td>
		<td><?php echo $record["policestation_name"];?></td>
		<td><?php echo $record["area_name"];?></td>
		<td><?php echo $record["address"];?></td>
		<td><?php echo $record["pincode"];?></td>
		<td><a href="editpolicestation1.php?psid=<?php echo $record["policestation_id"];?>">
		<img title="Edit Police Station Details" src="images/edit.png"  /></a>
		</td>
	    <td><a href="deletepolicestation.php?psid=<?php echo $record["policestation_id"];?>">
		<img title="Delete Police Station Details" src="images/delete.png" /></a></td>
  </tr>
  <tr>
	  <td colspan="7"></td>
	  </tr>
  
<?php
}

			}
?>


<tr>
<td colspan="7"><hr /></td>
</tr>
        <?php
	$i=1;

	while($record = mysqli_fetch_array($resultSet))
	{

	?>

    <tr>
   
	</tr>
    <tr>
    	<td>&nbsp;&nbsp;&nbsp;&nbsp;

		
         
		<?php echo $i++; ?></td>
		<td><?php echo $record["policestation_name"];?></td>
		<td><?php echo $record["area_name"];?></td>
		<td><?php echo $record["address"];?></td>
		<td><?php echo $record["pincode"];?></td>
		<td><a href="editpolicestation1.php?psid=<?php echo $record["policestation_id"];?>">
		<img title="Edit crime type" src="images/edit.png"  /></a>
		</td>
	    <td><a href="deletepolicestation.php?psid=<?php echo $record["policestation_id"];?>">
		<img title="Delete crime type Details" src="images/delete.png" /></a></td>
  </tr>
  
<?php
}

?>
</table> </center>
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

