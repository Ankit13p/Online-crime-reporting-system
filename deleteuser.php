<?php
include("config.php");
$uid = $_GET['uid'];
$deleteUserQuery = "delete from mstr_profile where id = '".$uid."' ";

//echo $deleteUserQuery;
if(mysqli_query($conn,$deleteUserQuery))
{
	$msg = base64_encode("Deleted Successfully!");
	header("location:manage_alluserprofile.php?msg=$msg");
}
else
{
	$msg = base64_encode("Error: in deleting record");
	header("location:manage_alluserprofile.php?msg=$msg");
}
?>