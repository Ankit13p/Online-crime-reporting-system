<?php
include("config.php");
$desiname = $_POST['designation'];

$insertQuery = "insert into mstr_designation (desi_name) values ('".$desiname."')";

$msg = base64_encode("Inserted Successfully");
	
	if(mysqli_query($conn,$insertQuery)) 
      {	  
		header("location:viewdesignation.php?msg=$msg");	  
	   }
	else
	 {
		header("location:designation.php?msg=Not Inserted");
	  }
   
?>