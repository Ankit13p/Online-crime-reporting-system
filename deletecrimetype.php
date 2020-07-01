<?php
include("config.php");

$crimeid = $_GET['crimeid'];
$deleteUserQuery = "delete from mstr_crimetype where crime_id = '".$crimeid."'";

//echo $deleteUserQuery;
if(mysqli_query($conn,$deleteUserQuery))
{
	$msg = base64_encode("Deleted Successfully!");
	header("location:viewcrimetype.php?msg=$msg");
}
else
{
	$msg = base64_encode("Error: in deleting record");
	header("location:viewcrimetype.php?msg=$msg");
}
?>