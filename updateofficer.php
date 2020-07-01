<?php 
//session_start();
include("config.php");
$firstname = $_POST['fname'];
$middlename = $_POST['mname'];
$lastname = $_POST['lname'];
$gender = $_POST['gender'];
$address =$_POST['address'];
$pincode = $_POST['pincode'];
$contactno = $_POST['contactno'];
$emailid= $_POST['emailid'];
$city =$_POST['city'];
$area=$_POST['area'];

$jdate = $_POST['Jdate'];
$m = substr($jdate,0,2);
$d = substr($jdate,3,2);
$y = substr($jdate,6,4);
$jdate =  $y."-".$m."-".$d;

$ldate= $_POST['Ldate'];
$m = substr($ldate,0,2);
$d = substr($ldate,3,2);
$y = substr($ldate,6,4);
$ldate =  $y."-".$m."-".$d;

$psname =$_POST['psname'];
$designation = $_POST['designation'];
$uname=$_POST['uname'];
$password=$_POST['password'];
$rpassword=$_POST['rpassword'];

$updateloginQuery = "update mstr_login set  password = '".$password."' where username = '".$uname."'";

$updateQuery = "update mstr_officer set  Jdate = '".$jdate."',
Ldate = '".$ldate."',desi_id = '".$designation."',policestation_id = '".$psname."' where username = '".$uname."' ";

$updateQuery1 = "update mstr_profile set  first_name = '".$firstname."', middle_name = '".$middlename."', 
last_name = '".$lastname."', gender = '".$gender ."', contact_no = '".$contactno."', emailid = '".$emailid."', 
city_id = '".$city ."', pincode = '".$pincode."'  where username = '".$uname."' ";

    mysqli_query($conn,$updateloginQuery) or die("Error in login entry values");
	mysqli_query($conn,$updateQuery) or die("error in insert updation");
	mysqli_query($conn,$updateQuery1) or die ("error");
if(mysqli_query($conn,$updateQuery1))
{	
	$msg = base64_encode("Updated Successfully");
	header("location:viewofficer.php?msg=$msg");
}
else

{
	$msg = base64_encode("Not Updated");
	header("location:updateofficer.php?msg=$msg");
}
?>
