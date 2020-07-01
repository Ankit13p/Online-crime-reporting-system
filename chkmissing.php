<?php 
session_start();
include("config.php");
$firstname = $_POST['fname'];
$middlename = $_POST['mname'];
$lastname = $_POST['lname'];

$date = $_POST['bdate'];
$m = substr($date,0,2);
$d = substr($date,3,2);
$y = substr($date,6,4);
$date =  $y."-".$m."-".$d;

$time2 = $_POST['time2'];
$gender = $_POST['gender'];
$address =$_POST['address'];
$areaname = $_POST['area'];
$city =$_POST['city'];

$contactno = $_POST['contactno'];

$missingdesc=$_POST['missingdesc'];
$specialclue=$_POST['clue'];
$photo =  "upload/".$_FILES['photo']['name'];


if(move_uploaded_file($_FILES['photo']['tmp_name'],$photo))  
 {
 
 	
    $insertQuery = "INSERT INTO `mstr_missingcitizens`(`upload_photo`, `first_name`, `middle_name`, `last_name`, `gander`, `address`, `city_id`, `area_id`, `date_of_missing`, `time_of_missing`, `special_clue`, `contactno`, `descript`, `username`) VALUES ('".$photo."','".$firstname."','".$middlename."','".$lastname."','".$gender."','".$address."','".$city."','".$areaname."','".$date."','".$time2."','".$specialclue."','".$contactno."','".$missingdesc."','".$_SESSION['username']."')";
	  $msg = base64_encode("Registered Successfully");
	//echo "$insertQuery";
	  if(mysqli_query($conn,$insertQuery))
	  {
		header("location:home.php?msg=$msg");	  
	   }
	  else
	   {
		header("location:missing_citizen.php?msg=Not Registered");
	    }
  }
else
{
echo "Error in uploading photo";
}
?>