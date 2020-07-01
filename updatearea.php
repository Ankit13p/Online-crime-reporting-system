<?php
include("config.php");
$areaid = $_POST['areaid'];
$newareaname = $_POST['newareaname'];

$updateQuery = "update mstr_area set area_name = '".$newareaname."' where area_id = '".$areaid."' ";

if(mysqli_query($conn,$updateQuery))
{	
	$msg = ("Updated Successfully");
	header("location:viewarea.php?msg=$msg");
}
else
{
	$msg = ("Not Updated");
	header("location:editcity.php?msg=$msg");
}
?>
