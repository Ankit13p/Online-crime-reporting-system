<?php
session_start();
include("config.php");
$firstname = $_POST['fname'];
$middlename = $_POST['mname'];
$lastname = $_POST['lname'];
$gender = $_POST['gender'];

$bdate = $_POST['bdate'];
$y = substr($bdate,0,4);
$m = substr($bdate,5,2);
$d = substr($bdate,8,2);
$bdate =  $y."-".$m."-".$d;

$address =$_POST['address'];
$contactno = $_POST['contactno'];
$pincode = $_POST['pincode'];
$emailid= $_POST['emailid'];
$profilephoto =  "upload/".$_FILES['photo']['name'];
$city =$_POST['city'];
$area=$_POST['area'];
//$username=$_POST['username'];
$username=$_POST['loginname'];
$password=$_POST['password'];
$rpassword=$_POST['rpassword'];

if($password == $rpassword)
{
 if(move_uploaded_file($_FILES['photo']['tmp_name'],$profilephoto))
   {
   
   										  
	$insertloginQuery = "insert into mstr_login(username,password,type,last_logindatetime) 
	                                   values ('".$username."','".$password."','User',now())";
   
	$insertQuery = "insert into mstr_profile(first_name,middle_name,last_name,gender,Dob,address,
	                                       contact_no,emailid,profile_photo,username,city_id,area_id,pincode)
											values('".$firstname."','".$middlename."','".$lastname."',
									               '".$gender."','".$bdate."','".$address."',
											      '".$contactno."','".$emailid."','".$profilephoto."',
									               '".$username."','".$city."','".$area."','".$pincode."' )";
	
	$sql1 = "select username from mstr_login where username = '$username'";
    $result1 = mysqli_query($conn,$sql1) or die ("Couldn't execute query.");										  
    
	$num1=mysqli_num_rows($result1);
	
	if($num1 == 1)
	{
		header("location:regpage.php?msg=Sorry, UserName already Exist !");
	}
	else
	{
		$msg = base64_encode("Registered Successfully");
		
		if((mysqli_query($conn,$insertloginQuery)) && (mysqli_query($conn,$insertQuery)))
		  {
			$type=User;
			$_SESSION['username']=$username;
			$_SESSION['type']=$type;
			
			header("location:index.php?msg=$msg");	  
		   }
		else
		 {
			header("location:regpage.php?msg=Not Registered");
		  }
       }
	 }  
  else
  {
    echo "Error in uploading photo";
   }
 }  
else
 {
   echo "Error:Password missmatch";
  }
?>