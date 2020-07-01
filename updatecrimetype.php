<?php
include("config.php");

$crimeid = $_POST['crimeid'];
$newcrimetype = $_POST['newcrimetype'];
$newcrimedesc = $_POST['newcrimedesc'];

$updateQuery = "update mstr_crimetype set crime_type = '".$newcrimetype."' and description = '".$newcrimedesc."' 
                  where crime_id = '".$crimeid."' ";

if(mysqli_query($conn,$updateQuery))
{	
	$msg = ("Updated Successfully");
	header("location:viewcrimetype.php?msg=$msg");
}
else
{
	$msg = ("Not Updated");
	header("location:editcrimetype.php?msg=$msg");
}
?>
