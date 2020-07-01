<?php
//session_start();
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
	      <label for="designation"></label>

      <h1>View Details of Officers:</h1>  
      <p><a href="officerdetail.php"><h3> &nbsp;Add Officer</h3></a> 
          
        </strong></p>
<center>
      <table width="100%" border="1">
      <tr>
	<td colspan="8"></td>
	</tr>  
	<tr>
          <th height="38" colspan="8" align="left" class="first"><span class="rowBorder">&nbsp;<span class="highlight">&nbsp; 
          View Officer Details :
<?php
            
       $cn = mysqli_connect("localhost","root","");
mysqli_select_db($cn,"crs") or die("Error in selecting database");
$result = mysqli_query($cn,"SELECT desi_name FROM mstr_designation");
?>
 Select Designation:
          <select name="designation" id="designation">
          <option value="null">NULL</option>
          
<?php
$i=1;
while($row = mysqli_fetch_array($result)) {
?>
<option value="<?php $row["desi_name"];?>"><?php echo $row["desi_name"];?></option>
<?php
$i++;
}
?>
</select>
          </span></span><span class="rowBorder"><span class="highlight">
<?php
mysqli_close($cn);
?>
          <?php
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"crs") or die("Error in selecting database");
$result = mysqli_query($con,"SELECT * FROM mstr_policestation");
?>
 Select Policetation:
          <select name="pstation" id="pstation">
          <option value="null">NULL</option>
  <?php
while($row = mysqli_fetch_array($result)) {
?>
  <option value=" <?php $row["policestation_name"];?> "><?php echo $row["policestation_name"];?></option>
  <?php
}
?>
</select>
          
            <input type="submit" name="submit" id="submit" value="Submit" onClick="" />
            </span></span></th>
            <?php
$selectAllUserQuery = "select * from mstr_officer mo,mstr_designation md,mstr_policestation mp where mo.policestation_id=mp.policestation_id and mo.desi_id=md.desi_id";
$resultSet = mysqli_query($conn,$selectAllUserQuery) or die(mysqli_error());?>
	<tr>
	<td colspan="8"><hr /></td>
	</tr>		
        </tr>
        <tr>
          	<td width="9%" height="37" align="center"><span class="style4 tableHeading style2">&nbsp;Sr.No.</span></td>
			<td width="15%" align="center"><span class="style4 tableHeading style2">User Name </span></td>
			<td width="12%" align="center"><span class="style4 tableHeading style2">Join Date </span>	</td>
			<td width="11%" align="center"><span class="style4 tableHeading style2">Last Date </span></td>
			<td width="20%" align="center"><span class="style4 tableHeading style2">Policestation Name</span></td>
			<td width="10%" align="center"><span class="style4 tableHeading style2">Designation Name </span></td>
			<td width="6%" align="center"><span class="style4 tableHeading style2">Edit </span></td>
			<td width="7%" align="center"><span class="style4 tableHeading style2">Delete </span></td>
        </tr>
<?php        if(isset($_POST['submit']))
			{

$c = mysqli_connect("localhost","root","");
mysqli_select_db($c,"crs") or die("Error in selecting database");
if($_POST['designation']=="null")
{
$q="select * from mstr_officer mo,mstr_designation md,mstr_policestation mp where mo.policestation_id=mp.policestation_id and mo.desi_id=md.desi_id and mp.policestation_name='$_POST[pstation]'";
	
}
else if($_POST['pstation']=="null"){
$q="select * from mstr_officer mo,mstr_designation md,mstr_policestation mp where mo.plilcestation_id=mp.policestation_id and mo.desi_id=md.desi_id and md.desi_name='$_POST[designation]'";
echo $q;
}
else
{
$q="select * from mstr_officer mo,mstr_designation md,mstr_policestation mp where mo.policestation_id=mp.policestation_id and mo.desi_id=md.desi_id and md.desi_name='$_POST[designation]' and mp.policestation_name='$_POST[pstation]'";
	
}
$result=mysqli_query($c,$q);

$i=1;

	while($record = mysqli_fetch_array($result))
	{
		?>
        
<tr>

		<td>&nbsp;&nbsp;&nbsp;&nbsp;
		<?php echo $i++;?></td>
		<td align="center"><?php echo $record["username"];?></td>
		<td align="center"><?php echo $record["Jdate"];?></td>
		<td align="center"><?php echo $record["Ldate"];?></td>
		<td align="center"><?php echo $record["policestation_name"];?></td>
		<td align="center"><?php echo $record["desi_name"];?></td>
		<td align="center"><a href="editofficer1.php?username=<?php echo $record["username"];?>"><img title="Edit Police Station Details" src="images/edit.png"  /></a></td>
	    <td align="center"><a href="deleteofficer.php?username=<?php echo $record["username"];?>"> <img title="Delete Police Station Details" src="images/delete.png" /></a></td>
  </tr>
<?php
}

			}
?>


<tr>
<td colspan="8"><hr /></td>
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

		<?php echo $i++;?></td>
         
		<td align="center"><?php echo $record["username"];?></td>
		<td align="center"><?php echo $record["Jdate"];?></td>
		<td align="center"><?php echo $record["Ldate"];?></td>
		<td align="center"><?php echo $record["policestation_name"];?></td>
		<td align="center"><?php echo $record["desi_name"];?></td>
		<td align="center"><a href="editofficer1.php?username=<?php echo $record["username"];?>"><img title="Edit Police Station Details" src="images/edit.png"  /></a></td>
	    <td align="center"><a href="deleteofficer.php?username=<?php echo $record["username"];?>"> <img title="Delete Police Station Details" src="images/delete.png" /></a></td>
  </tr>
  
<?php
}
mysqli_close($con);
?>
</table> </center>
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
      
   

</p>
</form>
</div>

</p><div class="clear"></div>
	    <?php
	   include("footer1.php");
	   ?>
</div>
</div>