<?php
include("config.php");
$desiid = $_GET['desiid'];
$deleteUserQuery = "delete from mstr_designation where desi_id = '".$desiid."'";

//echo $deleteUserQuery;
if(mysqli_query($conn,$deleteUserQuery))
{
	$msg = base64_encode("Deleted Successfully!");
	header("location:viewdesignation.php?msg=$msg");
}
else
{
	$msg = base64_encode("Error: in deleting record");
	header("location:viewdesignation.php?msg=$msg");
}
?>