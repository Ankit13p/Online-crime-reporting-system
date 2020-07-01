<?php
include("config.php");
$areaid = $_GET['areaid'];
$deleteUserQuery = "delete from mstr_area where area_id = '".$areaid."' ";

//echo $deleteUserQuery;
if(mysqli_query($conn,$deleteUserQuery))
{
	$msg = base64_encode("Deleted Successfully!");
	header("location:viewarea.php?msg=$msg");
}
else
{
	$msg = base64_encode("Error: in deleting record");
	header("location:viewarea.php?msg=$msg");
}
?>