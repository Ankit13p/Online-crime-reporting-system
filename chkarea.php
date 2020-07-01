<?php
include("config.php");

$areaname = $_POST['area'];
$city = $_POST['city'];
$pincode=$_POST['pincode'];
$insertQuery = "insert into mstr_area(area_name,pincode,city_id) values ('".$areaname."','".$pincode."','".$city."') ";

//echo $insertQuery;
$msg = base64_encode("Inserted Successfully");
	
	if(mysqli_query($conn,$insertQuery)) 
 {
	header("location:viewarea.php?msg=$msg");	  
}
	else
	 {
		header("location:area.php?msg=Not Inserted");
	  }

?>