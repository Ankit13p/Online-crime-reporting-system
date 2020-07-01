<?php
include("config.php");
$psid = $_GET['psid'];
$deleteUserQuery = "delete from mstr_policestation where poilcestation_id = '".$psid."' ";

//echo $deleteUserQuery;
if(mysqli_query($conn,$deleteUserQuery))
{
	$msg = base64_encode("Deleted Successfully!");
	header("location:viewpolice.php?msg=$msg");
}
else
{
	$msg = base64_encode("Error: in deleting record");
	header("location:viewpolice.php?msg=$msg");
}
?>