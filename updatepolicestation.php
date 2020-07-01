<?php
 include("config.php");
 $psid=$_POST['psid'];
$pstationname = $_POST['psname'];
$areaname = $_POST['area'];
$address =$_POST['address'];

$contactno = $_POST['contactno'];
$emailid= $_POST['emailid'];
$city =$_POST['city'];

$contactperson =$_POST['contactperson'];


$updateQuery = "update mstr_policestation set policestation_name = '".$pstationname."',
area_id = '".$areaname."',address = '".$address."',contact_no = '".$contactno."',
Email_id = '".$emailid."',contact_person = '".$contactperson."',city_id = '".$city."' 
where poilcestation_id = '".$psid."' " ;


//echo $updateQuery;


if(mysqli_query($conn,$updateQuery))
{	
	$msg = base64_encode("Updated Successfully");
	header("location:viewpolice.php?msg=$msg");
}
else
{
	$msg = base64_encode("Not Updated");
	header("location:updatepolecestation.php?msg=$msg");
}
?>