<?php 
//session_start();
include("config.php");
include("sessionHandler.php");
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
//$username=$_POST['username'];
$username=$_POST['uname'];
$password=$_POST['password'];
$rpassword=$_POST['rpassword'];

if($password == $rpassword)
{
 if(move_uploaded_file($_FILES['photo']['tmp_name'],$profilephoto))
   {
$updateloginQuery = "update mstr_login set  password = '".$password."' where username = '".$username."'";



$updateQuery1 = "update mstr_profile set  first_name = '".$firstname."', middle_name = '".$middlename."', 
last_name = '".$lastname."', gender = '".$gender ."', contact_no = '".$contactno."', emailid = '".$emailid."', profile_photo='".$profilephoto."',
city_id = '".$city ."', pincode = '".$pincode."'  where username = '".$username."' ";

  // echo $updateloginQuery;
  // echo $updateQuery1;
	if(mysqli_query($conn,$updateloginQuery) && (mysqli_query($conn,$updateQuery1)))
		{	
	$_SESSION['username']=$username;
	$msg = ("Updated Successfully");
	header("location:home.php?msg=$msg");
		}
	else

		{
	$msg = ("Not Updated");
	header("location:updateprofile1.php?msg=$msg");
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
