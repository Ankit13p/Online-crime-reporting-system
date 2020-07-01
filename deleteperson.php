<?php
include("config.php");
$fname = $_REQUEST['first_name'];
$deleteUserQuery = "delete from mstr_missngcitizens where first_name = '".$fname."' ";

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