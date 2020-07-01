<?php
include("config.php");
$cityid = $_GET['cityid'];
$deleteUserQuery = "delete from mstr_city where city_id = '".$cityid."'";

//echo $deleteUserQuery;
if(mysqli_query($conn,$deleteUserQuery))
{
	$msg = base64_encode("Deleted Successfully!");
	header("location:viewcity.php?msg=$msg");
}
else
{
	$msg = base64_encode("Error: in deleting record");
	header("location:viewcity.php?msg=$msg");
}
?>