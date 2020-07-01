<?php 
ob_start();
include("sessionHandler.php");
include("sidebar.php");
include("header.php");
include("config.php");

$status=$_REQUEST['status'];


$updateQuery1 = "update mstr_missingcitizens set  status='".$status."'";

    
if(mysqli_query($conn,$updateQuery1))
{	
	$msg = base64_encode("Updated Successfully");
	header("location:manage_missingcitizens.php?msg=$msg");
}
else
{
	$msg = base64_encode("Not Updated");
	header("location:updateperson.php?msg=$msg");
}
?>
