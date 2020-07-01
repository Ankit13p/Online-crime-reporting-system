<?php
//session_start();
include("sessionHandler.php");
include("config.php");
$firstname = $_POST['fname'];
$middlename = $_POST['mname'];
$lastname = $_POST['lname'];
$gender = $_POST['gender'];

$bdate = $_POST['bdate'];
$m = substr($bdate,0,2);
$d = substr($bdate,3,2);
$y = substr($bdate,6,4);
$bdate =  $y."-".$m."-".$d;

$address =$_POST['address'];
$contactno = $_POST['contactno'];
$pincode = $_POST['pincode'];
$emailid= $_POST['emailid'];
$profilephoto =  "upload/".$_FILES['photo']['name'];
$city =$_POST['city'];
$area=$_POST['area'];
$uname=$_POST['uname'];
$password=$_POST['password'];


$insertloginQuery = "insert into mstr_login(username,password) 
	                                   values ('".$uname."','".$password."')";
   
$insertQuery = "insert into mstr_profile(first_name,middle_name,last_name,gender,Dob,address,
	                                       contact_no,emailid,profile_photo,username,city_id,area_id,pincode)
											values('".$firstname."','".$middlename."','".$lastname."',
									               '".$gender."','".$bdate."','".$address."',
											      '".$contactno."','".$emailid."','".$profilephoto."',
									               '".$uname."','".$city."','".$area."','".$pincode."' )";
											  
   
	$msg = base64_encode("Inserted Successfully");
	//echo $insertloginQuery;
	//echo $insertQuery;
	if(mysqli_query($conn,$insertloginQuery) && (mysqli_query($conn,$insertQuery)))
	  {
	   
		header("location:manage_alluserprofile.php?msg=$msg");	  
	   }
	else
	 {
		header("location:profile.php?msg=Not Inserted");
	  }

?>