<?php
include("config.php");
$cityid = $_POST['cityid'];
$newcityname = $_POST['newcityname'];

$updateQuery = "update mstr_city set city_name = '".$newcityname."' where city_id = '".$cityid."' ";

if(mysqli_query($conn,$updateQuery))
{	
	$msg = ("Updated Successfully");
	header("location:viewcity.php?msg=$msg");
}
else
{
	$msg = ("Not Updated");
	header("location:editarea.php?msg=$msg");
}
?>
