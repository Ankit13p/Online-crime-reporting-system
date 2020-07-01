<?php
include("config.php");
$desiid = $_POST['desiid'];
$newdesiname = $_POST['newdesignation'];

$updateQuery = "update mstr_designation set desi_name = '".$newdesiname."' where desi_id='".$desiid."' ";

if(mysqli_query($conn,$updateQuery))
{	
	$msg = ("Updated Successfully");
	header("location:viewdesignation.php?msg=$msg");
}
else
{
	$msg = ("Not Updated");
	header("location:editdesignation.php?msg=$msg");
}
?>
