<?php
include("config.php");
$cityname = $_POST['city'];

$insertQuery = "insert into mstr_city (city_name) values ('".$cityname."')";

$msg = base64_encode("Inserted Successfully");
	
	if(mysqli_query($conn,$insertQuery)) 
      {	  
		header("location:viewcity.php?msg=$msg");	  
	   }
	else
	 {
		header("location:city.php?msg=Not Inserted");
	  }
   
?>