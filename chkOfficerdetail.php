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
$pincode = $_POST['pincode'];

$jdate = $_POST['jdate'];
$m = substr($jdate,0,2);
$d = substr($jdate,3,2);
$y = substr($jdate,6,4);
$jdate =  $y."-".$m."-".$d;

$ldate= $_POST['ldate'];
$m = substr($ldate,0,2);
$d = substr($ldate,3,2);
$y = substr($ldate,6,4);
$ldate =  $y."-".$m."-".$d;

$pstationname =$_POST['psname'];
$designation = $_POST['designation'];
$username=$_POST['loginname'];
$password=$_POST['password'];
$rpassword=$_POST['rpassword'];

 if($password == $rpassword)
 {
	$insertloginQuery = "insert into mstr_login(username,password,type) 
	                                   values ('".$username."','".$password."','Police Officer')";
									   
	$insertQuery = "insert into mstr_profile(first_name,middle_name,last_name,gender,address,
	                                         contact_no,emailid,username,city_id,area_id,pincode) 
		                              values ('".$firstname."','".$middlename."','".$lastname."',
									          '".$gender."','".$address."','".$contactno."',
											  '".$emailid."','".$username."',
											  '".$city."','".$area."','".$pincode."' )";	
									   	
	$insertOfficer = "insert into mstr_officer(username,Jdate,Ldate,desi_id,policestation_id)
	                                   values('".$username."','".$jdate."','".$ldate."',
									   '".$designation."','".$pstationname."')";
    
	
	$msg = ("Registered Successfully");
	//echo "$insertloginQuery";
	//echo "$insertQuery";
	//echo "$insertOfficer";
	mysqli_query($conn,$insertloginQuery) or die("Error in login entry values");
	mysqli_query($conn,$insertQuery) or die("error in insert record");
	
	if(mysqli_query($conn,$insertOfficer))
	{
		  header("location:viewofficer.php?msg=$msg");	  
	 }
	else
	 {
		header("location:officerdetail.php?msg=Not Registered");
	 }
 }
 else
 {
   echo "Error:Password missmatch";
  }
?>